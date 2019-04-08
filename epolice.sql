-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 10:21 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epolice`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `aboutus_url` varchar(255) NOT NULL,
  `aboutus_title` varchar(255) NOT NULL,
  `aboutus_keywords` text NOT NULL,
  `aboutus_description` text NOT NULL,
  `aboutus_content` text NOT NULL,
  `date_published` int(11) NOT NULL,
  `author` varchar(65) NOT NULL,
  `picture` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `aboutus_url`, `aboutus_title`, `aboutus_keywords`, `aboutus_description`, `aboutus_content`, `date_published`, `author`, `picture`) VALUES
(1, 'Our-History', 'Our History', 'our history', 'our history', '<div class="span4" xss="removed"><h3 xss="removed">sample About our history</h3><h3 xss="removed"><p xss="removed" xss=removed>coming soon!! <span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p><p xss="removed" xss=removed><span xss=removed><br></span></p><p xss="removed" xss=removed><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p><p xss="removed" xss=removed><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p></h3></div>', 1533704400, 'manager', 'FkpXwAsB7dQ43YXN.jpg'),
(2, 'Our-Management', 'Our Management', 'Our Management', 'Our Management', '<div class="span4" xss="removed"><h3 xss="removed"> about management</h3><p xss="removed" xss=removed>coming soon!! <span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p><p xss="removed" xss=removed><span xss=removed><br></span></p><p xss="removed" xss=removed><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p><p xss="removed" xss=removed><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p></div>', 1531198800, 'manager', 'r4DMQbcuqzwRFWTp.jpg'),
(3, 'About-Our-Services', 'About Our Services', 'About Our Services', 'About Our Services', '<div><div class="span4" xss="removed"><h3 xss="removed">sample About our services</h3><h3 xss="removed"><p xss="removed" xss=removed>coming soon!! <span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p><p xss="removed" xss=removed><span xss=removed><br></span></p><p xss="removed" xss=removed><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p><p xss="removed" xss=removed><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p></h3></div></div>', 1515391200, 'manager', 'Lwd4gZNjhDw7q7FX.jpg'),
(4, 'About-Our-Branches', 'About Our Branches', 'About Our Branches', 'About Our Branches', '<div class="span4" xss="removed"><h3 xss="removed">sample About our branches</h3><p xss="removed">coming soon!! <span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p><p xss="removed"><span xss=removed><br></span></p><p xss="removed"><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p><p xss="removed"><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span><span xss=removed>coming soon!! </span></p></div>', 1593579600, 'evans the developer', 'ezr2qhzSQUz388MZ.jpg'),
(5, 'Our-Contacts', 'Our Contacts', 'Our Contacts', 'Our Contacts', '<h1><font face="Arial, Verdana"><span xss="removed">our office contacts</span></font></h1><ol xss="removed"><li xss="removed">Our Contacts coming soon!!</li><li xss="removed">Our Contacts coming soon!!</li><li xss="removed">Our Contacts </li><li xss="removed">Our Contacts</li><li xss="removed">Our Contacts</li></ol><div><h1><font face="Arial, Verdana"><span xss="removed">our customer care contacts</span></font></h1></div><div><ol><li xss="removed">Our Contacts coming soon!!</li><li xss="removed">Our Contacts coming soon!!</li><li xss="removed">Our Contacts</li></ol><div><h1><font face="Arial, Verdana"><span xss="removed">our branch  contacts</span></font></h1></div></div><div><ol><li xss="removed">Our Contacts coming soon!!</li><li xss="removed">Our Contacts</li><li xss="removed">Our Contacts</li></ol></div>', 1528088400, 'evans the developer', 'F2sjsH9SmXWhGeVN.jpg'),
(6, 'Our-Terms', 'Our Terms', 'Our Terms', 'Our Terms', '<h3 xss="removed">About our prices</h3><p xss="removed">coming soon!! <span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span></p><p xss="removed"><span xss="removed"><br></span></p><p xss="removed"><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span></p><p xss="removed"><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span><span xss="removed">coming soon!! </span></p>', 1528434000, 'manager', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_reports`
--

