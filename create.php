<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Tambah Data</title>
<link rel="stylesheet" href="/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body class="">
<div class="navbar">
    <div class="container">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="student.php">SISWA</a></li>
        </ul>
    </div>
</div>
<div class="content">
    <div>
        <form action="create_user.php" method="post">
    <h1 style="text-align: center;"> Tambah Data</h1>
    <br>
            <label for="name">Nama:</label><br>
            <input types="text" id="name" name="nama"><br>
            <label for="email">Kelas:</label><br>
            <input type="text" id="email" name="kelas"><br> 
            <label for="age">Alamat:</label><br>
            <input type="text" id="age" name="alamat"><br>
            <button class="btn">Tambah Data</button>
            <br>
                <a style="text-align: center;" href="student.php">Halaman Siswa</a>
        </form>
        </div>  
    </div>
    <div class="footer">
        <p>&copy; 2023 Hak Cipta Dilindungi</p>
    </div>
    <script src="/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
// include 'koneksi.php';
// $nama_user = $_POST["nama_user"];
// $email_user = $_POST["Email"];
// $password_user = $_POST["password_user"];
// //memasukan data register user ke table tb_user yang ada di database 
// mysqli_query($koneksi, "INSERT INTO tb_user VALUES ('', '$email_user', '$password_user', '$nama_user')");
// //di dalam VALUES bagian id_user nya dikosongkan karena sudah otomatis terisi
// //di table dimulai dari angka 1, dst (karena ada Auto Increment)
// header("location: login.php");
?>