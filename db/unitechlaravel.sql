-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 04:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitechlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(1, 'CloudwaysCDN', 'A CDN service that boosts the response times of your Laravel site, resulting in superior performance. You can integrate it easily in just a few clicks. A CDN service that boosts the response times of your Laravel site, resulting in superior performance. You can integrate it easily in just a few clicks. A CDN service that boosts the response times of your Laravel site, resulting in superior performance. You can integrate it easily in just a few clicks.', 'public/admin/image/1734040302257896.jpg', '2022-05-28 03:48:20'),
(2, 'About Unitech Label', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'public/admin/image/1734680943311706.webp', '2022-06-04 05:31:02'),
(3, 'About Unitech Label', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'public/admin/image/1734681234045424.gif', '2022-06-04 05:35:40'),
(4, 'About Unitech Label', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.\r\n\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'public/admin/image/1734681446903747.gif', '2022-06-04 05:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `mobile`, `email`, `created_at`) VALUES
(1, 'dfdgdf', '545454544', 'fsdf@gmail.com', '2022-05-24 10:17:46'),
(2, 'tgrt', '43433', 'jmm@gmail.com', '2022-05-24 10:18:23'),
(3, 'Shimultala, Ashuila, Dhaka', '88048494984484', 'fsdf@gmail.com', '2022-05-29 03:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`) VALUES
(1, 'public/admin/image/1733701914796905.jpg', '2022-05-24 10:09:48'),
(2, 'public/admin/image/1733766129276952.webp', '2022-05-25 03:10:28'),
(3, 'public/admin/image/1733766138399646.webp', '2022-05-25 03:10:36'),
(4, 'public/admin/image/1733766144174880.webp', '2022-05-25 03:10:42'),
(5, 'public/admin/image/1733766150725148.webp', '2022-05-25 03:10:48'),
(6, 'public/admin/image/1733766157047806.webp', '2022-05-25 03:10:54'),
(7, 'public/admin/image/1733766163092636.webp', '2022-05-25 03:11:00'),
(8, 'public/admin/image/1733766168326587.webp', '2022-05-25 03:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `client_messages`
--

CREATE TABLE `client_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`) VALUES
(9, 'public/admin/image/1733777900630749.jpg', '2022-05-25 06:17:34'),
(10, 'public/admin/image/1733777954448729.jpg', '2022-05-25 06:18:25'),
(11, 'public/admin/image/1733777978310289.jpg', '2022-05-25 06:18:48'),
(12, 'public/admin/image/1733777987971047.jpg', '2022-05-25 06:18:57'),
(13, 'public/admin/image/1733778003115121.jpg', '2022-05-25 06:19:11'),
(14, 'public/admin/image/1733778032508620.jpg', '2022-05-25 06:19:40'),
(15, 'public/admin/image/1733778046412716.jpg', '2022-05-25 06:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `messages_from_clients`
--

CREATE TABLE `messages_from_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages_from_clients`
--

INSERT INTO `messages_from_clients` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'sharmin', 'jmm@gmail.com', 'Lorem ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', '2022-05-31 06:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `message_to_clients`
--

CREATE TABLE `message_to_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designition` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_to_clients`
--

INSERT INTO `message_to_clients` (`id`, `name`, `designition`, `message`, `image`, `created_at`) VALUES
(1, 'Name of The Person', 'Designition', 'High Quality Labeling Machine with Competitive Price. SGS Audited Suppliers. Quality China Products.', 'public/admin/image/1734047183746316.jpg', '2022-05-28 05:37:42'),
(2, 'Name of The Person', 'Designition', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'public/admin/image/1734322813390236.jpg', '2022-05-31 06:38:43'),
(3, 'Name of The Person2', 'Designition2', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'public/admin/image/1734322825510469.jpg', '2022-05-31 06:38:55');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(27, '2022_05_24_061911_create_addresses_table', 2),
(37, '2022_05_16_095847_create_galleries_table', 6),
(39, '2022_05_17_084604_create_sliders_table', 8),
(42, '2022_05_18_035945_create_clients_table', 11),
(46, '2022_05_24_050705_create_messages_from_clients_table', 14),
(47, '2022_05_18_054414_create_message_to_clients_table', 15),
(51, '2022_05_18_044717_create_overviews_table', 16),
(52, '2022_05_18_022003_create_services_table', 17),
(53, '2022_05_17_100852_create_products_table', 18),
(54, '2022_05_17_044340_create_abouts_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

CREATE TABLE `overviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overviews`
--

INSERT INTO `overviews` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(2, 'Compact Fusing Press HP-450M, HP-450MS', 'Automatic belt warping prevention device.\r\nUpper belt warpping prevention system\r\nadopt direct limit switch type like lower belt\r\nwarping prevention system.\r\nIncrease the fusing belt width for 450mm\r\nAdopted rubber driving roller for non-slip driving.\r\nMS MODEL has been equipped rotary strip-off device.', 'public/admin/image/1733884905126641.jpg', '2022-05-26 10:38:21'),
(4, 'Multi-Function Label Cutting and Folding Machine (WS-586)', 'Species: Cutting and Folding Machine Imprinting, Type: Folding, Placing Form of Template: Vertical, Die Cutting Tool: Steel Blade.', 'public/admin/image/1733885626273547.png', '2022-05-26 10:49:49'),
(5, 'CO2 laser cutting machine ZDJG-3020LD', 'Equipped with CCD camera, conveyor bed and roll feeder, ZDJG3020LD Laser Cutting Machine is designed to cut woven labels and ribbons from roll to roll that ensures extreme precision cutting, particularly suitable for making emblems with a perfect perpendicular cut edge.\r\n\r\nIt is ideal for working on different types of materials, such as woven labels, woven and printed ribbons, artificial leather, textile, paper and synthetic materials.\r\n\r\nThe working area is 300mm×200mm. Suitable for cutting roll materials within 200mm in width.', 'public/admin/image/1734036981390160.webp', '2022-05-28 02:55:32'),
(6, 'Muller Label Weaving Machine', 'High Quality Fabric Weaving Machine with Competitive Price. Quality China Products. SGS Audited Suppliers.', 'public/admin/image/1734051279534235.webp', '2022-05-28 06:42:48'),
(7, 'Multi-Function Label Cutting and Folding Machine (WS-586)', 'Species: Cutting and Folding Machine Imprinting, Type: Folding, Placing Form of Template: Vertical, Die Cutting Tool: Steel Blade.', 'public/admin/image/1734759632290425.jpg', '2022-06-05 02:21:46'),
(8, 'Design Team', 'A design is a plan or specification for the construction of an object or system or for the implementation of an activity or process or the result of that plan or specification in the form of a prototype, product, or process. The verb to design expresses the process of developing a design.', 'public/admin/image/1734850487531261.jpg', '2022-06-06 02:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(5, 'Product Title', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'public/admin/image/1734683942919418.jpg', '2022-06-04 06:18:43'),
(6, 'Product title2', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'public/admin/image/1734684367042164.jpg', '2022-06-04 06:25:27'),
(7, 'Product title3', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'public/admin/image/1734685224361637.jpg', '2022-06-04 06:39:05'),
(8, 'Product title4', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'public/admin/image/1734685296435948.jpg', '2022-06-04 06:40:14'),
(9, 'Product Title5', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'public/admin/image/1734685784198665.jpg', '2022-06-04 06:47:59'),
(10, 'Product Title6', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'public/admin/image/1734685823794815.jpg', '2022-06-04 06:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(3, 'Advanced Cache', 'Our optimized stack comprises of advanced cache technologies including Memcached, Varnish, and Redis for fast content delivery. Our optimized stack comprises of advanced cache technologies including Memcached, Varnish, and Redis for fast content delivery.', 'public/admin/image/1734759175155548.jpg', '2022-06-05 02:14:30'),
(4, 'HTTP/2 Supported', 'We offer HTTP/2 enabled servers that perform significantly faster by reducing the load on servers. We offer HTTP/2 enabled servers that perform significantly faster by reducing the load on servers. We offer HTTP/2 enabled servers that perform significantly faster by reducing the load on servers.', 'public/admin/image/1734759403316568.jpg', '2022-06-05 02:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`) VALUES
(9, 'public/admin/image/1734680291928891.jpg', '2022-06-04 05:20:41'),
(10, 'public/admin/image/1734680305477200.jpg', '2022-06-04 05:20:54'),
(11, 'public/admin/image/1734680312989690.jpg', '2022-06-04 05:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_messages`
--
ALTER TABLE `client_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages_from_clients`
--
ALTER TABLE `messages_from_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_to_clients`
--
ALTER TABLE `message_to_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overviews`
--
ALTER TABLE `overviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_messages`
--
ALTER TABLE `client_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `messages_from_clients`
--
ALTER TABLE `messages_from_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message_to_clients`
--
ALTER TABLE `message_to_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `overviews`
--
ALTER TABLE `overviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
