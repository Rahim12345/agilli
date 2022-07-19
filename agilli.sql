-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Hazırlanma Vaxtı: 19 İyul, 2022 saat 11:39
-- Server versiyası: 5.7.33
-- PHP Versiyası: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `agilli`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_no` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `categories`
--

INSERT INTO `categories` (`id`, `name_az`, `name_en`, `order_no`, `created_at`, `updated_at`) VALUES
(1, 'SOCIAL OPENPAGE', 'SOCIAL OPENPAGE', 0, '2022-07-17 08:37:17', '2022-07-17 08:37:36'),
(2, 'TVC', 'TVC', 0, '2022-07-17 08:37:29', '2022-07-17 08:37:29'),
(3, 'PRINT', 'PRINT', 0, '2022-07-17 08:37:43', '2022-07-17 08:37:43'),
(4, 'DIGITAL', 'DIGITAL', 0, '2022-07-17 08:38:20', '2022-07-17 08:38:20');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'rahim.suleymanov94@gmail.com', '2022-07-19 01:33:43', '2022-07-19 01:33:43'),
(2, 'adpuuniversitet@gmail.com', '2022-07-19 01:34:40', '2022-07-19 01:34:40');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2019_08_19_000000_create_failed_jobs_table', 1),
(41, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(42, '2022_03_05_040356_create_options_table', 1),
(43, '2022_07_13_022102_create_partnyor_images_table', 1),
(44, '2022_07_13_082826_create_categories_table', 1),
(45, '2022_07_15_081616_create_projects_table', 1),
(46, '2022_07_15_081712_create_project_images_table', 1),
(47, '2022_07_17_065906_create_news_table', 1),
(48, '2022_07_19_052724_create_contacts_table', 2);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_alt_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `cover_alt_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `title_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_1_az` text COLLATE utf8mb4_unicode_ci,
  `text_1_en` text COLLATE utf8mb4_unicode_ci,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1_alt_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image_1_alt_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `text_2_az` text COLLATE utf8mb4_unicode_ci,
  `text_2_en` text COLLATE utf8mb4_unicode_ci,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2_alt_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image_2_alt_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `news`
--

