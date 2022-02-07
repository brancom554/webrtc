-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 07 fév. 2022 à 17:53
-- Version du serveur : 8.0.26
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webrtc`
--

-- --------------------------------------------------------

--
-- Structure de la table `ads`
--

CREATE TABLE `ads` (
  `ads_id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `describe` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `ads`
--

INSERT INTO `ads` (`ads_id`, `title`, `location`, `describe`, `file`, `created_at`, `updated_at`) VALUES
(5, 'Nezha figurine', 'Beijing', 'A figurine of the firegod Nezha ', '2334532_1644243987.jpg', '2022-02-07 13:26:27', '2022-02-07 13:26:27'),
(7, 'Ads 2', 'Cotonou', 'A little desciption', '847305_1644244187.jpg', '2022-02-07 13:29:47', '2022-02-07 13:29:47'),
(8, 'Ajax course', 'Benin', 'An ajax course for javascript lover', 'ajax_1644247224.mp4', '2022-02-07 14:20:24', '2022-02-07 14:20:24');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `location`, `sexe`, `age`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Wayne', 'Shaw', 'Aliquip quasi reicie', 'Male', '55', 'dajute@mailinator.com', 'Pa$$w0rd!', '2022-02-03 12:46:35', '2022-02-03 12:46:35'),
(3, 'Wayne', 'Shaw', 'Aliquip quasi reicie', 'Male', '55', 'dkajute@mailinator.com', '$2y$10$eF4RlfSjWJfSyFV2LdCYS.IPL01Jt2B4HG/VAZpJUQMYmg72ZN1ay', '2022-02-03 12:51:40', '2022-02-03 12:51:40'),
(4, 'Delilah', 'Parsons', 'Corrupti facere omn', 'Female', '99', 'lyjexi@mailinator.com', '$2y$10$poueK.I/APMhRxw45tKJj.fwznYOP6tLt7yKWD9sn44dlcurwsUCi', '2022-02-03 13:09:41', '2022-02-03 13:09:41'),
(5, 'Courtney', 'Grimes', 'Nihil accusamus quo ', 'Female', '18', 'lyxokumyfi@mailinator.com', '$2y$10$/57qgmXYI4Expr3bpoCYA.vCj9i9JHwxLFXEVxTJY9Q/SjnXHKtE2', '2022-02-04 16:10:47', '2022-02-04 16:10:47'),
(6, 'Melvin', 'Hewitt', 'Expedita similique r', 'Female', '19', 'nytenegidy@mailinator.com', '$2y$10$H07aQLOnwcd6mJzLlO0QDOA3xQ7Qh3zYiN.rSBOxOJPbBDoqr8Iz.', '2022-02-04 16:13:28', '2022-02-04 16:13:28'),
(7, 'Stuart', 'Bonner', 'Pariatur Quia sapie', 'Female', '31', 'wavuq@mailinator.com', '$2y$10$9ZP5DOb5HTU91hElj5BLm.lY5vfTVpLqPMxqJAKAYWGYCHlVQxDsy', '2022-02-04 16:15:49', '2022-02-04 16:15:49'),
(8, 'Keaton', 'Roberts', 'Eos numquam volupta', 'Male', '28', 'vezuqi@mailinator.com', '$2y$10$idEfNi9rx8f.sADL2JECResrzA9MilYIM1Nvi7Bkw9/gRXxlgu4AS', '2022-02-04 16:25:49', '2022-02-04 16:25:49'),
(9, 'Kasper', 'Terrell', 'Et nostrud id iste n', 'Female', '84', 'maselaj@mailinator.com', '$2y$10$iL2d0H2vuCVSumjEZgLe5uyUKk0gVrmZIv0leQo9JySzi9EoU/3Ja', '2022-02-07 08:45:06', '2022-02-07 08:45:06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ads`
--
ALTER TABLE `ads`
  MODIFY `ads_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
