<?php
include'../koneksi.php';
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	?>
  <!DOCTYPE html>
  <html>
  	<head>
  		<title>Ubah Data Profil</title>
  	</head>
  	<body>
  		Tambah Data Profil
  		<hr>
      <?php
        include"../koneksi.php";
        extract($_GET);
        $query="select * from data_profil where id='$id'";
        $tampil=mysqli_query($koneksi, $query);
        $data=mysqli_fetch_array($tampil);
      ?>
      <form method="post" action="admin.php?n=pubah_profil" enctype="multipart/form-data">
  		<table id="theTable">
  			<tr>
  				<th>Id</th>
  				<td align="left">
            <input type="text" name="id" maxlength="5" value="<?php echo $data['id']; ?>" readonly>
          </td>
  			</tr>
        <tr>
  				<th>Jenis</th>
  				<td align="left">
            <input type="text" name="jenis" value="<?php echo $data['jenis']; ?>" readonly>
          </td>
  			</tr>
        <tr>
  				<th>Tanggal</th>
  				<td align="left">
            <input type="text" name="tanggal" id="datepicker" value="<?php echo $data['tanggal']; ?>" >
          </td>
  			</tr>
        <tr>
  				<th>Isi</th>
  				<td align="left">
            <textarea type="text" name="isi" class="ckeditor">
              <?php echo $data['isi']; ?>
            </textarea>
          </td>
  			</tr>
        <tr>
          <th>Gambar</th>
          <td align="left">
            <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
            <input type="file" name="gambar">
          </td>
        </tr>
        <tr>
  				<td colspan="2">
            <input type="submit" name="simpan_profil" value="Ubah Data" id="button2" />
          </td>
  			</tr>
        <tr>
          <td>
            <a href="admin.php?n=<?php echo $data['jenis'] ?>&page=1" class="button"><img src='../asset/icon/back.png' width='15px' height='15px'>Kembali</a>
          </td>
        </tr>
      </table>
    </form>
    </body>
  </html>
  <?php
}
?>
