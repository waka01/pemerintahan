<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>portal website lampung selatan</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css">
  <!-- Google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet'>
  <!-- Bootstrap Select-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap-select/css/bootstrap-select.min.css">
  <!-- owl carousel-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/owl.carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/owl.carousel/assets/owl.theme.default.css">
  <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" type="image/x-icon">

  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="<?php echo base_url();?>css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/front/style.amber-500.min.css">

  <link href="dist/vanillaCalendar.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>css/calender/calender.css">
  <!--
  <link rel="stylesheet" href="<?php echo base_url();?>css/carousel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css">
  -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/icon.ico" type="image/x-icon">
</head>

<body>
  <div id="all">
    <div class="top-bar">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 d-md-block d-none">
            <p>Portal Informasi Kabupaten Lampung Selatan</p>
          </div>
        <div class="col-md-6">
          <div class="d-flex justify-content-md-end justify-content-between">
            <ul class="social-custom list-inline">
              <li class="list-inline-item"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar Start-->
<header class="nav-holder make-sticky" >
    <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
      <div class="container-fluid"><a href="<?php echo base_url();?>" class="navbar-brand home"><img src="assets/img/logo1.png" class="d-none d-md-inline-block"><img src="assets/img/logo1.png" class="d-inline-block d-md-none"><span class="sr-only"></span></a>
        <h1>Pemerintah Lampung Selatan</h1>
          <button type="button" data-target="#navigation" class="navbar-toggler btn-template-outlined" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active"><a href="home" data-toggle="text" class="text">Beranda</a>
                </li>
                <li  class="nav-item dropdown menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Layanan Publik</a>
                   <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="<?php echo site_url();?>buat_ktp" class="nav-link">Cara Buat KTP</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>buat_kk" class="nav-link">Cara Buat KK</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Wilayah</a>
                  <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="<?php echo site_url();?>kabupaten" class="nav-link">Kabupaten</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>kecamatan" class="nav-link">Kecamatan</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>

                <li class="nav-item dropdown"><a href="<?php echo base_url();?>Post_berita/lists" data-toggle="faq">Berita Terbaru</a>
                </li>

                <li class="nav-item dropdown menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">E-Goverment</a>
                  <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">

                            <li class="nav-item"><a href="<?php echo site_url();?>profil_pemerintah" class="nav-link">Profil Pemerintah</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>perangkat_daerah" class="nav-link">Perangkat Daerah</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>daftar_pejabat" class="nav-link">Daftar Pejabat</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>rpjmd_kabupaten" class="nav-link">RPJMD Kabupaten</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a href="<?php echo site_url();?>informasi_pariwisata" data-toggle="faq">Informasi Pariwisata</a>
                </li>
                <li class="nav-item dropdown menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Profil Daerah</a>
                  <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="<?php echo base_url();?>selayangpandang" class="nav-link">Selayang Pandang</a></li>
                            <li class="nav-item"><a href="<?php echo base_url();?>visimisi" class="nav-link">Visi Misi</a></li>
                            <li class="nav-item"><a href="<?php echo base_url();?>artilambang" class="nav-link">Arti Lambang</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>

                <li class="nav-item dropdown"><a href="<?php echo site_url('authentication')?>" data-toggle="faq">Account</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
  </header>
  <!-- Navbar End-->


  <section class="no-mb relative-positioned">
    <!--
    *** JUMBOTRON ***
    _________________________________________________________
    -->
    <div style="background: url('assets/img/background1.jpg') center center repeat; background-size: cover;" class="bar no-mb color-white text-center bg-fixed relative-positioned">
     <div class="dark-mask mask-primary"></div>
      <div class="container">
        
        <div class="row mb-small">
          <div class="col-md-12 text-center">
            <h4 class="ex">Pemerintah Kabupaten Lampung Selatan</h4>
          </div>
        </div>
        <div class="row mb-small">
          <div class="col-md-12 text-center">
            <a href="<?php echo base_url();?>"><img src="assets/img/logo1.png"></a>
          </div>
        </div>
        <div class="row mb-small">
          <div class="col-md-12 text-center">
            <h6 class="xam">Tahun 2018/2019</h6>
          </div>
        </div>
      </div>
    </div>
    <!-- *** JUMBOTRON END ***-->
  </section>

  <div class="container">
      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="row">
            <div class="col-md-12">
            <h2 class="right-line no-margin-bottom">Berita Utama</h2>
          </div>
          <div class="col-md-6" style="color: #fff;">
                <div class="card card-warning wow zoomInUp animation-delay-5" style="max-height: 450px; background-color:#fff;" >
                <div class="withripple zoom-img">
                  <a href="http://localhost/pemerintahan/post_berita/view/11"><img src="assets/img_berita/berita5.jpg" alt="" class="img-responsive" style="height: 240px; max-width: 100%;"></a>
                  </div>
                  <div class="card-block" style="background-color:#fff;">
                    <b><h2 class="strong" style="color: #fff;">
                      <a href="http://localhost/pemerintahan/post_berita/view/11">DPMD Lamsel Baru Serahkan Laporan Realisasi Dana Desa Tahap III </a>
                    </h2></b>
                    
                  </div>
                </div>
              </div>
          <div class="col-md-6" style="color: #fff;">
                <div class="card card-warning wow zoomInUp animation-delay-5" style="max-height: 450px; background-color:#fff;">
                <div class="withripple zoom-img">  
                <a href="http://localhost/pemerintahan/post_berita/view/10"><img src="assets/img_berita/berita4.jpg" alt="" class="img-responsive" style="height: 240px; max-width: 100%;"></a>
                </div>
                <div class="card-block" style="background-color:#fff;">
                    <b><h2 class="strong" style="color: #fff;">
                      <a href="http://localhost/pemerintahan/post_berita/view/10"> Data Berbeda, Imunisasi MR di Lamsel Klaim Capai 90,5 Persen</a>
                    </h2></b>
                  </div>
                </div>
              </div>
          <div class="col-md-6" style="color: #fff;">
                <div class="card card-warning wow zoomInUp animation-delay-5" style="max-height: 400px; background-color:#fff;">
                <div class="withripple zoom-img">  
                <a href="http://localhost/pemerintahan/post_berita/view/9"><img src="assets/img_berita/berita3.jpg" alt="" class="img-responsive" style="height: 280px; max-width: 100%;"></a>
                </div>
                <div class="card-block" style="max-height: 100px; background-color:#fff;">
                    <b><h2 class="strong" style="color: #fff;">
                      <a href="http://localhost/pemerintahan/post_berita/view/9">Cegah Laka Rem Blong, Satlantas Bangun Jalur Penyelamat </a>
                    </h2></b>
                  </div>
                </div>
              </div>
          <div class="col-md-6" style="color: #fff;">
                <div class="card card-warning wow zoomInUp animation-delay-5" style="max-height: 400px; background-color:#fff;">
                <div class="withripple zoom-img">
                <a href="http://localhost/pemerintahan/post_berita/view/8"><img src="assets/img_berita/berita2.jpg" alt="" class="img-responsive" style="height: 280px; max-width: 100%;"></a>
                </div> 
                <div class="card-block" style="max-height: 100px; background-color:#fff;">
                    <b><h2 class="strong" style="color: #fff;">
                      <a href="http://localhost/pemerintahan/post_berita/view/8">Banjir Bandang di Lampung Selatan, BPBD Cari 3 Warga Hilang</a>
                    </h2></b>
                  </div>
                </div>
              </div>
            <div class="col-md-6" style="color: #fff;">
                <div class="card card-warning wow zoomInUp animation-delay-5" style="max-height: 420px; background-color:#fff;">
                <div class="withripple zoom-img">  
                <a href="http://localhost/pemerintahan/post_berita/view/7"><img src="assets/img_berita/berita1.jpg" alt="" class="img-responsive" style="height: 240px; max-width: 100%;"></a>
                </div>
                <div class="card-block" style="max-height: 120px; background-color:#fff;">
                    <b><h2 class="strong" style="color: #000;">
                      <a href="http://localhost/pemerintahan/post_berita/view/7">KPK Tetapkan Bupati Nonaktif Lampung Selatan Tersangka Pencucian Uang</a>
                    </h2></b>
                  </div>
                </div>
              </div>
            <div class="col-md-6" style="color: #fff;">
              <div class="card card-warning wow zoomInUp animation-delay-5" style="max-height: 400px; background-color:#fff;">
              <div class="withripple zoom-img">  
              <a href="http://localhost/pemerintahan/post_berita/view/12"><img src="assets/img_berita/berita6.jpg" alt="" class="img-responsive" style="height: 240px; max-width: 100%;"></a>
              </div>    
              <div class="card-block" style="max-height: 120px; background-color:#fff;">
                  <b><h2 class="strong" style="color: #000;">
                  <a href="http://localhost/pemerintahan/post_berita/view/12">DPRD-Pemkab Tandatangani Mou KUA-PPAS APBD Kabupaten Lampung Selatan Tahun 2019</a>
                  </h2></b>
                </div>
              </div>
            </div>

          </div>
          <br>
          <h1>Video Profil Daerah Kabupaten Lampung Selatan</h1>
          <video controls="true" width="730" height="410" src="assets/video/VideoProfil.mp4" frameborder="0" allowfullscreen>
          </video>
          </div>

          <div class="col-md-4" style="margin-top: 40px;">
            <div class="row">
              <div class="col-md-12 col-sm-4">
                <div class="card card-warning wow zoomInUp animation-delay-5">
                  <div class="withripple zoom-img">
                    <a href="<?php echo base_url();?>"><img src="assets/img/Bupati Lamsel.png" alt="..." class="img-responsive"></a>
                  </div>
                  <span  class="card-footer">Bupati Lampung Selatan Periode 2015-2019 </span>
                </div>
              </div>


  <div class="container-fluid">
		<div id="v-cal">
			<div class="vcal-header">
				<button class="vcal-btn" data-calendar-toggle="previous">
					<svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
						<path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
					</svg>
				</button>

				<div class="vcal-header__label" data-calendar-label="month">
					March 2017
				</div>


				<button class="vcal-btn" data-calendar-toggle="next">
					<svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
						<path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
					</svg>
				</button>
			</div>
			<div class="vcal-week">
				<span>Mon</span>
				<span>Tue</span>
				<span>Wed</span>
				<span>Thu</span>
				<span>Fri</span>
				<span>Sat</span>
				<span>Sun</span>
			</div>
			<div class="vcal-body" data-calendar-area="month"></div>
		</div>
	</div>


