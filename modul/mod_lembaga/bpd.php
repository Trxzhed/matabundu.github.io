<?php
echo "<article><hgroup>Halaman Strukut Organisasi BPD<br>";
?>
<?php
//tampilkan tahun
echo "<br>Berdasarkan Periode<br>";
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT DISTINCTROW periode FROM perangkat where id_jenis = '2'");
if(mysqli_num_rows($sql) != 0){
while($data = mysqli_fetch_assoc($sql)){
echo "<a href='index.php?menu=periode_bpd&periode=$data[periode]' class='thperiode'>".$data['periode']."</a> ||";
  }
}
?>
<hgroup> </article>
