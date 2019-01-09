-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 07:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `password`, `c_id`, `name`) VALUES
(23, 'hamzamirza@gmail.com', '123', 14, 'hamza'),
(21, 'ba@g.comaaasaadada', '123', 12, 'nn323343fsdf');

-- --------------------------------------------------------

--
-- Table structure for table `admin_session`
--

CREATE TABLE `admin_session` (
  `id` int(11) NOT NULL,
  `session_response` int(11) NOT NULL DEFAULT '0',
  `time` datetime DEFAULT NULL,
  `aid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_session`
--

INSERT INTO `admin_session` (`id`, `session_response`, `time`, `aid`) VALUES
(1, 0, '2019-01-04 23:25:06', 21),
(2, 1, '2019-01-05 20:43:58', 22),
(3, 0, '2019-01-05 20:45:07', 23);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'IT'),
(2, 'Electromechanical'),
(3, 'Pharmaceutical');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `cat_id`, `description`, `address`) VALUES
(12, '3433425546', 1, NULL, NULL),
(13, '', 1, NULL, NULL),
(14, 'folio3', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `name`) VALUES
(1, 'Senior'),
(2, 'Junior');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans1` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  `ans3` varchar(255) DEFAULT NULL,
  `ans4` varchar(255) DEFAULT NULL,
  `correct` varchar(255) DEFAULT NULL,
  `draft` int(11) NOT NULL DEFAULT '0',
  `time` varchar(255) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct`, `draft`, `time`, `c_id`) VALUES
(1, 'what is the size of int in java', '4 Bytes', '8 Bytes', '16 Bytes', '32 Bytes', '4 Bytes', 0, '2019-01-04 23:25:06', 14),
(2, 'what is the size of float in java', '4 Bytes', '8 Bytes', '16 Bytes', '32 Bytes', '4 Bytes', 0, '2019-01-04 23:25:06', 14);

-- --------------------------------------------------------

--
-- Table structure for table `roletype`
--

CREATE TABLE `roletype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roletype`
--

INSERT INTO `roletype` (`id`, `name`) VALUES
(1, 'SQA'),
(2, 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `testscore`
--

CREATE TABLE `testscore` (
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `score` double DEFAULT NULL,
  `date` datetime NOT NULL,
  `vacancyid` int(11) DEFAULT NULL,
  `cv` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testscore`
--

INSERT INTO `testscore` (`id`, `cid`, `uid`, `score`, `date`, `vacancyid`, `cv`) VALUES
(1, 14, 1, 5, '2019-01-04 23:25:06', NULL, '/public/docs/si3aOLVgNd7SAGZgWXdGDYCuHV7NDxXij6OYsQIw/cv_muhammad_hamza_mirza.doc'),
(2, 14, 1, 5, '2019-01-04 23:25:06', 1, '/public/docs/t3gboRu9Y1rnTSpFTchT2Pqbi5irbt1Rs0n4rapr/cv_muhammad_hamza_mirza.doc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lname` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `education` varchar(1000) DEFAULT NULL,
  `cv` varchar(1000) DEFAULT NULL,
  `picture` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `password`, `lname`, `address`, `education`, `cv`, `picture`) VALUES
(1, 'hamza', 'hamzamirza@gmail.com', '123', 'mirza', 'Gulistan-e-Johar, Karachi, Pakistan', 'bachelors', '/public/docs/teTOGIsIlgNwQfsUJSfzmnOomY0pqNZWvjP8Rz5Y/cv_muhammad_hamza_mirza.pdf', '/public/images/users/0p9P3Gyyzj6jIRnYm0xYtW3HWq2l0hhywOnShfxs/asciifull.png'),
(2, 'mirza', 'hamzamirza347@gmail.com', '123', NULL, NULL, NULL, NULL, NULL),
(13, 'hamza', 'test@gmail.com', '123', 'mirza', 'Gulistan-e-Johar, Karachi, Pakistan', 'bachelors', '/public/docs/1Mnv8CV30fkMZLQh2Ksnv39VF6cKsbbv7crQbALZ/cv_muhammad_hamza_mirza.pdf', '/public/images/users/WkflhOwQcVt6BADxXJDue2VZWeBInrK0zwRsKMwI/asciifull.png'),
(14, 'hamza', 'tester@gmail.com', '123', 'mirza', 'Gulistan-e-Johar, Karachi, Pakistan', 'bachelors', '/public/docs/d1o7bnPQu26yL4xqo5ZtszxnA3HyBoZgoM4jPDwB/cv_muhammad_hamza_mirza.pdf', '/public/images/users/9Czg6QD5cW5hQntFhNBJZOMXYlReVYurv1eTjMdH/asciifull.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE `user_session` (
  `id` int(11) NOT NULL,
  `session_response` int(11) DEFAULT '0',
  `time` datetime DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_session`
--

INSERT INTO `user_session` (`id`, `session_response`, `time`, `uid`) VALUES
(1, 0, '2019-01-05 20:06:24', 1),
(2, 0, '2019-01-05 20:30:36', 2),
(3, 0, '2019-01-06 02:44:08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `lastDate` varchar(100) DEFAULT NULL,
  `Date` varchar(1000) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `minexperience` double DEFAULT NULL,
  `city` varchar(1000) DEFAULT NULL,
  `avgsalary` double DEFAULT NULL,
  `state` int(11) DEFAULT '0',
  `designationid` int(11) DEFAULT NULL,
  `roletypeid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `cid`, `lastDate`, `Date`, `seats`, `minexperience`, `city`, `avgsalary`, `state`, `designationid`, `roletypeid`) VALUES
(1, 14, '2019-01-14 23:25:06', '2019-01-04 23:25:06', 4, 1.5, 'Karachi', 75000, 1, 1, 1),
(2, 14, '2019-01-14 23:25:06', '2019-01-04 23:25:06', 3, 3.5, 'Karachi', 750000, 1, 1, 1),
(3, 14, '2019-01-14 23:25:06', '2019-01-04 23:25:06', 3, 3.5, 'Hyderabad', 680000, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `admin_session`
--
ALTER TABLE `admin_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `roletype`
--
ALTER TABLE `roletype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testscore`
--
ALTER TABLE `testscore`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aid` (`cid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_session`
--
ALTER TABLE `user_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `admin_session`
--
ALTER TABLE `admin_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roletype`
--
ALTER TABLE `roletype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testscore`
--
ALTER TABLE `testscore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_session`
--
ALTER TABLE `user_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_question_campany_cat_id` FOREIGN KEY (`c_id`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
