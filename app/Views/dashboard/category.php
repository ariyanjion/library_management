
<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>



<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha384-Sv5z2Sv2WD1Htr0oI9UWSnzhU1l3bO0jmaP4b/6iaAf78arBp3o1UimLY5oXYCmR" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .action-column {
      text-align: center;
    }

    .edit-button, .delete-button {
      padding: 5px 10px;
      cursor: pointer;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
    }

    .delete-button {
      background-color: #f44336;
      margin-left: 5px;
    }
  </style>
</head>
<body>
<?php
  if(isset($_SESSION['status'])){
    echo '<h5>'.$_SESSION['status'].'<h5>';
  }


?>
  <table>
    <thead>
      <tr>
      <th>ID</th>
        <th>Category</th>
       
        <th>creation Date</th>
        <th>Updation Date</th>
        <th>status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($category as $item) : ?>
        <tr>
          <td><?=$item['cat_id'] ?></td>
          <td><?=$item['cat_name'] ?></td>
       
          <td><?=$item['created_at'] ?></td>
          <td><?=$item['updation_date'] ?></td>
          <td>  <?php if ($item['status'] == 1) : ?>
                <button class="btn btn-success">Available</button>
            <?php else : ?>
                <button class="btn btn-danger">Not Available</button>
            <?php endif; ?>
            </td>
       
          <td>
         <button class="btn btn-info">
    <a href="<?= base_url('user/edit_category/'.$item['cat_id']) ?>" style="color: white;">Edit</a>
</button>
           
    <button class="btn btn-danger">
            <a href="<?= base_url('user/delete_category/'.$item['cat_id'])?>" style="color: white;">Delete</a>
            </button>
          </td>
        </tr>
      
        <?php endforeach; ?>
    </tbody>
  </table>

</body>


                  
 



<?= $this->endSection(); ?>