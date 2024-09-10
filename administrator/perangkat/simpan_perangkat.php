<?php
include '../koneksi.php';

$id_perangkat = $_POST['id_perangkat'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$pendidikan= $_POST['pendidikan'];
$alamat = $_POST['alamat'];
$id_jenis = $_POST['id_jenis'];
$gambar = $_FILES['gambar']['name'];
$periode = $_POST['periode'];
$tmp = $_FILES['gambar']['tmp_name'];
//
$gambarbaru = date('dmYHis').$gambar;
//set path folder
$path = "../images/".$gambarbaru;
//proses upload
if(move_uploaded_file($tmp,$path)){
  $query = "INSERT into perangkat values ('".$id_perangkat."','".$nama."','".$jabatan."','".$pendidikan."','".$alamat."','".$path."','".$id_jenis."','".$periode."')";
  $sql = mysqli_query($koneksi, $query);
  //variabel link kembali
  switch ($id_jenis) {
    case '1':
      # code...
      $back = 'organisasi';
      break;
    case '2':
      $back = 'BPD' ;
      break;
    case '3':
      $back = 'LPM';
      break;
    case '4' :
      $back = 'pkk';
      break;
    case '5' :
      $back = 'karang_taruna';
      break;
    case '6' :
      $back = 'bumdes';
      break;
    default:
      # code...
      break;
    }
  if($sql){
    header("location:admin.php?n=perangkat_".$back."&page=1");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database. ";
    echo "<br><a href='admin.php?n=tambah_perangkat'>Kembali Ke Form</a>";
  }
}else{
  echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='admin.php?n=tambah_perangkat'>Kembali Ke Form</a>";
}
?>
