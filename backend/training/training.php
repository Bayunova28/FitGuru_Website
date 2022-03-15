<?php
    session_start();
    
    if (isset ($_SESSION['username'])) {
        
    $username = $_SESSION['username'];
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FitGuru</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="freehtml5.co" />

  <!-- Favicons -->
  <link href="assets/img/Logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/training.css" rel="stylesheet">
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container d-flex align-items-center justify-content-between">
    <a href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php" class="logo"><img src="assets/img/Logo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar">
		    <ul>
          <li>
            <a class="nav-link scrollto" href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php">Home</a>
          </li>

            <a href="http://prak11billy2-com.preview-domain.com/backend/update.php" class="btn-get-started scrollto">
				    <?php echo $username ?>
			      </a>

            <a href="http://prak11billy2-com.preview-domain.com/backend/login.php">
              <button type="button" class="btn btn-outline-warning" style="color: white;">Log out</button>
            </a>
          </ul>
        </nav>
      </div>
    </header>
    <!-- ======= End Header ======= -->

  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Training Ground</h1>
      <h2><i>- "Your Body Can Stand Almost Anything, It's Your Mind That You Have To Convience." -</i></h2>
      <a href="#training" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- ======= End Home Section ======= -->

<!-- ======= Training Content Section ======= -->
<section id="training" class="d-flex align-items-center justify-content-center"></section>
    <div id="fh5co-services" class="fh5co-bg">
	    <div class="container">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
			    <div class="section-title">
				<h2>Training</h2>
				</div>
			</div>
		</div>
	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="assets/img/six-pack.png" alt=""></span>
						<h3>Body Building</h3>
					    <a href="http://prak11billy2-com.preview-domain.com/backend/training/body_building.php">
                        <button type="button" class="btn btn-warning" style="color: white;">More</button> 
                        </a>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="assets/img/gym.png" alt=""></span>
						<h3>Power Lifting</h3>
					    <a href="http://prak11billy2-com.preview-domain.com/backend/training/power_lifting.php">
                        <button type="button" class="btn btn-warning" style="color: white;">More</button> 
                        </a>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span>
						    <img class="img-responsive" src="assets/img/lotus.png" alt="">
						</span>
						<h3>Yoga</h3>
					    <a href="http://prak11billy2-com.preview-domain.com/backend/training/yoga.php">
                        <button type="button" class="btn btn-warning" style="color: white;">More</button> 
                        </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ======= End Training Content Section ======= -->

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>
</html>

<?php
}else{
	header("Location: \backend\index.php");
	exit();
}
?>