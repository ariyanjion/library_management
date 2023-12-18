<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
            <form action="<?= base_url('user/store_books')?>" method="POST" enctype="multipart/form-data">

            <div class="col-md-6">   
            <div class="form-group">
            <label>Book Name<span style="color:red;">*</span></label>
            <input class="form-control" type="text" name="book_name" autocomplete="off" required="">
            </div>
            </div>

            <div class="col-md-6">  
            <div class="form-group">
            <label> Category<span style="color:red;">*</span></label>
            <select class="form-control" name="category" required="required">
            <option value=""> Select Category</option>
              <?php
              foreach($category as $item){
                ?>
                <option value="<?php echo $item['cat_name'];?>"> <?php echo $item['cat_name'] ?> </option>
                
                <?php
              }
              ?>

              
            </select>
            </div></div>

            <!-- <div class="col-md-6">  
            <div class="form-group">

            <label>Book Name<span style="color:red;">*</span></label>
            <input class="form-control" type="text" name="book_name" autocomplete="off" required="">
            </div>
            </div> -->

            <div class="col-md-6">  
            <div class="form-group">
            <label> Author<span style="color:red;">*</span></label>
            <select class="form-control" name="author" required="required">
            <option value=""> Select Author</option>
              <?php
              foreach($author as $item){
                ?>
                <option value="<?php echo $item['author_name'];?>"> <?php echo $item['author_name'] ?> </option>
                
                <?php
              }
              ?>

              
            </select>
            </div></div>

            <div class="col-md-6">  
            <div class="form-group">
            <label>ISBN Number<span style="color:red;">*</span></label>
            <input class="form-control" type="text" name="ISBN" id="isbn" required="required" autocomplete="off" onblur="checkisbnAvailability()">
            <p class="help-block">An ISBN is an International Standard Book Number.ISBN Must be unique</p>
                    <span id="isbn-availability-status" style="font-size:12px;"></span>
            </div></div>

            <div class="col-md-6">  
            <div class="form-group">
            <label>Price<span style="color:red;">*</span></label>
            <input class="form-control" type="text" name="price" autocomplete="off" required="required">
            </div>
            </div>

            <div class="col-md-6">  
            <div class="form-group">
            <label>Book Picture<span style="color:red;">*</span></label>
            <input class="form-control" type="file" name="img" autocomplete="off" required="required">
            </div>
                </div>
            <button type="submit" name="add" id="add" class="btn btn-info">Submit </button>
            </form>
            </div>
            </div>
                            </div>
<?= $this->endSection(); ?>