CREATE TABLE `admin_reports` (
  `id` int(11) NOT NULL,
  `report_title` varchar(100) NOT NULL,
  `report_description` text NOT NULL,
  `reported_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reports`
--

INSERT INTO `admin_reports` (`id`, `report_title`, `report_description`, `reported_time`, `user_id`) VALUES
(1, 'Rape', 'i am a student at moi university and i reside around the school. i was approached by five men and the they forced me to have sex with them. now i am confused and i don''t know what to do.\r\n\r\nmy ID: 31887691\r\nmy phone no: 0755362828', 1552200062, 1),
(2, 'Cooking in the Hostel', 'Room 32 h ARE  cooking in the hostel.', 1553065277, 2),
(3, 'Mob justice in Hostel M', 'A Student is being beaten for stealing food.', 1553065547, 1),
(4, 'student strike', 'students are damaging the admin building.', 1553066011, 2),
(5, 'State of Housing in stage', 'poor', 1553066369, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_url` varchar(255) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_keywords` text NOT NULL,
  `blog_description` text NOT NULL,
  `blog_content` text NOT NULL,
  `date_published` int(11) NOT NULL,
  `author` varchar(65) NOT NULL,
  `picture` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_url`, `blog_title`, `blog_keywords`, `blog_description`, `blog_content`, `date_published`, `author`, `picture`) VALUES
(1, 'Our-General-meeting', 'Our General meeting', 'y', 'h', '<p xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p><p xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>', 1551679200, 'dnice manager', 'fwY8MhjsqNUcnQLZ.jpg'),
(2, 'First-Blog-Post', 'First Blog Post', 'gj', 'ey', 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 1515736800, 'aries mwenyewe', '5cESMSAM5bQpN8Zq.jpg'),
(3, 'New-Website-Launch', 'New Website Launch', 'New Website Launch', 'New Website Launch', '<p xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p><p xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>', 1551765600, 'manager', 'GkYEsRCNaCAnXQKh.jpg'),
(6, 'How-to-report-a-crime', 'How to report a crime', 'sdfffffffffffff', 'vjgjjjjjgggggggggggggggggkl', '<p xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p><p xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>', 1551852000, 'evans the developer', 'rMZWSXXjXLZfrxzU.jpg'),
(7, 'Job-vacancies', 'Job vacancies', 'Job vacancies', 'Job vacancies', 'Vacancy for epolice agent to attend to reports in the campus', 1542520800, 'joel', '4RbNakRG4KkEGGnZ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('baffa5e2b95b1996003cc06272a771790cd3e119', '::1', 1542087342, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323038373034363b757365725f69647c733a313a2231223b),
('f2ea827e3c93128e682c6ab92802f045ecb32d35', '::1', 1542087717, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323038373431393b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('3e8de19fac99caaf329d75ebd79854a8a45f7ac7', '::1', 1542088022, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323038373732323b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('a707b931895ac54054d0a741900d504d03dd0260', '::1', 1542088248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323038383032333b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('7b1ad4760cafad0468ed0889b5acd7c75657092d', '::1', 1542088692, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323038383339343b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('f11b10607fe1a0149fc9dc551175d7dc03dc42a8', '::1', 1542088747, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323038383734363b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('258b984fac3454c50fc3063d1ef9487d4ca5ebcc', '::1', 1542089476, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323038393236383b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('ee77f2dbae6ec5c166e5ec1f73d2e017c4fbdcb0', '::1', 1542089855, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323038393537303b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('5cf428456ad69a4f56128af73d2831867226bd47', '::1', 1542089953, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323038393837343b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('8b8937629cee58dc845c5aa83fd088be9824cb96', '::1', 1542090571, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323039303237343b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('22290b900ba0e3e6f567913a781d5a4c34e1f912', '::1', 1542090935, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323039303637323b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('ad95644e56cb15b0f34b7b2b025b7d1d8611911f', '::1', 1542091529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323039313233303b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('281dba56f7a7d8c579d3664d3f14daed6bbd530b', '::1', 1542091821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323039313533323b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('45fb75d04fd5b3c07237590399bff5f1c3245991', '::1', 1542092149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323039313931373b757365725f69647c733a313a2231223b757365725f726f6c657c733a31373a22726563657074696f6e206d616e61676572223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('b516b70b2da99d2cc9f5db7ea4c29f5aad1561e4', '::1', 1542092475, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323039323239303b757365725f69647c733a313a2231223b757365725f726f6c657c733a313a2231223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('d771e12f4a2b9186ff386d8c973d9b52a7afe28c', '::1', 1542092905, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323039323637393b757365725f69647c733a313a2231223b757365725f726f6c657c733a313a2230223b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('21f9ea0774860b7a8a2fbf736e82f8a962fec639', '::1', 1542093290, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323039333130363b757365725f69647c733a313a2231223b757365725f726f6c657c733a313a2231223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b69735f726563657074696f6e6973747c733a313a2232223b),
('d02618e6661d89acb2c9297129cf69f76f9a762c', '::1', 1542117984, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323131373731393b),
('e6469df2fff744002892e2022b219b8fe3171ee8', '::1', 1546857964, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363835373834333b),
('b8c82bfb9bc167fec9e95334848bcbdeea582ec7', '::1', 1546940885, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363934303836393b),
('985406071194b68df0a649011b8b8064d44c56e2', '::1', 1546941737, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363934313733343b),
('fc58c7111985251d4145fb5df7eb9f4af001ccfd', '::1', 1547019562, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373031393534313b),
('4b40afebc36ddd6fd5289a81d0adcbb608047f10', '::1', 1547020826, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373032303832333b),
('2c0306ab591f839ad53cb66e836a1da958109729', '::1', 1547080509, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373038303337353b),
('bcc246f27b55b983b97392feb56ad496c5acb9c0', '::1', 1547082925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373038323931383b),
('3f4d0c190e3727e7f9a80e26933eceac5d6e4bf7', '::1', 1547627915, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373632373839343b),
('5acb04463d33263d1e7a44c5f1acefee6ff005e8', '::1', 1547629321, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373632393330363b),
('b88874abf7c9a70d9035ed03f741dbc1c1a18e5f', '::1', 1548053768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035333639313b),
('a25c68a02129da49c5827bac4202638e70d1cdbd', '::1', 1548054812, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035343831303b),
('53c17862922798bc10812c59cb43270a5b3632b2', '::1', 1551342857, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313334323833393b),
('be655ee4b3bb785f9440c64746f9a3272a27b5cb', '::1', 1551349482, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313334393436363b),
('5174648aadf5970fc51cb2e6734a258efa95bb6a', '::1', 1551854617, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835343436313b),
('689e8ab5ee90593c8e5427e01b6d6aebd6dfd9e7', '::1', 1551854890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835343838373b),
('3fee4442131d4f1ea6bef2c0cfc9d7e2807fde8b', '::1', 1551855675, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835353338333b),
('c3c1394b338c0bf5ba355261bb709ff5b9fc57bf', '::1', 1551856261, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835353938373b),
('75786c1e2627cf3b14d7323fa25e5fd6d38d7f0b', '::1', 1551856539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835363333363b),
('c000d240ab591ade6530b1e412676322daf08b2a', '::1', 1551856903, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835363637303b),
('646093f26825283d6c51187698012ad24ddcfefc', '::1', 1551856976, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835363937343b),
('7923b21aaf04b01808e1f43fe9c7315e4e304dea', '::1', 1551857656, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835373432323b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('2a21fd1590a952dcce3b65b734b45e561e954087', '::1', 1551857804, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835373735313b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('5bf16c35eb5f219a4dbed8a575c6aa0c02a0f025', '::1', 1551859010, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835383831393b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b),
('1c06f144b8b2a936438fa064565414cead3450ea', '::1', 1551859610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835393332353b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('c74b9b4f1e179c3928403a34a07c70c37acf8e73', '::1', 1551859994, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313835393732343b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('7f6efec705fab8748f03914cddaebc60bd4de4c3', '::1', 1551860302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313836303036323b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('55946c09b9f717195797123a5f4fb20df54fbb6a', '::1', 1551860518, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313836303339313b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('950cabdcf3afbee353b32555b31a9ea2e461a8b3', '::1', 1551860911, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313836303930313b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('aef79e50061ba48c17a510a941eed095153817c7', '::1', 1551861518, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313836313237353b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('3c2c8e5b9f4f40868350d9ae20d749e99f86df03', '::1', 1551861896, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313836313630373b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('5cae90ad44fdc49d3059dd5b6d41a8e7ae7c5446', '::1', 1551862048, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313836313933333b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('f13e3e22d0c3578675e39ba1597bb76aa22b6167', '::1', 1551862520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313836323236343b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('3aea027c99dd1731fc7c59b1c54b74efa399d407', '::1', 1551862807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313836323538353b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('def5cf5f9fa595104a0006fbdf1766595a5d324c', '::1', 1551863035, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313836323936303b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('cdb6254c8acf93b55043a5d7aa6a5071fd87218c', '::1', 1551863385, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313836333236313b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('0ef1728bdbae46a4fb8323f8fa20ff4bb3c87de6', '::1', 1551870618, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313837303333393b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('af9ff797661c87903c303db7528fbc5c811ebadb', '::1', 1551870875, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313837303830343b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('0497523b70327d3fc154859c2d4c07cbc34b41a8', '::1', 1551871596, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313837313331343b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('4776b03d708d24c677f8b169a0bb0eb29cdaf1ba', '::1', 1551872030, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313837313831323b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('008ff4e0e5ba06e832c2e0d659370c0c669c7edc', '::1', 1551872551, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313837323235343b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('3323cf8c40efc62ecf90800571b0aade9b730785', '::1', 1551873305, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313837333330353b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('caa00c61f1c570ceba80e62972c101dfe8b6e679', '::1', 1551874288, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313837343132323b757365725f726f6c657c4e3b69735f726563657074696f6e6973747c733a313a2232223b69735f6f7065726174696f6e616c5f6d616e616765727c733a313a2233223b757365725f69647c733a313a2231223b),
('ee74666efc0118d7166245e540d7ad4edee97d49', '::1', 1551889884, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313838393737323b757365725f69647c733a313a2231223b),
('f4016ae8f309ab4b08d6560830f049f4343f1075', '::1', 1551890655, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313839303338313b757365725f69647c733a313a2231223b),
('b4716c804e43b1b63e7bdbed197ae61d8bc06bd5', '::1', 1551890689, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313839303638383b757365725f69647c733a313a2231223b),
('a55b30eff88650e62fb8dac29c6c635ee0815506', '::1', 1551891302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313839313030333b757365725f69647c733a313a2231223b),
('8f2206f9b5109038c177c9200e2c9174c9d9d502', '::1', 1551891417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313839313331323b757365725f69647c733a313a2231223b),
('fc86ea6dc3cfe64645d42bc3699e9b22f45d83a4', '::1', 1551891925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313839313634353b757365725f69647c733a313a2231223b),
('3fcbab1a44ce3e1bfa326132e08a2b16a55a2b6b', '::1', 1551892217, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313839313937373b757365725f69647c733a313a2231223b),
('81a54e06d687899ceca2458dc96b01fa17fe88a4', '::1', 1551892704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313839323730343b757365725f69647c733a313a2231223b),
('dc069fba25c9b918aac5ea29be3d4db914f09ea8', '::1', 1551893454, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313839333434383b757365725f69647c733a313a2231223b),
('2bb087f1425666e1e252965c0f8d4713449f19de', '::1', 1552137501, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323133373231353b757365725f69647c733a313a2231223b),
('7964ab63c0d645a16db1d96bac66a14fb04d1e11', '::1', 1552137552, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323133373534353b757365725f69647c733a313a2231223b),
('3a72ad64dfbb9c9effd8905d1916653438a8e46c', '::1', 1552138186, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323133373932313b757365725f69647c733a313a2231223b),
('cf5b261adf7af711a7968e173e96df76f323be8d', '::1', 1552138461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323133383233303b757365725f69647c733a313a2231223b),
('edb796db069f68ff189d21fde25f8afbcef91037', '::1', 1552138793, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323133383534343b757365725f69647c733a313a2231223b),
('680bc2875e0f5409308668710fef40e69f18fe6f', '::1', 1552139119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323133383837353b757365725f69647c733a313a2231223b),
('73e25379be7d41dcdcbca832b4a5cac5b9a0e55c', '::1', 1552139478, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323133393232303b757365725f69647c733a313a2231223b),
('cef29502fcfc9b843b33731a50c1f86db67055d3', '::1', 1552139699, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323133393639333b757365725f69647c733a313a2231223b),
('d2ca3eb9e7531844f66270d81dac21741a00daee', '::1', 1552140599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134303333343b757365725f69647c733a313a2231223b),
('7ff3e6b54de37643b52f7a74efbbc27033bb74f1', '::1', 1552140868, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134303637323b757365725f69647c733a313a2231223b),
('522391d686a5e370eae89de46638850da0ca61dc', '::1', 1552141249, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134303939343b757365725f69647c733a313a2231223b),
('52fe2dd5f24a2446c8cef636be7f31c2fbb76f6e', '::1', 1552141301, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134313239383b757365725f69647c733a313a2231223b),
('ac83dd9bc060f857750b98db094e47fa66019ec0', '::1', 1552142654, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134323635323b757365725f69647c733a313a2231223b),
('13e2313a62486368e374b194c3800f9d34ced4d0', '::1', 1552144129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134333930383b757365725f69647c733a313a2231223b),
('b149ff459cc5dbdb54b65957e40eb2577529a3f2', '::1', 1552144501, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134343232303b757365725f69647c733a313a2231223b),
('8206f885a65b20a8eddfc3dd2512a6918e77dc75', '::1', 1552144580, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134343538303b757365725f69647c733a313a2231223b),
('508437cedcaeecbe66aa610f68d65d93b25449ac', '::1', 1552145785, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134353438353b757365725f69647c733a313a2231223b),
('770a429407f770b47b543d059aaa7042128e8170', '::1', 1552145786, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134353738363b757365725f69647c733a313a2231223b),
('355de9fd4adfb6e0d78ece15eb485487682994d0', '::1', 1552146841, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134363539353b757365725f69647c733a313a2231223b),
('09778db3694f712a3a617e402b23d090fced5cb2', '::1', 1552147236, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134373030303b757365725f69647c733a313a2231223b),
('ab5f777cbb4e365c01bf24d2b83cf9cf0f3dd844', '::1', 1552147493, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134373330353b757365725f69647c733a313a2231223b),
('80987d741486461d6cec086ef9293c90b409b872', '::1', 1552147920, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134373639363b757365725f69647c733a313a2231223b),
('4e3d2191d694351bb09a907b6ad253a4077c205f', '::1', 1552148443, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134383139363b757365725f69647c733a313a2231223b),
('bd988f6ed0b1a47021f44f6c8069b8f894bf9fea', '::1', 1552148809, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134383536393b757365725f69647c733a313a2231223b),
('2c1f0fe8dda1d8d4df5e724829376abc04153f85', '::1', 1552149274, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134383937363b757365725f69647c733a313a2231223b),
('48664034289f2a3bef40c8e0d147b4b88e2568a2', '::1', 1552149281, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134393237383b757365725f69647c733a313a2231223b),
('2a3b4e6b6d2052d51f41301d1ca414f99f782df0', '::1', 1552149879, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134393630363b757365725f69647c733a313a2231223b6974656d7c733a3130343a223c64697620636c6173733d22616c65727420616c6572742d737563636573732220726f6c653d22616c657274223e546865206d697373696e675f706572736f6e2064657461696c7320776173207375636365737366756c6c792064656c657465642e3c2f6469763e223b5f5f63695f766172737c613a313a7b733a343a226974656d223b733a333a226f6c64223b7d),
('b0e2a11e9026c75e671d23c6b6e9052278c26e5b', '::1', 1552150216, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323134393936303b757365725f69647c733a313a2231223b),
('265d41fbdde0a46c1f8fc04b4adfc70ab2d6c420', '::1', 1552150582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323135303238343b757365725f69647c733a313a2231223b),
('84bd6c397cc7fc6df80692338e47365b9f9f6761', '::1', 1552150937, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323135303634303b757365725f69647c733a313a2231223b),
('50d80a570d98a735d1d80d25179f90965125996f', '::1', 1552151155, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323135303935323b757365725f69647c733a313a2231223b),
('f147f627348b9b3deae3660cf86a290aa38e7391', '::1', 1552151662, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323135313430383b757365725f69647c733a313a2231223b),
('a43ed73509c548aa24fcf64fe0d3822bb7f6d95d', '::1', 1552152008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323135313730393b757365725f69647c733a313a2231223b),
('c01a04ee001a4612fdb3c284b3be7ed1b7840aec', '::1', 1552152276, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323135323037303b757365725f69647c733a313a2231223b),
('6e9e1e3d1af3ec245f8eeb8a329ef3e026b73d6c', '::1', 1552152662, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323135323535333b757365725f69647c733a313a2231223b),
('63c11d16fce5c0fb09a7da9b51ff501e66b20d77', '::1', 1552156090, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323135363037343b757365725f69647c733a313a2231223b),
('1a49fd834941be670e3f4957c109acc183c975ef', '::1', 1552197119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323139363931333b757365725f69647c733a313a2231223b),
('84edc9e29a8c95ab545c81f1834c7538902c3f47', '::1', 1552197954, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323139373935343b757365725f69647c733a313a2231223b),
('1787d0ee1ac68e1e81a886d39e5f4afbe541b41c', '::1', 1552198521, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323139383336353b757365725f69647c733a313a2231223b),
('e09a515e78c6580c274a5197644567dde82cb281', '::1', 1552199311, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323139393034303b757365725f69647c733a313a2231223b),
('3a35b48ba97802a4a7aef3a3d62190ead1ec1270', '::1', 1552199386, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323139393338323b757365725f69647c733a313a2231223b),
('326c6ff00d8b27e72af3d9883bdfcc924082f268', '::1', 1552199675, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323139393338363b757365725f69647c733a313a2231223b),
('582fa324fcbfbb19cc07e2868fe902a492a09ce0', '::1', 1552199835, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323139393730333b757365725f69647c733a313a2231223b),
('17b289267e3a404867f3a8117fa2b59103985212', '::1', 1552200360, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230303036323b757365725f69647c733a313a2231223b),
('69487ca2985759a493135ab694a8d56bee5e64c2', '::1', 1552200667, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230303337313b757365725f69647c733a313a2231223b),
('6d69783156b1d4cfff434eeb2ff10e1767e43477', '::1', 1552200943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230303731363b757365725f69647c733a313a2231223b),
('ebde2e7236d7c90ebf0df81fcaab4ed0cc0e0242', '::1', 1552201183, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230313132363b757365725f69647c733a313a2231223b),
('74f9b5b5b0133e164caaa2623793b41c1a244422', '::1', 1552201982, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230313738343b757365725f69647c733a313a2231223b),
('4d0ee005f8828d11f0f32aa0d929cb3738124c2e', '::1', 1552202382, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230323135343b757365725f69647c733a313a2231223b),
('af5b492c80d1cf14597a5dc86369c1e6ca8f93c3', '::1', 1552202773, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230323438383b757365725f69647c733a313a2231223b),
('b96ae6607ea7f29ecc3b76ea8b4e0443c6ce7b71', '::1', 1552203272, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230333134313b757365725f69647c733a313a2231223b),
('a7803f12b8abdd29b75c8800e2a563132b232039', '::1', 1552203468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230333436373b757365725f69647c733a313a2231223b),
('88d2243818af8bebeb4e6c568da8e63e738a79dc', '::1', 1552203809, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230333737333b757365725f69647c733a313a2231223b),
('b637d93af7bb1e4f9c1ec5034b95901443b978a5', '::1', 1552204851, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230343536333b757365725f69647c733a313a2231223b),
('99a1fda9381271b6fbdb9132eed517f8a3ba835f', '::1', 1552205164, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230343836343b757365725f69647c733a313a2231223b),
('998ceea683f004e2d0f0d264e48af7c51bcf830d', '::1', 1552205388, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230353231363b757365725f69647c733a313a2231223b),
('c4b8dd3bbbd2381c182f42bffdc66604e37aad80', '::1', 1552205847, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230353632373b757365725f69647c733a313a2231223b),
('402bd54b889cf55a9c9030fd507d6d6988b1e4df', '::1', 1552206728, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230363538363b757365725f69647c733a313a2231223b),
('4275717ff3f9ad089c67e030a89ad31671f4ef75', '::1', 1552207933, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230373636323b757365725f69647c733a313a2231223b),
('2ebbb830484e9904036be41a28d6932ac5bc52c1', '::1', 1552208181, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230373938323b757365725f69647c733a313a2231223b),
('3fdb3647b4daae073c3bbd9ad1084c54f932423f', '::1', 1552208547, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230383238383b757365725f69647c733a313a2231223b),
('f1617af06318cd210fd7d99b7924171cb7554394', '::1', 1552208745, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323230383730353b757365725f69647c733a313a2231223b),
('f80aedc85ab9cc0e5cc353f6391460437fd55933', '::1', 1552217099, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323231363834393b757365725f69647c733a313a2232223b),
('7f66394d2ae2aef532049f9fd8a886f7cb775cbe', '::1', 1552217540, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323231373234343b757365725f69647c733a313a2232223b),
('8b988bf94381671ad10aca3ba22dc131c30fdd10', '::1', 1552217830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323231373534353b757365725f69647c733a313a2232223b),
('ff180b5f5c74f7e15a6430a6559537b983dcdca3', '::1', 1552218097, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323231373836333b757365725f69647c733a313a2232223b),
('77d6b28075186864322c550b71954e0b4af9ffd1', '::1', 1552218469, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323231383137333b757365725f69647c733a313a2232223b),
('a3d2cf98658a75c6a42bf05df0b1de9e9699a56e', '::1', 1552218775, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323231383437363b757365725f69647c733a313a2232223b),
('38d599574d48fa4fee55e8ec0ff585b77304ea6c', '::1', 1552219072, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323231383737383b757365725f69647c733a313a2232223b),
('3ef9f730bb1241739147fdb6b4e22b1258abc70e', '::1', 1552219426, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323231393132363b757365725f69647c733a313a2231223b),
('05f9b2a0d13609c68b87e108c0e74c992ec9113b', '::1', 1552219561, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323231393433343b),
('818ff13a5de0a0b60649b15ed16ab570ca7d56df', '::1', 1553065003, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036343730393b757365725f69647c733a313a2231223b),
('b3d20004f8ee6722ed4be2e96ba0fda6d527d71e', '::1', 1553065310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036353031343b757365725f69647c733a313a2231223b),
('5c083ef0685fad1ff919fa573247ce95844f23e9', '::1', 1553065596, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036353331353b),
('b1c50b925452cc878a12875ab69314a61f64592f', '::1', 1553065920, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036353632343b757365725f69647c733a313a2232223b),
('13d98124dbf1be47d4e05b4b48b3039e9f39173b', '::1', 1553066146, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036353936393b757365725f69647c733a313a2231223b),
('49ec859261ae0067651ed961f059b4cab7127059', '::1', 1553066605, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036363334343b757365725f69647c733a313a2232223b),
('6110ec0c1e066fbf363b67f4e0b726b69e58144c', '::1', 1553066849, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036363738323b757365725f69647c733a313a2232223b),
('4b25c64d70cf13ad31e332d7811d27afa69a4c91', '::1', 1553067335, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036373130323b),
('f9d95dbb0af2315d010a58d52ecbfae29ce8abc5', '::1', 1553067740, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036373434373b757365725f69647c733a313a2231223b),
('54551abf2f578a5a5c7cbe8c6744c93ca68a97e4', '::1', 1553068050, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036373735343b),
('616ff4a5cae450a71d9d1d6d1547338c449db556', '::1', 1553068331, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036383037383b757365725f69647c733a313a2231223b),
('b083bdd9395942f124633524a708efd2130df568', '::1', 1553068660, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036383338323b757365725f69647c733a313a2231223b),
('3b41a017bd28fc80f74e73da385c64adc671f597', '::1', 1553068987, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036383737393b757365725f69647c733a313a2231223b),
('fed3e5028b01cc96239cd0db53c1dcb5ad7ff813', '::1', 1553069410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036393136333b757365725f69647c733a313a2231223b),
('f6a9330e06385acba77944833bbc30e2716a4d99', '::1', 1553069779, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036393533353b757365725f69647c733a313a2231223b),
('da5913420e42e230184d1c46f47ae250457da365', '::1', 1553070201, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333036393931353b),
('792799bd13ab04cd760358af56a1224109353ad0', '::1', 1553070529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333037303234353b),
('daa2d4ab4f44f2c3b6ce389aaf3fead0f13393cf', '::1', 1553071029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333037303733333b),
('206faedff2db3021a20c7e499a193100a849272b', '::1', 1553071271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333037313033373b),
('df940ca31504c3d3c07af641bfb4b5e5ef7e9dc9', '::1', 1553071562, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333037313335303b),
('0da9d3c32a4fd3c8ed232a7a8227b3cb88240780', '::1', 1553071714, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333037313730383b),
('7da437fb4660f4d165225d952792f09885245690', '::1', 1553072309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333037323037323b),
('26738eac8474151adc0a7d6f9e036db6477d9b9a', '::1', 1553072937, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333037323633373b757365725f69647c733a313a2231223b),
('fcf17cd1b3188632a79f78c37e2aaacb94c00a2d', '::1', 1553073097, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333037323934303b757365725f69647c733a313a2231223b),
('458dc6c97c10a52c321b8fda233d7fc61d50f90c', '::1', 1553073334, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333037333234383b757365725f69647c733a313a2231223b),
('087acbe9746e10f3810a0efc705682921477b2a1', '::1', 1553073676, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333037333635333b757365725f69647c733a313a2231223b);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `event_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_description`, `event_date`) VALUES
(1, 'Road Show', 'along Nairobi-kisumu road', 1533099600),
(3, 'New Audio Available', 'check on youtube,spotify', 1533272400),
(4, 'New Collabo With Octopizzo', 'Now officially on youtube or videos session', 1533877200),
(5, 'Tour Start Date', 'places - kisumu, Eldoret and Nairobi', 1534827600),
(6, 'KICC grand prize Awards', 'tickets available at www.tickets.com', 1536123600),
(7, 'Launch Party', 'at Carnivore', 1534050000),
(8, 'Launch Party', 'at Carnivore', 1530507600),
(9, 'Orientation about E-police', 'happening at student center', 1553925600);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `picture_alt` varchar(45) NOT NULL,
  `picture_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `picture`, `picture_alt`, `picture_description`) VALUES
(1, 'n55AxzZdBK46rDQX.jpg', 'our team', 'at main studio nairobi'),
(2, 'mcLQhaAYMcfAjtZv.jpg', 'take away', 'customer service'),
(3, '2MbQqqsdUZ48rxEg.jpg', 'teriyaki dish', 'meal served'),
(4, '6UYaveSngMqmhw9P.jpg', 'lunch', 'meal'),
(5, 'Quy3Qp75fLqXBJDw.jpg', 'Our Meal Pics', 'cheap and affordable'),
(6, 'B6CyQyh4Q5WdsFdK.jpg', 'sapa', 'for everyone meal'),
(7, 'NQz6mdnxdsLbRBZS.jpg', 'Brunch Menu Set', 'affordable prices'),
(8, 'UScYWTbzLYaNb8Kn.jpg', 'Manager', 'customer service'),
(9, 'HLT7kNzkX9vsuPha.jpg', 'Manager', 'for everyone meal'),
(10, 'Q3eGAwR5DFT5CfGa.jpg', 'customer', 'customer service'),
(11, 'bgZHWugN7TaEwvhZ.jpg', 'Manager', 'customer service'),
(12, 'ygaAA5sLgcqnBeNJ.jpg', 'Chacha', 'happy customers');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `picture_alt` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `date_reported` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `picture`, `picture_alt`, `title`, `description`, `date_reported`) VALUES
(1, 'BehAYGRsdBsvyP3m.jpg', 'our office', 'welcome all', '<h1><font color="#3333ff">e-police is a pocket away from reporting that crime.</font></h1><div><br></div>', 1552150029),
(2, 'awKPMrLgPHA6WGGn.jpg', 'police', 'Report Crime Near You Now.', 'Is the police station far away from where you are residing? you can now report any crime with us now and on your phone.', 1552150019),
(3, 'D7T5UZn5GTL4G7z7.jpg', 'missing person', 'missing person', '<div xss=removed><font face="Arial, Verdana"><span xss=removed>Name: Charles otieno,</span></font></div><div xss=removed><font face="Arial, Verdana"><span xss=removed>last seen: Kasarani Nairobi</span></font></div><font face="Arial, Verdana"><span xss=removed>any information about the where about of charles otieno will be appreciate.</span></font>', 1552250019),
(8, 'zXFzU99nuGZdwqeK.jpg', 'Chacha', 'missing person', 'Name: joel chacha.\r\nlocation: nairobi\r\nparents contacts: 0736281037', 1552150119),
(9, 'pxcCSvkwkZaYzZhK.jpg', 'Evance Omondi', 'missing person', 'Name: Evance Omondi\r\nLocation: Kisumu\r\n', 1552152191),
(10, 'YNqeJ6k6wAkfhS84.jpg', 'Faith Adhiambo', 'missing person', 'name: hello', 1552217387);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message_name` varchar(255) NOT NULL,
  `message_email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `message_subject` varchar(255) NOT NULL,
  `date_sent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_name`, `message_email`, `message`, `message_subject`, `date_sent`) VALUES
