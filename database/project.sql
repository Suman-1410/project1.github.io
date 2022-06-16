-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 08:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `au_sholarships`
--

CREATE TABLE `au_sholarships` (
  `id` int(11) NOT NULL,
  `scholar_name` varchar(255) NOT NULL,
  `scholar_amount` varchar(255) NOT NULL,
  `scholar_provider` varchar(255) NOT NULL,
  `scholar_eligibility` varchar(255) NOT NULL,
  `scholar_requirment` varchar(255) NOT NULL,
  `scholar_link` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `au_sholarships`
--

INSERT INTO `au_sholarships` (`id`, `scholar_name`, `scholar_amount`, `scholar_provider`, `scholar_eligibility`, `scholar_requirment`, `scholar_link`, `created_at`) VALUES
(4, 'Sitaram Jindal Scholarship', '1300', 'Sitaram Jindal Foundation', 'HS, ITI, UG Course, PG Course, Diploma, Engineering, Medical', 'Maximum Rs. 4 lakh per year.', 'https://sitaramjindalfoundation.org', '2022-06-14 16:38:34'),
(5, 'Post Matric Scholarship for Students with Disabilities 2021-22', 'Maintenance allowance of up to INR 1,600 per month (hostellers) and up to INR 750 per month (day scholars).Disability allowance of up to INR 4,000 per annum. Reimbursement of compulsory non-refundable fees of up to INR 1.50 lakh per annum excluding th', 'Department of Empowerment of Persons with Disability, Government of India.', 'Have passed matriculation or higher secondary or any higher exam of a recognized Board of Secondary Education or UniversityHave more than 40% disability certified by the competent authorityHave an annual family income of less than INR 2.50 lakhBe pu', 'Percentage of marks obtained in the last qualifying examinationFulfillment of eligibility conditionsNumber of scholarship slots available to the statePercentage of disability will be taken into consideration if there is a tie for the percentage of m', 'https://www.buddy4study.com/scholarship/nsp-post-matric-scholarship-for-students-with-disabilities', '2022-06-14 16:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(255) NOT NULL,
  `cgid` varchar(255) NOT NULL,
  `cgname` varchar(255) NOT NULL,
  `cglocation` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `cgid`, `cgname`, `cglocation`, `created_at`) VALUES
(1, '264', 'Swami Vivekananda Institute of Modern Science', 'Karbala', '2022-06-08 23:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `org_responds`
--

CREATE TABLE `org_responds` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `submitted_by` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `org_responds`
--

INSERT INTO `org_responds` (`id`, `user`, `email`, `mobile`, `comments`, `org_name`, `submitted_by`) VALUES
(1, 'Rajesh Pal', 'rp2470021@gmail.com', '4984654564', 'dsfds', 'group d', '2022-06-14 22:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `org_ss_submit`
--

CREATE TABLE `org_ss_submit` (
  `id` int(255) NOT NULL,
  `scholar_name` varchar(255) NOT NULL,
  `scholar_amount` varchar(255) NOT NULL,
  `scholar_provider` varchar(255) NOT NULL,
  `scholar_link` varchar(255) NOT NULL,
  `scholar_eligibility` varchar(255) NOT NULL,
  `scholar_requirment` varchar(255) NOT NULL,
  `submited_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `org_ss_submit`
--

INSERT INTO `org_ss_submit` (`id`, `scholar_name`, `scholar_amount`, `scholar_provider`, `scholar_link`, `scholar_eligibility`, `scholar_requirment`, `submited_at`) VALUES
(2, 'Post Matric Scholarship for Students with Disabilities 2021-22', 'Maintenance allowance of up to INR 1,600 per month (hostellers) and up to INR 750 per month (day scholars).\r\nDisability allowance of up to INR 4,000 per annum. \r\nReimbursement of compulsory non-refundable fees of up to INR 1.50 lakh per annum excluding th', 'Department of Empowerment of Persons with Disability, Government of India', 'https://www.buddy4study.com/scholarship/nsp-post-matric-scholarship-for-students-with-disabilities', 'Have passed matriculation or higher secondary or any higher exam of a recognized Board of Secondary Education or University\r\nHave more than 40% disability certified by the competent authority\r\nHave an annual family income of less than INR 2.50 lakh\r\nBe pu', 'Percentage of marks obtained in the last qualifying examination\r\nFulfillment of eligibility conditions\r\nNumber of scholarship slots available to the state\r\nPercentage of disability will be taken into consideration if there is a tie for the percentage of m', '2022-06-13 18:26:16'),
(3, 'Merit Cum Means Scholarship for Professional and Technical Courses CS (Minorities) 2021-22', 'Course Fee (for Hostellers and Day Scholars): INR 20,000 per annum or actual, whichever is less\r\nMaintenance Allowance for Hostellers: INR 1,000 per month for 10 months in an academic year\r\nMaintenance Allowance for Day Scholars: INR 500 per month for 10 ', 'Ministry of Minority Affairs, Government of India', 'https://www.buddy4study.com/scholarship/nsp-merit-cum-means-scholarship-for-professional-and-technical-courses-cs-minorities', 'Belong to Minority communities (Muslims, Sikhs, Christians, Buddhists, Jain, and Parsis/Zoroastrians)\r\nBe pursuing a technical or professional course at the undergraduate or postgraduate level from a recognized institution\r\nHave secured at least 50% marks', 'Domicile Certificate\r\nStudent Photograph\r\nSelf Declaration of minority community certificate by the student\r\nSelf-attested copy of previous academic mark sheet\r\nFee receipt of current course year\r\nScanned copy of Aadhar Enrollment/Aadhar Card\r\nIncome cert', '2022-06-14 21:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `ad1` varchar(255) NOT NULL,
  `ad2` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `dob`, `email`, `phone`, `ad1`, `ad2`, `pin`, `state`) VALUES
(1, 'Rajesh Pal', '30/07/2001', 'rp2470021@gmail.com', '8372860771', 'asdfsdfsd', 'sdfsdfsd', '743502', 'westbengal');

-- --------------------------------------------------------

--
-- Table structure for table `responds`
--

CREATE TABLE `responds` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responds`
--

INSERT INTO `responds` (`id`, `user`, `email`, `mobile`, `comments`, `created_at`) VALUES
(2, 'Rajesh Pal', 'rp2470021@gmail.com', '+918372860771', 'Good', '2022-06-07 19:06:56'),
(3, 'Rajesh Pal', 'rp2470021@gmail.com', '+918372860771', ':)', '2022-06-13 16:55:31'),
(5, 'Rajesh Pal', 'rp2470021@gmail.com', '8372860771', ':)', '2022-06-14 20:48:52'),
(7, '', '', '', '', '2022-06-14 20:55:54'),
(8, 'Subhajit Mondol', 'abc@gmail.com', '4453662332', ':)', '2022-06-14 20:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `ssregister`
--

CREATE TABLE `ssregister` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `org` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ssregister`
--

INSERT INTO `ssregister` (`id`, `username`, `password`, `created_at`, `name`, `phone`, `org`) VALUES
(3, 'rp2470023@gmail.com', '$2y$10$kHQogp80h0ezSQ4hbMq/N.Fh.rwMyoNgZtpbxSygzFD1WruKAMuii', '2022-06-08 20:07:22', 'Rajesh Pal', '8372860771', 'Group-D'),
(5, 'rp2470021@gmail.com', '$2y$10$gSGZBGpDXnkCaoDZ/xhLAuK07cLPwMe.wHLMmalGDJhaCurzuaytu', '2022-06-14 19:32:08', 'Rajesh Pal', '+918372860771', 'Group-D');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `name`, `cname`, `stream`, `email`) VALUES
(14, 'fighterdark92@gmail.com', '$2y$10$jFGEP6HbOPWp1kvFcQDdIegtrQAbXHoFj8/h3CjUOBLqFx1LN1mj6', '2022-06-11 12:52:16', 'Rajesh Pal', '', '', ''),
(15, 'rajesh007', '$2y$10$t9p6OYuQhu5TWQBnnvqeZubIFfPB/ky7JfFFtvl0f4KExeN8PUz.e', '2022-06-15 11:37:55', 'Rajesh Pal', 'SVIMS', 'BCA', 'rp2470021@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `au_sholarships`
--
ALTER TABLE `au_sholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_responds`
--
ALTER TABLE `org_responds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_ss_submit`
--
ALTER TABLE `org_ss_submit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responds`
--
ALTER TABLE `responds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssregister`
--
ALTER TABLE `ssregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `au_sholarships`
--
ALTER TABLE `au_sholarships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `org_responds`
--
ALTER TABLE `org_responds`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `org_ss_submit`
--
ALTER TABLE `org_ss_submit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `responds`
--
ALTER TABLE `responds`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ssregister`
--
ALTER TABLE `ssregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
