<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


<div class="col-md-14 pl-3 pt-1 ">
<h3><i class="fas fa-newspaper pr-1"></i>News</h3><hr>
<?= $this->session->flashdata('message'); ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2 addbutton" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square mr-2"></i>
  Add Data
</button>




<table class="table  table-bordered table-hover">
<thead class="thead-dark thead-center">
  <tr>
    <th width='50px' scope="col">No</th>
    <th width='600px' scope="col">News</th>
    <th scope="col">Picture</th>
    <th width='100px' colspan="3" scope="col">More</th>
  </tr>
</thead>
<tbody>
  <?php
      $count = 0;
      foreach($data_news as $row) {
        $count = $count + 1;
      
  
  ?>

  <tr>
    <th scope="row"><?php echo $count ?></th>
    <td><?php echo $row->newstext ?></td>
    <td><img class="img-square" src="<?= base_url('assets/img/newsimg/'). $row->image;?>" width='300'; height='auto' ></td>
    <td><a href="<?php echo base_url('news/editnews/') . $row->id ?> " class="btn fas fa-edit bg-warning p-2 text-white rounded" data-toggle="tooltip" title="Edit"></a></td>
    <td><a href="<?php echo base_url('news/DeleteData/') . $row->id .'/'. $row->image?>" class="btn far fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete" onclick="return confirm('Delete?');"></a></td>

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
        <h5 class="modal-title" id="exampleModalLabel">Add News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('news/add') ?>
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Judul</label>
                      <div class="col-lg-8">
                        <input class="form-control" type="text" name="judul" value="">
                      </div>
                    </div>
        		<div class="form-group col-sm" >
              <label for="">Berita Pendek</label><br>
              <textarea id="newstext" name="newstext" rows="10" cols="40" placeholder="Tulis Berita Pendek"></textarea>
            </div>
            <div class="form-group col-sm" >
              <label for="">Berita Panjang</label><br>
              <textarea id="newstext" name="berita" rows="10" cols="40" placeholder="Tulis Berita panjang"></textarea>
            </div>
                <div class="form-group col-sm-5" >
                    <label>Image</label>
                     <input type="file" name="image">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