(13, 'Evans Omondi', 'ssss@gmail.com', 'hello again                  ', 'hello little beauties', 1533831938),
(14, 'customer 1', 'customer@gmail.com', 'Do you offer take-away services within Nairobi?\r\n\r\ni live in keleleshwa and i want to suprise my bae with a lunch delivered to her door step.\r\n\r\nmail me if that service is available.thank you\r\n                  \r\n                                    regards\r\n\r\n                  ', 'Take away services', 1533832478),
(15, 'customer 2', 'customer@gmail.com', '   job inquiry..               ', 'hello little beauties', 1533832550),
(18, 'Evans Omondi', 'customer@gmail.com', '  can  i get a table of four reserved at around 3pm today. mail me in two hours. thanks                 ', 'a night time table for two', 1533832968),
(19, 'evans', 'ssss@gmail.com', '   problem with exact time               ', 'a night time table for two', 1533833290);

-- --------------------------------------------------------

--
-- Table structure for table `missing_person`
--

CREATE TABLE `missing_person` (
  `id` int(11) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `picture_alt` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `date_reported` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missing_person`
--

INSERT INTO `missing_person` (`id`, `picture`, `picture_alt`, `title`, `description`, `date_reported`) VALUES
(5, 'zXFzU99nuGZdwqeK.jpg', 'Chacha', 'missing person', 'Name: joel chacha.\r\nlocation: nairobi\r\nparents contacts: 0736281037', 1552150019),
(6, 'pxcCSvkwkZaYzZhK.jpg', 'Evance Omondi', 'missing person', 'Name: Evance Omondi\r\nLocation: Kisumu\r\n', 1552152191),
(7, 'YNqeJ6k6wAkfhS84.jpg', 'Faith Adhiambo', 'missing person', 'name: hello', 1552217387);

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `audio_title` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `audio_title`, `audio`) VALUES
(1, 'coming home', 'sauti_sol_coming_home_mp3_74920.mp3'),
(2, 'alikiba', 'AliKiba_Wajua.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `report_title` varchar(100) NOT NULL,
  `report_description` text NOT NULL,
  `reported_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `report_title`, `report_description`, `reported_time`, `user_id`) VALUES
