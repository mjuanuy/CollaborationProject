-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 06:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `amount` double(20,2) NOT NULL,
  `billing_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_date` timestamp NULL DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `amount`, `billing_date`, `payment_date`, `payment_status`, `payment_id`, `order_id`, `cus_id`) VALUES
(5, 264320.00, '2019-04-02 14:27:04', '2019-03-24 15:46:53', 'Pending', 1, 11, 1),
(6, 348318.88, '2019-04-02 14:27:04', '2019-03-24 16:35:03', 'Paid', 2, 12, 1),
(7, 54880.00, '2019-04-02 14:27:04', '2019-03-24 16:36:19', 'Pending', 1, 13, 1),
(8, 182558.88, '2019-04-02 14:27:04', '2019-03-25 15:08:02', 'Paid', 2, 14, 1),
(9, 324798.88, '2019-04-02 14:27:04', '2019-03-25 16:12:35', 'Pending', 1, 15, 4),
(10, 98560.00, '2019-04-02 14:27:04', '2019-03-25 16:31:56', 'Pending', 1, 16, 2),
(11, 54880.00, '2019-04-02 14:27:04', '2019-03-26 17:45:41', 'Paid', 2, 17, 1),
(12, 43680.00, '2019-04-02 14:27:04', '2019-03-26 17:46:10', 'Paid', 2, 18, 1),
(13, 43680.00, '2019-04-02 14:27:04', '2019-03-26 20:09:50', 'Paid', 2, 19, 1),
(14, 43680.00, '2019-04-02 14:27:04', '2019-03-26 20:13:56', 'Pending', 1, 20, 1),
(15, 104158.88, '2019-04-02 14:27:04', '2019-03-26 20:16:46', 'Pending', 1, 21, 1),
(16, 104158.88, '2019-04-02 14:27:04', '2019-04-02 15:27:56', 'Paid', 1, 22, 1),
(17, 0.00, '2019-04-02 14:27:04', '2019-03-26 20:17:18', 'Paid', 2, 23, 1),
(18, 109760.00, '2019-04-02 14:27:04', '2019-03-26 20:17:37', 'Paid', 2, 24, 1),
(19, 0.00, '2019-04-02 14:27:04', '2019-03-26 20:18:16', 'Pending', 1, 25, 1),
(20, 109760.00, '2019-04-02 14:27:04', '2019-04-02 15:59:10', 'Paid', 1, 26, 1),
(21, 188160.00, '2019-04-02 14:27:04', '2019-03-26 20:21:27', 'Paid', 2, 27, 1),
(22, 188160.00, '2019-04-02 14:27:04', '2019-03-26 20:21:33', 'Paid', 2, 28, 1),
(23, 54880.00, '2019-04-02 14:27:04', '2019-03-26 20:23:41', 'Pending', 1, 29, 1),
(24, 78400.00, '2019-04-02 14:27:04', '2019-04-02 06:51:43', 'Pending', 1, 30, 5),
(25, 78400.00, '2019-04-02 14:27:04', '2019-04-02 06:52:40', 'Pending', 1, 31, 5),
(26, 9999252.48, '2019-04-02 14:27:04', '2019-04-02 08:22:24', 'Paid', 2, 32, 1),
(27, 39000.00, '2019-04-02 14:51:50', '2019-04-02 14:51:50', 'Paid', 2, 33, 1),
(28, 39000.00, '2019-04-02 14:52:19', '2019-04-02 15:30:43', 'Paid', 1, 34, 1),
(29, 39000.00, '2019-04-02 15:11:44', '2019-04-02 15:11:44', 'Paid', 2, 35, 2);

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `cour_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `cour_name` varchar(255) NOT NULL,
  `cour_days` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`cour_id`, `userid`, `cour_name`, `cour_days`) VALUES
(1, 23, 'LBC Express', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact_num` int(11) NOT NULL,
  `cus_street` varchar(255) NOT NULL,
  `cus_city` varchar(255) DEFAULT NULL,
  `cus_province` varchar(255) DEFAULT NULL,
  `cus_postal` varchar(45) DEFAULT NULL,
  `cus_email` varchar(45) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `userid`, `first_name`, `middle_name`, `last_name`, `contact_num`, `cus_street`, `cus_city`, `cus_province`, `cus_postal`, `cus_email`, `date_created`) VALUES
