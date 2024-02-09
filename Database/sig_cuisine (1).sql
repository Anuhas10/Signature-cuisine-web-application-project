-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 25, 2023 at 08:05 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_cuisine`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `food_name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`food_name`, `date`, `time`, `branch`, `customer_name`, `email`) VALUES
('biriyani', '', '', 'colombo-05', '', ''),
('cheesemasalakottu', '2023-07-24', '20:58', 'onegalleface', 'Anuhass', 'anuhass2017@gmail.co'),
('biriyani', '2023-07-25', '22:43', 'kandy', 'Onarli', 'onaa12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
CREATE TABLE IF NOT EXISTS `query` (
  `customer_name` varchar(20) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_contact` int NOT NULL,
  `customer_branch` varchar(20) NOT NULL,
  `customer_message` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`customer_name`, `customer_email`, `customer_contact`, `customer_branch`, `customer_message`) VALUES
('Arjuna Anuhass', 'anuhass2017@gmail.co', 767317368, 'Colombo 05', 'very tasty foods...'),
('Arjuna Anuhass', 'anuhass2017@gmail.co', 767317368, 'Colombo 05', 'very tasty foods...'),
('onarli de silva', 'onarlielizabeth26@gm', 76051370, 'wattala ', 'i loveeeee you mage '),
('onarli de silva', 'onarlielizabeth26@gm', 767051370, 'wattala ', 'i loveeeee you mage '),
('anuhass', 'anuhass2017@gmail.co', 112512564, 'Colombo 05', 'hey awesome'),
('anuhass', 'anuhass2017@gmail.co', 112512564, 'piliyandala', 'this food is wow');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `customer_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int NOT NULL,
  `address` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`customer_name`, `email`, `contact`, `address`, `username`, `password`) VALUES
('Arjuna Anuhass', 'anuhass2017@gmail.co', 767317368, '18, Mahawela place, ', 'user1', '81dc9bdb52d04dc20036'),
('onarli de silva', 'onaa123@gmail.com', 767051370, '18, palm groove, kad', 'onaa', '3ebd728de6fa78aa8bc9'),
('', '', 0, '', '', 'd41d8cd98f00b204e980'),
('', '', 0, '', '', 'd41d8cd98f00b204e980'),
('Lokitha', 'lokii@hmail.com', 779734004, 'nugegoda', 'lokii', 'a01610228fe998f515a7'),
('Lushantha De Silva', 'lush@gmail.com', 787878781, 'pamankada', 'lush', 'b59c67bf196a4758191e'),
('Arjuna Anuhass', 'anuhass2017@gmail.co', 767317368, '18, Mahawela place, ', 'junaya', '202cb962ac59075b964b'),
('Arjuna Anuhass', 'anuhass2017@gmail.co', 787878781, '18, Mahawela place, ', 'user2', 'a01610228fe998f515a7'),
('Arjuna Anuhass', 'anuhass2017@gmail.co', 767317368, '18, Mahawela place, ', 'june', '21c3134ee5edcb618c4f');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_member_name` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `age` int NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` int NOT NULL,
  `email` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `salary` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_member_name`, `section`, `age`, `address`, `contact`, `email`, `branch`, `salary`, `username`, `password`) VALUES
('Lokitha', 'cuisine section', 19, 'Kirulapone', 777348187, 'lokii12@gmail.com', 'onegalleface', 20000, 'loki', '2004'),
('Smith', 'cuisine section', 23, 'kelaniya', 781234567, 'smith32@gmail.com', 'onegalleface', 75000, 'smith', '4545'),
('aadesh', 'bakery', 22, 'kadawatha', 787878787, 'aadesh12@gmail.com', 'colombo-05', 55000, 'adesh', '1212'),
('priyantha', 'cuisine section', 55, 'Werahara', 11, 'priya23@gmail.com', 'piliyandala', 55000, 'priya', '4444');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
