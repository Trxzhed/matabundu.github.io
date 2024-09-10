<?php
include '../koneksi.php';

$id = $_POST['id'];
$jenis = $_POST['jenis'];
$tanggal = $_POST['tanggal'];
$gambar = $_FILES['gambar']['name'];
$isi = $_POST['isi'];
$tmp = $_FILES['gambar']['tmp_name'];
//
$gambarbaru = date('dmYHis').$gambar;
//set path folder
$path = "../images/".$gambarbaru;
//proses upload
if(move_uploaded_file($tmp,$path)){
  $query = "INSERT into data_profil values ('".$id."','".$jenis."','".$tanggal."','".$isi."','".$path."')";
  $sql = mysqli_query($koneksi, $query);
  if($sql){
    header("location:admin.php?n=profil&page=1");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database. ";
    echo "<br><a href='admin.php?n=tambah_profil'>Kembali Ke Form</a>";
  }
}else{
  echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='admin.php?n=tambah_profil'>Kembali Ke Form</a>";
}
?>
