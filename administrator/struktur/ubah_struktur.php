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
		<title>Tambah Data Struktur Organisasi</title>
	</head>
	<body>
		Ubah Data Struktur
		<hr>
		<?php
		include"../koneksi.php";
		extract($_GET);
		$query = "select * from struktur_organisasi where id_struktur = $id_struktur";
		$sql = mysqli_query($koneksi, $query);
		$data= mysqli_fetch_array($sql);
		?>
		<form method="post" action="admin.php?n=pubah_struktur&id_struktur=<?php echo $data['id_struktur']?>" enctype="multipart/form-data">
		<table id="theTable">
			<tr>
				<th>Id Struktur</th>
				<td align="left">
					<input type="text" name="id_struktur" value="<?php echo $data['id_struktur'];?>" readonly>
				</td>
			</tr>
			<tr>
				<th>Id Jenis</th>
				<td align="left">
					<select name="id_jenis" id="id_jenis" onChange="changeValue(this.value)" >
					<option>Pilih Id Jenis</option>
					<?php
					$sql = mysqli_query($koneksi, "SELECT * FROM jenis_organisasi");
					//if(mysqli_num_rows($sql) != 0){
					$dataArray = "var dataStruktur = new Array()\n;";
					while($data = mysqli_fetch_array($sql)){
						echo '<option value='.$data['id_jenis'].'>'.$data['id_jenis'].'</option>';
						$dataArray .="dataStruktur['".$data['id_jenis']."'] = {nama_organisasi:'".addslashes($data['nama_organisasi'])."'};\n" ;
					}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Nama Organisasi</th>
				<td align="left">
					<input type="text" name="nama_organisasi" id="nama_organisasi" >
				</td>
			</tr>
			<?php
			extract($_GET);
			$query = "select * from struktur_organisasi where id_struktur = $id_struktur";
			$sql = mysqli_query($koneksi, $query);
			$data= mysqli_fetch_array($sql);
			?>
			<tr>
				<th>Gambar Struktur</th>
				<td align="left">
					<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
					<input type="file" name="gambar" value="<?php echo $data['gambar_struktur']; ?>">
				</td>
			</tr>
			<tr>
				<th>Periode</th>
				<td align="left">
					<input type="text" name="periode" value="<?php echo $data['periode']; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Tambah" name="tambahData" id='button2'>
				</td>
			</tr>
			<tr>
				<td align="left">
					<a href='admin.php?n=struktur&id_struktur&page=1' id="button2">
						<img src='../asset/icon/back.png' width='15px' height='15px'>Kembali
					</a>
				</td>
			</tr>
		</table>
	</form>
		<script type="text/javascript">
    <?php echo $dataArray; ?>
    function changeValue(id_jenis){
    document.getElementById('nama_organisasi').value = dataStruktur[id_jenis].nama_organisasi;
	};
    </script>
	</body>
</html>
<?php
}
?>
