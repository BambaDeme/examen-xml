-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 17, 2020 at 03:38 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dic1_projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_parution` date NOT NULL,
  `apercu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_proprietaire` int(11) NOT NULL,
  `etat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `couverture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `titre`, `auteur`, `date_parution`, `apercu`, `id_proprietaire`, `etat`, `couverture`) VALUES
(1, 'Une si longue lettre', 'Mariama Ba', '2020-10-28', 'Ramatoulaye sdkgvnerfvd errdfjveùf ', 1, 'disponible', './images/mesImages/51BT9ZAY7KL._SX295_BO1,204,203,200_.jpg'),
(2, 'Vol de nuit', 'Antoine de Saint Expery', '2014-06-04', 'cvbn,;:cdqze zesfiuez zeqmfoich ezfnzefdc', 3, 'disponible', './images/mesImages/55573440.jpg'),
(3, 'L\'alchimiste', 'Paulo Coelho', '2020-10-28', 'qsdfghgjhkj rgdhjhk regfbùler,dv  ijnaeùsv', 3, 'disponible', './images/mesImages/L-Alchimiste.jpg'),
(6, 'Paulo Coelho', 'L\'alchimiste', '2020-11-03', 'Le jeune homme s\'appelait santiago.', 1, 'disponible', './images/mesImages/L-Alchimiste.jpg'),
(7, 'Cheikh Hamidou Kane', 'L\'aventure ambigue', '2020-06-16', 'Quotidien de Samba diallo un enfant à l\'école coranique', 1, 'disponible', './images/mesImages/bm_22413_aj_m_9964.jpg'),
(8, 'Massalikoul Jinaan', 'Cheikh Ahmadou Bamba Mbacké', '1996-01-20', 'Le soufisme à l\'état pure', 1, 'disponible', './images/mesImages/Massalikul.jpeg'),
(9, 'L\'enfant noir', 'Camara Laye', '2017-06-07', 'Laye est un jeune garçon noir qui vit avec ses parents à Kouroussa, un village de Haute-Guinée. Son père, forgeron et orfèvre, lui enseigne les techniques de son art. Laye rend parfois visite à sa grand-mère qui habite à Tindican, un village voisin où il a découvert la paysannerie. À Kouroussa, il va à l\'école française. Il entre dans l\'association des non-initiés, où il apprend la mort de son ami Check. Après avoir obtenu son certificat d\'aptitude professionnelle à Conakry, Laye se voit offrir la possibilité de continuer ses études en France. Après hésitations, il finit par accepter cette offre avec son amie Marie.', 1, 'disponible', './images/mesImages/lenfant-noir.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prets`
--

DROP TABLE IF EXISTS `prets`;
CREATE TABLE IF NOT EXISTS `prets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_livre` int(11) NOT NULL,
  `id_emprunteur` int(11) NOT NULL,
  `date_pret` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `occuppation` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `about` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `email`, `pass`, `photo`, `occuppation`, `about`) VALUES
(1, 'Bamba', 'DEME', 'bamba@mail.com', 'bamba', './images/mesImages/8e4ce1a8-d0bf-4bcc-9bd4-ec9de9e7b1f1.JPG', 'etudiant', 'PAssionné de lecture'),
(3, 'Moustapha', 'Gaye', 'taf@mail.com', 'taf', './images/mesImages/Coding-Bootcamps-in-Barcelona-intensive-programming-courses-learn-software-development-and-start-a-career-in-tech.jpeg', 'Web developer', 'Passionné de lecture'),
(4, 'Fatou', 'Ngom', 'fatou@mail.com', 'fatou', './images/mesImages/blueprints-entrepreneur-hands-110469.jpg', 'professeur', 'Passionné de lecture');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
