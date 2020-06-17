<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      </head>

<body>
  <?php 
    if($_SESSION['level'] == "SUPER"){
    include("koneksi.php");
      $cari=mysqli_query($koneksi,"select * from admin") or die(mysqli_error());

   ?>

    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Admin</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Level</th>
            <th>Permintaan</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no=1;
            while ($data=mysqli_fetch_array($cari)) {
           ?>
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $data['nama_admin']; ?></td>
            <td><?php echo $data['jenkel_admin']; ?></td>
            <td><?php echo $data['level']; ?></td>
            <td>
              <a href="?x=hadmin&id=<?php echo $data['id_admin'];?>" class="btn btn-danger">Hapus</a>
              <!-- <a href="?x=eadmin&id=<?php echo $data['id_admin'];?>" class="btn btn-warning">Ubah</a> -->
            </td>
          </tr>
          <?php 
           $no++;
          }
           ?>
        </tbody>
      </table>
        <a href="?x=tadmin" class="btn btn-primary">Tambah</a>
     <?php 
     }
     else{ ?>
      <script type="text/JavaScript">
        alert("Level Admin tidak boleh masuk !");
        window.location = "index.php";
      </script>
      <?php
     
     }
      ?>   
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>