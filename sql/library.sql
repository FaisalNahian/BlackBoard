-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 07:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE `a` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adam`
--

CREATE TABLE `adam` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ash`
--

CREATE TABLE `ash` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ashwin`
--

CREATE TABLE `ashwin` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authid` int(5) NOT NULL,
  `authname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authid`, `authname`) VALUES
(1, 'michiel smid'),
(2, 'browne'),
(3, 'kent beck'),
(4, 'john bentley'),
(5, 'grady booch'),
(6, 'ivar jacobson'),
(7, 'jim rumbaugh'),
(8, 'fredericks p brooks'),
(9, 'timothy lister'),
(10, 'edsgar w dijkstra'),
(11, 'martin flower'),
(12, 'watts s humphrey'),
(13, 'donald e knuth'),
(14, 'bjarne stroustrup'),
(15, 'peter coad'),
(16, 'ed yourdon'),
(17, 'gerald weinberg'),
(18, 'alfred aho'),
(19, 'steven levy'),
(20, 'jeffrey ullman'),
(21, 'bruce streling'),
(22, 'eric gamma'),
(23, 'balaguruswamy'),
(24, 'bruce eckel'),
(25, 'peter norwig'),
(26, 'peter norton'),
(27, 'david patterson'),
(28, 'tonya engst'),
(29, 'david flanagan'),
(30, 'roger penrose');

-- --------------------------------------------------------

--
-- Table structure for table `b`
--

CREATE TABLE `b` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bd`
--

CREATE TABLE `bd` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bda`
--

