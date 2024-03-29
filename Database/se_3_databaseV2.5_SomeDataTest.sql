-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 02:42 PM
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
  `Status` enum('ACTIVE','FINISHED','TERMINATE') NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`Id`, `Name`, `Description`, `Status`) VALUES
(1, 'Money_1_Active', 'Money_1_Active_Description', 'ACTIVE'),
(2, 'Money_2_Finished', 'Money_2_Finished_Description', 'FINISHED'),
(3, 'Money_3_Terminate', 'Money_3_Terminate_Description', 'TERMINATE'),
(4, 'Object_1_Active', 'Object_1_Active_Description', 'ACTIVE'),
(5, 'Object_2_Finished', 'Object_2_Finished_Description', 'FINISHED'),
(6, 'Object_3_Terminate', 'Object_3_Terminate_Description', 'TERMINATE');

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
  `campaign_object_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign_object`
--

INSERT INTO `campaign_object` (`campaign_object_id`) VALUES
(4),
(5),
(6);

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
  `Type` enum('CHAIRMAN','BOARD') NOT NULL DEFAULT 'BOARD'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign_project_user`
--

INSERT INTO `campaign_project_user` (`Id`, `campaign_id`, `user_id`, `Type`) VALUES
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
(1, NULL, 500, 'REQUEST', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` enum('MONEY','VERIFY') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id`, `Name`, `Email`, `Password`, `Type`) VALUES
(1, 'staff_money', 'staff_money@gmail.com', '123456', 'MONEY'),
(2, 'staff_verify', 'staff_verify@gmail.com', '123456', 'VERIFY');

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
  `Id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` enum('NULL','REQUEST','APPROVE') NOT NULL DEFAULT 'NULL',
  `googleId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `firstname`, `lastname`, `email`, `username`, `password`, `permission`, `googleId`) VALUES
(1, 'Peerawat', 'Wongmek', 'peacepeerawat@gmail.com', 'peace', '12345678', 'NULL', NULL),
(2, 'Peerawat', 'Wongmek', 'peace260745@gmail.com', 'peacechy', '$2y$10$5tvEmo8iFu7meBLWrH2liOR.WWYU/amWpY4L9RDh/RUkFjXnrdXwi', 'NULL', NULL),
(3, 'Peerawat', 'Wongmek', 'abc@gmail.com', 'vaok2004', '$2y$10$6qZ3iPHCuqOBeoVkb0R60OSNNmiVchC1whlK.sHDanFg/0Mt4GdhG', 'NULL', NULL),
(4, 'Peerawat', 'Wongmej', 'peace@gmail.com', 'peacec', '$2y$10$wy5JLP06S7OunixEfDWghOwFkf60hmf7Kk12KoMFsBkmWeiXZRfZa', 'NULL', NULL),
(5, 'a', 'b', 'abcd@gmail.com', 'ter', '$2y$10$34V2GkNb2f4TjapfFZ0P4.dZZ9SOkz2YSFKLjgkXMcBz8PqsI/aGe', 'NULL', NULL),
(6, 'a', 'b', 'abcde@gmail.com', 'terter', '$2y$10$txjpI.deBypp1Y8m824Sh.Lowyfn9cJu5A6Tdi0HApmtktby653ZS', 'NULL', NULL),
(7, 'A', 'B', 'avsadas@gmail.com', 'ppp', '$2y$10$z4VI1u9S/SMDvkrGdjouUeV7vMIa7.FQ/Xmu.nb5ukBT1wGj3MGiO', 'NULL', NULL),
(8, 'ฟ', 'a', 'abcasd@gmail.com', 'abcdsad@gmail.com', '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'NULL', NULL),
(9, 'User_Test_1_Firstname', 'User_Test_1_Lastname', 'User_Test_1@gmail.com', 'User_Test_1_Username', '123456', 'NULL', NULL),
(10, 'User_Test_2_Firstname', 'User_Test_2_Lastname', 'User_Test_2@gmail.com', 'User_Test_2_Username', '123456', 'APPROVE', NULL),
(11, 'User_Test_3_Firstname', 'User_Test_3_Lastname', 'User_Test_3@gmail.com', 'User_Test_3_Username', '123456', 'APPROVE', NULL),
(12, 'User_Test_4_Firstname', 'User_Test_4_Lastname', 'User_Test_4@gmail.com', 'User_Test_4_Username', '123456', 'APPROVE', NULL),
(13, 'User_Test_5_Firstname', 'User_Test_5_Lastname', 'User_Test_5@gmail.com', 'User_Test_5_Username', '123456', 'APPROVE', NULL),
(14, 'User_Test_6_Firstname', 'User_Test_6_Lastname', 'User_Test_6@gmail.com', 'User_Test_6_Username', '123456', 'REQUEST', NULL);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  ADD CONSTRAINT `campaign_object_request_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `campaign_object_request_ibfk_3` FOREIGN KEY (`campaign_project_user_id`) REFERENCES `campaign_project_user` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `campaign_project_user`
--
ALTER TABLE `campaign_project_user`
  ADD CONSTRAINT `campaign_project_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `campaign_project_user_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `campaign` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `campaign_user_donate`
--
ALTER TABLE `campaign_user_donate`
  ADD CONSTRAINT `campaign_user_donate_ibfk_1` FOREIGN KEY (`campaign_money_id`) REFERENCES `campaign_money` (`campaign_money_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `campaign_user_donate_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
-- Constraints for table `tag_campaign_object`
--
ALTER TABLE `tag_campaign_object`
  ADD CONSTRAINT `tag_campaign_object_ibfk_1` FOREIGN KEY (`campaign_object_id`) REFERENCES `campaign_object` (`campaign_object_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tag_user`
--
ALTER TABLE `tag_user`
  ADD CONSTRAINT `tag_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
