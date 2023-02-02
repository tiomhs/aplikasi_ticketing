-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2023 at 11:43 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertDataClub` (IN `in_id` INT, IN `in_NamaClub` VARCHAR(10))   begin
insert into club values(in_id, in_NamaClub);end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `club` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `club`) VALUES
(1, 'Madurd'),
(2, 'barca'),
(3, 'ipul'),
(4, 'celsi'),
(5, 'celsi'),
(6, 'ok'),
(7, 'ok'),
(8, 'oh'),
(9, 'oh'),
(10, 'muyuk'),
(11, 'muyuk');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'petugas'),
(3, 'penumpang');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `kode_pemesanan` varchar(32) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `tempat_pemesanan` varchar(32) DEFAULT NULL,
  `id_penumpang` int(11) DEFAULT NULL,
  `kode_kursi` varchar(16) DEFAULT NULL,
  `id_rute` int(11) DEFAULT NULL,
  `tujuan` varchar(32) DEFAULT NULL,
  `tanggal_berangkat` date DEFAULT NULL,
  `jam_checkin` time DEFAULT NULL,
  `jam_berangkat` time DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `tanggal_pemesanan`, `tempat_pemesanan`, `id_penumpang`, `kode_kursi`, `id_rute`, `tujuan`, `tanggal_berangkat`, `jam_checkin`, `jam_berangkat`, `total_bayar`, `id_petugas`) VALUES
(1, '001', '2023-01-24', 'smkn 1 denpasar', 1, '001', 1, 'Pelabuhan Gilimanuk', '2023-01-31', '12:32:47', '15:00:00', 500000, 1),
(2, '002', '2023-01-29', 'Bali', 5, '002', 4, 'London', '2023-01-30', '17:58:54', '17:58:54', 5000000, 1),
(3, '003', '2023-01-29', 'Bali', 4, '004', 4, 'London', '2023-01-30', '17:58:54', '17:58:54', 100000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama_penumpang` varchar(32) DEFAULT NULL,
  `alamat_penumpang` varchar(32) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('pria','wanita') DEFAULT NULL,
  `telefone` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `username`, `password`, `nama_penumpang`, `alamat_penumpang`, `tanggal_lahir`, `jenis_kelamin`, `telefone`) VALUES
(1, 'penumpang1', 'password', 'penumpang satu', 'jalan penumpang satu', '2023-01-24', 'pria', '62123456789'),
(2, 'Tio', 'tio123', 'Tio', 'oh', '2023-01-04', 'pria', '081281928192'),
(3, 'tio', 'tio', 'tio', NULL, '2023-01-19', 'pria', '018928192'),
(4, 'yuda', 'yuda', 'yuda', 'rumah', '2023-01-07', 'wanita', '09129102910'),
(5, 'ridho', 'ridho', 'ridho', 'ayuani', '2023-01-01', 'pria', '099123121321');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama_petugas` varchar(32) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `id_level`) VALUES
(1, 'petugas1', 'password', 'petugas satu', 1),
(2, 'petugas2', 'password', 'petugas dua', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(11) NOT NULL,
  `tujuan` varchar(32) DEFAULT NULL,
  `rute_awal` varchar(32) DEFAULT NULL,
  `rute_akhir` varchar(32) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `id_transportasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `tujuan`, `rute_awal`, `rute_akhir`, `harga`, `id_transportasi`) VALUES
(1, 'Pelabuhan Gilimanuk', 'Denpasar', 'Gilimanuk', 500000, 1),
(2, 'Bandara Ngurah Rai', 'Denpasar', 'Badung', 700000, 1),
(3, 'monkey forest', 'jembrana', 'ubud monkey forest', 150000, 1),
(4, 'London', 'Bandara Ngurah Rai', 'London Punya Bandara', 2500000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `id_transportasi` int(11) NOT NULL,
  `kode` varchar(32) DEFAULT NULL,
  `jumlah_kursi` int(11) DEFAULT NULL,
  `keterangan` text,
  `id_type_transportasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportasi`
--

INSERT INTO `transportasi` (`id_transportasi`, `kode`, `jumlah_kursi`, `keterangan`, `id_type_transportasi`) VALUES
(1, '001', 32, 'transportasi dengan kualitas papan atas', 1),
(2, '002', 34, 'kereta api haha', 2);

-- --------------------------------------------------------

--
-- Table structure for table `type_transportasi`
--

CREATE TABLE `type_transportasi` (
  `id_type_transportasi` int(11) NOT NULL,
  `nama_type` varchar(32) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_transportasi`
--

INSERT INTO `type_transportasi` (`id_type_transportasi`, `nama_type`, `keterangan`) VALUES
(1, 'pesawat', 'tipe transportasi papan atas'),
(2, 'kereta', 'perjalanan darat yang indah dan cepat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_penumpang` (`id_penumpang`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD KEY `id_transportasi` (`id_transportasi`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id_transportasi`),
  ADD KEY `id_type_transportasi` (`id_type_transportasi`);

--
-- Indexes for table `type_transportasi`
--
ALTER TABLE `type_transportasi`
  ADD PRIMARY KEY (`id_type_transportasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_penumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id_transportasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_transportasi`
--
ALTER TABLE `type_transportasi`
  MODIFY `id_type_transportasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_penumpang`) REFERENCES `penumpang` (`id_penumpang`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`),
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);

--
-- Constraints for table `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`id_transportasi`) REFERENCES `transportasi` (`id_transportasi`);

--
-- Constraints for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD CONSTRAINT `transportasi_ibfk_1` FOREIGN KEY (`id_type_transportasi`) REFERENCES `type_transportasi` (`id_type_transportasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
