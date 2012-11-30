-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2012 at 08:14 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inqlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `s_id` (`s_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inqlings`
--

CREATE TABLE IF NOT EXISTS `inqlings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `pub_rating` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `inqlings`
--

INSERT INTO `inqlings` (`id`, `body`, `url`, `date_created`, `u_id`, `rating`, `pub_rating`) VALUES
(1, 'My coffee is always too hot or too cold.', 'adsf', '2012-11-30 00:00:00', 1, 100, 7.1),
(24, 'The quality of restaurant websites is totally inconsistent and frustrating.  I can not find the information I want.  ', '/assets/images/something.jpg', '2012-12-02 07:20:44', 1, 89.4, 6.3),
(25, 'Sometimes I wake up at night and my arm has fallen asleep because it is crushed by my head and pillow.', '/assets/images/something.jpg', '2012-12-02 07:20:46', 1, 70.710678118655, 5),
(26, 'Americans, for the large part, are not very stylish.', '/assets/images/something.jpg', '2012-12-02 07:22:31', 1, 70.710678118655, 5),
(27, 'International shipping companies engage in shady accountability practices which means that unsafe products are sold as safe.', '/assets/images/something.jpg', '2012-12-02 07:22:39', 1, 34.5, 2.4),
(28, 'It is difficult to spontaneously meet people that share my interests.', '/assets/images/something.jpg', '2012-12-02 07:23:29', 1, 70.710678118655, 5.1),
(29, 'School systems are contributing to the obesity epidemic through poor nutrition.', '/assets/images/something.jpg', '2012-12-02 07:24:12', 1, 103, 7.2),
(30, 'There is way too much bad public art.  How can we improve it?', '/assets/images/something.jpg', '2012-12-02 07:25:10', 1, 70.710678118655, 5),
(31, 'Traveling is expensive and it is difficult to meet locals in such a short time frame.', '/assets/images/something.jpg', '2012-12-02 07:25:13', 1, 70.710678118655, 5),
(32, 'It is difficult to ascertain whether a Kickstarter-funded project actually delivered on its promises.', '/assets/images/something.jpg', '2012-12-02 07:26:27', 1, 56, 4),
(33, 'I am addicted to my technological devices.', '/assets/images/something.jpg', '2012-12-02 07:40:05', 1, 0, 0),
(34, 'It is increasingly difficult to justify the cost of higher education. ', '/assets/images/profile_pics/1.jpg', '2012-12-02 18:26:20', 1, 94.5, 6.7),
(35, 'Dependence on the automobile continues to prevent healthy urban environments.', '/assets/images/profile_pics/5.jpg', '2012-12-02 18:26:28', 1, 35.6, 2.5),
(36, 'High-speed rail does not seem to get traction in the US, despite the existence of proven successes in the rest of the world.', '/assets/images/profile_pics/17.jpg', '2012-12-02 18:26:38', 1, 70.710678118655, 5),
(37, 'The enforcement of marijuana laws unfairly targets minorities.', '/assets/images/profile_pics/5.jpg', '2012-12-02 18:29:01', 1, 130, 9.1),
(38, 'Parking meter attendants have electronic meters but have not found a really efficient way to target parking infractions.', '/assets/images/profile_pics/12.jpg', '2012-12-02 18:29:04', 1, 0.9, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE IF NOT EXISTS `solutions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(255) DEFAULT NULL,
  `up_votes` int(11) DEFAULT NULL,
  `down_votes` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `inq_id` int(11) DEFAULT NULL,
  `inapp_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `u_id` (`u_id`),
  KEY `inq_id` (`inq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `body`, `up_votes`, `down_votes`, `date_created`, `u_id`, `inq_id`, `inapp_flag`) VALUES
(1, 'Get a this product X.', 1, 0, '2012-12-01 00:00:00', 1, 1, NULL),
(2, 'Go get a new cup of coffee', 2, 0, '2012-12-02 03:00:00', 1, 1, 0),
(3, 'Get a coffee warmer.', 5, 0, '2012-12-02 00:00:00', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `url`, `date_created`) VALUES
(1, 'toby', 'hi', 'hi', 'hi', '2012-12-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solution` int(11) DEFAULT NULL,
  `urgency` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `inq_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `u_id` (`u_id`),
  KEY `inq_id` (`inq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `solutions` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `inqlings`
--
ALTER TABLE `inqlings`
  ADD CONSTRAINT `inqlings_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `solutions`
--
ALTER TABLE `solutions`
  ADD CONSTRAINT `solutions_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `solutions_ibfk_2` FOREIGN KEY (`inq_id`) REFERENCES `inqlings` (`id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`inq_id`) REFERENCES `inqlings` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
