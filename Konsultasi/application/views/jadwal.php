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

       



      <div class="container mt-5" style="background-color: white;">
        <h1 align="center">Daftar Psikiater</h1>
        <?php echo form_open('awal/cari') ?>
          <div class="row mt-5">
            <div class="col-6">
              <input class="form-control form2" name="keyword" type="text" placeholder="Cari....">
              
            </div>
            <div class="col-6">
              <button type="submit" class="btn btn-success">Cari</button>
              
            </div>
          </div>
        <?php echo form_close() ?>
        


        <div class="row mt-5">
        <?php 
		        $no = 1;
		        foreach($dokter as $u){ 
              if($no % 4 != 0)
              {
                
              
        ?>
          <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                <div class="img-wrap d-flex align-items-stretch">
                  <img src="<?php echo base_url(); ?>assets/img/newsimg/<?php echo $u->foto ?>" width="250" height="150">
                </div>
                  <div class="text pt-3 text-center">
                    <h3 class="mb-2"><?php echo $u->fullname ?></h3>
                    <span class="position mb-2">Rp.<?php echo $u->price ?></span>
                    <div class="faded">
                      <p align="center">
                        Jam Konsultasi : <?php echo $u->jam ?></br>
                        Hari Libur     : <?php echo $u->libur ?> </br>
                      </p>
                      
                      <p><button type="button" data-toggle="modal" data-target="#mydokter" class="btn btn-primary">Daftar</button></p>
                    </div>
                </div>
                </div>
              </div>

        <?php
              }
              if($no % 4 == 0) {
                echo '<div class="row mt-5">';
             
	      ?>
        <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                <div class="img-wrap d-flex align-items-stretch">
                  <img src="<?php echo base_url(); ?>assets/img/brok1.jpg" width="250" height="150">
                </div>
                  <div class="text pt-3 text-center">
                    <h3 class="mb-2"><?php echo $u->nama ?></h3>
                    <span class="position mb-2">Rp. <?php echo $u->harga ?></span>
                    <div class="faded">
                      <p align="center">
                        Jam Konsultasi : <?php echo $u->jam ?></br>
                        Hari Libur     : <?php echo $u->libur ?> </br>
                      </p>
                      
                      <p><button type="button" data-toggle="modal" data-target="#mydokter" class="btn btn-primary">Daftar</button></p>
                    </div>
                </div>
                </div>
              </div>

        <?php
              echo '</div>';
            }
          }
        ?>
					
         
        </div>
        
      </div>

      <!-- akhir jumbotron -->
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