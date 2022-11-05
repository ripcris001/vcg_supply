-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2022 at 08:57 AM
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
  `brand_name` varchar(500) DEFAULT NULL,
  `brand_description` text,
  `brand_image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_brand`
--

INSERT INTO `vgc_brand` (`brand_id`, `brand_name`, `brand_description`, `brand_image`) VALUES
(1, 'rstone', '', ''),
(2, 'booster', '', ''),
(3, 'outlast', '', ''),
(4, 'stamina', '', ''),
(5, 'megaforce', '', ''),
(6, 'matrix', '', ''),
(7, 'brandix', '', ''),
(8, 'winda', '', ''),
(9, 'ceat', '', ''),
(10, 'blacklion', '', ''),
(11, 'achilles', '', ''),
(12, 'leao-china', '', ''),
(13, 'leao-thai', '', ''),
(14, 'federal', '', ''),
(15, 'linglong', '', ''),
(16, 'honda', NULL, NULL),
(17, 'suzuki', NULL, NULL),
(18, 'yamaha', NULL, NULL),
(19, 'ruzi', NULL, NULL),
(20, 'cadilak', NULL, NULL),
(21, 'rhino', NULL, NULL),
(22, 'navara', NULL, NULL),
(23, 'kemira', NULL, NULL),
(24, 'jape', NULL, NULL),
(25, 'megan', NULL, NULL),
(26, 'japers', NULL, NULL),
(27, 'sadas', NULL, NULL),
(28, 'megans', NULL, NULL),
(29, 'jamis', NULL, NULL),
(30, 'kmisr', NULL, NULL),
(31, 'sawsa', NULL, NULL),
(32, 'sadassas', NULL, NULL),
(33, 'd2343da', NULL, NULL),
(34, 'dasdasd', NULL, NULL),
(35, 'asfafafasf', NULL, NULL),
(36, 'sdfda2', NULL, NULL),
(37, 'fsdfasdfas', NULL, NULL),
(38, 'fasfasdasd', NULL, NULL),
(39, 'gfgfdsdf', NULL, NULL),
(40, 'fasfasfas', NULL, NULL),
(41, 'fafad', NULL, NULL),
(42, 'fa2ad', NULL, NULL),
(43, '252radasda', NULL, NULL),
(44, 'jamika', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vgc_category`
--

CREATE TABLE `vgc_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_category`
--

INSERT INTO `vgc_category` (`cat_id`, `cat_name`) VALUES
(1, 'rim'),
(2, 'tubes-trucks'),
(3, 'flaps-trucks'),
(4, 'flaps-tractor'),
(5, 'batteries'),
(6, 'oil'),
(7, 'filters'),
(8, 'headlight'),
(9, 'tires'),
(10, 'car paint'),
(11, 'motor-chain'),
(12, 'bike-chain'),
(13, 'rim paint'),
(14, 'basic paint');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_customer`
--

CREATE TABLE `vgc_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(500) DEFAULT NULL,
  `customer_company` varchar(900) DEFAULT NULL,
  `customer_tax_no` varchar(500) DEFAULT NULL,
  `customer_email` varchar(900) DEFAULT NULL,
  `customer_phone_no` varchar(500) DEFAULT NULL,
  `customer_address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vgc_customer`
--

INSERT INTO `vgc_customer` (`customer_id`, `customer_name`, `customer_company`, `customer_tax_no`, `customer_email`, `customer_phone_no`, `customer_address`) VALUES
(1, 'jaden yuki', '', '', 'ripcris10@gmail.com', '12345', 'banago bacolod city'),
(2, 'mad man', '', '', 'ripcris10@gmail.com', '12345', ''),
(3, 'mayok', '', '', 'mayok@google.com', '12345', ''),
(4, 'mayoris', '', '', 'mayoris@google.com', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_customer_shipping_address`
--

CREATE TABLE `vgc_customer_shipping_address` (
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `country` varchar(500) DEFAULT NULL,
  `province` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `barangay` varchar(500) DEFAULT NULL,
  `postal_code` varchar(500) DEFAULT NULL,
  `street` text,
  `contact_number` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_customer_shipping_address`
--

INSERT INTO `vgc_customer_shipping_address` (`shipping_id`, `customer_id`, `country`, `province`, `city`, `barangay`, `postal_code`, `street`, `contact_number`) VALUES
(1, 1, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'langis', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_product`
--

CREATE TABLE `vgc_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) DEFAULT NULL,
  `product_price` decimal(12,2) DEFAULT NULL,
  `product_image` text,
  `product_description` text,
  `product_category` int(11) NOT NULL DEFAULT '0',
  `product_brand` int(11) NOT NULL DEFAULT '0',
  `product_code` varchar(500) DEFAULT NULL,
  `product_barcode` varchar(800) DEFAULT NULL,
  `product_design` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_product`
--

INSERT INTO `vgc_product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_description`, `product_category`, `product_brand`, `product_code`, `product_barcode`, `product_design`) VALUES
(1, '185 r14', '1589.00', NULL, '{}', 1, 1, '00000001', NULL, 'rhino'),
(2, '185 r15', '1650.00', NULL, '{}', 1, 1, '00000002', NULL, 'rhino'),
(3, '185 r14', '1589.00', NULL, '{}', 1, 2, '00000003', NULL, 'rhino');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_product_inventory`
--

CREATE TABLE `vgc_product_inventory` (
  `id` int(11) NOT NULL,
  `date_created` date DEFAULT NULL,
  `selectedProduct` text,
  `po_number` varchar(500) DEFAULT NULL,
  `po_date` date DEFAULT NULL,
  `total_item` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `assign_employee` int(11) DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vgc_product_inventory`
--

INSERT INTO `vgc_product_inventory` (`id`, `date_created`, `selectedProduct`, `po_number`, `po_date`, `total_item`, `status`, `assign_employee`, `note`) VALUES
(1, '2022-11-01', '[{\"brand\":\"rstone\",\"category\":\"rim\",\"product_design\":\"rhino\",\"product_id\":\"1\",\"quantity\":\"5\",\"product_name\":\"185 r14\"}]', 'po-0001', '2022-11-02', 1, 'approved', 1, NULL);

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
-- Table structure for table `vgc_product_stock`
--

CREATE TABLE `vgc_product_stock` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `current_quantity` int(11) DEFAULT '0',
  `sold_quantity` int(11) NOT NULL DEFAULT '0',
  `pending_quantity` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vgc_product_stock`
--

INSERT INTO `vgc_product_stock` (`id`, `product_id`, `current_quantity`, `sold_quantity`, `pending_quantity`) VALUES
(1, 1, 105, 6, 0),
(2, 2, 100, 1, 0),
(3, 3, 5, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `vgc_transaction`
--

CREATE TABLE `vgc_transaction` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(500) DEFAULT NULL,
  `customer` text,
  `payment` text,
  `selectedProduct` text,
  `discount` int(11) NOT NULL DEFAULT '0',
  `discount_amount` decimal(11,2) DEFAULT NULL,
  `sub_total` decimal(11,2) DEFAULT NULL,
  `overall_total` decimal(11,2) DEFAULT NULL,
  `tax` decimal(11,2) DEFAULT NULL,
  `taxable` decimal(11,2) DEFAULT NULL,
  `shipping` text,
  `shipping_cost` decimal(11,2) DEFAULT NULL,
  `additional_discount` decimal(11,2) DEFAULT NULL,
  `amount_payed` decimal(11,2) DEFAULT NULL,
  `amount_balance` decimal(11,2) DEFAULT NULL,
  `total_payment` decimal(11,2) DEFAULT NULL,
  `total_item` int(11) NOT NULL DEFAULT '0',
  `card_payment` decimal(11,2) DEFAULT NULL,
  `cash_payment` decimal(11,2) DEFAULT NULL,
  `assign_cashier` int(11) NOT NULL,
  `delivery_status` varchar(500) DEFAULT NULL,
  `transaction_type` varchar(500) NOT NULL DEFAULT 'walkin',
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vgc_transaction`
--

INSERT INTO `vgc_transaction` (`id`, `transaction_id`, `customer`, `payment`, `selectedProduct`, `discount`, `discount_amount`, `sub_total`, `overall_total`, `tax`, `taxable`, `shipping`, `shipping_cost`, `additional_discount`, `amount_payed`, `amount_balance`, `total_payment`, `total_item`, `card_payment`, `cash_payment`, `assign_cashier`, `delivery_status`, `transaction_type`, `date_created`) VALUES
(1, 'TRO0000000001', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":5000,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":1650,\"price\":1650},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}}]', 0, '0.00', '1650.00', '1650.00', '198.00', '1452.00', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '1650.00', '0.00', '5000.00', 1, '0.00', '5000.00', 1, '', 'walkin', '2022-11-01'),
(2, 'TRO0000000002', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":5000,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":3,\"subtotal\":4767,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '4767.00', '4767.00', '572.04', '4194.96', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '4767.00', '0.00', '5000.00', 1, '0.00', '5000.00', 1, '', 'walkin', '2022-11-01'),
(3, 'TRO0000000003', '{\"customer_id\":\"1\",\"info\":{\"customer_id\":\"1\",\"customer_name\":\"jaden yuki\",\"customer_company\":\"\",\"customer_tax_no\":\"\",\"customer_email\":\"ripcris10@gmail.com\",\"customer_phone_no\":\"12345\",\"customer_address\":\"banago bacolod city\",\"address\":[{\"shipping_id\":\"1\",\"customer_id\":\"1\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"langis\",\"contact_number\":\"1234567\"}]},\"status\":\"delivery\"}', '[{\"amount\":2100,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '1589.00', '2089.00', '190.68', '1398.32', '{\"shipping_id\":\"all\",\"info\":{\"shipping_address\":\"Select Shipping Address\",\"shipping_id\":\"all\",\"shipping_charge\":\"500\",\"shipping_status\":\"open\",\"shipping_note\":\"sa bangga subay lng\"},\"delivery_progress\":[]}', '500.00', '0.00', '2089.00', '0.00', '2100.00', 1, '0.00', '2100.00', 1, '', 'delivery', '2022-11-01'),
(4, 'TRO0000000004', '{\"customer_id\":\"1\",\"info\":{\"customer_id\":\"1\",\"customer_name\":\"jaden yuki\",\"customer_company\":\"\",\"customer_tax_no\":\"\",\"customer_email\":\"ripcris10@gmail.com\",\"customer_phone_no\":\"12345\",\"customer_address\":\"banago bacolod city\",\"address\":[{\"shipping_id\":\"1\",\"customer_id\":\"1\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"langis\",\"contact_number\":\"1234567\"}]},\"status\":\"delivery\"}', '[{\"amount\":2200,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '1589.00', '2189.00', '190.68', '1398.32', '{\"shipping_id\":\"1\",\"info\":{\"shipping_address\":\"langis banago, bacolod city, negros occidental\",\"shipping_id\":\"1\",\"shipping_charge\":\"600\",\"shipping_status\":\"open\",\"shipping_note\":\"sa banga subay lng e dul.ong\"},\"delivery_progress\":[]}', '600.00', '0.00', '2189.00', '0.00', '2200.00', 1, '0.00', '2200.00', 1, '', 'delivery', '2022-11-01'),
(5, 'TRO0000000005', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":5000,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '1589.00', '1589.00', '190.68', '1398.32', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '1589.00', '0.00', '5000.00', 1, '0.00', '5000.00', 2, '', 'walkin', '2022-11-02');

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
(1, '/admin', 'developer,admin,manager', 1),
(2, '/admin/transaction', 'developer,admin,manager', 1),
(3, '/pos', 'developer,admin,manager,cashier', 1),
(4, '/admin/user', 'developer,admin,manager', 1),
(5, '/admin/inventory', 'developer,admin,manager', 1),
(6, '/admin/product', 'developer,admin,manager', 1),
(7, '/admin/product/brand', 'developer,admin,manager', 1),
(8, '/admin/inventory/add', 'developer,admin,manager', 1),
(9, '/admin/transaction/view', 'developer,admin,manager', 1),
(10, '/admin/product/add', 'developer,admin,manager', 1);

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
(1, 'ripcris', 'C+TsaC53Vyf5hqxpMVWwHQ==', 'UZf29l6yy5c0riT7', 'Jaden', 'Admin', 'developer'),
(2, 'ripcris1', 'BTIJoPKmVEK3+qCVkTjSqQ==', 'Eup2jpvScoRrICGp', 'jaden me ', 'yuki', 'admin'),
(3, 'ripcris2', 'XnA4MxdVa81GlSazgAR9Ig==', 'UZf29l6yy5c0riT7', 'jaden', 'yuki', 'admin'),
(4, 'ripcris3', 'XnA4MxdVa81GlSazgAR9Ig==', 'UZf29l6yy5c0riT7', 'jaden', 'yuki', 'admin'),
(5, 'ripcris4', 'a5kjWOj8QMGZOxLob3cWyA==', 'UZf29l6yy5c0riT7', 'jaden', 'yuki', 'admin'),
(6, 'ripcris5', 'a5kjWOj8QMGZOxLob3cWyA==', '', 'jaden', 'yuki', 'admin'),
(7, 'ripcris6', 'o9aFUpJNLfFVk4xwPUFcdQ==', 'aQBN1JaWkre3Eayc', 'jaden', 'yuki', 'admin'),
(8, 'ripcris7', 'U/w/cWXZNwutAIY9hIUnNQ==', 'U7lsoMCXCR94cj6U', 'jaden', 'yuki', 'admin');

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
-- Indexes for table `vgc_customer`
--
ALTER TABLE `vgc_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `vgc_customer_shipping_address`
--
ALTER TABLE `vgc_customer_shipping_address`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `vgc_product`
--
ALTER TABLE `vgc_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `vgc_product_inventory`
--
ALTER TABLE `vgc_product_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vgc_product_sale`
--
ALTER TABLE `vgc_product_sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `vgc_product_stock`
--
ALTER TABLE `vgc_product_stock`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `vgc_category`
--
ALTER TABLE `vgc_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `vgc_customer`
--
ALTER TABLE `vgc_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vgc_customer_shipping_address`
--
ALTER TABLE `vgc_customer_shipping_address`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vgc_product`
--
ALTER TABLE `vgc_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vgc_product_inventory`
--
ALTER TABLE `vgc_product_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vgc_product_sale`
--
ALTER TABLE `vgc_product_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vgc_product_stock`
--
ALTER TABLE `vgc_product_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vgc_transaction`
--
ALTER TABLE `vgc_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vgc_url_roles`
--
ALTER TABLE `vgc_url_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `vgc_users`
--
ALTER TABLE `vgc_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `vgc_user_roles`
--
ALTER TABLE `vgc_user_roles`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
