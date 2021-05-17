-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2021 at 09:55 PM
-- Server version: 5.6.49-cll-lve
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
-- Database: `wnm608_xinying`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Signature Málà Tang', 9.99, 'main food', '2021-05-14 21:43:39', '2021-05-14 21:43:39', 'Potato, lotus root, napa cabbage, broccoli, wood ear mushroom, tofu skin, glass noodle, bok choy, and enoki mushroom. Cooked in fresh chicken and beef bone marrow broth and secret hotpot sauce, topped with scallion, cilantro, and garlic. Choose protein: Beef; Lamb; Spam; Fish Filet;  ea. $3.49', 'signature_mala_tang.jpg', 'signature_mala_tang.jpg'),
(2, 'Vegetable Málà Tang', 9.99, 'main food', '2021-05-14 21:46:15', '2021-05-14 21:46:15', 'Potato, lotus root, napa cabbage, broccoli, wood ear mushroom, tofu skin, glass noodle, bok choy, and enoki mushroom. Cooked in fresh chicken and beef bone marrow broth and secret hotpot sauce, topped with scallion, cilantro and garlic *vegetarian option upon request', 'vege_mala_tang.jpg', 'vege_mala_tang.jpg'),
(3, 'Dumplings in Chili Oil (6 pc.)', 6.99, 'main food', '2021-05-14 21:48:57', '2021-05-14 21:48:57', 'Pork and cabbage dumpling with Liu’s family chili oil and house-made sweet soy sauce.', 'dumpling.jpeg', 'dumpling.jpeg'),
(4, 'Sichuan Silken Tofu', 5.99, 'main food', '2021-05-14 21:50:14', '2021-05-14 21:50:14', 'Warm silken bean curd with crunchy soybean and pickled vegetable, bathed in Liu\'s family secret sauce, topped with cilantro and scallion.', 'tofu.jpg', 'tofu.jpg'),
(5, 'Sichuan Fries', 4.99, 'snack', '2021-05-14 21:52:17', '2021-05-14 21:52:17', 'Lightly fried crinkle-cut potato, seasoned\r\nwith cumin, peppercorn, chili pepper,\r\nand topped with scallion', 'fries.jpeg', 'fries.jpeg'),
(6, 'Sichuan Jelly', 3.99, 'drink', '2021-05-14 21:53:44', '2021-05-14 21:53:44', 'Chilled clear jelly with brown sugar syrup, peanut, raisin, and haw flake *contain peanut.', 'jelly.jpg', 'jelly.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
