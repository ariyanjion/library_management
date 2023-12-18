<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Category Info</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?= base_url('user/update_issue/'.$issue['issue_id'])?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" name='student_name' value="<?=$issue['student_name']?>" class="form-control" placeholder="Enter ...">
                        <label>Issue Date</label>
                        <input type="text" name='issue_date' value="<?=$issue['issue_date']?>" class="form-control" placeholder="Enter ...">
                        <label>Book name</label>
                        <input type="text" name='book_name' value="<?=$issue['book_name']?>" class="form-control" placeholder="Enter ...">
                        <label>ISBN no.</label>
                        <input type="text" name='ISBN' value="<?=$issue['ISBN']?>" class="form-control" placeholder="Enter ...">
                        <label>Fine</label>
                        <input type="text" name='fine'  class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                
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