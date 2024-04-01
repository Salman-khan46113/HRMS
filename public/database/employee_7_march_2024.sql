-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2024 at 11:50 PM
-- Server version: 8.0.36-0ubuntu0.20.04.1
-- PHP Version: 7.0.33-68+ubuntu20.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendance`
--

CREATE TABLE `employee_attendance` (
  `attendance_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_in_time` datetime DEFAULT NULL,
  `attendance_out_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee_attendance`
--

INSERT INTO `employee_attendance` (`attendance_id`, `employee_id`, `attendance_date`, `attendance_in_time`, `attendance_out_time`) VALUES
(1, 1, '2024-02-28', '2024-03-04 22:34:09', '2024-03-05 17:30:51'),
(2, 2, '2024-02-27', '2024-02-28 20:10:40', '0000-00-00 00:00:00'),
(3, 2, '2024-02-26', '2024-02-26 08:47:22', '2024-02-26 22:47:22'),
(4, 2, '2024-02-26', NULL, NULL),
(5, 2, '2024-02-28', '2024-02-28 23:15:00', '2024-02-28 23:58:00'),
(7, 2, '2024-02-29', '2024-02-29 22:00:00', '0000-00-00 00:00:00'),
(9, 1, '2024-03-01', '2024-03-04 22:34:09', '2024-03-05 17:30:51'),
(16, 1, '2024-03-02', '2024-03-04 22:34:09', '2024-03-05 17:30:51'),
(22, 1, '2024-03-04', '2024-03-04 22:34:09', '2024-03-05 17:30:51'),
(23, 2, '2024-03-04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 10, '2024-03-04', '0000-00-00 00:00:00', '2024-03-05 17:53:42'),
(25, 11, '2024-03-04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 12, '2024-03-04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 13, '2024-03-04', '2024-03-04 22:35:18', '0000-00-00 00:00:00'),
(28, 14, '2024-03-04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 20, '2024-03-04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 1, '2024-03-05', '2024-03-05 14:55:35', '2024-03-05 17:30:51'),
(37, 10, '2024-03-05', '2024-03-05 17:52:32', '2024-03-05 17:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `leave_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `leave_start_date` date NOT NULL,
  `leave_end_date` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `approved_by` int DEFAULT '0',
  `status` enum('pending','reject','approve') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`leave_id`, `employee_id`, `leave_start_date`, `leave_end_date`, `reason`, `approved_by`, `status`, `added_date`, `updated_date`) VALUES
