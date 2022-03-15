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

	<link rel="stylesheet" href="assets/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
		<!-- https://fonts.google.com/ -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/templatemo-video-catalog.css">

	<title>Fit Guru </title>
	<meta content="" name="description">
	<meta content="" name="keywords">

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
	<link href="assets/css/style.css" rel="stylesheet">
	</head>
	
	<body>

<!-- ======= Header ======= -->
	<header id="header" class="fixed-top header-transparent">
		<div class="container d-flex align-items-center justify-content-between">

		<a href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php" class="logo"><img src="assets/img/Logo.png" alt="" class="img-fluid"></a>

		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="nav-link scrollto" href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php">Home</a></li>
				
				<li><a class="nav-link scrollto" href="http://prak11billy2-com.preview-domain.com/backend/tutorial/index.php">Tutorial</a></li>
        
            <a href="http://prak11billy2-com.preview-domain.com/backend/update.php" class="btn-get-started scrollto">
				<?php echo $username ?>
			</a>

            <a href="\backend\logout.php">
              <button type="button" class="btn btn-outline-warning" style="color: white;">Log Out</button>
            </a>
				
			</ul>
		</nav>
		</div>
	</header>
	<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="home" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
        <h1>Tutorial</h1>
        <h2>
            <i>- "It Takes Dedication and Hardwork to Constantly Improve Yourself" -</i>
        </h2>
        <a href="#pushup" class="btn-get-started scrollto">Get Started</a>
    </div>
</section>
<!-- End Home Section -->

		<!-- Page content -->
		<div class="container-fluid">
			<div class="mx-auto tm-content-container">
				<main>
					<div class="row mb-5 pb-4">
						<div class="col-12">
							<!-- Video player 1422x800 -->
							<video width="1422" height="800" controls autoplay>
								<source src="assets/video/Pushup1.mp4" type="video/mp4">							  
							Your browser does not support the video tag.
							</video>
						</div>
					</div>
					
				<section id="pushup" class="d-flex align-items-center justify-content-center"></section>
					<div class="row mb-5 pb-5">
						<div class="col-xl-8 col-lg-7">
							<!-- Video description -->
							<div class="tm-video-description-box">
								<h2 class="mb-5 tm-video-title">Push Up yang sempurna - Lakukan dengan benar!</h2>
								<p class="mb-4" style="text-align: justify;">Push up merupakan salah satu latihan olahraga yang berguna untuk membentuk tubuh. Gerakan push up ini bisa dilakukan sebagai latihan mandiri. Namun biasanya push up dikombinasikan dengan beberapa gerakan lain dalam satu sesi latihan.
                                </p>
                                <p class="mb-4" style="text-align: justify;">Selain dapat membentuk tubuh, gerakan push up juga dapat membangun kekuatan otot beberapa bagian tubuh dengan baik. Mulai dari tangan, perut, hingga kaki aktif bekerja saat melakukan latihan push up. Tidak heran, banyak orang melakukan push up untuk membentuk tubuh dan meningkatkan kekuatan otot dan tubuh secara keseluruhan.
                                </p>
							</div>							
						</div>
					
					<div class="col-xl-4 col-lg-5">
	            	<!-- Share box -->
		                <div class="tm-bg-gray tm-share-box">
			                <h6 class="tm-share-box-title mb-4" style="text-align: center;">Share this video</h6>
				                <div class="mb-5 d-flex justify-content-center">
					                <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-facebook"></i></a>
					                <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-twitter"></i></a>
					                <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-pinterest"></i></a>
					                <a href="" class="tm-bg-white tm-share-button "><i class="far fa-envelope"></i></a>
				                </div>
		               	   </div>
		               </div>
	                </div>
					
					<div class="row pt-4 pb-5">
		                <div class="col-12">
			                <div class="container">
                                <div class="section-title">
					                <h2 class="mb-5 tm-text-primary d-flex justify-content-center" style="color: #444444;">Related Videos for You</h2>
						            <div class="row tm-catalog-item-list">
						                
									<div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
										<div class="position-relative tm-thumbnail-container">
											<img src="assets/img/yoga.png" alt="Image" class="img-fluid tm-catalog-item-img">    
											<a href="yoga1.php" class="position-absolute tm-img-overlay">
												<i class="fas fa-play tm-overlay-icon"></i>
											</a>
										</div>    
										<div class="p-3 tm-catalog-item-description">
											<h3 class="tm-text-gray text-center tm-catalog-item-title" style="color: #ffc107;">WAJIB ! Yoga Sebelum Tidur - Yoga With Penyogastar</h3>		                                
										</div>
									</div>
									
									<div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
										<div class="position-relative tm-thumbnail-container">
											<img src="assets/img/bodybuilding.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
											<a href="bodybuilding.php" class="position-absolute tm-img-overlay">
												<i class="fas fa-play tm-overlay-icon"></i>
											</a>
										</div>                            
										<div class="p-3 tm-catalog-item-description">
											<h3 class="tm-text-gray text-center tm-catalog-item-title" style="color: #ffc107;">4 YEARS OF NATURAL BODYBUILDING // GYM MOTIVATION</h3>		                                
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
										<div class="position-relative tm-thumbnail-container">
											<img src="assets/img/powerlifting.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
											<a href="powerlifting.php" class="position-absolute tm-img-overlay">
												<i class="fas fa-play tm-overlay-icon"></i>
											</a>
										</div>    
										<div class="p-3 tm-catalog-item-description">
											<h3 class="tm-text-gray text-center tm-catalog-item-title" style="color: #ffc107;">POWERLIFTING FOR BEGINNERS - First Meet</h3>		                                
										</div>
									</div>
								</div>
						</div>
					</div>
				</main>


	<script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
			$(document).ready(function() {
				$('.tm-likes-box').click(function(e) {
					e.preventDefault();
					$(this).toggleClass('tm-liked');

					if($(this).hasClass('tm-liked')) {
						$('#tm-likes-count').html('486 likes');
					} else {
						$('#tm-likes-count').html('485 likes');
					}
				});
			});
    </script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>

<?php
}else{
	header("Location: \backend\index.php");
	exit();
}
?>