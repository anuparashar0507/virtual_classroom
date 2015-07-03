-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2014 at 10:08 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `virtualclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `path` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `type`, `size`, `path`) VALUES
(5, '42_ppt.pptx', 'application/vnd.openxmlformats', 160894, ''),
(6, '42_ppt.pptx', 'application/vnd.openxmlformats', 160894, ''),
(7, '42_ppt.pptx', 'application/vnd.openxmlformats', 160894, ''),
(8, '42_ppt.pptx', 'application/vnd.openxmlformats', 160894, ''),
(9, '42_ppt.pptx', 'application/vnd.openxmlformats', 160894, ''),
(10, 'documentation.docx', 'application/vnd.openxmlformats', 13810, ''),
(11, 'documentation.docx', 'application/vnd.openxmlformats', 13810, ''),
(12, '1facecloak.docx', 'application/vnd.openxmlformats', 15326, ''),
(13, '', '', 0, ''),
(14, 'as new.docx', 'application/vnd.openxmlformats', 86353, 'upload/as new.docx'),
(15, 'How to post a Facebook Wall me', 'application/vnd.openxmlformats', 397341, 'upload/How to post a Facebook Wall message using FaceCloak.docx'),
(16, 'literature.docx', 'application/vnd.openxmlformats', 12300, 'upload/literature.docx'),
(17, 'New Microsoft Word Document.do', 'application/vnd.openxmlformats', 166690, 'upload/New Microsoft Word Document.docx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
