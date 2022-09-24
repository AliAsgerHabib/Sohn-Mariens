-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 07:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sohnmariens`
--

-- --------------------------------------------------------

--
-- Table structure for table `admit`
--

CREATE TABLE `admit` (
  `pid` int(11) NOT NULL,
  `patid` int(11) NOT NULL,
  `pname` varchar(110) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `ad_date` date NOT NULL,
  `ad_time` time NOT NULL,
  `department` int(11) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `rel` varchar(200) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `bno` int(20) NOT NULL,
  `isadmit` tinyint(1) NOT NULL,
  `dis_date` date DEFAULT NULL,
  `dis_time` time NOT NULL,
  `vistag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admit`
--

INSERT INTO `admit` (`pid`, `patid`, `pname`, `age`, `gender`, `ad_date`, `ad_time`, `department`, `doc_name`, `cname`, `rel`, `phno`, `mail`, `ward`, `bno`, `isadmit`, `dis_date`, `dis_time`, `vistag`) VALUES
(101, 30002, 'Jane Doe', 41, 'Female', '2021-06-10', '15:20:00', 1, 'Dr. Ahmed Zubair', 'Jason Doe', 'Husband', '9471563869', 'janedoe@gmail.com', 'Ward 1', 10, 0, '2021-06-29', '16:47:00', 0),
(102, 30001, 'Ram Avasthi', 25, 'Male', '2021-06-13', '09:17:00', 2, 'Dr. Jaya Rastogi', 'Rohan Avasthi', 'Father', '9898256363', 'ramav@gmail.com', 'Ward 3', 1, 1, NULL, '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `isDoctor` tinyint(1) NOT NULL,
  `isloginallowed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `Name`, `isDoctor`, `isloginallowed`) VALUES
