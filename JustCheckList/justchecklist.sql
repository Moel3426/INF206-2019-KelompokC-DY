-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 03:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justchecklist`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `admin_id`, `member_id`) VALUES
(3, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `keberangkatan`
--

CREATE TABLE `keberangkatan` (
  `id_kapal` int(11) NOT NULL,
  `keberangkatan` varchar(12) NOT NULL,
  `tiba` varchar(12) NOT NULL,
  `anggota` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'dalam proses',
  `waktu_konfirmasi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keberangkatan`
--

INSERT INTO `keberangkatan` (`id_kapal`, `keberangkatan`, `tiba`, `anggota`, `status`, `waktu_konfirmasi`, `keterangan`, `id`, `user_id`, `waktu`) VALUES
(1, '05/06/2019', '05/28/2019', '[\"24\"]', 'diterima', '2019-06-03 13:41:45', 'Terlambat', 24, 11, '06/03/2019'),
(1, '06/04/2019', '06/06/2019', '[\"24\",\"25\"]', 'dalam proses', '0000-00-00 00:00:00', '', 27, 11, ''),
(1, '06/04/2019', '06/19/2019', '[\"24\"]', 'dalam proses', '0000-00-00 00:00:00', '', 28, 11, ''),
(1, '06/04/2019', '06/12/2019', '[\"25\"]', 'dalam proses', '0000-00-00 00:00:00', '', 29, 11, ''),
(1, '05/08/2019', '05/28/2019', '[\"24\"]', 'diterima', '2019-06-03 13:42:10', 'Terlambat', 30, 11, '06/03/2019'),
(1, '05/08/2019', '05/23/2019', '[\"24\"]', 'diterima', '2019-06-03 13:42:14', 'Terlambat', 31, 11, '06/03/2019'),
(1, '05/06/2019', '05/31/2019', '[\"24\"]', 'dalam proses', '0000-00-00 00:00:00', '', 34, 11, '');

-- --------------------------------------------------------

--
-- Table structure for table `keterlambatan`
--

CREATE TABLE `keterlambatan` (
  `id` int(11) NOT NULL,
  `alasan_keterlambatan` varchar(255) NOT NULL,
  `jumlah_keterlambatan` int(5) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterlambatan`
--

