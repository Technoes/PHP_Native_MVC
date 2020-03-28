-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 09:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `f_id` int(11) NOT NULL,
  `f_user_ID` varchar(30) NOT NULL,
  `f_password` varchar(30) NOT NULL,
  `f_isActive` int(2) NOT NULL,
  `f_isDelete` int(2) NOT NULL,
  `f_user_create` varchar(30) NOT NULL,
  `f_date_create` varchar(30) NOT NULL,
  `f_user_update` varchar(30) NOT NULL,
  `f_date_update` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`f_id`, `f_user_ID`, `f_password`, `f_isActive`, `f_isDelete`, `f_user_create`, `f_date_create`, `f_user_update`, `f_date_update`) VALUES
(1, '34201500514', '12345', 1, 1, 'SYSTEM', '2020-02-22', 'SYSTEM', '2020-02-27 17:04:00'),
(2, '342015', '12345', 1, 1, '1', '1', 'SYSTEM', '2020-02-27 17:12:37'),
(3, '34201500512', '12345', 1, 1, 'SYSTEM', '2020-02-22 10:53:03', 'SYSTEM', '2020-02-27 17:04:30'),
(4, '342015005121', '12345', 1, 1, 'SYSTEM', '2020-02-22 10:55:21', 'SYSTEM', '2020-02-29 07:43:43'),
(5, '4324324324', '12345', 1, 1, 'SYSTEM', '2020-02-22 11:08:27', 'SYSTEM', '2020-02-29 08:06:52'),
(6, '1232324', '12121312', 1, 1, 'SYSTEM', '2020-02-29 07:45:08', 'SYSTEM', '2020-02-29 08:07:07'),
(7, '123', '1312', 1, 1, 'SYSTEM', '2020-02-29 07:45:55', 'SYSTEM', '2020-02-29 08:04:43'),
(8, 'res', 'area', 1, 1, 'SYSTEM', '2020-02-29 08:04:11', 'SYSTEM', '2020-02-29 08:04:45'),
(9, '123456789', '12345', 1, 1, 'SYSTEM', '2020-02-29 08:07:17', 'SYSTEM', '2020-03-01 15:44:06'),
(10, '123', '123', 1, 1, 'SYSTEM', '2020-03-01 14:49:34', 'SYSTEM', '2020-03-01 15:43:52'),
(11, '12345451234', 'frwerwqe', 1, 1, 'SYSTEM', '2020-03-01 15:44:15', 'SYSTEM', '2020-03-01 15:46:20'),
(12, '12', '1341413', 1, 1, 'SYSTEM', '2020-03-01 15:46:26', 'SYSTEM', '2020-03-01 16:22:45'),
(13, '1213343', 'dfdfds', 0, 0, 'SYSTEM', '2020-03-01 16:20:19', 'SYSTEM', '2020-03-01 16:20:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`f_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
