-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 08:11 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_desig` varchar(50) NOT NULL,
  `dept_head` varchar(50) NOT NULL,
  `head_desig` varchar(20) NOT NULL,
  `reserve_date_time` datetime NOT NULL,
  `return_date_time` datetime NOT NULL,
  `destination` varchar(150) NOT NULL,
  `depart_from` varchar(150) NOT NULL,
  `reason` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `vehicle_id` int(10) NOT NULL,
  `driver` varchar(30) NOT NULL,
  `helper` varchar(50) NOT NULL,
  `assigned_datetime` datetime NOT NULL,
  `approver` int(11) NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vehicle_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_id`, `user_id`, `user_desig`, `dept_head`, `head_desig`, `reserve_date_time`, `return_date_time`, `destination`, `depart_from`, `reason`, `status`, `vehicle_id`, `driver`, `helper`, `assigned_datetime`, `approver`, `submitted_on`, `vehicle_type`) VALUES
(2, 1, '', 'abcd', 'prof', '2017-04-03 09:00:00', '2017-04-03 18:00:00', 'efg', 'ruet', 'dasfas', 'approved', 1, 'fasdfsadf', 'asdfasdfa', '2017-04-04 12:59:00', 0, '2017-04-03 23:39:15', ''),
(3, 37, '', 'sdfasdf', 'sadfdsaf', '2017-04-07 12:59:00', '2017-05-07 23:59:00', 'fsadfasdf', 'sdfasdfas', 'fasdfads', 'approved', 1, 'fasdfas', 'sadf', '2017-04-07 12:58:00', 0, '2017-04-07 21:43:35', ''),
(4, 37, '', 'sdfasdf', 'sadfdsaf', '2017-04-07 12:59:00', '2017-05-07 23:59:00', 'fsadfasdf', 'sdfasdfas', 'fasdfads', 'approved', 1, 'sdfsdf', 'sdfsadf', '2017-04-07 01:00:00', 0, '2017-04-07 21:47:59', ''),
(5, 42, '', 'sadfsaf', 'sfdasdf', '2017-04-18 12:58:00', '2017-04-19 23:59:00', 'dsdfasf', 'sdafasdf', 'sfasdf', 'vehicle-assigned', 1, 'sfasdf', 'asDfasdf', '2017-04-18 00:59:00', 0, '2017-04-18 00:39:19', ''),
(6, 42, '', 'fasdfasdf', 'asdfasdf', '2017-04-18 12:59:00', '2017-04-19 12:59:00', 'fasfdasfd', 'fasfasdf', 'fsadasdf', 'vehicle-assigned', 1, '', '', '2017-12-31 12:59:00', 0, '2017-04-18 00:49:12', ''),
(7, 42, '', 'sadfsaf', 'asdfsaf', '2017-04-17 12:58:00', '2017-04-18 12:58:00', 'sdfsaf', 'fsadasdf', 'fsadf', 'pending', 0, '', '', '0000-00-00 00:00:00', 0, '2017-04-18 01:12:22', 'bus'),
(8, 42, '', 'fasdf', 'sadfas', '2017-04-18 12:59:00', '2017-12-31 12:59:00', 'sdfsa', 'fsadf', 'asdfa', 'pending', 0, '', '', '0000-00-00 00:00:00', 0, '2017-04-18 01:24:47', 'bus'),
(9, 39, '', 'head', 'professor', '2017-04-20 12:01:00', '2017-04-21 16:00:00', 'dhaka', 'ruet', 'for treatment purpose', 'vehicle-assigned', 9, 'abc', 'abcd', '2017-04-20 12:01:00', 0, '2017-04-20 09:36:28', 'AMBULANCE'),
(10, 37, 'lecturer', 'abaaa', 'professor', '2017-04-21 13:59:00', '2017-04-22 12:59:00', 'dinajpur', 'ruet', 'official', 'rejected', 0, '', '', '0000-00-00 00:00:00', 0, '2017-04-20 11:12:33', 'MINI BUS(TEACHER)'),
(11, 37, '', 'Md.Nazrul Islam', 'professor', '2017-04-23 08:00:00', '2017-04-23 20:00:00', 'bogura', 'ruet', 'personal', 'approved', 0, '', '', '0000-00-00 00:00:00', 0, '2017-04-23 00:09:34', 'bus');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(11) NOT NULL,
  `bus_type` varchar(100) NOT NULL,
  `vehicle_no` varchar(30) NOT NULL,
  `driver_id` varchar(50) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `helper_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `bus_type`, `vehicle_no`, `driver_id`, `driver_name`, `helper_name`) VALUES
(3, 'CAR', 'DHAKA.-MT.-KHA-11-9490', '0', '', ''),
(4, 'CAR', 'RAJSHAHI-CA-5817', '0', '', ''),
(5, 'MICRO', 'RAJ-MT-CHA-51-0041', '0', '', ''),
(6, 'MICRO', 'RAJ-MT-CHA-51-0035', '0', '', ''),
(7, 'MICRO', 'RAJ-MT-CHA-51-0032', '0', '', ''),
(8, 'PICKUP', 'RAJ-MT-THA-11-0095', '0', '', ''),
(9, 'AMBULANCE', 'RAJ.-MT.-CHAA 771-0014', '0', '', ''),
(10, 'MICRO', 'DHA.-MT.-CHA-51-2806', '0', '', ''),
(11, 'MICRO', 'DHAKA-MT-CHA 53-5243', '0', '', ''),
(12, 'MINI BUS(TEACHER)', 'RAJ-MT-JHA-11-0005', '0', '', ''),
(13, 'MINIBUS(TEACHER)', 'RAJ.-MT.-JHA-22-0006', '0', '', ''),
(14, 'BUS', 'RAJ-MT-SA-11-0006', '0', '', ''),
(15, 'BUS', 'RAJ.-MT.-SHA 11-0013', 'MSU', 'Md. Siraz Uddin', 'Md. Mamun'),
(16, 'BUS', 'RAJ-MT-SA-11-0014', 'RA', 'Raju Ahmed', 'Md. Rezaul Karim'),
(17, 'BUS', 'DHA-MT-SA--11-0058', '0', '', ''),
(18, 'BUS', 'RAJ.-MT.-CHA 08-0002', '0', '', ''),
(19, 'BUS', 'RAJSHAHI.-BA-1779', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard User', ''),
(2, 'Faculty', '{\r\n"faculty": 1\r\n}'),
(3, 'Administrator', '{\r\n"admin": 1,\r\n"moderator" : 1\r\n}'),
(4, 'Branch Officer', '{\r\n"branch_officer":1\r\n}'),
(5, 'Dept head', '{\r\n"dept_head":1,\r\n"faculty":1\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `joined` datetime NOT NULL,
  `group` int(11) NOT NULL,
  `roll` int(11) DEFAULT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `department` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `salt`, `joined`, `group`, `roll`, `mobile`, `email`, `address`, `department`) VALUES
(33, 'menoncse', 'mahmud', '144b30ce9706dbac85fa9509326c9111d1c75d7c8d7c2dafdf5810eaf7ce7e08', '€ý¸ÅhA»H¬±<i6WãLYLPýÕRœ', '2017-04-04 10:53:52', 3, 133065, 555, 'menon1673@gmail.com', 'rajshahi', NULL),
(34, 'mmmm', 'nnnnn', '9b667f7c4ff63960b7810598af807f37774abf42977078e92e604920bcb4cea8', 'îKð=Ò¨ß0¾n4Ð«”ñµ-ÇŠOöJÑ1¥Àç®ç', '2017-04-04 11:00:49', 1, 55555, 555555, 'mmm6754@gmail.com', 'rrrr', NULL),
(35, 'vvvv', 'vvvvv', 'e2dc393249d70b7cbaf7531a4e5413dab8ac22571333e897ec39da262e1bf920', 'ý¬>cqé¸÷ÈÅÃ“¨sæiK¸ËAiœwËAà', '2017-04-04 11:12:44', 2, NULL, 555555, 'vvvv@gmail.com', 'sssss', 'CSE'),
(36, 'ashkl', 'ashk', 'c8cb8c1905c983d29670eeb2496c790280dce11489d2e4cd966407a68f5b3743', '†Ù´æxáAAyÒÄ!x°ûv)a\\åØIƒÐ$”b', '2017-04-07 17:02:42', 1, 19287372, 973749, 'askl@gmail.com', 'gerhi', NULL),
(37, 'asfi', 'asfi.fardous', 'b1c1c21d781d0d7bc81dfd7fc7c1e82fc4389ce8aa9b37594fa4cc422d8833b7', 'Àöï”ßê\\ØßïkS˜_¤U¼(FÜ>„n’ÏØ$ñV{', '2017-04-07 19:13:07', 2, NULL, 172314566, 'asfi.ruet2014@gmail.com', 'rajshahi', 'cse'),
(38, 'forhad_ovi', 'ovi', 'ec1e27d70440c3f5b0fbd90f6e3d728a1366688311cfcb468b764e43520bad36', '[ýªƒ³,4Õc[þåRûön@É1ß•o½uAf¹', '2017-04-09 18:19:05', 2, NULL, 176354827, 'ovi@gmail.com', 'dinajpur', 'cse'),
(39, 'asfi_fardous', 'asfiiiiii', '8a9851ef6db50e746d71ccf5aaff2e56582c4c1af015a3e93dcbedae261a90fe', '«àç%Z4Ùt@‡Œ”¶3OÞ!$Ö–;NÃícIüs@S', '2017-04-12 17:39:45', 1, 133119, 182737571, 'asfi.ruet2014@gmail.com', 'rajshahi', NULL),
(40, 'sfdasdf', 'fgasfas', 'f93cc434701f5ede553dea9cf366a0f7d199ab191abfdcfe52fde6a73c34c3e5', '–úšèÓ0%ÃÓÚXÝjá¯ˆéÞøhw.vû‹ñ', '2017-04-17 18:00:58', 1, 324, 2147483647, 'a@b.c', 'fgsdfasdf', NULL),
(42, 'aaa', 'aaa', 'e2743230a87f77e66348ca12b360a0c45e424cd50efe85f297a8eacaeb3dbe59', '”HT½Ë«	rnX{Vð@	Wß‰K„Õ…Èp]™ Ì', '2017-04-17 18:16:38', 1, 12312, 3123123, 'a@b.c', 'sadfsdfas', NULL),
(43, 'head', 'head', 'eb7aa3c986c6278b6d8f46c0721de396df6b0d74ebe9eae60f9ee684266e417e', 'ÛAË¯LÏ@ôB%ÏÜÒ«Á¨çâ4ó‹£KG)w§', '2017-04-17 18:19:37', 5, NULL, 3242342, 'a@b.c', 'sfadsadfas', 'sfas'),
(44, 'bofficer', 'bofficer', '3226d6c406443d7905448fd8ebe3b0acd5e3d413fc417a58f38e2df2e9197631', ']¿Ò_DòWéŽåÌsáîë$ùà_©]à´Õ¡)š6', '2017-04-17 18:34:41', 4, NULL, 1646463, 'a@b.c', 'sdfsdf', 'fsdfa'),
(45, 'head1', 'head1', 'a6beb8281d0ce66d88303cf86fd145237d9885280253eed53fed0b4ca517e493', '8Žÿ.šÆnØZÀÕôiJø@HKˆã¢(C	ÆØpóm', '2017-04-18 05:01:12', 2, NULL, 1765443335, 'head1@gmail.com', 'rajshahi', 'cse'),
(46, 'Nazrul Islam', 'Md.Nazrul Islam', 'b6694ee3aaeee650a9971885a3dd20c583b9d53610d20911564e9fb872f186c2', 'lY˜ËKnGÔ''YÍqÎp.ô/{lí&G~V€³Á', '2017-04-22 20:11:15', 5, NULL, 17234567, 'Nazrulislam@gmail.com', '', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_session`
--

INSERT INTO `users_session` (`id`, `user_id`, `hash`) VALUES
(0, 26, '98d968a378c6a6cbb27c6bff4f5d120eea3c625e974a49e2b2810e003ccbc6e8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