<div class="container-fluid">

<div class="textwidget custom-html-widget">
<br>
  <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
								<div id="gpr-kominfo-widget-container"></div>
<br>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


































<!--
  <div class="container">
  <div id="fh5co-project">
      <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
          <h1>Pemerintah Kabupaten Lampung Selatan</h1>
        </div>
      </div>
    </div>
  <div class="container-fluid proj-bottom">
    <div class="row">
      <div class="col-md-3 col-sm-5 fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="<?php echo base_url('layanan_publik')?>"><img src="<?php echo base_url('assets/images/Layanan Publik.png')?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
          <h3>Layanan Publik</h3>
        </a>
      </div>
      <div class="col-md-3 col-sm-5 fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="<?php echo base_url('data_penduduk')?>"><img src="<?php echo base_url('assets/images/Data Penduduk.png')?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
          <h3>Data Kependudukan</h3>
        </a>
      </div>
      <div class="col-md-3 col-sm-5 fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="<?php echo base_url('berita_terbaru')?>"><img src="<?php echo base_url('assets/images/Berita Terbaru.png')?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
          <h3>Berita Terbaru</h3>
        </a>
      </div>
      <div class="col-md-3 col-sm-5 fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="<?php echo base_url('e_gov')?>"><img src="<?php echo base_url('assets/images/E-Goverment.png')?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
          <h3>E-Goverment</h3>
        </a>
      </div>
      <div class="col-md-3 col-sm-5 fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="<?php echo base_url('info_wisata')?>"><img src="<?php echo base_url('assets/images/Informasi Pariwisata.png')?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
          <h3>Informasi Pariwisata</h3>
        </a>
      </div>
      <div class="col-md-3 col-sm-5 fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="<?php echo base_url('tentang')?>"><img src="<?php echo base_url('assets/images/Tentang.png')?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
          <h3>Profile Daerah</h3>
          </a>
      </div>
      <div class="col-md-3 col-sm-5 fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="<?php echo base_url('tentang')?>"><img src="<?php echo base_url('assets/images/Tentang.png')?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
          <h3>Potensi Daerah</h3>
          </a>
      </div>
      <div class="col-md-3 col-sm-5 fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="<?php echo base_url('tentang')?>"><img src="<?php echo base_url('assets/images/Tentang.png')?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
          <h3>Galery</h3>
          </a>
      </div>
    </div>
  </div>
    </div>

    <!-- carousel -->
