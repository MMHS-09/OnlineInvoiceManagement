-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 08:31 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineinvoicelaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_company`
--

CREATE TABLE `t_company` (
  `c_id` int(50) NOT NULL,
  `c_name` varchar(500) DEFAULT NULL,
  `c_address` varchar(1000) DEFAULT NULL,
  `c_phone` varchar(50) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `c_owner` varchar(50) NOT NULL,
  `c_logo` varchar(500) DEFAULT NULL,
  `c_currency` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_company`
--

INSERT INTO `t_company` (`c_id`, `c_name`, `c_address`, `c_phone`, `c_email`, `c_owner`, `c_logo`, `c_currency`) VALUES
(1, 'BKINGHT', 'Sector 10 Road  13 uttara ,Dhaka', '01552987430 01824318212', 'bkinght@gmail.com', 'rifat', 'BKINGHT.png', 'BDT'),
(2, NULL, NULL, NULL, NULL, 'shawon', '.jpg', 'BDT');

-- --------------------------------------------------------

--
-- Table structure for table `t_invoice`
--

CREATE TABLE `t_invoice` (
  `i_id` int(200) NOT NULL,
  `invoice_from` varchar(300) NOT NULL,
  `invoice_to` varchar(300) NOT NULL,
  `mail_to` varchar(500) NOT NULL,
  `invoice_type` varchar(100) NOT NULL,
  `invoice_number` varchar(300) NOT NULL,
  `date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `item` varchar(1000) NOT NULL,
  `itemDescription` varchar(1000) DEFAULT NULL,
  `quantity` varchar(500) NOT NULL,
  `rate` varchar(600) NOT NULL,
  `amount` varchar(600) NOT NULL,
  `Sub_total` int(50) NOT NULL,
  `tax` int(50) DEFAULT NULL,
  `discount` int(50) DEFAULT NULL,
  `shipping` int(50) DEFAULT NULL,
  `total` int(50) NOT NULL,
  `amount_paid` int(50) DEFAULT NULL,
  `due_balance` int(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `terms` varchar(500) DEFAULT NULL,
  `payment_terms` varchar(500) DEFAULT NULL,
  `draft` varchar(30) NOT NULL,
  `owner` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_invoice`
--

INSERT INTO `t_invoice` (`i_id`, `invoice_from`, `invoice_to`, `mail_to`, `invoice_type`, `invoice_number`, `date`, `due_date`, `item`, `itemDescription`, `quantity`, `rate`, `amount`, `Sub_total`, `tax`, `discount`, `shipping`, `total`, `amount_paid`, `due_balance`, `description`, `terms`, `payment_terms`, `draft`, `owner`) VALUES
(1, 'Sonic', 'Grameen Phone', 'rifatron99@gmail.com', 'Invoice', '5d904e6ed55e7', '2019-10-30', '2019-09-29', '[\"website\"]', '[\"sci cal\"]', '[\"0\"]', '[\"5000\"]', '[\"5000\"]', 5000, 10, 10, 50, 5004, 4004, 1000, 'Thanks for purchase', 'pay before due date', 'void', 'off', 'shawon'),
(2, 'BKINGHT', 'Grameen Phone', 'rifatron99@gmail.com', 'Invoice', '5d90ce7ac19c3', '2019-08-27', '2019-09-28', '[\"Dell regular Mouse\"]', '[null]', '[\"1\"]', '[\"300\"]', '[\"300\"]', 300, 10, 10, 50, 347, 47, 300, 'Thanks for purchase', 'pay before due date', NULL, 'off', 'rifat'),
(3, 'BKINGHT', 'Grameen Phone', 'rifatron99@gmail.com', 'Invoice', '5d90d01c9212c', '2019-06-30', '2019-09-28', '[\"Website\"]', '[null]', '[\"-2\"]', '[\"5000\"]', '[\"5000\"]', 5000, NULL, NULL, 50, 5050, 5050, 0, 'Thanks for purchase', 'pay before due date', NULL, 'off', 'rifat'),
(4, 'BKINGHT', 'Grameen Phone', 'rifatron99@gmail.com', 'Invoice', '5d90e14191295', '2019-09-29', '2019-09-30', '[\"Graphics card\"]', '[null]', '[\"1\"]', '[\"2500\"]', '[\"2500\"]', 2500, NULL, NULL, NULL, 2500, NULL, 2500, 'Thanks for purchase', 'pay before due date', NULL, 'off', 'rifat'),
(5, 'BKINGHT', 'Sonic Group', 'rifatron99@gmail.com', 'Invoice', '5d9196afd2ad2', '2019-09-30', '2019-10-15', '[\"Graphics card\",\"Microloab 4 X 2\"]', '[\"better for vfx\",\"better for one person\"]', '[\"1\",\"1\"]', '[\"2500\",\"4500\"]', '[\"2500\",\"4500\"]', 7000, 15, 10, 200, 7454, 5000, 2454, 'Thanks for purchase', 'pay before due date', 'void', 'off', 'rifat'),
(6, 'BKINGHT', 'Zaman It', 'rifatron99@gmail.com', 'Invoice', '5d91978dd3d58', '2019-09-30', '2019-10-22', '[\"Website\"]', '[\"sci cal\"]', '[\"-2\"]', '[\"5000\"]', '[\"5000\"]', 5000, 15, 10, 0, 5181, 3000, 2181, 'Thanks for purchase', 'pay before due date', NULL, 'off', 'rifat'),
(7, 'BKINGHT', 'Robi', 'rifatron99@gmail.com', 'Invoice', '5d9198786462e', '2019-09-30', '2019-10-30', '[\"Dell regular Mouse\",\"Graphics card\",\"Microloab 4 X 2\",\"Website\",\"Microloab 4 X 2\",\"Dell regular Mouse\"]', '[null,\"better for vfx\",\"better for one person\",null,null,\"better in low price\"]', '[\"1\",\"1\",\"1\",\"1\",\"1\",\"2\"]', '[\"300\",\"2500\",\"4500\",\"5000\",\"4500\",\"300\"]', '[\"300\",\"2500\",\"4500\",\"5000\",\"4500\",\"600\"]', 17400, NULL, NULL, NULL, 17400, 4000, 13400, 'Thanks for purchase', 'pay before due date', 'void', 'off', 'rifat'),
(8, 'BKINGHT', 'Grameen Phone', 'rifatron99@gmail.com', 'Quotation', '5d919bc93523a', '2019-09-30', '2019-09-30', '[\"Website\"]', '[null]', '[\"1\"]', '[\"5000\"]', '[\"5000\"]', 5000, NULL, NULL, NULL, 5000, NULL, 5000, 'Thanks for purchase', 'pay before due date', NULL, 'off', 'rifat');

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE `t_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(500) NOT NULL,
  `p_description` varchar(1000) DEFAULT NULL,
  `p_price` int(200) DEFAULT NULL,
  `p_owner` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_product`
--

INSERT INTO `t_product` (`p_id`, `p_name`, `p_description`, `p_price`, `p_owner`) VALUES
(2, 'Dell regular Mouse', 'better in low price', 300, 'rifat'),
(4, 'Graphics card', 'better for vfx', 2500, 'rifat'),
(5, 'Microloab 4 X 2', 'better for one person', 4500, 'rifat'),
(6, 'Website', 'sci cal', 5000, 'rifat'),
(8, 'website', 'sci cal', 5000, 'shawon'),
(9, 'Domain', 'as per load', 1500, 'rifat');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `u_report` int(50) DEFAULT NULL,
  `picture` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `name`, `password`, `dob`, `gender`, `email`, `phone`, `type`, `u_report`, `picture`) VALUES
(1, 'kawsarul', '123', '24-08-1995', 'male', 'rifatron999@gmail.com', '01824318212', 'super admin', 0, NULL),
(2, 'rifat', '123', '1995-08-24', 'male', 'rifatron999@gmail.com', '01824318212', 'user', 0, 'rifat.jpg'),
(3, 'ron', '123', '2019-08-27', 'male', 'rifatron999@gmail.com', '01824318212', 'admin', 1, NULL),
(5, 'shawon', '123', '2019-09-29', 'male', 'sabbir.shawon@yahoo.com', '01552987430', 'user', NULL, 'shawon.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_company`
--
ALTER TABLE `t_company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `t_invoice`
--
ALTER TABLE `t_invoice`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_company`
--
ALTER TABLE `t_company`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_invoice`
--
ALTER TABLE `t_invoice`
  MODIFY `i_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_product`
--
ALTER TABLE `t_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
