-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2020 pada 21.15
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasepbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` varchar(25) NOT NULL,
  `jenis_bantuan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `jenis_bantuan`) VALUES
('B01', 'Beras'),
('B02', 'Pakaian'),
('B03', 'Selimut'),
('B04', 'Mie Instan'),
('B05', 'Baju bayi'),
('B06', 'Beras');

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

--
-- Dumping data untuk tabel `detail_donatur`
--

INSERT INTO `detail_donatur` (`id_donatur`, `id_bantuan`, `jumlah_bantuan`, `tgl_bantuan`) VALUES
('D01', 'B01', 3, '2020-04-02'),
('D01', 'B01', 2, '2020-04-04'),
('D02', 'B03', 1, '2020-04-03'),
('D05', 'B06', 5, '2020-04-25');

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

--
-- Dumping data untuk tabel `detail_kebutuhan`
--

INSERT INTO `detail_kebutuhan` (`id_bantuan`, `nik_korban`, `jenis_bencana`, `tgl_bencana`, `no_urut`, `tgl_memberikan`) VALUES
('B01', '0123456178181', 'Banjir', '2020-04-15', 0, '2020-04-30');

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

--
-- Dumping data untuk tabel `detail_korban`
--

INSERT INTO `detail_korban` (`nik_korban`, `jenis_bencana`, `tgl_bencana`, `no_urut`, `status_korban`) VALUES
('0123456178181', 'Banjir', '2020-04-15', 0, 'sehat');

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

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `nama_donatur`) VALUES
('D01', 'Asiba Ratono'),
('D02', 'Megawati'),
('D05', 'Fadli');

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

--
-- Dumping data untuk tabel `kejadian_bencana`
--

