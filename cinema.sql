-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2021 at 10:03 AM
-- Server version: 10.1.48-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE IF NOT EXISTS `tbl_movies` (
  `id` int(11) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`id`, `movie`, `price`) VALUES
(1, 'Eternal Sunshine of the Spotless Mind', '200'),
(2, 'Titanic', '200'),
(3, 'The Matrix', '200'),
(4, 'Jaws', '200'),
(5, 'The Shawshank Redemption', '200'),
(6, 'Die Hard', '200'),
(7, 'Sample Movie', '250');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seats`
--

CREATE TABLE IF NOT EXISTS `tbl_seats` (
  `id` int(11) NOT NULL,
  `film` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seats1`
--

CREATE TABLE IF NOT EXISTS `tbl_seats1` (
  `id` int(11) NOT NULL,
  `film` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seats3`
--

CREATE TABLE IF NOT EXISTS `tbl_seats3` (
  `id` int(11) NOT NULL,
  `film` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seats4`
--

CREATE TABLE IF NOT EXISTS `tbl_seats4` (
  `id` int(11) NOT NULL,
  `film` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seats5`
--

CREATE TABLE IF NOT EXISTS `tbl_seats5` (
  `id` int(11) NOT NULL,
  `film` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seats5`
--

INSERT INTO `tbl_seats5` (`id`, `film`, `seat`, `time`) VALUES
(8, 'The Shawshank Redemption$(200)', '54', '1:00 - 3:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seats6`
--

CREATE TABLE IF NOT EXISTS `tbl_seats6` (
  `id` int(11) NOT NULL,
  `film` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seats`
--
ALTER TABLE `tbl_seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seats1`
--
ALTER TABLE `tbl_seats1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seats3`
--
ALTER TABLE `tbl_seats3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seats4`
--
ALTER TABLE `tbl_seats4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seats5`
--
ALTER TABLE `tbl_seats5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seats6`
--
ALTER TABLE `tbl_seats6`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_seats`
--
ALTER TABLE `tbl_seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_seats1`
--
ALTER TABLE `tbl_seats1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_seats3`
--
ALTER TABLE `tbl_seats3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_seats4`
--
ALTER TABLE `tbl_seats4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_seats5`
--
ALTER TABLE `tbl_seats5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_seats6`
--
ALTER TABLE `tbl_seats6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
