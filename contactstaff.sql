-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 10:56 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contactemployee (1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactemployee`
--

CREATE TABLE IF NOT EXISTS `contactemployee` (
  `Serial no.` varchar(3) NOT NULL,
  `Driverid` varchar(4) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Post.` varchar(30) NOT NULL,
  `Mobile no.` varchar(15) NOT NULL,
  PRIMARY KEY (`Driverid`),
  UNIQUE KEY `Driverid` (`Driverid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactemployee`
--

INSERT INTO `contactemployee` (`Serial no.`, `Driverid`, `Name`, `Post.`, `Mobile no.`) VALUES
('17', 'MAA', 'Md. Asad Ali', 'Automechanix helper', '01843867060'),
('21', 'MABO', 'Md. Abdul Oadud', 'Driver', '01192039479'),
('14', 'MABS', 'Md. Abdus Salam', 'Helper', '01827500092'),
('09', 'MAH', 'Md. Abdul Halim', 'Senior driver(GRADE-A)', '01713228597'),
('08', 'MAJ', 'MD. Abdul Jabber', 'Senior driver(GRADE-A)', '01745317231'),
('06', 'MAK', 'Md. Abdul Kuddus', 'Senior driver(GRADE-A)', '01195116283'),
('23', 'MAKH', 'Md. Akram Hossen', 'Helper', '01923543202'),
('10', 'MAM', 'Md. Abdul Mannan', 'Senior driver(GRADE-B)', '01191014856'),
('19', 'MAO', 'Md. Abdul Ohab', 'Helper', '01948875276'),
('07', 'MAS', 'Md. Abdul Seikh', 'Senior driver(GRADE-A)', '01195116187'),
('01', 'MFA', 'Md. Forman Ali', 'Assistant Director (Transport)', '01995116206'),
('02', 'MHA', 'Md. Hasem Ali', 'Extra Requisition Officer', '01687428242'),
('13', 'MHR', 'Md. Habibur Rahman', 'Automechanix', '01716303822'),
('04', 'MIH', 'Md. Ismail Hosen', 'Senior driver(GRADE-A)', '01191556752'),
('18', 'MJR', 'MD. Jazlur Rahman', 'Driver', '01918755261'),
('03', 'MKH', 'Md. Kamrul Hasan', 'Data processor', '01687744945'),
('11', 'MMA', 'Md. Monab Ali', 'Senior driver(GRADE-B)', '01911869263'),
('15', 'MRK', 'Md. Rezaul Karim', 'Helper', '01737578422'),
('16', 'MSA', 'Md. Shahin Ali', 'Driver', '01861877252'),
('12', 'MSI', 'Md. Shohidul Islam', 'Senior driver(GRADE-C)', '01195116210'),
('22', 'MSII', 'Md. Sirazul Islam', 'Driver', '01717800051'),
('05', 'MSU', 'Md. Siraz Uddin', 'Senior Driver(GRADE-A)', '01713228572'),
('20', 'SSKG', 'Shree Sunil Kumer ghosh', 'Driver', '01717920352'),
('24', 'VB', 'V.C.Banglo', 'Intercam Telephone', '176');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
