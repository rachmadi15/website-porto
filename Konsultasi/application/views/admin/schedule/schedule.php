<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


<div class="col-md-14 pl-3 pt-1 ">
<h3><i class="fas fa-calendar-alt pr-1"></i>Schedule</h3><hr>
<?= $this->session->flashdata('message'); ?>
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square mr-2"></i>
  Add Schedule
</button>


<table class="table  table-bordered table-hover">
<thead class="thead-dark">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Date</th>
    <th scope="col">Time</th>
    <th scope="col">Psychologist</th>
    <th scope="col">Location</th>
    <th colspan="3" scope="col">More</th>
  </tr>
</thead>
<tbody>

<?php
      $count = 0;
      foreach($data_sch as $row) {
        $count = $count + 1;
      
  
  ?>

  <tr>
  <th scope="row"><?php echo $count ?></th>
    <td><?php echo $row->date ?></td>
    <td><?php echo $row->time ?></td>
    <td><?php echo $row->psychologist ?></td>
    <td><?php echo $row->location ?></td>
    <td><a href="<?php echo base_url('schedule/editschedule/').$row->id ?>" class="btn fas fa-edit bg-warning p-2 text-white rounded editbutton" data-toggle="tooltip" title="Edit"></a></td>
    <td><a href="<?php echo base_url('schedule/DeleteData/') . $row->id ?>" class="btn far fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete" onclick="return confirm('Delete?');"></a></td>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url(); ?>schedule/add" method="post">
        		<div class="form-group col-sm" >
        			 <label for="date">Enter Date</label>
                     <input type="date" class="form-control form-control-user" id="date" name="date">
                </div>
                <div class="form-group col-sm" >
                	<label for="time">Enter Time</label>
                     <input type="time" class="form-control form-control-user" id="time" name="time">
                </div>
                <div class="form-group col-sm" >
                     <input type="text" class="form-control form-control-user" id="psychologist" placeholder="Enter Psychologist..." name="psychologist">
                </div>
                <div class="form-group col-sm" >
                     <label for="location">Enter Location</label><br>
                     <select id="location" name="location">
                     	<option value="kpusat">Kantor Pusat</option>
                     	<option value="kcabang">Kantor Cabang</option>
                     	<option value="online">Online</option>
                     </select>
                </div>
        	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button></form>
      </div>
    </div>
  </div>
</div>