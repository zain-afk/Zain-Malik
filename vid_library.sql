-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 12:32 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vid_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `chating`
--

CREATE TABLE `chating` (
  `id` int(11) NOT NULL,
  `msg_to` varchar(10000) NOT NULL,
  `msg_from` varchar(10000) NOT NULL,
  `mesg` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chating`
--

INSERT INTO `chating` (`id`, `msg_to`, `msg_from`, `mesg`) VALUES
(300, 'iqra', 'zain', 'sa'),
(301, 'iqra', 'zain', 'ds'),
(302, 'iqra', 'zain', 'ds'),
(303, 'iqra', 'zain', 'ds'),
(304, 'iqra', 'zain', 'z'),
(305, 'zain', 'iqra', 'ds'),
(306, 'zain', 'iqra', 'ds'),
(307, 'zain', 'iqra', 'ds'),
(308, 'zain', 'iqra', 'ds'),
(309, 'zain', 'iqra', 'ds'),
(310, 'zain', 'huzzi', 'ds'),
(311, 'iqra', 'zain', 'ds'),
(312, 'iqra', 'zain', 'HEY IQRA');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `cmnt_from` varchar(10000) DEFAULT NULL,
  `comnt_on` varchar(10000) DEFAULT NULL,
  `comnt` varchar(10000) DEFAULT NULL,
  `nam` varchar(10000) NOT NULL,
  `d_pic` varchar(10000) NOT NULL,
  `tm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `cmnt_from`, `comnt_on`, `comnt`, `nam`, `d_pic`, `tm`) VALUES
