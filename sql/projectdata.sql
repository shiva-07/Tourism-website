-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:Apr 03, 2018 at 09:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id`int NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(250),
  `cpassword` varchar(250),
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

-- --------------------------------------------------------

--
-- Table structure for table `ladakh`
--

CREATE TABLE `ladakh` (
  `id`int NOT NULL AUTO_INCREMENT,
  `user` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(10) NOT NULL,
  `traveller` varchar(250),
  `children` varchar(250),
  `adults` varchar(250),
  `Transportation` varchar(250),
  `package` varchar(250),
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `andaman`
--

CREATE TABLE `andaman` (
  `id`int NOT NULL AUTO_INCREMENT,
  `user` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(10) NOT NULL,
  `traveller` varchar(250),
  `children` varchar(250),
  `adults` varchar(250),
  `Transportation` varchar(250),
  `package` varchar(250),
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table `jaipur`
--

CREATE TABLE `jaipur` (
  `id`int NOT NULL AUTO_INCREMENT,
  `user` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(10) NOT NULL,
  `traveller` varchar(250),
  `children` varchar(250),
  `adults` varchar(250),
  `Transportation` varchar(250),
  `package` varchar(250),
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

-- --------------------------------------------------------

--
-- Table structure for table `haridwar`
--

CREATE TABLE `haridwar` (
  `id`int NOT NULL AUTO_INCREMENT,
  `user` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(10) NOT NULL,
  `traveller` varchar(250),
  `children` varchar(250),
  `adults` varchar(250),
  `Transportation` varchar(250),
  `package` varchar(250),
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `id`int NOT NULL AUTO_INCREMENT,
  `user` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(10) NOT NULL,
  `comments` varchar(250),
   PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id`int NOT NULL AUTO_INCREMENT,
  `card` varchar(50) NOT NULL,
  `nameoc` varchar(50) NOT NULL,
  `month` int(10) NOT NULL,
  `year` int(10) NOT NULL,
  `cvv` int(10),
   PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;