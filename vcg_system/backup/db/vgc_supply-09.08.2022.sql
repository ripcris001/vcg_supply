-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 09:05 AM
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
-- Table structure for table `vgc_brand`
--

CREATE TABLE `vgc_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(500) NOT NULL,
  `brand_description` text NOT NULL,
  `brand_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_brand`
--

INSERT INTO `vgc_brand` (`brand_id`, `brand_name`, `brand_description`, `brand_image`) VALUES
(1, 'Brandix', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_category`
--

CREATE TABLE `vgc_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_category`
--

INSERT INTO `vgc_category` (`cat_id`, `cat_name`) VALUES
(1, 'Door Handles'),
(2, 'Tires Collection');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_product`
--

CREATE TABLE `vgc_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_price` double(11,2) NOT NULL,
  `product_image` text NOT NULL,
  `product_description` text NOT NULL,
  `product_brand` int(11) DEFAULT NULL,
  `product_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_product`
--

INSERT INTO `vgc_product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_description`, `product_brand`, `product_category`) VALUES
(1, 'Automotive Motor Filter', 55.00, '/vcg_system/component/theme/frontstore/assets/img/shop/shop-3.png', '{\"Type\": \"Coil Spring\", \"Power Source\": \"Electrical\", \"Aut Accessory\": \"machining/turning/Stamping\", \"Production Capacity\": \"10000 Pieces\",\r\n\"Spring Material\": \"Stainless Steel\"}', 1, 1),
(2, 'Brandix Rim 17 Inci', 189.00, '/vcg_system/component/theme/frontstore/assets/img/shop/shop-1.png', '{\"Speed\": \"750 RPM\",\"Power Source\":\"Electrical\",\"Battery Cell Type\":\"Aluminium\",\"Voltage\": \"20 Volts\",\"Battery Capacity\": \"2 Ah\"}', 1, 2),
(3, 'Brandix Wheel', 289.00, '/vcg_system/component/theme/frontstore/assets/img/shop/shop-2.png', '{\"Speed\": \"750 RPM\" ,\"Power Source\": \"Non-Electric\" ,\"Auto Accessory\": \"Toyota Honda Nissan Shock Absobe Damper\" ,\"Product Type\": \"Hot selling\" ,\"Spring Material\": \"Steel\"}', 1, 3);

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
-- Indexes for table `vgc_brand`
--
ALTER TABLE `vgc_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `vgc_category`
--
ALTER TABLE `vgc_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `vgc_product`
--
ALTER TABLE `vgc_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `vgc_users`
--
ALTER TABLE `vgc_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vgc_brand`
--
ALTER TABLE `vgc_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vgc_category`
--
ALTER TABLE `vgc_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vgc_product`
--
ALTER TABLE `vgc_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vgc_users`
--
ALTER TABLE `vgc_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
