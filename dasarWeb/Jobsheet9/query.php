<?php
include 'koneksi.php';

$query = "CREATE TABLE user (
    id INT(11) PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $query)) {
    echo "Tabel 'user' berhasil dibuat.";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


$password= md5('123'); 

$query = "INSERT INTO user (id, username, password) 
          VALUES (1, 'admin', '$password')";

if (mysqli_query($conn, $query)) {
    echo "Data admin berhasil dimasukkan.";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
?>