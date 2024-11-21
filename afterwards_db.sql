-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2024 at 05:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afterwards_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `id` int(11) NOT NULL,
  `about_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`id`, `about_content`) VALUES
(1, 'pola');

-- --------------------------------------------------------

--
-- Table structure for table `appetizer`
--

CREATE TABLE `appetizer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bestseller`
--

CREATE TABLE `bestseller` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_page`
--

CREATE TABLE `contact_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `espresso`
--

CREATE TABLE `espresso` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `espresso`
--

INSERT INTO `espresso` (`id`, `name`, `price`, `image`) VALUES
(1, 'kapeng matapang', '60', 'barako.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `contact_facebook` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `opening_hours` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `houseblend`
--

CREATE TABLE `houseblend` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matcha_based`
--

CREATE TABLE `matcha_based` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newarrival`
--

CREATE TABLE `newarrival` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `non_coffee`
--

CREATE TABLE `non_coffee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pastries`
--

CREATE TABLE `pastries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ricemeal`
--

CREATE TABLE `ricemeal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`id`, `name`, `email`, `password`) VALUES
(3, 'admin!', 'admin@host.com', '98f6b474794d85f694762c9b52bbc351');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appetizer`
--
ALTER TABLE `appetizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_page`
--
ALTER TABLE `contact_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `espresso`
--
ALTER TABLE `espresso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houseblend`
--
ALTER TABLE `houseblend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matcha_based`
--
ALTER TABLE `matcha_based`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newarrival`
--
ALTER TABLE `newarrival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_coffee`
--
ALTER TABLE `non_coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pastries`
--
ALTER TABLE `pastries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ricemeal`
--
ALTER TABLE `ricemeal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appetizer`
--
ALTER TABLE `appetizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_page`
--
ALTER TABLE `contact_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `espresso`
--
ALTER TABLE `espresso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `houseblend`
--
ALTER TABLE `houseblend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matcha_based`
--
ALTER TABLE `matcha_based`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newarrival`
--
ALTER TABLE `newarrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `non_coffee`
--
ALTER TABLE `non_coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pastries`
--
ALTER TABLE `pastries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ricemeal`
--
ALTER TABLE `ricemeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
