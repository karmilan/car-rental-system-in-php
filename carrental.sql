-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 04:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `carid` int(10) NOT NULL,
  `carnumber` varchar(10) NOT NULL,
  `carmodel` varchar(50) NOT NULL,
  `available` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carid`, `carnumber`, `carmodel`, `available`) VALUES
(65, 'wp-0099', 'Renault', 'yes'),
(68, 'wp-0022', 'ford', 'yes'),
(72, 'wp-0054', 'suzuki-swift', 'yes'),
(76, 'wp-23', 'ford', 'yes'),
(77, 'WP-04', 'SKODA', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `carreturn`
--

CREATE TABLE `carreturn` (
  `returnid` int(10) NOT NULL,
  `rent_id` int(10) NOT NULL,
  `returnedtime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carreturn`
--

INSERT INTO `carreturn` (`returnid`, `rent_id`, `returnedtime`) VALUES
(14, 30, '2021-04-05 16:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rentid` int(10) NOT NULL,
  `custname` varchar(50) NOT NULL,
  `custnic` varchar(50) NOT NULL,
  `custpno` int(10) NOT NULL,
  `car_number` varchar(10) NOT NULL,
  `days` int(100) NOT NULL,
  `regtime` datetime NOT NULL DEFAULT current_timestamp(),
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rentid`, `custname`, `custnic`, `custpno`, `car_number`, `days`, `regtime`, `amount`) VALUES
(30, 'siro', '078666444321', 778866543, 'wp-23', 11, '2021-04-05 12:45:51', NULL),
(32, 'vj', '1111', 1111, 'wp-0099', 11, '2021-04-05 16:50:26', NULL),
(33, 'adnan', '987734', 3333, 'wp-0022', 3, '2021-04-05 18:21:39', NULL),
(34, 'ff', 'ff', 22, 'wp-23', 1, '2021-04-05 18:27:16', 1000),
(35, 'qq', 'ww2', 111, 'wp-0022', 3, '2021-04-05 18:34:27', 0),
(36, 'qq', 'ww2', 111, 'wp-23', 3, '2021-04-05 18:35:22', 10),
(37, 'ff', '', 3333, 'wp-0099', 19, '2021-04-05 18:45:23', 0),
(38, 'vj', '987734', 1111, 'wp-23', 30, '2021-04-05 18:48:32', 0),
(39, 'qqq', '2222', 2222, 'wp-0099', 5, '2021-04-05 18:52:08', 50),
(40, 'ff', '55', 55, 'wp-0099', 6, '2021-04-05 18:54:51', 50),
(41, 'ttt', '6666', 777, 'wp-0099', 9, '2021-04-05 19:01:17', 90),
(42, 'evon', '987653535', 776644532, 'WP-04', 4, '2021-04-05 19:22:43', 40),
(43, 'vkkk', '555', 5554, 'WP-04', 2, '2021-04-05 19:52:56', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fullname`, `email`, `phno`, `username`, `pass`) VALUES
(2, 'karmilan', 'karm@gmail.com', 773322976, 'admin', 'admin'),
(4, 'banujan', 'banu@gmail.com', 774567329, 'bnj', 'bnj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carid`),
  ADD UNIQUE KEY `carnumber` (`carnumber`);

--
-- Indexes for table `carreturn`
--
ALTER TABLE `carreturn`
  ADD PRIMARY KEY (`returnid`),
  ADD KEY `checkrentid` (`rent_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rentid`),
  ADD UNIQUE KEY `regtime` (`regtime`),
  ADD KEY `rent` (`car_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `carid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `carreturn`
--
ALTER TABLE `carreturn`
  MODIFY `returnid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carreturn`
--
ALTER TABLE `carreturn`
  ADD CONSTRAINT `checkrentid` FOREIGN KEY (`rent_id`) REFERENCES `rent` (`rentid`);

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent` FOREIGN KEY (`car_number`) REFERENCES `car` (`carnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
