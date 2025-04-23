<?php
$koneksi = mysqli_connect("localhost", "root", "", "Kampus");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
