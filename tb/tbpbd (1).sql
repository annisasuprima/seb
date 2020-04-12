-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2020 pada 04.05
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbpbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` varchar(25) NOT NULL,
  `jenis_bantuan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_donatur`
--

CREATE TABLE `detail_donatur` (
  `id_donatur` varchar(25) NOT NULL,
  `id_bantuan` varchar(25) NOT NULL,
  `jumlah_bantuan` int(11) DEFAULT NULL,
  `tgl_bantuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_evakuasi`
--

CREATE TABLE `detail_evakuasi` (
  `jenis_bencana` varchar(25) NOT NULL,
  `tgl_bencana` date NOT NULL,
  `no_urut` int(11) NOT NULL,
  `id_evakuasi` varchar(25) NOT NULL,
  `status_jalur` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kebutuhan`
--

CREATE TABLE `detail_kebutuhan` (
  `id_bantuan` varchar(25) NOT NULL,
  `nik_korban` varchar(25) NOT NULL,
  `jenis_bencana` varchar(25) NOT NULL,
  `tgl_bencana` date NOT NULL,
  `no_urut` int(11) NOT NULL,
  `tgl_memberikan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kerugian`
--

CREATE TABLE `detail_kerugian` (
  `id_kerugian` varchar(25) NOT NULL,
  `jenis_bencana` varchar(25) NOT NULL,
  `tgl_bencana` date NOT NULL,
  `no_urut` int(11) NOT NULL,
  `total_kerugian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_korban`
--

CREATE TABLE `detail_korban` (
  `nik_korban` varchar(25) NOT NULL,
  `jenis_bencana` varchar(25) NOT NULL,
  `tgl_bencana` date NOT NULL,
  `no_urut` int(11) NOT NULL,
  `status_korban` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_shelter`
--

CREATE TABLE `detail_shelter` (
  `jenis_bencana` varchar(25) NOT NULL,
  `tgl_bencana` date NOT NULL,
  `no_urut` int(11) NOT NULL,
  `id_evakuasi` varchar(25) NOT NULL,
  `id_shelter` varchar(25) NOT NULL,
  `status_shelter` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_sumber_daya`
--

CREATE TABLE `detail_sumber_daya` (
  `id_tim_sar` varchar(25) NOT NULL,
  `id_sumber_daya` varchar(25) NOT NULL,
  `nik_korban` varchar(25) NOT NULL,
  `jenis_bencana` varchar(25) NOT NULL,
  `tgl_bencana` date NOT NULL,
  `no_urut` int(11) NOT NULL,
  `jumlah_sumber_daya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` varchar(25) NOT NULL,
  `nama_donatur` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jalur_evakuasi`
--

CREATE TABLE `jalur_evakuasi` (
  `id_evakuasi` varchar(25) NOT NULL,
  `geom_evakuasi` text,
  `nama_jalan` varchar(45) DEFAULT NULL,
  `arah_jalur` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kejadian_bencana`
--

CREATE TABLE `kejadian_bencana` (
  `jenis_bencana` varchar(25) NOT NULL,
  `tgl_bencana` date NOT NULL,
  `no_urut` int(11) NOT NULL,
  `geom` text,
  `keterangan_tempat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerugian`
--

CREATE TABLE `kerugian` (
  `id_kerugian` varchar(25) NOT NULL,
  `jenis_kerugian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kerugian`
--

INSERT INTO `kerugian` (`id_kerugian`, `jenis_kerugian`) VALUES
('k01', 'tingkat 1'),
('k02', 'tingkat 2'),
('k03', 'tingkat 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `korban`
--

CREATE TABLE `korban` (
  `nik_korban` varchar(25) NOT NULL,
  `nama_korban` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `korban`
--

INSERT INTO `korban` (`nik_korban`, `nama_korban`) VALUES
('1371062754000001', 'Affan Herlambang'),
('1371062754000002', 'Bintang Shafira'),
('1371062754000003', 'Chynthya Nur Fadilla'),
('1371062754000004', 'Dhani Putra Ramadhan'),
('1371062754000005', 'Erlangga Rayhan '),
('1371062754000006', 'Fathaya An-najmi'),
('1371062754000007', 'Gina Citra Salsabilla'),
('1371062754000008', 'Haifa Shaqueena '),
('1371062754000009', 'Irvan Harika Nasution'),
('1371062754000010', 'Jenny Angkasa'),
('1371062754000011', 'Kenia Varissa Fitri'),
('1371062754000012', 'Lintha Azzahra'),
('1371062754000013', 'Muhammad Husnul Ihksan'),
('1371062754000014', 'Nanda Firmasyah'),
('1371062754000015', 'Olivia Putri Sagita'),
('1371062754000016', 'Priska Biru Langit'),
('1371062754000017', 'Qian Fania Dinata '),
('1371062754000018', 'Rima Hujan'),
('1371062754000019', 'Septian Anugrah Rayhan'),
('1371062754000020', 'Tengku Ali Muhammad'),
('1371062754000021', 'Ulfi Khadijah '),
('1371062754000022', 'Valeria Guntur Jonathan'),
('1371062754000023', 'Wahyudi Syafrudin Bagaskara'),
('1371062754000024', 'Xiu Mei Han'),
('1371062754000025', 'Yudistira Demi Erlangga'),
('1371062754000026', 'Zafira Syaqilla Asteria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shelter`
--

CREATE TABLE `shelter` (
  `id_shelter` varchar(25) NOT NULL,
  `geom_shelter` text,
  `lokasi` varchar(45) DEFAULT NULL,
  `jumlah_lantai` int(11) DEFAULT NULL,
  `kepemilikan` varchar(45) DEFAULT NULL,
  `daya_tampung` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `shelter`
--

INSERT INTO `shelter` (`id_shelter`, `geom_shelter`, `lokasi`, `jumlah_lantai`, `kepemilikan`, `daya_tampung`) VALUES
('S01', NULL, 'Air Tawar Timur ', 4, 'Pemerintah', 200),
('S02', NULL, 'Kel. Bungo Pasang', 6, 'Pemerintah', 1000),
('S03', NULL, 'Komplek Jondul 4 Parupuk Tabing, Koto Tangah', 6, 'Pemerintah', 1000),
('S04', NULL, 'Jl. Sumatera, Ulak Karang Utara', 4, 'Pemerintah', 0),
('S05', NULL, 'Jl. Jendral Sudirman', 4, 'Pemerintah', 0),
('S06', NULL, 'Jl. Pemuda', 6, 'Pemerintah', 1000),
('S07', NULL, 'Jl. Khatib Sulaiman', 4, 'Pemerintah', 800),
('S08', NULL, 'Jl. Khatib Sulaiman', 4, 'Pemerintah', 0),
('S09', NULL, 'Jl. Rasuna Said', 3, 'Pemerintah', 0),
('S10', NULL, 'Jl. Taman Siswa No.1', 3, 'Pemerintah', 0),
('S11', NULL, 'Jl. S. Parman, Ulak Karang', 3, 'Pemerintah', 200),
('S12', NULL, 'Jl. S. Parman, Ulak Karang', 4, 'Pemerintah', 100),
('S13', NULL, 'Jl. Jend. Sudirman No. 51, Padang Barat ', 0, 'Pemerintah', 0),
('S14', NULL, 'Jl. Khairil Anwar', 5, 'Pemerintah', 0),
('S15', NULL, 'Jl. Sudriman, Padang Pasir', 8, 'Pemerintah', 1500),
('S16', NULL, 'Jl. Bagindo Azis Chan', 7, 'Pemerintah', 300),
('S17', NULL, 'Jl. Veteran', 4, 'Swasta', 800),
('S18', NULL, 'Jl. Hamka, Parupuk Tabing', 3, 'Swasta', 1000),
('S19', NULL, 'Jl. Khatib Sulaiman', 3, 'Swasta', 30),
('S20', NULL, 'Jl. Perintis Kemerdekaan', 6, 'Pemerintah', 0),
('S21', NULL, 'Jl. Situjuh', 5, 'Swasta', 300),
('S22', NULL, 'Jl. Sandang Pangan (Pasar Raya)', 4, 'Pemerintah', 4000),
('S23', NULL, 'Jl. Damar Kp. Olo', 5, 'Swasta', 1000),
('S24', NULL, 'Jl. Khatib Sulaiman', 0, 'Swasta', 0),
('S25', NULL, 'Jl. Khatib Sulaiman', 3, 'Swasta', 1000),
('S26', NULL, 'Jl. Veteran', 4, 'Pemerintah', 0),
('S27', NULL, 'Jl. Bandar Gereja', 3, 'Swasta', 0),
('S28', NULL, 'Jl. Ujung Gurun', 3, 'Swasta', 0),
('S29', NULL, 'Jl. Veteran No. 82 Padang', 4, 'Pemerintah', 0),
('S30', NULL, 'Jl. Khairil Anwar', 4, 'Swasta', 0),
('S31', NULL, 'Jl. Bandar Gereja', 3, 'Swasta', 0),
('S32', NULL, 'Jl. S. Parman Lolong Padang', 4, 'Pemerintah', 2000),
('S33', NULL, 'Jl. Beringin Belanti Timur', 3, 'Pemerintah', 0),
('S34', NULL, 'Jl. Belanti Raya No. 11 Padang', 4, 'Pemerintah', 2000),
('S35', NULL, 'Jl. Beringin No. 4 Padang', 4, 'Pemerintah', 2000),
('S36', NULL, 'Jl. Hamka, Air Tawar, Padang', 5, 'Pemerintah', 1500),
('S37', NULL, 'Jl. Hamka, Air Tawar, Padang', 6, 'Pemerintah', 1000),
('S38', NULL, 'Jl. Hamka, Air Tawar, Padang', 6, 'Pemerintah', 1000),
('S39', NULL, 'Jl. Pasie Kandang, Parupuk Tabing', 3, 'Swasta', 1500),
('S40', NULL, 'Jl. Khatib Sulaiman', 3, 'Swasta', 0),
('S41', NULL, 'Jl. Bunda Raya, Ulak Karang', 4, 'Swasta', 600),
('S42', NULL, 'Jl. Veteran Dalam, Banda Purus', 6, 'Swasta', 800),
('S43', NULL, 'Jl. Veteran', 5, 'Swasta ', 0),
('S44', NULL, 'Jl. M. Yamin', 0, 'Swasta', 0),
('S45', NULL, 'Jl. Pemuda', 0, 'Swasta', 0),
('S46', NULL, 'Jl. Juanda', 7, 'Swasts', 0),
('S47', NULL, 'Jl. Hamka, Air Tawar, Padang', 8, 'Swasta', 0),
('S48', NULL, 'Jl. Taman Siswa', 12, 'Swasts', 0),
('S49', NULL, 'Jl. Sudirman', 6, 'Swasta', 0),
('S50', NULL, 'Jl. MH. Thamrin', 8, 'Swasta', 0),
('S51', NULL, 'Jl. Permindo', 0, 'Swasta', 0),
('S52', NULL, 'Jl. Bundo Kanduang', 0, 'Swasta', 0),
('S53', NULL, 'Jl. Gereja', 8, 'Swasta', 0),
('S54', NULL, 'Jl. Hayam Wuruk', 0, 'Swasta', 0),
('S55', NULL, 'Jl. Gereja', 6, 'Swasta', 0),
('S56', NULL, 'Jl. Purus IV', 0, 'Swasta', 0),
('S57', NULL, 'Jl. HOS Cokroaminoto', 4, 'Swasts', 0),
('S58', NULL, 'Jl. Purus IV', 5, 'Pemerintah', 0),
('S59', NULL, 'Jl. Veteran', 4, 'Swasta', 0),
('S60', NULL, 'Komp. Pasir Putih RT. 3 RW 5 Kel Bungo Pasang', 6, 'Swasta', 600),
('S61', NULL, 'Jl. Khatib Sulaiman', 2, 'Pemerintah', 15000),
('S62', NULL, 'Jl. M. Yamin (Pasar Raya)', 4, 'Swasta', 2500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber_daya`
--

CREATE TABLE `sumber_daya` (
  `id_sumber_daya` varchar(25) NOT NULL,
  `nama_sumber_daya` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim_sar`
--

CREATE TABLE `tim_sar` (
  `id_tim_sar` varchar(25) NOT NULL,
  `nama_tim` varchar(45) DEFAULT NULL,
  `wilayah_tujuan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tim_sar`
--

INSERT INTO `tim_sar` (`id_tim_sar`, `nama_tim`, `wilayah_tujuan`) VALUES
('ej103', 'elang jawa', 'kuranji'),
('el203', 'elanglawang', 'lubeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indeks untuk tabel `detail_donatur`
--
ALTER TABLE `detail_donatur`
  ADD PRIMARY KEY (`id_donatur`,`id_bantuan`,`tgl_bantuan`),
  ADD KEY `id_bantuan_idx` (`id_bantuan`);

--
-- Indeks untuk tabel `detail_evakuasi`
--
ALTER TABLE `detail_evakuasi`
  ADD PRIMARY KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `id_evakuasi_idx` (`id_evakuasi`),
  ADD KEY `no_urut` (`no_urut`),
  ADD KEY `tgl_bencana` (`tgl_bencana`),
  ADD KEY `jenis_bencana` (`jenis_bencana`);

--
-- Indeks untuk tabel `detail_kebutuhan`
--
ALTER TABLE `detail_kebutuhan`
  ADD PRIMARY KEY (`id_bantuan`,`nik_korban`,`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `nik_korban_idx` (`nik_korban`),
  ADD KEY `id_bantuan` (`id_bantuan`),
  ADD KEY `tgl_bencana` (`tgl_bencana`),
  ADD KEY `no_urut` (`no_urut`),
  ADD KEY `jenis_bencana` (`jenis_bencana`,`tgl_bencana`,`no_urut`);

--
-- Indeks untuk tabel `detail_kerugian`
--
ALTER TABLE `detail_kerugian`
  ADD PRIMARY KEY (`id_kerugian`,`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `jenis_bencana_idx` (`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `id_kerugian` (`id_kerugian`);

--
-- Indeks untuk tabel `detail_korban`
--
ALTER TABLE `detail_korban`
  ADD PRIMARY KEY (`nik_korban`,`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `jenis_bencana_idx` (`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `nik_korban` (`nik_korban`);

--
-- Indeks untuk tabel `detail_shelter`
--
ALTER TABLE `detail_shelter`
  ADD PRIMARY KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `id_evakuasi_idx` (`id_evakuasi`),
  ADD KEY `id_shelter_idx` (`id_shelter`);

--
-- Indeks untuk tabel `detail_sumber_daya`
--
ALTER TABLE `detail_sumber_daya`
  ADD PRIMARY KEY (`id_tim_sar`,`id_sumber_daya`,`nik_korban`,`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `id_sumber_daya_idx` (`id_sumber_daya`),
  ADD KEY `nik_korban_idx` (`nik_korban`),
  ADD KEY `id_tim_sar` (`id_tim_sar`),
  ADD KEY `jenis_bencana` (`jenis_bencana`),
  ADD KEY `tgl_bencana` (`tgl_bencana`),
  ADD KEY `no_urut` (`no_urut`),
  ADD KEY `jenis_bencana_idx` (`jenis_bencana`,`tgl_bencana`,`no_urut`);

--
-- Indeks untuk tabel `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indeks untuk tabel `jalur_evakuasi`
--
ALTER TABLE `jalur_evakuasi`
  ADD PRIMARY KEY (`id_evakuasi`);

--
-- Indeks untuk tabel `kejadian_bencana`
--
ALTER TABLE `kejadian_bencana`
  ADD PRIMARY KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`);

--
-- Indeks untuk tabel `kerugian`
--
ALTER TABLE `kerugian`
  ADD PRIMARY KEY (`id_kerugian`);

--
-- Indeks untuk tabel `korban`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`nik_korban`);

--
-- Indeks untuk tabel `shelter`
--
ALTER TABLE `shelter`
  ADD PRIMARY KEY (`id_shelter`);

--
-- Indeks untuk tabel `sumber_daya`
--
ALTER TABLE `sumber_daya`
  ADD PRIMARY KEY (`id_sumber_daya`);

--
-- Indeks untuk tabel `tim_sar`
--
ALTER TABLE `tim_sar`
  ADD PRIMARY KEY (`id_tim_sar`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_donatur`
--
ALTER TABLE `detail_donatur`
  ADD CONSTRAINT `id_bantuan` FOREIGN KEY (`id_bantuan`) REFERENCES `bantuan` (`id_bantuan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_donatur` FOREIGN KEY (`id_donatur`) REFERENCES `donatur` (`id_donatur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `detail_evakuasi`
--
ALTER TABLE `detail_evakuasi`
  ADD CONSTRAINT `detail_evakuasi_ibfk_1` FOREIGN KEY (`id_evakuasi`) REFERENCES `jalur_evakuasi` (`id_evakuasi`),
  ADD CONSTRAINT `detail_evakuasi_ibfk_2` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`);

--
-- Ketidakleluasaan untuk tabel `detail_kebutuhan`
--
ALTER TABLE `detail_kebutuhan`
  ADD CONSTRAINT `detail_kebutuhan_ibfk_1` FOREIGN KEY (`nik_korban`) REFERENCES `korban` (`nik_korban`),
  ADD CONSTRAINT `detail_kebutuhan_ibfk_2` FOREIGN KEY (`id_bantuan`) REFERENCES `bantuan` (`id_bantuan`),
  ADD CONSTRAINT `detail_kebutuhan_ibfk_3` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`);

--
-- Ketidakleluasaan untuk tabel `detail_kerugian`
--
ALTER TABLE `detail_kerugian`
  ADD CONSTRAINT `detail_kerugian_ibfk_1` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`),
  ADD CONSTRAINT `id_kerugian` FOREIGN KEY (`id_kerugian`) REFERENCES `kerugian` (`id_kerugian`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `detail_korban`
--
ALTER TABLE `detail_korban`
  ADD CONSTRAINT `detail_korban_ibfk_1` FOREIGN KEY (`nik_korban`) REFERENCES `korban` (`nik_korban`),
  ADD CONSTRAINT `detail_korban_ibfk_2` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`);

--
-- Ketidakleluasaan untuk tabel `detail_shelter`
--
ALTER TABLE `detail_shelter`
  ADD CONSTRAINT `detail_shelter_ibfk_1` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`),
  ADD CONSTRAINT `id_evakuasi` FOREIGN KEY (`id_evakuasi`) REFERENCES `jalur_evakuasi` (`id_evakuasi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_shelter` FOREIGN KEY (`id_shelter`) REFERENCES `shelter` (`id_shelter`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `detail_sumber_daya`
--
ALTER TABLE `detail_sumber_daya`
  ADD CONSTRAINT `detail_sumber_daya_ibfk_1` FOREIGN KEY (`jenis_bencana`) REFERENCES `kejadian_bencana` (`jenis_bencana`),
  ADD CONSTRAINT `id_sumber_daya` FOREIGN KEY (`id_sumber_daya`) REFERENCES `sumber_daya` (`id_sumber_daya`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_tim_sar` FOREIGN KEY (`id_tim_sar`) REFERENCES `tim_sar` (`id_tim_sar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `jenis_bencana` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nik_korban` FOREIGN KEY (`nik_korban`) REFERENCES `korban` (`nik_korban`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