(1, 'Rape', 'i am a student at moi university and i reside around the school. i was approached by five men and the they forced me to have sex with them. now i am confused and i don''t know what to do.\r\n\r\nmy ID: 31887691\r\nmy phone no: 0755362828', 1552200062, 1),
(5, 'Cooking in the Hostel', 'Room 32 h ARE  cooking in the hostel.', 1553065277, 2),
(6, 'Mob justice in Hostel M', 'A Student is being beaten for stealing food.', 1553065547, 1),
(7, 'student strike', 'students are damaging the admin building.', 1553066011, 2),
(8, 'State of Housing in stage', 'poor', 1553066369, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `reviews_url` varchar(255) NOT NULL,
  `reviews_title` varchar(255) NOT NULL,
  `reviews_keywords` text NOT NULL,
  `reviews_description` text NOT NULL,
  `reviews_content` text NOT NULL,
  `date_published` int(11) NOT NULL,
  `customer` varchar(65) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `customer_full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviews_url`, `reviews_title`, `reviews_keywords`, `reviews_description`, `reviews_content`, `date_published`, `customer`, `picture`, `customer_full_name`) VALUES
(1, 'Customer-Reviews', 'Customer Reviews', 'Customer Reviews', 'Customer Reviews', '<span xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</span>', 1523077200, '@grace', 'DM4amfgExBxD9rwt.jpg', 'Grace Njuguna'),
(2, 'Customer-Reviews2', 'Customer Reviews2', 'Customer Reviews2', 'Customer Reviews2', '<span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</span>', 1530680400, '@bantura', '7HgxMPRnpJwVwcyJ.jpg', 'bantura gibson'),
(3, 'Third-Customer-Reviews', 'Third Customer Reviews', 'Third Customer Reviews', 'Third Customer Reviews', '<span xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</span>', 1530766800, '@valary', 'TrbjrhygyG4mearT.jpg', 'valary'),
(5, 'Customer-Reviews', 'Customer Reviews', 'Customer Reviews', 'Customer Reviews', '<span xss="removed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</span>', 1537938000, '@web developer', 'AswKrvm3uZMYReCy.jpg', 'evans the developer');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services_url` varchar(255) NOT NULL,
  `services_title` varchar(255) NOT NULL,
  `services_keywords` text NOT NULL,
  `services_description` text NOT NULL,
  `services_content` text NOT NULL,
  `date_published` int(11) NOT NULL,
  `author` varchar(65) NOT NULL,
  `picture` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_url`, `services_title`, `services_keywords`, `services_description`, `services_content`, `date_published`, `author`, `picture`) VALUES
