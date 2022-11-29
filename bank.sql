-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2022 at 02:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_rekening`
--

CREATE TABLE `daftar_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nomor_rekening` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_rekening`
--

INSERT INTO `daftar_rekening` (`id_rekening`, `nomor_rekening`, `nama`, `bank`, `id_user`) VALUES
(5, 321, 'bos2', 'makmur', 10);

-- --------------------------------------------------------

--
-- Table structure for table `dream`
--

CREATE TABLE `dream` (
  `id_dream` int(11) NOT NULL,
  `rencana` varchar(30) NOT NULL,
  `jumlah_uang` int(20) NOT NULL,
  `tabungan_bulan` int(20) NOT NULL,
  `tenor` int(5) NOT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `dana_terkumpul` int(20) NOT NULL,
  `jenis` char(1) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dream`
--

INSERT INTO `dream` (`id_dream`, `rencana`, `jumlah_uang`, `tabungan_bulan`, `tenor`, `keterangan`, `dana_terkumpul`, `jenis`, `tanggal`, `id_user`) VALUES
(12, 'Ke Bali', 5000000, 250000, 16, 'Membuat perencanaan: Ke Bali senilai Rp. 5000000 ()', 1000000, 'K', '2022-11-29', 10);

-- --------------------------------------------------------

--
-- Table structure for table `investasi`
--

CREATE TABLE `investasi` (
  `id_investasi` int(11) NOT NULL,
  `jenis_investasi` varchar(20) NOT NULL,
  `jumlah_uang` int(20) NOT NULL,
  `jangka_waktu` int(5) NOT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `jenis` char(1) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investasi`
--

INSERT INTO `investasi` (`id_investasi`, `jenis_investasi`, `jumlah_uang`, `jangka_waktu`, `keterangan`, `tanggal`, `jenis`, `id_user`) VALUES
(9, 'Reksadana', 400000, 2, 'Melakukan investasi Reksadana senilai Rp. 400000 dalam jangka 2 ()', '2022-11-29', 'K', 10);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `jenis` char(1) NOT NULL,
  `jumlah_uang` int(20) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `tanggal`, `keterangan`, `jenis`, `jumlah_uang`, `id_user`) VALUES
(16, '2022-11-29', 'Mengirim 100000 ke Rekening 321 (tes)', 'K', 100000, 10),
(17, '2022-11-29', 'Transfer sejumlah Rp. 100000 ke Rekening 321 (1)', 'K', 100000, 10),
(18, '2022-11-29', 'Transfer sejumlah Rp. 200000 ke Rekening 321 (Beli', 'K', 200000, 10),
(19, '2022-11-29', 'Transfer sejumlah Rp. 299999 ke Rekening 321 (Beli paku 2 kilo)', 'K', 299999, 10),
(20, '2022-11-29', 'Mendapat program pinjaman KUR senilai Rp. 7000000 (Usaha Jual Cimol)', 'M', 7000000, 10),
(21, '2022-11-29', 'Melakukan investasi Reksadana senilai Rp. 400000 dalam jangka 2 ()', 'K', 400000, 10),
(22, '2022-11-29', 'Membuat perencanaan: Ke Bali senilai Rp. 5000000 ()', 'K', 5000000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `jenis_pinjaman` varchar(5) NOT NULL,
  `jumlah_uang` int(20) NOT NULL,
  `tenor` int(5) NOT NULL,
  `suku_bunga` int(20) NOT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `jenis` char(1) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `jenis_pinjaman`, `jumlah_uang`, `tenor`, `suku_bunga`, `keterangan`, `jenis`, `tanggal`, `id_user`) VALUES
(10, 'KUR', 7000000, 2, 420000, 'Mendapat program pinjaman KUR senilai Rp. 7000000 (Usaha Jual Cimol)', 'M', '2022-11-29', 10);

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `nomor_rekening` varchar(15) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_blkg` varchar(20) NOT NULL,
  `tempat_L` varchar(20) NOT NULL,
  `tanggal_L` date NOT NULL,
  `jenis_id` varchar(10) NOT NULL,
  `nomor_id` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `penghasilan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `no_telp1` varchar(15) NOT NULL,
  `no_telp2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`nomor_rekening`, `nama_depan`, `nama_blkg`, `tempat_L`, `tanggal_L`, `jenis_id`, `nomor_id`, `alamat`, `kode_pos`, `penghasilan`, `pekerjaan`, `no_telp1`, `no_telp2`) VALUES
('00046856', 'a', 'a', 'a', '2022-11-01', 'SIM', '1', 'a', '1', '5 - 10 Juta', 'PNS / TNI / Polri', '1', ''),
('00095894', 'udin', 'petot', 'sleman', '2022-11-10', '', '12321', 'sleman', '12321', '', '', '0696969', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `jumlah_uang` int(20) NOT NULL,
  `rekening_tujuan` varchar(20) NOT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `jenis` char(1) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `jumlah_uang`, `rekening_tujuan`, `keterangan`, `jenis`, `tanggal`, `id_user`) VALUES
(44, 200000, '123', 'Bayar Bengkel', 'K', '2022-11-29', 10),
(45, 100000, '321', 'Mengirim 100000 ke Rekening 321 (tes)', 'K', '2022-11-29', 10),
(46, 100000, '321', 'Transfer sejumlah Rp. 100000 ke Rekening 321 (1)', 'K', '2022-11-29', 10),
(47, 200000, '321', 'Transfer sejumlah Rp. 200000 ke Rekening 321 (Beli', 'K', '2022-11-29', 10),
(48, 299999, '321', 'Transfer sejumlah Rp. 299999 ke Rekening 321 (Beli paku 2 kilo)', 'K', '2022-11-29', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `password` varchar(20) NOT NULL,
  `nomor_rekening` varchar(20) DEFAULT NULL,
  `id_user` int(5) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`password`, `nomor_rekening`, `id_user`, `email`) VALUES
('a', '00046856', 2, 'a@a.a'),
('a', NULL, 6, 'a@b.c'),
('a', '00095894', 10, 'a@b.a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_rekening`
--
ALTER TABLE `daftar_rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `dream`
--
ALTER TABLE `dream`
  ADD PRIMARY KEY (`id_dream`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `investasi`
--
ALTER TABLE `investasi`
  ADD PRIMARY KEY (`id_investasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`nomor_rekening`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `nomor_rekening` (`nomor_rekening`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_rekening`
--
ALTER TABLE `daftar_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dream`
--
ALTER TABLE `dream`
  MODIFY `id_dream` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `investasi`
--
ALTER TABLE `investasi`
  MODIFY `id_investasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_rekening`
--
ALTER TABLE `daftar_rekening`
  ADD CONSTRAINT `daftar_rekening_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `dream`
--
ALTER TABLE `dream`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `investasi`
--
ALTER TABLE `investasi`
  ADD CONSTRAINT `investasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD CONSTRAINT `mutasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `nomor_rekening` FOREIGN KEY (`nomor_rekening`) REFERENCES `rekening` (`nomor_rekening`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
