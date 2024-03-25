<!DOCTYPE html>
<html lang="en-AU">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - TechSource Managed Services</title>
    <meta name="description" content="Tech Source Managed Services provides resources for a variety of IT-related tasks throughout the world!" />
  <meta content="TechSource Managed Services" name="keywords" />
  <link href="./assets/img/favicon.svg" rel="icon" />
  <link href="./assets/img/favicon.svg" rel="apple-touch-icon" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet" />
  <link href="./assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="./assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-batween align-items-center">
      <div class="logo">
        <a href="index.php">
          <img height="200" width="65" src="./assets/img/favicon.svg" />
        </a>
      </div>
      <?php 
        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $uri_path);
      ?>
      <nav id="navbar" class="navbar me-auto">
        <ul class="">
          <li><a class="<?=($uri_segments[2]=='index.php' ? 'active' : '');?>" href="index.php">Home</a></li>
          <li><a class="<?=($uri_segments[2]=='about.php' ? 'active' : '');?>" href="about.php">ABOUT US</a></li>
          <li><a class="<?=($uri_segments[2]=='services.php' ? 'active' : '');?>" href="services.php">SERVICES</a></li>
          <li><a class="<?=($uri_segments[2]=='ourcaverage.php' ? 'active' : '');?>" href="ourcaverage.php">COVERAGE</a></li>
          <li><a class="<?=($uri_segments[2]=='contact.php' ? 'active' : '');?>" href="contact.php">CONTACT</a></li>
          <li id="socialmobile">
            <a href="#" class="twitter my-link"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook my-link"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram my-link"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin my-link"><i class="bx bxl-linkedin"></i></a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle text-white"></i>
      </nav>
      <!-- .navbar -->
      <div class="social-links socialMedia" style="width: 0%">
        <a href="#" class="twitter my-link"><i class="bx bxl-twitter text-white"></i></a>
        <a href="#" class="facebook my-link"><i class="bx bxl-facebook text-white"></i></a>
        <a href="#" class="instagram my-link"><i class="bx bxl-instagram text-white"></i></a>
        <a href="#" class="linkedin my-link"><i class="bx bxl-linkedin text-white"></i></a>
      </div>
    </div>
  </header>
  <!-- End Header -->