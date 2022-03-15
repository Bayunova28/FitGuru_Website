<?php
session_start();

if (isset($_SESSION['username'])) {
    
    $username = $_SESSION['username'];
    
    //1. Koneksi DB / Kunci Gudang
    $dsn = "mysql:host=localhost;dbname=u958888159_fitguru"; // Data Source Name
    $kunci = new PDO($dsn, "u958888159_andrebilly", "Apaajadeh10.");

    //2. Query SQL / Surat Perintah Kerja (SPK)
    $sql = "SELECT * FROM users where username = '$username'";

    //3. Eksekusi SQL / Menjalankan SPK
    $hasil = $kunci->prepare($sql);
    $hasil->execute();
?>

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
	<?php
    while($data = $hasil->fetch()):
    ?>
<form action="update_proses.php" method="post" style = "padding:50px;">
    <img src="log_in/images/icons/Logo.png" style="display:block;margin-bottom: 30px; width:150px; height:150px">
    <h1 style = "margin-bottom:30px;">FitProfile</h1>
	<input class="input100" type="hidden" name="username" value = "<?= $data['username']; ?>">
	<label>Username</label>
    <div class="wrap-input100 validate-input" data-validate = "Valid username is required">
		<input class="input100" disabled type="text" name="userdisplay" value = "<?= $data['username']; ?>">
		<span class="focus-input100"></span>
	</div>
	<label>Fullname</label>
	<div class="wrap-input100 validate-input" data-validate = "Fullname is required">
		<input class="input100" type="text" name="fullname" value = "<?= $data['fullname']; ?>">
		<span class="focus-input100"></span>
	</div>
	<label>Email</label>
	<div class="wrap-input100 validate-input" data-validate = "Email is required">
		<input class="input100" type="text" name="email" value = "<?= $data['email']; ?>">
		<span class="focus-input100"></span>
	</div>
	<label>Phone</label>
	<div class="wrap-input100 validate-input" data-validate = "Phone is required">
		<input class="input100" type="tel" name="phone" value = "<?= $data['phone']; ?>">
		<span class="focus-input100"></span>
	</div>
	<label>Address</label>
	<div class="wrap-input100 validate-input" data-validate = "Address is required">
		<input class="input100" type="text" name="address" value = "<?= $data['address']; ?>">
		<span class="focus-input100"></span>
	</div>
	<label>Weight</label>
	<div class="wrap-input100 validate-input" data-validate = "Weight is required">
		<input class="input100" type="number" step = "any" name="weight" value = "<?= $data['weight']; ?>">
		<span class="focus-input100"></span>
	</div>
	<label>Password</label>
	<div class="wrap-input100 validate-input" data-validate = "Password is required">
		<input class="input100" type="password" name="password" value = "<?= $data['password']; ?>">
		<span class="focus-input100"></span>
	</div>
	<?php if (isset($_GET['success'])) { ?>
        <p class="success" style="color:green;text-align:center;"><?php echo $_GET['success']; ?></p>
    <?php } ?>
					
	<?php if (isset($_GET['error'])) { ?>
     	<p class="error" style="color:red;text-align:center;"><?php echo $_GET['error']; ?></p>
     <?php } ?>
     
     <div class="container-login100-form-btn">
         <button name = "action" class="login100-form-btn" type="submit" value = "Update" style ="margin-top: 20px;">Update</button>
         <button name = "action" class="login100-form-btn" type="submit" value = "Delete" style ="margin-top: 20px;">Delete Account</button>
     </div>
</form>

<form action="indexutama.php" style = "padding:50px;">
    <div class="container-login100-form-btn">
        <input type="submit" class="login100-form-btn" value="Back To Main Menu" />
    </div>
</form>
<?php endwhile; ?>

<?php
}else{
     header("Location: index.php");
     exit();
}
    
?>

