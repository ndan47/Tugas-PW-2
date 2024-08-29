<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "tugas-2";
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn) {
            
        }
    }
}

class Student extends Database {
    public function tampilData() {
        $data = $this->conn->query("SELECT * FROM students");  
        return $data;  
    }
}

class Address extends Student {
    public function tampilData() {
        $data = $this->conn->query("SELECT * FROM students WHERE address = 'Temanggung'" );  
        return $data->fetch_all(MYSQLI_ASSOC);  
    }
}

class Guidance extends Database {
    public function tampilData() {
        $data = $this->conn->query("SELECT * FROM guidance");
        return $data->fetch_all(MYSQLI_ASSOC);
    }
}

class IDguidance extends Guidance {
    public function tampilData() {
        $data = $this->conn->query("SELECT * FROM guidance WHERE id_student = 1");
        return $data->fetch_all(MYSQLI_ASSOC);
    }
}
?>