-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2021 at 09:19 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_aqua`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `optous` varchar(2) NOT NULL,
  `opprimary` varchar(2) NOT NULL,
  `opmiddle` varchar(2) NOT NULL,
  `opsecondary` varchar(2) NOT NULL,
  `opparent` varchar(2) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `image`, `description`, `optous`, `opprimary`, `opmiddle`, `opsecondary`, `opparent`) VALUES
(49, 'eye anatomy', '', 'Pupil, in the anatomy of the eye, the opening within the iris through which light passes before reaching the lens and being focused onto the retina. ', '1', '1', '1', '1', '1'),
(50, 'Pupils different sizes:', '', 'In this article, learn about the possible causes for pupils of different sizes, as well as when to see a doctor. ', '0', '0', '0', '1', '1'),
(51, 'Your Eyes', '', 'The iris has muscles attached to it that change its shape. This allows the iris to control how much light goes through the pupil (say: PYOO-pul). The pupil is the black circle in the center of the iris, which is really an opening in the iris, and it lets light enter the eye.', '0', '1', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id_class` int(11) NOT NULL AUTO_INCREMENT,
  `name_class` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL,
  PRIMARY KEY (`id_class`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id_class`, `name_class`, `id_level`) VALUES
(1, '1', 1),
(2, '2', 1),
(3, '3', 1),
(4, '4', 1),
(5, '1', 2),
(6, '2', 2),
(7, '3', 2),
(8, '1', 3),
(9, '2', 3),
(10, '3', 3),
(11, '5', 1),
(12, '4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

DROP TABLE IF EXISTS `classrooms`;
CREATE TABLE IF NOT EXISTS `classrooms` (
  `id_cr` int(11) NOT NULL AUTO_INCREMENT,
  `capacity` int(255) NOT NULL,
  `nb_full` int(255) NOT NULL,
  PRIMARY KEY (`id_cr`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`id_cr`, `capacity`, `nb_full`) VALUES
(1, 25, 18),
(2, 25, 20),
(3, 25, 12),
(4, 25, 24);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `contact` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `extra_scolar`
--

DROP TABLE IF EXISTS `extra_scolar`;
CREATE TABLE IF NOT EXISTS `extra_scolar` (
  `id_extra` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `name_level` varchar(255) NOT NULL,
  `nb_classes` int(11) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `name_level`, `nb_classes`) VALUES
(1, 'primary', 5),
(2, 'middle', 4),
(3, 'secondary', 3);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `id_student` int(255) NOT NULL,
  `id_topic` int(255) NOT NULL,
  `mark` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

DROP TABLE IF EXISTS `meals`;
CREATE TABLE IF NOT EXISTS `meals` (
  `id_meal` int(11) NOT NULL,
  `day` varchar(11) NOT NULL,
  `starter` varchar(11) NOT NULL,
  `main` varchar(11) NOT NULL,
  `dessert` varchar(11) NOT NULL,
  `time` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

DROP TABLE IF EXISTS `parents`;
CREATE TABLE IF NOT EXISTS `parents` (
  `id_parent` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `phone3` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id_parent`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id_parent`, `name`, `family_name`, `adresse`, `phone1`, `phone2`, `phone3`, `email`) VALUES
(1, 'Samah ', 'kansab', 'mazouna', '0782676823', '0782676823', '782676823', 'hs_kansab@esi.dz'),
(2, 'Samah ', 'kansab', 'mazouna', '0782676823', '0782676823', '782676823', 'hs_kansab@esi.dz'),
(3, 'chaimee', 'zidane', 'chlef', '0782676823', '', '', 'zidane@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `id_paragraph` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `paragraph` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_paragraph`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`id_paragraph`, `title`, `paragraph`, `image`) VALUES
(1, 'EQUA SCHOOL', ' this school is situated in Bordj Al kifane', ' '),
(2, 'Teachers', ' in this school, we have more than 200 teachers', ' '),
(4, 'new paragraph', ' je suis entrain dessayer', ' '),
(5, 'try', ' try', ' '),
(6, 'Class quality', ' i am trying', ' ielts2-100.jpg'),
(7, 'Class quality', ' i am trying', ' ielts2-100.jpg'),
(8, 'Class quality', ' lol', ' '),
(9, 'Class quality', ' this is the presentation number one', ' 1200px-ESI_Logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

DROP TABLE IF EXISTS `school_year`;
CREATE TABLE IF NOT EXISTS `school_year` (
  `id_sy` int(11) NOT NULL AUTO_INCREMENT,
  `date_begin` varchar(255) NOT NULL,
  `date_end` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sy`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`id_sy`, `date_begin`, `date_end`) VALUES
(1, '2020', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `id_session` int(11) NOT NULL AUTO_INCREMENT,
  `h_start` varchar(255) NOT NULL,
  `h_end` varchar(255) NOT NULL,
  `id_teacher` int(255) NOT NULL,
  `id_class` int(255) NOT NULL,
  `id_classrooms` int(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `id_sy` int(255) NOT NULL,
  PRIMARY KEY (`id_session`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id_session`, `h_start`, `h_end`, `id_teacher`, `id_class`, `id_classrooms`, `day`, `id_sy`) VALUES
(1, '08:30', '09:30', 8, 11, 2, 'wednesday', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

DROP TABLE IF EXISTS `shows`;
CREATE TABLE IF NOT EXISTS `shows` (
  `id_show` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id_student` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `id_tutor` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  PRIMARY KEY (`id_student`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_student`, `name`, `family_name`, `email`, `adresse`, `id_tutor`, `id_class`) VALUES
(1, 'Samah ', 'kansab', 'hs_kansab@esi.dz', 'mazouna', 1, 2),
(2, 'taha', 'zidane', 'zidane@gmail.com', 'chlef', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id_teacher` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `phone3` varchar(255) NOT NULL,
  `start_recep` varchar(255) NOT NULL,
  `end_recep` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_topic` int(255) NOT NULL,
  `recep_day` varchar(255) NOT NULL,
  PRIMARY KEY (`id_teacher`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id_teacher`, `name`, `family_name`, `adresse`, `phone1`, `phone2`, `phone3`, `start_recep`, `end_recep`, `email`, `id_topic`, `recep_day`) VALUES
(8, 'lynda', 'kansab', 'mazouna', '782676823', '', '', '20:03', '19:08', 'hs_kansab@esi.dz', 1, 'saturday'),
(6, 'aicha', 'belabassi', 'mazouna', '0792186236', '', '', '10:23', '11:46', 'belabassi@gmail.com', 4, 'sunday'),
(4, 'samah', 'kansab', 'mazouna', '782676823', '', '', '19:43', '22:43', 'hs_kansab@esi.dz', 2, 'saturday'),
(7, 'abdelkader', 'kansab', 'mazouna', '0795186867', '', '', '15:50', '16:04', 'kansab@yhoo.fr', 1, 'monday'),
(9, 'Samah ', 'kansab', 'mazouna', '0782676823', '', '', '09:22', '11:22', 'hs_kansab@esi.dz', 3, 'wednesday'),
(10, 'dalila', 'khettaf', 'mostaganem', '878458562985', '478458458458', '', '11:00', '12:02', 'hd_khettaf@esi.dz', 4, 'wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `id_topic` int(11) NOT NULL AUTO_INCREMENT,
  `name_topic` varchar(255) NOT NULL,
  PRIMARY KEY (`id_topic`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id_topic`, `name_topic`) VALUES
(1, 'math'),
(2, 'physic'),
(3, 'geo'),
(4, 'islamic');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
