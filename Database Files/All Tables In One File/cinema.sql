-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 03:31 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created`) VALUES
(1, 'admin', 'titanic', '2018-04-08 16:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hall` int(1) NOT NULL,
  `time` varchar(30) NOT NULL,
  `seat` varchar(30) NOT NULL,
  `price` int(4) NOT NULL,
  `path` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `hall`, `time`, `seat`, `price`, `path`, `created`) VALUES
(4, 'mountain dark', 1, '08:00am - 11:00am', 'Deluxe', 0, '../Images/movies/black-mountain.jpg', '2018-04-15 23:17:46'),
(5, 'b', 1, '08:00am - 11:00am', 'Deluxe', 22, '../Images/movies/a quiet place.jpg', '2018-04-12 19:02:07'),
(8, 'okok', 1, '08:00am - 11:00am', 'Deluxe', 8787, '../Images/movies/blockers.jpg', '2018-04-12 19:16:15'),
(9, 'bubli', 2, '04:00pm - 7:00pm', 'Medium', 90, '../Images/movies/a quiet place.jpg', '2018-04-12 19:21:16'),
(11, 'acha', 1, '08:00am - 11:00am', 'Deluxe', 7676, '../Images/movies/blockers.jpg', '2018-04-12 19:25:35'),
(16, 'love', 1, '08:00am - 11:00am', 'Deluxe', 100, '../Images/movies/black-mountain-img2.jpg', '2018-04-15 00:49:54'),
(17, 'teri or', 1, '08:00am - 11:00am', 'Deluxe', 9, '../Images/movies/blockers.jpg', '2018-04-14 02:11:40'),
(18, 'oye hoye', 1, '04:00pm - 7:00pm', 'Low', 80, '../Images/movies/black-mountain-img2.jpg', '2018-04-14 21:08:35'),
(19, 'oye hoye', 3, '04:00pm - 7:00pm', 'Low', 80, '../Images/movies/black-mountain-img2.jpg', '2018-04-14 21:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `modified`, `created`) VALUES
(1, 'm', 's', 'm.mohsin.shahzad0582@gmai', 'ssssss', '2018-04-07 17:00:40', '2018-04-07 17:00:40'),
(2, 'm', 's', 'm.mohsin.shahzad0582@gmai', 'ssssss', '2018-04-07 17:17:30', '2018-04-07 17:17:30'),
(3, 'm', 's', 'm.mohsin.shahzad0582@gmai', 'ssssss', '2018-04-07 17:18:39', '2018-04-07 17:18:39'),
(4, 'mohsin', 'shahzad', 'm.mohsin.shahzad0582@gmai', 'ssss', '2018-04-07 17:22:00', '2018-04-07 17:22:00'),
(5, 's', 's', 'm.mohsin.shahzad0582@gmai', 'sssss', '2018-04-07 17:40:19', '2018-04-07 17:40:19'),
(6, 's', 's', 'm.mohsin.shahzad0582@gmai', 'sssss', '2018-04-07 17:45:15', '2018-04-07 17:45:15'),
(7, 's', 's', 'm.mohsin.shahzad0582@gmai', 'sssss', '2018-04-07 17:48:50', '2018-04-07 17:48:50'),
(8, 'okay', 'okay', 'ssss@gmail.com', 'ssss', '2018-04-07 17:49:10', '2018-04-07 17:49:10'),
(9, 'ms', 's', 'm.mohsin.shahzad0582@gmai', 'hhhhh', '2018-04-07 18:15:03', '2018-04-07 18:15:03'),
(10, 'ms', 's', 'm.mohsin.shahzad0582@gmai', 'hhhhh', '2018-04-07 18:19:01', '2018-04-07 18:19:01'),
(11, 'ms', 's', 'm.mohsin.shahzad0582@gmai', 'hhhhh', '2018-04-07 18:23:24', '2018-04-07 18:23:24'),
(12, 'ms', 's', 'm.mohsin.shahzad0582@gmai', 'hhhhh', '2018-04-07 18:24:48', '2018-04-07 18:24:48'),
(13, 'ms', 's', 'm.mohsin.shahzad0582@gmai', 'hhhhh', '2018-04-07 18:26:22', '2018-04-07 18:26:22'),
(14, 'ms', 's', 'm.mohsin.shahzad0582@gmai', 'hhhhh', '2018-04-07 18:27:48', '2018-04-07 18:27:48'),
(15, 'ms', 's', 'm.mohsin.shahzad0582@gmai', 'hhhhh', '2018-04-07 18:29:13', '2018-04-07 18:29:13'),
(16, 'm', 's', 'm.mohsin.shahzad0582@gmai', 'sssss', '2018-04-07 18:31:05', '2018-04-07 18:31:05'),
(17, 'm', 's', 'mmsaholic@gmail.com', 'ssss', '2018-04-07 18:32:44', '2018-04-07 18:32:44'),
(18, 'm', 's', 'mmsaholic@gmail.com', 'ssss', '2018-04-07 18:35:33', '2018-04-07 18:35:33'),
(19, 'mohsin', 'asdasdsadsad', 'm@gmail.com', 'adasdsadas', '2018-04-09 23:44:49', '2018-04-09 23:44:49'),
(20, 'm', 'sss', 'm.mohsin.shahzad0582@gmai', 'popopo', '2018-04-16 00:19:57', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
