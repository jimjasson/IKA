-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 16 Δεκ 2017 στις 16:33:03
-- Έκδοση διακομιστή: 10.1.28-MariaDB
-- Έκδοση PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `IKA`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `accounts`
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
-- Άδειασμα δεδομένων του πίνακα `accounts`
--

INSERT INTO `accounts` (`NAME`, `SURNAME`, `FATHER_NAME`, `MOTHER_NAME`, `AFM`, `EMAIL`, `USERNAME`, `PASSWORD`) VALUES
('GIORGOS', 'PAPDOPOULOS', 'ALEXIS', 'MARIA', '123456789', 'alexis@gmail.com', 'alexis', '059bf68f71c80fce55214b411dd2280c'),
('Ioannis ', 'Charamis', 'Alexandros', 'Chrysoula', '000000000', 'email@email.com', 'giannakis', '25d55ad283aa400af464c76d713c07ad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
