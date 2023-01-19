-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 11:11 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
  `brand_name` varchar(500) DEFAULT NULL,
  `brand_description` text DEFAULT NULL,
  `brand_image` text DEFAULT NULL
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
(44, 'jamika', NULL, NULL),
(45, 'leao', NULL, NULL),
(46, 'gremax', NULL, NULL),
(47, 'fortune', NULL, NULL),
(48, 'matrix-korea', NULL, NULL);

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
(14, 'basic paint'),
(15, 'TRUCK TIRES'),
(16, 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_customer`
--

CREATE TABLE `vgc_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_username` varchar(500) DEFAULT NULL,
  `customer_password` varchar(500) DEFAULT NULL,
  `customer_hash` varchar(500) DEFAULT NULL,
  `customer_name` varchar(500) DEFAULT NULL,
  `customer_company` varchar(900) DEFAULT NULL,
  `customer_tax_no` varchar(500) DEFAULT NULL,
  `customer_email` varchar(900) DEFAULT NULL,
  `customer_phone_no` varchar(500) DEFAULT NULL,
  `customer_address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vgc_customer`
--

INSERT INTO `vgc_customer` (`customer_id`, `customer_username`, `customer_password`, `customer_hash`, `customer_name`, `customer_company`, `customer_tax_no`, `customer_email`, `customer_phone_no`, `customer_address`) VALUES
(1, NULL, NULL, NULL, 'jaden yuki', '', '', 'ripcris10@gmail.com', '12345', 'banago bacolod city'),
(2, NULL, NULL, NULL, 'mad man', '', '', 'ripcris10@gmail.com', '12345', ''),
(3, NULL, NULL, NULL, 'mayok', '', '', 'mayok@google.com', '12345', ''),
(4, NULL, NULL, NULL, 'mayoris', '', '', 'mayoris@google.com', '12345', ''),
(5, NULL, NULL, NULL, 'khalil', '', '', 'bargayo@gmail.com', '09955012452', 'banago'),
(6, 'khalil', 'HyZ+ciWhKMvu2qWu+H3n0g==', 'DMi5mfEEB3m2rDog', 'khalilbargayo', NULL, NULL, 'khalilbargayo@gmail.com', '09955012452', 'banago'),
(7, 'bargayo', 'fJMZiLUqTjwLqKU3bWbLJA==', 'guHbjP6FK7jD2Wrp', 'bargayo', NULL, NULL, 'bargayo@gmail.com', '09955012452', 'Banago Bacolod City');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_customer_cart`
--

CREATE TABLE `vgc_customer_cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_list` text NOT NULL,
  `cart_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_customer_cart`
--

INSERT INTO `vgc_customer_cart` (`cart_id`, `customer_id`, `product_list`, `cart_status`) VALUES
(1, 6, '[{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":\"1650.00\",\"price\":\"1650.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"3\",\"transaction\":{\"id\":\"3\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"booster\",\"category\":\"booster\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 'completed'),
(2, 6, '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":\"1650.00\",\"price\":\"1650.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"6\",\"transaction\":{\"id\":\"6\",\"quantity\":1,\"subtotal\":\"2050.00\",\"price\":\"2050.00\"},\"info\":{\"brand\":\"leao-china\",\"category\":\"leao-china\",\"product_name\":\"155 r12\",\"product_price\":\"2050.00\"}}]', 'completed'),
(3, 7, '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":\"1650.00\",\"price\":\"1650.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"3\",\"transaction\":{\"id\":\"3\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"booster\",\"category\":\"booster\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 'completed'),
(4, 7, '[{\"product_id\":\"3\",\"transaction\":{\"id\":\"3\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"booster\",\"category\":\"booster\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"6\",\"transaction\":{\"id\":\"6\",\"quantity\":1,\"subtotal\":\"2050.00\",\"price\":\"2050.00\"},\"info\":{\"brand\":\"leao-china\",\"category\":\"leao-china\",\"product_name\":\"155 r12\",\"product_price\":\"2050.00\"}}]', 'completed'),
(5, 7, '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 'completed'),
(6, 7, '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":\"1650.00\",\"price\":\"1650.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}}]', 'completed'),
(7, 7, '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":\"1650.00\",\"price\":\"1650.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rstone\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}}]', 'completed'),
(8, 7, '[{\"product_id\":\"23\",\"transaction\":{\"id\":\"23\",\"quantity\":1,\"subtotal\":\"500.00\",\"price\":\"500.00\"},\"info\":{\"brand\":\"\",\"category\":\"\",\"product_name\":\"towing\",\"product_price\":\"500.00\"}}]', 'processing');

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
  `street` text DEFAULT NULL,
  `contact_number` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vgc_customer_shipping_address`
--

INSERT INTO `vgc_customer_shipping_address` (`shipping_id`, `customer_id`, `country`, `province`, `city`, `barangay`, `postal_code`, `street`, `contact_number`) VALUES
(1, 1, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'langis', '1234567'),
(2, 5, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', '', '', 'lacson street', '09955012452'),
(3, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'purok,bayanihan', '09955012452'),
(4, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'sto,domingo', '09955012452'),
(5, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'prk.stodomingo', '09955012452'),
(6, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'purok sto.domingo', '09955012452'),
(7, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'purok stodomingo', '09955012452'),
(8, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '012445', 'Purok Sto.Domingo', '09955012452'),
(9, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '6100', 'Purok Sto.domingo', '09955012452'),
(10, 7, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'ALIJIS', '6100', 'Banago', '09955012452'),
(11, 7, 'philippines', 'NEGROS OCCIDENTAL', 'BAGO CITY', 'MALINGIN', '6100', 'Banago', '09955012452'),
(12, 7, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'ALANGILAN', '6200', 'Purok, Mars', '9112346789'),
(13, 7, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '6100', 'Purok Bayanihan', '09955012452'),
(14, 7, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '6100', 'stodomingo', '09955012452'),
(15, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '6100', 'Langis', '09955012451'),
(16, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'langis', '09955012452'),
(17, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'Purok Langis', '09955012452'),
(18, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'Purok Langis ', '09955012452'),
(19, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'Purok Langis', '09955012452'),
(20, 6, 'philippines', 'NEGROS OCCIDENTAL', 'BACOLOD CITY', 'BANAGO', '', 'Purok Langis', '09955012452'),
(21, 7, 'philippines', 'NEGROS ORIENTAL', 'BAIS CITY', 'BARANGAY I (POB.)', '', 'domingo', '09955012451'),
(22, 7, 'philippines', 'NEGROS OCCIDENTAL', 'BINALBAGAN', 'BAGROY', '709831', 'banago', '09955012452'),
(23, 7, 'philippines', 'NEGROS OCCIDENTAL', 'CADIZ CITY', 'BARANGAY 1 POB. (ZONE 1)', '', 'burgos', '09955012452'),
(24, 1, 'philippines', 'NEGROS ORIENTAL', 'BAYAWAN CITY (TULONG)', 'BANGA', '', 'Bangus', '09955012452');

-- --------------------------------------------------------

--
-- Table structure for table `vgc_product`
--

CREATE TABLE `vgc_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) DEFAULT NULL,
  `product_price` decimal(12,2) DEFAULT NULL,
  `product_image` text DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_category` int(11) NOT NULL DEFAULT 0,
  `product_brand` int(11) NOT NULL DEFAULT 0,
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
(3, '185 r14', '1589.00', NULL, '{}', 1, 2, '00000003', NULL, 'rhino'),
(6, '155 r12', '2050.00', NULL, '{}', 1, 12, NULL, NULL, NULL),
(7, '155 r12', '2050.00', NULL, '{}', 1, 15, NULL, NULL, NULL),
(8, '165/65 r13', '1900.00', NULL, '{}', 1, 8, NULL, NULL, NULL),
(9, '165/65 r13', '2300.00', NULL, '{}', 1, 9, NULL, NULL, NULL),
(10, '175/70 r13', '2300.00', NULL, '{}', 1, 10, NULL, NULL, NULL),
(11, '175/70 r13', '2400.00', NULL, '{}', 1, 11, NULL, NULL, NULL),
(12, '185/70 r13', '2600.00', NULL, '{}', 1, 11, NULL, NULL, NULL),
(13, '165 r13', '2600.00', NULL, '{}', 1, 45, NULL, NULL, NULL),
(14, '165/80 r13', '2000.00', NULL, '{}', 1, 46, NULL, NULL, NULL),
(15, '175 r13', '2600.00', NULL, '{}', 1, 45, NULL, NULL, NULL),
(16, '175 r13', '2800.00', NULL, '{}', 1, 47, NULL, NULL, NULL),
(17, '7.00/15 rib', '4700.00', NULL, '{}', 15, 6, NULL, NULL, NULL),
(18, 'f12', '260.00', NULL, '{}', 2, 48, NULL, NULL, NULL),
(19, 'g13 ', '280.00', NULL, '{}', 2, 0, NULL, NULL, NULL),
(20, 'g13 ', '280.00', NULL, '{}', 2, 48, NULL, NULL, NULL),
(21, 'k14', '360.00', NULL, '{}', 2, 48, NULL, NULL, NULL),
(22, 'g15', '370.00', NULL, '{}', 2, 48, NULL, NULL, NULL),
(23, 'towing', '500.00', NULL, '{\"undefined\":\"undefined\"}', 16, 0, NULL, NULL, NULL),
(24, 'tire alignment', '200.00', NULL, '{}', 16, 0, NULL, NULL, NULL),
(26, 'tire repair', '100.00', NULL, '{}', 16, 0, NULL, NULL, NULL),
(27, '155 r15', '2800.00', NULL, '{}', 1, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vgc_product_inventory`
--

CREATE TABLE `vgc_product_inventory` (
  `id` int(11) NOT NULL,
  `date_created` date DEFAULT NULL,
  `selectedProduct` text DEFAULT NULL,
  `po_number` varchar(500) DEFAULT NULL,
  `po_supplier` varchar(900) DEFAULT NULL,
  `po_date` date DEFAULT NULL,
  `total_item` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `assign_employee` int(11) DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vgc_product_inventory`
--

INSERT INTO `vgc_product_inventory` (`id`, `date_created`, `selectedProduct`, `po_number`, `po_supplier`, `po_date`, `total_item`, `status`, `assign_employee`, `note`) VALUES
(1, '2022-11-01', '[{\"brand\":\"rstone\",\"category\":\"rim\",\"product_design\":\"rhino\",\"product_id\":\"1\",\"quantity\":\"5\",\"product_name\":\"185 r14\"}]', 'po-0001', NULL, '2022-11-02', 1, 'approved', 1, NULL),
(2, '2022-11-08', '[{\"brand\":\"booster\",\"category\":\"rim\",\"product_design\":\"rhino\",\"product_id\":\"3\",\"quantity\":\"10\",\"product_name\":\"185 r14\"},{\"brand\":\"\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"4\",\"quantity\":\"10\",\"product_name\":\"155 r12\"},{\"brand\":\"\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"5\",\"quantity\":\"10\",\"product_name\":\"165/65 r13\"}]', 'PO-002', NULL, '0000-00-00', 3, 'approved', 1, NULL),
(3, '2022-11-14', '[{\"brand\":\"leao-china\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"6\",\"quantity\":\"5\",\"product_name\":\"155 r12\",\"original_price\":\"1900\"}]', 'PO-003', 'arnel ', '2022-11-14', 1, 'approved', 1, ''),
(4, '2022-11-20', '[{\"brand\":\"\",\"category\":\"Service\",\"product_design\":null,\"product_id\":\"24\",\"quantity\":\"100\",\"product_name\":\"tire alignment\",\"original_price\":0},{\"brand\":\"\",\"category\":\"Service\",\"product_design\":null,\"product_id\":\"23\",\"quantity\":\"100\",\"product_name\":\"towing\",\"original_price\":1},{\"brand\":\"\",\"category\":\"Service\",\"product_design\":null,\"product_id\":\"26\",\"quantity\":\"100\",\"product_name\":\"tire repair\",\"original_price\":1}]', 'PO-004', 'none', '2022-11-21', 3, 'approved', 1, ''),
(5, '2022-11-21', '[{\"brand\":\"linglong\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"7\",\"quantity\":\"5\",\"product_name\":\"155 r12\",\"original_price\":\"1900\"},{\"brand\":\"winda\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"8\",\"quantity\":\"5\",\"product_name\":\"165/65 r13\",\"original_price\":\"1900\"},{\"brand\":\"ceat\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"9\",\"quantity\":\"5\",\"product_name\":\"165/65 r13\",\"original_price\":\"1900\"},{\"brand\":\"blacklion\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"10\",\"quantity\":\"5\",\"product_name\":\"175/70 r13\",\"original_price\":\"1900\"},{\"brand\":\"achilles\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"11\",\"quantity\":\"5\",\"product_name\":\"175/70 r13\",\"original_price\":\"1900\"},{\"brand\":\"achilles\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"12\",\"quantity\":\"5\",\"product_name\":\"185/70 r13\",\"original_price\":\"1900\"},{\"brand\":\"leao\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"13\",\"quantity\":\"5\",\"product_name\":\"165 r13\",\"original_price\":\"1900\"},{\"brand\":\"gremax\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"14\",\"quantity\":\"5\",\"product_name\":\"165/80 r13\",\"original_price\":\"1900\"},{\"brand\":\"leao\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"15\",\"quantity\":\"5\",\"product_name\":\"175 r13\",\"original_price\":\"1900\"},{\"brand\":\"fortune\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"16\",\"quantity\":\"5\",\"product_name\":\"175 r13\",\"original_price\":\"1900\"},{\"brand\":\"matrix\",\"category\":\"TRUCK TIRES\",\"product_design\":null,\"product_id\":\"17\",\"quantity\":\"5\",\"product_name\":\"7.00/15 rib\",\"original_price\":\"1900\"},{\"brand\":\"matrix-korea\",\"category\":\"tubes-trucks\",\"product_design\":null,\"product_id\":\"18\",\"quantity\":\"5\",\"product_name\":\"f12\",\"original_price\":\"1900\"},{\"brand\":\"\",\"category\":\"tubes-trucks\",\"product_design\":null,\"product_id\":\"19\",\"quantity\":\"5\",\"product_name\":\"g13 \",\"original_price\":\"1900\"},{\"brand\":\"matrix-korea\",\"category\":\"tubes-trucks\",\"product_design\":null,\"product_id\":\"21\",\"quantity\":\"5\",\"product_name\":\"k14\",\"original_price\":\"1900\"},{\"brand\":\"matrix-korea\",\"category\":\"tubes-trucks\",\"product_design\":null,\"product_id\":\"20\",\"quantity\":\"5\",\"product_name\":\"g13 \",\"original_price\":\"1900\"},{\"brand\":\"matrix-korea\",\"category\":\"tubes-trucks\",\"product_design\":null,\"product_id\":\"22\",\"quantity\":\"5\",\"product_name\":\"g15\",\"original_price\":\"1900\"}]', 'PO-005', 'Mark', '2022-11-21', 16, 'approved', 1, ''),
(6, '2022-11-21', '[{\"brand\":\"\",\"category\":\"rim\",\"product_design\":null,\"product_id\":\"27\",\"quantity\":\"10\",\"product_name\":\"155 r15\",\"original_price\":\"1900\"},{\"brand\":\"rstone\",\"category\":\"rim\",\"product_design\":\"rhino\",\"product_id\":\"1\",\"quantity\":\"10\",\"product_name\":\"185 r14\",\"original_price\":\"1900\"}]', 'PO-006', 'Mark', '2022-11-21', 2, 'approved', 1, '');

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
  `current_quantity` int(11) DEFAULT 0,
  `sold_quantity` int(11) NOT NULL DEFAULT 0,
  `pending_quantity` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vgc_product_stock`
--

INSERT INTO `vgc_product_stock` (`id`, `product_id`, `current_quantity`, `sold_quantity`, `pending_quantity`) VALUES
(1, 1, 115, 19, 0),
(2, 2, 100, 14, 0),
(3, 3, 15, 7, 5),
(4, 4, 10, 0, 0),
(5, 5, 10, 0, 0),
(6, 6, 5, 2, 0),
(7, 7, 5, 1, 0),
(8, 8, 5, 0, 0),
(9, 9, 5, 0, 0),
(10, 10, 5, 0, 0),
(11, 11, 5, 0, 0),
(12, 12, 5, 0, 0),
(13, 13, 5, 0, 0),
(14, 14, 5, 0, 0),
(15, 15, 5, 0, 0),
(16, 16, 5, 0, 0),
(17, 17, 5, 0, 0),
(18, 18, 5, 0, 0),
(19, 19, 5, 0, 0),
(20, 20, 5, 0, 0),
(21, 21, 5, 0, 0),
(22, 22, 5, 0, 0),
(23, 23, 100, 0, 0),
(24, 24, 100, 0, 0),
(25, 25, 0, 0, 0),
(26, 26, 100, 0, 0),
(27, 27, 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vgc_transaction`
--

CREATE TABLE `vgc_transaction` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(500) DEFAULT NULL,
  `customer` text DEFAULT NULL,
  `payment` text DEFAULT NULL,
  `selectedProduct` text DEFAULT NULL,
  `discount` int(11) NOT NULL DEFAULT 0,
  `discount_amount` decimal(11,2) DEFAULT NULL,
  `sub_total` decimal(11,2) DEFAULT NULL,
  `overall_total` decimal(11,2) DEFAULT NULL,
  `tax` decimal(11,2) DEFAULT NULL,
  `taxable` decimal(11,2) DEFAULT NULL,
  `shipping` text DEFAULT NULL,
  `shipping_cost` decimal(11,2) DEFAULT NULL,
  `additional_discount` decimal(11,2) DEFAULT NULL,
  `amount_payed` decimal(11,2) DEFAULT NULL,
  `amount_balance` decimal(11,2) DEFAULT NULL,
  `total_payment` decimal(11,2) DEFAULT NULL,
  `total_item` int(11) NOT NULL DEFAULT 0,
  `card_payment` decimal(11,2) DEFAULT NULL,
  `cash_payment` decimal(11,2) DEFAULT NULL,
  `assign_cashier` int(11) NOT NULL,
  `delivery_status` varchar(500) DEFAULT NULL,
  `transaction_type` varchar(500) NOT NULL DEFAULT 'walkin',
  `date_created` date DEFAULT NULL,
  `cart_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vgc_transaction`
--

INSERT INTO `vgc_transaction` (`id`, `transaction_id`, `customer`, `payment`, `selectedProduct`, `discount`, `discount_amount`, `sub_total`, `overall_total`, `tax`, `taxable`, `shipping`, `shipping_cost`, `additional_discount`, `amount_payed`, `amount_balance`, `total_payment`, `total_item`, `card_payment`, `cash_payment`, `assign_cashier`, `delivery_status`, `transaction_type`, `date_created`, `cart_id`) VALUES
(1, 'TRO0000000001', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":5000,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":1650,\"price\":1650},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}}]', 0, '0.00', '1650.00', '1650.00', '198.00', '1452.00', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '1650.00', '0.00', '5000.00', 1, '0.00', '5000.00', 1, '', 'walkin', '2022-11-01', NULL),
(2, 'TRO0000000002', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":5000,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":3,\"subtotal\":4767,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '4767.00', '4767.00', '572.04', '4194.96', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '4767.00', '0.00', '5000.00', 1, '0.00', '5000.00', 1, '', 'walkin', '2022-11-01', NULL),
(3, 'TRO0000000003', '{\"customer_id\":\"1\",\"info\":{\"customer_id\":\"1\",\"customer_name\":\"jaden yuki\",\"customer_company\":\"\",\"customer_tax_no\":\"\",\"customer_email\":\"ripcris10@gmail.com\",\"customer_phone_no\":\"12345\",\"customer_address\":\"banago bacolod city\",\"address\":[{\"shipping_id\":\"1\",\"customer_id\":\"1\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"langis\",\"contact_number\":\"1234567\"}]},\"status\":\"delivery\"}', '[{\"amount\":2100,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '1589.00', '2089.00', '190.68', '1398.32', '{\"shipping_id\":\"all\",\"info\":{\"shipping_address\":\"Select Shipping Address\",\"shipping_id\":\"all\",\"shipping_charge\":\"500\",\"shipping_status\":\"open\",\"shipping_note\":\"sa bangga subay lng\"},\"delivery_progress\":[{\"note\":\"\",\"delivery_status\":\"shipped\",\"date\":\"2022-11-20T12:30\"},{\"note\":\"\",\"delivery_status\":\"delivered\",\"date\":\"2022-11-20T15:00\"}]}', '500.00', '0.00', '2089.00', '0.00', '2100.00', 1, '0.00', '2100.00', 1, 'delivered', 'delivery', '2022-11-01', NULL),
(4, 'TRO0000000004', '{\"customer_id\":\"1\",\"info\":{\"customer_id\":\"1\",\"customer_name\":\"jaden yuki\",\"customer_company\":\"\",\"customer_tax_no\":\"\",\"customer_email\":\"ripcris10@gmail.com\",\"customer_phone_no\":\"12345\",\"customer_address\":\"banago bacolod city\",\"address\":[{\"shipping_id\":\"1\",\"customer_id\":\"1\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"langis\",\"contact_number\":\"1234567\"}]},\"status\":\"delivery\"}', '[{\"amount\":2200,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '1589.00', '2189.00', '190.68', '1398.32', '{\"shipping_id\":\"1\",\"info\":{\"shipping_address\":\"langis banago, bacolod city, negros occidental\",\"shipping_id\":\"1\",\"shipping_charge\":\"600\",\"shipping_status\":\"open\",\"shipping_note\":\"sa banga subay lng e dul.ong\"},\"delivery_progress\":[{\"note\":\"\",\"delivery_status\":\"delivered\",\"date\":\"2022-11-20T21:30\"}]}', '600.00', '0.00', '2189.00', '0.00', '2200.00', 1, '0.00', '2200.00', 1, 'delivered', 'delivery', '2022-11-01', NULL),
(5, 'TRO0000000005', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":5000,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '1589.00', '1589.00', '190.68', '1398.32', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '1589.00', '0.00', '5000.00', 1, '0.00', '5000.00', 2, '', 'walkin', '2022-11-02', NULL),
(6, 'TRO0000000006', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":1700,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":1650,\"price\":1650},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}}]', 0, '0.00', '1650.00', '1650.00', '198.00', '1452.00', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '1650.00', '0.00', '1700.00', 1, '0.00', '1700.00', 3, '', 'walkin', '2022-11-08', NULL),
(7, 'TRO0000000007', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":3400,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":1650,\"price\":1650},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}}]', 0, '0.00', '3239.00', '3239.00', '388.68', '2850.32', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '3239.00', '0.00', '3400.00', 2, '0.00', '3400.00', 1, '', 'walkin', '2022-11-10', NULL),
(8, 'TRO0000000008', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":3240,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":1650,\"price\":1650},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}}]', 0, '0.00', '3239.00', '3239.00', '388.68', '2850.32', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '3239.00', '0.00', '3240.00', 2, '0.00', '3240.00', 3, '', 'walkin', '2022-11-13', NULL),
(9, 'TRO0000000009', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":4900,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":1650,\"price\":1650},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"3\",\"transaction\":{\"id\":\"3\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"booster\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '4828.00', '4828.00', '579.36', '4248.64', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '4828.00', '0.00', '4900.00', 3, '0.00', '4900.00', 3, '', 'walkin', '2022-11-14', NULL),
(10, 'TRO0000000010', '{\"customer_id\":\"6\",\"info\":{\"customer_id\":\"6\",\"customer_username\":\"khalil\",\"customer_password\":\"HyZ+ciWhKMvu2qWu+H3n0g==\",\"customer_hash\":\"DMi5mfEEB3m2rDog\",\"customer_name\":\"khalilbargayo\",\"customer_company\":null,\"customer_tax_no\":null,\"customer_email\":\"khalilbargayo@gmail.com\",\"customer_phone_no\":\"09955012452\",\"customer_address\":\"banago\",\"address\":[{\"shipping_id\":\"3\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"purok,bayanihan\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"4\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"sto,domingo\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"5\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"prk.stodomingo\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"6\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"purok sto.domingo\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"7\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"purok stodomingo\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"8\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"012445\",\"street\":\"Purok Sto.Domingo\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"9\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"6100\",\"street\":\"Purok Sto.domingo\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"15\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"6100\",\"street\":\"Langis\",\"contact_number\":\"09955012451\"},{\"shipping_id\":\"16\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"langis\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"17\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"Purok Langis\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"18\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"Purok Langis \",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"19\",\"customer_id\":\"6\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"Purok Langis\",\"contact_number\":\"09955012452\"}]},\"status\":\"delivery\"}', '[{\"amount\":5000,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":\"1650.00\",\"price\":\"1650.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"3\",\"transaction\":{\"id\":\"3\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"booster\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '4828.00', '4828.00', '579.36', '4248.64', '{\"shipping_id\":\"20\",\"info\":{\"shipping_address\":\"purok langis banago, bacolod city, negros occidental\",\"shipping_id\":\"20\",\"shipping_charge\":\"\",\"shipping_status\":\"open\",\"shipping_note\":\"\"},\"delivery_progress\":[{\"note\":\"\",\"delivery_status\":\"delivered\",\"date\":\"2022-11-20T23:30\"}]}', '0.00', '0.00', '4828.00', '0.00', '5000.00', 3, '0.00', '5000.00', 3, 'delivered', 'delivery', '2022-11-20', 3),
(11, 'TRO0000000011', '{\"customer_id\":\"7\",\"info\":{\"customer_id\":\"7\",\"customer_username\":\"bargayo\",\"customer_password\":\"fJMZiLUqTjwLqKU3bWbLJA==\",\"customer_hash\":\"guHbjP6FK7jD2Wrp\",\"customer_name\":\"bargayo\",\"customer_company\":null,\"customer_tax_no\":null,\"customer_email\":\"bargayo@gmail.com\",\"customer_phone_no\":\"09955012452\",\"customer_address\":\"Banago Bacolod City\"}}', '[{\"amount\":3639,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"3\",\"transaction\":{\"id\":\"3\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"booster\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"6\",\"transaction\":{\"id\":\"6\",\"quantity\":1,\"subtotal\":\"2050.00\",\"price\":\"2050.00\"},\"info\":{\"brand\":\"leao-china\",\"category\":\"rim\",\"product_name\":\"155 r12\",\"product_price\":\"2050.00\"}}]', 0, '0.00', '3639.00', '3639.00', '436.68', '3202.32', '{\"shipping_id\":\"10\",\"info\":{\"shipping_address\":\"banago alijis, bacolod city, negros occidental\",\"shipping_id\":\"10\",\"shipping_charge\":\"\",\"shipping_status\":\"open\",\"shipping_note\":\"\"},\"delivery_progress\":[]}', '0.00', '0.00', '3639.00', '0.00', '3639.00', 2, '0.00', '3639.00', 3, '', 'walkin', '2022-11-20', 4),
(12, 'TRO0000000012', '{\"customer_id\":\"7\",\"info\":{\"customer_id\":\"7\",\"customer_username\":\"bargayo\",\"customer_password\":\"fJMZiLUqTjwLqKU3bWbLJA==\",\"customer_hash\":\"guHbjP6FK7jD2Wrp\",\"customer_name\":\"bargayo\",\"customer_company\":null,\"customer_tax_no\":null,\"customer_email\":\"bargayo@gmail.com\",\"customer_phone_no\":\"09955012452\",\"customer_address\":\"Banago Bacolod City\"}}', '[{\"amount\":1589,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '1589.00', '1589.00', '190.68', '1398.32', '{\"shipping_id\":\"21\",\"info\":{\"shipping_address\":\"domingo barangay i (pob.), bais city, negros oriental\",\"shipping_id\":\"21\",\"shipping_charge\":\"\",\"shipping_status\":\"open\",\"shipping_note\":\"\"},\"delivery_progress\":[]}', '0.00', '0.00', '1589.00', '0.00', '1589.00', 1, '0.00', '1589.00', 3, '', 'walkin', '2022-11-20', 5),
(13, 'TRO0000000013', '{\"customer_id\":\"6\",\"info\":{\"customer_id\":\"6\",\"customer_username\":\"khalil\",\"customer_password\":\"HyZ+ciWhKMvu2qWu+H3n0g==\",\"customer_hash\":\"DMi5mfEEB3m2rDog\",\"customer_name\":\"khalilbargayo\",\"customer_company\":null,\"customer_tax_no\":null,\"customer_email\":\"khalilbargayo@gmail.com\",\"customer_phone_no\":\"09955012452\",\"customer_address\":\"banago\"}}', '[{\"amount\":4828,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":\"1650.00\",\"price\":\"1650.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"3\",\"transaction\":{\"id\":\"3\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"booster\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '4828.00', '4828.00', '579.36', '4248.64', '{\"shipping_id\":\"4\",\"info\":{\"shipping_address\":\"sto,domingo banago, bacolod city, negros occidental\",\"shipping_id\":\"4\",\"shipping_charge\":\"\",\"shipping_status\":\"open\",\"shipping_note\":\"\"},\"delivery_progress\":[]}', '0.00', '0.00', '4828.00', '0.00', '4828.00', 3, '0.00', '4828.00', 3, '', 'walkin', '2022-11-20', 1),
(14, 'TRO0000000014', '{\"customer_id\":\"6\",\"info\":{\"customer_id\":\"6\",\"customer_username\":\"khalil\",\"customer_password\":\"HyZ+ciWhKMvu2qWu+H3n0g==\",\"customer_hash\":\"DMi5mfEEB3m2rDog\",\"customer_name\":\"khalilbargayo\",\"customer_company\":null,\"customer_tax_no\":null,\"customer_email\":\"khalilbargayo@gmail.com\",\"customer_phone_no\":\"09955012452\",\"customer_address\":\"banago\"}}', '[{\"amount\":5289,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":\"1650.00\",\"price\":\"1650.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"6\",\"transaction\":{\"id\":\"6\",\"quantity\":1,\"subtotal\":\"2050.00\",\"price\":\"2050.00\"},\"info\":{\"brand\":\"leao-china\",\"category\":\"rim\",\"product_name\":\"155 r12\",\"product_price\":\"2050.00\"}}]', 0, '0.00', '5289.00', '5289.00', '634.68', '4654.32', '{\"shipping_id\":\"3\",\"info\":{\"shipping_address\":\"purok,bayanihan banago, bacolod city, negros occidental\",\"shipping_id\":\"3\",\"shipping_charge\":\"\",\"shipping_status\":\"open\",\"shipping_note\":\"\"},\"delivery_progress\":[]}', '0.00', '0.00', '5289.00', '0.00', '5289.00', 3, '0.00', '5289.00', 3, '', 'walkin', '2022-11-20', 2),
(15, 'TRO0000000015', '{\"customer_id\":\"7\",\"info\":{\"customer_id\":\"7\",\"customer_username\":\"bargayo\",\"customer_password\":\"fJMZiLUqTjwLqKU3bWbLJA==\",\"customer_hash\":\"guHbjP6FK7jD2Wrp\",\"customer_name\":\"bargayo\",\"customer_company\":null,\"customer_tax_no\":null,\"customer_email\":\"bargayo@gmail.com\",\"customer_phone_no\":\"09955012452\",\"customer_address\":\"Banago Bacolod City\"}}', '[{\"amount\":3239,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":\"1650.00\",\"price\":\"1650.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}}]', 0, '0.00', '3239.00', '3239.00', '388.68', '2850.32', '{\"shipping_id\":\"22\",\"info\":{\"shipping_address\":\"banago bagroy, binalbagan, negros occidental\",\"shipping_id\":\"22\",\"shipping_charge\":\"\",\"shipping_status\":\"open\",\"shipping_note\":\"\"},\"delivery_progress\":[]}', '0.00', '0.00', '3239.00', '0.00', '3239.00', 2, '0.00', '3239.00', 3, '', 'walkin', '2022-11-20', 6),
(16, 'TRO0000000016', '{\"customer_id\":\"7\",\"info\":{\"customer_id\":\"7\",\"customer_username\":\"bargayo\",\"customer_password\":\"fJMZiLUqTjwLqKU3bWbLJA==\",\"customer_hash\":\"guHbjP6FK7jD2Wrp\",\"customer_name\":\"bargayo\",\"customer_company\":null,\"customer_tax_no\":null,\"customer_email\":\"bargayo@gmail.com\",\"customer_phone_no\":\"09955012452\",\"customer_address\":\"Banago Bacolod City\",\"address\":[{\"shipping_id\":\"10\",\"customer_id\":\"7\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"ALIJIS\",\"postal_code\":\"6100\",\"street\":\"Banago\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"11\",\"customer_id\":\"7\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BAGO CITY\",\"barangay\":\"MALINGIN\",\"postal_code\":\"6100\",\"street\":\"Banago\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"12\",\"customer_id\":\"7\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"ALANGILAN\",\"postal_code\":\"6200\",\"street\":\"Purok, Mars\",\"contact_number\":\"9112346789\"},{\"shipping_id\":\"13\",\"customer_id\":\"7\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"6100\",\"street\":\"Purok Bayanihan\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"14\",\"customer_id\":\"7\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"6100\",\"street\":\"stodomingo\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"21\",\"customer_id\":\"7\",\"country\":\"philippines\",\"province\":\"NEGROS ORIENTAL\",\"city\":\"BAIS CITY\",\"barangay\":\"BARANGAY I (POB.)\",\"postal_code\":\"\",\"street\":\"domingo\",\"contact_number\":\"09955012451\"},{\"shipping_id\":\"22\",\"customer_id\":\"7\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BINALBAGAN\",\"barangay\":\"BAGROY\",\"postal_code\":\"709831\",\"street\":\"banago\",\"contact_number\":\"09955012452\"},{\"shipping_id\":\"23\",\"customer_id\":\"7\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"CADIZ CITY\",\"barangay\":\"BARANGAY 1 POB. (ZONE 1)\",\"postal_code\":\"\",\"street\":\"burgos\",\"contact_number\":\"09955012452\"}]},\"status\":\"delivery\"}', '[{\"amount\":3400,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":\"1589.00\",\"price\":\"1589.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":\"1650.00\",\"price\":\"1650.00\"},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}}]', 0, '0.00', '3239.00', '3239.00', '388.68', '2850.32', '{\"shipping_id\":\"23\",\"info\":{\"shipping_address\":\"burgos barangay 1 pob. (zone 1), cadiz city, negros occidental\",\"shipping_id\":\"23\",\"shipping_charge\":\"\",\"shipping_status\":\"open\",\"shipping_note\":\"\"},\"delivery_progress\":[]}', '0.00', '0.00', '3239.00', '0.00', '3400.00', 2, '0.00', '3400.00', 3, '', 'delivery', '2022-11-20', 7),
(17, 'TRO0000000017', '{\"customer_id\":\"1\",\"info\":{\"customer_id\":\"1\",\"customer_username\":null,\"customer_password\":null,\"customer_hash\":null,\"customer_name\":\"jaden yuki\",\"customer_company\":\"\",\"customer_tax_no\":\"\",\"customer_email\":\"ripcris10@gmail.com\",\"customer_phone_no\":\"12345\",\"customer_address\":\"banago bacolod city\",\"address\":[{\"shipping_id\":\"1\",\"customer_id\":\"1\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"langis\",\"contact_number\":\"1234567\"},{\"shipping_id\":\"24\",\"customer_id\":\"1\",\"country\":\"philippines\",\"province\":\"NEGROS ORIENTAL\",\"city\":\"BAYAWAN CITY (TULONG)\",\"barangay\":\"BANGA\",\"postal_code\":\"\",\"street\":\"Bangus\",\"contact_number\":\"09955012452\"}]},\"status\":\"delivery\"}', '[]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":1650,\"price\":1650},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"3\",\"transaction\":{\"id\":\"3\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"booster\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[{\"note\":\"\",\"delivery_status\":\"delivered\",\"date\":\"2022-11-21T12:30\"}]}', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', 3, 'delivered', 'delivery', '2022-11-21', 0),
(18, 'TRO0000000018', '{\"customer_id\":null,\"info\":{},\"status\":\"walkin\"}', '[{\"amount\":5000,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":1650,\"price\":1650},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"3\",\"transaction\":{\"id\":\"3\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"booster\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '4828.00', '4828.00', '579.36', '4248.64', '{\"shipping_id\":null,\"info\":{},\"delivery_progress\":[]}', '0.00', '0.00', '4828.00', '0.00', '5000.00', 3, '0.00', '5000.00', 3, '', 'walkin', '2022-11-21', 0),
(19, 'TRO0000000019', '{\"customer_id\":\"1\",\"info\":{\"customer_id\":\"1\",\"customer_username\":null,\"customer_password\":null,\"customer_hash\":null,\"customer_name\":\"jaden yuki\",\"customer_company\":\"\",\"customer_tax_no\":\"\",\"customer_email\":\"ripcris10@gmail.com\",\"customer_phone_no\":\"12345\",\"customer_address\":\"banago bacolod city\",\"address\":[{\"shipping_id\":\"1\",\"customer_id\":\"1\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"langis\",\"contact_number\":\"1234567\"},{\"shipping_id\":\"24\",\"customer_id\":\"1\",\"country\":\"philippines\",\"province\":\"NEGROS ORIENTAL\",\"city\":\"BAYAWAN CITY (TULONG)\",\"barangay\":\"BANGA\",\"postal_code\":\"\",\"street\":\"Bangus\",\"contact_number\":\"09955012452\"}]},\"status\":\"delivery\"}', '[{\"amount\":4828,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":1650,\"price\":1650},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"3\",\"transaction\":{\"id\":\"3\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"booster\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}}]', 0, '0.00', '4828.00', '4828.00', '579.36', '4248.64', '{\"shipping_id\":\"24\",\"info\":{\"shipping_address\":\"bangus banga, bayawan city (tulong), negros oriental\",\"shipping_id\":\"24\",\"shipping_charge\":\"\",\"shipping_status\":\"open\",\"shipping_note\":\"\"},\"delivery_progress\":[]}', '0.00', '0.00', '4828.00', '0.00', '4828.00', 3, '0.00', '4828.00', 3, '', 'delivery', '2022-11-21', 0),
(20, 'TRO0000000020', '{\"customer_id\":\"1\",\"info\":{\"customer_id\":\"1\",\"customer_username\":null,\"customer_password\":null,\"customer_hash\":null,\"customer_name\":\"jaden yuki\",\"customer_company\":\"\",\"customer_tax_no\":\"\",\"customer_email\":\"ripcris10@gmail.com\",\"customer_phone_no\":\"12345\",\"customer_address\":\"banago bacolod city\",\"address\":[{\"shipping_id\":\"1\",\"customer_id\":\"1\",\"country\":\"philippines\",\"province\":\"NEGROS OCCIDENTAL\",\"city\":\"BACOLOD CITY\",\"barangay\":\"BANAGO\",\"postal_code\":\"\",\"street\":\"langis\",\"contact_number\":\"1234567\"},{\"shipping_id\":\"24\",\"customer_id\":\"1\",\"country\":\"philippines\",\"province\":\"NEGROS ORIENTAL\",\"city\":\"BAYAWAN CITY (TULONG)\",\"barangay\":\"BANGA\",\"postal_code\":\"\",\"street\":\"Bangus\",\"contact_number\":\"09955012452\"}]},\"status\":\"delivery\"}', '[{\"amount\":5289,\"mode\":\"cash\",\"remarks\":\"\"}]', '[{\"product_id\":\"1\",\"transaction\":{\"id\":\"1\",\"quantity\":1,\"subtotal\":1589,\"price\":1589},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r14\",\"product_price\":\"1589.00\"}},{\"product_id\":\"2\",\"transaction\":{\"id\":\"2\",\"quantity\":1,\"subtotal\":1650,\"price\":1650},\"info\":{\"brand\":\"rstone\",\"category\":\"rim\",\"product_name\":\"185 r15\",\"product_price\":\"1650.00\"}},{\"product_id\":\"7\",\"transaction\":{\"id\":\"7\",\"quantity\":1,\"subtotal\":2050,\"price\":2050},\"info\":{\"brand\":\"linglong\",\"category\":\"rim\",\"product_name\":\"155 r12\",\"product_price\":\"2050.00\"}}]', 0, '0.00', '5289.00', '5289.00', '634.68', '4654.32', '{\"shipping_id\":\"all\",\"info\":{\"shipping_address\":\"Select Shipping Address\",\"shipping_id\":\"all\",\"shipping_charge\":\"\",\"shipping_status\":\"open\",\"shipping_note\":\"\"},\"delivery_progress\":[]}', '0.00', '0.00', '5289.00', '0.00', '5289.00', 3, '0.00', '5289.00', 3, '', 'delivery', '2022-12-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vgc_url_roles`
--

CREATE TABLE `vgc_url_roles` (
  `role_id` int(11) NOT NULL,
  `url` varchar(800) DEFAULT NULL,
  `roles` text DEFAULT NULL,
  `require_login` int(11) DEFAULT 1
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
(10, '/admin/product/add', 'developer,admin,manager', 1),
(11, '/admin/product/category', 'developer,admin,manager', 1),
(12, '/admin/inventory/po', 'developer,admin,manager', 1),
(13, '/admin/inventory/view', 'developer,admin,manager', 1),
(14, '/admin/transaction/delivery', 'developer,admin,manager', 1),
(15, '/admin/transaction/sales', 'developer,admin,manager', 1),
(16, '/admin/inventory/print', 'developer,admin,manager', 1);

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
(1, 'superadmin', 'C+TsaC53Vyf5hqxpMVWwHQ==', 'UZf29l6yy5c0riT7', 'Super', 'Admin', 'admin'),
(2, 'khalilbargayo', 'cxo/bIPa9OiGrZrabq+YxA==', 'ehj1PN59hjGZlwWl', 'khalil', 'bargayo', 'admin'),
(3, 'cashier', 'l+3Vs4n8wOe/TXbQk2KHhw==', 'ZLT4uEg8iMA73DQU', 'cas', 'hier', 'cashier');

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
-- Indexes for table `vgc_customer_cart`
--
ALTER TABLE `vgc_customer_cart`
  ADD PRIMARY KEY (`cart_id`);

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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `vgc_category`
--
ALTER TABLE `vgc_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vgc_customer`
--
ALTER TABLE `vgc_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vgc_customer_cart`
--
ALTER TABLE `vgc_customer_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vgc_customer_shipping_address`
--
ALTER TABLE `vgc_customer_shipping_address`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vgc_product`
--
ALTER TABLE `vgc_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vgc_product_inventory`
--
ALTER TABLE `vgc_product_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vgc_product_sale`
--
ALTER TABLE `vgc_product_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vgc_product_stock`
--
ALTER TABLE `vgc_product_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vgc_transaction`
--
ALTER TABLE `vgc_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vgc_url_roles`
--
ALTER TABLE `vgc_url_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vgc_users`
--
ALTER TABLE `vgc_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vgc_user_roles`
--
ALTER TABLE `vgc_user_roles`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
