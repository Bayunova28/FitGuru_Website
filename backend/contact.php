<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        
        header("Location: \backend\indexutama.php#contact");
        $_SESSION['success']="Your message has been sent";
	    exit();
        }else {
            
            header("Location: \backend\indexutama.php#contact");
            $_SESSION['error']="Unknown error occurred";
            exit();
        }
	
}else{
	header("Location: \backend\index.php");
	exit();
}