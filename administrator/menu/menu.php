<link rell="style/css" href="style.css">
<div class="vertical-menu">
						<a href="admin.php" class="active">Home</a>
						<a href="../index.php"><img src='../asset/icon/house.png' width='15px' height='15px'>  Halaman Utama</a>
						<a href="admin.php?n=berita&page=1"><img src='../asset/icon/folded-newspaper.png' width='15px' height='15px'>   Berita</a>
						<a href="admin.php?n=pengumuman&page=1"><img src='../asset/icon/pengumuman.png' width='15px' height='15px'>   Pengumuman</a>
						<a href="admin.php?n=struktur&page=1"><img src='../asset/icon/sitemaps-2.png' width='15px' height='15px'>   Struktur</a>
						<a href="admin.php?n=perangkat"><img src='../asset/icon/struktur.png' width='15px' height='15px'>   Perangkat</a>
						<a href="admin.php?n=gambar&page=1"><img src='../asset/icon/photo-camera.png' width='15px' height='15px'>   Gambar</a>
						<a href="admin.php?n=profil&page=1"><img src='../asset/icon/struktur2.png' width='15px' height='15px'>   Profil Desa</a>
						<a href="admin.php?n=pesan&page=1"><img src='../asset/icon/envelope.png' width='15px' height='15px'>  Pesan</a>
						<a href="admin.php?n=user&page=1"><img src='../asset/icon/avatar-1.png' width='15px' height='15px'><img src='../asset/icon/avatar.png' width='15px' height='15px'>  User</a>
				</div>
				<div class="vertical-menu">
					<a class="active">Nama Administrator</a>
					<a>
					<?php
					echo $_SESSION['sesi'];
					?>
					</a>
					<a href="logout.php" ><img src='../asset/icon/logout.png' width='15px' height='15px'>
						Logout
					</a>
				</div>
