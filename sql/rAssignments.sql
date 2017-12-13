-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2017 at 04:58 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blackboard_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assign_id` int(8) NOT NULL,
  `assign_title` text NOT NULL,
  `assign_desc` text NOT NULL,
  `grade` varchar(2) NOT NULL,
  `class_id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assign_id`, `assign_title`, `assign_desc`, `grade`, `class_id`, `file`, `type`, `size`) VALUES
(1, '', '', '', 0, '18588-rTest.txt', 'text/plain', 4),
(2, '', '', '', 0, '54924-rTest.txt', 'text/plain', 4),
(3, '', '', '', 0, '72355-rTest.txt', 'text/plain', 4),
(4, '', '', '', 0, '88840-rTest.txt', 'text/plain', 4),
(5, '', '', '', 0, '91882-rTest.txt', 'text/plain', 4),
(6, '', '', '', 0, '63320-rTest.txt', 'text/plain', 4),
(7, '', '', '', 0, '57830-rTest.txt', 'text/plain', 4),
(8, '', '', '', 0, '89093-rTest.txt', 'text/plain', 4),
(9, '', '', '', 0, '73658-rTest.txt', 'text/plain', 4),
(10, '', '', '', 0, '2614-rTest.txt', 'text/plain', 4),
(11, '', '', '', 0, '44562-rTest.txt', 'text/plain', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assign_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assign_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;