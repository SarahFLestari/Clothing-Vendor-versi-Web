-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2017 at 01:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impal`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarBahan`
--

CREATE TABLE `daftarBahan` (
  `idBahan` varchar(5) NOT NULL,
  `namaBahan` varchar(15) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarBahan`
--

INSERT INTO `daftarBahan` (`idBahan`, `namaBahan`, `harga`) VALUES
('B0001', 'Katun', 80000),
('B0002', 'Rayon', 60000),
('B0003', 'Denim', 50000),
('B0004', 'Combad', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `daftarJasa`
--

CREATE TABLE `daftarJasa` (
  `idJasa` varchar(5) NOT NULL,
  `namaJasa` varchar(15) NOT NULL,
  `tarif` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarJasa`
--

INSERT INTO `daftarJasa` (`idJasa`, `namaJasa`, `tarif`) VALUES
('J0001', 'Jahit', 10000),
('J0002', 'Bordir', 9000),
('J0003', 'Sablon', 8000),
('J0004', 'Neci', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `id_petugas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`username`, `password`, `id_petugas`) VALUES
('sarsar', 'petugas', 'sarah');

-- --------------------------------------------------------

--
-- Table structure for table `preorder`
--

CREATE TABLE `preorder` (
  `id_preorder` int(11) NOT NULL,
  `email` varchar(15) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `namaBahan` varchar(15) NOT NULL,
  `namaJasa` varchar(15) NOT NULL,
  `jumlahBaju` int(11) NOT NULL,
  `totalHarga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preorder`
--

INSERT INTO `preorder` (`id_preorder`, `email`, `nama`, `namaBahan`, `namaJasa`, `jumlahBaju`, `totalHarga`) VALUES
(3, 'sarahflestari@i', 'Sarah', 'Rayon', 'Jahit', 50, 'Rp 3500000,00'),
(4, 'sarahfauziahles', 'Sarah Fauziah L', 'Katun', 'Jahit', 0, 'Rp 90000,00'),
(5, 'sarahflestari@i', 'sarah cantik', 'Denim', 'Sablon', 80, 'Rp 58000,00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarBahan`
--
ALTER TABLE `daftarBahan`
  ADD PRIMARY KEY (`idBahan`),
  ADD UNIQUE KEY `namaBahan` (`namaBahan`);

--
-- Indexes for table `daftarJasa`
--
ALTER TABLE `daftarJasa`
  ADD PRIMARY KEY (`idJasa`),
  ADD UNIQUE KEY `namaJasa` (`namaJasa`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `preorder`
--
ALTER TABLE `preorder`
  ADD PRIMARY KEY (`id_preorder`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preorder`
--
ALTER TABLE `preorder`
  MODIFY `id_preorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
