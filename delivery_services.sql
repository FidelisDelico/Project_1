-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 03:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delivery_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ID` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'my age', 'dfdfdfdfdfdfd'),
(3, 'Ssemaganda Emmanuel ', 'ssemma@gmail.com', 'My Application', 'Hello Everyone'),
(4, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'my age', 'fgjxtfjs'),
(5, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'my age', 'sdgsg'),
(6, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'my age', 'sdgas'),
(7, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'my age', 'dfsfgasegs'),
(8, 'Asizo Fidelis', 'john@gmail.com', 'my age', 'adf'),
(9, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'my age', 'argergaergrt'),
(10, 'John', 'fidelisdelico@gmail.com', 'my age', 'DYIDTY'),
(11, 'Asizo Fidelis', 'john@gmail.com', 'my age', 'etet'),
(12, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'my age', 'awfe'),
(13, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'my age', 'awfe'),
(14, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'my age', 'awfe'),
(15, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'fgrgergh', 'fdjdyj'),
(16, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'fgrgergh', 'fdjdyj'),
(17, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'fgrgergh', 'fdjdyj'),
(18, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 'my age', 'ydgkdg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `instructions` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `name`, `email`, `phone`, `address`, `instructions`) VALUES
(36, 'Some One', 'fidelisdelico@gmail.com', 773600633, 'eee', 'eee'),
(37, 'Asizo Fidelisgfhfth', 'fidelisdelico@gmail.com', 773600633, 's', 's'),
(38, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 773600633, 'eee', 'eee'),
(39, 'Asizo Fidelis', 'john@gmail.com', 773600633, 'ff', 'ff'),
(40, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 773600633, 'gg', 'gg'),
(41, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 773600633, 's', 's'),
(42, 'Asizo Fidelis', 'jameskawanda@gmail.com', 773600633, 'er', 'e'),
(43, 'Asizo Fidelis', 'fidelisdelico@gmail.com', 256, 'gggg', 'ggg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
