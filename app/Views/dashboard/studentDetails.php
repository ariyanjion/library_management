
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
        <h3> </h3>
             
            <th>Student Name</th>
            <th>Book Name</th>
            <th>Issue Date</th>
            <th>Return Date</th>
            <th>Fine</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($tableData as $row): ?>
            <tr>
                
                <td><?= $row->student_name ?></td>
                <td><?= $row->book_name ?></td>
                <td><?= $row->issue_date ?></td>
                <td><?= $row->return_date ?></td>
                <td><?= $row->fine ?></td>
               
            </tr>
        <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>

                  
 



<?= $this->endSection(); ?>