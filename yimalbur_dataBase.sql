-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2021 at 11:39 AM
-- Server version: 10.3.28-MariaDB-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yimalbur_dataBase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `farm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rank` int(10) NOT NULL DEFAULT 1,
  `assignfrmno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `name`, `phone`, `address`, `date`, `password`, `email`, `rank`, `assignfrmno`) VALUES
(1, 'Yuusuf Ibn Mutalib', '08032934498', 'Phase 2B, Alase odoi', '0000-00-00', 'teOb2j.sCvBgU', 'ibnmut@gmail.com', 2, 1),
(2, 'Yusuf', '09032192815', 'Olorunsogo, Ilorin', '2019-12-19', 'tehSYCe7ZCyrY', 'yusuf@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(20) NOT NULL,
  `client` varchar(32) NOT NULL,
  `client_id` int(20) NOT NULL,
  `amount` varchar(44) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(20) NOT NULL,
  `balance` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_records`
--

CREATE TABLE `client_records` (
  `id` int(20) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(30) NOT NULL,
  `goods_no` varchar(30) NOT NULL,
  `good_type` varchar(50) NOT NULL,
  `cost` int(40) NOT NULL,
  `remark` text NOT NULL,
  `client_id` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deposite`
--

CREATE TABLE `deposite` (
  `id` int(20) NOT NULL,
  `amount` int(32) NOT NULL,
  `date` date NOT NULL,
  `client_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farmdata`
--

CREATE TABLE `farmdata` (
  `id` int(10) NOT NULL,
  `farmno` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmdata`
--

INSERT INTO `farmdata` (`id`, `farmno`) VALUES
(1, '1'),
(2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `farmrecord`
--

CREATE TABLE `farmrecord` (
  `id` int(50) NOT NULL,
  `farmno` int(50) NOT NULL,
  `fish No` int(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `dayOfWeek` varchar(50) NOT NULL,
  `week_no` int(20) NOT NULL,
  `SourceOfFeed` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `mortality` varchar(50) NOT NULL,
  `sourceOfFish` varchar(50) NOT NULL,
  `drugs` varchar(50) NOT NULL,
  `feed` varchar(50) NOT NULL,
  `cost` int(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmrecord`
--

INSERT INTO `farmrecord` (`id`, `farmno`, `fish No`, `size`, `dayOfWeek`, `week_no`, `SourceOfFeed`, `breed`, `date`, `mortality`, `sourceOfFish`, `drugs`, `feed`, `cost`, `remarks`, `month`, `year`) VALUES
(1, 1, 5000, 'Juvenile', '14', 2, 'Durate , Blue crown and Ecofloat', 'Hybrid', '0000-00-00', '', 'From our hatchery', 'Acuecery', '1.8mm durate', 6300, 'Satisfy', '2019', 'November');

-- --------------------------------------------------------

--
-- Table structure for table `hatchtable`
--

CREATE TABLE `hatchtable` (
  `id` int(20) NOT NULL,
  `farmno` varchar(11) NOT NULL,
  `fish_type` varchar(18) NOT NULL,
  `no_fish` varchar(30) NOT NULL,
  `mortality` varchar(30) NOT NULL,
  `cleint_name` varchar(40) NOT NULL,
  `cost` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hatchtable`
--

INSERT INTO `hatchtable` (`id`, `farmno`, `fish_type`, `no_fish`, `mortality`, `cleint_name`, `cost`, `date`, `remark`) VALUES
(1, 'n3', 'clearance', '7000', '', 'lateef', '2500000', '2019-12-19', 'big/medium=10(192,500),\r\nsmall = 39 (702000)\r\nsmallest = 40 (502,500)\r\ntiny = 8 (124000)');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `email`) VALUES
(1, 'aalole25@gmail.com'),
(22, 'aalole25@gmail.com'),
(21, 'ibnmut@gmail.com'),
(20, 'amujo@gmail.com'),
(19, 'amujo@gmail.com'),
(18, 'gift.weike@gmail.com'),
(17, 'oluwatomisin1605@gmail.com'),
(16, 'ekeneadim@gmail.com'),
(15, 'abiodunrasheed93@gmail.com'),
(23, 'taiwokb2@gmail.com'),
(24, 'taiwokb2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pondtable`
--

CREATE TABLE `pondtable` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `day_of_week` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `week_no` int(32) NOT NULL,
  `mortality` varchar(44) COLLATE utf8_unicode_ci NOT NULL,
  `drug` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `feed` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cost` int(20) NOT NULL,
  `remarks` text COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(22) NOT NULL,
  `farmno` varchar(18) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quantitytbl`
--

CREATE TABLE `quantitytbl` (
  `id` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `curUnitPrice` int(20) NOT NULL,
  `totalPrice` int(20) NOT NULL,
  `date` date NOT NULL,
  `strId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quantitytbl`
--

INSERT INTO `quantitytbl` (`id`, `quantity`, `curUnitPrice`, `totalPrice`, `date`, `strId`) VALUES
(1, 150, 6050, 907500, '2019-12-19', 201912191);

-- --------------------------------------------------------

--
-- Table structure for table `reartable`
--

CREATE TABLE `reartable` (
  `id` int(20) NOT NULL,
  `client` varchar(32) NOT NULL,
  `no_fish` int(30) NOT NULL,
  `type_fish` varchar(30) NOT NULL,
  `seller` varchar(40) NOT NULL,
  `cost` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `remark` text NOT NULL,
  `per_fish` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(20) NOT NULL,
  `strNo` int(20) NOT NULL,
  `store_Id` int(20) NOT NULL,
  `productName` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(50) NOT NULL,
  `costBag` int(50) NOT NULL,
  `totCost` int(50) NOT NULL,
  `date` date NOT NULL,
  `noExist` int(50) NOT NULL,
  `totalinstore` int(20) NOT NULL,
  `available` int(20) NOT NULL,
  `stocker` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `strNo`, `store_Id`, `productName`, `size`, `quantity`, `costBag`, `totCost`, `date`, `noExist`, `totalinstore`, `available`, `stocker`) VALUES
(1, 1, 201912191, 'bluecrown, ', '2mm', 0, 6050, 605000, '2019-12-19', 100, 250, 200, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `store_profile`
--

CREATE TABLE `store_profile` (
  `id` int(20) NOT NULL,
  `noBagSold` int(20) NOT NULL,
  `unitsellPrice` int(20) NOT NULL,
  `totsellprice` int(20) NOT NULL,
  `sellerName` varchar(20) NOT NULL,
  `buyerName` varchar(20) NOT NULL,
  `strid` int(20) NOT NULL,
  `date` date NOT NULL,
  `unitcost` int(20) NOT NULL,
  `profit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_profile`
--

INSERT INTO `store_profile` (`id`, `noBagSold`, `unitsellPrice`, `totsellprice`, `sellerName`, `buyerName`, `strid`, `date`, `unitcost`, `profit`) VALUES
(1, 50, 6300, 315000, 'admin', 'lateef', 201912191, '2019-12-19', 6050, 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_records`
--
ALTER TABLE `client_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposite`
--
ALTER TABLE `deposite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmdata`
--
ALTER TABLE `farmdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmrecord`
--
ALTER TABLE `farmrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hatchtable`
--
ALTER TABLE `hatchtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pondtable`
--
ALTER TABLE `pondtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantitytbl`
--
ALTER TABLE `quantitytbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reartable`
--
ALTER TABLE `reartable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_profile`
--
ALTER TABLE `store_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_records`
--
ALTER TABLE `client_records`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposite`
--
ALTER TABLE `deposite`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmdata`
--
ALTER TABLE `farmdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmrecord`
--
ALTER TABLE `farmrecord`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hatchtable`
--
ALTER TABLE `hatchtable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `quantitytbl`
--
ALTER TABLE `quantitytbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reartable`
--
ALTER TABLE `reartable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store_profile`
--
ALTER TABLE `store_profile`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
