<?php
$servername="localhost";
$username="root";
$password="";
$db="quiz";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("Login gagal!: ".mysqli_connect_error());
}
echo "Koneksi berhasil!";

?>