-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 05:44 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exammaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `name`, `subject`, `size`, `downloads`) VALUES
(6, 'Capture.PNG', 'cn', 16242, 2),
(7, 'CN(6th)May2019 (1).pdf', 'cn', 3141, 1),
(8, 'BC-2(2nd)May2018 (1).pdf', 'cn', 129548, 2),
(9, 'BC-2(2nd)May2018 (1).pdf', 'cn', 129548, 1),
(10, 'BC-2(2nd)May2018 (1).pdf', 'cn', 129548, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `created_at`) VALUES
(7, 'raveenadevi2105@gmail.com', 'raveenadevi', '$2y$10$Nzs3I6I4daJHBof.xExYsewsbRNCuzCbXK3cgOMhuZJuI5tBPswri', '2023-02-23 13:18:18'),
(8, 'raveenadevi2105@gmail.com', 'rav', '$2y$10$lkkwKIqJo5.RhO70m/WfpOrRDGRCRxOEO1RBeq8OawLXvDvtugPKu', '2023-02-23 13:18:31'),
(9, 'raveenadevi2105@gmail.com', 'raveena12', '$2y$10$Pf1aDWiM.tkrFqTLPmO1ROpDzAvDL/PEzW86cu6X9RaGwzrf3CGCi', '2023-02-23 13:19:42'),
(10, 'raveenadevi2105@gmail.com', 'raveena123', '$2y$10$yz61x39cnzpHylemsSxgje.fY3c2Nc.2CLdponKko7Q/wp4xcE03i', '2023-02-23 13:19:58'),
(11, 'preet123@gmail.com', 'preet', '$2y$10$uWxApv4CqtwO1Xun.jCtEOKhnlqX1T3mnhGTtln8lKYOcvctvLXjq', '2023-02-24 10:01:39'),
(12, 'riya@gmail.com', 'riya', '$2y$10$XilrKFxjP.DxRpciFkDRd.9K8nicTbF166fPRy9pDFwPXZPW4GiGm', '2023-02-28 13:41:55'),
(13, 'harpreet@gmail.com', 'harpreet', '$2y$10$i9xMww/cmYrnlaPLxqIqHOqEFsghn/BYW7yLf03YBiLPT5mNqNR6u', '2023-03-31 09:16:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