(1, 1, 'marvin', 'uy', 'benigra', 132465, 'bellvuew', 'cagayan de oro', 'misamis oriental', '9000', 'marvinjohnuy@gmail.com', '2019-03-24 16:00:00'),
(2, 7, 'may', 'jay', 'parade', 92687887, 'Everlasting', 'Cagayan de Oro', 'Misamis Oriental', '9000', 'mayjayparade@gmail.com', '2019-03-25 15:54:11'),
(3, 8, 'Marvin', 'U', 'Benigra', 997839294, 'Lilac Street', 'Davao', 'Davao Del Norte', '9000', 'marvinjohnuy@gmail.com', '2019-03-25 16:08:13'),
(4, 9, 'ervin', 'u', 'benigra', 978746564, 'Driria', 'Caloocan', 'Probinsya', '81000', 'ervin@yahoo.com', '2019-03-25 16:10:24'),
(5, 22, 'a', 'a', 'a', 1, 'a', 'a', 'a', '9999', 'a@gmail.com', '2019-04-02 06:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `delivery_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_id` int(11) NOT NULL,
  `cour_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `delivery_date`, `order_id`, `cour_id`) VALUES
(1, '2019-03-13 15:11:39', 1, 1),
(2, '2019-04-02 15:59:09', 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cour_id` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `shippedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeliver` enum('yes','no','','') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cus_id`, `cour_id`, `orderDate`, `shippedDate`, `isDeliver`) VALUES
(11, 1, 1, '2019-03-24 15:46:53', '2019-04-02 15:24:57', 'yes'),
(12, 1, 1, '2019-03-24 16:35:03', '2019-04-02 08:03:59', 'yes'),
(13, 1, 1, '2019-03-24 16:36:19', '2019-04-02 08:01:59', 'yes'),
(14, 1, 1, '2019-03-25 15:08:01', '2019-04-02 08:27:44', 'yes'),
(15, 4, 1, '2019-03-25 16:12:35', '2019-03-25 16:12:35', 'no'),
(16, 2, 1, '2019-03-25 16:31:55', '2019-03-25 16:31:55', 'no'),
(17, 1, 1, '2019-03-26 17:45:41', '2019-04-02 08:46:53', 'yes'),
(18, 1, 1, '2019-03-26 17:46:10', '2019-04-02 15:26:16', 'yes'),
(19, 1, 1, '2019-03-26 20:09:50', '2019-03-26 20:09:50', 'no'),
(20, 1, 1, '2019-03-26 20:13:56', '2019-04-02 15:27:17', 'yes'),
(21, 1, 1, '2019-03-26 20:16:46', '2019-04-02 15:26:48', 'yes'),
(22, 1, 1, '2019-03-26 20:17:05', '2019-04-02 15:27:56', 'yes'),
(23, 1, 1, '2019-03-26 20:17:17', '2019-03-26 20:17:17', 'no'),
(24, 1, 1, '2019-03-26 20:17:37', '2019-03-26 20:17:37', 'no'),
(25, 1, 1, '2019-03-26 20:18:16', '2019-03-26 20:18:16', 'no'),
(26, 1, 1, '2019-03-26 20:18:26', '2019-04-02 15:59:09', 'yes'),
(27, 1, 1, '2019-03-26 20:21:27', '2019-03-26 20:21:27', 'no'),
(28, 1, 1, '2019-03-26 20:21:33', '2019-03-26 20:21:33', 'no'),
(29, 1, 1, '2019-03-26 20:23:41', '2019-03-26 20:23:41', 'no'),
(30, 5, 1, '2019-04-02 06:51:43', '2019-04-02 06:51:43', 'no'),
(31, 5, 1, '2019-04-02 06:52:40', '2019-04-02 06:52:40', 'no'),
(32, 1, 1, '2019-04-02 08:22:23', '2019-04-02 08:22:23', 'no'),
(33, 1, 1, '2019-04-02 14:51:50', '2019-04-02 14:51:50', 'no'),
(34, 1, 1, '2019-04-02 14:52:19', '2019-04-02 15:30:43', 'yes'),
(35, 2, 1, '2019-04-02 15:11:44', '2019-04-02 15:11:44', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `quantity`) VALUES
(5, 15, 1),
(5, 13, 1),
(5, 16, 3),
(6, 15, 1),
(6, 13, 1),
(6, 16, 3),
(7, 15, 1),
(7, 13, 1),
(7, 16, 3),
(8, 15, 1),
(8, 13, 1),
(8, 16, 3),
(9, 15, 1),
(9, 13, 1),
(9, 16, 3),
(10, 15, 1),
(10, 13, 1),
(10, 16, 3),
(11, 15, 1),
(11, 13, 1),
(11, 16, 3),
(12, 16, 2),
(12, 13, 2),
(12, 14, 1),
(13, 15, 1),
(14, 14, 1),
(14, 13, 1),
(15, 16, 2),
(15, 15, 1),
(15, 14, 1),
(15, 13, 1),
(16, 16, 1),
(16, 15, 1),
(17, 15, 1),
(18, 16, 1),
(19, 16, 1),
(20, 16, 1),
(22, 14, 1),
(24, 15, 2),
(28, 15, 2),
(28, 13, 1),
(29, 15, 1),
(32, 14, 96),
(33, 16, 1),
(34, 16, 1),
(35, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_name` varchar(255) NOT NULL,
  `actions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_name`, `actions`) VALUES
