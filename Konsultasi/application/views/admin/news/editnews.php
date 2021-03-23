<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


  <div class="col-md-14 pl-3 pt-1 ">
  
  <h3><i class="fas fa-plus-square pr-1"></i>Edit News Data</h3><hr>
  <?php echo form_open_multipart('news/EditAction') ?>
               <div class="form-group col-sm-5" >
                         <input type="text" id="id" name="id"  value="<?php echo $data_news->id ?> " hidden>
                    </div>
        		<div class="form-group col-sm" >
            <textarea id="newstext" name="newstext" rows="10" cols="50" placeholder="Write Text Here"><?php echo $data_news->newstext ?></textarea>
                </div>
                <div class="form-group col-sm-5" >
                     <input type="text" name="image" value="<?php echo $data_news->image ?>" hidden>
                </div>
        	
      </div>
      <div class="form-group col-sm-4">
          <button type="submit" class="btn btn-primary btn-user btn-block">Edit Data</button>
        <?php echo form_close() ?>
  </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->