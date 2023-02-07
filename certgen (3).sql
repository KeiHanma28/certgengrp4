-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 07:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certgen`
--

-- --------------------------------------------------------

--
-- Table structure for table `base_image`
--

CREATE TABLE `base_image` (
  `baseimage_id` int(11) NOT NULL,
  `baseimage_name` varchar(50) DEFAULT NULL,
  `baseimage_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `base_image`
--

INSERT INTO `base_image` (`baseimage_id`, `baseimage_name`, `baseimage_img`) VALUES
(8, 'DesignNew', '/images/DesignNew.png'),
(9, 'Scrunchies', '/images/design002.png'),
(10, 'Chat App', '/images/design003.png'),
(11, 'New Design Clean 1', '/images/design003.png'),
(12, 'New Design Clean 2', '/images/DesignNew.png');

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `design_id` int(11) NOT NULL,
  `baseimage_id` int(11) DEFAULT NULL,
  `logo_id` int(11) DEFAULT NULL,
  `seminar_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `signature_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`design_id`, `baseimage_id`, `logo_id`, `seminar_id`, `position`, `signature_id`) VALUES
(20, 8, 9, 34, 2, NULL),
(23, 9, 9, 37, 2, NULL),
(24, 11, 8, 38, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_data`
--

CREATE TABLE `dynamic_data` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `intro` varchar(150) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dynamic_data`
--

INSERT INTO `dynamic_data` (`id`, `title`, `intro`, `location`, `email`, `contact`, `year`) VALUES
(1, 'CERTIFICATE PRODUCTION - CREATE AND SEND CERTIFICATES', 'Our digital credentials infrastructure has everything you need to generate certificates. A certificate generator, templates, and emails.', 'Urdaneta, Pangasinan', 'info@example.coms', '07-563-22-559', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `generated_certs`
--

CREATE TABLE `generated_certs` (
  `firstname` varchar(50) DEFAULT NULL,
  `validation_code` text DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `cert_detail` varchar(255) DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `generated_id` int(11) NOT NULL,
  `seminar_id` int(11) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `date_sended` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generated_certs`
--

INSERT INTO `generated_certs` (`firstname`, `validation_code`, `lastname`, `cert_detail`, `date_generated`, `generated_id`, `seminar_id`, `email`, `status`, `date_sended`) VALUES
('Charlie', '$2y$10$Nsp7lLSUT3bZ6lFVC9VJd.kf0ki3RrY4fvtZu50pRB2eXhFaKDeWm', 'Nagal', NULL, '2022-11-21 14:41:09', 65, 37, 'nagal.charlieken.a@gmail.com', 1, '2023-01-28 23:32:21'),
('Ryan', '$2y$10$ToelVA1fBkiAkuZpDawXo.8.ULOoR56j5uAZcfSqYkVPSiO6rzbTC', 'Lagnayo', NULL, '2022-11-21 14:47:33', 66, 37, 'kei.hanma.nagal@gmail.com', 0, '2023-01-22 03:13:08'),
('Jacklyn', '$2y$10$RMvDIR0PjhC3V0bseS0VMec/qaqmVuR/lWBdaoUd1j3T2touY.h5.', 'Soriano', NULL, '2022-12-06 20:37:37', 67, 34, 'jacklynsoriano@gmail.com', 0, '2023-01-22 03:13:15'),
('Ken', '$2y$10$pkRyDRNwyx9CYNpUHmO28uJirbKB3dbfV3yw1627nscJbsm0TUQdG', 'Nagal', NULL, '2022-12-06 20:38:16', 68, 38, 'cherrynagal.cn@gmail.com', 0, '2023-01-22 03:13:18'),
('Joven', '$2y$10$Q8Trjv5AsgLqRBrtLH6XN.cvV/g/MTpdt90XIV6TJIP1Dr6zxWqvy', 'Sanity', 'For earning the 1st Place on', '2023-01-28 22:42:37', 72, 34, 'joven@gmail.com', 0, NULL),
('cholly', '$2y$10$QhrolrIi0uL6OuqO/23A/uG/yGaQZrODAe6VvL6it/JbaGQa6CQLy', 'boy', 'for earning top 1 on', '2023-01-28 15:10:50', 73, 34, 'cholly@gmail.com', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

CREATE TABLE `login_credentials` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(50) DEFAULT NULL,
  `user_lastname` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  `user_username` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_credentials`
--

INSERT INTO `login_credentials` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_type`, `user_username`, `user_password`, `password_reset_token`) VALUES
(1, 'Coordinator', 'User', 'ryan@gmail.com', 0, 'coordinator', 'users', '6cvfXtlaXf'),
(4, 'admin', 'user', '', 3, 'admin', 'user', ''),
(16, 'Charlie', 'Ken', 'charlie@gmail.com', 0, 'pro', 'users', 'mANvlyFdGQ');

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials_request`
--

CREATE TABLE `login_credentials_request` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_type` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_credentials_request`
--

INSERT INTO `login_credentials_request` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_type`, `user_username`, `user_password`) VALUES
(4, 'Ryans', 'Lagnayos', 'ryans@gmail.com', 0, 'ryans', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `logo_name` varchar(50) DEFAULT NULL,
  `logo_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_name`, `logo_img`) VALUES
(8, 'PSU', '/images/psulogo.png'),
(9, 'MAPANDAN', '/images/MAPANDAN-SEAL-.png'),
(10, 'Chat App', '/images/icon.png'),
(11, 'Charlie', '/images/pic.jpg'),
(12, 'New Design Clean 1', '/images/Captasdure.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `seminar_id` int(11) NOT NULL,
  `seminar_name` text DEFAULT NULL,
  `seminar_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`seminar_id`, `seminar_name`, `seminar_desc`) VALUES
(34, 'Seminar Test', 'Seminar Test Description'),
(37, 'Robotics', 'Robotics Champion'),
(38, 'Chat Apps', 'Chat App participations');

-- --------------------------------------------------------

--
-- Table structure for table `signatory`
--

CREATE TABLE `signatory` (
  `design_id` int(11) DEFAULT NULL,
  `signatory_id` int(11) NOT NULL,
  `signature_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signatory`
--

INSERT INTO `signatory` (`design_id`, `signatory_id`, `signature_id`) VALUES
(20, 100, 9),
(20, 101, 10),
(23, 105, 8),
(23, 106, 8),
(24, 119, 10),
(24, 120, 10);

-- --------------------------------------------------------

--
-- Table structure for table `signature`
--

CREATE TABLE `signature` (
  `signature_id` int(11) NOT NULL,
  `signature_name` varchar(50) DEFAULT NULL,
  `signature_img` varchar(50) DEFAULT NULL,
  `signature_position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signature`
--

INSERT INTO `signature` (`signature_id`, `signature_name`, `signature_img`, `signature_position`) VALUES
(8, 'Maria Clara', '/images/signature-40138.png', 'Supervisor'),
(9, 'Juan Dela Cruz', '/images/signature-40139.png', 'Secretary'),
(10, 'Pedro Santos', '/images/signature-40121.png', 'Principal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `base_image`
--
ALTER TABLE `base_image`
  ADD PRIMARY KEY (`baseimage_id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`design_id`),
  ADD KEY `FK_designs_seminars` (`seminar_id`),
  ADD KEY `FK_designs_base_image` (`baseimage_id`),
  ADD KEY `FK_designs_logo` (`logo_id`),
  ADD KEY `FK_signature_id` (`signature_id`);

--
-- Indexes for table `dynamic_data`
--
ALTER TABLE `dynamic_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generated_certs`
--
ALTER TABLE `generated_certs`
  ADD PRIMARY KEY (`generated_id`),
  ADD KEY `FK_generated_certs_designs` (`seminar_id`) USING BTREE;

--
-- Indexes for table `login_credentials`
--
ALTER TABLE `login_credentials`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_credentials_request`
--
ALTER TABLE `login_credentials_request`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`seminar_id`);

--
-- Indexes for table `signatory`
--
ALTER TABLE `signatory`
  ADD PRIMARY KEY (`signatory_id`),
  ADD KEY `FK_signatory_signature` (`signature_id`),
  ADD KEY `FK_signatory_designs` (`design_id`);

--
-- Indexes for table `signature`
--
ALTER TABLE `signature`
  ADD PRIMARY KEY (`signature_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `base_image`
--
ALTER TABLE `base_image`
  MODIFY `baseimage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `dynamic_data`
--
ALTER TABLE `dynamic_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generated_certs`
--
ALTER TABLE `generated_certs`
  MODIFY `generated_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `login_credentials`
--
ALTER TABLE `login_credentials`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login_credentials_request`
--
ALTER TABLE `login_credentials_request`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `seminar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `signatory`
--
ALTER TABLE `signatory`
  MODIFY `signatory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `signature`
--
ALTER TABLE `signature`
  MODIFY `signature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `designs`
--
ALTER TABLE `designs`
  ADD CONSTRAINT `FK_designs_base_image` FOREIGN KEY (`baseimage_id`) REFERENCES `base_image` (`baseimage_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_designs_logo` FOREIGN KEY (`logo_id`) REFERENCES `logo` (`logo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_designs_seminars` FOREIGN KEY (`seminar_id`) REFERENCES `seminars` (`seminar_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_signature_id` FOREIGN KEY (`signature_id`) REFERENCES `designs` (`design_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `generated_certs`
--
ALTER TABLE `generated_certs`
  ADD CONSTRAINT `FK_generated_certs_seminars` FOREIGN KEY (`seminar_id`) REFERENCES `seminars` (`seminar_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `signatory`
--
ALTER TABLE `signatory`
  ADD CONSTRAINT `FK_signatory_designs` FOREIGN KEY (`design_id`) REFERENCES `designs` (`design_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_signatory_signature` FOREIGN KEY (`signature_id`) REFERENCES `signature` (`signature_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
