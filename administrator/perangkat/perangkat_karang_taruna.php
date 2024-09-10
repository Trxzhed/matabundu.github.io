<?php
echo "Halaman Karang Taruna <br>";
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	//tampilan aparat karang
?>
<hr>
<a href="admin.php?n=perangkat_desa&page=1" class="button">Perangkat Desa</a>
<a href="admin.php?n=perangkat_BPD&page=1" class="button">BPD</a>
<a href="admin.php?n=perangkat_LPM&page=1" class="button">LPM</a>
<a href="admin.php?n=perangkat_pkk&page=1" class="button">PKK</a>
<a href="admin.php?n=perangkat_karang_taruna&page=1" class="button" id="butonActive">Karang Taruna</a>
<a href="admin.php?n=perangkat_bumdes&page=1" class="button">BUMDES</a>
<hr>
<?php
//tampilkan tahun
include '../koneksi.php';
$sql = mysqli_query($koneksi, "SELECT DISTINCTROW periode FROM perangkat where id_jenis = '5'");
if(mysqli_num_rows($sql) != 0){
while($data = mysqli_fetch_assoc($sql)){
echo '<a>'.$data['periode'].'</a> ||';
  }
}
?>
<hr>
<table border="1" id="theTable">
  <tr>
    <th>Id Perangkat</th>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>Pendidikan</th>
    <th>Alamat</th>
    <th>Gambar</th>
    <th>Periode</th>
    <th>Opsi</th>
  </tr>
  <tr>
		<?php
		$page=$_GET['page'];
		if($page==""||$page==1){
				$page2=0;
		}else{
				$page2=($page*10)-10;
		}
    $data = mysqli_query($koneksi, "select * from perangkat where id_jenis = '5'; ");
    while ($stk = mysqli_fetch_array ($data)) {

      echo "<tr>
      <td>$stk[id_perangkat]</td>
      <td>$stk[nama]</td>
      <td>$stk[jabatan]</td>
      <td>$stk[pendidikan]</td>
      <td>$stk[alamat]</td>
      <td>$stk[gambar]</td>
      <td>$stk[periode]</td>

      <td><a href='admin.php?n=ubah_perangkat&id_perangkat=$stk[id_perangkat]' id='button2'><img src='../asset/icon/edit.png' width='15px' height='15px'>Edit</a>
      || <a href='admin.php?n=hapus_perangkat&id_perangkat=$stk[id_perangkat]'";?> onclick="return confirm('Apakah data ini akan dihapus ?')" <?php echo " title='Hapus Data' id='button2'><img src='../asset/icon/garbage.png' width='15px' height='15px'>Hapus</a>
      </td>
      </tr>
       ";
    }
    ?>
  </tr>
</table>
<hr>Halaman <br>
<?php
$query= mysqli_query($koneksi, "select * from perangkat where id_jenis='5' ");
$row = mysqli_num_rows($query);
$a=$row/10;
$a=ceil($a);
for($b=1; $b<=$a; $b++){
	?>
		<a href="admin.php?n=perangkat_karang_taruna&page=<?php echo $b; ?>" id="button2" ><?php echo $b; ?></a>
	<?php
}
?>
<hr>
<a href="admin.php?n=perangkat" class="button" align="left"><img src='../asset/icon/back.png' width='15px' height='15px'>Kembali</a>

<?php
}?>
