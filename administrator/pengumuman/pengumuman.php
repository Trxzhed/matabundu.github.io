<?php
include'../koneksi.php';
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	//tampilan pengumuman
	?>
<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Pengumuman</title>
  </head>
  <body>
    Ini Halaman Pengumuman<hr>
    <a href="admin.php?n=tambah_pengumuman" class="button">Tambah Data Pengumuman</a>
    <table border="1"  id="theTable">
      <tr>
        <th>Id Berita</th>
        <th>Id Kategori</th>
        <th>Nama Kategori</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Waktu</th>
        <th>Gambar</th>
        <th>Opsi</th>
      </tr>
      <?php
      include "../koneksi.php";
			$page=$_GET['page'];
			if($page==""||$page==10){
					$page2=0;
			}else{
					$page2=($page*10)-10;
			}
      $data = mysqli_query($koneksi, "SELECT * from isi_berita where id_kategori = '2' limit $page2,10");
      while ($berita = mysqli_fetch_array ($data)) {
        echo "<tr>
        <td>$berita[id_berita]</td>
        <td>$berita[id_kategori]</td>
        <td>$berita[nama_kategori]</td>
        <td>$berita[judul]</td>
        <td>$berita[tanggal]</td>
        <td>$berita[waktu]</td>
        <td>$berita[gambar]</td>
        <td><a href='admin.php?n=ubah_pengumuman&id_berita=$berita[id_berita]' id='button2'><img src='../asset/icon/edit.png' width='15px' height='15px'>Edit</a>
        || <a href='admin.php?n=hapus_pengumuman&id_berita=$berita[id_berita]' ";?> onClick="return confirm('Apakah data ini akan dihapus ?')" <?php echo "title='Hapus Data' id='button2'><img src='../asset/icon/garbage.png' width='15px' height='15px'>Hapus</a>
        </td>
        </tr>
         ";
      }
      ?>
    </table>
		<hr>Halaman <br>
		<?php
		$query= mysqli_query($koneksi, "select * from isi_berita where id_kategori='2' ");
		$row = mysqli_num_rows($query);
		$a=$row/10;
		$a=ceil($a);
		for($b=1; $b<=$a; $b++){
			?>
				<a href="admin.php?n=pengumuman&page=<?php echo $b; ?>" id="button2" "><?php echo $b; ?></a>
			<?php
		}
		?>
  </body>
</html>
<?php
}
?>
