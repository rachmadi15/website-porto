<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jadwal.css');?>">
    <style>
      .a1 {
        color: white !important;
      }
      .link1:hover {
        color: white;
          background-color: #dc3545 !important;
      }
      li {
        padding: 10px;
      }
    </style>

    <title>Jadwal Page</title>
  </head>
  <body>

     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target sticky-top" id="ftco-navbar">
        <div class="container">
          <img src="<?php echo base_url(); ?>assets/img/1.png" width="100" height="70">
          <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle tog" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
              <li class="nav-item link1"><a class="nav-link link a1" href="<?=site_url('masuk')?>">Beranda</a></li>
              <li class="nav-item link1"><a class="nav-link a1" href="<?=site_url('masuk/berita')?>">Berita</a></li>
              <li class="nav-item link1"><a class="nav-link a1" href="<?=site_url('masuk/dokter')?>">Jadwal</a></li>
              <li class="nav-item link1"><a class="nav-link a1" href="<?=site_url('masuk/tentang')?>">Tentang</a></li>
              <li class="nav-item link1"><a class="nav-link a1" href="<?=site_url('chat')?>">Pesan</a></li>
              <li class="nav-item"><a href="<?=site_url('masuk/profile')?>"><img class="rounded-circle" src="<?php echo base_url(); ?>assets/img/<?php echo $nav->foto ?>" width="50" height="50"></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- akhir navbar -->

       



      <!-- jumbotron -->
      <div class="jumbotron jumbotron-fluid" style="margin-top: 80px;">
        <div class="container">
          <h1>Jadwal Psikiater</h1>
            <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Jam Buka</th>
                <th scope="col">Hari Libur</th>
                <th scope="col">Pendaftaran</th>
              </tr>
            </thead>
            <?php 
		        $no = 1;
		        foreach($dokter as $u){ 
	          ?>
            <tbody>
              <tr>
                <td><img src="<?php echo base_url(); ?>assets/img/sasuke.jpg" width="150" height="150"></td></td>
                <td><p style="font-family: Arvo; font-size: 28px;"><?php echo $u->nama ?></p></td>
                <td><p style="font-family: Arvo; font-size: 28px;"><?php echo $u->jam ?></p></td>
                <td><p style="font-family: Arvo; font-size: 28px;"><?php echo $u->libur ?></p></td>
                <td><button class="btn btn-info">Daftar</button></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>
      <!-- akhir jumbotron -->

  
      <!-- footer -->
      <footer>
        <div class="container text-center" class="footer">
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
      <!-- akhir footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>