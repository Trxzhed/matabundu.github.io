
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
      <title>Halaman Tambah Gambar</title>
    </head>
    <body>
      Halaman Tambah Gambar
      <br>
      <br>
<form method="post" action="admin.php?n=simpan_gambar" enctype="multipart/form-data">
      <table border="1" id="theTable">
        <tr>
          <th>Id Gambar</th>
          <td align="left">
            <input type="text" name="id_gambar" maxlength="5" />
          </td>
        </tr>
        <tr>
          <th>Gambar</th>
          <td align="left">
            <input type="file" name="gambar" />
          </td>
        </tr>
        <tr>
          <th>Judul</th>
          <td align="left">
            <input type="text" name="judul" size="50" />
          </td>
        </tr>
        <tr>
          <th>Tanggal Unggah</th>
          <td align="left">
            <input type="text" name="tanggal_unggah" id="datepicker" />
          </td>
        </tr>
          <td colspan="2">
            <input type="submit" name="simpan_gambar" value="Simpan Gambar" id="button2" />
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
