-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 03:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway pantry system`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `food_id` int(11) NOT NULL,
  `food_name` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`food_id`, `food_name`, `price`) VALUES
(0, 'idli', 40),
(1, 'dosa', 50),
(2, 'Pongal', 60),
(3, 'Bread', 35),
(4, 'Chapati', 40),
(5, 'Meals', 100),
(6, 'Brinji Rice', 80),
(7, 'Tomato Rice', 55),
(8, 'Lemon Rice', 55),
(9, 'Chicken Biryani', 130),
(10, 'Paneer Fried Rice', 110),
(11, 'Prawn Biryani', 140),
(12, 'Bisi Bele Bath', 70),
(13, 'Naan', 35),
(14, 'Paneer Butter Masala', 85),
(15, 'Paneer Tikka', 90),
(16, 'Chicken Soup', 60),
(17, 'Mushroom Soup', 50),
(18, 'Paneer 65', 75),
(19, 'Tandoori Chicken', 200),
(20, 'Tandoori Momos', 80),
(21, 'Tandoori Roti', 50),
(22, 'Tandoori Paneer Tikka', 100),
(23, 'Samosa', 25),
(24, 'Bajji', 15),
(25, 'Cutlet', 30),
(26, 'Sandwich', 40),
(27, 'Veg Puff', 20);

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `pnr` int(10) NOT NULL,
  `food_id` int(5) NOT NULL,
  `qty` int(5) NOT NULL,
  `customer_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`pnr`, `food_id`, `qty`, `customer_name`) VALUES
(1234567890, 5, 2, 'laxman b'),
(1234567890, 9, 2, 'laxman b');

-- --------------------------------------------------------

--
-- Table structure for table `pnr_info`
--

CREATE TABLE `pnr_info` (
  `pnr` int(10) NOT NULL,
  `passenger_name` varchar(25) NOT NULL,
  `coach` varchar(10) NOT NULL,
  `seat_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pnr_info`
--

INSERT INTO `pnr_info` (`pnr`, `passenger_name`, `coach`, `seat_no`) VALUES
(1224567893, 'kishore', 'S2', 20),
(1234567890, 'laxman b', 'S1', 32);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `securityquestion` varchar(60) NOT NULL,
  `securityanswer` varchar(100) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `mstatus` varchar(5) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `postoffice` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `sbi` varchar(5) NOT NULL,
  `tc` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`username`, `password`, `securityquestion`, `securityanswer`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `occupation`, `mstatus`, `email`, `mobile`, `nationality`, `flat`, `street`, `area`, `pincode`, `state`, `city`, `postoffice`, `phone`, `sbi`, `tc`) VALUES
('Kishore', 'k', 'Who was your childhood hero?', 'Kamal hassan', 'kishore', '', 'D S', 'Male', '2002-05-08', 'GOVERNMENT', 'Marri', 'kishoresrinivasan2002@gmail.com', '9123456789', 'India', '12', 'Thiruvalluvar', 'nerkundram', '600548', 'Tamil Nadu', 'Chennai', 'Chennai', '9123456789', 'on', 'on'),
('laxman b', 'l', 'What is your pet name?', 'Jerry', 'laxman ', '', '', 'Male', '2001-05-12', 'PROFESSIONAL', 'Marri', 'laxmanbalaraman@gmail.com', '7899222314', 'India', '16', 'galaxy street', 'anna nagar', '600548', 'Tamil Nadu', 'Chennai', 'Chennai', '7899222314', 'on', 'on'),
('Ram', 'r', 'What is your pet name?', 'dog', 'Ram', '', '', 'Male', '1988-05-12', 'GOVERNMENT', 'Marri', 'laxmanbalaraman@gmail.com', '7123456789', 'Brazil', '212', 'dvdfvfdv', 'fdvdfbvdf', '600548', 'Tamil Nadu', 'Chennai', 'Chennai', '7123456789', 'on', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `pnr_info`
--
ALTER TABLE `pnr_info`
  ADD PRIMARY KEY (`pnr`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
