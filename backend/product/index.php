<?php
    session_start();
    
    if (isset ($_SESSION['username'])) {
        
    $username = $_SESSION['username'];
    
?>

<!DOCTYPE html>
<html lang="en">
<style>
    h3{background-color: #4294D1; color: #f7f7f7; padding: 15px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35);}
    .img-box{margin-top: 20px;}
    .img-block{float: left; margin-right: 5px; text-align: center;}
</style>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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

      <a href="index.php" class="logo"><img src="assets/img/Logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php">Home</a></li>
            
            <li><a class="nav-link scrollto" href="#"></a></li>
            
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

  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Our Products</h1>
      <h2><i>- "Find The Best Item For Your Fit" -</i></h2>
      <a href="#store" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- End Home -->

    <!-- ======= Store Section ======= -->
    <section id="store" class="store">
        <div class="container">
  
          <div class="section-title">
            <h2>Product</h2>
          </div>
  
          <!--<div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="store-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>-->
          
           <!--<div class="container main">-->
           <div class="row store-container">
            <div class="img-box">
            <?php
            
            $host ="localhost";
            $uname = "u958888159_andrebilly";
            $pwd = 'Apaajadeh10.';
            $db_name = "u958888159_fitguru";

            /*$file_path = 'photo/';*/
            $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
            mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
            $image_query = mysqli_query($result,"select product_name,product_picture from product");
            while($rows = mysqli_fetch_array($image_query))
            {
            $product_name = $rows['product_name'];
            $product_picture = $rows['product_picture'];
            ?>

        <div class="img-block">
        <img style = "width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;" src="<?php echo $product_picture; ?>" alt="" title="<?php echo $product_name; ?>" width="300" height="200"  class="img-fluid" />
        <p><strong><?php echo $product_name; ?></strong></p>
        </div>

        <?php
            }
    ?>
  
          <!--<div class="row store-container">
  class="img-responsive"
            <div class="col-lg-4 col-md-6 store-item filter-app">
              <img src="https://prak11billy2.000webhostapp.com/web/pictures/SPP02.jpg" class="img-fluid" alt="">
              <div class="store-info">
                <h4>BCAA</h4>
                <p>WOW</p>
                <a href="assets/img/store/portfolio-1.jpg" data-gallery="storeGallery" class="store-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="store-details.html" data-gallery="storeDetailsGallery" data-glightbox="type: external" class="store-details-lightbox details-link" title="Store Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            
  
          </div>-->
  
        </div>
      </section>
      <!-- End Store Section -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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