<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


<div class="col-md-14 pl-3 pt-1 ">
<h3><i class="fas fa-users pr-1"></i>Daftar Pembelian</h3><hr>



<table class="table  table-bordered table-hover">
<thead class="thead-dark thead-center">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Id pemesan</th>
    <th scope="col">Id Dokter</th>
    <th scope="col">Nama Dokter</th>
    <th scope="col">Harga</th>
  </tr>
</thead>
<tbody>
  <?php
      $count = 0;
      foreach($join_anggota_simpanan as $row) {
        $count = $count + 1;
      
  
  ?>

  <tr>
    <th scope="row"><?php echo $count ?></th>
    <td><?php echo $row->id_pasien ?></td>
    <td><?php echo $row->id_dokter ?></td>
    <td><?php echo $row->fullname ?></td>
    <td><?php echo $row->price ?></td>

      <?php } ?>
  </tr>
</tbody>
</table>


</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
