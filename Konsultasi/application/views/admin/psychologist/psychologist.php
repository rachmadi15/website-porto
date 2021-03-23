<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


<div class="col-md-14 pl-3 pt-1 ">
<h3><i class="fas fa-user-nurse pr-1"></i>Psychologist List</h3><hr>
<?= $this->session->flashdata('message'); ?>
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square mr-2"></i>
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
    <th scope="col">Working Hour</th>
    <th scope="col">Day Off</th>
    <th scope="col">Price</th>
    <th colspan="3" scope="col">More</th>
  </tr>
</thead>
<tbody>
  <?php
      $count = 0;
      foreach($data_psy as $row) {
        $count = $count + 1;
      
  
  ?>

  <tr>
    <th scope="row"><?php echo $count ?></th>
    <td><?php echo $row->fullname ?></td>
    <td><?php echo $row->address ?></td>
    <td><?php echo $row->email ?></td>
    <td><?php echo $row->telp ?></td>
    <td><?php echo $row->gender ?></td>
    <td><?php echo $row->jam ?> WIB</td>
    <td><?php echo $row->libur ?></td>
    <td>Rp. <?php echo $row->price ?></td>
    <td><a href="<?php echo base_url('psychologist/editpsychologist/').$row->id ?>" class="btn fas fa-edit bg-warning p-2 text-white rounded editbutton" data-toggle="tooltip" title="Edit"></a></td>
    <td><a href="<?php echo base_url('psychologist/DeleteData/') . $row->id ?>" class="btn far fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete" onclick="return confirm('Delete?');"></a></td>

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
        <h5 class="modal-title" id="exampleModalLabel">Add New Psychologist</h5>
        <?= $this->session->flashdata('message'); ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('/psychologist/add'); ?>
            <div class="form-group col-sm" >
                     <input type="text" class="form-control form-control-user" id="fullname" placeholder="Enter Full Name..." name="fullname">
                </div>
                <div class="form-group col-sm" >
                     <input type="text" class="form-control form-control-user" id="address" placeholder="Enter Address..." name="address">
                </div>
                <div class="form-group col-sm" >
                     <input type="text" class="form-control form-control-user" id="email" placeholder="Enter E-Mail..." name="email">
                </div>
                <div class="form-group col-sm" >
                     <input type="password" class="form-control form-control-user" id="password" placeholder="Enter Password..." name="password">
                </div>
                <div class="form-group col-sm" >
                     <input type="text" class="form-control form-control-user" id="telp" placeholder="Enter Telephone..." name="telp">
                </div>
                <div class="form-group col-sm">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                </div>
                <div class="form-group">
                      <label class="col-md-3 control-label">Jumlah Maksimum Pasien</label>
                      <div class="col-md-8">
                        <input class="form-control" type="number" name="jumlah" value="">
                      </div>
                    </div>
                <div class="form-group col-sm" >
                      <label for="jam">Working Hour</label><br>
                     <input type="time" class="form-control form-control-user" id="jam" placeholder="Enter Work Hour..." name="jam">
                </div>
                <div class="form-group col-sm" >
                     <label for="libur">Day Off</label><br>
                     <select id="libur" name="libur">
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jumat">Jumat</option>
                      <option value="Sabtu">Sabtu</option>
                      <option value="Minggu">Minggu</option>
                     </select>
                </div>
                <div class="form-group col-sm">
                  <label class="col-md-3 control-label">Foto</label>
                  <div class="col-md-8">
                    <input type="file" name="foto" class="form-control" value="">
                  </div>
                </div>
                <div class="form-group col-sm" >
                     <input type="number" class="form-control form-control-user" id="price" placeholder="Enter Price..." name="price">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button></form>
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>