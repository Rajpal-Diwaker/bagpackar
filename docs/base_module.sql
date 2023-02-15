-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2019 at 03:23 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_module`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL COMMENT 'User unique identifier',
  `name` varchar(50) NOT NULL COMMENT 'Contact Person',
  `profile_picture` varchar(255) NOT NULL COMMENT 'profile picture of user',
  `address` varchar(255) NOT NULL COMMENT 'Supplier physical address',
  `city` varchar(20) NOT NULL COMMENT 'City where business is located',
  `email` varchar(100) NOT NULL COMMENT 'Contact Email Address',
  `country_code` varchar(5) NOT NULL COMMENT 'country code',
  `mobile_number` varchar(20) NOT NULL COMMENT 'Contact phone number',
  `password` varchar(32) NOT NULL COMMENT 'password',
  `otp` int(10) UNSIGNED NOT NULL COMMENT 'otp',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active' COMMENT 'status of user',
  `addded_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'User Added date '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `profile_picture`, `address`, `city`, `email`, `country_code`, `mobile_number`, `password`, `otp`, `status`, `addded_on`) VALUES
(1, 'tripti', '635188-61YJaB8vaTL._SL1200_.jpg', 'techugo pvt ltd', 'noida', 'trip1ti@techugo.com', '+91', '9876543213', '827ccb0eea8a706c4c34a16891f84e7b', 1234, 'active', '2019-02-18 09:18:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'User unique identifier', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
