<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];

$data = mysqli_query($koneksi,"INSERT INTO `data`( `nama`, `nim`, `kelas`) VALUES ('$nama','$nim','$kelas')");

header("location: tampil_data.php");




