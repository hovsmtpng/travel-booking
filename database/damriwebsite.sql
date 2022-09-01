-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 09:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damriwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_list`
--

CREATE TABLE `booking_list` (
  `id_booking` int(5) NOT NULL,
  `kode_booking` varchar(50) DEFAULT NULL,
  `nama_penumpang` varchar(500) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `tanggal_booking` date DEFAULT NULL,
  `id_departure_schedule` int(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `seat` varchar(10) DEFAULT NULL,
  `payment_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_list`
--

INSERT INTO `booking_list` (`id_booking`, `kode_booking`, `nama_penumpang`, `id_users`, `tanggal_booking`, `id_departure_schedule`, `status`, `seat`, `payment_status`) VALUES
(1, 'BUSR1001', 'Sule Prikitiew', 2, '2022-01-03', 1, '1', '9', '1'),
(3, 'B002USR2', 'Bambang', 1, '2019-12-18', 1, '2', '4', '1'),
(10, 'B002USR2', 'asasas', 1, '2022-01-05', 1, '1', '7', '1'),
(13, 'B002USR2', 'hop', 1, '2022-01-05', 1, '1', '3', '0'),
(14, 'B002USR2', 'ss', 1, '2022-01-07', 1, '1', '1', '1'),
(16, 'B003USR3', 'sswef', 1, '2022-01-07', 1, '1', '4', '1'),
(17, 'B002USR2', 'tolopin', 1, '2022-01-11', 3, '1', '1', '0'),
(20, 'B002USR2', 'samsul', 1, '2022-01-11', 3, '0', '1', '0'),
(21, 'B002USR2', 'samsule', 1, '2022-01-12', 3, '0', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `departure_schedule`
--

CREATE TABLE `departure_schedule` (
  `id_departure_schedule` int(10) NOT NULL,
  `id_pool_keberangkatan` varchar(5) DEFAULT NULL,
  `id_pool_tujuan` varchar(5) DEFAULT NULL,
  `tanggal_keberangkatan` date DEFAULT NULL,
  `jam_keberangkatan` time DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `seat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departure_schedule`
--

INSERT INTO `departure_schedule` (`id_departure_schedule`, `id_pool_keberangkatan`, `id_pool_tujuan`, `tanggal_keberangkatan`, `jam_keberangkatan`, `price`, `seat`) VALUES
(3, '2', '1', '2022-01-06', '07:30:00', '60000', '1,2,3,4,5,6,7,8,9'),
(6, '2', '1', '2022-01-27', '09:30:00', '100000', '2,3,4,8,9'),
(7, '2', '2', '2022-01-13', '08:30:00', '900000', '1,2,3,4,5,6,7,8,9,10,11,12,13'),
(8, '1', '2', '2022-01-12', '08:00:00', '150000', '1,2,3,4,5,6,7,8,9,10,11,12,13');

-- --------------------------------------------------------

--
-- Table structure for table `pool_keberangkatan`
--

CREATE TABLE `pool_keberangkatan` (
  `id_pool_keberangkatan` int(10) NOT NULL,
  `nama_pool_keberangkatan` varchar(250) DEFAULT NULL,
  `pool_keberangkatan_descriptions` varchar(500) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pool_keberangkatan`
--

INSERT INTO `pool_keberangkatan` (`id_pool_keberangkatan`, `nama_pool_keberangkatan`, `pool_keberangkatan_descriptions`, `status`) VALUES
(1, 'Kualanamu International Airport', 'Jln. Binjai, No.109 Kab. Deli Serdang', '1'),
(2, 'Silangit International Airport', 'Jln. Silangit, No. 13, Kab. Tapanuli Utara', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pool_tujuan`
--

CREATE TABLE `pool_tujuan` (
  `id_pool_tujuan` int(11) NOT NULL,
  `nama_pool_tujuan` varchar(250) DEFAULT NULL,
  `pool_tujuan_descriptions` varchar(500) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pool_tujuan`
--

INSERT INTO `pool_tujuan` (`id_pool_tujuan`, `nama_pool_tujuan`, `pool_tujuan_descriptions`, `status`) VALUES
(1, 'Kualanamu International Airport', 'Jln. Binjai, No.109 Kab. Deli Serdang', '1'),
(2, 'Silangit International Airport', 'Jln. Silangit, No. 13, Kab. Tapanuli Utara', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `fullname`, `email`, `password`, `level`) VALUES
(1, 'Hovely Simatupang', 'hovelywzsimatupang@gmail.com', '1234', 'administrator'),
(2, 'User 1', 'user1@gmail.com', '1234', 'public_user'),
(3, 'hovely', 'user@gmail.com', '1234', 'public_user'),
(4, 'user 2', 'user2@gmail.com', '1234', 'public_user'),
(5, 'user 3', 'user3@gmail.com', '1234', 'public_user'),
(6, 'user 4', 'user4@gmail.com', '1234', 'public_user'),
(7, 'user 5', 'user5@gmail.com', '1234', 'public_user'),
(8, 'user 6', 'user6@gmail.com', '1234', 'public_user'),
(9, 'user 7', 'user7@gmail.com', '1234', 'public_user'),
(10, 'user 8', 'user8@gmail.com', '1234', 'public_user'),
(11, 'user 9', 'user9@gmail.com', '1234', 'public_user'),
(12, 'user 10', 'user10@gmail.com', '1234', 'public_user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `departure_schedule`
--
ALTER TABLE `departure_schedule`
  ADD PRIMARY KEY (`id_departure_schedule`);

--
-- Indexes for table `pool_keberangkatan`
--
ALTER TABLE `pool_keberangkatan`
  ADD PRIMARY KEY (`id_pool_keberangkatan`);

--
-- Indexes for table `pool_tujuan`
--
ALTER TABLE `pool_tujuan`
  ADD PRIMARY KEY (`id_pool_tujuan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_list`
--
ALTER TABLE `booking_list`
  MODIFY `id_booking` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `departure_schedule`
--
ALTER TABLE `departure_schedule`
  MODIFY `id_departure_schedule` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pool_keberangkatan`
--
ALTER TABLE `pool_keberangkatan`
  MODIFY `id_pool_keberangkatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pool_tujuan`
--
ALTER TABLE `pool_tujuan`
  MODIFY `id_pool_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