(33, 'zain', '008525', 'sddsd', '', '', '2019-08-02 17:38:14'),
(34, 'zain', '008525', '/*', '', '', '2019-08-03 11:16:09'),
(35, 'zain', '008525', '0..', '', '', '2019-08-03 18:26:57'),
(36, 'zain', '008525', 'ew', '', '', '2019-08-04 09:56:22'),
(39, 'zain', '008525', 'nice', '', '', '2019-08-05 10:51:46'),
(40, 'iqra', '161b38', 'love it', '', '', '2019-08-05 10:52:00'),
(41, 'zain', '008525', 'ds', 'fd', 'default.jpg', '2019-08-05 10:56:11'),
(42, 'zain', '008525', 'ds', 'Shahnoor', '31218590_406395566501906_4758902134236250112_n.jpg', '2019-08-13 12:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `dis_like_video`
--

CREATE TABLE `dis_like_video` (
  `id` int(11) NOT NULL,
  `video_key` varchar(10000) NOT NULL,
  `dis_like_from` varchar(10000) NOT NULL,
  `uploaded_by` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dis_like_video`
--

INSERT INTO `dis_like_video` (`id`, `video_key`, `dis_like_from`, `uploaded_by`) VALUES
(56, '008525', 'iqra', 'zain'),
(71, '008525', 'huzzi', 'zain'),
(72, '008525', 'huzzi', 'zain'),
(73, '008525', 'huzzi', 'zain'),
(74, '008525', 'huzzi', 'zain'),
(75, '008525', 'huzzi', 'zain'),
(76, '008525', 'huzzi', 'zain'),
(77, '008525', 'huzzi', 'zain');

-- --------------------------------------------------------

--
-- Table structure for table `singup`
--

CREATE TABLE `singup` (
  `id` int(11) NOT NULL,
  `nam` varchar(1000) DEFAULT NULL,
  `u_nam` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `pass` varchar(10000) DEFAULT NULL,
  `dob` int(11) NOT NULL,
  `bio` varchar(10000) NOT NULL,
  `d_pic` varchar(10000) NOT NULL,
  `bnr_pic` varchar(10000) NOT NULL,
  `relation_shp` varchar(10000) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `instagram` varchar(1000) NOT NULL,
  `twitter` varchar(1000) NOT NULL,
  `v_key` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singup`
--

INSERT INTO `singup` (`id`, `nam`, `u_nam`, `email`, `pass`, `dob`, `bio`, `d_pic`, `bnr_pic`, `relation_shp`, `facebook`, `instagram`, `twitter`, `v_key`, `status`, `joined`) VALUES
(2, 'Huzaifa', 'huzzi', 'sa', 'j', 78, 'kjh', 'pexels-photo-459225.jpeg', 'jl', 'jlj', 'kjkl', 'jlkj', 'kj', '', 0, '0000-00-00 00:00:00'),
(19, 'ZAAIN MALIK', 'zain', 'Zaynmalikvevo19@gmail.com', '123', 0, '                      ', '31218590_406395566501906_4758902134236250112_n.jpg', 'dsd', 'Single', 'https://www.facebook.com/behnoiii', 'https://www.instagram.com/malik_here69/', 'https://twitter.com/itx_Zaino', '', 0, '0000-00-00 00:00:00'),
(20, 'ali', 'ali00', 'ali@gmail.com', '123', 2019, '', 'Plain-short-beard-style.jpg', 'dfdf', 'In a Relationship', 'sdsd', 'sd', 'dsds', '', 0, '0000-00-00 00:00:00'),
(21, 'ali', 'ali00', 'ali@gmail.com', '123', 2019, '', 'Plain-short-beard-style.jpg', 'dfdf', 'In a Relationship', 'sdsd', 'sd', 'dsds', '', 0, '0000-00-00 00:00:00'),
(22, 'samad', 'faizi0', 'ali@gmail.com', '123', 1999, 'im heart hacker', 'fdf', 'dfdf', 'divorced', 'sdsd', 'sd', 'dsds', '', 0, '0000-00-00 00:00:00'),
(23, 'iqra hussain', 'iqra', 'ali@gmail.com', '123', 1999, 'im heart hacker', 'fdf', 'dfdf', 'divorced', 'sdsd', 'sd', 'dsds', '', 0, '0000-00-00 00:00:00'),
(24, 'inaam', 'inaam', 'ali@gmail.com', '123', 1999, 'im heart hacker', 'fdf', 'dfdf', 'divorced', 'sdsd', 'sd', 'dsds', '', 0, '0000-00-00 00:00:00'),
(30, 'Shahnoor', 'zain', 'Zaynmalikvevo19@gmail.com', '123', 0, '', '31218590_406395566501906_4758902134236250112_n.jpg', '', '', '', '', '', '2715d97d2118e9d3802d48e9dedb39da', 0, '2019-08-05 11:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `users_fan`
--

CREATE TABLE `users_fan` (
  `id` int(11) NOT NULL,
  `fan_to` varchar(1000) NOT NULL,
  `fan_from` varchar(1000) NOT NULL,
  `d_pic` varchar(10000) NOT NULL,
  `nam` varchar(10000) NOT NULL,
  `noti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_fan`
--

INSERT INTO `users_fan` (`id`, `fan_to`, `fan_from`, `d_pic`, `nam`, `noti`) VALUES
(176, 'zain', 'iqra', 'gettyimages-684378248-612x612.jpg', 'iqra khan', 'iqra is now following you'),
(177, 'zain', 'huzzi', 'pexels-photo-459225.jpeg', 'Huzaifa khan', 'huzzi is now following you'),
(178, 'zain', 'faizi0', 'o.50306.jpg', 'faizi ali', 'faizi0 is now following you'),
(179, 'zain', 'zain', '31218590_406395566501906_4758902134236250112_n.jpg', 'ZAAIN MALIK', 'zain is now following you'),
(183, 'faizi0', 'huzzi', 'pexels-photo-459225.jpeg', 'Huzaifa', 'huzzi is now following you'),
(184, 'ali00', 'zain', '31218590_406395566501906_4758902134236250112_n.jpg', 'Shahnoor', 'zain is now following you'),
(185, 'huzzi', 'zain', '31218590_406395566501906_4758902134236250112_n.jpg', 'Shahnoor', 'zain is now following you');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `u_nam` varchar(1000) DEFAULT NULL,
  `vido_name` varchar(10000) DEFAULT NULL,
  `discription` varchar(1100) DEFAULT NULL,
  `titlle` varchar(1100) DEFAULT NULL,
  `location` varchar(1000) NOT NULL,
  `video_key` varchar(6) NOT NULL,
  `tm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_like`
--

CREATE TABLE `video_like` (
  `id` int(11) NOT NULL,
  `video_key` varchar(10000) NOT NULL,
  `like_from` varchar(10000) NOT NULL,
  `uploaded_by` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_like`
--

INSERT INTO `video_like` (`id`, `video_key`, `like_from`, `uploaded_by`) VALUES
(26, '008525', '', 'zain'),
(27, '008525', '', 'zain'),
(28, '008525', '', 'zain'),
(29, '008525', 'zain', 'zain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chating`
--
ALTER TABLE `chating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dis_like_video`
--
ALTER TABLE `dis_like_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singup`
--
ALTER TABLE `singup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_fan`
--
ALTER TABLE `users_fan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_like`
--
ALTER TABLE `video_like`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chating`
--
ALTER TABLE `chating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `dis_like_video`
--
ALTER TABLE `dis_like_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `singup`
--
ALTER TABLE `singup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users_fan`
--
ALTER TABLE `users_fan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `video_like`
--
ALTER TABLE `video_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
