<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bs/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="container">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="student.php">SISWA</a></li>
            </ul>
        </div>
    </div>
    <!-- <div class="content">
        <div>
            <h1>Welcome Back!</h1>
            <h3 style="text-transform:capitalize;">Kami harap anda menikmati situs kami!</h3>
        </div>
    </div> -->
    <div class="content">
        <div>
            <h1>Data Siswa</h1>
            <a href="create.php"><h3>Tambah Data</h3></a>
            <?php 
    include 'koneksi.php';
    $sql = "SELECT * FROM siswas";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0){
?>
<table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>ID</th>
          <th>Nama</th>   
          <th>Kelas</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php $no=1; while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $no; ?></td> 
          <td><?php echo $row['id']; ?></td>    
          <td><?php echo $row['nama']; ?></td>   
          <td><?php echo $row['kelas']; ?></td>
          <td><?php echo $row['alamat']; ?></td>   
   
          <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit </a> |
              <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>   
          </td>
        </tr>
      <?php $no++; } ?>    
      </tbody>
    </table>
    <?php
  }
  
  // Close the database connection
  mysqli_close($koneksi);
  ?>
        </div>
    </div>
    <div class="footer">
        <p style="text-transform: capitalize;">&copy; 202023 hak cipta dari pT. Axia</p>
    </div>
    
    <script src="/bootstrap.bundle.min.js"></script>
</body>
</html> 