<?php
class Database{
    private $host, $username, $password, $database;
    protected $conn;

    public function __construct() {
        $this->host = "localhost";
        $this->username = "root";
        $this->passowrd = "";
        $this->database = "tugas-2";

        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            echo "Maka koneksi gagal!";
        }
        echo "Koneksi berhasil!";
    }
}

class Student extends Database {
    public function tampilData() {
        $data = $this->conn->query("SELECT * FROM students");  
        return $data;  
    }
}

$student1 = new Student();
$data_student = $student1->tampilData();
print_r($data_student);

foreach ($data_student as $data){
    print_r($data);
    echo "<br>".$data ["name"].$data ["id_user"].$data ["address"];
}

class Guidance extends Database {
    public function tampilData() {
        $data = $this->conn->query("SELECT * FROM guidance");
        return $data;
    }
}

$guidance = new Guidance();
$data_guidance = $guidance->tampilData();
print_r($data_guidance);

foreach ($data_guidance as $data){
    print_r($data);
    echo "<br>".$data ["problem"]. $data ["solution"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas-2</title>
</head>
<body>
<h2>Data Mahasiswa</h2>
<table border="1" cellpadding="10" cellspacing="0">
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
       <h2>Data Guidance</h2>
    <table border="1" cellpadding="10" cellspacing="0">
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

</body>
</html>