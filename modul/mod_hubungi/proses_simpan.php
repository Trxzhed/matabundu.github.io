<?php
include"koneksi.php";
extract($_POST);
$tanggal = date('Y-m-d H:i:s');
if(isset($kirim)){
	$query="insert into komentar values ('$id_komentar','$nama','$email','$subjek','$pesan','$tanggal')";
	$save=mysqli_query($koneksi, $query);
	if($save)
	{
		echo "<script>alert('Pesan berhasil dikirim');
		window.location.href='index.php?menu=hubungi_kami';
		</script>";
	}
	else
	{
	echo "<script>alert('Pesan gagal dikirim');
		window.location.href='index.php?menu=hubungi_kami';
		</script>";
	}
}
?>
