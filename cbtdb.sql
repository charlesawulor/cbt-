-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 08:45 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbtdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `Timer` int(255) NOT NULL,
  `cat_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Timer`, `cat_name`) VALUES
(1, 40, 'Maths - Pry 1'),
(2, 30, 'English - Pry 2');

-- --------------------------------------------------------

--
-- Table structure for table `duration`
--

CREATE TABLE `duration` (
  `Timer` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`Timer`) VALUES
(4);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ans1` varchar(150) NOT NULL,
  `ans2` varchar(150) NOT NULL,
  `ans3` varchar(150) NOT NULL,
  `ans4` varchar(150) NOT NULL,
  `ans` int(50) NOT NULL,
  `cat_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `image`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(1, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 1),
(2, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 1),
(3, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 1),
(4, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 1),
(5, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 1),
(6, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 1),
(7, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 1),
(8, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 1),
(9, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 1),
(10, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 1),
(52, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 2),
(53, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 2),
(54, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 2),
(55, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 2),
(56, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 2),
(57, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 2),
(58, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 2),
(59, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 2),
(60, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 2),
(61, 'This is just a Sample text.', '14199204_1224745490908822_6394025746516844081_n.jpg', 'one', 'two', 'three', 'four', 0, 2),
(64, '&lt;p&gt;This is another Testing WORKING&lt;/p&gt;\r\n', 'images.jpg', 'Hi', 'Hi', 'Hi', 'Hi', 0, 1),
(65, '&lt;p&gt;Hi Testing the Image&lt;/p&gt;\r\n', 'tshd1.jpg', 'Hi', 'Hi', 'Hi', 'Hi', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`, `img`) VALUES
(0, 'me', 'me@me.com', 'me', 'logo.jpg'),
(0, 'MP', 'PAP@WDD.COM', 'JSJSJSJS', 'd.png'),
(0, 'Admin', 'admin@me.com', 'p', 'ts-avatar.jpg'),
(0, 'Oreva', 'benumolo@gmail.com', 'ben1234', 'ts-avatar.jpg'),
(0, 'abcd', 'abcd@gmail.com', 'oreva', 'Aq3OfZFCQAAgKV5.jpg large.jpg'),
(0, 'o', 'o@me.com', 'qqqqqq', 'login-bg.jpg'),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, 'joy', 'joy@yahoo.com', '12345', ''),
(0, 'Charles', 'c.awulor@yahoo.com', 'awulor23', 't2.jpg'),
(0, 'jocy', 'j@me.com', 'welcome', 'b3.jpg'),
(0, 'Charles', 'c.awulor@yahoo.com', 'awulor23', '5afa11417b8cb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
