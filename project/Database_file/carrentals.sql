-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 04:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardb`
--

CREATE TABLE `cardb` (
  `name` varchar(25) NOT NULL,
  `carcompany` varchar(20) NOT NULL,
  `cartype` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  `seat` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `inform` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cardb`
--

INSERT INTO `cardb` (`name`, `carcompany`, `cartype`, `image`, `seat`, `price`, `inform`) VALUES
('baleno', 'maruti', 'petrol', 'bal.jpeg', 5, 1500, 'baleno is a super car ');

-- --------------------------------------------------------

--
-- Table structure for table `carrentalbooking`
--

CREATE TABLE `carrentalbooking` (
  `name` varchar(25) NOT NULL,
  `number` bigint(10) NOT NULL,
  `carname` varchar(15) NOT NULL,
  `fdate` date NOT NULL,
  `ftime` time(6) NOT NULL,
  `tdate` date NOT NULL,
  `ttime` time(6) NOT NULL,
  `dlnumber` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `bookstatus` varchar(20) NOT NULL,
  `bookid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrentalsnri`
--

CREATE TABLE `carrentalsnri` (
  `name` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL,
  `carname` varchar(20) NOT NULL,
  `fdate` date NOT NULL,
  `ftime` time(6) NOT NULL,
  `ttdate` date NOT NULL,
  `ttime` time(6) NOT NULL,
  `ppimage` varchar(25) NOT NULL,
  `dlnumber` varchar(30) NOT NULL,
  `image` varchar(25) NOT NULL,
  `bookstatus` varchar(15) NOT NULL,
  `bookid` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carservice`
--

CREATE TABLE `carservice` (
  `name` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL,
  `carcompany` varchar(20) NOT NULL,
  `carname` varchar(20) NOT NULL,
  `carymodel` varchar(20) NOT NULL,
  `vnumber` varchar(20) NOT NULL,
  `typeofser` varchar(20) NOT NULL,
  `fdate` date NOT NULL,
  `ftime` time(6) NOT NULL,
  `dlnumber` varchar(25) NOT NULL,
  `image` varchar(20) NOT NULL,
  `bookstatus` varchar(20) NOT NULL,
  `bookid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carservicen`
--

CREATE TABLE `carservicen` (
  `name` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL,
  `carcompany` varchar(20) NOT NULL,
  `carname` varchar(20) NOT NULL,
  `carymodel` varchar(20) NOT NULL,
  `vnumber` varchar(20) NOT NULL,
  `typeoser` varchar(15) NOT NULL,
  `fdate` date NOT NULL,
  `ftime` time(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dlnumber` varchar(25) NOT NULL,
  `image` varchar(20) NOT NULL,
  `bookstatus` varchar(20) NOT NULL,
  `bookid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `name` varchar(25) NOT NULL,
  `number` int(10) NOT NULL,
  `query` varchar(250) NOT NULL,
  `enquiryid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(25) NOT NULL,
  `number` bigint(10) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardb`
--
ALTER TABLE `cardb`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `carrentalbooking`
--
ALTER TABLE `carrentalbooking`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `carrentalsnri`
--
ALTER TABLE `carrentalsnri`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `carservice`
--
ALTER TABLE `carservice`
  ADD PRIMARY KEY (`bookid`,`number`);

--
-- Indexes for table `carservicen`
--
ALTER TABLE `carservicen`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiryid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrentalbooking`
--
ALTER TABLE `carrentalbooking`
  MODIFY `bookid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carrentalsnri`
--
ALTER TABLE `carrentalsnri`
  MODIFY `bookid` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carservice`
--
ALTER TABLE `carservice`
  MODIFY `bookid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carservicen`
--
ALTER TABLE `carservicen`
  MODIFY `bookid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiryid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
