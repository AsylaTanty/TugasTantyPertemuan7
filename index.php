<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM krs");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data KRS</title>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="TugasP7.css"/>
    <style>
        body { font-family: sans-serif; background-color: #f9f9f9; padding: 20px; }
        h2 {
            background-color:rgb(233, 146, 179);
            font-family: 'Berkshire Swash', cursive;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            font-size: 32px;
            margin-bottom: 20px;

        }
        table { width: 100%; border-collapse: collapse; background: white; box-shadow: 0 0 5px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ccc; padding: 10px; }
        th { background-color:rgb(233, 146, 179); color: white; }
        a.btn { padding: 6px 12px; text-decoration: none; border-radius: 4px; }
        .tambah { background-color:rgb(233, 146, 179); color: white; }
        .tambah:hover {
            background-color: #ff85c1;
            color: white;
        }
        .edit { background-color:rgb(247, 33, 133); color: white; }
        .edit:hover{ 
            background-color: #ff85c1;
            color: white;
        }
        .hapus { background-color:rgb(197, 13, 78); color: white; }
        .hapus:hover{ 
            background-color: #ff85c1;
            color: white;
        }
    </style>
</head>
<body>
<h2>Data Kartu Rencana Studi</h2>
<a href="add.php" class="btn tambah">+ Tambah Data</a><br><br>

<table>
    <tr>
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>Mata Kuliah</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1; while ($d = mysqli_fetch_array($data)) { ?>
    <tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama_mahasiswa']; ?></td>
    <td><?= $d['nama_matakuliah']; ?></td>
    <td><b><span style="color: maroon;"><?= $d['nama_mahasiswa']; ?></span></b> Mengambil Mata Kuliah <b><span style="color: blue;"><?= $d['nama_matakuliah']; ?></span></b> (<?= $d['jumlah_sks']; ?> SKS)</td>
        <td>
            <a href="edit.php?id=<?= $d['id']; ?>" class="btn edit">Edit</a>
            <a href="delete.php?id=<?= $d['id']; ?>" class="btn hapus" onclick="return confirm('Yakin hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
