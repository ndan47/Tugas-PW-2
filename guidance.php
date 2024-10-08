<?php
require_once "koneksi.php"; //menghubungkan file guidance.php ke file koneksi.php

//instansi objek class Guidance   
$guidance = new Guidance();
// memanggil metode tampilData() untuk mendapatkan data guidance
$data_guidance = $guidance->tampilData();

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
    <h2>Data Guidance</h2>
    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Problem</th>
            <th>Solution</th>
        </tr>
        <?php $j = 1; foreach($data_guidance as $data) : ?>
        <tr>
            <td><?= $j++ ?></td>
            <td><?= $data['problem'] ?></td>
            <td><?= $data['solution'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>