-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2020 pada 03.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myschool`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` varchar(258) NOT NULL,
  `nama_agenda` varchar(258) NOT NULL,
  `pelaksana_agenda` varchar(258) NOT NULL,
  `tanggal_agenda` date NOT NULL,
  `pamflet_agenda` varchar(258) NOT NULL,
  `created_agenda` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_agenda` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_agenda`, `nama_agenda`, `pelaksana_agenda`, `tanggal_agenda`, `pamflet_agenda`, `created_agenda`, `updated_agenda`) VALUES
('47129c0c831ecdb1baeb', 'Seminar Nasional Fisika', 'Dinas Pendidikan Provinsi Bengkulu', '2020-03-31', '', '2020-03-28 11:51:57', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` varchar(50) NOT NULL,
  `judul_berita` varchar(258) NOT NULL,
  `isi_berita` text NOT NULL,
  `author_berita` varchar(258) NOT NULL,
  `image_berita` varchar(258) NOT NULL,
  `created_berita` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_berita` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `author_berita`, `image_berita`, `created_berita`, `updated_berita`) VALUES
('07fbe21b9f038230b0c0', 'Libur Akibat COVID-19 Diperpanjang', '<p>888888888888888888888888888888</p>\r\n', 'Ervin Fikot M', 'Berita-200329-9a461f04df.jpg', '2020-03-29 10:30:29', NULL),
('0d24c3486dceec190dde', 'Presiden Periode 2019 - 2024', '<p>Komisi Pemilihan Umum (<strong><a href=\"https://www.cnnindonesia.com/tag/kpu\" target=\"_blank\">KPU</a></strong>) resmi menetapkan <strong><a href=\"https://www.cnnindonesia.com/tag/jokowi-maruf-amin\" target=\"_blank\">Joko Widodo-Ma&#39;ruf</a></strong> Amin sebagai presiden dan wakil presiden terpilih di <strong><a href=\"https://www.cnnindonesia.com/tag/pilpres-2019\" target=\"_blank\">Pilpres 2019</a></strong>. Penetapan dilakukan melalui rapat pleno terbuka di kantor KPU Jakarta, Minggu (30/6).<br>\r\n<br>\r\n\"Memutuskan, menetapkan keputusan Komisi Pemilihan Umum tentang penetapan pasangan calon presiden dan wakil presiden terpilih dalam Pemilu tahun 2019. Menetapkan pasangan calon presiden dan waki presiden terpilih dalam Pilpres 2019 nomor urut 01 sdr Ir H Joko Widodo dan sdr Prof Dr KH Ma&#39;ruf Amin,\" kata Ketua KPU Arief Budiman di kantor KPU, Jalan Imam Bonjol, Jakarta Pusat.</p>\r\n\r\n<p>Keputusan tersebut mulai berlaku pada tanggal ditetapkan, yakni di Jakarta 30 Juni 2019.<br>\r\n<br>\r\nPenetapan ini dibuat setelah Mahkamah Konstitusi memutuskan menolak permohonan pasangan calon presiden dan wakil presiden nomor urut 02 Prabowo-Sandiaga dalam sengketa perselisihan hasil pemilihan umum (PHPU).<br>\r\n<br>\r\nMK mementahkan gugatan Prabowo-Sandi pada sidang putusan Kamis (27/6) lalu. Sesuai Peraturan KPU Nomor 5 Tahun 2018, KPU wajib menetapkan paslon terpilih maksimal tiga hari setelah putusan MK. Putusan MK ini bersifat final dan mengikat.</p>\r\n\r\n<p>KPU mengundang dua pasangan calon dan kementerian/lembaga dalam penetapan ini. Namun, hanya Jokowi-Ma&#39;ruf yang hadir di penetapan ini. Sementara itu Prabowo-Sandi tak hadir.<br>\r\n<br>\r\nAwalnya KPU merencanakan momen penetapan bisa jadi silaturahmi Jokowi dan Prabowo. Bahkan Arief memberikan panggung bersama bagi Jokowi-Ma&#39;ruf Amin dan Prabowo-Sandi.<br>\r\n<br>\r\nMenteri Kabinet Kerja dan pimpinan parpol turut menghadiri penetapan ini. Berdasarkan pantauan, tampak Menteri Ketenagakerjaan Hanif Dhakiri, dan Sekretaris Kabinet Seskab Pramono Anung.<br>\r\n<br>\r\nLalu Wakil Koordinator Bidang Pratama Partai Golkar Bambang Soesatyo, Sekretaris Jenderal Partai Demokrat Hinca Panjaitan, Sekjen Partai Amanat Nasional (PAN) Eddy Suparno, Ketua Umum Partai Kebangkitan Bangsa Muhaimin Iskandar, Sekjen PSI Raja Juli Antoni, Sekretaris Jenderal PDI Perjuangan Hasto Kristiyanto, dan Ketua Umum Nasdem Surya Paloh.<br>\r\n<br>\r\nSementara itu, kubu paslon 02 diwakili anggota Direktorat Advokasi dan Hukum Badan Pemenangan Nasional (BPN) Prabowo Subianto-Sandiaga Uno, Habiburokhman.</p>\r\n\r\n<p>Jokowi-Ma&#39;ruf menang Pilpres 2019 dengan meraih 85.607.362 suara atau 55,50 persen suara sah. Sementara Prabowo-Sandi memperoleh 68.650.239 suara atau 45,50 persen suara sah.</p>\r\n', 'Ervin Fikot M', 'Berita-200328-534114793a.jpg', '2020-03-28 17:04:22', NULL),
('e8cf2bd226a67f20f692', 'Libur Akibat COVID-19 Diperpanjang', '<p>155414122125154515115151</p>\r\n', 'Ervin Fikot M', 'Berita-200329-55163c5d99.jpg', '2020-03-29 10:27:04', NULL),
('ffc178bb6f186efbef60', 'logo dinas pendidikan dan kebudayaan kabupaten', '<p>231212113131321321321</p>\r\n', 'Ervin Fikot M', 'Berita-200329-a241e6032f.png', '2020-03-29 10:34:24', '2020-03-29 05:43:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekstra`
--

CREATE TABLE `tb_ekstra` (
  `id_ekstra` varchar(50) NOT NULL,
  `kegiatan_ekstra` varchar(258) NOT NULL,
  `jadwal_ekstra` varchar(258) NOT NULL,
  `jam_ekstra` varchar(258) NOT NULL,
  `pembina_ekstra` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` varchar(50) NOT NULL,
  `nama_fasilitas` varchar(258) NOT NULL,
  `image_fasilitas` varchar(258) NOT NULL,
  `updated_fasilitas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` varchar(50) NOT NULL,
  `judul_galeri` varchar(258) NOT NULL,
  `foto_galeri` varchar(258) NOT NULL,
  `created_galeri` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_galeri` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul_galeri`, `foto_galeri`, `created_galeri`, `updated_galeri`) VALUES
('93dfa466d25b272ee624', 'bernoulli', 'galeri-200328-e1bfa4d3b4.jpg', '2020-03-28 06:36:06', '2020-03-28 00:54:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` varchar(50) NOT NULL,
  `kategori_jadwal` varchar(1) NOT NULL COMMENT '1: pelajaran, 2: ujian',
  `keterangan_jadwal` text NOT NULL,
  `file_jadwal` varchar(258) NOT NULL,
  `created_jadwal` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_jadwal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kalender`
--

CREATE TABLE `tb_kalender` (
  `id_kalender` varchar(50) NOT NULL,
  `ta_kalender` varchar(258) NOT NULL,
  `semester_kalender` varchar(50) NOT NULL,
  `file_kalender` varchar(258) NOT NULL,
  `created_kalender` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_krisar`
--

CREATE TABLE `tb_krisar` (
  `id_krisar` varchar(50) NOT NULL,
  `user_krisar` varchar(258) NOT NULL,
  `ip_krisar` varchar(258) NOT NULL,
  `isi_krisar` text NOT NULL,
  `created_krisar` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_krisar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_krisar`
--

INSERT INTO `tb_krisar` (`id_krisar`, `user_krisar`, `ip_krisar`, `isi_krisar`, `created_krisar`, `status_krisar`) VALUES
('5a68bcb7f0254767db45', 'ACER-PC', '::1', '34234-3423432-ererewerwerwer', '2020-03-28 07:56:33', 1),
('684f6c25475dd85fd341', 'ACER-PC', '::1', '--', '2020-03-28 11:41:56', 1),
('db301468540f194b19dd', 'ACER-PC', '::1', '67567567-567567567-gyfyfgyfgyfg', '2020-03-28 08:34:53', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kurikulum`
--

CREATE TABLE `tb_kurikulum` (
  `id_kurikulum` varchar(50) NOT NULL,
  `file_kurikulum` varchar(258) NOT NULL,
  `keterangan_kurikulum` text NOT NULL,
  `create_kurikulum` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` varchar(50) NOT NULL,
  `sumber_pengumuman` varchar(258) NOT NULL,
  `judul_pengumuman` varchar(500) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `pemilik_pengumuman` varchar(258) NOT NULL,
  `created_pengumuman` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_pengumuman` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `sumber_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `pemilik_pengumuman`, `created_pengumuman`, `updated_pengumuman`) VALUES
('d3021a429afc5addeb5f', 'Kepala Sekolah', 'Libur Sekolah', '<h4><strong>[PENTING]</strong></h4>\r\n\r\n<p><strong>Diberitahukan Kepada Seluruh Civitas Akademika SMP N 1 Lebong bahwa menaggapi surat dari Presiden Republik Indonesia maka Kegiatan Belajar Mengajar Diliburkan sampai informasi lebih lanjut, untuk informasi lebih lanjut akan diberitakan melalui website ..................</strong></p>\r\n\r\n<p><strong>sekian terima kasih</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Lebong, 28 Maret 2020</strong></p>\r\n\r\n<p><strong>Kepala Sekolah</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Ervin Fikot M, P.hD</strong></p>\r\n', 'Ervin Fikot M', '2020-03-27 00:28:45', '2020-03-27 00:28:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` varchar(50) NOT NULL,
  `nama_kegiatan` varchar(258) NOT NULL,
  `nama_peserta` varchar(258) NOT NULL,
  `perolehan_juara` varchar(258) NOT NULL,
  `tingkat_prestasi` varchar(258) NOT NULL,
  `tahun_prestasi` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `nama_kegiatan`, `nama_peserta`, `perolehan_juara`, `tingkat_prestasi`, `tahun_prestasi`) VALUES
('2691bde077362620d8c3', 'Karate', 'Danis', 'Juara 1', 'Provinsi', '2019'),
('98645687113089025', 'Volly Competition', 'Nurkhasanah', 'Juara 1', 'Kabupaten/kota', '2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sambutan`
--

CREATE TABLE `tb_sambutan` (
  `id_sambutan` varchar(50) NOT NULL,
  `isi_sambutan` text NOT NULL,
  `image_sambutan` varchar(258) NOT NULL,
  `created_sambutan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sambutan`
--

INSERT INTO `tb_sambutan` (`id_sambutan`, `isi_sambutan`, `image_sambutan`, `created_sambutan`) VALUES
('98648784388489217', '<p><em><strong>Assalamu&#39;alaikum wr.wb.</strong></em></p>\r\n\r\n<p>Puji syukur kepada Alloh SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya sehingga website SMK Negeri 2 Yogyakarta ini dapat terbit. Salah satu tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya Teknologi Informasi yang begitu pesat, sangat diperlukan berbagai sarana prasarana yang kondusif, kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SMK Negeri 2 Yogyakarta.</p>\r\n\r\n<p>Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan dan pemerhati pendidikan secara khusus bagi SMK Negeri 2 Yogyakarta.</p>\r\n\r\n<p>Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan meng-update diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik nantinya. Terima kasih atas kerjasamanya, maju terus untuk mencapai SMK Negeri 2 Yogyakarta yang lebih baik lagi.</p>\r\n\r\n<p><strong><em>Wassalamu&#39;alaikum wr.wb.</em></strong></p>\r\n', 'Image-200329-4f916ffc77.jpg', '2020-03-23 11:06:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `npsn_sekolah` varchar(50) NOT NULL,
  `nama_sekolah` varchar(258) NOT NULL,
  `inisial_sekolah` varchar(258) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `embed_sekolah` text NOT NULL,
  `kepala_sekolah` varchar(258) NOT NULL,
  `akreditasi_sekolah` varchar(20) NOT NULL,
  `kurikulum_sekolah` varchar(258) NOT NULL,
  `ta_sekolah` varchar(258) NOT NULL,
  `semester_sekolah` varchar(258) NOT NULL,
  `desc_sekolah` text NOT NULL,
  `telp_sekolah` varchar(100) NOT NULL,
  `email_sekolah` varchar(258) NOT NULL,
  `fb_sekolah` varchar(258) NOT NULL,
  `ig_sekolah` varchar(258) NOT NULL,
  `tw_sekolah` varchar(258) NOT NULL,
  `ytb_sekolah` varchar(258) NOT NULL,
  `logo_sekolah` varchar(258) NOT NULL,
  `struktur_organisasi` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`npsn_sekolah`, `nama_sekolah`, `inisial_sekolah`, `alamat_sekolah`, `embed_sekolah`, `kepala_sekolah`, `akreditasi_sekolah`, `kurikulum_sekolah`, `ta_sekolah`, `semester_sekolah`, `desc_sekolah`, `telp_sekolah`, `email_sekolah`, `fb_sekolah`, `ig_sekolah`, `tw_sekolah`, `ytb_sekolah`, `logo_sekolah`, `struktur_organisasi`) VALUES
('1700018127', 'SMP Negeri 1 Lebong Utara', 'TELADAN LEBONG', 'Pasar Muara Aman, North Lebong, Lebong Regency, Bengkulu 39264', 'a', 'Ervin Fikot M, M.Kom', 'A', '2013', '2019 / 2020', 'Ganjil', 'SMP Negeri 1 Lebong adalah sekolah menengah Pertama negeri di Lebong. Terletak di Jalan Bulungan Blok C Nomor 1, Kebayoran Baru, Jakarta Selatan, DKI Jakarta. Saat ini, SMA Negeri 70 Jakarta telah berganti status dari RSBI (Rintisan Sekolah Bertaraf Internasional) menjadi Sekolah Mandiri SSN (Sekolah Standar Nasional)', '081733', 'sekolah@mail.com', 'spensalebra', 'spensalebra', 'spensalebra', 'spensalebra', 'logo-200329-939157501a.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sistem`
--

CREATE TABLE `tb_sistem` (
  `id_sistem` varchar(50) NOT NULL,
  `pass_sistem` varchar(258) NOT NULL,
  `mode_sistem` int(1) NOT NULL COMMENT '1: active, 2:maintenance, 3: fff',
  `name_sistem` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sistem`
--

INSERT INTO `tb_sistem` (`id_sistem`, `pass_sistem`, `mode_sistem`, `name_sistem`) VALUES
('87329cf3-6ec1-11ea-a908-406186cd10d5', '8cb2237d0679ca88db6464eac60da96345513964', 1, 'SMP N 1 Lebong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` varchar(50) NOT NULL,
  `nama_kelas` varchar(258) NOT NULL,
  `wali_kelas` varchar(258) NOT NULL,
  `jumlah_laki` varchar(50) NOT NULL,
  `jumlah_perempuan` varchar(50) NOT NULL,
  `created_siswa` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_staff` varchar(50) NOT NULL,
  `cat_staff` int(1) NOT NULL COMMENT '1: pendidik, 2: kependidikan',
  `nip_staff` varchar(50) NOT NULL,
  `nama_staff` varchar(258) NOT NULL,
  `jabatan_staff` varchar(258) NOT NULL,
  `keilmuan_staff` varchar(258) NOT NULL,
  `pendidikan_staff` varchar(258) NOT NULL,
  `image_staff` varchar(258) NOT NULL,
  `created_staff` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `name_user` varchar(258) NOT NULL,
  `jabatan_user` varchar(258) NOT NULL,
  `username` varchar(258) NOT NULL,
  `password` varchar(258) NOT NULL,
  `email_user` varchar(258) NOT NULL,
  `image_user` varchar(258) NOT NULL,
  `status_user` int(1) NOT NULL,
  `is_active` int(1) DEFAULT NULL,
  `updated_user` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name_user`, `jabatan_user`, `username`, `password`, `email_user`, `image_user`, `status_user`, `is_active`, `updated_user`) VALUES
('98648648946024448', 'Ervin Fikot M', 'Kepala Sekolah', 'admin', 'b858cb282617fb0956d960215c8e84d1ccf909c6', 'admin@mail.com', '', 1, 1, '2020-03-27 10:27:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi_misi`
--

CREATE TABLE `tb_visi_misi` (
  `id_visi` varchar(50) NOT NULL,
  `visi_sekolah` text NOT NULL,
  `misi_sekolah` text NOT NULL,
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_visi_misi`
--

INSERT INTO `tb_visi_misi` (`id_visi`, `visi_sekolah`, `misi_sekolah`, `updated`) VALUES
('98648784388489219', '<p>Labschool merupakan sekolah yang mempersiapkan calon pemimpin masa depan yang bertakwa, berintregritas tinggi, berdaya juang kuat, berkepribadian utuh, berbudi pekerti luhur, mandiri, serta mempunyai kemampuan intelektual yang tinggi</p>\r\n', '<p>1. Menciptakan Lingkungan belajar yang menantang, menyenangkan dan bermakna</p>\r\n\r\n<p>2. Melakukan Proses pembelajaran inklusi yang humanistik dan holistik</p>\r\n\r\n<p>3. Menghasilkan lulusan yang bermutu, berkarakter positif, dan mempunyai daya saing yang kuat</p>\r\n\r\n<p>4. Melakukan upaya untuk memberikan kesempatan kepada pendidikan dan tenaga kependidikan agar memiliki inisiatif dan kemandirian </p>\r\n\r\n<p>5. Memiliki pendidikan dan tenaga kependidikan yang memberikan teladan dan melakukan tugasnya sesuai tuntutan profesi</p>\r\n\r\n<p>6. Memiliki pimpinan yang berwawasan luas, berorientasi ke masa depan dan terampil melakukan manajemen yang prefesional</p>\r\n\r\n<p>7. Menjalin kemitraan dengan orang tua dan masyarakat dalam mewujudkan visi Labscool</p>\r\n', '2020-03-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_viwer`
--

CREATE TABLE `tb_viwer` (
  `id_viwer` varchar(50) NOT NULL,
  `macadd_viwer` varchar(100) NOT NULL,
  `user_name` varchar(258) NOT NULL,
  `ip_viwer` varchar(100) NOT NULL,
  `os_viwer` varchar(100) NOT NULL,
  `browser_viwer` varchar(120) NOT NULL,
  `created_viwer` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_viwer`
--

INSERT INTO `tb_viwer` (`id_viwer`, `macadd_viwer`, `user_name`, `ip_viwer`, `os_viwer`, `browser_viwer`, `created_viwer`) VALUES
('b1f1b09dcbe131ceeb6b', '06-0F-00-8B-E0-9C', 'ACER-PC', '::1', 'Windows 8.1', 'Chrome 80.0.3987.149', '2020-03-28 07:56:03'),
('eca1346a40678d09f402', '06-0F-00-8B-E0-9C', 'ACER-PC', '::1', 'Windows 8.1', 'Chrome 80.0.3987.149', '2020-03-29 10:26:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_ekstra`
--
ALTER TABLE `tb_ekstra`
  ADD PRIMARY KEY (`id_ekstra`);

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tb_kalender`
--
ALTER TABLE `tb_kalender`
  ADD PRIMARY KEY (`id_kalender`);

--
-- Indeks untuk tabel `tb_krisar`
--
ALTER TABLE `tb_krisar`
  ADD PRIMARY KEY (`id_krisar`);

--
-- Indeks untuk tabel `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indeks untuk tabel `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`npsn_sekolah`);

--
-- Indeks untuk tabel `tb_sistem`
--
ALTER TABLE `tb_sistem`
  ADD PRIMARY KEY (`id_sistem`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  ADD PRIMARY KEY (`id_visi`);

--
-- Indeks untuk tabel `tb_viwer`
--
ALTER TABLE `tb_viwer`
  ADD PRIMARY KEY (`id_viwer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
