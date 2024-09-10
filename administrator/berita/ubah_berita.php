<?php
include'../koneksi.php';
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	//tampilan berita
	?>
	<!DOCTYPE html>
	<html>
	  <head>
	    <title>Halaman Ubah Berita </title>
	  </head>
	  <body>
			Ubah berita
			<hr>
			<?php
				include"../koneksi.php";
				extract($_GET);
				$query="select * from isi_berita where id_berita='$id_berita'";
				$tampil=mysqli_query($koneksi, $query);
				$data=mysqli_fetch_array($tampil);
			?>
			<form method="post" action="admin.php?n=proses_ubah&id_berita=<?php echo $data['id_berita'] ?>" enctype="multipart/form-data" >
			<table border="1"  id="theTable">

				</tr>
				<tr>
	        <th>Id Kategori</th>
					<td align="left">
						<input type="text" name="id_kategori" value="<?php echo $data['id_kategori']?>" readonly />
						</select>
					</td>
				</tr>
				<tr>
					<th>Nama Kategori</th>
					<td align="left">
						<input type="text" name="nama_kategori" value="<?php echo $data['nama_kategori']?>" readonly />
					</td>
				</tr>
				<tr>
	        <th>Judul</th>
					<td align="left">
						<input type="text" size="50" name="judul" value="<?php echo $data['judul']?>" />
					</td>
				</tr>
				<tr>
	        <th>Tanggal</th>
					<td align="left">
						<input type="text" name="tanggal" id="datepicker" value="<?php echo $data['tanggal']?>" />
					</td>
				</tr>
				<tr>
	        <th >Waktu</th>
					<td align="left">
						<input type="text" name="waktu" id="waktu" value="<?php echo $data['waktu']?>" />
					</td>
				</tr>
				<tr>
	        <th>Gambar</th>
					<td  align="left">
						<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
						<input type="file" name="gambar" />
					</td>
				</tr>
				<tr>
	        <th>Isi</th>
					<td align="left">
						<textarea name="isi" class="ckeditor"  value="<?php echo $data['isi']?>"><?php echo $data['isi']?></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="ubah_berita" value="Ubah" id='button2'/>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="left">
						<a href="admin.php?n=berita&page=1" id='button2'>
							<img src='../asset/icon/back.png' width='15px' height='15px'>Kembali</a>
					</td>
				</tr>
			</table>
		</form>
		</body>
	</html>
	<?php
}
	?>
