-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2020 at 05:15 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j_jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', '32250170a0dca92d53ec9624f336ca24');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `vacancy_id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `vacancy_id`, `date`) VALUES
(1, '2', '3', '2020-04-01'),
(2, '3', '3', '2020-04-01'),
(3, '4', '3', '2020-04-01'),
(4, '5', '3', '2020-04-01'),
(5, '6', '4', '2020-04-01'),
(6, '1', '4', '2020-04-01'),
(7, '1', '5', '2020-04-01'),
(8, '1', '11', '2020-04-20'),
(10, '1', '12', '2020-04-20'),
(11, '1', '6', '2020-04-20'),
(12, '1', '10', '2020-04-21'),
(13, '1', '7', '2020-04-23'),
(14, '1', '3', '2020-04-24'),
(15, '12', '13', '2020-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'category 1'),
(2, 'category 2'),
(3, 'category 3'),
(4, 'category 4'),
(5, 'category 5'),
(6, 'category 6'),
(7, 'category 7');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `dob` varchar(20) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `present_address` varchar(500) NOT NULL,
  `permanent_address` varchar(500) DEFAULT NULL,
  `educational_qualification` varchar(30) DEFAULT NULL,
  `age` varchar(2) DEFAULT NULL,
  `payment` varchar(7) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `txn` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `dob`, `resume`, `email`, `phone`, `gender`, `present_address`, `permanent_address`, `educational_qualification`, `age`, `payment`, `password`, `txn`) VALUES
(1, 'abu', 'thahir', '22-06-1997', 'file1.pdf', 'msabuthahirk@gmail.com', '9061827202', 'm', 'kelamthodi house', 'kelamthodi house', 'bachelors in technology', '23', '5000', 'pass123', NULL),
(2, 'abu', 'thahir', '22-06-1997', 'file1.pdf', 'msabuthahirk@gmail.com', '9061827202', 'm', 'kelamthodi house', 'kelamthodi house', 'bachelors in technology', '23', '5000', 'pass123', NULL),
(3, 'abu', 'thahir', '22-06-1997', 'file1.pdf', 'msabuthahirk@gmail.coma', '9061827202', 'm', 'kelamthodi house', 'kelamthodi house', 'bachelors in technology', '23', '5000', 'pass123', NULL),
(4, 'abu', 'thahir', '22-06-1997', 'file1.pdf', 'msabuthahirk@gmail.com', '9061827202', 'm', 'kelamthodi house', 'kelamthodi house', 'bachelors in technology', '23', '5000', 'pass123', NULL),
(5, 'abu', 'thahir', '22-06-1997', 'file1.pdf', 'msabuthahirk@gmail.com', '9061827202', 'm', 'kelamthodi house', 'kelamthodi house', 'bachelors in technology', '23', '5000', 'pass123', NULL),
(6, 'abu', 'thahir', '22-06-1997', 'file1.pdf', 'msabuthahirk@gmail.com', '9061827202', 'm', 'kelamthodi house', 'kelamthodi house', 'bachelors in technology', '23', '5000', 'pass123', NULL),
(7, 'abu', 'thahir', '22-06-1997', 'file1.pdf', 'msabuthahirk@gmail.com', '9061827202', 'm', 'kelamthodi house', 'kelamthodi house', 'bachelors in technology', '23', '5000', 'pass123', NULL),
(8, 'abu', 'thahir', '22-06-1997', 'file1.pdf', 'msabuthahirk@gmail.com', '9061827202', 'm', 'kelamthodi house', 'kelamthodi house', 'bachelors in technology', '23', '5000', 'pass123', NULL),
(9, 'abu', 'thahir', '22-06-1997', 'file1.pdf', 'msabuthahirk@gmail.com', '9061827202', 'm', 'kelamthodi house', 'kelamthodi house', 'bachelors in technology', '23', '5000', 'pass123', NULL),
(10, 'abu', 'thahir', '22-06-1997', 'file1.pdf', 'msabuthahirk@gmail.com', '9061827202', 'm', 'kelamthodi house', 'kelamthodi house', 'bachelors in technology', '23', '5000', 'pass123', NULL),
(11, 'asdasd', 'asdasd', 'asda', 'asda', 'asd', 'asd', 'a', 'asd', 'asd', 'asd', '24', '250', 'asdas', 'asd'),
(12, 'Abuthahir K', '', '22-02-1996', 'uploads/9562085538.png', 'abuthahir8520@gmail.com', '9562085538', 'm', 'Kelamthodi, Kulukkallur, Palakkad', 'Kelamthodi, Kulukkallur, Palakkad', 'B.Tech CSE', '24', '520', 'b4af804009cb036a4ccdc33431ef9ac9', 'pay_EiOYUgMysvzIE8'),
(13, 'asdadas', '', '22-06-2020', 'uploads/741852963.', 'test@test', '741852963', 'm', 'asdasdasd', 'asdasdasd', 'asdasd', '36', '800', 'e10adc3949ba59abbe56e057f20f883e', 'pay_EiOwq6gEW8Yl6P');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

DROP TABLE IF EXISTS `vacancies`;
CREATE TABLE IF NOT EXISTS `vacancies` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(30) NOT NULL,
  `job_role` varchar(30) NOT NULL,
  `employer_name` varchar(50) NOT NULL,
  `job_description` varchar(500) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `date_post` date NOT NULL,
  `whatsapp_number` varchar(15) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `job_title`, `job_role`, `employer_name`, `job_description`, `contact_number`, `date_post`, `whatsapp_number`, `category`) VALUES
(1, 'engineer', 'project manager', 'microsoft', 'lorem ipsum', '919061827202', '2020-04-06', '+919061827202', '6'),
(2, 'engineer', 'project manager', 'microsoft', 'lorem ipsum', '919061827202', '2020-04-06', '+919061827202', '6'),
(3, 'engineer', 'project manager', 'microsoft', 'lorem ipsum', '919061827202', '2020-04-06', '+919061827202', '6'),
(4, 'engineer', 'project manager', 'microsoft', 'lorem ipsum', '919061827202', '2020-04-06', '+919061827202', '6'),
(5, 'engineer', 'project manager', 'microsoft', 'lorem ipsum', '919061827202', '2020-04-06', '+919061827202', '6'),
(6, 'engineer', 'project manager', 'microsoft', 'lorem ipsum', '919061827202', '2020-04-06', '+919061827202', '6'),
(7, 'engineer', 'project manager', 'microsoft', 'lorem ipsum', '919061827202', '2020-04-06', '+919061827202', '6'),
(8, 'engineer', 'project manager', 'microsoft', 'lorem ipsum', '919061827202', '2020-04-06', '+919061827202', '6'),
(9, 'engineer', 'project manager', 'microsoft', 'lorem ipsum', '919061827202', '2020-04-06', '+919061827202', '6'),
(10, 'engineer', 'project manager', 'microsoft', 'lorem ipsum', '919061827202', '2020-04-06', '+919061827202', '6'),
(11, 'sdfs', 'sdfs', 'sdf', 'sdf', 'sdf', '2020-04-10', 'sdfsdf', '6'),
(12, 'tested', 'job rolesad', 'abuasd', 'new job asdasd', '9061827202', '2020-04-15', '9061827202', '5'),
(13, 'asdas', 'ghs', 'hsgdf', 'fhsgdf', 'ghsdf', '2020-04-15', 'sghdf`', '6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
