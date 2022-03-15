<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['weight'])) {
	
	$username = $_POST["username"];
	$fullname = $_POST["fullname"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$weight = $_POST["weight"];
	
	if ($_POST['action'] == 'Update') {

	$sql = "UPDATE users set fullname='$fullname', password = '$password', email = '$email', phone = '$phone', address = '$address', weight = '$weight' WHERE username='$username'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("Location: update.php?success=Your account has been updated successfully");
	    exit();
        }else {
	    header("Location: signup.php?error=Unknown error occurred");
		exit();
        }
	} else if ($_POST['action'] == 'Delete') {
        $sql = "DELETE FROM users WHERE username = '$username'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            header("Location: logout.php");
	        exit();
        }else {
	        header("Location: update.php?error=Unknown error occurred");
		    exit();
        }
    }
}else{
	header("Location: update.php");
	exit();
}


    

