-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2022 at 03:12 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agilli`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
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
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_az`, `name_en`, `order_no`, `created_at`, `updated_at`) VALUES
(1, 'SOCIAL OPENPAGE', 'SOCIAL OPENPAGE', 0, '2022-07-17 08:37:17', '2022-07-17 08:37:36'),
(2, 'TVC', 'TVC', 0, '2022-07-17 08:37:29', '2022-07-17 08:37:29'),
(3, 'PRINT', 'PRINT', 0, '2022-07-17 08:37:43', '2022-07-17 08:37:43'),
(4, 'DIGITAL', 'DIGITAL', 0, '2022-07-17 08:38:20', '2022-07-17 08:38:20');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2019_08_19_000000_create_failed_jobs_table', 1),
(41, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(42, '2022_03_05_040356_create_options_table', 1),
(43, '2022_07_13_022102_create_partnyor_images_table', 1),
(44, '2022_07_13_082826_create_categories_table', 1),
(45, '2022_07_15_081616_create_projects_table', 1),
(46, '2022_07_15_081712_create_project_images_table', 1),
(47, '2022_07_17_065906_create_news_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date_az` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_1_az` text COLLATE utf8mb4_unicode_ci,
  `text_1_en` text COLLATE utf8mb4_unicode_ci,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_2_az` text COLLATE utf8mb4_unicode_ci,
  `text_2_en` text COLLATE utf8mb4_unicode_ci,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cover`, `title_az`, `title_en`, `author_az`, `author_en`, `release_date_az`, `release_date_en`, `text_1_az`, `text_1_en`, `image_1`, `text_2_az`, `text_2_en`, `image_2`, `created_at`, `updated_at`) VALUES
(1, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(2, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(3, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(4, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(5, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(6, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(7, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(8, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(9, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(10, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(11, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59'),
(12, 'dXsINh19WCmYISsUHPt74OuSrqYoPlwr0QgB6fX0.png', 'First Principles and the Art of Thinking like Elon Musk', 'First Principles and the Art of Thinking like Elon Musk', 'Humbatov Tariel', 'Humbatov Tariel', 'September 15, 2020', 'September 15, 2020', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', '<p>First principles&rdquo; is a physics way of looking at the world&hellip;what that really means is that you boil things down to the most fundamental truths&hellip;and then reason up from there&hellip;that takes a lot more mental energy</p>\r\n\r\n<p>Why do I need it?</p>\r\n\r\n<p>Thinking with first principles is important because it helps you get a better understanding of complex problemsand concepts.</p>\r\n\r\n<p>Your alternative, thinking by analogy is much easier and more popular. Analogous thinking can be quite useful when comparing past or current concepts.The problem with analogous thinking is that it has the potential to miss the finer details needed when trying to understand the unknown. First principles clears a lot of these details up by getting to the origin of the concept.</p>', 'ESS12hKChYInn7BY7OJmOcgtV3jqMpTvYYlMkzMu.png', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', '<p>If Apple wasn&rsquo;t competing with Tesla and were tore-run it&rsquo;s famous &ldquo;Think Different&rdquo; campaign, would you place Elon Musk among the group of &ldquo;crazy ones?&rdquo;</p>\r\n\r\n<p>He&rsquo;s a rebel, a trouble maker and thinks he can change the world. Elon has a certain knack for thinking different.</p>\r\n\r\n<p>Like Aristotle, Euclid, Thomas Edison and Nikola Tesla; Elon has a method to his &ldquo;thinking different&rdquo; madness. It&rsquo;s called First principles thinking and anyone can use it.</p>', 'dEJU6OUozQhdPpIzDvHKN7XrLhsJ7xfHLQAhfd5s.png', '2022-07-17 22:40:59', '2022-07-17 22:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
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
(46, 'news_banner_src', 'PcxUzTMRztqiT7CyRwqbyFe5oAKjh7yDEPDYGlyM.png', '2022-07-17 22:25:29', '2022-07-17 22:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `partnyor_images`
--

CREATE TABLE `partnyor_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 - partnyor, 2 - team',
  `order_no` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnyor_images`
--

INSERT INTO `partnyor_images` (`id`, `src`, `type`, `order_no`, `created_at`, `updated_at`) VALUES
(1, '04gyApCrbJsz8ynVzduBRoCNstYM4UsvA4JJtED5.png', 1, 0, '2022-07-17 22:11:37', '2022-07-17 22:11:37'),
(2, 'wmgMkeRKMlqjsGpmxAx49V9MFAvfKI7WN8Vr4T8g.png', 1, 0, '2022-07-17 22:13:02', '2022-07-17 22:13:02'),
(3, 'wap0QCU5gTJBiermuVcmocYnpFFwWkv051Y4R2MH.png', 1, 0, '2022-07-17 22:13:07', '2022-07-17 22:13:07'),
(4, 'cyQMGj2WGhnptRwCkqBUBmjxoESvTk0SzblkrqBR.png', 1, 0, '2022-07-17 22:13:11', '2022-07-17 22:13:11'),
(5, 'VJn2Qrqo9qNhVCb9lP2jdFVvCVpF05whIh8SkYwI.png', 1, 0, '2022-07-17 22:13:16', '2022-07-17 22:13:16'),
(6, 'CMNJl1tRYZP6UhQONVrsuxrgaEFDHPZWMkD4BLW5.png', 1, 0, '2022-07-17 22:13:21', '2022-07-17 22:13:21'),
(7, 'RqwO88rBEkdRWoRlymbIuqQ9mn2H4IC8mYsoJome.png', 1, 0, '2022-07-17 22:13:31', '2022-07-17 22:13:31'),
(8, 'oxDttDxuAKVq8zmPeZP3FxyyPhK0BTiqUp2ENc3Z.png', 1, 0, '2022-07-17 22:13:37', '2022-07-17 22:13:37'),
(9, 'P5zvWCbUeTddz3bxSJnZvDTXXISsAnAmMWKs2FWG.png', 1, 0, '2022-07-17 22:13:42', '2022-07-17 22:13:42'),
(10, 'aICVG8mrWnhTxWRzmuGhEyWDXdGljbLlgpf14gQi.png', 2, 0, '2022-07-17 22:20:13', '2022-07-17 22:20:13'),
(11, 'myQGIvn30HK9cT5BflDg4Pt514pXYgfe3t50olFk.png', 2, 0, '2022-07-17 22:20:21', '2022-07-17 22:20:21'),
(12, 'bml1cPH0UqRxZ0F5t1cG9DmVcyAvBoHfBykrBjVp.png', 2, 0, '2022-07-17 22:20:25', '2022-07-17 22:20:25'),
(13, 'u0qrRiPTBGYRVv9QGE1lcGRDBRaUaUcScFoTPrgW.png', 2, 0, '2022-07-17 22:20:30', '2022-07-17 22:20:30');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `cover`, `category_id`, `title_1_az`, `title_1_en`, `title_2_az`, `title_2_en`, `text_az`, `text_en`, `release_date_az`, `release_date_en`, `client_az`, `client_en`, `art_director_az`, `art_director_en`, `designer_az`, `designer_en`, `copyrighter_az`, `copyrighter_en`, `created_at`, `updated_at`) VALUES
(1, 'ZHz2aCRXx1TYHrBelpvkLZ3QQqv0msnd2jM7brgj.png', 2, 'Incididunt officia d', 'Fugiat fugit qui ve', 'Et aspernatur accusa', 'Similique quis corru', 'Quia amet anim omni', 'Laboris aspernatur u', '13-Jul-1976', '25-Aug-2005', 'Deleniti rem et non', 'Impedit duis pariat', 'Aperiam dicta sint', 'Dolorem suscipit mol', 'Atque eius id asperi', 'Nobis sint ipsa omn', 'Sint ut quia cillum', 'Beatae velit reicien', '2022-07-17 10:43:58', '2022-07-17 11:02:40'),
(2, 'H1ZRZcVOOX0ynVnc2WJjPaGLmmQ51LMQFvPaK2O6.png', 3, 'Unde ut et nobis ist', 'Eius eiusmod quisqua', 'Proident reprehende', 'Quo officia non quid', 'Quis dolor consequat', 'Iste enim elit aut', '22-Feb-1987', '18-Jul-1976', 'Quos debitis aliquam', 'Fugiat veniam volu', 'Id quisquam tenetur', 'Cillum veniam eos', 'Earum mollit totam v', 'Ut ex dicta est haru', 'Reprehenderit minim', 'Nobis ratione laboru', '2022-07-17 11:02:55', '2022-07-17 11:08:56'),
(3, 'GDlcJi7Cbg7pAzF4itOeM87xIxAxZScXNTP0Ux3R.png', 4, 'Pariatur Rerum non', 'Voluptas est est adi', 'Sequi consequatur i', 'Laborum Illo atque', 'Veritatis officiis e', 'Consectetur quae ve', '26-Jun-2019', '14-Feb-2000', 'Aut occaecat in in u', 'Quae mollit nulla er', 'Consequatur Quis at', 'Tempore veritatis a', 'Maiores voluptatem', 'Fugiat minima expli', 'Suscipit enim et pra', 'Sunt duis blanditii', '2022-07-17 11:03:33', '2022-07-17 11:03:33'),
(4, 'Dj7GYKrFuEhJE8PWzzvFQ3dPtvbpYyzhXfvIaYrb.png', 1, 'Deserunt eu amet al', 'Sequi et in architec', 'Doloribus quo in dol', 'Et sit vel non volu', 'Necessitatibus optio', 'Expedita impedit re', '19-Feb-2020', '11-Apr-2019', 'Expedita beatae exce', 'Adipisci sequi ex om', 'Laborum Natus cupid', 'Dignissimos perspici', 'Consequatur Ad nost', 'Earum qui laboriosam', 'Ut illo qui sequi en', 'Magni aperiam dolore', '2022-07-17 11:03:44', '2022-07-17 11:08:42'),
(5, 'nLnAMGGTbzn7kRXU6D6lCkyk5INVTkMltIzWBI9t.png', 3, 'Qui voluptatem Ea m', 'Voluptate similique', 'Est nisi ad deleniti', 'Ad harum mollitia qu', 'Assumenda omnis ulla', 'Qui et dicta vel eni', '29-Jul-1977', '04-Jul-1979', 'Quod vitae fugiat ev', 'Ut nostrum minima no', 'Sed tempora ipsa te', 'Eu nulla rerum aute', 'Ut sequi impedit et', 'Fugiat qui sed sunt', 'Fuga Tempora id con', 'Iusto fugiat obcaeca', '2022-07-17 11:03:52', '2022-07-17 11:03:52'),
(6, 'uRhLQbCNQWtED7YTWXwB0J9nY7wKxJg4tpnk98Ws.png', 2, 'Sequi quos eiusmod i', 'Aliquid nostrud cill', 'Ipsum id ab vitae q', 'Reprehenderit totam', 'Cupidatat nihil volu', 'Ipsam dolorem corpor', '04-Dec-1981', '13-May-1980', 'Saepe labore est eiu', 'Voluptatibus sed sed', 'Sint sint corporis', 'Sit vel sit magnam', 'Totam exercitation q', 'Inventore sint reru', 'Molestiae quae natus', 'Provident esse ess', '2022-07-17 11:04:17', '2022-07-17 11:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `col_12` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 : col-8, 1 : col-12',
  `order_no` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'avatar.jpg', 'admin@gmail.com', NULL, '$2y$10$YRvUn7q4SEKmR8lhhKlHnufLy70VV.JYZa8MMFnSdShhW5cVv5Fk.', 'qWwlN5VMfHEbGzJvPBXIG2EO5rdvVxjmyHFmrL9bhrEsm4SegE8PKtLgbSve', '2022-07-17 07:15:51', '2022-07-17 07:15:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnyor_images`
--
ALTER TABLE `partnyor_images`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `partnyor_images`
--
ALTER TABLE `partnyor_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
