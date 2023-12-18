<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>
<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column ascending" style="width: 15.4px;">#</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Book Name: activate to sort column ascending" style="width: 299.4px;">Book Name</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 119.4px;">Category</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Author: activate to sort column ascending" style="width: 152.4px;">Author</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="ISBN: activate to sort column ascending" style="width: 132.4px;">ISBN</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 60.4px;">Price</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 205.4px;">Action</th></tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($books as $item) : ?>
                                              <tr>
                                                <td><?=$item['books_id'] ?></td>
                                                <td><img src="<?= 'uploads/'.$item['img'];?>" height="100px" width="80px">   <?=$item['book_name'] ?></td>

                                                <td><?=$item['category'] ?></td>
                                                <td><?=$item['author'] ?></td>
                                                <td><?=$item['ISBN'] ?></td>
                                                <td><?=$item['price'] ?></td>
                                                
                                            
                                                <td>
                                                  <button class="btn btn-danger" >
                                                  <a href="<?= base_url('user/delete_books/'.$item['books_id'])?>" style="color: white;">Delete</a>
                                                  </button>
                                                
                                                </td>
                                              </tr>
                                            
                                              <?php endforeach; ?>
                                      </tbody>
                                </table>
<?= $this->endSection(); ?>