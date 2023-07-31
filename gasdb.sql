-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 09:45 PM
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
-- Database: `gasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`name`, `phone_number`, `department`, `email`, `subject`, `message`) VALUES
('Ioannis Koronakis', '+306980628094', 'Οικονομικά', 'koronakisy@gmail.com', '123123', '123123'),
('Ioannis Koronakis', '+306980628094', 'Υποστήριξη', 'koronakisy@gmail.com', '123123', 'asdasda'),
('asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf'),
('Ioannis Koronakis', '+306980628094', 'Οικονομικά', 'koronakisy@gmail.com', '3123', '123123'),
('Ioannis Koronakis', '+306980628094', 'Υποστήριξη', 'koronakisy@gmail.com', '1234123412341', '12341234123412341234123412341234123412341234123412341234'),
('qwerqw', 'qwerqwer', 'Πωλήσεις', 'qq@gmail.com', 'eee', 'qweqweqwe'),
('qwerqw', 'qwerqwer', 'Πωλήσεις', 'qq@gmail.com', 'eee', 'qweqweqwe'),
('Ioannis Koronakis', '+306980628094', 'Οικονομικά', 'koronakisy@gmail.com', '123123', '12341234');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`username`, `name`, `email`) VALUES
('yiannis123', 'yiannis', 'koronakisy@gmail.com'),
('kostas123', 'kostas', 'kostas@gmail.com'),
('nikos123', 'nikos', 'nikos@gmail.com'),
('babis123', 'babis', 'babis@gmail.com'),
('yiannisko', 'nikos', 'koronakisy@gmail.com'),
('yiannisko', 'babis', 'koronakisy@gmail.com'),
('yianniskoronakis', 'qq', 'koronakisy@gmail.com'),
('porf', 'porfyrios', 'porfyrios@gmail.com'),
('koronakisy@gmail.com', 'Γιάννης ', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'qq', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'qq', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'qq', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'qq', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'qq', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'qq', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'qq', 'koronakisy@gmail.com'),
('1234', '1234', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'porfyrios', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'porfyrios', 'koronakisy@gmail.com'),
('qwerqwer', 'qwerwqer', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'qq', 'koronakisy@gmail.com'),
('koronakisy@gmail.com', 'qq', 'koronakisy@gmail.com'),
('panos', 'panos', 'koronakisy@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
