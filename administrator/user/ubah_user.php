<?php
include'../koneksi.php';
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	//tampilan user
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Halaman Ubah User</title>
		</head>
		<body>
		<?php
			include"../koneksi.php";
			extract($_GET);
			$query="select * from user where id_user='$id_user'";
			$tampil=mysqli_query($koneksi, $query);
			$data=mysqli_fetch_array($tampil);
		?>
			<form name="ubahuser" method="post" action="admin.php?n=update_user">
				<table border="1" align="center" cellpadding="1" cellspacing="1"  id="theTable">
				<caption>Form Ubah User</caption>
				<tr>
					<th>ID User</th>
					<td><input type="text" name="id_user" value="<?php echo $data['id_user'];?>" readonly /></td>
				</tr>
				<tr>
					<th>User Name</th>
					<td><input type="text" name="username" value="<?php echo $data['username'];?>"/></td>
				</tr>
				<tr>
					<th>Password </th>
					<td><input type="text" name="password" value="<?php echo $data['password'];?>"/></td>
				</tr>
				<tr>
					<th>Hak Akses</th>
					<td><input type="text" name="hak_akses" value="<?php echo $data['hak_akses'];?>" readonly/></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="ubah" value="Simpan" id='button2'>
					</td>
				</tr>
				<tr>
					<td colspan="2"  align="left"><a href="admin.php?n=user" id='button2'><img src='../asset/icon/back.png' width='15px' height='15px'>Kembali</a>
					</td>
				</tr>
				</table>
			</form>
		</body>
	</html>
<?php
}
?>
