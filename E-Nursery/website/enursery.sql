-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 12:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enursery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `status` int(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `uid`, `pid`, `status`, `quantity`) VALUES
(101, 15, 9, 3, 4),
(108, 16, 9, 1, 1),
(109, 16, 10, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(6, 'Soil and Fertilizers'),
(7, 'Plants'),
(8, ' Accessories'),
(9, 'Seeds');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `image`, `category`) VALUES
(11, 'Parijat Tree, Parijatak, Night Flowering Jasmine - Plant', 'Parijat Tree, Parijatak, Night Flowering Jasmine - Plant', 340, './upload/img1.jpg', 'Plants'),
(12, '  Click to expand  madhumalti dwarf - plant ', 'Madhumalti Dwarf, Rangoon Creeper - Plant', 430, './upload/img2.jpg', 'Plants'),
(13, 'Mustard, Sarso Saag Leaves - Vegetable Seeds', 'Mustard, Sarso Saag Leaves - Vegetable Seeds', 34, './upload/img3.jpg', 'Seeds'),
(14, 'Capsicum White, Bell Pepper Ivory White - Vegetable Seeds', 'Capsicum White, Bell Pepper Ivory White - Vegetable Seeds', 35, './upload/img4.jpg', 'Seeds'),
(15, 'Nutrient-rich general purpose potting soil mix - 5 kg', 'Nutrient-rich general purpose potting soil mix - 5 kg', 329, './upload/img5.jpg', 'Soil and Fertilizers'),
(16, 'Coco Peat Block - 4 kg (Expands Up to 60 - 70 L)', 'Coco Peat Block - 4 kg (Expands Up to 60 - 70 L)', 455, './upload/img6.jpg', 'Soil and Fertilizers'),
(17, 'General Purpose Garden Potting Soil Mix - 5 kg', 'General Purpose Garden Potting Soil Mix - 5 kg', 432, './upload/img7.jpg', 'Soil and Fertilizers'),
(18, 'Jeevamrut (Plant Growth Tonic) - 500 ml', 'Jeevamrut (Plant Growth Tonic) - 500 ml', 120, './upload/img8.jpg', 'Soil and Fertilizers'),
(19, 'Digging Spade No. 1086 - Gardening Tool', 'Digging Spade No. 1086 - Gardening Tool', 800, './upload/img9.jpg', ' Accessories'),
(20, 'Gardening Water Can No. 1118 (10 ltr) - Gardening Tool', 'Gardening Water Can No. 1118 (10 ltr) - Gardening Tool', 120, './upload/img10.jpg', ' Accessories'),
(21, 'Plastic Hand Trowel No. 1021 - Gardening Tool', 'Plastic Hand Trowel No. 1021 - Gardening Tool', 120, './upload/img11.jpg', ' Accessories'),
(22, 'Budding and Grafting Knife No. MMI 55 - Gardening Tool', 'Budding and Grafting Knife No. MMI 55 - Gardening Tool', 430, './upload/img12.jpg', ' Accessories'),
(23, 'Miniature Rose, Button Rose (Any Color) - Plant', 'Miniature Rose, Button Rose (Any Color) - Plant', 543, './upload/img13.jpg', 'Plants'),
(24, 'Jasminum sambac, Mogra, Arabian Jasmine - Plant', 'Jasminum sambac, Mogra, Arabian Jasmine - Plant', 210, './upload/img14.jpg', 'Plants');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `userid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `userid`, `username`, `question`, `answer`) VALUES
(1, 18, 'Om Bhagwat', 'check', 'yes'),
(2, 20, 'Om Bhagwat', 'My first question...', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `pid`, `uid`, `username`, `review`) VALUES
(131, 9, 15, 'Tejas Bhagwat', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tsale` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `status`, `address`, `tsale`) VALUES
(15, 'Tejas', 'Bhagwat', 'demo@user.com', '$2y$10$5PGEtmzCFztECJMefQ6iwuHFxOZ/GOUYlsqMQZfZZJeM1Y8z38On2', 0, 'Jalgaon,\r\nMaharashtra,\r\nIndia', 1470),
(16, 'Om', 'Bhagwat', 'tejas@123.com', '$2y$10$Rox2F8feOdS.jNP0uxsB8.MkA81t5kwy6REny1Pzf4t2jp/g3j2JK', 0, '', 0),
(19, 'Admin', 'admin', 'admin@123.com', '$2y$10$XQRGEA5VknHPm17W1To4hekf8mEvgXT12/OUmLMbqqHR87iVB9WAm', 1, '', 0),
(20, 'Om', 'Bhagwat', 'om@123.com', '$2y$10$.j3ehdLAbzsvif0OksiWFOZne25dMjwQievcYHpMCwrkuc7.7uBkC', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
