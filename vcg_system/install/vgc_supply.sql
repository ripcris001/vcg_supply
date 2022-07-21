-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 09:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vgc_supply`
--

-- --------------------------------------------------------

--
-- Table structure for table `vgc_users`
--

CREATE TABLE `vgc_users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(500) DEFAULT NULL,
  `Password` varchar(999) DEFAULT NULL,
  `Hash` varchar(999) DEFAULT NULL,
  `FirstName` varchar(250) DEFAULT NULL,
  `LastName` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_users`
--

INSERT INTO `vgc_users` (`ID`, `Username`, `Password`, `Hash`, `FirstName`, `LastName`) VALUES
(1, 'ripcris', 'C+TsaC53Vyf5hqxpMVWwHQ==', 'UZf29l6yy5c0riT7', 'Super', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vgc_users`
--
ALTER TABLE `vgc_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vgc_users`
--
ALTER TABLE `vgc_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
