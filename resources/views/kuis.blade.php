<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Instruksi Kuis</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="page-about">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/headerkuis.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Kuis Teka-Teki</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="assets/img/doingkuis.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Instruksi Kuis</h3>
              <p align="justify">
                Kuis terdiri dari beberapa soal pilihan ganda dengan gambar pada setiap soalnya. Setiap soal akan memiliki pointnya masing-masing. 
                Setiap anda berhasil menjawab pertanyaan dengan benar anda juga akan mendapatkan koin yang nantinya akan bisa anda gunakan untuk membantu anda
                menjawab soal. Terdapat tombol hint di pojok kanan atas soal, Silahkan gunakan koint anda dengan bijak.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>Setiap soal yang dijawab benar akan diberi skor sebesar 10 dan 2 koin.</li>
                <li><i class="bi bi-check-circle-fill"></i>Koin digunakan untuk membuka kunci jawaban. Untuk membuka kunci jawaban anda harus memiliki 5 koin.</li>
                <li><i class="bi bi-check-circle-fill"></i>Jika anda menekan tombol "next" sebelum menjawab soal, maka skor akan dihitung sebesar 0.</li>
                <li><i class="bi bi-check-circle-fill"></i>Setelah menyelesaikan semua soal kuis, anda diarahkan untuk melihat peringkat pada leaderboard.</li>
                <li><i class="bi bi-check-circle-fill"></i>Jika Anda bermain kuis kembali setelah sebelumnya sudah pernah menyelesaikan kuis, maka skor kuis terdahulu akan otomatis dihapus.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
 
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Klik tombol di bawah untuk mengerjakan kuis.</h3>
            <a class="cta-btn" href="{{ route('loginKuis') }}">Mulai Kuis</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>