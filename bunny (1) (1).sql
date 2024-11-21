-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 06:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bunny`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_user`
--

CREATE TABLE `account_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `re-password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(10) NOT NULL,
  `name_categories` varchar(100) NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categories`, `name_categories`, `img`) VALUES
(1, 'Nike', 'public/assets/img/n1.1.png'),
(2, 'Nike Jordan', 'public/assets/img/n7.1.png'),
(3, 'Nike Airmax', 'public/assets/img/n4.1.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_products`
--

CREATE TABLE `detail_products` (
  `id_detail` int(10) NOT NULL,
  `name_detail` varchar(100) NOT NULL,
  `price_detail` int(11) NOT NULL,
  `id_product` int(10) NOT NULL,
  `describe` varchar(150) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_user` int(10) NOT NULL,
  `id_feedback` int(10) NOT NULL,
  `context_feedback` varchar(200) NOT NULL,
  `id_product` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_products` int(10) NOT NULL,
  `name_order` int(100) NOT NULL,
  `detail_order` int(11) NOT NULL,
  `datetime_order` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id_orderdt` int(10) NOT NULL,
  `id_order` int(10) NOT NULL,
  `id_products` int(10) NOT NULL,
  `name_orderdt` int(50) NOT NULL,
  `datetime_order` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(10) NOT NULL,
  `id_detailpd` int(10) NOT NULL,
  `id_feedback` int(10) NOT NULL,
  `id_categories` int(10) NOT NULL,
  `name_products` varchar(100) NOT NULL,
  `price_products` double NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `id_detailpd`, `id_feedback`, `id_categories`, `name_products`, `price_products`, `img`) VALUES
(1, 1, 1, 1, 'Nike Air Force 1\'07', 200, 'public/assets/img/n1.1.png'),
(2, 2, 2, 1, 'Nike Air Force 1 ES', 200, 'public/assets/img/n2.1.png'),
(3, 3, 3, 1, 'Nike Air Force 1 EasyOn', 200, 'public/assets/img/n3.1.png'),
(4, 4, 4, 1, 'Nike Air Force 1 Shadow', 200, 'public/assets/img/n4.1.png'),
(5, 5, 5, 1, 'Nike Air Force 1 LE', 200, 'public/assets/img/n5.1.jpg'),
(6, 6, 6, 1, 'Nike Air Force 1 Sage', 200, 'public/assets/img/n6.1.png'),
(7, 7, 7, 1, 'Nike Air Force 1 Jordan', 200, 'public/assets/img/n7.1.png'),
(8, 8, 8, 1, 'Nike Air Force 1 LV8', 200, 'public/assets/img/n8.1.png'),
(9, 9, 9, 1, 'Colorful Pattern Shirts', 200, 'public/assets/img/n2.1.png'),
(10, 10, 10, 1, 'Colorful Pattern Shirts', 200, 'public/assets/img/n3.1.png'),
(12, 12, 12, 1, 'sneaker', 200, 'public/assets/img/n4.1.png'),
(13, 13, 13, 1, 'sneaker', 200, 'public/assets/img/n5.1.jpg'),
(14, 14, 14, 1, 'sneaker', 200, 'public/assets/img/n6.1.png'),
(15, 15, 15, 1, 'sneaker', 200, 'public/assets/img/n7.1.png'),
(16, 16, 16, 1, 'sneaker', 200, 'public/assets/img/n8.1.png'),
(17, 17, 17, 1, 'sneaker', 200, 'public/assets/img/n9.1.png'),
(18, 18, 18, 1, 'sneaker', 200, 'public/assets/img/n10.1.png'),
(19, 19, 19, 1, 'sneaker', 200, 'public/assets/img/j1.1.jpg'),
(20, 20, 20, 1, 'sneaker', 200, 'public/assets/img/j2.1.png'),
(21, 21, 21, 1, 'sneaker', 200, 'public/assets/img/j3.1.jpg'),
(22, 22, 22, 1, 'sneaker', 200, 'public/assets/img/j4.1.jpg'),
(23, 23, 23, 1, 'sneaker', 200, 'public/assets/img/j5.1.jpg'),
(24, 24, 24, 1, 'sneaker', 200, 'public/assets/img/j6.1.jpg'),
(25, 25, 25, 1, 'sneaker', 200, 'public/assets/img/a1,1.png'),
(26, 26, 26, 1, 'sneaker', 200, 'public/assets/img/a2,1.png'),
(27, 27, 27, 1, 'sneaker', 200, 'public/assets/img/a3,1.png'),
(28, 28, 28, 1, 'sneaker', 200, 'public/assets/img/a4,1.png'),
(29, 29, 29, 1, 'sneaker', 200, 'public/assets/img/a5,1.png'),
(30, 30, 30, 1, 'sneaker', 200, 'public/assets/img/a6,1.png'),
(31, 31, 31, 1, 'sneaker', 200, 'public/assets/img/a7,1.png'),
(32, 32, 32, 1, 'sneaker', 200, 'public/assets/img/a8,1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_user`
--
ALTER TABLE `account_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `detail_products`
--
ALTER TABLE `detail_products`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_products` (`id_products`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id_orderdt`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_detailpd` (`id_detailpd`),
  ADD KEY `id_feedback` (`id_feedback`),
  ADD KEY `id_categories` (`id_categories`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_user`
--
ALTER TABLE `account_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_products`
--
ALTER TABLE `detail_products`
  MODIFY `id_detail` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id_orderdt` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_products`
--
ALTER TABLE `detail_products`
  ADD CONSTRAINT `detail_products_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `account_user` (`id_user`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_products`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `account_user` (`id_user`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
