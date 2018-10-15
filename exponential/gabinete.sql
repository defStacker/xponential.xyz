-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2018 at 12:58 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u109936735_badb`
--

-- --------------------------------------------------------

--
-- Table structure for table `gabinete`
--

CREATE TABLE `gabinete` (
  `id` int(250) NOT NULL,
  `Sensores_id` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `Temperatura` double NOT NULL,
  `Humedad` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gabinete`
--

INSERT INTO `gabinete` (`id`, `Sensores_id`, `Fecha`, `Temperatura`, `Humedad`) VALUES
(1, 1, '2018-03-21 14:01:40', 18, 18),
(2, 1, '2018-03-21 14:07:40', 20, 20),
(3, 1, '2018-03-21 15:00:00', 18, 18),
(4, 1, '2018-03-21 15:35:47', 34, 34),
(5, 2, '2018-03-21 14:07:40', 18, 18),
(6, 2, '2018-03-21 14:14:40', 18, 18),
(7, 2, '2018-03-21 14:35:47', 34, 34),
(8, 2, '2018-03-21 15:30:47', 34, 34),
(9, 3, '2018-03-21 14:05:23', 22, 22),
(10, 3, '2018-03-21 14:36:29', 36, 36),
(11, 3, '2018-03-21 15:00:00', 15, 15),
(12, 4, '2018-03-21 14:09:09', 25, 23),
(13, 4, '2018-03-21 14:35:09', 19, 15),
(14, 4, '2018-03-21 14:45:09', 45, 65),
(15, 4, '2018-03-21 15:00:00', 45, 65),
(16, 5, '2018-03-21 14:09:09', 15, 15),
(17, 5, '2018-03-21 14:18:09', 32, 32),
(18, 5, '2018-03-21 14:36:00', 25, 25),
(19, 5, '2018-03-21 15:36:00', 45, 35),
(20, 6, '2018-03-21 14:04:36', 14, 14),
(21, 6, '2018-03-21 14:18:09', 14, 14),
(22, 6, '2018-03-21 14:35:56', 32, 32),
(23, 6, '2018-03-21 15:35:56', 32, 32),
(24, 1, '2018-03-22 14:01:40', 18, 18),
(25, 1, '2018-03-22 14:07:40', 20, 20),
(26, 1, '2018-03-22 15:00:00', 18, 18),
(27, 1, '2018-03-22 15:35:47', 34, 34),
(28, 2, '2018-03-22 14:07:40', 18, 18),
(29, 2, '2018-03-22 14:14:40', 18, 18),
(30, 2, '2018-03-22 14:35:47', 34, 34),
(31, 2, '2018-03-22 15:30:47', 34, 34),
(32, 3, '2018-03-22 14:05:23', 22, 22),
(33, 3, '2018-03-22 14:17:23', 22, 22),
(34, 3, '2018-03-22 14:36:29', 36, 36),
(35, 3, '2018-03-22 15:00:00', 15, 15),
(36, 4, '2018-03-22 14:09:09', 25, 23),
(37, 4, '2018-03-22 14:35:09', 19, 15),
(38, 4, '2018-03-22 14:45:09', 45, 65),
(39, 4, '2018-03-22 15:00:00', 45, 65),
(40, 5, '2018-03-22 14:09:09', 15, 15),
(41, 5, '2018-03-22 14:18:09', 32, 32),
(42, 5, '2018-03-22 14:36:00', 25, 25),
(43, 5, '2018-03-22 15:36:00', 45, 35),
(45, 6, '2018-03-22 14:04:36', 14, 14),
(46, 6, '2018-03-22 14:18:09', 14, 14),
(47, 6, '2018-03-22 14:35:56', 32, 32),
(48, 6, '2018-03-22 15:35:56', 32, 32),
(49, 1, '2018-03-23 14:15:21', 60, 60),
(50, 1, '2018-03-23 14:07:40', 20, 20),
(51, 1, '2018-03-23 15:00:00', 18, 18),
(52, 1, '2018-03-23 15:35:47', 34, 34),
(53, 2, '2018-03-23 14:15:47', 32, 32),
(54, 2, '2018-03-23 14:16:05', 15, 15),
(55, 2, '2018-03-23 14:35:47', 34, 34),
(56, 2, '2018-03-23 15:30:47', 34, 34),
(57, 3, '2018-03-23 14:16:25', 15, 15),
(58, 3, '2018-03-23 14:17:23', 22, 22),
(59, 3, '2018-03-23 14:36:29', 36, 36),
(60, 3, '2018-03-23 15:00:00', 15, 15),
(61, 4, '2018-03-23 14:09:09', 25, 23),
(62, 4, '2018-03-23 14:35:09', 19, 15),
(63, 4, '2018-03-23 14:45:09', 45, 65),
(64, 4, '2018-03-23 14:16:43', 15, 15),
(65, 5, '2018-03-23 14:16:59', 9, 9),
(66, 5, '2018-03-23 14:18:09', 32, 32),
(67, 5, '2018-03-23 14:36:00', 25, 25),
(68, 5, '2018-03-23 15:36:00', 45, 35),
(69, 6, '2018-03-23 14:04:36', 14, 14),
(70, 6, '2018-03-23 14:17:25', 5, 5),
(71, 6, '2018-03-23 14:35:56', 32, 32),
(72, 6, '2018-03-23 15:35:56', 32, 32),
(73, 3, '2018-03-21 14:17:23', 22, 22),
(74, 1, '2018-03-24 09:01:40', 18, 18),
(75, 1, '2018-03-24 09:07:40', 20, 20),
(76, 1, '2018-03-24 10:00:00', 18, 18),
(77, 1, '2018-03-24 10:35:47', 34, 34),
(78, 2, '2018-03-24 09:07:40', 18, 18),
(79, 2, '2018-03-24 09:14:40', 18, 18),
(80, 2, '2018-03-24 09:35:47', 34, 34),
(81, 2, '2018-03-24 10:30:47', 34, 34),
(82, 3, '2018-03-24 09:05:23', 22, 22),
(83, 3, '2018-03-24 09:36:29', 36, 36),
(84, 3, '2018-03-24 10:00:00', 15, 15),
(85, 3, '2018-03-24 09:17:23', 22, 22),
(86, 4, '2018-03-24 09:09:09', 25, 23),
(87, 4, '2018-03-24 09:35:09', 19, 15),
(88, 4, '2018-03-24 09:45:09', 45, 65),
(89, 4, '2018-03-24 10:00:00', 45, 65),
(90, 5, '2018-03-24 09:09:09', 15, 15),
(91, 5, '2018-03-24 09:18:09', 32, 32),
(92, 5, '2018-03-24 09:36:00', 25, 25),
(93, 5, '2018-03-24 10:36:00', 45, 35),
(94, 6, '2018-03-24 09:04:36', 14, 14),
(95, 6, '2018-03-24 09:18:09', 14, 14),
(96, 6, '2018-03-24 09:35:56', 32, 32),
(97, 6, '2018-03-24 10:35:56', 32, 32),
(98, 1, '2018-03-24 09:01:40', 18, 18),
(99, 1, '2018-03-25 09:07:40', 20, 20),
(100, 1, '2018-03-25 10:00:00', 18, 18),
(101, 1, '2018-03-25 10:35:47', 34, 34),
(102, 2, '2018-03-25 09:07:40', 18, 18),
(103, 2, '2018-03-25 09:14:40', 18, 18),
(104, 2, '2018-03-25 09:35:47', 34, 34),
(105, 2, '2018-03-25 10:30:47', 34, 34),
(106, 3, '2018-03-25 09:05:23', 22, 22),
(107, 3, '2018-03-25 09:17:23', 22, 22),
(108, 3, '2018-03-25 09:36:29', 36, 36),
(109, 3, '2018-03-25 10:00:00', 15, 15),
(110, 4, '2018-03-25 09:09:09', 25, 23),
(111, 4, '2018-03-25 09:35:09', 19, 15),
(112, 4, '2018-03-25 09:45:09', 45, 65),
(113, 4, '2018-03-25 10:00:00', 45, 65),
(114, 5, '2018-03-25 09:09:09', 15, 15),
(115, 5, '2018-03-25 09:18:09', 32, 32),
(116, 5, '2018-03-25 09:36:00', 25, 25),
(117, 5, '2018-03-25 10:36:00', 45, 35),
(118, 6, '2018-03-25 09:04:36', 14, 14),
(119, 6, '2018-03-25 09:18:09', 14, 14),
(120, 6, '2018-03-25 09:35:56', 32, 32),
(121, 6, '2018-03-25 10:35:56', 32, 32),
(122, 1, '2018-03-26 09:01:40', 18, 18),
(123, 1, '2018-03-26 09:07:40', 20, 20),
(124, 1, '2018-03-26 10:00:00', 18, 18),
(125, 1, '2018-03-26 10:35:47', 34, 34),
(126, 2, '2018-03-26 09:07:40', 18, 18),
(127, 2, '2018-03-26 09:14:40', 18, 18),
(128, 2, '2018-03-26 09:35:47', 34, 34),
(129, 2, '2018-03-26 10:30:47', 34, 34),
(130, 3, '2018-03-26 09:05:23', 22, 22),
(131, 3, '2018-03-26 09:17:23', 22, 22),
(132, 3, '2018-03-26 09:36:29', 36, 36),
(133, 3, '2018-03-26 10:00:00', 15, 15),
(134, 4, '2018-03-26 09:09:09', 25, 23),
(135, 4, '2018-03-26 09:35:09', 19, 15),
(136, 4, '2018-03-26 09:45:09', 45, 65),
(137, 4, '2018-03-26 10:00:00', 45, 65),
(138, 5, '2018-03-26 09:09:09', 15, 15),
(139, 5, '2018-03-26 09:18:09', 32, 32),
(140, 5, '2018-03-26 09:36:00', 25, 25),
(141, 5, '2018-03-26 10:36:00', 45, 35),
(142, 6, '2018-03-26 09:04:36', 14, 14),
(143, 6, '2018-03-26 09:18:09', 14, 14),
(144, 6, '2018-03-26 09:35:56', 32, 32),
(145, 6, '2018-03-26 10:35:56', 32, 32),
(146, 1, '2018-03-20 09:01:40', 18, 18),
(147, 1, '2018-03-20 09:07:40', 20, 20),
(148, 1, '2018-03-20 10:00:00', 18, 18),
(149, 1, '2018-03-20 10:35:47', 34, 34),
(150, 2, '2018-03-20 09:07:40', 18, 18),
(151, 2, '2018-03-20 09:14:40', 18, 18),
(152, 2, '2018-03-20 09:35:47', 34, 34),
(153, 2, '2018-03-20 10:30:47', 34, 34),
(154, 3, '2018-03-20 09:05:23', 22, 22),
(155, 3, '2018-03-20 09:36:29', 36, 36),
(156, 3, '2018-03-20 10:00:00', 15, 15),
(157, 3, '2018-03-20 09:17:23', 22, 22),
(158, 4, '2018-03-20 09:09:09', 25, 23),
(159, 4, '2018-03-20 09:35:09', 19, 15),
(160, 4, '2018-03-20 09:45:09', 45, 65),
(161, 4, '2018-03-20 10:00:00', 45, 65),
(162, 5, '2018-03-20 09:09:09', 15, 15),
(163, 5, '2018-03-20 09:18:09', 32, 32),
(164, 5, '2018-03-20 09:36:00', 25, 25),
(165, 5, '2018-03-20 10:36:00', 45, 35),
(166, 6, '2018-03-20 09:04:36', 14, 14),
(167, 6, '2018-03-20 09:18:09', 14, 14),
(168, 6, '2018-03-20 09:35:56', 32, 32),
(169, 6, '2018-03-20 10:35:56', 32, 32),
(170, 1, '2018-03-19 09:01:40', 18, 18),
(171, 1, '2018-03-19 09:07:40', 20, 20),
(172, 1, '2018-03-19 10:00:00', 18, 18),
(173, 1, '2018-03-19 10:35:47', 34, 34),
(174, 2, '2018-03-19 09:07:40', 18, 18),
(175, 2, '2018-03-19 09:14:40', 18, 18),
(176, 2, '2018-03-19 09:35:47', 34, 34),
(177, 2, '2018-03-19 10:30:47', 34, 34),
(178, 3, '2018-03-19 09:05:23', 22, 22),
(179, 3, '2018-03-19 09:17:23', 22, 22),
(180, 3, '2018-03-19 09:36:29', 36, 36),
(181, 3, '2018-03-19 10:00:00', 15, 15),
(182, 4, '2018-03-19 09:09:09', 25, 23),
(183, 4, '2018-03-19 09:35:09', 19, 15),
(184, 4, '2018-03-19 09:45:09', 45, 65),
(185, 4, '2018-03-19 10:00:00', 45, 65),
(186, 5, '2018-03-19 09:09:09', 15, 15),
(187, 5, '2018-03-19 09:18:09', 32, 32),
(188, 5, '2018-03-19 09:36:00', 25, 25),
(189, 5, '2018-03-19 10:36:00', 45, 35),
(190, 6, '2018-03-19 09:04:36', 14, 14),
(191, 6, '2018-03-19 09:18:09', 14, 14),
(192, 6, '2018-03-19 09:35:56', 32, 32),
(193, 6, '2018-03-19 10:35:56', 32, 32),
(194, 1, '2018-03-18 09:01:40', 18, 18),
(195, 1, '2018-03-18 09:07:40', 20, 20),
(196, 1, '2018-03-18 10:00:00', 18, 18),
(197, 1, '2018-03-18 10:35:47', 34, 34),
(198, 2, '2018-03-18 09:07:40', 18, 18),
(199, 2, '2018-03-18 09:14:40', 18, 18),
(200, 2, '2018-03-18 09:35:47', 34, 34),
(201, 2, '2018-03-18 10:30:47', 34, 34),
(202, 3, '2018-03-18 09:05:23', 22, 22),
(203, 3, '2018-03-18 09:17:23', 22, 22),
(204, 3, '2018-03-18 09:36:29', 36, 36),
(205, 3, '2018-03-18 10:00:00', 15, 15),
(206, 4, '2018-03-18 09:09:09', 25, 23),
(207, 4, '2018-03-18 09:35:09', 19, 15),
(208, 4, '2018-03-18 09:45:09', 45, 65),
(209, 4, '2018-03-18 10:00:00', 45, 65),
(210, 5, '2018-03-18 09:09:09', 15, 15),
(211, 5, '2018-03-18 09:18:09', 32, 32),
(212, 5, '2018-03-18 09:36:00', 25, 25),
(213, 5, '2018-03-18 10:36:00', 45, 35),
(214, 6, '2018-03-18 09:04:36', 14, 14),
(215, 6, '2018-03-18 09:18:09', 14, 14),
(216, 6, '2018-03-18 09:35:56', 32, 32),
(217, 6, '2018-03-18 10:35:56', 32, 32),
(218, 1, '2018-03-27 09:01:40', 18, 18),
(219, 1, '2018-03-27 09:07:40', 20, 20),
(220, 1, '2018-03-27 10:00:00', 18, 18),
(221, 1, '2018-03-27 10:35:47', 34, 34),
(222, 2, '2018-03-27 09:07:40', 18, 18),
(223, 2, '2018-03-27 09:14:40', 18, 18),
(224, 2, '2018-03-27 09:35:47', 34, 34),
(225, 2, '2018-03-27 10:30:47', 34, 34),
(226, 3, '2018-03-27 09:05:23', 22, 22),
(227, 3, '2018-03-27 09:36:29', 36, 36),
(228, 3, '2018-03-27 10:00:00', 15, 15),
(229, 3, '2018-03-27 09:17:23', 22, 22),
(230, 4, '2018-03-27 09:09:09', 25, 23),
(231, 4, '2018-03-27 09:35:09', 19, 15),
(232, 4, '2018-03-27 09:45:09', 45, 65),
(233, 4, '2018-03-27 10:00:00', 45, 65),
(234, 5, '2018-03-27 09:09:09', 15, 15),
(235, 5, '2018-03-27 09:18:09', 32, 32),
(236, 5, '2018-03-27 09:36:00', 25, 25),
(237, 5, '2018-03-27 10:36:00', 45, 35),
(238, 6, '2018-03-27 09:04:36', 14, 14),
(239, 6, '2018-03-27 09:18:09', 14, 14),
(240, 6, '2018-03-27 09:35:56', 32, 32),
(241, 6, '2018-03-27 10:35:56', 32, 32),
(242, 1, '2018-03-28 09:01:40', 18, 18),
(243, 1, '2018-03-28 09:07:40', 20, 20),
(244, 1, '2018-03-28 10:00:00', 18, 18),
(245, 1, '2018-03-28 10:35:47', 34, 34),
(246, 2, '2018-03-28 09:07:40', 18, 18),
(247, 2, '2018-03-28 09:14:40', 18, 18),
(248, 2, '2018-03-28 09:35:47', 34, 34),
(249, 2, '2018-03-28 10:30:47', 34, 34),
(250, 3, '2018-03-28 09:05:23', 22, 22),
(251, 3, '2018-03-28 09:17:23', 22, 22),
(252, 3, '2018-03-28 09:36:29', 36, 36),
(253, 3, '2018-03-28 10:00:00', 15, 15),
(254, 4, '2018-03-28 09:09:09', 25, 23),
(255, 4, '2018-03-28 09:35:09', 19, 15),
(256, 4, '2018-03-28 09:45:09', 45, 65),
(257, 4, '2018-03-28 10:00:00', 45, 65),
(258, 5, '2018-03-28 09:09:09', 15, 15),
(259, 5, '2018-03-28 09:18:09', 32, 32),
(260, 5, '2018-03-28 09:36:00', 25, 25),
(261, 5, '2018-03-28 10:36:00', 45, 35),
(262, 6, '2018-03-28 09:04:36', 14, 14),
(263, 6, '2018-03-28 09:18:09', 14, 14),
(264, 6, '2018-03-28 09:35:56', 32, 32),
(265, 6, '2018-03-28 10:35:56', 32, 32),
(266, 1, '2018-03-29 09:01:40', 18, 18),
(267, 1, '2018-03-29 09:07:40', 20, 20),
(268, 1, '2018-03-29 10:00:00', 18, 18),
(269, 1, '2018-03-29 10:35:47', 34, 34),
(270, 2, '2018-03-29 09:07:40', 18, 18),
(271, 2, '2018-03-29 09:14:40', 18, 18),
(272, 2, '2018-03-29 09:35:47', 34, 34),
(273, 2, '2018-03-29 10:30:47', 34, 34),
(274, 3, '2018-03-29 09:05:23', 22, 22),
(275, 3, '2018-03-29 09:17:23', 22, 22),
(276, 3, '2018-03-29 09:36:29', 36, 36),
(277, 3, '2018-03-29 10:00:00', 15, 15),
(278, 4, '2018-03-29 09:09:09', 25, 23),
(279, 4, '2018-03-29 09:35:09', 19, 15),
(280, 4, '2018-03-29 09:45:09', 45, 65),
(281, 4, '2018-03-29 10:00:00', 45, 65),
(282, 5, '2018-03-29 09:09:09', 15, 15),
(283, 5, '2018-03-29 09:18:09', 32, 32),
(284, 5, '2018-03-29 09:36:00', 25, 25),
(285, 5, '2018-03-29 10:36:00', 45, 35),
(286, 6, '2018-03-29 09:04:36', 14, 14),
(287, 6, '2018-03-29 09:18:09', 14, 14),
(288, 6, '2018-03-29 09:35:56', 32, 32),
(289, 6, '2018-03-29 10:35:56', 32, 32),
(290, 1, '2018-03-23 15:58:24', 13, 14),
(291, 1, '2018-03-23 15:58:49', 13, 14),
(294, 4, '2018-03-23 16:02:23', 24, 78),
(295, 4, '2018-03-23 16:05:06', 24, 78),
(296, 1, '2018-03-23 16:05:10', 24, 78),
(297, 2, '2018-03-23 16:05:18', 24, 78),
(298, 3, '2018-03-23 16:05:23', 24, 78),
(299, 0, '2018-03-23 16:05:26', 24, 78),
(300, 6, '2018-03-23 16:05:28', 24, 78),
(301, 1, '2018-03-23 16:23:31', 24, 78),
(302, 6, '2018-03-23 16:23:44', 24, 78),
(303, 3, '2018-03-23 16:23:53', 24, 78),
(304, 2, '2018-03-23 16:24:02', 24, 78),
(305, 1, '2018-03-23 16:24:08', 24, 78),
(306, 1, '2018-03-23 16:41:48', 24.3, 59),
(307, 2, '2018-03-23 16:42:08', 25, 54),
(308, 3, '2018-03-23 16:42:38', 25.3, 59),
(309, 6, '2018-03-23 16:43:02', 24, 59),
(310, 1, '2018-03-23 16:54:08', 24.9, 60),
(311, 2, '2018-03-23 16:54:24', 24.3, 55),
(312, 6, '2018-03-23 16:55:08', 24, 59),
(313, 2, '2018-03-23 17:00:59', 24.3, 55),
(314, 3, '2018-03-23 17:00:59', 25.3, 59),
(315, 1, '2018-03-23 17:01:16', 25, 58),
(316, 1, '2018-03-23 17:01:40', 25.3, 58),
(317, 2, '2018-03-23 17:01:54', 24.4, 56),
(318, 3, '2018-03-23 17:02:34', 24, 58),
(319, 6, '2018-03-23 17:03:03', 24.3, 57),
(320, 4, '2018-03-23 17:04:21', 24, 78),
(321, 1, '2018-03-23 17:06:00', 25.2, 58),
(322, 2, '2018-03-23 17:06:15', 24.3, 57),
(323, 3, '2018-03-23 17:06:29', 24.1, 59),
(324, 6, '2018-03-23 17:06:46', 24.4, 58),
(325, 1, '2018-03-23 17:10:10', 25.3, 57),
(326, 2, '2018-03-23 17:10:22', 24.4, 56),
(327, 3, '2018-03-23 17:10:29', 24, 59),
(328, 6, '2018-03-23 17:10:34', 24.4, 58),
(329, 1, '2018-03-23 17:18:34', 25.2, 57),
(330, 2, '2018-03-23 17:18:46', 24.4, 56),
(331, 3, '2018-03-23 17:19:02', 24.5, 59),
(332, 6, '2018-03-23 17:19:09', 24.4, 58),
(333, 1, '2018-03-24 06:42:50', 24, 78),
(334, 1, '2018-03-24 11:35:45', 24, 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gabinete`
--
ALTER TABLE `gabinete`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gabinete`
--
ALTER TABLE `gabinete`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
