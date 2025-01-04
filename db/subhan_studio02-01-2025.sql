-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 01:08 AM
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
-- Database: `subhan_studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `baby_shoot`
--

CREATE TABLE `baby_shoot` (
  `bs_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `bs_img` varchar(255) NOT NULL,
  `bs_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baby_shoot`
--

INSERT INTO `baby_shoot` (`bs_id`, `bs_img`, `bs_created_at`) VALUES
(00000001, 'IMG-WA0042.webp', '2024-12-26 22:04:46'),
(00000002, 'IMG-WA0043.webp', '2024-12-26 22:04:51'),
(00000003, 'IMG-WA0044.webp', '2024-12-26 22:04:55'),
(00000004, 'IMG-WA0045.webp', '2024-12-26 22:04:59'),
(00000005, 'IMG-WA0046.webp', '2024-12-26 22:05:03'),
(00000006, 'IMG-WA0047.webp', '2024-12-26 22:05:06'),
(00000007, 'IMG-WA0048.webp', '2024-12-26 22:05:10'),
(00000008, 'IMG-WA0050.webp', '2024-12-26 22:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_phone`, `contact_message`, `contact_created_at`) VALUES
(00000001, 'Atiq Ramzan', 'admin@prenero.com', 'Testing', '+923157524000', 'Testing Message', '2024-11-06 15:06:10'),
(00000002, 'atiq', 'atiq@gmail.com', 'testing', '03157524000', '123456789', '2024-12-30 12:07:58'),
(00000003, 'atiq', 'atiq@gmail.com', 'testing', '03157524000', 'test', '2024-12-30 12:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_category`
--

CREATE TABLE `corporate_category` (
  `ctg_id` int(55) NOT NULL,
  `ctg_name` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `corporate_category`
--

INSERT INTO `corporate_category` (`ctg_id`, `ctg_name`, `date_added`) VALUES
(1, 'Grand City', '2023-07-18'),
(2, 'Sarbuland City', '2023-07-18'),
(3, 'Skin Care', '2023-07-18'),
(4, 'Superior University & College', '2023-07-18'),
(5, 'Peramont City', '2023-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_images`
--

CREATE TABLE `corporate_images` (
  `ci_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `ci_img` varchar(255) NOT NULL,
  `ci_category` int(8) NOT NULL,
  `ci_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `corporate_images`
--

INSERT INTO `corporate_images` (`ci_id`, `ci_img`, `ci_category`, `ci_created_at`) VALUES
(00000001, '01.webp', 0, '2024-12-26 21:23:37'),
(00000002, '1.webp', 0, '2024-12-26 21:23:37'),
(00000003, '2.webp', 0, '2024-12-26 21:23:37'),
(00000004, '3.webp', 0, '2024-12-26 21:23:37'),
(00000005, '4.webp', 0, '2024-12-26 21:23:37'),
(00000006, '5.webp', 0, '2024-12-26 21:23:37'),
(00000007, '6.webp', 0, '2024-12-26 21:23:37'),
(00000008, '7.webp', 0, '2024-12-26 21:23:37'),
(00000009, '8.webp', 0, '2024-12-26 21:23:37'),
(00000010, 'DSC_0201.webp', 0, '2024-12-26 21:23:37'),
(00000011, 'DSC_0224.webp', 0, '2024-12-26 21:23:37'),
(00000012, 'DSC_0275.webp', 0, '2024-12-26 21:23:37'),
(00000013, 'DSC_0450.webp', 0, '2024-12-26 21:23:37'),
(00000014, 'DSC_0451.webp', 0, '2024-12-26 21:23:37'),
(00000015, 'DSC_3890.webp', 0, '2024-12-26 21:23:37'),
(00000016, 'DSC_3892.webp', 0, '2024-12-26 21:23:37'),
(00000017, 'DSC_3927.webp', 0, '2024-12-26 21:23:37'),
(00000018, 'DSC_3935.webp', 0, '2024-12-26 21:23:37'),
(00000019, 'DSC_3948.webp', 0, '2024-12-26 21:23:37'),
(00000020, 'DSC_3952.webp', 0, '2024-12-26 21:23:37'),
(00000021, 'DSC_3982.webp', 0, '2024-12-26 21:23:37'),
(00000022, 'DSC_9842.webp', 0, '2024-12-26 21:23:37'),
(00000023, 'DSC_9848.webp', 0, '2024-12-26 21:23:37'),
(00000024, 'DSC_9889.webp', 0, '2024-12-26 21:23:37'),
(00000025, 'shuja 1.webp', 0, '2024-12-26 21:23:37'),
(00000026, 'shuja.webp', 0, '2024-12-26 21:23:37'),
(00000027, 'Skin care Islamabad  (1).webp', 0, '2024-12-26 21:23:37'),
(00000028, 'Skin care Islamabad  (2).webp', 0, '2024-12-26 21:23:37'),
(00000029, 'Skin care Islamabad  (3).webp', 0, '2024-12-26 21:23:37'),
(00000030, 'Skin care Islamabad  (4).webp', 0, '2024-12-26 21:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `modal_shoot`
--

CREATE TABLE `modal_shoot` (
  `mi_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `mi_img` varchar(255) NOT NULL,
  `mi_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modal_shoot`
--

INSERT INTO `modal_shoot` (`mi_id`, `mi_img`, `mi_created_at`) VALUES
(00000001, '1.webp', '2024-12-26 21:51:32'),
(00000002, '2.webp', '2024-12-26 21:51:32'),
(00000003, '3.webp', '2024-12-26 21:51:32'),
(00000004, '4.webp', '2024-12-26 21:51:32'),
(00000005, '5.webp', '2024-12-26 21:51:32'),
(00000006, '6.webp', '2024-12-26 21:51:32'),
(00000007, '7.webp', '2024-12-26 21:51:32'),
(00000008, '8.webp', '2024-12-26 21:51:32'),
(00000009, '9.webp', '2024-12-26 21:51:32'),
(00000010, '10.webp', '2024-12-26 21:51:32'),
(00000011, '11.webp', '2024-12-26 21:51:32'),
(00000012, '12.webp', '2024-12-26 21:51:32'),
(00000013, '13.webp', '2024-12-26 21:51:32'),
(00000014, '14.webp', '2024-12-26 21:51:32'),
(00000015, '15.webp', '2024-12-26 21:51:32'),
(00000016, '16.webp', '2024-12-26 21:51:32'),
(00000017, 'IMG-WA0011.webp', '2024-12-26 21:51:32'),
(00000018, 'IMG-WA0012.webp', '2024-12-26 21:51:32'),
(00000019, 'IMG-WA0013.webp', '2024-12-26 21:51:32'),
(00000020, 'IMG-WA0015.webp', '2024-12-26 21:51:32'),
(00000021, 'IMG-WA0016.webp', '2024-12-26 21:51:32'),
(00000022, 'IMG-WA0018.webp', '2024-12-26 21:51:32'),
(00000023, 'IMG-WA0019.webp', '2024-12-26 21:51:32'),
(00000024, 'IMG-WA0023.webp', '2024-12-26 21:51:32'),
(00000025, 'IMG-WA0029.webp', '2024-12-26 21:51:32'),
(00000026, 'IMG-WA0051.webp', '2024-12-26 21:51:32'),
(00000027, 'IMG-WA0055.webp', '2024-12-26 21:51:32'),
(00000028, 'IMG-WA0056.webp', '2024-12-26 21:51:32'),
(00000029, 'IMG-WA0057.webp', '2024-12-26 21:51:32'),
(00000030, 'IMG-WA0058.webp', '2024-12-26 21:51:32'),
(00000031, 'IMG-WA0059.webp', '2024-12-26 21:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_shoot`
--

CREATE TABLE `product_shoot` (
  `ps_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `ps_img` varchar(255) NOT NULL,
  `ps_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_shoot`
--

INSERT INTO `product_shoot` (`ps_id`, `ps_img`, `ps_created_at`) VALUES
(00000001, 'IMG-WA0020.webp', '2024-12-26 22:49:47'),
(00000002, 'IMG-WA0021.webp', '2024-12-26 22:49:51'),
(00000003, 'IMG-WA0022.webp', '2024-12-26 22:49:56'),
(00000004, 'IMG-WA0024.webp', '2024-12-26 22:49:59'),
(00000005, 'IMG-WA0025.webp', '2024-12-26 22:50:03'),
(00000006, 'IMG-WA0026.webp', '2024-12-26 22:50:08'),
(00000007, 'IMG-WA0027.webp', '2024-12-26 22:50:32'),
(00000008, 'IMG-WA0028.webp', '2024-12-26 22:50:36'),
(00000009, 'IMG-WA0030.webp', '2024-12-26 22:50:40'),
(00000010, 'IMG-WA0031.webp', '2024-12-26 22:50:44'),
(00000011, 'IMG-WA0032.webp', '2024-12-26 22:50:47'),
(00000012, 'IMG-WA0033.webp', '2024-12-26 22:50:51'),
(00000013, 'IMG-WA0034.webp', '2024-12-26 22:50:54'),
(00000014, 'IMG-WA0035.webp', '2024-12-26 22:50:57'),
(00000015, 'IMG-WA0036.webp', '2024-12-26 22:51:00'),
(00000016, 'IMG-WA0037.webp', '2024-12-26 22:51:03'),
(00000017, 'IMG-WA0038.webp', '2024-12-26 22:51:06'),
(00000018, 'IMG-WA0039.webp', '2024-12-26 22:51:10'),
(00000019, 'IMG-WA0040.webp', '2024-12-26 22:51:13'),
(00000020, 'IMG-WA0041.webp', '2024-12-26 22:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_pic` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_email`, `first_name`, `last_name`, `user_pic`, `date_added`) VALUES
(1, 'admin_prenero', 'b743c33627755c255938a992d3480cab', 'hello@prenero.com', 'Atiq', 'Ramzan', '', '2023-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_shoot`
--

CREATE TABLE `wedding_shoot` (
  `wi_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `wedding_img` varchar(255) NOT NULL,
  `wi_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_shoot`
--

INSERT INTO `wedding_shoot` (`wi_id`, `wedding_img`, `wi_created_at`) VALUES
(00000001, '1(1).webp', '2024-12-26 19:53:36'),
(00000002, '1(2).webp', '2024-12-26 19:53:36'),
(00000003, '1.webp', '2024-12-26 19:53:36'),
(00000004, '2.webp', '2024-12-26 19:53:36'),
(00000005, '03.webp', '2024-12-26 19:53:36'),
(00000006, '3.webp', '2024-12-26 19:53:36'),
(00000007, '4.webp', '2024-12-26 19:53:36'),
(00000008, '5.webp', '2024-12-26 19:53:36'),
(00000009, '6.webp', '2024-12-26 19:53:36'),
(00000010, '7.webp', '2024-12-26 19:53:36'),
(00000011, '8.webp', '2024-12-26 19:53:36'),
(00000012, '9.webp', '2024-12-26 19:53:36'),
(00000013, '11.webp', '2024-12-26 19:53:36'),
(00000014, '12.webp', '2024-12-26 19:53:36'),
(00000015, '13.webp', '2024-12-26 19:53:36'),
(00000016, '16.webp', '2024-12-26 19:53:36'),
(00000017, '18.webp', '2024-12-26 19:53:36'),
(00000018, '48413543.webp', '2024-12-26 19:53:36'),
(00000019, '52274862.webp', '2024-12-26 19:53:36'),
(00000020, '89035918.webp', '2024-12-26 19:53:36'),
(00000021, '263577095.webp', '2024-12-26 19:53:36'),
(00000022, 'DSC_4561.webp', '2024-12-26 19:53:36'),
(00000023, 'DSC_4562.webp', '2024-12-26 19:53:36'),
(00000024, 'DSC_4568.webp', '2024-12-26 19:53:36'),
(00000025, 'DSC_4569.webp', '2024-12-26 19:53:36'),
(00000026, 'DSC_4576.webp', '2024-12-26 19:53:36'),
(00000027, 'DSC_4579.webp', '2024-12-26 19:53:36'),
(00000028, 'DSC_4580.webp', '2024-12-26 19:53:36'),
(00000029, 'DSC_4586.webp', '2024-12-26 19:53:36'),
(00000030, 'DSC_4629.webp', '2024-12-26 19:53:36'),
(00000031, 'DSC_4769.webp', '2024-12-26 19:53:36'),
(00000032, 'DSC_4778.webp', '2024-12-26 19:53:36'),
(00000033, 'DSC_4929.webp', '2024-12-26 19:53:36'),
(00000034, 'DSC_4985.webp', '2024-12-26 19:53:36'),
(00000035, 'SUBHAN (2).webp', '2024-12-26 19:53:36'),
(00000036, 'SUBHAN (3).webp', '2024-12-26 19:53:36'),
(00000037, 'SUBHAN (4).webp', '2024-12-26 19:53:36'),
(00000038, 'SUBHAN.webp', '2024-12-26 19:53:36'),
(00000039, 'SUBHAN-_5__1.webp', '2024-12-26 19:53:36'),
(00000040, 'wedding.webp', '2024-12-26 19:53:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baby_shoot`
--
ALTER TABLE `baby_shoot`
  ADD PRIMARY KEY (`bs_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `corporate_category`
--
ALTER TABLE `corporate_category`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `corporate_images`
--
ALTER TABLE `corporate_images`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `modal_shoot`
--
ALTER TABLE `modal_shoot`
  ADD PRIMARY KEY (`mi_id`);

--
-- Indexes for table `product_shoot`
--
ALTER TABLE `product_shoot`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wedding_shoot`
--
ALTER TABLE `wedding_shoot`
  ADD PRIMARY KEY (`wi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baby_shoot`
--
ALTER TABLE `baby_shoot`
  MODIFY `bs_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `corporate_category`
--
ALTER TABLE `corporate_category`
  MODIFY `ctg_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `corporate_images`
--
ALTER TABLE `corporate_images`
  MODIFY `ci_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `modal_shoot`
--
ALTER TABLE `modal_shoot`
  MODIFY `mi_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_shoot`
--
ALTER TABLE `product_shoot`
  MODIFY `ps_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wedding_shoot`
--
ALTER TABLE `wedding_shoot`
  MODIFY `wi_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
