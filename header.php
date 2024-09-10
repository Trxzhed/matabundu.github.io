<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="asset/style.css" type="text/css" />
<!--[if gte IE 5.5]>
<script language="JavaScript" src="asset/ie.js" type="text/JavaScript"></script>
<![endif]-->
<div class="head">
</div>
				<nav>
					<ul id="navmenu">
						<li><a href="index.php" class="current">Beranda</a></li>
						<li><a href="" >Profil +</a>
							<ul>
								<li><a href="index.php?menu=profil_desa">Profil Desa</a></li>
								<li><a href="index.php?menu=sejarah">Sejarah</a></li>
								<li><a href="index.php?menu=potensi">Potensi</a></li>
								<li><a href="index.php?menu=peta">Peta</a></li>
							</ul>
						</li>
						<li><a href="index.php?menu=struktur_organisasi" >Pemerintahan Desa</a>
						</li>
						<li><a href="">Berita & Pengumuman +</a>
							<ul>
								<li><a href="index.php?menu=berita">Berita</a></li>
								<li><a href="index.php?menu=pengumuman">Pengumuman</a></li>
							</ul>
						</li>
						<li><a href="">Lembaga +</a>
							<ul>
								<li><a href="index.php?menu=bpd">BPD</a></li>
								<li><a href="index.php?menu=lpm">LPM</a></li>
								<li><a href="index.php?menu=pkk">PKK</a></li>
								<li><a href="index.php?menu=karang_taruna">Karang Taruna</a></li>
								<li><a href="index.php?menu=bumdes">BUMDES</a></li>
							</ul>
						</li>
						<li><a href="index.php?menu=galeri_gambar">Galeri</a></li>
						<li><a rel="nofollow" href="index.php?menu=hubungi_kami">Hubungi Kami</a></li>
						<!--menu admin-->
							<?php
							session_start();
							if(empty($_SESSION['sesi'])){
								echo"<li><a href='administrator/login.php' target='_blank'>Login</a></li>";
							} else{
								echo"<li><a href='administrator/admin.php'>Menu Administartor</a></li>";
							}
							?>
						<!--menu admin-->
					</ul>
				</nav>
