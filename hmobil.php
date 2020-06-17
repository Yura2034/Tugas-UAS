<?php 

include("koneksi.php");
$id=$_GET['id'];
$hapus=mysqli_query($koneksi,"delete from mobil where id_mobil='$id'") or die(mysqli_error());
if ($hapus){
	header("Location:index.php?x=mobil");
}

 ?>