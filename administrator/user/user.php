<?php
include'../koneksi.php';
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Halaman User</title>
		</head>
		<body>
			<p>List User</p>
			<hr>
			<a href="admin.php?n=tambah_user" class="button">Tambah User</a>
			<table border="1" align="center"  id="theTable">
				<tr>
					<th>ID User</th>
					<th>User Name</th>
					<th>Password </th>
					<th>Hak Akses</th>
					<th>Opsi</th>
				</tr>
				<?php
				include "../koneksi.php";
				$data = mysqli_query($koneksi, "select * from user");
				while ($duser = mysqli_fetch_array ($data)) {
					echo "<tr>
					<td>$duser[id_user]</td>
					<td>$duser[username]</td>
					<td>$duser[password]</td>
					<td>$duser[hak_akses]</td>
					<td><a href='admin.php?n=ubah_user&id_user=$duser[id_user]' id='button2'><img src='../asset/icon/edit.png' width='15px' height='15px'>Edit</a>
					|| <a href='admin.php?n=hapus_user&id_user=$duser[id_user]' "; ?> onclick="return confirm('Apakah data ini akan dihapus ?')" <?php echo " title='Hapus Data' id='button2'><img src='../asset/icon/garbage.png' width='15px' height='15px'>Hapus</a>
					</td>
					</tr>
					 ";
				}
				?>

			</table>
		</body>
	</html>
	<?php
}
?>
