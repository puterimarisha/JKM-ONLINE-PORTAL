-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 08:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volunteeronlineportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `adminID` int(20) NOT NULL,
  `Ausrname` varchar(20) NOT NULL,
  `Apsw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`adminID`, `Ausrname`, `Apsw`) VALUES
(1, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `create_certificate`
--

CREATE TABLE `create_certificate` (
  `CcertificateID` int(20) NOT NULL,
  `eventName` varchar(50) NOT NULL,
  `eventDate` date NOT NULL,
  `eventLocation` varchar(50) NOT NULL,
  `eventDesc` varchar(500) NOT NULL,
  `volunteerID` int(20) NOT NULL,
  `eventID` int(20) NOT NULL,
  `adminID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `joinevent`
--

CREATE TABLE `joinevent` (
  `joineventID` int(20) NOT NULL,
  `eventName` varchar(50) NOT NULL,
  `eventDate` date NOT NULL,
  `eventLocation` varchar(50) NOT NULL,
  `eventDesc` varchar(500) NOT NULL,
  `VattendanceID` int(20) NOT NULL,
  `eventID` int(20) NOT NULL,
  `volunteerID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manageevent`
--

CREATE TABLE `manageevent` (
  `eventID` int(20) NOT NULL,
  `eventName` varchar(50) NOT NULL,
  `eventDate` date NOT NULL,
  `eventLocation` varchar(150) NOT NULL,
  `eventDesc` varchar(500) NOT NULL,
  `adminID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageevent`
--

INSERT INTO `manageevent` (`eventID`, `eventName`, `eventDate`, `eventLocation`, `eventDesc`, `adminID`) VALUES
(3, 'Programme Bubur Lambuk', '2020-07-22', 'Masjid Gambang, Kuantan', 'Programme Bubur Lambuk were organized for create new bonding with the communties. By helping each other to make this unique food can make new best moments for them especially for ramadhan before iftar.', 1),
(5, 'Color Run 2020', '2020-08-29', 'Color Run 2020', 'asdasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skillID` int(20) NOT NULL,
  `Vskill` varchar(50) NOT NULL,
  `VskillID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteerskill`
--

CREATE TABLE `volunteerskill` (
  `VskillID` int(20) NOT NULL,
  `volunteerID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_attendance`
--

CREATE TABLE `volunteer_attendance` (
  `VattendanceID` int(20) NOT NULL,
  `Vname` varchar(50) NOT NULL,
  `Vgender` varchar(20) NOT NULL,
  `Vic` varchar(20) NOT NULL,
  `VphoneNo` varchar(20) NOT NULL,
  `volunteerID` int(20) NOT NULL,
  `adminID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vol_profile`
--

CREATE TABLE `vol_profile` (
  `volunteerID` int(20) NOT NULL,
  `joineventID` int(20) NOT NULL,
  `VskillID` int(20) NOT NULL,
  `Vname` varchar(50) NOT NULL,
  `Vic` varchar(20) NOT NULL,
  `Vage` int(20) NOT NULL,
  `Vgender` varchar(20) NOT NULL,
  `Vrace` varchar(20) NOT NULL,
  `Vreligion` varchar(20) NOT NULL,
  `Vaddrss` varchar(150) NOT NULL,
  `Vpostcode` int(20) NOT NULL,
  `VphoneNo` varchar(20) NOT NULL,
  `VemailAdd` varchar(30) NOT NULL,
  `VstatusEdu` int(20) NOT NULL,
  `Vwork` varchar(30) NOT NULL,
  `Vlanguages` varchar(30) NOT NULL,
  `Vinterest` varchar(50) NOT NULL,
  `Vskill` varchar(50) NOT NULL,
  `Vexperience` varchar(100) NOT NULL,
  `egcyNo` varchar(20) NOT NULL,
  `dateApp` date NOT NULL,
  `Vusrname` varchar(20) NOT NULL,
  `Vpsw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vol_profile`
--

INSERT INTO `vol_profile` (`volunteerID`, `joineventID`, `VskillID`, `Vname`, `Vic`, `Vage`, `Vgender`, `Vrace`, `Vreligion`, `Vaddrss`, `Vpostcode`, `VphoneNo`, `VemailAdd`, `VstatusEdu`, `Vwork`, `Vlanguages`, `Vinterest`, `Vskill`, `Vexperience`, `egcyNo`, `dateApp`, `Vusrname`, `Vpsw`) VALUES
(1, 0, 0, 'ahmad ali', '000321654987', 20, 'male', 'malay', 'islam', '    dsadadada', 213654, '0179876542', 'ahmadali@gmail.com', 0, 'student', 'english,malay', 'folk', 'folk', '    dqq', '012345697', '2020-03-14', 'ahmad', '123456'),
(2, 0, 0, 'NUR HAFIZAH BINTI MOHD NAZAM', '000327-11-0034', 20, 'female', 'MALAY', 'ISLAM', '   NO.58 KG GEMUROH ', 21060, '0179223990', 'nurhafizah638@gmail.com', 0, 'STUDENT', 'ENGLISH,MANDARIN', 'folk', 'kid', '    Anonymous', '0148068080', '2020-06-17', 'HAFIZAH', 'hafizah123456'),
(3, 0, 0, 'MOHD NAZAM BIN HANAFIAH', '690820115219', 51, 'male', 'MALAY', 'ISLAM', '    KG GEMUROH', 21060, '0199339969', 'mohdnazamhanafiah@gmail.com', 0, 'CLEANER', 'ENGLISH,MANDARIN', 'folk', 'folk', '   ANONYMOUS ', '0199474949', '2020-06-18', 'nazam', 'nazam123'),
(4, 0, 0, 'NUR AIDA LIANA BINTI MOHD NAZAM  ', '940617115466  ', 26, 'female', 'MALAY  ', 'ISLAM  ', '    ', 21060, '0179456833  ', 'nuraidanuraida13@gmail.com', 0, 'PLAZA TOL KT  ', 'ENGLISH, MALAY  ', 'Please Choose', 'Please Choose', '    ', '0179223990 ', '2020-07-12', 'Aida  ', 'aida123  '),
(5, 0, 0, 'a', '12121', 20, 'female', '2221rerew', 'wrwr', '    wrwr', 1212, 'e091212', 'nurhafizah638@gmail.com', 0, 'PLAZA TOL KT', '12w32', 'Folk', 'Teamwork', '    13123', '0148068080', '2020-07-02', 'fifi', 'fifi'),
(6, 0, 0, 'Salma Binti Ali', '680115115396', 52, 'female', 'MALAY', 'ISLAM', '    Kuantan,Pahang', 26300, '0148068080', 'salma15@gmail.com', 0, 'BUSINESS WOMAN', 'ENGLISH, MALAY', 'Children', 'Communication', '    -', '0199339969', '2020-07-20', 'Salma', 'salma'),
(7, 0, 0, 'a', '12121', 122, 'female', '221', '12121', '    1212', 1212, '1212', 'q12@gmail.com', 0, 'PLAZA TOL KT', 'ENGLISH, MALAY', 'Folk', 'Communication', '    ww', '1231', '2020-08-01', 'test1', 'test1'),
(8, 0, 0, 'Nur Hafizah', '000327110034', 20, 'female', 'MALAY', 'ISLAM', '    KK3,Ump Gambang,Pahang', 26300, '0179223990', 'nurhafizah638@gmail.com', 0, 'STUDENT', 'ENGLISH, MALAY', 'Communities', 'Teamwork', '    NONE', '0148068080', '2020-07-20', 'Fizah', 'fizah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `create_certificate`
--
ALTER TABLE `create_certificate`
  ADD PRIMARY KEY (`CcertificateID`),
  ADD KEY `volunteerID` (`volunteerID`,`eventID`,`adminID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `joinevent`
--
ALTER TABLE `joinevent`
  ADD PRIMARY KEY (`joineventID`),
  ADD KEY `volunteerID` (`volunteerID`),
  ADD KEY `eventID` (`eventID`),
  ADD KEY `VattendanceID` (`VattendanceID`);

--
-- Indexes for table `manageevent`
--
ALTER TABLE `manageevent`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skillID`),
  ADD KEY `Vskill` (`Vskill`),
  ADD KEY `VskillID` (`VskillID`);

--
-- Indexes for table `volunteerskill`
--
ALTER TABLE `volunteerskill`
  ADD PRIMARY KEY (`VskillID`),
  ADD KEY `volunteerID` (`volunteerID`);

--
-- Indexes for table `volunteer_attendance`
--
ALTER TABLE `volunteer_attendance`
  ADD PRIMARY KEY (`VattendanceID`),
  ADD KEY `volunteerID` (`volunteerID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `vol_profile`
--
ALTER TABLE `vol_profile`
  ADD PRIMARY KEY (`volunteerID`),
  ADD KEY `joineventID` (`joineventID`),
  ADD KEY `VskillID` (`VskillID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `adminID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_certificate`
--
ALTER TABLE `create_certificate`
  MODIFY `CcertificateID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `joinevent`
--
ALTER TABLE `joinevent`
  MODIFY `joineventID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manageevent`
--
ALTER TABLE `manageevent`
  MODIFY `eventID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skillID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteerskill`
--
ALTER TABLE `volunteerskill`
  MODIFY `VskillID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteer_attendance`
--
ALTER TABLE `volunteer_attendance`
  MODIFY `VattendanceID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vol_profile`
--
ALTER TABLE `vol_profile`
  MODIFY `volunteerID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `create_certificate`
--
ALTER TABLE `create_certificate`
  ADD CONSTRAINT `create_certificate_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `admin_profile` (`adminID`),
  ADD CONSTRAINT `create_certificate_ibfk_2` FOREIGN KEY (`volunteerID`) REFERENCES `vol_profile` (`volunteerID`);

--
-- Constraints for table `joinevent`
--
ALTER TABLE `joinevent`
  ADD CONSTRAINT `joinevent_ibfk_1` FOREIGN KEY (`volunteerID`) REFERENCES `vol_profile` (`volunteerID`),
  ADD CONSTRAINT `joinevent_ibfk_2` FOREIGN KEY (`eventID`) REFERENCES `manageevent` (`eventID`);

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`VskillID`) REFERENCES `volunteerskill` (`VskillID`);

--
-- Constraints for table `volunteerskill`
--
ALTER TABLE `volunteerskill`
  ADD CONSTRAINT `volunteerskill_ibfk_1` FOREIGN KEY (`volunteerID`) REFERENCES `vol_profile` (`volunteerID`);

--
-- Constraints for table `volunteer_attendance`
--
ALTER TABLE `volunteer_attendance`
  ADD CONSTRAINT `volunteer_attendance_ibfk_1` FOREIGN KEY (`volunteerID`) REFERENCES `vol_profile` (`volunteerID`),
  ADD CONSTRAINT `volunteer_attendance_ibfk_2` FOREIGN KEY (`adminID`) REFERENCES `admin_profile` (`adminID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
