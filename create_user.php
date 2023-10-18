<?php
include 'koneksi.php';
$nama_user = $_POST["nama"];
$email_user = $_POST["kelas"];
$password_user = $_POST["alamat"];
//memasukan data register user ke table tb_user yang ada di database 
mysqli_query($koneksi, "INSERT INTO siswas VALUES ('', '$nama_user', '$email_user', '$password_user')");
//di dalam VALUES bagian id_user nya dikosongkan karena sudah otomatis terisi
//di table dimulai dari angka 1, dst (karena ada Auto Increment)
header("location: student.php");
?>