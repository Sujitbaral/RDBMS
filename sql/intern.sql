-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 09:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `id` int(6) UNSIGNED NOT NULL,
  `intern_name` varchar(50) NOT NULL,
  `Age` int(2) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Designation` varchar(30) DEFAULT NULL,
  `Hobby` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`id`, `intern_name`, `Age`, `Gender`, `Designation`, `Hobby`) VALUES
(1, 'Sujit kumar Baral', 22, 'Male', 'Wordpress Developer', 'Animation'),
(2, 'Suresh', 22, 'Male', 'Wordpress', 'Animation'),
(3, 'Preeti khatri', 22, 'Female', 'Wordpress Developer', 'Animation'),
(4, 'Poonam bhat', 22, 'Female', 'Wordpress Developer', 'Animation'),
(5, 'Kusal Piya', 22, 'Male', 'Wordpress Developer', 'Animation'),
(6, 'Swejal Shrestha', 22, 'Male', 'Js Developer', 'Animation'),
(7, 'Shishir Neupane', 22, 'Male', 'Js Developer', 'Animation'),
(8, 'Merina', 22, 'Female', 'js', 'Animation'),
(11, 'Aayush Shrestha', 22, 'male', 'js Developer', 'animation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intern`
--
ALTER TABLE `intern`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
