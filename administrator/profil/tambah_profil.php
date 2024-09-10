<?php
include'../koneksi.php';
if(empty($_SESSION['sesi'])){
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
} else{
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Data Profil</title>
	</head>
	<body>
		Tambah Data Profil
		<hr>
    <form method="post" action="admin.php?n=simpan_profil" enctype="multipart/form-data">
		<table id="theTable">
			<tr>
				<input type="hidden" name="id" maxlength="5" />        
			</tr>
      <tr>
				<th>Jenis</th>
				<td align="left">
          <select name="jenis" id="jenis">
            <option value="profil">Profil</option>
            <option value="sejarah">Sejarah</option>
            <option value="potensi">Potensi</option>
            <option value="peta">Peta</option>
          </select>
        </td>
			</tr>
      <tr>
				<th>Tanggal</th>
				<td align="left">
          <input type="text" name="tanggal" id="datepicker" />
        </td>
			</tr>
      <tr>
				<th>Isi</th>
				<td align="left">
          <textarea type="text" name="isi" class="ckeditor">
          </textarea>
        </td>
			</tr>
      <tr>
        <th>Gambar</th>
        <td align="left">
          <input type="file" name="gambar" />
        </td>
      </tr>
      <tr>
				<td colspan="2">
          <input type="submit" name="simpan_profil" value="Simpan Data" id="button2" />
        </td>
			</tr>
      <tr>
        <td>
          <a href="admin.php?n=profil&page=1" class="button">Kembali</a>
        </td>
      </tr>
    </table>
  </form>
  </body>
</html>
<?php
}
?>
