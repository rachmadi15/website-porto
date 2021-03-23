<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="#">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/edit.css');?>">

    <title>Psikiater</title>
  </head>
  <body>
    <div class="wrapper">
        <!-- Sidebar  -->
          <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Welcome Psikiater</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Menu</p>
                <li>
                    <a href="<?=site_url('psikiater')?>">Profile</a>
                </li>
                <li>
                    <a href="<?=site_url('psikiater/edit')?>">Pengaturan</a>
                </li>
                <li>
                    <a href="<?=site_url('psikiater/pasien')?>">Daftar Pasien</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url('/welcome/logout'); ?>">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
              <h1>Edit Profil</h1>
              <hr>
              <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                  <div class="text-center">
                    
                  </div>
                </div>
                
                <!-- edit form  -->
                <div class="col-md-9 personal-info">
                  <h3>INFO SAYA</h3>
                  <?php echo form_open_multipart('/psikiater/update'); ?>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Nama: </label>
                      <div class="col-lg-8">
                        <input class="form-control" type="text" name="fullname" value="">
                        <input class="form-control" type="hidden" name="id" value="<?php echo $user->id ?>">
                        <input class="form-control" type="hidden" name="id_lain" value="<?php echo $baru->id ?>">
                        <input class="form-control" type="hidden" name="id_baru" value="<?php echo $lama->id ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Email</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="email" name="email" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">No. hp</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="text" name="telp" value="">
                      </div>
                    </div>
                    <div class="form-group col-sm-5" >
                    <label for="jam">Working Hour</label><br>
                    <input type="text" class="form-control form-control-user" id="jam" placeholder="20:41" name="jam">
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Hari Libur</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" name="libur" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Biaya</label>
                      <div class="col-md-8">
                        <input class="form-control" type="number" name="price" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Jumlah Maksimum Pasien</label>
                      <div class="col-md-8">
                        <input class="form-control" type="number" name="jumlah" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Foto:</label>
                      <div class="col-md-8">
                        <input type="file" name="foto" class="form-control" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-8">
                        <input type="submit" class="btn btn-primary" value="Save Changes">
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel">
                      </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                
            </div>
          </div>
          </hr>
</div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
  </body>
</html>