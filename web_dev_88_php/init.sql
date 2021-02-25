-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2021 at 08:05 AM
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
(4, 'www', 'c50267b906a652f2142cfab006e215c9f6fdc8a0', 'www@www', 'zxcv', 'qwer', 0, NULL, 0),
(5, 'test', '7baba3aa145d5931f5bb6f3e03624a2a7886655e', 'test@gmail.com', 'Test User First 123', 'Test User Last', 0, 'images/profile/avatar-51614237821.jpg', 0),
(6, 'useravatar', '1161e6ffd3637b302a5cd74076283a7bd1fc20d3', 'useravatar@gmail.com', 'Jhon', 'Doe', 0, 'images/profile/avatar-1614238933.jpg', 0);

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
  `author_id` int(11) DEFAULT NULL,
  `poster` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `time`, `views`, `category_id`, `author_id`, `poster`) VALUES
(1, 'First post from admin 1 1', 'First post from admin 1 1', '2021-02-06 13:55:53', 21, 1, NULL, NULL),
(3, 'Post from web', 'Post from web description', '2021-02-06 14:42:22', 12, 2, NULL, NULL),
(4, 'Test', 'test description', '2021-02-06 14:42:53', 8, 3, NULL, NULL),
(5, 'Test edit 11111', 'Test edit ', '2021-02-06 14:55:16', 12, 5, NULL, NULL),
(6, 'title test redirect', 'description test redirect', '2021-02-06 14:55:32', 5, 12, NULL, NULL),
(7, 'edit 7 element', 'edit 7 element description', '2021-02-06 14:57:13', 98, 8, NULL, NULL),
(10, 'test', 'test description', '2021-02-13 13:06:30', 0, 9, NULL, NULL),
(11, '123', '123', '2021-02-13 14:22:53', 44, 7, NULL, NULL),
(12, '123', '123', '2021-02-13 14:22:55', 1, 4, NULL, NULL),
(13, '123', '123', '2021-02-13 14:22:57', 0, 6, NULL, NULL),
(14, '123', '123', '2021-02-13 14:22:59', 7, 1, NULL, NULL),
(15, '123', '123', '2021-02-13 14:23:03', 65, 11, NULL, NULL),
(16, 'zxc', 'zxc', '2021-02-13 14:24:07', 1, 1, NULL, NULL),
(17, '1111111111 admin', '1111111111 admin', '2021-02-13 14:58:25', 0, 10, NULL, NULL),
(18, 'newPost', 'newPost', '2021-02-23 05:54:42', 0, 1, NULL, NULL),
(19, 'from author', 'from author from author', '2021-02-23 05:58:32', 1, 8, 4, NULL),
(20, 'author test', 'author test author test', '2021-02-23 05:59:59', 8, 4, 4, NULL),
(21, 'New Post from modal window user', 'New Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window userNew Post from modal window user', '2021-02-23 06:21:46', 64, 7, 4, NULL),
(22, 'Test Post', 'Test Post Test Post', '2021-02-25 04:52:35', 5, 4, 5, NULL),
(25, 'qwe', 'qwe', '2021-02-25 07:57:02', 7, 3, 6, 'images/posts/poster-1614239822.png'),
(26, 'new post', 'new post', '2021-02-25 08:00:19', 4, 8, 6, 'images/posts/poster-1614240019.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `mark` int(11) NOT NULL DEFAULT '5',
  `post_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `content`, `mark`, `post_id`, `author_id`, `time`) VALUES
(1, '123', 'New Review', 3, 21, 5, '2021-02-25 05:38:18'),
(2, 'Test Review with Title', 'Test Review with Title Content for this testing some content Test Review with Title Content for this testing some content Test Review with Title Content for this testing some content Test Review with Title Content for this testing some content Test Review with Title Content for this testing some content Test Review with Title Content for this testing some content Test Review with Title Content for this testing some content Test Review with Title Content for this testing some content Test Review with Title Content for this testing some content Test Review with Title Content for this testing some content Test Review with Title Content for this testing some content ', 5, 21, 5, '2021-02-25 05:39:59'),
(3, 'Test Ajax Save ', 'Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text Test Ajax Save Content text ', 4, 21, 5, '2021-02-25 05:40:55'),
(4, 'Test Ajax Save Empty', 'Test Ajax Save Empty Content Test Ajax Save Empty Content Test Ajax Save Empty Content Test Ajax Save Empty Content Test Ajax Save Empty Content ', 2, 21, 5, '2021-02-25 05:41:49'),
(5, 'New review test', 'New review test New review test New review test New review test New review test New review test New review test New review test ', 4, 21, 5, '2021-02-25 05:49:32'),
(6, 'New review test with page', 'New review test with page New review test with page New review test with page New review test with page New review test with page New review test with page ', 3, 21, 5, '2021-02-25 05:50:05'),
(7, 'New Review', 'New Review', 4, 22, 5, '2021-02-25 05:58:25'),
(8, 'New. ', 'New,', 4, 20, 5, '2021-02-25 06:42:23');

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_rev_account_id` (`author_id`),
  ADD KEY `Fk_rev_post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Fk_author_id` FOREIGN KEY (`author_id`) REFERENCES `accounts` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `Fk_cat_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `Fk_rev_account_id` FOREIGN KEY (`author_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_rev_post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
