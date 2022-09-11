-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 09:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_date` datetime NOT NULL,
  `time_slot` varchar(70) NOT NULL,
  `status` int(4) NOT NULL DEFAULT 1 COMMENT '1: confirm , 2: cancelled',
  `created_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `doctor_id`, `user_id`, `booking_date`, `time_slot`, `status`, `created_time`) VALUES
(1, 1, 11, '1970-01-01 00:00:00', '', 1, '2020-03-26 12:12:54'),
(2, 3, 11, '2020-03-28 00:00:00', '', 1, '2020-03-26 12:13:08'),
(3, 1, 12, '2020-03-29 00:00:00', '', 1, '2020-03-28 15:23:12'),
(4, 1, 12, '2020-03-29 00:00:00', '', 1, '2020-03-28 15:23:18'),
(5, 1, 12, '2020-03-29 00:00:00', '', 1, '2020-03-28 15:23:18'),
(6, 1, 12, '2020-03-29 00:00:00', '', 1, '2020-03-28 15:23:18'),
(7, 1, 12, '2020-03-29 00:00:00', '', 1, '2020-03-28 15:23:19'),
(8, 1, 13, '2020-03-29 00:00:00', '', 1, '2020-03-28 15:35:30'),
(9, 5, 13, '2020-03-30 00:00:00', '', 1, '2020-03-29 07:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_registration`
--

CREATE TABLE `doctor_registration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `specialization` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `day` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_registration`
--

INSERT INTO `doctor_registration` (`id`, `name`, `mobile`, `gender`, `specialization`, `location`, `day`, `duration`, `fees`, `file_name`) VALUES
(1, 'Dr. Ruchi Laha', '03340084885', 'female', 'Dentist', 'Kolkata', 'Monday,Tuesday,Wednesday,Friday,Saturday,Sunday', '10:30 AM - 02:00 PM', '200', '../assets/upload/25241158doc3.jpg'),
(2, 'Dr. Gargi Sarkar', '9830947151', 'female', 'Dentist', 'Kolkata', 'Monday,Tuesday,Wednesday,Friday,Saturday,Sunday', '09:00 AM - 09:00 PM', '250', '../assets/upload/9665gargi sarkar.jpg'),
(3, 'DR. Kamalesh Kothari', '9830193000', 'male', 'Dentist', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '09:00 AM - 06:30 PM', '250', '../assets/upload/5146kamalesh.jpg'),
(4, 'Dr. Ratna Pal', '9831311221', 'female', 'Homeopathetic', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '08:00 AM - 01:30 PM', '50', '../assets/upload/3945ratna.jpg'),
(5, 'Dr. Samir Chandra Das', '9433730070', 'male', 'Homeopathetic', 'Kolkata', 'Monday,Wednesday,Friday', '07:00 AM - 09:00 PM', '150', '../assets/upload/3639samir.jpg'),
(6, 'Dr. Snigdhodip Saha', '8457621581', 'male', 'Homeopathetic', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '06:00 PM - 09:00 PM', '100', '../assets/upload/4553thWQD3V06M.jpg'),
(7, 'Dr. Avik Bhattacharya', '7548621500', 'male', 'Radiologist', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '11:00 AM - 07:00 PM', '300', '../assets/upload/5167th8G006GQ2.jpg'),
(8, 'Dr. Koushik Chatterjee', '8947252550', 'male', 'Radiologist', 'Kolkata', 'Monday,Thursday', '06:00 PM - 09:00 PM', '300', '../assets/upload/1749th1JDYRD1R.jpg'),
(9, 'Dr. Sukalyan Purkayastha', '9830817095', 'male', 'Radiologist', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '10:00 AM - 06:00 PM', '350', '../assets/upload/298thWQYOUOPF.jpg'),
(10, 'Dr. Nilendu Sarma', '9830382498', 'male', 'Dermatologist', 'Kolkata', 'Wednesday', '02:30 PM - 03:30 PM', '500', '../assets/upload/8393th.jpg'),
(11, 'Dr. Dinesh Hawelia', '033 23347979', 'male', 'Dermatologist', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '09:00 AM - 10:00 PM', '350', '../assets/upload/9886thJ3SJCVUW.jpg'),
(12, 'Dr. Indranil Saha', '8961302784', 'male', 'Gastroenterologist', 'Kolkata', 'Monday', '05:00 PM - 10:00 PM', '500', '../assets/upload/1893th7TP596U4.jpg'),
(13, 'Dr. Debottam Bandyopadhyay', '9830348891', 'male', 'Gastroenterologist', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday', '07:00 PM - 09:00 PM', '500', '../assets/upload/3645thMZZ3THBZ.jpg'),
(14, 'Dr. Tanoy Bose', '9831336275 ', 'male', 'General Physician', 'Kolkata', 'Saturday', '09:00 AM - 11:00 AM', '400', '../assets/upload/3271dr-pic.png'),
(15, 'Dr. Basab Mukherjee', '6254781200', 'male', 'General Physician', 'Kolkata', 'Wednesday,Saturday', '10:00 AM - 04:30 PM', '350', '../assets/upload/7067thIAWTJ6Y0.jpg'),
(16, 'Dr. Uttam Lodh', '9587422533', 'male', 'Urologist', 'Kolkata', 'Thursday', '01:30 PM - 03:00 PM', '300', '../assets/upload/1770thTXA10PXE.jpg'),
(17, 'Dr. Animes Das', '9830037592', 'male', 'Urologist', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '04:30 PM - 06:30 PM', '250', '../assets/upload/71th8RTB0Q6H.jpg'),
(18, 'Dr. Rishavdev Patra', '03323375071', 'male', 'Paediatricians', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 PM - 10:00 PM', '350', '../assets/upload/4471thG5AW6QXA.jpg'),
(19, 'Dr. Sarfaraz Baig', '9830006067', 'male', 'General Surgeon', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '10:00 AM - 12:00 PM', '500', '../assets/upload/1808thTV5B5Z3P.jpg'),
(20, 'Dr. Ranjan Kumar Sharma', '033 23720457', 'male', 'Cardiologist', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday', '05:00 PM - 08:00 PM', '500', '../assets/upload/8435thRYPRWY5S.jpg'),
(21, 'Dr. Soumya Patra', '8524576941', 'male', 'Cardiologist', 'Kolkata', 'Monday,Thursday', '05:00 PM - 06:00 PM', '550', '../assets/upload/649thL1AGSFKR.jpg'),
(22, 'Dr. Sagarika Mukherjee', '18605001066', 'female', 'Diabetologist', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '09:00 AM - 06:00 PM', '350', '../assets/upload/915thVLJ55G3C.jpg'),
(23, 'Dr. Anirban Chakraborty', '7677442578', 'male', 'Diabetologist', 'Kolkata', 'Tuesday,Thursday', '07:00 PM - 09:00 PM', '400', '../assets/upload/2960thPYWNG92T.jpg'),
(24, 'Dr. Sharmistha Ganguly (Bhattacharya)', '9830117733', 'female', 'Geynaecologist', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '08:00 PM - 09:00 PM', '500', '../assets/upload/295310.jpg'),
(25, 'Dr. Preeti Parakh', '03322741511', 'female', 'Psychiatrist', 'Kolkata', 'Monday,Wednesday,Friday', '11:00 AM - 01:00 PM', '300', '../assets/upload/121th0MDLXPB0.jpg'),
(26, 'Dr. Sukrit Bose', '9831075616', 'male', 'Otolaryngologist', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '09:00 AM - 06:00 PM', '300', '../assets/upload/3859thY2SJHYLS.jpg'),
(27, 'Dr. Humayun Ali Shah', '9831034602', 'male', 'Orthopedic', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '12:30 PM - 03:30 PM', '500', '../assets/upload/926thRYPRWY5S.jpg'),
(28, 'Sunetra Family Eye Care Centre', '03324188223', 'male', 'Eye Care', 'Kolkata', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '07:00 AM - 10:00 PM', '600', '../assets/upload/11662803doc6.jpg'),
(29, 'Dr. Dibyendu Roy', '8774225864', 'male', 'Eye Care', 'Bardhaman', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '08:00 AM - 09:00 PM', '500', '../assets/upload/9083thZMEN066W.jpg'),
(30, 'Dr. Abhishek Sarkar', '9825476120', 'male', 'Dentist', 'Bardhaman', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '10:00 AM - 08:00 PM', '350', '../assets/upload/8209abhishek sarkar.jpg'),
(31, 'Dr. Swarnava Bairagya', '8574621700', 'male', 'Dentist', 'Bardhaman', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '06:00 PM - 09:00 PM', '400', '../assets/upload/8652swarnava.jpg'),
(32, 'Dr. Nita Roy', '6254130075', 'female', 'Homeopathetic', 'Bardhaman', 'Monday', '05:00 PM - 09:00 PM', '150', '../assets/upload/64OIP.jpg'),
(33, 'Dr. S. Dutta', '6240010142', 'female', 'Radiologist', 'Bardhaman', 'Monday,Tuesday,Wednesday', '09:00 AM - 09:00 PM', '450', '../assets/upload/50705.jpg'),
(34, 'Dr. Tanumay Raychaudhury', '8620122540', 'male', 'Dermatologist', 'Bardhaman', 'Thursday,Saturday', '08:00 AM - 05:00 PM', '500', '../assets/upload/5851th0RXSENZU.jpg'),
(35, 'Dr. Mahimanjan Saha', '9830247861', 'male', 'Dermatologist', 'Bardhaman', 'Friday,Saturday', '05:00 PM - 09:00 PM', '350', '../assets/upload/516thR9C69TX5.jpg'),
(36, 'Dr. Deeptangshu Ganguly', '8642507890', 'male', 'Gastroenterologist', 'Bardhaman', 'Thursday,Saturday,Sunday', '05:00 PM - 09:30 PM', '500', '../assets/upload/6039thYL2G4MXZ.jpg'),
(37, 'Dr. Saugata Bandyopadhyay', '9652145800', 'male', 'General Physician', 'Bardhaman', 'Friday,Saturday', '11:00 AM - 08:00 PM', '450', '../assets/upload/8674thHDUK3CUN.jpg'),
(38, 'Dr. Vinod Priyadarshi', '8652347891', 'male', 'Urologist', 'Bardhaman', 'Monday,Tuesday,Wednesday,Thursday,Friday', '11:00 AM - 04:00 PM', '250', '../assets/upload/273th2EPC843K.jpg'),
(39, 'Dr. Asraful Mirza', '6257846900', 'male', 'Paediatricians', 'Bardhaman', 'Monday,Wednesday,Friday', '05:30 PM - 07:30 PM', '400', '../assets/upload/38115.jpg'),
(40, 'Dr. Kalyan Banerjee', '7615248600', 'male', 'General Surgeon', 'Bardhaman', 'Monday,Tuesday,Thursday,Friday', '03:30 PM - 10:00 PM', '250', '../assets/upload/3051thYOFE6YMM.jpg'),
(41, 'Dr. Sudeb Mukherjee', '8562001452', 'male', 'Cardiologist', 'Bardhaman', 'Tuesday,Wednesday,Thursday', '03:00 PM - 10:00 PM', '600', '../assets/upload/3077th91JLVK6V.jpg'),
(42, 'Dr. P. Bhattacharya', '8952345500', 'male', 'Diabetologist', 'Bardhaman', 'Monday,Thursday,Saturday', '03:00 PM - 09:00 PM', '450', '../assets/upload/422625.jpg'),
(43, 'Dr. Mita Mandal', '7620859650', 'female', 'Geynaecologist', 'Bardhaman', 'Wednesday,Friday,Sunday', '09:00 AM - 02:00 PM', '400', '../assets/upload/84485.jpg'),
(44, 'Dr. Manideep Mukherjee', '8910236650', 'male', 'Psychiatrist', 'Bardhaman', 'Monday,Wednesday,Friday', '10:30 AM - 02:00 PM', '500', '../assets/upload/1294OIP.jpg'),
(45, 'Dr. Swagatam Banerjee', '7602554338', 'male', 'Otolaryngologist', 'Bardhaman', 'Monday,Tuesday,Wednesday,Thursday,Friday', '04:00 PM - 09:00 PM', '500', '../assets/upload/191thYMGNKO8X.jpg'),
(46, 'Dr, S. Das', '8777433675', 'female', 'Orthopedic', 'Bardhaman', 'Tuesday,Wednesday', '02:00 PM - 06:00 PM', '500', '../assets/upload/69485.jpg'),
(47, 'Ideal Dental Clinic', '03364611657', 'male', 'Dentist', 'Chinsurah', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '10:00 AM - 09:00 PM', '350', '../assets/upload/9619k.jpg'),
(48, 'Dr. Soumalya Golder', '8922514520', 'male', 'Homeopathetic', 'Chinsurah', 'Wednesday', '08:00 AM - 09:00 PM', '200', '../assets/upload/7863122.jpg'),
(49, 'Dr. T. K. Mondal', '6225485585', 'male', 'Radiologist', 'Chinsurah', 'Monday,Wednesday,Friday', '10:00 AM - 07:00 PM', '400', '../assets/upload/1382jj.jpg'),
(50, 'Dr. Dinesh Hawelia', '6255481200', 'male', 'Dermatologist', 'Chinsurah', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '09:00 AM - 10:00 PM', '400', '../assets/upload/2515thJ3SJCVUW.jpg'),
(51, 'Dr. Bibekranjan Manna', '8945786210', 'male', 'Gastroenterologist', 'Chinsurah', 'Monday,Wednesday,Saturday', '09:00 AM - 12:00 PM', '400', '../assets/upload/6383p.jpg'),
(52, 'Dr.Basudeb Das ', '9830818070', 'male', 'General Physician', 'Chinsurah', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', '10:00 AM - 02:00 PM', '400', '../assets/upload/880725.jpg'),
(53, 'Dr. Debansu Sarkar', '9820152245', 'male', 'Urologist', 'Chinsurah', 'Sunday', '11:00 AM - 06:00 PM', '400', '../assets/upload/6264thNGOJ3FWI.jpg'),
(54, 'Dr Tapan Sinha Mahapatra', '03325827929', 'male', 'Paediatricians', 'Chinsurah', 'Monday,Wednesday,Friday', '10:00 AM - 03:00 PM', '200', '../assets/upload/49815.jpg'),
(55, 'Dr. Abhirup Goswami', '7622105450', 'male', 'General Surgeon', 'Chinsurah', 'Monday,Wednesday,Thursday,Friday,Saturday,Sunday', '11:00 AM - 09:00 PM', '450', '../assets/upload/9647th87QBXDTS.jpg'),
(56, 'Dr. Arindam Pande', '7623510200', 'male', 'Cardiologist', 'Chinsurah', 'Tuesday', '12:30 PM - 03:00 PM', '400', '../assets/upload/2472thHNC0TATW.jpg'),
(57, 'Dr. Sankar Nath Jha', '8077250134', 'male', 'Diabetologist', 'Chinsurah', 'Thursday,Saturday,Sunday', '07:30 AM - 10:30 AM', '400', '../assets/upload/6561th4ZFR9O1L.jpg'),
(58, 'Dr. Rahul Roy Chowdhury', '9830252545', 'male', 'Geynaecologist', 'Chinsurah', 'Tuesday,Friday', '02:00 PM - 04:00 PM', '300', '../assets/upload/7693thXSECK2BC.jpg'),
(59, 'Dr. Arijit Dutta Chowdhury', '8777433256', 'male', 'Psychiatrist', 'Chinsurah', 'Saturday', '06:00 PM - 07:30 PM', '200', '../assets/upload/5460thMPLDEA0L.jpg'),
(60, 'Dr. P. Bhattacharya', '9856243010', 'male', 'Otolaryngologist', 'Chinsurah', 'Monday,Wednesday', '10:00 AM - 09:00 PM', '400', '../assets/upload/68905.jpg'),
(61, 'Dr. Adit Dey', '03323596415', 'male', 'Orthopedic', 'Chinsurah', 'Tuesday,Thursday', '10:00 AM - 12:00 PM', '500', '../assets/upload/74295.jpg'),
(62, 'Sunayan Eye Care & Surgery', '03326861241', 'male', 'Eye Care', 'Chinsurah', 'Monday,Tuesday,Wednesday,Thursday,Friday', '09:00 AM - 10:00 PM', '400', '../assets/upload/300625.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `type` int(2) NOT NULL DEFAULT 3 COMMENT '1:admin ,2: doctor ,3:user',
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '1: active , 0 : inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `type`, `name`, `email`, `phone`, `gender`, `password`, `status`) VALUES
(1, 1, 'admin', 'admin@gmail.com', '123456', 'male', '123', 1),
(2, 3, 'Riya', 'riya@gmail.com', '123456', 'female', '123', 1),
(3, 3, 'Sangita ', 'sangita@gmail.com', '254155', 'female', '123', 1),
(4, 3, 'Debdatta', 'deb@gmail.com', '784512', 'female', '123', 1),
(5, 3, 'Arunava', 'aru@gmail.com', '87945121', 'male', '123', 1),
(6, 3, 'Tanay', 'tan@gmail.com', '123456', 'male', '123', 1),
(7, 3, 'Aditi', 'aditi@gmail.com', '123456', 'female', '123', 0),
(8, 3, 'Aditi', 'aditi@gmail.com', '123456', 'female', '123', 0),
(9, 3, 'Adi', 'ad@gmail.com', '12', 'male', '123', 0),
(10, 3, 'Riya', 'r@gmail.com', '1234', 'female', '123', 0),
(11, 3, 'Sayan Das', 'sayan@gmail.com', '9854512565', 'male', '123', 1),
(13, 3, 'sangita', 'sd075540@gmail.com', '8777433678', 'female', '1234', 1),
(14, 3, 'sangita', 'sd075540@gmail.com', '8777433678', 'female', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'doctor'),
(3, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_registration`
--
ALTER TABLE `doctor_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor_registration`
--
ALTER TABLE `doctor_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
