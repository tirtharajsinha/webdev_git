-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 08:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `attr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`, `attr`) VALUES
(47, 'upload/e856c25a1a4aa59a77cd06b4e6b01391.jpg', 'man', 'iron man'),
(48, 'upload/depositphotos_257658218-stock-video-young-woman-with-distrustful-look.jpg', 'girl', 'girl'),
(50, 'upload/Webp.net-compress-image.jpg', 'me', 'me'),
(51, 'upload/IK72Fg69v5gvzCBeagxsoltHORXB6AVe97sg90UVP6Rc1htZdszwRRBKx9UMCSGLMibZbEWzG5dSX1ihhwmrFxEnaYfdFd5A7VI5BBcK3wnDIJXmVOqdHnFnasqr8XSb.jpg', 'quiz', 'quiz'),
(52, 'upload/61B5+PR4evL.png', 'ok', 'logo'),
(53, 'upload/_112970698_qt.jpg', 'quiz', 'quiz'),
(54, 'upload/23baae30b7e3174f1e8399720dea2dd7.jpg', 'ok', 'tiger'),
(55, 'upload/image-processing.jpg', 'computer vision ', 'ai'),
(56, 'upload/Avengers-Logo-HD-2880x1800.jpg', 'avenger', 'avenger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
