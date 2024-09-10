<?php
include '../koneksi.php';

$id_struktur = $_POST['id_struktur'];
$id_jenis = $_POST['id_jenis'];
$nama_organisasi = $_POST['nama_organisasi'];
$periode = $_POST['periode'];

if(isset($_POST['ubah_foto'])){
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  $gambarbaru = date('dmYHis').$gambar;
  $path = "../images/struktur/".$gambarbaru;

  if(move_uploaded_file($tmp,$path)){
    $query = "SELECT * from struktur_organisasi where id_struktur='$id_struktur'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    if(is_file("../images/struktur/".$data['gambar']))
      unlink("../images/struktur/".$data['gambar']);
      //proses_ubah jika di ceklis
      $query = "UPDATE struktur_organisasi SET id_jenis='$id_jenis', nama_organisasi = '$nama_organisasi', gambar_struktur = '$path', periode='$periode' WHERE id_struktur='$id_struktur'";
      $sql = mysqli_query($koneksi, $query);
      if($sql){
        header("location:admin.php?n=struktur&page=1");
      }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'".mysqli_error()."'";
			  echo "<br><a href='admin.php?n=ubah_struktur'>Kembali Ke Form</a>";
      }
  }else{
    echo "Maaf, Gagal di Upload.";
    echo "<br><a href='admin.php?n=ubah_struktur'>Kembali Ke Form</a>";
  }
}else{//tidak menceklis
  $query = "UPDATE struktur_organisasi SET id_jenis='$id_jenis', nama_organisasi = '$nama_organisasi', periode='$periode' WHERE id_struktur='$id_struktur' ";
  $sql = mysqli_query($koneksi, $query);
  if($sql){
    header("location:admin.php?n=struktur&page=1");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'".mysqli_error()."'";
    echo "<br><a href='admin.php?n=ubah_struktur'>Kembali Ke Form</a>";
  }
}

?>
