<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Category Info</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?= base_url('user/update_category/'.$category['cat_id'])?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Edit & update Category</label>
                        <input type="text" name='cat_name' value="<?=$category['cat_name']?>" class="form-control" placeholder="Enter ...">
                        <label>Updation Date</label>
                        <input type="date" name='updation_date' value="<?=$category['updation_date']?>" class="form-control" placeholder="Enter ...">
                      </div>
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
                    <input type="radio" name="status" value="0" id="option_a2" autocomplete="off"> Inactive
                  </label>

             
                 
                </div>
                <!-- <a class="btn btn-app" type="submit">
                  <i class="fas fa-save"></i> Save
                </a> -->
                <button type="submit">Update</button>
                    </div>
                    
                  </div>

               

                 
                </form>
              </div>
              <!-- /.card-body -->
            </div>

<?= $this->endSection(); ?>