<!--
<aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                  <li style="background: url('assets/img/background5.jpg'); background-size: cover;">
                      <div class="overlay"></div>
                      <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            </div>
                          </div>
                      </div>
                  </li>
                <li style="background: url('assets/img/background1.jpg'); background-size: cover;">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background: url('assets/img/background2.jpg'); background-size: cover;">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1> Menara Siger </h1>
                                    <h2> Kec. Bakauheni, Kab. Lampung Selatan </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background: url('assets/img/background3.jpg'); background-size: cover;">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                  <h1> Menara Siger </h1>
                                  <h2> Kec. Bakauheni, Kab. Lampung Selatan </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background: url('assets/img/background4.jpg'); background-size: cover;">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>Air Terjun Putri Malu</h2>
                                    <h1>Kec. Banjit, Kab. Way Kanan</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
        </aside>
-->
<div class="container">
  <div class="heading text-center">
    <h2>Lokasi Pemerintahan Kabupaten Lampung Selatan</h2>
  </div>
  <section id="contact">
    <div id="locationmap"></div>
    <div class="overlay bk-half-overlay"></div>
    <div class="container">
  </div>
</div>
  </section>

   <!-- FOOTER -->
   <footer class="main-footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h4 class="h6">Sejarah Singkat Lampung Selatan</h4>
                <p>
                  Kabupaten Lampung Selatan adalah salah satu kabupaten di Provinsi Lampung. Ibu kota kabupaten ini terletak di Kalianda.
                  Kabupaten Lampung Selatan bagian selatan meruncing dan mempunyai sebuah teluk besar yaitu Teluk Lampung.
                  Di Teluk Lampung terdapat sebuah pelabuhan yaitu Pelabuhan Panjang di mana kapal-kapal dalam dan luar negeri dapat merapat.
                  Secara umum pelabuhan ini merupakan faktor yang sangat penting bagi kegiatan ekonomi penduduk Lampung, terutama penduduk Lampung Selatan.
                  Pelabuhan ini sejak tahun 1982 termasuk dalam wilayah Kota Bandar Lampung.
                </p>
                <hr>
                <hr class="d-block d-lg-none">
              </div>
              <div class="col-lg-4">
                <p class="text-uppercase"><i class="fa fa-map-marker"></i> <strong>Provinsi Lampung <br>Kabupaten Lampung Selatan</strong>
                <hr class="d-block d-lg-none">
              </div>
              <div class="col-lg-7">
                <p1>Follow us Media Sosial LamSel for more update information </p1>
                <ul class=" list-inline">
                        <li class="list-inline-item"><a href="#" ><i class="fa fa-youtube-play"></i></a></li>
                        <li class="list-inline-item"><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" ><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" ><i class="fa fa-whatsapp"></i></a></li>
                      </ul>
              </div>
            </div>
          </div>

          <div class="copyrights">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 text-center-md">
                  <p>&copy; 2018 PemKab LamSel</p>
                </div>
                <div class="col-lg-8 text-right text-center-md">
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>

          <!-- Javascript files-->
          <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
          <script src="<?php echo base_url();?>vendor/popper.js/umd/popper.min.js"> </script>
          <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
          <script src="<?php echo base_url();?>vendor/jquery.cookie/jquery.cookie.js"> </script>
          <script src="<?php echo base_url();?>vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
          <script src="<?php echo base_url();?>vendor/jquery.counterup/jquery.counterup.min.js"> </script>
          <script src="<?php echo base_url();?>vendor/owl.carousel/owl.carousel.min.js"></script>
          <script src="<?php echo base_url();?>vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
          <script src="<?php echo base_url();?>js/jquery.parallax-1.1.3.js"></script>
          <script src="<?php echo base_url();?>vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
          <script src="<?php echo base_url();?>vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
          <script src="<?php echo base_url();?>js/front.js"></script>
          <script src="http://maps.googleapis.com/maps/api/js"></script>
          <script type="text/javascript">
            function initMap() {
            var map = new google.maps.Map(document.getElementById('locationmap'), {
                  zoom: 18,
                  center: {lat: -5.716180, lng: 105.584958},
                  zoomControl: true,
                  mapTypeControl: true,
                  scaleControl: true,
                  streetViewControl: true,
                  rotateControl: true,
                  fullscreenControl: true,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
            });
            var marker = new google.maps.Marker({
                  position: {lat: -5.716180, lng: 105.584958},
                  map: map
            });

            // event jendela di-load
            google.maps.event.addDomListener(window, 'load', initMap);
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnVVo_2T8gkPGhZggePoSrJfQCIrJ7OWU&callback=initMap"></script>
          <!--
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnVVo_2T8gkPGhZggePoSrJfQCIrJ7OWU&callback=initMap"></script>
        Start of Tawk.to Script-
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ae76cb85f7cdf4f0533be7a/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        End of Tawk.to Script-->
        <script src="dist/vanillaCalendar.js" type="text/javascript"></script>
	       <script>
		window.addEventListener('load', function () {
			vanillaCalendar.init({
				disablePastDays: true
			});
		})
	</script>

        <script type="text/javascript">
  $(document).ready(function () {
    var ownVideos = $("iframe");
    $.each(ownVideos, function (i, video) {
        var frameContent = $(video).contents().find('body').html();
        if (frameContent) {
            $(video).contents().find('body').html(frameContent.replace("autoplay", ""));
        }
    });
});
</script>

</body>
</html>
