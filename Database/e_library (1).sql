-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 08:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_org_name` varchar(250) NOT NULL,
  `user_org_password` varchar(250) NOT NULL,
  `user_auth_type` text NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_org_name`, `user_org_password`, `user_auth_type`, `user_status`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'manager', 'manager', 'manager', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file_image` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `views` int(50) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file_image`, `category`, `author`, `views`) VALUES
(19, '../uploads/Earth Science  an introduction (Mark Hendrix, Graham Thompson, Jonathan Turk) (z-lib.org).png', 'Science', 'sdfsdf', 1),
(20, '../uploads/Earth Science  New Methods and Studies (Roy H Williams) (z-lib.org).png', 'science', 'earth', 1),
(21, '../uploads/Earth Science (Edward J. Tarbuck, Frederick K. Lutgens etc.) (z-lib.org).png', 'science', 'sdfds', 0),
(22, '../uploads/Edrolo VCE General Maths Units 1  2 2nd Edition (Edrolo, Jarrod Verity, Cassandra Wang Lecouteur etc.) (Z-Library).png', 'Math', 'sdfdsf', 0),
(23, '../uploads/General Mathematics Units 12 for Queensland (Peter Jones, Kay Lipson, David Main etc.) (Z-Library).png', 'Math', 'dsadas', 0),
(24, '../uploads/General Mathematics Units 34 for Queensland (Peter Jones, Michael Evans, Kay Lipson etc.) (Z-Library).png', 'Math', 'sdfsd', 0),
(25, '../uploads/Jacaranda Maths Quest General Mathematics 11 VCE Units 12 (Steven Morris, Mark Barnes) (Z-Library).png', 'Math', 'rasdasd', 0),
(26, '../uploads/Foundations of earth science (Lutgens, Frederick KTarbuck, Edward JTasa etc.) (z-lib.org).png', 'science', 'fsdfdsf', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
