<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sasirangan Meraki</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">SasiranganMeraki@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 812-567-795-60</span></i>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html">SASIRANGAN MERAKI</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#pengertian">Pengertian</a></li>
          <li><a class="nav-link scrollto" href="#motif">Motif</a></li>
          <li><a class="nav-link scrollto " href="#styleModern">Sasirangan Modern</a></li>
          <li><a class="nav-link scrollto" href="#team">Tim</a></li>
          <li class="dropdown"><a href="#kuis"><span>Kuis</span></a>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Selamat Datang</h1>
      <h2>Website Pengenalan Kain Tradisional Sasirangan Khas dari Kalimantan Selatan</h2>
      <a href="#pengertian" class="btn-get-started scrollto">Pelajari</a>
    </div>
  </section>

  <main id="main">

    <!-- ======= Tentang Sasirangan ======= -->
    <section id="pengertian" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="zoom-in">
            <img src="{!! asset('assets/img/modelBaju/modelUtama.jpg') !!}" alt="Baju Sasirangan" width="600px" height="980px">
          </div>

          <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <div class="box-heading" data-aos="fade-up">
              <h4>Pengertian Kain Sasirangan</h4>
              <h3 align="justify">SASIRANGAN</h3>
              <p align="justify">Sasirangan berasal dari kata sirang atau menyirang yang dalam bahasa banjar berarti menjelujur atau teknik menjahit menggunakan tangan. Keanekaragaman yang dimiliki Indonesia baik bahasa, suku bangsa, dan budaya menjadikan bangsa ini kaya akan hasil budaya yang salah satunya adalah kain tradisional (Koentjaraningrat, 2012; 12). Beberapa daerah di Indonesia mempunyai khas kain masing- masing yang didalamnya terdapat nilai-nilai yang tersimpan di dalam motif atau coraknya. Khususnya, Kalimantan Selatan juga mempunyai kain khas yang disebut dengan Sasirangan. Sama halnya dengan kain-kain tradisional dari daerah lain, Kain sasirangan juga mempunyai nilai magis dan pesan-pesan yang yang disampaikan melalui warna dan motif-motif yang sesuai dengan kepribadian dan budaya yang berkembang di Kalimantan Selatan. Secara umum sasirangan dapat digolongkan menjadi tiga kelompok, yaitu: </p>
            </div>

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-check"></i></div>
              <h4 class="title"><a href="">Motif Lajur</a></h4>
              <p class="description" align="justify">Contoh dari motif lajur yaitu, Hiris Pudak, Kangkung Kaumbakan, Kulat Karikit, Gigi Haruan dan lain sebagainya.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-check"></i></div>
              <h4 class="title"><a href="">Motif Ceplok</a></h4>
              <p class="description" align="justify">Contoh dari motif ceplok yaitu, Hiris Gagatas, Tampuk Manggis, Pucuk Rabung, Kambang Malati, dan lain sebagainya</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-check"></i></div>
              <h4 class="title"><a href="">Motif Variasi</a></h4>
              <p class="description" align="justify">Motif variasi adalah motif penghias untuk menambah suatu penampilan. Contohnya pinggiran motif Hiris Gagatas yang diberi hiasan tambahan agar lebih menarik.</p>
            </div>

          </div>
        </div>

      </div>
    </section>

    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Pembuatan Sasirangan</h2>
          <h3>Cara Membuat Kain <span>Sasirangan</span></h3>
          <p align="justify">Kain Sasirangan dibuat dengan proses pewarnaan rintang menggunakan bahan benang, tali, atau sejenisnya sesuai dengan corak. Motif dan corak kain sasirangan juga sangat dipengaruhi oleh komposisi warna yang diciptakan. Tahap pembuatannya yaitu menyiapkan kain putih, membuat pola desain pada media kain, menjahit jelujur, membersihkan kain, pewarnaan kain, melepas jahitan jelujur, pencucian, dan yang terakhir setrika.
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box" data-aos="zoom-in">
              <img src="{!! asset('assets/img/jahit.jpg') !!}" width="250px" height="200px"><br><br>
              <h4>Teknik Jahit</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <img src="{!! asset('assets/img/ikat.png') !!}" width="250px" height="200px"><br><br>
              <h4>Teknik Ikat</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <img src="{!! asset('assets/img/jemur2.png') !!}" width="250px" height="200px"><br><br>
              <h4>Penjemuran Kain</a></h4>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Motif Sasirangan ======= -->
    <section id="motif" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Motif Sasirangan</h2>
          <h3>Corak-Corak <span>Kain Sasirangan</span></h3>
          <p align="justify">Kain sasirangan mempunyai keunikan motif dan cara
            pembuatannya yang dipertahankan secara turun-menurun. Motif didapat dari teknik-teknik jahitan dan ikatan yang ditentukan oleh beberapa faktor, yaitu komposisi warna dan jenis bahan pengikat.</p>
        </div>

        <div class="row">

          @foreach ($motif as $item)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <img src="{!! asset('storage/app/'.$item->image) !!}" width="250px" height="250px"><br><br>
              <h5>{{ $item->nama }}</h5>
              <a data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $item->deskripsi }}" style="cursor: pointer;">Detail</a>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section>

    <!-- ======= Referensi Modern Style ======= -->
    <section id="styleModern" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Modern Style</h2>
          <h3>Referensi <span>Sasirangan</span> Modern </h3>
          <p align="justify">Saat ini, Sasirangan telah melampaui bentuk tradisionalnya dan telah berhasil mencapai mode modern. Sejak tahun 1980-an banyak baju sasirangan diproduksi untuk pakaian sehari-hari dan formal.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-kemeja">Kemeja</li>
              <li data-filter=".filter-blouse">Blouse</li>
              <li data-filter=".filter-dress">Dress</li>
              <li data-filter=".filter-tunik">Tunik</li>
              <li data-filter=".filter-seragam">Seragam</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          @foreach ($style as $item)
            <?php if ($item->jenis == "kemeja") {?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-kemeja">
                <img src="{!! asset('storage/app/'.$item->image) !!}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kemeja</h4>
                  <p align="justify">Model kemeja yang dapat digunakan untuk bekerja maupun acara pernikahan.</p>
                </div>
              </div>
            <?php } else if ($item->jenis == "blouse") {?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-blouse">
                <img src="{!! asset('storage/app/'.$item->image) !!}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Blouse</h4>
                  <p align="justify">Model blouse cantik yang dapat menjadi referensi kamu untuk bekerja maupun pergi ke acara formal.</p>
                </div>
              </div>
            <?php } else if ($item->jenis == "dress") {?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-dress">
                <img src="{!! asset('storage/app/'.$item->image) !!}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Dress</h4>
                  <p align="justify">Model dress cantik yang dapat digunakan untuk pergi ke acara formal.</p>
                </div>
              </div>
            <?php } else if ($item->jenis == "tunik") {?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-tunik">
                <img src="{!! asset('storage/app/'.$item->image) !!}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Tunik</h4>
                  <p align="justify">Model sasirangan tunik yang dapat menjadi referensi kamu untuk bekerja maupun pergi ke acara formal.</p>
                </div>
              </div>
            <?php } else if ($item->jenis == "seragam") {?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-seragam">
                <img src="{!! asset('storage/app/'.$item->image) !!}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Seragam</h4>
                  <p align="justify">Model sasirangan yang dapat menjadi referensi untuk seragam kantor maupun baju seragam dengan pasangan.</p>
                </div>
              </div>
            <?php }?>
          @endforeach

        </div>

      </div>
    </section>

    <!-- ======= Mengajak Pengguna untuk Bermain Kuis ======= -->
    <section id="kuis" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Ayo bermain kuis teka-teki!</h3>
          <p>Lihat peringkatmu setelah menyelesaikan kuis. 3 orang dengan nilai tertinggi akan ditampilkan pada halaman utama web.</p>
          <a class="cta-btn" href="{{ route('quiz.show') }}">Mulai Kuis</a>
          <a class="cta-btn" href="{{ route('peringkat.show') }}">Lihat Leaderboard</a>
        </div>

      </div>
    </section>

     <!-- ======= 3 Peringkat Teratas Kuis ======= -->
     <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @php
              $n = 1;
            @endphp
            @foreach ($winner as $item)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <h2>JUARA {{ $n }}</h2>
                <h1>{{ $item->name }}</h1>
                <p>
                  <h3>Skor: {{ $item->poin_kuis }}</h3>
                  {{-- <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i> --}}
                </p>
              </div>
            </div><!-- End testimonial item -->
            @php
              $n++;
            @endphp
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Tim Pengembang Aplikasi ======= -->
    <section id="team" class="team">
      <div class="container">`

        <div class="section-title" data-aos="zoom-in">
          <h2>Tim</h2>
          <h3>Tim<span> Pengembang Aplikasi</span></h3>
          <p align="justify">Tim kami terbentuk dari mata kuliah Pemrograman Web 2 untuk pemenuhan Projek Akhir, salah satu syarat kelulusan mata kuliah.</p>
        </div>

        <div class="rowtim row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{!! asset('assets/img/kayanti.jpg') !!}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/delphiaaryana_/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Delphia Aryana</h4>
                <span>Ketua Tim</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{!! asset('assets/img/adel.jpg') !!}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/sy.maisyapuspitaa/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Maisya Puspita Sari</h4>
                <span>Anggota-1</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{!! asset('assets/img/maisya.jpg') !!}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/nrftrynt/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nur Fitri Yanti</h4>
                <span>Anggota-2</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Contact</h2>
          <h3>Detail Kontak Pengembang Web</h3>
          <p>Jl. Brigjen Jalan Hasan Basri, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</p>
          <p>SasiranganMeraki@gmail.com</p>
          <p>WhatsApp: +62 812-567-795-60</p>
        <div class="row mt-5">

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>SASIRANGAN MERAKI</h3>
            <p>Terima Kasih Telah Mengunjungi Website Kami.</p>
          </div>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>