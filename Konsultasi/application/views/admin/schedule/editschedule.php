<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          
        	<div class="col-md-14 pl-3 pt-1 ">
        	
        	<h3><i class="fas fa-plus-square pr-1"></i>Add Schedule</h3><hr>
             <form action="<?php echo base_url('schedule/EditAction') ?>" method="post">
               <div class="form-group col-sm-5" >
                    <input type="text" class="form-control form-control-user" value="<?php echo $data_sch->id ?> " disabled>
                    <input type="text" id="id" name="id"  value="<?php echo $data_sch->id ?> " hidden>
               </div>
        		<div class="form-group col-sm-5" >
        			 <label for="date">Enter Date</label>
                     <input type="date" class="form-control form-control-user" id="date" name="date" value="<?php echo $data_sch->date ?>">
                </div>
                <div class="form-group col-sm-5" >
                	<label for="time">Enter Time</label>
                     <input type="time" class="form-control form-control-user" id="time" name="time" value="<?php echo $data_sch->time ?>">
                </div>
                <div class="form-group col-sm-5" >
                     <input type="text" class="form-control form-control-user" id="psychologist" placeholder="Enter Psychologist..." name="psychologist" value="<?php echo $data_sch->psychologist ?>">
                </div>
                <div class="form-group col-sm-5" >
                     <label for="location">Enter Location</label><br>
                     <select id="location" name="location" value="<?php echo $data_sch->location ?>">
                     	<option value="kpusat" <?php echo ($data_sch->location == "kpusat" ? 'selected="selected"': ''); ?>>Kantor Pusat</option>
                     	<option value="kcabang" <?php echo ($data_sch->location == "kcabang" ? 'selected="selected"': ''); ?>>Kantor Cabang</option>
                     	<option value="online" <?php echo ($data_sch->location == "online" ? 'selected="selected"': ''); ?>>Online</option>
                     </select>
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