-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 12:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se_3_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Status` enum('ACTIVE','FINISHED','TERMINATE') NOT NULL DEFAULT 'ACTIVE',
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`Id`, `Name`, `Description`, `Status`, `Image`) VALUES
(1, 'Money_1_Active', 'Money_1_Active_Description', 'ACTIVE', NULL),
(2, 'Money_2_Finished', 'Money_2_Finished_Description', 'FINISHED', NULL),
(3, 'Money_3_Terminate', 'Money_3_Terminate_Description', 'TERMINATE', NULL),
(4, 'Object_1_Active', 'Object_1_Active_Description', 'ACTIVE', NULL),
(5, 'Object_2_Finished', 'Object_2_Finished_Description', 'FINISHED', NULL),
(6, 'Object_3_Terminate', 'Object_3_Terminate_Description', 'TERMINATE', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_money`
--

CREATE TABLE `campaign_money` (
  `campaign_money_id` int(11) NOT NULL,
  `Goal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign_money`
--

INSERT INTO `campaign_money` (`campaign_money_id`, `Goal`) VALUES
(1, 1000),
(2, 2000),
(3, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_object`
--

CREATE TABLE `campaign_object` (
  `campaign_object_id` int(11) NOT NULL,
  `Tag` enum('Foods','Apparel','Medicine') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign_object`
--

INSERT INTO `campaign_object` (`campaign_object_id`, `Tag`) VALUES
(4, NULL),
(5, NULL),
(6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_object_request`
--

CREATE TABLE `campaign_object_request` (
  `Id` int(11) NOT NULL,
  `Amount` float NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Status` enum('REQUEST','APPROVE','DENY') NOT NULL DEFAULT 'REQUEST',
  `user_id` int(11) NOT NULL,
  `campaign_object_id` int(11) NOT NULL,
  `campaign_project_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign_object_request`
--

INSERT INTO `campaign_object_request` (`Id`, `Amount`, `Date`, `Status`, `user_id`, `campaign_object_id`, `campaign_project_user_id`) VALUES
(1, 50, '2023-03-10', 'REQUEST', 9, 4, 13),
(2, 50, '2023-03-10', 'REQUEST', 9, 4, 14),
(3, 50, '2023-03-10', 'REQUEST', 9, 4, 15),
(4, 50, '2023-03-10', 'REQUEST', 9, 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_project_user`
--

CREATE TABLE `campaign_project_user` (
  `Id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Role` enum('CHAIRMAN','BOARD') NOT NULL DEFAULT 'BOARD'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign_project_user`
--

INSERT INTO `campaign_project_user` (`Id`, `campaign_id`, `user_id`, `Role`) VALUES
(1, 1, 10, 'CHAIRMAN'),
(2, 1, 11, 'BOARD'),
(3, 1, 12, 'BOARD'),
(4, 1, 13, 'BOARD'),
(5, 2, 11, 'CHAIRMAN'),
(6, 2, 12, 'BOARD'),
(7, 2, 13, 'BOARD'),
(8, 2, 10, 'BOARD'),
(9, 3, 12, 'CHAIRMAN'),
(10, 3, 13, 'BOARD'),
(11, 3, 10, 'BOARD'),
(12, 3, 11, 'BOARD'),
(13, 4, 13, 'CHAIRMAN'),
(14, 4, 10, 'BOARD'),
(15, 4, 11, 'BOARD'),
(16, 4, 12, 'BOARD'),
(17, 5, 10, 'CHAIRMAN'),
(18, 5, 11, 'BOARD'),
(19, 5, 12, 'BOARD'),
(20, 5, 13, 'BOARD'),
(21, 6, 11, 'CHAIRMAN'),
(22, 6, 12, 'BOARD'),
(23, 6, 13, 'BOARD'),
(24, 6, 10, 'BOARD');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_user_donate`
--

CREATE TABLE `campaign_user_donate` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Amount` float NOT NULL,
  `Status` enum('REQUEST','APPROVE','DENY') NOT NULL DEFAULT 'REQUEST',
  `campaign_money_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign_user_donate`
--

INSERT INTO `campaign_user_donate` (`Id`, `Name`, `Amount`, `Status`, `campaign_money_id`, `user_id`) VALUES
(1, 'AAA', 500, 'REQUEST', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `object`
--

CREATE TABLE `object` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Img_name` varchar(50) DEFAULT NULL,
  `Amount` int(11) NOT NULL,
  `campaign_object_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `object`
--

INSERT INTO `object` (`Id`, `Name`, `Img_name`, `Amount`, `campaign_object_id`) VALUES
(1, 'Object_campagin_4_1', NULL, 41, 4),
(2, 'Object_campagin_4_2', NULL, 42, 4),
(3, 'Object_campagin_5_1', NULL, 51, 5),
(4, 'Object_campagin_5_2', NULL, 52, 5),
(5, 'Object_campagin_6_1', NULL, 61, 6),
(6, 'Object_campagin_6_2', NULL, 62, 6);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `Id` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `campaign_money_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`Id`, `Number`, `Name`, `Description`, `campaign_money_id`) VALUES
(1, 1, 'Number_1', 'Number_1', 1),
(2, 2, 'Number_2', 'Number_2', 1),
(3, 3, 'Number_3', 'Number_3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Id` int(11) NOT NULL,
  `Type` enum('MONEY','VERIFY','SYSTEMADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id`, `Type`) VALUES
(1, 'SYSTEMADMIN'),
(2, 'VERIFY'),
(3, 'MONEY');

-- --------------------------------------------------------

--
-- Table structure for table `tag_campaign_object`
--

CREATE TABLE `tag_campaign_object` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `campaign_object_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tag_user`
--

CREATE TABLE `tag_user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `permission` enum('NULL','REQUEST','APPROVE') NOT NULL DEFAULT 'NULL',
  `role` enum('USER','STAFF') NOT NULL DEFAULT 'USER',
  `citizen_id` varchar(13) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT 'user-thumb.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `username`, `email_verified_at`, `remember_token`, `password`, `permission`, `role`, `citizen_id`, `phone`, `address`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Peerawat', 'Wongmek', 'peace260745@gmail.com', 'peacechy', NULL, NULL, '$2y$10$5tvEmo8iFu7meBLWrH2liOR.WWYU/amWpY4L9RDh/RUkFjXnrdXwi', 'NULL', 'STAFF', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(2, 'Peerawat', 'Wongmek', 'abc@gmail.com', 'vaok2004', NULL, NULL, '$2y$10$6qZ3iPHCuqOBeoVkb0R60OSNNmiVchC1whlK.sHDanFg/0Mt4GdhG', 'NULL', 'STAFF', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(3, 'Peerawat', 'Wongmej', 'peace@gmail.com', 'peacec', NULL, NULL, '$2y$10$wy5JLP06S7OunixEfDWghOwFkf60hmf7Kk12KoMFsBkmWeiXZRfZa', 'NULL', 'STAFF', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(8, 'User_Test_1_Firstname', 'User_Test_1_Lastname', 'User_Test_1_Username', 'User_Test_1_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'NULL', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(9, 'User_Test_2_Firstname', 'User_Test_2_Lastname', 'User_Test_2_Username', 'User_Test_2_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'APPROVE', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(10, 'User_Test_3_Firstname', 'User_Test_3_Lastname', 'User_Test_3_Username', 'User_Test_3_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'APPROVE', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(11, 'User_Test_4_Firstname', 'User_Test_4_Lastname', 'User_Test_4_Username', 'User_Test_4_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'APPROVE', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(12, 'User_Test_5_Firstname', 'User_Test_5_Lastname', 'User_Test_5_Username', 'User_Test_5_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'APPROVE', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(13, 'User_Test_6_Firstname', 'User_Test_6_Lastname', 'User_Test_6_Username', 'User_Test_6_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'REQUEST', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(14, 'Chalermchai', 'Kamlungdach', 'chalermchaikm@gmail.com', 'chalermchaikm@gmail.com', NULL, NULL, '$2y$10$nFuUSoys//XIJMeAliGF6e6h7NiYxsgRQgWsdpyDKU/giDt8VwlVa', 'NULL', 'USER', '1234567891231', '0970794543', '11 adafafaf', '2023-03-30 01:12:14', '2023-03-30 01:12:14', 'user-thumb.jpg'),
(15, 'Chanakan', 'Srisarutiporn', 'srisarutiporn.cha@gmail.com', 'artzaza7', NULL, NULL, '$2y$10$/WGtjn6WvcsswCugU3MUFe.7BOUt/LD9MPUjUS3XnNonPxL46xr3y', 'APPROVE', 'USER', NULL, NULL, NULL, '2023-04-01 03:12:44', '2023-04-01 03:12:44', 'Chanakan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `campaign_money`
--
ALTER TABLE `campaign_money`
  ADD PRIMARY KEY (`campaign_money_id`),
  ADD KEY `campaign_money_id` (`campaign_money_id`);

--
-- Indexes for table `campaign_object`
--
ALTER TABLE `campaign_object`
  ADD PRIMARY KEY (`campaign_object_id`),
  ADD KEY `campaign_object_id` (`campaign_object_id`);

--
-- Indexes for table `campaign_object_request`
--
ALTER TABLE `campaign_object_request`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_id` (`user_id`,`campaign_object_id`,`campaign_project_user_id`),
  ADD KEY `campaign_object_id` (`campaign_object_id`),
  ADD KEY `campaign_project_user_id` (`campaign_project_user_id`);

--
-- Indexes for table `campaign_project_user`
--
ALTER TABLE `campaign_project_user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `campaign_id` (`campaign_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `campaign_user_donate`
--
ALTER TABLE `campaign_user_donate`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `campaign_money_id` (`campaign_money_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `campaign_object_id` (`campaign_object_id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `campaign_money_id` (`campaign_money_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tag_campaign_object`
--
ALTER TABLE `tag_campaign_object`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `campaign_object_id` (`campaign_object_id`);

--
-- Indexes for table `tag_user`
--
ALTER TABLE `tag_user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `campaign_object_request`
--
ALTER TABLE `campaign_object_request`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campaign_project_user`
--
ALTER TABLE `campaign_project_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `campaign_user_donate`
--
ALTER TABLE `campaign_user_donate`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `object`
--
ALTER TABLE `object`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tag_campaign_object`
--
ALTER TABLE `tag_campaign_object`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag_user`
--
ALTER TABLE `tag_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaign_money`
--
ALTER TABLE `campaign_money`
  ADD CONSTRAINT `campaign_money_ibfk_1` FOREIGN KEY (`campaign_money_id`) REFERENCES `campaign` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `campaign_object`
--
ALTER TABLE `campaign_object`
  ADD CONSTRAINT `campaign_object_ibfk_1` FOREIGN KEY (`campaign_object_id`) REFERENCES `campaign` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `campaign_object_request`
--
ALTER TABLE `campaign_object_request`
  ADD CONSTRAINT `campaign_object_request_ibfk_1` FOREIGN KEY (`campaign_object_id`) REFERENCES `campaign_object` (`campaign_object_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `campaign_object_request_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `campaign_object_request_ibfk_3` FOREIGN KEY (`campaign_project_user_id`) REFERENCES `campaign_project_user` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `campaign_project_user`
--
ALTER TABLE `campaign_project_user`
  ADD CONSTRAINT `campaign_project_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `campaign_project_user_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `campaign` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `campaign_user_donate`
--
ALTER TABLE `campaign_user_donate`
  ADD CONSTRAINT `campaign_user_donate_ibfk_1` FOREIGN KEY (`campaign_money_id`) REFERENCES `campaign_money` (`campaign_money_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `campaign_user_donate_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `object`
--
ALTER TABLE `object`
  ADD CONSTRAINT `object_ibfk_1` FOREIGN KEY (`campaign_object_id`) REFERENCES `campaign_object` (`campaign_object_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `progress_ibfk_1` FOREIGN KEY (`campaign_money_id`) REFERENCES `campaign_money` (`campaign_money_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag_campaign_object`
--
ALTER TABLE `tag_campaign_object`
  ADD CONSTRAINT `tag_campaign_object_ibfk_1` FOREIGN KEY (`campaign_object_id`) REFERENCES `campaign_object` (`campaign_object_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tag_user`
--
ALTER TABLE `tag_user`
  ADD CONSTRAINT `tag_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
