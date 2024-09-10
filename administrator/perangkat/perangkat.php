<?php
include'../koneksi.php';
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	//tampilan aparat
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Daftar Perangkat Desa</title>
	</head>
	<body>
<a href="admin.php?n=perangkat_desa&page=1" class="button">Perangkat Desa</a>
<a href="admin.php?n=perangkat_BPD&page=1" class="button">BPD</a>
<a href="admin.php?n=perangkat_LPM&page=1" class="button">LPM</a>
<a href="admin.php?n=perangkat_pkk&page=1" class="button">PKK</a>
<a href="admin.php?n=perangkat_karang_taruna&page=1" class="button">Karang Taruna</a>
<a href="admin.php?n=perangkat_bumdes&page=1" class="button">BUMDES</a>
<br>
<a href="admin.php?n=tambah_perangkat" class="button" >Tambah Data Perangkat</a>

	</body>
</html>
<?php
}
?>
