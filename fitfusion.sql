-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 03:25 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitfusion`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `sr_no` int(1) NOT NULL,
  `contactus_para` varchar(1000) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`sr_no`, `contactus_para`, `address`, `mail`, `phone_number`) VALUES
(1, 'At Fit-Fusion, we are passionate about helping you achieve your fitness goals in a dynamic and exciting way. With a focus on holistic well-being, our platform brings together the best of various fitness disciplines, allowing you to customize your fitness journey according to your preferences .', 'Ahmedabad , Gujarat', 'fitfusionfitnesscompany@gmail.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', '$2y$10$AU2wOzCReKK4Cb145Pe/A.KbYIf5YGbEJxVnQnx1Iexybx4O9hMym');

-- --------------------------------------------------------

--
-- Table structure for table `background_images`
--

CREATE TABLE `background_images` (
  `page_name` varchar(100) NOT NULL,
  `bg_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `background_images`
--

INSERT INTO `background_images` (`page_name`, `bg_name`) VALUES
('Gain-weight', 'breakfast-main.jpg'),
('Loose-weight', 'lunch-main.jpg'),
('Maintain-weight', 'dinner-main.jpg'),
('Membershiptable', 'bckeee.jpg'),
('Profile', 'chad.jpg'),
('Signin', 'gymrat.jpg'),
('Sports', 'crick.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `body_info`
--

CREATE TABLE `body_info` (
  `username` varchar(30) NOT NULL,
  `height` int(10) NOT NULL,
  `weight` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `body_info`
--

INSERT INTO `body_info` (`username`, `height`, `weight`) VALUES
('lulli', 340, 19),
('mr_babulal', 0, 0),
('yash_123', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `health_issues`
--

CREATE TABLE `health_issues` (
  `username` varchar(30) NOT NULL,
  `P1` tinyint(1) NOT NULL,
  `P2` tinyint(1) NOT NULL,
  `P3` tinyint(1) NOT NULL,
  `P4` tinyint(1) NOT NULL,
  `is_aware` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_issues`
--

INSERT INTO `health_issues` (`username`, `P1`, `P2`, `P3`, `P4`, `is_aware`) VALUES
('lulli', 1, 1, 1, 1, 0),
('mr_babulal', 0, 1, 0, 0, 0),
('yash_123', 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `theme_no` int(30) NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT 'logo-removebg-preview.png',
  `slogan` varchar(100) NOT NULL,
  `welcome_line` varchar(500) NOT NULL,
  `welcome_paragraph` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`theme_no`, `logo`, `slogan`, `welcome_line`, `welcome_paragraph`) VALUES
(1, 'logo-removebg-preview.png', 'DECIDE.  COMITT.  SUCCEED.', 'Welcome To The Fit Fusion Family ', 'We offer diverse sports memberships cricket, gym, swimming, badminton, and more to suit your preferences. \r\n         Our friendly staff is always ready to assist, ensuring an enjoyable fitness journey. \r\n         Stay refreshed at our on-site cafe. Personalized diet plans based on your BMI help you achieve your health goals. \r\n         Join us now for an active, fun, and rewarding fitness experience!');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('', '$2y$10$1R/taIJ4C2q0cpwIRKBQcOAU2kASnIDe0zM45oKEbF.iMtUReIhTi'),
('aayush', '$2y$10$irVu6tNpD624xLvgO42LkevWKoI1Y6Vwn.H.2vfR7AzDWJFmAe5tq'),
('aayush123', '$2y$10$47.PiJjLqPSExcimVBa4Qu1m0EK7.qfrBC6rDw3FPJHjaoAB7yvby'),
('mr_babulal', '$2y$10$PiPLmkOryz132aFYsM9DSOOWA/aAVRsMepgfUaR/ClhQAzmwaQC3q');

-- --------------------------------------------------------

--
-- Table structure for table `membership_enrollers`
--

CREATE TABLE `membership_enrollers` (
  `sr_no` int(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `sport_name` varchar(40) NOT NULL,
  `ms_type` varchar(20) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `s_date` date NOT NULL,
  `e_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership_enrollers`
--

INSERT INTO `membership_enrollers` (`sr_no`, `username`, `sport_name`, `ms_type`, `duration`, `s_date`, `e_date`) VALUES
(17, 'mr_babulal', 'Judo', 'premium', '12', '2023-09-01', '2024-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_main`
--

CREATE TABLE `nutrition_main` (
  `criteria` varchar(100) NOT NULL,
  `bg_image` varchar(100) NOT NULL,
  `discription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `platinum_membership`
--

CREATE TABLE `platinum_membership` (
  `sport_name` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `coach` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `platinum_membership`
--

INSERT INTO `platinum_membership` (`sport_name`, `session`, `time`, `price`, `batch`, `coach`) VALUES
('Badminton', '7 Days a week', '180 minutes', 7999, 'Morning', 'personal-training(full-time)'),
('Calisthenics', '7 Days a week	', '180 minutes', 16999, 'Morning-Afternoon-Evening', 'personal-training(full-time)'),
('Gymnasium', '7 Days a week', '180 minutes', 14999, 'Morning-Afternoon-Evening', 'personal-training(full-time)'),
('Martial arts', '7 Days a week', '7 Days a week', 7999, 'Morning	', 'personal-training(full-time)'),
('Swimming', '7 Days a week', '180 minutes', 9999, 'Morning-Afternoon', 'personal-training(full-time)'),
('Table tennis', '7 Days a week', '180 minutes', 7999, 'Morning-Afternoon-Evening', 'personal-training(full-time)'),
('Yoga', '7 Days a week', '180 minutes', 11999, 'Morning', 'personal-training(full-time)');

-- --------------------------------------------------------

--
-- Table structure for table `premium_membership`
--

CREATE TABLE `premium_membership` (
  `sport_name` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `coach` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premium_membership`
--

INSERT INTO `premium_membership` (`sport_name`, `session`, `time`, `price`, `batch`, `coach`) VALUES
('Badminton', '5 Days a week', '120 minutes', 1499, 'Morning-evening', 'coach(first 5 days 30 minutes)'),
('Calisthenics', '5 Days a week', '120 minutes', 1999, 'Morning-Afternoon-Evening', 'coach(first 5 days 30 minutes)'),
('Gymnasium', '5 Days a week', '120 minutes', 1999, 'Morning-Afternoon-Evening', 'coach(first 5 days 30 minutes)'),
('Martial arts', '5 Days a week', '120 minutes', 899, 'Morning', 'coach(first 5 days 30 minutes)'),
('Swimming', '5 Days a week', '120 minutes', 1499, 'Morning-Afternoon', 'coach(first 5 days 30 minutes)'),
('Table tennis', '5 Days a week', '120 minutes', 1999, 'Morning-Afternoon-Evening', 'coach(first 5 days 30 minutes)'),
('Yoga', '5 Days a week', '120 minutes', 1499, 'Morning', 'coach(first 5 days 30 minutes)');

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `bg_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sports_details`
--

CREATE TABLE `sports_details` (
  `sport_name` varchar(100) NOT NULL,
  `sport_image` varchar(100) NOT NULL,
  `sport_discription` varchar(1000) NOT NULL,
  `benifit_1` varchar(100) NOT NULL,
  `benifit_2` varchar(100) NOT NULL,
  `benifit_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports_details`
--

INSERT INTO `sports_details` (`sport_name`, `sport_image`, `sport_discription`, `benifit_1`, `benifit_2`, `benifit_3`) VALUES
('Badminton', 'badminton.jpg', 'Badminton is a fast-paced racquet sport that improves agility, hand-eye coordination, and cardiovascular fitness.', 'Enhances cardiovascular health', 'Improves reflexes and agility', 'Provides social interaction'),
('Calisthenics', 'cal1.jpeg', 'Calisthenics is a form of exercise that uses bodyweight movements to build strength, flexibility, and endurance.', 'Improves muscular strength', 'Enhances body control and coordination', 'Requires minimal equipment'),
('Gymnasium', 'gym.png', 'Gym workouts involve a variety of exercises and equipment to improve strength, endurance, and overall fitness.', 'Builds muscle mass and strength', 'Increases metabolic rate and calorie burn', 'Improves bone density and posture'),
('Judo', 'judo.jpg', 'Judo is a martial art that emphasizes throws, holds, and grappling techniques for self-defense and sport.', 'Develops physical strength and endurance', 'Enhances body awareness and control', 'Promotes mental resilience and strategic thinking'),
('Karate', 'karate.jpg', 'Karate is a martial art that focuses on self-defense techniques, discipline, and mental strength.', 'Enhances self-confidence and discipline', 'Improves physical fitness and coordination', 'Teaches effective self-defense skills'),
('Swimming', 'swimming.jpg', 'Swimming is a popular water-based activity that offers numerous physical and mental benefits.', 'Full-body workout', 'Improves cardiovascular health', 'Builds muscle strength'),
('Table Tennis', 'tt2.jpg', 'Table Tennis, also known as Ping Pong, is a fast and strategic sport that improves hand-eye coordination and mental focus.', 'Sharpens mental acuity', 'Enhances hand-eye coordination', 'Provides cardiovascular exercise'),
('Taekwondo', 'taekwondo.jpg', 'Taekwondo is a Korean martial art known for its high-flying kicks, striking techniques, and disciplined training', 'Enhances cardiovascular fitness', 'Develops flexibility and coordination', 'Teaches self-defense and mental focus'),
('Yoga', 'yoga1.jpg', ' Blending postures, breath, and meditation for inner calm and vitality.   Yoga unites strength, flexibility, and clarity through ancient wisdom.  Balancing body and mind, it brings tranquility to modern lives', 'Enhanced Flexibility and Strength', ' Stress Reduction and Relaxation', ' Improved Mental Focus');

-- --------------------------------------------------------

--
-- Table structure for table `standard_membership`
--

CREATE TABLE `standard_membership` (
  `sport_name` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `coach` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standard_membership`
--

INSERT INTO `standard_membership` (`sport_name`, `session`, `time`, `price`, `batch`, `coach`) VALUES
('Badminton', '4 Days a week', '45 minutes', 1499, 'Morning-evening', '--'),
('Calisthenics', '4 Days a week', '45 minutes	', 1999, 'Morning-Afternoon-Evening', '--'),
('Gymnasium', '4 Days a week', '45 minute', 1999, 'Morning-Afternoon-Evening', '--'),
('Martial arts', '4 Days a week', '45 minutes', 899, 'Morning', '--'),
('Swimming', '4 Days a week', '45 minutes', 1499, 'Morning-afternoon', '--'),
('Table tennis', '4 Days a week', '45 minutes', 1999, 'Morning-Afternoon-Evening', '--'),
('Yoga', '4 Days a week', '45 minutes', 1499, 'Morning', '--');

-- --------------------------------------------------------

--
-- Table structure for table `top_pics`
--

CREATE TABLE `top_pics` (
  `id` int(10) NOT NULL,
  `sport_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_pics`
--

INSERT INTO `top_pics` (`id`, `sport_name`) VALUES
(1, 'Badminton'),
(2, 'Calisthenics'),
(3, 'Gymnasium');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `profile` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `doc` datetime DEFAULT CURRENT_TIMESTAMP,
  `verification_code` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`profile`, `username`, `name`, `email`, `dob`, `gender`, `doc`, `verification_code`, `is_verified`) VALUES
('', 'aayush', 'aayush', 'huhk@gmail.com', '0000-00-00', 'male', '0000-00-00 00:00:00', '', 0),
('', 'aayush123', 'aayush', 'huhk@gmail.com', '0000-00-00', 'male', '0000-00-00 00:00:00', '', 0),
('mr_babulalScreenshot 2023-06-26 105018.png', 'mr_babulal', 'Arun kkumar', 'shuklaarun199@gmail.com', '2006-07-20', 'male', '2023-08-31 16:47:53', '6aa128b95bb35509f90d8f5e6627adbe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `weight_gain`
--

CREATE TABLE `weight_gain` (
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `calories` varchar(100) NOT NULL,
  `fat` varchar(100) NOT NULL,
  `protien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight_gain`
--

INSERT INTO `weight_gain` (`type`, `name`, `photo`, `calories`, `fat`, `protien`) VALUES
('Breakfast', 'Protein-Packed Smoothie Bowl', 'breakfast-1.jpg', '75', '3', '7'),
('Breakfast', 'Whole Grain Peanut Butter Toast', 'breakfast-2.jpg', '160', '2', '8'),
('Breakfast', 'Vegetable Omelette with Avocado', 'breakfast-3.jpg', '210', '15', '18'),
('Breakfast', 'Cottage Cheese Pancakes', 'breakfast-4.jpg', '120', '4.4', '14'),
('Breakfast', 'Protein-Packed Breakfast Burrito', 'breakfast-5.jpg', '80', '1', '3'),
('Breakfast', 'Ham and Cheese Breakfast Wrap', 'breakfast-6.jpg', '80', '1', '3'),
('Breakfast', 'Chicken and Veggie Breakfast Skillet', 'breakfast-7.jpg', '160', '1', '38'),
('Breakfast', 'Steak and Egg Breakfast Bowl', 'breakfast-8.jpg', '220', '9', '32'),
('Lunch', 'Lentil Dal with Quinoa', 'lunch-1.jpg', '200', '1', '12'),
('Lunch', 'Paneer and Vegetable Stir-Fryp', 'lunch-2.jpg', '293', '22', '18'),
('Lunch', 'Vegetable Biryani with Raita', 'lunch-3.jpg', '350', '8', '6'),
('Lunch', 'Mixed Bean Salad with Cottage Cheese', 'lunch-4.jpg', '200', '1', '12'),
('Lunch', 'Chicken Baked with Vegetables', 'lunch-5.jpg', '300', '18', '36'),
('Lunch', 'Mutton Rogan Josh with Naan', 'lunch-6.jpg', '250', '16', '28'),
('Lunch', 'Egg Curry', 'lunch-7.jpg', '140', '10', '12'),
('Lunch', 'Egg Fried Rice with Chicken', 'lunch-8.jpg', '140', '10', '12'),
('Dinner', 'Paneer Tikka with Quinoa Salad', 'dinner-1.jpg', '200', '10', '20'),
('Dinner', 'Lentil and Spinach Soup', 'dinner-2.jpg', '150', '2', '10'),
('Dinner', 'Stuffed Bell Peppers', 'dinner-3.jpg', '250', '15', '10'),
('Dinner', 'Chickpea and Spinach Curry', 'dinner-4.jpg', '220', '4', '10'),
('Dinner', 'Egg Bhurji', 'dinner-5.jpg', '140', '10', '12'),
('Dinner', 'Vegetable Pulao with Yogurt', 'dinner-6.jpg', '250', '4', '5'),
('Dinner', 'Mutton Keema', 'dinner-7.jpg', '320', '18', '25'),
('Dinner', 'Mushroom and Lentil Curry', 'dinner-8.jpg', '15', '0', '2');

-- --------------------------------------------------------

--
-- Table structure for table `weight_loss`
--

CREATE TABLE `weight_loss` (
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `calories` varchar(100) NOT NULL,
  `fat` varchar(100) NOT NULL,
  `protien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight_loss`
--

INSERT INTO `weight_loss` (`type`, `name`, `photo`, `calories`, `fat`, `protien`) VALUES
('Breakfast', 'Oatmeal with Berries', 'breakfast-1.jpg', '150', '3', '5'),
('Breakfast', 'Whole Grain Pancakes', 'breakfast-2.jpg', '200', '1', '8'),
('Breakfast', 'Vegetable Upma', 'breakfast-3.jpg', '150', '1', '4'),
('Breakfast', 'Avocado Toast', 'breakfast-4.jpg', '80', '1', '4'),
('Breakfast', 'Smoothie Bowl', 'breakfast-5.jpg', '60', '0.4', '1'),
('Breakfast', 'Egg White Scramble', 'breakfast-6.jpg', '68', '0', '16'),
('Breakfast', 'Chicken Sausage and Veggie Wrap', 'breakfast-7.jpg', '150', '10', '14'),
('Breakfast', 'Scrambled Tofu', 'breakfast-8.jpg', '94', '5', '10'),
('Lunch', 'Stuffed Bell Peppers', 'lunch-1.jpg', '30', '0', '1'),
('Lunch', 'Spinach and Mushroom Wrap', 'lunch-2.jpg', '80', '1', '3'),
('Lunch', 'Cauliflower Fried Rice', 'lunch-3.jpg', '50', '0.5', '4'),
('Lunch', 'Vegetable Stir-Fry', 'lunch-4.jpg', '94', '5', '10'),
('Lunch', 'Grilled Chicken Salad', 'lunch-5.jpg', '110', '2', '26'),
('Lunch', 'Chickpea and Veggie', 'lunch-6.jpg', '269', '4', '15'),
('Lunch', 'Lentil Soup', 'lunch-7.jpg', '230', '0.8', '18'),
('Lunch', 'Veggie Wrap', 'lunch-8.jpg', '80', '1', '3'),
('Dinner', 'Pot Brown Rice Breakfast Porridge', 'dinner-2.jpg', '140', '2', '2'),
('Dinner', 'Zucchini Noodles with Pesto', 'dinner-3.jpg', '20', '0', '2'),
('Dinner', 'Sweet Potato and Black Bean Bow', 'dinner-4.jpg', '112', '0', '2'),
('Dinner', 'Salmon and Broccoli Bake', 'dinner-5.jpg', '240', '13', '30'),
('Dinner', 'Turkey Meatballs', 'dinner-6.jpg', '160', '7', '20'),
('Dinner', 'Grilled Shrimp and Quinoa', 'dinner-7.jpg', '112', '1', '24'),
('Dinner', 'Eggplant Parmesan', 'dinner-8.jpg', '235', '0', '1'),
('Dinner', 'Grilled Vegetable Salad', 'dinner-1.jpg', '80', '1', '15');

-- --------------------------------------------------------

--
-- Table structure for table `weight_maintain`
--

CREATE TABLE `weight_maintain` (
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `calories` varchar(100) NOT NULL,
  `fat` varchar(100) NOT NULL,
  `protien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight_maintain`
--

INSERT INTO `weight_maintain` (`type`, `name`, `photo`, `calories`, `fat`, `protien`) VALUES
('Breakfast', 'OATMEAL JARS', '15-Make-Ahead-Breakfasts-Under-300-Calories-1.jpg', '229', '6', '6'),
('Breakfast', 'CAULIFLOWER-CRUSTED SPINACH FETA PIE', '15-Make-Ahead-Breakfasts-Under-300-Calories-2.jpg', '136', '6', '13'),
('Breakfast', 'BERRY PEANUT BUTTER SMOOTHIE', '15-Make-Ahead-Breakfasts-Under-300-Calories-3.jpg', '156', '8', '5'),
('Breakfast', 'PEANUT BUTTER BREAKFAST COOKIES', '15-Make-Ahead-Breakfasts-Under-300-Calories-4.jpg', '299', '15', '11'),
('Breakfast', 'LEMONY STRAWBERRY OAT SOAK WITH KIWI MINT', '15-Make-Ahead-Breakfasts-Under-300-Calories-5.jpg', '186', '2', '8'),
('Breakfast', 'SAVORY SWEET POTATO MUFFINS', '15-Make-Ahead-Breakfasts-Under-300-Calories-6.jpg', '206', '7', '5'),
('Breakfast', 'PUMPKIN PIE OATMEAL', '15-Make-Ahead-Breakfasts-Under-300-Calories-7.jpg', '284', '5', '13'),
('Breakfast', 'KETO WALNUT-CASHEW PORRIDGE', '15-Make-Ahead-Breakfasts-Under-300-Calories-8.jpg', '291', '20', '8'),
('Lunch', 'Chickpea Salad', 'lunch-1.jpg', '220', '4', '10'),
('Lunch', 'Vegetable Stir-Fry with Brown Rice', 'lunch-2.jpg', '50', '0.5', '2'),
('Lunch', 'Lentil Soup with Whole Wheat Roti', 'lunch3-1.jpg', '150', '2', '10'),
('Lunch', 'Mixed Vegetable Curry with roti', 'lunch4.jpg', '50', '0.5', '2'),
('Lunch', 'Greek Yogurt Parfait', 'lunch5.jpg', '150', '8', '15'),
('Lunch', 'Vegetable Biryani', 'lunch6.jpg', '350', '8', '6'),
('Lunch', 'fishCurry', 'lunch7.jpg', '250', '15', '20'),
('Lunch', 'Egg and Vegetable Fried', 'lunch8.jpg', '140', '10', '12'),
('Dinner', 'Vegetable Stir-Fry', 'dinner-1.jpg', '50', '0.5', '2'),
('Dinner', 'Pot Brown Rice Breakfast Porridge', 'dinner-2.jpg', '140', '2', '2'),
('Dinner', 'Pot Pumpkin Soup With Crispy Sage Leaves', 'dinner-3-1.jpg', '133', '5', '4'),
('Dinner', 'Mixed Vegetable Curry with roti', 'dinner-4.jpg', '50', '0.5', '2'),
('Dinner', 'Chicken and Lentil Curry', 'dinner-13.jpg', '120', '1', '26'),
('Dinner', 'Egg Curry with Brown Rice', 'dinner-14.jpg', '140', '10', '12'),
('Dinner', 'Egg and Vegetable Fried Rice', 'dinner-15.jpg', '2140', '10', '12'),
('Dinner', 'Dijon Chickpea and Egg Salad', 'dinner-16.jpg', '248', '12', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `background_images`
--
ALTER TABLE `background_images`
  ADD PRIMARY KEY (`page_name`);

--
-- Indexes for table `body_info`
--
ALTER TABLE `body_info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `health_issues`
--
ALTER TABLE `health_issues`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`theme_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `membership_enrollers`
--
ALTER TABLE `membership_enrollers`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `nutrition_main`
--
ALTER TABLE `nutrition_main`
  ADD UNIQUE KEY `criteria` (`criteria`);

--
-- Indexes for table `platinum_membership`
--
ALTER TABLE `platinum_membership`
  ADD PRIMARY KEY (`sport_name`);

--
-- Indexes for table `premium_membership`
--
ALTER TABLE `premium_membership`
  ADD PRIMARY KEY (`sport_name`);

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`bg_img`);

--
-- Indexes for table `sports_details`
--
ALTER TABLE `sports_details`
  ADD PRIMARY KEY (`sport_name`);

--
-- Indexes for table `standard_membership`
--
ALTER TABLE `standard_membership`
  ADD PRIMARY KEY (`sport_name`);

--
-- Indexes for table `top_pics`
--
ALTER TABLE `top_pics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sport_name` (`sport_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `sr_no` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership_enrollers`
--
ALTER TABLE `membership_enrollers`
  MODIFY `sr_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `top_pics`
--
ALTER TABLE `top_pics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
