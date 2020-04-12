-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 10:27 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` varchar(25) NOT NULL,
  `jenis_bantuan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_donatur`
--

CREATE TABLE `detail_donatur` (
  `id_donatur` varchar(25) NOT NULL,
  `id_bantuan` varchar(25) NOT NULL,
  `jumlah_bantuan` int(11) DEFAULT NULL,
  `tgl_bantuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_evakuasi`
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
-- Table structure for table `detail_kebutuhan`
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
-- Table structure for table `detail_kerugian`
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
-- Table structure for table `detail_korban`
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
-- Table structure for table `detail_shelter`
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
-- Table structure for table `detail_sumber_daya`
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
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` varchar(25) NOT NULL,
  `nama_donatur` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jalur_evakuasi`
--

CREATE TABLE `jalur_evakuasi` (
  `id_evakuasi` varchar(25) NOT NULL,
  `geom_evakuasi` text,
  `nama_jalan` varchar(45) DEFAULT NULL,
  `arah_jalur` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kejadian_bencana`
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
-- Table structure for table `kerugian`
--

CREATE TABLE `kerugian` (
  `id_kerugian` varchar(25) NOT NULL,
  `jenis_kerugian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `korban`
--

CREATE TABLE `korban` (
  `nik_korban` varchar(25) NOT NULL,
  `nama_korban` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shelter`
--

CREATE TABLE `shelter` (
  `id_shelter` varchar(25) NOT NULL,
  `geom_shelter` text,
  `lokasi` varchar(45) DEFAULT NULL,
  `jumlah_lantai` int(11) DEFAULT NULL,
  `kepemilikan` varchar(45) DEFAULT NULL,
  `daya_tampung` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sumber_daya`
--

CREATE TABLE `sumber_daya` (
  `id_sumber_daya` varchar(25) NOT NULL,
  `nama_sumber_daya` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tim_sar`
--

CREATE TABLE `tim_sar` (
  `id_tim_sar` varchar(25) NOT NULL,
  `nama_tim` varchar(45) DEFAULT NULL,
  `wilayah_tujuan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `detail_donatur`
--
ALTER TABLE `detail_donatur`
  ADD PRIMARY KEY (`id_donatur`,`id_bantuan`,`tgl_bantuan`),
  ADD KEY `id_bantuan_idx` (`id_bantuan`);

--
-- Indexes for table `detail_evakuasi`
--
ALTER TABLE `detail_evakuasi`
  ADD PRIMARY KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `id_evakuasi_idx` (`id_evakuasi`),
  ADD KEY `no_urut` (`no_urut`),
  ADD KEY `tgl_bencana` (`tgl_bencana`),
  ADD KEY `jenis_bencana` (`jenis_bencana`);

--
-- Indexes for table `detail_kebutuhan`
--
ALTER TABLE `detail_kebutuhan`
  ADD PRIMARY KEY (`id_bantuan`,`nik_korban`,`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `nik_korban_idx` (`nik_korban`),
  ADD KEY `id_bantuan` (`id_bantuan`),
  ADD KEY `tgl_bencana` (`tgl_bencana`),
  ADD KEY `no_urut` (`no_urut`),
  ADD KEY `jenis_bencana` (`jenis_bencana`,`tgl_bencana`,`no_urut`);

--
-- Indexes for table `detail_kerugian`
--
ALTER TABLE `detail_kerugian`
  ADD PRIMARY KEY (`id_kerugian`,`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `jenis_bencana_idx` (`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `id_kerugian` (`id_kerugian`);

--
-- Indexes for table `detail_korban`
--
ALTER TABLE `detail_korban`
  ADD PRIMARY KEY (`nik_korban`,`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `jenis_bencana_idx` (`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `nik_korban` (`nik_korban`);

--
-- Indexes for table `detail_shelter`
--
ALTER TABLE `detail_shelter`
  ADD PRIMARY KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`),
  ADD KEY `id_evakuasi_idx` (`id_evakuasi`),
  ADD KEY `id_shelter_idx` (`id_shelter`);

--
-- Indexes for table `detail_sumber_daya`
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
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indexes for table `jalur_evakuasi`
--
ALTER TABLE `jalur_evakuasi`
  ADD PRIMARY KEY (`id_evakuasi`);

--
-- Indexes for table `kejadian_bencana`
--
ALTER TABLE `kejadian_bencana`
  ADD PRIMARY KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`);

--
-- Indexes for table `kerugian`
--
ALTER TABLE `kerugian`
  ADD PRIMARY KEY (`id_kerugian`);

--
-- Indexes for table `korban`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`nik_korban`);

--
-- Indexes for table `shelter`
--
ALTER TABLE `shelter`
  ADD PRIMARY KEY (`id_shelter`);

--
-- Indexes for table `sumber_daya`
--
ALTER TABLE `sumber_daya`
  ADD PRIMARY KEY (`id_sumber_daya`);

--
-- Indexes for table `tim_sar`
--
ALTER TABLE `tim_sar`
  ADD PRIMARY KEY (`id_tim_sar`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_donatur`
--
ALTER TABLE `detail_donatur`
  ADD CONSTRAINT `id_bantuan` FOREIGN KEY (`id_bantuan`) REFERENCES `bantuan` (`id_bantuan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_donatur` FOREIGN KEY (`id_donatur`) REFERENCES `donatur` (`id_donatur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_evakuasi`
--
ALTER TABLE `detail_evakuasi`
  ADD CONSTRAINT `detail_evakuasi_ibfk_1` FOREIGN KEY (`id_evakuasi`) REFERENCES `jalur_evakuasi` (`id_evakuasi`),
  ADD CONSTRAINT `detail_evakuasi_ibfk_2` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`);

--
-- Constraints for table `detail_kebutuhan`
--
ALTER TABLE `detail_kebutuhan`
  ADD CONSTRAINT `detail_kebutuhan_ibfk_1` FOREIGN KEY (`nik_korban`) REFERENCES `korban` (`nik_korban`),
  ADD CONSTRAINT `detail_kebutuhan_ibfk_2` FOREIGN KEY (`id_bantuan`) REFERENCES `bantuan` (`id_bantuan`),
  ADD CONSTRAINT `detail_kebutuhan_ibfk_3` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`);

--
-- Constraints for table `detail_kerugian`
--
ALTER TABLE `detail_kerugian`
  ADD CONSTRAINT `detail_kerugian_ibfk_1` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`),
  ADD CONSTRAINT `id_kerugian` FOREIGN KEY (`id_kerugian`) REFERENCES `kerugian` (`id_kerugian`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_korban`
--
ALTER TABLE `detail_korban`
  ADD CONSTRAINT `detail_korban_ibfk_1` FOREIGN KEY (`nik_korban`) REFERENCES `korban` (`nik_korban`),
  ADD CONSTRAINT `detail_korban_ibfk_2` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`);

--
-- Constraints for table `detail_shelter`
--
ALTER TABLE `detail_shelter`
  ADD CONSTRAINT `detail_shelter_ibfk_1` FOREIGN KEY (`jenis_bencana`,`tgl_bencana`,`no_urut`) REFERENCES `kejadian_bencana` (`jenis_bencana`, `tgl_bencana`, `no_urut`),
  ADD CONSTRAINT `id_evakuasi` FOREIGN KEY (`id_evakuasi`) REFERENCES `jalur_evakuasi` (`id_evakuasi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_shelter` FOREIGN KEY (`id_shelter`) REFERENCES `shelter` (`id_shelter`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_sumber_daya`
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
