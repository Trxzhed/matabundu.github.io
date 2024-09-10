<?php
include"../koneksi.php";
extract($_POST);
if(isset($ubah))
{
	$acak = md5($password);
	$query="update user set username='$username', password = '$acak', hak_akses = '$hak_akses' where id_user='$id_user'";
	$ganti=mysqli_query($koneksi, $query);
	if($ganti)
	{
		echo "<script>alert('Data berhasil diperbarui');
		window.location.href='admin.php?n=user';
		</script>";
	}
	else
	{
		echo "<script>alert('Data gagal diperbarui');
		window.location.href='admin.php?n=user';
		</script>";
	}
}
?>
