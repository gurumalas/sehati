-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 03:22 PM
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
  `harga` char(12) DEFAULT NULL,
  `ongkir` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`kd_transaksi`, `kd_invoice`, `nik`, `tgl`, `kd_produk`, `totalbyar`, `status`, `quantity`, `harga`, `ongkir`) VALUES
('T00001', 1, 0, '2019-09-22', '5467', '975', '0', '15', '65', NULL),
('T00001', 2, 0, '2019-09-22', '9', '170', '0', '17', '10', NULL),
('T00002', 3, 0, '2019-09-22', '5467', '975', '0', '15', '65', NULL),
('T00002', 4, 0, '2019-09-22', '9', '170', '0', '17', '10', NULL),
('T00003', 5, 0, '2019-09-22', '5467', '975', '0', '15', '65', NULL),
('T00003', 6, 0, '2019-09-22', '9', '170', '0', '17', '10', NULL),
('T00004', 7, 0, '2019-09-22', '5467', '975', '0', '15', '65', NULL),
('T00004', 8, 0, '2019-09-22', '9', '170', '0', '17', '10', NULL),
('T00005', 9, 0, '2019-09-22', '5467', '975', '0', '15', '65', NULL),
('T00005', 10, 0, '2019-09-22', '9', '170', '0', '17', '10', NULL),
('T00006', 11, 0, '2019-09-22', '5467', '975', '0', '15', '65', NULL),
('T00006', 12, 0, '2019-09-22', '9', '170', '0', '17', '10', NULL),
('T00007', 13, 0, '2019-09-22', '5467', '455', '0', '7', '65', NULL),
('T00008', 14, 0, '2019-09-22', '5467', '455', '0', '7', '65', NULL),
('T00009', 15, 0, '2019-09-22', '5467', '455', '0', '7', '65', NULL),
('T00010', 16, 0, '2019-09-22', '5467', '455', '0', '7', '65', NULL),
('T00011', 17, 0, '2019-09-22', '5467', '520', '0', '8', '65', NULL),
('T00012', 18, 0, '2019-09-22', '5467', '260', '0', '4', '65', NULL),
('T00013', 19, 0, '2019-09-22', '5467', '260', '0', '4', '65', NULL),
('T00014', 20, 0, '2019-09-22', '5467', '910', '0', '14', '65', NULL);

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
('1', 'riduan', 1, '77778', 'akhmadriduan.umm.ac.id', 'BJB', '897', 'coba', 'user-lg.jpg', '827ccb0eea8a706c4c34a16891f84e7b'),
('123', 'muhammad iqbal', 1, '082148352769', 'rendy.septian98@yahoo.com', 'banjarbaru', '70724', 'aaaa', '8138193836_64d71b9205.jpg', '60496a1f3d8615e89c38575c39a0aaa7'),
('1234', 'paijo', 1, '0808192709', '', 'banjar', '70724', 'kjnbUDAfd', '3206264-pubg+artwork_.jpg', '827ccb0eea8a706c4c34a16891f84e7b'),
('4', 'rrqwrew', 1, '98989', '', '89787', '987987', '897987', 'bjhabibi.jpg', 'c4ca4238a0b923820dcc509a6f75849b'),
('7', '', 1, '', '', '', '', '', 'AADKfPE.jpg', ''),
('777', '87896', 1, '908908', '', '09890', '09809', '9080', 'sawit.jpg', 'c4ca4238a0b923820dcc509a6f75849b'),
('9', 'Nanda', 0, '', '', '', '', '', 'merawat kuku.png', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_onkir` int(11) NOT NULL,
  `kec` char(60) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_onkir`, `kec`, `ongkir`) VALUES
(1, 'Banjarbaru Selatan', 20000),
(2, 'Banjarbaru Utara', 25000),
(3, 'Cempaka', 30000),
(4, 'Liang Anggang', 15000),
(5, 'Landasan Ulin', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `no` int(11) NOT NULL,
  `nama` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`no`, `nama`) VALUES
(0, 'H. Ramlan'),
(1, 'H. Ramlan');

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
('9', 'aku', 'ulat gigi.jpg', '1', '10', '1 caranya siap dilakukan ,mulai dari menjaga pola makan hingga mengatur aktifitas sehari-hari. \r\nNamun, banyak orang yang ingin menurunkan berat badan dengan cepat dan ingin cepat turun berat badan dalam waktu yang relatif singkat', 49);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `idstok` int(11) NOT NULL,
  `kd_produk` varchar(10) DEFAULT NULL,
  `beli` int(11) DEFAULT NULL,
  `jual` int(11) DEFAULT NULL,
  `banyak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`idstok`, `kd_produk`, `beli`, `jual`, `banyak`) VALUES
(1, '9', 800, 1000, 50),
(2, '5467', 50, 65, 16);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kontak` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `kontak`) VALUES
(1, 'Herbalife', 'Jakarta, Indonesia', '0213823982');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kd_transaksi` char(9) NOT NULL,
  `tglt` date DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `totalsemua` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kd_transaksi`, `tglt`, `nik`, `totalsemua`) VALUES
('T00001', '2019-09-22', 0, 0),
('T00002', '2019-09-22', 0, 0),
('T00003', '2019-09-22', 0, 1147),
('T00004', '2019-09-22', 0, 1145),
('T00005', '2019-09-22', 0, 1145),
('T00006', '2019-09-22', 0, 1145),
('T00008', '2019-09-22', 0, 0),
('T00009', '2019-09-22', 0, 455),
('T00010', '2019-09-22', 0, 455),
('T00011', '2019-09-22', 0, 520),
('T00012', '2019-09-22', 0, 260),
('T00013', '2019-09-22', 0, 260),
('T00014', '2019-09-22', 0, 910);

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
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_onkir`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`idstok`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `kd_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_onkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `idstok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
