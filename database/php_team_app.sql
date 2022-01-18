-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2022 at 08:48 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_team_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `pta_teams`
--

CREATE TABLE `pta_teams` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `slug` char(60) COLLATE utf8_bin DEFAULT NULL COMMENT 'Slug of the Team.',
  `name` char(30) COLLATE utf8_bin DEFAULT NULL COMMENT 'Name of the team.',
  `description` text COLLATE utf8_bin COMMENT 'Description.',
  `available_space` int(99) DEFAULT NULL COMMENT 'Members count.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pta_user`
--

CREATE TABLE `pta_user` (
  `id` int(11) NOT NULL,
  `name` char(30) COLLATE utf8_bin NOT NULL COMMENT 'Name of User.',
  `tag` int(4) NOT NULL COMMENT 'Discord TAG of Specified User.',
  `reputation` int(255) NOT NULL COMMENT 'Reputation points.',
  `status` char(99) COLLATE utf8_bin NOT NULL COMMENT 'Status of user, ie: „Clan member".'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pta_teams`
--
ALTER TABLE `pta_teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `pta_user`
--
ALTER TABLE `pta_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pta_teams`
--
ALTER TABLE `pta_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- AUTO_INCREMENT for table `pta_user`
--
ALTER TABLE `pta_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
