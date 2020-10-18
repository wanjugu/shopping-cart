-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 08:44 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
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
(1, '2020_10_18_150740_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `imagePath`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1546016710-best-christian-movies-knowing-god-1546016696.jpg?crop=1xw:1xh;center,top&resize=480:*', 'Knowing God', 'The Bible isn\'t the only religious book to spend hours pouring over. From iconic novels to poetry about God and religion to coloring', 50.00, '2020-10-18 14:46:01', '2020-10-18 14:46:01'),
(2, 'https://s7d9.scene7.com/is/image/LifeWayChristianResources/9780718096144', 'Unshakable Hope', 'About this Item In Unshakable Hope, pastor and New York Times bestselling author Max Lucado offers encouraging, practical guidance for overcoming ', 10.00, '2020-10-18 14:46:01', '2020-10-18 14:46:01'),
(3, 'https://s7d9.scene7.com/is/image/LifeWayChristianResources/9780736979580?$FigureLarge$', 'It all began in a GARDEN', 'It All Began in a Garden features beautiful photography from Dawn Camp and introduces you to 52 essential oils and their vast array of uses', 25.00, '2020-10-18 14:46:01', '2020-10-18 14:46:01'),
(4, 'https://s7d9.scene7.com/is/image/LifeWayChristianResources/9780800736590?$XLarge$', 'Thanks for the Mammogram', 'When Laura Jensen Walker was diagnosed with breast cancer on her first wedding anniversary difficult circumstances and gaining inner peace, ', 60.00, '2020-10-18 14:46:01', '2020-10-18 14:46:01'),
(5, 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1546017888-best-christian-books-the-shack-1546017873.jpg?crop=1xw:1xh;center,top&resize=480:*', 'The shack', 'The Bible isn\'t the only religious book to spend hours pouring over. From iconic novels to poetry about God and religion to coloring', 20.00, '2020-10-18 14:46:01', '2020-10-18 14:46:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