INSERT INTO `keterlambatan` (`id`, `alasan_keterlambatan`, `jumlah_keterlambatan`, `bulan`, `tahun`) VALUES
(1, 'cuaca buruk', 0, 'January', 2019),
(2, 'hasil tangkapan belum mencapai target', 0, 'January', 2019),
(5, 'cuaca buruk', 0, 'February', 2019),
(6, 'hasil tangkapan belum mencapai target', 0, 'February', 2019),
(9, 'cuaca buruk', 0, 'March', 2019),
(10, 'hasil tangkapan belum mencapai target', 0, 'March', 2019),
(11, 'cuaca buruk', 0, 'April', 2019),
(12, 'hasil tangkapan belum mencapai target', 0, 'April', 2019),
(13, 'cuaca buruk', 0, 'May', 2019),
(14, 'hasil tangkapan belum mencapai target', 0, 'May', 2019),
(15, 'cuaca buruk', 1, 'June', 2019),
(16, 'hasil tangkapan belum mencapai target', 0, 'June', 2019),
(17, 'cuaca buruk', 0, 'July', 2019),
(18, 'hasil tangkapan belum mencapai target', 0, 'July', 2019),
(19, 'cuaca buruk', 0, 'August', 2019),
(20, 'hasil tangkapan belum mencapai target', 0, 'August', 2019),
(21, 'cuaca buruk', 0, 'September', 2019),
(22, 'hasil tangkapan belum mencapai target', 0, 'September', 2019),
(23, 'cuaca buruk', 0, 'October', 2019),
(24, 'hasil tangkapan belum mencapai target', 0, 'October', 2019),
(25, 'cuaca buruk', 0, 'November', 2019),
(26, 'hasil tangkapan belum mencapai target', 0, 'November', 2019),
(27, 'cuaca buruk', 0, 'December', 2019),
(28, 'hasil tangkapan belum mencapai target', 0, 'December', 2019),
(29, 'kapal rusak', 0, 'January', 2019),
(30, 'kapal rusak', 0, 'February', 2019),
(31, 'kapal rusak', 0, 'March', 2019),
(32, 'kapal rusak', 0, 'April', 2019),
(33, 'kapal rusak', 0, 'May', 2019),
(34, 'kapal rusak', 2, 'June', 2019),
(35, 'kapal rusak', 0, 'July', 2019),
(36, 'kapal rusak', 0, 'August', 2019),
(37, 'kapal rusak', 0, 'September', 2019),
(38, 'kapal rusak', 0, 'October', 2019),
(39, 'kapal rusak', 0, 'November', 2019),
(40, 'kapal rusak', 0, 'December', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `nelayan_berlayar`
--

CREATE TABLE `nelayan_berlayar` (
  `id` int(11) NOT NULL,
  `jumlah_user_berlayar` int(7) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nelayan_berlayar`
--

INSERT INTO `nelayan_berlayar` (`id`, `jumlah_user_berlayar`, `bulan`, `tahun`) VALUES
(1, 0, 'January', 2019),
(2, 0, 'February', 2019),
(3, 0, 'maret', 2019),
(4, 0, 'April', 2019),
(5, 4, 'May', 2019),
(6, 3, 'June', 2019),
(7, 0, 'July', 2019),
(8, 0, 'August', 2019),
(9, 0, 'September', 2019),
(10, 0, 'October', 2019),
(11, 0, 'November', 2019),
(12, 0, 'December', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `noHp` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `kotakabupaten` varchar(100) NOT NULL,
  `kodepos` int(100) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `foto`, `id`, `nama`, `agama`, `status`, `email`, `noHp`, `alamat`, `negara`, `kotakabupaten`, `kodepos`, `deskripsi`) VALUES
(11, '1.jpg', 24, 'yaumil', 'islam', 'belum nikah', 'yaumil@gmail.com', '081361300136', 'ketapang', 'Indonesia', 'banda aceh', 23235, 'waw'),
(11, 'profilcewek.jpg', 25, 'maulana', 'islam', 'belum nikah', 'maulana@gmail.com', '92749823', 'ketapang', 'indonesia', 'banda aceh', 23232, 'harini bekuah');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_kapal` int(11) DEFAULT NULL,
  `pelabuhan` varchar(100) DEFAULT NULL,
  `id_pelabuhan` int(11) DEFAULT NULL,
  `role` varchar(6) NOT NULL,
  `status` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `alamat`, `no_hp`, `password`, `id_kapal`, `pelabuhan`, `id_pelabuhan`, `role`, `status`, `negara`, `kode_pos`, `deskripsi`, `gambar`, `agama`) VALUES
(10, 'Aqil Fiqran', 'aqil@gmail.com', 'lamtemen', '081264563223', '$2y$10$w7CWaja793jKmWWrfTbIS.hIYgcc3ZZUe/D.cW1g/z0/ZcWMTrFW2', NULL, 'lampulo', 1, '1', 'belum nikah', 'Indonesia', 23231, 'bergembira bersama', 'carrot-cake.jpg', 'Islam'),
(11, 'thari', 'thari@gmail.com', 'rukoh', '0822334455', '$2y$10$HZE/gSq3jbaqNwTIlFUfuemGn6WBjUPHRVokkoVrmMbk0rcxP6hy2', 1, NULL, NULL, '2', 'kosong', 'kosong', 0, 'kosong', 'default-avatar.png', 'kosong'),
(12, 'atika', 'atika@gmail.com', 'lamtemen', '7239482734', '$2y$10$IXPuKr5gH4A7ZSglKRfGh.ia4m//XFh3LRT.6.mGE4ATrw7zL56Mm', 5, NULL, NULL, '2', 'kosong', 'kosong', 0, 'kosong', 'default-avatar.png', 'kosong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keberangkatan`
--
ALTER TABLE `keberangkatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterlambatan`
--
ALTER TABLE `keterlambatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nelayan_berlayar`
--
ALTER TABLE `nelayan_berlayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keberangkatan`
--
ALTER TABLE `keberangkatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `keterlambatan`
--
ALTER TABLE `keterlambatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `nelayan_berlayar`
--
ALTER TABLE `nelayan_berlayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
