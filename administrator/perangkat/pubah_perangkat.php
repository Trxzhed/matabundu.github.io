<?php
include'../koneksi.php';

$id_perangkat = $_POST['id_perangkat'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$pendidikan= $_POST['pendidikan'];
$alamat = $_POST['alamat'];
$id_jenis = $_POST['id_jenis'];
$periode = $_POST['periode'];

if(isset($_POST['ubah_foto'])){
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  $gambarbaru = date('dmYHis').$gambar;
  $path = "../images/".$gambarbaru;

  if(move_uploaded_file($tmp,$path)){
    $query = "SELECT * from perangkat where id_perangkat='".$id_perangkat."'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    switch ($data['id_jenis']) {
      case '1':
        # code...
        $back = 'desa';
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

    if(is_file("../images/".$data['gambar']))
      unlink("../images/".$data['gambar']);
      //proses_ubah jika di ceklis
      $query = "UPDATE perangkat SET nama='".$nama."', jabatan='".$jabatan."', pendidikan='".$pendidikan."',alamat='".$alamat."',gambar = '".$path."', id_jenis='".$id_jenis."' WHERE  id_perangkat ='".$id_perangkat."' ";
      $sql = mysqli_query($koneksi, $query);
      if($sql){
        header("location:admin.php?n=perangkat_$back&page=1");
      }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			  echo "<br><a href='admin.php?n=ubah_perangkat'>Kembali Ke Form</a>";
      }
  }else{
    echo "Maaf, Gagal di Upload.";
    echo "<br><a href='admin.php?n=ubah_perangkat'>Kembali Ke Form</a>";
  }
}else{//tidak menceklis
  $query = "UPDATE perangkat SET nama='".$nama."', jabatan='".$jabatan."', pendidikan='".$pendidikan."',alamat='".$alamat."', id_jenis='".$id_jenis."' WHERE  id_perangkat ='".$id_perangkat."' ";
  $sql = mysqli_query($koneksi, $query);
//variabel link kembali
switch ($id_jenis) {
  case '1':
    # code...
    $back = 'desa';
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
    header('location:admin.php?n=perangkat_'.$back.'&page=1');
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='admin.php?n=ubah_perangkat'>Kembali Ke Form</a>";
  }
}

?>