(1, 2, '2024-03-12', '2024-03-16', 'test', 11, 'approve', '2024-03-06 17:09:36', '2024-03-07 23:42:24'),
(2, 2, '2024-02-14', '2024-02-17', '', 2, 'reject', '2024-03-06 18:00:28', '2024-03-07 13:52:41'),
(3, 2, '2024-03-25', '2024-03-26', 'tets', 2, 'reject', '2024-03-07 10:51:53', '2024-03-07 13:55:05'),
(4, 2, '2024-03-27', '2024-03-28', '', 2, 'reject', '2024-03-07 10:52:51', '2024-03-07 11:04:54'),
(5, 2, '2024-03-31', '2024-04-01', '', 2, 'approve', '2024-03-07 10:53:43', '2024-03-07 11:05:15'),
(6, 2, '2024-03-19', '2024-03-19', '', 2, 'approve', '2024-03-07 11:00:52', '2024-03-07 13:50:19'),
(7, 2, '2024-03-18', '2024-03-18', '', 2, 'approve', '2024-03-07 11:01:48', '2024-03-07 13:57:26'),
(8, 2, '2024-04-03', '2024-04-05', 'home issue', 0, 'pending', '2024-03-07 14:23:38', NULL),
(9, 11, '2024-03-13', '2024-03-15', 'Home issue\n', 11, 'approve', '2024-03-07 20:49:44', '2024-03-07 20:50:50'),
(10, 11, '2024-03-07', '2024-03-12', '', 11, 'reject', '2024-03-07 23:40:28', '2024-03-07 23:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `employee_master`
--

CREATE TABLE `employee_master` (
  `employee_id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employee_code` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','employee') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'employee',
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_code` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile_number` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_general_ci,
  `zipcode` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employment_date` date DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employee_week_off` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_general_ci DEFAULT 'Active',
  `created_by` int DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_master`
--

INSERT INTO `employee_master` (`employee_id`, `first_name`, `middle_name`, `last_name`, `employee_code`, `role`, `email`, `phone_code`, `mobile_number`, `dob`, `gender`, `country`, `state`, `city`, `address`, `zipcode`, `department`, `designation`, `employment_date`, `password`, `profile_image`, `employee_week_off`, `status`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Niya', 'John', 'Dev', 'MDN-00001', 'admin', 'niya@gmail.com', '', '09876543210', '2024-02-08', 'Male', '2', '2', 'Nagpur', 'Vaishali Nagar Nagpur', '440015', 'www', 'Software Developer', '2024-02-01', 'f925916e2754e5e03f75dd58a5733251', '06861059652e73a19e3d946ed4de09d5.jpeg', 'Monday,Sunday', 'Active', 0, '2024-02-26 14:43:47', NULL, NULL),
(2, 'Aarbaj', NULL, 'Mulla', 'MDN-00002', 'employee', 'aarbaj12@yopmail.com', '', '8485835691', '2024-02-26', 'Male', '2', '2', 'Nagpur', 'Jodhpur Village', '416202', 'Hod', 'Test123', '2024-03-03', 'f925916e2754e5e03f75dd58a5733251', '06861059652e73a19e3d946ed4de09d5.jpeg', 'Monday', 'Active', 0, '2024-02-26 21:57:34', NULL, NULL),
(10, 'Aarbaj', 'A', 'Mulla', 'MDN-00003', 'employee', 'aarbaj105@yopmail.com', '+91', '8485835691', '0000-00-00', 'Male', '7', '4', 'Ahmedabad', 'Jodhpur Village', '416202', 'HOD', 'Testing', '2024-03-25', 'f925916e2754e5e03f75dd58a5733251', 'ashutosh20.jpg', '', 'Active', 0, '2024-02-27 22:30:37', NULL, NULL),
(11, 'Aarbaj', 'A', 'Mulla', 'MDN-00004', 'employee', 'aarbaj1044@yopmail.com', '+91', '8485835691', '0000-00-00', 'Female', '7', '4', 'Ahmedabad', 'Jodhpur Village', '416202', 'Developer', 'Software Developer', '2024-02-26', 'f925916e2754e5e03f75dd58a5733251', 'pexels-photo-10974562.jpeg', '', 'Active', 0, '2024-02-28 00:09:27', NULL, NULL),
(12, 'Aarbaj', 'A', 'Mulla', 'MDN-00005', 'employee', 'aarbaj120@yopmail.com', '+91', '8485835691', '2024-02-06', 'Male', '7', '4', 'Ahmedabad', 'Jodhpur Village', '416202', 'Developer', 'Software Developer', '2024-02-13', 'f925916e2754e5e03f75dd58a5733251', '159_pay3.png', '', 'Active', 0, '2024-02-28 19:00:57', NULL, NULL),
(13, 'Juned', 'Aslam', 'Mulla', 'MDN-00006', 'employee', 'juned1122@yomail.com', '+91', '8485835691', '2002-02-15', 'Male', '7', '4', 'Ahmedabad', 'Jodhpur Village', '416202', 'Developer', 'Software Developer', '2024-01-28', 'f925916e2754e5e03f75dd58a5733251', 'download_(2)4.jpeg', 'Monday', 'Active', 0, '2024-02-29 18:17:17', NULL, NULL),
(14, 'Aarbaj', 'A', 'Mulla', 'MDN-00007', 'employee', 'aarbaj10@yopmail.com', '+91', '8485835691', '1975-03-12', 'Male', '7', '4', 'Ahmedabad', 'Jodhpur Village', '416202', 'Developer', 'Software Developer', '2024-03-27', 'f925916e2754e5e03f75dd58a5733251', 'favicon.png', 'Monday', 'Active', 0, '2024-03-01 22:49:05', NULL, NULL),
(20, 'Rehan', '', 'Mulla', 'MDN-00008', 'employee', 'rehan1@yopmail.com', '+91', '08485835691', '2000-03-21', 'Male', '1', '1', 'Kolhapur', 'Pattan kodoli', '416202', 'Software', 'Delvopler', '2024-03-03', 'f925916e2754e5e03f75dd58a5733251', '06861059652e73a19e3d946ed4de09d58.jpeg', 'Monday', 'Active', 0, '2024-03-03 15:20:34', NULL, NULL),
(21, 'John', 'T', 'Bromo', 'MDN-00009', 'employee', 'john5691@yopmail.com', '+91', '8485835691', '2000-02-08', 'Male', '7', '4', 'Kolhapur', 'Pattan kodoli', '416202', 'Developer', 'Software Developer', '2024-02-26', 'f925916e2754e5e03f75dd58a5733251', 'pexels-photo-733745.jpeg', 'Monday', 'Active', 0, '2024-03-05 12:55:22', NULL, NULL),
(22, 'Aarbaj', 'A', 'Mulla', 'MDN-00010', 'employee', 'Test123@yopmail.com', '+91', '8485835691', '2000-02-12', 'Male', '7', '4', 'Ahmedabad', 'Jodhpur Village', '416202', 'Developer', 'Software Developer', '2024-03-05', 'f925916e2754e5e03f75dd58a5733251', 'new.jpg', 'Monday,Tuesday', 'Active', 0, '2024-03-05 12:58:16', NULL, NULL),
(23, 'Aarbaj', 'A', 'Mulla', 'MDN-00011', 'employee', 'aarbaj56918@yopmail.com', '+91', '8485835691', '2000-02-14', 'Male', '7', '4', 'Ahmedabad', 'Jodhpur Village', '416202', 'Developer', 'Software Developer', '2024-02-04', 'f925916e2754e5e03f75dd58a5733251', '5START.png', 'Monday', 'Active', 0, '2024-03-05 12:59:43', NULL, NULL),
(24, 'Aarbaj', 'A', 'Mulla', 'MDN-00012', 'employee', 'aarbaj10568@yopmail.com', '+91', '8485835691', '2000-02-22', 'Male', '7', '4', 'Ahmedabad', 'Jodhpur Village', '416202', 'Developer', 'Software Developer', '2024-03-05', 'f925916e2754e5e03f75dd58a5733251', '5START1.png', 'Monday,Tuesday', 'Active', 0, '2024-03-05 13:02:31', NULL, NULL),
(25, 'Rehan', '', 'Mulla', 'MDN-00013', 'employee', 'rehan1111@yopmail.com', '+91', '8485835691', '2000-03-21', 'Male', '2', '2', 'Kolhapur', 'Pattan kodoli', '416202', 'Software', 'Delvopler', '2024-03-05', 'f925916e2754e5e03f75dd58a5733251', '3d3c3b6674930cac6df67045e798a652.png', 'Monday', 'Active', 0, '2024-03-05 17:35:46', NULL, NULL),
(26, 'Aarbaj', 'A', 'Mulla', 'MDN-00014', 'employee', 'aarbaj1234@yopmail.com', '+91', '8485835691', '2000-02-14', 'Male', '7', '4', 'Ahmedabad', 'Jodhpur Village', '416202', 'Developer', 'Software Developer', '2024-03-06', 'f925916e2754e5e03f75dd58a5733251', '5START2.png', 'Monday', 'Active', 0, '2024-03-06 10:01:41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_week_off`
--

CREATE TABLE `employee_week_off` (
  `week_off_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `employee_week_off` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee_week_off`
--

INSERT INTO `employee_week_off` (`week_off_id`, `employee_id`, `employee_week_off`, `month`, `added_date`) VALUES
(4, 20, 'Monday,Tuesday,Wednesday', 'March', '2024-03-03 15:20:34'),
(5, 10, 'Monday', 'March', '2024-03-03 23:39:34'),
(6, 11, 'Monday,Tuesday', 'March', '2024-03-03 23:40:04'),
(7, 12, 'Monday', 'March', '2024-03-03 23:42:15'),
(15, 14, 'Monday', 'March', '2024-03-04 11:58:21'),
(16, 2, 'Monday', 'March', '2024-03-04 11:58:36'),
(19, 1, 'Monday,Sunday', 'March', '2024-03-04 12:00:58'),
(20, 21, 'Monday', 'March', '2024-03-05 12:55:22'),
(21, 22, 'Monday,Tuesday', 'March', '2024-03-05 12:58:16'),
(22, 23, 'Monday', 'March', '2024-03-05 12:59:43'),
(23, 24, 'Monday,Tuesday', 'March', '2024-03-05 13:02:31'),
(24, 25, 'Monday', 'March', '2024-03-05 17:35:46'),
(25, 26, 'Monday', 'March', '2024-03-06 10:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `iStateId` int UNSIGNED NOT NULL,
  `vState` varchar(255) NOT NULL,
  `vStateCode` varchar(20) NOT NULL,
  `iCountryId` int DEFAULT NULL,
  `vCountryCode` varchar(3) DEFAULT NULL,
  `eStatus` enum('Active','Inactive') DEFAULT NULL,
  `iSysRecDeleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`iStateId`, `vState`, `vStateCode`, `iCountryId`, `vCountryCode`, `eStatus`, `iSysRecDeleted`) VALUES
(1, 'ANDHRA PRADESH', 'AP', 99, 'IN', 'Active', 0),
(2, 'ASSAM', 'AS', 99, 'IN', 'Active', 0),
(3, 'ARUNACHAL PRADESH', 'AR', 99, 'IN', 'Active', 0),
(4, 'BIHAR', 'BR', 99, 'IN', 'Active', 0),
(5, 'GUJRAT', 'GJ', 99, 'IN', 'Active', 0),
(6, 'HARYANA', 'HR', 99, 'IN', 'Active', 0),
(7, 'HIMACHAL PRADESH', 'HP', 99, 'IN', 'Active', 0),
(8, 'JAMMU & KASHMIR', 'JK', 99, 'IN', 'Active', 0),
(9, 'KARNATAKA', 'KA', 99, 'IN', 'Active', 0),
(10, 'KERALA', 'KL', 99, 'IN', 'Active', 0),
(11, 'MADHYA PRADESH', 'MP', 99, 'IN', 'Active', 0),
(12, 'MAHARASHTRA', 'MH', 99, 'IN', 'Active', 0),
(13, 'MANIPUR', 'MN', 99, 'IN', 'Active', 0),
(14, 'MEGHALAYA', 'ML', 99, 'IN', 'Active', 0),
(15, 'MIZORAM', 'MZ', 99, 'IN', 'Active', 0),
(16, 'NAGALAND', 'NL', 99, 'IN', 'Active', 0),
(17, 'ORISSA', 'OR', 99, 'IN', 'Active', 0),
(18, 'PUNJAB', 'PB', 99, 'IN', 'Active', 0),
(19, 'RAJASTHAN', 'RJ', 99, 'IN', 'Active', 0),
(20, 'SIKKIM', 'SK', 99, 'IN', 'Active', 0),
(21, 'TAMIL NADU', 'TN', 99, 'IN', 'Active', 0),
(22, 'TRIPURA', 'TR', 99, 'IN', 'Active', 0),
(23, 'UTTAR PRADESH', 'UP', 99, 'IN', 'Active', 0),
(24, 'WEST BENGAL', 'WB', 99, 'IN', 'Active', 0),
(25, 'DELHI', 'DL', 99, 'IN', 'Active', 0),
(26, 'GOA', 'GA', 99, 'IN', 'Active', 0),
(27, 'PONDICHERRY', 'PY', 99, 'IN', 'Active', 0),
(28, 'LAKSHDWEEP', 'LD', 99, 'IN', 'Active', 0),
(29, 'DAMAN & DIU', 'DD', 99, 'IN', 'Active', 0),
(30, 'DADRA & NAGAR', 'DN', 99, 'IN', 'Active', 0),
(31, 'CHANDIGARH', 'CH', 99, 'IN', 'Active', 0),
(32, 'ANDAMAN & NICOBAR', 'AN', 99, 'IN', 'Active', 0),
(33, 'UTTARANCHAL', 'UT', 99, 'IN', 'Active', 0),
(34, 'JHARKHAND', 'JH', 99, 'IN', 'Active', 0),
(35, 'CHATTISGARH', 'CG', 99, 'IN', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country_master`
--

CREATE TABLE `tbl_country_master` (
  `id` int NOT NULL,
  `country_code` char(2) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `currency_code` char(3) DEFAULT NULL,
  `telephone_prefix` varchar(10) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_country_master`
--

INSERT INTO `tbl_country_master` (`id`, `country_code`, `country_name`, `currency_code`, `telephone_prefix`, `status`) VALUES
(1, 'AD', 'Andorra', 'EUR', '+376', 'Active'),
(2, 'AE', 'United Arab Emirates', 'AED', '+971', 'Active'),
(3, 'AF', 'Afghanistan', 'AFN', '+93', 'Active'),
(4, 'AG', 'Antigua and Barbuda', 'XCD', '+1-268', 'Active'),
(5, 'AI', 'Anguilla', 'XCD', '+1-264', 'Active'),
(6, 'AL', 'Albania', 'ALL', '+355', 'Active'),
(7, 'AM', 'Armenia', 'AMD', '+374', 'Active'),
(8, 'AO', 'Angola', 'AOA', '+244', 'Active'),
(9, 'AQ', 'Antarctica', '', '+672', 'Active'),
(10, 'AR', 'Argentina', 'ARS', '+54', 'Active'),
(11, 'AS', 'American Samoa', 'USD', '+1-684', 'Active'),
(12, 'AT', 'Austria', 'EUR', '+43', 'Active'),
(13, 'AU', 'Australia', 'AUD', '+61', 'Active'),
(14, 'AW', 'Aruba', 'AWG', '+297', 'Active'),
(15, 'AX', 'Åland Islands', 'EUR', '+358', 'Active'),
(16, 'AZ', 'Azerbaijan', 'AZN', '+994', 'Active'),
(17, 'BA', 'Bosnia and Herzegovina', 'BAM', '+387', 'Active'),
(18, 'BB', 'Barbados', 'BBD', '+1-246', 'Active'),
(19, 'BD', 'Bangladesh', 'BDT', '+880', 'Active'),
(20, 'BE', 'Belgium', 'EUR', '+32', 'Active'),
(21, 'BF', 'Burkina Faso', 'XOF', '+226', 'Active'),
(22, 'BG', 'Bulgaria', 'BGN', '+359', 'Active'),
(23, 'BH', 'Bahrain', 'BHD', '+973', 'Active'),
(24, 'BI', 'Burundi', 'BIF', '+257', 'Active'),
(25, 'BJ', 'Benin', 'XOF', '+229', 'Active'),
(26, 'BL', 'Saint Barthélemy', 'EUR', '+590', 'Active'),
(27, 'BM', 'Bermuda', 'BMD', '+1-441', 'Active'),
(28, 'BN', 'Brunei Darussalam', 'BND', '+673', 'Active'),
(29, 'BO', 'Bolivia', 'BOB', '+591', 'Active'),
(30, 'BQ', 'Bonaire, Sint Eustatius and Saba', 'USD', '+599', 'Active'),
(31, 'BR', 'Brazil', 'BRL', '+55', 'Active'),
(32, 'BS', 'Bahamas', 'BSD', '+1-242', 'Active'),
(33, 'BT', 'Bhutan', 'BTN', '+975', 'Active'),
(34, 'BV', 'Bouvet Island', 'NOK', '+47', 'Active'),
(35, 'BW', 'Botswana', 'BWP', '+267', 'Active'),
(36, 'BY', 'Belarus', 'BYR', '+375', 'Active'),
(37, 'BZ', 'Belize', 'BZD', '+501', 'Active'),
(38, 'CA', 'Canada', 'CAD', '+1', 'Active'),
(39, 'CC', 'Cocos [Keeling] Islands', 'AUD', '+61', 'Active'),
(40, 'CD', 'Democratic Republic of the Congo', 'COD', '+243', 'Active'),
(41, 'CF', 'Central African Republic', 'XAF', '+236', 'Active'),
(42, 'CG', 'Republic of the Congo', 'XAF', '+242', 'Active'),
(43, 'CH', 'Switzerland', 'CHF', '+41	', 'Active'),
(44, 'CI', 'Ivory Coast', 'XOF', '+225', 'Active'),
(45, 'CK', 'Cook Islands', 'NZD', '+682', 'Active'),
(46, 'CL', 'Chile', 'CLP', '+56', 'Active'),
(47, 'CM', 'Cameroon', 'XAF', '+237', 'Active'),
(48, 'CN', 'China', 'CNY', '+86', 'Active'),
(49, 'CO', 'Colombia', 'COP', '+57', 'Active'),
(50, 'CR', 'Costa Rica', 'CRC', '+506', 'Active'),
(51, 'CU', 'Cuba', 'CUP', '+53', 'Active'),
(52, 'CV', 'Cape Verde', 'CVE', '+238', 'Active'),
(53, 'CW', 'Curaçao', 'ANG', '+599', 'Active'),
(54, 'CX', 'Christmas Island', 'AUD', '+61', 'Active'),
(55, 'CY', 'Cyprus', 'EUR', '+357', 'Active'),
(56, 'CZ', 'Czech Republic', 'CZK', '+420', 'Active'),
(57, 'DE', 'Germany', 'EUR', '+49', 'Active'),
(58, 'DJ', 'Djibouti', 'DJF', '+253', 'Active'),
(59, 'DK', 'Denmark', 'DKK', '+45', 'Active'),
(60, 'DM', 'Dominica', 'XCD', '+1-767', 'Active'),
(61, 'DO', 'Dominican Republic', 'DOP', '+1-809', 'Active'),
(62, 'DZ', 'Algeria', 'DZD', '+213', 'Active'),
(63, 'EC', 'Ecuador', 'USD', '+593', 'Active'),
(64, 'EE', 'Estonia', 'EUR', '+372', 'Active'),
(65, 'EG', 'Egypt', 'EGP', '+20', 'Active'),
(66, 'EH', 'Western Sahara', 'MAD', '+212', 'Active'),
(67, 'ER', 'Eritrea', 'ERN', '+291', 'Active'),
(68, 'ES', 'Spain', 'EUR', '+34', 'Active'),
(69, 'ET', 'Ethiopia', 'ETB', '+251', 'Active'),
(70, 'FI', 'Finland', 'EUR', '+358', 'Active'),
(71, 'FJ', 'Fiji', 'FJD', '+679', 'Active'),
(72, 'FK', 'Falkland Islands', 'FKP', '+500', 'Active'),
(73, 'FM', 'Micronesia', 'USD', '+691', 'Active'),
(74, 'FO', 'Faroe Islands', 'DKK', '+298', 'Active'),
(75, 'FR', 'France', 'EUR', '+33', 'Active'),
(76, 'GA', 'Gabon', 'XAF', '+241', 'Active'),
(77, 'GB', 'United Kingdom of Great Britain and Northern Ireland', 'GBP', '+44', 'Active'),
(78, 'GD', 'Grenada', 'XCD', '+1-473', 'Active'),
(79, 'GE', 'Georgia', 'GEL', '+995', 'Active'),
(80, 'GF', 'French Guiana', 'EUR', '+594', 'Active'),
(81, 'GG', 'Guernsey', 'GBP', '+44-1481', 'Active'),
(82, 'GH', 'Ghana', 'GHS', '+233', 'Active'),
(83, 'GI', 'Gibraltar', 'GIP', '+350', 'Active'),
(84, 'GL', 'Greenland', 'DKK', '+299', 'Active'),
(85, 'GM', 'Gambia', 'GMD', '+220', 'Active'),
(86, 'GN', 'Guinea', 'GNF', '+224', 'Active'),
(87, 'GP', 'Guadeloupe', 'EUR', '+590', 'Active'),
(88, 'GQ', 'Equatorial Guinea', 'XAF', '+240', 'Active'),
(89, 'GR', 'Greece', 'EUR', '+30', 'Active'),
(90, 'GS', 'South Georgia and the South Sandwich Islands', 'GBP', '+500', 'Active'),
(91, 'GT', 'Guatemala', 'GTQ', '+502', 'Active'),
(92, 'GU', 'Guam', 'USD', '+1-671', 'Active'),
(93, 'GW', 'Guinea-Bissau', 'XOF', '+245', 'Active'),
(94, 'GY', 'Guyana', 'GYD', '+592', 'Active'),
(95, 'HK', 'Hong Kong', 'HKD', '+852', 'Active'),
(96, 'HM', 'Heard Island and McDonald Islands', 'AUD', '+672', 'Active'),
(97, 'HN', 'Honduras', 'HNL', '+504', 'Active'),
(98, 'HR', 'Croatia', 'HRK', '+385', 'Active'),
(99, 'HT', 'Haiti', 'HTG', '+509', 'Active'),
(100, 'HU', 'Hungary', 'HUF', '+36', 'Active'),
(101, 'ID', 'Indonesia', 'IDR', '+62', 'Active'),
(102, 'IE', 'Ireland', 'EUR', '+353', 'Active'),
(103, 'IL', 'Israel', 'ILS', '+972', 'Active'),
(104, 'IM', 'Isle of Man', 'GBP', '+44-1624', 'Active'),
(105, 'IN', 'India', 'INR', '+91', 'Active'),
(106, 'IO', 'British Indian Ocean Territory', 'USD', '+246', 'Active'),
(107, 'IQ', 'Iraq', 'IQD', '+964', 'Active'),
(108, 'IR', 'Iran', 'IRR', '+98', 'Active'),
(109, 'IS', 'Iceland', 'ISK', '+354', 'Active'),
(110, 'IT', 'Italy', 'EUR', '+39', 'Active'),
(111, 'JE', 'Jersey', 'GBP', '+44-1534', 'Active'),
(112, 'JM', 'Jamaica', 'JMD', '+1-876', 'Active'),
(113, 'JO', 'Jordan', 'JOD', '+962', 'Active'),
(114, 'JP', 'Japan', 'JPY', '+81', 'Active'),
(115, 'KE', 'Kenya', 'KES', '+254', 'Active'),
(116, 'KG', 'Kyrgyzstan', 'KGS', '+996', 'Active'),
(117, 'KH', 'Cambodia', 'KHR', '+855', 'Active'),
(118, 'KI', 'Kiribati', 'AUD', '+686', 'Active'),
(119, 'KM', 'Comoros', 'KMF', '+269', 'Active'),
(120, 'KN', 'Saint Kitts and Nevis', 'XCD', '+1-869', 'Active'),
(121, 'KP', 'North Korea', 'KPW', '+850', 'Active'),
(122, 'KR', 'South Korea', 'KRW', '+82', 'Active'),
(123, 'KW', 'Kuwait', 'KWD', '+965', 'Active'),
(124, 'KY', 'Cayman Islands', 'KYD', '+1-345', 'Active'),
(125, 'KZ', 'Kazakhstan', 'KZT', '+7', 'Active'),
(126, 'LA', 'Laos', 'LAK', '+856', 'Active'),
(127, 'LB', 'Lebanon', 'LBP', '+961', 'Active'),
(128, 'LC', 'Saint Lucia', 'XCD', '+1-758', 'Active'),
(129, 'LI', 'Liechtenstein', 'CHF', '+423', 'Active'),
(130, 'LK', 'Sri Lanka', 'LKR', '+94', 'Active'),
(131, 'LR', 'Liberia', 'LRD', '+231', 'Active'),
(132, 'LS', 'Lesotho', 'LSL', '+266', 'Active'),
(133, 'LT', 'Lithuania', 'EUR', '+370', 'Active'),
(134, 'LU', 'Luxembourg', 'EUR', '+352', 'Active'),
(135, 'LV', 'Latvia', 'EUR', '+371', 'Active'),
(136, 'LY', 'Libya', 'LYD', '+218', 'Active'),
(137, 'MA', 'Morocco', 'MAD', '+212', 'Active'),
(138, 'MC', 'Monaco', 'EUR', '+377', 'Active'),
(139, 'MD', 'Moldova', 'MDL', '+373', 'Active'),
(140, 'ME', 'Montenegro', 'EUR', '+382', 'Active'),
(141, 'MF', 'Saint Martin', 'EUR', '+590', 'Active'),
(142, 'MG', 'Madagascar', 'MGA', '+261', 'Active'),
(143, 'MH', 'Marshall Islands', 'USD', '+692', 'Active'),
(144, 'MK', 'North Macedonia', 'MKD', '+389', 'Active'),
(145, 'ML', 'Mali', 'XOF', '+223', 'Active'),
(146, 'MM', 'Myanmar [Burma]', 'MMK', '+95', 'Active'),
(147, 'MN', 'Mongolia', 'MNT', '+976', 'Active'),
(148, 'MO', 'Macao', 'MOP', '+853', 'Active'),
(149, 'MP', 'Northern Mariana Islands', 'USD', '+1-670', 'Active'),
(150, 'MQ', 'Martinique', 'EUR', '+596', 'Active'),
(151, 'MR', 'Mauritania', 'MRO', '+222', 'Active'),
(152, 'MS', 'Montserrat', 'XCD', '+1-664', 'Active'),
(153, 'MT', 'Malta', 'EUR', '+356', 'Active'),
(154, 'MU', 'Mauritius', 'MUR', '+230', 'Active'),
(155, 'MV', 'Maldives', 'MVR', '+960', 'Active'),
(156, 'MW', 'Malawi', 'MWK', '+265', 'Active'),
(157, 'MX', 'Mexico', 'MXN', '+52', 'Active'),
(158, 'MY', 'Malaysia', 'MYR', '+60', 'Active'),
(159, 'MZ', 'Mozambique', 'MZN', '+258', 'Active'),
(160, 'NA', 'Namibia', 'NAD', '+264', 'Active'),
(161, 'NC', 'New Caledonia', 'XPF', '+687', 'Active'),
(162, 'NE', 'Niger', 'XOF', '+227', 'Active'),
(163, 'NF', 'Norfolk Island', 'AUD', '+672', 'Active'),
(164, 'NG', 'Nigeria', 'NGN', '+234', 'Active'),
(165, 'NI', 'Nicaragua', 'NIO', '+505', 'Active'),
(166, 'NL', 'Netherlands', 'EUR', '+31', 'Active'),
(167, 'NO', 'Norway', 'NOK', '+47', 'Active'),
(168, 'NP', 'Nepal', 'NPR', '+977', 'Active'),
(169, 'NR', 'Nauru', 'AUD', '+674', 'Active'),
(170, 'NU', 'Niue', 'NZD', '+683', 'Active'),
(171, 'NZ', 'New Zealand', 'NZD', '+64', 'Active'),
(172, 'OM', 'Oman', 'OMR', '+968', 'Active'),
(173, 'PA', 'Panama', 'PAB', '+507', 'Active'),
(174, 'PE', 'Peru', 'PEN', '+51', 'Active'),
(175, 'PF', 'French Polynesia', 'XPF', '+689', 'Active'),
(176, 'PG', 'Papua New Guinea', 'PGK', '+675', 'Active'),
(177, 'PH', 'Philippines', 'PHP', '+63', 'Active'),
(178, 'PK', 'Pakistan', 'PKR', '+92', 'Active'),
(179, 'PL', 'Poland', 'PLN', '+48', 'Active'),
(180, 'PM', 'Saint Pierre and Miquelon', 'EUR', '+508', 'Active'),
(181, 'PN', 'Pitcairn Islands', 'NZD', '+64', 'Active'),
(182, 'PR', 'Puerto Rico', 'USD', '+1-787', 'Active'),
(183, 'PS', 'Palestine', 'ILS', '+970', 'Active'),
(184, 'PT', 'Portugal', 'EUR', '+351', 'Active'),
(185, 'PW', 'Palau', 'USD', '+680', 'Active'),
(186, 'PY', 'Paraguay', 'PYG', '+595', 'Active'),
(187, 'QA', 'Qatar', 'QAR', '+974', 'Active'),
(188, 'RE', 'Réunion', 'EUR', '+262', 'Active'),
(189, 'RO', 'Romania', 'RON', '+40', 'Active'),
(190, 'RS', 'Serbia', 'RSD', '+381', 'Active'),
(191, 'RU', 'Russia', 'RUB', '+7', 'Active'),
(192, 'RW', 'Rwanda', 'RWF', '+250', 'Active'),
(193, 'SA', 'Saudi Arabia', 'SAR', '+966', 'Active'),
(194, 'SB', 'Solomon Islands', 'SBD', '+677', 'Active'),
(195, 'SC', 'Seychelles', 'SCR', '+248', 'Active'),
(196, 'SD', 'Sudan', 'SDG', '+249', 'Active'),
(197, 'SE', 'Sweden', 'SEK', '+46', 'Active'),
(198, 'SG', 'Singapore', 'SGD', '+65', 'Active'),
(199, 'SH', 'Saint Helena', 'SHP', '+290', 'Active'),
(200, 'SI', 'Slovenia', 'EUR', '+386', 'Active'),
(201, 'SJ', 'Svalbard and Jan Mayen', 'NOK', '+47', 'Active'),
(202, 'SK', 'Slovakia', 'EUR', '+421', 'Active'),
(203, 'SL', 'Sierra Leone', 'SLL', '+232', 'Active'),
(204, 'SM', 'San Marino', 'EUR', '+378', 'Active'),
(205, 'SN', 'Senegal', 'XOF', '+221', 'Active'),
(206, 'SO', 'Somalia', 'SOS', '+252', 'Active'),
(207, 'SR', 'Suriname', 'SRD', '+597', 'Active'),
(208, 'SS', 'South Sudan', 'SSP', '+211', 'Active'),
(209, 'ST', 'São Tomé and Príncipe', 'STD', '+239', 'Active'),
(210, 'SV', 'El Salvador', 'USD', '+503', 'Active'),
(211, 'SX', 'Sint Maarten', 'ANG', '+1-721', 'Active'),
(212, 'SY', 'Syria', 'SYP', '+963', 'Active'),
(213, 'SZ', 'Eswatini', 'SZL', '+268', 'Active'),
(214, 'TC', 'Turks and Caicos Islands', 'USD', '+1-649', 'Active'),
(215, 'TD', 'Chad', 'XAF', '+235', 'Active'),
(216, 'TF', 'French Southern Territories', 'EUR', '+262', 'Active'),
(217, 'TG', 'Togo', 'XOF', '+228', 'Active'),
(218, 'TH', 'Thailand', 'THB', '+66', 'Active'),
(219, 'TJ', 'Tajikistan', 'TJS', '+992', 'Active'),
(220, 'TK', 'Tokelau', 'NZD', '+690', 'Active'),
(221, 'TL', 'East Timor', 'USD', '+670', 'Active'),
(222, 'TM', 'Turkmenistan', 'TMT', '+993', 'Active'),
(223, 'TN', 'Tunisia', 'TND', '+216', 'Active'),
(224, 'TO', 'Tonga', 'TOP', '+676', 'Active'),
(225, 'TR', 'Turkey', 'TRY', '+90', 'Active'),
(226, 'TT', 'Trinidad and Tobago', 'TTD', '+1-868', 'Active'),
(227, 'TV', 'Tuvalu', 'AUD', '+688', 'Active'),
(228, 'TW', 'Taiwan', 'TWD', '+886', 'Active'),
(229, 'TZ', 'Tanzania', 'TZS', '+255', 'Active'),
(230, 'UA', 'Ukraine', 'UAH', '+380', 'Active'),
(231, 'UG', 'Uganda', 'UGX', '+256', 'Active'),
(232, 'UM', 'U.S. Minor Outlying Islands', 'USD', '+1', 'Active'),
(233, 'US', 'United States', 'USD', '+1', 'Active'),
(234, 'UY', 'Uruguay', 'UYU', '+598', 'Active'),
(235, 'UZ', 'Uzbekistan', 'UZS', '+998', 'Active'),
(236, 'VA', 'Vatican City', 'EUR', '+379', 'Active'),
(237, 'VC', 'Saint Vincent and the Grenadines', 'XCD', '+1-784', 'Active'),
(238, 'VE', 'Venezuela', 'VEF', '+58', 'Active'),
(239, 'VG', 'British Virgin Islands', 'USD', '+1-284', 'Active'),
(240, 'VI', 'U.S. Virgin Islands', 'USD', '+1-340', 'Active'),
(241, 'VN', 'Vietnam', 'VND', '+84', 'Active'),
(242, 'VU', 'Vanuatu', 'VUV', '+678', 'Active'),
(243, 'WF', 'Wallis and Futuna', 'XPF', '+681', 'Active'),
(244, 'WS', 'Samoa', 'WST', '+685', 'Active'),
(245, 'XK', 'Kosovo', 'EUR', '+383', 'Active'),
(246, 'YE', 'Yemen', 'YER', '+967', 'Active'),
(247, 'YT', 'Mayotte', 'EUR', '+262', 'Active'),
(248, 'ZA', 'South Africa', 'ZAR', '+27', 'Active'),
(249, 'ZM', 'Zambia', 'ZMW', '+260', 'Active'),
(250, 'ZW', 'Zimbabwe', 'ZWL', '+263', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `employee_master`
--
ALTER TABLE `employee_master`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_week_off`
--
ALTER TABLE `employee_week_off`
  ADD PRIMARY KEY (`week_off_id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`iStateId`),
  ADD KEY `mod_state_iCountryId_index` (`iCountryId`);

--
-- Indexes for table `tbl_country_master`
--
ALTER TABLE `tbl_country_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  MODIFY `attendance_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `leave_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee_master`
--
ALTER TABLE `employee_master`
  MODIFY `employee_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `employee_week_off`
--
ALTER TABLE `employee_week_off`
  MODIFY `week_off_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `iStateId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
