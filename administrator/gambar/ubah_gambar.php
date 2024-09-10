<?php
include'../koneksi.php';
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	//tampilan gambar
	?>
  <!DOCTYPE html>
  <html>
    <head>
      <title>Halaman Ubah Gambar</title>
    </head>
    <body>
      Halaman Ubah Gambar
      <br>
      <br>
      <?php
      include '../koneksi.php';
      extract($_GET);
      $query = "SELECT * FROM gambar WHERE id_gambar = '$id_gambar'";
      $sql = mysqli_query($koneksi, $query);
      $data = mysqli_fetch_array($sql);
      ?>
      <form method="post" action="admin.php?n=pubah_gambar" enctype="multipart/form-data">
      <table border="1" id="theTable">
        <tr>
          <th>Id Gambar</th>
          <td align="left">
            <input type="text" name="id_gambar" maxlength="5"  value="<?php echo $data['id_gambar']?>" readonly/>
          </td>
        </tr>
        <tr>
          <th>Gambar</th>
          <td align="left">
            <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
            <input type="file" name="gambar" />
          </td>
        </tr>
        <tr>
          <th>Judul</th>
          <td align="left">
            <input type="text" name="judul" size="50" value="<?php echo $data['judul']?>"/>
          </td>
        </tr>
        <tr>
          <th>Tanggal Unggah</th>
          <td align="left">
            <input type="text" name="tanggal_unggah" id="datepicker" value="<?php echo $data['tanggal_unggah']?>"/>
          </td>
        </tr>
          <td colspan="2">
            <input type="submit" name="simpan_gambar" value="Ubah" id="button2" />
          </td>
        </tr>
        <tr>
          <td colspan="2" align="left">
            <a href="admin.php?n=gambar" id="button2">
              <img src='../asset/icon/back.png' width='15px' height='15px'>Kembali</a>
            </td>
        </tr>
        </form>
      </table>

    </body>
  </html>
  <?php
}
?>
