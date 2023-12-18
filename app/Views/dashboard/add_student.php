<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
            <form action="<?= base_url('user/store_student')?>" method="POST" enctype="multipart/form-data">

            <div class="col-md-6">   
            <div class="form-group">
            <label>Student Name<span style="color:red;">*</span></label>
            <input class="form-control" type="text" name="student_name" autocomplete="off" required="">
            </div>
            </div>

     

            <div class="col-md-6">  
            <div class="form-group">
         

            <div class="col-md-6">  
            <div class="form-group">
            <label>SID<span style="color:red;">*</span></label>
            <input class="form-control" type="text" name="SID" id="isbn" required="required" autocomplete="off" onblur="checkisbnAvailability()">
            
                    <span id="isbn-availability-status" style="font-size:12px;"></span>
            </div></div>

            <div class="col-md-6">  
            <div class="form-group">
            <label>Email<span style="color:red;">*</span></label>
            <input class="form-control" type="text" name="email" autocomplete="off" required="required">
            </div>
            </div>

            <div class="col-md-6">  
                <div class="form-group">
                 <label>Mobile<span style="color:red;">*</span></label>
                     <input class="form-control" type="text" name="mobile" autocomplete="off" required="required">
                 </div>
              </div>

              <div class="col-md-6">  
                <div class="form-group">
                 <label>password<span style="color:red;">*</span></label>
                     <input class="form-control" type="password" name="password" autocomplete="off" required="required">
                 </div>
              </div>

              <div class="row">
            
               <div class="col-sm-6">
                        <label>Status</label><br>
                        <!-- radio -->
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary bg-olive">
                        <input type="radio" name="status" value="1" id="option_a1" autocomplete="off" checked=""> Active
                    </label>
                    <label class="btn btn-secondary active bg-olive">
                        <input type="radio" name="status" value="0" id="option_a2" autocomplete="off"> Blocked
                    </label>

     
         
                 </div>
              </div>
            <button type="submit" name="add" id="add" class="btn btn-info">Submit </button>
            </form>
            </div>
            </div>
                            </div>
<?= $this->endSection(); ?>