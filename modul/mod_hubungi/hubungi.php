<!DOCTYPE html>
<html>
	<head>
		<title>Hubungi Kami</title>
	</head>
	<body>
		<article class="tengah">
		Untuk menhubungi kami dapat melalui email ke <a>desakertwangunan@gmail.com</a><br>
		Atau di fanspage Facebook kami di <a>facebook.com/Desa Kertawanguna- Kabupaten Kuningan</a>. Dapat juga langsung datang ke Kantor Desa Kertawangunan yang beralamat di Jalan ...

		<p>Anda juga dapat menghubungi kami dengan mengisi from dibawah ini</p>
		<form method="post" action="index.php?menu=x34567x">
		<table border="1" width="500" id="tabel2">
			<input type="hidden" name="id_komentar" />
			<tr>
				<th>Nama </th>
				<td>:</td>
				<td align="left"><input type="text" name="nama" /></td>
			</tr>
			<tr>
				<th>Email </th>
				<td>:</td>
				<td align="left"><input type="text" name="email" /></td>
			</tr>
			<tr>
				<th>Subjek </th>
				<td>:</td>
				<td align="left"><input type="text" name="subjek" /></td>
			</tr>
			<tr>
				<th>Pesan </th>
				<td>:</td>
				<td align="left"><textarea name="pesan" cols="50" row = "200"></textarea></td>
			</tr>
			<tr>
				<th colspan="3"><input type="submit" name="kirim" id="button3"value="Kirim"></th>
			</tr>
		</table>
	</form>
	<br>
	<hr>
	<p>Daftar  Pesan :</p>
		<?php
		include'koneksi.php';
		$komen = mysqli_query($koneksi, "select * from komentar");
		while($data = mysqli_fetch_array($komen)){
			echo"

			<p>Tanggal  $data[tanggal]</p>
			<p>Nama 	 $data[nama]</p>
			<p>Pesan 	$data[pesan]</p>
			<hr>
			";
		}
		?>

</article>
	</body>
</html>
