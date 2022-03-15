<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if ($uname == "admin" & $pass == "admin") {
	    $_SESSION['username'] = "admin";
		header("Location: admin\index.php");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	header("Location: indexutama.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect Username or Password, Please Try Again");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect Username or Password, Please Try Again");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}