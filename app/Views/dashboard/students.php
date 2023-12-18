<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>
<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column ascending" style="width: 16.4px;">#</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Student ID: activate to sort column ascending" style="width: 94.4px;">Student ID</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 127.4px;">Student Name</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Email id : activate to sort column ascending" style="width: 156.4px;">Email id </th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Mobile Number: activate to sort column ascending" style="width: 138.4px;">Mobile Number</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Reg Date: activate to sort column ascending" style="width: 177.4px;">Reg Date</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 57.4px;">Status</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 200.4px;">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $item) : ?>
            <tr>
                <td><?= $item['student_id'] ?></td>
                <td><?= $item['SID'] ?></td>
                <td><?= $item['student_name'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['mobile'] ?></td>
                <td><?= $item['reg_date'] ?></td>
                <td>
                    <?php if ($item['status'] == 1) : ?>
                        <button class="btn btn-success">Available</button>
                    <?php else : ?>
                        <button class="btn btn-danger">Blocked</button>
                    <?php endif; ?>
                </td>
                <td>
                <?php if ($item['status'] == 1) : ?>
    <form action="<?= base_url('user/deactivate/' . $item['student_id']) ?>" method="POST" enctype="multipart/form-data" class="d-inline-block">
        <input type="hidden" name="active_status" value='0'>
        <button type="submit" class="btn btn-danger">Block</button>
    </form>

    <button class="btn btn-info d-inline-block ml-2">
        <a href="<?= base_url('user/student_details/' . $item['student_id']) ?>" style="color: white;">Details</a>
    </button>
<?php else : ?>
    <form action="<?= base_url('user/activate/' . $item['student_id']) ?>" method="POST" enctype="multipart/form-data" class="d-inline-block">
        <input type="hidden" name="block_status" value='1'>
        <button type="submit" class="btn btn-success">Active</button>
    </form>
<?php endif; ?>

                    
                </td>
            </tr>
        <?php endforeach; ?>
       
        
    </tbody>
</table>


<?= $this->endSection(); ?>
