-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 23 mars 2022 à 15:51
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tosa_ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `prix_HT` int(10) NOT NULL,
  `tva` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `photo`, `prix_HT`, `tva`) VALUES
(10, 'Imprimante à Patrick', 'Cette imprimante 3D avec résine rose est idéale pour imprimer vos meilleures figurines de Patrick !', 'patrick.png', 450, 20),
(11, 'Manette de kéké kikou', 'La manette Babylon X Ganja Sinsémilia Style est l\'outil idéal pour performer sur tous les plus gros FPS du moment tout en foirant ton année à la Fac et par la suite ta misérable vie.', 'manette.png', 60, 20),
(12, 'Hélicoptère de Combat Apashe', 'Piou Piou Piou kaboom blblblb', 'apashe.png', 3500000, 10),
(13, 'Souris Ergonomique', 'Souris ergonomique filaire Deluxe Premium Golden Limited Edition GOTY', 'souris.png', 45, 20),
(14, 'Hérisson biker', 'Ancien membre des Hells Angels, un véritable doogy-dingo il n\'a vraiment aucune limite', 'davidson.png', 5000, 20),
(15, 'Chat Lauréat de beauté', 'Chat mignon deuxième dauphin au concours de Mister Félin 2022, livré avec son ruban de la victoire.', 'lauréat.png', 1000, 10),
(16, 'Régisseur Son Hérisson', 'Régis le régisseur son hérisson saura sonoriser vos meilleurs événements', 'régisson.jpg', 600, 10),
(17, 'Souris', 'Souris blanche peu ergonomique, elle adore pratiquer le pilate et déteste le choux-fleur.', 'sourisan.png', 20, 0),
(18, 'Professeur de Bio', 'Prof de Bio initiant deux jeunes de la génération Y au Metaverse, fourni avec deux élèves et deux casques VR selon les stocks disponibles.', 'profbio.png', 9999, 20),
(19, 'test', 'this is a test', 'test.jpg', 5, 0),
(20, 'test', 'this is aussi un test', 'test.jpg', 5, 0),
(21, 'pomme', 'Une sacrément bonne pomme', 'poire_000.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `type_role` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `type_role`) VALUES
(1, 'Client'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `ID_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `password`, `nom`, `prenom`, `ID_role`) VALUES
(1, 'martindamien284@gmail.com', '$2y$10$8uNUnrNJZ0WisFoS28rHAu7GEA4hFlYR3cCBJYLnFTWLHSFpNrvJC', 'damdam', 'martin', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
