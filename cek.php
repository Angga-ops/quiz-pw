<?php

include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
 
$data = mysqli_query($conn,"select * from login where username='$username' and password='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:tambah.php");
}else{
	header("location:indexi.php?pesan=gagal");
}
?>