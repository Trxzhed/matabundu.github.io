<?php
include '../koneksi.php';

$id_gambar = $_POST['id_gambar'];
$tanggal_unggah = $_POST['tanggal_unggah'];
$gambar = $_FILES['gambar']['name'];
$judul = $_POST['judul'];
$tmp = $_FILES['gambar']['tmp_name'];
//
$gambarbaru = date('dmYHis').$gambar;
//set path folder
$path = "../images/".$gambarbaru;
//proses upload
if(move_uploaded_file($tmp,$path)){
  $query = "INSERT into gambar values ('".$id_gambar."','".$path."','".$judul."','".$tanggal_unggah."')";
  $sql = mysqli_query($koneksi, $query);
  if($sql){
    header("location:admin.php?n=gambar&page=1");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database..'".mysqli_error()."'";
    echo "<br><a href='admin.php?n=tambah_gambar'>Kembali Ke Form</a>";
  }
}else{
  echo "Maaf, Gambar gagal untuk diupload..'".mysqli_error()."'";
	echo "<br><a href='admin.php?n=tambah_gambar'>Kembali Ke Form</a>";
}
?>
