-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 juin 2022 à 14:07
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rrs`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(5) NOT NULL,
  `nom_categorie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'SEDAN'),
(2, 'SUV'),
(3, 'VAN');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(5) NOT NULL,
  `nomcomplete` varchar(50) DEFAULT NULL,
  `telephone` int(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cin` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nomcomplete`, `telephone`, `email`, `cin`, `pass`) VALUES
(1, 'Mostafa', 99, 'm@gmail.com', 'm', 'm'),
(2, 'amine', 0, 'aminehmar@gmail.com', 'lksj,jg', 'pppp'),
(3, 'Reda', 99, 'r@gmail.com', 'L', 'r'),
(4, 'Mohamed', 9, 'mm@gmail.com', 'k5678', 'mm'),
(5, 'Anass', 9, 'anass@gmail.com', 'K1234', 'a');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(5) NOT NULL,
  `dateDebut` date DEFAULT NULL,
  `id_client` int(5) DEFAULT NULL,
  `id_vehicule` int(5) DEFAULT NULL,
  `dateFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `dateDebut`, `id_client`, `id_vehicule`, `dateFin`) VALUES
(32, '2022-06-25', 1, 2, '2022-07-01'),
(33, '1970-01-01', 1, 2, '1970-01-01'),
(34, '2022-06-25', 1, 2, '2022-06-25'),
(35, '2022-06-25', 1, 2, '2022-06-25'),
(36, '2022-06-24', 1, 2, '2022-06-25'),
(37, '1970-01-01', 1, 2, '1970-01-01'),
(38, '2022-07-02', 1, 2, '2022-07-08'),
(39, '2022-07-02', 1, 2, '2022-07-08'),
(40, '2022-06-22', 1, 2, '2022-06-25'),
(41, '1970-01-01', 1, 2, '1970-01-01'),
(42, '1970-01-01', 1, 2, '1970-01-01'),
(43, '1970-01-01', 1, 2, '1970-01-01'),
(44, '2022-06-24', 1, 2, '2022-06-25'),
(45, '2022-06-24', 1, 2, '2022-06-25'),
(46, '2022-06-24', 1, 2, '2022-06-25'),
(47, '2022-06-24', 1, 2, '2022-06-25'),
(49, '2022-06-25', 4, 12, '2022-06-30');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` int(5) NOT NULL,
  `id_categorie` int(5) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `prix` decimal(4,0) DEFAULT NULL,
  `vehicule` varchar(50) DEFAULT NULL,
  `images` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `id_categorie`, `description`, `prix`, `vehicule`, `images`) VALUES
(1, 1, 'The lines of the new A-Class all tend in the same direction: from our design philosophy to sensual clarity. The surfaces are even more refined, the details even more striking. The new, intuitive MBUX multimedia system was designed for one person in the world: you. Every detail can therefore be perfectly adapted to your wishes, your driving style and your needs. All it takes is a wave of your hand on the touchpad, the steering wheel or, for the very first time, on the new touchscreen.', '900', 'Mercedes-Benz Class A', 'class a.webp'),
(2, 1, 'The new A-Class Sedan with MBUX (Mercedes-Benz User Experience) and its sporty 3-volume design. One of the most classic forms of the automobile is now one of the most modern. The new A-Class Sedan could not interpret the 3-volume design in a sportier way. In front, a revolutionary A-Class. Behind, the sedan offers more: more space, more comfort, more A-Class. With MBUX (Mercedes-Benz User Experience), use your vehicle in a whole new way.', '900', 'Mercedes-Benz Class A Berline', 'a berline.jpg'),
(3, 1, 'The power of an athlete, the professionalism of a business sedan.\r\nThe Mercedes-AMG E 53 4MATIC+ Sedan is the epitome of the performance-oriented sedan. This will not change in the future. With this model, you can go relaxed to your business meeting or enjoy sporty driving on the road.', '1200', 'Mercedes-Benz AMG E53', 'amg e53.jpg'),
(4, 1, 'The concept of the \"Estate\" is redefined here.\r\nYou can have it all. The entry point into the world of performance driving of the E-Class is in the form of the Mercedes-AMG E 53 4MATIC+. It exudes an even more sporty design and a greater appetite for performance. Enjoy even more freedom of choice with the numerous opportunities for individualisation.', '1200', 'Mercedes-Benz AMG E53 Estate', 'amg e53 estate.jpg'),
(5, 1, 'The new CLA is designed to perfectly meet your expectations. With its dazzling diamond grille, its muscular shoulders and its wide rear part, it irresistibly attracts all eyes on it. And on you. With its shiny diamond grille, muscular shoulders and wide rear, all eyes are on it. And on you. Don\'t wait any longer, request your test drive today and experience the new Mercedes CLA Coupé yourself!', '900', 'Mercedes-Benz CLA', 'cla.jpg'),
(6, 1, 'Even the smallest detail is grand.\r\nThe grille slats sparkle. The emblems on the pillars shine. Body paint and chrome accents bring out the flowing lines and confident stance. The interior is the result of the work of 16,000 needles working in unison and several pairs of expert hands.', '1800', 'Mercedes-Benz Maybach S-Class', 'image1.jpg'),
(7, 2, 'The new GLC Coupé presents itself with an even more refined and sportier design. The high-performance LED headlights with the new lighting concept and the new chrome elements immediately catch the eye. The expressive air intakes in the bumper give the new GLC Coupé even more power and presence. The new design of the rims and the AMG Line increase the sportiness and elegance of the vehicle tenfold. The fully digital cockpit with high-resolution touchscreen offers fascinating display and control', '1750', 'Mercedes-Benz GLC Coupé', 'glc coupé.jpg'),
(8, 2, 'The even more striking grille, the more elegant chrome inserts, the narrower headlights attract all eyes. The front end of the new CLS has an even more aggressive look and greater presence typical of an SUV.', '1500', 'Mercedes-Benz CLS', 'cls.jpg'),
(9, 2, 'Discreet when necessary, assertive when necessary – this is the art of GLE design. AMG Line shines brightly with its diamond grille. Sporty front and rear aprons, large-format air intakes, painted wheel arch covers and specific alloy wheels reflect the sporty style. The new GLE is the first SUV with the revolutionary MBUX infotainment system. Highlights include a natural voice control system, multiple touch control elements and the ability to memorize more information about driver habits ', '1500', 'Mercedes-Benz GLE', 'gle.jpg'),
(10, 2, 'The new GLS proudly bears the “S” of its name. It accommodates up to seven people and offers them optimal comfort. The second row of seats benefits from fully electric adjustments while the third displays a level of comfort never before seen. All occupants enjoy the highest level of comfort in each seat and a digital infotainment offer never before equaled by an SUV.', '1350', 'Mercedes-Benz GLS', 'gls.jpg'),
(11, 3, 'With its expressive yet dynamic exterior design elements, the Vito Line SPORT is a real eye-catcher. The sporty style customization with contrasting colors is one of the highlights. It is visible on the front bumper, the engine cover, the sides and on the side of the rear bumper. In addition, the chrome grille, the large alloy rims and the tinted glasses as well as the side sill with strongly marked contours reinforce the sporty style.', '2500', 'Vito Line SPORT', 'van.webp'),
(12, 3, 'The V-Class captivates at first sight – and after several thousand kilometres. Families, businessmen and adventurers, as well as shuttle passengers. For example through its powerful exterior design lines and the variable, ergonomic interior concept.', '2000', 'Mercedes-Benz Class V', 'van2.webp');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_vehicule` (`id_vehicule`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id_vehicule` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule` (`id_vehicule`);

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
