-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 11:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventrain`
--

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `user_id`, `token`) VALUES
(43, 2, 'ExyAcvOxvIjwUadDupVaeJxuCbqXdnDmcLjxVnzM'),
(44, 2, 'PqqwlpxXwofibdRuaemopLmqckclCcgidgeJamzr'),
(47, 2, 'PscbwPymtoTjcllRtjsgOcizfCwbmlGeonePofmy'),
(49, 2, 'QivqhxnNpqdahkPxhpstgSloqudfBhttwhnOwqme'),
(50, 2, 'NosNvuEliXmlBvcLjcBnaDhsTrwRgiZvoXynQdpL'),
(51, 2, 'RczotfhCudnegbMyqtcdbUamijgeEjrypecOsspb'),
(52, 2, 'DlgahNkofsPoqnoVwdmwSxmslYsvdeSocmvUxpau'),
(53, 2, 'NnstxhsKblwmsrHfapkgeZddqrbjSpjdtufBxfaj'),
(56, 2, 'VetfpqbJfheengNktgqsbEclctcfTddkpqnAowid'),
(57, 2, 'DoxkokkTibujifOjknajzGwkhbmkYfzwgxgFflqk'),
(58, 2, 'XoyfcnzaVzloyumjLdehhutcNmmauakjOnjufrto'),
(59, 2, 'FqxsbaKxcjlrOzsgsrWtffkqSyycryYwuctkOwpn'),
(60, 2, 'AhmdbedcModerksiZxfytnteVijgbiwkOnkzzvom'),
(62, 2, 'MncZuoQazImrTddAtlKpiEsmJapBraZurHcfSoaT'),
(63, 2, 'JhiAajBfoOmnTxrXlgYlbFcaJswAhnAldRwgGkgA'),
(64, 2, 'YpkXbaCwiWskWhaHnhAztWemIvnCgqLerJpkEgmB'),
(65, 2, 'ShkabmeuDdxkgnazBryfhvxbAgvnoltoTgymsiku'),
(66, 2, 'ZojnbgMmdttlNhfktmUjrltkYqqwrnUoltnnOmjz'),
(67, 2, 'NeijlXtbhgKehgtYicniLmrjjStbqkYmqzmIdegp'),
(68, 2, 'KebrlklJoldbuiDpecndiMdjmkadTddwpfeRghrr'),
(69, 2, 'LldVpbJywGlmVxsQipYwaOakFmbVmhBubYghNwvS'),
(70, 2, 'QrwsZicuVxdxPgyyAmmbQlmhGyanWylfIwflHmel'),
(71, 2, 'QvresaolwTxyzftpryGpzkjvumxSqtxuoireUypa'),
(72, 2, 'GzjfogXevdokPinidyKgdqocLbymyfHbzdhfBomw'),
(73, 2, 'SjlwksitiImsgwnoeeUissifeijCjtjjbarzCmzy'),
(74, 2, 'GgozPkryOyqqVezbOchiXdgwDtdaWhzxTrggZtxx'),
(75, 2, 'PcnfeloIdctkayJsjpxvwZtjohrzNzgmjicQejjr'),
(76, 2, 'MxoPwbJpmLbfPkwSghIdjHrjItgVdpKcsWzsQxxF'),
(77, 2, 'DsicjxEodpuwKjydjtWoqrcvYuuipgGuwqetFeck'),
(78, 2, 'AkhyqrjuaRidnmybjaApjxcsfzyJomsrkqyxBgvv'),
(79, 2, 'XabaxWqrgzWppsjWnrjvVsvjxBeqccSwpidAlfcv'),
(80, 2, 'OgrMklPjiVabYeeVlrVysTzdRpiOvmPctEqfCheD'),
(81, 2, 'VsdgMoudQybxZzwyNdnjMsjtOmycNfkwMvvdEpfb'),
(82, 2, 'FmyazZbvszEnyvfYttzhUhxwdXuqywRjmnvTihtc'),
(87, 2, 'XccmNyitLercRboeSejmLkgxLxwhXrqrKfnbZyie'),
(88, 2, 'KjlvlqshnIntqucbfpKhbruqnxeJydcvsttdJozo'),
(90, 2, 'CqtRcfDsaVxvCiuLoxIunAveYdyXokKpzMapDlpL'),
(95, 2, 'VknXdpLdyYnpAyrWmzRpeGyoSglEfsZwhTzsRhoZ'),
(97, 2, 'ZortZsntTnkhPlszAbodIfvuAimoVtfpOqqeUhjt'),
(99, 2, 'FazsvdlMemlpbnBljesdaLzuzttrUfqotllNeclo'),
(100, 2, 'FvgtcyYmetdbFoenuhEsdqmfQyygfkJhpsolPgqv'),
(101, 2, 'OqtnHjdlDtciYpoaUimoRnrdOxppPkzjQgamWmbj');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_hungarian_ci NOT NULL,
  `post_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_type` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `event_status` enum('public','private') COLLATE utf8mb4_hungarian_ci NOT NULL,
  `event_name` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `event_location` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `event_street` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `event_active` enum('active','inactive') COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'inactive',
  `event_start` datetime DEFAULT NULL,
  `event_close` datetime DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `user_id`, `event_type`, `event_status`, `event_name`, `event_location`, `event_street`, `event_active`, `event_start`, `event_close`, `date_time`) VALUES
(73, 2, 'MostTeszt', 'private', 'MostTesztasdasd', 'MostTeszt', 'MostTeszt', 'inactive', '2023-12-25 20:16:53', '2023-11-25 20:16:53', '2023-01-23 13:36:43'),
(74, 2, 'MostTeszt', 'private', 'MostTesztasdasd', 'MostTeszt', 'MostTeszt', 'inactive', '2023-12-25 20:16:53', '2023-11-25 20:16:53', '2023-01-25 18:16:48'),
(75, 2, 'MostTeszt', 'private', 'MostTesztasdasd', 'MostTeszt', 'MostTeszt', 'inactive', '2023-12-25 20:16:53', '2023-11-25 20:16:53', '2023-01-25 18:17:29'),
(80, 2, 'Bfj', 'public', 'Hajdjf', 'Hfhf', 'Jfjf', 'inactive', '2023-02-17 19:49:00', '2023-01-19 19:49:00', '2023-01-28 20:51:04'),
(84, 2, 'MostTesztApi', 'private', 'MostTesztApi', 'MostTesztApi', 'MostTesztApi', 'inactive', '2023-12-25 20:16:53', '2023-11-25 20:16:53', '2023-01-29 11:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `forgotten_passwords`
--

CREATE TABLE `forgotten_passwords` (
  `forgotten_password_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `gift_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `status` enum('available','reserved') COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'available',
  `date_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `invitation_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `invited_user_email` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `status` enum('tentative','accepted','declined','joined') COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'tentative',
  `date_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `device_type` enum('computer','phone','tablet') COLLATE utf8mb4_hungarian_ci NOT NULL,
  `http_accept` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `http_user_agent` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `ip_address` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `user_id`, `device_type`, `http_accept`, `http_user_agent`, `ip_address`, `date_time`) VALUES
