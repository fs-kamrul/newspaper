-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2015 at 05:09 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newspaper`
--
/*CREATE DATABASE IF NOT EXISTS `newspaper` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `newspaper`;
*/
-- --------------------------------------------------------

--
-- Table structure for table `catagori`
--

CREATE TABLE IF NOT EXISTS `catagori` (
  `catagoriname` text NOT NULL,
  `catagoriid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`catagoriid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `catagori`
--

INSERT INTO `catagori` (`catagoriname`, `catagoriid`) VALUES
('Sports', 1),
('International', 3),
('Opinion', 4),
('Economy', 5),
('Entertainment', 6),
('Science & Tech', 7),
('Lifestyle', 8);

-- --------------------------------------------------------

--
-- Table structure for table `my`
--

CREATE TABLE IF NOT EXISTS `my` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `contain` text CHARACTER SET utf8 NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `my`
--

INSERT INTO `my` (`id`, `title`, `contain`, `modified`, `image`) VALUES
(1, 'Kolkata start with win over Mumbai', 'rgaethaetgergar', '2014-04-17 02:59:13', '534ec91209678-Pepsi-IPL-logo.png'),
(2, 'sfge', 'getgb', '2014-04-17 02:59:45', ''),
(3, 'Kolkata start with win over Mumbai', 'Kolkata Knight Riders beat Mumbai Indians by 41 runs in the opening match of IPL 7 on Wednesday.\r\n\r\nKolkata scored 163 for 5 but Mumbai Indians failed to hit the winning score staying at 122 losing 7 wickets.\r\n\r\nKolkata gripped a big win over defending champions Mumbai. The biggest difference was the impact made by the teams overseas players: Lasith Malinga was the only one who delivered for Mumbai, but for Kolkata Jacques Kallis set up the innings with a 72, Morne Morkel squeezed the chase with a burst of 2-0-2-0 at the start of the innings, and Sunil Narine scalped four as became the quickest bowler to 50 wickets in the tournament, reports ESPN Cricket.', '2014-04-17 03:01:17', '534ec91209678-Pepsi-IPL-logo.png'),
(5, 'Mini-sub ends full mission in MH370 jet hunt', 'The statement gave no other detail about the next dive or the technical issues of the previous forays.\r\n\r\nBefore the device was put in the water for the third time, data was downloaded from the vehicle while on the deck of the Australian vessel Ocean Shield, which has led the search for the Malaysia Airlines Boeing 777 that vanished on March 8 with 239 people aboard.', '2014-04-17 04:28:25', '534f50b50a300-MH370.jpg'),
(6, 'itiable health service in Barisal division', 'A total of 67% posts of government medical services in different districts, upazilas and unions of Barisal division are vacant now.\r\n\r\nBarisal divisional health office officer said the percentage might be higher because of deputation postings and other reasons. That means the condition is worse than it is referred in the documents.\r\n\r\nSome doctors, who are left only in documents, live in district towns.\r\n\r\nThe image of the medical service in upazila level can be found in a report published in Prothom Alo. At Amtali upazila of Barguna only six doctors are working now, whereas there are 39 posts for doctors in the upazila.\r\n\r\nSimilarly at Bhandaria upazila of Pirojpur 11 posts of doctors are empty among 15 posts.  At Mirjapur upazila of Patuakhali only 3 doctors are appointed against 21 posts.\r\n\r\nThis situation continues for years. If there were active medical or health administration, then the situation would not be so pitiable.\r\nThe information of lack of doctors against requisite posts, leaving of the work place after appointment, sending on deputation in Dhaka or big cities are only known by district health office.\r\n\r\nThe government health service system is going through such disarray without any accountability. \r\n\r\nIs the health ministry aware of this? Can they do anything?', '2014-04-17 04:30:35', '534e54b341cd1-agailjhara-uhfpo.dghs.gov.bd.jpg'),
(7, 'United Airways to fly Dhaka-Madinah-Dhaka route', 'United Airways plans to start its operation on a new route, Dhaka-Madinah-Dhaka, from June next.\r\n\r\nThis will be the first flight operation on this route from Dhaka.\r\n\r\nThe flight, scheduled be operated two days each week, will leave Dhaka on Friday and Sunday at 5:50pm while it will leave Madinah on Saturday and Monday at 12:45am (Madinah Time).\r\n\r\nThe Saudi Arabian Civil Aviation Authority has already given permission to United Airways for operating flights on the route.\r\n\r\nThe fare for the route has been fixed at Tk 33,111 (one way) and Tk 56,579 (return fare). All taxes and surcharges are included in the fare, says a press release.\r\n\r\nUnited Airways, which is the only capital market listed airliner of the country, has also plans to start operation on Riyadh, Dammam, Abu Dhabi and Karachi routes.\r\nThe airliner is going to operate on Dhaka-Doha-Dhaka route from 14 May.\r\n\r\nCurrently, the airliner has one Dash-8 100, three ATR-72s, five MD-83s and two Airbus-310s. ', '2014-04-17 04:32:21', '534e6cfe15f82-5018184919_36381cc2f7.jpg'),
(8, 'Ranbir and Katrina to live together', 'As per report, Ranbir Kapoor is desperately hunting for a new residence so that he can move in with his ladylove. Ranbir is not planning to move out of Krishna Raj where he was staying with his parents Neetu and Rishi Kapoor to lead an individual life with Kat.\r\n\r\nBollywood Mantra referred to Mid-Day quoting a source saying, "Katrina has been wanting to buy a house for quite some time now and now that she is in a steady relationship with Ranbir Kapoor, they have decided to look for a place of their own."\r\n\r\nA close source to the actor says, Ranbir is looking for a big apartment which should be located in Bandra and Juhu.\r\n\r\nEver since they started dating, Katrina very often visits Krishna Raj to spend quality time with the actor but it is heard that Rishi Kapoor is not too happy with Katâ€™s frequent visit to their residence.\r\n\r\nSince his father doesnt approve of Katrina coming to their house so regularly. So the Kapoor boy thought it would be best for him to find a new place so that everyoneâ€™s privacy should be respected, said an insider of Kapoor family.', '2014-04-17 04:36:54', '534eb38f54c5b-Ranbir-Katrina.jpg'),
(9, 'US Airways apologises for porn tweet', 'US Airways has apologised after an explicit porn tweet has been sent from its official Twitter account in response to a customers complaint, reports BBC.\r\n\r\nThe image featuring a naked and a toy plane was originally sent to the companys account from another tweet.\r\n\r\nIt was then attached to a customers tweet, in which she expressed her frustration over flight delay.\r\n\r\nOnce the mistake was realised about one hour later, the authorities deleted the tweet but not before it was retweeted hundreds of time.\r\n\r\nIn a statement, the apology from the official said that it was trying to flag the content as inappropriate but instead included it in another message.\r\n\r\nThe airline said it regretted its untoward error and is reviewing its processes no', '2014-04-17 04:38:25', '534e55ef72396-za--porn-tweet.jpg'),
(10, 'He is in love with you: mark his signs', 'You might be waiting for a long time to be proposed by the guy who you have a crush on and you know for sure that he, in his turn, likes you too. He, however, seems like way introvert to express himself thus making you sweetly upset.\r\n\r\nPut some smile on your face, SeÃ±orita, as there is a solution to your problems. All you need to do is read some signs', '2014-04-17 04:39:33', '534e93b82d484-He-Truly-Loves-Me-2.jpg'),
(11, 'assssssss', 'dewfrvhbytmyk,d\r\ncghghgdn\r\ngngnbg\r\n', '2014-04-17 04:47:51', '534eb9ca3e426-Untitled-55.jpg'),
(12, 'ghfjhhsdhg', 'tfty\r\nyt\r\ndy\r\nd\r\nfyf\r\n\r\njgh', '2014-04-17 05:01:20', '534ec91209678-Pepsi-IPL-logo.png'),
(13, '7t', '77yuf7tf\r\nhbbihouh\r\nhiug\r\nuib\r\n', '2014-04-17 05:06:46', '534ef16222014-Untitled-18.jpg'),
(14, 'anik', 'mmbmbty', '2014-04-17 05:14:13', '534e54b341cd1-agailjhara-uhfpo.dghs.gov.bd.jpg'),
(15, 'a', 'yd6trdrt', '2014-04-17 05:27:05', '534e55ef72396-za--porn-tweet.jpg'),
(16, 'fggfh', 'rthtnj', '2014-04-17 05:49:34', ''),
(17, 'ert', 'fgdgdg', '2014-04-17 05:59:49', '534d3a7605f3b-tofail.jpg'),
(18, 'errryy', 'drhytj\r\nuk\r\nk,y\r\niug', '2014-04-17 06:09:32', '534ec02ad1e24-education-minister.jpg'),
(19, 'dxtdc', 'tftvtv', '2014-04-17 06:13:42', '534e55ef72396-za--porn-tweet.jpg'),
(20, 'tu', 'dghyju', '2014-04-17 06:19:46', ''),
(21, 'weder', 'ffftftrfytguyuyuy', '2014-04-17 06:25:28', '534e55ef72396-za--porn-tweet.jpg'),
(22, 'rum', 'frtftrgytu8yh6tf5r6gy7', '2014-04-17 06:30:21', '534e6cfe15f82-5018184919_36381cc2f7.jpg'),
(23, 'fsfd', 'grwgrws', '2014-04-17 06:37:55', '534ebe08afb2b-Untitled-9.jpg'),
(24, 'My name is soma', '76er5bb r utryuy 6ruy6', '2014-04-17 06:57:28', '534e93b82d484-He-Truly-Loves-Me-2.jpg'),
(25, 'I love mina', 'yr yudy ty', '2014-04-17 07:00:04', '534eb38f54c5b-Ranbir-Katrina.jpg'),
(27, 'The fare for the route has been ', 'United Airways plans to start its operation on a new route, Dhaka-Madinah-Dhaka, from June next. This will be the first flight operation on this route from Dhaka. The flight, scheduled be operated two days each week, will leave Dhaka on Friday and Sunday at 5:50pm while it will leave Madinah on Saturday and Monday at 12:45am (Madinah Time). The Saudi Arabian Civil Aviation Authority has already given permission to United Airways for operating flights on the route. The fare for the route has been fixed at Tk 33,111 (one way) and Tk 56,579 (return fare). All taxes and surcharges are included in the fare, says a press release. United Airways, which is the only capital market listed airliner of the country, has also plans to start operation on Riyadh, Dammam, Abu Dhabi and Karachi routes. The airliner is going to operate on Dhaka-Doha-Dhaka route from 14 May. Currently, the airliner has one Dash-8 100, three ATR-72s, five MD-83s and two Airbus-310s.', '2014-04-22 08:17:18', 'download (2).jpg'),
(28, 'to United Airwa', 'United Airways plans to start its operation on a new route, Dhaka-Madinah-Dhaka, from June next. This will be the first flight operation on this route from Dhaka. The flight, scheduled be operated two days each week, will leave Dhaka on Friday and Sunday at 5:50pm while it will leave Madinah on Saturday and Monday at 12:45am (Madinah Time). The Saudi Arabian Civil Aviation Authority has already given permission to United Airways for operating flights on the route. The fare for the route has been fixed at Tk 33,111 (one way) and Tk 56,579 (return fare). All taxes and surcharges are included in the fare, says a press release. United Airways, which is the only capital market listed airliner of the country, has also plans to start operation on Riyadh, Dammam, Abu Dhabi and Karachi routes. The airliner is going to operate on Dhaka-Doha-Dhaka route from 14 May. Currently, the airliner has one Dash-8 100, three ATR-72s, five MD-83s and two Airbus-310s.', '2014-04-22 08:18:22', 'download (19).jpg'),
(29, 'susme', 'susmi', '2014-08-26 20:46:18', '');

-- --------------------------------------------------------

--
-- Table structure for table `reala`
--

CREATE TABLE IF NOT EXISTS `reala` (
  `cid` int(11) NOT NULL,
  `realid` int(11) NOT NULL AUTO_INCREMENT,
  `realtitle` text NOT NULL,
  PRIMARY KEY (`realid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `reala`
