-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2022 at 01:46 AM
-- Server version: 5.7.39-0ubuntu0.18.04.2
-- PHP Version: 7.2.24-0ubuntu0.18.04.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'Rstone', '', ''),
(2, 'Booster', '', ''),
(3, 'Outlast', '', ''),
(4, 'Stamina', '', ''),
(5, 'Megaforce', '', ''),
(6, 'Matrix', '', ''),
(7, 'Brandix', '', ''),
(8, 'WINDA', '', ''),
(9, 'CEAT', '', ''),
(10, 'BLACKLION', '', ''),
(11, 'ACHILLES', '', ''),
(12, 'LEAO-CHINA', '', ''),
(13, 'LEAO-THAI', '', ''),
(14, 'FEDERAL', '', ''),
(15, 'LINGLONG', '', '');

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
(1, 'Rim'),
(2, 'Tubes-Trucks'),
(3, 'Flaps-trucks'),
(4, 'Flaps-tractor'),
(5, 'Batteries'),
(6, 'Oil'),
(7, 'Filters');

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
  `product_category` int(11) NOT NULL DEFAULT '0',
  `product_brand` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_product`
--

INSERT INTO `vgc_product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_description`, `product_category`, `product_brand`) VALUES
(1, 'Automotive Motor Filter', 55.00, '/img/shop/shop-3.png', '{\"Type\": \"Coil Spring\", \"Power Source\": \"Electrical\", \"Aut Accessory\": \"machining/turning/Stamping\", \"Production Capacity\": \"10000 Pieces\",\r\n\"Spring Material\": \"Stainless Steel\"}', 1, 2),
(2, 'Brandix Rim 17 Inci', 189.00, '/img/shop/shop-1.png', '{\"Speed\": \"750 RPM\",\"Power Source\":\"Electrical\",\"Battery Cell Type\":\"Aluminium\",\"Voltage\": \"20 Volts\",\"Battery Capacity\": \"2 Ah\"}', 1, 1),
(3, 'Brandix Wheel', 289.00, '/img/shop/shop-2.png', '{\"Speed\": \"750 RPM\" ,\"Power Source\": \"Non-Electric\" ,\"Auto Accessory\": \"Toyota Honda Nissan Shock Absobe Damper\" ,\"Product Type\": \"Hot selling\" ,\"Spring Material\": \"Steel\"}', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vgc_product_sale`
--

CREATE TABLE `vgc_product_sale` (
  `sale_id` int(11) NOT NULL,
  `product_list` varchar(500) DEFAULT NULL,
  `sale_status` varchar(225) DEFAULT 'inactive',
  `sale_start_date` date DEFAULT NULL,
  `sale_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_product_sale`
--

INSERT INTO `vgc_product_sale` (`sale_id`, `product_list`, `sale_status`, `sale_start_date`, `sale_end_date`) VALUES
(1, '1,2,3', 'inactive', '2022-09-01', '2022-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_transaction`
--

CREATE TABLE `vgc_transaction` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(500) NOT NULL,
  `transaction_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `transaction_details` text,
  `payment_details` text NOT NULL,
  `discount_details` text NOT NULL,
  `total_amount` double(11,2) NOT NULL,
  `total_payment` double(11,2) NOT NULL,
  `total_discount` double(11,2) NOT NULL,
  `assign_casher` int(11) NOT NULL DEFAULT '0',
  `transaction_remarks` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vgc_url_roles`
--

CREATE TABLE `vgc_url_roles` (
  `role_id` int(11) NOT NULL,
  `url` varchar(800) DEFAULT NULL,
  `roles` text,
  `require_login` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_url_roles`
--

INSERT INTO `vgc_url_roles` (`role_id`, `url`, `roles`, `require_login`) VALUES
(1, '/admin', 'developer,superadmin', 0);

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
  `LastName` varchar(250) DEFAULT NULL,
  `user_role_index` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_users`
--

INSERT INTO `vgc_users` (`ID`, `Username`, `Password`, `Hash`, `FirstName`, `LastName`, `user_role_index`) VALUES
(1, 'ripcris', 'C+TsaC53Vyf5hqxpMVWwHQ==', 'UZf29l6yy5c0riT7', 'Super', 'Admin', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_user_roles`
--

CREATE TABLE `vgc_user_roles` (
  `user_role_id` int(11) NOT NULL,
  `user_role_name` varchar(500) DEFAULT NULL,
  `user_role_index` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_user_roles`
--

INSERT INTO `vgc_user_roles` (`user_role_id`, `user_role_name`, `user_role_index`) VALUES
(1, 'Developer', 'developer'),
(2, 'Super Admin', 'superadmin');

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
-- Indexes for table `vgc_product_sale`
--
ALTER TABLE `vgc_product_sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `vgc_transaction`
--
ALTER TABLE `vgc_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vgc_url_roles`
--
ALTER TABLE `vgc_url_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `vgc_users`
--
ALTER TABLE `vgc_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vgc_user_roles`
--
ALTER TABLE `vgc_user_roles`
  ADD PRIMARY KEY (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vgc_brand`
--
ALTER TABLE `vgc_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `vgc_category`
--
ALTER TABLE `vgc_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vgc_product`
--
ALTER TABLE `vgc_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vgc_product_sale`
--
ALTER TABLE `vgc_product_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vgc_transaction`
--
ALTER TABLE `vgc_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vgc_url_roles`
--
ALTER TABLE `vgc_url_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vgc_users`
--
ALTER TABLE `vgc_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vgc_user_roles`
--
ALTER TABLE `vgc_user_roles`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
