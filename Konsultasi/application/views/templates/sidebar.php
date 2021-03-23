<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
  <div class="sidebar-brand-icon">
    <img src="<?=site_url('assets\img\logo1.png')?>" width="35" height="35">
  </div>
  <div class="sidebar-brand-text mx-3">SobatKu.id</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="<?=site_url('admin')?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  User
</div>

<!--USER-->
<li class="nav-item">
  <a class="nav-link" href="<?=site_url('member')?>">
    <i class="fas fa-fw fa-users pr-1"></i>
    <span>Member</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?=site_url('psychologist')?>">
    <i class="fas fa-fw fa-user-nurse pr-1"></i>
    <span>Psychologist</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?=site_url('news')?>">
    <i class="fas fa-newspaper pr-1"></i>
    <span>News</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?=site_url('uang')?>">
    <i class="fas fa-money-bill-alt"></i>
    <span>Laporan Pembelian</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link" href="<?= base_url('auth/logout');?>" data-toggle="modal" data-target="#logoutModal">
    <i class="fas fa-sign-out-alt pr-1"></i>
    <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->