---- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 01:46 AM
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
-- Database: `pets`
--

CREATE DATABASE IF NOT EXISTS pets DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE pets;
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
  `ProfilePhoto` blob,
  `AboutMe` varchar(1000) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `blogger`
--

INSERT INTO `blogger` (`BloggerID`, `FirstName`, `LastName`, `Username`, `Email`, `Hashcode`, `DateJoined`, `ProfilePhoto`, `AboutMe`) VALUES
(1, 'Aleshia', 'Tomkiewicz', 'CatLover01', 'atomkiewicz@hotmail.com', 'axa', '2020-05-15', NULL, ''),
(2, 'teete', 'etet', 'fats', 'fatimaalahmad@googlemail.com', 'etet', '2020-05-23', NULL, 'wrwrwrwr');

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
  `BlogPostPhoto` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`BlogPostID`, `BloggerID`, `PetTypeID`, `CategoryID`, `BlogPostName`, `BlogPostSubName`, `BlogPostContent`, `BlogPostPhoto`) VALUES
(1, 1, 1, 1, 'Watson & Kiko Hit the Lake', 'Two brothers roaming this world spreading joy through every adventure', 'One thing is certain, I cant go a day without seeing these two precious faces. What a great day this was Watson and Kiko are truly enjoying exploring as seen in this photo. Having a little splash in Lake before setting out on an epic hike through the mountains. Going on an adventure is not complete without a dog, or two.', NULL),
(2, 1, 3, 2, 'Mr Pokees Love His First Trip to the Mountains', 'This little guy has caught the travel bug', 'A journey is best measured in friends rather than miles. Mr Pokee and I got to go on our first adventure the other day. We saw so many amazing things.', NULL),
(3, 1, 2, 3, 'Suki Takes a Dip', 'Adventures are better with a cat like Suki by your side', 'Many of the mountain lakes are still frozen right now, so we are heading to our cabin this weekend for some canoeing. We have such long winters here, so it’s been over 6 months since Suki was on a boat. It’s always fun seeing her reaction to being on the water after a long break!', NULL),
(4, 1, 1, 3, 'Hiking in the Norwegian Wilderness with George', 'An Irish Setter with a passion for treats and adventures', 'Most of us will agree - dogs are awesome. They are loyal, fun and loving. And that is exactly what Troja, an Irish Setter with a passion for treats and adventures, is 4 years ago George from Norway, the owner of Troja, started taking pictures during hikes using his phone. \"At first, it was mostly macro photos of plants, insects and so on,\" George told Pawsome. \"Troja was always with me on the hikes, but I never had the idea of taking photos of her until people I met during my hikes who complimented her looks. So after that I gave it a try and I enjoyed taking photos of her because it created more interaction between her and me during our hikes.\"\r\nIn November of 2014, George set up an account on Instagram to share the adventures of Troja. Now the account has close to 100k followers and loyal fans who inspire the photographer. \"My inspiration comes from the comments and private messages I get from people who tell me they have been inspired to bond more with their dogs and to be more active with them,\" George shared. \"The best thing about having this account is the interaction I can have with so many different types of people who also share the same passion for the outdoors and dogs.\"', NULL),
(8, 1, 1, 1, 'Testing', 'Testing', 'Testing', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Testing.jpeg'),
(9, 1, 2, 1, 'Cattest', 'Cattest', 'Cattest', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Cattest.jpeg'),
(10, 1, 1, 1, 'Test3', 'Test3', 'Test3', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Test3.jpeg'),
(11, 1, 3, 2, 'Test4', 'Test4', 'Test4', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Test4.jpeg'),
(12, 1, 3, 2, 'Testing5', 'Testing5', 'Testing5', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Testing5.jpeg'),
(13, 1, 3, 2, 'Testing6', 'Testing6', 'Testing6', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Testing6.jpeg'),
(14, 1, 2, 3, 'Testing7', 'Testing7', 'Testing7', 'C:/xampp/htdocs/MVC-Skeleton/views/images/Testing7.jpeg'),
(15, 1, 2, 1, 'testing8', 'testing8', 'testing8', 'C:/xampp/htdocs/MVC-Skeleton/views/images/testing8.jpeg');

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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `BlogPostID` int(11) NOT NULL,
  `Username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Comment` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `CommentTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
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
  MODIFY `BloggerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `BlogPostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT;
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
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`BlogPostID`) REFERENCES `blogpost` (`BlogPostID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
