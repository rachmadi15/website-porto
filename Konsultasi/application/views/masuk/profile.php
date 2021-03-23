<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Profile</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
  
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
</head>
<body>

  <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target sticky-top mb-5" id="ftco-navbar">
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
              <li class="nav-item">
                <div class="btn-group">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="<?=site_url('masuk/profile')?>"><img class="rounded-circle" src="<?php echo base_url(); ?>assets/img/<?php echo $nav->foto ?>" width="50" height="50"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?=site_url('masuk/profile')?>">Profile</a>
                    <a class="dropdown-item" href="<?php echo base_url('/welcome/logout'); ?>">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- akhir navbar -->
        <div class="row">
                <div class="col-md-8 offset-md-2 col-12 profile-main mt-4">
                    <div class="row">
                        <div class="col-md-12 col-12 user-detail-main border mb-3 pb-2">
                            <div class="row">
                                <div class="col-md-12 col-12 profile-back">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-12 user-detail text-center">
                                    <h4 class="m-0"><strong><?php echo $nav->nama ?></strong></h4>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-12 mt-4 pl-0 accordion-group-one">
                            <div id="accordionUserInfo" class="mb-2">
                            <div class="card rounded-0 info-card">
                                <div class="card-header rounded-0 pt-2 pb-2" id="headingUserInfo">
                                    <h6 class="mb-0">User Info</h6>
                                    <a class="float-right" data-toggle="collapse" data-target="#collapseUserInfo"
                                    aria-expanded="true" aria-controls="collapseUserInfo">
                                    </a>
                                </div>
                                <div id="collapseUserInfo" class="collapse show" aria-labelledby="headingUserInfo" 
                                data-parent="#accordionUserInfo">
                                <div class="card-body pt-2 pb-2">
                                    <div class="body-section mb-3">
                                        <h6 class="section-heading mb-1 fon"><strong>Name</strong></h6>
                                        <p class="section-content m-0 fon"><?php echo $nav->nama ?></p>
                                    </div>
                                    <div class="body-section mb-3">
                                        <h6 class="section-heading mb-1 fon"><strong>Address</strong></h6>
                                        <p class="section-content m-0 fon"><?php echo $nav->provinsi ?></p>
                                    </div>
                                    <div class="body-section mb-3">
                                        <h6 class="section-heading mb-1 fon"><strong>Contact Number</strong></h6>
                                        <p class="section-content m-0 fon"><?php echo $nav->telepon ?></p>
                                    </div>
                                    <div class="body-section mb-3">
                                        <h6 class="section-heading mb-1 fon"><strong>Email</strong></h6>
                                        <p class="section-content m-0 fon"><?php echo $nav->email ?></p>
                                    </div>
                                    <div class="body-section mb-3">
                                        <h6 class="section-heading mb-1 fon"><strong>Jenis Kelamin</strong></h6>
                                        <p class="section-content m-0 fon"><?php echo $nav->jk ?></p>
                                    </div>
                                    <?php echo anchor('masuk/edit', '<button class="btn btn-warning btn-sm fon">Edit</button>'); ?>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mt-4 pl-0 accordion-group-one">
                            <div id="accordionUserInfo" class="mb-2">
                            <div align="center" class="mt-3">
                              <img class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/<?php echo $nav->foto ?>" width="200" height="120">
                            </div>
                            </div>
                        </div>
                    <div class="col-md-4 col-12 mt-4 accordion-group-two">
                        <div id="accordionMyStory" class="mb-2">
                          <div class="card rounded-0 story-card">
                            <div class="card-header rounded-0 pt-2 pb-2" id="headingMyStory">
                                <h6 class="mb-0 fon">Daftar Konsultasi</h6>
                                <a class="float-right" data-toggle="collapse" data-target="#collapseMyStory" 
                                aria-expanded="true" aria-controls="collapseMyStory">
                                </a>
                            </div>
                            <div id="collapseMyStory" class="collapse show" aria-labelledby="headingMyStory" data-parent="#accordionMyStory">
                              <div class="card-body pt-2 pb-2">
                                <div class="body-section mb-3">
                                    <h6 class="section-heading mb-1 fon"><strong>Daftar Konsultasi</strong></h6>
                                </div>
                                <?php echo anchor('masuk/dokter', '<button class="btn btn-warning btn-sm fon">Mulai Konsultasi</button>'); ?>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="accordionSocialStatistics">
                          <div class="card rounded-0 info-card">
                            <div class="card-header rounded-0 pt-2 pb-2" id="headingSocialStatistics">
                                <h6 class="mb-0">Janji Saya</h6>
                                <a class="float-right" data-toggle="collapse" data-target="#collapseSocialStatistics" 
                                aria-expanded="true" aria-controls="collapseSocialStatistics">
                                </a>
                                
                            </div>
                            <div id="collapseSocialStatistics" class="collapse show" lass="collapse show" 
                            aria-labelledby="headingSocialStatistics" data-parent="#accordionSocialStatistics">
                              <div class="card-body pt-2 pb-2">
                              <?php echo anchor('chat', '<button class="btn btn-warning btn-sm fon">Pesan</button>'); ?><br><br>
                              <?php echo anchor('masuk/dokter', '<button class="btn btn-warning btn-sm fon">Buat Janji</button>'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

    

</body>
</html>