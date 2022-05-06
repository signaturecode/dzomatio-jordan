<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("/vendor/aos/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href= "{{ asset("/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href= "{{ asset("/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
  <link href= "{{ asset("/vendor/swiper/swiper-bundle.min.css") }}"  rel="stylesheet" >

  <!-- Template Main CSS File -->
  <link href="{{ asset("css/style.css") }} " rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v4.7.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

     <div style=" padding:0%;width:130px;height:130px"><img style="font-size: 30px" src="{{asset("img/monlogo.png ") }}" class="img-fluid" alt="logo jordan dzomatio"></div> 
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.html">Acceuil</a></li>
          
          <li><a href="resume.html">Mon cv</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li class=""><a  href=""><span  style="color:#34b7a7; ">Administration</span> </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        
        <a href="#" class="facebook"><i class="bi bi-youtube"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1> Jordan Dzomatio</h1>
      <h2>Graphic design et Developpeur web  passionné par les nouvelles technologie</h2>
      <a href="about.html" class="btn-about">A propos de moi</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span> Jordan Dzomatio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href="#"> Jordan Dzomatio</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  
  <script src="{{ asset("/vendor/purecounter/purecounter.js") }}" ></script>
  <script src=" {{ asset("/vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("/vendor/bootstrap/js/bootstrap.bundle.min.js") }}" ></script>
  <script src="{{ asset("/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("/vendor/waypoints/noframework.waypoints.js") }} "></script>
  <script src="{{ asset("/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src=" {{ asset("/js/main.js") }}"></script>

</body>

</html>