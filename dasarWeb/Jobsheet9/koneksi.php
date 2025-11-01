<?php
$servername = "localhost";
$username = "root";
$port = "3306";
$password = "";
$dbname = "prakwebdb";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>