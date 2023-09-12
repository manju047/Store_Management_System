-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 12:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `stk_entry`
--

CREATE TABLE `stk_entry` (
  `stkid` int(4) NOT NULL,
  `stkname` varchar(50) NOT NULL,
  `stkquantity` varchar(10) NOT NULL,
  `stkvendor` varchar(50) NOT NULL,
  `stkprice` float NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stk_entry`
--

INSERT INTO `stk_entry` (`stkid`, `stkname`, `stkquantity`, `stkvendor`, `stkprice`, `sample`) VALUES
(1001, 'answersheets', '40', 'akhil book store', 250, NULL),
(1010, 'Markers', '25', 'krishna books shop', 250, NULL),
(1012, 'answersheets', '25', 'akhil book store', 420, NULL),
(1019, 'Packing Threads', '20', 'akhil book store', 420, NULL),
(1020, 'files', '25', 'krishna books shop', 250, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stocktable`
--

CREATE TABLE `stocktable` (
  `stkid` int(4) NOT NULL,
  `stkname` varchar(50) NOT NULL,
  `stkquantity` int(100) DEFAULT NULL,
  `stkprice` int(50) DEFAULT NULL,
  `stkvendor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocktable`
--

INSERT INTO `stocktable` (`stkid`, `stkname`, `stkquantity`, `stkprice`, `stkvendor`) VALUES
(1001, 'Main Answer sheets', 400, 250, 'Bhagavan book Store'),
(1002, 'Additional Papers', 500, 200, 'Universal Book Store'),
(1003, 'Packing Covers', 50, 200, 'Bhagavan book Store'),
(1004, 'Cloth Covers For Packing Purpose', 25, 200, 'Universal Book Store'),
(1005, 'Thread Bundles', 30, NULL, ''),
(1006, 'White Papers', 20, NULL, ''),
(1007, 'Color papers', 10, NULL, ''),
(1008, 'A4-Sheet Bundles', 20, NULL, ''),
(1009, 'Graph Sheets', 20, NULL, ''),
(1010, 'Markers', 20, NULL, ''),
(1011, 'Packing Threads', 25, 250, 'Universal Book Store'),
(1012, 'Tapes-White&Brown', 20, NULL, ''),
(1013, 'Chalk-Piece', 40, NULL, ''),
(1014, 'Files', 25, NULL, ''),
(1015, 'Pens', 20, NULL, ''),
(1016, 'Rubbers', 40, NULL, ''),
(1017, 'Scales', 20, NULL, ''),
(1018, 'Stamp Pads', 40, NULL, ''),
(1019, 'Sealing Wax', 20, NULL, ''),
(1020, 'Binder Clips', 20, NULL, ''),
(1021, 'Calculator', 10, 1000, 'Universal Book Store'),
(1022, 'Gum Bottle', 25, 250, 'Bhagavan book Store');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'ninza', 'admin', 'admin@gmail.com', '123'),
(2, 'manju', '47', 'manju@gmail.com', '4700');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stk_entry`
--
ALTER TABLE `stk_entry`
  ADD PRIMARY KEY (`stkid`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
