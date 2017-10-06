-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2017 at 04:07 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cityinfo`
--

CREATE TABLE `cityinfo` (
  `id` int(11) NOT NULL,
  `population` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `latitude` double(8,2) DEFAULT NULL,
  `longitude` double(8,2) DEFAULT NULL,
  `divisionor_state_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `famousplacesID` int(11) DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cityinfo`
--

INSERT INTO `cityinfo` (`id`, `population`, `created_at`, `updated_at`, `latitude`, `longitude`, `divisionor_state_id`, `name`, `famousplacesID`, `img`) VALUES
(1, 10, '2017-08-07 20:39:45', '2017-09-08 03:24:05', 2.00, 1.00, 13, 'Bawlakhe', 0, '1.jpg'),
(2, 1, '2017-08-07 20:40:04', '2017-08-07 20:40:04', 1.00, 11.00, 7, 'Dawei', 0, NULL),
(3, 10, '2017-08-07 20:40:25', '2017-08-07 20:40:25', 1.00, 11.00, 9, 'Thanatpin', 0, NULL),
(4, 10, '2017-08-07 20:40:46', '2017-08-07 20:40:46', 1.00, 11.00, 10, 'Tedim', 0, NULL),
(5, 10, '2017-08-07 20:41:04', '2017-08-07 20:41:04', 11.00, 11.00, 11, 'Bilin', 0, NULL),
(6, 10, '2017-08-07 20:41:27', '2017-08-07 20:41:27', 11.00, 11.00, 14, 'Buthidaung', 0, NULL),
(7, 10, '2017-08-08 21:00:06', '2017-08-08 21:00:06', 1.00, 11.00, 8, 'ShweBo', 0, NULL),
(8, 10, '2017-08-08 21:07:36', '2017-08-08 21:07:36', 1.00, 11.00, 5, 'Sagaing', 0, NULL),
(9, 10, '2017-08-08 21:11:38', '2017-08-08 21:12:10', 11.00, 1.00, 1, 'Shwe Pyi Thar Hlaing', 0, NULL),
(10, 1, '2017-09-07 02:31:03', '2017-09-07 02:31:03', 1.00, 1.00, 8, 'Pathein', NULL, NULL),
(11, 1, '2017-09-07 20:37:18', '2017-09-07 20:37:18', 1.00, 1.00, 1, 'Yangon', NULL, NULL),
(12, 1, '2017-09-08 03:14:40', '2017-09-08 03:14:40', 1.00, 1.00, 5, 'Monywa', NULL, '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `divisionorstate`
--

CREATE TABLE `divisionorstate` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double(8,2) DEFAULT NULL,
  `longitude` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisionorstate`
--

