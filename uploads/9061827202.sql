-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2020 at 03:02 PM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmersfz_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `ffz_employee_reg`
--

CREATE TABLE `ffz_employee_reg` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `emp_address` text CHARACTER SET latin1 NOT NULL,
  `emp_location` text CHARACTER SET latin1 NOT NULL,
  `emp_phone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `emp_email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `emp_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `emp_id_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `emp_id_img` varchar(255) CHARACTER SET latin1 NOT NULL,
  `emp_status` int(11) NOT NULL DEFAULT '1' COMMENT '1-> Active 2-> Disabled',
  `is_delivery_enabled` tinyint(4) DEFAULT '1',
  `emp_store_id` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ffz_employee_reg`
--

INSERT INTO `ffz_employee_reg` (`emp_id`, `emp_name`, `emp_address`, `emp_location`, `emp_phone`, `emp_email`, `emp_type`, `emp_id_type`, `emp_id_img`, `emp_status`, `is_delivery_enabled`, `emp_store_id`) VALUES
(1, 'Noble', 'Noble Mathew', 'Ernakulam, Kerala, India', '7293943993', 'noblemathewtm@gmail.com', 'Software Section', 'Licence', 'IMG_20161225_134748-1[1].jpg', 1, 1, 1),
(2, 'Anandhu', 'cherthala', 'Cherthala, Kerala, India', '9846638473', 'ananthu@farmersfz.com', 'Office Staff', 'Licence', '0001  .jpg', 1, 1, 1),
(3, 'Pradeep P S ', 'Punarka house', 'Kodaly, Kerala, India', '7293943993', 'pradeep@farmersfz.com', 'Office Staff', 'Licence', '15168590691032038526710.jpg', 1, 1, 1),
(4, 'Anandu  P R ', 'Padinjaarethoppil house,Manappuram P O , cherthala, Lappuzha, 688526', 'Cherthala, Kerala, India', '8547754609', 'anandupr0@gmail.com', 'Office Staff', 'Licence', 'IMG_20180125_140422239.jpg', 1, 1, 1),
(5, 'NIbin K Babu', 'Kizzhakkekalayil house, Karipadam P O ,Vaikom', 'Kanjiramattom, Kulayettikara, Kerala, India', '9746945848', 'nibbinkbabu@gmail.com', 'Office Staff', 'Licence', 'nibin_dlvry.jpg', 1, 1, 1),
(6, 'Nikhil Lawerence', 'Pulikkathara Nikarathil house, Mundanveli p o , Ernakulam, 682507', 'Mundamveli, Kochi, Kerala, India', '9496444960', 'nikhillawrence88@gmail.com', 'Delevery Boy', 'Licence', '20180210-095344_p0.jpg', 1, 1, 1),
(7, 'Kiran M F', 'Mukkath House, Mundamveli P O, Kochi 682507', 'Mundamveli, Kochi, Kerala, India', '9544314173', 'kiranfelix1997@gmail.com', 'Office Staff', 'Licence', '20180212-145151_p0.jpg', 1, 1, 1),
(8, 'Saresh A V', 'Aduthaveetil House, Bank road, Vyttila P O , Ernakulam 682019\n8089906554', 'Bank ', '7356574781', 'csaresh5@gmail.com', 'Office Staff', 'Voter id', 'IMG_20180312_140326.jpg', 1, 1, 1),
(9, 'Sapna', 'd/o mani V K , vadukoot house, kovilakaparambu,near collectorate, thrissur, 680003\nPh : 9072729890', 'Vyttila, Kochi, Kerala, India', '9074038411', 'sapnavadukoot@gmail.com', 'Office Staff', 'Voter id', 'IMG_20180312_141038.jpg', 1, 1, 1),
(10, 'Aneesh O M', 'Olipurath house\nKaninadu p o\nvadavucode\n9496748343', 'Vadavucode, Kerala, India', '9995148343', 'mukundananeesh@gmail.com', 'Office Staff', 'Licence', '20180403_181259.jpg', 1, 1, 1),
(11, 'renjith radhakrishnan', '173/6 water authority staff quarters kadavanthra', 'Kadavanthra, Kochi, Kerala, India', '7736771403', 'renjith14025@gmail.com', 'Delevery Boy', 'Licence', 'renjith liscence.jpg', 1, 1, 1),
(12, 'seethal k s', 'karayamvattom , Eramalloor .p .o , Cherthala ,  Alappuzha  ,  pin :688537', 'Eramalloor, Kerala, India', '8129155932', 'seethalks21@gmail.com', 'Office Staff', 'Voter id', 'IMG-20180519-WA0010.jpg', 1, 1, 1),
(13, 'Libin Mathew', 'Kunnupurathu kizhakkethil House, Venmoney, Nenmony P O ', 'Venmony, Kerala, India', '8129898126', 'mathewlibin39@gmail.com', 'Delevery Boy', 'Licence', '20180601-110110_p0.jpg', 1, 1, 1),
(14, 'Binu sivanandan', 'karthedath house , kadungamangalam , thiruvankulam . p . o , 682305', 'Thiruvankulam, Kerala, India', '9746821245', 'binusivanandan1996@gmail.com', 'Delevery Boy', 'Licence', 'binu.jpeg', 1, 1, 1),
(15, 'Radheyan', 'mupliyil house , chungal , mattathur . p . o ,thrissur ,680684', 'Thrissur, Kerala, India', '9567558634', 'radheyanradhu22@gmail.com', 'Packing Section', 'Licence', 'radheyan liscence.jpg', 1, 1, 1),
(16, 'Bineesh m', 'bineesh bhavan , nedumpana po , kureeppally , kollam , 691576', 'Kollam, Kerala, India', '8111985423', 'bineeshm808@gmail.com', 'Office Staff', 'Licence', 'bineesh liscence.jpg', 1, 1, 1),
(17, 'Anand tom thomas', 'kadackal , pazhavangadi , ranny , pin . 689673', 'Ranny, Kerala, India', '8281192498', 'anandshaji5@gmail.com', 'Delevery Boy', 'Licence', 'anand.jpg', 1, 1, 1),
(18, 'Jerin James', 'adackalmundackal house, kallar , vattiyar, p  o karadipara\nPin : 685565\nJerin mother : 8943303198', 'Kallar, Kerala, India', '9605971235', '123jerinjames@gmail.com', 'Delevery Boy', 'Licence', 'image1.JPG', 1, 1, 1),
(19, 'Harmuj ali ', 's/o abdul karim  , near jame masjid  , udmari , dighaliati gaon , nagaon , Assam - 782124', 'Nagaon, Assam, India', '9365864939', '', 'Packing Section', 'Voter id', 'harmuj ali.jpeg', 1, 1, 1),
(21, 'Nijas PK', 'Pazhangathu House\nnaithelil nagar\nkakkanad ', 'Kakkanad, Kerala, India', '7510325728', '7510325728@gmail.com', 'Delevery Boy', 'Licence', 'IMG_20190410_120042314.jpg', 1, 1, 1),
(22, 'Sreejith KA', 'konnolil house\nkk road\nchembumukku\nkakkanad', 'Kakkanad, Kerala, India', '9061073560', '9061073560@gmail.com', 'Delevery Boy', 'Licence', 'IMG_20190410_122842641.jpg', 1, 1, 1),
(23, 'Akil KL', 'Palliparambil Veedu\nkusumagiri\nkakkanad', 'Kakkanad, Kerala, India', '9074972879', '9074972879@gmail.com', 'Delevery Boy', 'Voter id', 'IMG_20190410_124438610.jpg', 1, 1, 1),
(24, 'Prakash VK', 'vadassery laksham veedu\nedathala \naluva', 'Aluva, Kerala, India', '9562927463', '9562927463@gmail.com', 'Delevery Boy', 'Voter id', 'IMG_20190410_124549149.jpg', 1, 1, 1),
(25, 'Aswin George', 'pulikkal puthen veedu\nperunadu p o\npathanomthitta 689711', 'Pathanamthitta, Kerala, India', '7025577687', '7025577687@gmail.com', 'Office Staff', 'Voter id', 'IMG_20190411_132237202.jpg', 1, 1, 1),
(27, 'Sanoop Sajeevan', 'Thuruthipilly Veedu, Thrikkara 682021', 'Thrikkakara, Edappally, Ernakulam, Kerala, India', '9544386022', 'sanoop@gmail.com', 'Delevery Boy', 'Voter id', 'WhatsApp Image 2019-08-08 at 3.10.40 PM.jpeg', 1, 1, 1),
(28, 'Kiran BS', 'Puthuval Puthen Veedu,vilappil trivandrum-695573', 'Trivandrum, Kerala, India', '8921405365', 'kiran@gmail.com', 'Delevery Boy', 'Voter id', 'WhatsApp Image 2019-08-08 at 3.13.11 PM.jpeg', 1, 1, 1),
(29, 'bikku', 'kakkanad', 'Kakkanad, Kerala, India', '7293943992', 'bikku@farmersfz.com', 'Packing Section', 'Voter id', 'appStore.jpg', 1, 1, 1),
(30, 'Sanjay', 'kakkanad', 'Kakkanad, Kerala, India', '6282723326', 'sanjay123@ffz.com', 'Packing Section', 'Voter id', 'appStore.jpg', 1, 1, 1),
(31, 'Manu', 'kakkanad', 'Kakkanad, Kerala, India', '9995378038', 'manu123@ffz.com', 'Packing Section', 'Voter id', 'appStore.jpg', 1, 1, 1),
(32, 'Ajmal', 'kakanad', 'Kakkanad, Kerala, India', '9400964110', 'ajmal123@ffz.com', 'Packing Section', 'Voter id', 'appStore.jpg', 1, 1, 1),
(33, 'ansaf', 'kakanad', 'Kakkanad, Kerala, India', '8606757255', 'ansaf123@ffz.com', 'Packing Section', 'Voter id', 'appStore.jpg', 1, 1, 1),
(34, 'Bikki', 'kakkanad', 'Kakkanad, Kerala, India', '8638615303', 'bikki123@ffz.com', 'Packing Section', 'Voter id', 'appStore.jpg', 1, 1, 1),
(35, 'Nisham', 'kakkanad', 'Kakkanad, Kerala, India', '9846045984', 'nissam123@ffz.com', 'Delevery Boy', 'Voter id', 'appStore.jpg', 1, 1, 1),
(36, 'Bikku Kad', 'kakk', 'Kakkanad, Kerala, India', '7293943993', 'bikkukad@ffz.com', 'Packing Section', 'Voter id', 'appStore.jpg', 1, 1, 2),
(38, 'sanjay Kad', 'kak', 'Kakkanad, Kerala, India', '6282723326', 'sanjay1234@ffz.com', 'Packing Section', 'Voter id', 'appStore.jpg', 1, 1, 2),
(39, 'manu kad', 'kaka', 'Kakkanad, Kerala, India', '9995378038', 'manu1234@ffz.com', 'Packing Section', 'Licence', 'appStore.jpg', 1, 1, 2),
(40, 'ajamal kad', 'kak', 'Kakkanad, Kerala, India', '9400964110', 'ajmal1234@ffz.com', 'Packing Section', 'Licence', 'appStore.jpg', 1, 1, 2),
(41, 'ansaf kad', 'kadavanthara', 'Kadavanthra, Kochi, Kerala, India', '8606757255', 'ansaf1234@ffz.com', 'Packing Section', 'Voter id', 'appStore.jpg', 1, 1, 2),
(42, 'ajin ', 'kakkanad', 'Kakkanad, Kerala, India', '9633793382', 'ajin123@ffz.com', 'Delevery Boy', 'Licence', 'appStore.jpg', 1, 1, 1),
(43, 'Gokul Yesmeal kak', 'kakkanad', 'Kakkanad, Kerala, India', '7356089898', 'gokul123@yesmeal.in', 'Delevery Boy', 'Voter id', 'appStore.jpg', 1, 1, 1),
(44, 'yesmeal gokul kad', 'kad', 'Kakkanad, Kerala, India', '7356089898', 'gokul1234@yesmeal.in', 'Delevery Boy', 'Voter id', 'appStore.jpg', 1, 1, 2),
(45, 'Biki Kad', 'FFZ ', 'Kadavanthra, Kochi, Kerala, India', '8638615303', 'bikiffz1234@ffz.com', 'Packing Section', 'Voter id', 'Manager uniform.PNG', 1, 1, 2),
(46, 'Shajeer', 'Aluva', 'Aluva, Kerala, India', '9496200024', 'mbshajeerbacker@gmail.com', 'Packing Section', 'Passport', 'Manager uniform.PNG', 1, 1, 1),
(47, 'Sakkeer', 'Aluva', 'Aluva, Kerala, India', '9142377640', 'manadathsakkeer96@gmail.com', 'Packing Section', 'Passport', 'Manager uniform.PNG', 1, 1, 1),
(48, 'eby an roadways', 'kakkanad', 'Kakkanad, Kerala, India', '9544526979', 'eby123@ffz.com', 'Delevery Boy', 'Voter id', 'appStore.jpg', 1, 1, 1),
(49, 'Praveen kak', 'Kakkanad', 'Kakkanad, Kerala, India', '9747769495', 'praveen123@ffz.com', 'Delevery Boy', 'Voter id', 'IMG-20200411-WA0082.jpg', 1, 1, 1),
(50, 'Praveen kad', 'Kad', 'Kadavanthra, Kochi, Kerala, India', '9747769495', 'praveen1234@ffz.com', 'Delevery Boy', 'Voter id', 'IMG-20200411-WA0081.jpg', 1, 1, 2),
(51, 'An roadways one', 'kakanad', 'Kakkanad, Kerala, India', '9656568797', 'anroad123@ffz.in', 'Delevery Boy', 'Licence', 'appStore.jpg', 1, 1, 1),
(52, 'an road ways two', 'kakkanad', 'Kakkanad, Kerala, India', '9656568797', 'anroadways1234@ffz.in', 'Delevery Boy', 'Voter id', 'appStore.jpg', 1, 1, 1),
(53, 'Farooq zomato boy one', 'kakkanad', 'Kakkanad, Kerala, India', '9539311725', 'zomatoboy123@gmail.com', 'Delevery Boy', 'Voter id', 'appStore.jpg', 1, 1, 1),
(54, 'Aneesh k jzomato boy two', 'kakanad', 'Kakkanad, Kerala, India', '9074779316', 'zomatoboytwo@gmaill.com', 'Delevery Boy', 'Voter id', 'appStore.jpg', 1, 1, 1),
(55, 'Gopika', 'Kakkanad', 'Kakkanad, Kerala, India', '9207026158', 'gpka123@gml.com', 'Packing Section', 'Voter id', 'IMG-20200412-WA0074.jpg', 1, 1, 1),
(56, 'Gopika kada', 'Kadavanthara', 'Kadavanthra, Kochi, Kerala, India', '9207026158', 'gpka1234@gml.com', 'Packing Section', 'Voter id', 'IMG-20200412-WA0080.jpg', 1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ffz_employee_reg`
--
ALTER TABLE `ffz_employee_reg`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_email` (`emp_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ffz_employee_reg`
--
ALTER TABLE `ffz_employee_reg`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
