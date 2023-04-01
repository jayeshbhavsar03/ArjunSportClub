-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 09:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `badminton_enroll`
--

CREATE TABLE `badminton_enroll` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sp_name` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method_plans` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `JoinDate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badminton_enroll`
--

INSERT INTO `badminton_enroll` (`id`, `user_id`, `sp_name`, `name`, `number`, `email`, `method_plans`, `gender`, `dob`, `JoinDate`, `address`, `payment_status`) VALUES
(19, 1, 'badminton', 'jayesh bhavsar', 11, 'codewithjayesh100@gmail.com', '3000', 'male', '2023-02-11', '2023-02-06', 'flat no. Durgawadi, Paithan, Aurangabad, Paithan, India - 431107', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `basketball_enroll`
--

CREATE TABLE `basketball_enroll` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sp_name` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method_plans` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `JoinDate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basketball_enroll`
--

INSERT INTO `basketball_enroll` (`id`, `user_id`, `sp_name`, `name`, `number`, `email`, `method_plans`, `gender`, `dob`, `JoinDate`, `address`, `payment_status`) VALUES
(19, 1, 'basketball', 'jayesh bhavsar', 11, 'codewithjayesh100@gmail.com', '3000', 'male', '2023-02-11', '2023-02-06', 'flat no. Durgawadi, Paithan, Aurangabad, Paithan, India - 431107', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `name`, `description`, `image`) VALUES
(1, 'cricket', 'Cricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 22-yard (20-metre) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at one of the wickets with the bat and then running between the wickets, while the bowling and fielding side tries to prevent this (by preventing the ball from leaving the field, and getting the ball to either wicket) and dismiss each batter (so they are \"out\"). Means of dismissal include being bowled, when the ball hits the stumps and dislodges the bails, and by the fielding side either catching the ball after it is hit by the bat, but before it hits the ground, or hitting a wicket with the ball before a batter can cross the crease in front of the wicket. When ten batters have been dismissed, the innings ends and the teams swap roles. The game is adjudicated by two umpires, aided by a third umpire and match referee in international matches. They communicate with two off-field scorers who record the match\'s statistical information.', 'sp1.jpg'),
(2, 'football', 'Football is a family of team sports that involve, to varying degrees, kicking a ball to score a goal. Unqualified, the word football normally means the form of football that is the most popular where the word is used. Sports commonly called football include association football (known as soccer in North America, Ireland and Australia); gridiron football (specifically American football or Canadian football); Australian rules football; rugby union and rugby league; and Gaelic football.[1] These various forms of football share to varying extent common origins and are known as \"football codes\".', 'sp2.jpg'),
(3, 'badminton', 'Badminton is a racquet sport played using racquets to hit a shuttlecock across a net. Although it may be played with larger teams, the most common forms of the game are \"singles\" (with one player per side) and \"doubles\" (with two players per side). Badminton is often played as a casual outdoor activity in a yard or on a beach; formal games are played on a rectangular indoor court. Points are scored by striking the shuttlecock with the racquet and landing it within the opposing side\'s half of the court.', 'sp3.jpg'),
(4, 'basketball', 'Basketball is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court, compete with the primary objective of shooting a basketball (approximately 9.4 inches (24 cm) in diameter) through the defender\'s hoop (a basket 18 inches (46 cm) in diameter mounted 10 feet (3.048 m) high to a backboard at each end of the court), while preventing the opposing team from shooting through their own hoop. A field goal is worth two points, unless made from behind the three-point line, when it is worth three. After a foul, timed play stops and the player fouled or designated to shoot a technical foul is given one, two or three one-point free throws. The team with the most points at the end of the game wins, but if regulation play expires with the score tied, an additional period of play (overtime) is mandated.', 'sp4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cricket_enroll`
--

CREATE TABLE `cricket_enroll` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sp_name` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method_plans` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `JoinDate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cricket_enroll`
--

INSERT INTO `cricket_enroll` (`id`, `user_id`, `sp_name`, `name`, `number`, `email`, `method_plans`, `gender`, `dob`, `JoinDate`, `address`, `payment_status`) VALUES
(19, 1, 'cricket', 'jayesh bhavsar', 11, 'codewithjayesh100@gmail.com', '3000', 'male', '2023-02-11', '2023-02-06', 'flat no. Durgawadi, Paithan, Aurangabad, Paithan, India - 431107', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `football_enroll`
--

CREATE TABLE `football_enroll` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sp_name` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method_plans` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `JoinDate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `football_enroll`
--

INSERT INTO `football_enroll` (`id`, `user_id`, `sp_name`, `name`, `number`, `email`, `method_plans`, `gender`, `dob`, `JoinDate`, `address`, `payment_status`) VALUES
(19, 1, 'football', 'jayesh bhavsar', 11, 'codewithjayesh100@gmail.com', '3000', 'male', '2023-02-11', '2023-02-06', 'flat no. Durgawadi, Paithan, Aurangabad, Paithan, India - 431107', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(10, 1, 'jayesh bhavsar', 'bhavsarjayesh9370@gmail.com', '9370821861', 'eeeeeeeeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'user', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(2, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badminton_enroll`
--
ALTER TABLE `badminton_enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basketball_enroll`
--
ALTER TABLE `basketball_enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cricket_enroll`
--
ALTER TABLE `cricket_enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `football_enroll`
--
ALTER TABLE `football_enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
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
-- AUTO_INCREMENT for table `badminton_enroll`
--
ALTER TABLE `badminton_enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `basketball_enroll`
--
ALTER TABLE `basketball_enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cricket_enroll`
--
ALTER TABLE `cricket_enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `football_enroll`
--
ALTER TABLE `football_enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
