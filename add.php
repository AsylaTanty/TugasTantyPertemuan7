<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $sks = $_POST['sks'];
    mysqli_query($koneksi, "INSERT INTO krs (nama_mahasiswa, nama_matakuliah, jumlah_sks) VALUES ('$nama', '$matkul', $sks)");
    header("Location: index.php");

    echo "data berhasil ditambahkan";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data KRS</title>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:rgb(245, 161, 193);
            color: white;
        }
        h2 {
            font-family: 'Berkshire Swash', cursive;
            font-size: 32px;
        }
        .form-container {
            background-color: white;
            color: black;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .btn-pink {
            background-color: #ff69b4;
            color: white;
            border: none;
        }
        .btn-pink:hover {
            background-color: #ff85c1;
            color: white;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Tambah Data KRS</h2>
    <div class="form-container">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mata Kuliah</label>
                <select name="matkul" class="form-select" required>
                    <option value="" disabled selected style="color: gray;">-- Pilih Mata Kuliah --</option>
                    <option value="Pemrograman Berbasis Web">Pemrograman Berbasis Web</option>
                    <option value="Basis Data">Basis Data</option>
                    <option value="Algoritma dan Struktur Data">Algoritma dan Struktur Data</option>
                    <option value="Sistem Operasi">Sistem Operasi</option>
                    <option value="Jaringan dan Keamanan Sistem">Jaringan dan Keamanan Sistem</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah SKS</label>
                <input type="number" name="sks" class="form-control" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-pink">Kembali</a>
                <button type="submit" name="submit" class="btn btn-pink">Simpan</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
