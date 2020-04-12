-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2020 pada 18.23
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

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `jenis_bantuan`) VALUES
('B01', 'Makanan'),
('B02', 'Minuman'),
('B03', 'Pakaian'),
('B04', 'Jasa'),
('B05', 'Tempat tinggal');

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

--
-- Dumping data untuk tabel `detail_kebutuhan`
--

INSERT INTO `detail_kebutuhan` (`id_bantuan`, `nik_korban`, `jenis_bencana`, `tgl_bencana`, `no_urut`, `tgl_memberikan`) VALUES
('B01', '1371062754000001', 'banjir', '2016-04-12', 305, '2020-04-23'),
('B02', '1371062754000002', 'banjir', '2016-04-12', 305, '2020-04-15'),
('B03', '1371062754000003', 'gempabumi', '2016-03-02', 201, '2020-04-06'),
('B04', '1371062754000016', 'gempabumi', '2016-03-02', 201, '2019-12-23'),
('B05', '1371062754000004', 'kekeringan', '2019-09-22', 601, '2019-10-14'),
('B05', '1371062754000011', 'kebakaranhutan', '2019-09-17', 502, '2020-04-30'),
('B05', '1371062754000023', 'kebakaranhutan', '2019-09-17', 502, '2020-04-15');

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

--
-- Dumping data untuk tabel `detail_kerugian`
--

INSERT INTO `detail_kerugian` (`id_kerugian`, `jenis_bencana`, `tgl_bencana`, `no_urut`, `total_kerugian`) VALUES
('K01', 'banjir', '2016-04-12', 305, 5000000),
('K01', 'kekeringan', '2019-09-22', 602, 450000),
('K02', 'gempabumi', '2016-03-02', 201, 7000000),
('K02', 'kebakaranhutan', '2019-09-17', 502, 1000000),
('K02', 'tanahlongsor', '2018-02-14', 408, 270000),
('K03', 'gempabumi', '2016-03-02', 201, 10000000),
('K03', 'kekeringan', '2019-09-22', 601, 270000);

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
('1371062754000001', 'banjir', '2016-04-12', 305, 'luka luka'),
('1371062754000002', 'gempabumi', '2016-03-02', 201, 'meninggal'),
('1371062754000003', 'kekeringan', '2019-09-22', 601, 'selamat'),
('1371062754000004', 'kebakaranhutan', '2019-09-17', 502, 'luka ringan'),
('1371062754000005', 'kebakaranhutan', '2019-09-17', 502, 'selamat'),
('1371062754000006', 'gempabumi', '2016-03-02', 201, 'luka ringan');

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

--
-- Dumping data untuk tabel `detail_sumber_daya`
--

INSERT INTO `detail_sumber_daya` (`id_tim_sar`, `id_sumber_daya`, `nik_korban`, `jenis_bencana`, `tgl_bencana`, `no_urut`, `jumlah_sumber_daya`) VALUES
('T01', 'SD01', '1371062754000001', 'banjir', '2016-04-12', 305, 5),
('T01', 'SD03', '1371062754000003', 'kebakaranhutan', '2019-09-17', 502, 2),
('T01', 'SD04', '1371062754000004', 'kebakaranhutan', '2019-09-17', 502, 12),
('T02', 'SD02', '1371062754000002', 'gempabumi', '2016-03-02', 201, 8),
('T02', 'SD05', '1371062754000005', 'kekeringan', '2019-09-22', 601, 6);

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
  `keterangan_tempat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kejadian_bencana`
--

