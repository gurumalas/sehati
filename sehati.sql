-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 06:19 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sehati`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` char(20) NOT NULL,
  `nama` char(30) DEFAULT NULL,
  `password` char(100) DEFAULT NULL,
  `foto` longtext,
  `level` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `nama`, `password`, `foto`, `level`) VALUES
('admin', 'duan', '21232f297a57a5a743894a0e4a801fc3', 'baju.png', 's');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `kd_transaksi` char(11) NOT NULL,
  `kd_invoice` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `kd_produk` char(30) DEFAULT NULL,
  `totalbyar` char(20) DEFAULT NULL,
  `status` char(10) DEFAULT NULL,
  `quantity` char(30) DEFAULT NULL,
  `harga` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`kd_transaksi`, `kd_invoice`, `nik`, `tgl`, `kd_produk`, `totalbyar`, `status`, `quantity`, `harga`) VALUES
('T00001', 1, 0, '2019-08-05', '5467', '195', '0', '3', '65'),
('T00001', 2, 0, '2019-08-05', '6666666666', '30', '0', '3', '10'),
('T00001', 3, 1, '2019-08-05', '5467', '195', '0', '3', '65'),
('T00001', 4, 1, '2019-08-05', '6666666666', '30', '0', '3', '10'),
('T00002', 5, 1, '2019-08-05', '5467', '195', '0', '3', '65'),
('T00002', 6, 1, '2019-08-05', '6666666666', '30', '0', '3', '10'),
('T00003', 7, 1, '2019-08-05', '5467', '195', '0', '3', '65'),
('T00003', 8, 1, '2019-08-05', '6666666666', '30', '0', '3', '10');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `kd_jenis` char(20) NOT NULL,
  `n_jenis` char(20) NOT NULL,
  `deskripsi` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`kd_jenis`, `n_jenis`, `deskripsi`) VALUES
('1', 'obat keras', NULL),
('2', 'Obat Bebas', 'Bebas di pasar'),
('3', 'aaaaa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `nik` varchar(30) NOT NULL,
  `n_member` char(60) DEFAULT NULL,
  `jk` int(4) DEFAULT NULL,
  `hp` char(15) DEFAULT NULL,
  `email` char(40) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `kodepos` char(9) DEFAULT NULL,
  `alamat` longtext,
  `fotomember` longtext,
  `password` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`nik`, `n_member`, `jk`, `hp`, `email`, `kota`, `kodepos`, `alamat`, `fotomember`, `password`) VALUES
('1', 'duan', 1, '', 'akhmadriduan.umm.ac.id', '', '', '', 'giphy.gif', 'c060ecbf17fdef81cf4c25b26fdc97da'),
('2', '', 1, '', '', '', '', '', 'si cantik.jpg', ''),
('3', '', 1, '', '', '', '', '', 'si cantik.jpg', ''),
('7', '', 1, '', '', '', '', '', 'AADKfPE.jpg', ''),
('9', '', 1, '', '', '', '', '', 'merawat kuku.png', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kd_produk` char(20) NOT NULL,
  `nama` char(30) NOT NULL,
  `foto_file` varchar(99) NOT NULL,
  `kd_jenis` char(20) NOT NULL,
  `harga` char(20) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kd_produk`, `nama`, `foto_file`, `kd_jenis`, `harga`, `deskripsi`, `quantity`) VALUES
('5467', 'cicak', 'botol.gif', '1', '65', '2222', 30),
('6666666666', 'aku', 'ulat gigi.jpg', '1', '10', 'Apapun caranya siap dilakukan ,mulai dari menjaga pola makan hingga mengatur aktifitas sehari-hari. \r\nNamun, banyak orang yang ingin menurunkan berat badan dengan cepat dan ingin cepat turun berat badan dalam waktu yang relatif singkat', 49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`kd_invoice`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`kd_jenis`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `kd_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;