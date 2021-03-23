<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Psikiater</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style2.css');?>">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
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
            <h2>Profil Saya</h2>
            <!-- Isi Biodata -->
            <div class="container">
              <div class="card kartu">
                <div class="row">
                  <div class="col-md-4">
                  <div class="foto">
                    <img src="<?php echo base_url(); ?>assets/img/newsimg/<?php echo $user->foto ?>" alt="" width="200" height="200" style="display: block; margin: auto;">
                  </div>
                  </div>
                  <div class="col-md-8 kertas-biodata">
                    <div class="biodata">
                    <table width="100%" border="0">
                <tbody><tr>
                    <td valign="top">
                    <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                      <tbody>
                        <tr>
                          <td width="25%" valign="top" class="textt">Nama</td>
                            <td width="2%">:</td>
                            <td > <?php echo $user->fullname ?> </td>
                        </tr>
                      <tr>
                          <td class="textt">Email</td>
                            <td>:</td>
                            <td><?php echo $user->email ?></td>
                        </tr>
                      <tr>
                          <td class="textt">No. hp</td>
                            <td>:</td>
                            <td><?php echo $user->telp ?></td>
                        </tr>
                      <tr>
                          <td class="textt">Jam Konsultasi</td>
                            <td>:</td>
                            <td><?php echo $user->jam ?></td>
                        </tr>
                      <tr>
                          <td class="textt">Hari Libur</td>
                            <td>:</td>
                            <td><?php echo $user->libur ?></td>
                        </tr>
                      <tr>
                          <td valign="top" class="textt">Biaya</td>
                            <td valign="top">:</td>
                            <td> Rp. <?php echo $user->price ?></td>
                        </tr>
                    <tr>
                        <td class="textt">Jumlah Pasien</td>
                            <td>:</td>
                        <td><?php echo $hasil->total ?></td>
                    </tr>
                    </tbody></table>
                    </td>
                </tr>
                </tbody></table>
              </div>
                  </div>
                </div>
              </div>
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