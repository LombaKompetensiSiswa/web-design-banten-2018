-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 11:06 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reza`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(39) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `id_user`, `created_at`) VALUES
(1, 'Pembukaan Perpustakaan Daerah', 'Dengan adanya perpustakaan daerah ini kami harapkan dapat menambah wawasan bagi masyarakat terutama yang berada di wilayah banten.', '264', 1, '2018-04-10'),
(2, 'Perubahan sistem perpustakaan', 'Akibat banyaknya trafik yang mengunjungi website ini, kami melakukan pengupdate-an server agar website ini tidak terjadi down kembali. Dengan ini kami meminta maaf atas ketidaknyamanan anda dalam mengakses website ini.', '153', 11, '2018-04-10'),
(3, 'Penambahan buku', 'Saat ini kami sudah menambahkan beberapa buku di perpustakaan daerah. Dengan ini kami berharap dapat menambahkan minat untuk membaca kepada pengunjung.', 'b_9132.30398037.jpg.gallery.jpg', 11, '2018-04-10'),
(4, 'Pembukaan Perpustakaan Daerah', 'Dengan adanya perpustakaan daerah ini kami harapkan dapat menambah wawasan bagi masyarakat terutama yang berada di wilayah banten.', '264', 1, '2018-04-10'),
(5, 'Perubahan sistem perpustakaan', 'Akibat banyaknya trafik yang mengunjungi website ini, kami melakukan pengupdate-an server agar website ini tidak terjadi down kembali. Dengan ini kami meminta maaf atas ketidaknyamanan anda dalam mengakses website ini.', '153', 11, '2018-04-10'),
(6, 'Penambahan buku', 'Saat ini kami sudah menambahkan beberapa buku di perpustakaan daerah. Dengan ini kami berharap dapat menambahkan minat untuk membaca kepada pengunjung.', 'b_9132.30398037.jpg.gallery.jpg', 11, '2018-04-10'),
(7, 'Penambahan buku', 'Saat ini kami sudah menambahkan beberapa buku di perpustakaan daerah. Dengan ini kami berharap dapat menambahkan minat untuk membaca kepada pengunjung.', 'b_9132.30398037.jpg.gallery.jpg', 11, '2018-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(53) NOT NULL,
  `kategori` int(10) NOT NULL,
  `gambar_buku` varchar(36) NOT NULL,
  `sinopsis` text NOT NULL,
  `created_at` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `penulis` varchar(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `kategori`, `gambar_buku`, `sinopsis`, `created_at`, `id_user`, `penulis`) VALUES
(25, 'Belajar Membaca', 2, '2.jpg', 'Belajar membaca dengan buku ini sangat mudah dan simpel. Hal ini dapat mempercepat proses membaca anak. ', '2018-04-10 00:00:00', 1, 'Marzuki'),
(27, 'Belajar Pemrograman PHP', 3, '2.jpg', 'Seiring perkembangan teknologi, banyak aspek kehidupan yang ikut berubah seiring perkembangannya. Saat ini industri website sangat banyak dicari oleh perusahaan namun hanya sedikit yang dapat memenuhi syarat.', '2018-04-10 00:00:00', 11, 'Eric Susanto'),
(29, 'Belajar Pemrograman Dengan Cepat', 2, '2832.jpg', 'Buku ini akan membantu anda dalam mempelajari pemrograman dengan cepat. Hal ini dapat mengefisiensikan waktu anda untuk mempelajari program ini hingga anda mahir.', '2018-04-10 00:00:00', 11, 'Reyhan'),
(30, 'PHP 5', 2, '1411.jpg', 'PHP 7 merupakan perkembangan dari PHP versi sebelumnya. Pada versi php ini terdapat beberapa kelebihan diantaranya loading yang sangat cepat dan juga optimasi server sehingga mengurangi beban pada server.', '2018-04-10 00:00:00', 11, 'Marzuki'),
(31, 'Belajar Membaca', 2, '2.jpg', 'Belajar membaca dengan buku ini sangat mudah dan simpel. Hal ini dapat mempercepat proses membaca anak. ', '2018-04-10 00:00:00', 1, 'Marzuki'),
(32, 'Belajar Pemrograman PHP', 3, '2.jpg', 'Seiring perkembangan teknologi, banyak aspek kehidupan yang ikut berubah seiring perkembangannya. Saat ini industri website sangat banyak dicari oleh perusahaan namun hanya sedikit yang dapat memenuhi syarat.', '2018-04-10 00:00:00', 11, 'Eric Susanto'),
(33, 'Belajar Pemrograman Dengan Cepat', 2, '2832.jpg', 'Buku ini akan membantu anda dalam mempelajari pemrograman dengan cepat. Hal ini dapat mengefisiensikan waktu anda untuk mempelajari program ini hingga anda mahir.', '2018-04-10 00:00:00', 11, 'Reyhan'),
(34, 'PHP 5', 2, '1411.jpg', 'PHP 7 merupakan perkembangan dari PHP versi sebelumnya. Pada versi php ini terdapat beberapa kelebihan diantaranya loading yang sangat cepat dan juga optimasi server sehingga mengurangi beban pada server.', '2018-04-10 00:00:00', 11, 'Marzuki');

-- --------------------------------------------------------

--
-- Table structure for table `hit`
--

CREATE TABLE `hit` (
  `id_hit` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hit`
