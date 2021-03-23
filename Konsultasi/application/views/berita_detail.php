<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/berita.css');?>">
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
    <title>Berita Page</title>
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
      <!-- akhir navbar -->

      

       



      <!-- jumbotron -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <!-- Judul Berita -->
        <h1 class="display-5"><?php echo $nav->judul ?></h1>
        <div>
        
        <figure>
        <img src="<?php echo base_url(); ?>assets/img/newsimg/<?php echo $nav->image ?>" class="img-fluid" width="350" height="250">
        <figcaption><small><?php echo $nav->judul ?></small></figcaption>
        </figure>
        
        </div>
        
        
      <div>
        <!-- isi Berita -->
        <p class="lead"><?php echo $nav->berita ?></p>
        </div>
        </div>
       </div>
      

      <!-- akhir jumbotron -->

     <!-- footer -->
     <footer style="margin-top: -200px;">
        <div class="container text-center" class="footer" >
          <div class="row">
            <div class="col-sm-12">
              <p style="color: grey;">&copy; copyright 2020 | built with 
              <i class="glyphicon glyphicon-heart"></i> by. <a href="http://instagram.com/rachmadi_15">Sobatku.id 2020</a>.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <a href="http://youtube.com/" class="btn btn-danger"
              ><i class="glyphicon glyphicon-play"></i> Subscribe to YouTube</a>
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