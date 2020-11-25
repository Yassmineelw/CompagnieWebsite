-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2020 at 06:01 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compagnieinfo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `apropos`
--

CREATE TABLE `apropos` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`id`, `code`, `name`) VALUES
(4, '111', 'Case'),
(5, '112', 'Bag'),
(6, '113', 'Packaging');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `body` text,
  `published` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `ressource_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `title`, `slug`, `body`, `published`, `created`, `modified`, `ressource_id`) VALUES
(27, 4, 'Sephora', 'Sephora', 'we will need a lot of plastic for this weekend', 1, '2020-11-23 19:57:06', '2020-11-23 19:57:06', 2),
(28, 4, 'dfhg', 'dfhg', 'fg', 1, '2020-11-24 00:00:00', '2020-11-24 00:00:29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `companies_files`
--

CREATE TABLE `companies_files` (
  `id` int(11) NOT NULL,
  `companie_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies_files`
--

INSERT INTO `companies_files` (`id`, `companie_id`, `file_id`) VALUES
(9, 27, 5),
(10, 28, 4);

-- --------------------------------------------------------

--
-- Table structure for table `companies_tags`
--

CREATE TABLE `companies_tags` (
  `companie_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies_tags`
--

INSERT INTO `companies_tags` (`companie_id`, `tag_id`) VALUES
(28, 5),
(27, 10);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `created`, `modified`, `status`) VALUES
(3, 'bodyLotion.png', 'files/add/', '2020-11-23 00:00:00', '2020-11-23 00:00:00', 1),
(4, 'hair.jpg', 'files/add/', '2020-11-23 00:00:00', '2020-11-23 00:00:00', 1),
(5, 'makeup.jpg', 'files/add/', '2020-11-23 00:00:00', '2020-11-23 00:00:00', 1),
(6, 'nails.jpg', 'files/add/', '2020-11-23 00:00:00', '2020-11-23 03:23:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

CREATE TABLE `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `companie_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `order` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ressources`
--

CREATE TABLE `ressources` (
  `id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  `ville_id` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ressources`
--

INSERT INTO `ressources` (`id`, `commande_id`, `ville_id`, `code`, `name`) VALUES
(1, 4, 1, '111', 'Silicone'),
(2, 5, 2, '112', 'Plastic '),
(3, 6, 3, '113', 'Metal ');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrateur'),
(2, 'clients', 'Clientèle'),
(3, 'visiteur', 'Visiteur');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `created`, `modified`) VALUES
(4, 'Clothes', '2020-11-23 00:00:00', '2020-11-23 00:00:00'),
(5, 'Makeup', '2020-11-23 00:00:00', '2020-11-23 00:00:00'),
(6, 'Facial Beauty', '2020-11-23 00:00:00', '2020-11-23 00:00:00'),
(7, 'Body Cream', '2020-11-23 00:00:00', '2020-11-23 00:00:00'),
(8, 'Nails', '2020-11-23 00:00:00', '2020-11-23 00:00:00'),
(9, 'Hair Products', '2020-11-23 00:00:00', '2020-11-23 00:00:00'),
(10, 'Brushes', '2020-11-23 00:00:00', '2020-11-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created`, `modified`, `uuid`, `confirmed`, `role_id`) VALUES
(4, 'admin@admin.com', '$2y$10$.Oh17iqySv5g9DbVtC8t2uunfxViHSkGyEpi3hyRU6H6CdLULONE.', '2020-11-23 07:57:26', '2020-11-23 07:57:26', '3a27c0dc-3de0-4b08-86f7-f555a3fe2320', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `villes`
--

CREATE TABLE `villes` (
  `id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `villes`
--

INSERT INTO `villes` (`id`, `commande_id`, `code`, `name`) VALUES
(1, 4, '111', 'Hong Kong'),
(2, 5, '112', 'Seoul'),
(3, 6, '113', 'Tokyo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apropos`
--
ALTER TABLE `apropos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_key` (`user_id`),
  ADD KEY `fk_ressource_id` (`ressource_id`);

--
-- Indexes for table `companies_files`
--
ALTER TABLE `companies_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file_id` (`file_id`),
  ADD KEY `companie_id` (`companie_id`) USING BTREE;

--
-- Indexes for table `companies_tags`
--
ALTER TABLE `companies_tags`
  ADD PRIMARY KEY (`companie_id`,`tag_id`),
  ADD KEY `tag_key` (`tag_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkk_company_id` (`companie_id`);

--
-- Indexes for table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkk_commande_id` (`commande_id`),
  ADD KEY `fk_ville_id` (`ville_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role_id` (`role_id`);

--
-- Indexes for table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_commande_id` (`commande_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apropos`
--
ALTER TABLE `apropos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `companies_files`
--
ALTER TABLE `companies_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ressource_id` FOREIGN KEY (`ressource_id`) REFERENCES `ressources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `companies_tags`
--
ALTER TABLE `companies_tags`
  ADD CONSTRAINT `companies_tags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `companies_tags_ibfk_2` FOREIGN KEY (`companie_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fkk_company_id` FOREIGN KEY (`companie_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ressources`
--
ALTER TABLE `ressources`
  ADD CONSTRAINT `fk_ville_id` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkk_commande_id` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `villes`
--
ALTER TABLE `villes`
  ADD CONSTRAINT `fk_commande_id` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
