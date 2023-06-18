<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Leaderboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor2/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor2/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor2/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor2/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor2/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main2.css" rel="stylesheet">

</head>
<style>
  .Tabel-pengumuman{
  background-color: white;
  /* width: 93%; */
  justify-content: center;
  align-items: center;
  margin: 70px 50px 50px 40px ;
}
table{
  margin-top: 40px;
}
th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #2aa5df;
  color: white;
}
</style>

<body class="page-about">
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
		<h1 class="d-flex align-items-center">H O M E</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/backgroundLeaderboard.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Leader Board</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
</div>
<div class="Tabel-pengumuman">
  {{-- <a href="{{ route('home') }}" class="btn btn-info text-white ">Kembali</a> --}}
  {{-- <a href="{{ route('export.pdf') }}" class="btn btn-info text-white" style="margin-left: 120px">Export PDF</a> --}}
  <table align="center">
      <tr>
          <th>Peringkat</th>
          <th>Nama</th>
          <th>Score</th>
      </tr>
	  @php
	   $no = 1;
	  @endphp
	  @foreach ($poin as $peringkat)
	  <tr>
		<td>{{ $no }}</td>
		<td>{{ $peringkat->name }}</td>
		<td>{{ $peringkat->poin_kuis }}</td>
	  </tr>
	  @php
			$no++;
	  @endphp
	  @endforeach
  </table>
</div>

      </div>
    </section><!-- End Call To Action Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor2/aos/aos.js"></script>
  <script src="assets/vendor2/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor2/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor2/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor2/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main3.js"></script>

</body>

</html>