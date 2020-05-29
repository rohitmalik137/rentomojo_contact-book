-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 10:36 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13879916_rentomojo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_number` text NOT NULL,
  `email` text NOT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `name`, `contact_number`, `email`, `dob`) VALUES
(35, 'a', '1', 'bpsrohitmalik@gmail.com', '2020-05-03'),
(36, 'b', '2', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(37, 'c', '3', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(38, 'd', '4', 'bpsrohitmalik@gmail.com', '2020-05-13'),
(39, 'e', '5', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(40, 'f', '6', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(41, 'g', '7', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(42, 'h', '8', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(43, 'i', '9', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(44, 'j', '10', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(45, 'k', '11', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(46, 'l', '12', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(47, 'john doe', '5151515151', 'asdcsd@ghvfh.sdc.sdc', '2020-05-05'),
(48, 'doe', '34343', 'sumitlohan114@gmail.com', '0000-00-00'),
(49, 'dharamendra', '22', 'bpsrohitmalik@gmail.com', '0000-00-00'),
(50, 'dharamesh', '23', 'sumitlohan114@gmail.com', '0000-00-00'),
(51, 'dhaval', '360284', 'sumitlohan114@gmail.com', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
