-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 04:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `name`, `password`) VALUES
(1, 'omar', 'omarkhan'),
(2, 'muneeb', 'muneeb123'),
(3, 'rehman', 'rehman99'),
(4, 'admin', 'admin1'),
(5, 'hello', 'hello123'),
(6, 'admin', 'admin@123'),
(7, 'asim', 'asim123'),
(8, 'omar', 'omar123'),
(9, 'test', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `anim_id` int(11) NOT NULL,
  `animal_desc` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`anim_id`, `animal_desc`, `name`, `id`) VALUES
(1, 'hello catte\r\n    ', 'omar', 1),
(1, 'woldiiii\r\n    ', 'omar', 2),
(1, 'hello world\r\n    ', 'omar', 3),
(1, 'hello world\r\n    ', 'omar', 4),
(2, 'my car was broken by an elephant.\r\n                   ', 'muneeb', 5),
(2, '', 'muneeb', 6),
(3, 'hello elephant you are good\r\n                   ', 'rehman', 7),
(5, 'my name is danger\r\n                   ', 'hello', 8),
(7, 'hello my kiitten\r\n                   ', 'asim', 9),
(8, 'hello world\r\n    ', 'omar', 10),
(1, 'my best pet\r\n                   ', 'omar', 11),
(1, 'cuttie pie\r\n    ', 'test', 12),
(1, 'hi arslan\r\n                   ', 'omar', 13),
(1, 'my pet dog\r\n                   ', 'omar', 14),
(9, 'good dog\r\n    ', 'test', 15);

-- --------------------------------------------------------

--
-- Table structure for table `mineral`
--

CREATE TABLE `mineral` (
  `mine_id` int(11) NOT NULL,
  `mine_desc` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mineral`
--

INSERT INTO `mineral` (`mine_id`, `mine_desc`, `name`, `id`) VALUES
(1, 'hello sweete\r\n    ', 'omar', 1),
(1, 'hello sweete\r\n    ', 'omar', 2),
(1, 'my banana\r\n    ', 'omar', 3),
(2, '', 'muneeb', 4),
(2, 'i drop sodium carbonate\r\n                    ', 'muneeb', 5),
(3, 'my best pet\r\n                    ', 'rehman', 6),
(8, 'jhjkjsagashsa\r\n                    ', 'omar', 7),
(1, 'hello arlasna ajsjjs\r\n                    ', 'omar', 8),
(1, 'hello muhammad omar\r\n                    ', 'omar', 9),
(1, 'world best salt\r\n                    ', 'omar', 10),
(9, 'good salt\r\n                    ', 'test', 11);

-- --------------------------------------------------------

--
-- Table structure for table `myvegitable`
--

CREATE TABLE `myvegitable` (
  `veg_id` int(11) NOT NULL,
  `veg_desc` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myvegitable`
--

INSERT INTO `myvegitable` (`veg_id`, `veg_desc`, `name`, `id`) VALUES
(1, 'my best bunny\r\n    ', 'omar', 1),
(9, 'my best vege                        \r\n                    ', 'test', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mineral`
--
ALTER TABLE `mineral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myvegitable`
--
ALTER TABLE `myvegitable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mineral`
--
ALTER TABLE `mineral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `myvegitable`
--
ALTER TABLE `myvegitable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
