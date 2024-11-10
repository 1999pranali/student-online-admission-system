-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 04:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `r_id` int(11) DEFAULT NULL,
  `ename` varchar(70) DEFAULT NULL,
  `board` varchar(70) DEFAULT NULL,
  `clgname` varchar(70) DEFAULT NULL,
  `edugap` varchar(70) DEFAULT NULL,
  `reason` varchar(70) DEFAULT NULL,
  `examseat` varchar(70) DEFAULT NULL,
  `tmark` int(11) DEFAULT NULL,
  `outof` int(11) DEFAULT NULL,
  `percentage` float(5,2) DEFAULT NULL,
  `passingyear` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`r_id`, `ename`, `board`, `clgname`, `edugap`, `reason`, `examseat`, `tmark`, `outof`, `percentage`, `passingyear`) VALUES
(10, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106233', 424, 650, 65.23, 2019),
(11, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 461, 650, 70.92, 2019),
(12, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f342310', 353, 650, 54.31, 2019),
(13, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f453423', 372, 650, 57.23, 2019),
(14, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106233', 381, 650, 58.62, 2019),
(15, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106146', 433, 650, 66.62, 2019),
(16, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 410, 650, 63.08, 2019),
(17, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 422, 650, 64.92, 2019),
(18, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106233', 413, 650, 63.54, 2019),
(19, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106146', 369, 650, 56.77, 2019),
(20, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 406, 650, 62.46, 2019),
(21, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106233', 484, 650, 74.46, 2019),
(22, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 291, 650, 44.77, 2019),
(23, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 369, 650, 56.77, 2019),
(24, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 428, 650, 65.85, 2019),
(25, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 357, 650, 54.92, 2019),
(26, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106146', 518, 650, 79.69, 2019),
(27, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'F106146', 472, 650, 72.62, 2019),
(28, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f232965', 426, 650, 65.54, 2019),
(29, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456733', 546, 650, 84.00, 2019),
(30, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f545676', 447, 650, 68.77, 2019),
(31, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'Yes', '', 'f556432', 378, 650, 58.15, 2019),
(32, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 390, 650, 60.00, 2019),
(33, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106146', 374, 650, 57.54, 2019),
(34, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f345678', 344, 650, 52.92, 2019),
(35, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106146', 463, 650, 71.23, 2019),
(36, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f232965', 427, 650, 65.69, 2019),
(37, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 457, 650, 70.31, 2019),
(38, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f564323', 398, 650, 61.23, 2019),
(39, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106146', 375, 650, 57.69, 2019),
(40, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 377, 650, 58.00, 2019),
(41, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f456754', 454, 650, 69.85, 2019),
(42, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456787', 440, 650, 67.69, 2019),
(43, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f678976', 430, 650, 66.15, 2019),
(44, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f455423', 436, 650, 67.08, 2019),
(45, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 449, 650, 69.08, 2019),
(46, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f567644', 476, 650, 73.23, 2019),
(47, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106233', 409, 650, 62.92, 2019),
(48, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106243', 337, 650, 51.85, 2019),
(49, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106146', 397, 650, 61.08, 2019),
(50, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 419, 650, 64.46, 2019),
(51, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456754', 372, 650, 57.23, 2019),
(52, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f554323', 339, 650, 52.15, 2019),
(53, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f567877', 430, 650, 66.15, 2019),
(54, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456754', 380, 650, 58.46, 2019),
(55, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f453211', 330, 650, 50.77, 2019),
(56, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456750', 376, 650, 57.85, 2019),
(57, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f556643', 411, 650, 63.23, 2019),
(59, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f457765', 334, 650, 51.38, 2019),
(60, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f453432', 346, 650, 53.23, 2019),
(61, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456789', 458, 650, 70.46, 2019),
(62, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554323', 360, 650, 55.38, 2019),
(63, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456321', 408, 650, 62.77, 2019),
(64, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456754', 390, 650, 60.00, 2019),
(65, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554323', 420, 650, 64.62, 2019),
(66, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', '364', 364, 650, 56.00, 2019),
(67, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f564323', 456, 650, 70.15, 2019),
(68, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456787', 441, 650, 67.85, 2019),
(69, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106534', 441, 650, 67.85, 2019),
(70, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106144', 480, 650, 73.85, 2019),
(71, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106140', 445, 650, 68.46, 2019),
(72, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 343, 650, 52.77, 2019),
(73, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106166', 446, 650, 68.62, 2019),
(74, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106106', 534, 650, 82.15, 2019),
(76, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106232', 359, 650, 55.23, 2019),
(77, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106143', 518, 650, 79.69, 2019),
(78, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106142', 390, 650, 60.00, 2019),
(79, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106233', 414, 650, 63.69, 2019),
(80, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106147', 422, 650, 64.92, 2019),
(81, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106236', 554, 650, 85.23, 2019),
(82, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106198', 442, 650, 68.00, 2019),
(83, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232960', 386, 650, 59.38, 2019),
(84, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 411, 650, 63.23, 2019),
(85, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 334, 650, 51.38, 2019),
(86, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554323', 429, 650, 66.00, 2019),
(87, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456782', 467, 650, 71.85, 2019),
(88, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456423', 363, 650, 55.85, 2019),
(89, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 378, 650, 58.15, 2019),
(90, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 443, 650, 68.15, 2019),
(91, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 424, 650, 65.23, 2019),
(92, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f456789', 368, 650, 56.62, 2019),
(93, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f456787', 534, 650, 82.15, 2019),
(94, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106146', 466, 650, 71.69, 2019),
(95, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 466, 650, 71.69, 2019),
(96, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 444, 650, 68.31, 2019),
(97, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 397, 650, 61.08, 2019),
(98, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 319, 650, 49.08, 2019),
(99, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106146', 419, 650, 64.46, 2019),
(100, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106146', 446, 650, 68.62, 2019),
(101, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f232965', 350, 650, 53.85, 2019),
(103, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 495, 650, 76.15, 2019),
(104, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 392, 650, 60.31, 2019),
(105, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 421, 650, 64.77, 2019),
(106, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 420, 650, 64.62, 2019),
(107, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 422, 650, 64.92, 2019),
(108, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106233', 477, 650, 73.38, 2019),
(109, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 420, 650, 64.62, 2019),
(110, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106146', 390, 650, 60.00, 2019),
(111, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 474, 650, 72.92, 2019),
(112, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106146', 398, 650, 61.23, 2019),
(113, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 469, 650, 72.15, 2019),
(114, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106146', 398, 650, 61.23, 2019),
(115, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f4567989', 476, 650, 73.23, 2019),
(116, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554323', 390, 650, 60.00, 2019),
(117, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 374, 650, 57.54, 2019),
(118, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106100', 410, 650, 63.08, 2019),
(119, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232968', 237, 500, 47.40, 2019),
(120, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 429, 650, 66.00, 2019),
(121, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106149', 441, 650, 67.85, 2019),
(122, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106288', 320, 650, 49.23, 2019),
(123, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106146', 433, 650, 66.62, 2019),
(124, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 428, 650, 65.85, 2019),
(125, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f105234', 391, 650, 60.15, 2019),
(126, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106230', 463, 650, 71.23, 2019),
(127, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106146', 326, 650, 50.15, 2019),
(128, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106109', 539, 650, 82.92, 2019),
(129, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106123', 423, 650, 65.08, 2019),
(130, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f543218', 359, 650, 55.23, 2019),
(131, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106209', 440, 650, 67.69, 2019),
(132, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 423, 650, 65.08, 2019),
(133, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 443, 650, 68.15, 2019),
(134, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 333, 650, 51.23, 2019),
(135, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106176', 446, 650, 68.62, 2019),
(136, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106244', 486, 650, 74.77, 2019),
(137, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106155', 456, 650, 70.15, 2019),
(138, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106146', 468, 650, 72.00, 2019),
(139, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106188', 474, 650, 72.92, 2019),
(140, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106188', 526, 650, 80.92, 2019),
(141, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106140', 336, 650, 51.69, 2019),
(142, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106165', 497, 650, 76.46, 2019),
(143, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106140', 409, 650, 62.92, 2019),
(144, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106234', 453, 650, 69.69, 2019),
(145, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 365, 650, 56.15, 2019),
(146, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554323', 508, 650, 78.15, 2019),
(147, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106230', 353, 650, 54.31, 2019),
(148, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106141', 376, 650, 57.85, 2019),
(149, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554366', 466, 650, 71.69, 2019),
(150, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106140', 355, 650, 54.62, 2019),
(151, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 471, 650, 72.46, 2019),
(152, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106277', 371, 650, 57.08, 2019),
(153, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232969', 437, 650, 67.23, 2019),
(154, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 354, 650, 54.46, 2019),
(155, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f232965', 521, 650, 80.15, 2019),
(156, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232969', 461, 650, 70.92, 2019),
(157, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106147', 458, 650, 70.46, 2019),
(158, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106149', 420, 650, 64.62, 2019),
(159, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 506, 650, 77.85, 2019),
(160, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106146', 363, 650, 55.85, 2019),
(161, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 460, 650, 70.77, 2019),
(162, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f232960', 396, 650, 60.92, 2019),
(163, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 352, 650, 54.15, 2019),
(164, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f554325', 358, 650, 55.08, 2019),
(165, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106148', 437, 650, 67.23, 2019),
(166, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 392, 650, 60.31, 2019),
(167, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 417, 650, 64.15, 2019),
(168, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106282', 382, 650, 58.77, 2019),
(169, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 356, 650, 54.77, 2019),
(170, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106143', 344, 650, 52.92, 2019),
(171, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 407, 650, 62.62, 2019),
(172, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106143', 415, 650, 63.85, 2019),
(173, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106145', 399, 650, 61.38, 2019),
(174, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106232', 358, 650, 55.08, 2019),
(175, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106142', 362, 650, 55.69, 2019),
(176, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106142', 294, 650, 45.23, 2019),
(177, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'F106100', 307, 650, 47.23, 2019),
(178, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106140', 409, 650, 62.92, 2019),
(179, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106144', 482, 650, 74.15, 2019),
(180, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554322', 351, 650, 54.00, 2019),
(181, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106184', 384, 650, 59.08, 2019),
(183, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106148', 405, 650, 62.31, 2019),
(184, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 405, 650, 62.31, 2019),
(185, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 447, 650, 68.77, 2019),
(186, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106140', 479, 650, 73.69, 2019),
(187, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106230', 453, 650, 69.69, 2019),
(188, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106111', 380, 650, 58.46, 2019),
(189, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106033', 481, 650, 74.00, 2019),
(190, 'HSC', 'CBSE state board', 'Other', 'No', '', 'F106146', 328, 500, 65.60, 2019),
(192, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554320', 419, 650, 64.46, 2019),
(193, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 383, 650, 58.92, 2019),
(194, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 398, 650, 61.23, 2019),
(195, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554308', 370, 650, 56.92, 2019),
(196, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554323', 322, 650, 49.54, 2019),
(197, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554329', 363, 650, 55.85, 2019),
(198, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106105', 398, 650, 61.23, 2019),
(199, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106390', 390, 650, 60.00, 2019),
(200, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106233', 569, 650, 87.54, 2019),
(201, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106106', 395, 650, 60.77, 2019),
(202, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 427, 650, 65.69, 2019),
(203, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106148', 398, 650, 61.23, 2019),
(204, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 317, 650, 48.77, 2019),
(205, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f345423', 510, 650, 78.46, 2019),
(206, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106146', 397, 650, 61.08, 2019),
(207, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 533, 650, 82.00, 2019),
(208, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106288', 386, 650, 59.38, 2019),
(209, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106239', 375, 650, 57.69, 2019),
(210, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106146', 411, 650, 63.23, 2019),
(211, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106149', 315, 650, 48.46, 2019),
(212, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'F106154', 311, 650, 47.85, 2019),
(213, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106235', 424, 650, 65.23, 2019),
(214, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106236', 509, 650, 78.31, 2019),
(215, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106148', 336, 650, 51.69, 2019),
(216, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106231', 426, 650, 65.54, 2019),
(217, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106149', 458, 650, 70.46, 2019),
(218, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106142', 380, 650, 58.46, 2019),
(219, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554328', 441, 650, 67.85, 2019),
(220, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232932', 418, 650, 64.31, 2019),
(221, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106256', 403, 650, 62.00, 2019),
(222, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106245', 320, 650, 49.23, 2019),
(223, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f230965', 419, 650, 64.46, 2019),
(225, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f232965', 382, 650, 58.77, 2019),
(226, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106046', 357, 650, 54.92, 2019),
(227, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106190', 352, 650, 54.15, 2019),
(228, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106190', 344, 650, 52.92, 2019),
(229, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232905', 342, 650, 52.62, 2019),
(230, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106230', 410, 650, 63.08, 2019),
(231, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106233', 381, 650, 58.62, 2019),
(232, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554320', 315, 650, 48.46, 2019),
(233, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 340, 650, 52.31, 2019),
(234, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554323', 344, 650, 52.92, 2019),
(235, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232960', 347, 650, 53.38, 2019),
(236, 'HSC', 'Maharashtra State Board', 'Other', '', '', 'f106140', 346, 650, 53.23, 2019),
(238, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106146', 364, 650, 56.00, 2019),
(240, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f232965', 459, 650, 70.62, 2019),
(241, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106146', 369, 650, 56.77, 2019),
(242, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554320', 324, 650, 49.85, 2019),
(243, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f554023', 304, 650, 46.77, 2019),
(244, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106203', 380, 650, 58.46, 2019),
(245, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'F106846', 336, 650, 51.69, 2019),
(246, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f232965', 344, 650, 52.92, 2019),
(248, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106203', 413, 650, 63.54, 2019),
(249, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232905', 422, 650, 64.92, 2019),
(250, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232965', 541, 650, 83.23, 2019),
(251, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232915', 401, 650, 61.69, 2019),
(252, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'F106111', 448, 650, 68.92, 2019),
(253, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106546', 412, 650, 63.38, 2019),
(254, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106133', 494, 650, 76.00, 2019),
(255, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106149', 559, 650, 86.00, 2019),
(256, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f232944', 494, 650, 76.00, 2019),
(257, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106254', 513, 650, 78.92, 2019),
(258, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f1061378', 378, 650, 58.15, 2019),
(259, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f232943', 348, 650, 53.54, 2019),
(260, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106132', 369, 650, 56.77, 2019),
(261, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106249', 417, 650, 64.15, 2019),
(262, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106267', 391, 650, 60.15, 2019),
(263, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106244', 406, 650, 62.46, 2019),
(264, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f1061432', 341, 650, 52.46, 2019),
(265, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106145', 350, 650, 53.85, 2019),
(266, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106156', 459, 650, 70.62, 2019),
(267, 'HSC', 'CBSE state board', 'Other', 'No', '', 'F106191', 409, 500, 81.80, 2019),
(268, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106266', 409, 650, 62.92, 2019),
(269, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106238', 390, 650, 60.00, 2019),
(270, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106255', 315, 0, 48.46, 2019),
(271, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106234', 455, 650, 70.00, 2019),
(272, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106167', 439, 650, 67.54, 2019),
(273, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106333', 427, 650, 65.69, 2019),
(274, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106158', 401, 650, 61.69, 2019),
(275, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106236', 377, 650, 58.00, 2019),
(276, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106149', 359, 650, 55.23, 2019),
(277, 'HSC', 'Maharashtra State Board', 'Other', 'No', '', 'f106145', 366, 650, 56.31, 2019),
(278, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f232961', 320, 650, 49.23, 2019),
(279, 'HSC', 'Maharashtra State Board', 'Vivekanand College,Kolhapur', 'No', '', 'f106161', 346, 650, 53.23, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `acayear`
--

CREATE TABLE `acayear` (
  `aid` int(11) NOT NULL,
  `ayear` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acayear`
--

INSERT INTO `acayear` (`aid`, `ayear`) VALUES
(1, '2019-2020'),
(3, '2020-2021');

-- --------------------------------------------------------

--
-- Table structure for table `addinfo`
--

CREATE TABLE `addinfo` (
  `r_id` int(11) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `district` varchar(70) DEFAULT NULL,
  `taluka` varchar(70) DEFAULT NULL,
  `state` varchar(70) DEFAULT NULL,
  `pcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addinfo`
--

INSERT INTO `addinfo` (`r_id`, `address`, `district`, `taluka`, `state`, `pcode`) VALUES
(10, 'porle', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(11, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(12, 'kerli', 'Kolhapur', 'Karveer', 'Maharashtra', 435654),
(13, 'kotoli', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(14, 'majgav', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(15, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(16, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 453245),
(17, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(18, 'mudshingi', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(19, 'rukadi', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(20, 'kerli', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(21, 'rukadi', 'Kolhapur', 'Karveer', 'Maharashtra', 416229),
(22, 'porle', 'Kolhapur', 'Karveer', 'Maharashtra', 416229),
(23, 'rukadi', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(24, 'male', 'Kolhapur', 'Karveer', 'Maharashtra', 435654),
(25, 'rukadi', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(26, 'kerli', 'Kolhapur', 'Karveer', 'Maharashtra', 416229),
(27, 'kande', 'Sangli', 'Shirala', 'Maharashtra', 453245),
(28, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(29, 'salvan', 'Kolhapur', 'Gaganbavda', 'Maharashtra', 416206),
(30, 'kurukali', 'Kolhapur', 'Karveer', 'Maharashtra', 435654),
(31, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(32, 'kololi', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(33, 'kande', 'Sangli', 'Shirala', 'Maharashtra', 416122),
(34, 'shiroli', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 456321),
(35, 'halondi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(36, 'waghve', 'Kolhapur', 'Panhala', 'Maharashtra', 453245),
(37, 'punal', 'Kolhapur', 'Karveer', 'Maharashtra', 416229),
(38, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(39, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(40, 'herle', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(41, 'kerle', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(42, 'Vadgaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(43, 'pinple', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(44, 'digvade', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(45, 'Bagani', 'Sangli', 'Walwa', 'Maharashtra', 435654),
(46, 'Aurwad', 'Kolhapur', 'Shirol', 'Maharashtra', 416122),
(47, 'kurukali', 'Kolhapur', 'Karveer', 'Maharashtra', 416206),
(48, 'hatkanangale', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(49, 'malkapur', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 453245),
(50, 'kotoli', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(51, 'male', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 432789),
(52, 'jeur', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(53, 'manewadi', 'Kolhapur', 'Panhala', 'Maharashtra', 453245),
(54, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(55, 'aarle', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(56, 'Ichalkaranji', 'Kolhapur', 'Shirol', 'Maharashtra', 453211),
(57, 'chokak', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(59, 'darewadi', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(60, 'ambewadi', 'Kolhapur', 'Karveer', 'Maharashtra', 416229),
(61, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416111),
(62, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(63, 'kerli', 'Kolhapur', 'Karveer', 'Maharashtra', 416229),
(64, 'porle', 'Kolhapur', 'Karveer', 'Maharashtra', 453245),
(65, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(66, 'mangaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 456321),
(67, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 421345),
(68, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 435654),
(69, 'kumbhoj', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 423122),
(70, 'shiroli', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416123),
(71, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 416211),
(72, 'shiroli', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(73, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416220),
(74, 'Aurwad', 'Kolhapur', 'Shirol', 'Maharashtra', 435655),
(75, 'bagni', 'Sangli', 'Walwa', 'Maharashtra', 453244),
(76, 'valivade', 'Kolhapur', 'Kagal', 'Maharashtra', 453240),
(77, 'mangaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416120),
(78, 'male', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416178),
(79, 'navali', 'Kolhapur', 'Panhala', 'Maharashtra', 416220),
(80, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(81, 'gandhinagar', 'Kolhapur', 'Kagal', 'Maharashtra', 435650),
(82, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 416120),
(83, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416199),
(84, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(85, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453245),
(86, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416206),
(87, 'kerle', 'Kolhapur', 'Karveer', 'Maharashtra', 416229),
(88, 'sonurle', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 435654),
(89, 'halondi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 456789),
(90, 'gandhinagar', 'Kolhapur', 'Kagal', 'Maharashtra', 453245),
(91, 'mangaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(92, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(93, 'nandgaon', 'Kolhapur', 'Karveer', 'Maharashtra', 435654),
(94, 'kerli', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(95, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(96, 'herle', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416206),
(97, 'Aurwad', 'Kolhapur', 'Shirol', 'Maharashtra', 416122),
(98, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(99, 'kotoli', 'Kolhapur', 'Panhala', 'Maharashtra', 453245),
(100, 'pinple', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(101, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(103, 'kande', 'Sangli', 'Shirala', 'Maharashtra', 416229),
(104, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(105, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(106, 'kerli', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(107, 'kurukali', 'Kolhapur', 'Karveer', 'Maharashtra', 416206),
(108, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(109, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(110, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(111, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 453245),
(112, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(113, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(114, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(115, 'kande', 'Nashik', 'Shirala', 'Maharashtra', 435654),
(116, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 453245),
(117, 'halondi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(118, 'Bagani', 'Sangli', 'Walwa', 'Maharashtra', 416220),
(119, 'Aurwad', 'Kolhapur', 'Shirala', 'Maharashtra', 435654),
(120, 'male', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435651),
(121, 'hatkanangale', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453213),
(122, 'chokaka', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453789),
(123, 'Bagani', 'Sangli', 'Walwa', 'Maharashtra', 453201),
(124, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(125, 'Nagaon', 'Kolhapur', 'Karveer', 'Maharashtra', 543321),
(126, 'jeur', 'Kolhapur', 'Panhala', 'Maharashtra', 432567),
(127, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(128, 'kerli', 'Kolhapur', 'Karveer', 'Maharashtra', 416120),
(129, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435600),
(130, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 456789),
(131, 'valivade', 'Kolhapur', 'Kagal', 'Maharashtra', 435654),
(132, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(133, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416206),
(134, 'malkapur', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 416229),
(135, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(136, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(137, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(138, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(139, 'valivade', 'Kolhapur', 'Kagal', 'Maharashtra', 453245),
(140, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(141, 'asurle', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416199),
(142, 'mudshingi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416220),
(143, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 416129),
(144, 'banbavade', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 416129),
(145, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416199),
(146, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416220),
(147, 'kerli', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416209),
(148, 'porle', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416221),
(149, 'herle', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416222),
(150, 'kerli', 'Kolhapur', 'Panhala', 'Maharashtra', 435650),
(151, 'valivade', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(152, 'shiroli', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(153, 'salvan', 'Kolhapur', 'Gaganbavda', 'Maharashtra', 435654),
(154, 'shigav', 'Sangli', 'Walwa', 'Maharashtra', 416122),
(155, 'tisangi', 'Kolhapur', 'Gaganbavda', 'Maharashtra', 416122),
(156, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(157, 'valivade', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(158, 'kerli', 'Kolhapur', 'Karveer', 'Maharashtra', 435654),
(159, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(160, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 416122),
(161, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(162, 'tisangi', 'Kolhapur', 'Gaganbavda', 'Maharashtra', 416220),
(163, 'kerli', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(164, 'aarle', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(165, 'nandgaon', 'Kolhapur', 'Karveer', 'Maharashtra', 435654),
(166, 'banbavade', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 416122),
(167, 'tisangi', 'Kolhapur', 'Gaganbavda', 'Maharashtra', 416229),
(168, 'kerli', 'Kolhapur', 'Karveer', 'Maharashtra', 416229),
(169, 'Aurwad', 'Kolhapur', 'Shirol', 'Maharashtra', 453245),
(170, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(171, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(172, 'vadagaon', 'Kolhapur', 'Karveer', 'Maharashtra', 453245),
(173, 'manewadi', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(174, 'shiroli', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(175, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 345678),
(176, 'kande', 'Sangli', 'Shirala', 'Maharashtra', 416229),
(177, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 453568),
(178, 'halondi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416200),
(179, 'hatkanangale', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(180, 'kerli', 'Kolhapur', 'Panhala', 'Maharashtra', 416201),
(181, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453240),
(183, 'asurle', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 452134),
(184, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(185, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 453245),
(186, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416220),
(187, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 453245),
(188, 'male', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435610),
(189, 'Bagani', 'Sangli', 'Walwa', 'Maharashtra', 435654),
(190, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435650),
(192, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416220),
(193, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453240),
(194, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(195, 'Bagani', 'Sangli', 'Walwa', 'Maharashtra', 453245),
(196, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416226),
(197, 'kerli', 'Kolhapur', 'Panhala', 'Maharashtra', 416222),
(198, 'Aurwad', 'Kolhapur', 'Shirol', 'Maharashtra', 416227),
(199, 'halondi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416789),
(200, 'top', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(201, 'herle', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(202, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416229),
(203, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(204, 'kerli', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(205, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(206, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(207, 'kurukali', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(208, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 416122),
(209, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(210, 'kotoli', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(211, 'Ichalkaranji', 'Kolhapur', 'Shirol', 'Maharashtra', 435654),
(212, 'salvan', 'Kolhapur', 'Gaganbavda', 'Maharashtra', 416122),
(213, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(214, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(215, 'punal', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(216, 'pinple', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(217, 'sonurle', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 416229),
(218, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(219, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(220, 'top', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(221, 'tisangi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(222, 'navali', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(223, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 410206),
(225, 'porle', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453045),
(226, 'Aurwad', 'Kolhapur', 'Shirol', 'Maharashtra', 416020),
(227, 'kerli', 'Kolhapur', 'Panhala', 'Maharashtra', 416220),
(228, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 453045),
(229, 'hatkanangale', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(230, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(231, 'top', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416220),
(232, 'kande', 'Kolhapur', 'Shirala', 'Maharashtra', 416206),
(233, 'kolhapur', 'Kolhapur', 'Karveer', 'Maharashtra', 453245),
(234, 'mudshingi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453245),
(235, 'Bagani', 'Sangli', 'Walwa', 'Maharashtra', 416220),
(236, 'kerli', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(238, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453245),
(240, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453245),
(241, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 453245),
(242, 'kerli', 'Kolhapur', 'Panhala', 'Maharashtra', 416206),
(243, 'kagal', 'Kolhapur', 'Kagal', 'Maharashtra', 416206),
(244, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(245, 'kande', 'Sangli', 'Shirala', 'Maharashtra', 416220),
(246, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(248, 'shiroli', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453245),
(249, 'salvan', 'Kolhapur', 'Gaganbavda', 'Maharashtra', 416220),
(250, 'shigav', 'Sangli', 'Walwa', 'Maharashtra', 453245),
(251, 'sonurle', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 435654),
(252, 'top', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(253, 'jeur', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 453245),
(254, 'navali', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 416229),
(255, 'tisangi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(256, 'Aurwad', 'Kolhapur', 'Shirol', 'Maharashtra', 435654),
(257, 'vadagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(258, 'injole', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(259, 'kerli', 'Kolhapur', 'Karveer', 'Maharashtra', 435654),
(260, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(261, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(262, 'jeur', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 416229),
(263, 'jeur', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 416229),
(264, 'top', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 453245),
(265, 'apti', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(266, 'kurukali', 'Kolhapur', 'Karveer', 'Maharashtra', 416229),
(267, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(268, 'male', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(269, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 435654),
(270, 'vadagaon', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(271, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(272, 'tisangi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 435654),
(273, 'pinple', 'Kolhapur', 'Panhala', 'Maharashtra', 416229),
(274, 'nandgaon', 'Kolhapur', 'Karveer', 'Maharashtra', 416122),
(275, 'jeur', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 435654),
(276, 'sonurle', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 416229),
(276, 'sonurle', 'Kolhapur', 'Shahuwadi', 'Maharashtra', 416229),
(277, 'rukadi', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122),
(278, 'porle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122),
(279, 'asurle', 'Kolhapur', 'Panhala', 'Maharashtra', 416122);

-- --------------------------------------------------------

--
-- Table structure for table `cands`
--

CREATE TABLE `cands` (
  `r_id` int(11) DEFAULT NULL,
  `course` varchar(70) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `regino` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cands`
--

INSERT INTO `cands` (`r_id`, `course`, `subject`, `regino`) VALUES
(10, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '77286'),
(11, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '93381'),
(12, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '96344'),
(13, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '88417'),
(14, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '28333'),
(15, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '69544'),
(16, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '48341'),
(17, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '27109'),
(18, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '60576'),
(19, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '81326'),
(20, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '17062'),
(21, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '16830'),
(22, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '49380'),
(23, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '15507'),
(24, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '96632'),
(25, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '31209'),
(26, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '71202'),
(27, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '17192'),
(28, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '77324'),
(29, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '76754'),
(30, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '63104'),
(31, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '86569'),
(32, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '14291'),
(33, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '25259'),
(34, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '12299'),
(35, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '88165'),
(36, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '83645'),
(37, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '56865'),
(38, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '26886'),
(39, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '64720'),
(40, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '43876'),
(41, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '85440'),
(42, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '50206'),
(43, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '36253'),
(44, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '88380'),
(45, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '26195'),
(46, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '20900'),
(47, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '62598'),
(48, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '40048'),
(49, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '99058'),
(50, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '75046'),
(51, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '43967'),
(52, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '44159'),
(53, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '27039'),
(54, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '65129'),
(55, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '74217'),
(56, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '38654'),
(57, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '37072'),
(59, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '96729'),
(60, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '66278'),
(61, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '95621'),
(62, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '36250'),
(63, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '46020'),
(64, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '27777'),
(65, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '21660'),
(66, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '40901'),
(67, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '25669'),
(68, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '55681'),
(69, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '50138'),
(70, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '25623'),
(71, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '89787'),
(72, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '53583'),
(73, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '15981'),
(74, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '82895'),
(75, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '77011'),
(76, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '34344'),
(77, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '61954'),
(78, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '44695'),
(79, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '83327'),
(80, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '15500'),
(81, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '32459'),
(82, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '47573'),
(83, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '51279'),
(84, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '18479'),
(85, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '76692'),
(86, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '90235'),
(87, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '61350'),
(88, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '12674'),
(89, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '72395'),
(90, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '25246'),
(91, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '15247'),
(92, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '34955'),
(93, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '59168'),
(94, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '56304'),
(95, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '92561'),
(96, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '58422'),
(97, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '84445'),
(98, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '21442'),
(99, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '10851'),
(100, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '51678'),
(101, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '53989'),
(103, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '20991'),
(104, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '84315'),
(105, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '81931'),
(106, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '98855'),
(107, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '16011'),
(108, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '32419'),
(109, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '91358'),
(109, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '91708'),
(110, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '14727'),
(111, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '26352'),
(112, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '35477'),
(113, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '18100'),
(114, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '34551'),
(115, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '52156'),
(116, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '27245'),
(117, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '70607'),
(118, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '33461'),
(119, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '57807'),
(120, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '69128'),
(121, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '72866'),
(122, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '63551'),
(123, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '61692'),
(124, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '91801'),
(125, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '59783'),
(126, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '19608'),
(127, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '48214'),
(128, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '85329'),
(129, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '78335'),
(130, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '70337'),
(131, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '26522'),
(132, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '42956'),
(133, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '80593'),
(134, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '48695'),
(135, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '88616'),
(136, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '12094'),
(137, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '55126'),
(138, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '82645'),
(139, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '15055'),
(140, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '46159'),
(141, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '44441'),
(142, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '81041'),
(143, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '64641'),
(144, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '42032'),
(145, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '89873'),
(146, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '88032'),
(147, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '10895'),
(148, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '77807'),
(149, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '96159'),
(150, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '76430'),
(151, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '20769'),
(152, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '79268'),
(153, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '69594'),
(154, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '74936'),
(155, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '79688'),
(156, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '61063'),
(157, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '23453'),
(158, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '21650'),
(159, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '39591'),
(160, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '94192'),
(161, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '74941'),
(162, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '72096'),
(163, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '55902'),
(164, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '88416'),
(165, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '46182'),
(166, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '89956'),
(167, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '83630'),
(168, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '10470'),
(169, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '83742'),
(170, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '56844'),
(171, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '76859'),
(172, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '73393'),
(173, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '26084'),
(174, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '80545'),
(175, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '59077'),
(176, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '50118'),
(177, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '74705'),
(178, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '67697'),
(179, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '44838'),
(180, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '28216'),
(181, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '96204'),
(183, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '28370'),
(184, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '60123'),
(185, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '14715'),
(186, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '64307'),
(187, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '92815'),
(188, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '88097'),
(189, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '53118'),
(190, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '68170'),
(192, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '46380'),
(193, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '56781'),
(194, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '74400'),
(195, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '40186'),
(196, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '71907'),
(197, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '54546'),
(198, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '37120'),
(199, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '18908'),
(200, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '10421'),
(201, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '20884'),
(202, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '40930'),
(203, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '39749'),
(204, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '45171'),
(205, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '50212'),
(206, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '13423'),
(207, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '97989'),
(208, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '49316'),
(209, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '26891'),
(210, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '69068'),
(211, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '27956'),
(212, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '53451'),
(213, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '80348'),
(214, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '46664'),
(215, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '82002'),
(216, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '91841'),
(217, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '60982'),
(218, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '59311'),
(219, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '46110'),
(220, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '20025'),
(221, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '49730'),
(222, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '13827'),
(223, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '32005'),
(225, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '45734'),
(226, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '22309'),
(227, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '84060'),
(228, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '28929'),
(229, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '40806'),
(230, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '31451'),
(231, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '63404'),
(232, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '82808'),
(233, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '28640'),
(234, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '93084'),
(235, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '35334'),
(236, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '71552'),
(238, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '79106'),
(240, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '66531'),
(241, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '34578'),
(242, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '36364'),
(243, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '17627'),
(244, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '48695'),
(245, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '45039'),
(246, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '55679'),
(248, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '85583'),
(249, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '57364'),
(250, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '68883'),
(251, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '52007'),
(252, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '95258'),
(253, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '48932'),
(254, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '94302'),
(255, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '84800'),
(256, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '83672'),
(257, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '33303'),
(258, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '55428'),
(259, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '23591'),
(260, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '38344'),
(261, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '88937'),
(262, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '94089'),
(262, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '23353'),
(263, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '35741'),
(264, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '32795'),
(265, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '98399'),
(266, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '57572'),
(267, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '68379'),
(268, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '64632'),
(269, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '51230'),
(270, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '73737'),
(271, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '73295'),
(272, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '53458'),
(273, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '59205'),
(274, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '30578'),
(275, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '58793'),
(276, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '98648'),
(277, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '57825'),
(278, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '84235'),
(279, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics', '86163');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_quota` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_quota`) VALUES
(17, 'SEBC', 16.00),
(18, 'EWS', 10.00),
(19, 'SC', 13.00),
(20, 'ST', 7.00),
(21, 'VJ-A', 3.00),
(22, 'NT-B', 2.50),
(23, 'NT-C', 3.50),
(24, 'NT-D', 2.00),
(25, 'OBC', 19.00),
(26, 'Open', 24.00);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`) VALUES
(7, 'B.Sc-I'),
(8, 'B.Com-I'),
(9, 'B.A-I');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`) VALUES
(1, 'Kolhapur'),
(2, 'Sangli'),
(4, 'Satara'),
(5, 'Solapur'),
(6, 'Ratnagiri'),
(7, 'Latur'),
(8, 'Nagpur'),
(9, 'Nashik'),
(10, 'Raigad'),
(11, 'Thane');

-- --------------------------------------------------------

--
-- Table structure for table `domicile`
--

CREATE TABLE `domicile` (
  `domicile_id` int(11) NOT NULL,
  `domicile_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domicile`
--

INSERT INTO `domicile` (`domicile_id`, `domicile_name`) VALUES
(4, 'Maharashtra'),
(7, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `ggrant`
--

CREATE TABLE `ggrant` (
  `grant_id` int(11) NOT NULL,
  `s_id` varchar(50) DEFAULT NULL,
  `seat` int(11) DEFAULT NULL,
  `ga_year` varchar(40) DEFAULT NULL,
  `gc_date` varchar(50) DEFAULT NULL,
  `gstatus` varchar(40) DEFAULT 'original',
  `gtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ggrant`
--

INSERT INTO `ggrant` (`grant_id`, `s_id`, `seat`, `ga_year`, `gc_date`, `gstatus`, `gtime`) VALUES
(161, 'Physics,Chemistry,Maths,Electronics,', 53, '2019-2020', '09/01/2020', 'original', '2020-01-09 17:05:13'),
(162, 'Physics,Chemistry,Maths,Statistics,', 53, '2019-2020', '09/01/2020', 'original', '2020-01-09 17:05:28'),
(163, 'Physics,Chemistry,Botany,Zoology,', 54, '2019-2020', '09/01/2020', 'original', '2020-01-09 17:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `gother`
--

CREATE TABLE `gother` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` varchar(50) DEFAULT NULL,
  `cat2` varchar(50) DEFAULT NULL,
  `cat3` varchar(50) DEFAULT NULL,
  `cat4` varchar(50) DEFAULT NULL,
  `cat5` varchar(50) DEFAULT NULL,
  `cat6` varchar(50) DEFAULT NULL,
  `cat7` varchar(50) DEFAULT NULL,
  `cat8` varchar(50) DEFAULT NULL,
  `cat9` varchar(50) DEFAULT NULL,
  `cat10` varchar(50) DEFAULT NULL,
  `gtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gother`
--

INSERT INTO `gother` (`g_name`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `cat9`, `cat10`, `gtime`) VALUES
('Physics,Chemistry,Maths,Electronics,', '1', '0', '0', '0', '2', '3', '1', '2', '1', '0', '2020-01-09 17:05:13'),
('Physics,Chemistry,Maths,Statistics,', '1', '0', '0', '0', '2', '3', '1', '2', '1', '0', '2020-01-09 17:05:28'),
('Physics,Chemistry,Botany,Zoology,', '1', '0', '0', '0', '2', '3', '1', '2', '1', '0', '2020-01-09 17:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `gpoint`
--

CREATE TABLE `gpoint` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` float(5,2) DEFAULT NULL,
  `cat2` float(5,2) DEFAULT NULL,
  `cat3` float(5,2) DEFAULT NULL,
  `cat4` float(5,2) DEFAULT NULL,
  `cat5` float(5,2) DEFAULT NULL,
  `cat6` float(5,2) DEFAULT NULL,
  `cat7` float(5,2) DEFAULT NULL,
  `cat8` float(5,2) DEFAULT NULL,
  `cat9` float(5,2) DEFAULT NULL,
  `cat10` float(5,2) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpoint`
--

INSERT INTO `gpoint` (`g_name`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `cat9`, `cat10`, `time`) VALUES
('Physics,Chemistry,Maths,Electronics,', 5.30, 1.32, 1.86, 1.06, 10.07, 12.72, 6.89, 8.48, 3.71, 1.59, '2020-01-09 17:05:13'),
('Physics,Chemistry,Maths,Statistics,', 5.30, 1.32, 1.86, 1.06, 10.07, 12.72, 6.89, 8.48, 3.71, 1.59, '2020-01-09 17:05:28'),
('Physics,Chemistry,Botany,Zoology,', 5.40, 1.35, 1.89, 1.08, 10.26, 12.96, 7.02, 8.64, 3.78, 1.62, '2020-01-09 17:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `gquota1`
--

CREATE TABLE `gquota1` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` varchar(30) DEFAULT NULL,
  `cat2` varchar(30) DEFAULT NULL,
  `cat3` varchar(30) DEFAULT NULL,
  `cat4` varchar(30) DEFAULT NULL,
  `cat5` varchar(30) DEFAULT NULL,
  `cat6` varchar(30) DEFAULT NULL,
  `cat7` varchar(30) DEFAULT NULL,
  `cat8` varchar(30) DEFAULT NULL,
  `cat10` varchar(30) DEFAULT NULL,
  `cat9` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grant1`
--

CREATE TABLE `grant1` (
  `grant_id` int(11) NOT NULL,
  `s_id` varchar(50) DEFAULT NULL,
  `gseat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grant1`
--

INSERT INTO `grant1` (`grant_id`, `s_id`, `gseat`) VALUES
(4, 'Physics,Chemistry,Maths,Statistics,', 53),
(5, 'Physics,Chemistry,Maths,Electronics,', 53),
(6, 'Physics,Chemistry,Botany,Zoology,', 54);

-- --------------------------------------------------------

--
-- Table structure for table `grantquota`
--

CREATE TABLE `grantquota` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` varchar(30) DEFAULT NULL,
  `cat2` varchar(30) DEFAULT NULL,
  `cat3` varchar(30) DEFAULT NULL,
  `cat4` varchar(30) DEFAULT NULL,
  `cat5` varchar(30) DEFAULT NULL,
  `cat6` varchar(30) DEFAULT NULL,
  `cat7` varchar(30) DEFAULT NULL,
  `cat8` varchar(30) DEFAULT NULL,
  `cat9` varchar(30) DEFAULT NULL,
  `cat10` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grantquota`
--

INSERT INTO `grantquota` (`g_name`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `cat9`, `cat10`) VALUES
('Physics,Chemistry,Maths,Statistics,', '5', '1', '2', '1', '10', '13', '7', '8', '4', '2'),
('Physics,Chemistry,Maths,Electronics,', '5', '1', '2', '1', '10', '13', '7', '8', '4', '2'),
('Physics,Chemistry,Botany,Zoology,', '5', '1', '2', '1', '10', '13', '7', '9', '4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `group1`
--

CREATE TABLE `group1` (
  `g_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group1`
--

INSERT INTO `group1` (`g_id`, `c_id`, `s_id`) VALUES
(19, 9, 9),
(20, 9, 4),
(21, 9, 4),
(22, 9, 4),
(23, 9, 4),
(24, 9, 4),
(25, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `group2`
--

CREATE TABLE `group2` (
  `g_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `s_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group2`
--

INSERT INTO `group2` (`g_id`, `c_id`, `s_id`) VALUES
(12, 7, '8,17,18,19'),
(13, 7, '8,17,18,20'),
(14, 7, '8,18,19,21'),
(15, 7, '8,18,20,21'),
(16, 7, '8,17,22,23'),
(17, 7, '17,22,23,24'),
(18, 7, '17,22,23,25'),
(20, 8, '7,26,27,28');

-- --------------------------------------------------------

--
-- Table structure for table `gtotal`
--

CREATE TABLE `gtotal` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` varchar(50) DEFAULT NULL,
  `cat2` varchar(50) DEFAULT NULL,
  `cat3` varchar(50) DEFAULT NULL,
  `cat4` varchar(50) DEFAULT NULL,
  `cat5` varchar(50) DEFAULT NULL,
  `cat6` varchar(50) DEFAULT NULL,
  `cat7` varchar(50) DEFAULT NULL,
  `cat8` varchar(50) DEFAULT NULL,
  `cat9` varchar(50) DEFAULT NULL,
  `cat10` varchar(50) DEFAULT NULL,
  `gtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gtotal`
--

INSERT INTO `gtotal` (`g_name`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `cat9`, `cat10`, `gtime`) VALUES
('Physics,Chemistry,Maths,Electronics,', '5', '1', '2', '1', '10', '13', '7', '8', '4', '2', '2020-01-09 17:05:13'),
('Physics,Chemistry,Maths,Statistics,', '5', '1', '2', '1', '10', '13', '7', '8', '4', '2', '2020-01-09 17:05:28'),
('Physics,Chemistry,Botany,Zoology,', '5', '1', '2', '1', '10', '13', '7', '9', '4', '2', '2020-01-09 17:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `gvck`
--

CREATE TABLE `gvck` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` varchar(50) DEFAULT NULL,
  `cat2` varchar(50) DEFAULT NULL,
  `cat3` varchar(50) DEFAULT NULL,
  `cat4` varchar(50) DEFAULT NULL,
  `cat5` varchar(50) DEFAULT NULL,
  `cat6` varchar(50) DEFAULT NULL,
  `cat7` varchar(50) DEFAULT NULL,
  `cat8` varchar(50) DEFAULT NULL,
  `cat9` varchar(50) DEFAULT NULL,
  `cat10` varchar(50) DEFAULT NULL,
  `gtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gvck`
--

INSERT INTO `gvck` (`g_name`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `cat9`, `cat10`, `gtime`) VALUES
('Physics,Chemistry,Maths,Electronics,', '4', '1', '2', '1', '8', '10', '6', '6', '3', '2', '2020-01-09 17:05:13'),
('Physics,Chemistry,Maths,Statistics,', '4', '1', '2', '1', '8', '10', '6', '6', '3', '2', '2020-01-09 17:05:28'),
('Physics,Chemistry,Botany,Zoology,', '4', '1', '2', '1', '8', '10', '6', '7', '3', '2', '2020-01-09 17:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `l_id` int(11) NOT NULL,
  `r_no` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `r_no`, `username`, `password`) VALUES
(1, 47984, 'pranali@123', 'Pranali@123'),
(2, 61589, 'pranali@123', 'Pranali@123'),
(3, 55312, 'amruta@123', 'Amruta@123'),
(4, 49209, 'sonal@123', 'Sonal@123'),
(5, 85329, 'pranali@123', 'Pranali@123'),
(6, 37825, 'shiwani@123', 'Shiwani123'),
(7, 38141, 'nisha@123', 'Nisha@123'),
(8, 65253, 'pranali@123', 'Pranali@123'),
(9, 75278, 'pranali@123', 'Pranali@123'),
(10, 21462, 'amruta@123', 'Amruta@123'),
(11, 99836, 'pranali@123', 'Pranali@123'),
(12, 56016, 'pranali@123', 'Pranali@123'),
(13, 84757, 'pranali@123', 'Pranali@123'),
(14, 91181, 'pranali@123', 'Pranali@123'),
(15, 64772, 'pranali@123', 'Pranali@123'),
(16, 66192, 'pranali@123', 'Pranali@123'),
(17, 28213, 'pranali@123', 'Pranali@123'),
(18, 82178, 'sonal@123', 'Sonal@123'),
(19, 83993, 'pranali@123', 'Pranali@123'),
(20, 49219, 'shiwani@123', 'Shiwani123'),
(21, 71492, 'pranali@123', 'Pranali@123'),
(22, 16143, 'pranali@123', 'Pranali@123'),
(23, 61185, 'pranali@123', 'Pranali@123'),
(24, 49131, 'pranali@123', 'Pranali@123');

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `nation_id` int(11) NOT NULL,
  `nation_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`nation_id`, `nation_name`) VALUES
(1, 'Indian'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `nongrant`
--

CREATE TABLE `nongrant` (
  `ngrant_id` int(11) NOT NULL,
  `s_id` varchar(50) DEFAULT NULL,
  `nseat` int(11) DEFAULT NULL,
  `a_year` varchar(40) DEFAULT NULL,
  `c_date` varchar(50) DEFAULT NULL,
  `status` varchar(40) DEFAULT 'original',
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nongrant`
--

INSERT INTO `nongrant` (`ngrant_id`, `s_id`, `nseat`, `a_year`, `c_date`, `status`, `time`) VALUES
(55, 'Physics,Chemistry,Maths,Electronics,', 32, '2019-2020', '09/01/2020', 'original', '2020-01-09 16:59:18'),
(56, 'Physics,Chemistry,Maths,Statistics,', 32, '2019-2020', '09/01/2020', 'original', '2020-01-09 16:59:55'),
(57, 'Physics,Chemistry,Botany,Zoology,', 32, '2019-2020', '09/01/2020', 'original', '2020-01-09 17:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `nongrantquota`
--

CREATE TABLE `nongrantquota` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` varchar(30) DEFAULT NULL,
  `cat2` varchar(30) DEFAULT NULL,
  `cat3` varchar(30) DEFAULT NULL,
  `cat4` varchar(30) DEFAULT NULL,
  `cat5` varchar(30) DEFAULT NULL,
  `cat6` varchar(30) DEFAULT NULL,
  `cat7` varchar(30) DEFAULT NULL,
  `cat8` varchar(30) DEFAULT NULL,
  `cat9` varchar(30) DEFAULT NULL,
  `cat10` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nongrantquota`
--

INSERT INTO `nongrantquota` (`g_name`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `cat9`, `cat10`) VALUES
('Physics,Chemistry,Maths,Statistics,', '3', '1', '1', '1', '6', '8', '4', '5', '2', '1'),
('Physics,Chemistry,Maths,Statistics,', '3', '1', '1', '1', '6', '8', '4', '5', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nother`
--

CREATE TABLE `nother` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` varchar(50) DEFAULT NULL,
  `cat2` varchar(50) DEFAULT NULL,
  `cat3` varchar(50) DEFAULT NULL,
  `cat4` varchar(50) DEFAULT NULL,
  `cat5` varchar(50) DEFAULT NULL,
  `cat6` varchar(50) DEFAULT NULL,
  `cat7` varchar(50) DEFAULT NULL,
  `cat8` varchar(50) DEFAULT NULL,
  `cat9` varchar(50) DEFAULT NULL,
  `cat10` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nother`
--

INSERT INTO `nother` (`g_name`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `cat9`, `cat10`, `time`) VALUES
('Physics,Chemistry,Maths,Electronics,', '1', '0', '0', '0', '1', '2', '1', '1', '0', '0', '2020-01-09 16:59:18'),
('Physics,Chemistry,Maths,Statistics,', '1', '0', '0', '0', '1', '2', '1', '1', '0', '0', '2020-01-09 16:59:55'),
('Physics,Chemistry,Botany,Zoology,', '1', '0', '0', '0', '1', '2', '1', '1', '0', '0', '2020-01-09 17:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `npoint`
--

CREATE TABLE `npoint` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` float(5,2) DEFAULT NULL,
  `cat2` float(5,2) DEFAULT NULL,
  `cat3` float(5,2) DEFAULT NULL,
  `cat4` float(5,2) DEFAULT NULL,
  `cat5` float(5,2) DEFAULT NULL,
  `cat6` float(5,2) DEFAULT NULL,
  `cat7` float(5,2) DEFAULT NULL,
  `cat8` float(5,2) DEFAULT NULL,
  `cat9` float(5,2) DEFAULT NULL,
  `cat10` float(5,2) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `npoint`
--

INSERT INTO `npoint` (`g_name`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `cat9`, `cat10`, `time`) VALUES
('Physics,Chemistry,Maths,Electronics,', 3.20, 0.80, 1.12, 0.64, 6.08, 7.68, 4.16, 5.12, 2.24, 0.96, '2020-01-09 16:59:18'),
('Physics,Chemistry,Maths,Statistics,', 3.20, 0.80, 1.12, 0.64, 6.08, 7.68, 4.16, 5.12, 2.24, 0.96, '2020-01-09 16:59:55'),
('Physics,Chemistry,Botany,Zoology,', 3.20, 0.80, 1.12, 0.64, 6.08, 7.68, 4.16, 5.12, 2.24, 0.96, '2020-01-09 17:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `ntotal`
--

CREATE TABLE `ntotal` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` varchar(50) DEFAULT NULL,
  `cat2` varchar(50) DEFAULT NULL,
  `cat3` varchar(50) DEFAULT NULL,
  `cat4` varchar(50) DEFAULT NULL,
  `cat5` varchar(50) DEFAULT NULL,
  `cat6` varchar(50) DEFAULT NULL,
  `cat7` varchar(50) DEFAULT NULL,
  `cat8` varchar(50) DEFAULT NULL,
  `cat9` varchar(50) DEFAULT NULL,
  `cat10` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ntotal`
--

INSERT INTO `ntotal` (`g_name`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `cat9`, `cat10`, `time`) VALUES
('Physics,Chemistry,Maths,Electronics,', '3', '1', '1', '1', '6', '8', '4', '5', '2', '1', '2020-01-09 16:59:18'),
('Physics,Chemistry,Maths,Statistics,', '3', '1', '1', '1', '6', '8', '4', '5', '2', '1', '2020-01-09 16:59:55'),
('Physics,Chemistry,Botany,Zoology,', '3', '1', '1', '1', '6', '8', '4', '5', '2', '1', '2020-01-09 17:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `nvck`
--

CREATE TABLE `nvck` (
  `g_name` varchar(70) DEFAULT NULL,
  `cat1` varchar(50) DEFAULT NULL,
  `cat2` varchar(50) DEFAULT NULL,
  `cat3` varchar(50) DEFAULT NULL,
  `cat4` varchar(50) DEFAULT NULL,
  `cat5` varchar(50) DEFAULT NULL,
  `cat6` varchar(50) DEFAULT NULL,
  `cat7` varchar(50) DEFAULT NULL,
  `cat8` varchar(50) DEFAULT NULL,
  `cat9` varchar(50) DEFAULT NULL,
  `cat10` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nvck`
--

INSERT INTO `nvck` (`g_name`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `cat9`, `cat10`, `time`) VALUES
('Physics,Chemistry,Maths,Electronics,', '2', '1', '1', '1', '5', '6', '3', '4', '2', '1', '2020-01-09 16:59:18'),
('Physics,Chemistry,Maths,Statistics,', '2', '1', '1', '1', '5', '6', '3', '4', '2', '1', '2020-01-09 16:59:55'),
('Physics,Chemistry,Botany,Zoology,', '2', '1', '1', '1', '5', '6', '3', '4', '2', '1', '2020-01-09 17:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `pa`
--

CREATE TABLE `pa` (
  `rno` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `Personid` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pinfo`
--

CREATE TABLE `pinfo` (
  `r_id` int(11) DEFAULT NULL,
  `lname` varchar(70) DEFAULT NULL,
  `fname` varchar(70) DEFAULT NULL,
  `mname` varchar(70) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `mbno` varchar(11) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `fathername` varchar(70) DEFAULT NULL,
  `mothername` varchar(70) DEFAULT NULL,
  `religion` varchar(70) DEFAULT NULL,
  `subcast` varchar(70) DEFAULT NULL,
  `castcat` varchar(70) DEFAULT NULL,
  `nation` varchar(70) DEFAULT NULL,
  `domicile` varchar(70) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `ayear` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinfo`
--

INSERT INTO `pinfo` (`r_id`, `lname`, `fname`, `mname`, `gender`, `mbno`, `email`, `dob`, `fathername`, `mothername`, `religion`, `subcast`, `castcat`, `nation`, `domicile`, `title`, `ayear`) VALUES
(10, 'lohar ', 'siddhesh', 'ravindras', 'Male', '9527516703', 'ssiddhesh@123', '2000-02-16', 'ravindra', 'sunita', 'Hindu', 'Lohar', 'NT-B', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(11, 'desai', 'pratiksha', 'jitendra', 'Female', '9867543423', 'partiksha@123', '2001-03-19', 'jitendra', 'anandi', 'Hindu', 'Lohar', 'NT-B', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(12, 'gandhawale', 'sneha', 'sanjay', 'Female', '8767853454', 'sneha@123', '2001-03-28', 'sanjay', 'neeta', 'Hindu', 'Raval', 'NT-B', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(13, 'kale', 'digvijay', 'dattatray', 'Male', '7554342178', 'digvijay@123', '2001-06-23', 'dattatray', 'sunita', 'Hindu', 'Gondhali', 'NT-B', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(14, 'jadhav', 'pranita', 'shrirang', 'Female', '8732645313', 'pranita@123', '2001-09-22', 'shrirang', 'neha', 'Hindu', 'Nath panti davari gosavi', 'NT-B', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(15, 'mugdar', 'akanksha', 'nilesh', 'Female', '8767853454', 'akankasha@123', '2001-06-12', 'nilesh', 'sarita', 'Hindu', 'Gavali', 'NT-B', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(16, 'gadhari', 'bhalchandra', 'amol', 'Male', '9867543423', 'bhalchandra@123', '2001-11-18', 'amol', 'neha', 'Hindu', 'Dhangar', 'NT-C', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(17, 'gopane', 'siddhanath', 'chandrakant', 'Male', '8767853454', 'siddhanath@123', '2001-02-23', 'chandrakant', 'archana', 'Hindu', 'Dhangar', 'NT-C', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(18, 'metkari', 'nanaso', 'duryodhan', 'Male', '9527516703', 'nanaso@123', '2000-10-28', 'duruodhan', 'neha', 'Hindu', 'Dhangar', 'NT-C', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(19, 'shingade', 'bhausaheb', 'shivaji', 'Male', '9867543423', 'bhau@123', '2000-04-04', 'shivaji', 'neha', 'Hindu', 'Dhangar', 'NT-C', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(20, 'pujari', 'sakshi', 'sanjay', 'Female', '9527516703', 'sakshi@123', '2001-10-23', 'sanjay', 'sunita', 'Hindu', 'Dhangar', 'NT-C', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(21, 'kolekar', 'pranali', 'ravikant', 'Female', '7554342178', 'pranali@123', '2001-03-25', 'ravikant', 'sunita', 'Hindu', 'Dhangar', 'NT-C', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(22, 'hajare', 'sushant', 'gangaram', 'Male', '9867543423', 'sushant@123', '2001-05-05', 'gangaram', 'sunita', 'Hindu', 'Dhangar', 'NT-C', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(23, 'deshmukh', 'swapnil', 'vitthal', 'Male', '9527516703', 'swapnil@123', '2000-12-17', 'vitthal', 'Anandi', 'Hindu', 'Dhangar', 'NT-C', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(24, 'kokare', 'snehal', 'subhash', 'Female', '8767853454', 'snehal@123', '2000-04-17', 'subhash', 'geeta', 'Hindu', 'Dhangar', 'NT-C', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(25, 'bande', 'animesh', 'ganpatrao', 'Male', '9867543423', 'animesh@123', '2001-03-24', 'ganpantrao', 'Anandi', 'Hindu', 'Dhangar', 'NT-C', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(26, 'kumathekar', 'kedar', 'sanjay', 'Male', '9527516703', 'kedar@123', '2001-11-21', 'sanjay', 'Anandi', 'Hindu', 'Shimpi', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(27, 'kandalkar', 'prafull', 'rajendra', 'Male', '7554342178', 'prafull@123', '2001-02-10', 'rajendra', 'sunita', 'Hindu', 'Lingayat Wani', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(28, 'patil', 'pranita', 'rajendra', 'Female', '767653442', 'pranitaa@123', '2001-10-01', 'rajendra', 'sujata', 'Jain', 'Pancham', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(29, 'kumbhar', 'tejas', 'sambhaji', 'Male', '8876543423', 'tejas@123', '2001-03-15', 'sambhaji', 'sonal', 'Hindu', 'Kumbhar', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(30, 'swami', 'akash', 'satish', 'Male', '9763857654', 'akash@123', '2001-04-06', 'satish', 'sheela', 'Hindu', 'Jangam', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(31, 'parit', 'sumit', 'dipak', 'Male', '9876454333', 'sumit@123', '2000-05-03', 'dipak', 'Anandi', 'Hindu', 'Parit', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(32, 'nade', 'isha', 'harshal', 'Female', '9623660032', 'isha@123', '2001-07-31', 'harshal', 'vandana', 'Jain', 'Pancham', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(33, 'nadaf', 'aayesha', 'raju', 'Female', '7645342176', 'aayesha@123', '2001-10-13', 'raju', 'seema', 'Muslim', 'Muslim', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(34, 'ubare', 'sagar', 'rajaram', 'Male', '8767853454', 'sagar@123', '2002-10-14', 'rajaram', 'Anandi', 'Hindu', 'Teli', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(35, 'sutar', 'pravin', 'rajendra', 'Male', '8976543423', 'pravin@123', '2000-03-09', 'rajendra', 'neha', 'Hindu', 'Sutar', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(36, 'gurav', 'santosh', 'ananda', 'Male', '8876543423', 'santosh@123', '2001-06-08', 'ananda', 'aarti', 'Hindu', 'Gurav', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(37, 'bankar', 'ashiwini', 'rajaram', 'Female', '8765453222', 'ashiwini@123', '2002-01-03', 'rajaram', 'pooja', 'Hindu', 'Nhavi', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(38, 'shinde', 'dhiraj', 'bharat', 'Male', '7554342178', 'dhiraj@123', '2001-06-22', 'bharat', 'Sujata', 'Hindu', 'Nhavi', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(39, 'more', 'pranav', 'ashok', 'Male', '8876543423', 'pranav@123', '2000-07-27', 'ashok', 'anandi', 'Hindu', 'Kunabi', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(40, 'nashte', 'riteshkumar', 'rameshwar', 'Male', '7554342178', 'ritesh@123', '2000-09-29', 'rameshwar', 'sunita', 'Hindu', 'Lingayat Wani', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(41, 'tonpe', 'sejal', 'vijay', 'Female', '8876543423', 'sejal@123', '2002-01-04', 'vijay', 'sonal', 'Hindu', 'Parit', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(42, 'jamadar', 'mohammadzaid', 'peerali', 'Male', '8876543423', 'mohammad@123', '2001-07-24', 'peerali', 'sujata', 'Hindu', 'Darji', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(43, 'shinde', 'mahesh', 'dattatray', 'Male', '8897654323', 'mahesh@123', '2001-02-21', 'dattatray', 'kajal', 'Hindu', 'Kunabi', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(44, 'kane', 'shweta', 'bhausaheb', 'Female', '9988765434', 'shweta@123', '2001-02-10', 'bhausaheb', 'poonam', 'Jain', 'Pancham', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(45, 'ambekar', 'anajali', 'pandharinath', 'Female', '9867543423', 'anajali@123', '2001-11-18', 'pandharinath', 'pooja', 'Hindu', 'Shimpi', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(46, 'hatakar', 'pooja', 'piraji', 'Female', '7554342178', 'pooja@123', '2001-03-09', 'piraji', 'Anandi', 'Hindu', 'Kunabi', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(47, 'shidvankar', 'siraj', 'yasin', 'Male', '9527516703', 'siraj@123', '2001-01-20', 'yasin', 'Sujata', 'Muslim', 'Attar', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(48, 'gurav', 'om', 'prakash', 'Male', '8876543423', 'om@123', '2002-03-13', 'prakash', 'Sujata', 'Hindu', 'Gurav', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(49, 'dhare', 'prajakta', 'ravindra', 'Female', '8767853454', 'prajakta@123', '2001-01-26', 'ravindra', 'sujata', 'Hindu', 'Teli', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(50, 'mulla', 'ashrafalli', 'akhtarhusen', 'Male', '8876543423', 'ashrafalli@123', '2001-08-31', 'akhtarhusen', 'kajal', 'Muslim', 'Mullani', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(51, 'kumbhar', 'sourabh', 'ravindra', 'Male', '8876543423', 'sourabh@123', '2000-01-21', 'ravindra', 'sunita', 'Hindu', 'Kumbhar', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(52, 'ubare', 'sakshi', 'sanjay', 'Female', '7554342178', 'sakshii123@gmail.com', '2002-04-24', 'sanjay', 'neha', 'Hindu', 'Teli', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(53, 'gurav', 'poonam', 'dattatray', 'Female', '9527516703', 'poonam@123', '2001-10-02', 'dattatray', 'sunita', 'Hindu', 'Gurav', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(54, 'mullani', 'simaran', 'raju', 'Female', '8767853454', 'simaran123@gmail.com', '2000-10-05', 'raju', 'sangita', 'Muslim', 'Muslim', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(55, 'jitakar', 'siddhesh', 'raghunath', 'Male', '7554342178', 'siddesh@123', '2000-11-08', 'raghunath', 'Sujata', 'Hindu', 'Kunabi', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(56, 'patil', 'gayatri', 'arun', 'Male', '8754321233', 'gayatri@gmail.com', '2001-08-11', 'arun', 'pooja', 'Jain', 'Pancham', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(57, 'sutar', 'snehal', 'tulshidas', 'Female', '9865432377', 'snehall@gmail.com', '2000-04-07', 'tulshidas', 'poonam', 'Hindu', 'Sutar', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(59, 'kumbhar', 'yogesh', 'yashwant', 'Male', '7765432312', 'yogesh@gmail.com', '1999-09-07', 'yashwant', 'komal', 'Hindu', 'Kumbhar', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(60, 'patil', 'pavan', 'dhanaji', 'Male', '788899874', 'pavan@gmail.com', '2001-03-22', 'dhanaji', 'geeta', 'Hindu', 'Kunabi', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(61, 'shirke', 'pranali', 'pradeep', 'Female', '8867654323', 'pranalip@gmail.com', '2001-05-29', 'pradeep', 'komal', 'Hindu', 'Kunabi', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(62, 'mullani', 'gavas', 'rajmahamad', 'Male', '7689654323', 'gavas@gmail.com', '2000-08-27', 'rajmahamad', 'komal', 'Muslim', 'Muslim', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(63, 'mali', 'yash', 'dipak', 'Male', '7554342178', 'yash@gmail.com', '2001-06-16', 'dipak', 'komal', 'Hindu', 'Mali', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(64, 'tayshete', 'rachana', 'ramesh', 'Female', '9527516703', 'rachana@gmail.com', '2000-10-19', 'ramesh', 'sampatti', 'Hindu', 'Vaishvani', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(65, 'sangale', 'pratiksha', 'shashikant', 'Female', '9527516703', 'pratikshaa@hmail.com', '2001-03-26', 'shashikant', 'kajal', 'Hindu', 'Gurav', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(66, 'bargir', 'shirin', 'shamshuddin', 'Female', '8876543423', 'shirin@gmail.com', '2000-05-14', 'shamshuddin', 'pooja', 'Hindu', 'Mahil', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(67, 'potdar', 'rohini', 'babasaheb', 'Female', '8732645313', 'rohini@gmail.com', '2001-10-02', 'babasaheb', 'sujata', 'Hindu', 'Sonar', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(68, 'ratnaparkhi', 'madhura', 'prashant', 'Female', '9527516703', 'madhura@gmail.com', '2001-08-10', 'prashant', 'pooja', 'Hindu', 'Brahman', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(69, 'gandure', 'manoj', 'dhanaji', 'Male', '7865432211', 'manoj@gmail.com', '1999-07-18', 'dhanaji', 'gita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(70, 'patil', 'ketakee', 'ashok', 'Female', '8876543423', 'ketakee@gmail.com', '2000-10-19', 'ashok', 'anita', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(71, 'jadhav', 'shraddha', 'dinkar', 'Female', '7654675432', 'shraddha@gmail.com', '2000-10-18', 'dinkar', 'Sujata', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(72, 'ankle', 'anjor', 'sharad', 'Female', '7896789787', 'anjor@gmail.com', '2002-04-17', 'sharad', 'sunita', 'Jain', 'Chaturth', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(73, 'magdum', 'rudray', 'sanjay', 'Male', '9867543422', 'rudray@gmail.com', '2000-12-10', 'sanjay', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(74, 'petakar', 'mrunali', 'manohar', 'Female', '9867543400', 'mrunali@gmail.com', '2001-03-25', 'manohar', 'neha', 'Hindu', 'Teli', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(75, 'khadake', 'kasturi', 'bhanudas', 'Female', '7554342133', 'kasturi@gmail.com', '2001-10-02', 'bhanudas', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(76, 'pawar', 'sneha', 'deepak', 'Female', '7766559987', 'snehaa@gmail.com', '2002-02-25', 'deepak', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(77, 'magdum', 'samruddhi', 'gunda', 'Female', '8767853454', 'samruddhi@gmail.com', '2002-02-13', 'gunda', 'sunita', 'Hindu', 'Lingayat', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(78, 'killedar', 'yogiraj', 'rajendra', 'Male', '9867543420', 'yogiraj@gmail.com', '2000-12-20', 'rajendra', 'sujata', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(79, 'pareek', 'sangeeta', 'ramawatar', 'Female', '7554342100', 'sangeeta@gmail.com', '2003-07-20', 'ramawatar', 'Anandi', 'Hindu', 'Brahman', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(80, 'varute', 'rohit', 'maruti', 'Male', '9527516711', 'rohit@gmail.com', '2001-05-07', 'maruti', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(81, 'sabkhan', 'alfiza', 'salim', 'Female', '7554342178', 'alfiza@gmail.com', '2001-12-11', 'salim', 'kajal', 'Muslim', 'Muslim', 'Open', 'Indian', 'Other', 'MS', '2019-2020'),
(82, 'patil', 'suhas', 'vikram', 'Male', '8767853450', 'suhas@gmail.com', '2001-11-24', 'vikram', 'poonam', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(83, 'jadhav', 'akshay', 'mahadev', 'Male', '8732645313', 'akshay@gmail.com', '2001-03-31', 'mahadev', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(84, 'mahadik', 'akshata', 'suhas', 'Female', '9867543423', 'akshata@gail.com', '2000-12-24', 'suuhas', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(85, 'ghadge', 'aniket', 'shahaji', 'Male', '9527516703', 'aniket@gmail.com', '2001-01-02', 'shahaji', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(86, 'patil', 'ashwini', 'ashok', 'Female', '9527516703', 'ashwini@gmail.com', '2000-10-01', 'ashok', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(87, 'warake', 'sakshi', 'sajay', 'Female', '8876543423', 'sakshia@gmail.com', '2001-03-13', 'sanjay', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(88, 'patil', 'omkar', 'bajirao', 'Male', '8767853454', 'omkar@gmail.com', '2001-06-20', 'bajirao', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(89, 'sarnaik', 'shivani', 'shankar', 'Female', '7654342321', 'shivani@gmail.com', '2000-11-07', 'shankar', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(90, 'redekar', 'piyush', 'nagesh', 'Male', '8767853454', 'piyush@gmail.com', '2001-07-17', 'nagesh', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(91, 'patil', 'gayatri', 'madhukar', 'Female', '9867543423', 'gayatrii@gmail.com', '2002-04-04', 'madhukar', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(92, 'rajput', 'vishwavijaysing', 'ajitsing', 'Male', '7554342178', 'vish@gmail.com', '2001-02-28', 'ajitsing', 'neha', 'Hindu', 'Brahman', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(93, 'indulkar', 'shweta', 'ajitkumar', 'Female', '8876457899', 'shwetai@gmail.com', '2001-07-23', 'ajitkumar', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(94, 'patil', 'sarika', 'sahadev', 'Female', '8876543423', 'sarika@gmail.com', '2000-08-18', 'sahadev', 'Anandi', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(95, 'nikam', 'rutuja', 'ramchandra', 'Female', '9867543423', 'rutuja@gmail.com', '2002-07-09', 'ramchandra', 'neha', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(96, 'yadrave', 'anuja', 'dadaso', 'Female', '8767853499', 'anuja@gmail.com', '2000-08-15', 'dadaso', 'sunita', 'Jain', 'Chaturth', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(97, 'bhosale', 'samiksha', 'subhash', 'Female', '7554342178', 'samiksha@gmail.com', '2001-07-19', 'subhash', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(98, 'mane', 'atul', 'sunil', 'Male', '8767853454', 'atul@gmail.com', '2000-12-12', 'sunil', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(99, 'mudugade', 'omkar', 'dhanaji', 'Male', '8767853454', 'omkarm@gmail.com', '2000-09-12', 'dhanaji', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(100, 'nikam', 'pradnya', 'dilip', 'Female', '9867543423', 'pradnya@gmail.com', '2001-11-14', 'dilip', 'kajal', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(101, 'jadhav', 'ankita', 'sanjay', 'Female', '7554342178', 'ankita@gmail.com', '2000-10-17', 'sanjay', 'Anandi', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(103, 'kalyankar', 'shruti', 'dattatray', 'Female', '9867543423', 'shruti@gmail.com', '2001-02-21', 'dattatray', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(104, 'ekal', 'bhalchandra', 'anadarao', 'Male', '9527516703', 'bhalchandraa@gmail.com', '2001-05-03', 'anandrao', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(105, 'solase', 'sakshi', 'subhash', 'Female', '8876543423', 'sakshis@gmail.com', '2002-01-11', 'subhash', 'sujata', 'Hindu', 'Teli', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(106, 'patil', 'rutuja', 'avinash', 'Female', '9867543423', 'rutu@gmail.com', '1999-05-20', 'avinash', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(107, 'kalake', 'gaurav', 'nathaji', 'Male', '7554342178', 'gaurav@gmail.com', '2001-06-06', 'nathaji', 'pooja', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(108, 'vadicharla', 'sandhya', 'krushnamurti', 'Female', '9527516703', 'sandhya@gmail.com', '2000-08-26', 'krushnamurti', 'sujata', 'Hindu', 'Padmshali', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(109, 'dhenge', 'sushama', 'sambhaji', 'Female', '7554342178', 'sushama@gmail.com', '2001-12-07', 'sambhaji', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(110, 'ghorpade', 'prasad', 'shahaji', 'Male', '8767853454', 'prasad@gmail.com', '2001-02-06', 'shahaji', 'sunita', 'Hindu', 'Kunabi', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(111, 'patil', 'rohini', 'vilas', 'Female', '9527516703', 'rohinip@gmail.com', '2001-10-07', 'vilas', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(112, 'patil', 'shriyal', 'bajirao', 'Male', '8767853454', 'shriyal@gmail.com', '2001-08-16', 'bajirao', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(113, 'lambe', 'pratiksha', 'ranjeet', 'Female', '7554342178', 'partikshal@gmail.com', '2001-10-02', 'ranjeet', 'pooja', 'Hindu', 'Lingayat', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(114, 'mohite', 'priti', 'ananda', 'Female', '9867543423', 'priti@gmail.com', '2001-12-05', 'ananda', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(115, 'patil', 'snehal', 'suresh', 'Female', '7554342178', 'snehalp@gmail.com', '2001-02-20', 'suresh', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(116, 'bajage', 'prathamesh', 'bhikaji', 'Male', '9527516703', 'prathmesh@gmail.com', '2001-02-17', 'bhikaji', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(117, 'patil', 'shivaraj', 'dadaso', 'Male', '8876543423', 'shivaraj@gmail.com', '2001-09-26', 'dadaso', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(118, 'ranmale', 'ashutosh', 'shashikant', 'Male', '8876543432', 'ashutosh@gmail.com', '2001-07-27', 'shashikant', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(119, 'naik', 'mitali', 'vijay', 'Female', '7554342111', 'mitali@gmail.com', '2001-10-01', 'vijay', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(120, 'patil', 'ruturaj', 'rajendra', 'Male', '9867543421', 'ruturaj@gmail.com', '2000-07-12', 'rajendra', 'kajal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(121, 'desai', 'nilesh', 'dattatray', 'Male', '9867543445', 'nilesh@gmail.com', '2001-01-23', 'dattatray', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(122, 'gundewadi', 'rakesh', 'ramesh', 'Male', '8876543423', 'rakesh@gmail.com', '2001-05-06', 'ramesh', 'neha', 'Hindu', 'Lingayat Wani', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(123, 'khekare', 'kallesh', 'chandkrant', 'Male', '7554342102', 'kallesh@gmail.com', '2001-08-16', 'chandkrant', 'komal', 'Jain', 'Chaturth', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(124, 'herle', 'amruta', 'dhanaji', 'Female', '8767853454', 'amrutah@gmail.com', '2001-10-31', 'dhanaji', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(125, 'more', 'madhumati', 'tanaji', 'Female', '8767853454', 'madhumati@gmail.com', '2001-04-28', 'tanaji', 'Anandi', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(126, 'korgavkar', 'abhishek', 'tanaji', 'Male', '9878986543', 'abhishek@gmail.com', '2001-04-14', 'tanaji', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(127, 'chougule', 'sanket', 'ravindra', 'Male', '9527516711', 'sanket@gmail.com', '2001-09-09', 'ravindra', 'sunita', 'Hindu', 'Lingayat', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(128, 'mukkanawar', 'siddharth', 'sadanand', 'Male', '7554342178', 'siddharthh@gmail.com', '2001-04-24', 'sadanand', 'sunita', 'Hindu', 'Lingayat', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(129, 'powar', 'mrunali', 'ramchandra', 'Female', '9527516712', 'mrunalip@gmail.com', '2001-12-04', 'ramchandra', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(130, 'dabhade', 'devyani', 'chandrakant', 'Female', '8876543465', 'devyani@gmail.com', '2001-09-28', 'chandrakant', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(131, 'bhosale', 'pandharinath', 'shivaji', 'Male', '8876543423', 'pandharinath@gmail.com', '2000-11-12', 'shivaji', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(132, 'patil', 'vaishnavi', 'dasharath', 'Female', '9527516703', 'vaishnavi@gmail.com', '2001-12-26', 'dasharath', 'sujata', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(133, 'patil', 'sanket', 'anadarao', 'Male', '8876543423', 'sanketp@gamail.com', '2001-09-03', 'anandrao', 'sujata', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(134, 'shindhe', 'ritesh', 'shivanand', 'Male', '9527516703', 'riteshs@gmail.com', '2001-07-31', 'shivanand', 'sujata', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(135, 'sheshar', 'ujjwala', 'ananda', 'Female', '8876543498', 'ujjwala@gmail.com', '2000-12-15', 'ananda', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(136, 'khavare', 'jyoti', 'machidra', 'Female', '9867543432', 'jyoti@gmail.com', '2001-07-27', 'machindra', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(137, 'mohite', 'dhairyasheel', 'doulat', 'Male', '8767853432', 'dhairyasheel@gmail.com', '2002-02-28', 'doulat', 'Anandi', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(138, 'dhere', 'rujuta', 'shivaji', 'Female', '9867543466', 'rujuta@gmail.com', '2001-08-17', 'shivaji', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(139, 'randive', 'rutuja', 'arvind', 'Female', '8767853488', 'rutujar@gmail.com', '2001-09-21', 'arvind', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(140, 'arekar', 'aditi', 'ananda', 'Female', '9867543499', 'aditi@gmail.com', '2001-02-07', 'ananda', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(141, 'magdum', 'rutuja', 'vitthal', 'Female', '8732645302', 'rutujam@gmail.com', '2001-05-27', 'vitthal', 'sujata', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(142, 'disale', 'pratik', 'pandurang', 'Male', '8767853400', 'pratik@gmail.com', '2001-05-28', 'pandurang', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(143, 'vhanagade', 'vaibhav', 'sanjay', 'Male', '8732645300', 'vaibhav@gmail.com', '2001-07-26', 'sanjay', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(144, 'bongale', 'kunal', 'dhanaji', 'Male', '9867543423', 'kunal@gmail.com', '2000-10-21', 'dhanaji', 'Anandi', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(145, 'patil', 'digvijay', 'kumar', 'Male', '8876543432', 'digvijayp@gmail.com', '2002-07-26', 'kumar', 'ketakee', 'Hindu', 'Lingayat', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(146, 'ramchandani', 'khushi', 'deepak', 'Female', '8876543432', 'khushi@gmail.com', '2001-10-19', 'deepak', 'komal', 'Sikh', 'Sindhi', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(147, 'sawant', 'shivaraj', 'balaso', 'Male', '8876543454', 'shivarajs@gmail.com', '2001-04-03', 'balaso', 'sapana', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(148, 'shinde', 'tushar', 'nanaso', 'Male', '8767853444', 'tushar@gmail.com', '2001-02-09', 'nanaso', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(149, 'jitakar', 'shruti', 'shashikant', 'Female', '8876543411', 'shrutij@gmail.com', '2000-12-31', 'shashikant', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(150, 'nanganuri', 'komal', 'shivanand', 'Female', '9527516733', 'komal@gmail.com', '2002-06-22', 'shivanand', 'kajal', 'Hindu', 'Lingayat', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(151, 'redekar', 'ajinkya', 'balvant', 'Male', '9867543487', 'ajinkya@gmail.com', '2001-10-07', 'balvant', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(152, 'patil', 'shivani', 'shrikant', 'Female', '9867543488', 'shivanip@gmail.com', '2001-08-31', 'shrikant', 'komal', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(153, 'patil', 'asmita', 'ramesh', 'Female', '9867543423', 'asmita@gmail.com', '2001-04-27', 'ramesh', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(154, 'patil', 'avdhoot', 'laxman', 'Male', '9867543423', 'avdhoot@gmail.com', '2001-03-15', 'laxman', 'sujata', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(155, 'naik', 'atharv', 'ajit', 'Male', '8876543423', 'atharv@gmail.com', '2001-03-17', 'ajit', 'sunita', 'Hindu', 'Brahman', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(156, 'khamkar', 'akash', 'baburav', 'Male', '9867543423', 'akashk@gmail.com', '2001-08-07', 'baburav', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(157, 'jagadale', 'amey', 'bhagawan', 'Male', '8767853456', 'amey@gmail.com', '2001-09-06', 'bhagawan', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(158, 'hindulkar', 'priyanka', 'namdev', 'Female', '8767853454', 'priyanka@gmail.com', '2001-11-05', 'namdev', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(159, 'mane', 'supriya', 'narayan', 'Female', '8767853456', 'supriya@gmail.com', '2001-06-24', 'narayan', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(160, 'patil', 'prajakta', 'pandurang', 'Female', '9527516708', 'prajaktap@gmail.com', '2000-05-25', 'pandurang', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(161, 'yadav', 'arati', 'santaji', 'Female', '8767853459', 'arati@gmail.com', '2001-06-22', 'santaji', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(162, 'sawant', 'manali', 'niwas', 'Female', '8876543416', 'manali@gmail.com', '2001-07-31', 'niwas', 'sapana', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(163, 'patil', 'asitkumar', 'uttam', 'Male', '8732645377', 'asitkumar@gmail.co', '2000-10-24', 'uttam', 'sampatti', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(164, 'patil', 'rushikesh', 'ramrao', 'Male', '8767853455', 'rushikesh@gmail.com', '2001-01-23', 'ramrao', 'sujata', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(165, 'bhatmare', 'shivani', 'sanjay', 'Female', '7554342178', 'shivanib@gmail.com', '2001-02-06', 'sanjay', 'sujata', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(166, 'musale', 'sanket', 'vishwas', 'Male', '8767853458', 'sanketm@gmail.com', '2001-11-18', 'vishwas', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(167, 'patil', 'ganesh', 'sanjay', 'Male', '8767853454', 'ganesh@gmail.com', '2000-08-20', 'sanjay', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(168, 'desai', 'fiza', 'sikander', 'Female', '9867543423', 'fiza@gmail.com', '2000-06-19', 'sikander', 'pooja', 'Muslim', 'Muslim', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(169, 'shirole', 'soham', 'vikas', 'Male', '8876543425', 'soham@gmail.com', '2001-05-25', 'vikas', 'sujata', 'Hindu', 'Lingayat', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(170, 'patil', 'vaibhav', 'raghunath', 'Male', '8767853454', 'vaibhavp@gmail.com', '2001-05-26', 'raghunath', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(171, 'patil', 'sanket', 'sunil', 'Male', '8876543423', 'sanketpatil@gmail.com', '2000-11-15', 'sunil', 'pooja', 'Hindu', 'Lingayat', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(172, 'patil', 'shivani', 'balkrishna', 'Female', '9527516706', 'shiu@gmail.com', '2000-11-20', 'balkrishna', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(173, 'chougule', 'akanksha', 'kumar', 'Female', '9867543423', 'akankashac@gmail.com', '2001-01-13', 'kumar', 'sujata', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(174, 'sayyad', 'mahmmadkaif', 'najeer', 'Male', '9527516702', 'kaif@gmail.com', '2002-02-10', 'najeer', 'muskan', 'Muslim', 'Muslim', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(175, 'dinde', 'ajay', 'goraksh', 'Male', '9527516702', 'ajay@gmail.com', '2001-05-09', 'goraksh', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(176, 'patil', 'karan', 'ashok', 'Male', '9527516776', 'karan@gmail.com', '2002-03-01', 'ashok', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(177, 'nalwade', 'yash', 'raju', 'Male', '8876543423', 'yashn@gmail.com', '2003-08-08', 'raju', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(178, 'mali', 'pranali', 'prakash', 'Female', '88765434363', 'pranali123@gmail.com', '2001-01-12', 'prakash', 'Anandi', 'Hindu', 'Mali', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(179, 'salunkhe', 'dinesh', 'santosh', 'Male', '887654300', 'dinesh@gmail.com', '2001-09-23', 'santosh', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(180, 'patil', 'shivani', 'vishnu', 'Female', '8767853454', 'shiupatil@gmail.com', '2000-07-15', 'vishnu', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(181, 'waghwade', 'aditee', 'dayanand', 'Female', '8767853450', 'aditee@gmail.com', '2000-11-06', 'dayanand', 'sunita', 'Hindu', 'Lingayat', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(183, 'bawadekar', 'amey', 'prakash', 'Male', '8767853400', 'ameyb@gmail.com', '2001-05-17', 'prakash', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(184, 'powar', 'atul', 'dhondiram', 'Male', '8876543400', 'atulpowar@gmail.com', '2000-10-07', 'dhondiram', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(185, 'patil', 'rutuja', 'anant', 'Female', '9867543423', 'rutujapatil@gmail.com', '2001-02-03', 'anant', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(186, 'vetale', 'rohit', 'bapu', 'Male', '8876543423', 'rohitv@gmail.com', '2001-05-08', 'bapu', 'Anandi', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(187, 'jadhav', 'aakanksha', 'chandkant', 'Female', '8732645300', 'akanaksha@gmail.com', '2002-05-17', 'chandrakant', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(188, 'kadvekar', 'vaibhav', 'maruti', 'Male', '8876543400', 'vaibhavk@gmail.com', '2001-11-18', 'maruti', 'sangita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(189, 'mane', 'mayuri', 'maruti', 'Female', '8876500423', 'mayuri@gmail.com', '2000-09-08', 'maruti', 'gita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(190, 'kadam', 'vedant', 'vasant', 'Male', '9867543403', 'vedant@gmail.com', '2000-12-02', 'vasant', 'pooja', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(192, 'barad', 'rohit', 'santosh', 'Male', '9867543497', 'rohitb@gmail.com', '2000-12-13', 'santosh', 'neha', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(193, 'bam', 'shruti', 'harish', 'Female', '8732645310', 'shrutib@gmail.com', '2001-12-18', 'harish', 'komal', 'Hindu', 'Brahman', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(194, 'pawar', 'akshad', 'mahesh', 'Male', '9867543420', 'akshadp@gmail.com', '2002-03-04', 'mahesh', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(195, 'salokhe', 'sumit', 'vilas', 'Male', '8876543420', 'sumits@gmail.com', '2000-05-06', 'vilas', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(196, 'balvand', 'shahanoor', 'hakim', 'Male', '9867543494', 'shahanoor@gmail.com', '2001-10-19', 'hakim', 'pooja', 'Muslim', 'Muslim', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(197, 'hebbalkar', 'tanuja', 'vaijanath', 'Female', '8732645310', 'tanujah@gmail.com', '2001-04-12', 'vaijanath', 'Anandi', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(198, 'patil', 'shriganesh', 'sanjay', 'Male', '8876543423', 'shriganesh@gmail.com', '2001-04-11', 'sanjay', 'komal', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(199, 'magdum', 'sohan', 'sunil', 'Male', '8732640013', 'sohanm@gmail.com', '2001-01-31', 'sunil', 'komal', 'Jain', 'Chaturth', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(200, 'khot', 'sayali', 'baban', 'Female', '7554300178', 'sayalik@gmail.com', '2001-07-06', 'baban', 'Anandi', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(201, 'patil', 'milind', 'mahadev', 'Male', '7554300178', 'milindp@gmail.com', '2002-06-13', 'mahadev', 'sunita', 'Hindu', 'Kunabi', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(202, 'patil', 'akshata', 'ajay', 'Female', '9527516776', 'akshatap@gmail.com', '2002-01-25', 'ajay', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(203, 'gawade', 'tejashri', 'gundu', 'Female', '9527516703', 'tejashrig@gmail.com', '2000-11-24', 'gundu', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(204, 'patil', 'vrushali', 'ramesh', 'Female', '7554342178', 'vrushalip@gmail.com', '2001-04-11', 'ramesh', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(205, 'sayyed', 'tabassum', 'aijaz', 'Female', '8767853454', 'tabassum@gmail.com', '2001-05-04', 'aijaz', 'muskan', 'Muslim', 'Muslim', 'Open', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(206, 'nandargi', 'sharanappa', 'somanath', 'Male', '9867543423', 'sharanappa@gmail.com', '1999-06-15', 'somanath', 'sujata', 'Hindu', 'Koshti', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(207, 'koshti', 'shweta', 'jitendra', 'Female', '9867543422', 'shwetak@gmail.com', '2002-01-05', 'jitendra', 'komal', 'Hindu', 'Koshti', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(208, 'mangalekar', 'shubham', 'manojkumar', 'Male', '9527516709', 'shubhamm@gmail.com', '2001-07-23', 'manojkumar', 'pooja', 'Hindu', 'Sali', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(209, 'koli', 'lalita', 'ramdas', 'Female', '7554342173', 'lalitak@gmail.com', '1999-10-26', 'ramdas', 'pooja', 'Hindu', 'Koli', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(210, 'terdale', 'pranjali', 'anandkumar', 'Female', '7554342173', 'pranjalit@gmail.com', '2001-05-19', 'anandkumar', 'Anandi', 'Hindu', 'Koshti', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(211, 'koli', 'swarup', 'rajgonda', 'Male', '8767853455', 'swarupk@gmail.com', '2001-05-29', 'rajgonda', 'pooja', 'Hindu', 'Koli', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(212, 'morabale', 'avadhut', 'dattatray', 'Male', '9527516703', 'avadhutm@gmail.com', '2000-11-11', 'dattatray', 'sunita', 'Hindu', 'Maratha', 'Open', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(213, 'erandole', 'arati', 'umesh', 'Female', '7554342175', 'aratie@gmail.com', '2002-01-09', 'umesh', 'pooja', 'Hindu', 'Koshti', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(214, 'patil', 'shriya', 'suresh', 'Female', '9527516708', 'shriyap@gmail.com', '2001-08-02', 'suresh', 'sujata', 'Hindu', 'Koshti', 'OBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(215, 'haval', 'digvijay', 'shrikant', 'Male', '7554342174', 'digvijayh@gmail.com', '2002-01-28', 'shrikant', 'sujata', 'Hindu', 'Koshti', 'OBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(216, 'kamble', 'swapnil', 'babasaheb', 'Male', '7554342173', 'swapnilk@gmail.com', '2000-03-15', 'babasaheb', 'komal', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(217, 'desai', 'pranav', 'sanjay', 'Male', '9867543428', 'pranavd@gmail.com', '2001-07-08', 'sanjay', 'pooja', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(218, 'ghodake', 'shreyash', 'narayan', 'Male', '8767853453', 'shreyashg@gmail.com', '2001-09-11', 'narayan', 'sunita', 'Hindu', 'Khatik', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(219, 'sawant', 'raj', 'jiwan', 'Male', '8767853459', 'rajs@gmail.com', '2001-03-27', 'jiwan', 'komal', 'Buddha', 'Buddhist', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(220, 'kamble', 'vedant', 'chandrakant', 'Male', '9867543467', 'vedantk@gmail.com', '2002-08-19', 'chandrakant', 'neha', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(221, 'lokhande', 'omkar', 'bhivaji', 'Male', '9527516799', 'omkarl@gmail.com', '2001-01-11', 'bhivaji', 'sunita', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(222, 'jadhav', 'saurabh', 'ramesh', 'Male', '8732645331', 'saurabhj@gmail.com', '2000-10-21', 'ramesh', 'komal', 'Hindu', 'Chambar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(223, 'kamble', 'ashwini', 'mohan', 'Female', '8876543213', 'ashwinik@gmail.com', '2001-10-01', 'mohan', 'neha', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(225, 'thanekar', 'vaibhav', 'mahendra', 'Male', '8806543423', 'vaibhavt@gmail.com', '2000-10-20', 'mahendra', 'Anandi', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(226, 'kamble', 'mahendra', 'mahesh', 'Male', '9867043420', 'mahendra@gmail.com', '2001-11-07', 'mahesh', 'pooja', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(227, 'kamble', 'kaveri', 'prakash', 'Female', '8732600313', 'kaverik@gmail.com', '2002-05-18', 'prakash', 'gita', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(228, 'kamble', 'sanket', 'shrimant', 'Male', '8032645313', 'sanketk@gmail.com', '2001-03-13', 'shrimant', 'sampatti', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(229, 'kamble', 'abhishek', 'pandurang', 'Male', '8767853454', 'abhishekpk@gmail.com', '2001-08-17', 'pandurang', 'neha', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(230, 'pandav', 'vinayak', 'ashok', 'Male', '9527516703', 'vinayak@gmail.com', '2001-03-14', 'ashok', 'pooja', 'Hindu', 'Chambar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(231, 'shinde', 'amruta', 'anil', 'Female', '8767853454', 'amushinde@gmail.com', '2000-05-13', 'anil', 'Anandi', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(232, 'bhadakwad', 'sanket', 'sanjay', 'Male', '8732645313', 'sanketsb@gmail.com', '2001-03-21', 'sanjay', 'sapana', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(233, 'ahiwale', 'snehal', 'nitin', 'Female', '8767853450', 'snehala@gmail.com', '2001-09-02', 'nitin', 'neha', 'Buddha', 'Buddhist', 'SC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(234, 'kadam', 'rushikesh', 'yuvraj', 'Male', '8876543423', 'rushi@gmail.com', '2001-03-08', 'yuvraj', 'pooja', 'Hindu', 'Dhor', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(235, 'kamble', 'ashlesha', 'ramesh', 'Female', '8876543420', 'ashlesha@gmail.com', '2002-05-18', 'ramesh', 'neha', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(236, 'nirmale', 'sakshi', 'sunil', 'Female', '8767853454', 'sakshin@gmail.com', '2001-11-08', 'sunil', 'neha', 'Hindu', 'Chambar', 'SC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(238, 'kamble', 'ruturaj', 'bandopant', 'Male', '9527516703', 'ruturajk@gmail.com', '2001-04-24', 'bandopant', 'neha', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(240, 'kamble', 'pranav', 'amar', 'Male', '8767853454', 'pranavak@gmail.com', '2002-05-22', 'amar', 'neha', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(241, 'pol', 'sanmati', 'uday', 'Female', '8767853454', 'sanmatip@gmail.com', '2002-03-10', 'uday', 'neha', 'Hindu', 'Dhor', 'SC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(242, 'tirale', 'dhananjay', 'dagadu', 'Male', '8767853454', 'dhananjay@gmail.com', '2000-11-01', 'dagadu', 'Anandi', 'Hindu', 'Mang', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(243, 'chavan', 'ajay', 'dhondiram', 'Male', '8767850054', 'ajayc@gmail.com', '2000-01-14', 'dhondiram', 'komal', 'Hindu', 'Mang', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(244, 'kamble', 'parashram', 'narayan', 'Male', '8767853454', 'parashram@gmail.com', '1999-11-19', 'narayan', 'aarti', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(245, 'kamble', 'chetan', 'uday', 'Male', '8876543403', 'chetank@gmail.com', '2001-04-10', 'uday', 'Anandi', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(246, 'kamble', 'gaurav', 'ashok', 'Male', '7554342178', 'gauravka@gmail.com', '2001-06-22', 'ashok', 'pooja', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(248, 'rukadikar', 'sudhanshu', 'dilip', 'Male', '9867543423', 'sudhanshu@gmail.com', '2000-08-29', 'dilip', 'sunita', 'Hindu', 'Mahar', 'SC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(249, 'jadhav', 'mayur', 'dharmaraj', 'Male', '9867543423', 'mayurj@gmail.com', '2001-07-30', 'dharmaraj', 'komal', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(250, 'more', 'akshada', 'vijay', 'Female', '8876543423', 'akshadamore@gmail.com', '2001-06-26', 'vijay', 'sunita', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(251, 'patil', 'pratiksha', 'jagannath', 'Female', '7554042178', 'pratikshap@gmail.com', '2001-10-02', 'jagannath', 'neha', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(252, 'patil', 'vishal', 'vikas', 'Male', '9867545423', 'vishalp@gmail.com', '2001-02-04', 'vikas', 'pooja', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(253, 'jadhav', 'ashank', 'shashikant', 'Male', '7554342172', 'ashank@gmail.com', '2001-06-18', 'shashikant', 'smita', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(254, 'gaikwad', 'aishwarya', 'pratap', 'Female', '9527516734', 'aishwarya@gmail.com', '2001-08-30', 'pratap', 'neha', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(255, 'veer', 'vikram', 'sarjerao', 'Male', '9527516704', 'vikram@gmail.com', '2001-02-01', 'sarjerao', 'komal', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(256, 'khtangle', 'nishikant', 'nivruti', 'Male', '9527516765', 'nishikant@gmail.com', '2001-07-16', 'nivruti', 'komal', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(257, 'patil', 'omkar', 'prakash', 'Male', '9867543455', 'omkarpatil@gmail.com', '2000-11-11', 'prakash', 'smita', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(258, 'falake', 'omkar', 'vijay', 'Male', '8876543456', 'omkarfalake@gmail.com', '2000-12-14', 'vijay', 'sapana', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(259, 'nalwade', 'vaishnavi', 'vinayak', 'Female', '9867543432', 'vaishnavin@gmail.com', '2001-03-07', 'vinayak', 'sampatti', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(260, 'patil', 'manali', 'milind', 'Female', '9527516733', 'manalip@gmail.com', '2001-03-29', 'milind', 'sapana', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(261, 'parabkar', 'pavan', 'ravaso', 'Male', '8876543423', 'pavanp@gmail.com', '2001-05-23', 'ravaso', 'Anandi', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(262, 'jadhav', 'prathmesh', 'shankar', 'Male', '9527516702', 'prathmeshj@gmail.com', '2001-03-06', 'shankar', 'sampatti', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(263, 'lale', 'yash', 'vikram', 'Male', '9527516755', 'yashlale@gmail.com', '2001-09-29', 'vikram', 'komal', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(264, 'patil', 'rajvardhan', 'ashok', 'Male', '9867543443', 'rajvardha@gmail.com', '2001-10-02', 'ashok', 'sunita', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(265, 'patil', 'harshvardhan', 'ashok', 'Male', '9527516756', 'harshvardhan@gmail.com', '2001-10-02', 'ashok', 'sunita', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(266, 'patil', 'samruddhi', 'arun', 'Female', '7554342179', 'samruddhip@gmail.com', '2000-10-17', 'arun', 'sujata', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(267, 'nalugade', 'saurabh', 'krishna', 'Male', '9527516766', 'saurabhn@gmail.com', '2001-03-11', 'krishna', 'pooja', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(268, 'patil', 'pratiksha', 'dadaso', 'Female', '8767853445', 'pratikshad@gmail.com', '2001-04-17', 'dadaso', 'pooja', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(269, 'dadhole', 'sumit', 'sadashiv', 'Male', '8767853457', 'sumitd@gmail.com', '2001-06-26', 'sadashiv', 'sunita', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(270, 'bhadkimkar', 'nikhil', 'nanaso', 'Male', '7554342155', 'nikhilb@gmail.com', '2001-08-02', 'nanaso', 'komal', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(271, 'patil', 'shivatej', 'yuvraj', 'Male', '9527516755', 'shivatejp@gmail.com', '2001-09-15', 'yuvraj', 'Anandi', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(272, 'karande', 'koustub', 'sunil', 'Male', '8767855454', 'koustub@gmail.com', '2000-12-16', 'sunil', 'sampatti', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(273, 'patil', 'rajnandini', 'pratap', 'Female', '8732641313', 'rajnandini@gmail.com', '2001-01-19', 'pratap', 'pooja', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(274, 'patil', 'priyanka', 'sanjay', 'Female', '9527517070', 'priyankap@gmail.com', '2002-03-09', 'sanjay', 'sunita', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(275, 'parpolkar', 'ashish', 'subhash', 'Male', '7554342121', 'ashish@gmail.com', '2001-04-28', 'subhash', 'sonal', 'Hindu', 'Maratha', 'SEBC', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(276, 'jadhav', 'rajashree', 'hiralal', 'Female', '8732645317', 'rajashree@gmail.com', '1999-03-18', 'hiralal', 'sujata', 'Hindu', 'Banjara', 'VJ-A', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(277, 'bagade', 'karina', 'suraj', 'Female', '8876543426', 'karina@gmail.com', '2000-02-10', 'suraj', 'sujata', 'Hindu', 'Kanjarbhat', 'VJ-A', 'Indian', 'Maharashtra', 'MS', '2019-2020'),
(278, 'wadar', 'pramod', 'deepak', 'Male', '9867543427', 'pramodw@gmail.com', '2001-03-06', 'deepak', 'sunita', 'Hindu', 'Wadar', 'VJ-A', 'Indian', 'Maharashtra', 'MR', '2019-2020'),
(279, 'powar', 'kareena', 'sunil', 'Female', '7554342122', 'kareenap@gmail.com', '2000-05-24', 'sunil', 'Anandi', 'Hindu', 'Wadar', 'VJ-A', 'Indian', 'Maharashtra', 'MS', '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `r_id` int(11) NOT NULL,
  `uname` varchar(80) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`r_id`, `uname`, `pass`) VALUES
(10, 'siddhesh@123', 'siddhesh@123'),
(11, 'partiksha@123', 'partiksha@123'),
(12, 'sneha@123', 'sneha@123'),
(13, 'digvijay@123', 'digvijay@123'),
(14, 'pranita@123', 'pranita@123'),
(15, 'akankasha@123', 'akankasha@123'),
(16, 'bhalchandra@123', 'bhalchandra@123'),
(17, 'siddhanath@123', 'siddhanath@123'),
(18, 'nanaso@123', 'nanaso@123'),
(19, 'bhau@123', 'bhau@123'),
(20, 'sakshi@123', 'sakshi@123'),
(21, 'pranali@123', 'pranali@123'),
(22, 'sushant@123', 'sushant@123'),
(23, 'swapnil@123', 'swapnil@123'),
(24, 'snehal@123', 'snehal@123'),
(25, 'animesh@123', 'animesh@123'),
(26, 'kedar@123', 'kedar@123'),
(27, 'prafull@123', 'prafull@123'),
(28, 'pranitaa@123', 'pranitaa@123'),
(29, 'tejas@123', 'tejas@123'),
(30, 'akash@123', 'akash@123'),
(31, 'sumit@123', 'sumit@123'),
(32, 'isha@123', 'isha@123'),
(33, 'aayesha@123', 'aayesha@123'),
(34, 'sagar@123', 'sagar@123'),
(35, 'pravin@123', 'pravin@123'),
(36, 'santosh@123', 'santosh@123'),
(37, 'ashiwini@123', 'ashiwini@123'),
(38, 'dhiraj@123', 'dhiraj@123'),
(39, 'pranav@123', 'pranav@123'),
(40, 'ritesh@123', 'ritesh@123'),
(41, 'sejal@123', 'sejal@123'),
(42, 'mohammad@123', 'mohammad@123'),
(43, 'mahesh@123', 'mahesh@123'),
(44, 'shweta@123', 'shweta@123'),
(45, 'anajali@123', 'anajali@123'),
(46, 'pooja@123', 'pooja@123'),
(47, 'siraj@123', 'siraj@123'),
(48, 'om@123', 'om@123'),
(49, 'prajakta@123', 'prajakta@123'),
(50, 'ashrafalli@123', 'ashrafalli@123'),
(51, 'sourabh@123', 'sourabh@123'),
(52, 'sakshii@123', 'sakshii@123'),
(53, 'poonam@123', 'poonam@123'),
(54, 'simaran@123', 'simaran@123'),
(55, 'siddesh@123', 'siddesh@123'),
(56, 'gayatri@123', 'gayatri@123'),
(57, 'snehall@123', 'snehall@123'),
(59, 'yogesh@123', 'yogesh@123'),
(60, 'pavan@123', 'pavan@123'),
(61, 'pranalip@123', 'pranalip@123'),
(62, 'gavas@123', 'gavas@123'),
(63, 'yash@123', 'yash@123'),
(64, 'rachana@123', 'rachana@123'),
(65, 'pratikshaa@123', 'pratikshaa@123'),
(66, 'shirin@123', 'shirin@123'),
(67, 'rohini@123', 'rohini@123'),
(68, 'madhura@123', 'madhura@123'),
(69, 'manoj@123', 'manoj@123'),
(70, 'ketakee@123', 'ketakee@123'),
(71, 'shraddha@123', 'shraddha@123'),
(72, 'anjor@123', 'anjor@123'),
(73, 'rudray@123', 'rudray@123'),
(74, 'mrunali@123', 'mrunali@123'),
(75, 'kasturi@123', 'kasturi@123'),
(76, 'snehaa@123', 'snehaa@123'),
(77, 'samruddhi@123', 'samruddhi@123'),
(78, 'yogiraj@123', 'yogiraj@123'),
(79, 'sangeeta@123', 'sangeeta@123'),
(80, 'rohit@123', 'rohit@123'),
(81, 'alfiza@123', 'alfiza@123'),
(82, 'suhas@123', 'suhas@123'),
(83, 'akshay@123', 'akshay@123'),
(84, 'akshata@123', 'akshata@123'),
(85, 'aniket@123', 'aniket@123'),
(86, 'ashwini@123', 'ashwini@123'),
(87, 'sakshia@123', 'sakshia@123'),
(88, 'omkar@123', 'omkar@123'),
(89, 'shivani@123', 'shivani@123'),
(90, 'piyush@123', 'piyush@123'),
(91, 'gayatrii@123', 'gayatrii@123'),
(92, 'vish@123', 'vish@123'),
(93, 'shwetai@123', 'shwetai@123'),
(94, 'sarika@123', 'sarika@123'),
(95, 'rutuja@123', 'rutuja@123'),
(96, 'anuja@123', 'anuja@123'),
(97, 'samiksha@123', 'samiksha@123'),
(98, 'atul@123', 'atul@123'),
(99, 'omkarm@123', 'omkarm@123'),
(100, 'pradnya@123', 'pradnya@123'),
(101, 'ankita@123', 'ankita@123'),
(102, 'shruti@123', 'shruti@123'),
(103, 'shruti@123', 'shruti@123'),
(104, 'bhalchandraa@123', 'bhalchandraa@123'),
(105, 'sakshis@123', 'sakshis@123'),
(106, 'rutu@123', 'rutu@123'),
(107, 'gaurav@123', 'gaurav@123'),
(108, 'sandhya@123', 'sandhya@123'),
(109, 'sushama@123', 'sushama@123'),
(110, 'prasad@123', 'prasad@123'),
(111, 'rohinip@123', 'rohinip@123'),
(112, 'shriyal@123', 'shriyal@123'),
(113, 'partikshal@123', 'partikshal@123'),
(114, 'priti@123', 'priti@123'),
(115, 'snehalp@123', 'snehalp@123'),
(116, 'prathmesh@123', 'prathmesh@123'),
(117, 'shivaraj@123', 'shivaraj@123'),
(118, 'ashutosh@123', 'ashutosh@123'),
(119, 'mitali@123', 'mitali@123'),
(120, 'ruturaj@123', 'ruturaj@123'),
(121, 'nilesh@123', 'nilesh@123'),
(122, 'rakesh@123', 'rakesh@123'),
(123, 'kallesh@123', 'kallesh@123'),
(124, 'amrutah@123', 'amrutah@123'),
(125, 'madhumati@123', 'madhumati@123'),
(126, 'abhishek@123', 'abhishek@123'),
(127, 'sanket@123', 'sanket@123'),
(128, 'siddharthh@123', 'siddharthh@123'),
(129, 'mrunalip@123', 'mrunalip@123'),
(130, 'devyani@123', 'devyani@123'),
(131, 'pandharinath@123', 'pandharinath@123'),
(132, 'vaishnavi@123', 'vaishnavi@123'),
(133, 'sanketp@123', 'sanketp@123'),
(134, 'riteshs@123', 'riteshs@123'),
(135, 'ujjwala@123', 'ujjwala@123'),
(136, 'jyoti@123', 'jyoti@123'),
(137, 'dhairyasheel@123', 'dhairyasheel@123'),
(138, 'rujuta@123', 'rujuta@123'),
(139, 'rutujar@123', 'rutujar@123'),
(140, 'aditi@123', 'aditi@123'),
(141, 'rutujam@123', 'rutujam@123'),
(142, 'pratik@123', 'pratik@123'),
(143, 'vaibhav@123', 'vaibhav@123'),
(144, 'kunal@123', 'kunal@123'),
(145, 'digvijayp@123', 'digvijayp@123'),
(146, 'khushi@123', 'khushi@123'),
(147, 'shivarajs@123', 'shivarajs@123'),
(148, 'tushar@123', 'tushar@123'),
(149, 'shrutij@123', 'shrutij@123'),
(150, 'komal@123', 'komal@123'),
(151, 'ajinkya@123', 'ajinkya@123'),
(152, 'shivanip@123', 'shivanip@123'),
(153, 'asmita@123', 'asmita@123'),
(154, 'avdhoot@123', 'avdhoot@123'),
(155, 'atharv@123', 'atharv@123'),
(156, 'akashk@123', 'akashk@123'),
(157, 'amey@123', 'amey@123'),
(158, 'priyanka@123', 'priyanka@123'),
(159, 'supriya@123', 'supriya@123'),
(160, 'prajaktap@123', 'prajaktap@123'),
(161, 'arati@123', 'arati@123'),
(162, 'manali@123', 'manali@123'),
(163, 'asitkumar@123', 'asitkumar@123'),
(164, 'rushikesh@123', 'rushikesh@123'),
(165, 'shivanib@123', 'shivanib@123'),
(166, 'sanketm@123', 'sanketm@123'),
(167, 'ganesh@123', 'ganesh@123'),
(168, 'fiza@123', 'fiza@123'),
(169, 'soham@123', 'soham@123'),
(170, 'vaibhavp@123', 'vaibhavp@123'),
(171, 'sanketpatil@123', 'sanketpatil@123'),
(172, 'shiu@123', 'shiu@123'),
(173, 'akankashac@123', 'akankashac@123'),
(174, 'kaif@123', 'kaif@123'),
(175, 'ajay@123', 'ajay@123'),
(176, 'karan@123', 'karan@123'),
(177, 'yashn@123', 'yashn@123'),
(178, 'pranalim123', 'pranalim123'),
(179, 'dinesh@123', 'dinesh@123'),
(180, 'shiupatil@123', 'shiupatil@123'),
(181, 'aditee@123', 'aditee@123'),
(183, 'ameyb@123', 'ameyb@123'),
(184, 'atulpowar@123', 'atulpowar@123'),
(185, 'rutujapatil@123', 'rutujapatil@123'),
(186, 'rohitv@123', 'rohitv@123'),
(187, 'akanaksha@123', 'akanaksha@123'),
(188, 'vaibhavk@123', 'vaibhavk@123'),
(189, 'mayuri@123', 'mayuri@123'),
(190, 'vedant@123', 'vedant@123'),
(192, 'rohitb@123', 'rohitb@123'),
(193, 'shrutib@123', 'shrutib@123'),
(194, 'akshadp@123', 'akshadp@123'),
(195, 'sumits@123', 'sumits@123'),
(196, 'shahanoor@123', 'shahanoor@123'),
(197, 'tanujah@123', 'tanujah@123'),
(198, 'shriganesh@123', 'shriganesh@123'),
(199, 'sohanm@123', 'sohanm@123'),
(200, 'sayalik@123', 'sayalik@123'),
(201, 'milindp@123', 'milindp@123'),
(202, 'akshatap@123', 'akshatap@123'),
(203, 'tejashrig@123', 'tejashrig@123'),
(204, 'vrushalip@123', 'vrushalip@123'),
(205, 'tabassum@123', 'tabassum@123'),
(206, 'sharanappa@123', 'sharanappa@123'),
(207, 'shwetak@123', 'shwetak@123'),
(208, 'shubhamm@123', 'shubhamm@123'),
(209, 'lalitak@123', 'lalitak@123'),
(210, 'pranjalit@123', 'pranjalit@123'),
(211, 'swarupk@123', 'swarupk@123'),
(212, 'avadhutm@123', 'avadhutm@123'),
(213, 'aratie@123', 'aratie@123'),
(214, 'shriyap@123', 'shriyap@123'),
(215, 'digvijayh@123', 'digvijayh@123'),
(216, 'swapnilk@123', 'swapnilk@123'),
(217, 'pranavd@123', 'pranavd@123'),
(218, 'shreyashg@123', 'shreyashg@123'),
(219, 'rajs@123', 'rajs@123'),
(220, 'vedantk@123', 'vedantk@123'),
(221, 'omkarl@123', 'omkarl@123'),
(222, 'saurabhj@123', 'saurabhj@123'),
(223, 'ashwinik@123', 'ashwinik@123'),
(225, 'vaibhavt@123', 'vaibhavt@123'),
(226, 'mahendra@123', 'mahendra@123'),
(227, 'kaverik@123', 'kaverik@123'),
(228, 'sanketk@123', 'sanketk@123'),
(229, 'abhishekpk@123', 'abhishekpk@123'),
(230, 'vinayak@123', 'vinayak@123'),
(231, 'amushinde@123', 'amushinde@123'),
(232, 'sanketsb@123', 'sanketsb@123'),
(233, 'snehala@123', 'snehala@123'),
(234, 'rushi@123', 'rushi@123'),
(235, 'ashlesha@123', 'ashlesha@123'),
(236, 'sakshin@123', 'sakshin@123'),
(238, 'ruturajk@123', 'ruturajk@123'),
(240, 'pranavak@123', 'pranavak@123'),
(241, 'sanmatip@123', 'sanmatip@123'),
(242, 'dhananjay@123', 'dhananjay@123'),
(243, 'ajayc@123', 'ajayc@123'),
(244, 'parashram@123', 'parashram@123'),
(245, 'chetank@123', 'chetank@123'),
(246, 'gauravka@123', 'gauravka@123'),
(248, 'sudhanshu@123', 'sudhanshu@123'),
(249, 'mayurj@123', 'mayurj@123'),
(250, 'akshadamore@123', 'akshadamore@123'),
(251, 'pratikshap@123', 'pratikshap@123'),
(252, 'vishalp@123', 'vishalp@123'),
(253, 'ashank@123', 'ashank@123'),
(254, 'aishwarya@123', 'aishwarya@123'),
(255, 'vikram@123', 'vikram@123'),
(256, 'nishikant@123', 'nishikant@123'),
(257, 'omkarpatil@123', 'omkarpatil@123'),
(258, 'omkarfalake@123', 'omkarfalake@123'),
(259, 'vaishnavin@123', 'vaishnavin@123'),
(260, 'manalip@123', 'manalip@123'),
(261, 'pavanp@123', 'pavanp@123'),
(262, 'prathmeshj@123', 'prathmeshj@123'),
(263, 'yashlale@123', 'yashlale@123'),
(264, 'rajvardha@123|', 'rajvardha@123|'),
(265, 'harshvardhan@123', 'harshvardhan@123'),
(266, 'samruddhip@123', 'samruddhip@123'),
(267, 'saurabhn@123', 'saurabhn@123'),
(268, 'pratikshad@123', 'pratikshad@123'),
(269, 'sumitd@123', 'sumitd@123'),
(270, 'nikhilb@123', 'nikhilb@123'),
(271, 'shivatejp@123', 'shivatejp@123'),
(272, 'koustub@123', 'koustub@123'),
(273, 'rajnandini@123', 'rajnandini@123'),
(274, 'priyankap@123', 'priyankap@123'),
(275, 'ashish@123', 'ashish@123'),
(276, 'rajashree@123', 'rajashree@123'),
(277, 'karina@123', 'karina@123'),
(278, 'pramodw@123', 'pramodw@123'),
(279, 'kareenap@123', 'kareenap@123');

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`r_id`, `r_name`) VALUES
(1, 'Hindu'),
(2, 'Jain'),
(5, 'Christian'),
(6, 'Muslim'),
(7, 'Buddha'),
(8, 'Sikh');

-- --------------------------------------------------------

--
-- Table structure for table `rescat`
--

CREATE TABLE `rescat` (
  `rcat_id` int(11) NOT NULL,
  `rcat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rescat`
--

INSERT INTO `rescat` (`rcat_id`, `rcat_name`) VALUES
(1, 'open'),
(3, 'Reserved category');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `r_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Maharashtra'),
(2, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `studinfo`
--

CREATE TABLE `studinfo` (
  `id` int(11) NOT NULL,
  `r_no` int(11) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `mbno` varchar(10) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `fathername` varchar(50) DEFAULT NULL,
  `mothername` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `subcast` varchar(50) DEFAULT NULL,
  `castcat` varchar(50) DEFAULT NULL,
  `nation` varchar(50) DEFAULT NULL,
  `domicile` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `taluka` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pcode` int(11) DEFAULT NULL,
  `ename` varchar(50) DEFAULT NULL,
  `board` varchar(50) DEFAULT NULL,
  `clgname` varchar(50) DEFAULT NULL,
  `edugap` varchar(20) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `examseat` varchar(50) DEFAULT NULL,
  `tmark` int(11) DEFAULT NULL,
  `outof` int(11) DEFAULT NULL,
  `percentage` float(5,2) DEFAULT NULL,
  `passingyear` int(11) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studinfo`
--

INSERT INTO `studinfo` (`id`, `r_no`, `username`, `password`, `lname`, `fname`, `mname`, `gender`, `mbno`, `email`, `dob`, `fathername`, `mothername`, `religion`, `subcast`, `castcat`, `nation`, `domicile`, `address`, `district`, `taluka`, `state`, `pcode`, `ename`, `board`, `clgname`, `edugap`, `reason`, `examseat`, `tmark`, `outof`, `percentage`, `passingyear`, `course`, `subject`) VALUES
(26, 49131, 'pranali@123', 'Pranali@123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, 'patil', 'pranali', 'rajendra', 'Female', '2147483647', 'pranali@123', '0000-00-00', 'rajendra', 'sujata', 'JAIN', 'Pancham', 'OBC', 'Indian', 'Maharashtra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nagaon', 'Kolhapur', 'Hatkanangale', 'Maharashtra', 416122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HSC', 'Maharashtra State Board', 'VCK', 'No', '', 'f106146', 432, 650, 66.46, 2019, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'on'),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', 'on'),
(32, NULL, NULL, NULL, 'patil', 'pranali', 'rajendra', 'Female', '2147483647', 'pranali@123', '0000-00-00', 'rajendra', 'sujata', 'JAIN', 'Pancham', 'EWS', 'Indian', 'Maharashtra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, 'patil', 'pranali', 'rajendra', 'Female', '2147483647', 'pranali@123', '2020-01-08', 'rajendra', 'sujata', 'Hindu', 'Maratha', 'EWS', 'Indian', 'Maharashtra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '8,17,18,19'),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '17,22,23,24'),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '8,17,22,23'),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B.Sc-I', 'Statistics,'),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B.Sc-I', ''),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B.Sc-I', ''),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B.Sc-I', ''),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B.Sc-I', ''),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B.Sc-I', 'Physics,Chemistry,Maths,Statistics'),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B.Sc-I', 'Physics,Maths,Electronics,Computer Science'),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B.Com-I', 'Principles of Business Management,English for Business Communication,Financial Accounting,Business Economics');

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `l_id` int(11) DEFAULT NULL,
  `r_no` int(11) DEFAULT NULL,
  `username` varchar(70) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_info1`
--

CREATE TABLE `stud_info1` (
  `l_id` int(11) DEFAULT NULL,
  `r_no` int(11) DEFAULT NULL,
  `username` varchar(70) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `lname` varchar(70) DEFAULT NULL,
  `fname` varchar(70) DEFAULT NULL,
  `mname` varchar(70) DEFAULT NULL,
  `gender` varchar(70) DEFAULT NULL,
  `mbno` int(11) DEFAULT NULL,
  `email` varchar(59) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `fathername` varchar(70) DEFAULT NULL,
  `mothername` varchar(70) DEFAULT NULL,
  `religion` varchar(70) DEFAULT NULL,
  `subcast` varchar(70) DEFAULT NULL,
  `castcat` varchar(70) DEFAULT NULL,
  `nation` varchar(70) DEFAULT NULL,
  `domicile` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_info1`
--

INSERT INTO `stud_info1` (`l_id`, `r_no`, `username`, `password`, `lname`, `fname`, `mname`, `gender`, `mbno`, `email`, `dob`, `fathername`, `mothername`, `religion`, `subcast`, `castcat`, `nation`, `domicile`) VALUES
(NULL, 99836, 'pranali@123', 'Pranali@123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `scat_id` int(11) NOT NULL,
  `scat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`scat_id`, `scat_name`) VALUES
(1, 'Maratha'),
(2, 'Pancham'),
(4, 'Mali'),
(5, 'Chaturth'),
(6, 'Lohar'),
(7, 'Kasar'),
(8, 'Raval'),
(9, 'Gondhali'),
(10, 'Nath panti davari gosavi'),
(11, 'Gavali'),
(12, 'Dhangar'),
(13, 'Shimpi'),
(14, 'Wani'),
(15, 'Parit'),
(16, 'Teli'),
(17, 'Kumbhar'),
(18, 'Nhavi'),
(19, 'Gurav'),
(20, 'Jangam'),
(21, 'Sutar'),
(22, 'Muslim'),
(23, 'Kunabi'),
(24, 'Lingayat'),
(25, 'Darji'),
(26, 'Attar'),
(27, 'Mullani'),
(29, 'Vaishvani'),
(30, 'Sonar'),
(31, 'Brahman'),
(32, 'Mahil'),
(33, 'Lingayat Wani'),
(35, 'Sunni'),
(36, 'Rajput Bhamata'),
(37, 'Padmshali'),
(38, 'Sindhi'),
(39, 'Koshti'),
(40, 'Koli'),
(41, 'Sali'),
(42, 'Mahar'),
(43, 'Khatik'),
(44, 'Chambar'),
(45, 'Buddhist'),
(46, 'Dhor'),
(47, 'Mang'),
(48, 'Banjara'),
(49, 'Kanjarbhat'),
(50, 'Wadar');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(70) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_id`, `s_name`, `c_id`) VALUES
(4, 'Marathi', 9),
(7, 'Principles of Business Management', 8),
(8, 'Physics', 7),
(9, 'Hindi', 9),
(10, 'English', 9),
(11, 'Economics', 9),
(12, 'Political Science', 9),
(13, 'History', 9),
(14, 'Sociology', 9),
(15, 'Geography', 9),
(16, 'Home Science', 9),
(17, 'Chemistry', 7),
(18, 'Maths', 7),
(19, 'Statistics', 7),
(20, 'Electronics', 7),
(21, 'Computer Science', 7),
(22, 'Botany', 7),
(23, 'Zoology', 7),
(24, 'Biotech(Optional)', 7),
(25, 'Microbiology', 7),
(26, 'English for Business Communication', 8),
(27, 'Financial Accounting', 8),
(28, 'Business Economics', 8),
(29, 'Principles of Marketing', 8),
(30, 'Insurance', 8),
(31, 'Business Mathematics', 8);

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE `taluka` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`t_id`, `t_name`) VALUES
(1, 'Hatkanangale'),
(3, 'Karveer'),
(4, 'Panhala'),
(5, 'Shirala'),
(6, 'Walwa'),
(7, 'Palus'),
(8, 'Miraj'),
(9, 'Atpadi'),
(10, 'Shahuwadi'),
(11, 'Shirol'),
(12, 'Gaganbavda'),
(13, 'Kagal'),
(14, 'Radhanagari'),
(15, 'Chandgad'),
(16, 'Ajara');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `regino` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(60) DEFAULT 'unverify'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`regino`, `date`, `status`) VALUES
('77286', '2020-01-28 16:21:36', 'verified'),
('93381', '2020-01-28 16:22:06', 'verified'),
('96344', '2020-01-28 16:22:26', 'verified'),
('88417', '2020-01-28 16:22:55', 'verified'),
('28333', '2020-01-28 16:23:08', 'verified'),
('69544', '2020-01-28 16:23:22', 'verified'),
('48341', '2020-01-28 16:23:37', 'verified'),
('27109', '2020-01-28 16:24:59', 'verified'),
('60576', '2020-01-28 16:25:11', 'verified'),
('81326', '2020-01-28 16:25:27', 'verified'),
('17062', '2020-01-28 16:25:42', 'verified'),
('16830', '2020-01-28 16:25:56', 'verified'),
('49380', '2020-01-28 16:26:26', 'verified'),
('15507', '2020-01-28 16:26:40', 'verified'),
('96632', '2020-01-28 16:27:03', 'verified'),
('31209', '2020-01-28 16:27:14', 'verified'),
('71202', '2020-01-28 16:27:32', 'verified'),
('17192', '2020-01-28 16:27:50', 'verified'),
('77324', '2020-01-28 16:28:05', 'verified'),
('76754', '2020-01-28 16:28:19', 'verified'),
('63104', '2020-01-28 16:28:40', 'verified'),
('86569', '2020-01-28 16:29:03', 'verified'),
('14291', '2020-01-28 16:29:16', 'verified'),
('25259', '2020-01-28 16:29:27', 'verified'),
('12299', '2020-01-28 16:29:42', 'verified'),
('88165', '2020-01-28 16:29:58', 'verified'),
('83645', '2020-01-28 16:30:18', 'verified'),
('56865', '2020-01-28 16:30:35', 'verified'),
('26886', '2020-01-28 16:30:48', 'verified'),
('64720', '2020-01-28 16:31:06', 'verified'),
('43876', '2020-01-28 16:31:26', 'verified'),
('85440', '2020-01-28 16:32:13', 'verified'),
('50206', '2020-01-28 16:33:05', 'verified'),
('36253', '2020-01-28 16:35:34', 'verified'),
('88380', '2020-01-28 16:35:54', 'verified'),
('26195', '2020-01-28 16:36:21', 'verified'),
('20900', '2020-01-28 16:36:36', 'verified'),
('62598', '2020-01-28 16:36:55', 'verified'),
('40048', '2020-01-28 16:37:08', 'verified'),
('99058', '2020-01-28 16:37:21', 'verified'),
('75046', '2020-01-28 16:37:44', 'verified'),
('43967', '2020-01-28 16:38:03', 'verified'),
('44159', '2020-01-28 16:38:18', 'verified'),
('27039', '2020-01-28 16:38:40', 'verified'),
('65129', '2020-01-28 16:38:54', 'verified'),
('74217', '2020-01-28 16:39:14', 'verified'),
('38654', '2020-01-28 16:40:03', 'verified'),
('37072', '2020-01-28 16:40:25', 'verified'),
('96729', '2020-01-28 16:40:48', 'verified'),
('66278', '2020-01-28 16:41:03', 'verified'),
('95621', '2020-01-28 16:41:21', 'verified'),
('36250', '2020-01-28 16:41:44', 'verified'),
('46020', '2020-01-28 16:42:15', 'verified'),
('27777', '2020-01-28 16:42:32', 'verified'),
('21660', '2020-01-28 16:42:46', 'verified'),
('40901', '2020-01-28 16:43:05', 'verified'),
('25669', '2020-01-28 16:43:16', 'verified'),
('55681', '2020-01-28 16:43:32', 'verified'),
('50138', '2020-01-28 16:43:51', 'verified'),
('25623', '2020-01-28 16:44:04', 'verified'),
('89787', '2020-01-28 16:44:34', 'verified'),
('53583', '2020-01-28 16:44:52', 'verified'),
('15981', '2020-01-28 16:45:05', 'verified'),
('82895', '2020-01-28 16:45:27', 'verified'),
('77011', '2020-01-28 16:45:38', 'verified'),
('34344', '2020-01-28 16:45:52', 'verified'),
('61954', '2020-01-28 16:46:11', 'verified'),
('44695', '2020-01-28 16:46:32', 'verified'),
('83327', '2020-01-28 16:46:59', 'verified'),
('15500', '2020-01-28 16:47:12', 'verified'),
('32459', '2020-01-28 16:47:35', 'verified'),
('47573', '2020-01-28 16:47:52', 'verified'),
('51279', '2020-01-28 16:48:11', 'verified'),
('18479', '2020-01-28 16:48:29', 'verified'),
('76692', '2020-01-28 16:48:46', 'verified'),
('90235', '2020-01-28 16:49:02', 'verified'),
('61350', '2020-01-28 16:49:18', 'verified'),
('12674', '2020-01-28 16:49:59', 'verified'),
('72395', '2020-01-28 16:50:38', 'verified'),
('25246', '2020-01-28 16:50:54', 'verified'),
('15247', '2020-01-28 16:51:09', 'verified'),
('34955', '2020-01-28 16:51:26', 'verified'),
('59168', '2020-01-28 16:51:48', 'verified'),
('56304', '2020-01-28 16:52:00', 'verified'),
('92561', '2020-01-28 16:52:18', 'verified'),
('58422', '2020-01-28 16:52:35', 'verified'),
('84445', '2020-01-28 16:52:53', 'verified'),
('21442', '2020-01-28 16:53:06', 'verified'),
('10851', '2020-01-28 16:53:22', 'verified'),
('51678', '2020-01-28 16:53:44', 'verified'),
('53989', '2020-01-28 16:54:05', 'verified'),
('20991', '2020-01-28 16:54:19', 'verified'),
('84315', '2020-01-28 16:54:36', 'verified'),
('81931', '2020-01-28 16:55:06', 'verified'),
('98855', '2020-01-28 16:55:19', 'verified'),
('16011', '2020-01-28 16:55:35', 'verified'),
('32419', '2020-01-28 16:55:53', 'verified'),
('91358', '2020-01-28 16:56:16', 'verified'),
('91708', '2020-01-28 16:56:36', 'verified'),
('14727', '2020-01-28 16:57:00', 'verified'),
('26352', '2020-01-28 16:57:17', 'verified'),
('35477', '2020-01-28 16:57:39', 'verified'),
('18100', '2020-01-28 16:57:55', 'verified'),
('34551', '2020-01-28 16:58:13', 'verified'),
('52156', '2020-01-28 16:58:33', 'verified'),
('27245', '2020-01-28 16:58:54', 'verified'),
('70607', '2020-01-28 16:59:24', 'verified'),
('33461', '2020-01-28 16:59:45', 'verified'),
('57807', '2020-01-28 17:00:03', 'verified'),
('69128', '2020-01-28 17:00:19', 'verified'),
('72866', '2020-01-28 17:00:32', 'verified'),
('63551', '2020-01-28 17:00:46', 'verified'),
('61692', '2020-01-28 17:01:09', 'verified'),
('91801', '2020-01-28 17:01:27', 'verified'),
('59783', '2020-01-28 17:01:45', 'verified'),
('19608', '2020-01-28 17:02:01', 'verified'),
('48214', '2020-01-28 17:02:21', 'verified'),
('85329', '2020-01-28 17:02:38', 'verified'),
('78335', '2020-01-28 17:02:55', 'verified'),
('70337', '2020-01-28 17:03:12', 'verified'),
('26522', '2020-01-28 17:03:33', 'verified'),
('42956', '2020-01-28 17:03:55', 'verified'),
('80593', '2020-01-28 17:04:18', 'verified'),
('48695', '2020-01-28 17:04:44', 'verified'),
('88616', '2020-01-28 17:05:05', 'verified'),
('12094', '2020-01-28 17:05:22', 'verified'),
('55126', '2020-01-28 17:05:37', 'verified'),
('82645', '2020-01-28 17:06:23', 'verified'),
('15055', '2020-01-28 17:06:54', 'verified'),
('46159', '2020-01-28 17:07:17', 'verified'),
('44441', '2020-01-28 17:07:29', 'verified'),
('81041', '2020-01-28 17:07:51', 'verified'),
('64641', '2020-01-28 17:08:09', 'verified'),
('42032', '2020-01-28 17:08:29', 'verified'),
('89873', '2020-01-28 17:08:49', 'verified'),
('88032', '2020-01-28 17:09:05', 'verified'),
('10895', '2020-01-28 17:09:23', 'verified'),
('77807', '2020-01-28 17:09:34', 'verified'),
('96159', '2020-01-28 17:09:55', 'verified'),
('76430', '2020-01-28 17:10:14', 'verified'),
('20769', '2020-01-28 17:10:29', 'verified'),
('79268', '2020-01-28 17:10:53', 'verified'),
('69594', '2020-01-28 17:11:11', 'verified'),
('74936', '2020-01-28 17:11:41', 'verified'),
('79688', '2020-01-28 17:12:04', 'verified'),
('61063', '2020-01-28 17:24:10', 'verified'),
('23453', '2020-01-28 17:24:26', 'verified'),
('21650', '2020-01-28 17:24:44', 'verified'),
('39591', '2020-01-28 17:25:04', 'verified'),
('94192', '2020-01-28 17:25:20', 'verified'),
('74941', '2020-01-28 17:25:38', 'verified'),
('72096', '2020-01-28 17:25:53', 'verified'),
('55902', '2020-01-28 17:26:07', 'verified'),
('88416', '2020-01-28 17:26:21', 'verified'),
('46182', '2020-01-28 17:26:45', 'verified'),
('89956', '2020-01-28 17:27:04', 'verified'),
('83630', '2020-01-28 17:27:21', 'verified'),
('10470', '2020-01-28 17:27:38', 'verified'),
('83742', '2020-01-28 17:27:56', 'verified'),
('56844', '2020-01-28 17:28:23', 'verified'),
('76859', '2020-01-28 17:28:38', 'verified'),
('73393', '2020-01-28 17:28:56', 'verified'),
('26084', '2020-01-28 17:29:16', 'verified'),
('80545', '2020-01-28 17:29:32', 'verified'),
('59077', '2020-01-28 17:29:47', 'verified'),
('50118', '2020-01-28 17:30:01', 'verified'),
('74705', '2020-01-28 17:30:20', 'verified'),
('67697', '2020-01-28 17:30:40', 'verified'),
('44838', '2020-01-28 17:31:01', 'verified'),
('28216', '2020-01-28 17:31:22', 'verified'),
('96204', '2020-01-28 17:31:43', 'verified'),
('28370', '2020-01-28 17:32:24', 'verified'),
('60123', '2020-01-28 17:32:36', 'verified'),
('14715', '2020-01-28 17:32:53', 'verified'),
('64307', '2020-01-28 17:33:10', 'verified'),
('92815', '2020-01-28 17:33:25', 'verified'),
('88097', '2020-01-28 17:33:46', 'verified'),
('53118', '2020-01-28 17:34:22', 'verified'),
('68170', '2020-01-28 17:34:39', 'verified'),
('46380', '2020-01-28 17:34:54', 'verified'),
('56781', '2020-01-28 17:35:09', 'verified'),
('74400', '2020-01-28 17:35:26', 'verified'),
('40186', '2020-01-28 17:35:41', 'verified'),
('71907', '2020-01-28 17:36:00', 'verified'),
('54546', '2020-01-28 17:36:31', 'verified'),
('37120', '2020-01-28 17:37:00', 'verified'),
('18908', '2020-01-28 17:37:19', 'verified'),
('10421', '2020-01-28 17:37:35', 'verified'),
('20884', '2020-01-28 17:37:47', 'verified'),
('40930', '2020-01-28 17:38:07', 'verified'),
('39749', '2020-01-28 17:38:33', 'verified'),
('45171', '2020-01-28 17:38:46', 'verified'),
('50212', '2020-01-28 17:38:58', 'verified'),
('13423', '2020-01-28 17:39:14', 'verified'),
('97989', '2020-01-28 17:39:34', 'verified'),
('49316', '2020-01-28 17:39:57', 'verified'),
('26891', '2020-01-28 17:40:23', 'verified'),
('69068', '2020-01-28 17:40:42', 'verified'),
('27956', '2020-01-28 17:40:55', 'verified'),
('53451', '2020-01-28 17:41:10', 'verified'),
('80348', '2020-01-28 17:41:31', 'verified'),
('46664', '2020-01-28 17:41:46', 'verified'),
('82002', '2020-01-28 17:42:02', 'verified'),
('91841', '2020-01-28 17:42:22', 'verified'),
('60982', '2020-01-28 17:42:51', 'verified'),
('59311', '2020-01-28 17:43:03', 'verified'),
('46110', '2020-01-28 17:43:14', 'verified'),
('20025', '2020-01-28 17:43:32', 'verified'),
('49730', '2020-01-28 17:43:52', 'verified'),
('13827', '2020-01-28 17:44:08', 'verified'),
('32005', '2020-01-28 17:44:24', 'verified'),
('45734', '2020-01-28 17:44:43', 'verified'),
('22309', '2020-01-28 17:44:58', 'verified'),
('84060', '2020-01-28 17:45:28', 'verified'),
('28929', '2020-01-28 17:45:47', 'verified'),
('40806', '2020-01-28 17:46:13', 'verified'),
('31451', '2020-01-28 17:46:28', 'verified'),
('63404', '2020-01-28 17:46:48', 'verified'),
('82808', '2020-01-28 17:47:04', 'verified'),
('28640', '2020-01-28 17:47:20', 'verified'),
('93084', '2020-01-28 17:47:42', 'verified'),
('35334', '2020-01-28 17:47:54', 'verified'),
('71552', '2020-01-28 17:48:07', 'verified'),
('79106', '2020-01-28 17:48:21', 'verified'),
('66531', '2020-01-28 17:48:38', 'verified'),
('34578', '2020-01-28 17:48:58', 'verified'),
('36364', '2020-01-28 17:49:14', 'verified'),
('17627', '2020-01-28 17:49:27', 'verified'),
('48695', '2020-01-28 17:49:48', 'verified'),
('45039', '2020-01-28 17:50:16', 'verified'),
('55679', '2020-01-28 17:50:38', 'verified'),
('85583', '2020-01-28 17:50:55', 'verified'),
('57364', '2020-01-28 17:51:19', 'verified'),
('68883', '2020-01-28 17:51:32', 'verified'),
('52007', '2020-01-28 17:51:56', 'verified'),
('95258', '2020-01-28 17:52:20', 'verified'),
('48932', '2020-01-28 17:52:41', 'verified'),
('94302', '2020-01-28 17:53:16', 'verified'),
('84800', '2020-01-28 17:53:31', 'verified'),
('83672', '2020-01-28 17:53:53', 'verified'),
('33303', '2020-01-28 17:54:06', 'verified'),
('55428', '2020-01-28 17:54:21', 'verified'),
('23591', '2020-01-28 17:54:42', 'verified'),
('38344', '2020-01-28 17:55:09', 'verified'),
('88937', '2020-01-28 17:55:27', 'verified'),
('94089', '2020-01-28 17:55:44', 'verified'),
('23353', '2020-01-28 17:56:01', 'verified'),
('35741', '2020-01-28 17:56:31', 'verified'),
('32795', '2020-01-28 17:56:53', 'verified'),
('98399', '2020-01-28 17:57:21', 'verified'),
('57572', '2020-01-28 17:57:34', 'verified'),
('68379', '2020-01-28 17:57:49', 'verified'),
('64632', '2020-01-28 17:58:07', 'verified'),
('51230', '2020-01-28 17:58:27', 'verified'),
('73737', '2020-01-28 17:58:53', 'verified'),
('73295', '2020-01-28 17:59:21', 'verified'),
('53458', '2020-01-28 17:59:39', 'verified'),
('59205', '2020-01-28 17:59:58', 'verified'),
('30578', '2020-01-28 18:00:26', 'verified'),
('58793', '2020-01-28 18:00:48', 'verified'),
('98648', '2020-01-28 18:01:05', 'verified'),
('57825', '2020-01-28 18:01:25', 'verified'),
('84235', '2020-01-28 18:01:48', 'verified'),
('86163', '2020-01-28 18:02:14', 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `acayear`
--
ALTER TABLE `acayear`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `addinfo`
--
ALTER TABLE `addinfo`
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `cands`
--
ALTER TABLE `cands`
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `domicile`
--
ALTER TABLE `domicile`
  ADD PRIMARY KEY (`domicile_id`);

--
-- Indexes for table `ggrant`
--
ALTER TABLE `ggrant`
  ADD PRIMARY KEY (`grant_id`);

--
-- Indexes for table `grant1`
--
ALTER TABLE `grant1`
  ADD PRIMARY KEY (`grant_id`);

--
-- Indexes for table `group1`
--
ALTER TABLE `group1`
  ADD PRIMARY KEY (`g_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `fk_sid` (`s_id`);

--
-- Indexes for table `group2`
--
ALTER TABLE `group2`
  ADD PRIMARY KEY (`g_id`),
  ADD KEY `FK_cid` (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`l_id`,`r_no`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`nation_id`);

--
-- Indexes for table `nongrant`
--
ALTER TABLE `nongrant`
  ADD PRIMARY KEY (`ngrant_id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`Personid`);

--
-- Indexes for table `pinfo`
--
ALTER TABLE `pinfo`
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `rescat`
--
ALTER TABLE `rescat`
  ADD PRIMARY KEY (`rcat_id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `studinfo`
--
ALTER TABLE `studinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_info1`
--
ALTER TABLE `stud_info1`
  ADD KEY `l_id` (`l_id`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`scat_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `taluka`
--
ALTER TABLE `taluka`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acayear`
--
ALTER TABLE `acayear`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `domicile`
--
ALTER TABLE `domicile`
  MODIFY `domicile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ggrant`
--
ALTER TABLE `ggrant`
  MODIFY `grant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `grant1`
--
ALTER TABLE `grant1`
  MODIFY `grant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `group1`
--
ALTER TABLE `group1`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `group2`
--
ALTER TABLE `group2`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `nation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nongrant`
--
ALTER TABLE `nongrant`
  MODIFY `ngrant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `Personid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rescat`
--
ALTER TABLE `rescat`
  MODIFY `rcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studinfo`
--
ALTER TABLE `studinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `scat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `taluka`
--
ALTER TABLE `taluka`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic`
--
ALTER TABLE `academic`
  ADD CONSTRAINT `academic_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `registration` (`r_id`);

--
-- Constraints for table `addinfo`
--
ALTER TABLE `addinfo`
  ADD CONSTRAINT `addinfo_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `registration` (`r_id`);

--
-- Constraints for table `cands`
--
ALTER TABLE `cands`
  ADD CONSTRAINT `cands_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `registration` (`r_id`);

--
-- Constraints for table `group1`
--
ALTER TABLE `group1`
  ADD CONSTRAINT `fk_sid` FOREIGN KEY (`s_id`) REFERENCES `subject` (`s_id`),
  ADD CONSTRAINT `group1_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`);

--
-- Constraints for table `group2`
--
ALTER TABLE `group2`
  ADD CONSTRAINT `FK_cid` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`);

--
-- Constraints for table `pinfo`
--
ALTER TABLE `pinfo`
  ADD CONSTRAINT `pinfo_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `registration` (`r_id`);

--
-- Constraints for table `signin`
--
ALTER TABLE `signin`
  ADD CONSTRAINT `signin_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `registration` (`r_id`);

--
-- Constraints for table `stud_info1`
--
ALTER TABLE `stud_info1`
  ADD CONSTRAINT `stud_info1_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `login` (`l_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
