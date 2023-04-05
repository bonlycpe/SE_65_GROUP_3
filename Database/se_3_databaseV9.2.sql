-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 09:32 AM
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
  `Status` enum('ACTIVE','FINISHED','TERMINATE','REQUEST_TERMINATE') NOT NULL DEFAULT 'ACTIVE',
  `Terminate_Description` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT 'defaultCampaign.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`Id`, `Name`, `Description`, `Status`, `Terminate_Description`, `Image`) VALUES
(1, 'บ้านพักพิงฯ เพื่อครอบครัวผู้ป่วยเด็ก', 'ร่วมสนับสนุนพ่อแม่ให้ได้อยู่ใกล้ชิดลูกที่ป่วยขั้นวิกฤตขณะเข้ารับการรักษาในโรงพยาบาล เพื่อลดปัญหาการแอบหลับนอนตามพื้นที่สาธารณะ พัฒนาคุณภาพชีวิตของครอบครัวผู้ป่วยเด็กให้ดีขึ้น', 'ACTIVE', NULL, 'defaultCampaign.png	'),
(2, 'Chef Scholarship ปั้นเด็กให้เป็นเชฟ', 'เพิ่มโอกาสเด็กๆนอกระบบที่มีฝันอยากเป็นเชฟ แต่มีข้อจำกัดของฐานะทางการเงิน ให้สามารถทำตามความฝันด้วยการสนับสนุนทุนฝึกงานในร้านอาหารขึ้นชื่อ เพื่อเรียนรู้กษะ ฝึกประสบการณ์ในสถานประกอบการมืออาชีพ เพื่อต่อยอดLocal chef ให้น้อง ๆ ที่อยากมีอาชีพที่บ้าน', 'FINISHED', NULL, 'defaultCampaign.png	'),
(3, 'Allympic มหกรรมกีฬาแห่งมวลมนุษยชาติ... ทุกคน', 'เพราะการเข้าถึงสุขภาพที่ดี ไม่ควรมีข้อจำกัด... เราจึงระดมทุนจัดงาน Allympic เพื่อสร้าง มหกรรมกีฬาแห่งมวลมนุษยชาติให้ทุกคนสามารถเล่นกีฬาด้วยกัน ไม่ว่าจะพิการหรือไม่พิการ ทุกคนจะได้เล่นกีฬาด้วยกันภายใต้กติกาเดียวกันที่มีความเสมอภาค โดยมีเป้าหมายคนเข้าร่วมกิ', 'TERMINATE', NULL, 'defaultCampaign.png	'),
(4, 'เก่าไม่ไหว ขอคู่ใหม่ให้หนูที', 'มอบรองเท้านักเรียนคู่ใหม่ให้เด็กนักเรียนยากจนในโรงเรียนชนบท เพื่อป้องกันความเสี่ยงจากอุบัติเหตุ และโรคต่างๆที่เกิดจากการสวมใส่รองเท้านักเรียนที่มีสภาพเก่าขาดชำรุด สร้างเสริมสุขลักษณะที่ดี และสร้างแรงบันดาลใจในการไปโรงเรียนให้แก่เด็กๆที่ขาดแคลน', 'ACTIVE', NULL, 'defaultCampaign.png	'),
(5, 'ช้างอิ่มท้อง พี่น้องเกษตรกรอิ่มใจ', 'ช้างขาดแคลนอาหาร เพราะปางช้างหลายแห่งกำลังเผชิญกับปัญหาเศรษฐกิจที่แม้ดิ้นรนเพียงใด ก็ไม่เพียงพอ มูลนิธิอนุรักษ์ช้างเอเชียชวนทุกคนมาช่วยบริจาคซื้อกล้วยอ้อย ข้าวโพด เพื่อเลี้ยงช้างอิ่มท้อง ใน 30 ปางช้าง พร้อมพี่น้องเกษตรกรอิ่มใจกัน', 'FINISHED', NULL, 'defaultCampaign.png	'),
(6, 'ช่วยเหลือแม่และเด็กที่ถูกกระทำด้วยความรุนแรงในครอบ', 'ความรุนแรงในครอบครัวเป็นปัญหาที่เกิดขึ้นในทุกประเทศทั่วโลกโดยไม่เลือกเชื้อชาติ สัญชาติ ความเชื่อ การศึกษาหรือฐานะทางสังคม ปัญหาความรุนแรงในครอบครัวได้ส่งผลก่อให้เกิดความเจ็บปวดสูญเสียทั้งทางร่างกาย จิตใจ อารมณ์และทรัพย์สินแก่ผู้ถูกกระทำ บุคคลที่เกี่ยวข้อง', 'TERMINATE', NULL, 'defaultCampaign.png	'),
(28, 'adfa', 'abdc', 'ACTIVE', NULL, 'defaultCampaign.png	'),
(36, 'adfa', 'abdc', 'ACTIVE', NULL, 'defaultCampaign.png	'),
(37, 'โครงการทดสอบ2', 'โครงการทดสอบ2', 'TERMINATE', NULL, 'defaultCampaign.png	'),
(39, 'ทดสอบ', 'ผ่านเถอะ', 'ACTIVE', 'test', 'defaultCampaign.png	'),
(48, 'testm', 'testm', 'ACTIVE', NULL, 'defaultCampaign.png	'),
(54, 'afafa', 'agaga', 'ACTIVE', NULL, 'defaultCampaign.png	'),
(56, 'ทดสอบ2', 'ทดสอบ2', 'ACTIVE', NULL, 'defaultCampaign.png	'),
(57, 'testtttt', 'testttt', 'ACTIVE', NULL, 'defaultCampaign.png	'),
(58, 'test3', 'test', 'ACTIVE', NULL, 'defaultCampaign.png');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_money`
--

CREATE TABLE `campaign_money` (
  `campaign_money_id` int(11) NOT NULL,
  `Goal` float NOT NULL,
  `total` float NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign_money`
