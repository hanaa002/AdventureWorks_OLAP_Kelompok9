<?php
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "aw_wh";

$conn = new mysqli($servername, $username, $password_db, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}else{

}
?>