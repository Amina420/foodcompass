-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 02:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinedonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(210) NOT NULL,
  `email` varchar(210) NOT NULL,
  `phone` varchar(210) NOT NULL,
  `option_selected` varchar(210) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `option_selected`, `message`) VALUES
(1, 'Amina', 'amina@gmail.com', '57903758890', 'Option 3', 'I need food.');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `name` varchar(210) NOT NULL,
  `email` varchar(210) NOT NULL,
  `phone` varchar(210) NOT NULL,
  `address` varchar(210) NOT NULL,
  `option_selected` varchar(210) NOT NULL,
  `quantity` varchar(210) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `name`, `email`, `phone`, `address`, `option_selected`, `quantity`, `message`) VALUES
(3, 'mina', 'minabegum@gmail.com', '6573190830', 'Luton', 'Option 2', '3', 'I want to donate food.'),
(4, 'ayesha', 'ayseha@gmail.com', '7389292', 'luton', 'Option 2', '45', 'no comments'),
(5, 'ayesha', 'ayseha@gmail.com', '7389292', 'luton', 'Option 2', '45', 'no comments'),
(6, 'minu', 'minu@gmail.com', '5899984', 'Luton', 'Option 2', '299', 'jahlksjhkjs');

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `id` int(12) NOT NULL,
  `name` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `phone` varchar(110) NOT NULL,
  `address` varchar(210) NOT NULL,
  `option_selected` varchar(120) NOT NULL,
  `quantity` varchar(210) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`id`, `name`, `email`, `phone`, `address`, `option_selected`, `quantity`, `message`) VALUES
(5, 'faiza', 'fazia@gmail.com', '47293747', 'luton', 'Option 2', '200', 'fhkjSH  FHEU H FHWEU '),
(6, 'Mina', 'mina@gmail.com', '7402398010', 'lutpn', 'Option 1', '4', 'I want ot hire'),
(7, 'Amina', 'amina@gmail.com', '59083480935', 'Luton', 'Option 3', '25', 'I want to hire your team to manage our event.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(12) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(124) NOT NULL,
  `address` varchar(210) NOT NULL,
  `occupation` varchar(210) NOT NULL,
  `gender` varchar(210) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `address`, `occupation`, `gender`, `message`) VALUES
(8, 'hoor', 'hoor@gmail.com', '47392083', 'Luton', 'nothing', 'Female', 'dfasjhfldj'),
(11, 'Mina', 'Mina@gmail.com', '439602962500', 'Luton', 'None', 'Female', 'I want to be part of the waste management team.'),
(12, 'Ayesha', 'ayesha@gmail.com', '46720938097', 'Luton', 'none', 'Female', 'I want to be part of the donation team.'),
(13, 'Ayesha', 'ayesha@gmail.com', '46720938097', 'Luton', 'none', 'Female', 'I want to be part of the donation team.'),
(14, 'kjfhsjkh', 'sjkhdjk@gmail.com', '92837498', 'jkdfhsk', 'djkh', 'Male', 'sfhwkjhwk'),
(15, 'kjfhsjkh', 'sjkhdjk@gmail.com', '92837498', 'jkdfhsk', 'djkh', 'Male', 'sfhwkjhwk'),
(16, 'skfl', 'skl@gmail.com', '309sdjkl', 'fjk', 'dmsk', 'Male', 'sdkljf'),
(17, 'skfl', 'skl@gmail.com', '309sdjkl', 'fjk', 'dmsk', 'Male', 'sdkljf'),
(18, 'hoor', 'hoor@gmail.com', '772087775492', 'luton', 'none', 'Female', 'i wan to be team.'),
(19, 'hoor', 'hoor@gmail.com', '772087775492', 'luton', 'none', 'Female', 'i wan to be team.'),
(20, 'hoor', 'hoor@gmail.com', '772087775492', 'luton', 'none', 'Female', 'i wan to be team.'),
(21, 'mina', 'mina@gmai.com', '548623798', 'Luton, UK', 'None', 'Female', 'I wanted to be a part of your donation team.'),
(22, 'mina', 'mina@gmai.com', '548623798', 'Luton, UK', 'None', 'Female', 'I wanted to be a part of your donation team.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(8, 'mina', 'mina@gmail.com', '$2y$10$vdcRvwCTIVK5kwCOW7HrkOMaxzYVdrw54ayUgCbApnDUlznVSCvY.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
