<?php
include'../koneksi.php';
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Daftar Pesan</title>
	</head>
	<body>
		<p>Daftar Pesan</p>
		<hr>
		<table border="1" width="980" id="theTable">
			<tr>
				<th>ID Pesan </th>
				<th>Tanggal </th>
				<th>Nama </th>
				<th>Email </th>
				<th>Subjek </th>
				<th>Pesan </th>
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
				$data = mysqli_query($koneksi, "select * from komentar");
				while ($dkomen = mysqli_fetch_array ($data)) {
					echo "<tr>
					<td>$dkomen[id_komentar]</td>
					<td>$dkomen[tanggal]</td>
					<td>$dkomen[nama]</td>
					<td>$dkomen[email]</td>
					<td>$dkomen[subjek]</td>
					<td>$dkomen[pesan]</td>
					<td><a href='admin.php?n=hapus_pesan&id_komentar=$dkomen[id_komentar]' "; ?> onClick="return confirm('Apakah pesan ini akan dihapus ?')"<?php echo "title='Hapus Data' id='button2'><img src='../asset/icon/garbage.png' width='15px' height='15px'>Hapus</a>
					</td>
					</tr>
					 ";
				}
				?>
			</tr>
		</table>
		<hr>Halaman <br>
		<?php
		$query= mysqli_query($koneksi, "select * from komentar ");
		$row = mysqli_num_rows($query);
		$a=$row/10;
		$a=ceil($a);
		for($b=1; $b<=$a; $b++){
			?>
				<a href="admin.php?n=pesan&page=<?php echo $b; ?>" id="button2" ><?php echo $b; ?></a>
			<?php
		}

		?>
	</body>
</html>
<?php
}
?>
