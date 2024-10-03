<?php include 'koneksi.php'; ?>
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
        <h2>Penginputan Data Pasien</h2>
        <form action="insert.php" method="POST">
            <div class="form-group">
                <label>Nama pasien:</label>
                <input type="text" class="form-control" name="nama_pasien" required>
            </div>
            <div class="form-group">
                <label>Umur pasien:</label>
                <input type="number" class="form-control" name="umur_pasien"required>
            </div>
            <div class="form-group">
                <label>Jenis kelamin pasien:</label>
                <select class="form-control" name="jenis_kelamin_pasien">
                    <option value="Male">Laki-laki</option>
                    <option value="Female">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat pasien:</label>
                <textarea class="form-control" name="alamat_pasien"></textarea>
            </div>
            <div class="form-group">
                <label>Nomor telepon pasien:</label>
                <input type="number" class="form-control" name="nomor_telepon_pasien">
            </div>
            <div class="form-group">
                <label>Tanggal masuk pasien:</label>
                <input type="date" class="form-control" name="tanggal_masuk_pasien"required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <a href="tampilkan.php" class="btn btn-info mt-3">Lihat List Pasien</a>
    </div>
</body>