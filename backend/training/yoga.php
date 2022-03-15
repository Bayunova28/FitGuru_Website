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
  <link href="assets/css/yoga.css" rel="stylesheet">

</head>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php" class="logo"><img src="assets/img/Logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          
          
          <li style="margin-left: 190px;"><a class="nav-link scrollto" href="#"></a></li>
          
          <li><a class="nav-link scrollto" href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php">Home</a></li>
          <li><a class="nav-link scrollto" href="http://prak11billy2-com.preview-domain.com/backend/training/training.php">Training</a></li>
        
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

   <!-- ======= Home Section ======= -->
   <section id="home" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Training Ground</h1>
      <h2><i>- "Your Body Can Stand Almost Anything, It's Your Mind That You Have To Convience." -</i></h2>
      <a href="#yoga" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- ======= End Home Section ======= -->

  <section id="yoga" class="d-flex align-items-center justify-content-center"></section>
  <div id="fh5co-yoga" class="fh5co-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<h2>Yoga</h2>
			</div>
		</div>
  <div id="picture">
      <div class="content">
          <img src="assets/img/yoga.jpg">
      </div>
  </div>
  <div id="content">
      <div class="paragraph">
            <p>Yoga, an ancient practice and meditation, has become increasingly popular in today's busy society. For many people, yoga provides a retreat from their chaotic and busy lives. This is true whether you're practicing downward facing dog posture on a mat in your bedroom, in an ashram in India or even in New York City's Times Square. Yoga provides many other mental and physical benefits. Some of these extend to the kitchen table.</p>
            <br>
            <p class="bold">Types of Yoga</p>
            <p>There are many types of yoga. Hatha (a combination of many styles) is one of the most popular styles. It is a more physical type of yoga rather than a still, meditative form. Hatha yoga focuses on pranayamas (breath-controlled exercises). These are followed by a series of asanas (yoga postures), which end with savasana (a resting period).</p>
            <p>The goal during yoga practice is to challenge yourself physically, but not to feel overwhelmed. At this "edge," the focus is on your breath while your mind is accepting and calm.</p>
            <br>
            <p class="bold">A Better Body Image</p>
            <p>Yoga develops inner awareness. It focuses your attention on your body's abilities at the present moment. It helps develop breath and strength of mind and body. It's not about physical appearance.</p>
            <p>Yoga studios typically don't have mirrors. This is so people can focus their awareness inward rather than how a pose — or the people around them — looks. Surveys have found that those who practiced yoga were more aware of their bodies than people who didn't practice yoga. They were also more satisfied with and less critical of their bodies. For these reasons, yoga has become an integral part in the treatment of eating disorders and programs that promote positive body image and self-esteem.</p>
            <br>
            <p class="bold">Becoming a Mindful Eater</p>
            <p>Mindfulness refers to focusing your attention on what you are experiencing in the present moment without judging yourself.
            <p>Practicing yoga has been shown to increase mindfulness not just in class, but in other areas of a person's life.</p>
            <p>Researchers describe mindful eating as a nonjudgmental awareness of the physical and emotional sensations associated with eating. They developed a questionnaire to measure mindful eating using these behaviors:</p>
            <p>* Eating even when full (disinhibition)</p>
            <p>* Being aware of how food looks, tastes and smells</p>
            <p>* Eating in response to environmental cues, such as the sight or smell of food</p>
            <p>* Eating when sad or stressed (emotional eating)</p>
            <p>* Eating when distracted by other things</p>
        </div>
  </div>
  <br>
  <div id="divider">
    <img src="assets/img/divider.png">
</div>
<br>
	
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
	
<?php
}else{
	header("Location: \backend\index.php");
	exit();
}
?>