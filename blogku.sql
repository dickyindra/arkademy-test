-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 11:44 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogku`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `comment` longtext NOT NULL,
  `postId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `postId`) VALUES
(1, 'bonbin mana?', 1),
(2, 'serius?', 1),
(3, 'ah masa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(8) NOT NULL,
  `title` varchar(75) NOT NULL,
  `content` longtext NOT NULL,
  `createdBy` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `createdBy`) VALUES
(1, 'wanita itu diserang kadal saat mengunjungi kebun binatang', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magnam non quae, quasi et, fugit earum, nobis aspernatur doloribus autem tempore, vero dolorem. Officia, rem inventore libero nisi ullam nostrum!</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
(1, 'Hesa Suryana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postId` (`postId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `createdBy` (`createdBy`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`postId`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`createdBy`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`createdBy`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
