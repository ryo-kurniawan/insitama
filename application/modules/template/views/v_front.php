<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Integra Solusi Infotama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/img/isi2.png" rel="icon">
  <link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="<?= base_url(); ?>assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.3.1
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0" style="margin-left:10px">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?= base_url(); ?>assets/img/isi2.png" alt="">
        <h5 style="color:#000000">Integra Solusi Infotama</h5>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="nav-link"><a href="<?= base_url(); ?>"><span>Beranda</span> </a></li>

          <li><a class="nav-link" href="<?= base_url(); ?>tentang">Tentang Kami</a></li>
          <li><a class="nav-link" href="<?= base_url(); ?>layanan">Layanan</a></li>
          <li><a class="nav-link" href="<?= base_url(); ?>berita">Berita</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url(); ?>contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="index.html#"><i class="bi bi-whatsapp"></i> Konsultasi Gratis</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

  
<div class="container-fluid-lg">
  <?php
  $this->load->view($modules.'/'.$layout);
  ?>
</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" >

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Integra Solusi Infotama</h3>
              <p>
                Griya Syeiban Permai <br>
                Blok D. 13, Jl. Jakarta, Wumialo, Kota Tengah, Gorontalo, Indonesia<br><br>
                <strong>Phone:</strong> 082131172405<br>
                <strong>Email:</strong> irwankarim@insitama.co.id<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Tautan Yang Berguna</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url(); ?>">Beranda</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url("tentang"); ?>">Tentang Kami</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url("layanan"); ?>">Layanan</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url("berita"); ?>">Berita</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url("contact"); ?>">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Pembangunan Sistem Informasi</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Pembuatan Berbagai Aplikasi</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Jasa Hosting dan VPS</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Digitalisasi dan Validasi Dokumen</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Konfigurasi Jaringan Komputer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Konsultasi Solusi Teknologi Informasi</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span> <a href="<?= base_url(); ?>" style="color:#ffffff">Integra Solusi Infotama</a> </span></strong>. All Rights Reserved
          </div>
        
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
          <a href="https://www.facebook.com/insitama" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <!-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html>