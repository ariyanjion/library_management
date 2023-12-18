<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>

<div class="panel panel-info" style="padding: 0 200px;">
    <div class="panel-heading">
        <!-- Heading if needed -->
    </div>
    <div class="panel-body">
        <a href="user/issue_new_book">
            <button class="btn btn-info" style="float:right">Search Again!</button>
        </a>

        <form role="form" method="POST" action="<?= base_url('user/issue_insert') ?>" enctype="multipart/form-data">
            
            <div class="row">
                <!-- Student Information Column -->
                <?php if (!empty($data)) : ?>
                    <?php foreach ($data as $row) : ?>
                        <div class="col-md-6">
                            <h3>Student Information</h3>
                            <div class="form-group">
                                <label>Student Name</label><br>
                                <input type="text" value="<?= $row['student_name'] ?>" name="student_name">
                            </div>

                            <div class="form-group">
                                <label>Email</label><br>
                                <input  class="border: none;" type="text" value="<?= $row['email'] ?>" >
                            </div>

                            <div class="form-group">
                                <label>mobile</label><br>
                                <input type="text" value="<?= $row['mobile'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <?php if ($row['status'] == 1) : ?>
                <button class="btn btn-success">Available</button>
            <?php else : ?>
                <button class="btn btn-danger">blocked</button>
            <?php endif; ?>
                            </div>
                            <!-- Add other student form fields as needed -->
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <!-- <p>No Students found.</p> -->
                <?php endif; ?>

                <!-- Book Information Column -->
                <div class="col-md-6">
                    <?php if (!empty($data1)) : ?>
                        <?php foreach ($data1 as $row) : ?>
                            <h3>Book Information</h3>
                            <div class="form-group">
                                <label>Book Name</label><br>
                                <input type="text" value="<?= $row['book_name'] ?>" name="book_name">
                            </div>
                            <div class="form-group">
                                <label>ISBN</label><br>
                                <input type="text" value="<?= $row['ISBN'] ?>" name="ISBN">
                            </div>
                            <div class="form-group">
                                <label>Price</label><br>
                                <input type="text" value="<?= $row['price'] ?>">
                            </div>
                            <!-- Add other book form fields as needed -->
                        <?php endforeach; ?>
                    <?php else : ?>
                        <!-- <p>No Books found.</p> -->
                    <?php endif; ?>
                </div>
            </div>

            <!-- Your other form elements -->

            <?php
            $status = 0; // Initialize $status variable outside the loop
            if (!empty($data)) : ?>
                <?php foreach ($data as $row) : ?>
                    <!-- Your existing code for student data -->
                    <?php
                    $status = $row['status']; ?>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Please insert a valid student ID</p>
            <?php endif; ?>

            <div>
                <?php
                $checkData = null; // Initialize $checkData variable
                if (!empty($data1)) : ?>
                    <?php foreach ($data1 as $row) : ?>
                        <!-- Your existing code for book data -->
                        <?php
                        $checkData = $row['book_name']; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>Please insert a valid ISBN</p>
                <?php endif; ?>
            </div>

            <?php if ($status == 1 && $checkData !== null) : ?>
                <button style="float:right;" class="btn btn-success" type="submit">Issue This Book</button>
            <?php else : ?>
                <h3 style="color:red;">Cannot issue Book</h3>
            <?php endif; ?>

        </form>

    </div>
</div>

<?= $this->endSection(); ?>











