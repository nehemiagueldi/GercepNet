-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2021 at 03:58 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gercepnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameFasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descFasilitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisFasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoFasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `nameFasilitas`, `descFasilitas`, `jenisFasilitas`, `fotoFasilitas`, `created_at`, `updated_at`) VALUES
(10, 'Standard Room', 'Ruangan Standard berkapasitas 15 orang. Dilengkapi dengan personal PC dan peralatan lainnya yang menunjang kebutuhan game kamu. Dilengkapi juga dengan rgb light biar kamu bisa jadi gamer profesional.', 'PC Room', 'fotofasilitas/arvib9tjawg7MqkS5SJ68UoFjnipCLOOzqqyNLZu.png', '2021-12-05 14:59:55', '2021-12-05 14:59:55'),
(12, 'Gamer Room', 'Ruangan Gamer berkapasitas 6 orang. Dilengkapi dengan 6 buah PC berstandar profesional dan peralatan lainnya. Gamer room juga dilengkapi dengan rgb light, kulkas minuman, dan vending machine makanan. Dengan ini kalian bisa bermain bersama - sama dengan temanmu dan tidak usah memikirkan makanan dan minuman selama bermain. Tidak hanya itu penyewa juga dapat memesan makanan lho.', 'PC Room', 'fotofasilitas/kiUSVel2dHVfr4dDfdA48baY0AVmJlnpEHYlFBA1.png', '2021-12-05 15:10:28', '2021-12-05 15:10:28'),
(13, 'Weeb Room', 'Ruangan gaming yang dilengkapi dengan perlengkapan anime yang membuat kamu tetap semangat dalam bermain. Ruangan ini dilengkapi dengan PC berstandar profesional dan ruangan private yaitu hanya 1 PC tiap ruang.', 'Private Room', 'fotofasilitas/5TERcYZJv3pDrzNFchxskHIGcjVR2uh0wVWbKKfs.png', '2021-12-05 15:11:12', '2021-12-05 15:11:12'),
(14, 'Competition Room', 'Ruangan competition room merupakan ruangan bermain 5 on 5 yang dilengkapi dengan kaca dan cocok untuk para pemain gamer yang ingin menguji kemampuannya secara tim. Dengan competition room, pemain dapat melakukan tanding selayaknya pertandingan profesional.', 'PC Room', 'fotofasilitas/4Hb1qq5wH7sg6y5K5X8KrGk591y7rPE3hdN9R87g.png', '2021-12-05 15:12:06', '2021-12-05 15:12:06'),
(15, 'Console Room', 'Ruangan ber-ac dan dilengkapi dengan tempat yang nyaman untuk bermain console game kesukaan kamu. Beberapa console yang disediakan diantaranya, PS5, Xbox, Nintendo WII, dan Nintendo Switch.', 'Private Room', 'fotofasilitas/i30U5l3l5GogaVe6fBmw6Jw1gietHN2gD3EuIiGH.png', '2021-12-05 15:13:51', '2021-12-05 15:13:51'),
(16, 'VR Room', 'Ruangan VR Room adalah ruangan yang dilengkapi dengan ac dan lahan yang luas. Ruangan ini sangat cocok untuk kalian yang ingin berpetualang di dunia Virtual Reality dan bergerak kesana sini untuk bermain game. Untuk saat ini VR Room hanya diperuntukkan 1 orang. Apabila penyewa ingin melakukan live streaming, tenang saja karena akan ada pegawai kami yang selalu memonitori penyewa selama masa penyewaan dengan biaya tambahan.', 'Private Room', 'fotofasilitas/J5Kfw19T9HzFMwW6LPRd8cGb9EF846MwQEow4tKd.png', '2021-12-05 15:14:33', '2021-12-05 15:14:33'),
(17, 'E-boy Room', 'Ruangan private yang hanya berisi 1 PC dan berisikan peralatan yang mendukung kamu untuk menjadi e-boy profesional. Dengan ruangan ini, penyewa dapat melakukan live streaming dengan green screen dan setup ruangan yang estetik dan sangat cocok bagi kalian yang ingin melakukan live stream pertama namun malu dengan setup komputer yang ada di rumah. Tidak hanya PC, penyewa juga dapat meminjam layanan perangkat lainnya seperti console VR, ps5, dan sebagainya.', 'Private Room', 'fotofasilitas/0FUQBckMQXoyCXFXATvJmtcBvtACD27Rd2hzxzRx.png', '2021-12-05 15:15:11', '2021-12-05 15:15:11'),
(18, 'E-girl Room', 'Ruangan private yang hanya berisi 1 PC dan berisikan peralatan yang mendukung kamu untuk menjadi e-girl profesional. Ruangan yang bernuansa warna pink dan banyak benda lucu membuat kamu jadi semangat untuk bermain lagi.', 'Private Room', 'fotofasilitas/ZYuXGo7wuX7EVMFhIunK8NZqD4IguX03r4KAg0Od.png', '2021-12-05 15:15:44', '2021-12-05 15:15:44'),
(19, 'Streaming Room', 'Streaming room merupakan ruangan khusus untuk bermain PC. Dilengkapi dengan AC dan kulkas minuman, penyewa dapat melakukan streaming dengan nyaman tanpa harus mengkhawatirkan suara penyewa lainnya. Tidak hanya untuk melakukan streaming, ruangan ini juga cocok untuk melakukan recording.', 'Private Room', 'fotofasilitas/yjaS8g66JkH1oCanGKrNyIRgdXzPmsmqvoqEobUP.png', '2021-12-05 15:16:35', '2021-12-05 15:16:35'),
(20, 'Master Room', 'Sesuai dengan namanya, ruangan ini menyediakan segala macam game. Mulai dari game online, sampai dengan game offline. Ruangan ini bisa berisikan 5-8 orang dan dapat di booking secara private agar ruangan ini bisa hanya untuk kamu dan teman-teman kamu!', 'Private Room', 'fotofasilitas/OKB4yoDlhtMxk32NUJOzKrPuaN16O8IlqIS8W07V.png', '2021-12-05 15:17:14', '2021-12-05 15:17:14'),
(21, 'RGB Room', 'Ruang kecil hanya untuk kamu dan teman-teman kamu. Berisikan RGB light yang bisa bikin kamu tambah semangat dalam bermain game. Selain game, kamu bisa sambil menonton banyak film asik dan juga rame!', 'Private Room', 'fotofasilitas/TSnGl1X0BktsKgjNtmEL9tY3cvbyqQ7nU7XaIsmo.png', '2021-12-05 15:45:36', '2021-12-05 15:45:36'),
(22, 'Tryhard Room', 'Ruangan khusus buat kamu yang bisa seharian ngegame tanpa berhenti! Dilengkapi dengan tempat makan khusus dan kasur kecil. Ada diskon buat kamu yang ambil paket 24 jam loh!', 'Private Room', 'fotofasilitas/g79PVcNqpPtgCmzI6eAf64Py8GtAvFUt5GN5DrmO.png', '2021-12-05 15:53:45', '2021-12-05 15:53:45');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_11_30_185256_create_facilities_table', 1),
(4, '2021_12_01_140527_create_sewas_table', 1),
(5, '2021_12_02_182022_create_jams_table', 1),
(6, '2021_12_03_094239_create_requests_table', 1);

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
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sewas`
--

CREATE TABLE `sewas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaFasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mulai` datetime NOT NULL,
  `jam_selesai` datetime NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sewas`
