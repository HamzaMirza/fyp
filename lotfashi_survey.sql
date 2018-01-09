-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2017 at 05:37 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lotfashi_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `password`) VALUES
(3, 'hamza', '123'),
(12, 'mohsin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `session_response` varchar(11) NOT NULL,
  `s_userName` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `checking` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_response`, `s_userName`, `time`, `checking`) VALUES
('0', '--', '2017-10-07 17:37:46', 'yes'),
('1', 'haha', '2017-10-07 20:18:23', 'yes'),
('1', 'mirza', '2017-10-07 19:58:53', 'yes'),
('1', 'hamza', '2017-10-19 08:41:46', 'yes'),
('1', 'haha1', '2017-10-07 21:33:10', 'yes'),
('1', 'mohsin', '2017-10-17 16:57:01', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `surveydata`
--

CREATE TABLE IF NOT EXISTS `surveydata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `cast` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `no_of_male_children` int(11) DEFAULT NULL,
  `no_of_female_children` int(11) DEFAULT NULL,
  `AdminName` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `maritalStatus` varchar(255) DEFAULT NULL,
  `place_of_issuence` varchar(255) DEFAULT NULL,
  `cnic_expiry` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `employee_status` varchar(255) DEFAULT NULL,
  `willing_for_emp` varchar(255) DEFAULT NULL,
  `availabilty` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveydata`
--

INSERT INTO `surveydata` (`id`, `name`, `fatherName`, `dob`, `cnic`, `gender`, `cast`, `religion`, `education`, `age`, `no_of_male_children`, `no_of_female_children`, `AdminName`, `phonenumber`, `maritalStatus`, `place_of_issuence`, `cnic_expiry`, `skill`, `employee_status`, `willing_for_emp`, `availabilty`, `remarks`, `longitude`, `latitude`, `image`) VALUES
(79, 'mujahid sheikh', 'sheikg', '1997', '27936279273', 'male', 'sheikh', 'islam', 'Master', '18', 10, 0, 'hamza', '03472438722', 'Un-married', 'lahore', '167', 'speaking', 'y', 'y', 'Later', 'good one', '', '', ''),
(78, 'hamza', 'Mirza baig ansari', '3/3/1994', '4410419080976', 'male', 'sheikh', 'islam', 'Intermediate', '22', 0, 0, 'hamza', '0335-300091', 'Married', 'karachi', '2/2/2025', 'nothing', 'y', 'n', 'Immediate', '', '', '', ''),
(77, 'hamza', 'Mirza baig ansari', '3/3/1994', '4410419080976', 'male', 'sheikh', 'islam', 'Intermediate', '22', 0, 0, 'hamza', '0335-300091', 'Married', 'karachi', '2/2/2025', 'nothing', 'y', 'n', 'Immediate', '', '', '', ''),
(76, 'hamza', 'Mirza baig ansari', '3/3/1994', '4410419080976', 'male', 'sheikh', 'islam', 'Intermediate', '22', 0, 0, 'hamza', '0335-300091', 'Married', 'karachi', '2/2/2025', 'nothing', 'y', 'n', 'Immediate', '', '', '', ''),
(75, 'hamza', 'Mirza baig ansari', '3/3/1994', '4410419080976', 'male', 'sheikh', 'islam', 'Intermediate', '22', 0, 0, 'hamza', '0335-300091', 'Married', 'karachi', '2/2/2025', 'nothing', 'y', 'n', 'Immediate', '', '', '', ''),
(74, 'hamza', 'Mirza baig ansari', '3/3/1994', '4410419080976', 'male', 'sheikh', 'islam', 'Intermediate', '22', 0, 0, 'hamza', '0335-300091', 'Married', 'karachi', '2/2/2025', 'nothing', 'y', 'n', 'Immediate', '', '', '', ''),
(73, 'hamza', 'Mirza baig ansari', '3/3/1994', '4410419080976', 'male', 'sheikh', 'islam', 'Intermediate', '22', 0, 0, 'hamza', '0335-300091', 'Married', 'karachi', '2/2/2025', 'nothing', 'y', 'n', 'Immediate', '', '', '', ''),
(72, 'hamza', 'Mirza baig ansari', '3/3/1994', '4410419080976', 'male', 'sheikh', 'islam', 'Intermediate', '22', 0, 0, 'hamza', '0335-300091', 'Married', 'karachi', '2/2/2025', 'nothing', 'y', 'n', 'Immediate', '', '', '', ''),
(71, 'hamza', 'Mirza baig ansari', '3/3/1994', '4410419080976', 'male', 'sheikh', 'islam', 'Intermediate', '22', 0, 0, 'hamza', '0335-300091', 'Married', 'karachi', '2/2/2025', 'nothing', 'y', 'n', 'Immediate', '', '', '', ''),
(70, 'hamza', 'Mirza baig ansari', '3/3/1994', '4410419080976', 'male', 'sheikh', 'islam', 'Intermediate', '22', 0, 0, 'hamza', '0335-300091', 'Married', 'karachi', '2/2/2025', 'nothing', 'y', 'n', 'Immediate', '', '', '', ''),
(69, 'abdul', 'rehman', '17 Jan 1998', '36302836379271', 'male', 'okay', 'islam', 'Intermediate', '46', 6, 0, 'hamza', '03482433922', 'Married', 'Sukkur', '18,19,2020', 'hsibs', 'N', 'Y', '6-minutes', 'nope', '', '', ''),
(68, 'yaseen', 'babbar', '18', '1837928', 'male', 'babar', 'islam', 'Master', '18', 6, 0, 'hamza', '03482433922', 'Married', 'uei', '18e7', 'Engineer', 'y', 'y', 'Later', '', '', '', ''),
(67, 'osama', 'baloch', '18 Jan 1997', '36302', 'male', 'babbar', 'muslim', 'Bachelors', '20', 7, 0, 'hamza', '03482433922', 'Un-married', 'mirpur', 'okay ok', 'programming', 'y', 'y', 'Later', '', '', '', ''),
(66, 'osama', 'baloch', '18 Jan 1997', '36302', 'male', 'babbar', 'muslim', 'Bachelors', '20', 7, 0, 'hamza', '03482433922', 'Un-married', 'mirpur', 'okay ok', 'programming', 'y', 'y', 'Later', '', '', '', ''),
(63, 'hamza', 'Mirza baig ansari', '3/3/1994', '4410419080976', 'male', 'sheikh', 'islam', 'Intermediate', '22', 0, 0, 'hamza', '0335-300091', 'Married', 'karachi', '2/2/2025', 'nothing', 'y', 'n', 'Immediate', '', '', '', ''),
(64, 't', 'j', '19818', 'jzjs', 'male', 'hahja', 'haha', 'Intermediate', '09', 0, 0, 'hamza', '987', 'Married', 'jaja', 'haha', 'baba', 'y', 'y', 'Immediate', '', '', '', ''),
(61, 'hamza', 'baig', '2/2/1999', '4410329000999', 'male', 'mirza', 'islam ', 'PhD', '21', 0, 0, 'hamza', '0300-29000001', 'Married', 'karachi', '2/2/2015', 'lecturer ', 'n', 'n', 'Immediate', 'Not good', '', '', ''),
(65, 'h', 'g', 'c', 'gf', 'g', 'g', 'f', 'Intermediate', 'g', 4, 0, 'Hamza', 'v', 'Un-married', 'f', 'g', 'hs', 'y', 'y', 'Immediate', 'hshd', '', '', ''),
(82, 'mujahid sheikh', 'sheikg', '1997', '27936279273', 'male', 'sheikh', 'islam', 'Master', '18', 10, 0, 'hamza', '03472438722', 'Un-married', 'lahore', '167', 'speaking', 'y', 'y', 'Later', 'good one', '', '', ''),
(83, 'mujahid sheikh', 'sheikg', '1997', '27936279273', 'male', 'sheikh', 'islam', 'Master', '18', 10, 0, 'hamza', '03472438722', 'Un-married', 'lahore', '167', 'speaking', 'y', 'y', 'Later', 'good one', '', '', ''),
(84, 'mujahid sheikh', 'sheikg', '1997', '27936279273', 'male', 'sheikh', 'islam', 'Master', '18', 10, 0, 'hamza', '03472438722', 'Un-married', 'lahore', '167', 'speaking', 'y', 'y', 'Later', 'good one', '', '', ''),
(85, 'mujahid sheikh', 'sheikg', '1997', '27936279273', 'male', 'sheikh', 'islam', 'Master', '18', 10, 0, 'hamza', '03472438722', 'Un-married', 'lahore', '167', 'speaking', 'y', 'y', 'Later', 'good one', '', '', ''),
(86, 'mujahid sheikh', 'sheikg', '1997', '27936279273', 'male', 'sheikh', 'islam', 'Master', '18', 10, 0, 'hamza', '03472438722', 'Un-married', 'lahore', '167', 'speaking', 'y', 'y', 'Later', 'good one', '', '', ''),
(87, 'mujahid sheikh', 'sheikg', '1997', '27936279273', 'male', 'sheikh', 'islam', 'Master', '18', 10, 0, 'hamza', '03472438722', 'Un-married', 'lahore', '167', 'speaking', 'y', 'y', 'Later', 'good one', '', '', ''),
(88, 'mujahid sheikh', 'sheikg', '1997', '27936279273', 'male', 'sheikh', 'islam', 'Master', '18', 10, 0, 'hamza', '03472438722', 'Un-married', 'lahore', '167', 'speaking', 'y', 'y', 'Later', 'good one', '', '', ''),
(89, 'osama', 'baloch', '18', '27', 'male', 'babbar', 'islam', 'PhD', '18', 6, 0, 'hamza', '03748273836', 'Un-married', '27', '1u', 'ok', 'y', 'y', '3-minutes', 'ok', '', '', ''),
(90, 'jskeej', 'dhejs', 'shjdi', 'shjejd', 'jeje', 'sjje', 'sjie', 'Master', 'shje', 10, 0, 'hamza', '8283', 'Married', 'jsjeidsnjs', 'sjje', 'jsjs', 'y', 'n', 'Immediate', '', '', '', ''),
(91, 'jskeej', 'dhejs', 'shjdi', 'shjejd', 'jeje', 'sjje', 'sjie', 'Master', 'shje', 10, 0, 'hamza', '8283', 'Married', 'jsjeidsnjs', 'sjje', 'jsjs', 'y', 'n', 'Immediate', '', '', '', ''),
(92, 'baig mirza', 'baig sahab', '13/01/1996', '44103-900000-1', 'Male', 'sandhu', 'Islam', 'Graduate', 'none', 3, 0, 'hamza', '0300-9000011', 'Married', 'karachi', '13/05/2020', 'developer', 'Yes', 'Yes', '2-Weeks', 'good', '', '', ''),
(93, 'fsisjs', 'udiebd', 'shjs', 'jsjs', 'Female', 'xhjd', 'Islam', 'Graduate', 'none', 2, 0, 'hamza', 'jsje', 'Married', 'jsjs', 'jsjs', 'jjs', 'Yes', 'Yes', 'Immediate', 'jsjsjs', '', '', ''),
(94, 'irtiza haider', 'waseem bhai', 'sjis', '279373', 'Female', 'sheikh', 'Islam', 'Master', 'none', 5, 0, 'hamza', '8363828363', 'Married', '728363', '368364', 'ushdje', 'Yes', 'Yes', '3-Months', 'good boy', '', '', ''),
(95, 'vvnb', 'bvcbv', 'cbxc', 'ggk', 'Male', 'vbxb', 'Islam', 'No Education', 'none', 0, 0, 'mohsin', 'gkgjkg', 'Married', 'jkgkjgkj', 'gjkgkj', 'gjgjkg', 'Yes', 'Yes', 'Immediate', 'gjkgj', '-122.08400000000002', '37.421998333333335', '../../user_images/aa.png'),
(96, 'vvnb', 'bvcbv', 'cbxc', 'ggk', 'Male', 'vbxb', 'Islam', 'No Education', 'none', 0, 0, 'mohsin', 'gkgjkg', 'Married', 'jkgkjgkj', 'gjkgkj', 'gjgjkg', 'Yes', 'Yes', 'Immediate', 'gjkgj', '-122.08400000000002', '37.421998333333335', '../user_images/aa.jpeg'),
(97, 'vvnb', 'bvcbv', 'cbxc', 'ggk', 'Male', 'vbxb', 'Islam', 'No Education', 'none', 0, 0, 'mohsin', 'gkgjkg', 'Married', 'jkgkjgkj', 'gjkgkj', 'gjgjkg', 'Yes', 'Yes', 'Immediate', 'gjkgj', '-122.08400000000002', '37.421998333333335', '83'),
(98, 'vvnb', 'bvcbv', 'cbxc', 'ggk', 'Male', 'vbxb', 'Islam', 'No Education', 'none', 0, 0, 'mohsin', 'gkgjkg', 'Married', 'jkgkjgkj', 'gjkgkj', 'gjgjkg', 'Yes', 'Yes', 'Immediate', 'gjkgj', '-122.08400000000002', '37.421998333333335', '../user_images/83a5a98350427d0a9f72f768ad5608099fc2530b.jpeg'),
(99, 'vvnb', 'bvcbv', 'cbxc', 'ggk', 'Male', 'vbxb', 'Islam', 'No Education', 'none', 0, 0, 'mohsin', 'gkgjkg', 'Married', 'jkgkjgkj', 'gjkgkj', 'gjgjkg', 'Yes', 'Yes', 'Immediate', 'gjkgj', '-122.08400000000002', '37.421998333333335', '../user_images/83a5a98350427d0a9f72f768ad5608099fc2530b.jpeg'),
(100, 'dfdfdsf', 'fdsfdsfs', 'hjhlkhlk', 'hljhjlh', 'Male', 'dfsdfds', 'Islam', 'No Education', 'none', 0, 0, 'mohsin', 'hjlhljh', 'Married', 'hlhlh', 'hlhjhj', 'hjhjlhlj', 'Yes', 'Yes', 'Immediate', 'hjlhl', '-122.08400000000002', '37.421998333333335', '../user_images/af9630326b843dc32bec6120640fd6318f1ae7bd.jpeg'),
(101, 'ezrezre', 'zdzd', 'dfdfzdz', 'fdfzfz', 'Male', 'dddz', 'Islam', 'No Education', 'none', 0, 0, 'mohsin', 'fzfzfz', 'Married', 'fzfzfz', 'fzfzfz', 'efzfze', 'Yes', 'Yes', 'Immediate', '', '-122.08400000000002', '37.421998333333335', '../user_images/297e14d0bfaedf21ea1e4cbad27c5b0c9ec95316.jpeg'),
(102, 'gefgdfgd', 'rgetget', 'hth', 'gdggd', 'Male', 'gegd', 'Islam', 'No Education', 'none', 0, 0, 'mohsin', 'fgege', 'Married', 'geegÂ²', 'efege', '', 'Yes', 'Yes', 'Immediate', '', '-122.08400000000002', '37.421998333333335', '../user_images/f14b93a6a8645a80fb1352e011feb020784e4f7a.jpeg'),
(103, 'vvvsdv', 'dvsdvsd', 'fvfvfvsd', 'fvsfvsd', 'Male', 'vfvsdvds', 'Islam', 'No Education', 'none', 0, 0, 'mohsin', 'efzfzef', 'Married', 'vsvsvs', 'efefee', 'fgfgs', 'Yes', 'Yes', 'Immediate', '', '-122.08400000000002', '37.421998333333335', '../user_images/b73f5276e1c1777a74e39354f599aed998dcfc2f.jpeg'),
(104, 'keke', 'jiedu', 'djrjrj', 'djdjje', 'Male', 'jdjdid', 'Islam', 'No Education', 'none', 0, 0, 'mohsin', 'jdjeje', 'Married', 'jdjdu', 'jdjdud', 'sjeje', 'Yes', 'Yes', 'Immediate', 'jsjs', '67.0508922', '24.8142548', '../user_images/1e87f394aeae4c97304af3f6eee95cdb3c2bb71c.jpeg'),
(105, 'hghj', 'hkhkg', '22-22-2222', 'bjjlhlhj', 'Male', 'gkhghkh', 'Islam', 'No Education', 'none', 3, 5, 'mohsin', 'bjkhkljkjm', 'Married', 'kjmjmj', '55-55-5555', '', 'Yes', 'Yes', 'Immediate', '', '-122.08400000000002', '37.421998333333335', '../user_images/45b4b6d97526ee8e5f44763c5562ffdb89fec150.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `userName` (`userName`);

--
-- Indexes for table `surveydata`
--
ALTER TABLE `surveydata`
  ADD PRIMARY KEY (`id`), ADD KEY `education` (`education`), ADD KEY `designation` (`age`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `surveydata`
--
ALTER TABLE `surveydata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
