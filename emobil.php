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
   <!-- <div class="container">  -->
  <?php 
    include("koneksi.php");
    $id=$_GET['id'];
    $cari=mysqli_query($koneksi,"select*form mobil where id_mobil='$id'");
    $data=mysqli_fetch_array($cari);
   ?>
    <div class="card">
      <h5 class="card-header">Ubah data Mobil</h5>
        <div class="card-body">
          <form method="post" action="?x=umobil">
            <input type="hidden" name="kode" value="<?php echo $data['id_mobil']; ?>">
            <div class="form-group">
              <label >No Polisi</label>
              <input type="text" class="form-control" name="txtPolisi" value="<?php echo $data['no_polisi']; ?>">
            </div>

            <div class="form-group">
              <label >Merk Mobil</label>
                  <input type="text" class="form-control" name="txtMerk" value="<?php echo $data['merk']; ?>">
                    </div>

                      <div class="form-group">
                    <label>Tahun Keluaran</label>
                 <input type="text" class="form-control" name="txtTahun" value="<?php echo $data['tahun']; ?>">
              </div>
                    <div class="form-group">
                    <label>Harga</label>
                 <input type="text" class="form-control" name="txtHarga" value="<?php echo $data['harga']; ?>">
              </div>
               

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>  
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>