-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 04:55 AM
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
-- Database: `bag`
--

-- --------------------------------------------------------

--
-- Table structure for table `newbag`
--

CREATE TABLE `newbag` (
  `cat` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dsc` varchar(50) NOT NULL,
  `amt` int(10) NOT NULL,
  `img` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newbag`
--

INSERT INTO `newbag` (`cat`, `name`, `dsc`, `amt`, `img`, `id`) VALUES
('women', 'bagpacks', 'gsgdj', 2000, 'Uploads/g4.jpg', 1),
('women', 'hehe', 'hhhh', 6565, 'Uploads/bag.png', 2),
('women', 'my bag', 'xcxcxcxcxcx', 6565, 'Uploads/b8.jpg', 3),
('women', 'my bag', 'tytyty', 54353, 'Uploads/ab2.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fullname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fullname`, `address`, `username`, `password`, `phone`) VALUES
('bjdbf', 'dfdsf', 'ash', 'ash', '23223'),
('bjdbf', 'dfdsf', 'ash', 'ash', '23223'),
('anshi', 'nasir manzil', 'anshi', 'anshi', '12345678'),
('', '', '', '', ''),
('', '', '', '', ''),
('arshi', 'adfgh', 'arshi', 'arshi', '589123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newbag`
--
ALTER TABLE `newbag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newbag`
--
ALTER TABLE `newbag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
