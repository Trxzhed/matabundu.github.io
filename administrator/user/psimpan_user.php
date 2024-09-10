<?php
include"../koneksi.php";
extract($_POST);
if(isset($tambahUser)){
  $acak = md5($password);
	$query="insert into user values ('$id_user','$username','$acak','$hak_akses')";
	$save=mysqli_query($koneksi, $query);
	if($save)
	{
		echo "<script>alert('Data berhasil disimpan');
		window.location.href='admin.php?n=user';
		</script>";
	}
	else
	{
	echo "<script>alert('Data gagal disimpan');
		window.location.href='admin.php?n=tambah_user';
		</script>";
	}
}
?>
