-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 02:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_marketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE thongtin_datphong (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL UNIQUE,
  `ngaysinh` date NOT NULL,
  `socmnd` varchar(12) NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `sophong` varchar(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ngaynhan` date,
  `ngaytra` date,
  `tongchiphi` int
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--


--
-- Indexes for table `product`
--
ALTER TABLE `thongtin_datphong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--

-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `thongtin_datphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
