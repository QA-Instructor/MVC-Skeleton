-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2019 at 05:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BlogDatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tagID` int(2) NOT NULL,
  `content` longtext NOT NULL,
  `date` date NOT NULL,
  `postImage` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `title`, `tagID`, `content`, `date`, `postImage`) VALUES
(1, 'The Wonderlab at the Science Museum', 1, 'Description:\r\nIt\'s always rather fabulous when something with wonder in the title lives up to its name. The Wonderlab at the Science Museum is truly excellent. It is an immersive educational experience, with exhibits and experiments on space, force, chemistry, and more, demonstrating how science and maths shape our everyday lives.\r\n\r\nThe lab is on the third floor – take the lifts or stairs immediately ahead of you as you enter the museum and then follow the corridor along to the ticket booth. For parents based around town, I would recommend the ticket that allows unlimited re-entry for a year as it\'s good value at £39 for a family of 4 (kids under 4 go free). The Wonderlab itself is pretty extensive, with maybe 50 different exhibits overall which are engaging for all ages – from toddlers to teens, as they can be appreciated on various levels. We spent around two hours in the lab itself, which included a visit to one of the science shows that run throughout the day in the auditorium at the back.\r\n\r\nWhen we arrived at around 10am the lab was empty, but by 11.30am it was mayhem. However, we still didn\'t have to wait long for any of the activities, and just a matter of minutes for some! There were plenty of knowledgeable staff spread around who were keen to explain some of the experiments and were on hand to man the most popular areas. Our 2.5-year-old absolutely loved the Wonderlab. So many stations to run between and interact with. We went 3 weeks ago and it was a great day out. The basement bit was fun too. Overall it was a big hit with the whole family – the Wonderlab gets a massive thumbs up, it’s not to be missed!\r\n\r\nIn The Know:\r\n    • Babies and young kids can be given noise-reducing headphones for the shows in the auditorium - just ask when you arrive.  \r\n    • There is a buggy park within the auditorium for use when you are watching a show and buggies are fine throughout the rest of the lab. \r\n    • For a few pounds extra you can buy a ticket that allows unlimited re-entry for the year so you don\'t need to rush around and do everything at once. \r\n    • If you arrive early, head to the slides and pulleys at the back on the left, these tend to have the longest queues when the lab gets busier. \r\n    • On Sundays and Bank Holidays, you can find parking on Kensington Road, but be sure to arrive in the morning as by the afternoon the spaces may be full. \r\n    • There is a picnic area by the Wonderlab and an ice cream parlour/cafe, and another science museum cafe nearby on the second floor serves sandwiches and coffee/cake. There are plenty of restaurants a short walk away at the bottom of Exhibition road. Comptoir Libanais has a good kids\' menu but there can be a queue, and Honest Burger is just around the corner.  \r\n    • Opening times and dates are subject to change – please call the venue or check the website for more details before setting off.', '2019-04-17', 'TheWonderlab.jpg'),
(2, 'Greenwich', 1, 'Description: \r\nHave you been looking for an outing that works for the whole family, from babies to teenagers? If so then Greenwich is the place for you! From history to seafaring, eating out, park life and play areas this place has it all.\r\n\r\nWe started at the Royal Naval College - a series of beautiful Oxbridge-style buildings adjacent to the Thames - for lovely views, a run around for the kids and a good vantage point to see the boats and river bank (or the \'beach\' as my city-dwelling kids termed it!) \r\nFrom there it\'s a short stroll over to the wonderful Cutty Sark, beautifully restored since its maiden voyage in the nineteenth century. There are three levels to explore with a mix of displays and interactive exhibits for all ages to enjoy. On the top deck you can visit the cabins and communal areas and even have a go at being Captain. At weekends and on bank holidays there are often kids activities and we enjoyed a storytelling session from the \'mother\' of one of the crew members in period dress - I would suggest this session would work best for school age + kids.\r\nWe then moved on via the bustling High Street which has a whole host of family-friendly eateries, to the Maritime Museum and Greenwich Park. The museum is beautifully light and airy, and those who are interested in life at sea will be in their element perusing the exhibits. Those who prefer a bit of rough and tumble will be in their element at the Ahoy! play zone directly to the left as you enter. This play area is fantastic for little ones - I would suggest up to about 7 years old (with a separate section for babies and toddlers) and had some really imaginative areas to explore from a play fishmongers shop to a cargo loading area for a ship and a shipbuilders yard.\r\nIf you have a family with kids at either end of the age spectrum this would be a good time to head up to the Observatory with older children, around a ten minute walk uphill from the back of the museum through the gorgeous Greenwich park. If not do as we did and head to the cafe for some much needed afternoon tea!\r\nIn the Know:\r\n    • Is there parking?\r\nYes. The car park at the Maritime Museum is a hidden gem in that it brings you to the centre of all the action and stops the endless trawl for a parking space. The catch - it is only open on Sundays and bank holidays and fills up by 10.30/11am.\r\n    • Is there buggy and wheelchair access?\r\nYou can visit Cutty Sark with a buggy, a lift is cleverly situated to get to each floor although there is only one!\r\nThere is a buggy park at the National Maritime Museum and it is buggy friendly.\r\n    • Price\r\nUnder 5s are free to enter Cutty Sark, a single adult ticket is £13.50, over 5 is £7.00 and a family ticket starts from £24. You can buy an all-in-one ticket to include access to the Royal Observatory too for a discount price or a ticket to include a boat trip on the Thames clipper (the latter online).\r\nThe National Maritime Museum is free to enter, including the fantastic play area.\r\n    • Where to eat\r\nThe basement floor of the Cutty Sark features a well appointed cafe where kids can have a sandwich or you can enjoy a family picnic. There is also loads of space for a run around in the basement and changing facilities. \r\nThe cafe has a better range of lunch options than the Cutty Sark cafe including a pick n mix sandwich box element for kids, salads and some hot food and chips.\r\n    • Standout features\r\nDon\'t miss the rocking benches on the \'tween deck at Cutty Sark and the interactive sailing map.\r\nThere are some water features outside by the Maritime Museum cafe that the kids loved.\r\nBring a ball or some games and a picnic mat to enjoy Greenwich park behind the museum.\r\n    • When to go\r\nAt peak times there is a short queue for the Ahoy! play area - try to visit either shortly after opening or towards the end of the day to avoid the rush.\r\n    • Opening times and dates are subject to change – please call the venue or check the website for more details before setting off.', '2019-04-16', 'Greenwich.jpg'),
(3, 'The Postal Museum', 1, 'Description:\r\n\r\nToday we went to the Postal Museum with the family. We booked tickets online and went for the 10.25am Mail Rail (opposite the Postal Museum entrance). You can park right on the road outside on Sundays, but only if you get there early - all the parking was gone by the time we left. The Mail Rail was a fun trip and a fun interactive exhibition to explore.\r\n\r\nTop tip: get a Kid\'s Trail for little ones at the desk - they can wander around spotting the Jolly Postman and ticking off things/doing activities, then they get a sticker at the end. \r\nThe Sorted! play area in the Mail Rail building is an extra £5 - good for children up to aged five I would say - it\'s quite small. It\'s good to go after you’ve been in the Postal Museum so they can pretend to be the posties they’ve just seen.\r\nThe cafe is small - OK for coffee and snacks (run by Benugo I think) but there isn\'t much seating space. You are less than a 10-minute walk from Coram\'s Fields to give the kids a run around and there are lots of places to eat at the Brunswick Centre. Also at the top of the road you have a big Belgo, or head to Granary Square at Kings Cross (where you have fountains, loads of eating options, the skip garden and loads more to extend the day out).\r\n\r\nIn The Know:\r\n    • We recommend 2-3 hours to visit The Postal Museum Exhibition, Mail Rail Exhibition and the Mail Rail ride (which lasts approximately 20 minutes).\r\n    • Book tickets online - choices range from all exhibits and the Mail Rail or just the exhibits. \r\n    • Gender-neutral toilets, including baby-changing facilities, are located on the ground floor of The Postal Museum and Mail Rail, and the lower ground floor of Mail Rail. \r\n    • No buggies allowed on the lower ground floor of Mail Rail. Buggy parking is provided on the ground floor alongside lockers for storage. \r\n    • Lockers are available; the maximum approximate size is 60×29.5×27.5cm. A refundable £1/€1 coin is required to operate the locker.\r\n    • The Counter Cafe serves up hot drinks and freshly-prepared food, including healthy meals for the kids. There is a refreshment trolley in the Sorted play area. \r\n    • Or take a picnic and enjoy it at St Andrew\'s Gardens, which are a three-minute walk. \r\n    • Opening times and dates are subject to change – please call the venue or check the website for more details before setting off.', '2019-04-15', 'ThePostalMuseum.jpg'),
(4, 'Up at the O2', 1, 'Description:\r\nI had a really amazing afternoon with my 12 and 13 year old when I took them to climb the O2. I think this is one of the most unique and fun experiences in London!\r\n\r\nI must admit that I started off being super grumpy about doing this and totally not in the mood. They give you climbing gear and I was totally cynical and thought they were trying to make something better than it actually is. BUT it is a truly exciting climb and really challenging in places especially if it’s a bit windy. \r\nEach group gets a guide who is really encouraging, especially if like me you can’t use the equipment properly even after a million demonstrations - much to the embarrassment of my kids! It was really cold but they put you in a gore tex jumpsuit that you put on over your clothes so it was definitely bearable. However I would advise wearing lots of layers.\r\nThis is not cheap but I would really recommend. My boys have just called me a ledge (whatever that means)! The whole process takes 90 minutes which is relatively short for the price but I would say it is really really worth it.\r\nIn The Know:\r\n\r\n    • When to go:\r\nAdvanced booking is essential. Visit the website for climb times and dates, as they vary depending on the time of year. \r\n    • Duration:\r\nThe experience lasts around an hour and 30 minutes including a safety briefing at the beginning. \r\n    • How to get there:\r\nThe nearest Tube station is North Greenwich, a five-minute walk away. You could also get the cable car from Royal Docks to Greenwich Peninsula. There’s plenty of on-site parking, too, which you can book and pay for online in advance. \r\n    • What to bring:\r\nYou’ll be kitted out with a climb suit, boots and harness; but wear comfy sportswear as you’ll need to be able to move freely. \r\n    • Where to eat:\r\nThere are loads of family friendly eateries inside the O2 if you’re peckish after your adventure. There’s a Zizzi’s, Las Iguanas and a Gourmet Burger Kitchen – all have great kids’ menus.  \r\n    • Who is it suitable for?\r\nKids must be at least 10 years old and 1.2 metres tall to scale the O2. You must not weigh more than 21 stone; have a waist measurement more than 125cm; or an upper thigh measurement of more than 75cm. \r\nThere must be one adult to every two children. \r\nThe climb is accessible for people who are disabled. There are accessible climbs for wheelchairs too. Visit the website for more info. \r\n    • Opening times and dates are subject to change – please call the venue or check the website for more details before setting off.', '2019-04-14', 'TheO2');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tagID` int(2) NOT NULL,
  `tagName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tagID`, `tagName`) VALUES
