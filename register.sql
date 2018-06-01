-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2017 at 09:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `studentid` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `timeslot` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `studentid`, `email`, `timeslot`) VALUES
(40, 'shruti', 'hir', 'ua2695', 'shruti@gmail.com', 'Monday 15:00-17:00'),
(49, 'shruti', 'patel', '223', 's@gmail.com', 'Thusday 11:00-13:00'),
(57, 'shivani', 'shah', 'xa3456', 'ss@gmail.com', 'Tuesday 14:00-16:00'),
(58, 'vani', 'patel', 'ui1234', 'vp@yahoo.com', 'Monday 15:00-17:00'),
(59, 'uiui', 'uiui', 'ui6767', 'S@gail.com', 'Monday 15:00-17:00'),
(60, 'shru', 'hir', 'hu7878', 'Ss@gmail.com', 'Tuesday 14:00-16:00'),
(63, 'io', 'io', 'io', 'io@gmail.com', 'Monday 15:00-17:00'),
(64, 'hello', 'jiji', 'hu89787', 'a@gmail.com', 'Thusday 11:00-13:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
