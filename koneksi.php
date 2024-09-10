<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "webdesa";
	$koneksi = mysqli_connect($server,$user,$pass,$db_name) or die ("ada yang salah : $php_errormsg");

	if (mysqli_connect_errno()) {
		echo "Koneksi database gagal".mysqli_connect_error();
	}

?>