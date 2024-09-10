<?php
include'../koneksi.php';
	//tampilan struktur
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Struktur Organisasis</title>
	</head>
	<body>
		Halaman Struktur Organisasi
		<br>
		<a href="admin.php?n=tambah_struktur" title="Tambah Data Struktur" class="button">Tambah Data Struktur</a>
		<table border="1" id="theTable">
			<tr>
				<th>Id Struktur</th>
				<th>Id Jenis</th>
				<th>Nama Organisasi</th>
				<th>Gambar Struktur</th>
				<th>Periode</th>
				<th>Opsi</th>
			</tr>
			<tr>
			<?php
				include "../koneksi.php";
				$page=$_GET['page'];
				if($page==""||$page==10){
						$page2=0;
				}else{
						$page2=($page*10)-10;
				}
				$data = mysqli_query($koneksi, "select * from struktur_organisasi, jenis_organisasi where struktur_organisasi.id_jenis = jenis_organisasi.id_jenis limit $page2,10 ");
				while ($organisasi = mysqli_fetch_array ($data)) {
					$prd = $organisasi['periode']+5;
					echo "<tr>
					<td>$organisasi[id_struktur]</td>
					<td>$organisasi[id_jenis]</td>
					<td>$organisasi[nama_organisasi]</td>
					<td>$organisasi[gambar_struktur]</td>
					<td>$organisasi[periode] - $prd</td>
					<td><a href='admin.php?n=ubah_struktur&id_struktur=$organisasi[id_struktur]'id='button2'><img src='../asset/icon/edit.png' width='15px' height='15px'>Ubah</a>
					|| <a href='admin.php?n=hapus_struktur&id_struktur=$organisasi[id_struktur]'" ;?> onClick="return confirm('Apakah data ini akan dihapus ?')" <?php echo "title='Hapus Data' id='button2'><img src='../asset/icon/garbage.png' width='15px' height='15px'>Hapus</a>
					</td>
					</tr>
					 ";
				}
				?>
			</tr>
		</table>
		<hr>Halaman <br>
		<?php
		$query= mysqli_query("select * from isi_berita where id_kategori='2' ");
		$row = mysqli_num_rows($koneksi, $query);
		$a=$row/10;
		$a=ceil($a);
		for($b=1; $b<=$a; $b++){
			?>
				<a href="admin.php?n=struktur&page=<?php echo $b; ?>" id="button2" "><?php echo $b; ?></a>
			<?php
		}
		?>
	</body>
</html>
