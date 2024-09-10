<?php
include'../koneksi.php';
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	//tampilan perangkat
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ubah Data Perangkat</title>
	</head>
	<body>
Ubah Perangkat
<hr>
		<table id="theTable">
		<form action="admin.php?n=pubah_perangkat" method="post" enctype="multipart/form-data" >
      <?php
        include"../koneksi.php";
        extract($_GET);
        $query="select * from perangkat where id_perangkat='$id_perangkat'";
        $tampil=mysqli_query($koneksi, $query);
        $data=mysqli_fetch_array($tampil);
				switch ($data['id_jenis']) {
					case '1':
						# code...
						$back = 'desa';
						break;
					case '2':
						$back = 'BPD' ;
						break;
					case '3':
						$back = 'LPM';
						break;
					case '4' :
						$back = 'pkk';
						break;
					case '5' :
						$back = 'karang_taruna';
						break;
					case '6' :
						$back = 'bumdes';
						break;
					default:
						# code...
						break;
					}
      ?>
			<tr>
				<th>Id Perangkat</th>
				<td align="left"><input type="text" name="id_perangkat" value="<?php echo $data['id_perangkat'] ?>" readonly/></td>
			</tr>
			<tr>
				<th>Nama</th>
				<td align="left"><input type="text" name="nama" value="<?php echo $data['nama'] ?>"/></td>
			</tr>
			<tr>
				<th>Jabatan</th>
				<td align="left"><input type="text" name="jabatan" value="<?php echo $data['jabatan'] ?>"/></td>
			</tr>
			<tr>
				<th>Pendidikan</th>
				<td align="left"><input type="text" name="pendidikan" value="<?php echo $data['pendidikan'] ?>"/></td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td align="left"><textarea type="text" name="alamat" ><?php echo $data['alamat'] ?></textarea></td>
			</tr>
			<tr>
				<th>Gambar</th>
				<td align="left">
					<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
					<input type="file" name="gambar" />
				</td>
			</tr>
			<tr>
				<td align="left"><input type="hidden" name="id_jenis" value="<?php echo $data['id_jenis'] ?>" /></td>
			</tr>
			<tr>
				<th>Periode</th>
				<td align="left"><input type="text" name="periode" maxlength="4" value="<?php echo $data['periode'] ?>"/></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="ubah_perangkat" value="Ubah" id="button2"/>
				</td>
			</tr>
			<tr>
				<td><a href="admin.php?n=perangkat_<?php echo $back ;?>&page=1" class="button"><img src='../asset/icon/back.png' width='15px' height='15px'>Kembali</a>
			</tr>
		</form>
		</table>
	</body>
</html>
<?php
}
?>
