-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 04:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(2, 'akhdan', '81dc9bdb52d04dc20036dbd8313ed055', 'Akhdan Rafid Fadhila'),
(6, 'frida', '81dc9bdb52d04dc20036dbd8313ed055', 'Frida Eka Wardani'),
(9, 'abel', '81dc9bdb52d04dc20036dbd8313ed055', 'Raychal Ababil'),
(10, 'iqbal', '81dc9bdb52d04dc20036dbd8313ed055', 'Muhammad Iqbal Yusril'),
(13, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email_pengunjung` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `email_pengunjung`, `no_telp`, `create_at`) VALUES
(1, 'Zahra', 'zahrakha05@gmail.com', '081123123123', '2022-04-02 12:09:14'),
(2, 'Syahfira Angela', 'angelsfra@gmail.com', '081234567890', '2022-04-02 12:09:14'),
(3, 'Gracia', 'greshan@gmail.com', '081231131232', '2022-04-02 12:09:14'),
(4, 'Mikey', 'mikeykun@gmail.com', '081213123123', '2022-04-02 12:09:14'),
(5, 'Midoriya', 'dekudesu@gmail.com', '083231413221', '2022-04-02 12:09:14'),
(6, 'Adan', 'dans@gmail.com', '083432411321', '2022-04-02 12:09:14'),
(7, 'Rafa', 'Fa@gmail.com', '083412313123', '2022-04-02 12:09:14'),
(8, 'Zee', 'zee@gmail.com', '083244245123', '2022-04-02 12:09:14'),
(9, 'brielle', 'biyel@gmail.com', '082436264161', '2022-04-02 12:09:14'),
(10, 'Akaza', 'moon@gmail.com', '083246414313', '2022-04-02 12:09:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
