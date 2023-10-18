<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bs/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="d-flex justify-content-center">EDIT SISWA</h1>
        </div>
      </div>
    </div>
    <br> 
    <hr class="liltellik">
    <div class="conz">
        <div class="container">
        <?php
        include 'koneksi.php';
        $id = $_GET ['id'];
        $data = mysqli_query($koneksi, "select * from siswas where id='$id'");
        while($row = mysqli_fetch_array($data)){
        ?>
            <form method="post" action="update.php">
                <div class="form-group">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama :</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama" value="<?php echo $row['nama']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Kelas : </label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="comment" name="kelas" value="<?php echo $row['kelas']; ?>"> 
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Alamat : </label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="comment" name="alamat" value="<?php echo $row['alamat']; ?>"> 
                </div>
                <br> <br> <br>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-10">
                      <button type="button" class="btn btn-outline-success" onclick="terlalutampan()">BACK</button>
                    </div>
                    <div class="col-sm-2">
                      <button type="submit" class="btn btn-outline-success">EDIT</button>
                    </div>
                  </div>
                </div>
            </form>
        <?php 
        }
        ?>
        </div>
  </div>
  
    <br> <br> <br>
    <script>
   function terlalutampan(){
    window.location.href = "student.php";
   }
    </script> 
</body>
</html>