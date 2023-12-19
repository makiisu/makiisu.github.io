-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 04:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u-style_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `design_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_value`) VALUES
(1, 'White'),
(2, 'Light Brown'),
(3, 'Brown'),
(4, 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `design_id` int(11) NOT NULL,
  `design_img` varchar(255) NOT NULL,
  `design_prev` blob NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`design_id`, `design_img`, `design_prev`, `user_id`) VALUES
(1, 'uploads/shirtBR.png', '', 0),
(2, 'uploads/nike.png', '', 0),
(3, 'uploads/nike.png', '', 0),
(4, 'uploads/logo.png', '', 0),
(5, 'uploads/logo.png', '', 0),
(6, 'uploads/nike.png', '', 0),
(7, 'uploads/nike.png', '', 0),
(8, 'uploads/nike.png', '', 0),
(9, 'uploads/nike.png', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `order_price` decimal(10,2) NOT NULL,
  `order_img` varchar(255) NOT NULL,
  `order_stat` char(1) NOT NULL DEFAULT 'P' COMMENT 'P=Pending\r\nD=Delivered\r\nC=Cancelled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_code`, `user_id`, `product_id`, `size`, `color`, `order_qty`, `order_price`, `order_img`, `order_stat`) VALUES
(1, '31XS250white', 3, 1, 'XS', 'white', 1, '250.00', 'right-arrow-button-icon.png', 'P'),
(2, '31XS250white', 3, 1, 'XS', 'white', 1, '250.00', '368416059_2247053712351379_5941214340219603080_n.jpg', 'P'),
(3, '11XS250white', 1, 1, 'XS', 'white', 1, '250.00', 'right-arrow-button-icon.png', 'P'),
(4, '14M1000brown', 1, 1, 'M', 'brown', 4, '1000.00', 'nike.png', 'D'),
(5, '14M1000brown', 1, 1, 'M', 'brown', 4, '1000.00', 'nike.png', 'D'),
(6, '32XL500white', 3, 1, 'XL', 'white', 2, '500.00', 'logo.png', 'D'),
(7, '5XS1250white', 3, 1, 'XS', 'white', 5, '1250.00', 'left_arrow.png', 'C'),
(8, '14XS1000white', 1, 1, 'XS', 'white', 4, '1000.00', '400083291_310427295089739_7247724448323371540_n.png', 'D'),
(9, '34L1000brown', 3, 1, 'L', 'brown', 4, '1000.00', 'half-body-of-college-girl-in-uniform-with-brown-long-hair-happy.png', 'P'),
(10, '34M1000brown', 3, 1, 'M', 'brown', 4, '1000.00', '400136956_3637542546565509_2517657506241447789_n.png', 'P'),
(11, '31XL250white', 3, 1, 'XL', 'white', 1, '250.00', 'Screenshot 2022-03-02 114232.png', 'P'),
(12, '31XS250white', 3, 1, 'XS', 'white', 1, '250.00', '377227783_1292737408093321_7646907181981904481_n.png', 'P'),
(13, '31S250light brown', 3, 1, 'S', 'light brown', 1, '250.00', 'baterply.png', 'P'),
(14, '31XS250white', 3, 1, 'XS', 'white', 1, '250.00', '375985215_322671723749830_4319197149276457877_n.jpg', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_desc` varchar(255) NOT NULL,
  `prod_stock` int(11) NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `prod_status` char(1) NOT NULL DEFAULT 'A' COMMENT 'A=Available\r\nX=Out of Stock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_value`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fisrt_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` char(1) NOT NULL DEFAULT 'U' COMMENT 'U = User\r\nA = Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fisrt_name`, `last_name`, `address`, `phone_num`, `birthdate`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'user', 'try', 'guinobatan', 123456789, '2023-12-01', 'user69', 'user69@gmail.com', '1234', 'U'),
(2, 'ad', 'min', 'polangui', 987654321, '2023-12-01', 'admin123', 'admin@gmail.com', 'admin123', 'A'),
(3, 'try', 'user', 'try', 1232313212, '2023-12-02', 'trylang', 'try@gmail.com', '4321', 'U'),
(4, 'renzo', 'sales', 'guinobatan', 9888888, '2023-12-01', 'renzo', 'renzo25sales@gmail.com', '12345', 'U'),
(5, 'jimmy', 'sales', 'polangui', 9123456, '2023-12-08', 'jimmy123', 'jim123@gmail.com', '0987', 'U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`design_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
