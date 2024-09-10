<?php
include 'koneksi.php';
extract($_POST);
if(isset($cari)){
	$query =mysqli_query("select * from isi_berita where judul LIKE '%$pcari%' ");
	while ($tampil = mysqli_fetch_array($query)) {
		echo"<section class='tengah'><article>Hasil Pencarian :<br>";
		$gede = mb_strtoupper($tampil['judul']);
		echo"<a href='index.php?menu=detail_berita&id_berita=$tampil[id_berita]'> $gede</a>";
		echo"</article></section><br>";
	}
}else{
	$tabel = "isi_berita";
	$sql = mysqli_query($koneksi, "select * from $tabel where id_kategori = '1' order by tanggal desc limit 3");
	while ($tampil = mysqli_fetch_array($sql)){
		$potong = substr($tampil['gambar'],3);
		$gede = mb_strtoupper($tampil['judul']);
		echo"<article>";
		echo"<figure>";
		echo"<img src='$potong' align='left' alt='gambar'>";
		echo "</figure><hgroup><h2>";
		echo"<a href='index.php?menu=detail_berita&id_berita=$tampil[id_berita]'> $gede</a>";

		echo "</h2><i>Diunggah pada: ";
		echo $tampil['tanggal'];
		echo "</i></hgroup><br>";
		$data = substr($tampil['isi'],0,200);
		echo $data;
		echo"<a href='index.php?menu=detail_berita&id_berita=$tampil[id_berita]'>baca selengkap >>>.</a>";
		echo"</article>  <br>";
	}
}

?>
