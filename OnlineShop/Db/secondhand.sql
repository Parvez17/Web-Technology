-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 07:18 AM
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
-- Database: `secondhand`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `deleted` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `email`, `password`, `deleted`) VALUES
('Abir', 'Abir44737', 'tawhidz1123@gmail.com', '123', '2018-09-04 02:24:01'),
('Admin', 'Admin2014', 'Hai@gmail.com', '321', '2018-09-03 22:23:17'),
('admin', 'admin20357', 'tawhidz13@gmail.com', '123', '2018-09-03 21:09:55'),
('admin', 'admin29865', 'tawhid1z13@gmail.com', '123', '2018-09-03 23:02:49'),
('admin', 'admin30510', 'tawhidz13@gmail.com', '123', NULL),
('SaefSir', 'SaefSir36464', 'saef@gmail.com', '123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` varchar(2600) NOT NULL,
  `likes_count` int(11) DEFAULT NULL,
  `report_count` int(11) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_deleted` timestamp NULL DEFAULT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `username`, `post_id`, `title`, `post`, `likes_count`, `report_count`, `comment`, `created`, `post_deleted`, `price`, `address`, `category`) VALUES
(NULL, 'Tawhid6491', 36, 'Lighting', 'One kind of neon lights that glow at night in dark.', NULL, NULL, NULL, '2018-09-02 23:35:25', NULL, 1200, 'dhanmondi,dhaka', ''),
(NULL, 'Tawhid6491', 37, 'Logo designing', 'Logo designing is my passion you can hire me.', NULL, NULL, NULL, '2018-09-03 23:43:36', '2018-09-03 23:43:36', 500, 'Uttara,dhaka', 'Mobile'),
(NULL, 'Tawhid6491', 38, 'flower', 'flower shop', NULL, NULL, NULL, '2018-09-03 23:37:01', '2018-09-03 23:37:01', 2400, 'dhanmondi,dhaka', 'Mobile'),
(NULL, 'abc25348', 39, 'X corolla', 'New', NULL, NULL, NULL, '2018-09-03 23:34:35', '2018-09-03 23:34:35', 1200, 'dhanmondi,dhaka', 'Mobile'),
(NULL, 'abc25348', 40, 'lights', 'dsds', NULL, NULL, 'Nice', '2018-09-04 01:00:12', '2018-09-04 01:00:12', 2400, 'dhanmondi,dhaka', 'Mobile'),
(NULL, 'abc25348', 41, 'X corolla', 'food', NULL, NULL, NULL, '2018-09-04 01:38:14', NULL, 1400000, 'dhanmondi,dhaka', 'Car');

-- --------------------------------------------------------

--
-- Table structure for table `post_pic`
--

CREATE TABLE `post_pic` (
  `post_id` int(11) NOT NULL,
  `pic_id` int(11) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_pic`
--

INSERT INTO `post_pic` (`post_id`, `pic_id`, `pic`) VALUES
(36, 0, '563256930.gif'),
(37, 1, '75572541.jpg'),
(38, 2, '1133679172.jpg'),
(39, 3, '19826_en_1.jpg'),
(40, 4, '563256930.gif'),
(41, 5, 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `user_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `gender`, `profile_pic`, `phone_number`, `user_deleted`) VALUES
(1, 'Tawhid', 'Tawhid6491', 'tawhidz13@gmail.com', '321', 'female', '', '01676574251', '2018-09-04 01:19:30'),
(3, 'Tawhid', 'Tawhid43075', 'tawhidz13@gmail.com', '123', 'male', '', '01676574251', '2018-09-02 23:46:54'),
(4, 'Tonmoy', 'Tonmoy32971', 'tnj@gmail.com', '123', 'male', '', '01676574251', '2018-09-04 01:17:11'),
(15, 'abc', 'abc25348', 'abc@gmail.com', '1234', 'male', '', '01676574251', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_suggestion`
--

CREATE TABLE `user_suggestion` (
  `username` varchar(50) NOT NULL,
  `suggestion` varchar(1000) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_suggestion`
--

INSERT INTO `user_suggestion` (`username`, `suggestion`, `date`) VALUES
('abc25348', 'demo', 'demo'),
('abc25348', 'hiii', '2018-09-04 07:27:40'),
('abc25348', '', '2018-09-04 07:31:34'),
('abc25348', 'nookipo', '2018-09-04 07:35:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_pic`
--
ALTER TABLE `post_pic`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `post_pic`
--
ALTER TABLE `post_pic`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
