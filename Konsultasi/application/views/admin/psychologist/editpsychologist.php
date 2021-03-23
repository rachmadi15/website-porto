<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


  <div class="col-md-14 pl-3 pt-1 ">
  
  <h3><i class="fas fa-plus-square pr-1"></i>Edit Psychologist Data</h3><hr>
  <form action="<?php echo base_url('psychologist/EditAction') ?>" method="post">
      <div class="form-group col-sm-5" >
           <input type="text" class="form-control form-control-user" value="<?php echo $data_psy->id ?> " disabled>
           <input type="text" id="id" name="id"  value="<?php echo $data_psy->id ?> " hidden>
           <input type="text" id="id1" name="id1"  value="<?php echo $pasien->id ?> " hidden>
           <input type="text" id="id2" name="id2"  value="<?php echo $pasien2->id ?> " hidden>
      </div>
      <div class="form-group col-sm-5" >
           <input type="text" class="form-control form-control-user" id="fullname" placeholder="Enter Full Name..." name="fullname" value="<?php echo $data_psy->fullname ?>">
      </div>
      <div class="form-group col-sm-5" >
           <input type="text" class="form-control form-control-user" id="address" placeholder="Enter Address..." name="address" value="<?php echo $data_psy->address ?>">
      </div>
      <div class="form-group col-sm-5" >
           <input type="text" class="form-control form-control-user" id="email" placeholder="Enter E-Mail..." name="email" value="<?php echo $data_psy->email ?>">
      </div>
      <div class="form-group col-sm-5" >
           <input type="text" class="form-control form-control-user" id="telp" placeholder="Enter Telephone..." name="telp" value="<?php echo $data_psy->telp ?>">
      </div>
      <div class="form-group col-sm-5">
      <input type="radio" id="male" name="gender" value="male"  <?php echo ($data_psy->gender == "male" ? 'checked="checked"': ''); ?>>
            <label for="male">Male</label>
     <input type="radio" id="female" name="gender" value="female" <?php echo ($data_psy->gender == "female" ? 'checked="checked"': ''); ?> >
           <label for="female">Female</label><br>
       </div>
       <div class="form-group col-sm-5" >
                    <label for="jam">Working Hour</label><br>
                    <input type="time" class="form-control form-control-user" id="jam" placeholder="Enter Work Hour..." name="jam" value="<?php echo $data_psy->jam ?>" >
                </div>
                <div class="form-group col-sm-5" >
                    <label for="libur">Day Off</label><br>
                    <select id="libur" name="libur">
                    <option value="Senin" <?php echo ($data_psy->libur == "Senin" ? 'selected="selected"': ''); ?>>Senin</option>
                    <option value="Selasa" <?php echo ($data_psy->libur == "Selasa" ? 'selected="selected"': ''); ?>>Selasa</option>
                    <option value="Rabu" <?php echo ($data_psy->libur == "Rabu" ? 'selected="selected"': ''); ?>>Rabu</option>
                    <option value="Kamis" <?php echo ($data_psy->libur == "Kamis" ? 'selected="selected"': ''); ?>>Kamis</option>
                    <option value="Jumat" <?php echo ($data_psy->libur == "Jumat" ? 'selected="selected"': ''); ?>>Jumat</option>
                    <option value="Sabtu" <?php echo ($data_psy->libur == "Sabtu" ? 'selected="selected"': ''); ?>>Sabtu</option>
                    <option value="Minggu" <?php echo ($data_psy->libur == "Minggu" ? 'selected="selected"': ''); ?>>Minggu</option>
                    </select>
                </div>
     <div class="form-group col-sm-5" >
          <input type="number" class="form-control form-control-user" id="price" placeholder="Enter Price..." name="price" value="<?php echo $data_psy->price ?>">
     </div>

       <div class="form-group col-sm-5">
          <button type="submit" class="btn btn-primary btn-user btn-block">Edit Data</button>
      </div>
  </form>
  </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->