-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2020 at 02:25 PM
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
-- Database: `schoolconnect_fb`
--

-- --------------------------------------------------------

--
-- Table structure for table `devoirs`
--

CREATE TABLE `devoirs` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `classdevoirs` varchar(255) NOT NULL,
  `donnele` date NOT NULL,
  `pourle` date NOT NULL,
  `matiere` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `devoirs`
--

INSERT INTO `devoirs` (`id`, `type`, `classdevoirs`, `donnele`, `pourle`, `matiere`, `contenu`, `online`) VALUES
(1, 'Devoir', '3ème H', '2020-03-03', '2020-07-18', 'SchoolConnect', 'FINIR CE SITE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `filtre`
--

CREATE TABLE `filtre` (
  `id` int(11) NOT NULL,
  `insulte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filtre`
--

INSERT INTO `filtre` (`id`, `insulte`) VALUES
(1, 'connard'),
(2, 'salope'),
(3, 'merde'),
(4, 'pute'),
(5, 'fdp'),
(6, 'connasse'),
(7, 'ntm'),
(8, 'encule'),
(9, 'enculé'),
(10, 'nique'),
(11, 'enculee'),
(22, 'foutre'),
(23, 'enculer'),
(24, 'fuck'),
(25, 'puta'),
(26, 'puto'),
(27, 'bite'),
(28, 'baisable'),
(29, 'baise'),
(30, 'baiser'),
(31, 'bander'),
(32, 'branler'),
(33, 'branlette'),
(34, 'bordel'),
(35, 'burnes'),
(36, 'chiant'),
(37, 'chiante'),
(38, 'chiasse'),
(39, 'chier'),
(40, 'chiottes'),
(41, 'con'),
(42, 'conne'),
(43, 'connerie'),
(44, 'coucougnettes'),
(45, 'couille'),
(46, 'couilles'),
(47, 'couillu'),
(48, 'cul'),
(49, 'déconner'),
(50, 'déconneur'),
(51, 'emmerder'),
(52, 'emmerdant'),
(53, 'emmerdeur'),
(54, 'emmerdeuse'),
(55, 'empapaouter'),
(56, 'entuber');

-- --------------------------------------------------------

--
-- Table structure for table `minichat`
--

CREATE TABLE `minichat` (
  `id` int(11) NOT NULL,
  `chatpseudo` varchar(255) NOT NULL,
  `classchat` text NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `secondname` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` text NOT NULL,
  `delegue` text NOT NULL,
  `classe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `nickname`, `secondname`, `password`, `email`, `gender`, `photo`, `delegue`, `classe`) VALUES
(1, 'test', 'Test', 'Nomdetest', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com', 'None', '', '', ''),
(2, 'Ahamard', 'Alexandre', 'Hamard', '$2y$10$TOqcP65DAEAaki0rFgTLqejbRCPlAI7jd7GCInRsUb9GyRXhxGELq', 'hamard.lake@gmail.com', 'Male', 'img_alex.jpg', '', '3ème H'),
(3, 'clorizon', 'Cosme', 'Lorizon', '$2y$10$rQVTu7KjFuzrCvfuvPOLXumZgvi3LnqsMIvkmfD9cD2FkSYvemVXm', 'cosmelorizon@icloud.com', 'Male', 'img_cosme.png', 'Délegué de classe', '3ème H'),
(4, 'Arthurfb', 'Arthur', 'Grynblat', '$2y$10$uUpkRLckbVXPK65SKnyGre86utoYuY2A6kB3p9rKc5m15MeHdowXC', 'artegb@icloud.com', 'Male', 'img_arthur.jpg', '', '3ème H'),
(5, 'amartel', 'Antoine', 'Martel', '$2y$10$TT5ntgRe1YuGLtRLsWyXJ.nR1VKWMuoJF0J4Fe6FDm.Ia87u8kea6', 'antoine.martel.ca@gmail.com', 'Male', 'img_antoine.jpg', '', '3ème G'),
(6, 'hrichard', 'Hippolyte', 'Richard', '$2y$10$TAuGQCnWyObsh1q842nSquM3wPcsB6UyPYEZTpWBzxssMngHZlqXC', 'hippolyterichard05@gmail.com', 'Female', '', '', '3ème H'),
(7, 'Drichard', 'David', 'Richard', '$2y$10$oaUCcrM7pgpnjGzdHaX.8Oj0Q9HX6losE3T.vPSrQDw02hfcx27Zu', 'david.richard@copainsdavant.com', 'Male', 'img_richard.png', 'Professeur de Francais', 'Professeur\r\n\r\n\r\n\r\n\r\n\r\n'),
(8, 'ALeClercq', 'Anne-Frederique', 'Le Clercq', '$2y$10$bGenXRf.tnFH7S/CfC42juVUOzyDEM3Zq02UXkyXtmro.X9HLRm5O', 'AF.leclercq@fblasalle.com', 'Female', 'img_leclercq.jpg', 'Professeur de Physique-Chimie\r\n', 'Professeure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devoirs`
--
ALTER TABLE `devoirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filtre`
--
ALTER TABLE `filtre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devoirs`
--
ALTER TABLE `devoirs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filtre`
--
ALTER TABLE `filtre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