CREATE TABLE `bda` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bharath`
--

CREATE TABLE `bharath` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `authid` int(5) NOT NULL,
  `libid` int(5) NOT NULL,
  `isbn` int(20) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `pubdate` date NOT NULL,
  `borrowcount` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `title`, `authid`, `libid`, `isbn`, `publisher`, `pubdate`, `borrowcount`, `status`) VALUES
(1, 'Computer Architecture', 9, 1, 784511, 'creative publisher', '2017-03-01', 2, 'available'),
(2, 'Computer Architecture', 9, 20, 784511, 'creative publisher', '2017-03-01', 0, 'available'),
(3, 'Introduction to Artificial Intelligence', 8, 1, 986522, 'MIT press books', '2011-04-11', 1, 'available'),
(4, 'Introduction to Artificial Intelligence', 8, 8, 986522, 'MIT press books', '2017-05-01', 1, 'available'),
(5, 'applied combinatorics', 1, 1, 56891502, 'creative publisher', '2017-05-06', 15, 'available'),
(6, 'algorithms', 2, 8, 8930125, 'pragmatic publisher', '2017-04-19', 19, 'available'),
(7, 'A Beginners C++', 2, 1, 2478596, 'MIT press books', '2017-03-20', 12, 'available'),
(8, 'An Introduction to GCC', 2, 8, 72145369, 'O Reilly Media', '2016-08-08', 10, 'NA'),
(9, 'Build Your Own LISP', 2, 1, 253014789, 'John Wiley and Sons', '2014-08-19', 14, 'available'),
(10, 'C++ GUI Programming', 1, 5, 23874152, 'Manning Publications', '2009-05-16', 14, 'available'),
(11, 'algorithms', 2, 6, 8930125, 'pragmatic publisher', '2017-04-19', 7, 'available'),
(12, 'Foundations of Database', 1, 5, 3671452, 'wrox press', '2015-11-26', 8, 'NA'),
(13, 'algorithms', 2, 1, 8930125, 'pragmatic publisher', '2013-11-17', 0, 'available'),
(14, 'algorithms', 2, 5, 8930125, 'pragmatic publisher', '2014-03-30', 0, 'available'),
(15, 'algorithms', 2, 14, 8930125, 'pragmatic publisher', '2017-05-05', 1, 'available'),
(16, 'applied combinatorics', 1, 10, 56891502, 'creative publisher', '2015-08-25', 0, 'available'),
(17, 'applied combinatorics', 1, 13, 56891502, 'creative publisher', '2011-05-24', 0, 'available'),
(18, 'applied combinatorics', 1, 12, 56891502, 'creative publishers', '2009-05-16', 0, 'available'),
(19, 'applied combinatorics', 1, 15, 56891502, 'creative publisher', '2008-05-23', 0, 'available'),
(20, 'A Beginners C++', 2, 8, 2478596, 'MIT press books', '2003-06-10', 0, 'available'),
(21, 'A Beginners C++', 2, 16, 2478596, 'MIT press books', '2000-05-26', 0, 'available'),
(22, 'A Beginners C++', 2, 21, 2478596, 'MIT press books', '2001-12-01', 0, 'available'),
(23, 'An Introduction to GCC', 11, 14, 72145369, 'O Reilly Media', '2005-05-02', 0, 'available'),
(24, 'An Introduction to GCC', 2, 6, 72145369, 'O Reilly Media', '2008-06-23', 0, 'available'),
(25, 'Build Your Own LISP', 2, 10, 253014789, 'John Wiley and Sons', '2013-02-16', 0, 'available'),
(26, 'Build Your Own LISP', 4, 17, 253014789, 'John Wiley and Sons', '2009-08-02', 0, 'available'),
(27, 'C++ GUI Programming', 13, 18, 23874152, 'Manning Publications', '2011-03-01', 0, 'available'),
(28, 'C++ GUI Programming', 10, 20, 23874152, 'Manning Publications', '1998-01-03', 1, 'available'),
(29, 'Foundations of Database', 7, 14, 3671452, 'wrox press', '2001-05-12', 0, 'available'),
(30, 'Foundations of Database', 8, 22, 3671452, 'wrox pres', '2013-09-20', 0, 'available'),
(31, 'Foundations of Database', 16, 19, 3671452, 'wrox press', '2011-05-18', 0, 'available'),
(32, 'Agile Android Software Development', 11, 13, 7214960, 'creative publisher', '2010-05-15', 0, 'available'),
(33, 'Agile Android Software Development', 18, 23, 7214960, 'creative publisher', '2000-05-03', 0, 'available'),
(34, 'Bringing Design to Software', 8, 13, 3671225, 'MIT press books', '2012-07-02', 0, 'available'),
(35, 'Bringing Design to Software', 10, 16, 3671225, 'MIT press books', '2007-05-02', 0, 'available'),
(36, 'Bringing Design to Software', 6, 14, 3671225, 'MIT press books', '2006-06-23', 0, 'available'),
(37, 'Client vs. Developer Wars', 9, 16, 1470025, 'Newfangled Web Factory ', '2001-05-15', 0, 'available'),
(38, 'Client vs. Developer Wars', 19, 17, 1470025, 'Newfangled Web Factory ', '2012-09-23', 0, 'available'),
(39, 'Client vs. Developer Wars', 15, 12, 1470025, 'Newfangled Web Factory ', '2016-03-22', 1, 'NA'),
(40, 'Computer, Graphics and Learning', 6, 8, 5670225, 'Lloyd P. Rieber ', '2010-08-16', 2, 'available'),
(41, 'Computer, Graphics and Learning', 18, 22, 5670225, 'Lloyd P. Rieber ', '2013-01-28', 0, 'available'),
(42, 'Computer, Graphics and Learning', 13, 5, 5670225, 'Lloyd P. Rieber ', '2004-07-29', 0, 'available'),
(43, 'Foundations of Database', 15, 17, 3671452, 'wrox press', '2006-05-12', 1, 'available'),
(44, 'Distributed Systems', 10, 10, 78911, 'John Wiley and Sons', '2017-05-14', 0, 'NA'),
(45, 'Distributed Systems', 10, 11, 78911, 'John Wiley and Sons', '2016-05-14', 0, 'Available'),
(46, 'Operating System Security', 13, 19, 1221, 'Pearson', '2011-11-03', 3, 'available'),
(47, 'Operating System Security', 19, 16, 1221, 'Pearson', '2011-04-08', 1, 'available'),
(48, 'Programming lang for dummies', 11, 5, 14711, 'Pearson', '2011-08-07', 1, 'available'),
(49, 'Programming lang for dummies', 10, 11, 124500, 'Pearson', '2011-02-07', 1, 'NA'),
(50, 'Android Programming ', 26, 23, 14711, 'Random House', '2007-02-07', 1, 'available'),
(51, 'Android Programming', 26, 24, 14711, 'Random House', '2013-09-07', 0, 'Available'),
(52, 'Advance Graph theory', 17, 16, 12355, 'McGraw-Hill Education', '2012-02-21', 1, 'NA'),
(53, 'Advance Graph Theory', 17, 13, 12300, 'McGraw-Hill Education', '2011-09-12', 1, 'available'),
(54, 'How I Met your Mother', 30, 5, 121212, 'Readers Digest', '2011-12-30', 1, 'NA'),
(55, 'How I met your Mother', 30, 16, 125411, 'Readers Digest', '2011-07-21', 1, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrowid` int(5) NOT NULL,
  `bookid` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `libid` int(5) NOT NULL,
  `borrowdate` date NOT NULL,
  `retdate` date NOT NULL,
  `fine` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrowid`, `bookid`, `id`, `libid`, `borrowdate`, `retdate`, `fine`) VALUES
(146, 52, 81, 1, '2017-05-11', '2017-05-31', '0'),
(147, 39, 83, 1, '2017-05-11', '2017-05-31', '0'),
(149, 8, 84, 1, '2017-05-11', '2017-05-31', '0'),
(150, 12, 84, 1, '2017-05-11', '2017-05-31', '0'),
(151, 49, 84, 1, '2017-05-11', '2017-05-31', '0'),
(158, 54, 87, 1, '2017-05-11', '2017-05-31', '0'),
(161, 44, 85, 10, '2017-05-11', '2017-05-31', '0');

-- --------------------------------------------------------

--
-- Table structure for table `donald`
--

CREATE TABLE `donald` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `f`
--

CREATE TABLE `f` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fa`
--

