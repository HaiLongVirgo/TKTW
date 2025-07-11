<?php
class Connect {
    private $host = 'localhost';
    private $db = 'mvc_lab2';
    private $user = 'root';
    private $pass = '';

    public function getConnection() {
        try {
            return new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->user, $this->pass);
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }
}
?>
