<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>
<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
    <!-- <div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label><select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
    <option value="10">10</option><option value="25">25</option>
</div></div>
<div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" aria-controls="dataTables-example"></label></div></div>
</div> -->
<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column ascending" style="width: 13.4px;">#</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 116.4px;">Student Name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Book Name: activate to sort column ascending" style="width: 329.4px;">Book Name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="ISBN : activate to sort column ascending" style="width: 117.4px;">ISBN </th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Issued Date: activate to sort column ascending" style="width: 162.4px;">Issued Date</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Return Date: activate to sort column ascending" style="width: 162.4px;">Return Date</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 85.4px;">Action</th></tr>
                                    </thead>
                                    <tbody>
                                      
                                    <?php foreach($store as $item) : ?>
                                            <tr>
                                                <td><?=$item['issue_id'] ?></td>
                                                <td><?=$item['student_name'] ?></td>
                                                <td><?=$item['book_name'] ?></td>
                                                <td><?=$item['ISBN'] ?></td>
                                                <td><?=$item['issue_date'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($item['return_date'] === null) {
                                                        echo 'Not yet returned';
                                                    } else {
                                                        echo $item['return_date'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                <?php
                                                            if ($item['return_date'] !== null) {
                                                                echo 'Book Returned';
                                                            } else {
                                                                echo '
                                                                <button class="btn btn-warning">
                                                                <a href="' . base_url('user/edit_issue/' . $item['issue_id']) . '" style="color: black;">Return</a>
                                                                </button>
                                                                ';
                                                            }
                                                        ?>


                                                
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                    
               
                                 </tbody>
                                </table><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button next disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
<?= $this->endSection(); ?>