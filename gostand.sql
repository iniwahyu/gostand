-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 12:47 PM
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
-- Database: `gostand`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `email`, `ip`, `browser`, `waktu`, `session`) VALUES
(1, 'admin@mhs.dinus.ac.id', '::1', 'Chrome 69.0.3497.81, Windows 10', '2018-09-11 07:32:41', '4q402r8bgnpdfa5ft4nusc4t64n4jmlt'),
(2, '111201609357@mhs.dinus.ac.id', '::1', 'Chrome 69.0.3497.81, Windows 10', '2018-09-11 07:33:22', 'uhtfcdg44fatj7sntv4df5g8q2thaqvh'),
(3, 'admin@mhs.dinus.ac.id', '::1', 'Chrome 69.0.3497.81, Windows 10', '2018-09-11 07:33:38', '50qf2p7f4a55ios4ketcr48rb0cecate'),
(4, 'admin@mhs.dinus.ac.id', '::1', 'Chrome 69.0.3497.81, Windows 10', '2018-09-12 05:20:27', '3vsan6jk8hftijk10fipjkjcgpu6c8ho'),
(5, 'admin@mhs.dinus.ac.id', '::1', 'Chrome 69.0.3497.81, Windows 10', '2018-09-12 06:35:07', '8qsktcuk0tie38oeas07ophjsbg50api'),
(6, 'admin@mhs.dinus.ac.id', '::1', 'Chrome 69.0.3497.81, Windows 10', '2018-09-12 07:33:03', 'l2e04s072d75ie5ausgn82pb8tfj5ccs'),
(7, 'admin@mhs.dinus.ac.id', '::1', 'Chrome 69.0.3497.92, Windows 10', '2018-09-12 08:29:30', '8i0bl4kn38reimh2j32bc2kicjpq5m1q'),
(8, 'admin@mhs.dinus.ac.id', '::1', 'Chrome 69.0.3497.92, Windows 10', '2018-09-13 02:19:19', '3jlqqkh84amg409dvmo0d7m2eavml2qr'),
(9, 'admin@mhs.dinus.ac.id', '::1', 'Chrome 69.0.3497.100, Windows 10', '2018-10-27 05:43:31', 'i2rms7f6cij86epu791fptlp6m8ns63k'),
(10, 'admin@mhs.dinus.ac.id', '::1', 'Chrome 70.0.3538.110, Windows 10', '2018-12-07 17:19:09', '1cjkmjfb4lsod03j4pt6rl15k05fd83c');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `jumlah_produk` int(255) NOT NULL,
  `total_harga` int(255) NOT NULL,
  `nama_toko` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohape` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `jumlah_produk` int(255) NOT NULL,
  `total_harga` int(255) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `catatan` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `slug_toko` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `deskripsi_penjual` text NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(100) NOT NULL,
  `ukuran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `nama`, `password`, `waktu`, `level`, `status`) VALUES
(38, '111201609357@mhs.dinus.ac.id', 'Wahyu Rizky Eka Perwira', '827ccb0eea8a706c4c34a16891f84e7b', '2018-09-13 02:19:09', 'Pembeli', 'Aktif'),
(39, 'admin@mhs.dinus.ac.id', 'Super Admin', '21232f297a57a5a743894a0e4a801fc3', '2018-09-13 02:19:12', 'Admin', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_toko` (`nama_toko`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
