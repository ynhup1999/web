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



-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE thongtin_phongdon (
  `id` int(11) NOT NULL,
  `sophong` varchar(3) NOT NULL UNIQUE,
  `xx` bit default 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('1','A1');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('2','A2');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('3','A3');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('4','B1');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('5','B2');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('6','B3');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('7','C1');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('8','C2');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('9','C3');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('10','D1');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('11','D2');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('12','D3');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('13','E1');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('14','E2');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('15','E3');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('16','F1');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('17','F2');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('18','F3');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('19','G1');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('20','G2');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('21','G3');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('22','H1');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('23','H2');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('24','H3');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('25','I1');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('26','I2');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('27','I3');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('28','J1');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('29','J2');
INSERT INTO `thongtin_phongdon` (`id`,`sophong`) VALUES('30','J3');

--
-- Indexes for table `product`
--
ALTER TABLE `thongtin_phongdon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--

-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `thongtin_phongdon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
