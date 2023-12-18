<?= $this->extend('layout/dashboard_layout'); ?>
<?= $this->section('content'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
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
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
      <?php foreach($author as $item) : ?>
        <tr>
          <td><?=$item['author_id'] ?></td>
          <td><?=$item['author_name'] ?></td>
       
          <td><?=$item['creation_date'] ?></td>
          
       
          <td>
           <button class="btn btn-danger" style="color: white;>
          <a href="<?= base_url('user/delete_author/'.$item['author_id'])?>">Delete</a>
          </button>
          </td>
        </tr>
      
        <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>

                  
 



<?= $this->endSection(); ?>