CREATE TABLE `fa` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `h`
--

CREATE TABLE `h` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `harish`
--

CREATE TABLE `harish` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `henty`
--

CREATE TABLE `henty` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `i`
--

CREATE TABLE `i` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ia`
--

CREATE TABLE `ia` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `j`
--

CREATE TABLE `j` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ja`
--

CREATE TABLE `ja` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ji`
--

CREATE TABLE `ji` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jit`
--

CREATE TABLE `jit` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `john`
--

CREATE TABLE `john` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kiran`
--

CREATE TABLE `kiran` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kul`
--

CREATE TABLE `kul` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `l`
--

CREATE TABLE `l` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lib`
--

CREATE TABLE `lib` (
  `libid` int(5) NOT NULL,
  `libname` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib`
--

INSERT INTO `lib` (`libid`, `libname`, `location`) VALUES
(1, 'ABS', 'newyork'),
(5, 'ABS', 'newjersey'),
(6, 'ABS', 'brooklyn'),
(8, 'ABS', 'harrison'),
(9, 'ABS', 'newark'),
(10, 'ABS', 'jersey city'),
(11, 'ABS', 'trenton'),
(12, 'ABS', 'atlantic city'),
(13, 'ABS', 'hoboken'),
(14, 'ABS', 'paterson'),
(15, 'ABS', 'morristown'),
(16, 'ABS', 'clifton'),
(17, 'ABS', 'buffalo'),
(18, 'ABS', 'albany'),
(19, 'ABS', 'rochester'),
(20, 'ABS', 'yonkers'),
(21, 'ABS', 'newburgh'),
(22, 'ABS', 'elmira'),
(23, 'ABS', 'bronx'),
(24, 'ABS', 'queens');

