<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fit Guru</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="log_in/images/icons/Logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log_in/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log_in/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log_in/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log_in/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="log_in/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log_in/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log_in/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="log_in/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log_in/css/util.css">
	<link rel="stylesheet" type="text/css" href="log_in/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #66666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="login.php" method="post" class="login100-form validate-form">
					<img src="log_in/images/icons/Logo.png" style="display:block; margin-left: auto;margin-right:auto;margin-bottom: 30px; width:150px; height:150px">
					
     	            <div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					
					<?php if (isset($_GET['error'])) { ?>
     		        <p class="error" style="color:red;text-align:center;"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>

                    <div class="container-login100-form-btn">
     	            <button class="login100-form-btn" type="submit" style ="margin-top: 20px;">Login</button>
     	            </div>
					
					<div class="text-center p-t-46 p-b-20">
					    <a href="signup.php" class="txt2">Dont Have an Account? Sign Up</a>
					</div>
                    </form>
				</form>

				<div class="login100-more" style="background-image: url('log_in/images/bg-01.png');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="log_in/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="log_in/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="log_in/vendor/bootstrap/js/popper.js"></script>
	<script src="log_in/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="log_in/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="log_in/vendor/daterangepicker/moment.min.js"></script>
	<script src="log_in/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="log_in/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="log_in/js/main.js"></script>

</body>
</html>