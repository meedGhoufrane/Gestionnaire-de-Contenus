<?php
namespace App\Config;
use PDO;
use PDOException;

class Connection {
    public static function getConn() {
        try {
            $host = 'localhost';
            $dbname = 'poo_PHP';
            $username = 'root';
            $password = '';

            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}
