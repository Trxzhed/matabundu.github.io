<?php
include"../koneksi.php";
extract($_GET);
if(isset($id_user))
{
	$query="delete from user where id_user='$id_user'";
	$del=mysqli_query($koneksi, $query);
	if($del)
	{
		echo "<script>alert('Data berhasil di hapus');
		window.location.href='admin.php?n=user';
		</script>";
	}
	else
	{
		echo "<script>alert('Data gagal di hapus');
		window.location.href='admin.php?n=user';
		</script>";
	}
}
