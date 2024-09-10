<?php
extract($_GET);
if(isset($menu))
{
	if($menu=="halaman_utama")include"index.php";
  //profil
	else if($menu=="profil_desa")include"modul/mod_profil/profil_desa.php";
  else if($menu=="peta")include"modul/mod_profil/peta.php";
  else if($menu=="potensi")include"modul/mod_profil/potensi.php";
  else if($menu=="sejarah")include"modul/mod_profil/sejarah.php";
	else if($menu=="detail_profil")include"modul/mod_profil/detail_profil.php";
  //hubungi Kami
  else if($menu=="hubungi_kami")include"modul/mod_hubungi/hubungi.php";
	else if($menu=="x34567x")include"modul/mod_hubungi/proses_simpan.php";
  //detail Berita
  else if($menu=="detail_berita")include"detail_berita.php";
  else if($menu=="berita")include"modul/mod_berita/berita.php";
	//pengumuman
	else if($menu=="pengumuman")include"modul/mod_pengumuman/pengumuman.php";
  //struktur
  else if($menu=="struktur_organisasi")include"modul/mod_pemerintahan/struktur_organisasi.php";
  else if($menu=="detail_aparat")include"modul/mod_pemerintahan/detail_aparat.php";
  else if($menu=="periode_organisasi")include"modul/mod_pemerintahan/periode_organisasi.php";
	//galeri_gambar
	else if($menu=="galeri_gambar")include"modul/mod_galeri/galeri_gambar.php";
	//Lembaga
	else if($menu=="bpd")include"modul/mod_lembaga/bpd.php";
	else if($menu=="karang_taruna")include"modul/mod_lembaga/karang_taruna.php";
	else if($menu=="lpm")include"modul/mod_lembaga/lpm.php";
	else if($menu=="pkk")include"modul/mod_lembaga/pkk.php";
	else if($menu=="bumdes")include"modul/mod_lembaga/bumdes.php";
	//
	else if($menu=="periode_bpd")include"modul/mod_lembaga/periode_bpd.php";
	else if($menu=="periode_lpm")include"modul/mod_lembaga/periode_lpm.php";
	else if($menu=="periode_karangtaruna")include"modul/mod_lembaga/periode_karangtaruna.php";
	else if($menu=="periode_pkk")include"modul/mod_lembaga/periode_pkk.php";
	else if($menu=="periode_bumdes")include"modul/mod_lembaga/periode_bumdes.php";
	//
	else if($menu=="detail_ap_l")include"modul/mod_lembaga/detail_ap_l.php";
	else if($menu=="headline")include"headline.php";
}
else
{
  include"headline.php";
}
