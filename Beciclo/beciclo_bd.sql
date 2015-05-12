-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 11, 2015 at 09:30 AM
-- Server version: 10.0.15-MariaDB
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beciclo_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentaris`
--

CREATE TABLE IF NOT EXISTS `comentaris` (
  `id` int(10) unsigned NOT NULL,
  `producte_id` int(10) unsigned NOT NULL DEFAULT '0',
  `comentari` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuari_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comentaris`
--

INSERT INTO `comentaris` (`id`, `producte_id`, `comentari`, `usuari_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Se puede llegar a un acuerdo con el precio?', 1, '2015-05-08 13:52:43', '2015-05-08 13:52:43'),
(2, 2, 'Es pot utilitzar en bicicletes d''una altra marca que no sigui btwin?', 2, '2015-05-08 13:52:43', '2015-05-08 13:52:43'),
(3, 3, 'Cumple lo prometido', 3, '2015-05-08 13:52:43', '2015-05-08 13:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_05_08_142151_crear_tienda_tablas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preferits`
--

CREATE TABLE IF NOT EXISTS `preferits` (
  `id` int(10) unsigned NOT NULL,
  `usuari_id` int(10) unsigned NOT NULL DEFAULT '0',
  `producte_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `preferits`
--

INSERT INTO `preferits` (`id`, `usuari_id`, `producte_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2015-05-08 13:52:43', '2015-05-08 13:52:43'),
(2, 1, 2, '2015-05-08 13:52:43', '2015-05-08 13:52:43'),
(3, 2, 3, '2015-05-08 13:52:43', '2015-05-08 13:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `productes`
--

CREATE TABLE IF NOT EXISTS `productes` (
  `id` int(10) unsigned NOT NULL,
  `titol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu` double NOT NULL,
  `any` int(11) NOT NULL,
  `pes_aprox` double NOT NULL,
  `material` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuari_id` int(10) unsigned NOT NULL DEFAULT '0',
  `estat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comentari` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` blob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `productes`
--

INSERT INTO `productes` (`id`, `titol`, `marca`, `model`, `preu`, `any`, `pes_aprox`, `material`, `color`, `usuari_id`, `estat`, `comentari`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Bicicleta', 'Rockrider', '520', 299.95, 2014, 4.3, 'Acer', 'azul', 2, 'seminou', 'Bicicleta Rockrider Decathlon seminova', '', '2015-05-08 13:52:43', '2015-05-08 13:52:43'),
(2, 'Cadena bicicleta', 'Btwin', 'vel light', 18.99, 2007, 0.263, 'Alumini', 'plata', 1, 'nou', 'Cadena creada per a bicicletes de 10 velocitats', '', '2015-05-08 13:52:43', '2015-05-08 13:52:43'),
(3, 'Camara antipunxades', 'Michelin', 'Protek Max', 9.8, 2015, 0.35, 'caucho', 'negre', 3, 'nou', 'Camara Michelin per a pneumatics de 26 amb liquid reparador', '', '2015-05-08 13:52:43', '2015-05-08 13:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuaris`
--

CREATE TABLE IF NOT EXISTS `usuaris` (
  `id` int(10) unsigned NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciutat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `puntuacio` double NOT NULL,
  `foto` blob,
  `contrasenya` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuaris`
--

INSERT INTO `usuaris` (`id`, `nom`, `cognom`, `mail`, `telefon`, `direccio`, `provincia`, `ciutat`, `puntuacio`, `foto`, `contrasenya`, `created_at`, `updated_at`) VALUES
(1, 'Oleksanrdius', 'Vynokurius', 'oleksandr.first@gmail.com', '688381975', 'c.Espanya', 'Barcelona', 'Barcelona', 9.123, NULL, '1234', '2015-05-08 13:52:43', '2015-05-08 13:52:43'),
(2, 'Miriamius', 'Domingius', 'miriam.domingues@gmail.com', '666888111', 'c.Marina', 'Barcelona', 'Barcelona', 9.123, NULL, '5678', '2015-05-08 13:52:43', '2015-05-08 13:52:43'),
(3, 'Guillemius', 'Micoquius', 'guillem.mico@gmail.com', '666111333', 'c.Arc', 'Barcelona', 'Barcelona', 9.123, NULL, '9876', '2015-05-08 13:52:43', '2015-05-08 13:52:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentaris`
--
ALTER TABLE `comentaris`
  ADD PRIMARY KEY (`id`), ADD KEY `comentaris_producte_id_foreign` (`producte_id`), ADD KEY `comentaris_usuari_id_foreign` (`usuari_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `preferits`
--
ALTER TABLE `preferits`
  ADD PRIMARY KEY (`id`), ADD KEY `preferits_usuari_id_foreign` (`usuari_id`), ADD KEY `preferits_producte_id_foreign` (`producte_id`);

--
-- Indexes for table `productes`
--
ALTER TABLE `productes`
  ADD PRIMARY KEY (`id`), ADD KEY `productes_usuari_id_foreign` (`usuari_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `usuaris_mail_unique` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentaris`
--
ALTER TABLE `comentaris`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `preferits`
--
ALTER TABLE `preferits`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `productes`
--
ALTER TABLE `productes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentaris`
--
ALTER TABLE `comentaris`
ADD CONSTRAINT `comentaris_producte_id_foreign` FOREIGN KEY (`producte_id`) REFERENCES `productes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `comentaris_usuari_id_foreign` FOREIGN KEY (`usuari_id`) REFERENCES `usuaris` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `preferits`
--
ALTER TABLE `preferits`
ADD CONSTRAINT `preferits_producte_id_foreign` FOREIGN KEY (`producte_id`) REFERENCES `productes` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `preferits_usuari_id_foreign` FOREIGN KEY (`usuari_id`) REFERENCES `usuaris` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `productes`
--
ALTER TABLE `productes`
ADD CONSTRAINT `productes_usuari_id_foreign` FOREIGN KEY (`usuari_id`) REFERENCES `usuaris` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
