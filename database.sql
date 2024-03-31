-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 10:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `uname` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `birth` varchar(15) NOT NULL,
  `age` varchar(15) NOT NULL,
  `past` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`uname`, `name`, `birth`, `age`, `past`) VALUES
('Suchi', 'krishna', '2024-03-06', '4', 'none'),
('Suchi', 'hhv', '2024-03-18', '19', 'none'),
('Xyz', 'lyx', '2024-03-07', '5', 'none'),
('Suchi', 'hhv', '2024-02-28', '4', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `childdetails`
--
-- Error reading structure for table database.childdetails: #1932 - Table &#039;database.childdetails&#039; doesn&#039;t exist in engine
-- Error reading data for table database.childdetails: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `database`.`childdetails`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `database1`
--

CREATE TABLE `database1` (
  `uname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `database1`
--

INSERT INTO `database1` (`uname`, `lname`, `Gender`, `city`, `birthdate`, `utype`, `password`, `email`, `status`) VALUES
('demo', 'patel', 'Male', 'Pune', '2024-03-16', 'Parent', '123', 'shahdhruv318@gmail.com', 1),
('Dhruv', 'Shah', 'Male', 'Pune', '2024-03-21', 'Admin', 'Dhru 123', '', 0),
('Het', 'patel', 'Male', 'Mumbai', '2024-03-08', 'Parent', 'het123', 'hetbpatel203@gmail.com', 1),
('Mahek', 'Shah', 'Female', 'Haryana', '2024-03-08', 'Parent', 'mahek12', 'ds2941293@gmail.com', 1),
('Sandeep', 'swain', 'Male', 'Pune', '2024-03-01', 'Parent', 'sandeep', 'yellow06jacket@gmail.com', 1),
('sneh', 'ratanpara', 'Male', 'Pune', '2024-03-09', 'Parent', '123456', '22dcs105@charusat.edu.in', 1),
('Suchi', 'vadgama', 'Female', 'Pune', '2024-03-14', 'Parent', 'suchi123', '', 0),
('Xyz', 'x', 'Male', 'Pune', '2024-03-20', 'Parent', 'dhruv12', '', 0),
('Yash', 'joshi', 'Male', 'Punjab', '2024-03-14', 'Parent', 'yash123', 'joshiyash710@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_otps`
--

CREATE TABLE `mobile_otps` (
  `verified` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Verified, 0=Not verified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `First` varchar(10) NOT NULL,
  `Last` varchar(10) NOT NULL,
  `Vaccine` varchar(60) NOT NULL,
  `date` varchar(10) NOT NULL,
  `book` varchar(10) NOT NULL,
  `status1` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`First`, `Last`, `Vaccine`, `date`, `book`, `status1`, `email`) VALUES
('Dhruv', 'Shag', 'weee', '2024-03-21', 'SWINE FLU', 0, ''),
('zeel', '33dwed@gma', 'weee', '2024-03-22', 'SWINE FLU', 0, 'Shag'),
('Dhruv', 'shah', 'sas', '2024-03-27', 'SWINE FLU', 0, 'shahdhruv318@gmail.c'),
('Dhruv', 'shah', 'weee', '2024-03-30', 'SWINE FLU', 0, 'shahdhruv318@gmail.c'),
('Dhruv', 'shah', 'weee', '2024-03-30', 'SWINE FLU', 0, 'shahdhruv318@gmail.c'),
('Dhruv', 'shah', 'weee', '2024-03-23', 'SWINE FLU', 0, 'shahdhruv318@gmail.c'),
('Dhruv', 'shah', 'none', '2024-03-21', 'SWINE FLU', 0, 'yellow06jacket@gmail'),
('Dhruv', 'shah', 'sas', '2024-03-21', 'SWINE FLU', 0, 'shahdhruv318@gmail.c'),
('HEt', 'patel', 'none', '2024-04-04', 'SWINE FLU', 0, 'hetbpatel203@gmail.c'),
('Dhruv', 'Shag', 'weee', '2024-03-21', 'SWINE FLU', 0, 'shahdhruv318@gmail.c'),
('Dhruv', 'Shag', 'sas', '2024-03-20', 'SWINE FLU', 0, 'shahdhruv318@gmail.c'),
('HEt', 'Shag', 'none', '2024-03-16', 'SWINE FLU', 0, 'hetbpatel203@gmail.c'),
('Sudarshan', 'Ratanpara', 'none', '2024-03-19', 'SWINE FLU', 1, 'ds2941293@gmail.com'),
('Isha', 'Joshi', 'none', '2024-03-15', 'POLIO', 0, 'joshiyash710@gmail.c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD KEY `uname` (`uname`);

--
-- Indexes for table `database1`
--
ALTER TABLE `database1`
  ADD PRIMARY KEY (`uname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `child_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `database1` (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
