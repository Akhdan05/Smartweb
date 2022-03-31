-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2022 pada 08.16
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(2, 'akhdan', '81dc9bdb52d04dc20036dbd8313ed055', 'Akhdan Rafid Fadhila'),
(6, 'frida', '81dc9bdb52d04dc20036dbd8313ed055', 'Frida Eka Wardani'),
(9, 'abel', '81dc9bdb52d04dc20036dbd8313ed055', 'Raychal Ababil'),
(10, 'iqbal', '81dc9bdb52d04dc20036dbd8313ed055', 'Muhammad Iqbal Yusril');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email_pengunjung` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `email_pengunjung`, `no_telp`) VALUES
(1, 'Zahra', 'zahrakha05@gmail.com', '081123123123'),
(2, 'Syahfira Angela', 'angelsfra@gmail.com', '081234567890'),
(3, 'Gracia', 'greshan@gmail.com', '081231131232'),
(4, 'Mikey', 'mikeykun@gmail.com', '081213123123'),
(5, 'Midoriya', 'dekudesu@gmail.com', '083231413221'),
(6, 'Adan', 'dans@gmail.com', '083432411321'),
(7, 'Rafa', 'Fa@gmail.com', '083412313123'),
(8, 'Zee', 'zee@gmail.com', '083244245123'),
(9, 'brielle', 'biyel@gmail.com', '082436264161'),
(10, 'Akaza', 'moon@gmail.com', '083246414313');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
