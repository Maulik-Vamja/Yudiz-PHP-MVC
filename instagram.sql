-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 04:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instagram`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `is_private` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `pass`, `is_private`) VALUES
(1, 'Maulik Vamja', 'maulik_vamja', '123456789', 0),
(2, 'Maulik Vamja', 'maulik_vamja', '$2y$10$Me.lFqQkYzd76E7cjWhF3u8UnBw40f/pA1v9p8PXVSBcFIgkWW6E2', 0),
(3, 'Maulik Vamja', 'maulik_vamja', '$2y$10$itxZ/HZmQZJjuLzY6WiWtOhKp3qk5k1hnQbDEWYZz60zAyShwbSDO', 0),
(4, 'maulik vamjq', 'maulik', '$2y$10$k1qMu4bFsgX/fWoVuRbNpeMXvsk2RkmQ68YkD4/.SqBH6l68CCiEi', 0),
(5, 'jvbjdsbcjdsn', 'mancjf', '$2y$10$Ld1G2lzg5/BkeGjcmRpjhO7p65VpQbKz7cey3.rWA8KgRxSWPnQqm', 0),
(6, 'manbhjdsbchjds', 'sanbchdsbs', '$2y$10$2ZGEWKf6Ca3.7yLK.0gbj.EQ7OasoGhJ8YuHXcXYxKoxtksKjSHIy', 0),
(7, 'cbdhbcsjkdc', 'mnbchfbd', '$2y$10$jN.ge8rlDx4j7XoP0mvSUOkL7hzVTe4q.N62.275BjZbNiVZWU.z2', 0),
(8, 'nbhjbdshv', 'kjdbijdsbf', '$2y$10$H6F1i1Nlntn3EZ6f6bPDx.LuVHKlEh3Tuvbp1ZdxEjQjKCrp2xAVa', 0),
(9, 'Maulik Vamja', 'maulik', '$2y$10$czHDr0pW9tVlst3Q9WbrwelzK4zP9NNdoUYsISjqv0kqo7gV71b5u', 0),
(10, 's', 'aedasd', '$2y$10$P/wUxiXGkHWlNHqy8Utxc.3WnmvB1mx5jgZ6I0pvrr2SmoId9GIzC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
