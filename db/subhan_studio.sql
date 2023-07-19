-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 05:09 PM
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
(4, 'Screenshot 2023-05-02 190215.png', '2023-07-18');

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
  MODIFY `img_id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
