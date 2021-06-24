-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 05:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'nshdu', 'dwedef@dffg.com', '238ca4718d27d53cd6d0c0780385af21'),
(2, 'sdew', 'weerew@dfdg', '1930eae318121d07c4b0a625fc6e6094'),
(3, 'nisha', 'abva12a2a@gamil.com', '238ca4718d27d53cd6d0c0780385af21'),
(4, 'nisha', 'nisha.nkr12@gmail.com', '238ca4718d27d53cd6d0c0780385af21'),
(5, 'anusha', 'hasdha@gmail.com', '24e077ecf3f7911ed3aca76a1c81ff3e'),
(6, 'sda', 'asdsa@gmail.com', '2f307f418c38397a10d72e4485548a48'),
(7, 'nisha', 'asd@gmail.com', '238ca4718d27d53cd6d0c0780385af21'),
(8, 'ram', 'ram@gmail.com', 'b197fad67ca009b0e9f51d46a384bb49'),
(9, 'anjali', 'anjali@gmail.com', '9c6368eee28b39154fedc416ca8d5a9b');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
