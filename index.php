<?php
$nama = $_POST['nama'] ?? '';
$tempat = $_POST['tempat'] ?? '';
$ttl = $_POST['tgl_lahir'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$jk = $_POST['jk'] ?? '';
$sekolah = $_POST['sekolah'] ?? '';
$uan = $_POST['uan'] ?? '';

echo "<p>Terimakasih <b>$nama</b> sudah mengisi form pendaftaran.</p>";
echo "<p>Nama Lengkap : $nama</p>";
echo "<p>Tempat Lahir : $tempat</p>";
echo "<p>Tanggal Lahir : $ttl</p>";
echo "<p>Alamat Rumah : $alamat</p>";
echo "<p>Jenis Kelamin : $jk</p>";
echo "<p>Asal Sekolah : $sekolah</p>";
echo "<p>Nilai UAN : $uan</p>";
?>