--

INSERT INTO `reala` (`cid`, `realid`, `realtitle`) VALUES
(3, 1, 'Kolkata start with win over Mumbai'),
(1, 2, 'sfge'),
(1, 3, 'Kolkata start with win over Mumbai'),
(1, 4, 'Kolkata start with win over Mumbai'),
(2, 5, 'à¦°à¦¿à¦œà¦“à§Ÿà¦¾à¦¨à¦¾à¦° à¦¸à§à¦¬à¦¾à¦®à§€à¦•à§‡ à¦¦à¦¿à¦¨à¦¦à§à¦ªà§à¦°à§‡ à¦…à¦ªà¦¹à¦°à¦£'),
(3, 6, 'Mini-sub ends full mission in MH370 jet hunt'),
(3, 7, 'Mini-sub ends full mission in MH370 jet hunt'),
(3, 8, 'Mini-sub ends full mission in MH370 jet hunt'),
(4, 9, 'itiable health service in Barisal division'),
(5, 10, 'United Airways to fly Dhaka-Madinah-Dhaka route'),
(5, 11, 'Foreigners satisfied with factory compliance: Tofail'),
(6, 12, 'Ranbir and Katrina to "live together"'),
(7, 13, 'US Airways apologises for porn tweet'),
(8, 14, 'He is in love with you: mark his signs'),
(9, 15, 'assssssss'),
(1, 16, 'ghfjhhsdhg'),
(10, 17, 'ghfjhhsdhg'),
(1, 18, '7t'),
(6, 20, 'anik'),
(4, 23, 'ert'),
(1, 24, 'errryy'),
(6, 25, 'errryy'),
(3, 27, 'tu'),
(1, 28, 'weder'),
(15, 29, 'rum'),
(14, 30, 'fsfd'),
(15, 31, 'fsfd'),
(6, 32, 'My name is soma'),
(3, 33, 'I love mina'),
(6, 34, 'I love mina'),
(9, 35, 'à¦•à¦¾à¦°à¦–à¦¾à¦¨à¦¾ à¦¸à¦‚à¦¸à§à¦•à¦¾à¦°à¦•à¦¾à¦²à§‡ à¦¶à§à¦°à¦®à¦¿à¦•à¦¦à§‡à¦° à¦…à¦°à§à¦§à§‡à¦• à¦¬à§‡à¦¤à¦¨ à¦¦à§‡à¦¬à§‡ à¦…à§à¦¯à¦¾à¦²à¦¾à§Ÿà§‡à¦¨à§à¦¸'),
(1, 36, 'The fare for the route has been '),
(8, 37, 'The fare for the route has been '),
(5, 38, 'to United Airwa'),
(4, 39, 'susme'),
(8, 40, 'susme');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `email`) VALUES
(1, 'anik', '6dfd18d9efa24966a1ee39e5f7c478991a4bfe89b3dbb6f0fb3590135b28fb4f', '2a0d4b902f8cdfe6', 'anik825@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