(1, 'online-police-station', 'online police station', 'online police station', 'online police station', '<div xss=removed><br></div><div xss=removed><font face="Arial, Verdana"><span xss=removed>online police station where users can use their phone to report a crime and we at the police station will send an agent to verify the issue and take appropriate measure.</span></font></div>', 1551852000, 'mayhouse manager', 'DRMB4HC7PxYkaaRP.jpg'),
(2, 'Community-works', 'Community works', 'Community works', 'Community works', '<font face="Arial, Verdana"><span xss="removed">We will be doing community works so as to be part of the community and to let you know that we are your brothers and sisters so that to reduce fear among the police.</span></font>', 1581228000, 'manager', 'XdQaqMjwszANhpAC.jpg'),
(3, 'Our-Agents-At-Your-Door', 'Our Agents At Your Door', 'Our Agents At Your Door', 'Our Agents At Your Door', '<font face="Arial, Verdana"><span xss="removed">We will be sending agents at your door after 5 hours of report to get the clear details and to start the investigations</span></font>', 1573365600, 'evans the developer', 'qaBvJCqzcUrzNBmR.jpg'),
(4, 'EQUIPMENTS', 'EQUIPMENTS', 'EQUIPMENTS', 'EQUIPMENTS', '<font face="Arial, Verdana"><span xss=removed>EQUIPMENTS</span></font>', 1530766800, 'manager', 'K9QkuNMdL82Pv5bQ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `site_cookies`
--

CREATE TABLE `site_cookies` (
  `id` int(11) NOT NULL,
  `cookie_code` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `expiry_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `picture_alt` varchar(45) NOT NULL,
  `member_title` varchar(255) NOT NULL,
  `picture_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `picture`, `picture_alt`, `member_title`, `picture_description`) VALUES
(4, 'VdaxR4s5s4duMtpF.jpg', 'our team', 'Agent', 'our team'),
(5, 'yvfAjQHfkME5uhHK.jpg', 'evance webguy', 'Agent', 'enjoying making you happy'),
(6, 'Q2dctYpBQTn4XmTU.jpg', 'Manager', 'Head of E-police ', 'IT department'),
(7, '7zwRge8Ttqbqpq8v.jpg', 'EVANS', 'IT DEVELOPER', 'DEVELOPED THE WEBSITE');

-- --------------------------------------------------------

--
-- Table structure for table `store_items`
--

CREATE TABLE `store_items` (
  `id` int(11) NOT NULL,
  `item_title` varchar(255) NOT NULL,
  `item_url` varchar(255) NOT NULL,
  `item_price` decimal(7,2) NOT NULL,
  `item_description` text NOT NULL,
  `big_pic` varchar(255) NOT NULL,
  `small_pic` varchar(255) NOT NULL,
  `was_price` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_items`
--

INSERT INTO `store_items` (`id`, `item_title`, `item_url`, `item_price`, `item_description`, `big_pic`, `small_pic`, `was_price`) VALUES
(1, 'dd', '', '34.00', 'fg', '', '', '45.00'),
(2, 'dd', '', '34.00', 'fg', '', '', '45.00'),
(3, 'dd', '', '34.00', 'fg', '', '', '45.00'),
(4, 'ddd', '', '34.00', 'fg', '', '', '45.00'),
(5, 'music staff', '', '34.00', 'cool music instrument', '', '', '45.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `identification_no` int(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pword`, `identification_no`, `date_created`) VALUES
(1, 'chacha', 'evansomondi05@gmail.com', '$2y$11$ftC07jDtKv1Vj5b7upnB1.7qj1ztcR9AORfWlLpL9nh/I15LxjhUW', 31778798, 1551891138),
(2, 'evance', 'evancewebguy@gmail.com', '$2y$11$vEuAQUfUfX44xUhQu3TFCuR1Pn38TyiM8oNECYTtlzAI6C6cu.uAC', 31778798, 1552217007);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_title`, `video_source`) VALUES
(4, 'trial video', 'http://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1'),
(5, 'Starting with HMVC CODEIGNITER', 'http://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1');

-- --------------------------------------------------------

--
-- Table structure for table `webpages`
--

CREATE TABLE `webpages` (
  `id` int(11) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_keywords` text NOT NULL,
  `page_description` text NOT NULL,
  `page_headline` varchar(255) NOT NULL,
  `page_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webpages`
--

INSERT INTO `webpages` (`id`, `page_url`, `page_title`, `page_keywords`, `page_description`, `page_headline`, `page_content`) VALUES
(1, '', 'e-police', 'e-police kenya', 'e-police kenya', 'e-police', '<span xss="removed">Welcome all to moi university e-police system.Report Crimes in Moi University Campus.</span>'),
(2, 'contactus', 'Contact Us', 'contact dnice entertainment', 'contact us dnice entertainment', '', '<h1>about us</h1><div>contact dnice entertainment</div>');

-- --------------------------------------------------------

--
-- Table structure for table `youraccount`
--

CREATE TABLE `youraccount` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `telnum` varchar(30) NOT NULL,
  `email` varchar(65) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `town` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `date_created` int(11) NOT NULL,
  `identification_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youraccount`
--

INSERT INTO `youraccount` (`id`, `username`, `firstname`, `lastname`, `county`, `address1`, `address2`, `telnum`, `email`, `pword`, `town`, `picture`, `role`, `date_created`, `identification_no`) VALUES
(1, 'joel', 'Evans', 'Akello', 'KISUMU', 'p.o box 95, 40101', 'p.o box 95, 40101', '0716627844', 'evansomondi05@gmail.com', '$2y$11$KNrzhFIx1diXyssQH2.0fuA/m4VkMYNLTwRXhK7InNJnkUVCEe1EC', 'AHERO', 'bjCTZgVuY4sY5fSL.jpg', 'admin', 0, 31778798);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_reports`
--
ALTER TABLE `admin_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missing_person`
--
ALTER TABLE `missing_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_cookies`
--
ALTER TABLE `site_cookies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_items`
--
ALTER TABLE `store_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webpages`
--
ALTER TABLE `webpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youraccount`
--
ALTER TABLE `youraccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admin_reports`
--
ALTER TABLE `admin_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `missing_person`
--
ALTER TABLE `missing_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `site_cookies`
--
ALTER TABLE `site_cookies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `store_items`
--
ALTER TABLE `store_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `webpages`
--
ALTER TABLE `webpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `youraccount`
--
ALTER TABLE `youraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
