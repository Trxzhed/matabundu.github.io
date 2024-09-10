-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 05:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_profil`
--

CREATE TABLE `data_profil` (
  `id` int(5) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_profil`
--

INSERT INTO `data_profil` (`id`, `jenis`, `tanggal`, `isi`, `gambar`) VALUES
(1, 'profil', '2017-12-03', '<p>Desa Kertawangunan merupakan salah satu desa di Kecamatan Sindangagung Kabupaten Kuningan</p>\r\n', '../images/10122017140520DSC_0053.JPG'),
(2, 'profil', '2017-12-04', '<p>Sarana dan prasarana yang terdapat di Desa Kertawagunan Kecamatn sindangagung adalah sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Masjid Agung</li>\r\n	<li>Sekolah Dasar</li>\r\n	<li>Puskesmas dan posyandu</li>\r\n	<li>SMP Sederajat, SMA Sederajat</li>\r\n	<li>Yayasan Pendidikan / Pesantren</li>\r\n	<li>TK dan PAUD</li>\r\n</ol>\r\n', '../images/10122017142339DSC_0161.JPG'),
(3, 'sejarah', '2017-12-03', '<p>Pendiri desa adalah Mbahku Bujang dan Mbah Jenggot</p>\r\n', '../images/10122017141212DSC_0142.JPG'),
(4, 'potensi', '2017-12-03', '<p>Usaha Kecil dan Menengah yang terdapat di desa Kertawangunan adalah adalah produksi rengginang dengan berbagai rasa diantaranya rasa original, ketan hitam, rasa terasi dan rengginang manis ada juga produksi sapu ijuk</p>\r\n\r\n<p>&nbsp;</p>\r\n', '../images/10122017141250DSC_0199.JPG'),
(6, 'peta', '2017-12-11', '<p>Desa Kertawangunan terletak di Kecamatan Sindangagung Kabupaten Kuningan dengan luas wilayah&nbsp;120,168 Km2 berbatasan dengan desa desa berikut :</p>\r\n\r\n<table border=\"1\" style=\"height:263px; width:525px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>B</strong><strong>a</strong><strong>t</strong><strong>as</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>D</strong><strong>e</strong><strong>s</strong><strong>a/</strong><strong>K</strong><strong>e</strong><strong>l</strong><strong>ur</strong><strong>a</strong><strong>h</strong><strong>an</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>K</strong><strong>e</strong><strong>cama</strong><strong>t</strong><strong>a</strong><strong>n</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Sebelah utara</p>\r\n			</td>\r\n			<td>\r\n			<p>TIRTAWANGUNAN</p>\r\n			</td>\r\n			<td>\r\n			<p>SINDANGAGUNG</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Sebelah selatan</p>\r\n			</td>\r\n			<td>\r\n			<p>KADUAGUNG</p>\r\n			</td>\r\n			<td>\r\n			<p>SINDANGAGUNG</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Sebelah timur</p>\r\n			</td>\r\n			<td>\r\n			<p>KERTAYASA</p>\r\n			</td>\r\n			<td>\r\n			<p>SINDANGAGUNG</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Sebelah barat</p>\r\n			</td>\r\n			<td>\r\n			<p>ANCARAN</p>\r\n			</td>\r\n			<td>\r\n			<p>KUNINGAN</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '../images/10122017131121peta.png'),
(7, 'profil', '2017-12-11', '<blockquote>\r\n<p>Ruang terbuka hijau baru &quot;<em>Open Space&quot;</em></p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Merupakan ruang terbuka bagi kegiatan masyarakat yang baru diresmikan oleh Bupati Kuningan pada 4 September 2017.</p>\r\n\r\n<p>Terdapat taman yang luas, Gajebo, Lapang Sepak bola, dan lainnya yang dapat dimanfaatkan oleh masyarakat sebagai tempat bermain, maupun berolah raga, terdapat pula <em>wifi </em><em>hotspot</em> yang disediakan oleh pemerintahan Kabupaten Kuningan dan juga Telkom&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '../images/11122017015642DSC_0072.JPG'),
(8, 'profil', '2017-12-11', '<blockquote>\r\n<p>Potensi Sumber Daya Alam Desa Kertawangunan</p>\r\n</blockquote>\r\n\r\n<p>Berikut data luas wilayah berdasarkan penggunaanya :</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Luas Permukiman</td>\r\n			<td>37.177 Ha/m2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Luas Persawahan</td>\r\n			<td>60.05 Ha/m2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Luas Pemakaman</td>\r\n			<td>12.450 Ha/m2</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Data Tanah Fasilitas Umum :</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Tanah Bengkok</th>\r\n			<td>54.350 m2</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Tanah Titi Sara</th>\r\n			<td>5000 m2</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Lapangan Olah Raga</th>\r\n			<td>5.775 m2</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Perkantoran Pemerintah</th>\r\n			<td>20.700 m2</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Pemakaman Umum</th>\r\n			<td>12.450 m2</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Bangunan Sekolah / Perguruan tinggi</th>\r\n			<td>2.606 m2</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Terminal</th>\r\n			<td>33.650 m2</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '../images/DSC_0044.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(5) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal_unggah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`, `judul`, `tanggal_unggah`) VALUES
(1, '../images/DSC_0014.jpg', 'Kantor Kepala Desa Kertawangunan', '2017-12-01'),
(2, '../images/04012018172512DSC_0011.JPG', 'Mesjid Agung Kertawangunan', '2018-01-04'),
(3, '../images/DSC_0147.JPG', 'Kegiatan POSKESDES', '2017-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `isi_berita`
--

CREATE TABLE `isi_berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` char(5) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `gambar` longtext NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_berita`
--

INSERT INTO `isi_berita` (`id_berita`, `id_kategori`, `nama_kategori`, `judul`, `tanggal`, `waktu`, `gambar`, `isi`) VALUES
(1, '1', 'Berita', 'Bulan Eliminasi Kaki Gajah tahun 2017', '2017-10-01', '09:14:00', '../images/13122017052104DSC_0115.JPG', '<p>Umur DEC Albendazole =&gt; 14 tahun / Dewas 3 Tablet 1 Tablet 6 - 14 tahun 2 Tablet 1 Tablet 2 - 5 Tahun 1 Tablet 1 tablet</p>\r\n\r\n<p>* Semua Tablet diminum dalam 1 kali waktu</p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>Umur DEC Albendazole =&gt; 14 tahun / Dewas 3 Tablet 1 Tablet 6 - 14 tahun 2 Tablet 1 Tablet 2 - 5 Tahun 1 Tablet 1 tablet</p>\r\n\r\n<p>* Semua Tablet diminum dalam 1 kali waktu</p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>Penyakit Kaki Gajah (Filariasis) menyerang semua orang, baik orang tua, anak - anak, perempuan maupun laki - laki. Filariasis bersifat menahun yang disebabkan oleh carian filaria dan ditularkan oleh nyamuk.</p>\r\n\r\n<p>Bulan yang ditetapkan untuk minum obat pencegah penyakit gajah secara serentak di seluruh Indonesia yaitu bulan Oktober.</p>\r\n\r\n<p>Paket Obat Pencegahan Penyakit Kaki Gajah :</p>\r\n\r\n<p>- Diethylcarbamazine Citrate (CED)</p>\r\n\r\n<p>- Albendazole</p>\r\n\r\n<p>Dosis :</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Umur</td>\r\n			<td>DEC</td>\r\n			<td>Albendazole</td>\r\n		</tr>\r\n		<tr>\r\n			<td>=&gt; 14 tahun / Dewas</td>\r\n			<td>3 Tablet</td>\r\n			<td>1 Tablet</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6 - 14 tahun</td>\r\n			<td>2 Tablet</td>\r\n			<td>1 Tablet</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2 - 5 Tahun</td>\r\n			<td>1 Tablet</td>\r\n			<td>1 tablet</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>* Semua Tablet diminum dalam 1 kali waktu</p>\r\n'),
(2, '2', 'Pengumuman', 'Pendaptaran PPK', '2017-12-03', '18:30:50', '../images/04012018163118Tahapan-Sleksi-PPK-PPS.jpg', '<p>https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf\">FORMULIR DAN PERSYARATAN&nbsp; PENDAFTARAN PPK/PPS KPU KUNINGAN</a></p>\r\n\r\n<p><strong>KPU Kuningan &ndash;</strong> Dalam rangka penyelenggaraan Pemilihan Gubernur dan Wakil Gubernur Jawa Barat dan Pemilihan Bupati dan Wakil Bupati Kuningan Tahun 2018, Komisi Pemilihan Umum Kabupaten Kuningan dengan ini membuka kesempatan kepada seluruh masyarakat Kabupaten Kuningan yang telah memenuhi syarat sebagaimana diatur dalam Pasal 72 Undang-Undang Nomor 7 Tahun 2017 tentang Penyelenggaraan Pemilihan Umum, untuk mendaftar menjadi calon anggota <a href=\"https://kpu-kuningankab.go.id/tag/ppk-dan-pps\">PPK dan PPS</a> dengan ketentuan sebagai berikut:</p>\r\n\r\n<p><a href=\"https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf\">https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf</a></p>\r\n\r\n<p><a href=\"https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf\">FORMULIR DAN PERSYARATAN&nbsp; PENDAFTARAN PPK/PPS KPU KUNINGAN</a></p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>PPK dan PPS dengan ketentuan sebagai berikut:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf\">https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf</a></p>\r\n\r\n<p><a href=\"https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf\">FORMULIR DAN PERSYARATAN&nbsp; PENDAFTARAN PPK/PPS KPU KUNINGAN</a></p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p><strong>KPU Kuningan &ndash;</strong> Dalam rangka penyelenggaraan Pemilihan Gubernur dan Wakil Gubernur Jawa Barat dan Pemilihan Bupati dan Wakil Bupati Kuningan Tahun 2018, Komisi Pemilihan Umum Kabupaten Kuningan dengan ini membuka kesempatan kepada seluruh masyarakat Kabupaten Kuningan yang telah memenuhi syarat sebagaimana diatur dalam Pasal 72 Undang-Undang Nomor 7 Tahun 2017 tentang Penyelenggaraan Pemilihan Umum, untuk mendaftar menjadi calon anggota <a href=\"https://kpu-kuningankab.go.id/tag/ppk-dan-pps\">PPK dan PPS</a> dengan ketentuan sebagai berikut:</p>\r\n\r\n<p><a href=\"https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf\">https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf</a></p>\r\n\r\n<p><a href=\"https://kpu-kuningankab.go.id/wp-content/uploads/2017/10/PENGUMUMAN-PENDAFTARAN-PPK-PPS_KPU-KUNINGAN.pdf\">FORMULIR DAN PERSYARATAN&nbsp; PENDAFTARAN PPK/PPS KPU KUNINGAN</a></p>\r\n'),
(4, '2', 'Pengumuman', 'Pelaksanaan Perayaan Maulid Nabi ', '2017-12-11', '22:20:20', '../images/DSC_0017.JPG', '<p>Maulid nabi Muhammad SAW akan dilaksanakan di masjid jami</p>\r\n'),
(5, '1', 'Berita', 'Pembukaan pendaftaran PPK dan PPS', '2018-01-05', '22:20:50', '../images/04012018164609pengumuman-pemantau.jpg', '<p><strong>KPU Kuningan &ndash;</strong> Dalam rangka penyelenggaraan Pemilihan Gubernur dan Wakil Gubernur Jawa Barat dan Pemilihan Bupati dan Wakil Bupati Kuningan Tahun 2018, Komisi Pemilihan Umum Kabupaten Kuningan dengan ini membuka kesempatan kepada seluruh masyarakat Kabupaten Kuningan yang telah memenuhi syarat sebagaimana diatur dalam Pasal 72 Undang-Undang Nomor 7 Tahun 2017 tentang Penyelenggaraan Pemilihan Umum, untuk mendaftar menjadi calon anggota <a href=\"https://kpu-kuningankab.go.id/tag/ppk-dan-pps\">PPK dan PPS</a> dengan ketentuan sebagai berikut:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://kpu-kuningankab.go.id/pengumuman-tentang-seleksi-calon-anggota-ppk-dan-pps-2.html\">FORMULIR DAN PERSYARATAN PENDAFTARAN PPK/PPS KPU KUNINGAN</a></p>\r\n'),
(7, '2', 'Pengumuman', 'Penguman', '2018-01-10', '20:30:20', '../images/100120181430452.png', '<p>aaajjhba aaaaaaaaaaaaaaaaaaa</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_organisasi`
--

CREATE TABLE `jenis_organisasi` (
  `id_jenis` int(1) NOT NULL,
  `nama_organisasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_organisasi`
--

INSERT INTO `jenis_organisasi` (`id_jenis`, `nama_organisasi`) VALUES
(1, 'Perangkat Desa'),
(2, 'BPD'),
(3, 'LPM'),
(4, 'PKK'),
(5, 'Karang Taruna'),
(6, 'BUMDES');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` char(5) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('1', 'Berita'),
('2', 'Pengumuman');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subjek` varchar(25) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(3, 'ade', 'ade@gmail.com', 'Penerangan Jalan Desa', 'Mohon diperbaiki penerangan jalan di sekitar blok 1', '2018-01-04 15:48:04'),
(4, 'ade', 'imai@email.com', 'hai', 'hai gaes', '2018-01-11 02:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `perangkat`
--

CREATE TABLE `perangkat` (
  `id_perangkat` int(4) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `id_jenis` int(1) NOT NULL,
  `periode` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perangkat`
--

INSERT INTO `perangkat` (`id_perangkat`, `nama`, `jabatan`, `pendidikan`, `alamat`, `gambar`, `id_jenis`, `periode`) VALUES
(1, 'Nanang Sunardi', 'Kepala Desa', 'SMA', 'Kertawangunan', '../images/06122017190323DSC_0130.JPG', 1, 2013),
(2, 'Asep Saefullah J', 'Kasi Pemerintahan', '-', 'Kertwagnunan', '../images/04012018155949user.png', 1, 2013),
(3, 'Udin Jaenudin', 'Sekretaris', '', 'Kertawangunan', '../images/04012018160308user.png', 1, 2013),
(5, 'Arif Budiman', 'Bendahara', '-', 'Kertawangunan', '../images/04012018160329user.png', 1, 2013),
(6, 'Muhtar', 'Kasi Ekonomi,Pembangunan', '-', 'Kertawangunan', '../images/04012018160347user.png', 1, 2013),
(7, '-', 'Kasi Kesra', '-', 'Kertawangunan', '../images/04012018160440user.png', 1, 2013),
(8, 'Asep Saepullah H', 'Kadus 1', '-', 'Kertawangunan', '../images/04012018160458user.png', 1, 2013),
(9, 'Ali', 'Kadus 2	', '-', 'Kertawangunan', '../images/04012018160518user.png', 1, 2013),
(10, 'H Emon Suparman', 'Kadus 2', '-', 'Kertawangunan', '../images/04012018160540user.png', 1, 2013),
(12, 'Drs. H Carsim M.Pd', 'Ketua', 'S2', 'Kertawangunan', '../images/04012018160347user.png', 2, 2013),
(13, 'Tes', 'Tes', 'Tes', 'Tes tes', '', 1, 2013),
(14, 'Satia Lesmana, S.E', 'Wakil Ketua', 'S1', 'Kertawangunan', '../images/04012018160347user.png', 2, 2013),
(15, 'tes 2', 'tes v2', 'tes 2', 'tes', 'tes', 1, 2013),
(16, 'Engkos Kosasih S.H., M.H', 'Sekretaris', 'S2', 'Kertawangunan', '../images/04012018160347user.png', 2, 2013),
(17, 'Herman', 'Anggota', '-', 'Kertawangunan', '../images/04012018160347user.png', 2, 2013),
(18, 'Burhan Ali', 'Anggota', '-', 'Kertawangunan', '../images/04012018160347user.png', 2, 2013),
(19, 'Uta Setiana', 'Anggota', '-', 'Kertawangunan', '../images/04012018160347user.png', 2, 2013),
(20, 'Dadan Sunandar', 'Anggota', '-', 'Kertawangunan', '../images/04012018160347user.png', 2, 2013),
(21, 'Juhendi', 'Anggota', '-', 'Kertawangunan', '../images/04012018160347user.png', 2, 2013),
(22, 'Juhdi', 'Anggota', '-', 'Kertawangunan', '../images/04012018160347user.png', 2, 2013),
(23, 'Yanto Rianto', 'Anggota', '-', 'Kertawangunan', '../images/04012018160347user.png', 2, 2013),
(24, 'Surojim', 'Ketua', '-', 'Kertawangunan', '../images/04012018160347user.png', 3, 2013),
(25, 'K.H Irfan', 'Wakil Ketua', '-', 'Kertawangunan', '../images/04012018160347user.png', 3, 2013),
(26, 'Dena', 'Sekretaris', '-', 'Kertawangunan', '../images/04012018160347user.png', 3, 2013),
(27, 'Dian Hartati', 'Ketua', '-', 'Kertawangunan', '../images/04012018160347user.png', 4, 2013),
(28, 'Marlia Susanti', 'Sekretaris', '-', 'Kertawangunan', '../images/04012018161047user.png', 4, 2013),
(30, 'H Maman', 'Ketua', '-', 'Kertawangunan', '../images/04012018134029user.png', 5, 2013),
(31, 'Cucu', 'Wakil Ketua', '-', 'Kertawangunan', '../images/04012018133924user.png', 5, 2013),
(32, 'Mario Gunawan', 'Sekretaris', '-', 'Kertawangunan', '../images/04012018133849user.png', 5, 2013),
(33, 'Didin', 'Bendahara', '-', 'Kertawangunan', '../images/04012018133742user.png', 5, 2013),
(34, 'Rovi', 'Seksi Olahraga', '-', 'Kertawangunan', '../images/04012018133532user.png', 5, 2013),
(35, 'H. Iptor', 'Seksi Agama', '-', 'Kertwangunan', '../images/04012018132645user.png', 5, 2013),
(36, 'Ifan Maulana', 'Seksi Konsumsi', '-', 'Kertawangunan', '../images/04012018133358user.png', 5, 2013),
(37, 'Imam Arosi', 'Seksi Humas', '-', 'Kertawangunan', '../images/04012018133511user.png', 5, 2013);

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id_struktur` int(2) NOT NULL,
  `id_jenis` int(1) NOT NULL,
  `nama_organisasi` varchar(25) NOT NULL,
  `gambar_struktur` text NOT NULL,
  `periode` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id_struktur`, `id_jenis`, `nama_organisasi`, `gambar_struktur`, `periode`) VALUES
(1, 1, 'Perangkat Desa', '../images/struktur/struktur-desa.png', 2013),
(2, 2, 'BPD', '../images/struktur/BPD.png', 2013),
(3, 3, 'LPM', '../images/struktur/lpmM.png', 2013),
(4, 4, 'PKK', '../images/struktur/PKK.png', 2013),
(5, 5, 'Karang Taruna', '../images/struktur/KARTAR.png', 2013),
(6, 6, 'BUMDES', '', 2014),
(7, 1, 'Perangkat Desa', '', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` char(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `hak_akses` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `hak_akses`) VALUES
('12', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'administrator'),
('6', 'uci', 'e208ca42644926ebb0dc4fe7167f25d7', 'administrator'),
('adm01', 'admin', '202cb962ac59075b964b07152d234b70', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_profil`
--
ALTER TABLE `data_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `isi_berita`
--
ALTER TABLE `isi_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `nama_kategori` (`nama_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `jenis_organisasi`
--
ALTER TABLE `jenis_organisasi`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `perangkat`
--
ALTER TABLE `perangkat`
  ADD PRIMARY KEY (`id_perangkat`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id_struktur`),
  ADD KEY `nama_organisasi` (`nama_organisasi`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_profil`
--
ALTER TABLE `data_profil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `isi_berita`
--
ALTER TABLE `isi_berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `perangkat`
--
ALTER TABLE `perangkat`
  ADD CONSTRAINT `perangkat_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_organisasi` (`id_jenis`);

--
-- Constraints for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD CONSTRAINT `struktur_organisasi_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_organisasi` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
