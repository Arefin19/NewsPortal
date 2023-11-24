-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2023 at 08:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'prio@webwire.com', 'prio1234');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(40) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `content` text DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `views` int(11) DEFAULT 1,
  `likes` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `author`, `url`, `description`, `created_at`, `updated_at`, `content`, `source`, `location`, `type`, `views`, `likes`) VALUES
(5, 'Studios got hacked', 'Ryan Gosling', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700777053/newsportal/tu56wmd1eem0hdqko3xw.png', 'The account is hacked, but it seems Hotta Studio does not care about this.', '2023-11-23 22:04:14', '2023-11-23 22:04:14', 'The main worry that is going around for that scenario is:\n\nif you didn’t unbind the guest account, someone can “access” (either through hacking, brute forcing, phishing, reusing compromised password… no one knows at this point) your guest account and unbind your mail. There is no verification needed to unbind anything. So even if you bind your mail, someone can just unbind it if they somehow access your guest account.\n\nNow if you unbind everything except for your mail, they have to “access” your mail to get in, which should be harder to hack but still vulnerable to phishing, brute forcing but this is where 2FA comes in as extra security.\n\nSo difference between guest and email logins for security is just the 2FA + maybe big corpo is more secure against actual hacking attempts', 'BBC', 'UK', 'media', 1, 1),
(6, 'Israel-Hamas war live updates', 'Marlene Lenthang', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700784822/newsportal/uft34mx1eoossztvq3io.webp', 'Hostage release and Gaza truce to start Friday, Qatar says', '2023-11-24 00:13:43', '2023-11-24 00:13:43', 'There are just two doctors left at Al-Shifa hospital in the Gaza Strip, the hospital’s head of plastic surgery, Dr. Ahmed El Mokhallalati, told NBC News.\n\n\"Most of the staff have left yesterday, except for two doctors, me and my colleague and one nurse all in the hospital,\" he said Thursday.\n\nThough he described the situation as \"very, very difficult,\" he said they\'re focused on an estimated 200 patients left at the hospital, which was raided by Israeli military last week under claims that it was used as a Hamas stronghold. ', 'NBC', 'UK', 'world', 1, 1),
(7, 'Trump rages about judge', 'Christina Zhao', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700792424/newsportal/ipcbcoeonf489qgmfevk.webp', 'law clerk while gag order is paused in New York fraud trial', '2023-11-24 02:20:24', '2023-11-24 02:20:24', 'A New York appeals court last week temporarily blocked the gag order, issuing a stay after Trump’s attorneys had appealed the order as “unconstitutional.” The pause will be in effect until at least Nov. 27, when a panel of appeals court judges will consider the issue.\r\n\r\nWith the gag order on hold, Trump took to his Truth Social platform on Thursday morning and accused Engoron of criminally defrauding him and the state of New York. He also alleged that the judge’s law clerk is “Politically Biased & Corrupt,” writing that the clerk sits “by his side on the \'Bench\' & tell him what to do.”\r\n\r\nTrump, in the same post, called President Joe Biden “crooked” and addressed “all of the other Radical Left Lunatics, Communists, Fascists, Marxists, Democrats, & RINOS, who are seriously looking to DESTROY OUR COUNTRY.”', 'NBC news', 'USA', 'politics', 1, 1),
(8, 'Microsoft, can we please just call it Windows 11.1 already?', 'Tom Warren', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700809720/newsportal/spftu8giotjzismvs9b7.webp', 'Windows 11.1 and point updates make way more sense than Windows 11 22H2 and Windows 11 2023 Update.', '2023-11-24 07:08:41', '2023-11-24 07:08:41', 'A few years ago multiple sources told me that Microsoft was looking at naming its updates after animals or people, but ultimately decided against this for a variety of reasons, not least because people can do bad things and you don’t want an OS named after a bad person. Instead, Microsoft transitioned to monthly names over point releases, and now we’re back to yearly names that don’t really mean much when you consider Windows 11 has had multiple big updates in 2023 alone.\r\n\r\nApple successfully uses point releases for iOS, iPadOS, and watchOS, even if it stubbornly sticks to naming macOS releases after locations. It’s easy for me to troubleshoot a family member’s iPhone and get a quick and clear idea of what version of iOS they’re running. On Windows, the 23H2 version number doesn’t really tell me much, because there are monthly updates that can add features on top. It’s also far easier to Google “Windows 11.1” than “Windows 11 2023 Update November update” or “Windows 23H2 November features” to find out what got added.', 'The Verge', 'USA', 'tech', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
(1, 'Sakir', 'sakir@gmail.com', '2023-11-01 17:57:53', '$2y$10$/6wqSFtQ7gjqpv.Y0DRee.9J0SgUAji9G7wnhAjSFB8Uyj73R66um', NULL, '2023-11-01 08:06:49', '2023-11-01 08:06:49', 'sakirash'),
(2, NULL, 'nafess@gmail.com', NULL, '$2y$10$2aOWLvM./DI4IRFwcvKaWuHjaqt/QgOJKLiDQ6lBApSEu53yBOvym', NULL, '2023-11-01 11:35:09', '2023-11-01 11:35:09', 'nafees63'),
(3, 'Sakir', 'uaaa@gmail.com', NULL, '$2y$10$3SeKFUbCMCJfm.w2JEpaOOgC/giGfrQJ0qJ79NkNM01msMuNJYVlC', NULL, '2023-11-01 11:42:45', '2023-11-01 11:42:45', 'sakirAsh'),
(4, 'jq', 'jq12@gmail.com', NULL, '$2y$10$71wqonLih3bn9WHtK8loveb50SZ8b5Q7ILPR.kPCDll8Jw/aHf3Hu', NULL, '2023-11-01 14:13:20', '2023-11-01 14:13:20', 'jq_'),
(5, 'mushfiq alam', 'mushfiq9912@gmail.com', NULL, '$2y$10$q4K.D98Cokvc/i3remBkQuv7pDrIOshMecabIsKQK/CZqzWcNGyE2', NULL, '2023-11-20 13:35:13', '2023-11-20 13:35:13', 'mushfiqalam_');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
