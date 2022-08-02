-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 05:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personaldatasheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_07_31_075950_create_c3task_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sheets`
--

CREATE TABLE `sheets` (
  `id` int(10) UNSIGNED NOT NULL,
  `vworgnameAddress1` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgdateFrom1` date DEFAULT NULL,
  `vworgdateTo1` date DEFAULT NULL,
  `vworgnumHours1` int(11) DEFAULT NULL,
  `vwPosition1` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgnameAddress2` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgdateFrom2` date DEFAULT NULL,
  `vworgdateTo2` date DEFAULT NULL,
  `vworgnumHours2` int(11) DEFAULT NULL,
  `vwPosition2` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgnameAddress3` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgdateFrom3` date DEFAULT NULL,
  `vworgdateTo3` date DEFAULT NULL,
  `vworgnumHours3` int(11) DEFAULT NULL,
  `vwPosition3` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgnameAddress4` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgdateFrom4` date DEFAULT NULL,
  `vworgdateTo4` date DEFAULT NULL,
  `vworgnumHours4` int(11) DEFAULT NULL,
  `vwPosition4` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgnameAddress5` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgdateFrom5` date DEFAULT NULL,
  `vworgdateTo5` date DEFAULT NULL,
  `vworgnumHours5` int(11) DEFAULT NULL,
  `vwPosition5` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgnameAddress6` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgdateFrom6` date DEFAULT NULL,
  `vworgdateTo6` date DEFAULT NULL,
  `vworgnumHours6` int(11) DEFAULT NULL,
  `vwPosition6` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgnameAddress7` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgdateFrom7` date DEFAULT NULL,
  `vworgdateTo7` date DEFAULT NULL,
  `vworgnumHours7` int(11) DEFAULT NULL,
  `vwPosition7` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgnameAddress8` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgdateFrom8` date DEFAULT NULL,
  `vworgdateTo8` date DEFAULT NULL,
  `vworgnumHours8` int(11) DEFAULT NULL,
  `vwPosition8` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgnameAddress9` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgdateFrom9` date DEFAULT NULL,
  `vworgdateTo9` date DEFAULT NULL,
  `vworgnumHours9` int(11) DEFAULT NULL,
  `vwPosition9` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgnameAddress10` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vworgdateFrom10` date DEFAULT NULL,
  `vworgdateTo10` date DEFAULT NULL,
  `vworgnumHours10` int(11) DEFAULT NULL,
  `vwPosition10` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameAddress1` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgdateFrom1` date DEFAULT NULL,
  `ldorgdateTo1` date DEFAULT NULL,
  `ldorgnumHours1` int(11) DEFAULT NULL,
  `ldtype1` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameSponsor1` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameAddress2` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgdateFrom2` date DEFAULT NULL,
  `ldorgdateTo2` date DEFAULT NULL,
  `ldorgnumHours2` int(11) DEFAULT NULL,
  `ldtype2` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameSponsor2` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameAddress3` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgdateFrom3` date DEFAULT NULL,
  `ldorgdateTo3` date DEFAULT NULL,
  `ldorgnumHours3` int(11) DEFAULT NULL,
  `ldtype3` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameSponsor3` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameAddress4` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgdateFrom4` date DEFAULT NULL,
  `ldorgdateTo4` date DEFAULT NULL,
  `ldorgnumHours4` int(11) DEFAULT NULL,
  `ldtype4` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameSponsor4` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameAddress5` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgdateFrom5` date DEFAULT NULL,
  `ldorgdateTo5` date DEFAULT NULL,
  `ldorgnumHours5` int(11) DEFAULT NULL,
  `ldtype5` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameSponsor5` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameAddress6` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgdateFrom6` date DEFAULT NULL,
  `ldorgdateTo6` date DEFAULT NULL,
  `ldorgnumHours6` int(11) DEFAULT NULL,
  `ldtype6` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameSponsor6` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameAddress7` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgdateFrom7` date DEFAULT NULL,
  `ldorgdateTo7` date DEFAULT NULL,
  `ldorgnumHours7` int(11) DEFAULT NULL,
  `ldtype7` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameSponsor7` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameAddress8` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgdateFrom8` date DEFAULT NULL,
  `ldorgdateTo8` date DEFAULT NULL,
  `ldorgnumHours8` int(11) DEFAULT NULL,
  `ldtype8` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldorgnameSponsor8` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameSkill1` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameDistinct1` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameMembership1` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameSkill2` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameDistinct2` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameMembership2` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameSkill3` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameDistinct3` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameMembership3` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameSkill4` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameDistinct4` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameMembership4` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameSkill5` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameDistinct5` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameMembership5` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameSkill6` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameDistinct6` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherorgnameMembership6` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sheets`
--
ALTER TABLE `sheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sheets`
--
ALTER TABLE `sheets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