INSERT INTO `news` (`id`, `cover`, `cover_alt_az`, `cover_alt_en`, `title_az`, `title_en`, `author_az`, `author_en`, `release_date_az`, `release_date_en`, `text_1_az`, `text_1_en`, `image_1`, `image_1_alt_az`, `image_1_alt_en`, `text_2_az`, `text_2_en`, `image_2`, `image_2_alt_az`, `image_2_alt_en`, `created_at`, `updated_at`) VALUES
(1, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'Alt(AZ) banner', 'Alt(EN) banner', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:569,&quot;h&quot;:62,&quot;abs_x&quot;:456,&quot;abs_y&quot;:697}\">First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:95,&quot;w&quot;:569,&quot;h&quot;:20,&quot;abs_x&quot;:456,&quot;abs_y&quot;:772}\">Why do I need it?</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:569,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:806}\">Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:183,&quot;w&quot;:569,&quot;h&quot;:83,&quot;abs_x&quot;:456,&quot;abs_y&quot;:860}\">Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:569,&quot;h&quot;:62,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:697}\">First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:95,&quot;w&quot;:569,&quot;h&quot;:20,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:772}\">Why do I need it?</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:569,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:806}\">Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:183,&quot;w&quot;:569,&quot;h&quot;:83,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:860}\">Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', 'Alt(AZ)', 'Alt(EN)', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:1255}\">If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:74,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:1309}\">He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:1364}\">Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:1255}\">If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:74,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:1309}\">He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:1364}\">Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', 'Alt(AZ)', 'Alt(EN)', '2022-07-17 22:40:59', '2022-07-19 07:03:05'),
(2, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', '', '', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '', '', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '', '', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(3, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', '', '', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '', '', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '', '', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(4, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', '', '', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '', '', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '', '', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(5, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', '', '', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '', '', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '', '', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(6, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', '', '', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '', '', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '', '', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(7, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', '', '', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '', '', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '', '', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(8, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', '', '', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '', '', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '', '', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(9, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', '', '', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '', '', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '', '', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(10, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', '', '', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '', '', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '', '', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(11, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'Alt(AZ)', 'Alt(EN)', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:569,&quot;h&quot;:62,&quot;abs_x&quot;:456,&quot;abs_y&quot;:697}\">First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:95,&quot;w&quot;:569,&quot;h&quot;:20,&quot;abs_x&quot;:456,&quot;abs_y&quot;:772}\">Why do I need it?</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:569,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:806}\">Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:183,&quot;w&quot;:569,&quot;h&quot;:83,&quot;abs_x&quot;:456,&quot;abs_y&quot;:860}\">Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:569,&quot;h&quot;:62,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:697}\">First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:95,&quot;w&quot;:569,&quot;h&quot;:20,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:772}\">Why do I need it?</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:569,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:806}\">Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:183,&quot;w&quot;:569,&quot;h&quot;:83,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:860}\">Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', NULL, NULL, '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:1255}\">If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:74,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:1309}\">He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:1364}\">Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:1255}\">If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:74,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:1309}\">He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:1364}\">Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', NULL, NULL, '2022-07-17 22:40:59', '2022-07-19 07:16:02'),
(12, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'Alt(AZ)', 'Alt(EN)', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:569,&quot;h&quot;:62,&quot;abs_x&quot;:456,&quot;abs_y&quot;:697}\">First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:95,&quot;w&quot;:569,&quot;h&quot;:20,&quot;abs_x&quot;:456,&quot;abs_y&quot;:772}\">Why do I need it?</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:569,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:806}\">Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:183,&quot;w&quot;:569,&quot;h&quot;:83,&quot;abs_x&quot;:456,&quot;abs_y&quot;:860}\">Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:569,&quot;h&quot;:62,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:697}\">First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:95,&quot;w&quot;:569,&quot;h&quot;:20,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:772}\">Why do I need it?</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:569,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:806}\">Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:183,&quot;w&quot;:569,&quot;h&quot;:83,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:860}\">Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', 'Alt(AZ)', 'Alt(EN)', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:1255}\">If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:74,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:1309}\">He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:456,&quot;abs_y&quot;:1364}\">Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:20,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:1255}\">If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:74,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:1309}\">He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p bis_size=\"{&quot;x&quot;:20,&quot;y&quot;:129,&quot;w&quot;:586,&quot;h&quot;:41,&quot;abs_x&quot;:1100,&quot;abs_y&quot;:1364}\">Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', 'Alt(AZ)', 'Alt(EN)', '2022-07-17 22:40:59', '2022-07-19 07:14:51');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `options`
--

INSERT INTO `options` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'unvan_az', '32 Samad Vurgun str.,AZ1042, Baku Azerbaijan (Az)', '2022-07-17 07:31:57', '2022-07-17 07:31:57'),
(2, 'unvan_en', '32 Samad Vurgun str.,AZ1042, Baku Azerbaijan (En)', '2022-07-17 07:31:57', '2022-07-17 07:31:57'),
(3, 'email', 'info@an.az', '2022-07-17 07:31:57', '2022-07-17 07:31:57'),
(4, 'tel', '+994125234254', '2022-07-17 07:31:57', '2022-07-17 07:39:09'),
(5, 'instagram', 'Instagram', '2022-07-17 07:38:32', '2022-07-17 07:38:32'),
(6, 'facebook', 'Facebook', '2022-07-17 07:38:32', '2022-07-17 07:38:32'),
(7, 'linkedin', 'Linkedin', '2022-07-17 07:38:32', '2022-07-17 07:38:32'),
(8, 'telegram', 'Telegram', '2022-07-17 07:38:58', '2022-07-17 07:38:58'),
(9, 'home_banner_text_az', 'Biz ağlın sehrindən və nağılın gücündən yaranan hekayələrə inanırıq!', '2022-07-17 07:59:37', '2022-07-17 07:59:37'),
(10, 'home_banner_text_en', 'We believe in stories born from the magic of the mind and the power of storytelling!', '2022-07-17 07:59:37', '2022-07-17 07:59:37'),
(11, 'home_banner_button_text_az', 'SHOWREEL BAXIN', '2022-07-17 07:59:37', '2022-07-17 07:59:37'),
(12, 'home_banner_button_text_en', 'WATCH SHOWREEL', '2022-07-17 07:59:37', '2022-07-17 07:59:37'),
(13, 'home_banner_link', 'Link', '2022-07-17 07:59:37', '2022-07-17 07:59:37'),
(14, 'home_banner_src', 'oMN28b0gfTm6cG6MlEMzkqiHB7zxrOPtnVbPDjOP.png', '2022-07-17 07:59:37', '2022-07-17 07:59:37'),
(15, 'about_banner_button_text_az', 'SHOWREEL BAXIN', '2022-07-17 08:11:00', '2022-07-17 08:11:00'),
(16, 'about_banner_button_text_en', 'WATCH SHOWREEL', '2022-07-17 08:11:00', '2022-07-17 08:11:00'),
(17, 'about_banner_link', 'Link', '2022-07-17 08:11:00', '2022-07-17 08:11:00'),
(18, 'about_banner_src', 'nCeHIcMZj9yvfUFXle0p2uyTzE8vuda2eBt96Hhy.png', '2022-07-17 08:11:00', '2022-07-17 08:11:00'),
(19, 'home_title_1_az', 'strategiya', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(20, 'home_title_1_en', 'strategy', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(21, 'home_title_2_az', 'kreativ', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(22, 'home_title_2_en', 'creative', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(23, 'home_title_3_az', 'dijital', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(24, 'home_title_3_en', 'dijital', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(25, 'home_text_1_az', 'Yaradıcı işdə uğurlu strategiya ağıllı yol seçimi deməkdir. Bizim ağlımız belə şeylərə yaxşı işləyir.', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(26, 'home_text_1_en', 'A successful strategy in creative work means choosing a smart path. Our minds are good at such things.', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(27, 'home_text_2_az', 'Biz xoşbəxt sonluqla bitən nağıllar danışmağı sevirik. Bizim nağıllarımız yuxu yox, uğur gətirir.', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(28, 'home_text_2_en', 'We love to tell stories with happy endings. Our stories bring success, not dreams.', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(29, 'home_text_3_az', 'Sizə nağıl kimi gəlsə də, dijital artıq yeni dövrümüzün adıdır. Dijitalda bütün nağıllar həm də gerçəkləşə bilir.', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(30, 'home_text_3_en', 'Although it sounds like a fairy tale, digital is already the name of our new era. All fairy tales can also come true in digital.', '2022-07-17 08:20:45', '2022-07-17 08:20:45'),
(31, 'project_banner_button_text_az', 'SHOWREEL BAXIN', '2022-07-17 08:33:46', '2022-07-17 08:33:46'),
(32, 'project_banner_button_text_en', 'WATCH SHOWREEL', '2022-07-17 08:33:46', '2022-07-17 08:33:46'),
(33, 'project_banner_link', 'Link', '2022-07-17 08:33:46', '2022-07-17 08:33:46'),
(34, 'project_banner_src', 'igBSwuEK4N5DRuRxaXFgXj6UamvMtiq3t1umiajM.png', '2022-07-17 08:33:46', '2022-07-17 08:33:46'),
(35, 'partnyor_home_partnyor_title_az', 'PARTNYORLAR', '2022-07-17 22:12:06', '2022-07-17 22:12:06'),
(36, 'partnyor_home_partnyor_title_en', 'PARTNERS', '2022-07-17 22:12:07', '2022-07-17 22:12:07'),
(37, 'partnyor_home_partnyor_text_az', 'Onlar kimi sizin üçün də ağıllı həllər təklif edə bilərik.', '2022-07-17 22:12:07', '2022-07-17 22:12:07'),
(38, 'partnyor_home_partnyor_text_en', 'Like them, we can offer smart solutions for you.', '2022-07-17 22:12:07', '2022-07-17 22:12:07'),
(39, 'team_home_partnyor_title_az', 'komanda', '2022-07-17 22:20:06', '2022-07-17 22:20:06'),
(40, 'team_home_partnyor_title_en', 'team', '2022-07-17 22:20:06', '2022-07-17 22:20:06'),
(41, 'team_home_partnyor_text_az', '1st sit amet, consectetur adipiscing elit. Aliquam tempus ac.', '2022-07-17 22:20:06', '2022-07-17 22:20:06'),
(42, 'team_home_partnyor_text_en', '1st sit amet, consectetur adipiscing elit. Aliquam tempus ac.', '2022-07-17 22:20:06', '2022-07-17 22:20:06'),
(43, 'news_banner_button_text_az', 'SHOWREEL BAXIN', '2022-07-17 22:25:29', '2022-07-17 22:25:29'),
(44, 'news_banner_button_text_en', 'WATCH SHOWREEL', '2022-07-17 22:25:29', '2022-07-17 22:25:29'),
(45, 'news_banner_link', 'Link', '2022-07-17 22:25:29', '2022-07-17 22:25:29'),
(46, 'news_banner_src', 'PcxUzTMRztqiT7CyRwqbyFe5oAKjh7yDEPDYGlyM.png', '2022-07-17 22:25:29', '2022-07-17 22:25:29'),
(47, 'home_banner_src_alt_az', 'Alt(AZ)', '2022-07-19 02:30:44', '2022-07-19 02:30:44'),
(48, 'home_banner_src_alt_en', 'Alt(EN)', '2022-07-19 02:30:44', '2022-07-19 02:31:02'),
(49, 'project_banner_src_alt_az', 'Alt(AZ)', '2022-07-19 03:53:53', '2022-07-19 05:29:07'),
(50, 'project_banner_src_alt_en', 'Alt(EN)', '2022-07-19 03:53:53', '2022-07-19 03:53:53'),
(51, 'news_banner_src_alt_az', 'Alt(AZ) 1', '2022-07-19 06:45:44', '2022-07-19 06:45:48'),
(52, 'news_banner_src_alt_en', 'Alt(EN)', '2022-07-19 06:45:44', '2022-07-19 06:45:44');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `partnyor_images`
--

CREATE TABLE `partnyor_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 - partnyor, 2 - team',
  `order_no` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `partnyor_images`
--

INSERT INTO `partnyor_images` (`id`, `src`, `alt_az`, `alt_en`, `type`, `order_no`, `created_at`, `updated_at`) VALUES
(1, '04gyApCrbJsz8ynVzduBRoCNstYM4UsvA4JJtED5.png', NULL, NULL, 1, 0, '2022-07-17 22:11:37', '2022-07-17 22:11:37'),
(2, 'wmgMkeRKMlqjsGpmxAx49V9MFAvfKI7WN8Vr4T8g.png', NULL, NULL, 1, 0, '2022-07-17 22:13:02', '2022-07-17 22:13:02'),
(3, 'wap0QCU5gTJBiermuVcmocYnpFFwWkv051Y4R2MH.png', NULL, NULL, 1, 0, '2022-07-17 22:13:07', '2022-07-17 22:13:07'),
(4, 'cyQMGj2WGhnptRwCkqBUBmjxoESvTk0SzblkrqBR.png', NULL, NULL, 1, 0, '2022-07-17 22:13:11', '2022-07-17 22:13:11'),
(5, 'VJn2Qrqo9qNhVCb9lP2jdFVvCVpF05whIh8SkYwI.png', NULL, NULL, 1, 0, '2022-07-17 22:13:16', '2022-07-17 22:13:16'),
(6, 'CMNJl1tRYZP6UhQONVrsuxrgaEFDHPZWMkD4BLW5.png', NULL, NULL, 1, 0, '2022-07-17 22:13:21', '2022-07-17 22:13:21'),
(7, 'RqwO88rBEkdRWoRlymbIuqQ9mn2H4IC8mYsoJome.png', NULL, NULL, 1, 0, '2022-07-17 22:13:31', '2022-07-17 22:13:31'),
(8, 'oxDttDxuAKVq8zmPeZP3FxyyPhK0BTiqUp2ENc3Z.png', 'Bu bir test aldir', NULL, 1, 0, '2022-07-17 22:13:37', '2022-07-19 02:57:00'),
(9, 'P5zvWCbUeTddz3bxSJnZvDTXXISsAnAmMWKs2FWG.png', 'ALT AZ', 'AlT EN', 1, 0, '2022-07-17 22:13:42', '2022-07-19 02:56:50'),
(10, 'aICVG8mrWnhTxWRzmuGhEyWDXdGljbLlgpf14gQi.png', NULL, NULL, 2, 0, '2022-07-17 22:20:13', '2022-07-17 22:20:13'),
(11, 'myQGIvn30HK9cT5BflDg4Pt514pXYgfe3t50olFk.png', NULL, NULL, 2, 0, '2022-07-17 22:20:21', '2022-07-17 22:20:21'),
(12, 'bml1cPH0UqRxZ0F5t1cG9DmVcyAvBoHfBykrBjVp.png', NULL, NULL, 2, 0, '2022-07-17 22:20:25', '2022-07-17 22:20:25'),
(13, 'u0qrRiPTBGYRVv9QGE1lcGRDBRaUaUcScFoTPrgW.png', 'Team test AZ', 'Team test EN', 2, 0, '2022-07-17 22:20:30', '2022-07-19 02:58:50');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `title_1_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_1_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_az` text COLLATE utf8mb4_unicode_ci,
  `text_en` text COLLATE utf8mb4_unicode_ci,
  `release_date_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `art_director_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `art_director_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designer_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designer_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyrighter_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyrighter_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `projects`
--

INSERT INTO `projects` (`id`, `cover`, `alt_az`, `alt_en`, `category_id`, `title_1_az`, `title_1_en`, `title_2_az`, `title_2_en`, `text_az`, `text_en`, `release_date_az`, `release_date_en`, `client_az`, `client_en`, `art_director_az`, `art_director_en`, `designer_az`, `designer_en`, `copyrighter_az`, `copyrighter_en`, `created_at`, `updated_at`) VALUES
(1, 'ZHz2aCRXx1TYHrBelpvkLZ3QQqv0msnd2jM7brgj.png', NULL, NULL, 2, 'Incididunt officia d', 'Fugiat fugit qui ve', 'Et aspernatur accusa', 'Similique quis corru', 'Quia amet anim omni', 'Laboris aspernatur u', '13-Jul-1976', '25-Aug-2005', 'Deleniti rem et non', 'Impedit duis pariat', 'Aperiam dicta sint', 'Dolorem suscipit mol', 'Atque eius id asperi', 'Nobis sint ipsa omn', 'Sint ut quia cillum', 'Beatae velit reicien', '2022-07-17 10:43:58', '2022-07-17 11:02:40'),
(2, '7eMeh9Nuz50nbs6vD8pkVt3vCoakuOuGFZRC8ZgG.png', 'Alt(AZ)', 'Alt(EN)', 3, 'Hood Museum Of Art', 'Hood Museum Of Art', 'Brand Identity, Signage & Environmental Graphics, Digital Design', 'Brand Identity, Signage & Environmental Graphics, Digital Design', 'Sed nec scelerisque purus. Mauris tincidunt eros in mi ultrices, a tincidunt nunc molestie. Integer est ante, porta ut interdum vel, pharetra vel tellus. Vestibulum porta pulvinar erat, ut bibendum turpis pretium at Suspendisse.', 'Sed nec scelerisque purus. Mauris tincidunt eros in mi ultrices, a tincidunt nunc molestie. Integer est ante, porta ut interdum vel, pharetra vel tellus. Vestibulum porta pulvinar erat, ut bibendum turpis pretium at Suspendisse.', '20 Agust, 2021', '20 Agust, 2021', 'ACCORD Construction', 'ACCORD Construction', 'Jeyhun Amirov', 'Jeyhun Amirov', 'Yunis Qurbanov', 'Yunis Qurbanov', 'Ulvia Samadova', 'Ulvia Samadova', '2022-07-17 11:02:55', '2022-07-19 05:39:52'),
(3, 'GDlcJi7Cbg7pAzF4itOeM87xIxAxZScXNTP0Ux3R.png', NULL, NULL, 4, 'Pariatur Rerum non', 'Voluptas est est adi', 'Sequi consequatur i', 'Laborum Illo atque', 'Veritatis officiis e', 'Consectetur quae ve', '26-Jun-2019', '14-Feb-2000', 'Aut occaecat in in u', 'Quae mollit nulla er', 'Consequatur Quis at', 'Tempore veritatis a', 'Maiores voluptatem', 'Fugiat minima expli', 'Suscipit enim et pra', 'Sunt duis blanditii', '2022-07-17 11:03:33', '2022-07-17 11:03:33'),
(4, 'Dj7GYKrFuEhJE8PWzzvFQ3dPtvbpYyzhXfvIaYrb.png', NULL, NULL, 1, 'Deserunt eu amet al', 'Sequi et in architec', 'Doloribus quo in dol', 'Et sit vel non volu', 'Necessitatibus optio', 'Expedita impedit re', '19-Feb-2020', '11-Apr-2019', 'Expedita beatae exce', 'Adipisci sequi ex om', 'Laborum Natus cupid', 'Dignissimos perspici', 'Consequatur Ad nost', 'Earum qui laboriosam', 'Ut illo qui sequi en', 'Magni aperiam dolore', '2022-07-17 11:03:44', '2022-07-17 11:08:42'),
(5, 'nLnAMGGTbzn7kRXU6D6lCkyk5INVTkMltIzWBI9t.png', NULL, NULL, 3, 'Qui voluptatem Ea m', 'Voluptate similique', 'Est nisi ad deleniti', 'Ad harum mollitia qu', 'Assumenda omnis ulla', 'Qui et dicta vel eni', '29-Jul-1977', '04-Jul-1979', 'Quod vitae fugiat ev', 'Ut nostrum minima no', 'Sed tempora ipsa te', 'Eu nulla rerum aute', 'Ut sequi impedit et', 'Fugiat qui sed sunt', 'Fuga Tempora id con', 'Iusto fugiat obcaeca', '2022-07-17 11:03:52', '2022-07-17 11:03:52'),
(6, 'uRhLQbCNQWtED7YTWXwB0J9nY7wKxJg4tpnk98Ws.png', NULL, NULL, 2, 'Sequi quos eiusmod i', 'Aliquid nostrud cill', 'Ipsum id ab vitae q', 'Reprehenderit totam', 'Cupidatat nihil volu', 'Ipsam dolorem corpor', '04-Dec-1981', '13-May-1980', 'Saepe labore est eiu', 'Voluptatibus sed sed', 'Sint sint corporis', 'Sit vel sit magnam', 'Totam exercitation q', 'Inventore sint reru', 'Molestiae quae natus', 'Provident esse ess', '2022-07-17 11:04:17', '2022-07-17 11:04:17'),
(7, NULL, 'Dolor cillum dolorum', 'Dolores adipisicing', 1, 'Excepteur aut enim e', 'Sunt veniam aut rer', 'Quisquam in sunt no', 'Cupiditate architect', 'Quia consequat Do e', 'Incidunt aut atque', '12-Dec-1999', '11-May-1973', 'Pariatur Non ullam', 'Qui voluptate dicta', 'Et qui error pariatu', 'Et odit similique vo', 'Amet nobis esse tem', 'Aut autem non vitae', 'Vel incididunt offic', 'Quia velit omnis in', '2022-07-19 05:39:59', '2022-07-19 05:39:59');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `project_images`
--

CREATE TABLE `project_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT ' ',
  `alt_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `col_12` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 : col-8, 1 : col-12',
  `order_no` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `src`, `alt_az`, `alt_en`, `col_12`, `order_no`, `created_at`, `updated_at`) VALUES
(1, 2, 'UG5ZAFwuZJ3OJcjOkuSh2Kc9veePv8dPAD5OTgXp.png', 'test az', 'test en', 0, 1, '2022-07-19 05:35:42', '2022-07-19 05:52:50'),
(2, 2, 'tUIzvSalmPbSlINV4gVKtnIgaUtHdrwVBYR3d9tc.png', NULL, NULL, 1, 2, '2022-07-19 05:35:42', '2022-07-19 05:52:50'),
(3, 2, 'LDv3qdS0TMsF0hBoelIX8rAyR13UVsLb3Eeuge0T.png', 'test az 3', 'test en 3', 0, 3, '2022-07-19 05:35:42', '2022-07-19 05:52:50'),
(4, 2, '8hmatV3QDSwMzyhKJb7D5JYHTYr3G0gSubB4x0gF.png', NULL, NULL, 0, 4, '2022-07-19 05:35:42', '2022-07-19 05:52:50');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'avatar.jpg', 'admin@gmail.com', NULL, '$2y$10$YRvUn7q4SEKmR8lhhKlHnufLy70VV.JYZa8MMFnSdShhW5cVv5Fk.', 'qWwlN5VMfHEbGzJvPBXIG2EO5rdvVxjmyHFmrL9bhrEsm4SegE8PKtLgbSve', '2022-07-17 07:15:51', '2022-07-17 07:15:51');

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Cədvəl üçün indekslər `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `partnyor_images`
--
ALTER TABLE `partnyor_images`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Cədvəl üçün indekslər `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Cədvəl üçün indekslər `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Cədvəl üçün AUTO_INCREMENT `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Cədvəl üçün AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Cədvəl üçün AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Cədvəl üçün AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Cədvəl üçün AUTO_INCREMENT `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Cədvəl üçün AUTO_INCREMENT `partnyor_images`
--
ALTER TABLE `partnyor_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Cədvəl üçün AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Cədvəl üçün AUTO_INCREMENT `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Cədvəl üçün AUTO_INCREMENT `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Cədvəl üçün AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
