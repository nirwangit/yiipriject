-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 09:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `name` varchar(17) DEFAULT NULL,
  `timezone` varchar(42) DEFAULT NULL,
  `dayOfWeek` varchar(11) DEFAULT NULL,
  `availableAt` varchar(12) DEFAULT NULL,
  `availableUntil` varchar(15) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`name`, `timezone`, `dayOfWeek`, `availableAt`, `availableUntil`, `id`) VALUES
('John Doe', '(GMT-06:00) America/North_Dakota/New_Salem', 'Monday', '09:00:00', '17:30:00', 2),
('John Doe', '(GMT-06:00) America/North_Dakota/New_Salem', 'Tuesday', '08:00:00', '16:00:00', 3),
('John Doe', '(GMT-06:00) America/North_Dakota/New_Salem', 'Thursday', '09:00:00', '16:00:00', 4),
('John Doe', '(GMT-06:00) America/North_Dakota/New_Salem', 'Friday', '07:00:00', '14:00:00', 5),
('Jane Doe', '(GMT-06:00) Central Time (US & Canada)', 'Tuesday', '08:00:00', '10:00:00', 6),
('Jane Doe', '(GMT-06:00) Central Time (US & Canada)', 'Wednesday', '11:00:00', '18:00:00', 7),
('Jane Doe', '(GMT-06:00) Central Time (US & Canada)', 'Saturday', '09:00:00', '15:00:00', 8),
('Jane Doe', '(GMT-06:00) Central Time (US & Canada)', 'Sunday', '08:00:00', '15:00:00', 9),
('Rachel Green', '(GMT-09:00) America/Yakutat', 'Monday', '08:00:00', '10:00:00', 10),
('Rachel Green', '(GMT-09:00) America/Yakutat', 'Tuesday', '11:00:00', '13:00:00', 11),
('Rachel Green', '(GMT-09:00) America/Yakutat', 'Wednesday', '08:00:00', '10:00:00', 12),
('Rachel Green', '(GMT-09:00) America/Yakutat', 'Saturday', '08:00:00', '11:00:00', 13),
('Rachel Green', '(GMT-09:00) America/Yakutat', 'Sunday', '07:00:00', '09:00:00', 14),
('Margaret Houlihan', '(GMT-06:00) Central Time (US & Canada)', 'Monday', '09:00:00', '15:00:00', 15),
('Margaret Houlihan', '(GMT-06:00) Central Time (US & Canada)', 'Tuesday', '06:00:00', '13:00:00', 16),
('Margaret Houlihan', '(GMT-06:00) Central Time (US & Canada)', 'Wednesday', '06:00:00', '11:00:00', 17),
('Margaret Houlihan', '(GMT-06:00) Central Time (US & Canada)', 'Friday', '08:00:00', '12:00:00', 18),
('Margaret Houlihan', '(GMT-06:00) Central Time (US & Canada)', 'Saturday', '09:00:00', '16:00:00', 19),
('Margaret Houlihan', '(GMT-06:00) Central Time (US & Canada)', 'Sunday', '08:00:00', '10:00:00', 20),
('Hawkeye Pierce', '(GMT-06:00) Central Time (US & Canada)', 'Thursday', '07:00:00', '14:00:00', 21),
('Hawkeye Pierce', '(GMT-06:00) Central Time (US & Canada)', 'Thursday', '15:00:00', '17:00:00', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
