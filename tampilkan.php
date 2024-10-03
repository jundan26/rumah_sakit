<?php
include 'koneksi.php';
$sql = "SELECT * FROM data_pasien";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Data Pasien</title>
</head>
<body>
    <div class="container mt-5">
        <h2>List Pasien</h2>
        <a href="index.php" class="btn btn-success mb-3">Tambah Pasien</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Umur Pasien</th>
                    <th>Jenis Kelamin Pasien</th>
                    <th>Alamat Pasie</th>
                    <th>Nomor Telepon Pasien</th>
                    <th>Tanggal Masuk Pasien</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <?php while($row = $result->fetch_assoc()):?>
                    <tr>
                        <td><?= $row['id_pasien']?></td>
                        <td><?= $row['nama_pasien']?></td>
                        <td><?= $row['umur_pasien'] ?></td>
                        <td><?= $row['jenis_kelamin_pasien'] ?></td>
                        <td><?= $row['alamat_pasien'] ?></td>
                        <td><?= $row['nomor_telepon_pasien'] ?></td>
                        <td><?= $row['tanggal_masuk_pasien'] ?></td>
                        <td>
                        <a href="hapus.php?<?= $row['id_pasien'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr> 
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>