-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 03:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(0, 'Admin', 'superadmin@gmail.com', '$2y$10$twGxoo1CTptEsOrVJ8erDOMTKiZw3LqV1IuS0f6jcXWmY8/H91X6G');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderedby` varchar(255) NOT NULL,
  `trackid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderedby`, `trackid`, `status`) VALUES
(1, 'badakomora06@gmail.com', 1, 'Pending...'),
(2, 'badakomora06@gmail.com', 2, 'Pending...'),
(4, 'ndondugrace88@gmail.com', 3, 'Pending...');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `name`, `descr`, `file`, `status`) VALUES
(1, 'Track 1', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, consequatur labore alias animi nihil odio expedita delectus ipsa eos dolorum obcaecati excepturi vero reiciendis dolor quaerat enim aperiam fugit laboriosam?', 'http://cdn.justauto.com.au/ad-assets%2FJHFD4039486%2FJHFD4039486-1.jpg', 'unordered.'),
(2, 'Track 2', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, consequatur labore alias animi nihil odio expedita delectus ipsa eos dolorum obcaecati excepturi vero reiciendis dolor quaerat enim aperiam fugit laboriosam?', 'https://www.waringa.com.au/wp-content/uploads/elementor/thumbs/Elmers-Haulmaster-Adjustable-Auger-scaled-phjhc4a6g0t4ze54mrwfxkh4s39k5gr27syerp5j8g.jpg', 'Ordered.'),
(3, 'Track 3', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, consequatur labore alias animi nihil odio expedita delectus ipsa eos dolorum obcaecati excepturi vero reiciendis dolor quaerat enim aperiam fugit laboriosam?', 'https://oconnorscaseih.com.au/wp-content/uploads/41T-Chaser-Bin-Unloading-1024x576-1-e1644273023967.jpg', 'Ordered.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL DEFAULT 'avator.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile`) VALUES
(1, 'Bada', 'badakomora06@gmail.com', '$2y$10$WxIgjbFe.5CZvGorH44xGOU9DCh5QxdNf9R3mo2xf2mB.qdVR41dS', 'avator.jpg'),
(2, 'Ndondu', 'ndondugrace88@gmail.com', '$2y$10$9BdFnIYdIUv9EpD4N4jSqu5ehr9Hg/o4UdOl4sW.CzHNMjaI/W9FG', 'avator.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;