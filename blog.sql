-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 10:06 PM
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

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`categoryID`, `topic`) VALUES
(1, 'canyoning'),
(2, 'climbing'),
(3, 'hiking'),
(4, 'wildSwimming'),
(5, 'fellRunning'),
(6, 'kayaking'),
(7, 'cycling'),
(8, 'fishing'),
(9, 'coasteering'),
(10, 'camping'),
(11, 'family');

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

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`commentID`, `postID`, `title`, `publishedAt`, `postComment`, `visitorID`) VALUES
(1, 1, 'First Visit', '2001-02-20 00:00:00', 'Looks Exciting!', 1),
(2, 10, 'Splashdown', '0000-00-00 00:00:00', 'Took an early dip, great experience', 10),
(3, 9, '1.2.3.4.5', '0000-00-00 00:00:00', 'Caught an enourmous Carp, recommend!', 9),
(4, 2, 'What a thrill!', '0000-00-00 00:00:00', 'It looks beautiful, so exhilarating', 2),
(5, 3, 'Bumps Galore', '0000-00-00 00:00:00', 'Such an adrenaline rush…', 3),
(6, 6, 'New Heights', '0000-00-00 00:00:00', 'My first try at climbing, scary but great fun', 6),
(7, 4, 'Breathless!!!', '0000-00-00 00:00:00', 'My first attempt .. cold rush, but fun', 4),
(8, 5, '39 Steps and Counting', '0000-00-00 00:00:00', 'The lakes are full of wildlife, plenty of interest', 5),
(9, 7, 'Spectacular Views', '0000-00-00 00:00:00', 'Once at the top, its all worth it!', 7),
(10, 8, 'Down a bit…', '0000-00-00 00:00:00', 'Drizzle didnt dampen the spirits', 8),
(11, 3, 'wow!', '0000-00-00 00:00:00', 'This looks so awesome', 3),
(12, 3, 'nice!', '0000-00-00 00:00:00', 'I really enjoyed that post. Where can I find out more?', 4),
(13, 5, 'Stunning photography!', '0000-00-00 00:00:00', 'I bet the landscape is even more beautiful than your inspiring photos', 3);

-- --------------------------------------------------------

--
-- Table structure for table `postcategory_table`
--

