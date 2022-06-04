-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2022 pada 08.18
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) NOT NULL,
  `name_user` varchar(30) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(60) NOT NULL,
  `info_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `email_user`, `password_user`, `info_user`) VALUES
(1, 'administrator', 'yandika.ismananda@gmail.com', '$2a$12$P836Ta5RRJdnHscUDoG4aeFCaqP6wG1zI7Iow.7T/gsjX/uzWV0yW', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_ht`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

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
