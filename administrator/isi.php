<?php
extract($_GET);
if(isset($n))
{
	if($n=="halaman_utama")include"../index.php";
	else if($n=="berita")include"berita/berita.php";
	else if($n=="pengumuman")include"pengumuman/pengumuman.php";
	else if($n=="struktur")include"struktur/struktur.php";
	else if($n=="perangkat")include"perangkat/perangkat.php";
	else if($n=="gambar")include"gambar/gambar.php";
	else if($n=="profil")include"profil/profil.php";
	else if($n=="pesan")include"pesan/pesan.php";
	//Administartor
	//data user
	else if($n=="user")include"user/user.php";
	else if($n=="tambah_user")include"user/tambah_user.php";
	else if($n=="ubah_user")include"user/ubah_user.php";
	else if($n=="hapus_user")include"user/hapus_user.php";
	else if($n=="psimpan_user")include"user/psimpan_user.php";
	else if($n=="update_user")include"user/update_user.php";
	//data perangkat_desa
	else if($n=="tambah_perangkat")include"perangkat/tambah_perangkat.php";
	else if($n=="ubah_perangkat")include"perangkat/ubah_perangkat.php";
	else if($n=="pubah_perangkat")include"perangkat/pubah_perangkat.php";
	else if($n=="simpan_perangkat")include"perangkat/simpan_perangkat.php";
	else if($n=="hapus_perangkat")include"perangkat/hapus_perangkat.php";
	else if($n=="perangkat_desa")include"perangkat/perangkat_desa.php";
	else if($n=="perangkat_BPD")include"perangkat/perangkat_BPD.php";
	else if($n=="perangkat_pkk")include"perangkat/perangkat_pkk.php";
	else if($n=="perangkat_LPM")include"perangkat/perangkat_LPM.php";
	else if($n=="perangkat_karang_taruna")include"perangkat/perangkat_karang_taruna.php";
	else if($n=="perangkat_bumdes")include"perangkat/perangkat_bumdes.php";

	//data Berita
	else if($n=="tambah_berita")include"berita/tambah_berita.php";
	else if($n=="ubah_berita")include"berita/ubah_berita.php";
	else if($n=="proses_simpan")include"berita/proses_simpan.php";
	else if($n=="proses_ubah")include"berita/proses_ubah.php";
	else if($n=="hapus_berita")include"berita/hapus_berita.php";
	//data Pengumuman
	else if($n=="tambah_pengumuman")include"pengumuman/tambah_pengumuman.php";
	else if($n=="ubah_pengumuman")include"pengumuman/ubah_pengumuman.php";
	else if($n=="simpan_pengumuman")include"pengumuman/simpan_pengumuman.php";
	else if($n=="hapus_pengumuman")include"pengumuman/hapus_pengumuman.php";
	else if($n=="pubah_pengumuman")include"pengumuman/pubah_pengumuman.php";
	//data Profil
	else if($n=="potensi")include"profil/potensi.php";
	else if($n=="peta")include"profil/peta.php";
	else if($n=="sejarah")include"profil/sejarah.php";
	else if($n=="tambah_profil")include"profil/tambah_profil.php";
	else if($n=="simpan_profil")include"profil/simpan_profil.php";
	else if($n=="ubah_profil")include"profil/ubah_data.php";
	else if($n=="pubah_profil")include"profil/pubah_profil.php";
	else if($n=="hapus_profil")include"profil/hapus_profil.php";
	//data Pesan
	else if($n=="hapus_pesan")include"pesan/hapus_pesan.php";
	//data struktur
	else if($n=="tambah_struktur")include"struktur/tambah_struktur.php";
	else if($n=="ubah_struktur")include"struktur/ubah_struktur.php";
	else if($n=="pubah_struktur")include"struktur/pubah_struktur.php";
	else if($n=="simpan_struktur")include"struktur/simpan_struktur.php";
	else if($n=="hapus_struktur")include"struktur/hapus_struktur.php";
	//Gambar
	else if($n=="tambah_gambar")include"gambar/tambah_gambar.php";
	else if($n=="simpan_gambar")include"gambar/simpan_gambar.php";
	else if($n=="ubah_gambar")include"gambar/ubah_gambar.php";
	else if($n=="pubah_gambar")include"gambar/pubah_gambar.php";
	else if($n=="hapus_gambar")include"gambar/hapus_gambar.php";
}
else
{
	include"welcome.php";
}
