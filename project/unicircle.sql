-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 11:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unicircle`
--

-- --------------------------------------------------------

--
-- Table structure for table `circle_table`
--

CREATE TABLE `circle_table` (
  `circle_id` int(11) NOT NULL,
  `circle_name` varchar(100) NOT NULL,
  `owner` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `circle_table`
--

INSERT INTO `circle_table` (`circle_id`, `circle_name`, `owner`, `description`) VALUES
(1, 'Research Circle', 'john_doe', 'Circle for sharing research ideas and findings.'),
(2, 'Book Club', 'bob_barker', 'Circle for discussing and recommending books.'),
(3, 'Collaboration Network', 'alice_wonder', 'Circle for finding collaborators for projects.'),
(4, 'Academic Discussion', 'jane_smith', 'Circle for discussing academic topics.'),
(5, 'Student Life', 'emma_jones', 'Circle for sharing experiences and tips for students.'),
(6, 'Science Enthusiasts', 'jane_smith', 'Circle for sharing interesting scientific discoveries.'),
(7, 'Art Appreciation', 'alice_wonder', 'Circle for discussing and sharing art.'),
(8, 'Tech Innovators', 'bob_barker', 'Circle for discussing latest technology trends.'),
(9, 'Fitness Freaks', 'emma_jones', 'Circle for fitness enthusiasts.'),
(10, 'Travel Lovers', 'john_doe', 'Circle for sharing travel experiences and tips.');

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`comment_id`, `post_id`, `username`, `content`, `comment_date`) VALUES
(1, 1, 'jane_smith', 'Welcome, John!', '2024-03-19 01:27:27'),
(2, 2, 'alice_wonder', 'Great work, Jane!', '2024-03-19 01:27:27'),
(3, 3, 'bob_barker', 'I\'m interested! Let me know the details.', '2024-03-19 01:27:27'),
(4, 4, 'emma_jones', 'I recommend \"Sapiens\" by Yuval Noah Harari.', '2024-03-19 01:27:27'),
(5, 5, 'john_doe', 'Congratulations, Emma!', '2024-03-19 01:27:27'),
(6, 6, 'bob_barker', 'What was the lecture about?', '2024-03-19 01:27:27'),
(7, 7, 'emma_jones', 'I\'ll definitely check out your paper, Jane!', '2024-03-19 01:27:27'),
(8, 8, 'john_doe', 'Which conference did you attend, Alice?', '2024-03-19 01:27:27'),
(9, 9, 'jane_smith', 'Count me in for the book club!', '2024-03-19 01:27:27'),
(10, 10, 'alice_wonder', 'Good luck with your proposal, Emma!', '2024-03-19 01:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `post_table`
--

CREATE TABLE `post_table` (
  `post_id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `post_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_table`
--

INSERT INTO `post_table` (`post_id`, `username`, `content`, `post_date`) VALUES
(1, 'john_doe', 'Hello everyone! Just joined this platform.', '2024-03-19 01:27:27'),
(2, 'jane_smith', 'Excited to share my latest research findings.', '2024-03-19 01:27:27'),
(3, 'alice_wonder', 'Looking for collaborators for a new project.', '2024-03-19 01:27:27'),
(4, 'bob_barker', 'Any recommendations for good books to read?', '2024-03-19 01:27:27'),
(5, 'emma_jones', 'Just finished my exams. Feeling relieved!', '2024-03-19 01:27:27'),
(6, 'john_doe', 'Attended a fascinating lecture today.', '2024-03-19 01:27:27'),
(7, 'jane_smith', 'Published a new paper in a prestigious journal.', '2024-03-19 01:27:27'),
(8, 'alice_wonder', 'Visited an interesting conference last week.', '2024-03-19 01:27:27'),
(9, 'bob_barker', 'Thinking of starting a book club. Who\'s interested?', '2024-03-19 01:27:27'),
(10, 'emma_jones', 'Started working on my thesis proposal.', '2024-03-19 01:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `User_Email` varchar(200) NOT NULL,
  `Full_Name` varchar(200) NOT NULL,
  `profile_pic_link` varchar(200) NOT NULL,
  `Uni_mail` varchar(200) NOT NULL,
  `University` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`username`, `password`, `User_Email`, `Full_Name`, `profile_pic_link`, `Uni_mail`, `University`) VALUES
('alice_wonder', 'secret', 'alice@example.com', 'Alice Wonder', 'https://example.com/alice.jpg', 'alice.wonder@university.com', 'University of Wonder'),
('bob_barker', 'bobpass', 'bob@example.com', 'Bob Barker', 'https://example.com/bob.jpg', 'bob.barker@university.com', 'Bob University'),
('emma_jones', 'password1234', 'emma@example.com', 'Emma Jones', 'https://example.com/emma.jpg', 'emma.jones@university.com', 'Jones College'),
('jane_smith', 'p@ssw0rd', 'jane@example.com', 'Jane Smith', 'https://example.com/jane.jpg', 'jane.smith@university.com', 'Another University'),
('john_doe', 'password123', 'john@example.com', 'John Doe', 'https://example.com/john.jpg', 'john.doe@university.com', 'University of Example'),
('kkr', '1234', 'kroy221236@bscse.uiu.ac.bd', '', '', '', ''),
('kkrr', '1234', 'kroy2236@bscse.uiu.ac.bd', '', '', '', ''),
('koushik', '1234', 'sampadroykoushik01@gmila.com', '', '', '', ''),
('RIFAT', '1234', 'sampadroykoushik1@gmila.com', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `circle_table`
--
ALTER TABLE `circle_table`
  ADD PRIMARY KEY (`circle_id`),
  ADD KEY `owner` (`owner`);

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `post_table`
--
ALTER TABLE `post_table`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `User_Email` (`User_Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `circle_table`
--
ALTER TABLE `circle_table`
  ADD CONSTRAINT `circle_table_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `user_table` (`username`);

--
-- Constraints for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD CONSTRAINT `comment_table_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post_table` (`post_id`),
  ADD CONSTRAINT `comment_table_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user_table` (`username`);

--
-- Constraints for table `post_table`
--
ALTER TABLE `post_table`
  ADD CONSTRAINT `post_table_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user_table` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
