-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2021 pada 18.25
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_makanan` int(4) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `ukuran_makanan` varchar(50) NOT NULL,
  `harga_makanan` int(15) NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_makanan`, `nama_makanan`, `ukuran_makanan`, `harga_makanan`, `catatan`) VALUES
(101, 'Chiffon cake', 'besar', 35000, 'rasa vanila'),
(102, 'Cheesse cake', 'besar', 50000, 'rasa keju'),
(103, 'Piece bolu', 'Kecil', 5000, 'rasa pandan'),
(104, 'Sisblue cake', 'kecil', 10000, 'rasa stoberi dan blubery'),
(105, 'chocolate cookies', 'kecil', 5000, 'extra topping chochochips'),
(106, 'creamy roll', 'sedang', 6000, 'rasa vanila'),
(107, 'coconut nugget', 'sedang', 25000, 'extra cheese');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_makanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
