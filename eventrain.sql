-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 02:02 PM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_hungarian_ci NOT NULL,
  `post_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `event_id`, `comment`, `post_time`) VALUES
(22, 2, 67, '123123', '2023-01-15 17:20:38'),
(23, 4, 67, 'Sziasztok', '2023-01-15 17:38:19');

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
(67, 2, 'Party', 'private', 'New Year Party', 'Backo Gradiste', 'Jovan Popovic 7', 'active', '2023-12-31 21:30:00', '2023-06-14 22:00:00', '2023-01-15 13:42:59'),
(68, 5, 'Birthday', 'public', 'Dog\'s Birthday', 'Backo Gradiste', 'Jovan Popovic 7', 'active', '2023-01-30 15:45:00', '2023-01-20 01:45:00', '2023-01-15 13:45:45');

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

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`gift_id`, `event_id`, `user_id`, `name`, `status`, `date_time`) VALUES
(83, 67, NULL, 'Pezsgő', 'available', '2023-01-15 13:42:59'),
(84, 67, NULL, 'Bor', 'available', '2023-01-15 13:42:59'),
(86, 67, NULL, 'Fanta', 'available', '2023-01-15 13:42:59'),
(87, 67, NULL, 'Pizza', 'available', '2023-01-15 13:42:59'),
(88, 68, NULL, 'Kutya kaja', 'available', '2023-01-15 13:45:46'),
(89, 68, 2, 'Labda', 'reserved', '2023-01-15 13:45:46');

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

--
-- Dumping data for table `invitations`
--

INSERT INTO `invitations` (`invitation_id`, `event_id`, `invited_user_email`, `status`, `date_time`) VALUES
(61, 68, 'pnorbyy01@gmail.com', 'accepted', '2023-01-15 15:42:19');

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
(2, 'pnorbi', 'Norbert', 'Péter', 'b2cff9cf822e8aaa9dde53bbaadaecc9.jpg', 'pnorbyy01@gmail.com', '$2y$10$7w/n0iNGfFOF6qMaiqedg.7frYg2CRayWsLXT5am6MtlbbcH.R.w.', '', 'admin', 1, '0000-00-00 00:00:00', '2022-12-24 20:13:20'),
(3, 'pnorbi01', 'Norbert', 'Péter', 'default-profile-picture.jpg', 'sad@asd.com', '$2y$10$8u7UCcrmPolUYVYDMDcXhuOgL2KGHFti.OfN4Fd9.gfnd4XzA9.qS', 'AafopkcydCdsjaopdxXndtngajyRobwawgfuJgyb', 'user', 1, '2022-12-25 20:16:53', '2022-12-24 20:16:53'),
(4, 'pnorbi20010225', 'Norbi', 'Peter', 'f50884ef9bc9e2f008dd6b1b240e0f54.jpg', 'bonnycsgo@hotmail.com', '$2y$10$ojYbDq/Dmf3U9WimMbn/nuqVd2a9/YNvdrZniqNWa4CU7a/i4fzwi', '', 'user', 1, '0000-00-00 00:00:00', '2022-12-24 21:07:14'),
(5, 'asd', 'fsafas', 'sad', 'default-profile-picture.jpg', 'eventrain@gmail.hu', '$2y$10$7y.Z4cRv8aJ1qe4ySS3Go.SwLkKDc6rpywyEusrNNJMxJztzBDgg6', '', 'user', 1, '0000-00-00 00:00:00', '2022-12-30 14:31:20');

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `forgotten_passwords`
--
ALTER TABLE `forgotten_passwords`
  MODIFY `forgotten_password_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `gifts`
--
ALTER TABLE `gifts`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `invitation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_email_failures`
--
ALTER TABLE `user_email_failures`
  MODIFY `user_email_failure_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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
