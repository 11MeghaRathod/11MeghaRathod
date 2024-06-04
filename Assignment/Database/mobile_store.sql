-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 08:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(100) NOT NULL,
  `qty` int(200) NOT NULL,
  `c_price` int(200) NOT NULL,
  `subtotal` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `qty`, `c_price`, `subtotal`) VALUES
(1, 0, 0, 0, 0),
(3, 3, 1, 26999, 26999),
(6, 1, 1, 70000, 70000),
(7, 4, 2, 18999, 37998);

-- --------------------------------------------------------

--
-- Table structure for table `m_product`
--

CREATE TABLE `m_product` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_description` varchar(255) NOT NULL,
  `m_img` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_product`
--

INSERT INTO `m_product` (`m_id`, `m_name`, `m_description`, `m_img`, `quantity`, `price`) VALUES
(1, 'I-Phone 15', 'DYNAMIC ISLAND COMES TO IPHONE 15 — Dynamic Island bubbles up alerts and Live Activities — so you don’t miss them while you’re doing something else. You can see who’s calling, track your next ride, check your flight status, and so much more.', 'uploads/Apple-iPhone-12-Transparent-PNG.png', 30, 70000),
(2, 'Vivo 29', 'This Renewed product is tested to work and look like new with minimal to no signs of wear & tear; the product comes with relevant accessories and is backed by a minimum six month seller warranty; box may be generic', 'uploads/v1.png', 30, 27000),
(3, 'Oneplus Nord CE4 ', ' OnePlus Nord CE4 comes in 2 colorways - Celadon Marble, a first for Nord and Dark Chrome, our signature variant. Oh, and it’s mega-durable… This phone’s bezel material is so tough, it’s thinking of taking up cage fighting. Seriously, we dropped it 1.5 me', 'uploads/oneplus.png', 40, 26999),
(4, 'Redmi Note 13 5G', 'Display: 6.67\" FHD+ pOLED (1080x2400) Ultra-narrow bezels Display with 120Hz Refresh rate; 1000nits peak brightness; Corning Gorilla Glass 5 Display Protection\r\nProcessor:Mediatek Dimensity 6080 6nm Octa-core 5G processor for high performance ; Up to 2.4G', 'uploads/c4866f7bdd20c6ed7acf6082417dd340.png', 23, 18999),
(5, 'Samsung Galaxy M34 5G', '16.42 Centimeters (6.5-Inch) Super AMOLED Display, FHD+ Resolution, 1080 x 2340 Pixels Protected by Corning Gorilla Glass 5\r\n50MP+8MP+2MP Triple Camera Setup - True 50MP No Shake Cam (F1.8) Main Camera + 8MP (F2.2) + 2MP (F2.4)| 13MP (F2.0) Front Camera\r\n', 'uploads/51JaSbauK3L._SX300_SY300_QL70_FMwebp_.webp', 25, 13999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product` (`product_id`);

--
-- Indexes for table `m_product`
--
ALTER TABLE `m_product`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_product`
--
ALTER TABLE `m_product`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
