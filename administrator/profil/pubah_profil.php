<?php
include '../koneksi.php';

$id= $_POST['id'];
$jenis = $_POST['jenis'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];


if(isset($_POST['ubah_foto'])){
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  $gambarbaru = date('dmYHis').$gambar;
  $path = "../images/".$gambarbaru;

  if(move_uploaded_file($tmp,$path)){
    $query = "SELECT * from data_profil where id='".$id."'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    if(is_file("../images/".$data['gambar']))
      unlink("../images/".$data['gambar']);
      //proses_ubah jika di ceklis
      $query = "UPDATE data_profil SET jenis = '".$jenis."', tanggal ='".$tanggal."', isi = '".$isi."', gambar = '".$path."' WHERE  id='".$id."' ";
      $sql = mysqli_query($koneksi, $query);
      if($sql){
        header("location:admin.php?n=$jenis&page=1");
      }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			  echo "<br><a href='admin.php?n=ubah_profil'>Kembali Ke Form</a>";
      }
  }else{
    echo "Maaf, Gagal di Upload.";
    echo "<br><a href='admin.php?n=ubah_profil'>Kembali Ke Form</a>";
  }
}else{//tidak menceklis
  $query = "UPDATE data_profil SET jenis = '".$jenis."', tanggal ='".$tanggal."', isi = '".$isi."' WHERE id='".$id."' ";
  $sql = mysqli_query($koneksi, $query);
  if($sql){
    header("location:admin.php?n=$jenis");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='admin.php?n=ubah_profil'>Kembali Ke Form</a>";
  }
}

?>
