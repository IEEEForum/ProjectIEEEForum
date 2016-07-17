-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2016 at 11:04 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ieee`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `full_name` varchar(20) NOT NULL,
  `enroll_no` int(10) NOT NULL,
  `Batch` varchar(5) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `webkiosk_password` varchar(20) NOT NULL,
  `contact` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`full_name`, `enroll_no`, `Batch`, `branch`, `email`, `webkiosk_password`, `contact`) VALUES
('skbkajbd', 122132, 'b1', 'qwjb', 'vsa@gmai.xom', 'weqew', '4242'),
('vaibhav Bansal', 13103426, 'B1', 'CSE', 'vaibhavbansal23@gmai', 'abcdef', '8766545'),
('shivam arora', 14102020, 'a1', 'ece', 'shivamrr9@gmail.com', '1111111111', '2222222222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`enroll_no`), ADD UNIQUE KEY `enroll_no` (`enroll_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
