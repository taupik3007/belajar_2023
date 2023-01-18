<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim=$_POST['nim'];
$kelas = $_POST['kelas'];

$data = mysqli_query($koneksi,"UPDATE `data` SET `nama`='$nama',`nim`='$nim',`kelas`='$kelas' WHERE `id`= $id");
header("location: tampil_data.php");







?>