INSERT INTO `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`, `geom`, `keterangan_tempat`) VALUES
('2', '2020-04-01', 0, NULL, NULL),
('Banjir', '2020-04-15', 0, NULL, NULL),
('Gempa', '2020-04-21', 1, NULL, NULL),
('Gempa', '2020-04-22', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerugian`
--

CREATE TABLE `kerugian` (
  `id_kerugian` varchar(25) NOT NULL,
  `jenis_kerugian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('0123456178181', 'Atilas'),
('0982733575375', 'radit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `location_sumbererdaya`
--

CREATE TABLE `location_sumbererdaya` (
  `id` int(11) NOT NULL,
  `Instansi` varchar(50) NOT NULL,
  `kec` varchar(255) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lon` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `location_sumbererdaya`
--

INSERT INTO `location_sumbererdaya` (`id`, `Instansi`, `kec`, `lat`, `lon`) VALUES
(1, 'Kodim 0312 Padang', 'Kec.Padang Timur', -0.954942, 100.360710),
(2, 'Polresta Padang', 'Kec.Padang Barat', -0.951175, 100.360542),
(3, 'Lanud Sutan Sjahril', 'Kec.Koto Tangah', -0.873438, 100.337402),
(4, 'RAPI Sumatera Barat', 'Kec. Lubuk Kalangan', -0.947565, 100.235519),
(5, 'Dinas Perhubungan Kota Padang', 'Kec.Bungus Teluk Kabung', -0.872900, 100.276268),
(6, 'Dinas Pemadam Kebakaran Padang', 'Kec.Padang Timur', -0.933184, 100.352905),
(7, 'Dinas PUPR Kota Padang', 'Kec.Padang Barat', -0.934207, 100.346809),
(8, 'BPBD Kota Padang', 'Kec.Kuranji', -0.936424, 100.390587),
(9, 'Dinas Sosial Kota Padang', 'Kec. Padang barat', -0.932886, 100.351196),
(10, 'Lantamal II', 'Kec.padang Selatan', -1.003661, 100.356865),
(11, 'PMI Kota Padang', 'Kec.Padang Timur', -0.949760, 100.356972),
(12, 'Dinas Kesehatan Kota Padang', 'Kec.Koto Tangah', -0.874858, 100.378410),
(13, 'Perusahaan Air Minum Daerah Kota Padang', 'Kec.Padang Timur', -0.874751, 100.352211),
(14, 'RSUD dr.Rasidin', 'Kec.Kuranji', -0.879645, 100.385826);

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

--
-- Dumping data untuk tabel `sumber_daya`
--

INSERT INTO `sumber_daya` (`id_sumber_daya`, `nama_sumber_daya`) VALUES
('-daya', 'Mobil Damkar'),
('SD01', 'Tenda Posko'),
('SD02', 'Tenda Pengungsi'),
('SD03', 'Mobil Rescue'),
('SD04', 'Truk Personel'),
('SD05', 'Perahu Karet'),
('SD06', 'Handy Talkie'),
('SD07', 'Ssb'),
('SD08', 'Chainsaw'),
('SD09', 'Karmantel'),
('SD10', 'Perlengkapan Mountennering'),
('SD100', 'rig'),
('SD101', 'bahan habis pakai'),
('SD102', 'mpasi'),
('SD103', 'malathion'),
('SD104', 'truck tangki'),
('SD105', 'mobil pick up'),
('SD106', 'tedmon fibre'),
('SD107', 'mobil ambulance'),
('SD108', 'minor set'),
('SD109', 'collar neck'),
('SD11', 'Mobil SAR'),
('SD110', 'alat bantu patah tulang'),
('SD111', 'appar'),
('SD12', 'Mobil Ranger'),
('SD13', 'Mobil Serbaguna'),
('SD14', 'Sepeda Motor Trail'),
('SD15', 'Perahu Cano'),
('SD16', 'Tandu'),
('SD17', 'Flashlight'),
('SD18', 'Mobil Toyoto Single Cabin'),
('SD19', 'Mobil Mitshubisi Strada'),
('SD20', 'Sepeda Motor'),
('SD21', 'Tenda Pleton'),
('SD22', 'Tenda Dapur Lapangan'),
('SD23', 'Perahu Karet'),
('SD24', 'Velbed'),
('SD25', 'Tenda Komunikasi'),
('SD26', 'Tenda Posko'),
('SD27', 'Mobil Rescue'),
('SD28', 'Radio Rig'),
('SD29', 'Repearter'),
('SD30', 'Harness'),
('SD31', 'Full Body Harness'),
('SD32', 'Carabiner'),
('SD33', 'Descender'),
('SD34', 'Karmantel'),
('SD35', 'Auto Stop'),
('SD36', 'Grigl'),
('SD37', 'Webbinng'),
('SD38', 'Pulley'),
('SD39', 'Helm'),
('SD40', 'P3k'),
('SD41', 'kapal patroli 170 pk'),
('SD42', 'kapal patroli 85 pk'),
('SD43', 'truck crane'),
('SD44', 'mobil operasional'),
('SD45', 'mobil damkar 01'),
('SD46', 'mobil damkar 02'),
('SD47', 'mobil damkar 03'),
('SD48', 'mobil damkar 04'),
('SD49', 'mobil damkar 05'),
('SD50', 'mobil damkar 06'),
('SD51', 'mobil damkar 07'),
('SD52', 'mobil damkar 08'),
('SD53', 'mobil damkar 09'),
('SD54', 'mobil damkar 10'),
('SD55', 'mobil damkar 11'),
('SD56', 'mobil damkar 12'),
('SD57', 'mobil damkar 13'),
('SD58', 'mobil damkar 14'),
('SD59', 'mobil damkar 15'),
('SD65', 'mobil damkar 16'),
('SD66', 'Escavator'),
('SD67', 'Buldozer'),
('SD68', 'Mobil Ranger'),
('SD69', 'Truck Serbaguna'),
('SD74', 'mobil rescue'),
('SD75', 'mobil serba guna'),
('SD76', 'mobil dunlap'),
('SD78', 'tenda keluarga'),
('SD85', 'mobil operasional'),
('SD90', 'isi lengkap'),
('SD91', 'pelampung'),
('SD92', 'tenda same derby'),
('SD93', 'genset portable'),
('SD94', 'mobil ambulance'),
('SD95', 'minor surgery'),
('SD96', 'stetoskop'),
('SD97', 'velbed'),
('SD98', 'genset portable');

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
-- Indeks untuk tabel `location_sumbererdaya`
--
ALTER TABLE `location_sumbererdaya`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `location_sumbererdaya`
--
ALTER TABLE `location_sumbererdaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
