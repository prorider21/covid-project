-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 04:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `cdata`
--

CREATE TABLE `cdata` (
  `full_name` varchar(50) NOT NULL,
  `ref_id` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `a_ward` varchar(50) NOT NULL,
  `a_vill` varchar(50) NOT NULL,
  `a_dist` varchar(50) NOT NULL,
  `a_state` varchar(50) NOT NULL,
  `a_pin` int(11) NOT NULL,
  `id_no` varchar(50) NOT NULL,
  `h_issue` varchar(1) NOT NULL,
  `f_worker` varchar(1) NOT NULL,
  `dt_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
