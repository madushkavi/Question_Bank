-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 05:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectquectionbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `approveq`
--

CREATE TABLE `approveq` (
  `ID` int(4) NOT NULL,
  `course` varchar(50) NOT NULL,
  `question` varchar(400) NOT NULL,
  `answera` varchar(400) NOT NULL,
  `answerb` varchar(400) NOT NULL,
  `answerc` varchar(400) NOT NULL,
  `answerd` varchar(400) NOT NULL,
  `correctOne` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approveq`
--

INSERT INTO `approveq` (`ID`, `course`, `question`, `answera`, `answerb`, `answerc`, `answerd`, `correctOne`) VALUES
(1, 'web', 'In a window, at the top is the _____, immediately below it is the _____', 'Toolbar, Titlebar', 'Titlebar, Toolbar', 'Titlebar, Menubar', 'Menubar, Titlebar', 'Titlebar, Menubar'),
(2, 'web', 'The _____ are a collection of shortcut icons for commonly used functions.', 'Text boxes', 'Toolbars', 'Tables', 'Cliparts', 'Toolbars'),
(3, 'web', '_____ is not a web page editor.', 'Adobe Pagemaker', 'MS Frontpage', 'Netscape Navigator', 'Netscape composer', 'Netscape Navigator'),
(4, 'web', 'Which instructs a Web browser on how to format and process a hypertext document?', 'Documents', 'Tags', 'Elements', 'Programs', 'Tags'),
(5, 'web', 'Web page editors are _____ application packages.', 'Data processing', 'System', 'Software', 'Hardware', 'Software'),
(6, 'web', 'With the help of a word processor we can save our work as', ' ASCII text file', 'Internet', 'Picture', ' Image', ' ASCII text file'),
(7, 'web', 'Name the element content to be manipulated by the tags.', 'Text between the start tag and end tag', 'Text before the start tag', 'Text after the end tag', 'None of these', 'Text between the start tag and end tag'),
(8, 'web', 'How many font sizes are permitted by HTML to display text?', '4', '5', '6', '7', '7'),
(9, 'web', 'Which of the following specifies the space between the border of the cell and its contents?', 'CELLPADDING', 'CELLSPACING', 'BORDER', 'WIDTH', 'CELLPADDING'),
(10, 'web', '_____ are like the drop down lists used in windows dialog boxes.', 'Menu controls', 'Radio button', 'Buttons', 'Password', 'Menu controls'),
(11, 'web', 'Web Technology', 'A', 'B', 'C', 'D', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `pdfid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`pdfid`, `name`, `size`, `downloads`) VALUES
(1, 'Assignment3.2 (3).pdf', 501980, 8),
(2, 'PHP_Part_III.pdf', 1012273, 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(3) NOT NULL,
  `fullName` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `fullName`, `username`, `email`, `password`) VALUES
(1, 'Tharindu', 'thari12', 'mik', '12345'),
(3, 'Ishara', 'isharamax', 'ishara@gmail.com', '202cb962ac59075'),
(7, 'Tharindu Niroshan', 'newuser1', 'tharindunirosha4@gmail.com', '827ccb0eea8a706'),
(8, 'Nowty', 'newuser2', 'thaer@gmail.com', 'c20ad4d76fe9775'),
(9, 'Nowty', 'newuser3', 'tharinduniros4@gmail.com', 'c4ca4238a0b9238'),
(10, 'Tharindu Niroshan', 'newuser4', 'tharinduan4@gmail.com', '12'),
(11, 'Tharindu Niroshan', 'newuser5', 'new5@gmail.com', '5'),
(12, 'Tharindu Niroshan', '2019csc021', 'tharinduniroshan4@gmail.com', 'tharin@12'),
(13, 'Tharindu Niroshan Madhusanka', 'admin', 't@gmail.com', '12345'),
(14, 'ishara', 'daf', 'sd@gmail.com', 'is');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(3) NOT NULL,
  `course` varchar(50) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answera` varchar(100) NOT NULL,
  `answerb` varchar(100) NOT NULL,
  `answerc` varchar(100) NOT NULL,
  `answerd` varchar(100) NOT NULL,
  `correctOne` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approveq`
--
ALTER TABLE `approveq`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`pdfid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approveq`
--
ALTER TABLE `approveq`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `pdfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
