<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM krs WHERE id=$id"));

if (isset($_POST['submit'])) {
    mysqli_query($koneksi, "UPDATE krs SET mahasiswa_npm='$_POST[npm]', matakuliah_kodemk='$_POST[kodemk]' WHERE id=$id");
    header("Location: index.php");

    echo "Data berhasil diubah";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data KRS</title>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffc0cb;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            font-family: 'Berkshire Swash', cursive;
            font-size: 32px;
            color: white;
        }
        .btn-pink {
            background-color: #ff69b4;
            color: white;
            border: none;
        }
        .btn-pink:hover {
            background-color: #ff85c1;
        }
    </style>
</head>
<body>
    <h2>Edit Data KRS</h2>
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
                <a href="index.php" class="btn btn-pink">Batal</a>
                <button type="submit" name="submit" class="btn btn-pink">Update</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
