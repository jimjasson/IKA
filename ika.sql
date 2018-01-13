-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 12:32 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ika`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `NAME` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `SURNAME` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `FATHER_NAME` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `MOTHER_NAME` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `AFM` char(9) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `EMAIL` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `USERNAME` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `PASSWORD` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`NAME`, `SURNAME`, `FATHER_NAME`, `MOTHER_NAME`, `AFM`, `EMAIL`, `USERNAME`, `PASSWORD`) VALUES
('Ioannis ', 'Charamis', 'Alexandros', 'Chrysoula', '000000000', 'email@email.com', 'giannakis', '25d55ad283aa400af464c76d713c07ad'),
('GIORGOS', 'PAPDOPOULOS', 'ALEXIS', 'MARIA', '123456789', 'alexis@gmail.com', 'alexis', '059bf68f71c80fce55214b411dd2280c'),
('John', 'Doe', 'Jack', 'Mary', '987654321', 'johndoe@email.com', 'john', '2829fc16ad8ca5a79da932f910afad1c');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_info`
--

CREATE TABLE `insurance_info` (
  `AFM` char(9) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `BIRTH_DATE` date NOT NULL,
  `INSUR_DATE` date NOT NULL,
  `WORKHOURS` int(11) NOT NULL,
  `INSUR_TYPE` int(11) NOT NULL,
  `CHILDREN` int(11) NOT NULL,
  `PENSION_AMOUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_info`
--

INSERT INTO `insurance_info` (`AFM`, `BIRTH_DATE`, `INSUR_DATE`, `WORKHOURS`, `INSUR_TYPE`, `CHILDREN`, `PENSION_AMOUNT`) VALUES
('000000000', '1992-05-12', '2011-11-01', 500, 0, 0, 0),
('123456789', '1949-03-16', '1971-02-22', 5500, 0, 0, 0),
('987654321', '1956-10-10', '1980-10-10', 3000, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`AFM`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `insurance_info`
--
ALTER TABLE `insurance_info`
  ADD PRIMARY KEY (`AFM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
