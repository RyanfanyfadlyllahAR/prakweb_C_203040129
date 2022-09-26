-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 06:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_c_203040129_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jumlah halaman` int(100) NOT NULL,
  `Tahun terbit` year(4) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `jumlah halaman`, `Tahun terbit`, `penulis`, `gambar`) VALUES
(1, 'ika kamu menjadi tanda tambah', 29, 2010, 'Trista Speed Shaskan', 'jika.jpg'),
(2, 'beruang kutub dan panda', 89, 2009, 'Matthew J.baek', 'beruang.jpg'),
(3, 'Pierre', 125, 2001, 'samsul', 'piere.jpg'),
(4, 'bahasa indonesia', 150, 2001, 'samsul', 'indo.jpg'),
(5, 'fisika', 250, 2018, 'Ryan fany fadlyllah AR', 'fisika.jpg'),
(6, 'matematika', 127, 2019, 'Arya', 'mtk.jpg'),
(7, 'kimia', 129, 2016, 'hendra', 'kimia.jpg'),
(8, 'sejarah', 150, 2018, 'Agung', 'sejarah.jpg'),
(9, 'sejarah daerah', 250, 2020, 'Ryan', 'sejarah.jpg'),
(10, 'masak masak', 127, 2017, 'Lia amelia', 'masak.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
