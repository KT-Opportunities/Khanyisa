-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2020 at 10:20 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tis_bgcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dawn Chikoki', 'dawnchikoki@gmail.com', '$2y$10$mH9/UcSkldgZtbFECfbBeOFuzlfDjtcirn0ty9fBgZtO3qX9Ycm.i', 'kA9MK8rhNQg0P30g719iAD2nlnKFHPQYJ0FjRLGdyyEEEKwR5XiHyXaCPD6m', '2020-02-10 11:52:34', '2020-02-10 11:52:34'),
(5, 'John', 'john@gmail.com', '$2y$10$EUsyXGetkXegspMZhfz9Su8bkYDwULGoO0yl9QKwTFsief2iKOgXu', 'voGB0cnrfWdq6z7WY0V2Ne8IHWRpq0HeZj7Exj8Ub3zDCvosaY8rggnsUXhs', '2020-02-13 05:34:37', '2020-02-13 05:34:37'),
(6, 'tebatso', 'tebatsosmapayile@gmail.com', '$2y$10$LHzXnR9qfFzGzCtH7e.r1ekwbMkuQE0ZLvRnOzcO1HRYFZugbo7QG', 'SeVyFETRCxIe6MVv1sMGdV0Ac8xfnmJD9DulCYZOpl3AG5S55F4pKsN3kn5r', '2020-02-19 08:27:01', '2020-02-19 08:27:01'),
(7, 'thoriso', 'thoriso@ktopportunities.co.za', '$2y$10$k053nrfUWEmKE/DG8a5l1.Q8hAtDE.Z0bJ8tYRJJ0Ky0a8VnPJZpG', 'gGAs5ldKMxIiSrYBIKYZmxYgCHGzkTgQjUhgPjZUzFhAWQkyLneguyCTTcST', '2020-02-21 14:08:07', '2020-02-21 14:08:07'),
(8, 'tshepang', 'tshepangkgwadi28@gmail.com', '$2y$10$H56YN55flE9DhYehxI21m.Lgp9wL5yzxCs2eHfGIEZ/68iwuRFqgy', '3XG0ukDbBOkZ8TeHys8lzk30d3c4EUlnnkUgGVXB1GI85ty3aCojlM0OEJ5W', '2020-02-24 05:28:20', '2020-02-24 05:28:20'),
(9, 'tebatso', 'tebatso@ewitservices.co.za', '$2y$10$VO0vfbOTVff5T.o/.EAce./funQAVwqblZXOck1vQYN/oEo47sUwe', '6PScVRvmHwWlHvTwqdsXSC5PKiZKVcQpvTcn5EyBZKhsvOILRhGuI8GfqRcs', '2020-02-24 05:31:19', '2020-02-24 05:31:19'),
(10, 'winter', 'wsmabasa@webmail.co.za', '$2y$10$ngqDvPOP3C8RXfBcYKroYOyeIe9DyMlvsWIGKqi0Dkkbt7obXvQGK', NULL, '2020-02-24 05:37:00', '2020-02-24 05:37:00'),
(11, 'tebatso', 'tebatso1@gmail.com', '$2y$10$EQDsGfdRAuhTvHgt9OmcXuGV2pdY28ygzhaAic73QxfqTH79YAteu', 'xtES2AXJi8ILWD47HFETR4XUd8xQbuTJGZ3R10z6mQa6qz7LEGw0e3Ttxc1j', '2020-02-24 05:39:06', '2020-02-24 05:39:06'),
(12, 'Christa Oosthuizen', 'christa@khanyisabrokers.co.za', '$2y$10$ZD//jzBugLlv6BJ9rRIXAusC8i3WfLhsHUQbVvayb1cQCaCVY3XR6', NULL, '2020-02-24 06:43:46', '2020-02-24 06:43:46'),
(13, 'Boitumelo Mtasa', 'boitumelo@peosa.co.za', '$2y$10$joaSLPlTryEdG0nwhQIr1uf5OszNG39O8FRsysknd5CnoMtNsag9K', '8gyIbrVoxpXFMCadvFrdWjn1KbYm6FVI4jznF6xUadfApZ1aH0G1aBs6sJ3H', '2020-02-25 14:47:04', '2020-02-25 14:47:04'),
(14, 'tebatso', 'sharon@gmail.com', '$2y$10$BdePow/rhUdc3FluJ8S1S.2zdaNb06yhKYWK1B6fwE1rHugkXgfx6', 'AOq6zy7EIT0LPgGWyRKU6Dlorf6KUy2wB1CmKBkfaaObHUr1ZLCZqaYKDyvQ', '2020-02-27 05:19:33', '2020-02-27 05:19:33'),
(15, 'tebatso', 'teba@gmail.com', '$2y$10$R1tYLsuvasxdN3Y/tQ2DH.1HHxdy7AMePnYe3kISzo1hVqID5mkmO', 'vpDXEMHd5h1qOXssXLNM5XHBzM5UvszrJvSXoXqtpldl5cgVERsP5iTu6b5K', '2020-02-27 05:23:11', '2020-02-27 05:23:11'),
(16, 'TSHEPANG', 'sam@ktopportunuties.co.za', '$2y$10$CXSyxf/Tzk3l.zYtlk1RVuhhTAMDjTcx9IEBJI.swIPhBMpo4CCoO', NULL, '2020-03-03 07:46:54', '2020-03-03 07:46:54'),
(17, 'Donald', 'donald@ktopportunities.co.za', '$2y$10$B2evnuQEJCRn4W3KWeL/IubAod4n1aP/iVLAQe/UU8CQNvhUDNrz6', NULL, '2020-03-04 11:04:12', '2020-03-04 11:04:12'),
(18, 'tebatso', 'tebatsos@gmail.com', '$2y$10$p7Mq4KhQkQW1dqPDjZJuAuCMtroMnWN6wuGWtMyLruSGXHRL8t2RS', 'BEPdIwz81soc8VxLT1iLXdZBRaZL8r8wWpQZkap1W859XBQiyjveVFWaA5Rn', '2020-03-05 06:32:03', '2020-03-05 06:32:03'),
(19, 'tebatso', 'tebatso21@gmail.com', '$2y$10$WCLnmGIFJD69qxK1aiZjNuu86k/.YZn8Ct/m0IvyZXJ9GGwzoDdnm', 'nmo3IiiT1gbLjUhEVFRBB4PSEsCoOUXebXibata0jkxKhaVXPBut2WbK6jQT', '2020-03-05 06:41:16', '2020-03-05 06:41:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
