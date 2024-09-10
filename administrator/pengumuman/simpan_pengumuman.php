<?php
//proses simpan pengumuman
include '../koneksi.php';
$id_berita = $_POST['id_berita'];
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$gambar = $_FILES['gambar']['name'];
$isi = $_POST['isi'];
$tmp = $_FILES['gambar']['tmp_name'];
//
$gambarbaru = date('dmYHis').$gambar;
//set path folder
$path = "../images/".$gambarbaru;
//proses upload
if(move_uploaded_file($tmp,$path)){
  $query = "INSERT into isi_berita values ('".$id_berita."','".$id_kategori."','".$nama_kategori."','".$judul."','".$tanggal."','".$waktu."','".$path."','".$isi."')";
  $sql = mysqli_query($koneksi, $query);
  if($sql){
    header("location:admin.php?n=pengumuman&page=1");//jika berhasil kembali ke pengumuman
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database. ";
    echo "<br><a href='admin.php?n=tambah_pengumuman'>Kembali Ke Form</a>";
  }
}else{
  echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='admin.php?n=tambah_pengumuman'>Kembali Ke Form</a>";
}
?>
