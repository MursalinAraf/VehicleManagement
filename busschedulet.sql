-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 05:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transportsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `timeschedule`
--

CREATE TABLE `timeschedule` (
  `SI` int(11) NOT NULL,
  `Day` varchar(12) NOT NULL,
  `Source` varchar(30) NOT NULL,
  `SourceLeave` varchar(10) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `DestinationLeave` varchar(10) NOT NULL,
  `VechileNo` varchar(12) NOT NULL,
  `DriverName` varchar(30) NOT NULL,
  `DriverID` varchar(10) NOT NULL,
  `HelperName` varchar(20) NOT NULL,
  `PassengerType` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeschedule`
--

INSERT INTO `timeschedule` (`SI`, `Day`, `Source`, `SourceLeave`, `Destination`, `DestinationLeave`, `VechileNo`, `DriverName`, `DriverID`, `HelperName`, `PassengerType`) VALUES
(1, 'Saturday', 'RUET Administrator Building', '7.00 A.M.', 'Rajshahi Court', '7.30 A.M.', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(2, 'Sunday', 'RUET Administrator Building', '7.00 A.M.', 'Rajshahi Court', '7.30 A.M.', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(3, 'Monday', 'RUET Administrator Building', '7.00 A.M.', 'Rajshahi Court', '7.30 A.M.', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(4, 'Tuesday', 'RUET Administrator Building', '7.00 A.M.', 'Rajshahi Court', '7.30 A.M.', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(5, 'Wednesday', 'RUET Administrator Building', '7.00 A.M.', 'Rajshahi Court', '7.30 A.M.', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(6, 'Saturday', 'RUET Administrator Building', '8.40 A.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Staff'),
(7, 'Sunday', 'RUET Administrator Building', '8.40 A.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Staff'),
(8, 'Monday', 'RUET Administrator Building', '8.40 A.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Staff'),
(9, 'Tuesday', 'RUET Administrator Building', '8.40 A.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Staff'),
(10, 'Wednesday', 'RUET Administrator Building', '8.40 A.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Staff'),
(11, 'Satuday', 'RUET Administrator Building', '12.40 P.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(12, 'Sunday', 'RUET Administrator Building', '12.40 P.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(13, 'Monday', 'RUET Administrator Building', '12.40 P.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(14, 'Tuesday', 'RUET Administrator Building', '12.40 P.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(15, 'Wednesday', 'RUET Administrator Building', '12.40 P.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(16, 'Satuday', 'RUET Administrator Building', '1.30 P.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(17, 'Sunday', 'RUET Administrator Building', '1.30 P.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(18, 'Monday', 'RUET Administrator Building', '1.30 P.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(19, 'Tuesday', 'RUET Administrator Building', '1.30 P.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun', 'Student'),
(20, 'Wednesday', 'RUET Administrator BUilding', '1.30 P.M.', 'Rajshahi Court', 'none', '110013', 'Md. Siraz Uddin', 'MSU', 'Md. Mamun Ali', 'Student'),
(21, 'Satuday', 'RUET Administrator Building', '7.00 A.M.', 'Baya', '7.30 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(22, 'Sunday', 'RUET Administrator Building', '7.00 A.M.', 'Baya', '7.30 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(23, 'Monday', 'RUET Administrator Building', '7.00 A.M.', 'Baya', '7.30 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(24, 'Tuesday', 'RUET Administrator Building', '7.00 A.M.', 'Baya', '7.30 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(25, 'Wednesday', 'RUET Administrator BUilding', '7.00 A.M.', 'Baya', '7.30 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(26, 'Satuday', 'RUET Administrator Building', '7.40 A.M.', 'RUET LH', '7.50 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Female Student'),
(27, 'Sunday', 'RUET Administrator Building', '7.40 A.M.', 'RUET LH', '7.50 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Female Student'),
(28, 'Monday', 'RUET Administrator Building', '7.40 A.M.', 'RUET LH', '7.50 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Female Student'),
(29, 'Tuesday', 'RUET Administrator BUilding', '7.40 A.M.', 'RUET LH', '7.50 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Female Student'),
(30, 'Wednesday', 'RUET Administrator BUilding', '7.40 A.M.', 'RUET LH', '7.50 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Female Student'),
(31, 'Saturday', 'RUET Administrator BUilding', '8.20 A.M.', 'Rajshahi Court', '8.40 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(32, 'Sunday', 'RUET Administrator Building', '8.20 A.M.', 'Rajshahi Court', '8.40 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(33, 'Monday', 'RUET Administrator Building', '8.20 A.M.', 'Rajshahi Court', '8.40 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(34, 'Tuesday', 'RUET Administrator Building', '8.20 A.M.', 'Rajshahi Court', '8.40 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(35, 'Wednesday', 'RUET Administrator Building', '8.20 A.M.', 'Rajshahi Court', '8.40 A.M.', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(36, 'Saturday', 'RUET Administrator Building', '1.30 P.M.', 'Baya', 'none', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(37, 'Sunday', 'RUET Administrator Building', '1.30 P.M.', 'Baya', 'none', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(38, 'Monday', 'RUET Administrator Building', '1.30 P.M.', 'Baya', 'none', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(39, 'Tuesday', 'RUET Administrator Building', '1.30 P.M.', 'Baya', 'none', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(40, 'Wednesday', 'RUET Administrator Building', '1.30 P.M.', 'Baya', 'none', '110014', 'Raju Ahmed', 'RA', 'Md. Rezaul Karim', 'Student'),
(41, 'Saturday', 'RUET Administrator Building', '7.00 A.M.', 'Rajshahi Court', '7.30 A.M.', '110016', 'Md. Monab Ali', 'MMA', 'Md. Abdus Salam', 'Student'),
(42, 'Sunday', 'RUET Administrator Building', '7.00 A.M.', 'Rajshahi Court', '7.30 A.M.', '110016', 'Md. Monab Ali', 'MMA', 'Md. Abdus Salam', 'Student'),
(43, 'Monday', 'RUET Administrator Building', '7.00 A.M.', 'Rajshahi Court', '7.30 A.M.', '110016', 'Md. Monab Ali', 'MMA', 'Md. Abdus Salam', 'Student'),
(44, 'Tuesday', 'RUET Administrator Building', '7.00 A.M.', 'Rajshahi Court', '7.30 A.M.', '110016', 'Md. Monab Ali', 'MMA', 'Md. Abdus Salam', 'Student'),
(45, 'Wednesday', 'RUET Administrator Building', '7.00 A.M.', 'Rajshahi Court', '7.30 A.M.', '110016', 'Md. Monab Ali', 'MMA', 'Md. Abdus Salam', 'Student'),
(46, 'Saturday', 'RUET Administrator Building', '8.15 A.M.', 'Katakhali', '8.40 A.M.', '110016', 'Md. Monab Ali', 'MMA', 'Md. Abdus Salam', 'Staff'),
(47, 'Sunday', 'RUET Administrator Building', '8.15 A.M.', 'Katakhali', '8.40 A.M.', '110016', 'Md. Monab Ali', 'MMA', 'Md. Abdus Salam', 'Staff'),
(48, 'Monday', 'RUET Administrator Building', '8.15 A.M.', 'Katakhali', '8.40 A.M.', '110016', 'Md. Monab Ali', 'MMA', 'Md. Abdus Salam', 'Staff'),
(49, 'Tuesday', 'RUET Administrator Building', '8.15 A.M.', 'Katakhali', '8.40 A.M.', '110016', 'Md. Monab Ali', 'MMA', 'Md. Abdus Salam', 'Staff'),
(50, 'Wednesday', 'RUET Administrator Building', '8.15 A.M.', 'Katakhali', '8.40 A.M.', '110016', 'Md. Monab Ali', 'MMA', 'Md. Abdus Salam', 'Staff'),
(51, 'Saturday', 'RUET Administrator Building', '1.30 P.M.', 'RUET Quater', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Staff'),
(52, 'Sunday', 'RUET Administrator Building', '1.30 P.M.', 'RUET Quater', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Staff'),
(53, 'Monday', 'RUET Administrator Building', '1.30 P.M.', 'RUET Quater', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Staff'),
(54, 'Tuesday', 'RUET Administrator Building', '1.30 P.M.', 'RUET Quater', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Staff'),
(55, 'Wednesday', 'RUET Administrator Building', '1.30 P.M.', 'RUET Quater', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Staff'),
(56, 'Saturday', 'RUET Administrator Building', '3.00 P.M.', 'RUET Quater', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Staff'),
(57, 'Sunday', 'RUET Administrator Building', '3.00 P.M.', 'RUET Quater', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Staff'),
(58, 'Monday', 'RUET Administrator Building', '3.00 P.M.', 'RUET Quater', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Staff'),
(59, 'Tuesday', 'RUET Administrator Building', '3.00 P.M.', 'RUET Quater', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Staff'),
(60, 'Wednesday', 'RUET Administrator Building', '3.00 P.M.', 'RUET Quater', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Staff'),
(61, 'Saturday', 'RUET Administrator Building', '4.00 P.M.', 'C AND B , Vodra', '5.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(62, 'Sunday', 'RUET Administrator Building', '4.00 P.M.', 'C AND B , Vodra', '5.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(63, 'Monday', 'RUET Administrator Building', '4.00 P.M.', 'C AND B , Vodra', '5.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(64, 'Tuesday', 'RUET Administrator Building', '4.00 P.M.', 'C AND B , Vodra', '5.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(65, 'Wednesday', 'RUET Administrator Building', '4.00 P.M.', 'C AND B , Vodra', '5.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(66, 'Saturday', 'RUET Administrator Building', '5.15 P.M.', 'C AND B , Vodra', '6.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(67, 'Sunday', 'RUET Administrator Building', '5.15 P.M.', 'C AND B , Vodra', '6.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(68, 'Monday', 'RUET Administrator Building', '5.15 P.M.', 'C AND B , Vodra', '6.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(69, 'Tuesday', 'RUET Administrator Building', '5.15 P.M.', 'C AND B , Vodra', '6.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(70, 'Wednesday', 'RUET Administrator Building', '5.15 P.M.', 'C AND B , Vodra', '6.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(71, 'Saturday', 'RUET Administrator Building', '7.15 P.M.', 'C AND B , Vodra', '8.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(72, 'Sunday', 'RUET Administrator Building', '7.15 P.M.', 'C AND B , Vodra', '8.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(73, 'Monday', 'RUET Administrator Building', '7.15 P.M.', 'C AND B , Vodra', '8.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(74, 'Tuesday', 'RUET Administrator Building', '7.15 P.M.', 'C AND B , Vodra', '8.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(75, 'Wednesday', 'RUET Administrator Building', '7.15 P.M.', 'C AND B , Vodra', '8.00 P.M.', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Shohidul Islam', 'Student'),
(76, 'Saturday', 'RUET Administrator Building', '5.10 P.M.', 'Court', '6.00 P.M.', '110058', 'Md. Shahin Ali', 'MSA', 'Md. Ohab Ali', 'Staff'),
(77, 'Sunday', 'RUET Administrator Building', '5.10 P.M.', 'Court', '6.00 P.M.', '110058', 'Md. Shahin Ali', 'MSA', 'Md. Ohab Ali', 'Staff'),
(78, 'Monday', 'RUET Administrator Building', '5.10 P.M.', 'Court', '6.00 P.M.', '110058', 'Md. Shahin Ali', 'MSA', 'Md. Ohab Ali', 'Staff'),
(79, 'Tuesday', 'RUET Administrator Building', '5.10 P.M.', 'Court', '6.00 P.M.', '110058', 'Md. Shahin Ali', 'MSA', 'Md. Ohab Ali', 'Staff'),
(80, 'Wednesday', 'RUET Administrator Building', '5.10 P.M.', 'Court', '6.00 P.M.', '110058', 'Md. Shahin Ali', 'MSA', 'Md. Ohab Ali', 'Staff'),
(81, 'Saturday', 'RUET Administrator Building', '5.10 P.M.', 'KataKhali', '6.00 P.M.', '110006', 'Md. Abdul Jabber', 'MAJ', 'Md. Akram', 'Staff'),
(82, 'Sunday', 'RUET Administrator Building', '5.10 P.M.', 'katakhali', '6.00 P.M.', '110006', 'Md. Abdul Jabber', 'MAJ', 'Md. Akram', 'Staff'),
(83, 'Wednesday', 'RUET Administrator Building', '5.10 P.M.', 'katakhali', '6.00 P.M.', '110006', 'Md. Abdul Jabber', 'MAJ', 'Md. Akram', 'Staff'),
(84, 'Thursday', 'RUET Quater', '9.00 A.M.', 'Shaheb Bazer', 'none', '080002', 'Md. Sirazul Islam', 'MSI', 'none', 'Staff'),
(85, 'Thrusday', 'RUET Quater', '2.00 P.M.', 'Shaheb Bazer', 'none', '080002', 'Md. Sirazul Islam', 'MSI', 'none', 'Staff'),
(86, 'Monday', 'RUET Quater', '3.00 P.M.', 'Shaheb Bazer', 'none', '080002', 'Md. Sirazul Islam', 'MSI', 'none', 'Staff'),
(87, 'Monday', 'RUET Quater', '6.00 P.M.', 'Shaheb Bazer', 'none', '080002', 'Md. Sirazul Islam', 'MSI', 'none', 'Staff'),
(88, 'Tuesday', 'RUET Quater', '3.00 P.M.', 'Shaheb Bazer', 'none', '080002', 'Md. Sirazul Islam', 'MSI', 'none', 'Staff'),
(89, 'Tuesday', 'RUET Quater', '6.00 P.M.', 'Shaheb Bazer', 'none', '080002', 'Md. Sirazul Islam', 'MSI', 'none', 'Staff'),
(90, 'Thrusday', 'RUET Administrator Building', '5.10 P.M.', 'Katakhali', '6.00 P.M.', '080002', 'Md. Sirazul Islam', 'MSI', 'none', 'Staff'),
(91, 'Monday', 'RUET Administrator Building', '5.10 P.M.', 'katakhali', '6.00 P.M.', '080002', 'Md. Sirazul Islam', 'MSI', 'none', 'Staff'),
(92, 'Tuesday', 'RUET Administrator Building', '5.10 P.M.', 'Katakhali', '6.00 P.M.', '080002', 'Md. Sirazul Islam', 'MSI', 'none', 'Staff'),
(93, 'Thrusday', 'RUET Administrator Building', '4.00 P.M.', 'C AND B, Vodra', 'none', '1779', 'Md. Jazlur Rahman', 'MJR', 'Md. Akram', 'Student'),
(94, 'Saturday', 'RUET Administrator Building', '7.40 A.M.', 'RUET Quater 217 room', '7.50 A.M.', '110005', 'Md. Sirzaul Islam', 'MSI', 'none', 'Teacher'),
(95, 'Sunday', 'RUET Administrator Building', '7.40 A.M.', 'RUET Quater 217 room', '7.50 A.M.', '110005', 'Md. Sirazul Islam', 'MSI', 'none ', 'Teacher'),
(96, 'Monday', 'RUET Administrator Building', '7.40 A.M.', 'RUET Quater 217 room', '7.50 A.M.', '110006', 'Sree Sunil Kumer Gosh', 'SSKG', 'none', 'Teacher'),
(97, 'Tuesday', 'RUET Administrator Building', '7.40 A.M.', 'RUET Quater 217 room', '7.50 A.M.', '110006', 'Sree Sunil Kumer Gosh', 'SSKG', 'none ', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timeschedule`
--
ALTER TABLE `timeschedule`
  ADD PRIMARY KEY (`SI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
