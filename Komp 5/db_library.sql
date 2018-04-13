-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Apr 2018 pada 11.12
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_library`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `buku_ID` bigint(20) UNSIGNED NOT NULL,
  `judul_buku` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit_buku` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn_buku` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_buku` int(100) NOT NULL,
  `foto_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`buku_ID`, `judul_buku`, `penerbit_buku`, `thn_buku`, `kategori_buku`, `foto_buku`) VALUES
(1, 'Tips & Trik Menjadi Master PHP', 'ADHI PRASETYO', '2017', 1, '03-Master-PHP.jpg'),
(2, 'Buku Laris', 'Achmad', '2017', 1, '8349611_d49c6630-636a-4c82-a851-0081e982871d_300_429.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kategori_ID` bigint(20) UNSIGNED NOT NULL,
  `kategori_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategori_ID`, `kategori_nama`) VALUES
(1, 'Informatika'),
(2, 'Psikologi'),
(4, 'Hukum'),
(5, 'Kedokteran'),
(6, 'Komputer'),
(7, 'Sport');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjaman`
--

CREATE TABLE `tb_pinjaman` (
  `pinjaman_ID` bigint(20) UNSIGNED NOT NULL,
  `buku_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `tgl_pinjaman` date NOT NULL,
  `bts_pinjaman` date NOT NULL,
  `status_pinjam` enum('pinjam','dikembalikan') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_pinjaman`
--

INSERT INTO `tb_pinjaman` (`pinjaman_ID`, `buku_ID`, `user_ID`, `tgl_pinjaman`, `bts_pinjaman`, `status_pinjam`) VALUES
(1, 2, 2, '2018-04-04', '2018-04-19', 'dikembalikan'),
(2, 6, 1, '2018-04-05', '2018-04-12', 'dikembalikan'),
(3, 1, 1, '2018-04-11', '2018-04-05', 'dikembalikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `user_datejoin` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','diterima') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_ID`, `user_name`, `user_email`, `user_fullname`, `user_password`, `user_level`, `user_datejoin`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'Mochammad Bayu Nugraha', '$2y$10$xNS3oECEmJDW6wsRVqzOe.zwUMPrTxKrlgfSDrCd/rg3IoJzKI8g6', '1', '2018-04-11 10:15:02', 'diterima'),
(2, 'user', '', 'User', '$2y$10$kwKYe3WZiMeK6ycr/8JaGOXE.E0NBzNenm7Z1xtN7ezg0CDV4qxu.', '0', '2018-04-11 00:00:00', 'diterima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`buku_ID`),
  ADD KEY `buku_ID` (`buku_ID`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategori_ID`),
  ADD KEY `kategori_ID` (`kategori_ID`);

--
-- Indexes for table `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  ADD PRIMARY KEY (`pinjaman_ID`),
  ADD KEY `pinjaman_ID` (`pinjaman_ID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_ID`),
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `user_email` (`user_email`(191)),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `buku_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategori_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  MODIFY `pinjaman_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
