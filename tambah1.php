<?php
include 'koneksi.php';

$nim=$_POST['nim'];
$nama=$_POST['nama'];

mysqli_query($koneksi,"insert into mahasiswa values('$nim','$nama')");
header("location:menu.php")
?>