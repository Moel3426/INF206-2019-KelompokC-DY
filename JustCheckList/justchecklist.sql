-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2019 pada 09.28
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

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
-- Struktur dari tabel `keterlambatan`
--

CREATE TABLE `keterlambatan` (
  `id` int(11) NOT NULL,
  `alasan_keterlambatan` varchar(255) NOT NULL,
  `jumlah_keterlambatan` int(5) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keterlambatan`
--

INSERT INTO `keterlambatan` (`id`, `alasan_keterlambatan`, `jumlah_keterlambatan`, `bulan`, `tahun`) VALUES
(1, 'cuaca buruk', 10, 'januari', 2019),
(2, 'hasil tangkapan belum mencapai target', 9, 'januari', 2019),
(5, 'cuaca buruk', 4, 'februari', 2019),
(6, 'hasil tangkapan belum mencapai target', 6, 'februari', 2019),
(9, 'cuaca buruk', 8, 'maret', 2019),
(10, 'hasil tangkapan belum mencapai target', 9, 'maret', 2019),
(11, 'cuaca buruk', 7, 'april', 2019),
(12, 'hasil tangkapan belum mencapai target', 5, 'april', 2019),
(13, 'cuaca buruk', 6, 'mei', 2019),
(14, 'hasil tangkapan belum mencapai target', 3, 'mei', 2019),
(15, 'cuaca buruk', 9, 'juni', 2019),
(16, 'hasil tangkapan belum mencapai target', 7, 'juni', 2019),
(17, 'cuaca buruk', 5, 'juli', 2019),
(18, 'hasil tangkapan belum mencapai target', 2, 'juli', 2019),
(19, 'cuaca buruk', 2, 'agustus', 2019),
(20, 'hasil tangkapan belum mencapai target', 2, 'agustus', 2019),
(21, 'cuaca buruk', 15, 'september', 2019),
(22, 'hasil tangkapan belum mencapai target', 9, 'september', 2019),
(23, 'cuaca buruk', 20, 'oktober', 2019),
(24, 'hasil tangkapan belum mencapai target', 13, 'oktober', 2019),
(25, 'cuaca buruk', 16, 'november', 2019),
(26, 'hasil tangkapan belum mencapai target', 18, 'november', 2019),
(27, 'cuaca buruk', 21, 'desember', 2019),
(28, 'hasil tangkapan belum mencapai target', 12, 'desember', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nelayan_berlayar`
--

CREATE TABLE `nelayan_berlayar` (
  `id` int(11) NOT NULL,
  `jumlah_user_berlayar` int(7) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nelayan_berlayar`
--

INSERT INTO `nelayan_berlayar` (`id`, `jumlah_user_berlayar`, `bulan`, `tahun`) VALUES
(1, 30, 'januari', 2019),
(2, 33, 'februari', 2019),
(3, 41, 'maret', 2019),
(4, 45, 'april', 2019),
(5, 50, 'mei', 2019),
(6, 45, 'juni', 2019),
(7, 46, 'juli', 2019),
(8, 43, 'agustus', 2019),
(9, 55, 'september', 2019),
(10, 54, 'oktober', 2019),
(11, 44, 'november', 2019),
(12, 51, 'desember', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
  `role` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `alamat`, `no_hp`, `password`, `id_kapal`, `pelabuhan`, `id_pelabuhan`, `role`) VALUES
(4, 'fadhil', 'fadhil12@gmail.com', 'werew', '123456654', '$2y$10$.Zra6vv86m5cH0.N7m/xfunNAhed1lmZuIRjiY9xYIfR2QlsZmuj2', 12345, NULL, NULL, '2'),
(5, 'daffa', 'daffa12@gmaail.com', 'setui', '243252454', '$2y$10$W75Mj04AuUB8TnWPOCyuWu7Aa2TnIe9/AJMqAjOBlAJWUU3IF.zSa', NULL, 'mata ie', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keterlambatan`
--
ALTER TABLE `keterlambatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nelayan_berlayar`
--
ALTER TABLE `nelayan_berlayar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keterlambatan`
--
ALTER TABLE `keterlambatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `nelayan_berlayar`
--
ALTER TABLE `nelayan_berlayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