-- --------------------------------------------------------

--
-- Table structure for table `lo`
--

CREATE TABLE `lo` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lok`
--

CREATE TABLE `lok` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ma`
--

CREATE TABLE `ma` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manav`
--

CREATE TABLE `manav` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mathew`
--

CREATE TABLE `mathew` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pradeep`
--

CREATE TABLE `pradeep` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prashanth`
--

CREATE TABLE `prashanth` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `praveen`
--

CREATE TABLE `praveen` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `preetham`
--

CREATE TABLE `preetham` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `r`
--

CREATE TABLE `r` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rahul`
--

CREATE TABLE `rahul` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `reserveid` int(5) NOT NULL,
  `bookid` int(5) NOT NULL,
  `libid` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `resdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s@gmail.com`
--

CREATE TABLE `s@gmail.com` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sa`
--

CREATE TABLE `sa` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `san`
--

CREATE TABLE `san` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `santosh`
--

CREATE TABLE `santosh` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `libid` int(5) NOT NULL,
  `borrowcount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `phone`, `password`, `libid`, `borrowcount`) VALUES
(77, 'santosh', 'harrison', 8624523463, '587c57365b54e8283fd6b1ac24acf29d', 5, 75),
(78, 'ashwin', 'Journal square', 9084258814, '7cb6fa91c124913f7a75e3153339234f', 16, 2),
(79, 'bharath', 'harrison', 8622949528, '7616b81196ee6fe328497da3f1d9912d', 12, 0),
(80, 'bharath124', 'new jersey', 8974561252, '162a92b18b36d08de78a8068f9fe23d2', 6, 5),
(81, 'bknl789', 'Bangalore, India', 8867759128, 'ec672c20c650e078518522fc24ab6ac7', 19, 3),
(82, 'ash1991', 'Clifton', 8867759124, 'c18e2c717797a887ef7c1c1a2acd7d67', 14, 3),
(83, 'Santu2017', 'Harrison', 8622949588, '4642a5aa00113621a3e54035a03138f3', 17, 3),
(84, 'Lucy', 'West 3rd Street', 8622949578, '80eb0e612760f756547b660c4c71ba7d', 19, 3),
(85, 'Nancy', 'Lyndrusth', 8622949522, 'a33b73f30cde1640b9ac3ec98c7c2831', 15, 3),
(86, 'Christine', 'Long Island', 9733949528, 'b23d4c8084990d65b1904efa034881d3', 5, 9),
(87, 'Johnson', 'Texas', 7822145214, '3228635b89112e2c641f5e5cc44e19fe', 14, 3),
(88, 'Virat Kohli', 'Delhi', 9448520247, 'fd1290770667b42ebed60fd53a5b19f6', 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`name`) VALUES
('santosh'),
('santosh'),
('kiran'),
('s@gmail.com'),
('bharath'),
('ashwin'),
('harish'),
('ash'),
('henty'),
('praveen'),
('vikas'),
('varun'),
('vikky'),
('vi'),
('prashanth'),
('prashanth'),
('pradeep'),
('preetham'),
('john'),
('mark'),
('mathew'),
('donald'),
('a'),
('b'),
('adam'),
('i'),
('r'),
('l'),
('z'),
('b'),
('b'),
('b'),
('b'),
('bd'),
('bda'),
('j'),
('ja'),
('ja'),
('jam'),
('zap'),
('manav'),
('h'),
('f'),
('fa'),
('ma'),
('i'),
('i'),
('ia'),
('ji'),
('jit'),
('kul'),
('rahul'),
('lo'),
('lok'),
('po'),
('santosh'),
('sa'),
('san'),
('santosh'),
('sa'),
('sa'),
('s'),
('h'),
('i'),
('k'),
('p'),
('u'),
('bharath'),
('ashwin'),
('kiran'),
('nutan'),
('pj'),
('pja'),
('karthik'),
('karthika'),
('karthikap'),
('krishna'),
('j'),
('santosh');

-- --------------------------------------------------------

--
-- Table structure for table `varun`
--

CREATE TABLE `varun` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vi`
--

