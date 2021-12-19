-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 04:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techcommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `category` tinyint(5) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `featured` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `img`, `price`, `title`, `description`, `featured`) VALUES
(1, 1, '/e-commerce/asset/product/hardware/hardware1.jpg', '5390000', 'AMD Ryzen 7 5700G 3.8GHz ', '8 CPU Cores 16 Threads 8 GPU Cores Box', 1),
(2, 1, '/e-commerce/asset/product/hardware/hardware2.jpg', '39500000', 'VGA ASUS RTX 3080 10GB ROG STRIX GAMING GUNDAM', '', 1),
(3, 1, '/e-commerce/asset/product/hardware/hardware3.jpg', '1300000', 'Corsair Vengeance LPX 16GB (2x8GB)', 'DDR4 DRAM 3200MHz (PC4-25600) C16 Memory Kit - Black', 1),
(4, 1, '/e-commerce/asset/product/hardware/hardware4.jpg', '8970000', 'PROCESSOR INTEL CORE I9 11900K ROCKET LAKE', 'LGA1200 8 CORES 16 THREAD', 1),
(5, 1, '/e-commerce/asset/product/hardware/hardware5.jpg\r\n', '2960000', 'MOTHERBOARD ASUS ROG STRIX B460-G Gaming', '', 1),
(6, 0, '/e-commerce/asset/product/pc&laptop/laptop1.jpg', '24176000', 'HP OMEN 16-B0047TX BLACK', 'Intel Core i7-11800H | RTX 3070 | RAM 16GB | SSD 512GB | W10 | OHS | 16.0 FHD IPS', 2),
(7, 0, '/e-commerce/asset/product/pc&laptop/laptop2.jpg', '15400000', 'ASUS TUF FX506II - R75TB6T', 'AMD Ryzen R7 4800H |  RAM 8GB DDR4 | SSD 512GB | 15.6 \" IPS | NVIDIA Ge-Force GTX1650Ti | Windows 10 Home', 2),
(8, 0, '/e-commerce/asset/product/pc&laptop/pc1.png', '92999000', 'Acer Predator Orion 9000 Gaming Desktop', 'INTEL i9-7900X | NVIDIA GeForce RTX 2080 DUAL | RAM 32 GB DDR4 | 1TB + 512GB SSD | Windows 10 Home ', 2),
(9, 0, '/e-commerce/asset/product/pc&laptop/laptop3.jpg', '30900000', 'Asus Rog Zephyrus G14 Alan Walker', 'AMD RYZEN 9 | RAM 16GB | SSD 1TB | RTX 3050Ti | Windows 10 Home', 2),
(10, 0, '/e-commerce/asset/product/pc&laptop/laptop4.jpeg', '19150000', 'Macbook Pro 2020 M1', 'M1 Chip | 13 inch | 8 Core CPU | 8 Core GPU | 256GB SSD', 2),
(11, 0, '/e-commerce/asset/product//gear/gear1.png', '1419999', 'Logitech G Pro Wireless Gaming Mouse', '', 3),
(12, 0, '/e-commerce/asset/product//gear/gear2.jpg', '1370000', 'HyperX Cloud II Gaming Headset Kingston', '', 3),
(13, 0, '/e-commerce/asset/product//gear/gear3.jpg', '3670000', 'Steelseries Arctis Pro Rgb With Game Dac', '', 3),
(14, 0, '/e-commerce/asset/product//gear/gear4.jpg', '3250000', 'Steelseries Apex Pro Fullsize', '', 3),
(15, 0, '/e-commerce/asset/product//gear/gear5.jpeg', '1399000', 'Logitech Gaming G613 Wireless Mechanical Keyboard Gaming', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
