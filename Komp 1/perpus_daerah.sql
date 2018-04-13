-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Apr 2018 pada 23.02
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_daerah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `nama_pengguna` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `jekel` varchar(1) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_user`, `nama_pengguna`, `email`, `hp`, `jekel`, `alamat`) VALUES
(1, 2, 'Avril Lavigne', 'user@gmail.com', '083841113737', 'p', 'pandeglang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `kode_berita` int(4) NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_publish` varchar(10) NOT NULL,
  `publisher` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`kode_berita`, `judul_berita`, `gambar`, `isi_berita`, `tgl_publish`, `publisher`) VALUES
(1, 'Sistem Baru Perpustakaan Unila', '', 'Kepala UPT Perpustakaan Unila, Dr. Eng. Mardiana mengatakan, Perpustakaan Unila akan memigrasi sistem barcode dengan sistem Radio Frequency Identification (RFID).\r\n\r\n\r\n“Hal ini dilakukan untuk memenuhi tuntutan layanan perpustakaan yang lebih baik. Mahasiswa mendapat kemudahan dalam peminjaman buku, dan petugas mendapatkan data valid mengenai stock buku yang tersedia dan yang dipinjam” tutur Mardiana.\r\n\r\nSistem RFID merupakan teknologi identifikasi yang menggunakan gelombang radio. Sistem ini pertama kali diperkenalkan, sekaligus dipatenkan oleh Mario Cardullo pada 1973 dengan menggunakan transponder radio pasif ber-memory. Dalam pengelolaan perpustakaan, sistem RFID saat ini merupakan sistem paling mutakhir dalam proses peminjaman buku.\r\n\r\nSecara garis besar, terdapat 3 macam alat yang digunakan dalam sistem ini, yakni tag label, RFID reader, dan antena. Ketiga alat ini dihubungkan dengan gelombang frekuensi yang sama.\r\n\r\nSeperti halnya barcode, tag label merupakan label khusus yang ditempelkan pada setiap buku yang akan diidentifikasi. Ada beberapa jenis tag label dalam sistem ini. Untuk perpustakaan, tag jenis read/write yang dapat dibaca dan ditulis ulang berkali-kali-lah yang banyak digunakan. Sedangkan RFID reader digunakan untuk membaca informasi yang terdapat pada tag.\r\n\r\nAlat terakhir, antena, terpasang pada tag label dan RFID reader. Antena berfungsi untuk menghubungkan sinyal frekuensi dari kedua alat sebelumnya.', '12/10/2018', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kode_buku` int(4) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang` varchar(40) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `gambar` varchar(11) NOT NULL,
  `sinopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `pengarang`, `kategori`, `penerbit`, `tahun_terbit`, `gambar`, `sinopsis`) VALUES
(7, 'Mentoring Teacher', 'Eric Osbord', 'NOVEL', 'MegaRaksa', 2016, '', 'buku ini sangat menarik untuk dibaca'),
(8, 'Tenggelamnya Kapal VanderWijck', 'TereLiye', 'NOVEL', 'Sandro Jaya', 2015, '', 'sangat menarik'),
(9, 'Great Motivation', 'Egi SDK', 'CERPEN', 'Grammedia', 2018, '', 'sangat cocok untuk penggemar cerpen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(4) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `kode_buku` int(4) NOT NULL,
  `tgl_pinjam` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `id_anggota` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_anggota`, `username`, `password`, `level`) VALUES
(1, 0, 'admin', 'admin', 'admin'),
(2, 1, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`kode_berita`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `kode_berita` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `kode_buku` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
