-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 mai 2023 à 09:32
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `draft`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `num_client` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `adresse` varchar(400) COLLATE utf8mb4_general_ci NOT NULL,
  `code_postal` int NOT NULL,
  `ville` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`num_client`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`num_client`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `mail`) VALUES
(1, 'DELORME', 'Yona', 'Pl Charles de Gaulle', 75008, 'Paris', 'yona.delorme@gmail.com'),
(2, 'ESTORGUES', 'Cécilia', '55 Digue du Bout Blanc', 17000, 'La Rochelle', 'cecilia.estorgues@gmail.com'),
(3, 'FERREIRA', 'Catarina', '9 Av. des Fils Fouquaud', 79110, 'Chef-Boutonne', 'catarine.ferreira@gmail.com'),
(4, 'FELICIAGGI', 'Abel', '1000 rue Jean Jaurès', 2230, 'Fresnoy-le-grand', 'abel.feliciaggi@gmail.com'),
(5, 'ERAVILLE', 'Yoan', '17 Vge du Val', 25110, 'Cusance', 'yoan.eraville@gmail.com'),
(6, 'BERNARD', 'Maxime', 'Le Cheylaret', 48310, 'Chauchailles', 'maxime.bernard@gmail.com'),
(7, 'DELORME', 'Yona', 'Pl Charles de Gaulle', 75008, 'Paris', 'yona.delorme@gmail.com'),
(8, 'ESTORGUES', 'Cécilia', '55 Digue du Bout Blanc', 17000, 'La Rochelle', 'cecilia.estorgues@gmail.com'),
(9, 'FERREIRA', 'Catarina', '9 Av. des Fils Fouquaud', 79110, 'Chef-Boutonne', 'catarine.ferreira@gmail.com'),
(10, 'FELICIAGGI', 'Abel', '1000 rue Jean Jaurès', 2230, 'Fresnoy-le-grand', 'abel.feliciaggi@gmail.com'),
(11, 'ERAVILLE', 'Yoan', '17 Vge du Val', 25110, 'Cusance', 'yoan.eraville@gmail.com'),
(12, 'BERNARD', 'Maxime', 'Le Cheylaret', 48310, 'Chauchailles', 'maxime.bernard@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `num_commande` int NOT NULL AUTO_INCREMENT,
  `date_commande` date NOT NULL,
  `num_client` int NOT NULL,
  PRIMARY KEY (`num_commande`),
  KEY `num_client` (`num_client`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`num_commande`, `date_commande`, `num_client`) VALUES
(1, '0000-00-00', 1),
(2, '0000-00-00', 2),
(3, '0000-00-00', 3),
(4, '0000-00-00', 4),
(5, '0000-00-00', 5),
(6, '0000-00-00', 6),
(7, '0000-00-00', 1),
(8, '0000-00-00', 2),
(9, '0000-00-00', 3),
(10, '0000-00-00', 4),
(11, '0000-00-00', 5),
(12, '0000-00-00', 6);

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `quantite` int NOT NULL,
  `num_commande` int NOT NULL,
  `reference` int NOT NULL,
  KEY `num_commande` (`num_commande`),
  KEY `reference` (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`quantite`, `num_commande`, `reference`) VALUES
(3, 1, 15563),
(2, 1, 98645),
(1, 1, 85145),
(6, 2, 88415),
(1, 3, 89542),
(4, 4, 58539),
(3, 4, 88925),
(6, 5, 85347),
(9, 6, 82754);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `reference` int NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nom_produit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(3000) COLLATE utf8mb4_general_ci NOT NULL,
  `prix` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `taux_alcool` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `particularite` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ibu` int DEFAULT NULL,
  `volume` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `type`, `nom_produit`, `description`, `prix`, `taux_alcool`, `particularite`, `ibu`, `volume`) VALUES
(15563, 'biere', 'Lime', 'Lime, est une bière blanche, à la composition inédite du citron. Elle diffuse autour d’elle une explosion de créativité́, où qu’elle aille. Fière d’être une bière, elle a un goût plus acidulé que les autres. Avec son attitude originale pour une bière, elle souhaite montrer aux autres, qu’il faut avoir de la créativité.', '2,75€', '5%', 'Citron', 15, '75cL'),
(24853, 'goodies', 'Verre', 'Un verre qui vous fera rêvé avec son design original aux couleurs de Draft. En verre 100% recyclé, il vous permettra de déguster nos bières dans les meilleures conditions', '7€', NULL, NULL, NULL, NULL),
(54215, 'biere', 'Fraise', 'Fraise, une bière blanche, est d’une composition fruitière inédite avec sa fraise, elle casse tous les standards et diffuse autour d’elle une détermination. Fière d’être une bière, elle a un goût fruité. Avec son attitude originale pour une bière, elle vous souhaite de ne jamais baisser les bras.', '2,75€', '4%', 'Fraise', 15, '75cL'),
(56415, 'goodies', 'Stylo', 'Ce magnifique stylo en plastique recyclé aux couleurs de Draft vous permettra de nous écrire et de rester en contact avec nous. N’hésitez pas', '1,20€', NULL, NULL, NULL, NULL),
(58539, 'biere', 'Luciole', 'Luciole est une bière blonde Lager à laquelle a été ajoutée des paillettes alimentaires qui illuminent la bière et lui donne un effet de brillance référence à son nom.', '2,75€', '5.5%', 'Luminescente', 16, '75cL'),
(85145, 'goodies', 'Dessous de verre', 'Ces beaux dessous de verre, pour éviter de nettoyer vos tables et pour vous permettre de profiter de votre bière sans aucun souci.', '6€', NULL, NULL, NULL, NULL),
(85347, 'biere', 'Cherry pop', 'Cherry-pop, d une composition fruitée à la cerise, casse tous les standards et diffuse autour d’elle la bonne humeur et le plaisir d’aimer. Fière d’être une bière aux tons rouges, elle a un goût plus sucré que les autres. Avec son attitude originale pour une bière, elle souhaite inspiré à tous, la joie et la bonne humeur.', '2,75€', '4%', 'Cerise', 15, '75cL'),
(88415, 'goodies', 'Décapsuleur', 'Dès que vous en avait besoin, il est là. Facile à emporter et utiliser. Le décapsuleur porte-clés vont rendra la vie plus simple', '2,50€', NULL, NULL, NULL, NULL),
(88925, 'biere', 'La butineuse', 'La Butineuse, d’une composition inédite avec son miel de châtaignier, casse tous les standards et diffuse autour d’elle une explosion de créativité, où qu’elle aille. Fière d’être une bière Ale, elle a un goût plus doux que les autres. Avec son attitude originale pour une bière, elle souhaite montrer à tous qu’il ne faut pas hésiter à s’exprimer.', '2,75€', '5,75%', 'Miel de Chataigner', 11, '75cL'),
(89542, 'biere', 'Bubble', 'Bubble, d’une composition inédite avec sa base aux Bubble gum, elle nous replonge en enfance et insiste sur le fait d’être soit même. Avec son attitude originale pour une bière, elle souhaite montrer à tous qu’il ne faut pas se cacher derrière une apparence.', '2,75€', '3,80%', 'Chewing-gum', 10, '75cL'),
(98645, 'biere', 'Zero', 'La Zéro, est une bière blonde sans alcool qui nous permet de savourer son houblon sans avoir mal au crâne. D’une composition 100% naturel et authentique elle ose tout. Fière d’être une bière Ale, elle a un goût plus doux que les autres. Avec son attitude originale pour une bière, elle souhaite montrer à tous qu’il ne faut pas hésiter à oser.', '2,75€', '0%', 'Sans alcool', 5, '75cL');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
