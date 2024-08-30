<?php
require_once "koneksi.php"; //menghubungkan file address.php ke file koneksi.php

//instansi objek dari class Address  
$address = new Address();
// memanggil metode tampilData() untuk mendapatkan data alamat
$data_student = $address->tampilData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php require_once "navv.php";?>
<h2>Data Mahasiswa</h2>
<table class="table table-striped table-hover">
      <tr>
         <th>No</th>
         <th>ID Class</th>
         <th>Student Number</th>
         <th>Name</th>
         <th>Phone Number</th>
         <th>Address</th>
         <th>Signature</th>
      </tr>
      <?php $i = 1; foreach($data_student as $data) : ?>
      <tr>
            <td><?= $i++ ?></td>
            <td><?= $data['id_class'] ?></td>
            <td><?= $data['student_number'] ?></td>
            <td><?= $data['name'] ?></td>
            <td><?= $data['phone_number'] ?></td>
            <td><?= $data['address'] ?></td>
            <td><?= $data['signatur'] ?></td>
      </tr>
      <?php endforeach ?>
   </table> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>