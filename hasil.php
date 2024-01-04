<?php
$nama_depan = $_POST["nd"] ?? "";
$nama_belakang = $_POST["nb"] ?? "";
$nomor_seluler_email = $_POST["ns"] ?? "";
$kata_sandi = $_POST["password"] ?? "";
$tanggal = $_POST["tanggal"] ?? "";
$bulan = $_POST["bulan"] ?? "";
$tahun = $_POST["tahun"] ?? "";
$jenis_kelamin = $_POST["jenis_kelamin"] ?? "";

echo "Nama depan: " . $nama_depan . "<br>";
echo "Nama belakang: " . $nama_belakang . "<br>";
echo "Nomor seluler atau email: " . $nomor_seluler_email . "<br>";
echo "Kata Sandi: " . $kata_sandi . "<br>";
echo "Tanggal lahir: " . $tanggal . " " . $bulan . " " . $tahun . "<br>";
echo "Jenis kelamin: " . $jenis_kelamin . "<br>";
?>
