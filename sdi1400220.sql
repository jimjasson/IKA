-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD:sdi1400220.sql
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 13 Ιαν 2018 στις 19:25:36
-- Έκδοση διακομιστή: 10.1.28-MariaDB
-- Έκδοση PHP: 7.1.11
=======
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 05:15 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12
>>>>>>> master:IKA.sql

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
<<<<<<< HEAD:sdi1400220.sql
-- Βάση δεδομένων: `sdi1400220`
=======
-- Database: `ika`
>>>>>>> master:IKA.sql
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
<<<<<<< HEAD:sdi1400220.sql
-- Δομή πίνακα για τον πίνακα `insurance_info`
=======
-- Table structure for table `insurance_info`
>>>>>>> master:IKA.sql
--

CREATE TABLE `insurance_info` (
  `AFM` char(9) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `BIRTH_DATE` date NOT NULL,
  `INSUR_DATE` date NOT NULL,
  `PENS_DATE` date NOT NULL,
  `WORKHOURS` int(11) NOT NULL,
  `INSUR_TYPE` int(11) NOT NULL,
  `CHILDREN` int(11) NOT NULL,
  `PENSION_AMOUNT` int(11) NOT NULL,
  `INSURED_CHILDREN` int(11) NOT NULL,
  `YEAR1` int(11) NOT NULL,
  `YEAR2` int(11) NOT NULL,
  `YEAR3` int(11) NOT NULL,
  `YEAR4` int(11) NOT NULL,
  `YEAR5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
<<<<<<< HEAD:sdi1400220.sql
-- Άδειασμα δεδομένων του πίνακα `insurance_info`
=======
-- Dumping data for table `insurance_info`
>>>>>>> master:IKA.sql
--

INSERT INTO `insurance_info` (`AFM`, `BIRTH_DATE`, `INSUR_DATE`, `PENS_DATE`, `WORKHOURS`, `INSUR_TYPE`, `CHILDREN`, `PENSION_AMOUNT`, `INSURED_CHILDREN`, `YEAR1`, `YEAR2`, `YEAR3`, `YEAR4`, `YEAR5`) VALUES
('000000000', '1992-05-12', '2011-11-01', '0000-00-00', 500, 0, 0, 0, 0, 0, 1000, 3500, 6500, 6500),
('123456789', '1949-03-16', '1971-02-22', '0000-00-00', 7500, 0, 3, 0, 0, 13000, 14000, 13500, 15000, 14000),
('987654321', '1956-10-10', '1980-10-10', '0000-00-00', 6000, 0, 2, 0, 0, 11000, 11000, 16000, 16000, 16500);

--
<<<<<<< HEAD:sdi1400220.sql
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `accounts`
=======
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
>>>>>>> master:IKA.sql
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`AFM`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
<<<<<<< HEAD:sdi1400220.sql
-- Ευρετήρια για πίνακα `insurance_info`
=======
-- Indexes for table `insurance_info`
>>>>>>> master:IKA.sql
--
ALTER TABLE `insurance_info`
  ADD PRIMARY KEY (`AFM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
