<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home.css');?>">

    <title>Home Page</title>
  </head>
  <body style="background-color: #e7e7e7;">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target sticky-top" id="ftco-navbar">
        <div class="container">
          <img src="<?php echo base_url(); ?>assets/img/1.png" width="100" height="70">
          <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle tog" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
              <li class="nav-item link1"><a class="nav-link link a1" href="<?=site_url('awal/')?>">Beranda</a></li>
              <li class="nav-item link1"><a class="nav-link a1" href="<?=site_url('awal/berita')?>">Berita</a></li>
              <li class="nav-item link1"><a class="nav-link a1" href="<?=site_url('awal/jadwal')?>">Jadwal</a></li>
              <li class="nav-item link1"><a class="nav-link a1" href="<?=site_url('awal/tentang')?>">Tentang</a></li>
              <li class="nav-item"><a href="<?=site_url('welcome')?>" class="btn btn-secondary ml-2">Masuk</a></li>
              <li class="nav-item"><a href="<?=site_url('user')?>" class="btn btn-light ml-2">Daftar</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="jumbotron div1 mb-5" style="background-color: #87CEEB">
        <h1 align="center" class="hal1">Kami Disini Karena Kami Peduli</h1>
        <h2 align="center"><i>"Kesehatan dan kecerian secara alami melahirkan satu sama lain - Joseph Addison"</i></h2>
      </br>
        <p align="center"><a href="<?=site_url('awal/jadwal')?>" class="btn btn-primary">Konsultasi Sekarang</a></p>
        <?= $this->session->flashdata('message'); ?>
      </div>



        <section class="ftco-section  bg-light mt-5" id="doctor-section">
            <div class="container-fluid px-5">
              <h2 class="mt-5">Psikiater Baru</h2>
                <div class="row justify-content-center mb-5 pb-2">

          <div class="col-md-8 text-center heading-section ftco-animate">

          </div>
          </div>  
            
                <div class="row">
                <?php 
                $no = 0;
                  foreach($user->result() as $u)
                  {
                    $no = $no + 1;
                    if($no < 5) {
                ?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                       <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                          <img src="<?php echo base_url(); ?>assets/img/newsimg/<?php echo $u->foto ?>" width="250" height="150">
                        </div>
                        <div class="text pt-3 text-center">
                          <h3 class="mb-2"><?php echo $u->fullname ?></h3>
                          <span class="position mb-2">Rp. <?php echo $u->price ?></span>
                          <div class="faded">
                            <p align="center">
                              Jam Konsultasi : <?php echo $u->jam ?></br>
                              Hari Libur     : <?php echo $u->libur ?> </br>
                            </p>
                            <p><button type="button" data-toggle="modal" data-target="#mydokter" class="btn btn-primary">DAFTAR</button></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                    } else {
                      break;
                    }
                  }
                ?>
                </div>
                
                <p align="right" class="mt-5"><a href="<?=site_url('awal/jadwal')?>" class="a2">Selengkapnya</a></p>
            </div>
        </section>

        <!-- Modal daftar -->
      <div id="mydokter" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title mr-auto">Pesan.....</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <h3>Anda Harus Mendaftar Terlebih Dahulu</h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal daftar -->
        

        <div class="jumbotron jumbotron-fluid mt-5 bg-light">
          <div class="container">
            <h3 align="center">Layanan Yang Disediakan Sobatku.id</h3>
            <hr>
            <div class="row">
              <div class="col-sm-6" style="text-align: center;">
                  <li style='list-style-type: none;'><h2>Khusus Pengidap Penyakit Mental</h2></li>
                  <li style='list-style-type: none;'><p>Menu ini tersedia untuk para pengidap penyakit mental yang sudah parah atau
                  membutuhkan penanganan lebih lanjut.</p></li>
              </div>
              <div class="col-sm-6" style="text-align: center;">
                  <li style='list-style-type: none;'><h2>Konsultasi Psikiater</h2></li>
                  <li style='list-style-type: none;'><p>Menu ini tersedia untuk pelajar ataupun pekerja yang sedang tertekan dikarenakan
                  pelajaran ataupun pekerjaan yang sedang mereka lakukan.</p></li>
              </div>
            </div>
          </div>
        </div>

        <div class="jumbotron jumbotron-fluid mt-5 bg-light">
          <div class="container">
            <h3>Tentang Sobatku.id</h3>
            <div class="row">
              <div class="col-sm-4 mt-3 text-center">
                <img src="<?php echo base_url(); ?>assets/img/1.png" width="200" height="170">
              </div>
              <div class="col-sm-8 mt-3">
                <p class="p2">Web ini dibuat untuk para pasien atau orang yang merasakan adanya gangguan mental/psikologi agar bisa langsung mencari psikiater yang sekiranya cocok dengan kondisinya saat itu. Pada website ini juga tersedia menu chat yang digunakan untuk layanan konsultasi psikologi. Website ini juga bisa membantu para mahasiswa atau pekerja yang sedang mengalami permasalahan yang sulit diatasi sehingga harus butuh bantuan para psikiater untuk membantu meredakan stress. dalam website juga tersedia fitur hasil rekap dari pasien yang tersimpan pada riwayat pasien tersebut</p>
              </div>
            </div>
          </div>
        </div>

    <br>

    <footer class="mt-5 bg-dark" style="height: 120px;">
          <div class="container text-center" id="kontak">
            <div class="row">
              <div class="col-sm-12">
                <p style="color: grey;">&copy; copyright 2020 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="http://instagram.com/rachmadi_15">Sobatku.id 2020</a>.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <a href="http://youtube.com/" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i> Subscribe to YouTube</a>
              </div>
            </div>
          </div>
        </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>