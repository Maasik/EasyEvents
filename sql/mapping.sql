-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2016 at 06:45 AM
-- Server version: 5.5.41-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mapping`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`eventID` int(9) NOT NULL,
  `ownerID` int(9) NOT NULL,
  `name` varchar(42) NOT NULL,
  `type` varchar(42) NOT NULL,
  `description` varchar(144) NOT NULL,
  `ageMin` int(2) NOT NULL,
  `ageMax` int(2) NOT NULL,
  `timeStart` time DEFAULT NULL,
  `timeEnd` time DEFAULT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `day` varchar(42) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `ownerID`, `name`, `type`, `description`, `ageMin`, `ageMax`, `timeStart`, `timeEnd`, `dateStart`, `dateEnd`, `lat`, `lng`, `day`) VALUES
(1, 1, 'Knollwood Public School', 'Sport', 'Basketball', 10, 12, '19:00:00', '20:00:00', '2016-04-05', '2016-04-05', 43.0072, -81.2299, 'Monday'),
(2, 1, 'Byron Somerset Public School', 'Sport', 'Floor Hockey', 10, 12, '19:15:00', '20:15:00', '2016-04-15', '2016-04-22', 42.9472, -81.326, 'Tuesday');

-- --------------------------------------------------------

--
-- Table structure for table `metadata`
--

CREATE TABLE IF NOT EXISTS `metadata` (
  `generated` int(6) NOT NULL,
  `url` varchar(42) NOT NULL,
  `title` varchar(42) NOT NULL,
  `status` int(3) NOT NULL,
  `api` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metadata`
--

INSERT INTO `metadata` (`generated`, `url`, `title`, `status`, `api`) VALUES
(1, 'http://mywebsite.com', 'generatedMapData', 200, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`eventID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `eventID` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