INSERT INTO `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`, `keterangan_tempat`) VALUES
('banjir', '2016-04-12', 305, '{\"name\":\"Lubuk Begalung\",\"lat\":-0.9757632,\"long\":100.4003703}'),
('banjir', '2016-05-27', 312, '{\"name\":\"Lubuk Begalung\",\"lat\":-0.9757632,\"long\":100.4003703}'),
('banjir', '2016-08-01', 314, '{\"name\":\"Nanggalo\",\"lat\":-0.902515,\"long\":100.368382}'),
('banjir', '2016-08-02', 315, '{\"name\":\"Kuranji\",\"lat\":-0.9006999,\"long\":100.4256024}'),
('banjir', '2016-08-24', 321, '{\"name\":\"Lubuk Begalung\",\"lat\":-0.9757632,\"long\":100.4003703}'),
('banjir', '2017-02-08', 316, '{\"name\":\"Kuranji\",\"lat\":-0.9006999,\"long\":100.4256024}'),
('banjir', '2017-03-11', 301, '{\"name\":\"Lubuk Begalung\",\"lat\":-0.9757632,\"long\":100.4003703}'),
('banjir', '2017-05-19', 302, '{\"name\":\"Padang Utara\",\"lat\":-0.904875,\"long\":100.348421}'),
('banjir', '2017-05-31', 303, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('banjir', '2017-05-31', 306, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('banjir', '2017-07-31', 307, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('banjir', '2017-08-11', 313, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('banjir', '2017-08-14', 304, '{\"name\":\"Kuranji\",\"lat\":-0.9006999,\"long\":100.4256024}'),
('banjir', '2017-09-09', 309, '{\"name\":\"Pauh\",\"lat\":-0.879957,\"long\":100.500678}'),
('banjir', '2017-11-27', 310, '{\"name\":\"Bungus teluk kabung\",\"lat\":-1.075426,\"long\":0.411442}'),
('banjir', '2017-11-27', 311, '{\"name\":\"Nanggalo\",\"lat\":-0.902515,\"long\":100.368382}'),
('banjir', '2018-02-14', 317, '{\"name\":\"Kuranji\",\"lat\":-0.9006999,\"long\":100.4256024}'),
('banjir', '2018-02-14', 318, '{\"name\":\"Lubuk Kilangan\",\"lat\":-0.9608858,\"long\":100.4903254}'),
('banjir', '2018-02-14', 319, '{\"name\":\"Lubuk Begalung\",\"lat\":-0.9757632,\"long\":100.4003703}'),
('banjir', '2018-02-14', 320, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('banjir', '2019-03-09', 308, '{\"name\":\"Padang Barat\",\"lat\":-0.944676,\"long\":100.355433}'),
('gempabumi', '2016-03-02', 201, '{\"name\":\"Padang Barat\",\"lat\":-0.944676,\"long\":100.355433}'),
('kebakaranhutan', '2019-09-17', 502, '{\"name\":\"Koto Tangah\",\"lat\":-0.840152,\"long\":100.400777}'),
('kebakaranhutan', '2019-09-17', 503, '{\"name\":\"Padang Timur\",\"lat\":-0.942593,\"long\":100.378772}'),
('kebakaranhutan', '2019-09-18', 501, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('kekeringan', '2019-09-22', 601, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('kekeringan', '2019-09-22', 602, '{\"name\":\"Lubuk Begalung\",\"lat\":-0.9757632,\"long\":100.4003703}'),
('tanahlongsor', '2016-05-21', 409, '{\"name\":\"Lubuk Kilangan\",\"lat\":-0.9608858,\"long\":100.4903254}'),
('tanahlongsor', '2016-05-21', 413, '{\"name\":\"Lubuk Kilangan\",\"lat\":-0.9608858,\"long\":100.4903254}'),
('tanahlongsor', '2016-07-16', 414, '{\"name\":\"Lubuk Begalung\",\"lat\":-0.9757632,\"long\":100.4003703}'),
('tanahlongsor', '2017-02-19', 416, '{\"name\":\"Lubuk Kilangan\",\"lat\":-0.9608858,\"long\":100.4903254}'),
('tanahlongsor', '2017-05-05', 402, '{\"name\":\"Lubuk Kilangan\",\"lat\":-0.9608858,\"long\":100.4903254}'),
('tanahlongsor', '2017-05-19', 404, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('tanahlongsor', '2017-05-20', 403, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('tanahlongsor', '2017-05-20', 412, '{\"name\":\"Lubuk Kilangan\",\"lat\":-0.9608858,\"long\":100.4903254}'),
('tanahlongsor', '2017-06-07', 410, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('tanahlongsor', '2017-06-11', 405, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('tanahlongsor', '2017-07-29', 411, '{\"name\":\"Lubuk Kilangan\",\"lat\":-0.9608858,\"long\":100.4903254}'),
('tanahlongsor', '2017-08-07', 415, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('tanahlongsor', '2017-12-02', 407, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('tanahlongsor', '2017-12-04', 406, '{\"name\":\"Lubuk Begalung\",\"lat\":-0.9757632,\"long\":100.4003703}'),
('tanahlongsor', '2018-02-14', 408, '{\"name\":\"Padang Selatan\",\"lat\":-0.990109,\"long\":100.370233}'),
('tanahlongsor', '2018-02-19', 401, '{\"name\":\"Pauh\",\"lat\":-0.879957,\"long\":100.500678}');

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
('K01', 'Tingkat 1'),
('K02', 'Tingkat 2'),
('K03', 'Tingkat 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `korban`
--

CREATE TABLE `korban` (
  `nik_korban` varchar(25) NOT NULL,
  `nama_korban` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Kesalahan membaca data untuk tabel tbpbd.korban: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `tbpbd`.`korban`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

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
  `wilayah_tujuan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tim_sar`
--

INSERT INTO `tim_sar` (`id_tim_sar`, `nama_tim`, `wilayah_tujuan`) VALUES
('T01', 'Merdeka', '{\"name\":\"kuranji\",\"lat\":-0.9006999,\"long\":100.4256024}'),
('T02', 'Mati', '{\"name\":\"Nanggalo\",\"lat\":-0.902515,\"long\":100.368382}');

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
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

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
