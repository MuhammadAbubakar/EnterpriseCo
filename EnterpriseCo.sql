-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2019 at 05:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EnterpriseCo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` longtext NOT NULL,
  `password` longtext NOT NULL,
  `role` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '0d70c6cc11ee27f78d885797652eee9d', 'administrator'),
(2, 'admin2', '3f9e03a0d7508196ad935ec6f1bb9eb2', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`id`, `name`, `slug`) VALUES
(1, 'Web Design', 'web-design');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `id` int(11) NOT NULL,
  `username` mediumtext NOT NULL,
  `Comment` longtext NOT NULL,
  `PostID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ConfirmCode`
--

CREATE TABLE `ConfirmCode` (
  `id` int(11) NOT NULL,
  `username` longtext NOT NULL,
  `code` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ConfirmCode`
--

INSERT INTO `ConfirmCode` (`id`, `username`, `code`) VALUES
(18, 'admin', 'b778497b0f7ababbd8ef78a4f0afa431'),
(19, 'faris', '76b4b3c5a80bbfa056dda79a637ed94a'),
(20, 'admin', '2539469cb876aed486b9815a154e2353'),
(21, 'admin', '51d9d1b7a893b2b4111473c2ce3d0bb7'),
(22, 'admin', '1e4b569e4d2b466360aa8033802cdeae'),
(23, 'admin', 'be7ab4c77416c5f42d4ace6d9e481d29'),
(24, 'admin', '1113c0bfd513d5402fb86f2eae19bffa'),
(25, 'admin', '67d7960970c2ef17d0023bf6083288a1'),
(26, 'admin', 'f1837bc48938e5710ca24aa72a8dc1bb'),
(27, 'admin', '70492ebc9a6b252ae39ee00c227f0394'),
(28, 'admin', 'c0b8068fd0c375c1f4be3a2b200590c4'),
(29, 'admin', 'cf58f231e1220c3f9fc615402f48a8d8'),
(30, 'admmin', '17232bf9c0400a4f9245a72700a5dac1'),
(31, 'blackhacker', '0917463091b33b39306882f0dd4cb12e'),
(32, 'admin', '89aa7a556696267b2de06a64e8e18ae0');

-- --------------------------------------------------------

--
-- Table structure for table `Likes`
--

CREATE TABLE `Likes` (
  `id` int(11) NOT NULL,
  `commentsID` int(11) NOT NULL,
  `postID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `id` int(11) NOT NULL,
  `FullName` mediumtext NOT NULL,
  `Email` longtext NOT NULL,
  `OrderNum` longtext NOT NULL,
  `Subject` mediumtext NOT NULL,
  `Message` longtext NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`id`, `FullName`, `Email`, `OrderNum`, `Subject`, `Message`, `Status`) VALUES
(1, 'Faris Mohammed', 'farisksa79@gmail.com', '9d87df0314b9f99065b9cf8e37f9b276', 'New Website', 'New Order', 'Open'),
(2, 'Faris Mohammed', 'farisksa79@gmail.com', '200b9ed445879ba21ed2bfde2ad7da64', 'New Website', 'طلب جديد', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Title` mediumtext NOT NULL,
  `Post` longtext NOT NULL,
  `Post_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Settings`
--

CREATE TABLE `Settings` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `URL` text NOT NULL,
  `Description` longtext NOT NULL,
  `FavIcon` longtext NOT NULL,
  `websiteEmail` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Settings`
--

INSERT INTO `Settings` (`id`, `Title`, `URL`, `Description`, `FavIcon`, `websiteEmail`) VALUES
(1, 'My Website 2', 'https://www.thunderhost.xyz/en/', 'test test', 'http://localhost/mysite/EnterpriseCo/src/img/Monster-icon.png', 'farisksa79@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `role` text NOT NULL,
  `avatar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `avatar`) VALUES
(1, 'blackhacker', '7d77e825b80cff62a72e680c1c81424f', 'farisksa79@gmail.com', 'user', ''),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'faris@faris.ooo', 'administrator', 'https://www.dev-point.com/vb/data/avatars/l/116/116329.jpg?1526341128');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ConfirmCode`
--
ALTER TABLE `ConfirmCode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Likes`
--
ALTER TABLE `Likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Settings`
--
ALTER TABLE `Settings`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ConfirmCode`
--
ALTER TABLE `ConfirmCode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `Likes`
--
ALTER TABLE `Likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Settings`
--
ALTER TABLE `Settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
