<?php
include"../koneksi.php";
extract($_GET);
$query=" SELECT * from perangkat where id_perangkat='$id_perangkat' ";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
if(is_file("../images/".$data['gambar'])) // Jika foto ada
	unlink("../images/".$data['gambar']);
$query2 = " delete from perangkat where id_perangkat='$id_perangkat'";
$sql2 = mysqli_query($koneksi, $query2);
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

if($sql2)
{
		echo "<script>alert('Data berhasil di hapus');
		window.location.href='admin.php?n=perangkat_$back&page=1';
		</script>";
	}
	else
	{
		echo "<script>alert('Data gagal di hapus');
		window.location.href='admin.php?n=perangkat_$back&page=1';
		</script>";
	}
