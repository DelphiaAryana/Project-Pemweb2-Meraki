<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Motif - Motif Kain Sasirangan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/css/vendor2/aos/aos.css" rel="stylesheet">
  <link href="assets/css/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/vendor2/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/vendor2/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/styleMotif.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Navbar ======= -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About Me</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="works.html">Works</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-6 d-none d-md-block  mr-auto">
          <div class="tweet d-flex">
            <span class="bi bi-twitter text-white mt-2 mr-3"></span>
            <div>
              <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis explicabo inventore. <br> <a href="#">t.co/v82jsk</a></em></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <h3>Hire Me</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiisexplicabo inventore. <br> <a href="#">myemail@gmail.com</a></p>
        </div>
      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Sasirangan Meraki.</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">
    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h2>Motif - Motif Kain Sasirangan.</h2>
            <p class="mb-0" align="justify" width="100%"> Kain sasirangan mempunyai keunikan motif dan cara
              pembuatannya yang dipertahankan secara turun-menurun. Upaya untuk melindungi
              budaya Banjar ini, telah dilakukan oleh pemerintah melaui dirjen HAKI Depatemen
              Hukum dan HAM RI. Terdapat lebih dari 15 motif tradisional yang dimiliki oleh kain
              sasirangan antara lain gigi haruan, bintang, naga balimbur, dan masih banyak motif lain.</p>
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          @foreach ($motif as $item)
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('motif.detail', $item->id) }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>{{ $item->nama }}</h3>
              </div>
              <img class="img-fluid" src="{!! asset('storage/app/'.$item->image) !!}">
            </a>
          </div>
          @endforeach
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/css/vendor2/aos/aos.js"></script>
  <script src="assets/css/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/css/vendor2/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/css/vendor2/swiper/swiper-bundle.min.js"></script>
  <script src="assets/css/vendor2/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/js/main.js"></script>

</body>

</html>