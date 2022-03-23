-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 23 mars 2022 à 23:37
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pagination`
--

-- --------------------------------------------------------

--
-- Structure de la table `fichierrecursive`
--

CREATE TABLE `fichierrecursive` (
  `id` int(5) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `taille` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichierrecursive`
--

INSERT INTO `fichierrecursive` (`id`, `nom`, `taille`, `type`, `path`) VALUES
(6, 'slide9-kaki-fruit-main-12365069.jpg', '35645', 'jpg', 'docs/dir1/dir1.1/dir1.1.1/slide9-kaki-fruit-main-12365069.jpg'),
(7, 'taro-1686669_1920-1024x683.jpg', '60943', 'jpg', 'docs/dir1/dir1.1/dir1.1.1/taro-1686669_1920-1024x683.jpg'),
(8, 'tree-3330097_1920-1024x768.jpg', '80206', 'jpg', 'docs/dir1/dir1.1/dir1.1.1/tree-3330097_1920-1024x768.jpg'),
(9, 'mango-1239347_1920-1024x683.jpg', '67675', 'jpg', 'docs/dir1/dir1.1/mango-1239347_1920-1024x683.jpg'),
(10, 'papaya-771145_1920-1024x683.jpg', '47699', 'jpg', 'docs/dir1/dir1.1/papaya-771145_1920-1024x683.jpg'),
(11, 'passion-fruit-3519303_1920-1024x683.jpg', '52290', 'jpg', 'docs/dir1/dir1.1/passion-fruit-3519303_1920-1024x683.jpg'),
(12, 'food-3062139_1920-1024x683.jpg', '96715', 'jpg', 'docs/dir1/food-3062139_1920-1024x683.jpg'),
(13, 'fruit-2100688_1920-1024x768.jpg', '92248', 'jpg', 'docs/dir1/fruit-2100688_1920-1024x768.jpg'),
(14, 'guava-2880259_1920-1024x683.jpg', '82247', 'jpg', 'docs/dir1/guava-2880259_1920-1024x683.jpg'),
(15, 'ARS_breadfruit49.jpg', '39194', 'jpg', 'docs/dir2/ARS_breadfruit49.jpg'),
(16, 'iStock-1278315370-758x426.jpg', '82616', 'jpg', 'docs/dir2/iStock-1278315370-758x426.jpg'),
(17, 'vegetable-3559112_1920-1024x577.png', '109710', 'png', 'docs/dir2/vegetable-3559112_1920-1024x577.png'),
(18, 'yams-1557440_1920-1024x687.jpg', '76691', 'jpg', 'docs/dir2/yams-1557440_1920-1024x687.jpg'),
(20, 'slide5-durian-durio-zibethinus-Lam2-03-main-123650', '70159', 'png', 'docs/dir3/dir3.1/dir3.1.1/slide5-durian-durio-zibethinus-Lam2-03-main-12365052.png'),
(21, 'slide6-Physalis-peruviana-LAM1-main-12365074.jpg', '58094', 'jpg', 'docs/dir3/dir3.1/dir3.1.1/slide6-Physalis-peruviana-LAM1-main-12365074.jpg'),
(22, 'slide8-papaye-carica-retouche-main-12365051.jpg', '69253', 'jpg', 'docs/dir3/dir3.1/dir3.1.1/slide8-papaye-carica-retouche-main-12365051.jpg'),
(23, 'pomegranate-3383814_1920-1024x680.png', '108124', 'png', 'docs/dir3/dir3.1/pomegranate-3383814_1920-1024x680.png'),
(24, 'slide2-jujube-zizyphus-jujuba-retouche-main-123650', '46127', 'jpg', 'docs/dir3/dir3.1/slide2-jujube-zizyphus-jujuba-retouche-main-12365055.jpg'),
(25, 'slide3-fruit-de-la-passion-passiflora-edulis-main-', '47684', 'jpeg', 'docs/dir3/dir3.1/slide3-fruit-de-la-passion-passiflora-edulis-main-12365075.jpeg'),
(26, 'iStock-1279674489-758x426.jpg', '45736', 'jpg', 'docs/dir3/iStock-1279674489-758x426.jpg'),
(27, 'iStock-1283279353-758x426.png', '82127', 'png', 'docs/dir3/iStock-1283279353-758x426.png'),
(28, 'kiwano-2128077_1920-1024x576.jpg', '102405', 'jpg', 'docs/dir3/kiwano-2128077_1920-1024x576.jpg'),
(29, 'lychee-419611_1920-1024x681.png', '58218', 'png', 'docs/dir3/lychee-419611_1920-1024x681.png'),
(30, 'iStock-1202274909-758x379.png', '77664', 'png', 'docs/iStock-1202274909-758x379.png'),
(31, 'iStock-1277110221-758x379.png', '93327', 'png', 'docs/iStock-1277110221-758x379.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fichierrecursive`
--
ALTER TABLE `fichierrecursive`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fichierrecursive`
--
ALTER TABLE `fichierrecursive`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