INSERT INTO `divisionorstate` (`id`, `category`, `name`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'division', 'Yangon', 0.00, 0.00, '2017-08-06 21:09:46', '2017-08-06 21:09:46'),
(2, 'state', 'Shan', 0.00, 0.00, '2017-08-06 21:09:54', '2017-08-06 21:09:54'),
(3, 'division', 'Mandalay', 0.00, 0.00, '2017-08-06 21:10:01', '2017-08-06 21:10:01'),
(4, 'state', 'Kachin', 0.00, 0.00, '2017-08-07 16:32:03', '2017-08-07 16:32:03'),
(5, 'division', 'Sagaing', 0.00, 0.00, '2017-08-07 16:32:16', '2017-08-07 16:32:16'),
(6, 'state', 'Kayin', 0.00, 0.00, '2017-08-07 16:32:35', '2017-08-07 16:32:35'),
(7, 'division', 'Taninthayi', 0.00, 0.00, '2017-08-07 16:32:45', '2017-08-07 16:32:45'),
(8, 'division', 'Ayeyarwady', 0.00, 0.00, '2017-08-07 16:32:56', '2017-08-07 16:32:56'),
(9, 'division', 'Bago', 0.00, 0.00, '2017-08-07 16:33:12', '2017-08-07 16:33:12'),
(10, 'state', 'Chin', 0.00, 0.00, '2017-08-07 16:33:29', '2017-08-07 16:33:29'),
(11, 'state', 'Mon', 0.00, 0.00, '2017-08-07 16:33:41', '2017-08-07 16:33:41'),
(12, 'division', 'Magway', 0.00, 0.00, '2017-08-07 16:33:53', '2017-08-07 16:33:53'),
(13, 'state', 'Kayah', 0.00, 0.00, '2017-08-07 16:34:08', '2017-08-07 16:35:47'),
(14, 'state', 'Rakhine', 0.00, 0.00, '2017-08-07 16:34:25', '2017-08-07 16:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `famousplace`
--

CREATE TABLE `famousplace` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cityinfo_id` int(11) DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `lat` double(8,2) DEFAULT NULL,
  `long` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `famousplace`
--

INSERT INTO `famousplace` (`id`, `name`, `cityinfo_id`, `img`, `description`, `lat`, `long`, `created_at`, `updated_at`) VALUES
(1, 'Bagan', 8, '1.jpg', '', 1.00, 1.00, '2017-08-12 19:22:20', '2017-09-11 02:48:50'),
(2, 'Shwe Da Gon Pagoda', 11, '2.jpg', '', 2.00, 2.00, '2017-08-12 19:37:06', '2017-09-11 02:48:07'),
(3, 'Pyin Oo Lwin', 8, '3.jpg', NULL, 1.00, 1.00, '2017-09-08 03:36:00', '2017-09-11 02:50:39'),
(4, 'Inelay lake', 5, '4.jpg', NULL, 1.00, 1.00, '2017-09-10 21:45:44', '2017-09-10 21:45:44'),
(5, 'Taung Gyi', 10, '5.jpg', NULL, 1.00, 1.00, '2017-09-10 21:47:53', '2017-09-11 02:49:54');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_02_062557_cityinfo_table', 2),
(4, '2017_08_04_083813_create_slides_table', 2),
(5, '2017_08_07_054049_create_divisionorstate_table', 2),
(6, '2017_08_07_074708_add_votes_to_cityinfo_table', 2),
(7, '2017_08_07_100422_add_votess_to_cityinfo_table', 3),
(8, '2017_08_13_042747_create_famousplace_table', 3),
(9, '2017_09_08_093240_add_img_to_cityinfo', 4),
(10, '2017_09_08_093450_add_img_to_cityinfo', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `img`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Yangon', 'Yangon (Burmese: ရန်ကုန်, MLCTS rankun mrui, pronounced [jàɴɡòʊɴ mjo̰]; formerly known as Rangoon, literally: \"End of Strife\") is the capital of the Yangon Region of Myanmar, also known as Burma. Yangon served as the capital of Myanmar until 2006, when the military government relocated the capital to the purpose-built city of Naypyidaw in central Myanmar.[3] With over 7 million people, Yangon is Myanmar\'s largest city and is its most important commercial centre.', '2017-08-07 16:24:43', '2017-08-07 16:24:43'),
(2, '2.jpg', 'Bagan', 'Bagan (Burmese: ပုဂံ; MLCTS: pu.gam, IPA: [bəɡàɴ]; formerly Pagan) is an ancient city located in the Mandalay Region of Myanmar. From the 9th to 13th centuries, the city was the capital of the Pagan Kingdom, the first kingdom that unified the regions that would later constitute modern Myanmar. During the kingdom\'s height between the 11th and 13th centuries, over 10,000 Buddhist temples, pagodas and monasteries were constructed in the Bagan plains alone, of which the remains of over 2,200 temples and pagodas still survive to the present day.', '2017-08-07 16:25:24', '2017-08-07 16:25:24'),
(3, '3.jpg', 'Mandalay', 'Mandalay (/ˌmændəˈleɪ/ or /ˈmændəleɪ/; Burmese: မန္တလေး; MLCTS: manta.le: [màɴdəlé]) is the second-largest city and the last royal capital of Myanmar (Burma). Located 716 km (445 mi) north of Yangon on the east bank of the Irrawaddy River, the city has a population of 1,225,553 (2014 census).', '2017-08-07 16:26:51', '2017-08-07 16:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chan Myae Soe', 'chanmyaesoe22@gmail.com', '$2y$10$YgUyK10OnJDOpH5vBdliPOPOy6DBaWFHuKlI5WnxdzYyERIyR6P4W', 'bWsWFrIJslSOhjnHDCSxb71Jdc4RkiJbQJPncD4hPhdrN4OG11IjTyldTkIM', '2017-09-06 21:42:17', '2017-09-06 21:42:17'),
(2, 'chan', 'chan@gmail.com', '$2y$10$MOmTXEayvZTarh.0hxnK3OMTUy1eSGbSxiWq5eflHm5qU7SL99GHK', 'Necn4aMyxucZRjwg8PpNn7eN04vPiQBaK1o9Y7tsmfUDgnCaGMw0Dhk0UwCT', '2017-09-07 03:34:50', '2017-09-07 03:34:50'),
(3, 'chan chan', 'chanm@gmail.com', '$2y$10$IoLfB.ySgORnqGQDMpBQfuYtRK3gJwdJ.Qv5esquenBmleQyUBONq', '8KDV1ObvRleEwAtiUF634TYhdMfylDj8k1ydolKhDHN7HJ6yVTuxOa7ryKRN', '2017-09-07 03:36:40', '2017-09-07 03:36:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cityinfo`
--
ALTER TABLE `cityinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisionorstate`
--
ALTER TABLE `divisionorstate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `famousplace`
--
ALTER TABLE `famousplace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cityinfo`
--
ALTER TABLE `cityinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `divisionorstate`
--
ALTER TABLE `divisionorstate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `famousplace`
--
ALTER TABLE `famousplace`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