CREATE TABLE `postcategory_table` (
  `postID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postcategory_table`
--

INSERT INTO `postcategory_table` (`postID`, `categoryID`) VALUES
(1, 10),
(2, 9),
(3, 8),
(4, 7),
(5, 6),
(6, 5),
(7, 4),
(8, 3),
(9, 2),
(10, 1);

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

--
-- Dumping data for table `post_table`
--

INSERT INTO `post_table` (`postID`, `blogID`, `categoryID`, `title`, `publishedAt`, `content`, `postImage`) VALUES
(1, 1, 10, 'First Post', '2001-01-20 00:00:00', 'blah blah blah just testing.....', NULL),
(2, 2, 9, 'Loving Life', '2008-12-19 00:00:00', NULL, NULL),
(3, 3, 8, 'Walking Wonder', '2003-04-20 00:00:00', NULL, NULL),
(4, 4, 7, 'Coastal Joy', '2004-06-20 00:00:00', NULL, NULL),
(5, 5, 6, 'Revelling in the River', '2001-01-20 00:00:00', NULL, NULL),
(6, 6, 5, 'I feel superhuman', '2003-07-20 00:00:00', NULL, NULL),
(7, 7, 4, 'Friendship faltering', '2001-01-20 00:00:00', NULL, NULL),
(8, 8, 3, 'Heaven sent sunshine', '2003-02-20 00:00:00', NULL, NULL),
(9, 9, 2, 'Rainy Sunday Afternoon', '2003-04-20 00:00:00', NULL, NULL),
(10, 10, 1, 'Swimming with fishes', '2003-11-19 00:00:00', NULL, NULL);

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

--
-- Dumping data for table `registervisitor_table`
--

INSERT INTO `registervisitor_table` (`visitorID`, `visitorName`, `email`, `passwordHASH`) VALUES
(1, 'happytraveller', 'harry@sky.com', '15648474'),
(2, 'speedfreak', 'dean13@venture.com', '75347823'),
(3, '2wheels2go', 'davybikes@wheels.co.uk', '135047172'),
(4, 'gregory', 'freddie@aol.com', '194746521'),
(5, 'walkingwithnature', 'ben89@outdoors.co.uk', '0254445870'),
(6, 'junglejane', 'janeJ@extreme.com', '314145219'),
(7, 'explorerdora', 'diane67@gout.mail', '373844568'),
(8, 'jumpingfrog', 'jasonk@outandabout.co.uk', '433543917'),
(9, 'gofish54', 'kev90@btinternet.com', '493243266'),
(10, 'seafarer', 'dantheman10@deadly.co.uk', '552942615');

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
  `phoneNumber` char(11) NOT NULL,
  `registeredAt` datetime NOT NULL,
  `lastLogin` datetime DEFAULT NULL,
  `intro` mediumtext,
  `aboutMe` text,
  `passwordHASH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`blogID`, `blogName`, `firstName`, `lastName`, `email`, `phoneNumber`, `registeredAt`, `lastLogin`, `intro`, `aboutMe`, `passwordHASH`) VALUES
(1, 'Great Escape', 'Nick', 'Bullock', 'nickbullock@climbing.com', '07891234567', '2001-01-20 00:00:00', '2001-02-20 00:00:00', 'The Greatest Escapes, places and routes to explore outside of the city.\r\n', 'Hi, I\'m Nick! A trained climber, hiker and outdoorser.', 'climbing1'),
(2, 'Vertical Life', 'Hannah', 'Sargeant', 'hannah@lovesclimbing.com', '07892712355', '2001-02-20 00:00:00', '2001-03-20 00:00:00', NULL, NULL, 'climbingforlife'),
(3, 'Wild Swimmer', 'Laura', 'Swan', 'laura@justkeepswimming.com', '07904777716', '2017-05-19 00:00:00', '2017-05-20 00:00:00', NULL, NULL, 'ilovemichaelphelps'),
(4, 'Family Hikes', 'Jo', 'May', 'jo@loveshiking.com', '07978467008', '2016-05-19 00:00:00', '2016-05-20 00:00:00', NULL, NULL, 'hikes1234'),
(5, 'The Great Outdoors', 'Aman', 'January', 'aman@lovesfellrunning.com', '07978467999', '2001-05-20 00:00:00', '2001-06-20 00:00:00', NULL, NULL, 'Htfaagit!2'),
(6, 'Mountaineering Monica', 'Monica', 'Bang', 'monica@mountain.com', '07978467999', '2001-05-20 00:00:00', '2001-06-20 00:00:00', NULL, NULL, 'TheHillsAreAlive'),
(7, 'Swiftly Sailing', 'Rachel', 'Green', 'rachel@sailingswiftly.com', '07978467101', '2001-05-20 00:00:00', '2001-06-20 00:00:00', NULL, NULL, 'WeWereOnABreak'),
(8, 'Smell something Fishy', 'Joey', 'July', 'Joey@julyfishing.com', '7978470972', '2001-08-20 00:00:00', '2001-09-20 00:00:00', NULL, NULL, 'HowYOUdoin'),
(9, 'Jumping Julie', 'Julie', 'Dooley', 'julie@loveswimming.com', '7978471963', '2001-09-20 00:00:00', '2001-10-20 00:00:00', NULL, NULL, 'Jumps12'),
(10, 'Walking and Hiking Adventures', 'Phoebe', 'August', 'phoebe@walkingorhiking.com', '7978472954', '2001-10-20 00:00:00', '2001-11-20 00:00:00', NULL, NULL, 'SmellyCat1');

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
  MODIFY `categoryID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `commentID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `post_table`
--
ALTER TABLE `post_table`
  MODIFY `postID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `registervisitor_table`
--
ALTER TABLE `registervisitor_table`
  MODIFY `visitorID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `register_table`
--
ALTER TABLE `register_table`
  MODIFY `blogID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
