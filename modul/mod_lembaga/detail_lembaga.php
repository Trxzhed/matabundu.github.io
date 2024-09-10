<?php
echo "<article><hgroup>Halaman Detail<br>";
include 'koneksi.php';
$id_perangkat = $_GET['id_perangkat'];
$query = "select * from perangkat where id_perangkat = '$id_perangkat'";
$sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_array($sql);
$potong = substr($tampil['gambar'],3);
//
echo "<table align='center' border='1'>
<tr>
<td colspan='2'>
<img src='$potong'>
</td>
</tr>
<tr>
<td>Nama</td>
<td>$tampil[nama]</td>
</tr>
<tr>
<td>Jabatan</td>
<td>$tampil[jabatan]</td>
</tr>
<tr>
<td>Pendidikan</td>
<td>$tampil[pendidikan]</td>
</tr>
<tr>
<td>Alamat</td>
<td>$tampil[alamat]</td>
</tr>
<tr>
<td>Periode</td>
<td>$tampil[periode]</td>
</tr>
<tr>
<td colspan='2'><a href='index.php?menu=periode_organisasi&periode=$tampil[periode]'>Kembali</a></td>
</tr>
</table>";
?>
<hgroup>
</article>