(1, 'family'),
(2, 'Christmas'),
(3, 'Easter'),
(4, 'outdoors'),
(5, 'indoors'),
(6, 'cheap'),
(7, 'London');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(5) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phoneNumber` bigint(11) NOT NULL,
  `userTypeID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstName`, `lastName`, `email`, `username`, `password`, `phoneNumber`, `userTypeID`) VALUES
(1, 'Blog', 'Admin', 'blogadmin@sky.com', 'BlogAdmin', 'Mu89KiJu', 2147483647, 1),
(2, 'Steven', 'Spielberg', 'spielberg@gmail.com', 'spielbergs', 'LoMJKhn', 2147483647, 2),
(3, 'Zoe', 'Saldana', 'zoster@hotmail.com', 'zoster', 'L90PLknM', 2147483647, 2),
(4, 'James', 'Abrahms', 'james.abrahms@gmail.com', 'jj101', 'Sh78SnfL', 2147483647, 2),
(5, 'Karen', 'Gillan', 'k.gillan@hotmail.com', 'KGill', 'Hbd12hNN', 2147483647, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `postID` int(11) DEFAULT NULL,
  `userID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`postID`, `userID`) VALUES
(1, 2),
(2, 3),
(3, 4),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `userTypeID` int(2) NOT NULL,
  `userTypeName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`userTypeID`, `userTypeName`) VALUES
(1, 'Administrator'),
(2, 'Blogger'),
(3, 'Subscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `tagID` (`tagID`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tagID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `userTypeID` (`userTypeID`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD KEY `postID` (`postID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`userTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tagID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `userTypeID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`tagID`) REFERENCES `tag` (`tagID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userTypeID`) REFERENCES `user_type` (`userTypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
