-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 10:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clarksmartshoes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `cat_slug` varchar(250) NOT NULL,
  `cat_photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `exp_id` bigint(20) NOT NULL,
  `exp_title` varchar(200) NOT NULL,
  `exp_amount` varchar(200) NOT NULL,
  `exp_by` varchar(200) NOT NULL,
  `exp_desc` text NOT NULL,
  `exp_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`exp_id`, `exp_title`, `exp_amount`, `exp_by`, `exp_desc`, `exp_date`) VALUES
(2, 'dodo', '20000', '1', 'electiry', '2024-06-21'),
(3, 'Electricity', '500000', '1', 'Electricity', '2024-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pdt_id` bigint(30) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `pdt_category` varchar(250) NOT NULL,
  `pdt_artnumber` varchar(250) NOT NULL,
  `pdt_location` varchar(250) NOT NULL,
  `pdt_package` varchar(200) NOT NULL,
  `pdt_pairs` int(11) NOT NULL,
  `pdt_pair_price` varchar(200) NOT NULL,
  `pdt_desc` text NOT NULL,
  `pdt_added_date` varchar(200) NOT NULL,
  `pdt_landing_pic` varchar(250) NOT NULL,
  `pdt_second_pic` varchar(200) NOT NULL,
  `pdt_third_pic` varchar(200) NOT NULL,
  `pdt_status` varchar(250) NOT NULL,
  `pdt_styles` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pdt_id`, `stock_id`, `pdt_category`, `pdt_artnumber`, `pdt_location`, `pdt_package`, `pdt_pairs`, `pdt_pair_price`, `pdt_desc`, `pdt_added_date`, `pdt_landing_pic`, `pdt_second_pic`, `pdt_third_pic`, `pdt_status`, `pdt_styles`) VALUES
(1, 1, 'kids-collections', '56x78', 'Factory', '34', 2000, '40000', '', '2024-06-21', '', '', '', 'Available', ''),
(2, 2, 'men-collections', '8668', 'Factory', '30', 100, '4500', '', '2024-06-21', '', '', '', 'Available', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` bigint(30) NOT NULL,
  `stock_category` varchar(200) NOT NULL,
  `stock_artnumber` varchar(200) NOT NULL,
  `stock_location` varchar(200) NOT NULL,
  `stok_carton` varchar(200) NOT NULL,
  `stock_pairs` varchar(200) NOT NULL,
  `stock_pair_price` varchar(200) NOT NULL,
  `stock_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `stock_category`, `stock_artnumber`, `stock_location`, `stok_carton`, `stock_pairs`, `stock_pair_price`, `stock_date`) VALUES
(1, 'kids-collections', '56x78', 'Factory', '34', '2000', '40000', '2024-06-21'),
(2, 'men-collections', '8668', 'Factory', '30', '100', '4500', '2024-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `stock_history`
--

CREATE TABLE `stock_history` (
  `sh_id` bigint(30) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `stok_carton` varchar(200) NOT NULL,
  `stock_pairs` varchar(200) NOT NULL,
  `stock_pair_price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` bigint(30) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `account_status` varchar(200) NOT NULL,
  `date_registered` varchar(100) NOT NULL,
  `business_location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `phone`, `gender`, `email`, `password`, `role`, `token`, `account_status`, `date_registered`, `business_location`) VALUES
(1, 'osp', 'pro', '0704487563', 'male', 'osp123ug@gmail.com', 'bd8da86331934bc695d34a103a42beb18d072dd6', 'admin', '', 'active', '2024-06-14', ''),
(2, 'ok', 'iji', '0704487599', 'Male', 'osp1g@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'admin', '', 'active', '2024-06-17', ''),
(3, 'okok', 'ijij', '07044838383', 'Male', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'customer', '', 'active', '2024-06-19', ''),
(4, 'ii', 'dtr', '8976543456787', 'Male', 'osod@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'admin', '', 'active', '2024-06-20', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_id` (`cat_id`,`cat_name`,`cat_slug`,`cat_photo`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`exp_id`),
  ADD KEY `exp_id` (`exp_id`,`exp_title`,`exp_amount`,`exp_by`,`exp_date`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pdt_id`),
  ADD KEY `pid` (`pdt_id`,`pdt_category`,`pdt_artnumber`,`pdt_location`,`pdt_package`,`pdt_pairs`,`pdt_pair_price`,`pdt_added_date`),
  ADD KEY `pdt_landing_pic` (`pdt_landing_pic`,`pdt_second_pic`,`pdt_third_pic`),
  ADD KEY `pdt_status` (`pdt_status`),
  ADD KEY `pdt_id` (`pdt_id`,`stock_id`,`pdt_category`,`pdt_artnumber`,`pdt_location`,`pdt_package`,`pdt_pairs`,`pdt_pair_price`,`pdt_added_date`,`pdt_landing_pic`,`pdt_second_pic`,`pdt_third_pic`,`pdt_status`),
  ADD KEY `pdt_styles` (`pdt_styles`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `stock_id` (`stock_id`,`stock_category`,`stock_artnumber`,`stock_location`,`stok_carton`,`stock_pairs`,`stock_pair_price`,`stock_date`);

--
-- Indexes for table `stock_history`
--
ALTER TABLE `stock_history`
  ADD PRIMARY KEY (`sh_id`),
  ADD KEY `sh_id` (`sh_id`,`stock_id`,`stok_carton`,`stock_pairs`,`stock_pair_price`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`,`firstname`,`lastname`,`phone`,`email`,`role`,`account_status`,`date_registered`),
  ADD KEY `userid_2` (`userid`,`firstname`,`lastname`,`phone`,`gender`,`email`,`role`,`account_status`,`date_registered`),
  ADD KEY `password` (`password`),
  ADD KEY `token` (`token`),
  ADD KEY `userid_3` (`userid`,`firstname`,`lastname`,`phone`,`gender`,`email`,`password`,`role`,`token`,`account_status`,`date_registered`,`business_location`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `exp_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pdt_id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock_history`
--
ALTER TABLE `stock_history`
  MODIFY `sh_id` bigint(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
