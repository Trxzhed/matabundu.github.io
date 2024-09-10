<article class="tengah">
  <?php
  include "koneksi.php";
  $periode = $_GET['periode'];
  $data = mysqli_query($koneksi, "select * from struktur_organisasi where id_jenis = '5' and periode='$periode'  ");
  $organisasi = mysqli_fetch_array ($data);
    $prd = $organisasi['periode']+5;
    $potong = substr($organisasi['gambar_struktur'],3);
    echo "
    Struktur
    $organisasi[nama_organisasi]<br>
    Periode
    $organisasi[periode] - $prd<br>
     ";
     echo"<img src='$potong' align='left' alt='gambar'><br>";
  ?>
  Daftar Perangkat Karang Taruna<br>
  <table border="1" id='tabel2'>
    <tr>
      <th>Nama</th>
      <th>Jabatan</th>
    </tr>
  <?php
  $data = mysqli_query($koneksi, "select * from perangkat where id_jenis = '5' and periode='$periode' ");
  while($desa = mysqli_fetch_array($data)){
    $prd = $desa['periode']+5;
    echo "<tr>
    <td><a href='index.php?menu=detail_ap_l&id_perangkat=$desa[id_perangkat]'>$desa[nama]</a></td>
    <td>$desa[jabatan]</td>
    </tr>
     ";
  }
  ?>
</article>
</table>
