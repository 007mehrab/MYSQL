-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 04:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwad46`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` char(8) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` char(10) NOT NULL,
  `salary` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `first_name`, `last_name`, `email`, `phone`, `salary`) VALUES
(1, '100', 'Mehrab', 'Hossain', 'mahrab@gmail.com', '01777', '25000.00'),
(2, '100', 'ismail', 'Hossain', 'ismail@gmail.com', '01777', '25000.00'),
(3, '100', 'siam', 'Hossain', 'mahrab@gmail.com', '01777', '25000.00'),
(4, '100', 'sakib', 'Hossain', 'sakib@gmail.com', '01888', '20000.00'),
(10, '102', 'Mahmud', 'Hasan', 'Hasan@gmail.com', '01273', '30000.00');

--
-- Triggers `employees`
--
DELIMITER $$
CREATE TRIGGER `after_insert_employee` AFTER INSERT ON `employees` FOR EACH ROW BEGIN
 INSERT INTO employees_log
 SET employee_id = NEW.employee_id,
 events = 'INSERT',
 date_time = NOW();

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_delete_employee` BEFORE DELETE ON `employees` FOR EACH ROW BEGIN
 INSERT INTO employees_log
 VALUES('',OLD.employee_id,'DELETE',NOW());

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_employee` BEFORE UPDATE ON `employees` FOR EACH ROW BEGIN
 INSERT INTO employees_log
 VALUES('',OLD.employee_id,'UPDATE',NOW());

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employees_log`
--

CREATE TABLE `employees_log` (
  `log_id` int(11) NOT NULL,
  `employee_id` mediumint(9) NOT NULL,
  `events` varchar(20) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees_log`
--

INSERT INTO `employees_log` (`log_id`, `employee_id`, `events`, `date_time`) VALUES
(1, 102, 'INSERT', '2021-01-10 11:20:17'),
(2, 100, 'INSERT', '2021-01-10 11:21:16'),
(3, 100, 'UPDATE', '2021-01-10 11:57:20'),
(4, 100, 'DELETE', '2021-01-10 11:59:27');

-- --------------------------------------------------------

--
-- Stand-in structure for view `employee_contact_info_view`
-- (See below for the actual view)
--
CREATE TABLE `employee_contact_info_view` (
`First Name` varchar(100)
,`Last Name` varchar(100)
,`Email Address` varchar(100)
,`Telephone` char(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `employee_status`
-- (See below for the actual view)
--
CREATE TABLE `employee_status` (
`first_name` varchar(100)
,`last_name` varchar(100)
,`email` varchar(100)
,`phone` char(10)
,`salary` decimal(8,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pcode` varchar(20) NOT NULL,
  `pprice` float(8,2) NOT NULL,
  `pquantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pcode`, `pprice`, `pquantity`) VALUES
(15, 'Laptop', '0988', 50000.00, 9),
(41, 'Printer', '1001', 10000.00, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`) VALUES
(33, 'Mehrab hossain', 'mahrabope@gmail.com', '243e61e9410a9f577d2d662c67025ee9'),
(34, 'Ismail Hossain', 'ismail@gmail.com', '243e61e9410a9f577d2d662c67025ee9');

-- --------------------------------------------------------

--
-- Structure for view `employee_contact_info_view`
--
DROP TABLE IF EXISTS `employee_contact_info_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employee_contact_info_view`  AS  select `employees`.`first_name` AS `First Name`,`employees`.`last_name` AS `Last Name`,`employees`.`email` AS `Email Address`,`employees`.`phone` AS `Telephone` from `employees` order by `employees`.`last_name` ;

-- --------------------------------------------------------

--
-- Structure for view `employee_status`
--
DROP TABLE IF EXISTS `employee_status`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employee_status`  AS  select `employees`.`first_name` AS `first_name`,`employees`.`last_name` AS `last_name`,`employees`.`email` AS `email`,`employees`.`phone` AS `phone`,`employees`.`salary` AS `salary` from `employees` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_log`
--
ALTER TABLE `employees_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employees_log`
--
ALTER TABLE `employees_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
