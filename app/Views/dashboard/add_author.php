<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>

<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add Author</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?= base_url('user/store_author')?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Add Author</label>
                        <input type="text" name='author_name' class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                
                  </div>
           

                <!-- <a class="btn btn-app" type="submit">
                  <i class="fas fa-save"></i> Save
                </a> -->
                <button type="submit" class="btn btn-info">save</button>
                    </div>
                    
                  </div>

               

                 
                </form>
              </div>
              <!-- /.card-body -->
            </div>
<?= $this->endSection(); ?>