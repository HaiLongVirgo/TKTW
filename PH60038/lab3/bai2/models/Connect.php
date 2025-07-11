<?php
class Connect {
    public static function getConnection() {
        $conn = new PDO("mysql:host=localhost;dbname=mvc_lab2;charset=utf8", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
