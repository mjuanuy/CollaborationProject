-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 08:55 PM
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
(1, 210000.00, '2019-04-02 18:54:30', '2019-04-02 18:54:30', 'Paid', 2, 1, 1);

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
(1, 1, 1, '2019-04-02 18:54:30', '2019-04-02 18:54:30', 'no');

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
(1, 13, 3);

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
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
