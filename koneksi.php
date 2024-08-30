<?php
// kelas Database berfungsi untuk mengelola koneksi ke database
class Database {
     // attribute atau properti privat untuk menyimpan detail koneksi database
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "tugas-2";
    protected $conn;

    // construct untuk inisialisasi koneksi database
    public function __construct() {
        // membuat koneksi baru ke database menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        // mengecek koneksi sukses atau tidak
        if ($this->conn) {
            
        }
    }
}

// class Student mewarisi dari kelas Database
class Student extends Database {
    // method untuk mengambil data dari tabel students
    public function tampilData() {
        // menjalankan query SQL untuk memilih semua data dari tabel students
        $data = $this->conn->query("SELECT * FROM students");  
        return $data;  
    }
}

// class Address mewarisi dari kelas Database
class Address extends Student {
    // method untuk mengambil data dari tabel students dengan filter alamat 
    public function tampilData() {
         // menjalankan query SQL untuk memilih data dari tabel students dengan alamat tertentu yaitu cilacap
        $data = $this->conn->query("SELECT * FROM students WHERE address = 'Cilacap'" );  
        return $data->fetch_all(MYSQLI_ASSOC);  
    }
}

// class IDguidance mewarisi dari kelas Guidance
class Guidance extends Database {
     // method untuk mengambil data dari tabel guidance
    public function tampilData() {
        // menjalankan query SQL untuk memilih semua data dari tabel guidance
        $data = $this->conn->query("SELECT * FROM guidance");
        return $data->fetch_all(MYSQLI_ASSOC);
    }
}

// class IDguidance mewarisi dari kelas Guidance
class IDguidance extends Guidance {
    // method untuk mengambil data dari tabel guidance dengan filter id_student tertentu
    public function tampilData() {
         // menjalankan query SQL untuk memilih data dari tabel guidance dengan id_student = 1
        $data = $this->conn->query("SELECT * FROM guidance WHERE id_student = 1");
        return $data->fetch_all(MYSQLI_ASSOC);
    }
}
?>