-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 09:31 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dasc`
--

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
(3, '2018_08_01_193042_create_students_table', 1),
(4, '2018_08_20_021330_create_school_details_table', 1),
(5, '2018_09_01_171359_create_tests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE `school_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_type` tinyint(20) NOT NULL,
  `campus` tinyint(1) NOT NULL,
  `school_student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_classroom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` tinyint(1) NOT NULL,
  `science_lab` tinyint(1) NOT NULL,
  `computer_lab` tinyint(1) NOT NULL,
  `total_computer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `computer_teacher` tinyint(1) NOT NULL,
  `library` tinyint(1) NOT NULL,
  `toilet` tinyint(1) NOT NULL,
  `mpo_occupied` tinyint(1) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`id`, `school_name`, `location`, `education_type`, `campus`, `school_student`, `school_teacher`, `school_classroom`, `version`, `science_lab`, `computer_lab`, `total_computer`, `computer_teacher`, `library`, `toilet`, `mpo_occupied`, `publication_status`, `created_at`, `updated_at`) VALUES
(69, 'Shahbag High School', 'Shahbag', 3, 1, '123', '124', '12', 1, 1, 1, '11', 1, 1, 1, 1, 1, NULL, NULL),
(70, 'kakoli High School', 'dhanmondi', 2, 1, '1234', '123', '50', 1, 1, 1, '12', 1, 0, 1, 0, 1, NULL, NULL),
(71, 'Dhanmondi Boys School', 'Sukrabad', 1, 1, '12345', '345', '453', 0, 1, 1, '10', 1, 1, 1, 1, 1, NULL, NULL),
(72, 'Mohammodpur high school', 'Mohammadpur', 3, 1, '54546', '433', '54353', 0, 1, 1, '1', 1, 1, 1, 1, 1, NULL, NULL),
(73, 'Mirpur bangla school', 'Mirpur', 1, 1, '2342', '213', '32341', 1, 1, 1, '1', 1, 1, 1, 1, 1, NULL, NULL),
(74, 'Dhanmondi Girls School', 'dhanmondi', 2, 1, '123', '124', '12', 0, 1, 1, '11', 1, 1, 1, 1, 1, NULL, '2018-10-01 03:30:00'),
(75, 'Oxford High School', 'Lalmatia', 2, 1, '1234', '123', '50', 1, 1, 1, '12', 1, 0, 1, 0, 1, NULL, '2018-09-30 11:57:12'),
(76, 'New Model High School', 'Sukrabad', 3, 1, '12345', '345', '453', 0, 1, 1, '10', 1, 1, 1, 1, 1, NULL, NULL),
(77, 'Khilgaon High School', 'Khilgaon', 3, 1, '54546', '433', '54353', 0, 1, 1, '1', 1, 1, 1, 1, 1, NULL, NULL),
(79, 'Rayer Bazar High School', 'dhanmondi', 3, 1, '1289', '231', '234', 0, 1, 1, '15', 1, 1, 1, 1, 1, NULL, NULL),
(80, 'Shahbag High School', 'Shahbag', 3, 1, '123', '124', '12', 1, 1, 1, '11', 1, 1, 1, 1, 1, NULL, NULL),
(81, 'kakoli High School', 'dhanmondi', 2, 1, '1234', '123', '50', 1, 1, 1, '12', 1, 0, 1, 0, 1, NULL, NULL),
(82, 'Dhanmondi Boys School', 'Sukrabad', 1, 1, '12345', '345', '453', 0, 1, 1, '10', 1, 1, 1, 1, 1, NULL, NULL),
(83, 'Mohammodpur high school', 'Mohammadpur', 3, 1, '54546', '433', '54353', 0, 1, 1, '1', 1, 1, 1, 1, 1, NULL, NULL),
(84, 'Mirpur bangla school', 'Mirpur', 1, 1, '2342', '213', '32341', 1, 1, 1, '1', 1, 1, 1, 1, 1, NULL, NULL),
(85, 'Dhanmondi Girls School', 'dhanmondi', 1, 1, '123', '124', '12', 1, 1, 1, '11', 1, 1, 1, 1, 1, NULL, NULL),
(86, 'Oxford School', 'Lalmatia', 2, 1, '1234', '123', '50', 1, 1, 1, '12', 1, 0, 1, 0, 1, NULL, NULL),
(87, 'New Model High School', 'Sukrabad', 3, 1, '12345', '345', '453', 0, 1, 1, '10', 1, 1, 1, 1, 1, NULL, NULL),
(88, 'Khilgaon High School', 'Khilgaon', 3, 1, '54546', '433', '54353', 0, 1, 1, '1', 1, 1, 1, 1, 1, NULL, NULL),
(89, 'Mirpur bangla school', 'Mirpur', 3, 1, '2342', '213', '32341', 1, 1, 1, '1', 1, 1, 1, 1, 1, NULL, NULL),
(90, 'Rayer Bazar High School', 'dhanmondi', 3, 1, '1289', '231', '234', 0, 1, 1, '15', 1, 1, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_confirmation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campus` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `school_name`, `campus`, `created_at`, `updated_at`) VALUES
(2, 'dataful.xyz', 1, NULL, NULL),
(3, 'Rayerbazar High School', 0, NULL, NULL),
(4, 'Kakoli High School', 1, NULL, NULL),
(5, 'Dhaka Boys School', 1, NULL, NULL),
(6, 'Dhaka Girls School', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Debabrata Mondol', 'debabrata8880@gmail.com', '$2y$10$PGvJERpQ1ss7a5jLMTMeCeXw1dHzTE/JxErtAAGGDt9swXcR0c48m', 'qYQq1J156nGIPswU7o6NmtfRdPt00x8qspeB8HdjUAEYr4Ft81e2yHUy7ZQY', '2018-09-02 12:19:33', '2018-09-02 12:19:33');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