--

INSERT INTO `sewas` (`id`, `user_id`, `username`, `namaFasilitas`, `jam_mulai`, `jam_selesai`, `status`, `created_at`, `updated_at`) VALUES
(10, 21, 'User', 'Gamer Room', '2021-12-06 22:40:00', '2021-12-06 13:40:00', 0, NULL, NULL),
(11, 21, 'User', 'Weeb Room', '2021-12-10 12:52:00', '2021-12-24 15:54:00', 0, NULL, NULL),
(12, 21, 'User', 'Tryhard Room', '2021-12-07 22:55:00', '2021-12-31 22:55:00', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `captcha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','management','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `image`, `email_verified_at`, `password`, `captcha`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', 'fotoprofile/KGaztKRFwMA2OhmDyTGYmTYuU2G2EQ4nLDn7qYhY.jpg', NULL, '$2y$10$Sq8VAtbsSAon6LH5rPyUjOwHT4zr3m5Ysq.FzBTzGXUdCLPNKhZN.', 'bbug78', 'admin', NULL, NULL, NULL),
(3, 'management', 'management', 'management@gmail.com', 'fotoprofile/YfuGoi8OZbvKGaLIDldFonGIMxJMXi8nS7lYtwvP.jpg', NULL, '$2y$10$I/ypR9wISaBpuSerLI8ZRu9K3i7ZyS.TBbTZIvhhY1mxyyd7Ojbce', 'b3b2q8', 'management', NULL, NULL, NULL),
(21, 'User', 'User', 'user@gmail.com', 'fotoprofile/jJE674Lg6mGnYjNJx3K2gB1y8GYCMdLmUG1nGXNp.jpg', NULL, '$2y$10$2Wowl5v5mOrn58UpvI.v/.3KIWgLRX0hB.Jxa1/VPFRL0Az4H.3fO', 'pttaed', 'user', NULL, '2021-12-05 15:38:48', '2021-12-05 15:38:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewas`
--
ALTER TABLE `sewas`
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
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sewas`
--
ALTER TABLE `sewas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
