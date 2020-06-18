-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 05:28 PM
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
-- Database: `vacancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `idcode` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `companyname`, `idcode`, `date`, `password`) VALUES
(1, 'VXGdjJRzHA', 842141917, '1973-02-23 07:26:01', '4t6BE'),
(2, 'OajpOct', 775640066, '2028-08-29 04:41:42', '0Qg5p'),
(3, 'FTVEd', 970469395, '1974-01-18 17:32:06', '98iDd'),
(4, 'OGtDmxjMYJ', 274554748, '1972-08-30 03:59:34', '271rj'),
(5, 'VzRVa', 154089160, '1999-03-05 04:19:02', '0q34S'),
(6, 'qoIEIQ', 469556971, '2030-11-24 21:19:01', '6X0ir'),
(7, 'YDWnF', 452396947, '2027-05-26 23:02:09', '05pWg'),
(8, 'FeiLilepX', 965537456, '2019-09-08 06:59:17', '62nei'),
(9, 'JLkew', 346586401, '1988-09-09 07:39:31', '68VkK'),
(10, 'NTWbz', 363902191, '2023-08-22 00:33:13', '370E4'),
(11, 'TIymaQAK', 188234757, '2007-10-14 22:42:23', '8EK3Z'),
(12, 'diLRb', 212734980, '2017-05-06 03:14:30', '3X49i'),
(13, 'pQpiezyrU', 98047619, '2002-03-06 17:50:30', '6quaF');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `vacancyname` varchar(255) NOT NULL,
  `vacancydesc` text NOT NULL,
  `vacancydate` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `vacancyname`, `vacancydesc`, `vacancydate`, `companyname`) VALUES
(4, 'asd', 'asd', '06/18/2020 07:06:44 pm', 'OajpOct');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
