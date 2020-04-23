-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 05:35 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vocab`
--

-- --------------------------------------------------------

--
-- Table structure for table `vocab`
--

CREATE TABLE `vocab` (
  `id` int(11) NOT NULL,
  `eng` text NOT NULL,
  `geo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vocab`
--

INSERT INTO `vocab` (`id`, `eng`, `geo`) VALUES
(1, 'small', 'patara'),
(2, 'big', 'didi'),
(3, 'dog', 'dzagli'),
(4, 'cat', 'kata'),
(5, 'table', 'magida'),
(6, 'screen', 'ekrani'),
(7, 'mouse', 'tagvi'),
(8, 'foot', 'fexi'),
(9, 'hand', 'xeli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vocab`
--
ALTER TABLE `vocab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vocab`
--
ALTER TABLE `vocab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
