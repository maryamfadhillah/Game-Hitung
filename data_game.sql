-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2020 pada 14.18
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_game`
--

CREATE TABLE `data_game` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `score` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_game`
--

INSERT INTO `data_game` (`id`, `nama`, `email`, `score`) VALUES
(7, 'kj', 'kl@gam.com', 20),
(8, 'sdk', 'jkj@gmail.com', -10),
(10, 'klj', 'klj@gmail.com', 10),
(11, 'bd', 'jh@gma.com', -10),
(13, 'adk', 'kjjd@g.com', -10),
(14, 'YAM', 'h@gmail.com', 0),
(17, 'iyamm', 'gh@gmai.com', 50),
(18, 'maryam', 'maryam@mail-jkt.sch.id', 10),
(19, 'nayl', 'kjh@gmail.com', -10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_game`
--
ALTER TABLE `data_game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_game`
--
ALTER TABLE `data_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
