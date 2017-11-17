-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 01:10 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE `ask` (
  `id1` varchar(100) NOT NULL,
  `question` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `count` int(32) NOT NULL,
  `index1` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`count`, `index1`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `count1`
--

CREATE TABLE `count1` (
  `id1` int(11) NOT NULL,
  `count1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `count1`
--

INSERT INTO `count1` (`id1`, `count1`) VALUES
(1, 4),
(2, 1),
(3, 3),
(4, 4),
(5, 3),
(6, 4),
(7, 6),
(8, 4),
(9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `count2`
--

CREATE TABLE `count2` (
  `id1` int(11) NOT NULL,
  `count1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `count2`
--

INSERT INTO `count2` (`id1`, `count1`) VALUES
(1, 3),
(2, 5),
(3, 3),
(4, 4),
(5, 4),
(6, 2),
(7, 5),
(8, 5),
(9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `count3`
--

CREATE TABLE `count3` (
  `id1` int(11) NOT NULL,
  `count1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `count3`
--

INSERT INTO `count3` (`id1`, `count1`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 5),
(5, 5),
(6, 5),
(7, 3),
(8, 4),
(9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `studentid` varchar(30) NOT NULL,
  `cousel` varchar(100) NOT NULL,
  `test` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `test1` int(11) NOT NULL,
  `test2` int(11) NOT NULL,
  `test3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`studentid`, `cousel`, `test`, `status`, `test1`, `test2`, `test3`) VALUES
('S001', 'complete', 0, 3, 9, 10, 10),
('S002', 'html', 0, 1, 9, 0, 0),
('S003', 'css', 0, 2, 9, 10, 0),
('S004', 'ocss', 0, 2, 9, 10, 0),
('S005', 'js', 0, 3, 9, 10, 9),
('S006', '', 0, 0, 0, 0, 0),
('S007', '', 0, 0, 0, 0, 0),
('S008', '', 0, 0, 0, 0, 0),
('S009', 'ocss', 0, 0, 0, 0, 0),
('S0010', 'html', 0, 0, 0, 0, 0),
('S0011', 'html', 0, 0, 0, 0, 0),
('S0012', 'ocss', 0, 0, 0, 0, 0),
('S0013', 'css', 0, 0, 0, 0, 0),
('S0014', 'css', 0, 2, 10, 10, 0),
('S0015', 'ocss', 0, 1, 8, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(30) NOT NULL,
  `ind` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`, `ind`) VALUES
('admin', 'admin', 'admin', 0),
('S001', 'mohit', 'stud', 0),
('T000', 'mohit', 'teacher', 0),
('T001', 'T001', 'teacher', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qinsert`
--

CREATE TABLE `qinsert` (
  `id` int(11) NOT NULL,
  `qno` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `1` varchar(1000) NOT NULL,
  `2` varchar(1000) NOT NULL,
  `3` varchar(1000) NOT NULL,
  `4` varchar(1000) NOT NULL,
  `res` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qinsert`
--

INSERT INTO `qinsert` (`id`, `qno`, `question`, `1`, `2`, `3`, `4`, `res`) VALUES
(1, 1, 'what is the full form of html', 'hyper text markup language', 'hyper text make learn', 'hypermedia text mark language', 'hyper media language', 2),
(1, 2, 'Who is making the Web standards?', 'Microsoft', 'Mozilla', 'The World Wide Web Consortium', 'Google', 3),
(1, 3, 'Choose the correct HTML element for the largest heading:', 'h6', 'h1', 'head', 'heading', 2),
(1, 4, 'What is the correct HTML element for inserting a line break', 'lb', 'break', 'br', 'new', 3),
(1, 5, 'What is the correct HTML for adding a background color?', 'body bg="yellow"', 'body style="background-color:yellow;', 'background yellow ', 'color=yellow', 2),
(1, 6, 'Choose the correct HTML element to define important text', 'strong', 'important', 'b', 'i', 1),
(1, 7, 'Choose the correct HTML element to define emphasized text', 'i', 'em', 'italic', 'emph', 2),
(1, 8, 'What is the correct HTML for creating a hyperlink?', 'a url="http://www.ws.com"', 'a name="http://www.ws.com"', 'a href="http://www.ss.com', 'a lik="http://www.ss.com', 3),
(1, 9, 'The small and big tags are special in what way..', 'They can be repeated', 'They work on anything', 'They work on anything', 'None of the above', 1),
(1, 10, 'What are meta tags used for?', 'To store information usually relevant to browsers and search engines', 'To only store information usually relevant to browsers', 'To only store information about search engines', 'To store information about external links\r\nNext >>   ', 1),
(2, 1, 'Which of the following is a way to associate styles with your HTML document?', 'External CSS - The Element', 'Imported CSS - @import Rule', ' Both of the above.', 'None of the above.', 3),
(2, 2, 'Which of the following property is used to change the face of a font?', ' font-family', 'font-style', 'font-variant', ' font-weight', 1),
(2, 3, 'Which of the following property is used to set the color of a text?', 'color', 'direction', 'letter-spacing', 'word-spacing', 1),
(2, 4, ' Which of the following property specifies the color of a border?', 'border-color', 'border-style', 'border-width', 'border-bottom-color', 1),
(2, 5, 'Which of the following property changes the style of bottom border?', 'border-bottom-style', 'border-top-style', 'border-left-style', 'border-right-style', 1),
(2, 6, 'Which of the following property specifies the right padding of an element?', 'padding-bottom', 'padding-top', 'padding-left', 'padding-right', 4),
(2, 7, 'Which of the following property is used to align the text of a document?', 'text-indent', 'text-align', 'text-decoration', 'text-transform', 2),
(2, 8, 'Which of the following property is used to set the width of an image?', 'border', 'height', 'width', ' -moz-opacity', 3),
(2, 9, 'Which of the following property changes the width of top border?', 'border-bottom-width', 'border-top-width', 'border-left-width', 'border-right-width', 2),
(2, 10, 'Which of the following selector matches a element based on its id?', 'The Id Selector', 'The Universal Selector', 'The Descendant Selector', 'The Class Selector', 1),
(3, 2, 'How can you get the total number of arguments passed to a function?', 'Using args.length property', 'Using arguments.length property', 'Both of the above', 'None of the above.', 2),
(3, 3, 'Which of the following type of variable takes precedence over other if names are same?', 'global variable', 'local variable', 'Both of the above.', 'None of the above.', 2),
(3, 6, 'Which of the following code creates an object?', 'var book = Object();', 'var book = new Object();', 'var book = new OBJECT();', 'var book = new Book();', 2),
(3, 7, 'Which of the following function of Array object calls a function for each element in the array?', 'concat()', 'every()', 'filter()', 'forEach()', 4),
(3, 8, 'Which of the following is correct about features of JavaScript?', 'JavaScript is is complementary to and integrated with HTML', 'JavaScript is open and cross-platform.', 'Both of the above.', 'All of the above.', 3),
(3, 9, ' Which built-in method removes the last element from an array and returns that element?', 'last()', 'get()', 'pop()', 'None of the above', 3),
(3, 10, 'Which of the following function of String object returns the character at the specified index?', 'charAt()', 'charCodeAt()', 'concat()', 'indexOf()', 1),
(3, 11, 'Which is the method that operates on the return value of $()?', 'show()', 'css()', 'click()', 'done()', 2),
(3, 12, 'What is mean by "this" keyword in javascript?', 'It refers current object', 'It referes previous object', 'It is variable which contains value', 'None of the above', 1),
(3, 13, 'In Javascript, Which of the following method is used to evaluate the regular expression?', 'eval(2*(3+5))', 'evaluate(2*(3+5))', 'evalu(2*(3+5))', 'None of the above', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qselect`
--

CREATE TABLE `qselect` (
  `id` int(11) NOT NULL,
  `qno` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `1` varchar(100) NOT NULL,
  `2` varchar(100) NOT NULL,
  `3` varchar(100) NOT NULL,
  `4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id1` int(11) NOT NULL,
  `qno` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `1` varchar(100) NOT NULL,
  `2` varchar(100) NOT NULL,
  `3` varchar(100) NOT NULL,
  `4` varchar(100) NOT NULL,
  `res` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id1`, `qno`, `question`, `1`, `2`, `3`, `4`, `res`) VALUES
(1, 1, 'what is the full form of html', 'hyper text markup language', 'hyper text make learn', 'hypermedia text mark language', 'hyper media language', 2),
(1, 2, 'Who is making the Web standards?', 'Microsoft', 'Mozilla', 'The World Wide Web Consortium', 'Google', 3),
(1, 3, 'Choose the correct HTML element for the largest heading:', 'h6', 'h1', 'head', 'heading', 2),
(1, 4, 'What is the correct HTML element for inserting a line break', 'lb', 'break', 'br', 'new', 3),
(1, 5, 'What is the correct HTML for adding a background color?', 'body bg="yellow"', 'body style="background-color:yellow;', 'background yellow ', 'color=yellow', 2),
(1, 6, 'Choose the correct HTML element to define important text', 'strong', 'important', 'b', 'i', 1),
(1, 7, 'Choose the correct HTML element to define emphasized text', 'i', 'em', 'italic', 'emph', 2),
(1, 8, 'What is the correct HTML for creating a hyperlink?', 'a url="http://www.ws.com"', 'a name="http://www.ws.com"', 'a href="http://www.ss.com', 'a lik="http://www.ss.com', 3),
(1, 9, 'The small and big tags are special in what way..', 'They can be repeated', 'They work on anything', 'They work on anything', 'None of the above', 1),
(1, 10, 'What are meta tags used for?', 'To store information usually relevant to browsers and search engines', 'To only store information usually relevant to browsers', 'To only store information about search engines', 'To store information about external links\r\nNext >>   ', 1),
(1, 11, 'What tag is used to add columns to tables ?', '<colspan>', '<td>', '<tr>', 'NONE OF THE ABOVE', 2),
(1, 12, ' \r\nCorrect HTML to left align the content inside a table cell is', '<tdleft>', '<td raligh = "left" >', '<td align = "left">', '<td leftalign>', 3),
(1, 13, 'The tag used to create a new list item and also include a hyperlink is', '<LI>', '<DL>', '<DD>', '<UL>', 1),
(1, 14, '<INPUT> is', 'format tag', 'empty tag', 'both (a) and (b)', 'none of these', 2),
(1, 15, 'Markup tags tell the web browser', 'How to organise the page', 'How to display the page', 'How to display message box on page', 'None of these', 2),
(2, 1, 'Which of the following is a way to associate styles with your HTML document?', 'External CSS - The Element', 'Imported CSS - @import Rule', ' Both of the above.', 'None of the above.', 3),
(2, 2, 'Which of the following property is used to change the face of a font?', ' font-family', 'font-style', 'font-variant', ' font-weight', 1),
(2, 3, 'Which of the following property is used to set the color of a text?', 'color', 'direction', 'letter-spacing', 'word-spacing', 1),
(2, 4, ' Which of the following property specifies the color of a border?', 'border-color', 'border-style', 'border-width', 'border-bottom-color', 1),
(2, 5, 'Which of the following property changes the style of bottom border?', 'border-bottom-style', 'border-top-style', 'border-left-style', 'border-right-style', 1),
(2, 6, 'Which of the following property specifies the right padding of an element?', 'padding-bottom', 'padding-top', 'padding-left', 'padding-right', 4),
(2, 7, 'Which of the following property is used to align the text of a document?', 'text-indent', 'text-align', 'text-decoration', 'text-transform', 2),
(2, 8, 'Which of the following property is used to set the width of an image?', 'border', 'height', 'width', ' -moz-opacity', 3),
(2, 9, 'Which of the following property changes the width of top border?', 'border-bottom-width', 'border-top-width', 'border-left-width', 'border-right-width', 2),
(2, 10, 'Which of the following selector matches a element based on its id?', 'The Id Selector', 'The Universal Selector', 'The Descendant Selector', 'The Class Selector', 1),
(2, 11, 'Which of the following property is used to add or subtract space between the words of a sentence?', 'text-indent', 'text-align', 'text-decoration', 'text-transform', 1),
(2, 12, 'Which of the following property is used to increase or decrease the size of a font?', 'font-size', 'font', 'font-variant', 'font-weight', 1),
(2, 13, 'Which of the following property specifies the right margin of an element?', 'margin-right', 'margin-bottom', 'margin-top', 'margin-left', 1),
(2, 14, 'Which of the following property of a anchor element signifies visited hyperlinks?', 'link', 'visited', 'hover', 'active', 2),
(2, 15, 'Which of the following defines a measurement relative to a font''s x-height?', '%', 'cm', 'em', 'ex', 4),
(3, 1, 'asaas', 'Client-side JavaScript does not allow the reading or writing of files.', 'JavaScript can not be used for Networking applications because there is no such support available.', 'JavaScript doesn''t have any multithreading or multiprocess capabilities.', 'All of the above.', 4),
(3, 2, 'How can you get the total number of arguments passed to a function?', 'Using args.length property', 'Using arguments.length property', 'Both of the above', 'None of the above.', 2),
(3, 3, 'Which of the following type of variable takes precedence over other if names are same?', 'global variable', 'local variable', 'Both of the above.', 'None of the above.', 2),
(3, 4, 'Which built-in method returns the string representation of the number''s value?', 'toValue()', 'toNumber()', 'toString()', 'None of the above.', 3),
(3, 5, 'Which of the following function of Number object returns the number''s value?', 'toString()', 'valueOf()', 'toLocaleString()', 'toPrecision()', 2),
(3, 6, 'Which of the following code creates an object?', 'var book = Object();', 'var book = new Object();', 'var book = new OBJECT();', 'var book = new Book();', 2),
(3, 7, 'Which of the following function of Array object calls a function for each element in the array?', 'concat()', 'every()', 'filter()', 'forEach()', 4),
(3, 8, 'Which of the following is correct about features of JavaScript?', 'JavaScript is is complementary to and integrated with HTML', 'JavaScript is open and cross-platform.', 'Both of the above.', 'All of the above.', 3),
(3, 9, ' Which built-in method removes the last element from an array and returns that element?', 'last()', 'get()', 'pop()', 'None of the above', 3),
(3, 10, 'Which of the following function of String object returns the character at the specified index?', 'charAt()', 'charCodeAt()', 'concat()', 'indexOf()', 1),
(3, 11, 'Which is the method that operates on the return value of $()?', 'show()', 'css()', 'click()', 'done()', 2),
(3, 12, 'What is mean by "this" keyword in javascript?', 'It refers current object', 'It referes previous object', 'It is variable which contains value', 'None of the above', 1),
(3, 13, 'In Javascript, Which of the following method is used to evaluate the regular expression?', 'eval(2*(3+5))', 'evaluate(2*(3+5))', 'evalu(2*(3+5))', 'None of the above', 1),
(3, 14, 'In Javascript, What does isNaN function do ?', 'Return true if the argument is not a number.', 'Return false if the argument is not a number.', 'Return true if the argument is a number.', 'None of the above', 1),
(3, 15, 'What property would you use to redirect a visitor to another page?', 'document.URL', 'window.location.href', 'document.location.href', 'link.href', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id1` varchar(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id1`, `question`, `answer`) VALUES
('S001', 'LLLKLK', 'SDKJSKD'),
('S001', 'what is html', 'Hyper text markup language');

-- --------------------------------------------------------

--
-- Table structure for table `studreg`
--

CREATE TABLE `studreg` (
  `studentid` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date1` date NOT NULL,
  `course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studreg`
--

INSERT INTO `studreg` (`studentid`, `fname`, `lastname`, `age`, `contact`, `address`, `email`, `date1`, `course`) VALUES
('S001', 'mohit', 'jain', 23, 2147483647, 'bangloer', 'mohit@bangalore.com', '2017-03-22', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `subcount`
--

CREATE TABLE `subcount` (
  `count` int(11) NOT NULL,
  `in1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcount`
--

INSERT INTO `subcount` (`count`, `in1`) VALUES
(5, 1),
(2, 2),
(4, 3),
(5, 4),
(4, 5),
(5, 6),
(7, 7),
(5, 8),
(4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `subcount1`
--

CREATE TABLE `subcount1` (
  `count` int(11) NOT NULL,
  `in1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcount1`
--

INSERT INTO `subcount1` (`count`, `in1`) VALUES
(4, 1),
(6, 2),
(4, 3),
(5, 4),
(5, 5),
(3, 6),
(6, 7),
(6, 8),
(5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `subcount2`
--

CREATE TABLE `subcount2` (
  `count` int(11) NOT NULL,
  `in1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcount2`
--

INSERT INTO `subcount2` (`count`, `in1`) VALUES
(5, 1),
(5, 2),
(5, 3),
(6, 4),
(6, 5),
(6, 6),
(4, 7),
(5, 8),
(6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tcount`
--

CREATE TABLE `tcount` (
  `count` int(11) NOT NULL,
  `index1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcount`
--

INSERT INTO `tcount` (`count`, `index1`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachreg`
--

CREATE TABLE `teachreg` (
  `teacher_id` varchar(30) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(1000) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `adress` varchar(10000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `date1` date NOT NULL,
  `DEPT` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachreg`
--

INSERT INTO `teachreg` (`teacher_id`, `fname`, `lname`, `age`, `contact`, `adress`, `email`, `date1`, `DEPT`) VALUES
('T000', 'Tamal', 'Dey', 45, 5455454, 'kolkatta', 'tamal@yahoo.com', '2017-04-10', 'web'),
('T001', 'Neelam ', 'Bawane', 45, 2147483647, 'Bangalore', 'neelam@pes.edu', '2017-04-21', 'Data Science');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `id1` int(11) NOT NULL,
  `sub` int(11) NOT NULL,
  `subtop` varchar(100) NOT NULL,
  `desc1` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`id1`, `sub`, `subtop`, `desc1`) VALUES
(1, 1, 'What is HTML?', 'DEFINING A HTML TABLE\r\n\r\nAn HTML table is defined with the <table> tag.\r\n\r\nEach table row is defined with the <tr> tag. A table header is defined with the <th> tag. By default, table headings are bold and centered. A table data/cell is defined with the <td> tag.\r\n\r\nEXAMPLE\r\n\r\n<table style="width:100%">\r\n  <tr>\r\n    <th>Firstname</th>\r\n    <th>Lastname</th> \r\n    <th>Age</th>\r\n  </tr>\r\n  <tr>\r\n    <td>Jill</td>\r\n    <td>Smith</td> \r\n    <td>50</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Eve</td>\r\n    <td>Jackson</td> \r\n    <td>94</td>\r\n  </tr>\r\n</table>'),
(1, 2, 'A Simple Html Document Example', 'If you do not specify a border for the table, it will be displayed without borders.\r\n\r\nA border is set using the CSS border property:\r\n\r\nExample\r\ntable, th, td {\r\n    border: 1px solid black;\r\n}'),
(1, 3, 'HTML Tags', 'If you want the borders to collapse into one border, add the CSS border-collapse property:\r\n\r\nExample\r\ntable, th, td {\r\n    border: 1px solid black;\r\n    border-collapse: collapse;\r\n}'),
(2, 1, 'HTML EDITORS', 'Write HTML Using Notepad or TextEdit\r\n\r\nWeb pages can be created and modified by using professional HTML editors.\r\n\r\nHowever, for learning HTML we recommend a simple text editor like Notepad (PC) or TextEdit (Mac).\r\n\r\nWe believe using a simple text editor is a good way to learn HTML.\r\n\r\nFollow the four steps below to create your first web page with Notepad or TextEdit.\r\n\r\nStep 1: Open Notepad (PC)\r\n\r\nWindows 8 or later:\r\n\r\nOpen the Start Screen (the window symbol at the bottom left on your screen). Type Notepad.\r\n\r\nWindows 7 or earlier:\r\n\r\nOpen Start > Programs > Accessories > Notepad\r\n\r\nStep 1: Open TextEdit (Mac)\r\n\r\nOpen Finder > Applications > TextEdit\r\n\r\nAlso change some preferences to get the application to save files correctly. In Preferences > Format > choose "Plain Text"\r\n\r\nThen under "Open and Save", check the box that says "Ignore rich text commands in HTML files".\r\n\r\nThen open a new document to place the code.\r\n\r\nStep 2: Write Some HTMLM\r\nWrite or copy some HTML into Notepad.'),
(1, 4, 'jahsah', 'Cell padding specifies the space between the cell content and its borders.\r\n\r\nIf you do not specify a padding, the table cells will be displayed without padding.\r\n\r\nTo set the padding, use the CSS padding property:\r\n\r\nExample\r\nth, td {\r\n    padding: 15px;\r\n}'),
(3, 1, 'HTML Documents', 'All HTML documents must start with a document type declaration: <!DOCTYPE html>\r\n\r\nThe HTML document itself begins with <html> and ends with </html>\r\n\r\nThe visible part of the HTML document is between <body> and </body>.\r\n\r\nEXAMPLE\r\n\r\n<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<h1>My First Heading</h1>\r\n<p>My first paragraph.</p>\r\n\r\n</body>\r\n</html>\r\n'),
(3, 2, 'HTML HEADINGS', '<h1>HTML HEADINGS</h1>\r\nHTML headings are defined with the <h1> to <h6> tags.\r\n defines the most important heading. <h6> defines the least important heading: \r\n\r\nEXAMPLE:\r\n\r\n<h1>This is heading 1</h1>'),
(3, 3, 'HTML IMAGES', 'HTML images are defined with the <img> tag.\r\nThe source file (src), alternative text (alt), width, and height are provided as attributes:\r\n\r\nEXAMPLE\r\n\r\n<img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142">'),
(4, 1, 'HTML Elements', 'An HTML element usually consists of a start tag and end tag, with the content inserted in between:\r\n\r\n<tagname>Content goes here...</tagname>\r\nThe HTML element is everything from the start tag to the end tag:\r\n\r\n<p> My first paragraph.</p>\r\n\r\nStart tag	Element content			End tag\r\n<h1>		My First Heading		</h1>\r\n<p>		My first paragraph.		</p>\r\n<br>	 \r\n\r\nHTML elements with no content are called empty elements. \r\nEmpty elements do not have an end tag, such as the <br> element (which indicates a line break)\r\n'),
(4, 2, 'NESTED HTML ELEMENTS', '<h1>NESTED HTML ELEMENTS</h1>\r\n\r\nHTML elements can be nested (elements can contain elements).\r\n\r\nAll HTML documents consist of nested HTML elements.\r\n\r\nThis example contains four HTML elements:'),
(4, 3, 'EXAMPLE', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<h1>My First Heading</h1>\r\n<p>My first paragraph.</p>\r\n\r\n</body>\r\n</html>'),
(4, 4, 'EXAMPLE EXPLAINED', 'Example Explained\r\nThe <html> element defines the whole document.\r\n\r\nIt has a start tag <html> and an end tag </html>.\r\n\r\nThe element content is another HTML element (the <body> element).'),
(5, 1, 'HTML ATTRIBUTES', 'All HTML elements can have attributes\r\nAttributes provide additional information about an element\r\nAttributes are always specified in the start tag\r\nAttributes usually come in name/value pairs like: name="value"'),
(5, 2, 'THE LANG ATTRIBUTE', 'The language of the document can be declared in the <html> tag.\r\n\r\nThe language is declared with the lang attribute.\r\n\r\nDeclaring a language is important for accessibility applications (screen readers) and search engines:\r\n\r\n<!DOCTYPE html>\r\n<html lang="en-US">\r\n<body>\r\n\r\n...\r\n\r\n</body>\r\n</html>'),
(5, 3, 'THE TITLE ATTRIBUTE', 'Here, a title attribute is added to the <p> element. \r\nThe value of the title attribute will be displayed as a tooltip when you mouse over the paragraph\r\n\r\nEXAMPLE\r\n\r\n<p title="I''m a tooltip">\r\nThis is a paragraph.\r\n</p>'),
(6, 1, 'HTML HEADINGS', 'Headings are defined with the <h1> to <h6> tags.\r\n<h1> defines the most important heading. <h6> defines the least important heading.\r\n\r\n\r\nEXAMPLE\r\n\r\n<h1>This is heading 1</h1>\r\n<h2>This is heading 2</h2>\r\n<h3>This is heading 3</h3>\r\n<h4>This is heading 4</h4>\r\n<h5>This is heading 5</h5>\r\n<h6>This is heading 6</h6>\r\n\r\nNote: Browsers automatically add some white space (a margin) before and after a heading.'),
(6, 2, 'Headings Are Important:', 'Search engines use the headings to index the structure and content of your web pages.\r\n\r\nUsers skim your pages by its headings. It is important to use headings to show the document structure.\r\n\r\n<h1> headings should be used for main headings, followed by <h2> headings, then the less important <h3>, and so on.\r\n\r\nNote: Use HTML headings for headings only. Don''t use headings to make text BIG or bold.'),
(6, 3, 'HTML Horizontal Rules', 'The <hr> tag defines a thematic break in an HTML page, and is most often displayed as a horizontal rule.\r\n\r\nThe <hr> element is used to separate content (or define a change) in an HTML page:\r\n\r\nEXAMPLE\r\n<h1>This is heading 1</h1>\r\n<p>This is some text.</p>\r\n<hr>\r\n<h2>This is heading 2</h2>\r\n<p>This is some other text.</p>\r\n<hr>'),
(6, 4, 'The HTML HEAD Element', 'The HTML <head> element has nothing to do with HTML headings.\r\n\r\nThe <head> element is a container for metadata. HTML metadata is data about the HTML document. Metadata is not displayed.\r\n\r\nThe <head> element is placed between the <html> tag and the <body> tag:\r\n\r\n<h2>EXAMPLE</h2>\r\n\r\n<!DOCTYPE html>\r\n<html>\r\n\r\n<head>\r\n  <title>My First HTML</title>\r\n  <meta charset="UTF-8">\r\n</head>\r\n\r\n<body>\r\n.\r\n.\r\n.\r\nNote: Metadata typically define the document title, character set, styles, links, scripts, and other meta information.'),
(7, 1, 'HTML STYLES', 'EXAMPLE\r\n\r\nI am Red\r\nI am BLue\r\nI am Red'),
(7, 2, 'The HTML Style Attribute', 'Setting the style of an HTML element, can be done with the style attribute.\r\n\r\nThe HTML style attribute has the following syntax:\r\n\r\n<tagname style="property:value;">\r\nThe property is a CSS property. The value is a CSS value.\r\n\r\nYou will learn more about CSS later in this tutorial.'),
(7, 3, 'HTML Background Color', 'The background-color property defines the background color for an HTML element.\r\n\r\nThis example sets the background color for a page to powderblue:\r\n\r\nEXAMPLE\r\n\r\n<body style="background-color:powderblue;">\r\n\r\n<h1>This is a heading</h1>\r\n<p>This is a paragraph.</p>\r\n\r\n</body>'),
(7, 4, 'HTML Text Color', 'The color property defines the text color for an HTML element:\r\n\r\nEXAMPLE\r\n\r\n<h1 style="color:blue;">This is a heading</h1>\r\n<p style="color:red;">This is a paragraph.</p>\r\n'),
(7, 5, 'HTML FONTS', 'The font-family property defines the font to be used for an HTML element:\r\n\r\nEXAMPLE\r\n\r\n<h1 style="font-family:verdana;">This is a heading</h1>\r\n<p style="font-family:courier;">This is a paragraph.</p>'),
(7, 6, 'HTML Text Size', 'The font-size property defines the text size for an HTML element:\r\n\r\nExample\r\n\r\n<h1 style="font-size:300%;">This is a heading</h1>\r\n<p style="font-size:160%;">This is a paragraph.</p>'),
(8, 1, 'HTML TABLES', 'DEFINING A HTML TABLE<\r\n\r\nAn HTML table is defined with the <table> tag.\r\n\r\nEach table row is defined with the <tr> tag. A table header is defined with the <th> tag. By default, table headings are bold and centered. A table data/cell is defined with the <td> tag.\r\n\r\nEXAMPLE\r\n\r\n<table style="width:100%">\r\n  <tr>\r\n    <th>Firstname</th>\r\n    <th>Lastname</th> \r\n    <th>Age</th>\r\n  </tr>\r\n  <tr>\r\n    <td>Jill</td>\r\n    <td>Smith</td> \r\n    <td>50</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Eve</td>\r\n    <td>Jackson</td> \r\n    <td>94</td>\r\n  </tr>\r\n</table>'),
(8, 2, 'HTML Table - Adding a Border', 'If you do not specify a border for the table, it will be displayed without borders.\r\n\r\nA border is set using the CSS border property:\r\n\r\nExample\r\ntable, th, td {\r\n    border: 1px solid black;\r\n}'),
(8, 3, 'HTML Table - Collapsed Borders', 'If you want the borders to collapse into one border, add the CSS border-collapse property:\r\n\r\nExample\r\ntable, th, td {\r\n    border: 1px solid black;\r\n    border-collapse: collapse;\r\n}'),
(8, 4, 'HTML Table - Adding Cell Padding', 'Cell padding specifies the space between the cell content and its borders.\r\n\r\nIf you do not specify a padding, the table cells will be displayed without padding.\r\n\r\nTo set the padding, use the CSS padding property:\r\n\r\nExample\r\nth, td {\r\n    padding: 15px;\r\n}'),
(9, 1, 'Unordered HTML List', 'An unordered list starts with the <ul> tag. Each list item starts with the <li> tag.\r\n\r\nThe list items will be marked with bullets (small black circles) by default:\r\n\r\nExample\r\n<ul>\r\n  <li>Coffee</li>\r\n  <li>Tea</li>\r\n  <li>Milk</li>\r\n</ul>'),
(9, 2, 'Ordered HTML List', 'An ordered list starts with the <ol> tag. Each list item starts with the <li> tag.\r\n\r\nThe list items will be marked with numbers by default:\r\n\r\nExample\r\n<ol>\r\n  <li>Coffee</li>\r\n  <li>Tea</li>\r\n  <li>Milk</li>\r\n</ol>'),
(9, 3, 'Ordered HTML List - The Type Attribute', 'The type attribute of the <ol> tag, defines the type of the list item marker:\r\n\r\nType	Description\r\ntype="1"	The list items will be numbered with numbers (default)\r\ntype="A"	The list items will be numbered with uppercase letters\r\ntype="a"	The list items will be numbered with lowercase letters\r\ntype="I"	The list items will be numbered with uppercase roman numbers\r\ntype="i"	The list items will be numbered with lowercase roman numbers');

-- --------------------------------------------------------

--
-- Table structure for table `try1`
--

CREATE TABLE `try1` (
  `id1` int(11) NOT NULL,
  `sub` int(11) NOT NULL,
  `subtop` varchar(100) NOT NULL,
  `desc1` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `try1`
--

INSERT INTO `try1` (`id1`, `sub`, `subtop`, `desc1`) VALUES
(1, 1, 'CSS Introduction', 'What is CSS??\r\nCSS stands for Cascading Style Sheets\r\nCSS describes how HTML elements are to be displayed on screen, paper, or in other media\r\nCSS saves a lot of work. It can control the layout of multiple web pages all at once\r\nExternal stylesheets are stored in CSS files'),
(1, 2, 'Why Use CSS?', 'CSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes. \r\n\r\nCSS Solved a Big Problem\r\nHTML was NEVER intended to contain tags for formatting a web page!\r\n\r\nHTML was created to describe the content of a web page, like:\r\n\r\n<h1>This is a heading</h1>\r\n\r\n<p>This is a paragraph.</p>\r\n\r\nWhen tags like <font>, and color attributes were added to the HTML 3.2 specification, it started a nightmare for web developers. Development of large websites, where fonts and color information were added to every single page, became a long and expensive process.\r\n\r\nTo solve this problem, the World Wide Web Consortium (W3C) created CSS.\r\n\r\nCSS removed the style formatting from the HTML page!'),
(1, 3, 'CSS Saves a Lot of Work!', 'The style definitions are normally saved in external .css files.\r\n\r\nWith an external stylesheet file, you can change the look of an entire website by changing just one file!'),
(2, 1, 'CSS Syntax', 'The selector points to the HTML element you want to style.\r\n\r\nThe declaration block contains one or more declarations separated by semicolons.\r\n\r\nEach declaration includes a CSS property name and a value, separated by a colon.\r\n\r\nA CSS declaration always ends with a semicolon, and declaration blocks are surrounded by curly braces.\r\n\r\nIn the following example all <p> elements will be center-aligned, with a red text color:\r\n\r\nExample\r\np {\r\n    color: red;\r\n    text-align: center;\r\n}'),
(2, 2, 'CSS Selectors', 'The element Selector\r\nThe element selector selects elements based on the element name.\r\n\r\nYou can select all <p> elements on a page like this (in this case, all <p> elements will be center-aligned, with a red text color):\r\n\r\nExample\r\np {\r\n    text-align: center;\r\n    color: red;\r\n}'),
(2, 3, 'The id Selector', 'The id selector uses the id attribute of an HTML element to select a specific element.\r\n\r\nThe id of an element should be unique within a page, so the id selector is used to select one unique element!\r\n\r\nTo select an element with a specific id, write a hash (#) character, followed by the id of the element.\r\n\r\nThe style rule below will be applied to the HTML element with id="para1":\r\n\r\nExample\r\n#para1 {\r\n    text-align: center;\r\n    color: red;\r\n}'),
(2, 4, 'The class Selector', 'The class Selector\r\nThe class selector selects elements with a specific class attribute.\r\n\r\nTo select elements with a specific class, write a period (.) character, followed by the name of the class.\r\n\r\nIn the example below, all HTML elements with class="center" will be red and center-aligned:\r\n\r\nExample\r\n.center {\r\n    text-align: center;\r\n    color: red;\r\n}'),
(2, 5, 'CSS Comments', 'Comments are used to explain the code, and may help when you edit the source code at a later date.\r\n\r\nComments are ignored by browsers.\r\n\r\nA CSS comment starts with /* and ends with */. Comments can also span multiple lines:\r\n\r\nExample\r\np {\r\n    color: red;\r\n    /* This is a single-line comment */\r\n    text-align: center;\r\n}\r\n\r\n/* This is\r\na multi-line\r\ncomment */'),
(3, 1, 'External Style Sheet', 'With an external style sheet, you can change the look of an entire website by changing just one file!\r\n\r\nEach page must include a reference to the external style sheet file inside the <link> element. The <link> element goes inside the <head> section:\r\n\r\nExample\r\n<head>\r\n<link rel="stylesheet" type="text/css" href="mystyle.css">\r\n</head>'),
(3, 2, 'Internal Style Sheet', 'An internal style sheet may be used if one single page has a unique style.\r\n\r\nInternal styles are defined within the <style> element, inside the <head> section of an HTML page:\r\n\r\nExample\r\n<head>\r\n<style>\r\nbody {\r\n    background-color: linen;\r\n}\r\n\r\nh1 {\r\n    color: maroon;\r\n    margin-left: 40px;\r\n} \r\n</style>\r\n</head>'),
(3, 3, 'Inline Styles', 'An inline style may be used to apply a unique style for a single element.\r\n\r\nTo use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.\r\n\r\nThe example below shows how to change the color and the left margin of a <h1> element:\r\n\r\nExample\r\n<h1 style="color:blue;margin-left:30px;">This is a heading</h1>'),
(4, 1, 'Background Color', 'The background-color property specifies the background color of an element.\r\n\r\nThe background color of a page is set like this:\r\n\r\nExample\r\nbody {\r\n    background-color: lightblue;\r\n}\r\nWith CSS, a color is most often specified by:\r\n\r\na valid color name - like "red"\r\na HEX value - like "#ff0000"\r\nan RGB value - like "rgb(255,0,0)"'),
(4, 2, 'Background Image', 'The background-image property specifies an image to use as the background of an element.\r\n\r\nBy default, the image is repeated so it covers the entire element.\r\n\r\nThe background image for a page can be set like this:\r\n\r\nExample\r\nbody {\r\n    background-image: url("paper.gif");\r\n}'),
(4, 3, 'Background Image - Set position and no-repeat', 'Showing the background image only once is also specified by the background-repeat property:\r\n\r\nExample\r\nbody {\r\n    background-image: url("img_tree.png");\r\n    background-repeat: no-repeat;\r\n}'),
(4, 4, 'Background Image - Fixed position', 'To specify that the background image should be fixed (will not scroll with the rest of the page), use the background-attachment property:\r\n\r\nExample\r\nbody {\r\n    background-image: url("img_tree.png");\r\n    background-repeat: no-repeat;\r\n    background-position: right top;\r\n    background-attachment: fixed;\r\n}'),
(5, 1, 'CSS Margins', 'The CSS margin properties are used to generate space around elements.\r\n\r\nThe margin properties set the size of the white space outside the border.\r\n\r\nWith CSS, you have full control over the margins. There are CSS properties for setting the margin for each side of an element (top, right, bottom, and left).\r\n\r\nMargin - Individual Sides\r\nCSS has properties for specifying the margin for each side of an element:\r\n\r\nmargin-top\r\nmargin-right\r\nmargin-bottom\r\nmargin-left\r\nAll the margin properties can have the following values:\r\n\r\nauto - the browser calculates the margin\r\nlength - specifies a margin in px, pt, cm, etc.\r\n% - specifies a margin in % of the width of the containing element\r\ninherit - specifies that the margin should be inherited from the parent element\r\nTip: Negative values are allowed.'),
(5, 2, 'Margin - Shorthand Property', 'To shorten the code, it is possible to specify all the margin properties in one property.\r\n\r\nThe margin property is a shorthand property for the following individual margin properties:\r\n\r\nmargin-top\r\nmargin-right\r\nmargin-bottom\r\nmargin-left\r\nExample\r\np {\r\n    margin: 100px 150px 100px 80px;\r\n}'),
(5, 3, 'The auto Value', 'You can set the margin property to auto to horizontally center the element within its container.\r\n\r\nThe element will then take up the specified width, and the remaining space will be split equally between the left and right margins:\r\n\r\nExample\r\ndiv {\r\n    width: 300px;\r\n    margin: auto;\r\n    border: 1px solid red;\r\n}'),
(5, 4, 'Margin Collapse', 'Top and bottom margins of elements are sometimes collapsed into a single margin that is equal to the largest of the two margins.\r\n\r\nThis does not happen on left and right margins! Only top and bottom margins!\r\n\r\nLook at the following example:\r\n\r\nExample\r\nh1 {\r\n    margin: 0 0 50px 0;\r\n}\r\n\r\nh2 {\r\n    margin: 20px 0 0 0;\r\n}'),
(6, 1, 'The CSS Box Model', 'All HTML elements can be considered as boxes. In CSS, the term "box model" is used when talking about design and layout.\r\nExplanation of the different parts:\r\n\r\nContent - The content of the box, where text and images appear\r\nPadding - Clears an area around the content. The padding is transparent\r\nBorder - A border that goes around the padding and content\r\nMargin - Clears an area outside the border. The margin is transparent\r\nThe box model allows us to add a border around elements, and to define space between elements. \r\n\r\nExample\r\ndiv {\r\n    width: 300px;\r\n    border: 25px solid green;\r\n    padding: 25px;\r\n    margin: 25px;\r\n}'),
(6, 2, 'Width and Height of an Element', 'In order to set the width and height of an element correctly in all browsers, you need to know how the box model works.\r\n\r\nImportant: When you set the width and height properties of an element with CSS, you just set the width and height of the content area. To calculate the full size of an element, you must also add padding, borders and margins.\r\n\r\nAssume we want to style a <div> element to have a total width of 350px:\r\n\r\nExample\r\ndiv {\r\n    width: 320px;\r\n    padding: 10px;\r\n    border: 5px solid gray;\r\n    margin: 0; \r\n}'),
(7, 1, 'Text Color', 'The color property is used to set the color of the text.\r\n\r\nWith CSS, a color is most often specified by:\r\n\r\na color name - like "red"\r\na HEX value - like "#ff0000"\r\nan RGB value - like "rgb(255,0,0)"\r\nLook at CSS Color Values for a complete list of possible color values.\r\n\r\nThe default text color for a page is defined in the body selector.\r\n\r\nExample\r\nbody {\r\n    color: blue;\r\n}\r\n\r\nh1 {\r\n    color: green;\r\n}'),
(7, 2, 'Text Alignment', 'The text-align property is used to set the horizontal alignment of a text.\r\n\r\nA text can be left or right aligned, centered, or justified.\r\n\r\nThe following example shows center aligned, and left and right aligned text (left alignment is default if text direction is left-to-right, and right alignment is default if text direction is right-to-left):\r\n\r\nExample\r\nh1 {\r\n    text-align: center;\r\n}\r\n\r\nh2 {\r\n    text-align: left;\r\n}\r\n\r\nh3 {\r\n    text-align: right;\r\n}'),
(7, 3, 'Text Decoration', 'The text-decoration property is used to set or remove decorations from text.\r\n\r\nThe value text-decoration: none; is often used to remove underlines from links:\r\n\r\nExample\r\na {\r\n    text-decoration: none;\r\n}'),
(7, 4, 'Text Transformation', 'The text-transform property is used to specify uppercase and lowercase letters in a text.\r\n\r\nIt can be used to turn everything into uppercase or lowercase letters, or capitalize the first letter of each word:\r\n\r\nExample\r\np.uppercase {\r\n    text-transform: uppercase;\r\n}\r\n\r\np.lowercase {\r\n    text-transform: lowercase;\r\n}\r\n\r\np.capitalize {\r\n    text-transform: capitalize;\r\n}'),
(7, 5, 'Text Shadow', 'The text-shadow property adds shadow to text.\r\n\r\nThe following example specifies the position of the horizontal shadow (3px), the position of the vertical shadow (2px) and the color of the shadow (red):\r\n\r\nExample\r\nh1 {\r\n    text-shadow: 3px 2px red;\r\n}'),
(8, 1, 'CSS Font Families', 'The font family of a text is set with the font-family property.\r\n\r\nThe font-family property should hold several font names as a "fallback" system. If the browser does not support the first font, it tries the next font, and so on.\r\n\r\nStart with the font you want, and end with a generic family, to let the browser pick a similar font in the generic family, if no other fonts are available.\r\n\r\nNote: If the name of a font family is more than one word, it must be in quotation marks, like: "Times New Roman".\r\n\r\nMore than one font family is specified in a comma-separated list:\r\n\r\nExample\r\np {\r\n    font-family: "Times New Roman", Times, serif;\r\n}'),
(8, 2, 'Font Style', 'The font-style property is mostly used to specify italic text.\r\n\r\nThis property has three values:\r\n\r\nnormal - The text is shown normally\r\nitalic - The text is shown in italics\r\noblique - The text is "leaning" (oblique is very similar to italic, but less supported)\r\nExample\r\np.normal {\r\n    font-style: normal;\r\n}\r\n\r\np.italic {\r\n    font-style: italic;\r\n}\r\n\r\np.oblique {\r\n    font-style: oblique;\r\n}'),
(8, 3, 'Font Size', 'The font-size property sets the size of the text.\r\n\r\nBeing able to manage the text size is important in web design. However, you should not use font size adjustments to make paragraphs look like headings, or headings look like paragraphs.\r\n\r\nAlways use the proper HTML tags, like <h1> - <h6> for headings and <p> for paragraphs.\r\n\r\nThe font-size value can be an absolute, or relative size.\r\n\r\nAbsolute size:\r\n\r\nSets the text to a specified size\r\nDoes not allow a user to change the text size in all browsers (bad for accessibility reasons)\r\nAbsolute size is useful when the physical size of the output is known\r\nRelative size:\r\n\r\nSets the size relative to surrounding elements\r\nAllows a user to change the text size in browsers\r\nNote: If you do not specify a font size, the default size for normal text, like paragraphs, is 16px (16px=1em).'),
(8, 4, 'Font Weight', 'The font-weight property specifies the weight of a font:\r\n\r\nExample\r\np.normal {\r\n    font-weight: normal;\r\n}\r\n\r\np.thick {\r\n    font-weight: bold;\r\n}'),
(8, 5, 'Font Variant', 'The font-variant property specifies whether or not a text should be displayed in a small-caps font.\r\n\r\nIn a small-caps font, all lowercase letters are converted to uppercase letters. However, the converted uppercase letters appears in a smaller font size than the original uppercase letters in the text.\r\n\r\nExample\r\np.normal {\r\n    font-variant: normal;\r\n}\r\n\r\np.small {\r\n    font-variant: small-caps;\r\n}'),
(9, 1, 'CSS [attribute] Selector', 'The [attribute] selector is used to select elements with a specified attribute.\r\n\r\nThe following example selects all <a> elements with a target attribute:\r\n\r\nExample\r\na[target] {\r\n    background-color: yellow;\r\n}\r\n'),
(9, 2, 'CSS [attribute="value"] Selector', 'The [attribute="value"] selector is used to select elements with a specified attribute and value.\r\n\r\nThe following example selects all <a> elements with a target="_blank" attribute:\r\n\r\nExample\r\na[target="_blank"] { \r\n    background-color: yellow;\r\n}'),
(9, 3, 'CSS [attribute^="value"] Selector', 'The [attribute^="value"] selector is used to select elements whose attribute value begins with a specified value.\r\n\r\nThe following example selects all elements with a class attribute value that begins with "top":\r\n\r\nNote: The value does not have to be a whole word! \r\n\r\nExample\r\n[class^="top"] {\r\n    background: yellow;\r\n}'),
(9, 4, 'CSS [attribute*="value"] Selector', 'The [attribute*="value"] selector is used to select elements whose attribute value contains a specified value.\r\n\r\nThe following example selects all elements with a class attribute value that contains "te":\r\n\r\nNote: The value does not have to be a whole word!  \r\n\r\nExample\r\n[class*="te"] {\r\n    background: yellow;\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `try2`
--

CREATE TABLE `try2` (
  `id1` int(11) NOT NULL,
  `sub` int(11) NOT NULL,
  `subtop` varchar(100) NOT NULL,
  `desc1` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `try2`
--

INSERT INTO `try2` (`id1`, `sub`, `subtop`, `desc1`) VALUES
(1, 1, 'JavaScript Can Change HTML Content', 'One of many JavaScript HTML methods is getElementById().\r\n\r\nThis example uses the method to "find" an HTML element (with id="demo") and changes the element content (innerHTML) to "Hello JavaScript":\r\n\r\nExample\r\ndocument.getElementById("demo").innerHTML = "Hello JavaScript";\r\n\r\nWith HTML and JavaScript you can use single or double quotes:\r\n\r\nExample\r\ndocument.getElementById(''demo'').innerHTML = ''Hello JavaScript'';'),
(1, 2, 'JavaScript Can Change HTML Styles (CSS)', 'Changing the style of an HTML element, is a variant of changing an HTML attribute:\r\n\r\nExample\r\ndocument.getElementById("demo").style.fontSize = "25px";\r\nor\r\ndocument.getElementById(''demo'').style.fontSize = ''25px'';\r\nJavaScript accepts both double and single quotes'),
(1, 3, 'JavaScript Can Hide HTML Elements', 'Hiding HTML elements can be done by changing the display style:\r\n\r\nExample\r\ndocument.getElementById("demo").style.display = "none";\r\nor\r\ndocument.getElementById(''demo'').style.display = ''none'';'),
(1, 4, 'JavaScript Can Show HTML Elements', 'Showing hidden HTML elements can also be done by changing the display style:\r\n\r\nExample\r\ndocument.getElementById("demo").style.display = "block";\r\nor\r\ndocument.getElementById(''demo'').style.display = ''block'';'),
(2, 1, 'The <script> Tag', 'In HTML, JavaScript code must be inserted between <script> and </script> tags.\r\n\r\nExample\r\n<script>\r\ndocument.getElementById("demo").innerHTML = "My First JavaScript";\r\n</script>\r\nOld JavaScript examples may use a type attribute: <script type="text/javascript">.\r\nThe type attribute is not required. JavaScript is the default scripting language in HTML.'),
(2, 2, 'JavaScript in <head>', 'In this example, a JavaScript function is placed in the <head> section of an HTML page.\r\n\r\nThe function is invoked (called) when a button is clicked:\r\n\r\nExample\r\n<!DOCTYPE html>\r\n<html>\r\n<head>\r\n<script>\r\nfunction myFunction() {\r\n    document.getElementById("demo").innerHTML = "Paragraph changed.";\r\n}\r\n</script>\r\n</head>\r\n\r\n<body>\r\n\r\n<h1>A Web Page</h1>\r\n<p id="demo">A Paragraph</p>\r\n<button type="button" onclick="myFunction()">Try it</button>\r\n\r\n</body>\r\n</html>'),
(2, 3, 'JavaScript in <body>', 'In this example, a JavaScript function is placed in the <body> section of an HTML page.\r\n\r\nThe function is invoked (called) when a button is clicked:\r\n\r\nExample\r\n<!DOCTYPE html>\r\n<html>\r\n<body> \r\n\r\n<h1>A Web Page</h1>\r\n<p id="demo">A Paragraph</p>\r\n<button type="button" onclick="myFunction()">Try it</button>\r\n\r\n<script>\r\nfunction myFunction() {\r\n   document.getElementById("demo").innerHTML = "Paragraph changed.";\r\n}\r\n</script>\r\n\r\n</body>\r\n</html>'),
(2, 4, 'External JavaScript', 'Scripts can also be placed in external files:\r\n\r\nExternal file: myScript.js\r\nfunction myFunction() {\r\n   document.getElementById("demo").innerHTML = "Paragraph changed.";\r\n}\r\nExternal scripts are practical when the same code is used in many different web pages.\r\n\r\nJavaScript files have the file extension .js.\r\n\r\nTo use an external script, put the name of the script file in the src (source) attribute of a <script> tag:\r\n\r\nExample\r\n<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n<script src="myScript.js"></script>\r\n\r\n</body>\r\n</html>'),
(3, 1, 'JavaScript Programs', 'A computer program is a list of "instructions" to be "executed" by the computer.\r\n\r\nIn a programming language, these program instructions are called statements.\r\n\r\nJavaScript is a programming language.\r\n\r\nJavaScript statements are separated by semicolons:\r\n\r\nExample\r\nvar x, y, z;\r\nx = 5;\r\ny = 6;\r\nz = x + y;\r\nIn HTML, JavaScript programs are executed by the web browser.'),
(3, 2, 'JavaScript Variables', 'In a programming language, variables are used to store data values.\r\n\r\nJavaScript uses the var keyword to declare variables.\r\n\r\nAn equal sign is used to assign values to variables.\r\n\r\nIn this example, x is defined as a variable. Then, x is assigned (given) the value 6:\r\n\r\nvar x;\r\n\r\nx = 6;'),
(3, 3, 'JavaScript Comments', 'Not all JavaScript statements are "executed".\r\n\r\nCode after double slashes // or between /* and */ is treated as a comment.\r\n\r\nComments are ignored, and will not be executed:\r\n\r\nvar x = 5;   // I will be executed\r\n\r\n// var x = 6;   I will NOT be executed'),
(3, 4, 'JavaScript is Case Sensitive', 'All JavaScript identifiers are case sensitive. \r\n\r\nThe variables lastName and lastname, are two different variables.\r\n\r\nvar lastname, lastName;\r\nlastName = "Doe";\r\nlastname = "Peterson";'),
(4, 1, 'JavaScript Variables', 'JavaScript variables are containers for storing data values.\r\n\r\nIn this example, x, y, and z, are variables:\r\n\r\nExample\r\nvar x = 5;\r\nvar y = 6;\r\nvar z = x + y;\r\nFrom the example above, you can expect:\r\n\r\nx stores the value 5\r\ny stores the value 6\r\nz stores the value 11'),
(4, 2, 'JavaScript Identifiers', 'All JavaScript variables must be identified with unique names.\r\n\r\nThese unique names are called identifiers.\r\n\r\nIdentifiers can be short names (like x and y) or more descriptive names (age, sum, totalVolume).\r\n\r\nThe general rules for constructing names for variables (unique identifiers) are:\r\n\r\nNames can contain letters, digits, underscores, and dollar signs.\r\nNames must begin with a letter\r\nNames can also begin with $ and _ (but we will not use it in this tutorial)\r\nNames are case sensitive (y and Y are different variables)\r\nReserved words (like JavaScript keywords) cannot be used as names\r\nJavaScript identifiers are case-sensitive.'),
(4, 3, 'The Assignment Operator', 'In JavaScript, the equal sign (=) is an "assignment" operator, not an "equal to" operator.\r\n\r\nThis is different from algebra. The following does not make sense in algebra:\r\n\r\nx = x + 5\r\nIn JavaScript, however, it makes perfect sense: it assigns the value of x + 5 to x.\r\n\r\n(It calculates the value of x + 5 and puts the result into x. The value of x is incremented by 5.)\r\n\r\nThe "equal to" operator is written like == in JavaScript.'),
(4, 4, 'Declaring (Creating) JavaScript Variables', 'Creating a variable in JavaScript is called "declaring" a variable.\r\n\r\nYou declare a JavaScript variable with the var keyword:\r\n\r\nvar carName;\r\nAfter the declaration, the variable has no value. (Technically it has the value of undefined)\r\n\r\nTo assign a value to the variable, use the equal sign:\r\n\r\ncarName = "Volvo";\r\nYou can also assign a value to the variable when you declare it:\r\n\r\nvar carName = "Volvo";\r\nIn the example below, we create a variable called carName and assign the value "Volvo" to it.\r\n\r\nThen we "output" the value inside an HTML paragraph with id="demo":\r\n\r\nExample\r\n<p id="demo"></p>\r\n\r\n<script>\r\nvar carName = "Volvo";\r\ndocument.getElementById("demo").innerHTML = carName; \r\n</script>'),
(4, 5, 'Value = undefined', 'In computer programs, variables are often declared without a value. The value can be something that has to be calculated, or something that will be provided later, like user input.\r\n\r\nA variable declared without a value will have the value undefined.\r\n\r\nThe variable carName will have the value undefined after the execution of this statement:\r\n\r\nExample\r\nvar carName;'),
(5, 1, 'JavaScript Data Types', 'JavaScript variables can hold many data types: numbers, strings, objects and more:\r\n\r\nvar length = 16;                               // Number\r\nvar lastName = "Johnson";                      // String\r\nvar x = {firstName:"John", lastName:"Doe"};    // Object'),
(5, 2, 'The Concept of Data Types', 'In programming, data types is an important concept.\r\n\r\nTo be able to operate on variables, it is important to know something about the type.\r\n\r\nWithout data types, a computer cannot safely solve this:\r\n\r\nvar x = 16 + "Volvo";\r\nDoes it make any sense to add "Volvo" to sixteen? Will it produce an error or will it produce a result?\r\n\r\nJavaScript will treat the example above as:\r\n\r\nvar x = "16" + "Volvo";\r\nWhen adding a number and a string, JavaScript will treat the number as a string.\r\n\r\nExample\r\nvar x = 16 + "Volvo";'),
(5, 3, 'JavaScript Strings', 'A string (or a text string) is a series of characters like "John Doe".\r\n\r\nStrings are written with quotes. You can use single or double quotes:\r\nExample\r\nvar carName = "Volvo XC60";   // Using double quotes\r\nvar carName = ''Volvo XC60'';   // Using single quotes\r\nYou can use quotes inside a string, as long as they don''t match the quotes surrounding the string:\r\n\r\nExample\r\nvar answer = "It''s alright";             // Single quote inside double quotes\r\nvar answer = "He is called ''Johnny''";    // Single quotes inside double quotes\r\nvar answer = ''He is called "Johnny"'';    // Double quotes inside single quotes'),
(5, 4, 'JavaScript Numbers', 'JavaScript has only one type of numbers.\r\n\r\nNumbers can be written with, or without decimals:\r\nExample\r\nvar x1 = 34.00;     // Written with decimals\r\nvar x2 = 34;        // Written without decimals\r\nExtra large or extra small numbers can be written with scientific (exponential) notation:\r\n\r\nExample\r\nvar y = 123e5;      // 12300000\r\nvar z = 123e-5;     // 0.00123'),
(5, 5, 'JavaScript Objects', 'JavaScript objects are written with curly braces.\r\n\r\nObject properties are written as name:value pairs, separated by commas.\r\n\r\nExample\r\nvar person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};\r\nThe object (person) in the example above has 4 properties: firstName, lastName, age, and eyeColor.'),
(6, 1, 'JavaScript Functions', 'A JavaScript function is a block of code designed to perform a particular task.\r\n\r\nA JavaScript function is executed when "something" invokes it (calls it).\r\n\r\nExample\r\nfunction myFunction(p1, p2) {\r\n    return p1 * p2;              // The function returns the product of p1 and p2\r\n}'),
(6, 2, 'JavaScript Function Syntax', 'A JavaScript function is defined with the function keyword, followed by a name, followed by parentheses ().\r\n\r\nFunction names can contain letters, digits, underscores, and dollar signs (same rules as variables).\r\n\r\nThe parentheses may include parameter names separated by commas:\r\n(parameter1, parameter2, ...)\r\n\r\nThe code to be executed, by the function, is placed inside curly brackets: {}\r\n\r\nfunction name(parameter1, parameter2, parameter3) {\r\n    code to be executed\r\n}\r\nFunction parameters are the names listed in the function definition.\r\n\r\nFunction arguments are the real values received by the function when it is invoked.\r\n\r\nInside the function, the arguments (the parameters) behave as local variables.\r\n\r\nA Function is much the same as a Procedure or a Subroutine, in other programming languages.'),
(6, 3, 'Function Return', 'When JavaScript reaches a return statement, the function will stop executing.\r\n\r\nIf the function was invoked from a statement, JavaScript will "return" to execute the code after the invoking statement.\r\n\r\nFunctions often compute a return value. The return value is "returned" back to the "caller":\r\n\r\nExample\r\nCalculate the product of two numbers, and return the result:\r\n\r\nvar x = myFunction(4, 3);        // Function is called, return value will end up in x\r\n\r\nfunction myFunction(a, b) {\r\n    return a * b;                // Function returns the product of a and b\r\n}\r\nThe result in x will be:\r\n\r\n12'),
(6, 4, 'Why Functions?', 'You can reuse code: Define the code once, and use it many times.\r\n\r\nYou can use the same code many times with different arguments, to produce different results.\r\n\r\nExample\r\nConvert Fahrenheit to Celsius:\r\n\r\nfunction toCelsius(fahrenheit) {\r\n    return (5/9) * (fahrenheit-32);\r\n}\r\ndocument.getElementById("demo").innerHTML = toCelsius(77);'),
(6, 5, 'Functions Used as Variable Values', 'Functions can be used the same way as you use variables, in all types of formulas, assignments, and calculations.\r\n\r\nExample\r\nInstead of using a variable to store the return value of a function:\r\n\r\nvar x = toCelsius(77);\r\nvar text = "The temperature is " + x + " Celsius";\r\nYou can use the function directly, as a variable value:\r\n\r\nvar text = "The temperature is " + toCelsius(77) + " Celsius";'),
(7, 1, 'HTML Events', 'An HTML event can be something the browser does, or something a user does.\r\n\r\nHere are some examples of HTML events:\r\n\r\nAn HTML web page has finished loading\r\nAn HTML input field was changed\r\nAn HTML button was clicked\r\nOften, when events happen, you may want to do something.\r\n\r\nJavaScript lets you execute code when events are detected.\r\n\r\nHTML allows event handler attributes, with JavaScript code, to be added to HTML elements.\r\n\r\nWith single quotes:\r\n\r\n<some-HTML-element some-event=''some JavaScript''>\r\nWith double quotes:\r\n\r\n<some-HTML-element some-event="some JavaScript">\r\nIn the following example, an onclick attribute (with code), is added to a button element:\r\n\r\nExample\r\n<button onclick="document.getElementById(''demo'').innerHTML = Date()">The time is?</button>'),
(7, 2, 'Common HTML Events', 'Here is a list of some common HTML events:\r\n\r\nEvent	Description\r\nonchange	An HTML element has been changed\r\nonclick	The user clicks an HTML element\r\nonmouseover	The user moves the mouse over an HTML element\r\nonmouseout	The user moves the mouse away from an HTML element\r\nonkeydown	The user pushes a keyboard key\r\nonload	The browser has finished loading the page'),
(7, 3, 'What can JavaScript Do?', '\r\nThings that should be done every time a page loads\r\nThings that should be done when the page is closed\r\nAction that should be performed when a user clicks a button\r\nContent that should be verified when a user inputs data\r\nAnd more ...\r\nMany different methods can be used to let JavaScript work with events:\r\n\r\nHTML event attributes can execute JavaScript code directly\r\nHTML event attributes can call JavaScript functions\r\nYou can assign your own event handler functions to HTML elements\r\nYou can prevent events from being sent or being handled\r\nAnd more ...\r\nYou will learn a lot more about events and event handlers in the HTML DOM chapters.\r\n\r\n'),
(8, 1, 'JavaScript Strings', 'A JavaScript string simply stores a series of characters like "John Doe".\r\n\r\nA string can be any text inside quotes. You can use single or double quotes:\r\n\r\nExample\r\nvar carname = "Volvo XC60";\r\nvar carname = ''Volvo XC60'';'),
(8, 2, 'String Length', 'The length of a string is found in the built in property length:\r\n\r\nExample\r\nvar txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";\r\nvar sln = txt.length;'),
(8, 3, 'Special Characters', 'Because strings must be written within quotes, JavaScript will misunderstand this string:\r\n\r\nvar y = "We are the so-called "Vikings" from the north."\r\nThe string will be chopped to "We are the so-called ".\r\n\r\nThe solution to avoid this problem, is to use the \\ escape character.\r\n\r\nThe backslash escape character turns special characters into string characters:\r\n\r\nExample\r\nvar x = ''It\\''s alright'';\r\nvar y = "We are the so-called \\"Vikings\\" from the north."'),
(8, 4, 'Strings Can be Objects', 'Normally, JavaScript strings are primitive values, created from literals: var firstName = "John"\r\n\r\nBut strings can also be defined as objects with the keyword new: var firstName = new String("John")\r\n\r\nExample\r\nvar x = "John";\r\nvar y = new String("John");\r\n\r\n// typeof x will return string\r\n// typeof y will return object\r\nDon''t create strings as objects. It slows down execution speed.\r\nThe new keyword complicates the code. This can produce some unexpected results:\r\n\r\nWhen using the == operator, equal strings are equal:\r\n\r\nExample\r\nvar x = "John";             \r\nvar y = new String("John");\r\n\r\n// (x == y) is true because x and y have equal values'),
(9, 1, 'JavaScript JSON', 'JSON is a format for storing and transporting data.\r\n\r\nJSON is often used when data is sent from a server to a web page.\r\n\r\nWhat is JSON?\r\nJSON stands for JavaScript Object Notation\r\nJSON is lightweight data interchange format\r\nJSON is language independent *\r\nJSON is "self-describing" and easy to understand\r\n* The JSON syntax is derived from JavaScript object notation syntax, but the JSON format is text only. Code for reading and generating JSON data can be written in any programming language.\r\n\r\nJSON Example\r\nThis JSON syntax defines an employees object: an array of 3 employee records (objects):\r\n\r\nJSON Example\r\n{\r\n"employees":[\r\n    {"firstName":"John", "lastName":"Doe"}, \r\n    {"firstName":"Anna", "lastName":"Smith"},\r\n    {"firstName":"Peter", "lastName":"Jones"}\r\n]\r\n}'),
(9, 2, 'JSON Syntax Rules', 'Data is in name/value pairs\r\nData is separated by commas\r\nCurly braces hold objects\r\nSquare brackets hold arrays'),
(9, 3, 'JSON Objects', 'JSON objects are written inside curly braces.\r\n\r\nJust like in JavaScript, objects can contain multiple name/value pairs:\r\n\r\n{"firstName":"John", "lastName":"Doe"}'),
(9, 4, 'JSON Arrays', 'JSON arrays are written inside square brackets.\r\n\r\nJust like in JavaScript, an array can contain objects:\r\n\r\n"employees":[\r\n    {"firstName":"John", "lastName":"Doe"}, \r\n    {"firstName":"Anna", "lastName":"Smith"}, \r\n    {"firstName":"Peter", "lastName":"Jones"}\r\n]\r\nIn the example above, the object "employees" is an array. It contains three objects.\r\n\r\nEach object is a record of a person (with a first name and a last name).'),
(9, 5, 'Converting a JSON Text to a JavaScript Object', 'A common use of JSON is to read data from a web server, and display the data in a web page.\r\n\r\nFor simplicity, this can be demonstrated using a string as input.\r\n\r\nFirst, create a JavaScript string containing JSON syntax:\r\n\r\nvar text = ''{ "employees" : ['' +\r\n''{ "firstName":"John" , "lastName":"Doe" },'' +\r\n''{ "firstName":"Anna" , "lastName":"Smith" },'' +\r\n''{ "firstName":"Peter" , "lastName":"Jones" } ]}'';\r\nThen, use the JavaScript built-in function JSON.parse() to convert the string into a JavaScript object:\r\n\r\nvar obj = JSON.parse(text);\r\nFinally, use the new JavaScript object in your page:\r\n\r\nExample\r\n<p id="demo"></p>\r\n\r\n<script>\r\ndocument.getElementById("demo").innerHTML =\r\nobj.employees[1].firstName + " " + obj.employees[1].lastName;\r\n</script>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ask`
--
ALTER TABLE `ask`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`index1`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `qinsert`
--
ALTER TABLE `qinsert`
  ADD PRIMARY KEY (`id`,`qno`);

--
-- Indexes for table `studreg`
--
ALTER TABLE `studreg`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `teachreg`
--
ALTER TABLE `teachreg`
  ADD PRIMARY KEY (`teacher_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
