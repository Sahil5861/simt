-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2025 at 05:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edupreme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_apply`
--

CREATE TABLE `admission_apply` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `otp` varchar(6) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `schedule_call` date DEFAULT NULL,
  `consent` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_apply`
--

INSERT INTO `admission_apply` (`id`, `username`, `email`, `mobile_number`, `otp`, `state`, `city`, `discipline`, `specialization`, `schedule_call`, `consent`, `created_at`, `updated_at`) VALUES
(1, 'sahil', 'sahil014@gmail.com', '8765099096', NULL, 'Delhi', 'New Delhi', 'engineering', 'software_engineering', '2025-04-23', 0, '2025-04-23 01:59:26', '2025-04-23 01:59:26'),
(2, 'aamir', 'aamir@gmail.com', '9999977777', NULL, 'Delhi', 'delhi', 'engineering', 'software_engineering', '2025-04-23', 0, '2025-04-23 02:02:29', '2025-04-23 02:02:29'),
(3, 'sahil', 'sahilnew001@gmail.com', '9876509876', NULL, 'Delhi', 'new delhi', 'ai_ml', NULL, '2025-05-05', 1, '2025-05-05 06:40:19', '2025-05-05 06:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `admission_enquiries`
--

CREATE TABLE `admission_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `program` varchar(255) NOT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `is_checked` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_enquiries`
--

INSERT INTO `admission_enquiries` (`id`, `name`, `email`, `phone`, `program`, `specialization`, `state`, `city`, `is_checked`, `created_at`, `updated_at`) VALUES
(2, 'test new', 'testnew@gmail.com', '9988770035', 'cse', NULL, 'Delhi', NULL, 1, '2025-04-05 02:30:47', '2025-04-05 02:30:47'),
(3, 'test test', 'sahil008@gmail.com', '8765099090', 'cse', NULL, 'Jammu & Kashmir', NULL, 0, '2025-04-05 02:45:12', '2025-04-05 02:45:12'),
(4, 'sahilnew', 'sahilnew@gmail.com', '9999977777', 'bca', NULL, 'Delhi', NULL, 1, '2025-05-05 02:29:49', '2025-05-05 02:29:49'),
(5, 'aamir', 'aamir1234@gmail.com', '9999966666', 'mca', NULL, 'Delhi', NULL, 1, '2025-05-05 02:38:21', '2025-05-05 02:38:21'),
(6, 'aamir', 'aamir@gmail.com', '9999988989', 'mca', NULL, 'Delhi', NULL, 1, '2025-05-05 02:39:30', '2025-05-05 02:39:30'),
(7, 'aamir', 'aamir1234@gmail.com', '9999966666', 'mca', NULL, 'Delhi', NULL, 1, '2025-05-05 02:41:04', '2025-05-05 02:41:04'),
(8, 'aamir new', 'aamirnew123@gmail.com', '0999978675', 'mca', NULL, 'Delhi', NULL, 1, '2025-05-05 02:42:01', '2025-05-05 02:42:01'),
(9, 'aamir khan', 'aamirkhan123@gmail.com', '9999977787', 'mca', NULL, 'Delhi', NULL, 1, '2025-05-05 02:43:22', '2025-05-05 02:43:22'),
(10, 'test test', 'test@gmail.com', '9988770033', 'bca', NULL, 'Delhi', NULL, 1, '2025-05-14 02:52:36', '2025-05-14 02:52:36'),
(11, 'test', 'test@gmail.com', '9988770033', 'CSE', NULL, 'Delhi', 'New Delhi', 1, '2025-07-09 07:30:33', '2025-07-09 07:30:33'),
(12, 'test new', 'test@gmail.com', '9635548343', 'B.TECH', 'CSE', 'Chandigarh', 'chandigadh', 1, '2025-07-09 07:33:05', '2025-07-09 07:33:05'),
(13, 'test', 'test@gmail.com', '9876543245', 'B.TECH', 'CSE', 'Delhi', 'Asola', 0, '2025-07-11 07:44:57', '2025-07-11 07:44:57'),
(14, 'test', 'test@gmail.com', '9635548343', 'B.TECH', 'CSE', 'Delhi', 'Delhi', 0, '2025-07-11 08:05:47', '2025-07-11 08:05:47'),
(15, 'zul', 'zul123@gmail.com', '0987654324', 'B.TECH', 'AI & ML', 'Delhi', 'Delhi', 0, '2025-07-11 08:06:37', '2025-07-11 08:06:37'),
(16, 'test test', 'test@gmail.com', '9988770033', 'B.TECH', 'CSE', 'Himachal Pradesh', 'Shimla', 1, '2025-07-11 08:07:14', '2025-07-11 08:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `about` longtext DEFAULT NULL,
  `author_image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `designation`, `about`, `author_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sahil', 'Boss', '<h1>Sahl is a Developer,studet of python AI and ML.</h1>\r\n<p>demo text.......</p>\r\n<p>demo text.......</p>\r\n<p>demo text.......</p>', 'authors/1741890858.PNG', 1, '2025-03-13 13:04:18', '2025-03-13 13:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author_image` text DEFAULT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `author_designation` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `seo_url` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `schema_json` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author_id`, `blog_title`, `image`, `author_image`, `author_name`, `author_designation`, `description`, `seo_url`, `meta_title`, `meta_keywords`, `meta_description`, `schema_json`, `created_at`, `updated_at`) VALUES
(9, 1, 'my blog', 'blogs/1741949583.jpg', NULL, NULL, NULL, '<h1>amcbshjcbshjcvshdj</h1>', 'my_blog', 'blog_001_meta', 'animal', 'asdfghj', NULL, '2025-03-14 05:23:03', '2025-03-14 05:23:03'),
(10, 1, 'blog 002', 'blogs/1742027141.PNG', NULL, NULL, NULL, '<h1>A black Cat..</h1>', 'blog_002', 'blog_002-title', 'cat, black, animal', 'A black Cat', NULL, '2025-03-15 02:55:41', '2025-03-15 02:55:41'),
(11, 1, 'Demo Blog', 'blogs/1742027537.jpg', NULL, NULL, NULL, '<h1 style=\"margin-top: 10.0pt; line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">5 Skills to Master in Computer Engineering</span></h1>\r\n<h2><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Introduction</span></h2>\r\n<p><span lang=\"EN\" style=\"font-size: 11.0pt; line-height: 115%; font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins; mso-ansi-language: EN; mso-fareast-language: EN-IN; mso-bidi-language: AR-SA;\">Computer engineering is one of the highest-pace and high-tech fields in technological development. Professionals who wish to remain competitive in this</span></p>\r\n<p><span lang=\"EN\" style=\"font-size: 11.0pt; line-height: 115%; font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins; mso-ansi-language: EN; mso-fareast-language: EN-IN; mso-bidi-language: AR-SA;\"><span style=\"font-size: 11pt;\">space must also be skilled in the most fundamental areas of innovation and problem solving. In this post we get into the five most critical skills a would-be computer engineer must learn</span></span></p>\r\n<h2><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Top 5 Skills You Can Master in Computer Engineering</span></h2>\r\n<p><span lang=\"EN\" style=\"font-size: 11.0pt; line-height: 115%; font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins; mso-ansi-language: EN; mso-fareast-language: EN-IN; mso-bidi-language: AR-SA;\">In this section you are going to explore the best-in-line skills that need to be mastered. If you are a computer engineer pioneer or even a certified one, the below-mentioned skills can boost your career prospectus.</span></p>\r\n<h3><strong><span lang=\"EN\" style=\"font-family: Poppins;\">#1 Programming Language</span></strong></h3>\r\n<p><span lang=\"EN\" style=\"font-size: 11.0pt; line-height: 115%; font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins; mso-ansi-language: EN; mso-fareast-language: EN-IN; mso-bidi-language: AR-SA;\">Computer engineering is a field of study that focuses on the core of programming languages. Multiple languages are like having multiple tools which engineers use to write software, find bugs and squeeze out system performance efficiency. Though there in fact, each language is for a unique reason it is to be chosen based on career goals.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Here are some of the fundamental programming languages you need to learn:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">C/C++: </span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Objective-C, a powerful language for reputed &laquo;systems programming&raquo;, which is rightfully used by all systems and applications that require great performance such as operating systems, embedded systems.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Sufficient:</span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> Python (this is also one of the most popular languages for machine learning code bases, data analysis, automation)</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Java:</span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> Used for large systems and Android app development, it is widely used in the enterprise application space.</span></p>\r\n<p><span lang=\"EN\" style=\"font-size: 11.0pt; line-height: 115%; font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins; mso-ansi-language: EN; mso-fareast-language: EN-IN; mso-bidi-language: AR-SA;\"><span lang=\"EN\" style=\"text-indent: -18pt;\">&nbsp; &nbsp; &nbsp; &nbsp;●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><strong style=\"text-indent: -18pt; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Verilog/VHDL:</span></strong><span lang=\"EN\" style=\"text-indent: -18pt;\"> Essential for computer engineers working on hardware- these are used to describe and simulate digital circuits</span></span></p>\r\n<p class=\"MsoNormal\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Remember! Practice is the key. Enjoy coding and visit websites like leetcode, hacker rank, codeforces for best improvement of coding skills. Solving more questions will not only exercise your problem solving but also makes your understanding stronger through practice.</span></p>\r\n<h3><strong><span lang=\"EN\">#2 Artificial Intelligence and Machine Learning (AI &amp; ML)</span></strong></h3>\r\n<p class=\"MsoNormal\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">AI &amp; ML are reshaping industries with automation of processes, predictive analytics and enabling intelligent systems. These are the things that are essential to every modern computer engineering.</span></p>\r\n<p class=\"MsoNormal\"><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Core Fundamental Concepts of AI &amp; ML:</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Deep Learning and Neural Networks:</span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> Understand the architecture created by deep learning which underpins image recognition tasks or natural language processing etc.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Data Preprocessing:</span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> Learn to apply various techniques on raw data &amp; transform them into a structured form that can be efficiently used for model training.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Benchmarking your model:</span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> How to benchmark algorithms for performance of both accuracy and efficiency.</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> <span lang=\"EN\" style=\"font-size: 11pt; line-height: 115%;\">Study the tools and libraries like TensorFlow, PyTorch, scikit-learn. Practical experience is acquired by applying these to live datasets in projects done for real problems with AI/ML</span></span></p>\r\n<h3><strong><span lang=\"EN\" style=\"font-family: Poppins;\">#3 Data Structures and Algorithms</span></strong></h3>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Fundamentally, computer engineering is about processing data and solving structure problems which comes down to knowing your shit about data structures and algorithms. These skills are the must have skill-set for building supreme software optimization solutions.</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Essential Concepts to Remember:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; line-height: normal; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Arrays, Linked Lists, Trees and Graphs</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; line-height: normal; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Sorting &amp; Searching algorithms</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; line-height: normal; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Time and Space ComplexityAnalysis</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Keep spare time for regular practice on platforms like GeeksforGeeks and LeetCode. Practicing a range of algorithmic problems will help you gain an analytical mindset and code fluency.</span></p>\r\n<h3 style=\"line-height: normal;\"><strong><span lang=\"EN\" style=\"font-family: Poppins;\">#4 Computer Architecture and Hardware</span></strong></h3>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Before optimizing system integrations, you have to understand computer architecture and the hardware. It is where the concrete meets software.</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Key Areas of Focus:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; line-height: normal; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Digital Logic:</span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> At a lower level than HDLs, understanding what logic gates and flip-flops do provide the basis for hardware design.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; line-height: normal; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Microprocessor Architecture: </span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">To comprehend on the working of computers how we read instructions processes- dive into CPU, memory subsystems and I/O systems.</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"><span lang=\"EN\" style=\"text-indent: -18pt;\">&nbsp; &nbsp; &nbsp; ●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><strong style=\"text-indent: -18pt; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Embedded Systems: </span></strong><span lang=\"EN\" style=\"text-indent: -18pt;\">To master programming the microcontrollers of solutions applicable for level learners (IoT devices, real time&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;systems etc)</span>&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Perform hands-on projects with the devices such as Raspberry Pi and Arduino. These projects will give real experience that will nurture your computer engineering journey and offer fruitful result in future.</span></p>\r\n<h3 style=\"line-height: normal;\"><strong><span lang=\"EN\" style=\"font-family: Poppins;\">#5 Innovate and Communicate</span></strong></h3>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> <span lang=\"EN\" style=\"font-size: 11pt; line-height: 115%;\">A good computer engineer needs to be able to think creatively and also communicate well, in order to do the job successfully. Complex technical concepts</span></span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"><span lang=\"EN\" style=\"font-size: 11pt; line-height: 115%;\">have to be converted into simple tangible solutions, generation of innovation happens here.</span></span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Ways to make them better:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; line-height: normal; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Technical Documentation:</span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> Write easy to read and very descriptive documentation for your projects and processes.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; line-height: normal; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">OOQ 22: Public Speaking</span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> &ndash; Learn how to present technical concepts clearly within any PPT/Others meetings/ discussions.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 36.0pt; text-indent: -18.0pt; line-height: normal; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]--><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">●<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-variant-emoji: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Brainstorming:</span></strong><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"> Encouragement to bring idea generation sessions in a lively manner for challenging work groups. Maybe the ideation session, involved in team effort to tackle tough problems. </span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"><span lang=\"EN\" style=\"font-size: 11pt; line-height: 115%;\">Use techniques of storytelling; keep it engaging and within reach for your audience. One way with all audiences be it technical or not so technical.</span></span></p>\r\n<h2 style=\"line-height: normal;\"><span lang=\"EN\">Final Words</span></h2>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; margin: 12.0pt 0cm 12.0pt 0cm;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\">Mastery of these five pillars&mdash;programming languages, AI &amp; ML, data structures, computer architecture, and communication&mdash;makes you an expert in the computer engineering field for real world challenges. The demand for such professionals is at an all time high and across all industries.</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal;\"><span lang=\"EN\" style=\"font-family: Poppins; mso-fareast-font-family: Poppins; mso-bidi-font-family: Poppins;\"><span lang=\"EN\" style=\"font-size: 11pt; line-height: 115%;\">As technology changes, continuous learning is the key. By investing in skill development and applying your skills to new projects you can contribute to computer engineering. Start now and build your career in this digital age!&nbsp;</span></span></p>', 'demo_blog', '5 Skills Must Master in Computer Engineering', 'web, html, csscomputer engineering, computer engineer essential skills, programming skills, hardware knowledge, computer science competencies', 'Read on to find out what 5 skills in computer engineering are must to master. Get better at programming, hardware, problem solving and many more to excel in the cut-throat tech industry.', NULL, '2025-03-15 03:02:17', '2025-04-24 07:15:32'),
(12, 1, 'Demo Blog 2', 'blogs/1742222591.jpeg', NULL, NULL, NULL, '<h2>Hii Boss</h2>\r\n<p><img src=\"../../blog_uploads/1742222543_Vodka-Pizza.jpg\" alt=\"this is a demo image\" width=\"300\" height=\"300\" /><br /><br />this is about Brovo Pizza !!<br /><br /></p>', 'demo_2', 'demo', 'demo, new', 'This is a demo Blog', NULL, '2025-03-17 09:13:11', '2025-03-17 09:14:19'),
(13, 1, 'Demo Blog 3', 'blogs/1742224410.jpg', NULL, NULL, NULL, '<h2>Hello World !!</h2>\r\n<p><img src=\"http://localhost/seri/public/blog_uploads/1742224394_michael-hull-UdvXJ95Yqt8-unsplash.jpg\" alt=\"\" width=\"400\" height=\"400\" /></p>\r\n<p><em><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni quia blanditiis nostrum beatae porro pariatur, repudiandae expedita iste neque quas corrupti iure natus, quo perferendis? Reprehenderit ex maxime adipisci nihil fugit molestiae magni voluptatum sit at veniam explicabo architecto ipsa, corrupti quidem nisi sequi.</strong></em></p>\r\n<p><em><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni quia blanditiis nostrum beatae porro pariatur, repudiandae expedita iste neque quas corrupti iure natus, quo perferendis? Reprehenderit ex maxime adipisci nihil fugit molestiae magni voluptatum sit at veniam explicabo architecto ipsa, corrupti quidem nisi sequi.</strong></em></p>\r\n<p>&nbsp;</p>\r\n<p><em><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni quia blanditiis nostrum beatae porro pariatur, repudiandae expedita iste neque quas corrupti iure natus, quo perferendis? Reprehenderit ex maxime adipisci nihil fugit molestiae magni voluptatum sit at veniam explicabo architecto ipsa, corrupti quidem nisi sequi.</strong></em></p>\r\n<p>&nbsp;</p>\r\n<p><em><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni quia blanditiis nostrum beatae porro pariatur, repudiandae expedita iste neque quas corrupti iure natus, quo perferendis? Reprehenderit ex maxime adipisci nihil fugit molestiae magni voluptatum sit at veniam explicabo architecto ipsa, corrupti quidem nisi sequi.</strong></em></p>\r\n<p>&nbsp;</p>', 'blog_002', 'meta cat 2', 'cat, black, animal', 'This is a demo Blog', NULL, '2025-03-17 09:43:30', '2025-03-17 09:45:22'),
(14, NULL, 'My new Blog', 'blogs/1750748100.jpg', NULL, NULL, NULL, '<p>test</p>', 'my-new-blog', '5 Skills Must Master in Computer Engineering', 'black, cat, animal', 'Read on to find out what 5 skills in computer engineering are must to master. Get better at programming, hardware, problem solving and many more to excel in the cut-throat tech industry.', NULL, '2025-06-24 01:25:00', '2025-06-24 01:25:00'),
(15, 1, 'blog new', 'blogs/1752487814.png', NULL, NULL, NULL, '<p>hello</p>', 'blog-new', 'meta cat 2', 'web, html, csscomputer engineering, computer engineer essential skills, programming skills, hardware knowledge, computer science competencies', 'Read on to find out what 5 skills in computer engineering are must to master. Get better at programming, hardware, problem solving and many more to excel in the cut-throat tech industry.', NULL, '2025-07-14 04:40:14', '2025-07-14 04:40:14'),
(16, 1, 'blog enw 2', 'blogs/1752487863.jpg', NULL, NULL, NULL, '<p>test</p>', 'blog_002', '5 Skills Must Master in Computer Engineering', 'web, html, csscomputer engineering, computer engineer essential skills, programming skills, hardware knowledge, computer science competencies', 'Read on to find out what 5 skills in computer engineering are must to master. Get better at programming, hardware, problem solving and many more to excel in the cut-throat tech industry.', NULL, '2025-07-14 04:41:03', '2025-07-14 04:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `blog_blog_category`
--

CREATE TABLE `blog_blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_blog_category`
--

INSERT INTO `blog_blog_category` (`id`, `blog_id`, `category_id`) VALUES
(1, 9, 1),
(2, 9, 3),
(3, 10, 1),
(4, 10, 3),
(5, 11, 1),
(6, 12, 1),
(7, 13, 3),
(8, 14, 4),
(9, 14, 5),
(10, 14, 6),
(11, 15, 3),
(12, 16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Animals', 1, '2025-03-14 04:58:27', '2025-03-14 05:37:20'),
(3, 'Cat', 1, '2025-03-14 05:36:05', '2025-03-14 05:36:05'),
(4, 'Knowledge', 1, '2025-03-19 05:49:28', '2025-03-19 05:49:28'),
(5, 'Learning', 1, '2025-03-19 05:52:16', '2025-03-19 05:52:16'),
(6, 'Leadership', 1, '2025-03-19 06:02:57', '2025-03-19 06:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 13, 'This is a demo blog !', '2025-03-26 04:23:23', '2025-03-26 04:23:23'),
(2, 13, 'Demo comment 2', '2025-03-26 04:30:08', '2025-03-26 04:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `state_id`) VALUES
(1, 'Kolhapur', 21),
(2, 'Port Blair', 1),
(3, 'Adilabad', 2),
(4, 'Adoni', 2),
(5, 'Amadalavalasa', 2),
(6, 'Amalapuram', 2),
(7, 'Anakapalle', 2),
(8, 'Anantapur', 2),
(9, 'Badepalle', 2),
(10, 'Banganapalle', 2),
(11, 'Bapatla', 2),
(12, 'Bellampalle', 2),
(13, 'Bethamcherla', 2),
(14, 'Bhadrachalam', 2),
(15, 'Bhainsa', 2),
(16, 'Bheemunipatnam', 2),
(17, 'Bhimavaram', 2),
(18, 'Bhongir', 2),
(19, 'Bobbili', 2),
(20, 'Bodhan', 2),
(21, 'Chilakaluripet', 2),
(22, 'Chirala', 2),
(23, 'Chittoor', 2),
(24, 'Cuddapah', 2),
(25, 'Devarakonda', 2),
(26, 'Dharmavaram', 2),
(27, 'Eluru', 2),
(28, 'Farooqnagar', 2),
(29, 'Gadwal', 2),
(30, 'Gooty', 2),
(31, 'Gudivada', 2),
(32, 'Gudur', 2),
(33, 'Guntakal', 2),
(34, 'Guntur', 2),
(35, 'Hanuman Junction', 2),
(36, 'Hindupur', 2),
(37, 'Hyderabad', 2),
(38, 'Ichchapuram', 2),
(39, 'Jaggaiahpet', 2),
(40, 'Jagtial', 2),
(41, 'Jammalamadugu', 2),
(42, 'Jangaon', 2),
(43, 'Kadapa', 2),
(44, 'Kadiri', 2),
(45, 'Kagaznagar', 2),
(46, 'Kakinada', 2),
(47, 'Kalyandurg', 2),
(48, 'Kamareddy', 2),
(49, 'Kandukur', 2),
(50, 'Karimnagar', 2),
(51, 'Kavali', 2),
(52, 'Khammam', 2),
(53, 'Koratla', 2),
(54, 'Kothagudem', 2),
(55, 'Kothapeta', 2),
(56, 'Kovvur', 2),
(57, 'Kurnool', 2),
(58, 'Kyathampalle', 2),
(59, 'Macherla', 2),
(60, 'Machilipatnam', 2),
(61, 'Madanapalle', 2),
(62, 'Mahbubnagar', 2),
(63, 'Mancherial', 2),
(64, 'Mandamarri', 2),
(65, 'Mandapeta', 2),
(66, 'Manuguru', 2),
(67, 'Markapur', 2),
(68, 'Medak', 2),
(69, 'Miryalaguda', 2),
(70, 'Mogalthur', 2),
(71, 'Nagari', 2),
(72, 'Nagarkurnool', 2),
(73, 'Nandyal', 2),
(74, 'Narasapur', 2),
(75, 'Narasaraopet', 2),
(76, 'Narayanpet', 2),
(77, 'Narsipatnam', 2),
(78, 'Nellore', 2),
(79, 'Nidadavole', 2),
(80, 'Nirmal', 2),
(81, 'Nizamabad', 2),
(82, 'Nuzvid', 2),
(83, 'Ongole', 2),
(84, 'Palacole', 2),
(85, 'Palasa Kasibugga', 2),
(86, 'Palwancha', 2),
(87, 'Parvathipuram', 2),
(88, 'Pedana', 2),
(89, 'Peddapuram', 2),
(90, 'Pithapuram', 2),
(91, 'Pondur', 2),
(92, 'Ponnur', 2),
(93, 'Proddatur', 2),
(94, 'Punganur', 2),
(95, 'Puttur', 2),
(96, 'Rajahmundry', 2),
(97, 'Rajam', 2),
(98, 'Ramachandrapuram', 2),
(99, 'Ramagundam', 2),
(100, 'Rayachoti', 2),
(101, 'Rayadurg', 2),
(102, 'Renigunta', 2),
(103, 'Repalle', 2),
(104, 'Sadasivpet', 2),
(105, 'Salur', 2),
(106, 'Samalkot', 2),
(107, 'Sangareddy', 2),
(108, 'Sattenapalle', 2),
(109, 'Siddipet', 2),
(110, 'Singapur', 2),
(111, 'Sircilla', 2),
(112, 'Srikakulam', 2),
(113, 'Srikalahasti', 2),
(115, 'Suryapet', 2),
(116, 'Tadepalligudem', 2),
(117, 'Tadpatri', 2),
(118, 'Tandur', 2),
(119, 'Tanuku', 2),
(120, 'Tenali', 2),
(121, 'Tirupati', 2),
(122, 'Tuni', 2),
(123, 'Uravakonda', 2),
(124, 'Venkatagiri', 2),
(125, 'Vicarabad', 2),
(126, 'Vijayawada', 2),
(127, 'Vinukonda', 2),
(128, 'Visakhapatnam', 2),
(129, 'Vizianagaram', 2),
(130, 'Wanaparthy', 2),
(131, 'Warangal', 2),
(132, 'Yellandu', 2),
(133, 'Yemmiganur', 2),
(134, 'Yerraguntla', 2),
(135, 'Zahirabad', 2),
(136, 'Rajampet', 2),
(137, 'Along', 3),
(138, 'Bomdila', 3),
(139, 'Itanagar', 3),
(140, 'Naharlagun', 3),
(141, 'Pasighat', 3),
(142, 'Abhayapuri', 4),
(143, 'Amguri', 4),
(144, 'Anandnagaar', 4),
(145, 'Barpeta', 4),
(146, 'Barpeta Road', 4),
(147, 'Bilasipara', 4),
(148, 'Bongaigaon', 4),
(149, 'Dhekiajuli', 4),
(150, 'Dhubri', 4),
(151, 'Dibrugarh', 4),
(152, 'Digboi', 4),
(153, 'Diphu', 4),
(154, 'Dispur', 4),
(156, 'Gauripur', 4),
(157, 'Goalpara', 0),
(157, 'Goalpara', 4),
(158, 'Golaghat', 4),
(159, 'Guwahati', 4),
(160, 'Haflong', 4),
(161, 'Hailakandi', 4),
(162, 'Hojai', 4),
(163, 'Jorhat', 4),
(164, 'Karimganj', 4),
(165, 'Kokrajhar', 4),
(166, 'Lanka', 4),
(167, 'Lumding', 4),
(168, 'Mangaldoi', 4),
(169, 'Mankachar', 4),
(170, 'Margherita', 4),
(171, 'Mariani', 4),
(172, 'Marigaon', 4),
(173, 'Nagaon', 4),
(174, 'Nalbari', 4),
(175, 'North Lakhimpur', 4),
(176, 'Rangia', 4),
(177, 'Sibsagar', 4),
(178, 'Silapathar', 4),
(179, 'Silchar', 4),
(180, 'Tezpur', 4),
(181, 'Tinsukia', 4),
(182, 'Amarpur', 5),
(183, 'Araria', 5),
(184, 'Areraj', 5),
(185, 'Arrah', 5),
(186, 'Asarganj', 5),
(187, 'Aurangabad', 5),
(188, 'Bagaha', 5),
(189, 'Bahadurganj', 5),
(190, 'Bairgania', 5),
(191, 'Bakhtiarpur', 5),
(192, 'Banka', 5),
(193, 'Banmankhi Bazar', 5),
(194, 'Barahiya', 5),
(195, 'Barauli', 5),
(196, 'Barbigha', 5),
(197, 'Barh', 5),
(198, 'Begusarai', 5),
(199, 'Behea', 5),
(200, 'Bettiah', 5),
(201, 'Bhabua', 5),
(202, 'Bhagalpur', 5),
(203, 'Bihar Sharif', 5),
(204, 'Bikramganj', 5),
(205, 'Bodh Gaya', 5),
(206, 'Buxar', 5),
(207, 'Chandan Bara', 5),
(208, 'Chanpatia', 5),
(209, 'Chhapra', 5),
(210, 'Colgong', 5),
(211, 'Dalsinghsarai', 5),
(212, 'Darbhanga', 5),
(213, 'Daudnagar', 5),
(214, 'Dehri-on-Sone', 5),
(215, 'Dhaka', 5),
(216, 'Dighwara', 5),
(217, 'Dumraon', 5),
(218, 'Fatwah', 5),
(219, 'Forbesganj', 5),
(220, 'Gaya', 5),
(221, 'Gogri Jamalpur', 5),
(222, 'Gopalganj', 5),
(223, 'Hajipur', 5),
(224, 'Hilsa', 5),
(225, 'Hisua', 5),
(226, 'Islampur', 5),
(227, 'Jagdispur', 5),
(228, 'Jamalpur', 5),
(229, 'Jamui', 5),
(230, 'Jehanabad', 5),
(231, 'Jhajha', 5),
(232, 'Jhanjharpur', 5),
(233, 'Jogabani', 5),
(234, 'Kanti', 5),
(235, 'Katihar', 5),
(236, 'Khagaria', 5),
(237, 'Kharagpur', 5),
(238, 'Kishanganj', 5),
(239, 'Lakhisarai', 5),
(240, 'Lalganj', 5),
(241, 'Madhepura', 5),
(242, 'Madhubani', 5),
(243, 'Maharajganj', 5),
(244, 'Mahnar Bazar', 5),
(245, 'Makhdumpur', 5),
(246, 'Maner', 5),
(247, 'Manihari', 5),
(248, 'Marhaura', 5),
(249, 'Masaurhi', 5),
(250, 'Mirganj', 5),
(251, 'Mokameh', 5),
(252, 'Motihari', 5),
(253, 'Motipur', 5),
(254, 'Munger', 5),
(255, 'Murliganj', 5),
(256, 'Muzaffarpur', 5),
(257, 'Narkatiaganj', 5),
(258, 'Naugachhia', 5),
(259, 'Nawada', 5),
(260, 'Nokha', 5),
(261, 'Patna', 5),
(262, 'Piro', 5),
(263, 'Purnia', 5),
(264, 'Rafiganj', 5),
(265, 'Rajgir', 5),
(266, 'Ramnagar', 5),
(267, 'Raxaul Bazar', 5),
(268, 'Revelganj', 5),
(269, 'Rosera', 5),
(270, 'Saharsa', 5),
(271, 'Samastipur', 5),
(272, 'Sasaram', 5),
(273, 'Sheikhpura', 5),
(274, 'Sheohar', 5),
(275, 'Sherghati', 5),
(276, 'Silao', 5),
(277, 'Sitamarhi', 5),
(278, 'Siwan', 5),
(279, 'Sonepur', 5),
(280, 'Sugauli', 5),
(281, 'Sultanganj', 5),
(282, 'Supaul', 5),
(283, 'Warisaliganj', 5),
(284, 'Ahiwara', 7),
(285, 'Akaltara', 7),
(286, 'Ambagarh Chowki', 7),
(287, 'Ambikapur', 7),
(288, 'Arang', 7),
(289, 'Bade Bacheli', 7),
(290, 'Balod', 7),
(291, 'Baloda Bazar', 7),
(292, 'Bemetra', 7),
(293, 'Bhatapara', 7),
(294, 'Bilaspur', 7),
(295, 'Birgaon', 7),
(296, 'Champa', 7),
(297, 'Chirmiri', 7),
(298, 'Dalli-Rajhara', 7),
(299, 'Dhamtari', 7),
(300, 'Dipka', 7),
(301, 'Dongargarh', 7),
(302, 'Durg-Bhilai Nagar', 7),
(303, 'Gobranawapara', 7),
(304, 'Jagdalpur', 7),
(305, 'Janjgir', 7),
(306, 'Jashpurnagar', 7),
(307, 'Kanker', 7),
(308, 'Kawardha', 7),
(309, 'Kondagaon', 7),
(310, 'Korba', 7),
(311, 'Mahasamund', 7),
(312, 'Mahendragarh', 7),
(313, 'Mungeli', 7),
(314, 'Naila Janjgir', 7),
(315, 'Raigarh', 7),
(316, 'Raipur', 7),
(317, 'Rajnandgaon', 7),
(318, 'Sakti', 7),
(319, 'Tilda Newra', 7),
(320, 'Amli', 8),
(321, 'Silvassa', 8),
(322, 'Daman and Diu', 9),
(323, 'Daman and Diu', 9),
(324, 'Asola', 10),
(325, 'Delhi', 10),
(326, 'Aldona', 11),
(327, 'Curchorem Cacora', 11),
(328, 'Madgaon', 11),
(329, 'Mapusa', 11),
(330, 'Margao', 11),
(331, 'Marmagao', 11),
(332, 'Panaji', 11),
(333, 'Ahmedabad', 12),
(334, 'Amreli', 12),
(335, 'Anand', 12),
(336, 'Ankleshwar', 12),
(337, 'Bharuch', 12),
(338, 'Bhavnagar', 12),
(339, 'Bhuj', 12),
(340, 'Cambay', 12),
(341, 'Dahod', 12),
(342, 'Deesa', 12),
(344, 'Dholka', 12),
(345, 'Gandhinagar', 12),
(346, 'Godhra', 12),
(347, 'Himatnagar', 12),
(348, 'Idar', 12),
(349, 'Jamnagar', 12),
(350, 'Junagadh', 12),
(351, 'Kadi', 12),
(352, 'Kalavad', 12),
(353, 'Kalol', 12),
(354, 'Kapadvanj', 12),
(355, 'Karjan', 12),
(356, 'Keshod', 12),
(357, 'Khambhalia', 12),
(358, 'Khambhat', 12),
(359, 'Kheda', 12),
(360, 'Khedbrahma', 12),
(361, 'Kheralu', 12),
(362, 'Kodinar', 12),
(363, 'Lathi', 12),
(364, 'Limbdi', 12),
(365, 'Lunawada', 12),
(366, 'Mahesana', 12),
(367, 'Mahuva', 12),
(368, 'Manavadar', 12),
(369, 'Mandvi', 12),
(370, 'Mangrol', 12),
(371, 'Mansa', 12),
(372, 'Mehmedabad', 12),
(373, 'Modasa', 12),
(374, 'Morvi', 12),
(375, 'Nadiad', 12),
(376, 'Navsari', 12),
(377, 'Padra', 12),
(378, 'Palanpur', 12),
(379, 'Palitana', 12),
(380, 'Pardi', 12),
(381, 'Patan', 12),
(382, 'Petlad', 12),
(383, 'Porbandar', 12),
(384, 'Radhanpur', 12),
(385, 'Rajkot', 12),
(386, 'Rajpipla', 12),
(387, 'Rajula', 12),
(388, 'Ranavav', 12),
(389, 'Rapar', 12),
(390, 'Salaya', 12),
(391, 'Sanand', 12),
(392, 'Savarkundla', 12),
(393, 'Sidhpur', 12),
(394, 'Sihor', 12),
(395, 'Songadh', 12),
(396, 'Surat', 12),
(397, 'Talaja', 12),
(398, 'Thangadh', 12),
(399, 'Tharad', 12),
(400, 'Umbergaon', 12),
(401, 'Umreth', 12),
(402, 'Una', 12),
(403, 'Unjha', 12),
(404, 'Upleta', 12),
(405, 'Vadnagar', 12),
(406, 'Vadodara', 12),
(407, 'Valsad', 12),
(408, 'Vapi', 12),
(409, 'Vapi', 12),
(410, 'Veraval', 12),
(411, 'Vijapur', 12),
(412, 'Viramgam', 12),
(413, 'Visnagar', 12),
(414, 'Vyara', 12),
(415, 'Wadhwan', 12),
(416, 'Wankaner', 12),
(417, 'Adalaj', 12),
(418, 'Adityana', 12),
(419, 'Alang', 12),
(420, 'Ambaji', 12),
(421, 'Ambaliyasan', 12),
(422, 'Andada', 12),
(423, 'Anjar', 12),
(424, 'Anklav', 12),
(425, 'Antaliya', 12),
(426, 'Arambhada', 12),
(427, 'Atul', 12),
(428, 'Ballabhgarh', 13),
(429, 'Ambala', 13),
(430, 'Ambala', 13),
(431, 'Asankhurd', 13),
(432, 'Assandh', 13),
(433, 'Ateli', 13),
(434, 'Babiyal', 13),
(435, 'Bahadurgarh', 13),
(436, 'Barwala', 13),
(437, 'Bhiwani', 13),
(438, 'Charkhi Dadri', 13),
(439, 'Cheeka', 13),
(440, 'Ellenabad 2', 13),
(441, 'Faridabad', 13),
(442, 'Fatehabad', 13),
(443, 'Ganaur', 13),
(444, 'Gharaunda', 13),
(445, 'Gohana', 13),
(446, 'Gurgaon', 13),
(447, 'Haibat(Yamuna Nagar)', 13),
(448, 'Hansi', 13),
(449, 'Hisar', 13),
(450, 'Hodal', 13),
(451, 'Jhajjar', 13),
(452, 'Jind', 13),
(453, 'Kaithal', 13),
(454, 'Kalan Wali', 13),
(455, 'Kalka', 13),
(456, 'Karnal', 13),
(457, 'Ladwa', 13),
(458, 'Mahendragarh', 13),
(459, 'Mandi Dabwali', 13),
(460, 'Narnaul', 13),
(461, 'Narwana', 13),
(462, 'Palwal', 13),
(463, 'Panchkula', 13),
(464, 'Panipat', 13),
(465, 'Pehowa', 13),
(466, 'Pinjore', 13),
(467, 'Rania', 13),
(468, 'Ratia', 13),
(469, 'Rewari', 13),
(470, 'Rohtak', 13),
(471, 'Safidon', 13),
(472, 'Samalkha', 13),
(473, 'Shahbad', 13),
(474, 'Sirsa', 13),
(475, 'Sohna', 13),
(476, 'Sonipat', 13),
(477, 'Taraori', 13),
(478, 'Thanesar', 13),
(479, 'Tohana', 13),
(480, 'Yamunanagar', 13),
(481, 'Arki', 14),
(482, 'Baddi', 14),
(483, 'Bilaspur', 14),
(484, 'Chamba', 14),
(485, 'Dalhousie', 14),
(486, 'Dharamsala', 14),
(487, 'Hamirpur', 14),
(488, 'Mandi', 14),
(489, 'Nahan', 14),
(490, 'Shimla', 14),
(491, 'Solan', 14),
(492, 'Sundarnagar', 14),
(493, 'Jammu', 15),
(494, 'Achabbal', 15),
(495, 'Akhnoor', 15),
(496, 'Anantnag', 15),
(497, 'Arnia', 15),
(498, 'Awantipora', 15),
(499, 'Bandipore', 15),
(500, 'Baramula', 15),
(501, 'Kathua', 15),
(502, 'Leh', 15),
(503, 'Punch', 15),
(504, 'Rajauri', 15),
(505, 'Sopore', 15),
(506, 'Srinagar', 15),
(507, 'Udhampur', 15),
(508, 'Amlabad', 16),
(509, 'Ara', 16),
(510, 'Barughutu', 16),
(511, 'Bokaro Steel City', 16),
(512, 'Chaibasa', 16),
(513, 'Chakradharpur', 16),
(514, 'Chandrapura', 16),
(515, 'Chatra', 16),
(516, 'Chirkunda', 16),
(517, 'Churi', 16),
(518, 'Daltonganj', 16),
(519, 'Deoghar', 16),
(520, 'Dhanbad', 16),
(521, 'Dumka', 16),
(522, 'Garhwa', 16),
(523, 'Ghatshila', 16),
(524, 'Giridih', 16),
(525, 'Godda', 16),
(526, 'Gomoh', 16),
(527, 'Gumia', 16),
(528, 'Gumla', 16),
(529, 'Hazaribag', 16),
(530, 'Hussainabad', 16),
(531, 'Jamshedpur', 16),
(532, 'Jamtara', 16),
(533, 'Jhumri Tilaiya', 16),
(534, 'Khunti', 16),
(535, 'Lohardaga', 16),
(536, 'Madhupur', 16),
(537, 'Mihijam', 16),
(538, 'Musabani', 16),
(539, 'Pakaur', 16),
(540, 'Patratu', 16),
(541, 'Phusro', 16),
(542, 'Ramngarh', 16),
(543, 'Ranchi', 16),
(544, 'Sahibganj', 16),
(545, 'Saunda', 16),
(546, 'Simdega', 16),
(547, 'Tenu Dam-cum- Kathhara', 16),
(548, 'Arasikere', 17),
(549, 'Bangalore', 17),
(550, 'Belgaum', 17),
(551, 'Bellary', 17),
(552, 'Chamrajnagar', 17),
(553, 'Chikkaballapur', 17),
(554, 'Chintamani', 17),
(555, 'Chitradurga', 17),
(556, 'Gulbarga', 17),
(557, 'Gundlupet', 17),
(558, 'Hassan', 17),
(559, 'Hospet', 17),
(560, 'Hubli', 17),
(561, 'Karkala', 17),
(562, 'Karwar', 17),
(563, 'Kolar', 17),
(564, 'Kota', 17),
(565, 'Lakshmeshwar', 17),
(566, 'Lingsugur', 17),
(567, 'Maddur', 17),
(568, 'Madhugiri', 17),
(569, 'Madikeri', 17),
(570, 'Magadi', 17),
(571, 'Mahalingpur', 17),
(572, 'Malavalli', 17),
(573, 'Malur', 17),
(574, 'Mandya', 17),
(575, 'Mangalore', 17),
(576, 'Manvi', 17),
(577, 'Mudalgi', 17),
(578, 'Mudbidri', 17),
(579, 'Muddebihal', 17),
(580, 'Mudhol', 17),
(581, 'Mulbagal', 17),
(582, 'Mundargi', 17),
(583, 'Mysore', 17),
(584, 'Nanjangud', 17),
(585, 'Pavagada', 17),
(586, 'Puttur', 17),
(587, 'Rabkavi Banhatti', 17),
(588, 'Raichur', 17),
(589, 'Ramanagaram', 17),
(590, 'Ramdurg', 17),
(591, 'Ranibennur', 17),
(592, 'Robertson Pet', 17),
(593, 'Ron', 17),
(594, 'Sadalgi', 17),
(595, 'Sagar', 17),
(596, 'Sakleshpur', 17),
(597, 'Sandur', 17),
(598, 'Sankeshwar', 17),
(599, 'Saundatti-Yellamma', 17),
(600, 'Savanur', 17),
(601, 'Sedam', 17),
(602, 'Shahabad', 17),
(603, 'Shahpur', 17),
(604, 'Shiggaon', 17),
(605, 'Shikapur', 17),
(606, 'Shimoga', 17),
(607, 'Shorapur', 17),
(608, 'Shrirangapattana', 17),
(609, 'Sidlaghatta', 17),
(610, 'Sindgi', 17),
(611, 'Sindhnur', 17),
(612, 'Sira', 17),
(613, 'Sirsi', 17),
(614, 'Siruguppa', 17),
(615, 'Srinivaspur', 17),
(616, 'Talikota', 17),
(617, 'Tarikere', 17),
(618, 'Tekkalakota', 17),
(619, 'Terdal', 17),
(620, 'Tiptur', 17),
(621, 'Tumkur', 17),
(622, 'Udupi', 17),
(623, 'Vijayapura', 17),
(624, 'Wadi', 17),
(625, 'Yadgir', 17),
(626, 'Adoor', 18),
(627, 'Akathiyoor', 18),
(628, 'Alappuzha', 18),
(629, 'Ancharakandy', 18),
(630, 'Aroor', 18),
(631, 'Ashtamichira', 18),
(632, 'Attingal', 18),
(633, 'Avinissery', 18),
(634, 'Chalakudy', 18),
(635, 'Changanassery', 18),
(636, 'Chendamangalam', 18),
(637, 'Chengannur', 18),
(638, 'Cherthala', 18),
(639, 'Cheruthazham', 18),
(640, 'Chittur-Thathamangalam', 18),
(641, 'Chockli', 18),
(642, 'Erattupetta', 18),
(643, 'Guruvayoor', 18),
(644, 'Irinjalakuda', 18),
(645, 'Kadirur', 18),
(646, 'Kalliasseri', 18),
(647, 'Kalpetta', 18),
(648, 'Kanhangad', 18),
(649, 'Kanjikkuzhi', 18),
(650, 'Kannur', 18),
(651, 'Kasaragod', 18),
(652, 'Kayamkulam', 18),
(653, 'Kochi', 18),
(654, 'Kodungallur', 18),
(655, 'Kollam', 18),
(656, 'Koothuparamba', 18),
(657, 'Kothamangalam', 18),
(658, 'Kottayam', 18),
(659, 'Kozhikode', 18),
(660, 'Kunnamkulam', 18),
(661, 'Malappuram', 18),
(662, 'Mattannur', 18),
(663, 'Mavelikkara', 18),
(664, 'Mavoor', 18),
(665, 'Muvattupuzha', 18),
(666, 'Nedumangad', 18),
(667, 'Neyyattinkara', 18),
(668, 'Ottappalam', 18),
(669, 'Palai', 18),
(670, 'Palakkad', 18),
(671, 'Panniyannur', 18),
(672, 'Pappinisseri', 18),
(673, 'Paravoor', 18),
(674, 'Pathanamthitta', 18),
(675, 'Payyannur', 18),
(676, 'Peringathur', 18),
(677, 'Perinthalmanna', 18),
(678, 'Perumbavoor', 18),
(679, 'Ponnani', 18),
(680, 'Punalur', 18),
(681, 'Quilandy', 18),
(682, 'Shoranur', 18),
(683, 'Taliparamba', 18),
(684, 'Thiruvalla', 18),
(685, 'Thiruvananthapuram', 18),
(686, 'Thodupuzha', 18),
(687, 'Thrissur', 18),
(688, 'Tirur', 18),
(689, 'Vadakara', 18),
(690, 'Vaikom', 18),
(691, 'Varkala', 18),
(692, 'Kavaratti', 19),
(693, 'Ashok Nagar', 20),
(694, 'Balaghat', 20),
(695, 'Betul', 20),
(696, 'Bhopal', 20),
(697, 'Burhanpur', 20),
(698, 'Chhatarpur', 20),
(699, 'Dabra', 20),
(700, 'Datia', 20),
(701, 'Dewas', 20),
(702, 'Dhar', 20),
(703, 'Fatehabad', 20),
(704, 'Gwalior', 20),
(705, 'Indore', 20),
(706, 'Itarsi', 20),
(707, 'Jabalpur', 20),
(708, 'Katni', 20),
(709, 'Kotma', 20),
(710, 'Lahar', 20),
(711, 'Lundi', 20),
(712, 'Maharajpur', 20),
(713, 'Mahidpur', 20),
(714, 'Maihar', 20),
(715, 'Malajkhand', 20),
(716, 'Manasa', 20),
(717, 'Manawar', 20),
(718, 'Mandideep', 20),
(719, 'Mandla', 20),
(720, 'Mandsaur', 20),
(721, 'Mauganj', 20),
(722, 'Mhow Cantonment', 20),
(723, 'Mhowgaon', 20),
(724, 'Morena', 20),
(725, 'Multai', 20),
(726, 'Murwara', 20),
(727, 'Nagda', 20),
(728, 'Nainpur', 20),
(729, 'Narsinghgarh', 20),
(730, 'Narsinghgarh', 20),
(731, 'Neemuch', 20),
(732, 'Nepanagar', 20),
(733, 'Niwari', 20),
(734, 'Nowgong', 20),
(735, 'Nowrozabad', 20),
(736, 'Pachore', 20),
(737, 'Pali', 20),
(738, 'Panagar', 20),
(739, 'Pandhurna', 20),
(740, 'Panna', 20),
(741, 'Pasan', 20),
(742, 'Pipariya', 20),
(743, 'Pithampur', 20),
(744, 'Porsa', 20),
(745, 'Prithvipur', 20),
(746, 'Raghogarh-Vijaypur', 20),
(747, 'Rahatgarh', 20),
(748, 'Raisen', 20),
(749, 'Rajgarh', 20),
(750, 'Ratlam', 20),
(751, 'Rau', 20),
(752, 'Rehli', 20),
(753, 'Rewa', 20),
(754, 'Sabalgarh', 20),
(755, 'Sagar', 20),
(756, 'Sanawad', 20),
(757, 'Sarangpur', 20),
(758, 'Sarni', 20),
(759, 'Satna', 20),
(760, 'Sausar', 20),
(761, 'Sehore', 20),
(762, 'Sendhwa', 20),
(763, 'Seoni', 20),
(764, 'Seoni-Malwa', 20),
(765, 'Shahdol', 20),
(766, 'Shajapur', 20),
(767, 'Shamgarh', 20),
(768, 'Sheopur', 20),
(769, 'Shivpuri', 20),
(770, 'Shujalpur', 20),
(771, 'Sidhi', 20),
(772, 'Sihora', 20),
(773, 'Singrauli', 20),
(774, 'Sironj', 20),
(775, 'Sohagpur', 20),
(776, 'Tarana', 20),
(777, 'Tikamgarh', 20),
(778, 'Ujhani', 20),
(779, 'Ujjain', 20),
(780, 'Umaria', 20),
(781, 'Vidisha', 20),
(782, 'Wara Seoni', 20),
(783, 'Ahmednagar', 21),
(784, 'Akola', 21),
(785, 'Amravati', 21),
(786, 'Aurangabad', 21),
(787, 'Baramati', 21),
(788, 'Chalisgaon', 21),
(789, 'Chinchani', 21),
(790, 'Devgarh', 21),
(791, 'Dhule', 21),
(792, 'Dombivli', 21),
(793, 'Durgapur', 21),
(794, 'Ichalkaranji', 21),
(795, 'Jalna', 21),
(796, 'Kalyan', 21),
(797, 'Latur', 21),
(798, 'Loha', 21),
(799, 'Lonar', 21),
(800, 'Lonavla', 21),
(801, 'Mahad', 21),
(802, 'Mahuli', 21),
(803, 'Malegaon', 21),
(804, 'Malkapur', 21),
(805, 'Manchar', 21),
(806, 'Mangalvedhe', 21),
(807, 'Mangrulpir', 21),
(808, 'Manjlegaon', 21),
(809, 'Manmad', 21),
(810, 'Manwath', 21),
(811, 'Mehkar', 21),
(812, 'Mhaswad', 21),
(813, 'Miraj', 21),
(814, 'Morshi', 21),
(815, 'Mukhed', 21),
(816, 'Mul', 21),
(817, 'Mumbai', 21),
(818, 'Murtijapur', 21),
(819, 'Nagpur', 21),
(820, 'Nalasopara', 21),
(821, 'Nanded-Waghala', 21),
(822, 'Nandgaon', 21),
(823, 'Nandura', 21),
(824, 'Nandurbar', 21),
(825, 'Narkhed', 21),
(826, 'Nashik', 21),
(827, 'Navi Mumbai', 21),
(828, 'Nawapur', 21),
(829, 'Nilanga', 21),
(830, 'Osmanabad', 21),
(831, 'Ozar', 21),
(832, 'Pachora', 21),
(833, 'Paithan', 21),
(834, 'Palghar', 21),
(835, 'Pandharkaoda', 21),
(836, 'Pandharpur', 21),
(837, 'Panvel', 21),
(838, 'Parbhani', 21),
(839, 'Parli', 21),
(840, 'Parola', 21),
(841, 'Partur', 21),
(842, 'Pathardi', 21),
(843, 'Pathri', 21),
(844, 'Patur', 21),
(845, 'Pauni', 21),
(846, 'Pen', 21),
(847, 'Phaltan', 21),
(848, 'Pulgaon', 21),
(849, 'Pune', 21),
(850, 'Purna', 21),
(851, 'Pusad', 21),
(852, 'Rahuri', 21),
(853, 'Rajura', 21),
(854, 'Ramtek', 21),
(855, 'Ratnagiri', 21),
(856, 'Raver', 21),
(857, 'Risod', 21),
(858, 'Sailu', 21),
(859, 'Sangamner', 21),
(860, 'Sangli', 21),
(861, 'Sangole', 21),
(862, 'Sasvad', 21),
(863, 'Satana', 21),
(864, 'Satara', 21),
(865, 'Savner', 21),
(866, 'Sawantwadi', 21),
(867, 'Shahade', 21),
(868, 'Shegaon', 21),
(869, 'Shendurjana', 21),
(870, 'Shirdi', 21),
(871, 'Shirpur-Warwade', 21),
(872, 'Shirur', 21),
(873, 'Shrigonda', 21),
(874, 'Shrirampur', 21),
(875, 'Sillod', 21),
(876, 'Sinnar', 21),
(877, 'Solapur', 21),
(878, 'Soyagaon', 21),
(879, 'Talegaon Dabhade', 21),
(880, 'Talode', 21),
(881, 'Tasgaon', 21),
(882, 'Tirora', 21),
(883, 'Tuljapur', 21),
(884, 'Tumsar', 21),
(885, 'Uran', 21),
(886, 'Uran Islampur', 21),
(887, 'Wadgaon Road', 21),
(888, 'Wai', 21),
(889, 'Wani', 21),
(890, 'Wardha', 21),
(891, 'Warora', 21),
(892, 'Warud', 21),
(893, 'Washim', 21),
(894, 'Yevla', 21),
(895, 'Uchgaon', 21),
(896, 'Udgir', 21),
(897, 'Umarga', 21),
(898, 'Umarkhed', 21),
(899, 'Umred', 21),
(900, 'Vadgaon Kasba', 21),
(901, 'Vaijapur', 21),
(902, 'Vasai', 21),
(903, 'Virar', 21),
(904, 'Vita', 21),
(905, 'Yavatmal', 21),
(906, 'Yawal', 21),
(907, 'Imphal', 22),
(908, 'Kakching', 22),
(909, 'Lilong', 22),
(910, 'Mayang Imphal', 22),
(911, 'Thoubal', 22),
(912, 'Jowai', 23),
(913, 'Nongstoin', 23),
(914, 'Shillong', 23),
(915, 'Tura', 23),
(916, 'Aizawl', 24),
(917, 'Champhai', 24),
(918, 'Lunglei', 24),
(919, 'Saiha', 24),
(920, 'Dimapur', 25),
(921, 'Kohima', 25),
(922, 'Mokokchung', 25),
(923, 'Tuensang', 25),
(924, 'Wokha', 25),
(925, 'Zunheboto', 25),
(950, 'Anandapur', 26),
(951, 'Anugul', 26),
(952, 'Asika', 26),
(953, 'Balangir', 26),
(954, 'Balasore', 26),
(955, 'Baleshwar', 26),
(956, 'Bamra', 26),
(957, 'Barbil', 26),
(958, 'Bargarh', 26),
(959, 'Bargarh', 26),
(960, 'Baripada', 26),
(961, 'Basudebpur', 26),
(962, 'Belpahar', 26),
(963, 'Bhadrak', 26),
(964, 'Bhawanipatna', 26),
(965, 'Bhuban', 26),
(966, 'Bhubaneswar', 26),
(967, 'Biramitrapur', 26),
(968, 'Brahmapur', 26),
(969, 'Brajrajnagar', 26),
(970, 'Byasanagar', 26),
(971, 'Cuttack', 26),
(972, 'Debagarh', 26),
(973, 'Dhenkanal', 26),
(974, 'Gunupur', 26),
(975, 'Hinjilicut', 26),
(976, 'Jagatsinghapur', 26),
(977, 'Jajapur', 26),
(978, 'Jaleswar', 26),
(979, 'Jatani', 26),
(980, 'Jeypur', 26),
(981, 'Jharsuguda', 26),
(982, 'Joda', 26),
(983, 'Kantabanji', 26),
(984, 'Karanjia', 26),
(985, 'Kendrapara', 26),
(986, 'Kendujhar', 26),
(987, 'Khordha', 26),
(988, 'Koraput', 26),
(989, 'Malkangiri', 26),
(990, 'Nabarangapur', 26),
(991, 'Paradip', 26),
(992, 'Parlakhemundi', 26),
(993, 'Pattamundai', 26),
(994, 'Phulabani', 26),
(995, 'Puri', 26),
(996, 'Rairangpur', 26),
(997, 'Rajagangapur', 26),
(998, 'Raurkela', 26),
(999, 'Rayagada', 26),
(1000, 'Sambalpur', 26),
(1001, 'Soro', 26),
(1002, 'Sunabeda', 26),
(1003, 'Sundargarh', 26),
(1004, 'Talcher', 26),
(1005, 'Titlagarh', 26),
(1006, 'Umarkote', 26),
(1007, 'Karaikal', 27),
(1008, 'Mahe', 27),
(1009, 'Puducherry', 27),
(1010, 'Yanam', 27),
(1011, 'Ahmedgarh', 28),
(1012, 'Amritsar', 28),
(1013, 'Barnala', 28),
(1014, 'Batala', 28),
(1015, 'Bathinda', 28),
(1016, 'Bhagha Purana', 28),
(1017, 'Budhlada', 28),
(1018, 'Chandigarh', 28),
(1018, 'Chandigarh', 0),
(1019, 'Dasua', 28),
(1020, 'Dhuri', 28),
(1021, 'Dinanagar', 28),
(1022, 'Faridkot', 28),
(1023, 'Fazilka', 28),
(1024, 'Firozpur', 28),
(1025, 'Firozpur Cantt.', 28),
(1026, 'Giddarbaha', 28),
(1027, 'Gobindgarh', 28),
(1028, 'Gurdaspur', 28),
(1029, 'Hoshiarpur', 28),
(1030, 'Jagraon', 28),
(1031, 'Jaitu', 28),
(1032, 'Jalalabad', 28),
(1033, 'Jalandhar', 28),
(1034, 'Jalandhar Cantt.', 28),
(1035, 'Jandiala', 28),
(1036, 'Kapurthala', 28),
(1037, 'Karoran', 28),
(1038, 'Kartarpur', 28),
(1039, 'Khanna', 28),
(1040, 'Kharar', 28),
(1041, 'Kot Kapura', 28),
(1042, 'Kurali', 28),
(1043, 'Longowal', 28),
(1044, 'Ludhiana', 28),
(1045, 'Malerkotla', 28),
(1046, 'Malout', 28),
(1047, 'Mansa', 28),
(1048, 'Maur', 28),
(1049, 'Moga', 28),
(1050, 'Mohali', 28),
(1051, 'Morinda', 28),
(1052, 'Mukerian', 28),
(1053, 'Muktsar', 28),
(1054, 'Nabha', 28),
(1055, 'Nakodar', 28),
(1056, 'Nangal', 28),
(1057, 'Nawanshahr', 28),
(1058, 'Pathankot', 28),
(1059, 'Patiala', 28),
(1060, 'Patran', 28),
(1061, 'Patti', 28),
(1062, 'Phagwara', 28),
(1063, 'Phillaur', 28),
(1064, 'Qadian', 28),
(1065, 'Raikot', 28),
(1066, 'Rajpura', 28),
(1067, 'Rampura Phul', 28),
(1068, 'Rupnagar', 28),
(1069, 'Samana', 28),
(1070, 'Sangrur', 28),
(1071, 'Sirhind Fatehgarh Sahib', 28),
(1072, 'Sujanpur', 28),
(1073, 'Sunam', 28),
(1074, 'Talwara', 28),
(1075, 'Tarn Taran', 28),
(1076, 'Urmar Tanda', 28),
(1077, 'Zira', 28),
(1078, 'Zirakpur', 28),
(1079, 'Bali', 29),
(1080, 'Banswara', 29),
(1081, 'Ajmer', 29),
(1082, 'Alwar', 29),
(1083, 'Bandikui', 29),
(1084, 'Baran', 29),
(1085, 'Barmer', 29),
(1086, 'Bikaner', 29),
(1087, 'Fatehpur', 29),
(1088, 'Jaipur', 29),
(1089, 'Jaisalmer', 29),
(1090, 'Jodhpur', 29),
(1091, 'Kota', 29),
(1092, 'Lachhmangarh', 29),
(1093, 'Ladnu', 29),
(1094, 'Lakheri', 29),
(1095, 'Lalsot', 29),
(1096, 'Losal', 29),
(1097, 'Makrana', 29),
(1098, 'Malpura', 29),
(1099, 'Mandalgarh', 29),
(1100, 'Mandawa', 29),
(1101, 'Mangrol', 29),
(1102, 'Merta City', 29),
(1103, 'Mount Abu', 29),
(1104, 'Nadbai', 29),
(1105, 'Nagar', 29),
(1106, 'Nagaur', 29),
(1107, 'Nargund', 29),
(1108, 'Nasirabad', 29),
(1109, 'Nathdwara', 29),
(1110, 'Navalgund', 29),
(1111, 'Nawalgarh', 29),
(1112, 'Neem-Ka-Thana', 29),
(1113, 'Nelamangala', 29),
(1114, 'Nimbahera', 29),
(1115, 'Nipani', 29),
(1116, 'Niwai', 29),
(1117, 'Nohar', 29),
(1118, 'Nokha', 29),
(1119, 'Pali', 29),
(1120, 'Phalodi', 29),
(1121, 'Phulera', 29),
(1122, 'Pilani', 29),
(1123, 'Pilibanga', 29),
(1124, 'Pindwara', 29),
(1125, 'Pipar City', 29),
(1126, 'Prantij', 29),
(1127, 'Pratapgarh', 29),
(1128, 'Raisinghnagar', 29),
(1129, 'Rajakhera', 29),
(1130, 'Rajaldesar', 29),
(1131, 'Rajgarh (Alwar)', 29),
(1132, 'Rajgarh (Churu', 29),
(1133, 'Rajsamand', 29),
(1134, 'Ramganj Mandi', 29),
(1135, 'Ramngarh', 29),
(1136, 'Ratangarh', 29),
(1137, 'Rawatbhata', 29),
(1138, 'Rawatsar', 29),
(1139, 'Reengus', 29),
(1140, 'Sadri', 29),
(1141, 'Sadulshahar', 29),
(1142, 'Sagwara', 29),
(1143, 'Sambhar', 29),
(1144, 'Sanchore', 29),
(1145, 'Sangaria', 29),
(1146, 'Sardarshahar', 29),
(1147, 'Sawai Madhopur', 29),
(1148, 'Shahpura', 29),
(1149, 'Shahpura', 29),
(1150, 'Sheoganj', 29),
(1151, 'Sikar', 29),
(1152, 'Sirohi', 29),
(1153, 'Sojat', 29),
(1154, 'Sri Madhopur', 29),
(1155, 'Sujangarh', 29),
(1156, 'Sumerpur', 29),
(1157, 'Suratgarh', 29),
(1158, 'Taranagar', 29),
(1159, 'Todabhim', 29),
(1160, 'Todaraisingh', 29),
(1161, 'Tonk', 29),
(1162, 'Udaipur', 29),
(1163, 'Udaipurwati', 29),
(1164, 'Vijainagar', 29),
(1165, 'Gangtok', 30),
(1166, 'Calcutta', 36),
(1167, 'Arakkonam', 31),
(1168, 'Arcot', 31),
(1169, 'Aruppukkottai', 31),
(1170, 'Bhavani', 31),
(1171, 'Chengalpattu', 31),
(1172, 'Chennai', 31),
(1173, 'Chinna salem', 31),
(1174, 'Coimbatore', 31),
(1175, 'Coonoor', 31),
(1176, 'Cuddalore', 31),
(1177, 'Dharmapuri', 31),
(1178, 'Dindigul', 31),
(1179, 'Erode', 31),
(1180, 'Gudalur', 31),
(1181, 'Gudalur', 31),
(1182, 'Gudalur', 31),
(1183, 'Kanchipuram', 31),
(1184, 'Karaikudi', 31),
(1185, 'Karungal', 31),
(1186, 'Karur', 31),
(1187, 'Kollankodu', 31),
(1188, 'Lalgudi', 31),
(1189, 'Madurai', 31),
(1190, 'Nagapattinam', 31),
(1191, 'Nagercoil', 31),
(1192, 'Namagiripettai', 31),
(1193, 'Namakkal', 31),
(1194, 'Nandivaram-Guduvancheri', 31),
(1195, 'Nanjikottai', 31),
(1196, 'Natham', 31),
(1197, 'Nellikuppam', 31),
(1198, 'Neyveli', 31),
(1199, 'O\' Valley', 31),
(1200, 'Oddanchatram', 31),
(1201, 'P.N.Patti', 31),
(1202, 'Pacode', 31),
(1203, 'Padmanabhapuram', 31),
(1204, 'Palani', 31),
(1205, 'Palladam', 31),
(1206, 'Pallapatti', 31),
(1207, 'Pallikonda', 31),
(1208, 'Panagudi', 31),
(1209, 'Panruti', 31),
(1210, 'Paramakudi', 31),
(1211, 'Parangipettai', 31),
(1212, 'Pattukkottai', 31),
(1213, 'Perambalur', 31),
(1214, 'Peravurani', 31),
(1215, 'Periyakulam', 31),
(1216, 'Periyasemur', 31),
(1217, 'Pernampattu', 31),
(1218, 'Pollachi', 31),
(1219, 'Polur', 31),
(1220, 'Ponneri', 31),
(1221, 'Pudukkottai', 31),
(1222, 'Pudupattinam', 31),
(1223, 'Puliyankudi', 31),
(1224, 'Punjaipugalur', 31),
(1225, 'Rajapalayam', 31),
(1226, 'Ramanathapuram', 31),
(1227, 'Rameshwaram', 31),
(1228, 'Rasipuram', 31),
(1229, 'Salem', 31),
(1230, 'Sankarankoil', 31),
(1231, 'Sankari', 31),
(1232, 'Sathyamangalam', 31),
(1233, 'Sattur', 31),
(1234, 'Shenkottai', 31),
(1235, 'Sholavandan', 31),
(1236, 'Sholingur', 31),
(1237, 'Sirkali', 31),
(1238, 'Sivaganga', 31),
(1239, 'Sivagiri', 31),
(1240, 'Sivakasi', 31),
(1241, 'Srivilliputhur', 31),
(1242, 'Surandai', 31),
(1243, 'Suriyampalayam', 31),
(1244, 'Tenkasi', 31),
(1245, 'Thammampatti', 31),
(1246, 'Thanjavur', 31),
(1247, 'Tharamangalam', 31),
(1248, 'Tharangambadi', 31),
(1249, 'Theni Allinagaram', 31),
(1250, 'Thirumangalam', 31),
(1251, 'Thirunindravur', 31),
(1252, 'Thiruparappu', 31),
(1253, 'Thirupuvanam', 31),
(1254, 'Thiruthuraipoondi', 31),
(1255, 'Thiruvallur', 31),
(1256, 'Thiruvarur', 31),
(1257, 'Thoothukudi', 31),
(1258, 'Thuraiyur', 31),
(1259, 'Tindivanam', 31),
(1260, 'Tiruchendur', 31),
(1261, 'Tiruchengode', 31),
(1262, 'Tiruchirappalli', 31),
(1263, 'Tirukalukundram', 31),
(1264, 'Tirukkoyilur', 31),
(1265, 'Tirunelveli', 31),
(1266, 'Tirupathur', 31),
(1267, 'Tirupathur', 31),
(1268, 'Tiruppur', 31),
(1269, 'Tiruttani', 31),
(1270, 'Tiruvannamalai', 31),
(1271, 'Tiruvethipuram', 31),
(1272, 'Tittakudi', 31),
(1273, 'Udhagamandalam', 31),
(1274, 'Udumalaipettai', 31),
(1275, 'Unnamalaikadai', 31),
(1276, 'Usilampatti', 31),
(1277, 'Uthamapalayam', 31),
(1278, 'Uthiramerur', 31),
(1279, 'Vadakkuvalliyur', 31),
(1280, 'Vadalur', 31),
(1281, 'Vadipatti', 31),
(1282, 'Valparai', 31),
(1283, 'Vandavasi', 31),
(1284, 'Vaniyambadi', 31),
(1285, 'Vedaranyam', 31),
(1286, 'Vellakoil', 31),
(1287, 'Vellore', 31),
(1288, 'Vikramasingapuram', 31),
(1289, 'Viluppuram', 31),
(1290, 'Virudhachalam', 31),
(1291, 'Virudhunagar', 31),
(1292, 'Viswanatham', 31),
(1293, 'Agartala', 33),
(1294, 'Badharghat', 33),
(1295, 'Dharmanagar', 33),
(1296, 'Indranagar', 33),
(1297, 'Jogendranagar', 33),
(1298, 'Kailasahar', 33),
(1299, 'Khowai', 33),
(1300, 'Pratapgarh', 33),
(1301, 'Udaipur', 33),
(1302, 'Achhnera', 34),
(1303, 'Adari', 34),
(1304, 'Agra', 34),
(1305, 'Aligarh', 34),
(1306, 'Allahabad', 34),
(1307, 'Amroha', 34),
(1308, 'Azamgarh', 34),
(1309, 'Bahraich', 34),
(1310, 'Ballia', 34),
(1311, 'Balrampur', 34),
(1312, 'Banda', 34),
(1313, 'Bareilly', 34),
(1314, 'Chandausi', 34),
(1315, 'Dadri', 34),
(1316, 'Deoria', 34),
(1317, 'Etawah', 34),
(1318, 'Fatehabad', 34),
(1319, 'Fatehpur', 34),
(1320, 'Fatehpur', 34),
(1321, 'Greater Noida', 34),
(1322, 'Hamirpur', 34),
(1323, 'Hardoi', 34),
(1324, 'Jajmau', 34),
(1325, 'Jaunpur', 34),
(1326, 'Jhansi', 34),
(1327, 'Kalpi', 34),
(1328, 'Kanpur', 34),
(1329, 'Kota', 34),
(1330, 'Laharpur', 34),
(1331, 'Lakhimpur', 34),
(1332, 'Lal Gopalganj Nindaura', 34),
(1333, 'Lalganj', 34),
(1334, 'Lalitpur', 34),
(1335, 'Lar', 34),
(1336, 'Loni', 34),
(1337, 'Lucknow', 34),
(1338, 'Mathura', 34),
(1339, 'Meerut', 34),
(1340, 'Modinagar', 34),
(1341, 'Muradnagar', 34),
(1342, 'Nagina', 34),
(1343, 'Najibabad', 34),
(1344, 'Nakur', 34),
(1345, 'Nanpara', 34),
(1346, 'Naraura', 34),
(1347, 'Naugawan Sadat', 34),
(1348, 'Nautanwa', 34),
(1349, 'Nawabganj', 34),
(1350, 'Nehtaur', 34),
(1351, 'NOIDA', 34),
(1352, 'Noorpur', 34),
(1353, 'Obra', 34),
(1354, 'Orai', 34),
(1355, 'Padrauna', 34),
(1356, 'Palia Kalan', 34),
(1357, 'Parasi', 34),
(1358, 'Phulpur', 34),
(1359, 'Pihani', 34),
(1360, 'Pilibhit', 34),
(1361, 'Pilkhuwa', 34),
(1362, 'Powayan', 34),
(1363, 'Pukhrayan', 34),
(1364, 'Puranpur', 34),
(1365, 'Purquazi', 34),
(1366, 'Purwa', 34),
(1367, 'Rae Bareli', 34),
(1368, 'Rampur', 34),
(1369, 'Rampur Maniharan', 34),
(1370, 'Rasra', 34),
(1371, 'Rath', 34),
(1372, 'Renukoot', 34),
(1373, 'Reoti', 34),
(1374, 'Robertsganj', 34),
(1375, 'Rudauli', 34),
(1376, 'Rudrapur', 34),
(1377, 'Sadabad', 34),
(1378, 'Safipur', 34),
(1379, 'Saharanpur', 34),
(1380, 'Sahaspur', 34),
(1381, 'Sahaswan', 34),
(1382, 'Sahawar', 34),
(1383, 'Sahjanwa', 34),
(1385, 'Sambhal', 34),
(1386, 'Samdhan', 34),
(1387, 'Samthar', 34),
(1388, 'Sandi', 34),
(1389, 'Sandila', 34),
(1390, 'Sardhana', 34),
(1391, 'Seohara', 34),
(1394, 'Shahganj', 34),
(1395, 'Shahjahanpur', 34),
(1396, 'Shamli', 34),
(1399, 'Sherkot', 34),
(1401, 'Shikohabad', 34),
(1402, 'Shishgarh', 34),
(1403, 'Siana', 34),
(1404, 'Sikanderpur', 34),
(1405, 'Sikandra Rao', 34),
(1406, 'Sikandrabad', 34),
(1407, 'Sirsaganj', 34),
(1408, 'Sirsi', 34),
(1409, 'Sitapur', 34),
(1410, 'Soron', 34),
(1411, 'Suar', 34),
(1412, 'Sultanpur', 34),
(1413, 'Sumerpur', 34),
(1414, 'Tanda', 34),
(1415, 'Tanda', 34),
(1416, 'Tetri Bazar', 34),
(1417, 'Thakurdwara', 34),
(1418, 'Thana Bhawan', 34),
(1419, 'Tilhar', 34),
(1420, 'Tirwaganj', 34),
(1421, 'Tulsipur', 34),
(1422, 'Tundla', 34),
(1423, 'Unnao', 34),
(1424, 'Utraula', 34),
(1425, 'Varanasi', 34),
(1426, 'Vrindavan', 34),
(1427, 'Warhapur', 34),
(1428, 'Zaidpur', 34),
(1429, 'Zamania', 34),
(1430, 'Almora', 35),
(1431, 'Bazpur', 35),
(1432, 'Chamba', 35),
(1433, 'Dehradun', 35),
(1434, 'Haldwani', 35),
(1435, 'Haridwar', 35),
(1436, 'Jaspur', 35),
(1437, 'Kashipur', 35),
(1438, 'kichha', 35),
(1439, 'Kotdwara', 35),
(1440, 'Manglaur', 35),
(1441, 'Mussoorie', 35),
(1442, 'Nagla', 35),
(1443, 'Nainital', 35),
(1444, 'Pauri', 35),
(1445, 'Pithoragarh', 35),
(1446, 'Ramnagar', 35),
(1447, 'Rishikesh', 35),
(1448, 'Roorkee', 35),
(1449, 'Rudrapur', 35),
(1450, 'Sitarganj', 35),
(1451, 'Tehri', 35),
(1452, 'Muzaffarnagar', 34),
(1454, 'Alipurduar', 36),
(1455, 'Arambagh', 36),
(1456, 'Asansol', 36),
(1457, 'Baharampur', 36),
(1458, 'Bally', 36),
(1459, 'Balurghat', 36),
(1460, 'Bankura', 36),
(1461, 'Barakar', 36),
(1462, 'Barasat', 36),
(1463, 'Bardhaman', 36),
(1464, 'Bidhan Nagar', 36),
(1465, 'Chinsura', 36),
(1466, 'Contai', 36),
(1467, 'Cooch Behar', 36),
(1468, 'Darjeeling', 36),
(1469, 'Durgapur', 36),
(1470, 'Haldia', 36),
(1471, 'Howrah', 36),
(1472, 'Islampur', 36),
(1473, 'Jhargram', 36),
(1474, 'Kharagpur', 36),
(1475, 'Kolkata', 36),
(1476, 'Mainaguri', 36),
(1477, 'Mal', 36),
(1478, 'Mathabhanga', 36),
(1479, 'Medinipur', 36),
(1480, 'Memari', 36),
(1481, 'Monoharpur', 36),
(1482, 'Murshidabad', 36),
(1483, 'Nabadwip', 36),
(1484, 'Naihati', 36),
(1485, 'Panchla', 36),
(1486, 'Pandua', 36),
(1487, 'Paschim Punropara', 36),
(1488, 'Purulia', 36),
(1489, 'Raghunathpur', 36),
(1490, 'Raiganj', 36),
(1491, 'Rampurhat', 36),
(1492, 'Ranaghat', 36),
(1493, 'Sainthia', 36),
(1494, 'Santipur', 36),
(1495, 'Siliguri', 36),
(1496, 'Sonamukhi', 36),
(1497, 'Srirampore', 36),
(1498, 'Suri', 36),
(1499, 'Taki', 36),
(1500, 'Tamluk', 36),
(1501, 'Tarakeswar', 36),
(1502, 'Chikmagalur', 17),
(1503, 'Davanagere', 17),
(1504, 'Dharwad', 17),
(1505, 'Gadag', 17),
(1506, 'Chennai', 31),
(1507, 'Coimbatore', 31);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `program` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `program`, `specialization`, `city`, `state`, `created_at`, `updated_at`) VALUES
(2, 'sahil 008', 'sahil008@gmail.com', '8765099090', 'mba', NULL, 'Delhi', 'Delhi', '2025-05-05 03:27:40', '2025-05-05 03:27:40'),
(3, 'aamir', 'aamir@gmail.com', '9876509876', 'mca', NULL, 'Los Angeles', 'Chandigarh', '2025-05-05 03:45:20', '2025-05-05 03:45:20'),
(4, 'sahil 015', 'sahil015@gmail.com', '8765099092', 'bca', NULL, 'New Delhi', 'Delhi', '2025-05-05 04:01:18', '2025-05-05 04:01:18'),
(5, 'test test 001', 'test@gmail.com', '09988770033', 'Computer Science and Engineering', NULL, 'New Delhi', 'Delhi', '2025-05-05 06:01:13', '2025-05-05 06:01:13'),
(6, 'test', 'test@gmail.com', '9876543213', 'B.TECH', 'CSE', 'Delhi', 'Delhi', '2025-07-11 07:42:29', '2025-07-11 07:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `checked` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `phone`, `branch`, `city`, `state`, `checked`, `created_at`, `updated_at`) VALUES
(1, 'sahil 005', 'sahil005@gmail.com', '9315907212', 'ai_ml', 'New Delhi', 'Delhi', 'on', '2025-03-06 06:03:39', '2025-03-06 06:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_07_132956_create_contacts_table', 2),
(5, '2025_03_02_102821_blogs', 3),
(6, '2025_03_06_111950_create_enquiries_table', 4),
(9, '2025_03_06_112503_create_enquiries_table', 5),
(11, '2025_03_13_105516_create_authors_table', 6),
(12, '2025_03_13_180853_add_author_id_to_blogs_table', 7),
(13, '2025_03_14_095037_create_blog_categories_table', 8),
(15, '2025_03_14_102928_create_blog_blog_category_table', 9),
(16, '2025_03_26_072312_create_blog_comments_table', 10),
(17, '2025_04_05_074806_create_admission_enquiries_table', 11),
(18, '2025_04_22_115050_create_admission_apply_table', 12),
(19, '2025_05_05_084531_create_contacts_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3zOdY3bpjRA3ajdNeOzyiSigxXQV1AckTcOyKU5P', NULL, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRU92bFBJdTY5NE5vSmRKNjFBNTROUm9meHlJcnY4MUp6aHJrbnh1SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly9sb2NhbGhvc3Qvc2ltdC9wdWJsaWMvYmxvZ3MvMTc0MjIyNDQxMC5qcGciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744271759),
('BCipRNzgmcP5HAcdDeRaiLW90Anea0kIi3BcIYGn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVlITlhlUGdjV0ZybHhFcVp4ODBqcmFCRmt4ckpxMUJNeUhQSlV6YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1738156491),
('ra11jop2eXpNE6yrUz8pHpWT0OcWdDjak2LBC2vp', NULL, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlNLaGllbWJtb0VYMmJaM00xN2JRNnRScUZ2bVBFd1U1enBxNFJHdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3Qvc2ltdC9wdWJsaWMvYmxvZ3MvMTc0MjIyMjU5MS5qcGVnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744959097),
('rQAzIqUjwf5sN4zYjwkIO3X1CRUuczjvoeQJYwpR', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHZhSk9WbVNORm1iV1JmbEVVTWhqT0FxNUgzdnhXcmE1ZjEwZ0k2eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3Qvc2ltdC9wdWJsaWMvYmxvZ3MvMTc0MjIyMjU5MS5qcGVnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744362877),
('T3TH67jaGxSttNkkTSu6Q4o9elxgovxObUkkaJeK', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTUc5MDM0OVI2WTNPUzlJSFJ6NXZGYUJKNWtLTnIwZm5URkF5M3BZMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly9sb2NhbGhvc3Qvc2ltdC9wdWJsaWMvYmxvZ3MvMTc0MjIyNDQxMC5qcGciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1745821432),
('UWIG1yAieckVVJTGOU1K9PXe1nNaNKM2UEVLsxkb', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidk9IVFZWSkVyb0hIY1hhYzFEczdFUTV6SUZDdTAzUG1qZE1CWkVHayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly9sb2NhbGhvc3Qvc2ltdC9wdWJsaWMvYmxvZ3MvMTc0MjAyNzUzNy5qcGciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1744788650);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`) VALUES
(1, 'Andaman & Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra & Nagar Haveli'),
(9, 'Daman & Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu & Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttar Pradesh'),
(35, 'Uttarakhand'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$3BkZJ0bqoEJvAf70P7MrBO67rF0cUWtmzJ5TbqNOuv/sMbT5FKmvC', NULL, NULL, NULL),
(2, 'sahil', 'sahil@gmail.com', NULL, '$2y$12$3BkZJ0bqoEJvAf70P7MrBO67rF0cUWtmzJ5TbqNOuv/sMbT5FKmvC', NULL, '2025-03-11 03:25:05', '2025-03-11 03:25:05'),
(3, 'Admin001', 'admissions@seri.net.in', NULL, '$2y$12$/h21fOCdHleXzpbEDQzeX..AC1cZi.PTc6iP.8c/kq7IOQljl9kMy', NULL, '2025-05-06 00:56:08', '2025-05-06 01:32:44'),
(4, 'lead', 'lead.admin@yopmail.com', NULL, '$2y$12$3DEuTlK7xhdSIXIpmu7yVu9lgS40lVL7S0tBdV2uZFF1QyBwAQNGG', NULL, '2025-05-20 02:52:25', '2025-05-20 02:52:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_apply`
--
ALTER TABLE `admission_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_enquiries`
--
ALTER TABLE `admission_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_author_id_foreign` (`author_id`);

--
-- Indexes for table `blog_blog_category`
--
ALTER TABLE `blog_blog_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_blog_category_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_blog_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `admission_apply`
--
ALTER TABLE `admission_apply`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admission_enquiries`
--
ALTER TABLE `admission_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog_blog_category`
--
ALTER TABLE `blog_blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `blog_blog_category`
--
ALTER TABLE `blog_blog_category`
  ADD CONSTRAINT `blog_blog_category_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_blog_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
