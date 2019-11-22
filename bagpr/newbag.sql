-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2019 at 01:03 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `name` varchar(50) NOT NULL,
  `dsc` varchar(50) NOT NULL,
  `amt` int(10) NOT NULL,
  `img` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newbag`
--

INSERT INTO `newbag` (`name`, `dsc`, `amt`, `img`, `id`) VALUES
('rakshith', 'man', 1000, 'Uploads/b8.jpg', 1),
('bag2', '111', 5000, 'Uploads/b7.jpg', 2),
('Iqbal', '2323', 1111, 'Uploads/b7.jpg', 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
