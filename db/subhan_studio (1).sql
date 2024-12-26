-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2024 at 08:02 PM
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
(00000001, 'IMG-WA0042.jpg', '2024-12-26 11:47:03'),
(00000002, 'IMG-WA0043.jpg', '2024-12-26 11:47:03'),
(00000003, 'IMG-WA0044.jpg', '2024-12-26 11:47:03'),
(00000004, 'IMG-WA0045.jpg', '2024-12-26 11:47:03'),
(00000005, 'IMG-WA0046.jpg', '2024-12-26 11:47:03'),
(00000006, 'IMG-WA0047.jpg', '2024-12-26 11:47:03'),
(00000007, 'IMG-WA0048.jpg', '2024-12-26 11:47:03'),
(00000008, 'IMG-WA0050.jpg', '2024-12-26 11:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_message` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `username`, `phone_number`, `user_email`, `user_message`, `date_added`) VALUES
(1, 'salman', '0302064921', 'ar0649201@gmail.com', 'Hello Salman', '0000-00-00'),
(2, 'Yasir', 'yasir', '', '', '0000-00-00'),
(3, 'this is test ', '03219669533', 'mytest@gmail.com', 'its me ', '0000-00-00'),
(4, 'ahsan ul haq', '03007619643', 'ahsanulhaq75@gmail.com', 'hi', '0000-00-00');

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
  `img_id` int(55) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_category` int(55) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `corporate_images`
--

INSERT INTO `corporate_images` (`img_id`, `img_name`, `img_category`, `date_added`) VALUES
(1, 'Screenshot 2023-04-18 151329.png', 2, '0000-00-00'),
(2, 'Screenshot 2023-04-18 135251.png', 4, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `modal_shoot`
--

CREATE TABLE `modal_shoot` (
  `img_id` int(44) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modal_shoot`
--

INSERT INTO `modal_shoot` (`img_id`, `img_name`, `date_added`) VALUES
(1, 'IMG-WA0011.jpg', '2024-12-26'),
(2, 'IMG-WA0012.jpg', '2024-12-26'),
(3, 'IMG-WA0013.jpg', '2024-12-26'),
(4, 'IMG-WA0015.jpg', '2024-12-26'),
(5, 'IMG-WA0016.jpg', '2024-12-26'),
(6, 'IMG-WA0018.jpg', '2024-12-26'),
(7, 'IMG-WA0019.jpg', '2024-12-26'),
(8, 'IMG-WA0023.jpg', '2024-12-26'),
(9, 'IMG-WA0029.jpg', '2024-12-26'),
(10, 'IMG-WA0051.jpg', '2024-12-26'),
(11, 'IMG-WA0055.jpg', '2024-12-26'),
(12, 'IMG-WA0056.jpg', '2024-12-26'),
(13, 'IMG-WA0057.jpg', '2024-12-26'),
(14, 'IMG-WA0058.jpg', '2024-12-26'),
(15, 'IMG-WA0059.jpg', '2024-12-26'),
(16, '1(1).JPG', '2024-12-26'),
(19, '1.jpg', '2024-12-26'),
(20, '1.png', '2024-12-26'),
(21, '2.png', '2024-12-26'),
(22, '3.jpg', '2024-12-26'),
(23, '3.png', '2024-12-26'),
(24, '4.jpg', '2024-12-26'),
(25, '5.jpg', '2024-12-26'),
(26, '5.png', '2024-12-26'),
(27, '6.jpg', '2024-12-26'),
(28, '6.png', '2024-12-26'),
(29, '7.jpg', '2024-12-26'),
(30, '7.png', '2024-12-26'),
(31, '8.jpg', '2024-12-26'),
(32, '8.png', '2024-12-26'),
(33, '9.png', '2024-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `product_shoot`
--

CREATE TABLE `product_shoot` (
  `ps_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `ps_img` varchar(255) NOT NULL,
  `date_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_shoot`
--

INSERT INTO `product_shoot` (`ps_id`, `ps_img`, `date_created_at`) VALUES
(00000001, 'IMG-WA0020.jpg', '2024-12-26 11:42:37'),
(00000002, 'IMG-WA0021.jpg', '2024-12-26 11:42:37'),
(00000003, 'IMG-WA0022.jpg', '2024-12-26 11:42:37'),
(00000004, 'IMG-WA0024.jpg', '2024-12-26 11:42:37'),
(00000005, 'IMG-WA0025.jpg', '2024-12-26 11:42:37'),
(00000006, 'IMG-WA0026.jpg', '2024-12-26 11:42:37'),
(00000007, 'IMG-WA0027.jpg', '2024-12-26 11:42:37'),
(00000008, 'IMG-WA0028.jpg', '2024-12-26 11:42:37'),
(00000009, 'IMG-WA0030.jpg', '2024-12-26 11:42:37'),
(00000010, 'IMG-WA0031.jpg', '2024-12-26 11:42:37'),
(00000011, 'IMG-WA0032.jpg', '2024-12-26 11:42:38'),
(00000012, 'IMG-WA0033.jpg', '2024-12-26 11:42:38'),
(00000013, 'IMG-WA0034.jpg', '2024-12-26 11:42:38'),
(00000014, 'IMG-WA0035.jpg', '2024-12-26 11:42:38'),
(00000015, 'IMG-WA0036.jpg', '2024-12-26 11:42:38'),
(00000016, 'IMG-WA0037.jpg', '2024-12-26 11:42:38'),
(00000017, 'IMG-WA0038.jpg', '2024-12-26 11:42:38'),
(00000018, 'IMG-WA0039.jpg', '2024-12-26 11:42:38'),
(00000019, 'IMG-WA0040.jpg', '2024-12-26 11:42:38'),
(00000020, 'IMG-WA0041.jpg', '2024-12-26 11:42:38');

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
  `img_id` int(44) NOT NULL,
  `wedding_img` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_shoot`
--

INSERT INTO `wedding_shoot` (`img_id`, `wedding_img`, `date_added`) VALUES
(6, 'Screenshot 2023-04-18 151329.png', '2023-07-18');

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
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `modal_shoot`
--
ALTER TABLE `modal_shoot`
  ADD PRIMARY KEY (`img_id`);

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
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baby_shoot`
--
ALTER TABLE `baby_shoot`
  MODIFY `bs_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `corporate_category`
--
ALTER TABLE `corporate_category`
  MODIFY `ctg_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `corporate_images`
--
ALTER TABLE `corporate_images`
  MODIFY `img_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `modal_shoot`
--
ALTER TABLE `modal_shoot`
  MODIFY `img_id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `img_id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
