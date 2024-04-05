<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CV. Karya Mandiri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('storage/img/bolt-icon.png')}}" rel="icon">
  <link href="{{asset('storage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>CV. </span>Karya Mandiri</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#blog">Produk</a></li>
          <li><a class="nav-link scrollto" href="#dokumentasi">Dokumentasi</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url('{{ asset('storage/img/hero-carousel/1.jpg') }}')">
            <div class="carousel-container">
              <div class="container">
                <p class="animate__animated animate__fadeInUp"> Website CV. Karya Mandiri</p>
                <h2 class="animate__animated animate__fadeInDown">Enginering - Electro - Electrical  - Developer Aplikasi </h2>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image:  url('{{ asset('storage/img/hero-carousel/2.jpg') }}')">
            <div class="carousel-container">
              <div class="container">
                <p class="animate__animated animate__fadeInUp">CV. Karya Mandiri</p>
                <h2 class="animate__animated animate__fadeInDown">Bergerak dalam bidang pengadaan barang dan jasa <br>
                  berbekal pengalaman dan profesional kerja serta daya kreatifitas dan 
                  inovatif</h2>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

   <!-- ======= About Section ======= -->
   <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Tentang Kami</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center"> 
        <!-- single-well start-->
        <div class="col-md-4 col-sm-10 col-xs-4">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                <img src="{{ asset('storage/img/dokumentasi/asepta.jpeg') }}" alt="">
              </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-5 col-sm-10 col-xs-8">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">CV. Karya Mandiri</h4>
              </a>
              <p>
                Meningkatnya kepercaryaan yang diberikan dan tumbuhnya partisipasi tenaga ahli dari berbagai disiplin ilmu serta cetusan rekan seprofesi yang mempunyai cita-cita seiring, telah menumbuhakan semangat kami dalam melaksanakan tugas dan memberikan layanan jasa konsultansi.
              </p>
              <p>
                Kami menyadari sepenuhnya akan kemampuan dalam memberikan pelayanan menuju kesempurnaan, untuk itu kami tidak henti-hentinya berbenah diri dalam rangka meningkatkan kualitas dan kuantitas demi terwujudnya cita-cita bersama.
              </p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div><!-- End About Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg- d-flex flex-column justify-content-start align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>Saat ini CV. Karya Mandiri mempunyai 6 portofolio utama, yaitu</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Digital Service<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Jasa layanan dengan teknologi terkini untuk kebutuhan operasional internal dan eksternal pelanggan.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Sistem Monitoring Kelistrikan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Sistem Monitoring Kelistrikan Gedung sistem pemantauan arus listrik di gedung menggunakan sensor agar mendapatkan Pemberitahuan apabila terjadi kenaikan suhu yang dapat mengakibatkan Kebakaran
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Jasa Konsultan Pemeliharaan Kelistrikan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Jasa Konsultan Pemeliharaan Kelistrikan Gedung Mencakup pengecekan Keadaan panel menggunakan thermovisi dan juga  pengukuran alus listrik, tegangan frekuensi daya aktif reaktif dll  menggunakan PQM ( Power Quality Analyze ) 
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Jasa Konsultan Dan Pembuatan Aplikasi <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Jasa Konsultan Aplikasi Jasa Pembuatan aplikasi sesuai dengan kebutuhan instansi atau perusahaan yang bersangkutan/customize
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span> Smart CCTV <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Smart CCTV yang Mampu mendeteksi wajah, jumlah orang, dan juga barang berharga yang dapat terkoneksi dengan sistem
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapsed"><span>06</span>Managed Services<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Managed Services Jasa layanan pengelolaan end-to-end infrastruktur telekomunikasi dan infrastruktur non telekomunikasi.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </section><!-- End Why Us Section -->

    

    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Layanan Kami</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
                    <i class="bi bi-briefcase"></i>
                  </a>
                  <h4>Service</h4>
                  <p>
                    Jasa Service CV. Karya Mandiri Meliputi Jasa Perbaikan, Pemeliharaan, Alat Uji Tegangan Listrik, Telekomunikasi, dan Lain-lain.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
                    <i class="bi bi-wind"></i>
                  </a>
                  <h4>Teknik Sipil</h4>
                  <p>
                    Perencanaan irigasi dan drainase, bendungan dan waduk, perencanaan sungai dan rawa, bangunan gedung dan manajemen teknik sipil.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
                    <i class="bi bi-water"></i>
                  </a>
                  <h4>Teknik Lingkungan</h4>
                  <p>
                    Perencanaan sistem penyedia air bersih, perencanaan sanitasi dan persampahan, air bersih untuk konsumsi masyarakat secara umum, serta sistem pembuangan air limbah secara global.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
                    <i class="bi bi-wifi"></i>
                  </a>
                  <h4>Telematika</h4>
                  <p>
                    Perencanaan telekomunikasi darat berupa sentral, transmisi dan jaringan telekomunikasi, perangkat keras dan program-program aplikasi.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
                    <i class="bi bi-car-front"></i>
                  </a>
                  <h4>transportasi</h4>
                  <p>
                    Prasarana transportasi darat meliputi perencanaan pembangunan jalan, jembatan dan prasarana transportasi laut yang meliputi perencanaan pembangunan dermaga, PPI dan lain-lain.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon">
                    <i class="bi bi-building"></i>
                  </a>
                  <h4>Arsitektur</h4>
                  <p>
                    Perencanaan bangunan gedung, perencanaan desain teknik, pembangunan perumahaan sejenisnya, dan interior.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Services Section -->

    
    
    <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container justify-text-center ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Produk dan Jasa</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12 ">
              <div class="single-blog">
                <div class="single-blog-img">
                    <img src="{{ asset('storage/img/produk/coding.jpeg') }}" alt="">
                </div>
                <div class="blog-meta">
                </div>
                <div class="blog-text justify-content-center">
                  <h4>
                    Konsultan Aplikasi 
                  </h4>
                  <p> 
                    <li>Aplikasi Keuangan Dan Bisnis</li>
                    <li>Aplikasi Pemerintahan</li>
                    <li>Aplikasi Monitoring</li>
                    <li>Aplikasi Thermovisi</li>
                    <li>Aplikasi Pemeliharaan</li>
                    <li>Aplikasi Bapenda</li>
                     <li>Aplikasi Pembelajaran</li>   
                  </p>     
                </div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                    <img src="{{ asset('storage/img/produk/rpt3.jpeg') }}" alt="">
                </div>
                <div class="blog-meta"> 
                </div>
                <div class="blog-text">
                  <h4>
                  Konsultan Kelistrikan
                  </h4>
                  <p>
                    <li>Perencanaan Kelistrikan</li>
                    <li>Pelaksaan Kelistrikan</li>
                    <li>Aplikasi Monitoring</li>
                    <li>Assesment Kelistrikan Gedung</li>
                    <li>Perbaikan</li>
                    <li>Pemasangan Alat Monitoring</li>
                  </p>
                </div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                    <img src="{{ asset('storage/img/produk/elektro.jpg') }}" alt="">
                </div>
                <div class="blog-meta">
                </div>
                <div class="blog-text">
                  <h4>
                    Konsultan Elektronik
                  </h4>
                  <p>
                    <li>Pembuatan Modul Elektronik</li>
                    <li>Assessment Kelistrikan Gedung</li>
                    <li>Pembuatan Sistem IOT</li>
                    <li>Pemasangan CCTV</li>
                    <li>Perbaikan</li>
                    <li>Perencanaan</li>
                </div>
              </div>
            </div>
            <!-- End Right Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                    <img src="{{ asset('storage/img/produk/turbine.jpg') }}" alt="">
                </div>
                <div class="blog-meta">
                </div>
                <div class="blog-text">
                  <h4>
                    Hybrid Wind and Solar Electric Systems
                  </h4>
                  <p>
                    <li>Wind Turbine </li>
                    <li>Solar Cells </li>
                    <li>Battery</li>
                    <li>Monitoring</li>
                </div>
              </div>
            </div>
            <!-- End Right Blog-->
              <!-- Start Right Blog-->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                      <img src="{{ asset('storage/img/produk/pelatihan.jpeg') }}" alt="">
                  </div>
                  <div class="blog-meta">
                  </div>
                  <div class="blog-text">
                    <h4>
                      Pelatihan Bersetifikat
                    </h4>
                    <p>
                      <li>Pelatihan K3 Umun dan Listrik</li>
                      <li>Pelatihan Thermography</li>
                      <li>Pelatihan IOT</li>
                      <li>Pelatihan Pembuatan Website</li>
                  </div>
                </div>
              </div>
              <!-- End Right Blog-->
              <!-- Start Right Blog-->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                      <img src="{{ asset('storage/img/produk/ac.jpg') }}" alt="">
                  </div>
                  <div class="blog-meta">
                  </div>
                  <div class="blog-text">
                    <h4>
                      HVAC
                    </h4>
                    <p>
                      <li>Service AC</li>
                      <li>Perbaikan AC</li>
                      <li>Sparepart AC</li>
                      <li>Jual Beli AC</li>
                  </div>
                </div>
              </div>
              <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div>

    <!-- ======= Dokumenatsi Section ======= -->
    <div id="dokumentasi" class="portfolio-area area-padding fix">
      <div class="container">    
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Dokumentasi</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div> -->
        </div>

        <div class="row awesome-project-content portfolio-container">

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('storage/img/dokumentasi/rpt.jpeg') }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/dokumentasi/rpt.jpeg') }}">
                      <h4>Rapat</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('storage/img/dokumentasi/mt3.jpg') }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/dokumentasi/mt3.jpg') }}">
                      <h4>HHO</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('storage/img/dokumentasi/rpt2.jpeg') }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/dokumentasi/rpt2.jpeg') }}">
                      <h4>Rapat</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('storage/img/dokumentasi/hilal.jpeg') }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/dokumentasi/hilal.jpeg') }}">
                      <h4>maintenance</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('storage/img/dokumentasi/mitratel.jpg') }}" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/dokumentasi/mitratel.jpg') }}">
                      <h4>Thermovisi</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset('storage/img/dokumentasi/asepta.jpeg') }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/dokumentasi/asepta.jpeg') }}">
                      <h4>thermovisi</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

        </div>
      </div>
    </div><!-- End Dokumentasi Section -->
    
    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Hubungi kami</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Phone: 0812-2162-2132<br>
                    <span>Online 24 Jam</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: admin@rajakon.com<br>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                   Alamat: Kav. 16 Jl. E. Andjali RT 003/004 Kel. Cisaranten Endah, Kec. Arcamanik, Kota Bandung, Jawa Barat 40295
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-12 ">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d441.0690335117103!2d107.67409942573866!3d-6.930448835151961!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c2abf359a735%3A0xc68b6430f5639d2a!2sJl.%20E.%20Andjali%2C%20Cisaranten%20Endah%2C%20Kec.%20Arcamanik%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040293!5e0!3m2!1sid!2sid!4v1704698764562!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <!-- <div class="col-md-6">
              <div class="form contact-form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div> -->
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h3><span>CV. </span>Karya Mandiri</h3>
                </div>

                <p>Bergerak dalam bidang pengadaan barang dan jasa
                  berbekal pengalaman dan profesional kerja serta daya kreatifitas dan inovatif</p>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <div class="footer-contacts">
                  <p><span>Phone:</span> 0812-2162-2132</p>
                  <p><span>Email:</span> admin@rajakon.com</p>
                  <p><span>Address:</span>  Kav. 16 Jl. E. Andjali RT 003/004 <br> Kel. Cisaranten Endah, Kec. Arcamanik, Kota Bandung, Jawa Barat 40295 </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright CV. Karya Mandiri
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src={{ asset('js/main.js') }}></script>

</body>

</html>