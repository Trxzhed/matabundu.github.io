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
      <title>Halaman Input Gambar</title>
    </head>
    <body>
      Halaman  Gambar
      <br>
      <br>
      <form action="" method="post" enctype="multipart/form-data">
      <table border="1" id="theTable">
        <a href="admin.php?n=tambah_gambar" class="button">Tambah Gambar</a>
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Judul</th>
          <th>Tanggal Unggah</th>
          <th>Opsi</th>
        </tr>
        <?php
        include"../koneksi.php";
				$page=$_GET['page'];
				if($page==""||$page==10){
						$page2=0;
				}else{
						$page2=($page*10)-10;
				}
        $sql = mysqli_query($koneksi, "SELECT * FROM gambar limit $page2,10");
        while ($data = mysqli_fetch_array($sql)) {
          # code...
          echo "
					<tr>
					<td>$data[id_gambar]</td>
          <td>$data[gambar]</td>
          <td>$data[judul]</td>
          <td>$data[tanggal_unggah]</td>
          <td>
            <a href='admin.php?n=ubah_gambar&id_gambar=$data[id_gambar]' id='button2'><img src='../asset/icon/edit.png' width='15px' height='15px'>Ubah </a>||
						<a href='admin.php?n=hapus_gambar&id_gambar=$data[id_gambar]' ";?> onClick=" return confirm('Apakah data ini akan dihapus ?')" <?php echo "  id='button2'><img src='../asset/icon/garbage.png' width='15px' height='15px'>Hapus </a>
          </td>
          ";

        }
        ?>
        <tr>
        </tr>
      </table>
			<hr>Halaman <br>
			<?php
			$query= mysqli_query($koneksi, "select * from gambar ");
			$row = mysqli_num_rows($query);
			$a=$row/10;
			$a=ceil($a);
			for($b=1; $b<=$a; $b++){
				?>
					<a href="admin.php?n=gambar&page=<?php echo $b; ?>" id="button2" "><?php echo $b; ?></a>
				<?php
			}
			?>
    </form>
    </body>
  </html>
  <?php
}
?>
