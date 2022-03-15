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
            <li>
                <a class="nav-link scrollto" href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php">Home</a>
            </li>
                <a href="http://prak11billy2-com.preview-domain.com/backend/update.php" class="btn-get-started scrollto">
				    <?php echo $username ?>
			    </a>
                <a href="http://prak11billy2-com.preview-domain.com/backend/login.php">
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
        <a href="#powerlifting" class="btn-get-started scrollto">Get Started</a>
    </div>
</section>
<!-- End Hero Section -->

<!-- TUTORIAL -->
<section id="powerlifting" class="d-flex align-items-center justify-content-center">
    <div class="container-fluid">
        <div id="content" class="mx-auto tm-content-container">
            <main>
                <div class="container">
                    <div class="row">
                        <div class="section-title">
                            <h2>Power Lifting</h2>
                            
                            <br>
                            
                                <div class="tm-categories-container mb-5" style="justify-content: center; background-color: #f8f9fa;">
                                    <ul class="nav tm-category-list">
                                        <li class="nav-item tm-category-item">
                                        <a href="index.php" class="nav-link tm-category-link" style="color:  #ffc107; font-size: 24px;">All</a>
                                        </li>
                                        <li class="nav-item tm-category-item">
                                        <a href="yoga.php" class="nav-link tm-category-link" style="color:  #ffc107; font-size: 24px;">Yoga</a>
                                        </li>
                                        <li class="nav-item tm-category-item">
                                        <a href="cardio.php" class="nav-link tm-category-link" style="color:  #ffc107; font-size: 24px;">Cardio</a>
                                        </li>
                                        <li class="nav-item tm-category-item">
                                        <a href="bodybuilding.php" class="nav-link tm-category-link" style="color:  #ffc107; font-size: 24px;">Body Building</a>
                                        </li>
                                        <li class="nav-item tm-category-item">
                                        <a href="power_lifting.php" class="nav-link tm-category-link" style="color:  #ffc107; font-size: 24px;">Power Lifting</a>
                                        </li>
                                    </ul>
                                </div>        
                            </div>
                        </div>
            
            <div class="row tm-catalog-item-list">
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="assets/img/powerlifting.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                        <a href="powerlifting.php" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>    
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title" style="color: #ffc107;">POWERLIFTING FOR BEGINNERS - First Meet</h3>
                        <p class="tm-catalog-item-text" style="text-align: justify;">Video ini berisi tutorial untuk melakukan Power Lifting yang benar. Untuk mengetahui lebih lanjut, silahkan tonton video ini!</p>
                    </div>
                </div>
            </div>
        </main>

<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
function setVideoSize() {
    const vidWidth = 1920;
    const vidHeight = 1080;
    let windowWidth = window.innerWidth;
    let newVidWidth = windowWidth;
    let newVidHeight = windowWidth * vidHeight / vidWidth;
    let marginLeft = 0;
    let marginTop = 0;

    if (newVidHeight < 500) {
        newVidHeight = 500;
        newVidWidth = newVidHeight * vidWidth / vidHeight;
    }

    if(newVidWidth > windowWidth) {
        marginLeft = -((newVidWidth - windowWidth) / 2);
    }

    if(newVidHeight > 720) {
        marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
    }

    const tmVideo = $('#tm-video');

    tmVideo.css('width', newVidWidth);
    tmVideo.css('height', newVidHeight);
    tmVideo.css('margin-left', marginLeft);
    tmVideo.css('margin-top', marginTop);
}

$(document).ready(function () {
    /************** Video background *********/

    setVideoSize();

    // Set video background size based on window size
    let timeout;
    window.onresize = function () {
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
    };

    // Play/Pause button for video background      
    const btn = $("#tm-video-control-button");

    btn.on("click", function (e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
            video.play();
            $(this).addClass("fas fa-pause");
        } else {
            video.pause();
            $(this).addClass("fas fa-play");
        }
    });
})
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