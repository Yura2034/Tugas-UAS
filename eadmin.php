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
    <div class="card">
      <h5 class="card-header">Ubah Data Admin</h5>
        <div class="card-body">
          <form method="post" action="?x=uadmin">
            <?php 
              include("koneksi.php");
              $id = $_GET['id'];
              $cari =mysqli_query($koneksi,"select * from admin where id_admin='$id'") or die(mysqli_error());
              $data = mysqli_fetch_array($cari);
             ?>
             <input type="hidden" name="kode" value="<?php echo $data['id_admin']; ?>">

            <div class="form-group">
              <label >Nama Lengkap</label>
              <input type="text" class="form-control" name="txtNama" value="<?php echo $data['nama_admin']; ?>">
            </div>

                <div class="form-group">
                  <label >Jenis Kelamin</label>
                     <select name="kelamin" class="form-control">
                      <option value="<?php echo $data['jenkel_admin'];?>"></option>
                       <option value="Laki-Laki" >Laki-Laki</option>
                       <option value="Perempuan">Perempuan</option>
                     </select>
               </div>

            <div class="form-group">
              <label >Username</label>
                  <input type="text" class="form-control" name="txtUsername" value="<?php echo $data['username']; ?>">
                    </div>
                      <div class="form-group">
                    <label>Password</label>
                 <input type="password" class="form-control" name="txtPassword" value="<?php echo $data['password']; ?>">
              </div>

               <div class="form-group">
                <label >Level</label>
                   <select name ="level" class="form-control">
                    <option value="<?php echo $data['level']; ?>"></option>
                     <option value="ADMIN">Admin</option>
                     <option value="SUPER">Super Admin</option>
                  </select>
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