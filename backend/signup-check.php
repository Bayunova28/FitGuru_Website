<?php 
session_start(); 
include "db_conn.php";


if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['weight'])&& isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$fullname = validate($_POST['fullname']);
	$email = validate($_POST['email']);
	$phone = validate($_POST['phone']);
	$address = validate($_POST['address']);
	$weight = validate($_POST['weight']);
	
	$user_data = 'username='. $username. '&fullname='. $fullname. '&email='. $email. '&phone='. $phone. '&address='. $address. '&weight='. $weight;

	if(empty($fullname)){
        header("Location: signup.php?error=Full Name is required&$user_data");
	    exit();
	}
	
	else if(empty($email)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}
	
	else if(empty($phone)){
        header("Location: signup.php?error=Phone is required&$user_data");
	    exit();
	}
	
	else if(empty($address)){
        header("Location: signup.php?error=Address is required&$user_data");
	    exit();
	}
	
	else if(empty($weight)){
        header("Location: signup.php?error=Weight is required&$user_data");
	    exit();
	}
	
	else if (empty($username)) {
		header("Location: signup.php?error=Username is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if($password !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

	    $sql = "SELECT * FROM users WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users (fullname, username, password, email, phone, address, weight) VALUES ('" . $fullname . "','" . $username . "','" . $password . "','" . $email . "','" . $phone . "','" . $address . "','" . $weight . "')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=Unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}