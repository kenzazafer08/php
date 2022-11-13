-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 13 Novembre 2022 à 18:02
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ycclubs`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  UNIQUE KEY `username` (`username`,`password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('kenza', 'kenza');

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE IF NOT EXISTS `apprenant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `class` varchar(200) NOT NULL,
  `club` varchar(500) DEFAULT NULL,
  `role` varchar(300) DEFAULT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_club` (`club`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `apprenant`
--

INSERT INTO `apprenant` (`id`, `name`, `age`, `class`, `club`, `role`, `image`) VALUES
(1, 'kenza zafer', 22, 'ada lovelace', 'Yc Arts', 'Admin', 'https://media-exp1.licdn.com/dms/image/D4E03AQFVNnS6gsJmtQ/profile-displayphoto-shrink_200_200/0/1666946248792?e=1673481600&v=beta&t=XiRfe6_4N9ZyJ7_HiZkyCGGo66rq8R7wKGAu5pLCMG4'),
(16, 'achchaimae khalaf', 20, 'ada lovelance', 'Yc Sports', 'Adherant', 'https://media-exp1.licdn.com/dms/image/C5603AQH8DFGz89OUjg/profile-displayphoto-shrink_100_100/0/1647194323296?e=1674086400&v=beta&t=6uGC4eE0XWVzGRGZ7alIqkn1P5O0DuarD7YtiK2hKpE'),
(15, 'Alae El oula', 23, 'alan turing', NULL, NULL, 'https://media-exp1.licdn.com/dms/image/D4E35AQEbaG7b_GyLXQ/profile-framedphoto-shrink_200_200/0/1653827334904?e=1668952800&v=beta&t=GE3VJylr2v69SkjkjseX8U5M0bJ6fDv_BO7cu-AB4qI'),
(14, 'Mohamed Romami', 21, 'alan turing', NULL, NULL, 'https://media-exp1.licdn.com/dms/image/C4D03AQETg4Kt1oX8oA/profile-displayphoto-shrink_200_200/0/1660683428077?e=1674086400&v=beta&t=TWFfqt9SNaL-rYQfD3tCBp7aBQeZS9GCJ7ZL3efbr_0'),
(13, 'rabie ouelaf', 18, 'ada lovelace', 'Yc Sports', 'Admin', 'https://media-exp1.licdn.com/dms/image/C4E03AQHAq6G5ys5B-A/profile-displayphoto-shrink_200_200/0/1660997252070?e=1674086400&v=beta&t=W4_RHvQ0MYAIQd-MXyeDcIxP6X3UcDoQTZlOji1S1s8');

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `discription` text NOT NULL,
  `categorie` varchar(500) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `discription`, `categorie`, `logo`, `date`) VALUES
(26, 'Yc Art', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Art', '  https://i.pinimg.com/564x/e5/c9/18/e5c91883a8dad8039993849f83bec03b.jpg', '2022-11-14'),
(28, 'Yc Human', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Envirement', '  https://i.pinimg.com/236x/a3/34/a9/a334a951b4ea186eed47233733f654d0.jpg', '2022-11-15'),
(27, 'Yc Sport', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Sport', '  https://i.pinimg.com/236x/e2/6d/e4/e26de40ad6b944507c9a70f35fa26e1f.jpg', '2022-11-18'),
(25, 'Yc Arts', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Art', ' https://i.pinimg.com/564x/e5/c9/18/e5c91883a8dad8039993849f83bec03b.jpg', '2022-11-14'),
(23, 'Yc Sports', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Sport', ' https://i.pinimg.com/236x/e2/6d/e4/e26de40ad6b944507c9a70f35fa26e1f.jpg', '2022-11-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
