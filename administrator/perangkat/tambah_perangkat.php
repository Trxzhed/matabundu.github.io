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
		<title>Tambah Data Perangkat</title>
	</head>
	<body>
Tambah Perangkat
<hr>
<form method="post" action="admin.php?n=simpan_perangkat" enctype="multipart/form-data">
		<table id="theTable">
			<tr>
				<th>Id Perangkat</th>
				<td align="left">
					<input type="text" name="id_perangkat" />
				</td>
			</tr>
			<tr>
				<th>Nama</th>
				<td align="left">
					<input type="text" name="nama" />
				</td>
			</tr>
			<tr>
				<th>Jabatan</th>
				<td align="left">
					<input type="text" name="jabatan" />
				</td>
			</tr>
			<tr>
				<th>Pendidikan</th>
				<td align="left">
					<input type="text" name="pendidikan" />
				</td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td align="left">
					<textarea type="text" name="alamat" ></textarea>
				</td>
			</tr>
			<tr>
				<th>Gambar</th>
				<td align="left">
					<input type="file" name="gambar" />
				</td>
			</tr>
			<tr>
				<th>Nama Organisasi</th>
				<td align="left">
				<select name="id_jenis" >
					<option value="1">Perangkat Desa</option>
					<option value="2">BPD</option>
					<option value="3">LPM</option>
					<option value="4">PKK</option>
					<option value="5">Karang Taruna</option>
					<option value="6">BUMDES</option>
				</select>
				</td>
			</tr>
			<tr>
				<th>Periode</th>
				<td align="left">
					<input type="text" name="periode" maxlength="4"/>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="tambahPerangkat" value="Tambah" id="button2"/>
				</td>
			</tr>
			<tr>
				<td><a href="admin.php?n=perangkat" class="button"><img src='../asset/icon/back.png' width='15px' height='15px'>Kembali</a>
			</tr>
		</form>
		</table>
	</body>
</html>
<?php
}
?>
