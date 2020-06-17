<?php 
include ("koneksi.php");
$nopolisi=$_POST['txtPolisi'];
$merk=$_POST['txtMerk'];
$tahun=$_POST['txtTahun'];
$harga=$_POST['txtHarga'];

 $simpan=mysqli_query($koneksi,"insert into mobil (no_polisi,merk,tahun,harga,s_mobil)values('$nopolisi','$merk','$tahun','$harga', 'AKTIF')") or die(mysqli_error());

if($simpan){
		header("Location:index.php?x=mobil");
	}
 ?>