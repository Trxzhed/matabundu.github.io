<?php
include'../koneksi.php';

$id_gambar = $_POST['id_gambar'];
$tanggal_unggah = $_POST['tanggal_unggah'];

$judul = $_POST['judul'];

if(isset($_POST['ubah_foto'])){
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  $gambarbaru = date('dmYHis').$gambar;
  $path = "../images/".$gambarbaru;

  if(move_uploaded_file($tmp,$path)){
    $query = "SELECT * from gambar where id_gambar='".$id_gambar."' ";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    if(is_file("../images/".$data['gambar']))
      unlink("../images/".$data['gambar']);
      //proses_ubah jika di ceklis
      $query = "UPDATE gambar SET  gambar = '".$path."', judul = '".$judul."', tanggal_unggah = '".$tanggal_unggah."' WHERE id_gambar='".$id_gambar."' ";
      $sql = mysqli_query($koneksi, $query);
      if($sql){
        header("location:admin.php?n=gambar&page=1");
      }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			  echo "<br><a href='admin.php?n=ubah_gambar'>Kembali Ke Form</a>";
      }
  }else{
    echo "Maaf, Gagal di Upload.";
    echo "<br><a href='admin.php?n=ubah_gambar'>Kembali Ke Form</a>";
  }
}else{//tidak menceklis
  $query = "UPDATE gambar SET judul = '".$judul."', tanggal_unggah = '".$tanggal_unggah."' WHERE id_gambar='".$id_gambar."' ";
  $sql = mysqli_query($koneksi, $query);
  if($sql){
    header("location:admin.php?n=gambar&page=1");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='admin.php?n=ubah_gambar'>Kembali Ke Form</a>";
  }
}

?>
