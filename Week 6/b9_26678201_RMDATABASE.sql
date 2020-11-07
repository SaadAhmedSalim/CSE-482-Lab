-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql107.byethost9.com
-- Generation Time: Sep 14, 2020 at 12:39 PM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b9_26678201_RMDATABASE`
--

-- --------------------------------------------------------

--
-- Table structure for table `Location`
--

CREATE TABLE `Location` (
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Country` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Location`
--

INSERT INTO `Location` (`First_Name`, `Last_Name`, `Country`) VALUES
('Thibaut', 'Courtois', 'Belgium'),
('Andriy', 'Lunin', 'Belgium'),
('Raphaël', 'Varane', 'France'),
('Éder', 'Militão', 'Brazil'),
('Sergio', 'Ramos', 'Spain'),
('Nacho', 'Fernández', 'Spain'),
('Ferland', 'Mendy', 'France'),
('Marcelo', 'Vieira', 'Brazil'),
('Daniel', 'Carvajal', 'Spain'),
('Álvaro', 'Odriozola', 'Spain'),
('Casemiro', 'Henrique', 'Brazil'),
('Federico', 'Valverde', 'Spain'),
('Toni', 'Kroos', 'Germany'),
('Luka', 'Modric', 'Croatia'),
('Isco', 'Alarcón', 'Spain'),
('Eden', 'Hazard', 'Belgium'),
('Vinícius', 'Júnior', 'Brazil'),
('Marco', 'Asensio', 'Spain'),
('Rodrygo', 'Silva', 'Brazil'),
('Gareth', 'Bale', 'Wales'),
('Lucas', 'Vázquez', 'Spain'),
('Karim', 'Benzema', 'France'),
('Luka', 'Jovic', 'Serbia');

-- --------------------------------------------------------

--
-- Table structure for table `Players`
--

CREATE TABLE `Players` (
  `Jersey_id` int(2) NOT NULL,
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Weekly_wage` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Players`
--

INSERT INTO `Players` (`Jersey_id`, `First_Name`, `Last_Name`, `Email`, `Weekly_wage`) VALUES
(1, 'Thibaut', 'Courtois', 'agentThibaut@gmail.com', 50000),
(13, 'Andriy', 'Lunin', 'agentAndriy@gmail.com', 30000),
(5, 'Raphaël', 'Varane', 'agentRaphaël@gmail.com', 50000),
(3, 'Éder', 'Militão', 'agentÉder@gmail.com', 30000),
(4, 'Sergio', 'Ramos', 'agentSergio@gmail.com', 50000),
(6, 'Nacho', 'Fernández', 'agentNacho@gmail.com', 40000),
(23, 'Ferland', 'Mendy', 'agentFerland@gmail.com', 30000),
(12, 'Marcelo', 'Vieira', 'agentMarcelo@gmail.com', 50000),
(2, 'Daniel', 'Carvajal', 'agentDaniel@gmail.com', 45000),
(19, 'Álvaro', 'Odriozola', 'agentÁlvaro@gmail.com', 45000),
(14, '	Casemiro', 'Henrique', 'agentCasemiro@gmail.com', 50000),
(15, 'Federico', 'Valverde', 'agentValverde@gmail.com', 45000),
(8, 'Toni', 'Kroos', 'agentKroos@gmail.com', 50000),
(10, 'Luka', 'Modric', 'agentThibaut@gmail.com', 50000),
(22, 'Isco', 'Alarcón', 'agentIsco@gmail.com', 50000),
(7, 'Eden', 'Hazard', 'agentHazard@gmail.com', 40000),
(25, 'Vinícius', 'Júnior', 'agentVinícius@gmail.com', 50000),
(20, 'Marco', 'Asensio', 'agentAsensio@gmail.com', 50000),
(27, 'Rodrygo', 'Silva', 'agentRodrygo@gmail.com', 30000),
(11, 'Gareth', 'Bale', 'agentBale@gmail.com', 50000),
(17, 'Lucas', 'Vázquez', 'agentVázquez@gmail.com', 50000),
(9, 'Karim', 'Benzema', 'agentBenzema@gmail.com', 50000),
(18, 'Luka', 'Jovic', 'agentJovic@gmail.com', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `Positions`
--

CREATE TABLE `Positions` (
  `Jersey_id` int(2) NOT NULL,
  `Position_name` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Positions`
--

INSERT INTO `Positions` (`Jersey_id`, `Position_name`) VALUES
(1, 'GK'),
(13, 'GK'),
(5, 'CB'),
(3, 'CB'),
(4, 'CB'),
(6, 'CB'),
(23, 'LB'),
(12, 'LB'),
(2, 'RB'),
(19, 'RB'),
(14, 'CM'),
(15, 'CM'),
(8, 'CM'),
(10, 'CM'),
(22, 'LW'),
(7, 'LW'),
(25, 'LW'),
(20, 'LW'),
(27, 'RW'),
(11, 'RW'),
(17, 'RW'),
(9, 'CF'),
(18, 'CF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Location`
--
ALTER TABLE `Location`
  ADD PRIMARY KEY (`Last_Name`);

--
-- Indexes for table `Players`
--
ALTER TABLE `Players`
  ADD PRIMARY KEY (`Jersey_id`);

--
-- Indexes for table `Positions`
--
ALTER TABLE `Positions`
  ADD PRIMARY KEY (`Jersey_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
