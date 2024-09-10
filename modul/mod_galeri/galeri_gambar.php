<html>
	<head>
		<script type="text/javascript" src="asset/fb/jquery.js"></script>
		<link rel="stylesheet" href="asset/fb/jquery.fancybox.css?v=2.1.0"
		type="text/css" media="screen" />
		<script type="text/javascript" src="asset/fb/jquery.fancybox.pack.js?v=2.1.0"></script>
		<script type="text/javascript">$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */
				$('.fancybox').fancybox();
			});
</script>
	</head>
	<body>
		<article class="tengah">
		<h2>Halaman Galeri</h2><br>
<?php
include 'koneksi.php';

$query = "SELECT * from gambar  ";
$result= mysqli_query($koneksi, $query) or die(mysqli_error());
$no = 1;
//
//proses menampilkan data
while($rows = mysqli_fetch_array($result)){
	$potong = substr($rows['gambar'],3)
?>
<a class="fancybox" href='<?php echo $potong ;?>' data-fancybox-group="gallery" >
	<img class="img-polaroid" src='<?php echo $potong ;?>'	width='150' height='150' alt='<?php echo $rows['judul'] ?>' />
</a>
<?php
}
?>
		</article>
	</body>
</html>
