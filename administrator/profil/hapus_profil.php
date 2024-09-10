<?php
include"../koneksi.php";
extract($_GET);
$query="SELECT * from data_profil where id='$id'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
if(is_file("../images/".$data['gambar'])) // Jika foto ada
	unlink("../images/".$data['gambar']);
$query2 = "delete from data_profil where id='$id'";
$sql2 = mysqli_query($koneksi, $query2);
if($sql2)
{
		echo "<script>alert('Data berhasil di hapus');
		window.location.href='admin.php?n=profil';
		</script>";
	}
	else
	{
		echo "<script>alert('Data gagal di hapus');
		window.location.href='admin.php?n=profil';
		</script>";
	}
