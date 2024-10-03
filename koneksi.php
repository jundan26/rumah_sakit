<?php
$_servername = "localhost";
$username = "root";
$password = "";
$dbname = "rumah_sakit";

$conn = new mysqli($_servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Koneksi gagal: " . $conn->connect_error);
} 
?>