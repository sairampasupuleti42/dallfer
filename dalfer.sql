-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 12:18 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dalfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_requests`
--

CREATE TABLE `tbl_contact_requests` (
  `contact_request_id` int(11) NOT NULL,
  `contact_request_name` varchar(50) NOT NULL,
  `contact_request_email` varchar(150) NOT NULL,
  `contact_request_message` text NOT NULL,
  `contact_requested_on` datetime NOT NULL,
  `contact_request_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_documents`
--

CREATE TABLE `tbl_documents` (
  `doc_id` int(11) NOT NULL,
  `doc_path` varchar(500) NOT NULL,
  `doc_created_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `event_d` int(11) NOT NULL,
  `event_name` varchar(300) NOT NULL,
  `event_slug` varchar(350) NOT NULL,
  `event_uploads` varchar(300) NOT NULL,
  `event_category` int(11) NOT NULL,
  `event_created_on` datetime NOT NULL,
  `event_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_categories`
--

CREATE TABLE `tbl_event_categories` (
  `event_category_id` int(11) NOT NULL,
  `event_category_name` int(100) NOT NULL,
  `event_category_slug` varchar(150) NOT NULL,
  `event_category_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` varchar(100) NOT NULL,
  `gallery_slug` varchar(300) NOT NULL,
  `gallery_path` varchar(290) NOT NULL,
  `thumb_path` varchar(300) NOT NULL,
  `is_active` enum('1','0') NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(150) NOT NULL,
  `thumb_image` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `role` varchar(11) NOT NULL,
  `created_on` date NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `name`, `email`, `password`, `image`, `thumb_image`, `mobile`, `role`, `created_on`, `is_active`, `created_by`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'data/users/sairam-1/profile1.jpg', 'data/users/sairam-1/thumb_profile1.jpg', '9493978979', 'SUPER_ADMIN', '2017-12-20', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact_requests`
--
ALTER TABLE `tbl_contact_requests`
  ADD PRIMARY KEY (`contact_request_id`);

--
-- Indexes for table `tbl_documents`
--
ALTER TABLE `tbl_documents`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`event_d`);

--
-- Indexes for table `tbl_event_categories`
--
ALTER TABLE `tbl_event_categories`
  ADD PRIMARY KEY (`event_category_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact_requests`
--
ALTER TABLE `tbl_contact_requests`
  MODIFY `contact_request_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_documents`
--
ALTER TABLE `tbl_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_d` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_event_categories`
--
ALTER TABLE `tbl_event_categories`
  MODIFY `event_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
