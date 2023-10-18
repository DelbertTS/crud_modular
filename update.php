<?php 
        include 'koneksi.php';
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $alamat = $_POST["alamat"];

        mysqli_query($koneksi, "UPDATE siswas SET nama = '$nama', kelas = '$kelas', alamat = '$alamat' WHERE id ='$id'");
        header("location: student.php");
        exit;
        ?>