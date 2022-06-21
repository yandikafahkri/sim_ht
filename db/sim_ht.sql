-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2022 pada 14.01
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
(8, 'Operasional', 'RUBBER TYRED GANTRY SUMITOMO (RTG01) RIG', 'RIG-RTG01', 'M8628', '511TRFA549', 'Operator RTG', 'Normal 100%'),
(10, 'Operasional', 'RUBBER TYRED GANTRY SUMITOMO (RTG02) RIG', 'RIG-RTG02', 'M8628', '511TRFA495', 'Operator RTG', 'Normal 100%'),
(11, 'Operasional', 'RUBBER TYRED GANTRY SUMITOMO (RTG03) RIG', 'RIG-RTG03', 'M8628', '511TRFA493', 'Operator RTG', 'Normal 100%'),
(12, 'Operasional', 'RUBBER TYRED GANTRY SUMITOMO (RTG04) RIG', 'RIG-RTG04', 'M8628', '511TRFA595', 'Operator RTG', 'Normal 70%'),
(14, 'Operasional', 'RUBBER TYRED GANTRY SUMITOMO (RTG05) RIG', 'RIG-RTG05', 'M8628', '511TRFA662', 'Operator RTG', 'Normal 70%'),
(15, 'Operasional', 'RUBBER TYRED GANTRY SUMITOMO (RTG06) RIG', 'RIG-RTG06', 'M8628', '511TRFA663', 'Operator RTG', 'Normal 70%'),
(16, 'Operasional', 'RUBBER TYRED GANTRY SUMITOMO (RTG07) RIG', 'RIG-RTG07', 'M8628', '511TRFA655', 'Operator RTG', 'Normal 100%'),
(17, 'Operasional', 'RUBBER TYRED GANTRY SUMITOMO (RTG08) RIG', 'RIG-RTG08', 'M8628', '511TRFA639', 'Operator RTG', 'Normal 100%'),
(18, 'Operasional', 'RUBBER TYRED GANTRY KALMAR (RTG18) RIG', 'RIG-RTG18', 'M8628', '511TRFA605', 'Operator RTG', 'Normal 100%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maintenance`
--

CREATE TABLE `maintenance` (
  `id_maint` bigint(10) UNSIGNED NOT NULL,
  `alias_ht` varchar(30) NOT NULL,
  `tanggal_maint` date NOT NULL,
  `kondisi_maint` varchar(30) NOT NULL,
  `foto_maint1` varchar(255) DEFAULT NULL,
  `foto_maint2` varchar(255) DEFAULT NULL,
  `foto_maint3` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maintenance`
--

INSERT INTO `maintenance` (`id_maint`, `alias_ht`, `tanggal_maint`, `kondisi_maint`, `foto_maint1`, `foto_maint2`, `foto_maint3`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'RIG-CC04', '2022-06-08', 'Baik 100%', 'TimePhoto_20210407_125537.jpg', 'TimePhoto_20210407_124925.jpg', 'TimePhoto_20210407_124438.jpg', '2022-06-16 15:38:37', '2022-06-16 15:38:37', '2022-06-16 15:38:37'),
(2, 'RIG-CC05', '2022-06-17', 'Baik 100%', 'TimePhoto_20210407_130854.jpg', 'TimePhoto_20210407_130657.jpg', 'TimePhoto_20210407_162135.jpg', '2022-06-17 15:23:37', '2022-06-17 15:23:37', '2022-06-17 15:23:37'),
(3, 'RIG-CC06', '2022-06-10', 'Baik 100%', 'TimePhoto_20210407_133942.jpg', 'TimePhoto_20210407_132350.jpg', 'TimePhoto_20210407_132327.jpg', '2022-06-18 11:51:02', '2022-06-18 11:51:02', '2022-06-18 11:51:02'),
(4, 'RIG-CC07', '2022-06-08', 'Baik 100%', 'TimePhoto_20210407_153047.jpg', 'TimePhoto_20210407_134141.jpg', 'TimePhoto_20210407_152830.jpg', '2022-06-18 12:08:50', '2022-06-18 12:08:50', '2022-06-18 12:08:50');

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
(1, 'Yandika Fahkri Ismanananda', 'yandika.ismananda@gmail.com', '$2a$12$P836Ta5RRJdnHscUDoG4aeFCaqP6wG1zI7Iow.7T/gsjX/uzWV0yW', 'Administrator'),
(2, 'Teknisi', 'teknisi@gmail.com', '$2y$10$bQC.Jz0FEdJWaN7R26E5Y.2Kb.Jfs/gDv/Uau2cifgefxBr2eloRS', 'Teknisi'),
(3, 'Agung Sulistyo', 'agung@gmail.com', '$2y$10$CbIgQKrBdz5Fm3WkuNBKKOy3qC8NTOEK1Cj8O27pvy060U0XQ5lCi', 'Admin Perusahaan'),
(4, 'Arifin', 'arifin@gmail.com', '$2y$10$z/D82GvklqUbPe82qP0aFOry21/6Pp7LfTLv4U2bXT5cbHniUNdx.', 'Teknisi'),
(5, 'Mubarok', 'mubarok@gmail.com', '$2y$10$K6b05Czf7L86FFlLl2U1ruJt7XwnqHFPsCtCGUdwbObIe/5jGswUS', 'Teknisi'),
(6, 'Bowo', 'bowo@gmail.com', '$2y$10$jBuo7S.mCJQ8YS8OYSDgpOKdnh1PU60d5p/CFYcB8LNT1yl/ftv02', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_ht`);

--
-- Indeks untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id_maint`);

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
  MODIFY `id_ht` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id_maint` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