--

INSERT INTO `hit` (`id_hit`, `created_at`, `num`) VALUES
(2, '2018-04-10', 354),
(3, '2018-04-09', 306);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Pemrograman'),
(3, 'Hakum');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `id_buku` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `id_buku`, `id_user`, `status`, `created_at`) VALUES
(2, '[{"id_buku":"25","judul_buku":"Belajar Membaca","kategori":"2","gambar_buku":"2.jpg","sinopsis":"Belajar membaca dengan buku ini sangat mudah dan simpel. Hal ini dapat mempercepat proses membaca anak. ","created_at":"2018-04-10 00:00:00","id_user":"1","penulis":"Marzuki"}]', 11, 1, '2018-04-10'),
(3, '[{"id_buku":"25","judul_buku":"Belajar Membaca","kategori":"2","gambar_buku":"2.jpg","sinopsis":"Belajar membaca dengan buku ini sangat mudah dan simpel. Hal ini dapat mempercepat proses membaca anak. ","created_at":"2018-04-10 00:00:00","id_user":"1","penulis":"Marzuki"},{"id_buku":"27","judul_buku":"Belajar Pemrograman PHP","kategori":"2","gambar_buku":"6841.jpg","sinopsis":"Seiring perkembangan teknologi, banyak aspek kehidupan yang ikut berubah seiring perkembangannya. Saat ini industri website sangat banyak dicari oleh perusahaan namun hanya sedikit yang dapat memenuhi syarat.","created_at":"2018-04-10 00:00:00","id_user":"11","penulis":"Eric Susanto"}]', 11, 1, '2018-04-10'),
(4, '[{"id_buku":"25","judul_buku":"Belajar Membaca","kategori":"2","gambar_buku":"2.jpg","sinopsis":"Belajar membaca dengan buku ini sangat mudah dan simpel. Hal ini dapat mempercepat proses membaca anak. ","created_at":"2018-04-10 00:00:00","id_user":"1","penulis":"Marzuki"},{"id_buku":"27","judul_buku":"Belajar Pemrograman PHP","kategori":"2","gambar_buku":"6841.jpg","sinopsis":"Seiring perkembangan teknologi, banyak aspek kehidupan yang ikut berubah seiring perkembangannya. Saat ini industri website sangat banyak dicari oleh perusahaan namun hanya sedikit yang dapat memenuhi syarat.","created_at":"2018-04-10 00:00:00","id_user":"11","penulis":"Eric Susanto"}]', 12, 1, '2018-04-10'),
(5, '[{"id_buku":"34","judul_buku":"PHP 5","kategori":"2","gambar_buku":"1411.jpg","sinopsis":"PHP 7 merupakan perkembangan dari PHP versi sebelumnya. Pada versi php ini terdapat beberapa kelebihan diantaranya loading yang sangat cepat dan juga optimasi server sehingga mengurangi beban pada server.","created_at":"2018-04-10 00:00:00","id_user":"11","penulis":"Marzuki"},{"id_buku":"33","judul_buku":"Belajar Pemrograman Dengan Cepat","kategori":"2","gambar_buku":"2832.jpg","sinopsis":"Buku ini akan membantu anda dalam mempelajari pemrograman dengan cepat. Hal ini dapat mengefisiensikan waktu anda untuk mempelajari program ini hingga anda mahir.","created_at":"2018-04-10 00:00:00","id_user":"11","penulis":"Reyhan"},{"id_buku":"30","judul_buku":"PHP 5","kategori":"2","gambar_buku":"1411.jpg","sinopsis":"PHP 7 merupakan perkembangan dari PHP versi sebelumnya. Pada versi php ini terdapat beberapa kelebihan diantaranya loading yang sangat cepat dan juga optimasi server sehingga mengurangi beban pada server.","created_at":"2018-04-10 00:00:00","id_user":"11","penulis":"Marzuki"}]', 11, 1, '2018-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(42) NOT NULL,
  `email` varchar(35) NOT NULL,
  `alamat` varchar(82) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `role` int(2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`, `email`, `alamat`, `tanggal_lahir`, `role`, `status`) VALUES
(1, 'ppabcd', '42d8aa7cde9c78c4757862d84620c335', 'Reza Juliandri', 'rezajuliandri20@gmail.com', '', '0000-00-00', 3, 1),
(6, 'tftnopas', '42d8aa7cde9c78c4757862d84620c335', 'Reza', 'allmywebstfn@gmail.com', 'JL.asdasdsad', '2001-02-10', 1, 1),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@mail.com', 'Admin Alamat.', '1221-02-12', 3, 1),
(12, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user@mail.com', 'User Alamat.', '2321-12-31', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `kategori` (`kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `hit`
--
ALTER TABLE `hit`
  ADD PRIMARY KEY (`id_hit`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `hit`
--
ALTER TABLE `hit`
  MODIFY `id_hit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
