-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 01:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogger`
--

CREATE TABLE `blogger` (
  `BloggerID` int(11) NOT NULL,
  `FirstName` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `LastName` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Hashcode` char(50) COLLATE latin1_general_ci NOT NULL,
  `DateJoined` date NOT NULL,
  `ProfilePhoto` blob DEFAULT NULL,
  `AboutMe` varchar(1000) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `blogger`
--

INSERT INTO `blogger` (`BloggerID`, `FirstName`, `LastName`, `Username`, `Email`, `Hashcode`, `DateJoined`, `ProfilePhoto`, `AboutMe`) VALUES
(1, 'Aleshia', 'Tomkiewicz', 'CatLover01', 'atomkiewicz@hotmail.com', 'axa', '2020-05-15', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `BlogPostID` int(11) NOT NULL,
  `BloggerID` int(11) NOT NULL,
  `PetTypeID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `BlogPostName` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `BlogPostSubName` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `BlogPostContent` varchar(2000) COLLATE latin1_general_ci NOT NULL,
  `BlogPostPhoto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `DatePosted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`BlogPostID`, `BloggerID`, `PetTypeID`, `CategoryID`, `BlogPostName`, `BlogPostSubName`, `BlogPostContent`, `BlogPostPhoto`, `DatePosted`) VALUES
(23, 1, 2, 2, 'Mr Meow Love His First Trip to the Mountains', 'Two brothers roaming this world spreading joy through every adventure', 'Blogpost Content: A journey is best measured in friends rather than miles. Mr Pokee and I got to go on our first adventure the other day. We saw so many amazing things.', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Mr Meow Love His First Trip to the Mountains.jpeg', '2020-05-28 00:00:00'),
(25, 1, 2, 1, 'Triki', 'hola', 'fly!', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Triki.jpeg', '2020-05-28 00:00:00'),
(26, 1, 3, 1, 'Cuty', 'dsdfa', 'small', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Cuty.jpeg', '2020-05-28 00:00:00'),
(27, 1, 2, 3, 'hola', 'Big Dino', 'fly!', 'C:/xampp/htdocs/MVC-Skeleton/views/images/hola.jpeg', '2020-05-28 00:00:00'),
(31, 1, 3, 2, 'Testing', 'testing', 'tresting', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Testing.jpeg', '2020-05-28 00:00:00'),
(33, 1, 1, 3, 'Mr Pokees Love His First Trip', 'triktrik', 'One thing is certain, I cant go a day without seeing these two precious faces. What a great day this was Watson and Kiko are truly enjoying exploring as seen in this photo. Having a little splash in Lake before setting out on an epic hike through the mountains. Going on an adventure is not complete without a dog, or two.', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Mr Pokees Love His First Trip.jpeg', '2020-05-28 00:00:00'),
(34, 1, 1, 2, 'Mr Boss', 'Mr Boss', 'Mr Boss', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Mr Boss.jpeg', '2020-05-28 00:00:00'),
(35, 1, 3, 1, 'Chilly', 'chlly', 'chl', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Chilly.jpeg', '2020-05-28 00:00:00'),
(36, 1, 2, 2, 'MwBoss', 'MwBoss', 'MwBoss', 'C:/xampp/htdocs/MVC-Skeleton/views/images/MwBoss.jpeg', '2020-05-28 00:00:00'),
(38, 1, 2, 3, 'Pooy', 'tutu', 'tata', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Pooy.jpeg', '2020-05-28 18:48:43'),
(39, 1, 1, 1, 'Something', 'S', 's', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Something.jpeg', '2020-05-28 19:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`) VALUES
(1, 'Aww'),
(2, 'LOL'),
(3, 'Wow');

-- --------------------------------------------------------

--
-- Table structure for table `commentpost`
--

CREATE TABLE `commentpost` (
  `CommentID` int(11) NOT NULL,
  `BlogPostID` int(11) NOT NULL,
  `Username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `CommentTime` datetime NOT NULL,
  `CommentContent` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `commentpost`
--

INSERT INTO `commentpost` (`CommentID`, `BlogPostID`, `Username`, `CommentTime`, `CommentContent`) VALUES
(8, 33, 'Tommy', '2020-05-10 01:55:42', 'Awesome!');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `PetTypeID` int(11) NOT NULL,
  `PetType` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`PetTypeID`, `PetType`) VALUES
(1, 'Dog'),
(2, 'Cat'),
(3, 'Hedgehog');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogger`
--
ALTER TABLE `blogger`
  ADD PRIMARY KEY (`BloggerID`);

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`BlogPostID`),
  ADD KEY `BloggerID` (`BloggerID`),
  ADD KEY `PetTypeID` (`PetTypeID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `commentpost`
--
ALTER TABLE `commentpost`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `BlogPostID` (`BlogPostID`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`PetTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogger`
--
ALTER TABLE `blogger`
  MODIFY `BloggerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `BlogPostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commentpost`
--
ALTER TABLE `commentpost`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `PetTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD CONSTRAINT `blogpost_ibfk_1` FOREIGN KEY (`BloggerID`) REFERENCES `blogger` (`BloggerID`),
  ADD CONSTRAINT `blogpost_ibfk_2` FOREIGN KEY (`PetTypeID`) REFERENCES `pet` (`PetTypeID`),
  ADD CONSTRAINT `blogpost_ibfk_3` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`);

--
-- Constraints for table `commentpost`
--
ALTER TABLE `commentpost`
  ADD CONSTRAINT `commentpost_ibfk_1` FOREIGN KEY (`BlogPostID`) REFERENCES `blogpost` (`BlogPostID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
