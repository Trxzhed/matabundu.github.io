<?php
include '../koneksi.php';
$id_struktur = $_POST['id_struktur'];
$id_jenis = $_POST['id_jenis'];
$nama_organisasi = $_POST['nama_organisasi'];
$periode = $_POST['periode'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$gambarbaru = date('dmYHis').$gambar;
//set path folder
$path = "../images/struktur/".$gambarbaru;
//proses upload
if(move_uploaded_file($tmp,$path)){
  $query = "INSERT into struktur_organisasi values ('$id_struktur','$id_jenis','$nama_organisasi','$path','$periode')";
  $sql = mysqli_query($koneksi, $query);
  if($sql){
    header("location:admin.php?n=struktur&page=1");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database. ";
    echo "<br><a href='admin.php?n=tambah_struktur'>Kembali Ke Form</a>";
  }
}else{
  echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='admin.php?n=tambah_struktur'>Kembali Ke Form</a>";
}

?>
