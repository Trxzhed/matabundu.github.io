<?php
session_start();
session_destroy();
echo"<script>alert('Keluar dari Halaman Administrator');</script>";
echo"<meta http-equiv='refresh' content='0; url=../index.php'>";
?>
