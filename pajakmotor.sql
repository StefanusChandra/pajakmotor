-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2022 pada 03.42
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajakmotor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapajak`
--

CREATE TABLE `datapajak` (
  `no_urut` char(5) NOT NULL,
  `jenis_motor` varchar(30) NOT NULL,
  `biaya_pajak` int(60) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapajak`
--

INSERT INTO `datapajak` (`no_urut`, `jenis_motor`, `biaya_pajak`, `jumlah`, `total`) VALUES
('001', 'Megapro 150CC', 175000, 3, 525000),
('002', 'Vario 125CC', 100000, 2, 200000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapajak`
--
ALTER TABLE `datapajak`
  ADD PRIMARY KEY (`no_urut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
