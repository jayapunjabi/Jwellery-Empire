-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2018 at 05:04 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jwellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `email`, `password`) VALUES
(1, 'anita@gmail.com', 'anita'),
(2, 'jaya@gmail.com', 'jaya'),
(3, 'karishma@gmail.com', 'karishma');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `name`, `status`) VALUES
(101, 'rings', 'Active'),
(102, 'necklace', 'Active'),
(103, 'bracelets', 'Active'),
(104, 'earings', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fname`, `lname`, `email`, `phone_no`, `message`) VALUES
('anita', 'verma', 'anita@gmail.com', '9134567812', 'Excellent designs'),
('olivia', 'silvester', 'olivia123@gmail.com', '9234567921', 'beautiful kundan art'),
('first', 'last', 'em', '23456789', 'review'),
('kavita', '', 'kavita234@yahoo.com', '34567', 'Your Feedback'),
('karishma', 'rupani', 'kari234@yahoo.com', '345675678', 'Your Feedback');

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE IF NOT EXISTS `mycart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `id` int(8) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mycart`
--


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` varchar(11) NOT NULL,
  `description` varchar(400) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cid`, `name`, `price`, `discount`, `description`, `status`) VALUES
(1, 101, 'solitarie diamond ring', 50000, '10%', 'Height(mm)= 24.35 Weight(mm)= 22.15 Bandwidth(mm)= 1.6 Total Carat Weight(ct.wt.)= 0.15 0.084', 'Active'),
(2, 101, 'Platinum ring', 30000, '10%', 'Height(mm)= 24.35 Weight(mm)= 22.15\r\nBandwidth(mm)= 1.6 Total Carat Weight(ct.wt.)= 0.15 0.084', 'Active'),
(3, 104, 'The Feryal Diamond Earings', 35000, '30%', 'Length(mm)= 62.9 Total Carat weight(ct.wt.)=1.092 0.188', 'Active'),
(4, 103, 'The Simara Bangle', 89000, '13%', 'Height(mm)= 67.7 Weight(mm)= 3.71 Product weight(Approx)=11.63gm\r\nTotal Carat Weight(ct.wt.)= 0.828', 'Active'),
(5, 101, 'Double Heart Gold Diamond Ring', 85000, '20%', 'Height(mm)= 24.35 Weight(mm)= 22.15\r\nBandwidth(mm)= 1.6 Total Carat Weight(ct.wt.)= 0.15 0.084', 'Active'),
(6, 101, 'The Feryal Diamond Ring', 90000, '10%', 'Height(mm)= 24.35 Weight(mm)= 22.15\r\nBandwidth(mm)= 1.5 Total Carat Weight(ct.wt.)= 0.15 0.084', 'Active'),
(7, 102, 'Kundan stone Necklace', 1000000, '5%', 'Height(mm)= 185.0 Weight(mm)= 151.0 Total Carat Weight(ct.wt.)= 0.15 0.084', 'Active'),
(8, 102, 'The Blossom Necklace', 484000, '10%', 'Height(mm)= 185.0 Weight(mm)= 151.0 Total Carat Weight(ct.wt.)= 0.15 0.084', ''),
(9, 102, 'The Harlie Necklace', 86000, '5%', 'Height(mm)= 196.46 Weight(mm)= 151.0\r\nTotal no of diamonds 56', 'Active'),
(10, 103, 'The Sweet Rhythm Bracelet', 43000, '10%', 'Height(mm)= 177.0 Weight(mm)= 3.8 Product Weight(approx)= 3.62gm', 'Active'),
(11, 103, 'The Ceyone Bracelet', 30000, '20%', 'Height(mm)= 11.4 Weight(mm)= 56.0\r\nTotal Product Weight(approx)= 5.45', 'Active'),
(12, 103, 'The Alique Bracelet', 60000, '10%', 'Height(mm)= 18.5 Weight(mm)= 19.7\r\nTotal Product Weight(Approx)= 16.72gm', 'Active'),
(13, 104, 'The Sarina Drop Earing', 45000, '10%', 'Height(mm)= 41.04 Width(mm)= 17.92\r\nTotal Carat Weight(ct.wt.)= 0.15 0.084', 'Active'),
(14, 104, 'The Cira RoseQuartz Earrings', 21000, '5%', 'Height(mm)= 50.0 Width(mm)= 6.97.0\r\nTotal Carat Weight(ct.wt.)= 0.15 0.084', 'Active'),
(15, 104, 'The Prakit Ear Cuffs', 19000, '10%', 'Height(mm)= 35.56 Weight(mm)= 8.35\r\n', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `user_name`, `password`) VALUES
(1, 'anita', 'anitajain123@gmail.com', 'anita123'),
(2, 'karishma', 'karishma12@gmail.com', 'kar12'),
(4, 'yawar', 'y@gmail.com', 'ya1234'),
(5, 'simmi', 'simmi123@gmail.com', '1234'),
(6, 'kavitakr', 'kr123@gmail.com', 'kr1234');
