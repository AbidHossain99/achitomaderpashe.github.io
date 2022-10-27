-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 11:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1044829394, 370690608, 'hellp'),
(2, 1044829394, 370690608, 'hello'),
(3, 370690608, 1044829394, 'hii'),
(4, 370690608, 1044829394, 'how are you '),
(5, 1044829394, 370690608, 'I am fine '),
(6, 460224196, 370690608, 'Hii'),
(7, 370690608, 460224196, 'Hello'),
(8, 370690608, 460224196, 'hola'),
(9, 370690608, 460224196, 'hello'),
(10, 460224196, 370690608, 'hii'),
(11, 370690608, 460224196, 'hello'),
(12, 1069673166, 460224196, 'hi there.. if you are online then please response'),
(13, 1069673166, 460224196, 'hi there'),
(14, 460224196, 820361812, 'Hi there'),
(15, 820361812, 460224196, 'hello '),
(16, 820361812, 460224196, 'hii '),
(17, 1528817384, 820361812, 'hi helnkldghsfikahjnsg;');

-- --------------------------------------------------------

--
-- Table structure for table `paylater_table`
--

CREATE TABLE `paylater_table` (
  `Payment Option` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone_no` varchar(11) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Start_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paylater_table`
--

INSERT INTO `paylater_table` (`Payment Option`, `Name`, `Phone_no`, `Amount`, `Start_date`) VALUES
('Bkash', 'golam shahnewaz', '01718211477', 900, '2022-04-22'),
('Bkash', 'golam shahnewaz', '', 350, '0000-00-00'),
('', 'golam shahnewaz', '', 0, '0000-00-00'),
('Nogod', 'golam shahnewaz', '01671038314', 650, '2022-04-22'),
('', 'golam shahnewaz', '01671038314', 650, '2022-04-22'),
('', 'Mubtasim Fuad', '01671038314', 650, '2022-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `Payment Option` varchar(255) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_table`
--

INSERT INTO `payment_table` (`Payment Option`, `Name`, `Phone_no`, `Amount`, `Date`) VALUES
('Bkash', 'golam shahn', '01718211477', 350, '2022-04-22'),
('Bkash', 'golam shahn', '01718211477', 900, '2022-04-22'),
('', 'golam shahn', '', 0, '0000-00-00'),
('', 'golam shahn', '', 0, '0000-00-00'),
('', 'golam shahn', '', 0, '0000-00-00'),
('Bkash', 'golam shahn', '01718211477', 900, '2022-04-22'),
('Bkash', 'golam shahn', '01718211477', 900, '2022-04-22'),
('Bkash', 'golam shahn', '01718211477', 900, '2022-04-22'),
('', 'golam shahn', '', 0, '0000-00-00'),
('', 'golam shahn', '', 0, '0000-00-00'),
('Bkash', 'golam shahn', '01671038314', 900, '2022-04-22'),
('Bkash', 'test test', '01671038314', 650, '2022-04-22'),
('Nogod', 'golam shahn', '01671038314', 650, '2022-04-22'),
('Bkash', 'Mubtasim Fu', '01718211477', 650, '2022-04-23'),
('Bkash', 'jani na', '12345678901', 650, '2022-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `report_table`
--

CREATE TABLE `report_table` (
  `Email Address` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Report` text NOT NULL,
  `user_u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_table`
--

INSERT INTO `report_table` (`Email Address`, `First_Name`, `Last_Name`, `Report`, `user_u_id`) VALUES
('gg@gmail.com', 'ula', 'ula', 'saksjfhkashfkg', 0),
('test@gmail.com', 'fasf', 'fsf', 'fsasfgdklsglsdhgihaedlsgno;defjshiojdfsghdflshojrtu', 1069673166),
('test@gmail.com', 'sdfasf', 'safasfa', 'safasfasfgdklsGHKLAEHR9GT', 1069673166),
('test@gmail.com', 'sdfasf', 'safasfa', 'safasfasfgdklsGHKLAEHR9GT', 1069673166),
('gg@gmail.com', 'Golam', 'Shahnewaz', 'I am happy ', 460224196),
('fuad.mubtasim17@gmail.com', 'golam', 'shahnewaz', 'He is in danger!', 820361812),
('jani@gmail.com', '', '', '', 1622611563);

-- --------------------------------------------------------

--
-- Table structure for table `spec_payment_table`
--

CREATE TABLE `spec_payment_table` (
  `Payment Option` varchar(255) NOT NULL,
  `Admin Name` varchar(255) NOT NULL,
  `S_Unique_id` varchar(255) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spec_payment_table`
--

INSERT INTO `spec_payment_table` (`Payment Option`, `Admin Name`, `S_Unique_id`, `Amount`, `Date`) VALUES
('Nogod', 'jani na', '1528817384', 500, '2022-04-20'),
('Bkash', 'jani na', '1528817384', 800, '2022-04-22'),
('Nogod', 'jani na', '1528817384', 300, '2022-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `Address` varchar(25) NOT NULL DEFAULT 'Thikana nai',
  `dateofbirth` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `user_type`, `Address`, `dateofbirth`) VALUES
(3, 460224196, 'golam', 'shahnewaz', 'gg@gmail.com', 'e9c24de0272e37d5a8bfd081f131f002', '1650383443Untitled-1-01.jpg', 'Offline now', 'user', 'Mohakhali,Dhaka', '2022-04-21'),
(5, 1069673166, 'test', 'test', 'test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '1650451408Nogod.png', 'Offline now', 'volunteer', 'Thikana nai', '2022-04-21'),
(9, 615140796, 'Ore', 'monu', 'monu@gmail.com', '7fc6e997c3d9c18fbf476c94e86eb71a', '1650480638Untitled-1.jpg', 'Offline now', 'admin', 'Mohammadpur, Dhaka', '2022-04-21'),
(10, 1528817384, 'lala', 'la', 'lala@gmail.com', '2e3817293fc275dbee74bd71ce6eb056', '1650559945Nogod.png', 'Offline now', 'specialist', 'Thikana nai', '2022-04-21'),
(12, 820361812, 'Mubtasim', 'Fuad', 'fuad.mubtasim17@gmail.com', 'e46e5319f9fb6093fda308b48dc02d31', '1650667226me2.jpg', 'Offline now', 'volunteer', '3/3/13, Mohammadpur, Dhak', '0000-00-00'),
(13, 728814191, 'or', 're', 'ore@gmail.com', '949ff5d429826a54a551acbc2e640b06', '1650816433me 4.jpg', 'Offline now', 'volunteer', '3/3/13, Mohammadpur, Dhak', '0000-00-00'),
(14, 1622611563, 'jani', 'na', 'jani@gmail.com', '1eb1ecaf6aee744ae463e05cd028af57', '1650822214me2.jpg', 'Offline now', 'admin', 'alkghk', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
