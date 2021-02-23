-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 23, 2021 at 06:39 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `decode-news`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `is-admin` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` text,
  `is-confirmed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `first`, `last`, `is-admin`, `avatar`, `is-confirmed`) VALUES
(1, '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1232@ad.asd', '123', '123', 0, NULL, 0),
(2, '1234', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'asd@asd', '123', '123', 0, NULL, 0),
(3, '12341234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1234@1234', '1234', '1234', 0, NULL, 0),
(4, 'www', 'c50267b906a652f2142cfab006e215c9f6fdc8a0', 'www@www', 'zxcv', 'qwer', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'World'),
(2, 'U.S.'),
(3, 'Technology'),
(4, 'Design\r\n'),
(5, 'Culture'),
(6, 'Business'),
(7, 'Politics\r\n'),
(8, 'Opinion\r\n'),
(9, 'Science\r\n'),
(10, 'Health\r\n'),
(11, 'Style'),
(12, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '1',
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `time`, `views`, `category_id`, `author_id`) VALUES
(1, 'First post from admin 1 1', 'First post from admin 1 1', '2021-02-06 13:55:53', 21, 1, NULL),
(3, 'Post from web', 'Post from web description', '2021-02-06 14:42:22', 12, 2, NULL),
(4, 'Test', 'test description', '2021-02-06 14:42:53', 8, 3, NULL),
(5, 'Test edit 11111', 'Test edit ', '2021-02-06 14:55:16', 12, 5, NULL),
(6, 'title test redirect', 'description test redirect', '2021-02-06 14:55:32', 5, 12, NULL),
(7, 'edit 7 element', 'edit 7 element description', '2021-02-06 14:57:13', 98, 8, NULL),
(10, 'test', 'test description', '2021-02-13 13:06:30', 0, 9, NULL),
(11, '123', '123', '2021-02-13 14:22:53', 44, 7, NULL),
(12, '123', '123', '2021-02-13 14:22:55', 1, 4, NULL),
(13, '123', '123', '2021-02-13 14:22:57', 0, 6, NULL),
(14, '123', '123', '2021-02-13 14:22:59', 7, 1, NULL),
(15, '123', '123', '2021-02-13 14:23:03', 65, 11, NULL),
(16, 'zxc', 'zxc', '2021-02-13 14:24:07', 1, 1, NULL),
(17, '1111111111 admin', '1111111111 admin', '2021-02-13 14:58:25', 0, 10, NULL),
(18, 'newPost', 'newPost', '2021-02-23 05:54:42', 0, 1, NULL),
(19, 'from author', 'from author from author', '2021-02-23 05:58:32', 0, 8, 4),
(20, 'author test', 'author test author test', '2021-02-23 05:59:59', 0, 4, 4),
(21, 'New Post from modal window user', 'New Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window user', '2021-02-23 06:21:46', 0, 7, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_cat_id` (`category_id`),
  ADD KEY `Fk_author_id` (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Fk_author_id` FOREIGN KEY (`author_id`) REFERENCES `accounts` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `Fk_cat_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
