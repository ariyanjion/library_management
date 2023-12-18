<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>
<div class="panel panel-info" style="padding: 0 200px;">
    <div class="panel-heading">

    </div>
    <div class="panel-body">
        <form role="form" method="post" action="<?=base_url('user/s_search')?>">

            <div class="form-group">
                <label>Student ID<span style="color:red;">*</span></label>
                <div class="input-group">
                    <input class="form-control" type="text" name="SID" id="studentid" onblur="getstudent()" autocomplete="off" required="">
               
                </div>
            </div>
            <div class="form-group">
                <label>Books ISBN<span style="color:red;">*</span></label>
                <div class="input-group">
                    <input class="form-control" type="text" name="ISBN" id="studentid" onblur="getstudent()" autocomplete="off" required="">
                    <span class="input-group-btn">
                       
                       
                    </span>
                </div>
            </div>
          
            <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit" onclick="searchStudent()">Search</button>
                       
                    </span>


         

        </form>
    </div>
</div>
<?= $this->endSection(); ?>


