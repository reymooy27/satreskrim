-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 08:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satreskrim`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kriminal`
--

CREATE TABLE `data_kriminal` (
  `id` int(11) NOT NULL,
  `pelapor` varchar(100) NOT NULL,
  `terlapor` varchar(100) NOT NULL,
  `tanggal_lapor` date NOT NULL DEFAULT current_timestamp(),
  `kategori` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `latitude` int(100) NOT NULL,
  `longitude` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kriminal`
--

INSERT INTO `data_kriminal` (`id`, `pelapor`, `terlapor`, `tanggal_lapor`, `kategori`, `keterangan`, `alamat`, `kelurahan`, `kecamatan`, `latitude`, `longitude`) VALUES
(1, 'Tes', 'Tes', '2023-04-04', 'Tes', 'Tes', 'Tes', 'Tes', 'Tes', 12, 19),
(2, 'Tes', 'Tes', '2023-04-04', 'Tes', 'Tes', 'Tes', 'Tes', 'Tes', 12, 19),
(17, 'tes', 'tes', '2023-04-05', 'tes', 'tes', 'tes', 'tes', 'tes', 76, 76),
(18, 'trsd', 'Test=', '2023-04-05', 'trd', 'trd', 'td', 'trd', 'trd', 65, 65),
(19, 'tf', 'trf7', '2023-04-05', 'yft', 'ytf', 'yft', 'ytf', 'ytf', 76, 76),
(20, 'uyg', 'uyg', '2023-04-05', 'uyg', 'uyg', 'uyg', 'uyg', 'uyg', 89, 88),
(21, 'yft', 'tf', '2023-04-05', 'yf', 'yfy', 'tfy', 'tfy', 'tf', 76, 76);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kejahatan`
--

CREATE TABLE `jenis_kejahatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_kejahatan`
--

INSERT INTO `jenis_kejahatan` (`id`, `nama`) VALUES
(1, 'Pemalakan'),
(2, 'Aniaya/Keroyok'),
(3, 'Penipuan'),
(4, 'Percabulan'),
(5, 'Pencurian'),
(6, 'Pembunuhan'),
(8, 'KDRT/Telantar'),
(10, 'Korupsi'),
(12, 'Illegal Loging'),
(13, 'Pornografi');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_masyarakat`
--

CREATE TABLE `laporan_masyarakat` (
  `id` int(11) NOT NULL,
  `pelapor` varchar(100) NOT NULL,
  `terlapor` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_masyarakat`
--

INSERT INTO `laporan_masyarakat` (`id`, `pelapor`, `terlapor`, `kategori`, `keterangan`, `alamat`, `tanggal`) VALUES
(13, 'tes', 'Tes', 'Pemalakan', 'tes', 'Tess', '2023-04-08 12:22:19'),
(17, 'tes', 'tes', 'Penipuan', 'tes', 'tes', '2023-04-08 15:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_kriminal`
--

CREATE TABLE `lokasi_kriminal` (
  `id` int(11) NOT NULL,
  `jenis_kejahatan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `latitude` decimal(9,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lokasi_kriminal`
--

INSERT INTO `lokasi_kriminal` (`id`, `jenis_kejahatan`, `alamat`, `kecamatan`, `kelurahan`, `latitude`, `longitude`) VALUES
(25, 'Pemalakan', 'Alamat', 'Kecamatan', 'Kelurahan', '-9.564973', '124.907249'),
(26, 'Pencurian', 'Alamat', 'Kecamatan', 'Kelurahan', '-9.563892', '124.907502'),
(29, 'Pencurian', 'tes', 'tes', 'tes', '-9.564310', '124.913719');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'admin', 'admin'),
(9, 'user', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kriminal`
--
ALTER TABLE `data_kriminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kejahatan`
--
ALTER TABLE `jenis_kejahatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_masyarakat`
--
ALTER TABLE `laporan_masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi_kriminal`
--
ALTER TABLE `lokasi_kriminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kriminal`
--
ALTER TABLE `data_kriminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jenis_kejahatan`
--
ALTER TABLE `jenis_kejahatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `laporan_masyarakat`
--
ALTER TABLE `laporan_masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lokasi_kriminal`
--
ALTER TABLE `lokasi_kriminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
