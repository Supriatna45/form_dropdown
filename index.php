<?php
include "conn.php";
$connection = new Connection;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Dropdown</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Reference -->
  

  <!-- Favicons -->
  <!-- <link href="assets/img/poltek.png" rel="icon">
  <link href="assets/img/poltek.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.1.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">DROPDOWN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#about">Form</a></li>
          <li><a class="getstarted scrollto" href="datamasuk.php">Tabel</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Form Dropdown</h1>
          <h2>Dimohon untuk mengisi data form dengan baik dan benar.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#services" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Form Pendaftaran</h2>
        </div>

        <div class="row content d-flex justify-content-center">
          <div class="col-lg-6">
            <p style="text-align: center;">
              Isi form berikut dengan baik dan benar :
            </p>
        </div>
        <form method="post" action ="success.php">
            <br>
            <div class="container">

                    <label for="division" class="d-block">Provider</label>
                    <select id="division" name="division" class="form-select" aria-label="Default select example">
                    <option selected disabled value="">Select Provider</option>
                    <?php
                        $result = $connection->getAll("SELECT DISTINCT division FROM unions",null);
                        print_r($result);
                        foreach($result as $res){
                            $division = $res['division'];
                            ?>
                            <option value="<?php echo $division?>"><?php echo $division ?></option>
                            
                            <?php
                        }
                        ?>
                </select>
            </div>
            <br>
            <div class="container">
                    <label class="d-block" for="district">Cluster</label>
                    <select id="district" name="district" class="form-select" aria-label="Default select example">
                        <option selected disabled value="">Select Cluster</option>                            
                    </select>
                </div>
            <br>
            <div class="container">
                    <label class="d-block" for="upazila">Site id</label>
                    <select id="upazila" name="upazila" class="form-select" aria-label="Default select example">
                        <option selected disabled value="">Select Site</option>                            
                    </select>
            </div>
            <br>
            <div class="container">
                <label for="incm">INCM</label>
                <input required type="text" class="form-control" id="incm" name="incm">
            </div>
            <br>
            <div class="container">
                <label for="tgl">Tanggal</label>
                <input required type="text" class="form-control" id="tgl" name="tgl">
            </div>
            <br>
            <br>
            <br>
            <div class = "container ">
            <button style="background-color:#37517e; border-color: #37517e;" type="submit" name="submit" class="btn btn-primary btn-md">Submit</button>
            </div>
        </form>
        <br>
        <br>
      </div>
    </section><!-- End About Us Section -->  
  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Polinema</h3>
            <p>
              Jl. Soekarno Hatta No.9 <br>
              Jatimulyo, Kec. Lowokwaru, Kota Malang<br>
              Jawa Timur 65141 <br><br>
              <strong>Phone:</strong> (0341) 404424 - 404425<br>
              <strong>Email:</strong> @polinema.ac.id<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#skills">Partisipan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">Pertanyaan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Daftar</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Course</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tukar Pelajar</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Seminar</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Kunjungi media sosial Polinema :</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>