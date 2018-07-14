-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 01:03 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `os`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `ques` varchar(50) NOT NULL,
  `mca` varchar(20) NOT NULL,
  `mcb` varchar(20) NOT NULL,
  `mcc` varchar(20) NOT NULL,
  `mcd` varchar(20) NOT NULL,
  `cans` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `ques`, `mca`, `mcb`, `mcc`, `mcd`, `cans`) VALUES
(1, 'This is test Question .... Choose the best answer ', '10', '20', '30', '40', 2),
(2, 'This is test Question .... Choose the best answer ', '100', '200', '30', '400', 1),
(3, 'Another Question ... ', 'A', 'B', 'C', 'D', 3);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `correct_ques` int(11) NOT NULL,
  `wrong_ques` int(11) NOT NULL,
  `total_ques` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `correct_ques`, `wrong_ques`, `total_ques`) VALUES
(1, 'Rahul', 0, 3, 3),
(2, 'Simmi', 3, 0, 3),
(3, 'Ramesh', 3, 0, 3),
(4, 'Besharam', 1, 2, 3),
(5, 'Pagal', 0, 3, 3),
(6, 'Test', 0, 3, 3),
(7, 'test', 1, 2, 3),
(8, 'test', 0, 3, 3),
(9, 'test', 1, 2, 3),
(10, 'test', 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Uid` varchar(5) NOT NULL,
  `Uname` varchar(15) NOT NULL,
  `Uemail` varchar(30) NOT NULL,
  `Lpwd` varchar(12) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uid`, `Uname`, `Uemail`, `Lpwd`, `Gender`, `Address`) VALUES
('', 'sdsd', 'sdas', 'sad', 'sdads', 'sfaf'),
('', '', '', '', '', ''),
('asas', 'asas', 'asas@gmail.com', 'dsgdsg', 'dsgsdg', 'dgsg'),
('TEST ', 'TEST 2', 'DFSDF@gss.in', 'asfasf', 'fafafa', 'fafaffaf'),
('hdhdf', 'hdfhdfh', 'dfhdfh@gna.in', 'dgsdg', 'sdgsgs', 'sgsdgdsggg1'),
('hdhdf', 'hdfhdfh', 'dfhdfh@gna.in', 'dgsdg', 'sdgsgs', 'sgsdgdsggg1'),
('dgds', 'dsgsdg', 'fdg@hg.in', 'dgdsg', 'dgsdg', 'dsggd'),
('dgsdg', 'dgdsgs', 'dgsg@gmail.com', 'safa', 'fafsfa', 'dgsdgs'),
('sfafa', 'asfasf', 'safasfas@gmail.com', 'asfasf', 'sfaf', 'asfasf'),
('test', 'test', 'test@test.com', 'test', 'test', 'test'),
('sdgsg', 'sdgsdgg', 'sdg@gn.in', 'asfaf', 'safaf', 'sdfsdg'),
('sdgsg', 'sdgsdgg', 'sdg@gn.in', 'asfaf', 'safaf', 'sdfsdg'),
('Test', 'Test2', 'test2@gmail.com', 'sadasfa', 'fdafdf', 'adaddad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
