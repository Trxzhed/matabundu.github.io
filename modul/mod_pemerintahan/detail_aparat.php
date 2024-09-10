  <article class="tengah">
<?php
include 'koneksi.php';
$id_perangkat = $_GET['id_perangkat'];
$query = "select * from perangkat where id_perangkat = '$id_perangkat'";
$sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_array($sql);
$potong =substr($tampil['gambar'],3);

//
echo "<table align='center'id='tabel2' border='1'>
<article>Halaman Detail Aparat
<tr>
<th colspan='2'>
    <img src='$potong'>
</th>
</tr>
<tr>
  <th>Nama</th>
  <td>$tampil[nama]</td>
</tr>
<tr>
  <th>Jabatan</th>
  <td>$tampil[jabatan]</td>
</tr>
<tr>
  <th>Pendidikan</th>
  <td>$tampil[pendidikan]</td>
</tr>
<tr>
  <th>Alamat</th>
  <td>$tampil[alamat]</td>
</tr>
<tr>
  <th>Periode</th>
  <td>$tampil[periode]</td>
</tr>
<tr>
<th colspan='2'><a href='index.php?menu=periode_organisasi&periode=$tampil[periode]'>Kembali</a></th>
</tr>
</table>
</article>";
?>
