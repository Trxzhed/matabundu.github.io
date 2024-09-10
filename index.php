<!DOCTYPE html>
<?php include'koneksi.php'?>
<html lang="id">
	<head>
		<title>Beranda | Desa Matabundu</title>
		<script type="text/javascript" src="asset/JQuery/jQuery-3.2.1.min.js"></script>
		<script type="text/javascript" src="asset/JQuery/jquery.cycle2.min.js"></script>
		<link rel="stylesheet" href="asset/style.css" type="text/css" />
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<!--[endif]-->
		<!--script animasi-->
	</head>
	<body>
		<div class="wrapper">
			<!--menu-->
			<header id="header">
			<img src="images/bannerr.png" style="width:100%;">
			<?php include'header.php';?>
		</header>
		<!--isi-->
			<section class="courses">
				<?php include 'menu.php'; ?>
			</section>
			<!--menus samping-->
			<aside>
				<section class="berita-terbaru">
					<h2>Berita Terbaru</h2>
					<?php
						// menentukan jumlah yang ditampilkan
						$jmltampil = 3;
						$head = mysqli_query($koneksi, "select * from isi_berita where id_kategori = '1' order by tanggal desc limit $jmltampil");
						while($headline = mysqli_fetch_array($head)){
							echo"<a href='index.php?menu=detail_berita&id_berita=$headline[id_berita]'> $headline[judul]
							<font size='2px' color='#000'><br>
							$headline[tanggal]
							</font></a>";
						}
						?>
				</section>
				<section class="pengumuman-terbaru">
					<h2>Pengumuman Terbaru</h2>
					<?php
						// menentukan jumlah yang ditampilkan
						$jmltampil = 3;
						$head = mysqli_query($koneksi, "select * from isi_berita where id_kategori = '2' order by tanggal desc limit $jmltampil");
						while($headline = mysqli_fetch_array($head)){
							echo"<a href='index.php?menu=detail_berita&id_berita=$headline[id_berita]'> $headline[judul]
							<font size='2px' color='#000'><br>
							$headline[tanggal]
							</font></a>";
						}
						?>
				</section>
				<section class="cari">
					<h2>Pencarian</h2>
					<form method="post" action="index.php?menu=headline" name="cr">
						<input type="text" name="pcari" size="20"><input type="submit" name="cari" value="cari">
					</form>
				</section>
				<section class="contact-details">
					<h2>Kontak</h2>
					<p>Pemerintahan Desa Matabundu<br />
					E-mail  : <br>matabundupolbar07@gmail.com<br>
					Facebook: <br>Desa Matabundu - Kabupaten Bombana
				</section>
			</aside>
			<footer>
			<?php include'footer.php'?>
			</footer>
		</div><!--wrapper-->
	</body>
</html>