--

INSERT INTO `campaign_money` (`campaign_money_id`, `Goal`, `total`, `Image`) VALUES
(1, 1000, 512, ''),
(2, 2000, 0, ''),
(3, 3000, 0, ''),
(28, 1111, 0, '6879129.jpg'),
(37, 1500, 0, '061fc738d46ba9dd0476a124bd386790.jpg'),
(48, 124, 0, 'pexels-eberhard-grossgasteiger-443446.jpg'),
(57, 12354, 0, 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.3523036.jpg'),
(58, 1234, 0, '51739.jpg');

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
(4, 'Foods'),
(5, 'Apparel'),
(6, 'Medicine'),
(39, 'Medicine'),
(54, 'Foods'),
(56, 'Apparel');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_object_request`
--

CREATE TABLE `campaign_object_request` (
  `Id` int(11) NOT NULL,
  `Amount` float NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Status` enum('REQUEST','APPROVE','DENY') NOT NULL DEFAULT 'REQUEST',
  `user_id` int(11) NOT NULL,
  `campaign_object_id` int(11) NOT NULL,
  `campaign_project_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign_object_request`
--

INSERT INTO `campaign_object_request` (`Id`, `Amount`, `Description`, `Date`, `Status`, `user_id`, `campaign_object_id`, `campaign_project_user_id`) VALUES
(1, 50, '', '2023-03-10', 'APPROVE', 9, 4, 13),
(2, 50, '', '2023-03-10', 'APPROVE', 9, 4, 14),
(3, 50, '', '2023-03-10', 'APPROVE', 9, 4, 15),
(4, 50, '', '2023-03-10', 'APPROVE', 9, 4, 16),
(13, 124, '123414141', '2023-04-04', 'APPROVE', 20, 56, 75),
(14, 124, '123414141', '2023-04-04', 'REQUEST', 20, 56, 76),
(15, 124, '123414141', '2023-04-04', 'REQUEST', 20, 56, 78),
(16, 124, '123414141', '2023-04-04', 'REQUEST', 20, 56, 77),
(17, 1313, '5fasfa', '2023-04-04', 'REQUEST', 21, 56, 75),
(18, 1313, '5fasfa', '2023-04-04', 'REQUEST', 21, 56, 76),
(19, 1313, '5fasfa', '2023-04-04', 'REQUEST', 21, 56, 78),
(20, 1313, '5fasfa', '2023-04-04', 'REQUEST', 21, 56, 77),
(21, 123, 'test', '2023-04-05', 'REQUEST', 20, 56, 75),
(22, 123, 'test', '2023-04-05', 'REQUEST', 20, 56, 76),
(23, 123, 'test', '2023-04-05', 'REQUEST', 20, 56, 78),
(24, 123, 'test', '2023-04-05', 'REQUEST', 20, 56, 77);

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
(5, 2, 11, 'CHAIRMAN'),
(9, 3, 12, 'CHAIRMAN'),
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
(24, 6, 10, 'BOARD'),
(31, 28, 14, 'CHAIRMAN'),
(33, 28, 14, 'CHAIRMAN'),
(34, 37, 20, 'CHAIRMAN'),
(35, 39, 20, 'CHAIRMAN'),
(36, 39, 21, 'BOARD'),
(37, 39, 22, 'BOARD'),
(38, 39, 23, 'BOARD'),
(75, 56, 20, 'CHAIRMAN'),
(76, 56, 21, 'BOARD'),
(77, 56, 23, 'BOARD'),
(78, 56, 22, 'BOARD'),
(79, 57, 20, 'CHAIRMAN'),
(80, 58, 20, 'CHAIRMAN');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_user_donate`
--

CREATE TABLE `campaign_user_donate` (
  `Id` int(11) NOT NULL,
  `Amount` float NOT NULL,
  `Status` enum('REQUEST','APPROVE','DENY') NOT NULL DEFAULT 'REQUEST',
  `campaign_money_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Timer` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `eSlip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign_user_donate`
--

INSERT INTO `campaign_user_donate` (`Id`, `Amount`, `Status`, `campaign_money_id`, `user_id`, `Timer`, `Date`, `eSlip`) VALUES
(1, 500, 'REQUEST', 1, 1, '', '2023-04-01', NULL),
(2, 123, 'APPROVE', 1, 16, '11:48', '2023-04-07', '1043543.png'),
(3, 12, 'APPROVE', 1, 20, '12:50', '2023-04-02', '061fc738d46ba9dd0476a124bd386790.jpg'),
(4, 1321340, 'REQUEST', 1, 19, '19:01', '2023-04-20', 'el-anime-sono-bisque-doll-wa-koi-wo-suru-estrena-su-segundo-video-promocional-y-confirma-su-fecha-de-estreno.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `object`
--

CREATE TABLE `object` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL,
  `campaign_object_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `object`
--

INSERT INTO `object` (`Id`, `Name`, `Amount`, `campaign_object_id`) VALUES
(1, 'Object_campagin_4_1', 41, 4),
(2, 'Object_campagin_5_1', 51, 5),
(3, 'Object_campagin_6_1', 61, 6),
(10, 'ขอให้ผ่าน', 1500, 39),
(21, 'fafaf', 145, 54),
(23, 'test2', 241, 56);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `Id` int(11) NOT NULL,
  `Timer` varchar(255) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` date DEFAULT current_timestamp(),
  `Image` varchar(255) DEFAULT NULL,
  `campaign_money_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`Id`, `Timer`, `Description`, `Date`, `Image`, `campaign_money_id`) VALUES
