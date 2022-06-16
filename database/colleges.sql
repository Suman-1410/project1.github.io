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
-- Database: `colleges`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `clevel` varchar(255) NOT NULL,
  `t_tuition_fees` varchar(255) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `wlink` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `courses`, `duration`, `clevel`, `t_tuition_fees`, `eligibility`, `wlink`, `created_at`) VALUES
(1, 'Bachelor of Computer Applications (BCA)', '3 years (Full Time)', 'UG Degree', 'INR 1.5 L', 'Mandatory Subjects : English,Math/Stats/Business Math/Comp. App Candidates passed West Bengal Council of Higher Secondary Education or its equivalent examination from a recognized University/ Board are eligible to apply.', 'https://svims.in/bca/', '2022-06-09 13:28:28'),
(7, 'B.Sc. (Hons.) in Biotechnology', '3 years (Full Time)', 'UG Degree', 'INR 1.65 Lakh', '45%  Mandatory Subjects : English,Physics/ Chemistry/ Mathematics Candidate having passed/ appeared/ due –to-appear at the Higher Secondary Examination in the General or Vocational Stream of West Bengal Council of Higher Secondary Education or its equival', 'https://svims.in/b-sc-in-biotechnology/', '2022-06-13 20:27:28'),
(8, 'M.Sc. in Biotechnology.', '2 years (Full Time)', 'PG Degree', 'INR 1.50 Lakh', 'Candidate must have passed Graduation with any of the Life Science Subjects(Biotech., Microbio, Botany, Zoology, Biochem.) from a recognized university.', 'https://svims.in/', '2022-06-15 01:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `fiem`
--

CREATE TABLE `fiem` (
  `id` int(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `clevel` varchar(255) NOT NULL,
  `t_tuition_fees` varchar(255) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `wlink` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fiem`
--

INSERT INTO `fiem` (`id`, `courses`, `duration`, `clevel`, `t_tuition_fees`, `eligibility`, `wlink`, `created_at`) VALUES
(1, 'BBA in Hospitality and Hotel Administration', '3 years (Full Time)', 'UG Degree', 'INR 3.31 Lakh', '50%  Candidates should have passed10+2 examination from any board', 'https://futureeducation.in/courses/bba-mba-future-academy/', '2022-06-09 18:12:27'),
(4, 'Bachelor of Computer Applications (BCA)', '3 years (Full Time)', 'UG Degree', 'INR 2.65 Lakh', '10+2', 'https://futureeducation.in/', '2022-06-09 18:17:51'),
(6, 'B.Tech. in Computer Science and Engineering', '4 years (Full Time)', 'UG Degree', 'INR 3.85 Lakh', 'Candidate must have passed 10+2 with Physics, Mathematics along with any one of Chemistry/Biotechnology/Biology/Computer Science/Computer Application/Technical Vocational Subject as compulsory subjects with individual pass marks', 'https://futureeducation.in/courses', '2022-06-13 20:30:18'),
(7, 'Master of Computer Applications (MCA)', '2 years (Full Time)', 'PG Degree', 'INR 2.15 Lakh', 'Candidate must have passed BE/B.TECH Computer Science/IT, BE/B.Tech others, B.Sc major Computer Application,B.Sc./B.A/B.Com /BCA and obtained at least 50% marks in aggregate and 50% marks in Mathematics as a subject at graduation level.', 'https://futureeducation.in/', '2022-06-15 01:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `email`, `phone`, `dob`, `street`, `city`, `state`, `pin`, `created_at`) VALUES
(1, 'Rajesh Pal', 'rp2470021@gmail.com', '8372860771', '30/07/2001', 'Bhangar', 'bhangar', 'Westbengal', '743502', '2022-06-10 01:10:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiem`
--
ALTER TABLE `fiem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fiem`
--
ALTER TABLE `fiem`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
