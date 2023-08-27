-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 04:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anaklanang`
--

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tipe` enum('Masuk','Izin','Sakit','Cuti') NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis') NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `nama`, `tanggal`, `tipe`, `hari`, `jam`) VALUES
(34, 'Tes', '2021-12-29', 'Masuk', 'Senin', '15:43:00'),
(35, 'udin', '2022-12-15', 'Izin', 'Selasa', '15:58:00'),
(36, 'Brasil', '2022-12-14', 'Masuk', 'Selasa', '16:24:00'),
(37, 'ngajar', '2022-12-14', 'Sakit', 'Senin', '16:32:00'),
(38, 'Coding', '2022-12-14', 'Cuti', 'Kamis', '16:37:00'),
(39, 'belajar', '2022-12-22', 'Masuk', 'Kamis', '10:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `no_hp`, `email`) VALUES
(74, 'Novan', 'novan', '$2y$10$R.OKULMSms7A64habQCkwe2vLIEdKFZos0fJ1LGYu8zw1v/MBq3o2', '0812345678', 'novan@gmail.com'),
(75, 'Admin', 'admin', '$2y$10$piv6gVup6mRn7Fwi2ph/2OiHX5irXJ.TS5h/9k/BlfX09a8lQ60BC', '0812345678', 'admin@gmail.com'),
(76, 'as', 'a', '123', '123', 'a@g.om'),
(77, 'as', 'a', '123', '123', 'a@g.om'),
(78, 'as', 'a', '123', '123', 'a@g.om'),
(79, '', '', '', '', ''),
(80, '', '', '', '', ''),
(81, 'aki', 'as', '123', '0000', '12@gmail.com'),
(82, 'aldi sri', 'aldi', '123', '88', '12@g.com'),
(83, 'abi', 'ww', '222', '123', 'a@g.om'),
(84, 'aku', 'aku', '555', '555', '12@gmail.com'),
(85, 'qq', 'qq', '123', '123', 'a@g.om');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
