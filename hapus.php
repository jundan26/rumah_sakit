<?php
include 'koneksi.php';

if (isset($_GET['id_pasien'])){
    $id_pasien = $_GET['id_pasien'];

    $sql = "DELETE FROM data_pasien WHERE id_pasien=$id_pasien"; 

    if ($conn->query($sql) === TRUE) {
        header('Location: tampilkan.php'); 
        exit();
    } else {
        echo "Error: " . $conn->error; 
    }
} else {
    echo "ID Pasien tidak ditemukan."; 
}

$conn->close();
?>
