<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama_pasien = $_POST['nama_pasien'];
    $umur_pasien = $_POST['umur_pasien'];
    $jenis_kelamin_pasien = $_POST['jenis_kelamin_pasien'];
    $alamat_pasien = $_POST['alamat_pasien'];
    $nomor_telepon_pasien = $_POST['nomor_telepon_pasien'];
    $tanggal_masuk_pasien = $_POST['tanggal_masuk_pasien'];

    $sql = "INSERT INTO data_pasien (nama_pasien, umur_pasien, jenis_kelamin_pasien, alamat_pasien, nomor_telepon_pasien, tanggal_masuk_pasien) 
            VALUES ('$nama_pasien', $umur_pasien, '$jenis_kelamin_pasien', '$alamat_pasien', '$nomor_telepon_pasien', '$tanggal_masuk_pasien')";
    
    if ($conn->query($sql) === TRUE){
        header("Location: tampilkan.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>