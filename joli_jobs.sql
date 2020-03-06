-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 11:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joli_jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_vacancy`
--

CREATE TABLE `apply_vacancy` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `job` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` varchar(30) NOT NULL,
  `post` varchar(30) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `telephone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_vacancy`
--

INSERT INTO `apply_vacancy` (`id`, `name`, `email`, `mobile`, `qualification`, `job`, `district`, `resume`, `address`, `age`, `post`, `pincode`, `comment`, `telephone`) VALUES
(1, 'abu', 'abu@gmail.com', 'saas', 'saas', 'saas', '', 'saas', 'saas', 'saas', 'saas', 'saas', 'saas', 'saas'),
(2, 'asdsa', 'favas@gmail.com', 'asdasd', 'asdasdas', 'adada', 'asdasda', 'joli_jobs.sql', 'as', 'dasdasd', 'dsadad', 'adasd', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'admin', 'jolijobs@123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `about_me` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `sponsor_type` varchar(20) NOT NULL,
  `sponsor_name` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `present_address` varchar(1000) NOT NULL,
  `permanent_address` varchar(1000) NOT NULL,
  `educational_qualification` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `name_father` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `age` varchar(3) NOT NULL,
  `marriage` varchar(1) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `technical_qualification` varchar(100) NOT NULL,
  `eng_strength` varchar(1) NOT NULL,
  `hin_strength` varchar(1) NOT NULL,
  `mal_strength` varchar(1) NOT NULL,
  `eng_post_applied` varchar(30) NOT NULL,
  `hin_post_applied` varchar(30) NOT NULL,
  `mal_post_applied` varchar(30) NOT NULL,
  `eng_experience` varchar(10) NOT NULL,
  `hin_experience` varchar(10) NOT NULL,
  `mal_experience` varchar(10) NOT NULL,
  `eng_salary` varchar(10) NOT NULL,
  `hin_salary` varchar(10) NOT NULL,
  `mal_salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `about_me`, `email`, `password`, `sponsor_type`, `sponsor_name`, `gender`, `present_address`, `permanent_address`, `educational_qualification`, `name`, `name_father`, `dob`, `age`, `marriage`, `religion`, `telephone`, `mobile`, `resume`, `technical_qualification`, `eng_strength`, `hin_strength`, `mal_strength`, `eng_post_applied`, `hin_post_applied`, `mal_post_applied`, `eng_experience`, `hin_experience`, `mal_experience`, `eng_salary`, `hin_salary`, `mal_salary`) VALUES
(2, 'saddgfgvh', 'favas@gmail.com', '', 'father', 'zczxc', 'm', 'xzczxc', 'zxczxczxc', 'zxczxcz', 'czcxz', 'xczcz', 'zxczxc', '7', 's', 'm', 'xczxc', 'cxzczxc', 'joli_jobs.sql', 'zxczxc', '1', '1', '1', 'xczxc', 'zxczc', 'czxczx', 'czxc', 'xzczc', 'zcxc', 'czxc', 'czxc', 'xczc'),
(3, 'adsdasadas', 'abdulla@gmail.com', '123', 'father', 'asdad', 'm', 'adasdad', 'asdas', 'adassdad', 'dasdasdas', 'dadasdasd', 'adsadasd', 'sad', 's', 'm', 'dassda', 'dadasdasd', 'joli_jobs.sql', 'dsad', '1', '1', '1', 'sdadasd', 'asdsada', 'sadasd', 'asdsasd', 'dadsasd', 'dasdasd', 'assdasdada', 'dadasda', 'adadasd'),
(4, 'adsdasadas', 'abdulla@gmail.com', '123', 'father', 'asdad', 'm', 'adasdad', 'asdas', 'adassdad', 'dasdasdas', 'dadasdasd', 'adsadasd', 'sad', 's', 'm', 'dassda', 'dadasdasd', 'joli_jobs.sql', 'dsad', '1', '1', '1', 'sdadasd', 'asdsada', 'sadasd', 'asdsasd', 'dadsasd', 'dasdasd', 'assdasdada', 'dadasda', 'adadasd'),
(5, 'sasasdaas', 'favas@gmail.com', '123', 'father', 'fsdfsf', 'm', 'sdasd', 'asdadad', 'asdasdad', 'dadas', 'dasdadas', 'dasda', 'das', 'm', 'm', 'adasd', 'asdasdada', 'joli_jobs.sql', 'dsasda', '1', '1', '1', 'sadasdadada', 'adadad', 'asdadad', 'dasdasdasd', 'dasdasd', 'adadasd', 'dada', 'adadasda', 'adsad'),
(6, 'asddaa', 'fasil@gmail.com', '122', 'father', 'adasdad', 'm', 'asdadas', 'dasdasd', 'dasdsad', 'dasdasdadassd', 'adasd', 'ada', 'asd', 's', 'm', 'sdsa', 'dasdada', 'joli_jobs.sql', 'dadada', '1', '1', '1', 'adad', 'dasdas', 'asdasds', 'asdasd', 'asdasda', 'asdad', 'asdasda', 'asdasdas', 'dasdad'),
(7, 'ads', 'fasil@gmail.com', '123', 'father', 'adad', 'm', 'dasdsadad', 'adasdasd', 'adasdad', 'adasdasd', 'asdasd', 'assdada', 'das', '0', 'h', 'asdasd', 'asdsadadas', 'joli_jobs.sql', 'adada', '1', '1', '1', 'sadasd', 'adadadad', 'adasdsa', 'asd', 'sadasd', 'asdasdasd', 'asda', 'dasdasd', 'asd'),
(8, 'scsdcxc', 'fasL@gmail.com', '111', 'father', 'zxczxc', 'm', 'czxczxczx', 'zxczxczx', 'cxzxczc', 'zczxc', 'zxczcz', 'czxczxczx', 'czc', 's', 'm', 'zczxc', 'zxczxczxcz', 'joli_jobs.sql', 'czczc', '1', '1', '1', 'dsdfd', 'fdsfsdfsdfs', 'dfsdf', 'sdfsf', 'sdfsdf', 'dsfsf', 'sdfsdf', 'sdfsdfsdf', 'sdf'),
(9, 'scsdcxc', 'fasL@gmail.com', '111', 'father', 'zxczxc', 'm', 'czxczxczx', 'zxczxczx', 'cxzxczc', 'zczxc', 'zxczcz', 'czxczxczx', 'czc', 's', 'm', 'zczxc', 'zxczxczxcz', 'joli_jobs.sql', 'czczc', '1', '1', '1', 'dsdfd', 'fdsfsdfsdfs', 'dfsdf', 'sdfsf', 'sdfsdf', 'dsfsf', 'sdfsdf', 'sdfsdfsdf', 'sdf'),
(10, 'asdasdd', 'fasil@gmail.com', '111', 'father', 'dwas', 'm', 'asdasd', 'adasda', 'dasd', 'dasdasdasd', 'asdasd', 'sadsadsada', 'das', 'd', 'c', 'asdasd', 'asdsada', 'joli_jobs.sql', 'sdasdas', '1', '1', '1', 'asdasd', 'asda', 'dasd', 'asdasda', 'asdasdaasd', 'asdas', 'sdasd', 'das', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(255) NOT NULL,
  `tittle` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `company_address` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `position` varchar(15) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `residence` varchar(30) NOT NULL,
  `post_vacancy_1` varchar(30) NOT NULL,
  `number_of_vacancy_1` varchar(5) NOT NULL,
  `gender_1` varchar(1) NOT NULL,
  `experience_1` varchar(2) NOT NULL,
  `working_time_1` varchar(15) NOT NULL,
  `skill_required_1` varchar(100) NOT NULL,
  `salary_offered_1` varchar(7) NOT NULL,
  `location_1` varchar(50) NOT NULL,
  `post_vacancy_2` varchar(30) NOT NULL,
  `number_of_vacancy_2` varchar(5) NOT NULL,
  `gender_2` varchar(1) NOT NULL,
  `experience_2` varchar(2) NOT NULL,
  `working_time_2` varchar(15) NOT NULL,
  `skill_required_2` varchar(100) NOT NULL,
  `salary_offered_2` varchar(7) NOT NULL,
  `location_2` varchar(50) NOT NULL,
  `post_vacancy_3` varchar(30) NOT NULL,
  `number_of_vacancy_3` varchar(5) NOT NULL,
  `gender_3` varchar(1) NOT NULL,
  `experience_3` varchar(2) NOT NULL,
  `working_time_3` varchar(15) NOT NULL,
  `skill_required_3` varchar(100) NOT NULL,
  `salary_offered_3` varchar(7) NOT NULL,
  `location_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `tittle`, `date`, `description`, `company_address`, `email`, `mobile`, `contact_person`, `position`, `office_phone`, `residence`, `post_vacancy_1`, `number_of_vacancy_1`, `gender_1`, `experience_1`, `working_time_1`, `skill_required_1`, `salary_offered_1`, `location_1`, `post_vacancy_2`, `number_of_vacancy_2`, `gender_2`, `experience_2`, `working_time_2`, `skill_required_2`, `salary_offered_2`, `location_2`, `post_vacancy_3`, `number_of_vacancy_3`, `gender_3`, `experience_3`, `working_time_3`, `skill_required_3`, `salary_offered_3`, `location_3`) VALUES
