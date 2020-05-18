-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 08:55 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `categoryID` bigint(20) NOT NULL,
  `topic` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `commentID` bigint(20) NOT NULL,
  `postID` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publishedAt` datetime DEFAULT NULL,
  `postComment` text,
  `visitorID` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postcategory_table`
--

CREATE TABLE `postcategory_table` (
  `postID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_table`
--

CREATE TABLE `post_table` (
  `postID` bigint(20) NOT NULL,
  `blogID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publishedAt` datetime DEFAULT NULL,
  `content` text,
  `postImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registervisitor_table`
--

CREATE TABLE `registervisitor_table` (
  `visitorID` bigint(20) NOT NULL,
  `visitorName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwordHASH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `blogID` bigint(20) NOT NULL,
  `blogName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` char(1) NOT NULL,
  `registeredAt` datetime NOT NULL,
  `lastLogin` datetime DEFAULT NULL,
  `intro` tinytext,
  `aboutMe` text,
  `passwordHASH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `postID` (`postID`),
  ADD KEY `visitorID` (`visitorID`);

--
-- Indexes for table `postcategory_table`
--
ALTER TABLE `postcategory_table`
  ADD KEY `postID` (`postID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `post_table`
--
ALTER TABLE `post_table`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `blogID` (`blogID`);

--
-- Indexes for table `registervisitor_table`
--
ALTER TABLE `registervisitor_table`
  ADD PRIMARY KEY (`visitorID`);

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`blogID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `categoryID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `commentID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_table`
--
ALTER TABLE `post_table`
  MODIFY `postID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registervisitor_table`
--
ALTER TABLE `registervisitor_table`
  MODIFY `visitorID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register_table`
--
ALTER TABLE `register_table`
  MODIFY `blogID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD CONSTRAINT `comment_table_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `post_table` (`postID`),
  ADD CONSTRAINT `comment_table_ibfk_2` FOREIGN KEY (`visitorID`) REFERENCES `registervisitor_table` (`visitorID`);

--
-- Constraints for table `postcategory_table`
--
ALTER TABLE `postcategory_table`
  ADD CONSTRAINT `postcategory_table_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `post_table` (`postID`),
  ADD CONSTRAINT `postcategory_table_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `category_table` (`categoryID`);

--
-- Constraints for table `post_table`
--
ALTER TABLE `post_table`
  ADD CONSTRAINT `post_table_ibfk_1` FOREIGN KEY (`blogID`) REFERENCES `register_table` (`blogID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
