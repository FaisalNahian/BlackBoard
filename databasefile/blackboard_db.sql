-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 07:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blackboard_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `student_id`, `trn_date`) VALUES
(1, 'siddharth', 'siddharthmogulla@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1114718, '2017-11-22 03:13:48'),
(2, 'sid', 'sid@gmail.com', '25f9e794323b453885f5181f1b624d0b', 111444, '2017-11-22 03:22:43'),
(3, 'a', '2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 111111, '2017-11-22 03:40:42'),
(4, 'a', '2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 111111, '2017-11-22 03:45:58'),
(5, 'siddharth123', 'sid@gmail.org', '9e94b15ed312fa42232fd87a55db0d39', 9999, '2017-11-22 03:51:30'),
(6, 'b', 'b@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 11212, '2017-11-22 03:53:20'),
(7, 'b', 'b@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 11212, '2017-11-22 04:00:40'),
(8, 'q', 'q@gmail.com', '3def184ad8f4755ff269862ea77393dd', 111442, '2017-11-22 04:18:01'),
(9, 'sm', 'si@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 123, '2017-11-28 05:00:57'),
(10, 'asd', 's@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 1471, '2017-11-28 05:18:11'),
(11, 'asd', 's@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 1471, '2017-11-28 05:19:33'),
(12, 'asd', 's@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 1471, '2017-11-28 05:19:49'),
(13, 'asd', 's@gmail.com', 'b4b147bc522828731f1a016bfa72c073', 1471, '2017-11-28 05:21:22'),
(14, 'siddharth', 'si@gmail.com', 'ec8956637a99787bd197eacd77acce5e', 8800, '2017-11-28 06:36:31'),
(15, 'k', 'w@gmail.com', '9bf31c7ff062936a96d3c8bd1f8f2ff3', 27, '2017-11-28 06:53:59'),
(16, 'vb', 'vbk@gmail.com', 'e2c0be24560d78c5e599c2a9c9d0bbd2', 9, '2017-11-28 06:59:54'),
(17, 'arjun', 'a@gmail.com', '44f683a84163b3523afe57c2e008bc8c', 8, '2017-11-28 21:32:25'),
(18, 'arjun', 'a@gmail.com', '44f683a84163b3523afe57c2e008bc8c', 8, '2017-11-28 21:36:10'),
(19, 'arjun', 'a@gmail.com', '98f13708210194c475687be6106a3b84', 8, '2017-11-28 21:36:26'),
(20, 'arjun', 'a@gmail.com', '2a38a4a9316c49e5a833517c45d31070', 8, '2017-11-28 21:38:04'),
(21, 'jac', 'q@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 0, '2017-11-28 21:39:11'),
(22, 'kcr', 'kcr@gmail.com', 'ac627ab1ccbdb62ec96e702f07f6425b', 90, '2017-11-28 21:45:15'),
(23, 'kkr', 's@g.com', '8f03ad02c6cad600d2c00a972a9bcce6', 6, '2017-11-28 21:47:28'),
(24, 'kkr', 'k', '8f03ad02c6cad600d2c00a972a9bcce6', 2, '2017-11-28 22:00:26'),
(25, 'kkr', '20', 'c81e728d9d4c2f636f067f89cc14862c', 2, '2017-11-28 22:01:34'),
(26, 'r', 'r', '4b43b0aee35624cd95b910189b3dc231', 1, '2017-11-28 23:33:48'),
(27, 'aa', 'aa@abc.com', '74b87337454200d4d33f80c4663dc5e5', 100, '2017-11-29 00:16:47'),
(28, 'a', 'a@gmail.com', '93dd4de5cddba2c733c65f233097f05a', 3, '2017-11-29 00:26:59'),
(29, 'abc', 'aa@abc.com', 'e45ee7ce7e88149af8dd32b27f9512ce', 987, '2017-11-29 00:27:54'),
(30, 'aq', 'a', 'e10adc3949ba59abbe56e057f20f883e', 7, '2017-11-29 00:28:42'),
(31, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 1, '2017-11-29 00:52:34'),
(32, '2', '2', 'c81e728d9d4c2f636f067f89cc14862c', 2, '2017-11-29 01:17:33'),
(33, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 1, '2017-11-29 01:28:15'),
(34, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 1, '2017-11-29 01:30:47'),
(35, '9', '9', '45c48cce2e2d7fbdea1afc51c7c6ad26', 999999, '2017-11-29 02:49:00'),
(36, 'ha', 'hi', 'e4da3b7fbbce2345d7772b0674a318d5', 666, '2017-11-29 03:12:56'),
(37, 'mas', 'ak', '19ca14e7ea6328a42e0eb13d585e4c22', 7, '2017-11-29 03:31:26'),
(38, 'jass', 'jas@yahoo.com', '8ae5073f7aa86335bfbb76884fa5ff66', 1144996, '2017-11-29 04:06:08'),
(39, 'jessi', 'j2@k.com', '19d99ecedebfa4eff5dd35b20dabd81d', 998867, '2017-11-29 04:23:53'),
(40, 'nik', 'n@h.com', '77113177b98eaff56855e81a429fc8c7', 8833, '2017-11-29 05:25:40'),
(41, 'user', 'u@gmail.com', '6c8349cc7260ae62e3b1396831a8398f', 555, '2017-11-29 19:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sno` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `stud_id` int(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `regcount` int(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sno`, `fname`, `lname`, `stud_id`, `course`, `semester`, `regcount`, `status`) VALUES
(1, 'Willow', 'Nik', 70116, 'CS', 'Final ', 4, 'Active'),
(2, 'James', 'Butt', 48116, 'CS', 'Graduate', 3, 'Active'),
(3, 'Josephine', 'Darakjy', 8014, 'CS', 'Freashman', 3, 'Active'),
(4, 'Art', 'Venere', 99501, 'CS', 'Freashman', 3, 'Active'),
(5, 'Lenna', 'Paprocki', 45011, 'CS', 'Freashman', 3, 'Active'),
(6, 'Donette', 'Foller', 44805, 'CS', 'Freashman', 3, 'Active'),
(7, 'Simona', 'Morasca', 60632, 'CS', 'Freashman', 3, 'Active'),
(8, 'Mitsue', 'Tollner', 95111, 'CS', 'Freashman', 3, 'Active'),
(9, 'Leota', 'Dilliard', 57105, 'CS', 'Freashman', 3, 'Active'),
(10, 'Sage', 'Wieser', 21224, 'CS', 'Freashman', 4, 'Active'),
(11, 'Kris', 'Marrier', 19443, 'CS', 'Freashman', 4, 'Active'),
(12, 'Minna', 'Amigon', 11953, 'CS', 'Freashman', 4, 'Active'),
(13, 'Abel', 'Maclead', 90034, 'CS', 'Freashman', 4, 'Active'),
(14, 'Kiley', 'Caldarera', 44023, 'CS', 'Freashman', 4, 'Active'),
(15, 'Graciela', 'Ruta', 78045, 'CS', 'Freashman', 4, 'Active'),
(16, 'Cammy', 'Albares', 85013, 'CS', 'Freashman', 4, 'Active'),
(17, 'Mattie', 'Poquette', 37110, 'CS', 'Freashman', 4, 'Active'),
(18, 'Meaghan', 'Garufi', 53207, 'CS', 'Freashman', 3, 'Active'),
(19, 'Gladys', 'Rim', 48180, 'CS', 'Freashman', 4, 'Active'),
(20, 'Yuki', 'Whobrey', 61109, 'CS', 'Freashman', 3, 'Active'),
(21, 'Fletcher', 'Flosi', 19014, 'CS', 'Freashman', 2, 'Active'),
(22, 'Bette', 'Nicka', 87900, 'CS', 'Second', 3, 'Active'),
(23, 'Veronika', 'Inouye', 75062, 'CS', 'Second', 0, 'Active'),
(24, 'Willard', 'Kolmetz', 12204, 'CS', 'Second', 3, 'Active'),
(25, 'Maryann', 'Royster', 8846, 'CS', 'Third', 0, 'Active'),
(26, 'Alisha', 'Slusarski', 54481, 'CS', 'Second', 0, 'Active'),
(27, 'Allene', 'Iturbide', 66218, 'CS', 'Third', 3, 'Active'),
(28, 'Chanel', 'Caudy', 21601, 'CS', 'Third', 3, 'Active'),
(29, 'Ezekiel', 'Chui', 10011, 'Mech', 'Third', 3, 'Active'),
(30, 'Willow', 'Kusko', 77301, 'Mech', 'Third', 3, 'Active'),
(31, 'Bernardo', 'Figeroa', 43215, 'Mech', 'Third', 3, 'Active'),
(32, 'Ammie', 'Corrio', 88011, 'Mech', 'Third', 3, 'Active'),
(33, 'Francine', 'Vocelka', 7660, 'Mech', 'Third', 3, 'Active'),
(34, 'Ernie', 'Stenseth', 8812, 'Mech', 'Third', 3, 'Active'),
(35, 'Albina', 'Glick', 10025, 'Mech', 'Freashman', 3, 'Active'),
(36, 'Alishia', 'Sergi', 70002, 'Mech', 'Undergrad', 3, 'Active'),
(38, 'Jose', 'Stockham', 93012, 'Aero', 'Undergrad', 3, 'Active'),
(39, 'Rozella', 'Ostrosky', 78204, 'Aero', 'Undergrad', 3, 'Active'),
(40, 'Valentine', 'Gillian', 67410, 'Aero', 'Freashman', 3, 'Active'),
(41, 'Kati', 'Rulapaugh', 97754, 'Aero', 'Freashman', 3, 'Active'),
(42, 'Youlanda', 'Schemmer', 66204, 'Aero', 'Freashman', 3, 'Active'),
(43, 'Dyan', 'Oldroyd', 99708, 'Aero', 'Freashman', 3, 'Active'),
(44, 'Roxane', 'Campain', 33196, 'Aero', 'Freashman', 3, 'Active'),
(45, 'Lavera', 'Perin', 99712, 'Aero', 'Freashman', 3, 'Active'),
(46, 'Erick', 'Ferencz', 55343, 'CS', 'Freashman', 3, 'Active'),
(47, 'Fatima', 'Saylors', 2128, 'CS', 'Freashman', 3, 'Active'),
(48, 'Jina', 'Briddick', 90006, 'CS', 'Second', 3, 'Active'),
(49, 'Kanisha', 'Waycott', 53711, 'CS', 'Second', 3, 'Active'),
(50, 'Emerson', 'Bowley', 19132, 'CS', 'Second', 3, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `stud_id` (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
