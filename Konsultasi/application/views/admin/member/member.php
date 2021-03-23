<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


<div class="col-md-14 pl-3 pt-1 ">
<h3><i class="fas fa-users pr-1"></i>Member List</h3><hr>
<?= $this->session->flashdata('message'); ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2 addbutton" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square mr-2"></i>
  Add Data
</button>




<table class="table  table-bordered table-hover">
<thead class="thead-dark thead-center">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Name</th>
    <th scope="col">Address</th>
    <th scope="col">E-mail</th>
    <th scope="col">Telephone</th>
    <th scope="col">Gender</th>
    <th colspan="3" scope="col">More</th>
  </tr>
</thead>
<tbody>
  <?php
      $count = 0;
      foreach($data_mbr as $row) {
        $count = $count + 1;
      
  
  ?>

  <tr>
    <th scope="row"><?php echo $count ?></th>
    <td><?php echo $row->nama ?></td>
    <td><?php echo $row->kota ?></td>
    <td><?php echo $row->email ?></td>
    <td><?php echo $row->telepon ?></td>
    <td><?php echo $row->jk ?></td>
    <td><a href="<?php echo base_url('member/DeleteData/') . $row->id ?>" class="btn far fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete" onclick="return confirm('Delete?');"></a></td>

      <?php } ?>
  </tr>
</tbody>
</table>


</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url(); ?>member/add" method="post">
        		<div class="form-group col-sm" >
                     <input type="text" class="form-control form-control-user" id="fullname" placeholder="Enter Full Name..." name="fullname" required>
                </div>
                <div class="form-group col-sm" >
                     <input type="text" class="form-control form-control-user" id="address" placeholder="Enter Address..." name="address" required>
                </div>
                <div class="form-group col-sm" >
                     <input type="text" class="form-control form-control-user" id="email" placeholder="Enter E-Mail..." name="email" required>
                </div>
                <div class="form-group col-sm" >
                     <input type="text" class="form-control form-control-user" id="telp" placeholder="Enter Telephone..." name="telp" required>
                </div>
                <div class="form-group col-sm">
                <input type="radio" id="male" name="gender" value="male" required>
  					<label for="male">Male</label>
  					<input type="radio" id="female" name="gender" value="female">
 					<label for="female">Female</label><br>
 				</div>
        	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button></form>
      </div>
    </div>
  </div>
</div>