(1, 'General Medicine', 1, 1),
(2, 'Cardiology', 1, 1),
(3, 'Orthopedics', 1, 1),
(4, 'Surgery', 1, 1),
(7, 'Neurology', 1, 1),
(8, 'OB-GYN', 1, 1),
(9, 'Pediatric', 1, 1),
(10, 'Dentistry', 1, 1),
(11, 'ENT', 1, 1),
(12, 'Oncology', 1, 1),
(14, 'Dermatology', 1, 1),
(15, 'Labs', 0, 0),
(16, 'Pharmacy', 0, 0),
(17, 'IT Support', 0, 1),
(19, 'Sanitation Staff', 0, 0),
(20, 'Nursing Staff', 0, 0),
(21, 'Reception Staff', 0, 1),
(22, 'Management', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `duties`
--

CREATE TABLE `duties` (
  `id` int(11) NOT NULL,
  `eid` int(10) UNSIGNED NOT NULL,
  `Mon` varchar(50) NOT NULL,
  `Tues` varchar(50) NOT NULL,
  `Wed` varchar(50) NOT NULL,
  `Thurs` varchar(50) NOT NULL,
  `Fri` varchar(50) NOT NULL,
  `Sat` varchar(50) NOT NULL,
  `Sun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duties`
--

INSERT INTO `duties` (`id`, `eid`, `Mon`, `Tues`, `Wed`, `Thurs`, `Fri`, `Sat`, `Sun`) VALUES
(11, 1021, 'Ward', 'OPD', 'OT', 'OPD', 'Ward', 'Day Off', 'Ward'),
(13, 1024, 'OPD', 'Ward', 'Ward', 'Day Off', 'OT', 'OPD', 'Ward');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(10) UNSIGNED NOT NULL,
  `name` varchar(111) NOT NULL,
  `fname` varchar(111) NOT NULL,
  `mname` varchar(111) NOT NULL,
  `gender` varchar(111) NOT NULL,
  `dob` date NOT NULL,
  `aadhar` varchar(250) NOT NULL,
  `photo` varchar(111) NOT NULL,
  `mob` varchar(111) NOT NULL,
  `mobb` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `board` varchar(7) NOT NULL,
  `school` varchar(50) NOT NULL,
  `xiipercent` float NOT NULL,
  `marksheet` varchar(111) NOT NULL,
  `diploma` varchar(50) NOT NULL,
  `dip_file` varchar(111) NOT NULL,
  `bac_deg_file` varchar(111) NOT NULL,
  `bac_clg` varchar(111) NOT NULL,
  `bac_deg_name` varchar(111) NOT NULL,
  `mas_deg_file` varchar(111) NOT NULL,
  `mas_clg` varchar(111) NOT NULL,
  `mas_deg_name` varchar(111) NOT NULL,
  `doc_file` varchar(111) NOT NULL,
  `doc_clg` varchar(111) NOT NULL,
  `spl` varchar(111) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `lastjob` varchar(40) NOT NULL,
  `oname` varchar(111) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `bname` varchar(300) NOT NULL,
  `acno` int(20) NOT NULL,
  `ifsc` varchar(60) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `j_date` date NOT NULL,
  `salary` float NOT NULL,
  `hasaccount` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `name`, `fname`, `mname`, `gender`, `dob`, `aadhar`, `photo`, `mob`, `mobb`, `email`, `r_address`, `p_address`, `board`, `school`, `xiipercent`, `marksheet`, `diploma`, `dip_file`, `bac_deg_file`, `bac_clg`, `bac_deg_name`, `mas_deg_file`, `mas_clg`, `mas_deg_name`, `doc_file`, `doc_clg`, `spl`, `exp`, `lastjob`, `oname`, `pan`, `bname`, `acno`, `ifsc`, `dept_id`, `position`, `j_date`, `salary`, `hasaccount`) VALUES
(1019, 'Haider Saifee', 'Riyaz Saifee', 'Rena Saifee', 'Male', '1985-07-05', '985646465465', '16230088908.jpg', '9414785708', '9858715823', 'haider@gmail.com', '175, Kabir Road\r\nFatehpura, Udaipur\r\n313001', '170, Kabir Road\r\nFatehpura, Udaipur\r\n313001', 'CBSE', 'St. Paul\'s Sr. Sec School', 98, '162282039812.pdf', '', '', '1622820398bac.pdf', 'RNT Medical College', 'MBBS', '1622820398mas.pdf', 'Oxford University', 'MS', '1622820398doc.pdf', 'Cambridge University', 'Infectious Disease', '10-20', 'Head of Departments', 'AIIMS Jaipur', '1593OL8912', 'Punjab National Bank', 2147483647, 'ABCDE587789', 22, 'Dean of Medicine', '2021-06-04', 150000, 1),
(1020, 'Rohini Sardana', 'Ram Sardana', 'Jyoti Sardana', 'Female', '1995-07-03', '123859741258', '16228996543.jpg', '9417856923', '9417866921', 'rohinisardana@gmail.com', '201, Durga Nursery Road', '201, Durga Nursery Road', 'ICSE', 'St. Joseph', 85, '162289965412.pdf', '', '', '1622899654bac.pdf', 'Mona Jones Private College', 'B. Tech', '', '', '', '', '', '', '5-10', 'Junior Associate', 'Hotel Ragini', '1593AHJ147', 'IDBI Bank', 2147483647, 'ABCDE587479', 17, 'H.O.D.', '2021-06-05', 85000, 1),
(1021, 'Dr. Jaya Rastogi', 'Jadhav Rastogi', 'Roma Rastogi', 'Female', '1969-06-01', '782931475978', '16230513535.jpg', '9586321788', '7541399823', 'jaya9@gmail.com', '72, Shobhagpura\r\nUdaipur, Rajasthan', '8, Kala Ghoda Road\r\nMumbai, Maharashtra\r\n', 'CBSE', 'St. Patrick Sr. Secondary School', 84, '162305122312.pdf', '', '', '1623051223bac.pdf', 'Lovely Professional University', 'MBBS', '1623051223mas.pdf', 'UCLA', 'MS', '1623051223doc.pdf', 'UCLA', 'Heart Diseases', '10-20', 'Associate Professor', 'Obama Care', '7816ABD464', 'UCO Bank', 2147483647, 'UCO98467245', 2, 'H.O.D.', '2021-06-07', 85000, 1),
(1023, 'Suman Avasthi', 'Rohan Avasthi', 'Ria Avasthi', 'Male', '1997-11-02', '985365147546', '16232337934.jpg', '7458632158', '7458632152', 'sumans@yahoo.co.in', '51, Old Bapu Bazaar\r\nUdaipur (Raj)', '51, Old Bapu Bazaar\r\nUdaipur (Raj)', 'RBSE', 'Guru Nanak School', 76, '162323379312.pdf', 'Diploma in Communication Skills', '1623233793dip.pdf', '', '', '', '', '', '', '', '', '', '0-5', 'None', 'None', '7845AVRF63', 'Union Bank of India', 2147483647, 'UBI43321244', 21, 'Receptionist', '2021-06-09', 25000, 1),
(1024, 'Dr. Ahmed Zubair', 'Dr. Zubair Hussain', 'Dr. Rehana Hussain', 'Male', '1962-06-04', '742593989685', '16233297229.jpg', '9232568412', '9232568965', 'drahmed@gmail.com', '85, Nehru Bazaar, Udaipur, Rajasthan', '85, Nehru Bazaar, Udaipur, Rajasthan', 'CBSE', 'Gurukul Uch Madhyamic Grameen Vidhyalay', 89, '162332972212.pdf', '', '', '1623329722bac.pdf', 'Harvard University', 'MBBS', '1623329722mas.pdf', 'Harvard University', 'MD', '1623329722doc.pdf', 'Harvard University', 'Lupus', 'More than 30 years', 'Professor', 'AIIMS', '71318APCA6', 'Bank of Baroda', 2147483647, 'BOB41546464', 1, 'H.O.D.', '2021-06-10', 55000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_users`
--

CREATE TABLE `login_users` (
  `id` int(11) NOT NULL,
  `username` varchar(110) NOT NULL,
  `eid` varchar(200) NOT NULL,
  `password` varchar(110) NOT NULL,
  `department` varchar(110) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isOnline` tinyint(1) NOT NULL,
  `At_date` date NOT NULL,
  `At_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`id`, `username`, `eid`, `password`, `department`, `isActive`, `isOnline`, `At_date`, `At_time`) VALUES
(5, 'haiders@smhospital.com', '1019', '123', 'Management', 1, 1, '2021-08-04', '21:38:00'),
(6, 'rohinis@smhospital.com', '1020', '123456', 'IT', 1, 0, '2021-06-29', '23:33:00'),
(7, 'sumanav@smhospital.com', '1023', '123', 'Reception', 1, 0, '2021-06-29', '23:36:00'),
(9, 'jayar@smhospital.com', '1021', '123', 'Doctor', 1, 0, '0000-00-00', '00:00:00'),
(10, 'ahmedzu@smhospital.com', '1024', '123', 'Doctor', 1, 0, '2021-08-04', '21:38:00'),
(11, 'sureshk@smhospital.com', '1025', '123', 'Doctor', 1, 0, '2021-06-15', '22:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `diag` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `med` varchar(255) NOT NULL,
  `freq` varchar(255) NOT NULL,
  `dur` int(11) NOT NULL,
  `apid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `diag`, `type`, `med`, `freq`, `dur`, `apid`) VALUES
(3, 'Asthama', 'Tab', '550 SAc', '2', 5, '30002'),
(4, 'Common Cold', 'Syr', 'Abugesic Plus', '3', 5, '30002');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `id` int(11) NOT NULL,
  `SName` varchar(50) NOT NULL,
  `SAddress` varchar(200) NOT NULL,
  `ADate` date NOT NULL,
  `ATime` time NOT NULL,
  `SentTo` varchar(25) NOT NULL,
  `isdis` tinyint(1) NOT NULL,
  `dis_date` date DEFAULT NULL,
  `dis_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`id`, `SName`, `SAddress`, `ADate`, `ATime`, `SentTo`, `isdis`, `dis_date`, `dis_time`) VALUES
(1, 'RB Firms', '55, Manhattan Road\r\nNew York City\r\nUSA', '2021-06-14', '16:02:00', 'Orthopedics', 1, '2021-06-14', '16:51:00'),
(2, 'Tithi Madaan Inc.', 'Lab2, Hint, Shobagpura', '2021-06-08', '20:17:00', 'IT Support', 0, NULL, '00:00:00'),
(3, 'Taj Boutique', 'Bapu Bazaar Road,\r\nUdaipur, Rajasthan', '2021-06-14', '16:18:00', 'Nursing Staff', 1, '2021-06-14', '16:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `aadno` varchar(20) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `weight` decimal(10,0) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `pmc` varchar(500) NOT NULL,
  `department` varchar(200) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `App_Date` date NOT NULL,
  `App_Time` time NOT NULL,
  `PhNo` varchar(10) NOT NULL,
  `EID` varchar(30) NOT NULL,
  `Amount` float NOT NULL,
  `pay_mode` varchar(50) NOT NULL,
  `pay_det` varchar(200) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `aadno`, `Name`, `fname`, `age`, `gender`, `weight`, `height`, `pmc`, `department`, `doc_name`, `App_Date`, `App_Time`, `PhNo`, `EID`, `Amount`, `pay_mode`, `pay_det`, `Status`) VALUES
(30001, '145896328725', 'Ram Avasthi', 'Govind Avasthi', 25, 'Male', '72', '160', 'Allergy::', '1', 'Dr. Ahmed Zubair', '2021-06-15', '12:15:00', '9414785708', 'ramav@gmail.com', 595, 'Cash', '', 'Active'),
(30002, '426935821636', 'Jane Doe', 'Jason Doe', 41, 'Female', '54', '120', 'Diabetes::Cancer::Asthma::Allergy', '1', 'Dr. Ahmed Zubair', '2021-06-15', '15:00:00', '9523698741', 'janedoe@gmail.com', 80, 'Cheque', '48259663/125', 'Completed'),
(30003, '145896328725', 'Ram Avasthi', 'Govind Avasthi', 21, 'Male', '50', '120', '', '1', 'Dr. Ahmed Zubair', '2021-06-16', '11:00:00', '9414785708', 'the_visitor@gmail.com', 4500, 'UPI Transfer', '7023660580@paytm', 'Active'),
(30004, '123456789123', 'Govind Kumar', 'Rohan Kumar', 35, 'Male', '60', '110', '', '2', 'Dr. Jaya Rastogi', '2021-06-17', '10:00:00', '7412589663', 'gk@hotmail.com', 450, 'Cash', '', 'Active'),
(30005, '935524186355', 'Shyam Lal', 'Ram Lal', 31, 'Male', '80', '150', 'Asthma::', '1', 'Dr. Suresh Kumar', '2021-06-18', '11:30:00', '7458963215', 'ram@gmail.com', 500, 'Cash', '', 'Active'),
(30006, '145896328725', 'Ram Avasthi', 'Govind Avasthi', 24, 'Male', '85', '40', 'Allergy::', '1', 'Dr. Ahmed Zubair', '2021-06-16', '14:30:00', '9414785708', 'abc@gmail.com', 595, 'Cash', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Doc_Name` int(11) NOT NULL,
  `Test` varchar(2000) NOT NULL,
  `Files` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `pid`, `Name`, `fname`, `Age`, `Gender`, `Date`, `Doc_Name`, `Test`, `Files`) VALUES
(2, 30002, 'Jane Doe', 'Jason Doe', 41, 'Female', '2021-06-15', 0, 'X-Ray::TSH::Vit D::Large Biopsy::', ''),
(3, 30002, 'Jane Doe', 'Jason Doe', 41, 'Female', '2021-06-15', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admit`
--
ALTER TABLE `admit`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `duties`
--
ALTER TABLE `duties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `photo` (`ID`,`name`,`fname`,`mname`,`gender`,`dob`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_id` (`doc_name`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admit`
--
ALTER TABLE `admit`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `duties`
--
ALTER TABLE `duties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1028;

--
-- AUTO_INCREMENT for table `login_users`
--
ALTER TABLE `login_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30007;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