(13, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '::1', '2023-01-19 19:46:50'),
(14, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '::1', '2023-01-19 19:46:59'),
(16, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '::1', '2023-01-19 21:11:23'),
(18, 7, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '::1', '2023-01-21 20:47:10'),
(19, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '::1', '2023-01-23 13:20:26'),
(20, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '::1', '2023-01-25 11:57:53'),
(21, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '::1', '2023-01-25 12:00:34'),
(22, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '::1', '2023-01-25 12:50:24'),
(23, 7, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '::1', '2023-01-25 13:19:44'),
(24, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '::1', '2023-01-26 20:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `firstname` varchar(32) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `image` varchar(128) COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'default-profile-picture.jpg',
  `email` varchar(32) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `level` enum('admin','guest','invited','user') COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'user',
  `active` tinyint(4) NOT NULL,
  `registration_expires` datetime NOT NULL,
  `date_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `firstname`, `lastname`, `image`, `email`, `password`, `token`, `level`, `active`, `registration_expires`, `date_time`) VALUES
(2, 'pnorbi', 'Norbert', 'Péter', 'b2cff9cf822e8aaa9dde53bbaadaecc9.jpg', 'pnorbyy01@gmail.com', '$2y$10$qDv6HCfZvk8ik8VHRmWnWOXBcZ0QK7Xcx9HBjvN7PXq1yi6P5XPWu', '', 'admin', 1, '0000-00-00 00:00:00', '2022-12-24 20:13:20'),
(3, 'pnorbi01', 'Norbert', 'Péter', 'default-profile-picture.jpg', 'sad@asd.com', '$2y$10$8u7UCcrmPolUYVYDMDcXhuOgL2KGHFti.OfN4Fd9.gfnd4XzA9.qS', 'AafopkcydCdsjaopdxXndtngajyRobwawgfuJgyb', 'user', 1, '2022-12-25 20:16:53', '2022-12-24 20:16:53'),
(4, 'pnorbi20010225', 'Norbi', 'Peter', 'f50884ef9bc9e2f008dd6b1b240e0f54.jpg', 'bonnycsgo@hotmail.com', '$2y$10$ojYbDq/Dmf3U9WimMbn/nuqVd2a9/YNvdrZniqNWa4CU7a/i4fzwi', '', 'user', 1, '0000-00-00 00:00:00', '2022-12-24 21:07:14'),
(7, 'eventrain', 'asd', 'asd', 'db100c81ce43ebae68f5dc2742871fff.jpg', 'eventrain@gmail.hu', '$2y$10$A9tiZbb2gidQQADNnPizk.Dy29Fd78wU9nZl7wqJscKXX.TX3Ei9m', '', 'user', 1, '0000-00-00 00:00:00', '2023-01-21 20:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_email_failures`
--

CREATE TABLE `user_email_failures` (
  `user_email_failure_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ibfk_1` (`user_id`),
  ADD KEY `comments_ibfk_2` (`event_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `events_ibfk_1` (`user_id`);

--
-- Indexes for table `forgotten_passwords`
--
ALTER TABLE `forgotten_passwords`
  ADD PRIMARY KEY (`forgotten_password_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`gift_id`),
  ADD KEY `gifts_ibfk_1` (`event_id`),
  ADD KEY `gifts_ibfk_2` (`user_id`);

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`invitation_id`),
  ADD KEY `invitations_ibfk_3` (`invited_user_email`),
  ADD KEY `fk_first` (`event_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `logs_ibfk_1` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_email_failures`
--
ALTER TABLE `user_email_failures`
  ADD PRIMARY KEY (`user_email_failure_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `forgotten_passwords`
--
ALTER TABLE `forgotten_passwords`
  MODIFY `forgotten_password_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `gifts`
--
ALTER TABLE `gifts`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `invitation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_email_failures`
--
ALTER TABLE `user_email_failures`
  MODIFY `user_email_failure_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `api`
--
ALTER TABLE `api`
  ADD CONSTRAINT `api_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `forgotten_passwords`
--
ALTER TABLE `forgotten_passwords`
  ADD CONSTRAINT `forgotten_passwords_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `gifts`
--
ALTER TABLE `gifts`
  ADD CONSTRAINT `gifts_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gifts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `invitations`
--
ALTER TABLE `invitations`
  ADD CONSTRAINT `fk_first` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_email_failures`
--
ALTER TABLE `user_email_failures`
  ADD CONSTRAINT `user_email_failures_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
