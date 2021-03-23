<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


  <div class="col-md-14 pl-3 pt-1 ">
  
  <h3><i class="fas fa-plus-square pr-1"></i>Edit Member Data</h3><hr>
  <form action="<?php echo base_url('member/EditAction') ?>" method="post">
      <div class="form-group col-sm-5" >
           <input type="text" class="form-control form-control-user" value="<?php echo $data_mbr->id ?> " disabled>
           <input type="text" id="id" name="id"  value="<?php echo $data_mbr->id ?> " hidden>
      </div>
      <div class="form-group col-sm-5" >
           <input type="text" class="form-control form-control-user" id="fullname" placeholder="Enter Full Name..." name="fullname" value="<?php echo $data_mbr->fullname ?>">
      </div>
      <div class="form-group col-sm-5" >
           <input type="text" class="form-control form-control-user" id="address" placeholder="Enter Address..." name="address" value="<?php echo $data_mbr->address ?>">
      </div>
      <div class="form-group col-sm-5" >
           <input type="text" class="form-control form-control-user" id="email" placeholder="Enter E-Mail..." name="email" value="<?php echo $data_mbr->email ?>">
      </div>
      <div class="form-group col-sm-5" >
           <input type="text" class="form-control form-control-user" id="telp" placeholder="Enter Telephone..." name="telp" value="<?php echo $data_mbr->telp ?>">
      </div>
      <div class="form-group col-sm-5">
      <input type="radio" id="male" name="gender" value="male"  <?php echo ($data_mbr->gender == "male" ? 'checked="checked"': ''); ?>>
            <label for="male">Male</label>
     <input type="radio" id="female" name="gender" value="female" <?php echo ($data_mbr->gender == "female" ? 'checked="checked"': ''); ?> >
           <label for="female">Female</label><br>
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