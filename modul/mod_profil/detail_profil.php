<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "select * from data_profil where id ='$id' and jenis = 'profil'";
$sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_array($sql);
	$potong = substr($tampil['gambar'],3);
//
echo"<article class='tengah'>";
echo"<figure>";
echo"<img src='$potong' align='left' alt='gambar'>";
echo "</figure><hgroup><i>";
echo "Di upload pada <br>";
echo $tampil['tanggal'];
echo "</i></hgroup><br>";
echo $tampil['isi'];
echo"</article>  <br>";
?>
