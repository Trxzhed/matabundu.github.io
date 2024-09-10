<?php
include 'koneksi.php';
$id_berita = $_GET['id_berita'];
$query = "select * from isi_berita where id_berita = '$id_berita'";
$sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_array($sql);
$potong = substr($tampil['gambar'],3);
$gede = mb_strtoupper($tampil['judul']);
//
echo"<article>";
echo"<figure>";
echo"<img src='$potong' align='left' alt='gambar'>";
echo "</figure><hgroup><h2>";
echo $gede;
echo "</h2><br><i>Di unggah pada ";
echo $tampil['tanggal'];
echo "</i></hgroup><br>";
echo $tampil['isi'];
echo"</article>  <br>";
?>
