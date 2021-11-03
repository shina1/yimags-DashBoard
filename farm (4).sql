-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 02:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phoneno`, `address`, `date`, `password`, `email`, `farm`) VALUES
(1, 'Wale', 0, '2, Havillah Street, Taoheed Road, Off Basin Road,I', '0000-00-00', 'd41d8cd98f00b204e980', 'wale@gmail.com', '2'),
(2, 'Wale', 0, '2, Havillah Street, Taoheed Road, Off Basin Road,I', '0000-00-00', 'd41d8cd98f00b204e980', 'wale@gmail.com', '2'),
(3, 'Wale', 0, '2, Havillah Street, Taoheed Road, Off Basin Road,I', '0000-00-00', 'd41d8cd98f00b204e980', 'wale@gmail.com', '2'),
(4, 'Wale', 0, '2, Havillah Street, Taoheed Road, Off Basin Road,I', '0000-00-00', 'd41d8cd98f00b204e980', 'wale@gmail.com', '3');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rank` int(10) NOT NULL DEFAULT '1',
  `assignfrmno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `name`, `phone`, `address`, `date`, `password`, `email`, `rank`, `assignfrmno`) VALUES
(1, 'Mr Admin', 806353626, 'adim house', '0000-00-00', 'te9rrsF8D68uA', 'adim house', 0, 0),
(2, 'Uncle Admin', 2147483647, 'uncle house', '0000-00-00', 'tenV0GXyY/XI6', 'uncle house', 0, 0),
(3, 'Uncle Admin2', 2147483647, 'uncle house', '0000-00-00', 'uncle house', 'uncle house', 0, 0),
(4, 'mr uncle', 898765434, 'mr street', '0000-00-00', '12345', 'wale@gmail.com', 2, 0),
(5, 'Mr Wale', 2147483647, 'sango', '2019-10-25', 'tehSYCe7ZCyrY', 'wale@gmail.com', 1, 3),
(6, 'Mr Admin', 12345, 'taiwo', '2019-10-25', 'teV57ZSHQEwns', 'oswasiu@gmail.com', 1, 3),
(7, 'a.razaq', 2147483647, 'asadam', '2019-10-25', 'te./49WLaZdf6', 'abiodun@codesquad.co', 1, 2),
(8, 'newadmin', 123456, 'oloje', '2019-10-25', 'tebBKZHWXRqRk', 'new@gmail.com', 1, 7);

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
  `phone` int(11) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client`, `client_id`, `amount`, `date`, `phone`, `address`) VALUES
(1, 'mikel', 0, '3000', '2019-10-19', 0, ''),
(2, 'Bobby', 0, '40000', '2019-10-14', 0, ''),
(3, 'Mr Ajagbe', 201910211, '', '2019-10-21', 2147483647, 'isale koto '),
(4, 'Mr Salako', 201910212, '', '2019-10-21', 2147483647, 'isale koto '),
(5, 'Mr Ajagbe', 201910213, '', '2019-10-21', 2147483647, 'isale koto '),
(6, 'aalole', 201910251, '50000', '2019-10-25', 2147483647, 'araromi');

-- --------------------------------------------------------

--
-- Table structure for table `client_records`
--

