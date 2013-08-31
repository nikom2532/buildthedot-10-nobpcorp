-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2013 at 09:16 PM
-- Server version: 5.1.67
-- PHP Version: 5.3.24

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buildthe_nobpcorp`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildthedot_nobp_account`
--

CREATE TABLE IF NOT EXISTS `buildthedot_nobp_account` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'sha1(md5("$password")).md5(sha1("$password"))',
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `admin_status` varchar(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'y/n only',
  `account_enable` varchar(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'y/n only',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `buildthedot_nobp_account`
--

INSERT INTO `buildthedot_nobp_account` (`id`, `username`, `password`, `name`, `admin_status`, `account_enable`) VALUES
(1, 'a', '6f9b0a55df8ac28564cb9f63a10be8af6ab3f7c277de54ccf56eb6f7dbf99e4d3be949ab', 'a', 'y', 'y'),
(2, 'b', 'ef7ad6c1faf1e46a706cd0615ada442bbc570b0e7014de06693eca5c7a6f258b98fa2048', 'b', 'y', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `buildthedot_nobp_item`
--

CREATE TABLE IF NOT EXISTS `buildthedot_nobp_item` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `subgroup_id` varchar(100) CHARACTER SET latin1 NOT NULL,
  `item_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `image_path` varchar(200) CHARACTER SET latin1 NOT NULL,
  `pdf_link_status` varchar(1) CHARACTER SET latin1 NOT NULL COMMENT 'only y,n',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=111 ;

--
-- Dumping data for table `buildthedot_nobp_item`
--

INSERT INTO `buildthedot_nobp_item` (`id`, `subgroup_id`, `item_name`, `image_path`, `pdf_link_status`) VALUES
(1, '1', 'General & Industrial Label', 'label_1.jpg', 'F'),
(2, '1', 'Laboratory Labels', 'label_2.jpg', 'F'),
(3, '1', 'Tamper Indicating Labels', 'label_3.jpg', 'F'),
(4, '1', 'Circuit Board & Component Labels', 'label_4.jpg', 'F'),
(5, '1', 'Circuit Board & Component Labels', 'label_5.jpg', 'F'),
(6, '1', 'View All Printable Labels', 'label_6.jpg', 'F'),
(7, '2', 'Voice/Data Label', 'wiremark_1.jpg', 'F'),
(8, '2', 'Cable Label', 'wiremark_2.jpg', 'F'),
(9, '2', 'Workstation Label', 'wiremark_3.jpg', 'F'),
(10, '2', 'Terminal Block Markers', 'wiremark_4.jpg', 'F'),
(11, '2', 'Wire & Cable Flags', 'wiremark_5.jpg', 'F'),
(12, '2', 'Wire & Cable Marker Carriers', 'wiremark_6.jpg', 'F'),
(13, '2', 'Wire & Cable Sleeves', 'wiremark_7.jpg', 'F'),
(14, '2', 'Wire & Cable Tags', 'wiremark_8.jpg', 'F'),
(15, '2', 'Raised Panel Labels', 'wiremark_9.jpg', 'F'),
(16, '2', 'Wire & Cable Tags', 'wiremark_10.jpg', 'F'),
(17, '3', 'Chemical Labels', 'ss_label_0.jpg', 'F'),
(18, '3', 'Static Awareness', 'ss_label_1.jpg', 'F'),
(19, '3', 'Cabinet Labels', 'ss_label_2.jpg', 'F'),
(20, '3', 'Electrical Labels', 'ss_label_3.jpg', 'F'),
(21, '3', 'Asbestos Labels', 'ss_label_4.jpg', 'F'),
(22, '3', 'Container Labels', 'ss_label_5.jpg', 'F'),
(23, '3', 'Carbon Dioxide Signs (CO2)', 'ss_label_6.jpg', 'F'),
(24, '3', 'Electrical Hazard Signs', 'ss_label_7.jpg', 'F'),
(25, '3', 'Photoluminescent Exit Signs', 'ss_label_8.jpg', 'F'),
(26, '3', 'Safety Equipment Labels', 'ss_label_9.jpg', 'F'),
(27, '3', 'Warning & Prohibition Labels', 'ss_label_10.jpg', 'F'),
(28, '3', 'Safety & Facility Signs', 'ss_label_11.jpg', 'F'),
(29, '3', 'Admittance Signs', 'ss_label_12.jpg', 'F'),
(30, '3', 'Alert Signs', 'ss_label_13.jpg', 'F'),
(31, '3', 'Radiation Signs', 'ss_label_14.jpg', 'F'),
(32, '3', 'Security Signs', 'ss_label_15.jpg', 'F'),
(33, '3', 'Ear Protection Signs', 'ss_label_16.jpg', 'F'),
(34, '3', 'Fire Signs', 'ss_label_17.jpg', 'F'),
(35, '3', 'General Exit & Directional Signs', 'ss_label_18.jpg', 'F'),
(36, '4', 'HandiMark Portable Label Makers', 's_print_1.jpg', 'T'),
(37, '4', 'MiniMark Industrial Label Printer', 's_print_2.jpg', 'T'),
(38, '4', 'GlobalMark Industrial Label Makers', 's_print_3.jpg', 'T'),
(39, '5', 'BMP 21 Label Printer', 'wm_print_1.jpg', 'T'),
(40, '5', 'IDXPERT Labeling Printers ', 'wm_print_2.jpg', 'T'),
(41, '6', 'Bradyprinter 1244 Printers Bradyprinter 1344 Printers', 'bc_print_1.jpg', 'T'),
(42, '6', 'Brady IP Thermal Transfer Printers', 'bc_print_2.jpg', 'T'),
(43, '7', '', 'print_oth1.jpg', 'F'),
(44, '7', '', 'print_oth2.jpg', 'F'),
(45, '8', 'Clamp-On Breaker Lockouts ', 'el_lockout_1.jpg', 'F'),
(46, '8', 'Miniature Circuit Breaker Lockouts ', 'el_lockout_2.jpg', 'F'),
(47, '9', 'Universal Valve Lockout ', 'vl_lock_1.jpg', 'F'),
(48, '9', 'Prinzing Ball Valve Lockout ', 'vl_lock_2.jpg', 'F'),
(49, '10', 'Lockout Tagout', 'sta_lock_1.jpg', 'F'),
(50, '10', 'Prinzing Industrial Strength Lockout Station', 'sta_lock_2.jpg', 'F'),
(51, '11', 'Group Lockout', 'tag_lock_1.jpg', 'F'),
(52, '11', 'Portable Lock Boxes', 'tag_lock_2.jpg', 'F'),
(53, '12', 'Lockout Clip Board', 'padlock_0.jpg', 'F'),
(54, '12', 'Non Conductive Lockout Hasps', 'padlock_1.jpg', 'F'),
(55, '13', '', 'lockout_oth0.jpg', 'F'),
(56, '13', '', 'lockout_oth1.jpg', 'F'),
(57, '14', '', 'electrical1.gif', 'F'),
(58, '14', '', 'electrical2.gif', 'F'),
(59, '14', '', 'electrical3.gif', 'F'),
(60, '14', '', 'electrical4.gif', 'F'),
(61, '14', '', 'electrical5.gif', 'F'),
(62, '14', '', 'electrical6.gif', 'F'),
(63, '14', '', 'electrical7.gif', 'F'),
(64, '14', '', 'electrical8.gif', 'F'),
(65, '14', '', 'electrical9.gif', 'F'),
(66, '14', '', 'electrical10.gif', 'F'),
(67, '14', '', 'electrical11.gif', 'F'),
(68, '14', '', 'electrical12.gif', 'F'),
(69, '14', '', 'electrical13.gif', 'F'),
(70, '14', '', 'electrical14.gif', 'F'),
(71, '14', '', 'electrical15.gif', 'F'),
(72, '14', '', 'electrical16.gif', 'F'),
(73, '14', '', 'electrical17.gif', 'F'),
(74, '14', '', 'electrical18.gif', 'F'),
(75, '14', '', 'electrical19.gif', 'F'),
(76, '14', '', 'electrical20.gif', 'F'),
(77, '14', '', 'electrical21.gif', 'F'),
(78, '14', '', 'electrical22.gif', 'F'),
(79, '14', '', 'electrical23.gif', 'F'),
(80, '14', '', 'electrical24.gif', 'F'),
(81, '14', '', 'electrical25.gif', 'F'),
(82, '14', '', 'electrical26.gif', 'F'),
(83, '14', '', 'electrical27.gif', 'F'),
(84, '14', '', 'electrical28.gif', 'F'),
(85, '14', '', 'electrical29.gif', 'F'),
(86, '14', '', 'electrical30.gif', 'F'),
(87, '14', '', 'electrical31.gif', 'F'),
(88, '14', '', 'electrical32.gif', 'F'),
(89, '14', '', 'electrical33.gif', 'F'),
(90, '14', '', 'electrical34.gif', 'F'),
(91, '14', '', 'electrical35.gif', 'F'),
(92, '14', '', 'electrical36.gif', 'F'),
(93, '14', '', 'electrical37.gif', 'F'),
(94, '14', '', 'electrical38.gif', 'F'),
(95, '14', '', 'electrical39.gif', 'F'),
(96, '14', '', 'electrical40.gif', 'F'),
(97, '14', '', 'electrical41.gif', 'F'),
(98, '14', '', 'electrical42.gif', 'F'),
(99, '14', '', 'electrical43.gif', 'F'),
(100, '14', '', 'electrical44.gif', 'F'),
(101, '14', '', 'electrical45.gif', 'F'),
(102, '14', '', 'electrical46.gif', 'F'),
(103, '15', '', 'bradyglo0.jpg', 'F'),
(104, '15', '', 'bradyglo1.1.jpg', 'F'),
(105, '16', '', 'pipemaker0.jpg', 'F'),
(106, '16', '', 'pipemaker1.jpg', 'F'),
(107, '17', '', 'safety_sign0_resize.jpg', 'F'),
(108, '17', '', 'safety_sign1_resize.jpg', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `buildthedot_nobp_item_group`
--

CREATE TABLE IF NOT EXISTS `buildthedot_nobp_item_group` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `buildthedot_nobp_item_group`
--

INSERT INTO `buildthedot_nobp_item_group` (`id`, `group_name`) VALUES
(1, 'Label'),
(2, 'Printer'),
(3, 'Lockout'),
(4, 'Electrical'),
(5, 'Safety Signs');

-- --------------------------------------------------------

--
-- Table structure for table `buildthedot_nobp_item_pdf`
--

CREATE TABLE IF NOT EXISTS `buildthedot_nobp_item_pdf` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `item_id` int(50) NOT NULL,
  `pdf_link` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `buildthedot_nobp_item_subgroup`
--

CREATE TABLE IF NOT EXISTS `buildthedot_nobp_item_subgroup` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `group_id` int(50) NOT NULL,
  `subgroup_name` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `buildthedot_nobp_item_subgroup`
--

INSERT INTO `buildthedot_nobp_item_subgroup` (`id`, `group_id`, `subgroup_name`) VALUES
(1, 1, 'Barcode Label'),
(2, 1, 'Wiremark Label'),
(3, 1, 'Safety Signs Label'),
(4, 2, 'Safety Printer'),
(5, 2, 'Wiremark Printer'),
(6, 2, 'Barcode Printer'),
(7, 2, 'Other Printer'),
(8, 3, 'Electrical Lockou'),
(9, 3, 'Valve Lockout'),
(10, 3, 'Log out Station'),
(11, 3, 'Tags/Group Lock Bock'),
(12, 3, 'Padlock/hasps'),
(13, 3, 'Others'),
(14, 4, 'Electrical'),
(15, 5, 'Brady Glo'),
(16, 5, 'Pipe Maker'),
(17, 5, 'Sefety Signs');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
