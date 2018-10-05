-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 06:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjualbukurpl3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `KodeUser` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `NamaLengkap` varchar(30) NOT NULL,
  `Telp` varchar(15) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`KodeUser`, `Username`, `Password`, `NamaLengkap`, `Telp`, `Alamat`, `Email`, `Level`) VALUES
(2, 'ryanardito', 'kupretelek14', 'Ryan Ardito Zahwan Ragazzo', '081339760178', 'Jalan Gunung Himalaya 1B No.2', 'ryanardito25@gmail.com', 'Admin'),
(3, 'admin', 'admin', 'admin pertama', '081123123123', 'Computer', 'admin@gmail.com', 'Admin'),
(4, 'premaagusp', 'sanoer34', 'Prema Agus', '087761661669', 'asdkjalksdj', 'asasdlka@gmail.com', 'Kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`KodeUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `KodeUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