CREATE TABLE `client_records` (
  `id` int(18) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(30) NOT NULL,
  `goods_no` varchar(30) NOT NULL,
  `cost` int(40) NOT NULL,
  `remark` text NOT NULL,
  `client_id` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_records`
--

INSERT INTO `client_records` (`id`, `date`, `day`, `goods_no`, `cost`, `remark`, `client_id`) VALUES
(0, '2019-10-25', 'Monday', 'feed', 50000, 'new', '201910251'),
(8, '2019-10-15', 'Monday', 'fish', 10000, 'For mr Bobby', '$client_id'),
(9, '2019-10-16', 'Tuesday', 'fish', 10000, 'For Mr bobby', '$client_id');

-- --------------------------------------------------------

--
-- Table structure for table `deposite`
--

CREATE TABLE `deposite` (
  `id` int(18) NOT NULL,
  `amount` int(32) NOT NULL,
  `date` date NOT NULL,
  `client_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposite`
--

INSERT INTO `deposite` (`id`, `amount`, `date`, `client_id`) VALUES
(0, 50000, '2019-10-25', '201910251'),
(1, 10000, '2019-10-19', '201910191'),
(2, 20000, '2019-10-19', '201910191'),
(3, 20000, '2019-10-19', '201910191'),
(4, 20000, '2019-10-19', '201910191'),
(5, 20000, '2019-10-19', '201910191'),
(6, 10000, '2019-10-19', '201910191'),
(7, 20000, '2019-10-19', '201910191'),
(8, 10000, '2019-10-19', '201910191'),
(9, 10000, '2019-10-19', '201910191'),
(10, 30000, '2019-10-19', '201910191'),
(11, 30000, '2019-10-19', '201910191'),
(12, 30000, '2019-10-19', '201910191'),
(13, 10000, '2019-10-19', '201910191'),
(14, 10000, '2019-10-19', '201910191'),
(15, 5000, '2019-10-19', '201910191'),
(16, 5000, '2019-10-19', '201910191'),
(17, 10000, '2019-10-19', '201910192'),
(18, 20000, '2019-10-19', '201910192'),
(19, 20000, '2019-10-19', '201910192'),
(20, 4000, '2019-10-19', '201910192'),
(21, 5000, '2019-10-19', '201910191'),
(22, 5000, '2019-10-19', '201910191'),
(23, 5000, '2019-10-19', '201910191'),
(24, 5000, '2019-10-19', '201910191'),
(25, 5000, '2019-10-19', '201910191'),
(26, 5000, '2019-10-19', '201910191'),
(27, 5000, '2019-10-19', '201910191'),
(28, 5000, '2019-10-19', '201910191'),
(29, 5000, '2019-10-19', '201910191'),
(30, 5000, '2019-10-19', '201910191'),
(31, 5000, '2019-10-19', '201910191'),
(32, 5000, '2019-10-19', '201910191'),
(33, 5000, '2019-10-19', '201910191'),
(34, 5000, '2019-10-19', '201910191'),
(35, 5000, '2019-10-19', '201910191'),
(36, 5000, '2019-10-19', '201910191'),
(37, 5000, '2019-10-19', '201910191'),
(38, 1000, '2019-10-19', '201910191'),
(39, 10000, '2019-10-19', '201910191'),
(40, 2000, '2019-10-19', '201910191'),
(41, 1000, '2019-10-19', '201910191'),
(42, 2000, '2019-10-19', '201910191'),
(43, 2000, '2019-10-19', '201910191'),
(44, 2000, '2019-10-19', '201910191'),
(45, 2000, '2019-10-19', '201910191'),
(46, 2000, '2019-10-19', '201910191'),
(47, 2000, '2019-10-19', '201910191'),
(48, 2000, '2019-10-19', '201910191'),
(49, 2000, '2019-10-19', '201910191'),
(50, 2000, '2019-10-19', '201910191'),
(51, 2000, '2019-10-19', '201910191'),
(52, 2000, '2019-10-19', '201910191'),
(53, 2000, '2019-10-19', '201910191'),
(54, 2000, '2019-10-19', '201910191'),
(55, 2000, '2019-10-19', '201910191'),
(56, 2000, '2019-10-19', '201910191'),
(57, 2000, '2019-10-19', '201910191'),
(58, 2000, '2019-10-19', '201910191'),
(59, 2000, '2019-10-19', '201910191'),
(60, 2000, '2019-10-20', '201910191'),
(61, 2000, '2019-10-20', '201910191'),
(62, 1000, '2019-10-21', '201910191'),
(63, 1000, '2019-10-21', '201910191'),
(64, 1000, '2019-10-21', '201910201'),
(65, 1000, '2019-10-21', '201910201'),
(66, 1000, '2019-10-21', '201910201'),
(67, 1000, '2019-10-21', '201910201'),
(68, 1000, '2019-10-21', '201910201'),
(69, 500, '2019-10-21', '201910201'),
(70, 3000, '2019-10-21', '201910201'),
(71, 1000, '2019-10-21', '201910201'),
(72, 1000, '2019-10-21', '201910201'),
(73, 500, '2019-10-21', '201910201'),
(74, 500, '2019-10-21', '201910201'),
(75, 500, '2019-10-21', '201910201'),
(76, 500, '2019-10-21', '201910201'),
(77, 500, '2019-10-21', '201910201'),
(78, 200, '2019-10-21', '201910201'),
(79, 100, '2019-10-21', '201910201'),
(80, 1000, '2019-10-22', '201910201'),
(81, 200, '2019-10-22', '201910201'),
(82, 100, '2019-10-22', '201910201'),
(83, 500, '2019-10-23', '201910191'),
(84, 500, '2019-10-23', '201910191'),
(85, 500, '2019-10-23', '201910191'),
(86, 500, '2019-10-23', '201910191'),
(87, 500, '2019-10-23', '201910191'),
(88, 500, '2019-10-23', '201910191'),
(89, 500, '2019-10-23', '201910191');

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
(1, '5'),
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4'),
(6, '7'),
(7, '8');

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
(1, 34, 300, '50', 'monday', 4, 'store', 'jumbo', '2019-10-21', '23', 'store', 'mikel', 'ajeyo', 50000, 'good', '', ''),
(2, 3, 4, '4', 'monday', 2, 'store', 'jumbo', '2019-10-21', '23', 'store', 'mikel', 'ajeyo', 50000, 'good', '', ''),
(3, 0, 500, '23cm', 'monday', 3, 'yimags', 'jumbo', '2019-10-25', '1', 'yimags', 'penicilne', 'ajeyo', 50000, 'good', '2019', 'feb'),
(4, 3, 677, '23cm', 'monday', 4, 'yimags', 'jumbo', '2019-10-25', '6', 'yimags', 'penicilne', 'ajeyo', 50000, 'good', '2019', 'feb'),
(5, 0, 3000, '23cm', 'monday', 3, 'yimags', 'jumbo', '2019-10-25', '1', 'yimags', 'penicilne', 'ajeyo', 50000, 'good', '2019', 'feb'),
(6, 7, 6000, '23cm', 'tuesday', 3, 'yimags', 'jumbo', '2019-10-25', '1', 'yimags', 'penicilne', 'ajeyo', 50000, 'good', '2019', 'dec');

-- --------------------------------------------------------

--
-- Table structure for table `hatchtable`
--

CREATE TABLE `hatchtable` (
  `id` int(18) NOT NULL,
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
(0, '5', 'fish_type', '500', '', 'aalole', '60000', '2019-10-25', 'paid'),
(1, '4', 'fish_type', '200', '', 'Mr Bamidele', '20000', '2019-10-24', 'Successfully sold fishes');

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

--
-- Dumping data for table `pondtable`
--

INSERT INTO `pondtable` (`id`, `date`, `day_of_week`, `week_no`, `mortality`, `drug`, `feed`, `cost`, `remarks`, `month`, `year`, `farmno`) VALUES
(1, '2019-09-02', 'Monday', 1, '23', 'injection', '3', 2000, 'New entry', '0', 0, ''),
(2, '2019-09-03', 'Tuesday', 1, '23', 'injection', '5', 3000, 'new', '0', 0, ''),
(3, '2019-09-04', 'Wesnday', 1, '23', 'injection', '5', 1222, 'new', '0', 0, ''),
(4, '2019-09-05', 'Thursday', 1, '23', 'injection', '2', 4000, 'new', '0', 0, ''),
(5, '2019-09-06', 'Friday', 1, '23', 'injection', '2', 2000, 'new', '0', 0, ''),
(6, '2019-09-07', 'Saturday', 1, '23', 'injection', '', 4000, 'new', '0', 0, ''),
(7, '2019-09-08', 'Sunday', 1, '23', 'injection', '3', 3000, 'new', '0', 0, ''),
(8, '2019-09-23', 'Monday', 2, '23', 'injection', '', 4000, 'nkj', '0', 0, ''),
(9, '2019-09-10', 'Tuesday', 2, '23', 'injection', '5', 1000, 'mknkj', '0', 0, ''),
(10, '2019-09-25', 'Wesnday', 2, '23', 'injection', '5', 2000, 'ds', '0', 0, ''),
(11, '2019-09-26', 'Thursday', 2, '23', '', '', 1900, 'sdds', '0', 0, ''),
(12, '2019-09-27', 'Friday', 2, '23', 'injection', '2', 400, 'as', '0', 0, ''),
(13, '2019-09-28', 'Saturday', 2, '23', 'injection', '2', 4000, 'cc', '0', 0, ''),
(14, '2019-09-29', 'Sunday', 2, '23', 'injection', '3', 4000, 'fddd', '0', 0, ''),
(15, '2019-10-21', 'Monday', 3, '23', 'injection', '5', 200, 'new', '2', 2019, ''),
(16, '2020-10-14', 'Wesnday', 23, '23', 'injection', '5', 2000, 'testing of next year value', 'October', 2020, ''),
(17, '2019-10-23', 'Wesnday', 5, '23', 'injection', '5', 20000, 'new', 'October', 2019, '1'),
(18, '2019-10-23', 'Wesnday', 66, '23', 'injection', '3', 2000, 'new', 'October', 2019, '4');

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
(1, 20, 2000, 40000, '2019-10-05', 201910233),
(2, 20, 2000, 40000, '2019-10-05', 201910233),
(3, 20, 1000, 20000, '2019-10-25', 201910233),
(4, 20, 1000, 20000, '2019-10-25', 201910233),
(5, 20, 1000, 20000, '2019-10-25', 201910233),
(6, 20, 1000, 20000, '2019-10-25', 201910233),
(7, 1, 1, 1, '2019-10-25', 201910233),
(8, 1, 1, 1, '2019-10-25', 201910233),
(9, 1, 1, 1, '2019-10-25', 201910233),
(10, 1, 1, 1, '2019-10-25', 201910233),
(11, 1, 1, 1, '2019-10-25', 201910233);

-- --------------------------------------------------------

--
-- Table structure for table `reartable`
--

CREATE TABLE `reartable` (
  `id` int(18) NOT NULL,
  `client` varchar(32) NOT NULL,
  `no_fish` int(30) NOT NULL,
  `type_fish` varchar(30) NOT NULL,
  `seller` varchar(40) NOT NULL,
  `cost` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `remark` text NOT NULL,
  `per_fish` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reartable`
--

INSERT INTO `reartable` (`id`, `client`, `no_fish`, `type_fish`, `seller`, `cost`, `date`, `remark`, `per_fish`) VALUES
(0, 'Mr Salako', 1500, 'hybrid', 'a.rahman', '25000', '2019-10-25', 'paid', '22'),
(1, 'Bobby', 3, 'Cat', 'Davaid', '2000', '2019-10-24', 'First work', ''),
(2, 'Stephen', 20, 'cat', 'Davaid', '20000', '2019-10-24', 'New entry', ''),
(3, 'Glory', 3, 'cat', 'Davaid', '3000', '2019-10-24', 'New', '30');

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
(1, 5, 0, 'food', '', 8, 500, 50000, '2019-10-23', 5, 0, 0, 'wale'),
(2, 1, 0, 'feed', '', 12, 4000, 5000000, '2019-10-23', 20, 0, 0, 'lanre'),
(3, 3, 0, 'fish feed', '', 5, 1500, 7500, '2019-03-13', 10, 0, 0, 'shegun'),
(4, 7, 201910231, 'jumbo', '', 32, 3500, 147000, '2006-06-14', 10, 0, 0, 'dare'),
(5, 10, 201910231, 'feed', '', 17, 375687, 985632856, '2014-06-18', 1234, 0, 0, 'wiuthfkiu'),
(6, 2, 201910233, 'copper', '', 16, 3456, 23456, '2019-10-23', 543, 668, 663, 'samad');

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
(1, 5, 1000, 60000, 'wale', 'shegun', 201910233, '0000-00-00', 3456, -2456),
(2, 1, 1, 1, 'monsuru', 'mikel', 201910233, '2019-10-25', 3456, -3455),
(3, 30, 1000, 30000, 'monsuru', 'shegun', 201910233, '2019-10-25', 3456, -2456),
(4, 22, 1000, 22000, 'wale', 'shegun', 201910233, '2019-10-25', 3456, -2456),
(5, 22, 1000, 22000, 'wale', 'shegun', 201910233, '2019-10-25', 3456, -2456),
(6, 22, 1000, 22000, 'wale', 'shegun', 201910233, '2019-10-25', 3456, -2456),
(7, 22, 2000, 20000, 'wale', 'shegun', 201910233, '2019-10-25', 3456, -1456),
(8, 40, 5000, 400000, 'monsuru', 'shegun', 201910233, '2019-10-25', 3456, 1544);

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `farmdata`
--
ALTER TABLE `farmdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `farmrecord`
--
ALTER TABLE `farmrecord`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quantitytbl`
--
ALTER TABLE `quantitytbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `store_profile`
--
ALTER TABLE `store_profile`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
