-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 06:22 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `researchdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `databasetable`
--

CREATE TABLE `databasetable` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic` text NOT NULL,
  `proponent1` text NOT NULL,
  `rteach1` varchar(60) NOT NULL,
  `radviser` text NOT NULL,
  `yearAccomp` int(11) NOT NULL,
  `competition` text,
  `abstract` text NOT NULL,
  `id_submit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databasetable`
--

INSERT INTO `databasetable` (`id`, `topic`, `proponent1`, `rteach1`, `radviser`, `yearAccomp`, `competition`, `abstract`, `id_submit`) VALUES
(1, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(2, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(3, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(4, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(5, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(6, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(7, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(8, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(9, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(10, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(11, 'something', 'a', 'a', 'a', 1, '1', 'a', 0),
(12, 'H', 'H', 'H', 'H', 1, '1', 'H', 0),
(13, 'H', 'H', 'H', 'H', 1, '1', 'H', 0),
(14, 'Lorem', 'Lorem Ipsum', 'Someone', 'Someone', 2016, '0', 'Lorem ipsum dolor sit amet', 2),
(15, 'Title', 'Prop', 'Teach', 'Adviser 1 Adviser 2', 2014, 'Alchemes', 'Lorem Ipsum Dolor Sit Amet', 2);

-- --------------------------------------------------------

--
-- Table structure for table `databasetable_restart`
--

CREATE TABLE `databasetable_restart` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic` text NOT NULL,
  `proponent1` text NOT NULL,
  `rteach1` text NOT NULL,
  `radviser` text NOT NULL,
  `yearLevel` varchar(60) NOT NULL,
  `fundReq` int(11) DEFAULT NULL,
  `fundObt` int(11) DEFAULT NULL,
  `competition` text,
  `abstract` text NOT NULL,
  `id_submit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databasetable_restart`
--

INSERT INTO `databasetable_restart` (`id`, `topic`, `proponent1`, `rteach1`, `radviser`, `yearLevel`, `fundReq`, `fundObt`, `competition`, `abstract`, `id_submit`) VALUES
(1, '1', '1', '1', '1', '1', 1, 1, '1', '1', 0),
(2, '1', '1', '1', '1', '1', 1, 1, '1', '1', 0),
(3, '1', '1', '1', '1', '1', 1, 1, '1', '1', 0),
(4, '1', '1', '1', '1', '1', 1, 1, '1', '1', 0),
(5, '1', '1', '1', '1', '1', 1, 1, '1', '1', 0),
(6, '1', '1', '1', '1', '1', 1, 100, '1', '1', 0),
(9, 'asdfjkl', 'qfghjk', 'rfghj', '1qEADSFBGN', 'Grade 11', 10038, NULL, 'dsd', 'pl0x', 4),
(12, 'sadfg', 'safdg', 'sdf', 'sdf', 'g11', 24356789, NULL, 'dsfg', 'dsfgh', 4),
(36, 'adfg', 'qkwh', 'kjh', 'jh', 'g10', 34259, NULL, 'oj', 'eoisf', 4),
(37, 'asfdhsajh', 'jh', 'kjh', 'kjhk', 'grade 11', 199, 1, 'hjh', 'wejel', 4),
(38, 'Arduino-based automated tilapia feeder', 'Jack Bauer, Nina Myers, George Mason', 'Ferly Lovete', 'John Delos Santos', '11', 100, 100, 'YIC, RSTW, PGT', 'AlphaBot is an application capable of providing an entertainment medium and utilities in the voice and text chat software known as Discord. It is capable of playing music in the voice channels and is able to provide users with various games to make the voice and text chat more interesting. It is programmed using the Python programming language and the Discord.py, an API wrapper written in python.\r\nAlphaBot is an application capable of providing an entertainment medium and utilities in the voice and text chat software known as Discord. It is capable of playing music in the voice channels and is able to provide users with various games to make the voice and text chat more interesting. It is programmed using the Python programming language and the Discord.py, an API wrapper written in python.\r\nAlphaBot is an application capable of providing an entertainment medium and utilities in the voice and text chat software known as Discord. It is capable of playing music in the voice channels and is able to provide users with various games to make the voice and text chat more interesting. It is programmed using the Python programming language and the Discord.py, an API wrapper written in python.\r\nAlphaBot is an application capable of providing an entertainment medium and utilities in the voice and text chat software known as Discord. It is capable of playing music in the voice channels and is able to provide users with various games to make the voice and text chat more interesting. It is programmed using the Python programming language and the Discord.py, an API wrapper written in python.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `databasetable_restart_tableconfirm`
--

CREATE TABLE `databasetable_restart_tableconfirm` (
  `id` int(11) NOT NULL,
  `topic` text NOT NULL,
  `proponent1` text NOT NULL,
  `rteach1` text NOT NULL,
  `radviser` text NOT NULL,
  `yearLevel` varchar(60) NOT NULL,
  `fundReq` int(11) DEFAULT NULL,
  `fundObt` int(11) DEFAULT NULL,
  `competition` text,
  `abstract` text NOT NULL,
  `id_submit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `pos` varchar(15) NOT NULL,
  `id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pass`, `pos`, `id`, `fullname`) VALUES
('asd', '7815696ecbf1c96e6894b779456d330e', 'teacher', 2, 'asd'),
('mdnmiranda', '371609b69ceab4153682c1ef9cfa7c26', 'student', 3, 'Martin Dohn N. Miranda'),
('afern', '2a12d1e5a5a229645c0b41482af61a74', 'student', 4, 'ffestin'),
('jbauer', '302693c10f53c58e0fb8574f5eba8c46', 'student', 5, 'Jack Bauer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databasetable`
--
ALTER TABLE `databasetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databasetable_restart`
--
ALTER TABLE `databasetable_restart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databasetable_restart_tableconfirm`
--
ALTER TABLE `databasetable_restart_tableconfirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databasetable`
--
ALTER TABLE `databasetable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `databasetable_restart`
--
ALTER TABLE `databasetable_restart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `databasetable_restart_tableconfirm`
--
ALTER TABLE `databasetable_restart_tableconfirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
