<?php echo'Halaman profil'; ?>
<hr>
<a href="admin.php?n=profil" class="button" id="butonActive">Profil</a>
<a href="admin.php?n=sejarah" class="button">Sejarah</a>
<a href="admin.php?n=potensi" class="button">Potensi</a>
<a href="admin.php?n=peta" class="button">Peta</a>
<hr>
<a href="admin.php?n=tambah_profil" class="button">Tambah Data Profil</a>
<table id="theTable">
  <tr>
    <th>Id</th>
    <th>Jenis</th>
    <th>Tanggal</th>
    <th>Gambar</th>
    <th>Isi</th>
    <th>Opsi</th>
  </tr>

<?php
include'../koneksi.php';
$query = "SELECT * FROM data_profil where jenis = 'profil'";
$sql = mysqli_query($koneksi, $query);
while($data = mysqli_fetch_array($sql)){
  $potong = substr($data['isi'],0,100);
  echo '<tr><td>'.$data['id'].'</td>
        <td>'.$data['jenis'].'</td>
        <td>'.$data['tanggal'].'</td>
        <td>'.$data['gambar'].'</td>
        <td>'.$potong.'</td>
        <td>
          <a href="admin.php?n=ubah_profil&id='.$data['id'].'" id ="button2"><img src="../asset/icon/edit.png" width="15px" height="15px">Ubah</a>||
          <a href="admin.php?n=hapus_profil&id='.$data['id'].'" ';?> onclick="return confirm('Apakah data ini akan dihapus ?')"  <?php echo 'title="Hapus Data" id="button2"><img src="../asset/icon/garbage.png" width="15px" height="15px">Hapus</a>
        </td>
        </tr>
  ';
}
 ?>
</table>