CREATE TABLE `vi` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vikas`
--

CREATE TABLE `vikas` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vikky`
--

CREATE TABLE `vikky` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `z`
--

CREATE TABLE `z` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zap`
--

CREATE TABLE `zap` (
  `name` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `landline` bigint(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `public` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `adam`
--
ALTER TABLE `adam`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `ash`
--
ALTER TABLE `ash`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `ashwin`
--
ALTER TABLE `ashwin`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authid`);

--
-- Indexes for table `b`
--
ALTER TABLE `b`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `bd`
--
ALTER TABLE `bd`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `bda`
--
ALTER TABLE `bda`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `bharath`
--
ALTER TABLE `bharath`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `authid` (`authid`),
  ADD KEY `libid` (`libid`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrowid`),
  ADD KEY `bookid` (`bookid`),
  ADD KEY `id` (`id`),
  ADD KEY `libid` (`libid`);

--
-- Indexes for table `donald`
--
ALTER TABLE `donald`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `f`
--
ALTER TABLE `f`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `fa`
--
ALTER TABLE `fa`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `h`
--
ALTER TABLE `h`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `harish`
--
ALTER TABLE `harish`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `henty`
--
ALTER TABLE `henty`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `i`
--
ALTER TABLE `i`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `ia`
--
ALTER TABLE `ia`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `j`
--
ALTER TABLE `j`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `ja`
--
ALTER TABLE `ja`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `ji`
--
ALTER TABLE `ji`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `jit`
--
ALTER TABLE `jit`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `john`
--
ALTER TABLE `john`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `kiran`
--
ALTER TABLE `kiran`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `kul`
--
ALTER TABLE `kul`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `l`
--
ALTER TABLE `l`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `lib`
--
ALTER TABLE `lib`
  ADD PRIMARY KEY (`libid`);

--
-- Indexes for table `lo`
--
ALTER TABLE `lo`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `lok`
--
ALTER TABLE `lok`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `ma`
--
ALTER TABLE `ma`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `manav`
--
ALTER TABLE `manav`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `mathew`
--
ALTER TABLE `mathew`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `pradeep`
--
ALTER TABLE `pradeep`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `prashanth`
--
ALTER TABLE `prashanth`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `praveen`
--
ALTER TABLE `praveen`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `preetham`
--
ALTER TABLE `preetham`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `r`
--
ALTER TABLE `r`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `rahul`
--
ALTER TABLE `rahul`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`reserveid`),
  ADD KEY `bookid` (`bookid`),
  ADD KEY `libid` (`libid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `s@gmail.com`
--
ALTER TABLE `s@gmail.com`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `sa`
--
ALTER TABLE `sa`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `san`
--
ALTER TABLE `san`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `santosh`
--
ALTER TABLE `santosh`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libid` (`libid`);

--
-- Indexes for table `varun`
--
ALTER TABLE `varun`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `vi`
--
ALTER TABLE `vi`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `vikas`
--
ALTER TABLE `vikas`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `vikky`
--
ALTER TABLE `vikky`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `z`
--
ALTER TABLE `z`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `zap`
--
ALTER TABLE `zap`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `authid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrowid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
--
-- AUTO_INCREMENT for table `lib`
--
ALTER TABLE `lib`
  MODIFY `libid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `reserveid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`authid`) REFERENCES `author` (`authid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`libid`) REFERENCES `lib` (`libid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `book` (`bookid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrow_ibfk_3` FOREIGN KEY (`libid`) REFERENCES `lib` (`libid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `reserve_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `book` (`bookid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserve_ibfk_2` FOREIGN KEY (`libid`) REFERENCES `lib` (`libid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserve_ibfk_3` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`libid`) REFERENCES `lib` (`libid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