(1, 'Cash On Delivery', 'Pending'),
(2, 'PayPal', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `purchase_price` float NOT NULL,
  `sell_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `purchase_price`, `sell_price`, `product_image`, `short_desc`, `description`, `category_id`, `supplier_id`, `date_added`) VALUES
(13, 'SAMSUNG GALAXY S10', 68000, 70000, 'samsung.png', 'Galaxy S10 Brand New Smarthphone', 'Galaxy S10e, S10, and S10+ learn your daily routine and usage patterns, powering down apps you don\'t need. Also, Adaptive Power Saving Mode manages your battery life based on the prediction of your day', 1, 1, '2019-03-21 14:48:35'),
(14, 'ASUS-GX097', 86899, 92999, 'zephyrus.png', 'I7 9TH GEN WITH RTX 2080Ti', 'I7 9TH GEN WITH RTX 2080Ti', 2, 1, '2019-03-21 14:48:35'),
(15, 'IPhone X', 45000, 49000, 'iphone.png', 'iphone for everybody', 'IPhone para sa mga dato rani ayaw na mog palit patas.on lng nako ang description arun ingnun.', 1, 1, '2019-03-21 14:50:00'),
(16, 'Huawei Mate 10', 30000, 39000, 'mate.png', 'Mate 10 that rivals Iphone Babies', 'Mate 10 that rivals Iphone Babies Mate 10 that rivals Iphone Babies Mate 10 that rivals Iphone Babies Mate 10 that rivals Iphone Babies', 1, 3, '2019-03-21 14:54:20'),
(17, 'Razer Blade 15', 90000, 119099, 'razer.png', 'razer razer', ' this is razer this is razer this is razer this is razer this is razer this is razer this is razer this is razer ', 2, 3, '2019-03-27 17:02:56'),
(18, 'Asus Zenfone 3 MAX', 12, 15, 'asus-zenfone-3-max.jpg', 'Cellphone ni ni Cres ', '3GB RAM\r\n32GB Storage\r\n5.2″FHD IPS Display\r\n13MP Rear | 5MP Front Camera\r\nQuad Core Processor\r\nAndroid 6.0.1 Marshmallow\r\n4100 mah Battery\r\n1 Year Brand Warranty', 1, 1, '2019-04-02 01:02:58'),
(19, 'Apple iPhone XR (256GB)', 100000, 150000, 'apple-iphone-xr-blue.jpg', 'Dili dapat paliton kay Mahal', '3GB RAM\r\n256GB Storage\r\n12MP Camera | 7MP Front Camera\r\n6.1″ Display\r\niOS Processor\r\nNon-Removable Li-ion Battery\r\n1 Year Brand Warranty\r\nCondition : Brand New', 1, 3, '2019-04-02 01:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_name`) VALUES
(1, 'Smartphone'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `stocks_qnty` int(11) NOT NULL DEFAULT '0',
  `SupplyRequestStatus` enum('pending','approved','cancelled') COLLATE utf8_unicode_ci NOT NULL,
  `TransactionDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `supplier_id`, `stocks_qnty`, `SupplyRequestStatus`, `TransactionDate`) VALUES
(2, 14, 2, 100, 'approved', '2019-04-02 07:35:05'),
(3, 16, 1, 60, 'approved', '2019-04-02 08:59:08'),
(4, 15, 2, 6, 'approved', '2019-04-02 07:34:51'),
(13, 13, 1, 3, 'approved', '2019-04-02 07:34:44'),
(14, 17, 2, 5, 'approved', '2019-04-02 07:34:34'),
(15, 18, 1, 30, 'approved', '2019-04-02 07:34:25'),
(16, 19, 3, 45, 'approved', '2019-04-02 07:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `supplier_companyname` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `supplier_street` varchar(255) NOT NULL,
  `supplier_city` varchar(255) NOT NULL,
  `supplier_province` varchar(255) NOT NULL,
  `supplier_postal` varchar(255) NOT NULL,
  `supplier_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `userid`, `supplier_companyname`, `contact_number`, `supplier_street`, `supplier_city`, `supplier_province`, `supplier_postal`, `supplier_email`) VALUES
(1, 10, 'Walmart', '87000', 'Oregon,USA', '', '', '', 'walmart@ask.us'),
(3, 16, 'Apple INC', '05646549', 'Driria', 'Cagayan de Oro', 'Misamis Oriental', '9600', 'mayjayparade@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `accesslevel` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`userid`, `username`, `password`, `status`, `accesslevel`) VALUES
(1, 'marvin', 'benigra', 1, 3),
(3, 'john', 'marvin', 1, 1),
(7, 'may', 'may1234', 1, 3),
(8, 'mjuan23', '1234qwe', 1, 3),
(9, 'ervinjohnuy', '123456', 1, 3),
(16, 'apple', 'qwe123', 1, 4),
(17, 'cres1', '123', 1, 1),
(18, 'cres2', '123', 1, 2),
(19, 'cres3', '123', 1, 3),
(20, 'cres4', '123', 1, 4),
(21, 'cres5', '123', 1, 5),
(22, 'a', 'aaaaaa', 1, 3),
(23, 'lbcexpress', '123456', 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`cour_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `cour_id` (`cour_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `cour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customers` (`cus_id`),
  ADD CONSTRAINT `billing_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`),
  ADD CONSTRAINT `billing_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `courier`
--
ALTER TABLE `courier`
  ADD CONSTRAINT `courier_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `useraccounts` (`userid`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `useraccounts` (`userid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customers` (`cus_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`cour_id`) REFERENCES `courier` (`cour_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
