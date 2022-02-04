-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2022 pada 02.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_ht`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id_ht` bigint(10) UNSIGNED NOT NULL,
  `dep_ht` varchar(30) NOT NULL,
  `lokasi_ht` varchar(150) NOT NULL,
  `alias_ht` varchar(30) NOT NULL,
  `tipe_ht` varchar(30) NOT NULL,
  `sn_ht` varchar(30) NOT NULL,
  `pj_ht` varchar(30) NOT NULL,
  `ket_ht` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id_ht`, `dep_ht`, `lokasi_ht`, `alias_ht`, `tipe_ht`, `sn_ht`, `pj_ht`, `ket_ht`) VALUES
(1, 'Operasional', 'Container Crane (CC 04) RIG', 'RIG-CC04', 'M8628', '511TRFA557', 'Operator CC', 'Normal 70%'),
(2, 'Operasional', 'Container Crane (CC 05) RIG', 'RIG-CC05', 'M8628', '511TRFA653', 'Operator CC', 'Normal 100%'),
(4, 'Operasional', 'Container Crane (CC 06) RIG', 'RIG-CC06', 'M8628', '511TRFA620', 'Operator CC', 'Normal 100%'),
(5, 'Operasional', 'Container Crane (CC 07) RIG', 'RIG-CC07', 'M8628', '511TRFA660', 'Operator CC', 'Normal 70%'),
(7, 'Operasional', 'Container Crane (CC 09) RIG', 'RIG-CC09', 'M8628', '511TRFA611', 'Operator CC', 'Normal 70%'),
(8, 'Operasional', 'RUBBER TYRED GANTRY SUMITOMO (RTG01) RIG', 'HT-RTG01', 'M8628', '511TRFA549', 'Operator RTG', 'Normal 70%');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_ht`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_ht` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
