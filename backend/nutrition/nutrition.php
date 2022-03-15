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

  <title>Fit Guru </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
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

<body style="background-color: #fdfaf6;" >
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent" >
    <div class="container d-flex align-items-center justify-content-between" >
      <a href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php" class="logo"><img src="assets/img/Logo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php">Home</a></li>
            <a href="http://prak11billy2-com.preview-domain.com/backend/update.php" class="btn-get-started scrollto">
				<?php echo $username ?>
			</a>
            <a href="\backend\logout.php">
              <button type="button" class="btn btn-outline-warning" style="color: white;">Log out</button>
            </a>
          </ul>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="home" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Nutrition Consultant</h1>
      <h2><i>- "The First Wealth Is Health" -</i></h2>
      <a href="#nutrition" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->


  <!-- Content Section -->

  <!-- Main Content -->
<section id="nutrition" class="d-flex align-items-center justify-content-center"></section>
  <div class= "isicontent clearfix"   >
    <div class="main-content">
      <h1 class="recent-post-title" style="color:grey" id="blur" >Nutrition Consultant</h1>

      <div class= "post">
        <img src="assets\img\nutrifacts.jpg" alt="" class="post-image">
        <div class="post-preview">
          <h2><ab href="#" style="color:grey"><strong>Position of The Society for Nutrition Education and Behavior</strong></ab></h2>
         <i class="far fa-user">Donald Rose,Ph.D. </i>
         &nbsp;
         <i class="far calendar">Februari, 20211</i>
         <p class="preview-text">
          It is the position of the Society for Nutrition Education and Behavior that environmental sustainability should be inherent in dietary guidance.
         </p>

<a href="article1.php" class="btn-single read-more">Read More</a>

        </div>
      </div>

      <div class= "post">
        <img src="assets\img\nutritoon.jpg" alt="" class="post-image">
        <div class="post-preview">
          <h2><ab href="#" style="color:grey"><strong>Nutritional complications and its effects on human health</strong></ab></h2>
         <i class="far fa-user">Alamgir Khan, Sami Ullah Khan, etc. </i>
         &nbsp;
         <i class="far calendar">March 12, 2021</i>
         <p class="preview-text">
          Nutrition is the quantity and quality of food that the body receives. The body breaks down the food to get the molecules that it actually needs: proteins, fats, carbohydrates, vitamins, and minerals. 
         </p>

<a href="article2.php" class="btn-single read-more">Read More</a>

        </div>
      </div>

      <div class= "post">
        <img src="assets\img\diet.jpg" alt="" class="post-image">
        <div class="post-preview">
          <h2><ab href="single.html" style="color:grey"><strong>Optimizing Dietary Protein for Lifelong Bone Health</strong></ab></h2>
         <i class="far fa-user">Wallace, Taylor C. PhD </i>
         &nbsp;
         <i class="far calendar">Mei 6, 2019</i>
         <p class="preview-text">
          Bone undergoes continuous remodeling; therefore, an adequate supply of amino acid and mineral substrate is needed to support the formation and maintenance of bone across the life span. 
         </p>

<a href="article3.php" class="btn-single read-more">Read More</a>

        </div>
      </div>

      <div class= "post">
        <img src="assets\img\Vanill.jpg" alt="" class="post-image">
        <div class="post-preview">
          <h2><ab href="single.html" style="color:grey"><strong>Vanilla: Potential Health Benefits</strong></ab></h2>
         <i class="far fa-user">Singletary, Keith W. PhD </i>
         &nbsp;
         <i class="far calendar">July 8, 2020</i>
         <p class="preview-text">
          Nutrition is the quantity and quality of food that the body receives. The body breaks down the food to get the molecules that it actually needs: proteins, fats, carbohydrates, vitamins, and minerals. 
         </p>

<a href="article4.php" class="btn-single read-more">Read More</a>

        </div>
      </div>

      <div class= "post">
        <img src="assets\img\mikoprotein.jpg" alt="" class="post-image">
        <div class="post-preview">
          <h2><ab href="#" style="color:grey"><strong>Mycoprotein: Nutritional and Health Properties</strong></ab></h2>
         <i class="far fa-user">Derbyshire, Emma PhD, etc. </i>
         &nbsp;
         <i class="far calendar">January 2, 2019</i>
         <p class="preview-text">
          Mycoprotein is derived from the filamentous fungus Fusarium venenatum, first discovered in the 1960s. Mycoprotein is high in protein and fiber and low in energy and saturated fat and contains no trans-fat or cholesterol.
         </p>

<a href="article5.php" class="btn-single read-more">Read More</a>

        </div>
      </div>


    </div>
 <!-- End Main Content -->

      <div class="sidebars">
        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="" method="post">
            <input type="text" name="keyword" class="text-input" placeholder="Search..." autocomplete="off"><br>
            
          </form>
        </div>

        <div class="section topics">

        <h2 class="section-title">Topics</h2>
        <ul>
          <li><a href="http://prak11billy2-com.preview-domain.com/backend/health/health.php" style="color:grey"><strong>Health</strong></a></li>
          <li><a href="http://prak11billy2-com.preview-domain.com/backend/nutrition/nutrition.php" style="color:grey"><strong>Nutrition</strong></a></li>
        </div>



      </div>
  </div>
  <!-- End Content Section -->
  
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