    -- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql303.epizy.com
-- Generation Time: Dec 30, 2022 at 10:27 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_20236345_sldv`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_report`
--

CREATE TABLE `daily_report` (
  `id` int(11) NOT NULL,
  `mr_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headquarters` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_promoted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_prescribed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_report`
--

INSERT INTO `daily_report` (`id`, `mr_name`, `headquarters`, `dr_name`, `prod_promoted`, `prod_prescribed`, `pob`, `remarks`, `date`) VALUES
(1, 'Ronit Roy', 'New Delhi', 'R M Sharma', 'NME', 'NME', 'POB', 'Excellent', '2021-08-04'),
(2, 'Pankaj Sahni', 'Mumbai', 'Dilip Jha', 'NME', 'NME', 'pob', 'Very Good', '2021-08-05'),
(3, 'Ragani Nayak', 'Mumbai', 'Dr Nikita Shah', 'NME', 'NME', 'pob', 'Very Good', '2021-08-06'),
(4, 'Sumit', 'Chandigarh', 'Dr Sooraj', 'NVT, UCT, NTX', 'NTX, UVT, LIV', 'pob', 'Very Good', '2021-08-10'),
(5, 'Ronit Roy', 'Mumbai', 'Dr Prahlad Agrawal', 'ORZ, CDT', 'CDT, UVT', 'pob', 'Very Good', '2021-08-12'),
(6, 'Pramod Jha', 'New Delhi', 'Prakash Chand', 'NVT, NTX, CHT', 'CHT, UVT, VCP', 'pob', 'Will visit again after 2 days', '2021-08-14'),
(7, 'Pramod Jha', 'New Delhi', 'Dr. R M Sharma', 'UVT, LIV, VCP', 'SMX, CHT, NVT-N', 'pob', 'Great Behaviour', '2021-08-15'),
(8, 'Pramod Jha', 'New Delhi', 'Dr Agarwal', 'NTX, CHT', 'NTX, LIV', 'pob', 'Due to rain limited visit', '2021-08-15'),
(9, 'Bahadur Thapa', 'Mumbai', 'Dr Prasanna Joshi', 'ORZ, CHT', 'LIV, VCP', 'pob', 'out of station', '2021-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlist`
--

CREATE TABLE `doctorlist` (
  `id` int(3) NOT NULL,
  `mr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headquarter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctorlist`
--

INSERT INTO `doctorlist` (`id`, `mr`, `name`, `specialty`, `place`, `phone`, `email`, `headquarter`, `qualification`, `dob`, `doma`, `remarks`) VALUES
(2, '', 'Vishal Malhotra', 'Child', 'Badarpur, New Delhi - 110044', '011 26226168', 'vishal_malhotra@rediffmail.com', 'New Delhi', 'MBBS', '15-Jan-71', 'doma', 'Very Good'),
(3, '', 'Prabhakar Thakur', 'Gynaecologist', 'Goregaon East, Mumbai', '022 45188100', 'prabhakar.thakur@gmail.com', 'Mumbai', 'MBBS', '20-Sep-60', 'doma', 'Excellent'),
(4, '', 'Mukesh Sinha', 'General Physician', 'Ludhiana, Punjab', '0123-5698745', 'singhaMukesh@yahoo.co.in', 'Chandigarh', 'MBBS', '18-Oct-81', 'doma', 'Will visit again'),
(5, '', 'Prakash Thakre', 'ENT', 'Pune, Maharashtra', '022-25314569', 'thakre1501@gmail.com', 'Mumbai', 'MBBS', '20-Dec', 'doma', 'Promoted 3 prodcuts'),
(20, 'Santosh Tiwari', 'Dr R M Sharma', 'Generaly Physician', 'Neb Sarai, New Delhi-110068', '011-2623698', 'pramod.dilip@gmail.com', 'New Delhi', 'MBBS, MED from London', '10 August 1968', 'doma doma doma', 'Very Good'),
(21, 'Prakash Rathore', 'Dr Dilip Jha', 'Child', 'Jaitpur', '088888888888', 'gmail@gmail.com', 'Washington', 'MMMM', '15 Jan 2001', 'doma', 'Good'),
(22, 'Rohit Khanna', 'Dr Rupali Ganguli', 'Woman and Child', 'Karol Bagh, Delhi', '011-62598623', 'ganguli@gmail.com', 'New Delhi', 'MBBS', '08 Feb 1968', 'doma', 'Excellent'),
(23, 'Prabhu Shankar', 'Ramesh Tiwari', 'Child', 'D-44, Block F, Chandigarh', '08971262365', 'ramesh_tiwari@rediffmail.com', 'Chandigarh', 'MBBS', '02 Aug 1987', 'doma', 'Very Good'),
(24, 'Prakash Tiwari', 'Dr Manohar Lal', 'Bone ', 'Karol Bagh, New Delhi', '011-56987896', 'manohar_lal@gmail.com', 'New Delhi', 'BMSED', '20 Mar 1987', 'doma', 'Very Popular Doctor'),
(25, 'Aditya Mukherjee', 'Dr Daksh Kavya', 'Gynaecologist', 'Boriwali, Mumbai', '022-25698745', 'daksha@gmail.com', 'Mumbai', 'MED', '17 Sept 1967', 'doma', 'Will visit next month'),
(26, 'Rameshwari Mehta', 'Dr Pukhraj', 'Nurosurgery', 'Sector 30, Chandigarh', '09874563215', 'pukhraj@yahoo.co.in', 'Chandigarh', 'MED', '18 Oct 1961', 'doma', 'Promised to promote'),
(27, 'Bahadur Thapa', 'Dr Reshma Nigam', 'Brain', 'Goregaon East, Mumbai', '022-56982365', 'nigam_1234@gmail.com', 'Mumbai', 'MBBS', '24 Dec 1963', 'doma', 'Prescribed some '),
(28, 'Prabhu Shankar', 'L B Shastri', 'Child', 'Pashchim Vihar ', '011-26226168', 'shashtri@gmail.com', 'Delhi', 'Master in Medicine', '25 April 1965', 'Doma', 'Has shown great interest.'),
(29, 'Prabhu Shankar', 'L B Shastri', 'Child', 'Pashchim Vihar ', '011-26226168', 'shashtri@gmail.com', 'Delhi', 'Master in Medicine', '25 April 1965', 'Doma', 'Has shown great interest.'),
(30, 'Pramod Jha', 'Shubhash Nagar', 'Head', 'J-4, Laxmi Nagar, New Delhi', '011-45896579', 'nagar@gmail.com', 'New Delhi', 'Dr in Medcine', '15 Jan 1968', 'doma', 'Will meet next Monday');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `type` int(1) NOT NULL,
  `headquarter` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_id`, `password`, `type`, `headquarter`) VALUES
(1, 'J K Sharma', 'jksharma', '$2y$10$vctpNdkhYzKVkKue99IdS.Yolfs10ORGUmkEe1uchzU.6JJGBBAqm', 1, 'all'),
(2, 'Pramod Jha', 'pramodjha', '$2y$10$uNKbEUFlf7gefjJQT0wHAeXN6Q9jIrrCZOXOXmU9t9Sm2SXBgyvRK', 2, 'New Delhi'),
(3, 'Priyanka Mathur', 'priyanka', 'priyanka1234', 2, 'Mumbai'),
(4, 'Pankaj Sinha', 'pankajsinha', '$2y$10$hBir1GSYulDXdPyy8Q6xKuQof3bUdXPbKQ2h4b1fIi0flamp39ysq', 3, 'Mumbai'),
(7, 'Pranav Madhav', 'pranav', 'pranav1234', 2, 'Chandigarh'),
(8, 'Raghav Mishra', 'raghav', 'raghav1234', 2, 'Chandigarh'),
(9, 'Sher Bahadur Thapa', 'bahadur', 'bahadur1234', 3, 'Mumbai'),
(10, 'Sanjay Kumar', 'sanjay', 'sanjay1234', 3, 'Chandigarh'),
(11, 'Bhrigur Raj', 'bhrigu', 'bhrigu1234', 3, 'New Delhi'),
(12, 'Prayag Raj', 'prayag', 'prayag1234', 3, 'Chandigarh'),
(13, 'Ruchi Sharma', 'ruchi', 'ruchi1234', 3, 'New Delhi'),
(14, 'Prakash Mehta', 'mehta', 'mehta1234', 3, 'Chandigarh'),
(15, 'Ramesh Tiwari', 'ramesh', 'ramesh1234', 2, 'Mumbai'),
(16, 'Apoorva Anand', 'anand', 'anand1234', 2, 'Mumbai'),
(17, 'Ritesh Thakur', 'riteshthakur', '$2y$10$7eyL49/YJyUF4HSzQPAAYOfGxy32v3rLG1xPa6r5KzcPyudbrUt.W', 3, 'Chandigarh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_report`
--
ALTER TABLE `daily_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorlist`
--
ALTER TABLE `doctorlist`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_report`
--
ALTER TABLE `daily_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctorlist`
--
ALTER TABLE `doctorlist`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

    
    