(3, 'JOB', '2020-03-18', 'AHJDGSDASHJDGJADJHAGDHJADASGDHGASHDA', 'SDADASDA', 'favas@gmail.com', '13123123', 'ASDSADADA', 'SDASDASDASSD', 'SDASDAS', 'DASDADAD', 'ASDASDAS', 'DSADA', 'm', 'DA', 'DSADA', 'DASDASDSA', 'DSADASD', 'ASDADAD', 'ASDASDAS', 'DASDA', 'm', 'DA', 'DAASDASD', 'DADAD', 'DASDA', 'ADASDSA', 'DASDASD', 'ASDAD', 'm', 'AS', 'ASDDAS', 'DASDAS', 'DASDA', 'DA'),
(4, 'asdasd', '2020-03-07', 'asdsadada', 'saddasdad', 'fasil@gmail.com', 'dasdada', 'asdasda', 'sdasdsad', 'asdasda', 'dasdsadad', 'dasdasd', 'asdas', 'm', 'as', 'asdasd', 'asdasdas', 'asasd', 'dasd', 'ASDASDASasdasd', 'sdasd', 'm', 'as', 'dasd', 'dasda', 'asdasd', 'adasda', 'asdasd', 'asda', 'm', 'as', 'asdasd', 'asdas', 'dsadsad', 'dasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_vacancy`
--
ALTER TABLE `apply_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_vacancy`
--
ALTER TABLE `apply_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
