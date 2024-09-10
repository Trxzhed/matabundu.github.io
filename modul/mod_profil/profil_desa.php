<?php
include 'koneksi.php';
//
$tabel = "data_profil";
$sql = mysqli_query($koneksi, "select * from $tabel where jenis = 'profil' order by tanggal desc limit 5");
while ($tampil = mysqli_fetch_array($sql)){
	$potong = substr($tampil['gambar'],3);
	//$gede = mb_strtoupper($tampil['judul']);
	echo"<article>";
	echo"<figure>";
	echo"<img src='$potong' align='left' alt='gambar'>";
	echo "</figure><hgroup>";
	//echo"<a href='index.php?menu=detail_profil&id=$tampil[id]'> $gede</a>";
	echo "<i>Diunggah pada: ";
	echo $tampil['tanggal'];
	echo "</i></hgroup><br>";
	$data = substr($tampil['isi'],0,100);
	echo $data;
	//echo $data;
	echo"<a href='index.php?menu=detail_profil&id=$tampil[id]'> baca selengkap >>>.</a>";
	echo"</article>  <br>";
}
?>
