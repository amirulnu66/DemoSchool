-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 10:21 AM
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
-- Database: `demo_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_fees`
--

CREATE TABLE `academic_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month_fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_fees`
--

INSERT INTO `academic_fees` (`id`, `class_name`, `month_fees`, `session_fees`, `admission_fees`, `form_fees`, `created_at`, `updated_at`) VALUES
(1, 'প্লে-গ্রুপ/নার্সারি', '100', '500', '500', '100', '2018-08-13 03:50:39', '2018-08-13 04:13:42'),
(3, 'কেজি', '150', '500', '500', '100', '2018-08-13 04:14:17', '2018-08-13 04:14:17'),
(4, 'প্রথম', '250', '500', '500', '100', '2018-08-13 04:14:36', '2018-08-13 04:14:36'),
(5, 'দ্বিতীয়', '250', '500', '500', '100', '2018-08-13 04:14:55', '2018-08-13 04:14:55'),
(6, 'তৃতীয়', '250', '500', '500', '100', '2018-08-13 04:15:12', '2018-08-13 04:15:12'),
(7, 'চতুর্থ', '300', '500', '500', '100', '2018-08-13 04:15:35', '2018-08-13 04:15:35'),
(8, 'পঞ্চম', '300', '500', '500', '100', '2018-08-13 04:15:53', '2018-08-13 04:15:53'),
(9, 'ষষ্ঠ', '300', '500', '500', '100', '2018-08-13 04:16:16', '2018-08-13 04:16:16'),
(10, 'সপ্তম', '300', '500', '500', '100', '2018-08-13 04:16:30', '2018-08-13 04:16:30'),
(11, 'অষ্টম', '300', '500', '500', '100', '2018-08-13 04:16:46', '2018-08-13 05:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `blog_table`
--

CREATE TABLE `blog_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_picker` datetime NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_desc` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_table`
--

INSERT INTO `blog_table` (`id`, `blog_slug`, `blog_title`, `blog_image`, `date_picker`, `title`, `blog_desc`, `created_at`, `updated_at`) VALUES
(2, 'gallery-photo', 'বার্ষিক ক্রিয়া প্রতিযোগিতা', 'mhprx7WD3FA8WdqRSZmY46O3JyXr8O.jpg', '2018-07-12 00:00:00', 'বার্ষিক ক্রিয়া প্রতিযোগিতা', 'আমি এই প্রবিদ্যাপীঠ এর সাথে জরিত থেকে গর্ব বোধ করি। মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা', '2018-01-28 05:19:58', '2018-07-15 00:33:12'),
(3, 'gallery-page', 'নতুন বই বিতরন ২০১৮', '1ycKEp7KpTmLQURSy60PzsFIPaEf3C.jpg', '2018-07-12 00:00:00', 'নতুন বই বিতরন', 'আমি এই প্রবিদ্যাপীঠ এর সাথে জরিত থেকে গর্ব বোধ করি। মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা', '2018-01-28 14:26:42', '2018-07-15 00:33:22'),
(4, 'art-competition', 'মহান বিজয় দিবস ২০১৮', 'US9PBTzUBMolctnuFsRlt4Aypj0t6Z.jpg', '2018-07-12 00:00:00', 'মহান বিজয় দিবস', 'আমি এই প্রবিদ্যাপীঠ এর সাথে জরিত থেকে গর্ব বোধ করি। মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা', '2018-01-28 15:02:21', '2018-07-15 00:33:31'),
(5, 'gallery-4', 'একুশের বইমেলা', '8YHS7CJ9HLuN7xzclSVE2Ovemy8Kn1.jpg', '2018-07-15 11:35:00', 'একুশের বইমেলা', 'আমি এই প্রবিদ্যাপীঠ এর সাথে জরিত থেকে গর্ব বোধ করি। মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা', '2018-07-14 23:38:47', '2018-07-15 00:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_bgimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breadcamp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `contact_slug`, `contact_title`, `con_bgimage`, `breadcamp`, `title`, `summary`, `created_at`, `updated_at`) VALUES
(1, 'contact-us', 'আমাদের সঙ্গে যোগাযোগের ঠিকানা', '7QqLRJkvk8OEnRK9kxHeXArLTw9T95.jpg', 'Contact Us', 'বার্তা পাঠান', 'আপনার ইমেইল অ্যাড্রেস প্রচার করা হবে না.', NULL, '2018-03-13 03:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_picker` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `faci_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faci_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faci_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faci_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `faci_slug`, `faci_name`, `faci_image`, `faci_desc`, `created_at`, `updated_at`) VALUES
(1, 'transport-faci', 'প্রধান শিক্ষক', 'n8Qq0a3NQLuOH8kK2ts5FfneqES3qe.jpg', 'প্রধান শিক্ষকের যোগ্যতা', NULL, '2018-05-14 23:10:12'),
(2, 'health-faci', 'শিক্ষকের নাম', 'TZtpAm0oAEfNdA0yLBxs1ok0QPvLf0.jpg', 'শিক্ষকের যোগ্যতা', NULL, '2018-05-14 23:10:27'),
(3, 'take-care', 'শিক্ষকের নাম', '2asjSRb3S0nJwc5eo9jzqFjjxQlPp5.jpg', 'শিক্ষকের যোগ্যতা', '2018-02-07 04:49:26', '2018-05-14 23:10:42'),
(4, 'health-care', 'শিক্ষকের নাম', 'mIE3mAPTJaGNx6YNNzPHvHwy8wxWyZ.jpg', 'শিক্ষকের যোগ্যতা', '2018-02-07 04:50:29', '2018-05-14 23:10:53'),
(7, 'teacher7-route', 'শিক্ষকের নাম', 'Ixr2ReBFjim8HEYjDCPMphmReE8iXz.jpg', 'শিক্ষকের যোগ্যতা', '2018-03-19 01:36:00', '2018-05-14 23:11:06'),
(8, 'teacher8-route', 'শিক্ষকের নাম', 'X0fHOs4FxZ8rkalX3kIyPINwuFpJHT.jpg', 'শিক্ষকের যোগ্যতা', '2018-03-19 01:38:48', '2018-05-14 23:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `qus_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qus_ans` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_list` int(191) NOT NULL,
  `position` int(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `qus_name`, `qus_ans`, `sort_list`, `position`, `created_at`, `updated_at`) VALUES
(1, 'এই স্কুলের উদ্দেশ্য হল একটি স্বাধীন', 'এই স্কুলের উদ্দেশ্য হল একটি স্বাধীন, গোপনীয় এবং প্রথাবহির্ভূত পথ প্রদর্শন করা যেটির মাধ্যমে স্পেশাল এডুকেশনাল নীডস বা বিশেষ শিক্ষা সংক্রান্ত চাহিদার এবং শর্ত-আরোপণ সম্পর্কিত মতবিরোধ এড়িয়ে চলা', 1, 1, '2018-01-29 03:13:29', '2018-02-20 11:38:40'),
(2, 'এই স্কুলটি কখন থেকে কার্যকরী হয়েছে ?', 'এই স্কুলের উদ্দেশ্য হল একটি স্বাধীন, গোপনীয় এবং প্রথাবহির্ভূত পথ প্রদর্শন করা যেটির মাধ্যমে স্পেশাল এডুকেশনাল নীডস বা বিশেষ শিক্ষা সংক্রান্ত চাহিদার এবং শর্ত-আরোপণ সম্পর্কিত মতবিরোধ এড়িয়ে চলা বা সমাধান করা যেতে পারে।', 2, 2, '2018-01-29 03:15:11', '2018-02-18 10:15:11'),
(3, 'এই স্কুলের উদ্দেশ্য কি ?', 'এই স্কুলের উদ্দেশ্য হল একটি স্বাধীন, গোপনীয় এবং প্রথাবহির্ভূত পথ প্রদর্শন করা যেটির মাধ্যমে স্পেশাল এডুকেশনাল নীডস বা বিশেষ শিক্ষা সংক্রান্ত চাহিদার এবং শর্ত-আরোপণ সম্পর্কিত মতবিরোধ এড়িয়ে চলা বা সমাধান করা যেতে পারে।', 3, 1, '2018-01-29 03:16:07', '2018-02-18 09:54:26'),
(4, 'বাবা-মা / অভিভাবক কি স্কুল-এ রেফারাল করতে পারেন ?', 'এই স্কুলের উদ্দেশ্য হল একটি স্বাধীন, গোপনীয় এবং প্রথাবহির্ভূত পথ প্রদর্শন করা যেটির মাধ্যমে স্পেশাল এডুকেশনাল নীডস বা বিশেষ শিক্ষা সংক্রান্ত চাহিদার এবং শর্ত-আরোপণ সম্পর্কিত মতবিরোধ এড়িয়ে চলা বা সমাধান করা যেতে পারে।', 4, 1, '2018-01-29 03:17:08', '2018-02-18 10:53:24'),
(5, 'স্কুল-এ কি এডুকেশন এন্ড লাইব্রেরী বোর্ডগুলির প্রত্যেকটিতে চালু আছে ?', 'এই স্কুলের উদ্দেশ্য হল একটি স্বাধীন, গোপনীয় এবং প্রথাবহির্ভূত পথ প্রদর্শন করা যেটির মাধ্যমে স্পেশাল এডুকেশনাল নীডস বা বিশেষ শিক্ষা সংক্রান্ত চাহিদার এবং শর্ত-আরোপণ সম্পর্কিত মতবিরোধ এড়িয়ে চলা বা সমাধান করা যেতে পারে।', 5, 2, '2018-01-29 03:19:04', '2018-02-18 10:53:34'),
(6, 'এই স্কুলের মিটিংগুলি কোথায় হয়ে থাকে ?', 'এই স্কুলের উদ্দেশ্য হল একটি স্বাধীন, গোপনীয় এবং প্রথাবহির্ভূত পথপারে।', 6, 2, '2018-01-29 03:20:05', '2018-02-18 10:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_desi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_desc` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name_slug`, `member_desi`, `member_name`, `member_image`, `member_desc`, `position`, `created_at`, `updated_at`) VALUES
(1, 'governing-body', 'সভাপতির যোগ্যতা', 'সভাপতির নাম', '37Lwea444w9K1UW3AKyVDk2K2Ejrjv.jpg', 'Morbi pulvinar nunc a ligula eleifend blandit. Nulla cursus est et nunc vulputate', 1, '2018-01-29 13:11:17', '2018-05-14 22:46:00'),
(2, 'school-membe', 'প্রতিনিধির যোগ্যতা', 'সভাপতির নাম', 'YZSads2xSmtSbFrT6YH39wIYFY3v3q.jpg', 'Morbi pulvinar nunc a ligula eleifend blandit. Nulla cursus est', 2, '2018-01-29 13:34:08', '2018-05-14 22:46:17'),
(3, 'cahirman-panel', 'প্রতিনিধির যোগ্যতা', 'সভাপতির নাম', 'E9n2nR2kl160TiNwMXrzbdkx13Z92f.jpg', 'Morbi pulvinar nunc a ligula eleifend blandit. Nulla cursus est et nunc vulputate', 3, '2018-01-29 13:38:17', '2018-05-14 22:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2018_01_24_065941_create_teachermessage_table', 2),
(7, '2018_01_25_183623_create_history_table', 3),
(8, '2018_01_28_070322_create_contactUs_table', 4),
(9, '2018_01_28_102450_create_blogs_table', 5),
(10, '2018_01_29_070833_create_faqs_table', 6),
(11, '2018_01_29_183635_create_members_table', 7),
(12, '2018_01_30_070507_create_missions_table', 8),
(13, '2018_01_30_100950_create_sendmessages_table', 9),
(14, '2018_01_31_103522_create_sports_table', 10),
(15, '2018_02_01_080216_create_homesliders_table', 11),
(16, '2018_02_06_061238_create_subscribes_table', 12),
(17, '2018_02_07_093542_create_facilities_table', 13),
(18, '2018_02_10_184745_create_downloads_table', 14),
(19, '2018_02_12_093230_create_settings_table', 15),
(20, '2018_08_13_080330_create_academic_fees_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `title`, `sort_title`, `mission_desc`, `created_at`, `updated_at`) VALUES
(1, 'তত্ত্ব:', 'ঞান, দক্ষতা, যোগত্যা ও নৈতিকতার উৎকর্ষ সাধন', 'খুবই সংক্ষেপে বই-পুস্তকের বাইরে বলার চেষ্টা করছি তবে ‍মিশন-ভিশনের গতানুগতিক পার্থক্য না বলে একটু অন্যভাবে বিষয়টি বুঝিয়ে দিচ্ছি। . প্রকৃতপক্ষে, মিশন এবং ভিশন হলো যথাক্রমে বহমান আবহাওয়া এবং জলবায়ুর পার্থক্যের মত।। . কোন কিছুর উন্নয়নে যে প্লান বা পরিকল্পনা যদি ছোট্ট পরিসরে বা', '2018-01-30 01:28:54', '2018-01-30 01:28:54'),
(2, 'ভিশন:', 'নামের মধ্যে School এবং Surfer শব্দ কেন?', 'School মানে পাঠশালা। পাঠশালায় কেউ শেখেন, আর কেউ শেখান। সেই অর্থে BOSS, প্রকৃতপক্ষে, মিশন এবং ভিশন হলো যথাক্রমে বহমান আবহাওয়া এবং জলবায়ুর পার্থক্যের মত।। . কোন কিছুর উন্নয়নে যে প্লান বা পরিকল্পনা যদি ছোট্ট পরিসরে বা স্বল্পমেয়াদী সময়ের জন্য করা হয় তাহলে তা মিশন। আর যদি বড় পরিসরে বা দীর্ঘমেয়াদী সময়ের জন্য করা হয় তাহলে তা ভিশন। যেমনঃ একজন ছোট্ট খোকা পড়া-লিখা শেষে বড় হয়ে একজন আদর্শ ডাক্তার হয়ে দেশ ও মানবতার সেবা করবে এমনটি তার ইচ্ছা। লক্ষ্য করুন, ডাক্তার হয়ে মানবতার সেবা করার জন্য ধাপগুলো স্টেজ বাই স্টেজ একটা সুনির্দিষ্ট পথ অতিক্রম করতে হবে তাকে।', '2018-01-30 01:33:01', '2018-01-30 03:27:12'),
(3, 'মিশন:', 'School এর কার্যপরিধিঃ', 'আমরা একটি আন্তর্জাতিক, মানবতাবাদী এবং উন্নয়ন সংস্থা । আমরা মানুষের মর্যাদাকে শ্রদ্ধা করি এবং মানবতা ও নৈতিক মূল্যবোধ জাগ্রত করতে সংগ্রাম করি। আমরা এমন একটা বৈশ্বিক সম্প্রদায় গড়তে অবদান রাখি যেখানে সবাই তাদের আনন্দকে অন্যের সাথে ভাগাভাগি করে একসাথে বাস করবে। আমরা জাতি, ধর্ম, বর্ণ, মতাদর্শ,জাতীয়তা নির্বিশেষে টেকসই উন্নয়ন ও ত্রাণ বিতরণে সমন্বিত উপায় অবলম্বন করি। আমরা সম্পদের সঠিক ব্যাবহর ও ব্যবস্থাপনা নিশ্চিত করার মাধ্যমে অসহায় এবং পিছিয়েপড়া জনগোষ্ঠির কল্যাণ করতে মাধ্যম হিসাবে কাজ করি। আমরা আমাদের কার্যক্রমের ফলপ্রসূ ও সঠিক কার্যকারিতার মাধ্যমে স্থানীয় সম্পদের সর্বোচ্চ ব্যবহার নিশ্চিত করি। আমরা সহযোগী সংস্থাগুলোর সাথে পারস্পরিক সহযোগিতার মাধ্যমে কাজ করি। যখন যেখানে প্রয়োজন আমরা সেখানেই কাজ করি। ভিশন: আমরা এমন একটা বিশ্বের স্বপ্ন দেখি যেখানে দরিদ্রতা দূর হয়েছে, যেখানে দুর্দশাগ্রস্ত মানুষ সামাজিক নিরাপত্তা, আত্মসম্মান এবং মর্যাদা নিয়ে বাস করছে,', '2018-01-30 01:33:47', '2018-01-30 01:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `page_table`
--

CREATE TABLE `page_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `history_route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_bgimage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breadcamp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_table`
--

INSERT INTO `page_table` (`id`, `history_route`, `page_bgimage`, `page_title`, `breadcamp`, `main_image`, `heading_one`, `heading_two`, `paragraph`, `created_at`, `updated_at`) VALUES
(1, 'school-history', '1hgNUUH4SVxwhl40vuUqxv7Rk7lxzZ.jpg', 'প্রতিষ্ঠানের ইতিহাস', 'History', '271oLhjAtKCC4Nl4C7CzRMjU42WA6X.jpg', 'প্রতিষ্ঠানের ইতিহাস', 'প্রতিষ্ঠানের ইতিহাস', 'মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন বিকল্প নেই ।  প্রতিষ্ঠান দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে ভূমিকা নিষ্ঠার সাথে পালন করে আসছে ।সমগ্র বাংলাদেশে যে কয়টি আদর্শ শিক্ষা প্রতিষ্ঠান রয়েছে স্কুল নিঃসন্দেহে তাদের অন্যতম । এই জেলার মাঝ দিয়ে বয়ে গেছে বুড়িগঙ্গা নদী । এই নদীর প্রায় ছয় কিলোমিটার পুর্বে সমান্তরাল ভাবে বহমান ছিল তুরাগ নদী । কালের বিবর্তনে যা আজ মরা নদীর রূপ নিয়েছে । এই দুই নদীর মাঝখানে গড়ে উঠেছিল একটি বন্দর নগরী । এই বন্দর নগরীর আধুনিক রূপ আজকের ঢাকা শহর । আর এই শহরের প্রাণ কেন্দ্রে এক মনোরম পরিবেশে এই প্রতিষ্ঠান অবস্থিত ।', NULL, '2018-07-14 23:48:56'),
(2, 'hospital-page', 'yxoGuL8hBrkL8rWoa7UUWh3Ydg0Ase.jpg', 'স্কুলের হাসপাতাল', 'Hospital', 'nug5yNu3KwWzZJlXlqbXHUfwqjocxJ.jpg', 'হাসপাতাল', 'স্কুলে ছাত্র-ছাত্রীদের স্বাস্থ্য পরীক্ষা', 'দিন দিন যুব সমাজের একটি বিশাল অংশ বেকারত্বের জালে জড়িয়ে পড়ছে । যার কারন হিসেবে গবেষনায় দেখা গেছে নন টেকনিক্যাল বিষয় নিয়ে লেখাপড়া একটি অন্যতম কারণ। চিকিৎসা-স্বাস্থ্য বিভাগে প্রতিবছর বিপুল পরিমান টেকনোলজিষ্ট-মেডিকেল এ্যাসিসটেন্ট নিয়োগ করা হচ্ছে।তাছাড়া সারা দেশে প্যাথলজি সেন্টারে প্রশিক্ষিত জনবলের পর্যাপ্ত চাহিদা থাকা সত্ত্বেও দক্ষ ও প্রশিক্ষিত জনবলের চরম সংকট বিরাজ করছে । তাই দেশের সব যুব সমাজকে বেকারত্ত্বের অভিশাপ থেকে মুক্ত করার অভিপ্রায় নিয়ে প্রতিষ্ঠিত হয়েছে ট্রমা আইএমটি, ট্রমা ম্যাটস, শ্যামলী ম্যাটস, টাঙ্গাইল ম্যাটস ও ঘাটাইল আই এম টি এন্ড ম্যাটস। দক্ষ শিক্ষক-শিক্ষিকার অক্লান্ত পরিশ্রম ও অত্যাধুনিক যন্ত্রপাতি সজ্জিত ল্যাবরেটরি ও সু-সজ্জিত ক্লাস রুম আমাদের ছাত্র-ছাত্রীদের একজন দক্ষ ও আদর্শবান মেডিকেল এ্যাসিসটেন্ট হিসেবে গড়ে তুলতে বদ্ধ পরিকর। আমরা আপনাদেরে একান্ত সহযোগিতা কামন করি।', '2018-01-26 09:47:27', '2018-07-22 23:22:46'),
(3, 'school-club', 'jJ1NRaBKffzLg9ul5qgv6INx2W8Vzt.jpg', 'Science Club', 'Science Club', '780BFi5YB6jg9SA5MQ2KouIL6OsBFO.jpg', 'ক্লাব', 'স্কুলের ক্লাব', 'আমি এই প্রবিদ্যাপীঠ এর সাথে জরিত থেকে গর্ব বোধ করি। মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন বিকল্প নেই । তাই এ প্রতিষ্ঠান দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে ভূমিকা নিষ্ঠার সাথে পালন করে আসছে', '2018-01-26 11:56:56', '2018-07-22 23:22:37'),
(4, 'class-room', '8MYHNfWJMUn28SPHvtdYHQZzFTnKPu.jpg', 'শ্রেণিকক্ষ', 'Class Room', 'FlZqPvGaMW6IUtaUlGvQaJJGjun5LK.jpg', 'ক্লাস রুম', 'মাল্টিমিডিয়া ক্লাস রুম', 'ডিজিটাল বাংলাদেশ গড়ার প্রথম শর্ত হচ্ছে শিক্ষার গুনগতমান নিশ্চিত করতে শিক্ষায় তথ্য ও যোগাযোগ প্রযুক্তির সমন্বয় অপরিহার্য । বাংলাদেশ সরকার এই সত্যকে উপলদ্ধি করে গত দশক থেকে শিক্ষায় তথ্য ও যোগাযোগ প্রযুক্তির ব্যবহার বৃদ্ধিতে ব্যাপক হারে কাজ করছে । গনপ্রজাতন্ত্রী বাংলাদেশ সরকারেরর মাননীয় প্রধানমন্ত্রী তথ্য ও যোগাযোগ প্রযুক্তির ব্যবহার করে বাংলাদেশ কে একটি স্বচ্ছ জবাব দিহি মূলক ও দূর্নীতি মুক্ত দেশ হিসাবে গড়ে তোলার লক্ষে রুপকল্প ২০২১ ঘোষানা করেন । তারই আলোকে তথ্য ও প্রযুক্তি ব্যবহারে দক্ষ একটি আধুনিক প্রজন্ম গড়ে তোলার লক্ষে সারা দেশে শিক্ষামন্ত্রনালয় এবং প্রাথমিক ও গনশিক্ষা মন্ত্রনালয়ের মাধ্যমে তেইশ হাজারের বেশী প্রতিষ্ঠানে মাল্টিমিডিয়া ক্লঅসরুম স্থাপন করা হয়েছে । প্রতিটি প্রতিষ্টানে একটি ল্যাবটপ, ইন্টার নেট, মডেম, মাল্টিমিডিয়া প্রজেক্টর প্রেআজেক্টর স্কিন, সাউন্ড সিস্টেম প্রদান করেছেন ।', '2018-01-27 23:05:26', '2018-07-22 23:22:29'),
(5, 'school-laboratory', '8KVcEQqEsGMuAP9VTOMCl0pp0oFvzp.jpg', 'স্কুলের ল্যাবরেটরি', 'Laboratory', 'Q5Trqsba0oKIYjimab8RX7z6HcXSbi.jpg', 'ল্যাবরেটরি', 'ল্যাবরেটরি', 'আমি এই প্রবিদ্যাপীঠ এর সাথে জরিত থেকে গর্ব বোধ করি।গনপ্রজাতন্ত্রী বাংলাদেশ সরকারেরর মাননীয় প্রধানমন্ত্রী তথ্য ও যোগাযোগ প্রযুক্তির ব্যবহার করে বাংলাদেশ কে একটি স্বচ্ছ জবাব দিহি মূলক ও দূর্নীতি মুক্ত দেশ হিসাবে গড়ে তোলার লক্ষে রুপকল্প ২০২১ ঘোষানা করেন । তারই আলোকে তথ্য ও প্রযুক্তি ব্যবহারে দক্ষ একটি আধুনিক প্রজন্ম গড়ে তোলার লক্ষে সারা দেশে শিক্ষামন্ত্রনালয় এবং প্রাথমিক ও গনশিক্ষা মন্ত্রনালয়ের মাধ্যমে তেইশ হাজারের বেশী প্রতিষ্ঠানে মাল্টিমিডিয়া ক্লঅসরুম স্থাপন করা হয়েছে । প্রতিটি প্রতিষ্টানে একটি ল্যাবটপ, ইন্টার নেট, মডেম, মাল্টিমিডিয়া প্রজেক্টর প্রেআজেক্টর স্কিন, সাউন্ড সিস্টেম প্রদান করেছেন ।', '2018-01-27 23:11:05', '2018-07-22 23:22:17'),
(6, 'ict-club', '97xFI8u82rZWSOWTE6vlLk8E4gYrLL.jpg', 'ICT ক্লাব', 'ICT CLUB', 'ljusmNv7JhLEDFV20KUgdlYUERRhVz.jpg', 'ক্লাব রুম', 'ICT ক্লাব রুম', 'আমি এই প্রবিদ্যাপীঠ এর সাথে জরিত থেকে গর্ব বোধ করি। মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন বিকল্প নেই । তাই এ প্রতিষ্ঠান দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে ভূমিকা নিষ্ঠার সাথে পালন করে আসছে', '2018-01-27 23:16:07', '2018-07-22 23:22:11'),
(7, 'science-club', 'LARMzIzFW5MY8No1A7gnVdVmqf2XjE.jpg', 'Electrical Club', 'Science Club', 'VVO8Zwe8aKfKFHcgmp9v2Hlb0F6GR4.jpg', 'ক্লাব', 'ক্লাব রুম', 'মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন বিকল্প নেই । প্রতিষ্ঠান দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে ভূমিকা নিষ্ঠার সাথে পালন করে আসছে ।সমগ্র বাংলাদেশে যে কয়টি আদর্শ শিক্ষা প্রতিষ্ঠান রয়েছে স্কুল নিঃসন্দেহে তাদের অন্যতম । এই জেলার মাঝ দিয়ে বয়ে গেছে বুড়িগঙ্গা নদী । এই নদীর প্রায় ছয় কিলোমিটার পুর্বে সমান্তরাল ভাবে বহমান ছিল তুরাগ নদী । কালের বিবর্তনে যা আজ মরা নদীর রূপ নিয়েছে । এই দুই নদীর মাঝখানে গড়ে উঠেছিল একটি বন্দর নগরী । এই বন্দর নগরীর আধুনিক রূপ আজকের ঢাকা শহর । আর এই শহরের প্রাণ কেন্দ্রে এক মনোরম পরিবেশে প্রতিষ্ঠান অবস্থিত ।', '2018-01-27 23:38:40', '2018-07-22 23:22:01'),
(8, 'computer-club', '8J141WU4l9WDJzOXlMhmt52yK5KcI6.jpg', 'কম্পিউটার ক্লাব', 'Computer Club', 'wY2avC72PTWVR6kRlj3GCMkcllIMdi.jpg', 'কম্পিউটার ক্লাব', 'কম্পিউটার ক্লাব', 'আমি এই প্রবিদ্যাপীঠ এর সাথে জরিত থেকে গর্ব বোধ করি। মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন বিকল্প নেই । তাই এ প্রতিষ্ঠান দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে ভূমিকা নিষ্ঠার সাথে পালন করে আসছে', '2018-01-27 23:41:48', '2018-07-22 23:21:53'),
(9, 'school-library', 'onFnQMGe8A69nYDPdMUUEt8TII0FJG.jpg', 'স্কুল লাইব্রেরি', 'Library', 'u8L3SeJMp3c5MN82Y2CxM9OW2CDKAk.jpg', 'আমাদের  লাইব্রেরি', 'লাইব্রেরি প্রয়োজনীয়তা', 'আমাদের স্কুল লাইব্রেরিটি বেশ পুরোনো। স্কুলের প্রতিষ্ঠালগ্নেই এটি প্রতিষ্ঠিত হয়। প্রায় পাঁচ হাজার বই, দেশি-বিদেশি পত্রপত্রিকার এক সমৃদ্ধ সংগ্রহশালা এটি। চারটি সারিতে ছাত্রছাত্রীরা বসে পড়তে পারে। শিক্ষকদের বসার ব্যবস্থাটাও দারুণ। বহিরাগত পাঠকেরা এখান থেকে বই ধার করে নিয়ে যান। সকাল আটটা থেকে রাত আটটা পর্যন্ত লাইব্রেরিটি খোলা থাকে। আগে স্কুল ভবনে থাকলেও এখন লাইব্রেরিটির জমি তার নিজস্ব। অনেক গণ্যমান্য ব্যক্তি এর সদস্য। প্রতিবছর একটি সাহিত্য সাময়িকী প্রকাশ হয় এখান থেকে। আমার ছাত্রছাত্রীরা এখান থেকেই স্বপ্ন সাজায় ভবিষ্যতের। প্রধান শিক্ষক সবকিছু পরিচালনা করেন। তবে বাংলা বিভাগের শিক্ষক লাইব্রেরির তত্ত্বাবধান করে থাকেন। এটি আমাদের সবার গর্ব।', '2018-02-18 11:13:24', '2018-02-18 11:19:08'),
(10, 'school-transport', 'StqbTQHtg81x4dHCgTVA3w5MryrHRI.jpg', 'স্কুল বাস', 'Transport', 'n2oYbAbaiSb3yzw3TQnrxvFIB0YPLM.jpg', 'স্কুল বাস', 'আমাদের স্কুল বাস', 'আমি এই প্রবিদ্যাপীঠ এর সাথে জরিত থেকে গর্ব বোধ করি। মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন বিকল্প নেই । তাই এই প্রতিষ্ঠান দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে ভূমিকা নিষ্ঠার সাথে পালন করে আসছে', '2018-03-06 15:03:16', '2018-08-28 00:13:46');

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
-- Table structure for table `public_results`
--

CREATE TABLE `public_results` (
  `id` int(11) NOT NULL,
  `pass_year` varchar(192) NOT NULL,
  `total_std` varchar(192) NOT NULL,
  `gread_aplus` varchar(192) NOT NULL,
  `gread_a` varchar(192) NOT NULL,
  `pass_presen` varchar(192) NOT NULL,
  `exam_type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_results`
--

INSERT INTO `public_results` (`id`, `pass_year`, `total_std`, `gread_aplus`, `gread_a`, `pass_presen`, `exam_type`, `created_at`, `updated_at`) VALUES
(2, '2018', '565', '4', '20', '80%', 1, '2018-08-29 01:17:41', '2018-08-29 01:17:41'),
(3, '2010', '100', '20', '54', '75%', 0, '2018-08-29 01:31:12', '2018-08-29 01:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `sendmessages`
--

CREATE TABLE `sendmessages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `scl_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scl_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scl_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scl_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scl_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scl_description` text COLLATE utf8mb4_unicode_ci,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holiday_list` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `scl_name`, `scl_email`, `scl_phone`, `scl_logo`, `scl_address`, `scl_description`, `copyright`, `institute_info`, `holiday_list`, `created_at`, `updated_at`) VALUES
(1, 'ABC International School', 'info@gmail.com', '01700000000', 'z427OJcIMH6BNrLjKScf.png', 'Badda, Dhaka', 'আমি এই প্রবিদ্যাপীঠ এর সাথে জরিত থেকে গর্ব বোধ করি। মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা ।', 'VENUS IT LTD - 2018', '{\"fb\":\"https:\\/\\/www.facebook.com\\/venusitltd\\/\",\"tw\":\"#\",\"gl\":\"#\",\"ln\":\"#\"}', 'axsoeR5pKKG2kN2RuOMr.jpg', '2018-08-01 23:35:12', '2018-09-02 23:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slide_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `date_picker` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slide_image`, `slide_text`, `position`, `date_picker`, `created_at`, `updated_at`) VALUES
(1, '8EI36b87BS45ytpbk6MSnM3rwE2GPo.jpg', 'সবার জন্য শিক্ষা', 1, '2018-02-01', '2018-02-01 03:53:54', '2018-07-14 23:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(10) UNSIGNED NOT NULL,
  `sports_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sports_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sports_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sports_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sports_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `sports_slug`, `sports_title`, `sports_name`, `sports_desc`, `sports_image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'আন্তর্জাতিক খেলাধুলা', 'ফুটবল', 'সুস্থ দেহ সবল মন খেলাধুলার প্রয়োজন। যদি কেউ সুস্থ দেহ ও সবল মন চায় তাহলে খেলাধুলার কোন বিকল্প নেই।', 'EpqVhUlzLyrr8gfVGfrvQjOIbueJtW.jpg', NULL, '2018-07-15 00:36:20'),
(2, NULL, 'বার্ষিক ক্রীড়া প্রতিযোগিতা', 'ভলিবল', 'সুস্থ দেহ সবল মন খেলাধুলার প্রয়োজন। যদি কেউ সুস্থ দেহ ও সবল মন চায় তাহলে খেলাধুলার কোন বিকল্প নেই।', 'WCpAiofBqFgQNgGpgnRnEQo95Qng24.jpg', '2018-01-31 05:15:10', '2018-07-15 00:37:06'),
(3, NULL, 'দৌড় প্রতিযোগিতা', 'লং দৌড়', 'সুস্থ দেহ সবল মন খেলাধুলার প্রয়োজন। যদি কেউ সুস্থ দেহ ও সবল মন চায় তাহলে খেলাধুলার কোন বিকল্প নেই।', 'dxHor8Rwwur7jhDDalO2NRV4hRXgZi.jpg', '2018-01-31 05:17:41', '2018-07-15 00:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_message`
--

CREATE TABLE `teacher_message` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(191) NOT NULL,
  `page_bgimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breadcamp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph_one` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph_two` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_info` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_message`
--

INSERT INTO `teacher_message` (`id`, `page_route`, `type`, `page_bgimage`, `page_title`, `breadcamp`, `heading_one`, `paragraph_one`, `heading_two`, `paragraph_two`, `profile_picture`, `teacher_info`, `created_at`, `updated_at`) VALUES
(1, 'principal-message', 1, 'vrJTjdaYbmsPz41UyJRFH8FVf6LAgX.png', 'প্রধান শিক্ষকের বাণী', 'Head Teacher\'s Message', 'প্রধান শিক্ষকের বাণী', 'মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন বিকল্প নেই ।  প্রতিষ্ঠান দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে ভূমিকা নিষ্ঠার সাথে পালন করে আসছে ।সমগ্র বাংলাদেশে যে কয়টি আদর্শ শিক্ষা প্রতিষ্ঠান রয়েছে স্কুল নিঃসন্দেহে তাদের অন্যতম । এই জেলার মাঝ দিয়ে বয়ে গেছে বুড়িগঙ্গা নদী । এই নদীর প্রায় ছয় কিলোমিটার পুর্বে সমান্তরাল ভাবে বহমান ছিল তুরাগ নদী । কালের বিবর্তনে যা আজ মরা নদীর রূপ নিয়েছে । এই দুই নদীর মাঝখানে গড়ে উঠেছিল একটি বন্দর নগরী । এই বন্দর নগরীর আধুনিক রূপ আজকের ঢাকা শহর । আর এই শহরের প্রাণ কেন্দ্রে এক মনোরম পরিবেশে এই প্রতিষ্ঠান অবস্থিত ।', 'প্রধান শিক্ষকের প্রজ্ঞাপন', 'মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন বিকল্প নেই ।  প্রতিষ্ঠান দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে ভূমিকা নিষ্ঠার সাথে পালন করে আসছে ।সমগ্র বাংলাদেশে যে কয়টি আদর্শ শিক্ষা প্রতিষ্ঠান রয়েছে স্কুল নিঃসন্দেহে তাদের অন্যতম । এই জেলার মাঝ দিয়ে বয়ে গেছে বুড়িগঙ্গা নদী । এই নদীর প্রায় ছয় কিলোমিটার পুর্বে সমান্তরাল ভাবে বহমান ছিল তুরাগ নদী । কালের বিবর্তনে যা আজ মরা নদীর রূপ নিয়েছে । এই দুই নদীর মাঝখানে গড়ে উঠেছিল একটি বন্দর নগরী । এই বন্দর নগরীর আধুনিক রূপ আজকের ঢাকা শহর । আর এই শহরের প্রাণ কেন্দ্রে এক মনোরম পরিবেশে এই প্রতিষ্ঠান অবস্থিত ।', '1yFsizGnwWpKXnUXcyf9pfXosWKPMA.jpg', '{\"name\":\"Head Teacher\'s Name\",\"dept\":null,\"dgn\":\"Head Teacher\",\"email\":null,\"phone\":null,\"fb\":\"#\",\"tw\":\"#\",\"gl\":\"#\",\"ln\":\"#\"}', NULL, '2018-07-22 22:42:44'),
(4, 'director-message', 3, '8KEmADrt6xzFKnhIhfOPkZ8N3C1Pdt.png', 'সভাপতির বাণী', 'Director', 'সভাপতির বাণী', 'মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন বিকল্প নেই ।  প্রতিষ্ঠান দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে ভূমিকা নিষ্ঠার সাথে পালন করে আসছে ।সমগ্র বাংলাদেশে যে কয়টি আদর্শ শিক্ষা প্রতিষ্ঠান রয়েছে স্কুল নিঃসন্দেহে তাদের অন্যতম । এই জেলার মাঝ দিয়ে বয়ে গেছে বুড়িগঙ্গা নদী । এই নদীর প্রায় ছয় কিলোমিটার পুর্বে সমান্তরাল ভাবে বহমান ছিল তুরাগ নদী । কালের বিবর্তনে যা আজ মরা নদীর রূপ নিয়েছে । এই দুই নদীর মাঝখানে গড়ে উঠেছিল একটি বন্দর নগরী । এই বন্দর নগরীর আধুনিক রূপ আজকের ঢাকা শহর । আর এই শহরের প্রাণ কেন্দ্রে এক মনোরম পরিবেশে এই প্রতিষ্ঠান অবস্থিত ।', 'সভাপতির প্রজ্ঞাপন', 'মানুষের জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন বিকল্প নেই ।  প্রতিষ্ঠান দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে ভূমিকা নিষ্ঠার সাথে পালন করে আসছে ।সমগ্র বাংলাদেশে যে কয়টি আদর্শ শিক্ষা প্রতিষ্ঠান রয়েছে স্কুল নিঃসন্দেহে তাদের অন্যতম । এই জেলার মাঝ দিয়ে বয়ে গেছে বুড়িগঙ্গা নদী । এই নদীর প্রায় ছয় কিলোমিটার পুর্বে সমান্তরাল ভাবে বহমান ছিল তুরাগ নদী । কালের বিবর্তনে যা আজ মরা নদীর রূপ নিয়েছে । এই দুই নদীর মাঝখানে গড়ে উঠেছিল একটি বন্দর নগরী । এই বন্দর নগরীর আধুনিক রূপ আজকের ঢাকা শহর । আর এই শহরের প্রাণ কেন্দ্রে এক মনোরম পরিবেশে এই প্রতিষ্ঠান অবস্থিত ।', 'Ecw7HQdQpUsPvVMC9BM5mA4Jm7Iv9s.jpg', '{\"name\":\"Director (Name)\",\"dept\":null,\"dgn\":\"Director\",\"email\":null,\"phone\":null,\"fb\":\"#\",\"tw\":\"#\",\"gl\":\"#\",\"ln\":\"#\"}', '2018-03-11 01:07:08', '2018-08-27 23:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_image`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 1, '$2y$10$1uhy5Yo/QejYbJLek0wyN.37vlyNsrzq8Ck64ywNATOTKNcTq.do6', '0Es68gIstCbWqBmKkPHf4UGcedEAU58n3ah7PN4aWhPcZ9aR50AOU1Khw4qN', '2018-01-27 14:11:18', '2018-08-07 01:03:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_fees`
--
ALTER TABLE `academic_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_table`
--
ALTER TABLE `blog_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_table_blog_slug_unique` (`blog_slug`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_table_contact_slug_unique` (`contact_slug`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `facilities_faci_slug_unique` (`faci_slug`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_slug` (`name_slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_table`
--
ALTER TABLE `page_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_table_history_route_unique` (`history_route`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `public_results`
--
ALTER TABLE `public_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendmessages`
--
ALTER TABLE `sendmessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sports_sports_slug_unique` (`sports_slug`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_message`
--
ALTER TABLE `teacher_message`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_message_page_route_unique` (`page_route`);

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
-- AUTO_INCREMENT for table `academic_fees`
--
ALTER TABLE `academic_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `blog_table`
--
ALTER TABLE `blog_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `page_table`
--
ALTER TABLE `page_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `public_results`
--
ALTER TABLE `public_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sendmessages`
--
ALTER TABLE `sendmessages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher_message`
--
ALTER TABLE `teacher_message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
