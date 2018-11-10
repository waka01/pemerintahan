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
                <li class="nav-item dropdown"><a href="home" data-toggle="text" class="text">Beranda</a>
                </li>
                <li  class="nav-item dropdown active menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Layanan Publik</a>
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

  <div class="wrapper">
    <div class="container">
    <h1><b>Prosedur Pembuatan KTP</b></h1>
    
      <div class="row">
        <div class="col-lg-12">     
          <p>Dokumen wajib yang penting untuk dimiliki semua orang indonesia adalah KTP, walaupun banyak orang yang sedikit mengabaikan ini makanya banyak orang juga tidak memilikinya. KTP ( Kartu Tanda Penduduk ) harus kamu miliki ketika kamu sudah beranjak umur 17 tahun tidak peduli kamu berasal dari daerah mana selama kamu berada di indonesia kamu harus memiliki KTP.
          <img src="assets/img_berita/ktp1.jpg" alt="" class="img-responsive" style="height: 300px; max-width: 100%;">    
          KTP juga berguna saat mengurus dokumen lain seperti membuat SIM dan paspor, saat kamu membuat dokumen tersebut kamu harus melampirkan KTP juga sebagai syarat. Sebelum masuk ke subjudul cara membuat KTP mari kita lihat dahulu fungsi dari KTP itu sendiri berikut beberapa diantaranya:</p>
            <ul>
              <li>KTP berfungsi sebagai indentitas kamu sebagai penduduk indonesia</li>
              <li>KTP dapat digunakan sebagai alat indentifikasi kamu saat mengalami kecelakaan atau musibah lain</li>
              <li>KTP merupakan syarat wajib yang harus disertakan saat kamu ingin menikah.</li>
            </ul>
            </br>
            <p>Masih banyak fungsi KTP yang mungkin tidak tertera di atas, Nah setelah mengetahui alasan penting kenapa kamu membuatnya berikut adalah cara membuat e-KTP baru yang dapat kamu lakukan di kelurahan terdekat.</p>
          <h1><b>Syarat dan prosedur membuat e-KTP</b></h1>
            <p>Telah berusia 17 tahun</p>
            <p>Surat Pengantar RT/RW.
            Fotokopi KK.</p>
            <p>Fotokopi Akta Kelahiran
            Surat Keterangan Pindah yang diterbitkan oleh pemerintah Kabupaten/Kota dari daerah asal.</p>
            <p>Surat Keterangan Datang dari Luar Negeri yang diterbitkan oleh Instansi Pelaksana bagi WNI yang datang dari Luar Negeri karena pindah.</p>
            <p>Datang langsung untuk di foto (E-KTP) atau melampirkan pas foto terbaru ukuran 3×4 sebanyak 2 lembar (KTP Lama)</p>
            </br>
          <h1><b>Prosedur pembuatan dan perpanjang e-KTP</b></h1>
            <p>Datanglah ke kecamatan / kelurahan pada pagi hari : untuk menghindari antrian saat membuat atau memperpanjang KTP kamu dapat datang lebih pagi ke kelurahan. Lalu berikan berkas dokumen ke petugas di loket dan kamu akan mendapatkan nomor antrian.</p>
            <p>Pengambilan data : Setelah nomor antrian dipanggil maka inilah saatnya pengambilan data kamu, awal biasanya kamu akan difoto, pengambilan tanda tangan digital, perekam data sidik jari, scan retina mata.</p>
            <p>proses pelengkapan data akan berlangsung selama 15 menit dan proses pembuatan akan berlangsung paling lama 14 hari atau 2 minggu setelah kamu mengikuti semua persyaratan di atas</p>
          <h1><b>Syarat perpanjang KTP :</b></h1>
            <p>KTP yang telah habis masa berlakunya.</p>
            <p>Surat pengantar RT/ RW</p>
            <p>Fotokopi KK</p>
            <p>Formulir permohonan perpanjang KTP</p>
          </div>
        </div>
      </div>
    </div>
  </section


   <!-- FOOTER -->
   <footer class="main-footer">
          <div class="container">
            <div class="row">
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

          <link rel='stylesheet' id='su-galleries-shortcodes-css'  href='https://www.lampungselatankab.go.id/sites/wp-content/plugins/shortcodes-ultimate/assets/css/galleries-shortcodes.css?ver=5.0.3' type='text/css' media='all' />
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/plugins/mastercity/layoutcreator/assets/javascripts/mllc-view.js?ver=1540749417'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.hoverIntent.minified.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.prettyPhoto.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/superfish.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/ownScript.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.flexslider-min.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.flexslider.start.main.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>

</body>
</html>
