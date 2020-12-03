-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 12:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `racuni`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `broj_racuna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OIB` bigint(20) NOT NULL,
  `datum_racuna` date NOT NULL,
  `datum_valuta` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `broj_racuna`, `naziv`, `adresa`, `grad`, `OIB`, `datum_racuna`, `datum_valuta`, `created_at`, `updated_at`) VALUES
(1, '10/52/8', 'Prima d.o.o.', 'Glavna 22', '42000 Varaždin', 54567637626, '2020-11-10', '2020-12-01', NULL, NULL),
(2, '42/32/2', 'Konzum d.o.o.', 'Varaždinska 15', '42000 Varaždin', 54067137241, '2020-11-10', '2020-12-01', NULL, NULL),
(3, '50/63/7', 'Bazinga d.o.o.', 'Ulica Braće Radić 2c', '40000 Čakovec', 54067137241, '2020-11-10', '2020-12-01', NULL, NULL),
(4, '10/41/9', 'Ovis d.o.o.', 'Braće Radića 10', 'Varaždin', 15845895424, '2020-12-02', '2020-12-17', '2020-12-02 18:02:25', '2020-12-02 18:02:25'),
(5, '67/29/4', 'Haix d.o.o.', 'Gospodarska 12', 'Mala Subotica 40230', 15986524789, '2020-12-03', '2020-12-18', '2020-12-03 10:15:25', '2020-12-03 10:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `froms`
--

CREATE TABLE `froms` (
  `id` int(10) UNSIGNED NOT NULL,
  `tvrtka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OIB` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `froms`
--

INSERT INTO `froms` (`id`, `tvrtka`, `adresa`, `grad`, `OIB`, `created_at`, `updated_at`) VALUES
(1, 'Ovis d.o.o.', 'Ulica Braće Radić 10A', '42000 Varaždin', 54067137241, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cijena` double(8,2) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `naziv`, `opis`, `cijena`, `kolicina`, `created_at`, `updated_at`) VALUES
(1, 'Huawei P20', 'Pametni mobitel', 900.00, 2, NULL, NULL),
(2, 'Newest HP', 'Laptop', 500.00, 1, NULL, NULL),
(3, 'Acer K202HQL', 'kompjuterski monitor', 800.00, 1, NULL, NULL),
(4, 'Pan', 'Pivo', 7.00, 9, '2020-12-02 17:50:44', '2020-12-02 17:50:44'),
(5, 'Kaligula', 'Knjiga', 40.00, 1, '2020-12-02 18:01:28', '2020-12-02 18:01:28'),
(6, 'Nescaffe', 'Instant kava', 22.00, 5, '2020-12-02 18:03:02', '2020-12-02 18:03:02'),
(7, 'Moving Head', 'Uređaj za rasvjetu', 2700.00, 1, '2020-12-03 07:47:40', '2020-12-03 07:47:40'),
(8, 'Philips', 'Televizor HD', 1200.00, 2, '2020-12-03 09:01:39', '2020-12-03 09:01:39'),
(9, 'Gležnjaće', 'Patike za planinarenje', 900.00, 2, '2020-12-03 10:17:06', '2020-12-03 10:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `item_accounts`
--

CREATE TABLE `item_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `accounts_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_accounts`
--

INSERT INTO `item_accounts` (`id`, `items_id`, `accounts_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 1, 2, NULL, NULL),
(4, 3, 2, NULL, NULL),
(5, 1, 3, NULL, NULL),
(6, 2, 3, NULL, NULL),
(7, 3, 3, NULL, NULL),
(8, 4, 3, '2020-12-02 17:50:44', '2020-12-02 17:50:44'),
(9, 5, 1, '2020-12-02 18:01:28', '2020-12-02 18:01:28'),
(10, 6, 4, '2020-12-02 18:03:03', '2020-12-02 18:03:03'),
(11, 7, 3, '2020-12-03 07:47:41', '2020-12-03 07:47:41'),
(12, 8, 4, '2020-12-03 09:01:39', '2020-12-03 09:01:39'),
(13, 9, 5, '2020-12-03 10:17:07', '2020-12-03 10:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(40, '2020_12_01_101146_create_users_table', 1),
(41, '2020_12_01_133138_create_froms_table', 1),
(42, '2020_12_01_151713_create_accounts_table', 1),
(43, '2020_12_01_163053_create_items_table', 1),
(44, '2020_12_01_165856_create_item_accounts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `froms`
--
ALTER TABLE `froms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_accounts`
--
ALTER TABLE `item_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_accounts_items_id_foreign` (`items_id`),
  ADD KEY `item_accounts_accounts_id_foreign` (`accounts_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `froms`
--
ALTER TABLE `froms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item_accounts`
--
ALTER TABLE `item_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_accounts`
--
ALTER TABLE `item_accounts`
  ADD CONSTRAINT `item_accounts_accounts_id_foreign` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `item_accounts_items_id_foreign` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
