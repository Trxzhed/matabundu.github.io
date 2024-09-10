<?php

include 'koneksi.php';
$id_perangkat = $_GET['id_perangkat'];
$query = "select * from perangkat where id_perangkat = '$id_perangkat'";
$sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_array($sql);
$potong = substr($tampil['gambar'],3);
//
echo "<article class='tengah'>
Halaman Detail<br>
<table align='center' border='1' id='tabel2'>
        <tr>
          <th colspan='2'>
            <img src='$potong'>
          </th>
        </tr>
        <tr>
          <th>Nama</th>
          <td>$tampil[nama]</td>
        </tr>
        <tr>
          <th>Jabatan</th>
          <td>$tampil[jabatan]</td>
        </tr>
        <tr>
          <th>Pendidikan</th>
          <td>$tampil[pendidikan]</td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>$tampil[alamat]</td>
        </tr>
        <tr>
          <th>Periode</th>
          <td>$tampil[periode]</td>
        </tr>
        ";

        switch ($tampil['id_jenis']) {
          case '1':
            # code...
            $back = 'organisasi';
            break;
          case '2':
            $back = 'bpd' ;
            break;
          case '3':
            $back = 'lpm';
            break;
          case '4' :
            $back = 'pkk';
            break;
          case '5' :
            $back = 'karangtaruna';
            break;
          case '6' :
            $back = 'bumdes';
            break;
          default:
            # code...
            break;
          }
echo "
<tr>
<th colspan='2'><a href='index.php?menu=periode_$back&periode=$tampil[periode]'>Kembali</a></th>";
?>
</tr>
</table></article>