(1, '1', 'DNumber_1', '2023-03-30', NULL, 1),
(2, '2', 'DNumber_2', '2023-03-31', NULL, 1),
(3, '3', 'DNumber_3', '2023-04-01', NULL, 1),
(4, NULL, 'afafdaf', '2023-04-02', '061fc738d46ba9dd0476a124bd386790.jpg', 1),
(5, NULL, 'afafdaf', '2023-04-02', '061fc738d46ba9dd0476a124bd386790.jpg', 1),
(6, NULL, 'afafdaf', '2023-04-02', '061fc738d46ba9dd0476a124bd386790.jpg', 1),
(7, NULL, 'fsfsf', '2023-04-02', '061fc738d46ba9dd0476a124bd386790.jpg', 1),
(8, NULL, 'fafafafafa', '2023-04-02', '271949871_449585496836715_3786982377916749986_n.jpg', 48),
(9, NULL, 'fafafafafa', '2023-04-02', '271949871_449585496836715_3786982377916749986_n.jpg', 48),
(10, NULL, 'fafafafafa', '2023-04-02', '271949871_449585496836715_3786982377916749986_n.jpg', 48),
(11, NULL, 'dfasdfsf', '2023-04-02', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 37),
(12, NULL, 'dfasdfsf', '2023-04-02', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 37),
(13, NULL, 'dafaf', '2023-04-02', 'Kitagawa.Marin.full.3548609.jpg', 37),
(14, NULL, 'fasfa', '2023-04-02', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 37),
(15, NULL, 'asfafa', '2023-04-02', 'Kitagawa.Marin.full.png', 28),
(16, NULL, 'asfafa', '2023-04-02', 'Kitagawa.Marin.full.png', 28),
(17, NULL, 'ทดสอบ', '2023-04-03', '061fc738d46ba9dd0476a124bd386790.jpg', 1),
(18, NULL, 'ทดสอบ', '2023-04-03', '061fc738d46ba9dd0476a124bd386790.jpg', 1),
(19, NULL, 'ทดสอบ', '2023-04-03', '061fc738d46ba9dd0476a124bd386790.jpg', 1),
(20, NULL, 'ทดสอบ', '2023-04-03', '061fc738d46ba9dd0476a124bd386790.jpg', 1),
(21, NULL, '1231313', '2023-04-03', '271949871_449585496836715_3786982377916749986_n.jpg', 1),
(22, NULL, '1231313', '2023-04-03', '271949871_449585496836715_3786982377916749986_n.jpg', 1),
(23, NULL, '1231313', '2023-04-03', '271949871_449585496836715_3786982377916749986_n.jpg', 1),
(24, NULL, 'ทดสอบ4344', '2023-04-03', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 1),
(25, NULL, 'ทดสอบ4344', '2023-04-03', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 1),
(26, NULL, 'ทดสอบ4344', '2023-04-03', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 1),
(27, NULL, 'ทดสอบ4344', '2023-04-03', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 1),
(28, NULL, '1111', '2023-04-03', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 48),
(29, NULL, '1111', '2023-04-03', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 48),
(30, NULL, '1111', '2023-04-03', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 48),
(31, NULL, '4345', '2023-04-03', 'Kitagawa.Marin.full.3477458.jpg', 1),
(32, NULL, '123456', '2023-04-03', 'Kitagawa.Marin.full.3477458.jpg', 1),
(33, NULL, '123456', '2023-04-03', 'Kitagawa.Marin.full.3477458.jpg', 1),
(34, NULL, 'afafafa', '2023-04-03', 'Kitagawa.Marin.full.3548609.jpg', 1),
(35, NULL, 'ทดสอบระบบ', '2023-04-03', 'Sono.Bisque.Doll.wa.Koi.wo.Suru.full.2776526.jpg', 28),
(36, NULL, 'affffffffffffffffffffffff', '2023-04-03', 'pexels-eberhard-grossgasteiger-443446.jpg', 2),
(37, NULL, '1e1e1e1e', '2023-04-03', '271949871_449585496836715_3786982377916749986_n.jpg', 57);

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
(3, 'MONEY'),
(17, 'SYSTEMADMIN');

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
(2, 'verify', 'admin', 'verify@gmail.com', 'vaok2004', NULL, NULL, '$2y$10$6qZ3iPHCuqOBeoVkb0R60OSNNmiVchC1whlK.sHDanFg/0Mt4GdhG', 'NULL', 'STAFF', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(3, 'money', 'admin', 'money@gmail.com', 'money', NULL, NULL, '$2y$10$wy5JLP06S7OunixEfDWghOwFkf60hmf7Kk12KoMFsBkmWeiXZRfZa', 'NULL', 'STAFF', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(8, 'User_Test_1_Firstname', 'User_Test_1_Lastname', 'User_Test_1_Username', 'User_Test_1_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'NULL', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(9, 'User_Test_2_Firstname', 'User_Test_2_Lastname', 'User_Test_2_Username', 'User_Test_2_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'APPROVE', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(10, 'User_Test_3_Firstname', 'User_Test_3_Lastname', 'User_Test_3_Username', 'User_Test_3_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'APPROVE', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(11, 'User_Test_4_Firstname', 'User_Test_4_Lastname', 'User_Test_4_Username', 'User_Test_4_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'APPROVE', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(12, 'User_Test_5_Firstname', 'User_Test_5_Lastname', 'User_Test_5_Username', 'User_Test_5_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'APPROVE', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(13, 'User_Test_6_Firstname', 'User_Test_6_Lastname', 'User_Test_6_Username', 'User_Test_6_Username', NULL, NULL, '$2y$10$ffMVqEQQGNn0SUCsNefomOk3hEgQJnNMUlq9DlGMVLTItGdglTS6i', 'REQUEST', 'USER', NULL, NULL, NULL, '2023-03-09 04:32:09', '2023-03-09 04:32:09', 'user-thumb.jpg'),
(14, 'Chalermchai', 'Kamlungdach', 'chalermchaikm@gmail.com', 'chalermchaikm@gmail.com', NULL, NULL, '$2y$10$nFuUSoys//XIJMeAliGF6e6h7NiYxsgRQgWsdpyDKU/giDt8VwlVa', 'APPROVE', 'USER', '1234567891231', '0970794543', '11 adafafaf', '2023-03-30 01:12:14', '2023-03-30 01:12:14', 'user-thumb.jpg'),
(15, 'Chanakan', 'Srisarutiporn', 'srisarutiporn.cha@gmail.com', 'artzaza7', NULL, NULL, '$2y$10$/WGtjn6WvcsswCugU3MUFe.7BOUt/LD9MPUjUS3XnNonPxL46xr3y', 'APPROVE', 'USER', NULL, NULL, NULL, '2023-04-01 03:12:44', '2023-04-01 03:12:44', 'Chanakan.jpg'),
(16, 'asd', 'asd', 'peerawat.won@ku.th', 'vaok2005', NULL, NULL, '$2y$10$XOHZ0jMvvdiQakCg3Ac6d.U/K57lN86rdxiW1.WO0EOrMKr1pZh7y', 'NULL', 'USER', NULL, NULL, NULL, '2023-04-01 07:45:44', '2023-04-01 07:45:44', 'user-thumb.jpg'),
(17, 'bbbb', 'ccccc', 'bb@gmail.com', 'bb@gmail.com', NULL, NULL, '$2y$10$8RbfAVuEM4jVLWjffk.fs.aXnDGMfXbzZBPKGIoMI6IJ8Mt8Q93Pm', 'NULL', 'STAFF', NULL, NULL, NULL, '2023-04-01 10:59:09', '2023-04-01 10:59:09', 'user-thumb.jpg'),
(19, 'NotManager', 'NotManager', 'a@a.com', 'NotManager', NULL, NULL, '$2y$10$f79fZIXrlA90vXM4E3P4NujAIHud1hKILhUbZ2ym6KxOXMyyuDjXO', 'NULL', 'USER', NULL, NULL, NULL, '2023-04-02 02:22:07', '2023-04-02 02:22:07', 'user-thumb.jpg'),
(20, 'Bonly', 'SutCheng', 'bon@bon.com', 'Bonly', NULL, NULL, '$2y$10$Q7evRb8gmnvuAsrhSv4Gn.yweTU58Xf0s5OUxBILXrqt5OmEF1r4W', 'APPROVE', 'USER', '1234567891231', '0970794543', '11 ถนนเฉลิมพระเกียรติ ร.9 ซอย 48 เเยก 6 เเขวงดอกไม้ เขตประเวศ​  จังหวัดกรุงเทพมหานคร 10250', '2023-04-02 02:38:58', '2023-04-02 02:38:58', 'Bonly.png'),
(21, 'm1', 'm1', 'm1@gmail.com', 'm1', NULL, NULL, '$2y$10$.fU6/hcoO6.up4Anbl.DYeDew/euXno8yAjpxi0bKqADNgVeyQweu', 'APPROVE', 'USER', '1234567891231', '0970794543', 'abcd', '2023-04-02 03:30:12', '2023-04-02 03:30:12', 'user-thumb.jpg'),
(22, 'm2', 'm2', 'm2@gmail.com', 'm2', NULL, NULL, '$2y$10$HCR.Kyt3jqvrT7fsjr1c.OiBOcoOOzcAOVoOjsKjUMP7NTZBxPxu6', 'APPROVE', 'USER', '1234567891236', '0970794543', 'abcd', '2023-04-02 03:30:54', '2023-04-02 03:30:54', 'user-thumb.jpg'),
(23, 'm3', 'm3', 'm3@gmail.com', 'm3', NULL, NULL, '$2y$10$DZXZ8nNNFSGcfmmO6hfRnetvFOt/jgTYRlYeFfYqeCdhj0R17bwBu', 'APPROVE', 'USER', '1234567891236', '0970794543', 'abcd', '2023-04-02 03:31:42', '2023-04-02 03:31:42', 'user-thumb.jpg');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `campaign_object_request`
--
ALTER TABLE `campaign_object_request`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `campaign_project_user`
--
ALTER TABLE `campaign_project_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `campaign_user_donate`
--
ALTER TABLE `campaign_user_donate`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `object`
--
ALTER TABLE `object`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
