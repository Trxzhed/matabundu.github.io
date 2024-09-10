<?php
include"../koneksi.php";
extract($_GET);
$query="SELECT * from isi_berita where id_berita='$id_berita'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
if(is_file("../images/".$data['gambar'])) // Jika foto ada
	unlink("../images/".$data['gambar']);
$query2 = "delete from isi_berita where id_berita='$id_berita'";
$sql2 = mysqli_query($koneksi, $query2);

if($sql2)
{
		echo "<script>alert('Data berhasil di hapus');
		window.location.href='admin.php?n=pengumuman&page=1';
		</script>";
	}
	else
	{
		echo "<script>alert('Data gagal di hapus');
		window.location.href='admin.php?n=pengumuman&page=1';
		</script>";
	}
