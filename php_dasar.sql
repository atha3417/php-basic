-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 12:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_dasar`
--
CREATE DATABASE IF NOT EXISTS `php_dasar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php_dasar`;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Sandhika Galih', '921376251', 'sandhikagalih@unpas.ac.id', 'Teknik Informatika', '1.jpg'),
(2, 'Muhammad Atha Tsaqif', '123456789', 'atha.3417@gmail.com', 'Teknik Informatika', '2.jpg'),
(3, 'Nafisa Zahra', '987654320', 'nafisa4810@gmail.com', 'Kimia', '3.jpg'),
(4, 'Doddy Ferdiansyah', '526173428', 'doddy@yahoo.com', 'Teknik Industri', '4.jpg'),
(5, 'Saffanah Zahwa Athifah', '18190706', 'wawa@gmail.com', 'Teknik Informatika', '5.jpg'),
(6, 'Fathan Ahmad Tsiqah', '723142319', 'fathanahmats@gmail.com', 'Teknik Informatika', '6.jpg'),
(7, 'Wildan Sunli', '923313240', 'wildansuns@yahoo.com', 'Teknik Planologi', '7.jpg'),
(8, 'Rayner Aldhia', '725135244', 'rayneral@yahoo.com', 'Sastra', '8.jpg'),
(9, 'Farrel Alexander', '121232879', 'farellax@gaggle.email', 'Biologi', '9.jpg'),
(10, 'Fayza Azmina Fachira', '925173841', 'fayzazzra@gmail.com', 'Teknik Informatika', '10.jpg'),
(11, 'Marchelle Vicky Angelie', '912541627', 'chelle@gmail.com', 'Teknik Informatika', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL COMMENT '0 untuk tidak aktif, 1 untuk aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `is_active`) VALUES
(5, 'admin', '$argon2i$v=19$m=65536,t=4,p=1$ZHlRV0NMQlVTcC9RVjNsWA$Yoj6NP/NrF27pfgFCXju9+i34zSVj5FOKJbSNrdsypE', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
