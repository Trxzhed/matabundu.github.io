<?php
include'../koneksi.php';
?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Halaman User</title>
		</head>
		<body>
			<form name="inputuser" method="post" action="admin.php?n=psimpan_user">
				<table border="1" align="center" cellpadding="1" cellspacing="1"  id="theTable">
				<h2>Form Tambah User</h2>
				<tr>
					<th>ID User</th>
					<td align="left"><input type="text" name="id_user" value="adm" maxlength="5"/></td>
				</tr>
				<tr>
					<th>User Name</th>
					<td align="left"><input type="text" name="username" /></td>
				</tr>
				<tr>
					<th>Password </th>
					<td align="left"><input type="text" name="password" /></td>
				</tr>
				<tr>
					<th>Hak Akses</th>
					<td align="left"><input type="text" name="hak_akses" value="administrator" readonly/></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="tambahUser" value="Tambah" id='button2'>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="left"><a href="admin.php?n=user" id="button2"><img src='../asset/icon/back.png' width='15px' height='15px'>Kembali</a>
					</td>
				</tr>
				</table>
			</form>
		</body>
	</html>
