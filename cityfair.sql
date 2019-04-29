-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 08:16 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cityfair`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `tickecount` varchar(300) NOT NULL,
  `event_id` int(255) NOT NULL,
  `users_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Culture Events', 'Public Events'),
(2, 'Education Events', 'All types of workshop and technical event where student can learn more and more'),
(7, 'Musical Events', 'Concerts, Dance Party, Celebration Party'),
(8, 'Festive Events', 'Festivals Celebrations.'),
(10, 'Religious Events', 'Holy Programs of All Religions'),
(11, 'Corporate Events', 'Business Schedules, Business Related Events');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `datetime` datetime NOT NULL,
  `venue` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `organize` varchar(150) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `datetime`, `venue`, `image`, `price`, `organize`, `category_id`) VALUES
(2, 'Happy Street', 'Every Sunday ,Event for Youngest Citizen who loved to more enjoy and fun. Kindly contact on :  +91 845 458 4852', '2019-06-20 07:00:00', 'River Front, Elise bridge', '155162638114768416795c7bf08d4fae0.jpg', '0', 'TIMES OF INDIA', 1),
(4, 'Entrepreneurs Mindeset ', 'Start Up Related Guidance From Top Business Leaders For Build Your Own Empire. For More Information Kindly \r\nContact On: 9998469888', '2019-05-15 17:00:00', 'Tagor Hall, Ahmedabad ', '155488294816756571005cada184e5b79.jpg', 'Rs.300/-', 'National Institute of Business & Management', 11),
(5, 'Book Fair', 'Book Gallery From The Best Writers From All Around The World. ', '2019-05-20 11:00:00', 'Riverfront, Ahmedabad', '1554883361645086715cada321a3cbb.jpg', 'FREE', 'Institute of Arts', 2),
(6, 'Arijit Singh Live in Concert', 'Arijit Singh Will Be Performed Live On The Stage With His Music Team. Book Hurry Up To Catch One of The Most Lovable Singer Live!', '2019-06-02 21:00:00', 'Sardar Patel Stadium, Ahmedabad', '155488782812493863815cadb49464068.jpg', 'Rs.1000/-', 'Red FM 93.5', 7),
(7, 'Kite Festival', 'Enjoy The Kite Show With The Persons From Around All Over The World. Book Hurry Up To See The Varieties of Kites From All Over The World. For More Information Kindly \r\nContact On: +91 8886622745', '2020-01-12 10:00:00', 'Riverfront, Ahmedabad', '155488901514764175535cadb9377d181.jpg', 'FREE', 'Gujarat Tourism', 8),
(8, 'Holi Celebration', 'Come To Enjoy The Festival of Colors With The Music and Food. Make Your Holi Memorable With Friends & Family.', '2019-03-15 10:00:00', 'Rajpath Clud, Ahmedabad', '155488942110598038225cadbacdf3c4f.jpg', 'Rs.500/-', 'Red Chilli Events', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(5, 'Het patel', 'hets7878401023@gmail.com', 'het1234', '08401644801');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
