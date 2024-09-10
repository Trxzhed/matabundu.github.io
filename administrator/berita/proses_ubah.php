<?php
include'../koneksi.php';

$id_berita = $_GET['id_berita'];
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$isi = $_POST['isi'];


if(isset($_POST['ubah_foto'])){
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  $gambarbaru = date('dmYHis').$gambar;
  $path = "../images/".$gambarbaru;

  if(move_uploaded_file($tmp,$path)){
    $query = "SELECT * from isi_berita where id_berita='".$id_berita."' ";
    $sql = mysqli_query($koneksi, $query) or die("Ups : ".mysqli_error());
    $data = mysqli_fetch_array($sql);
    if(is_file("../images/".$data['gambar']))
      unlink("../images/".$data['gambar']);
      //proses_ubah jika di ceklis
      $query = "UPDATE isi_berita SET nama_kategori='".$nama_kategori."', judul='".$judul."', tanggal='".$tanggal."', waktu='".$waktu."', gambar = '".$path."', isi='".$isi."' WHERE id_berita='".$id_berita."' and id_kategori='".$id_kategori."'";
      $sql = mysqli_query($koneksi, $query) or die("Ups : ".mysqli_error());
      if($sql){
        header("location:admin.php?n=berita&page=1");
      }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'".mysqli_error()."'";
			  echo "<br><a href='admin.php?n=ubah_berita'>Kembali Ke Form</a>";
      }
  }else{
    echo "Maaf, Gagal di Upload.";
    echo "<br><a href='admin.php?n=ubah_berita'>Kembali Ke Form</a>";
  }
}else{//tidak menceklis
  $query = "UPDATE isi_berita SET id_kategori='".$id_kategori."', nama_kategori='".$nama_kategori."', judul='".$judul."', tanggal='".$tanggal."',waktu='".$waktu."',isi='".$isi."' WHERE id_berita='".$id_berita."' and id_kategori='".$id_kategori."'";
  $sql = mysqli_query($koneksi, $query);
  if($sql){
    header("location:admin.php?n=berita&page=1");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.'".mysqli_error()."'";
    echo "<br><a href='admin.php?n=ubah_berita'>Kembali Ke Form</a>";
  }
}

?>
