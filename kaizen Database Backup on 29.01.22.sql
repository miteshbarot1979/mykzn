-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 09:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaizen`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nid` int(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dept` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`, `address`, `dept`, `degree`, `pic`) VALUES
(101, 'Mehadi', 'Hassan', 'mehadi@xyz.corp', '1234', '1997-08-13', 'Male', '01919', 12121, 'Razarbagh', 'IT', 'Head', 'images/me.png'),
(102, 'Test', 'Pilot', 'testpilot@gmail.com', '1234', '2018-01-01', 'Male', '0202', 303, 'Ad_______', 'CSE', 'CSE', 'images/no.jpg'),
(103, 'Steven', 'Wilson', 'wilson@xyz.corp', '1234', '1990-02-02', 'Male', '5252', 6262, 'Thames, UK', 'Creative', 'MSc', 'images/sw-google.png'),
(104, 'Guthrie', 'Govan', 'guthrie@xyz.corp', '1234', '1971-12-01', 'Male', '9595', 5959, 'Chemsford, USA', 'Creative', 'MSc', 'images/test.jpg'),
(105, 'Elon', 'Musk', 'elon@spacex.com', '1234', '1971-06-28', 'Male', '8585', 5858, 'LA, USA', 'SpaceTech', 'BSc', 'images/330px-Elon_Musk_Royal_Society.jpg'),
(106, 'Hacker', 'Man', 'hackerman@xyz.corp', '1234', '1990-02-02', 'Male', '7575', 5757, 'Underground, Dhaka', 'NetworkSecurity', 'MSc', 'images/hacker.png'),
(107, 'Wonder ', 'Woman', 'woman@xyz.corp', '1234', '1993-03-03', 'Female', '4545', 5454, 'USA', 'Defense ', 'MS', 'images/no.jpg'),
(108, 'Andrew', ' Ng', 'andrew@xyz.corp', '1234', '1976-04-16', 'Male', '758758', 857857, 'USA', 'AI', 'PhD', 'images/download.jpeg'),
(109, 'Ian ', 'Goodfellow', 'ian@xyz.corp', '1234', '1985-01-01', 'Male', '852852', 258258, 'USA', 'AI', 'PhD', 'images/1-5.jpg'),
(110, 'Christopher ', 'Manning', 'christopher@xyz.corp', '1234', '1965-09-18', 'Male', '147147', 741741, 'USA', 'NLP', 'PhD', 'images/download (1).jpeg'),
(111, 'Jon', 'Snow', 'john@xyz.corp', '1234', '2011-02-01', 'Male', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `emp_master`
--

CREATE TABLE `emp_master` (
  `Emp_Code` int(4) NOT NULL,
  `Emp_Name` varchar(50) NOT NULL,
  `Emp_Img` varchar(500) NOT NULL,
  `Emp_Add` varchar(200) NOT NULL,
  `Emp_Desig` text NOT NULL,
  `Emp_Dept` text NOT NULL,
  `Emp_Commit` text NOT NULL,
  `Emp_Apex` text NOT NULL,
  `Mobile` text NOT NULL,
  `Emp_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Employee Master Data';

--
-- Dumping data for table `emp_master`
--

INSERT INTO `emp_master` (`Emp_Code`, `Emp_Name`, `Emp_Img`, `Emp_Add`, `Emp_Desig`, `Emp_Dept`, `Emp_Commit`, `Emp_Apex`, `Mobile`, `Emp_Status`) VALUES
(92, 'BALACHANDRAN KUNJUKRISHNA NAIR', 'Image/92.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Officer', 'Adminsitration', 'No', 'No', '9377040695', ''),
(107, 'MUKESH CHANDUBHAI PATEL', 'Image/107.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'HMV Driver', 'Procurement', 'No', 'No', '9377040686', ''),
(115, 'HIMMAT KHODABHAI CHAUHAN', 'Image/115.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Plant', 'No', 'No', '9574855083', ''),
(120, 'MELABHAI BHIKHABHAI RABARI', 'Image/120.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9377040691', ''),
(125, 'CHATRASINH NARSINH DESAI', 'Image/125.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9924737925', ''),
(126, 'NARESH CHHOTUBHAI PATEL', 'Image/126.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Accounts', 'No', 'No', '9427469678', ''),
(132, 'DIPAK VINAYAK KHANZODE', 'Image/132.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Astt. Manager', 'AI & AHD', 'No', 'No', '9377040699', ''),
(133, 'VIJAY NAVINCHANDRA KAPADIA', 'Image/133.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'General Manager', 'General', 'No', 'No', '9377040683', ''),
(140, 'ASHOK MANIBHAI PATEL', 'Image/140.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Executive', 'Plant', 'No', 'No', '8347689904', ''),
(142, 'SANJAY GUNVANTRAI DESAI', 'Image/142.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Executive', 'Plant', 'No', 'No', '9638410142', ''),
(149, 'KISHOR SOMABHAI PATEL', 'Image/149.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Plant', 'No', 'No', '9712360765', ''),
(150, 'DHIRAJ VALLABHBHAI PATEL', 'Image/150.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Plant', 'No', 'No', '9925983490', ''),
(152, 'BHARAT DHIRUBHAI PATEL', 'Image/152.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Plant', 'No', 'No', '9714591795', ''),
(153, 'MUKESH ARVINDBHAI PATEL', 'Image/153.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Plant', 'No', 'No', '9979688263', ''),
(155, 'MUHAMAD FAKIRBHAI MANKADA', 'Image/155.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Plant', 'No', 'No', '9879241400', ''),
(157, 'SUMAN MAGANBHAI PATEL', 'Image/157.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Plant', 'No', 'No', '9898717625', ''),
(158, 'DHIRU MOHANBHAI NAIKA', 'Image/158.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Plant', 'No', 'No', '9978892380', ''),
(174, 'TUSHAR JAYANTIBHAI NAIK', 'Image/174.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Jr. Executive', 'Marketting', 'No', 'No', '9428162401', ''),
(175, 'ANIL ACHUTHAN NAIR', 'Image/175.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Plant', 'No', 'No', '9033605297', ''),
(181, 'BHARAT SOMABHAI PATEL', 'Image/181.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9879804967', ''),
(182, 'KAUSHIK LALLUBHAI PATEL', 'Image/182.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9428760780', ''),
(183, 'PRAKASH VASANTBHAI PATEL', 'Image/183.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9328956641', ''),
(184, 'DILIP RAMABHAI PATEL', 'Image/184.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9879644665', ''),
(186, 'ARVIND LAXMAN PATEL', 'Image/186.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9898218099', ''),
(187, 'KHAPU NANUBHAI PATEL', 'Image/187.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Jr. Executive', 'Marketting', 'No', 'No', '9979392969', ''),
(188, 'KETAN DILIPBHAI DESAI', 'Image/188.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9427155745', ''),
(192, 'BALWANTRAI JIBANJI PATEL', 'Image/192.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9377142256', ''),
(194, 'THAKOR LALLUBHAI AHIR', 'Image/194.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9428159992', ''),
(197, 'AMRUT CHHOTUBHAI PATEL', 'Image/197.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Jr. Executive', 'Marketting', 'No', 'No', '9428020895', ''),
(198, 'YOGESH BALVANTRAI VAIDYA', 'Image/198.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9925093173', ''),
(200, 'MANUBHAI BHIMABHAI PATEL', 'Image/200.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Cooperative Department', 'No', 'No', '9824525009', ''),
(203, 'PRAVIN BUDHABHAI AHIR', 'Image/203.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Adminsitration', 'No', 'No', '9974307475', ''),
(204, 'BALU BABUBHAI RATHOD', 'Image/204.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Marketting', 'No', 'No', '9825390121', ''),
(206, 'DIPAK KANTIBHAI PATEL', 'Image/206.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'General', 'No', 'No', '9427790557', ''),
(207, 'MOHANLAL VIRDICHAND VISHNOI', 'Image/207.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'General', 'No', 'No', '9558915363', ''),
(211, 'DHIRU KARSANBHAI PATEL', 'Image/211.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Plant', 'No', 'No', '9537172110', ''),
(213, 'ASHOK DAHYABHAI PATEL', 'Image/213.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9824519300', ''),
(223, 'JAGDISH THAKOREBHAI PATEL', 'Image/223.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Plant', 'No', 'No', '9879773949', ''),
(225, 'ISHWAR MANGABHAI PATEL', 'Image/225.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9824616993', ''),
(226, 'KALIDAS RAMBHAI AHIR', 'Image/226.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Plant', 'No', 'No', '9723606128', ''),
(231, 'NARENDRA NATHUBHAI PAREKH', 'Image/231.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9737783032', ''),
(232, 'ZAKIRHUSHEN GULAMMAHMAD SHAIKH', 'Image/232.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Plant', 'No', 'No', '9825573049', ''),
(233, 'NATU MANIBHAI PATEL', 'Image/233.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Plant', 'No', 'No', '9714259359', ''),
(241, 'SAROJBEN MOHANBHAI PATEL', 'Image/241.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Executive', 'AI & AHD', 'No', 'No', '9558675122', ''),
(247, 'SALIM AHMAD RAWAT', 'Image/247.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Plant', 'No', 'No', '9624932093', ''),
(250, 'CHHANABHAI MATHURBHAI KHANT', 'Image/250.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Purchase', 'No', 'No', '9726141073', ''),
(252, 'MAHESH BALUBHAI AHIR', 'Image/252.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Plant', 'No', 'No', '9925618848', ''),
(253, 'VINOD NATHUBHAI PATEL', 'Image/253.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Plant', 'No', 'No', '9979139038', ''),
(254, 'YUNUS AHMAD RAWAT', 'Image/254.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '8200652521', ''),
(255, 'DINESH BUDHABHAI PATEL', 'Image/255.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '8347524574', ''),
(258, 'NANU SHANKARBHAI PATEL', 'Image/258.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Plant', 'No', 'No', '9925997663', ''),
(259, 'HASMUKH NARANBHAI PATEL', 'Image/259.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Plant', 'No', 'No', '9904586967', ''),
(261, 'BHIKHU DAHYABHAI LAD', 'Image/261.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Plant', 'No', 'No', '9429143989', ''),
(262, 'DHANSUKH CHIMANBHAI PATEL', 'Image/262.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Jr. Officer', 'Marketting', 'No', 'No', '9377040693', ''),
(263, 'BHARAT NICHHABHAI PATEL', 'Image/263.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9879756566', ''),
(267, 'HARISH RAMANLAL NAIK', 'Image/267.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Jr. Officer', 'Accounts', 'No', 'No', '9377421763', ''),
(269, 'RAMESH DHANJIBHAI PATEL', 'Image/269.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Jr. Executive', 'Plant', 'No', 'No', '9825567782', ''),
(270, 'CHAMPAK MANGABHAI PATEL', 'Image/270.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Plant', 'No', 'No', '9904603032', ''),
(271, 'RAKESHBHAI MANIBHAI PATEL', 'Image/271.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9978021315', ''),
(272, 'SHAILESH VASANT AHIR', 'Image/272.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9998139605', ''),
(273, 'ASHOK AMRUTSINH DESAI', 'Image/273.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Adminsitration', 'No', 'No', '9998139605', ''),
(274, 'JAISINH SHANKARSINH RAJPUT', 'Image/274.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Sr. Vet. Officer', 'AI & AHD', 'No', 'No', '9824131059', ''),
(275, 'NAVINKUMAR C SHRIVASTAVA', 'Image/275.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Astt. Manager', 'General', 'No', 'No', '9925080750', ''),
(276, 'MANUBHAI SUKKARBHAI RATHOD', 'Image/276.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- II', 'Adminsitration', 'No', 'No', '9909924746', ''),
(278, 'DHANSUKH RAMABHAI PATEL', 'Image/278.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9925052082', ''),
(279, 'BABUBHAI CHHOTUBHAI PATEL', 'Image/279.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9925277513', ''),
(280, 'VIKRAM RAVJIBHAI PATEL', 'Image/280.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9879889541', ''),
(281, 'LAKSHMAN FULJIBHAI PATEL', 'Image/281.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Accounts', 'No', 'No', '9904288264', ''),
(282, 'RAMESH LALBHAI AHIR', 'Image/282.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9428122134', ''),
(283, 'DINESH NANUBHAI PATEL', 'Image/283.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Marketting', 'No', 'No', '9824722503', ''),
(284, 'DIPAK LALSINH PARMAR', 'Image/284.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Jr. Executive', 'Marketting', 'No', 'No', '9824386686', ''),
(286, 'RAMESH JIVANJIBHAI PATEL', 'Image/286.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant Executive', 'Plant', 'No', 'No', '9824775862', ''),
(287, 'POONAMCHAND HUKAMCHAND VISHNOI', 'Image/287.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '7698031037', ''),
(288, 'JAYANTI LALJI CHAUHAN', 'Image/288.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9429058466', ''),
(291, 'SUMAN PUNABHAI HALPATI', 'Image/291.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- I', 'Marketting', 'No', 'No', '9824348061', ''),
(292, 'MAHESH MOHANBHAI NAIKA', 'Image/292.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9408649426', ''),
(293, 'RAJU MOHANBHAI NAIKA', 'Image/293.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9904080431', ''),
(296, 'CHAMPAK SURJIBHAI PATEL', 'Image/296.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '7284959631', ''),
(297, 'DHIRU BALUBHAI PATEL', 'Image/297.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '8141383329', ''),
(298, 'RAMESH GULABBHAI PATEL', 'Image/298.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9879653496', ''),
(302, 'ARVIND CHHOTUBHAI', 'Image/302.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '8690794593', ''),
(303, 'MAHESH MANIBHAI PATEL', 'Image/303.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9737970085', ''),
(305, 'ARJUN SOMABHAI PATEL', 'Image/305.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9978356305', ''),
(307, 'UMESH MANGTABHAI NAIKA', 'Image/307.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9904657612', ''),
(308, 'PRAVIN RAVJIBHAI PATEL', 'Image/308.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9904791339', ''),
(313, 'ARJUN MAGANBHAI PATEL', 'Image/313.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '8141502147', ''),
(314, 'VIKRAM MANGABHAI PATEL', 'Image/314.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9924614988', ''),
(315, 'BABU LALLUBHAI PATEL', 'Image/315.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9924995492', ''),
(316, 'RAJU PREMABHAI PATEL', 'Image/316.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9724699560', ''),
(317, 'BHAGU RAMANBHAI PATEL', 'Image/317.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9925542286', ''),
(318, 'RAVINDRA BHAGUBHAI PATEL ', 'Image/318.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9904623323', ''),
(319, 'MUKESH GOVINDBHAI PATEL', 'Image/319.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '8347602892', ''),
(320, 'BHAGU CHHANABHAI HALPATI', 'Image/320.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9725840349', ''),
(321, 'MAHESH BHAGWANBHAI PATEL', 'Image/321.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '8758046454', ''),
(322, 'BHIKHU KALABHAI AHIR', 'Image/322.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9909147167', ''),
(324, 'BHARAT BECHARBHAI PATEL', 'Image/324.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Adminsitration', 'No', 'No', '9913222583', ''),
(326, 'GIRISH DINUBHAI PATEL', 'Image/326.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9979760047', ''),
(327, 'RAJESH SHANKARBHAI TALAVIA', 'Image/327.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9924113823', ''),
(329, 'VINOD MAGANBHAI PATEL', 'Image/329.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9979334482', ''),
(330, 'HARUN KARIM MULLA', 'Image/330.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9925837842', ''),
(339, 'SURESH MANUBHAI PATEL', 'Image/339.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9909530854', ''),
(340, 'SHAILESH SHANKARBHAI PATEL', 'Image/340.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9574621746', ''),
(342, 'ARJUN PARSHOTAMBHAI PATEL', 'Image/342.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Marketting', 'No', 'No', '9429274189', ''),
(343, 'SURESH RAMABHAI PATEL', 'Image/343.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9427867370', ''),
(344, 'VALLABH MAGANBHAI PATEL', 'Image/344.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9925983478', ''),
(347, 'CHANDRAKANT MANDABHAI PATEL', 'Image/347.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9979987726', ''),
(348, 'LALUBHAI MANGABHAI PATEL', 'Image/348.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '8140244220', ''),
(350, 'JAGUBHAI MANUBHAI PATEL', 'Image/350.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '7567788126', ''),
(352, 'RAMESH RAMABHAI PATEL', 'Image/352.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9909132660', ''),
(353, 'MANU KARSANBHAI PATEL', 'Image/353.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9727658588', ''),
(356, 'DIPAK VINUBHAI PATEL', 'Image/356.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '7874156017', ''),
(357, 'DHIRU DAHYABHAI AHIR', 'Image/357.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9974453654', ''),
(358, 'ARVIND BHAGUBHAI PATEL', 'Image/358.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9913588906', ''),
(361, 'MAADHUBHAI GOPALBHAI PATEL', 'Image/361.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9638595660', ''),
(362, 'ASHOK MAGANBHAI PATEL', 'Image/362.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9904654398', ''),
(363, 'HARISH RAMANBHAI PATEL', 'Image/363.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9978897401', ''),
(364, 'HARISH MANIBHAI PATEL', 'Image/364.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9428163364', ''),
(365, 'SHAILESH VALJIBHAI PATEL', 'Image/365.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9909208021', ''),
(366, 'SATHISH BHAGUBHAI AHIR', 'Image/366.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '7600143044', ''),
(367, 'HITESH JALADSINH PARMAR', 'Image/367.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9428759804', ''),
(368, 'VIJAY MAGANBHAI PATEL', 'Image/368.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9724158144', ''),
(369, 'MANGU KHALPABHAI PATEL', 'Image/369.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '8140276489', ''),
(370, 'CHANDU VINUBHAI PATEL', 'Image/370.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'General', 'No', 'No', '9979987664', ''),
(371, 'NANU CHHIBABHAI AHIR', 'Image/371.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9426320848', ''),
(372, 'UMESH RAMANBHAI PATEL', 'Image/372.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9909131145', ''),
(373, 'JAGU SOBHANBHAI PATEL', 'Image/373.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9913594403', ''),
(374, 'MAHENDRA DAHYABHAI AHIR', 'Image/374.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9909221429', ''),
(376, 'MANU RANCHHODBHAI RATHOD', 'Image/376.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9638682220', ''),
(377, 'SHAILESH DHIRUBHAI PATEL', 'Image/377.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9904654389', ''),
(379, 'ASHOK RAMABHAI PATEL', 'Image/379.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9979987565', ''),
(381, 'SOMABHAI RAVJIBHAI RATHOD', 'Image/381.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9016266205', ''),
(382, 'PRAKASH BABUBHAI PATEL', 'Image/382.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9879921067', ''),
(383, 'DIPAK BHIKHUBHAI PATEL', 'Image/383.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9737393866', ''),
(384, 'DIPAK UNKABHAI TALAVIA', 'Image/384.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9662178119', ''),
(385, 'ASHOKKUMAR RAMANBHAI RATHOD', 'Image/385.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '7600396017', ''),
(387, 'ZINABHAI SHANKARBHAI PATEL', 'Image/387.JPG', 'VASUDHARA DAIRY, ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9904979167', ''),
(388, 'BALU CHANDUBHAI PATEL', 'Image/388.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9723835033', ''),
(390, 'MANHAR CHHOTUBHAI PATEL', 'Image/390.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9712034184', ''),
(395, 'BHIKHUBHAI MANIBHAI PATEL', 'Image/395.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9712312657', ''),
(397, 'JITUBHAI DEVEJIBHAI PATEL', 'Image/397.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9925982754', ''),
(398, 'HASMUKH DAYABHAI PATEL', 'Image/398.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9825724336', ''),
(399, 'NILESHKUMAR JASWANTBHAI PATEL', 'Image/399.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9687908097', ''),
(400, 'DILIP RAMBHAI PATEL', 'Image/400.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9979630094', ''),
(401, 'RAKESH DHIRUBHAI PATEL', 'Image/401.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9879435641', ''),
(402, 'BIPINBHAI CHHIMANBHAI PATEL', 'Image/402.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9824880346', ''),
(403, 'MANOJKUMAR ARJUNBHAI GARASIA', 'Image/403.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '8347894185', ''),
(404, 'BHARATBHAI SHANKERBHAI PATEL', 'Image/404.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'General', 'No', 'No', '9909312882', ''),
(410, 'MAHESH MAGANBHAI PATEL', 'Image/410.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9687757635', ''),
(412, 'DILIPBHAI LALLUBHAI CHAUHAN', 'Image/412.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Adminsitration', 'No', 'No', '9427948307', ''),
(413, 'RAJUBHAI SOMABHAI RATHOD', 'Image/413.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '7874422428', ''),
(417, 'RAJESH LALLUBHAI SOLANKI', 'Image/417.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9925127898', ''),
(418, 'AMBU GAMANBHAI PATEL', 'Image/418.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9909861773', ''),
(420, 'UTTAMBHAI CHANDUBHAI PATEL', 'Image/420.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9428013549', ''),
(421, 'MAHESHBHAI RAMANBHAI PATEL', 'Image/421.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'AI & AHD', 'No', 'No', '9824937747', ''),
(422, 'GIRISHBHAI NARSINHBHAI PATEL', 'Image/422.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'AI & AHD', 'No', 'No', '9924419712', ''),
(423, 'BHUPENDRA MANIBHAI RATHOD', 'Image/423.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'AI & AHD', 'No', 'No', '9825025583', ''),
(424, 'VIKAS GILABBHAI VASHI', 'Image/424.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- I', 'Adminsitration', 'No', 'No', '9978141230', ''),
(426, 'SHANKAR DHIRUBHAI PATEL', 'Image/426.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9909631476', ''),
(427, 'BABUBHAI DHIRUBHAI PATEL', 'Image/427.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9737163587', ''),
(430, 'ANIL PIDIYABHAI AHIR', 'Image/430.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9427793897', ''),
(431, 'JAYESH AMRATBHAI PATEL', 'Image/431.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9925367353', ''),
(432, 'MANHARBHAI CHHANABHAI PATEL', 'Image/432.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'General', 'No', 'No', '9925364092', ''),
(435, 'KANU JOGIBHAI PATEL', 'Image/435.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9099305650', ''),
(439, 'HARSHAD KHANDUBHAI PATEL', 'Image/439.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9825843508', ''),
(440, 'DINESHBHAI NANUBHAI AHIR', 'Image/440.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9879723540', ''),
(442, 'KHANDU RAMABHAI PATEL', 'Image/442.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '8140860141', ''),
(443, 'RATILAL DAHYABHAI PATEL', 'Image/443.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- I', 'Marketting', 'No', 'No', '9408189480', ''),
(444, 'MAHESH JAISINHBHAI PATEL', 'Image/444.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Marketting', 'No', 'No', '9978856881', ''),
(445, 'MANGUBHAI NAGJIBHAI PATEL', 'Image/445.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Marketting', 'No', 'No', '9429532158', ''),
(446, 'KALPESHBHAI NARANBHAI RATHOD', 'Image/446.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Accounts', 'No', 'No', '9824787962', ''),
(447, 'MAHENDRA RAMABHAI PATEL', 'Image/447.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9879239029', ''),
(448, 'RAMESHBHAI HIRABHAI PATEL', 'Image/448.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- IV', 'Plant', 'No', 'No', '9913063870', ''),
(449, 'KISHOREBHAI BIKHUBHAI BARIYA', 'Image/449.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Adminsitration', 'No', 'No', '9898386272', ''),
(450, 'THAKORE MANGABHAI AHIR', 'Image/450.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Marketting', 'No', 'No', '9898620607', ''),
(451, 'SURESH DHEDIYABHAI RATHOD', 'Image/451.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Marketting', 'No', 'No', '9429116558', ''),
(452, 'HUSEIN AHMAD MANSOOR', 'Image/452.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Marketting', 'No', 'No', '9978005681', ''),
(463, 'ANTONY AKKARA OUSEPH', 'Image/463.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Sr. Tech. Officer', 'General', 'No', 'No', '9328197506', ''),
(464, 'HARISHKUMAR VISHNUSWARUP GUPTA', 'Image/464.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Sr. Tech. Officer', 'Plant', 'No', 'No', '9428013981', ''),
(466, 'DIPAK BHIKHUBHAI PATEL', 'Image/466.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Plant', 'No', 'No', '9825831224', ''),
(467, 'RAKESH HARGOVINDBHAI LAD', 'Image/467.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Marketting', 'No', 'No', '9879553837', ''),
(468, 'CHIRAG HASHMUKHLAL JARIWALA', 'Image/468.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- III', 'Marketting', 'No', 'No', '9295754553', ''),
(469, 'ASHOKKUMAR RAMLAL SONDHIYA', 'Image/469.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Sr. Tech. Officer', 'Plant', 'No', 'No', '7574802084', ''),
(490, 'RAKESHKUMAR MURARIPRASAD SINGH', 'Image/490.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Sr. Tech. Officer', 'General', 'No', 'No', '9825246054', ''),
(491, 'SNEHAL MAFATBHAI PATEL', 'Image/491.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant Executive', 'Adminsitration', 'No', 'No', '9723388559', ''),
(493, 'JITESHKUMAR BIPINCHANDRA PATEL', 'Image/493.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Executive', 'Marketting', 'No', 'No', '9824364125', ''),
(494, 'JIGNESH PRAMODCHANDRA DESAI', 'Image/494.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Executive', 'Marketting', 'No', 'No', '9377040662', ''),
(501, 'MONISH SUNIL AHALE', 'Image/501.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Sr. Store Officer', 'Plant', 'No', 'No', '9665063713', ''),
(502, 'PAVAN RAMESHRAO PADHYE', 'Image/502.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Sr. Tech. Officer', 'Plant', 'No', 'No', '9824561771', ''),
(503, 'NITIN SURESH MIRASE', 'Image/503.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9375982028', ''),
(504, 'VIKASH BRAHAMDEOPRASAD SEN', 'Image/504.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Sr. Tech. Officer', 'Plant', 'No', 'No', '9374676893', ''),
(508, 'ANANDKUMAR CHIMANLAL MAHETA', 'Image/508.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Sr. Tech. Officer', 'Plant', 'No', 'No', '9924358017', ''),
(509, 'SARANGADHAR DEVIDASRAO INGOLE', 'Image/509.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9173563377', ''),
(511, 'VIMAL MAGANBHAI PATEL', 'Image/511.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9724430430', ''),
(512, 'SANJAYKUMAR MANUBHAI MAKWANA', 'Image/512.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Sr. Tech. Officer', 'Plant', 'No', 'No', '9913886442', ''),
(517, 'ASMA GULAMNABI VHORA', 'Image/517.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Executive', 'General', 'No', 'No', '9328022699', ''),
(518, 'KUMAR RAJEEV RANJAN', 'Image/518.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9904340182', ''),
(537, 'PREM DEEWAKAR', 'Image/537.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9375480075', ''),
(549, 'NIRAVKUMAR DIPAKBHAI NAIK', 'Image/549.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Executive', 'Purchase', 'No', 'No', '9375286485', ''),
(550, 'MANOHARSINH PRABHATSINH CHAUHAN', 'Image/550.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant Executive', 'AI & AHD', 'No', 'No', '9427140674', ''),
(551, 'SANJAYKUMAR MOHANBHAI LAD', 'Image/551.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Assistant- I', 'Procurement', 'No', 'No', '7016458733', ''),
(552, 'NILESHKUMAR ISHWARBHAI CHAUDHARY', 'Image/552.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Jr. Executive', 'EDP', 'No', 'No', '9825463008', ''),
(553, 'MITESHKUMAR BIPINCHANDRA BAROT', 'Image/553.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Officer', 'Procurement', 'No', 'No', '9909442484', ''),
(554, 'JITENDRAKUMAR RANCHHOD PATEL', 'Image/554.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'LMV Driver Gr 3', 'Adminsitration', 'No', 'No', '9377040677', ''),
(558, 'DHAVAL KANTILAL PATEL', 'Image/558.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9725309198', ''),
(560, 'PRAKASH MAHESHKUMAR JOSHI', 'Image/560.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Astt. Manager', 'EDP', 'No', 'No', '9327913126', ''),
(561, 'CHETANBHAI NATUBHAI PATEL', 'Image/561.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9978328236', ''),
(562, 'VEDPRAKASH SHAMBHUNATH PATEL', 'Image/562.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9510895889', ''),
(563, 'DHRUVKUMAR MEHULKUMAR RAVAL', 'Image/563.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9712109238', ''),
(564, 'NITINKUMAR MUKESHKUMAR AGRAWAL', 'Image/564.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '7990847218', ''),
(565, 'PRIYANKKUMAR PRAVINBHAI PATEL', 'Image/565.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9737206089', ''),
(566, 'SACHIN NANDKISHOR GADEKAR', 'Image/566.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '8624959589', ''),
(567, 'VAIBHAVI DAYA MANGUDA', 'Image/567.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '8153946247', ''),
(570, 'MOHITKUMAR RAMJIBHAI CHAUDHARI', 'Image/570.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9099483635', ''),
(571, 'DARSHAN PRABODHBHAI MEHTA', 'Image/571.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Manager', 'Project', 'No', 'No', '9377040688', ''),
(572, 'ASHISHKUMAR HARESHBHAI BHAVSAR', 'Image/572.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Officer', 'Accounts', 'No', 'No', '9898562022', ''),
(573, 'PARESHBHAI BADJIBHAI BHAMAT', 'Image/573.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '8306095596', ''),
(574, 'MAYURBHAI KANTIBHAI ASARI', 'Image/574.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9904883182', ''),
(575, 'PIYUSHKUMAR SARTANBHAI PARMAR', 'Image/575.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '8154985753', ''),
(576, 'NIKULKUMAR DILIPBHAI PATEL', 'Image/576.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '8238794756', ''),
(577, 'SWAPNIL JITENDRA GAYAKWAD', 'Image/577.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9561682761', ''),
(578, 'VIVEK PURANLAL VINCHURKAR', 'Image/578.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '8698533459', ''),
(579, 'SATYAKAM HIRABHAI PATEL', 'Image/579.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '8866572493', ''),
(580, 'DHRUVKUMAR PARSOTTAMBHAI PARMAR', 'Image/580.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '8347247393', ''),
(581, 'DHRUV BHUPESHKUMAR RATHOD', 'Image/581.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '9157888569', ''),
(582, 'MRUGENDRA SURYAKANT PANDEY', 'Image/582.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'OSD', 'Procurement', 'No', 'No', '9665063713', ''),
(583, 'BHAVIK CHANDRAKANT PATEL', 'Image/583.JPG', 'VASUDHARA DAIRY,ALIPORE                                                ', 'Tech. Officer', 'Plant', 'No', 'No', '7359638499', ''),
(991, 'PATEL DHRUVI K', 'Image/20210901_111540.jpg', '          TALODH GANTI FALIYA ,BILIMORA                                      ', 'Officer', 'EDP', 'Yes', 'No', '7600146491', ''),
(992, 'PATEL KRINI S', 'Image/20210901_110110.jpg', '     TALAVCHORA                                            ', 'Officer', 'EDP', 'Yes', 'No', '7283866743', ''),
(993, 'PATEL VISHVA M', 'Image/20210901_111507.jpg', '                                                RANVERI KHURD ZADI FALIYA', 'Officer', 'EDP', 'Yes', 'No', '7990143420', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kaizen_mast`
--

CREATE TABLE `kaizen_mast` (
  `code` int(4) NOT NULL,
  `Name` text NOT NULL,
  `desig` text NOT NULL,
  `dept` text NOT NULL,
  `comm` text NOT NULL,
  `App` text NOT NULL,
  `MGroup` text NOT NULL,
  `FromNo` int(5) NOT NULL,
  `Kdate` date NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `Safe` text NOT NULL,
  `Quality` text NOT NULL,
  `CSati` text NOT NULL,
  `STime` text NOT NULL,
  `Waste` text NOT NULL,
  `Exp` text NOT NULL,
  `Main` text NOT NULL,
  `Improve` text NOT NULL,
  `Beauty` text NOT NULL,
  `Trust` text NOT NULL,
  `validity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `emp_master`
--
ALTER TABLE `emp_master`
  ADD PRIMARY KEY (`Emp_Code`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kaizen_mast`
--
ALTER TABLE `kaizen_mast`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
