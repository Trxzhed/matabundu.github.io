<?php
include'../koneksi.php';
extract($_POST);
function antiinjection($data){
  global $koneksi;
  $filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}
$username = antiinjection($_POST['username']);
$password = antiinjection(md5($_POST['password']));
if(isset($login))
{
	$query = mysqli_query($koneksi, "select * from user where username = '$username' and password = '$password'");
	$p=mysqli_num_rows($query);
	if($p==1)
	{
	session_start();
	$q=mysqli_fetch_array($query);
	$_SESSION['sesi'] = $q['username'];

	echo"<script> alert('Login berhasil !'); </script>";
	echo"<meta http-equiv='refresh' content='0; url=admin.php'>";
	}
	else
	{
	echo"<script> alert('Login Gagal!'); </script>";
	echo"<meta http-equiv='refresh' content='0; url=login.php'>";
	}
}
