-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 08:25 PM
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
-- Database: `teachersdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `acadamics`
--

CREATE TABLE `acadamics` (
  `ID` int(11) NOT NULL,
  `email` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acadamics`
--

INSERT INTO `acadamics` (`ID`, `email`, `details`) VALUES
(1, 'rahulroy.212cs022@nitk.edu.in', 'CPV'),
(2, 'rahulroy.212cs022@nitk.edu.in', 'BHU');

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `ID` int(11) NOT NULL,
  `email` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`ID`, `email`, `details`) VALUES
(1, 'rahulroy.212cs022@nitk.edu.in', 'Gate 2021');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `ID` int(11) NOT NULL,
  `email` text NOT NULL,
  `details` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`ID`, `email`, `details`, `link`) VALUES
(11, 'rahulroy.212cs022@nitk.edu.in', 'bkjsabvbjksdb', 'kdbvkkjxbv djsvb.aJSBCKJD'),
(12, 'rahulroy.212cs022@nitk.edu.in', 'bkjsabvbjksdb', 'ldljvlsdnv.asklnfclf.as;kfnclsi');

-- --------------------------------------------------------

--
-- Table structure for table `teachersdetails`
--

CREATE TABLE `teachersdetails` (
  `Sno` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `joining` date NOT NULL,
  `experience` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `linkedin` varchar(80) NOT NULL,
  `depertment` text DEFAULT NULL,
  `interest` varchar(200) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `position` text NOT NULL,
  `image` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachersdetails`
--

INSERT INTO `teachersdetails` (`Sno`, `name`, `joining`, `experience`, `email`, `password`, `phone`, `linkedin`, `depertment`, `interest`, `qualification`, `position`, `image`, `date`) VALUES
(12, 'Rahul Roy', '1998-09-28', '15', 'rahulroy.212cs022@nitk.edu.in', '123456789', '7001868475', 'https://www.linkedin.com/in/rahulroy280998/', 'computer science', 'ML, AI', 'post graduate', 'Staff', 'scanner_20190210_194109fg.jpg', '2021-12-21 23:20:40'),
(13, 'Rahul Das', '2002-07-27', '5', 'rahulroy.202cs022@nitk.edu.in', '123456789', '8373013011', 'https://www.kbsvkhs.com', 'electronics', 'DC', 'post graduate', 'Staff', 'default/default.jpg', '2021-12-22 00:52:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acadamics`
--
ALTER TABLE `acadamics`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teachersdetails`
--
ALTER TABLE `teachersdetails`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acadamics`
--
ALTER TABLE `acadamics`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teachersdetails`
--
ALTER TABLE `teachersdetails`
  MODIFY `Sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
