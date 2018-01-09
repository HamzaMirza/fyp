-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql202.epizy.com
-- Generation Time: Oct 08, 2017 at 01:43 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_20806876_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `password`) VALUES
(1, 'mirza', '123'),
(2, 'haha', '123'),
(3, 'hamza', '123'),
(10, 'haha2', '123'),
(9, 'haha1', '1232');

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
('0', 'hamza', '2017-10-07 21:13:50', 'yes'),
('1', 'haha1', '2017-10-07 21:33:10', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `surveydata`
--

CREATE TABLE IF NOT EXISTS `surveydata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `cast` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `no_of_children` int(11) DEFAULT NULL,
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
  PRIMARY KEY (`id`),
  KEY `education` (`education`),
  KEY `designation` (`age`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `surveydata`
--

INSERT INTO `surveydata` (`id`, `name`, `fatherName`, `dob`, `cnic`, `gender`, `cast`, `religion`, `education`, `age`, `no_of_children`, `AdminName`, `phonenumber`, `maritalStatus`, `place_of_issuence`, `cnic_expiry`, `skill`, `employee_status`, `willing_for_emp`, `availabilty`, `remarks`) VALUES
(1, 'Running', 'dd', '02/07/1995', '45016-57810', 'male', 'bbaba', 'Islam', '0', '0', 4, '', '', '', '', '', '', '', '', '', ''),
(2, 'Running', 'dd', '02/07/1995', '45016-57810', 'male', 'bbaba', 'Islam', 'master', 'manager', 4, '', '', '', '', '', '', '', '', '', ''),
(3, 'Running', 'dd', '02/07/1995', '45016-57810', 'male', 'bbaba', 'Islam', 'master', 'manager', 4, 'haha', '090078601', 'y', '', '', '', '', '', '', ''),
(4, 'Running', 'dd', '02/07/1995', '45016-57810', 'male', 'bbaba', 'Islam', 'master', 'manager', 4, 'haha', '090078601', 'y', '', '', '', '', '', '', ''),
(5, 'Running', 'dd', '02/07/1995', '45016-57810', 'male', 'bbaba', 'Islam', 'master', 'manager', 4, 'haha', '090078601', 'y', '', '', '', '', '', '', ''),
(6, 'Running', 'dd', '02/07/1995', '45016-57810', 'male', 'bbaba', 'Islam', 'master', 'manager', 4, 'haha', '090078601', 'y', '', '', '', '', '', '', ''),
(7, 'Running', 'dd', '02/07/1995', '45016-5781', 'male', 'bbaba', 'Islam', 'master', 'manager', 4, 'haha', '090078601', 'y', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(10, 'notRunning', 'dd', '02/07/1995', '45016-5781', 'male', 'bbaba', 'Islam', 'master', 'manager', 4, 'hfaha', '090078601', 'y', '', '', '', '', '', '', ''),
(11, 'test1', 'dw1d', '02/07/1995', '45016-5781', 'male', 'bbaba', 'Islam', 'master', 'manager', 4, 'haha', '090078601', 'y', 'karachi', '02/07/2018', 'amazing', 'y', 'n', 'y', 'Good Boy'),
(12, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(14, 'test1', 'dw1d', '02/07/1995', '45016-5781', 'male', 'bbaba', 'Islam', 'master', '80', 4, 'haha', '090078601', 'y', 'karachi', '02/07/2018', 'amazing', 'y', 'n', 'y', 'Good Boy'),
(15, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(24, 'test1', 'dw1d', '02/07/1995', '45016-5781', 'male', 'bbaba', 'Islam', 'master', '80', 4, 'haha', '090078601', 'y', 'karachi', '02/07/2018', 'amazing', 'y', 'n', 'y', 'Good Boy'),
(25, 'test1', 'dw1d', '02/07/1995', '45016-5781', 'male', 'bbaba', 'Islam', 'master', '80', 4, 'haha', '090078601', 'y', 'karachi', '02/07/2018', 'amazing', 'y', 'n', 'y', 'Good Boy'),
(26, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(30, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(31, 'test1', 'dw1d', '02/07/1995', '45016-5781', 'male', 'bbaba', 'Islam', 'master', '80', 4, 'haha', '090078601', 'y', 'karachi', '02/07/2018', 'amazing', 'y', 'n', 'y', 'Good Boy'),
(32, 'test1', 'dw1d', '02/07/1995', '45016-5781', 'male', 'bbaba', 'Islam', 'master', '80', 4, 'haha', '090078601', 'y', 'karachi', '02/07/2018', 'amazing', 'y', 'n', 'y', 'Good Boy'),
(33, 'test1d', 'dw1d', '02/07/1995', '45016-5781', 'male', 'bbaba', 'Islam', 'master', '80', 4, 'haha', '090078601', 'y', 'karachi', '02/07/2018', 'amazing', 'y', 'n', 'y', 'Good Boy'),
(34, 'test1d', 'dw1d', '02/07/1995', '45016-5781', 'male', 'bbaba', 'Islam', 'master', '80', 4, 'haha', '090078601', 'y', 'karachi', '02/07/2018', 'amazing', 'y', 'n', 'y', 'Good Boy'),
(35, 'hereT', 'fatherName', 'dob', '45016-5781', 'male', 'bbaba', 'Islam', 'master', '80', 4, 'y', '090078601', 'haha', 'karachi', '02/07/2018', 'amazing', 'y', 'n', 'y', 'Good Boy'),
(36, 'hssT', 'fatherName', 'dob', '45016-5781', 'male', 'bbaba', 'Islam', 'master', '80', 4, 'y', '090078601', 'haha', 'karachi', '02/07/2018', 'amazing', 'y', 'n', 'y', 'Good Boy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
