

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `answer` (
  `ids` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT 0,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ids`, `id`, `answer`, `correct`, `subject`) VALUES
(1, 1, 'Narendra Modi', 1, '1'),
(2, 1, 'Amit shah', 0, '1'),
(3, 1, 'Rahul ghandhi', 0, '1'),
(4, 1, 'ayogi adityanath', 0, '1'),
(5, 2, ' à¤¬à¥à¤°à¤¿à¤Ÿà¥‡à¤¨', 1, '1'),
(6, 2, 'à¥žà¥à¤°à¤¾à¤‚à¤¸', 0, '1'),
(7, 2, 'à¤•à¤¨à¤¾à¤¡à¤¾', 0, '1'),
(8, 2, 'à¤…à¤®à¥‡à¤°à¤¿à¤•à¤¾', 0, '1'),
(9, 3, 'à¤¸à¥à¤¦à¥‚à¤° à¤¸à¤‚à¤šà¤¾à¤° à¤¨à¥‡à¤Ÿà¤µà¤°à¥à¤• (RCN)', 1, '1'),
(10, 3, 'à¤®à¥‚à¤²à¥à¤¯ à¤¯à¥‹à¤œà¤• à¤¨à¥‡à¤Ÿà¤µà¤°à¥à¤• (VAN)', 0, '1'),
(11, 3, 'à¤µà¤¿à¤¸à¥à¤¤à¥ƒà¤¤ à¤•à¥à¤·à¥‡à¤¤à¥à¤° à¤¨à¥‡à¤Ÿà¤µà¤°à¥à¤• (WAN)', 0, '1'),
(12, 3, 'à¤¸à¥à¤¥à¤¾à¤¨à¥€à¤¯ à¤•à¥à¤·à¥‡à¤¤à¥à¤° à¤¨à¥‡à¤Ÿà¤µà¤°à¥à¤• (LAN)', 0, '1'),
(13, 4, ' à¤•à¥à¤µà¥‹ à¤µà¤°à¤¨à¥à¤Ÿà¥‹', 0, '1'),
(14, 4, ' à¤¨à¤¿à¤·à¥‡à¤§à¤¾à¤œà¥à¤žà¤¾', 0, '1'),
(15, 4, 'à¤†à¤²à¥à¤Ÿà¥€à¤®à¤® à¤¸à¤ªà¥à¤²à¥€à¤¸à¤¿à¤¯à¤®', 1, '1'),
(16, 4, 'à¤®à¥ˆà¤¨à¥à¤¡à¤®à¤¸', 0, '1'),
(17, 5, 'à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ 20', 1, '1'),
(18, 5, 'à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ 21', 0, '1'),
(19, 5, 'à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ 21 A', 0, '1'),
(20, 5, 'à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ 23', 0, '1'),
(21, 6, ' à¤¸à¤‚à¤¸à¤¦ à¤•à¥‡ à¤¦à¥‹à¤¨à¥‹à¤‚ à¤¸à¤¦à¤¨à¥‹à¤‚ à¤•à¥‡ à¤¸à¤¦à¤¸à¥à¤¯ à¤¤à¤¥à¤¾ à¤°à¤¾à¤œà¥à¤¯à¥‹à¤‚ à¤•à¥€ à¤µà¤¿à¤§à¤¾à¤¨à¤¸à¤­à¤¾à¤“à¤‚ à¤•à¥‡ à¤¨à¤¿à¤°à¥à¤µà¤¾à¤šà¤¿à¤¤ à¤¸à¤¦à¤¸à¥à¤¯', 0, '1'),
(22, 6, 'à¤¸à¤‚à¤¸à¤¦ à¤•à¥‡ à¤¦à¥‹à¤¨à¥‹à¤‚ à¤¸à¤¦à¤¨à¥‹à¤‚ à¤•à¥‡ à¤¨à¤¿à¤°à¥à¤µà¤¾à¤šà¤¿à¤¤ à¤¸à¤¦à¤¸à¥à¤¯', 0, '1'),
(23, 6, 'à¤¸à¤‚à¤¸à¤¦ à¤•à¥‡ à¤¦à¥‹à¤¨à¥‹à¤‚ à¤¸à¤¦à¤¨à¥‹à¤‚ à¤•à¥‡ à¤¨à¤¿à¤°à¥à¤µà¤¾à¤šà¤¿à¤¤ à¤¸à¤¦à¤¸à¥à¤¯', 0, '1'),
(24, 6, ' à¤¸à¤‚à¤¸à¤¦ à¤•à¥‡ à¤¦à¥‹à¤¨à¥‹à¤‚ à¤¸à¤¦à¤¸à¥à¤¯à¥‹à¤‚ à¤¨à¤¿à¤°à¥à¤µà¤¾à¤šà¤¿à¤¤ à¤¸à¤¦à¤¸à¥à¤¯ à¤¤à¤¥à¤¾ à¤°à¤¾à¤œà¥à¤¯à¥‹à¤‚ à¤•à¥€ à¤µà¤¿à¤§à¤¾à¤¨à¤¸à¤­à¤¾ à¤à¤µà¤‚ à¤µà¤¿à¤§à¤¾à¤¨à¤ªà¤°à¤¿à¤·à¤¦à¥‹à¤‚ à¤¨à¤¿à¤°à¥à¤µà¤¾à¤šà¤¿à¤¤ à¤¸à¤¦à¤¸à¥à¤¯', 1, '1'),
(25, 7, ' à¤²à¥‹à¤•à¤¸à¤­à¤¾', 0, '1'),
(26, 7, 'à¤‰à¤ªà¤°à¥‹à¤•à¥à¤¤ à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¤¿à¤¸à¥€ à¤•à¥‡ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤¨à¤¹à¥€à¤‚', 1, '1'),
(27, 7, ' à¤¸à¤‚à¤¸à¤¦ à¤•à¥‡ à¤•à¤¿à¤¸à¥€ à¤¸à¤¦à¤¨ à¤¦à¥à¤µà¤¾à¤°à¤¾', 0, '1'),
(28, 7, ' à¤°à¤¾à¤œà¥à¤¯à¤¸à¤­à¤¾', 0, '1'),
(29, 8, ' à¤¸à¤¿à¤°à¥à¤« à¤°à¤¾à¤œà¥à¤¯à¤¸à¤­à¤¾ à¤•à¥‡ à¤¸à¤¦à¤¸à¥à¤¯', 0, '1'),
(30, 8, 'à¤°à¤¾à¤œà¥à¤¯à¤¸à¤­à¤¾ à¤à¤µà¤‚ à¤²à¥‹à¤•à¤¸à¤­à¤¾ à¤•à¥‡ à¤¨à¤¿à¤°à¥à¤µà¤¾à¤šà¤¿à¤¤ à¤¸à¤¦à¤¸à¥à¤¯', 0, '1'),
(31, 8, 'à¤°à¤¾à¤œà¥à¤¯à¤¸à¤­à¤¾ à¤à¤µà¤‚ à¤²à¥‹à¤•à¤¸à¤­à¤¾ à¤•à¥‡ à¤¸à¤¦à¤¸à¥à¤¯', 1, '1'),
(32, 8, 'à¤°à¤¿à¤°à¥à¤« à¤²à¥‹à¤•à¤¸à¤­à¤¾ à¤•à¥‡ à¤¸à¤¦à¤¸à¥à¤¯', 0, '1'),
(33, 9, ' 12 à¤µ 2', 1, '1'),
(34, 9, ' 12 à¤µ 3', 0, '1'),
(35, 9, ' 12 à¤µ 4', 0, '1'),
(36, 9, ' 12 à¤µ 6', 0, '1'),
(37, 10, 'à¤µà¤¿à¤§à¤¾à¤¨à¤¸à¤­à¤¾', 0, '1'),
(38, 10, ' à¤®à¥à¤–à¥à¤¯à¤®à¤¨à¥à¤¤à¥à¤°à¥€', 1, '1'),
(39, 10, 'à¤°à¤¾à¤œà¥à¤¯à¤ªà¤¾à¤²', 0, '1'),
(40, 10, 'à¤µà¤¿à¤§à¤¾à¤¨à¤ªà¤°à¤¿à¤·à¤¦', 0, '1'),
(41, 1, 'PHP Hypertext processor', 1, '17'),
(42, 1, 'Personal Hypertext processor', 0, '17'),
(43, 1, 'Private home page', 0, '17'),
(44, 1, 'Persnol home page', 0, '17'),
(53, 2, '<?php>...</?>', 0, '17'),
(54, 2, '<script>...</script>', 0, '17'),
(55, 2, '<?php...?> ', 1, '17'),
(56, 2, '<&>...</&>', 0, '17'),
(57, 3, 'echo \"Hello World\";  ', 1, '17'),
(58, 3, '\"Hello World\";', 0, '17'),
(59, 3, 'Document.Write(\"Hello World\");', 0, '17'),
(60, 3, 'Write(\"Hello World\");', 0, '17'),
(61, 4, 'JavaScript', 1, '17'),
(62, 4, 'VBScript', 0, '17'),
(63, 4, 'Perl and C ++', 0, '17'),
(64, 4, 'Perl and C ', 0, '17'),
(65, 5, 'new_function myFunction()', 0, '17'),
(66, 5, 'function myFunction()  ', 1, '17'),
(67, 5, 'create myFunction()', 0, '17'),
(68, 5, 'open myFunction()', 0, '17'),
(69, 6, 'open(\"time.txt\");', 0, '17'),
(70, 6, 'fopen(\"time.txt\",\"r+\");', 0, '17'),
(71, 6, 'fopen(\"time.txt\",\"r\");', 1, '17'),
(72, 6, 'open(\"time.txt\",\"read\");', 0, '17'),
(73, 7, '$_SESSION', 0, '17'),
(74, 7, '$_GET', 0, '17'),
(75, 7, '$GLOBALS', 0, '17'),
(76, 7, '$_SERVER  ', 1, '17'),
(77, 8, '$count=+;', 0, '17'),
(78, 8, 'count++;', 0, '17'),
(79, 8, '$count++;', 1, '17'),
(80, 8, '++count', 0, '17'),
(81, 9, '$my-Var  ', 1, '17'),
(82, 9, '$myVar', 0, '17'),
(83, 9, '$myvar', 0, '17'),
(84, 9, '$my_Var', 0, '17'),
(85, 10, 'setcookie()  ', 1, '17'),
(86, 10, 'createcookie', 0, '17'),
(87, 10, 'makecookie()', 0, '17'),
(88, 10, 'makecookie', 0, '17'),
(89, 11, '$cars = [\"Volvo\", \"BMW\", \"Toyota\"];', 0, '17'),
(90, 11, '$cars = array(\"Volvo\", \"BMW\", \"Toyota\"); ', 1, '17'),
(91, 11, '$cars = \"Volvo\", \"BMW\", \"Toyota\";', 0, '17'),
(92, 11, '$cars = array[\"Volvo\", \"BMW\", \"Toyota\"];', 0, '17'),
(93, 12, '==', 0, '17'),
(94, 12, '=+', 0, '17'),
(95, 12, '===', 1, '17'),
(96, 12, '=', 0, '17'),
(97, 13, ';', 1, '17'),
(98, 13, '<>', 0, '17'),
(99, 13, ',', 0, '17'),
(100, 14, '$', 1, '17'),
(101, 14, '#', 0, '17'),
(102, 14, '@', 0, '17'),
(103, 14, '&', 0, '17'),
(104, 15, 'Request.QueryString;', 0, '17'),
(105, 15, '$_GET[]; ', 1, '17'),
(106, 15, 'Request.Form;', 0, '17'),
(107, 15, 'Request.Get;', 0, '17'),
(134, 1, 'à¤¸à¤¾à¤®à¤¾à¤¨à¥à¤¯ à¤¨à¤®à¤•', 1, '23'),
(135, 1, 'à¤¸à¤®à¥à¤¦à¥à¤°', 0, '23'),
(136, 1, 'à¤¸à¥à¤Ÿà¤¾à¤°à¥à¤š', 0, '23'),
(137, 1, 'à¤—à¥à¤²à¥à¤•à¥‹à¤¸', 0, '23'),
(138, 2, 'à¤«à¥‡à¤°à¤¿à¤• à¤‘à¤•à¥à¤¸à¤¾à¤‡à¤¡ à¤¸à¥‡', 0, '23'),
(139, 2, 'à¤œà¤²à¤¯à¥‹à¤œà¤¿à¤¤ à¤«à¥‡à¤°à¤¸ à¤¤à¤¥à¤¾ à¤«à¥‡à¤°à¤¿à¤• à¤‘à¤•à¥à¤¸à¤¾à¤‡à¤¡ à¤¸à¥‡', 0, '23'),
(140, 2, 'à¤•à¥à¤·à¤¾à¤°à¤•à¥€à¤¯ à¤«à¥‡à¤°à¤¸ à¤à¤µà¤‚ à¤«à¥‡à¤°à¤¿à¤• à¤•à¤¾à¤°à¥à¤¬à¥‹à¤¨à¥‡à¤Ÿ à¤¸à¥‡', 0, '23'),
(141, 2, 'à¤‰à¤ªà¤°à¥à¤¯à¥à¤•à¥à¤¤ à¤¸à¤­à¥€ à¤•à¥‡ à¤•à¤¾à¤°à¤£', 1, '23'),
(142, 3, 'à¤¬à¥ˆà¤¨à¥à¤Ÿà¤¿à¤— à¤¨à¥‡', 1, '23'),
(143, 3, 'à¤¡à¥‹à¤®à¥‡à¤• à¤¨à¥‡', 0, '23'),
(144, 3, 'à¤°à¥‹à¤¨à¥‰à¤²à¥à¤¡ à¤°à¥‰à¤¸ à¤¨à¥‡', 0, '23'),
(145, 3, 'à¤¹à¤¾à¤°à¥à¤µà¥‡ à¤¨à¥‡', 0, '23'),
(146, 4, ' à¤Šà¤·à¥à¤®à¤¾ à¤‰à¤ªà¤šà¤¾à¤° (Heat Treatment) à¤¸à¥‡', 0, '23'),
(147, 4, 'à¤¹à¤¾à¤‡à¤¡à¥à¤°à¥‹à¤œà¤¨à¥€à¤•à¤°à¤£ à¤¦à¥à¤µà¤¾à¤°à¤¾', 1, '23'),
(148, 4, 'à¤‘à¤•à¥à¤¸à¥€à¤œà¤¨ à¤¦à¥à¤µà¤¾à¤°à¤¾', 0, '23'),
(149, 4, 'à¤à¤‚à¤œà¤¾à¤‡à¤®à¥‹ (Enzymes) à¤•à¥‡ à¤¦à¥à¤µà¤¾à¤°à¤¾', 0, '23'),
(150, 5, 'à¤œà¤¸à¥à¤¤à¤¾', 0, '23'),
(151, 5, ' à¤¸à¥à¤Ÿà¥€à¤²', 1, '23'),
(152, 5, 'à¤¸à¥€à¤¸à¤¾', 0, '23'),
(153, 5, 'à¤à¤²à¥à¤¯à¥‚à¤®à¥€à¤¨à¤¿à¤¯à¤®', 0, '23'),
(154, 6, 'à¤­à¤¾à¤ª-à¤…à¤‚à¤—à¤¾à¤° à¤—à¥ˆà¤¸ (Water gas)', 0, '23'),
(155, 6, 'à¤ªà¥à¤°à¥‹à¤¡à¥à¤¯à¥‚à¤¸à¤° à¤—à¥ˆà¤¸ (Producer gas)', 0, '23'),
(156, 6, 'à¤¹à¤¾à¤¸ à¤—à¥ˆà¤¸ (Laughing gas)', 1, '23'),
(157, 6, 'à¤®à¤¾à¤°à¥à¤¶ à¤—à¥ˆà¤¸ (Marsh gas)', 0, '23'),
(158, 7, 'à¤«à¤¾à¤¸à¥à¤«à¥‹à¤°à¤¸', 0, '23'),
(159, 7, 'à¤¸à¥‹à¤¡à¤¿à¤¯à¤®', 1, '23'),
(160, 7, 'à¤²à¥‹à¤¹à¤¾', 0, '23'),
(161, 7, 'à¤—à¤‚à¤§à¤•', 0, '23'),
(162, 8, 'à¤à¤• à¤®à¤›à¤²à¥€ à¤¹à¥‹à¤¤à¥€ à¤¹à¥ˆ', 0, '23'),
(163, 8, 'à¤à¤• à¤ªà¥Œà¤§à¥‡ à¤•à¤¾ à¤¨à¤¾à¤® à¤¹à¥ˆ', 0, '23'),
(164, 8, 'à¤à¤• à¤¬à¤°à¥à¤¤à¤¨ à¤•à¥‹ à¤•à¤¹à¤¤à¥‡ à¤¹à¥ˆà¤‚', 0, '23'),
(165, 8, 'à¤à¤• à¤®à¤¾à¤ª (Measure) à¤¹à¥ˆ', 1, '23'),
(166, 9, 'à¤­à¥‚à¤•à¤®à¥à¤ª à¤•à¥€ à¤¤à¥€à¤µà¥à¤°à¤¤à¤¾', 1, '23'),
(167, 9, 'à¤µà¤¾à¤¯à¥ à¤•à¥€ à¤—à¤¤à¤¿', 0, '23'),
(168, 9, 'à¤¸à¤®à¥à¤¦à¥à¤° à¤•à¥€ à¤—à¤¹à¤°à¤¾à¤ˆ', 0, '23'),
(169, 9, 'à¤¶à¤°à¥€à¤° à¤•à¤¾ à¤¤à¤¾à¤ª', 0, '23'),
(170, 10, 'à¤†à¤‡à¤¨à¥à¤¸à¥à¤Ÿà¤¾à¤‡à¤¨', 0, '23'),
(171, 10, 'à¤¨à¥à¤¯à¥‚à¤Ÿà¤¨', 0, '23'),
(172, 10, 'à¤…à¤²à¥à¤«à¥à¤°à¥‡à¤¡ à¤¨à¥‹à¤¬à¥‡à¤²', 1, '23'),
(173, 10, 'à¤®à¥‡à¤¡à¤® à¤•à¥à¤¯à¥‚à¤°à¥€', 0, '23'),
(174, 1, 'à¤µà¥‰à¤¨ à¤¨à¥à¤¯à¥‚à¤®à¥‡à¤¨', 0, '24'),
(175, 1, 'à¤œà¥‡ à¤à¤¸ à¤•à¤¿à¤²à¥à¤¬à¥€', 0, '24'),
(176, 1, 'à¤šà¤¾à¤°à¥à¤²à¥à¤¸ à¤¬à¥ˆà¤¬à¥‡à¤œ', 1, '24'),
(177, 1, 'à¤‡à¤¨à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 0, '24'),
(178, 2, 'ATARIS', 0, '24'),
(179, 2, 'ENIAC', 1, '24'),
(180, 2, 'TANDY', 0, '24'),
(181, 2, 'TANDY', 0, '24'),
(182, 3, '1946', 1, '24'),
(183, 3, '1945', 0, '24'),
(184, 3, '1948', 0, '24'),
(185, 3, '1942', 0, '24'),
(186, 4, '1960', 1, '24'),
(187, 4, '1945', 0, '24'),
(188, 4, '1948', 0, '24'),
(189, 4, '1942', 0, '24'),
(190, 5, 'à¤—à¤£à¤¨à¤¾ à¤•à¤°à¤¨à¥‡à¤µà¤¾à¤²à¤¾', 0, '24'),
(191, 5, 'à¤¸à¤‚à¤—à¤£à¤•', 1, '24'),
(192, 5, 'à¤¹à¤¿à¤¸à¤¾à¤¬ à¤²à¤—à¤¾à¤¨à¥‡à¤µà¤¾à¤²à¤¾', 0, '24'),
(193, 5, 'à¤ªà¤°à¤¿à¤—à¤£à¤•', 0, '24'),
(194, 6, '21 à¤¦à¤¿à¤¸à¤®à¥à¤¬à¤°', 0, '24'),
(195, 6, '22 à¤¦à¤¿à¤¸à¤®à¥à¤¬à¤°', 0, '24'),
(196, 6, '2 à¤¦à¤¿à¤¸à¤®à¥à¤¬à¤°', 1, '24'),
(197, 6, '12 à¤¦à¤¿à¤¸à¤®à¥à¤¬à¤°', 0, '24'),
(198, 7, 'Central Processing Unit', 1, '24'),
(199, 7, 'Central Problem Unit', 0, '24'),
(200, 7, 'Central Processing Union', 0, '24'),
(201, 7, 'à¤‡à¤¨à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 0, '24'),
(202, 8, 'Google', 0, '24'),
(203, 8, 'Baidu', 0, '24'),
(204, 8, 'Yahoo', 0, '24'),
(205, 8, 'Wolfram Alpha', 1, '24'),
(206, 9, 'à¤®à¤¾à¤Šà¤¸', 0, '24'),
(207, 9, 'à¤•à¥€-à¤¬à¥‹à¤°à¥à¤¡', 0, '24'),
(208, 9, 'à¤¸à¥à¤•à¥ˆà¤¨à¤°', 0, '24'),
(209, 9, 'à¤‡à¤¨à¤®à¥‡à¤‚ à¤¸à¥‡ à¤¸à¤­à¥€', 1, '24'),
(210, 10, '1024 à¤¬à¤¾à¤‡à¤Ÿ', 1, '24'),
(211, 10, '1024 à¤®à¥‡à¤—à¤¾à¤¬à¤¾à¤‡à¤Ÿ', 0, '24'),
(212, 10, '1024 à¤—à¥€à¤—à¤¾à¤¬à¤¾à¤‡à¤Ÿ', 0, '24'),
(213, 10, 'à¤‡à¤¨à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 0, '24'),
(214, 1, 'asf', 1, '5956'),
(215, 1, 'asf', 0, '5956'),
(216, 1, 'afsa', 0, '5956'),
(217, 1, 'asf', 0, '5956'),
(218, 2, 'asfa', 1, '5956'),
(219, 2, 'afsf', 0, '5956'),
(220, 2, 'asf', 0, '5956'),
(221, 2, 'asf', 0, '5956'),
(222, 3, 'saf', 1, '5956'),
(223, 3, 'asf', 0, '5956'),
(224, 3, 'asf', 0, '5956'),
(225, 3, 'asf', 0, '5956'),
(226, 4, '', 1, '5956'),
(227, 4, '', 0, '5956'),
(228, 4, '', 0, '5956'),
(229, 4, '', 0, '5956'),
(230, 5, '', 1, '5956'),
(231, 5, '', 0, '5956'),
(232, 5, '', 0, '5956'),
(233, 5, '', 0, '5956'),
(234, 6, '', 1, '5956'),
(235, 6, '', 0, '5956'),
(236, 6, '', 0, '5956'),
(237, 6, '', 0, '5956'),
(238, 7, '', 1, '5956'),
(239, 7, '', 0, '5956'),
(240, 7, '', 0, '5956'),
(241, 7, '', 0, '5956'),
(242, 8, '', 1, '5956'),
(243, 8, '', 0, '5956'),
(244, 8, '', 0, '5956'),
(245, 8, '', 0, '5956'),
(246, 9, '', 1, '5956'),
(247, 9, '', 0, '5956'),
(248, 9, '', 0, '5956'),
(249, 9, '', 0, '5956'),
(250, 10, '', 1, '5956'),
(251, 10, '', 0, '5956'),
(252, 10, '', 0, '5956'),
(253, 10, '', 0, '5956'),
(254, 11, '', 1, '5956'),
(255, 11, '', 0, '5956'),
(256, 11, '', 0, '5956'),
(257, 11, '', 0, '5956'),
(258, 12, '', 1, '5956'),
(259, 12, '', 0, '5956'),
(260, 12, '', 0, '5956'),
(261, 12, '', 0, '5956'),
(262, 13, '', 1, '5956'),
(263, 13, '', 0, '5956'),
(264, 13, '', 0, '5956'),
(265, 13, '', 0, '5956'),
(266, 14, '', 1, '5956'),
(267, 14, '', 0, '5956'),
(268, 14, '', 0, '5956'),
(269, 14, '', 0, '5956'),
(270, 15, '', 1, '5956'),
(271, 15, '', 0, '5956'),
(272, 15, '', 0, '5956'),
(273, 15, '', 0, '5956'),
(274, 16, '', 1, '5956'),
(275, 16, '', 0, '5956'),
(276, 16, '', 0, '5956'),
(277, 16, '', 0, '5956'),
(278, 17, '', 1, '5956'),
(279, 17, '', 0, '5956'),
(280, 17, '', 0, '5956'),
(281, 17, '', 0, '5956'),
(282, 18, '', 1, '5956'),
(283, 18, '', 0, '5956'),
(284, 18, '', 0, '5956'),
(285, 18, '', 0, '5956'),
(286, 18, '', 1, '5956'),
(287, 18, '', 0, '5956'),
(288, 18, '', 0, '5956'),
(289, 18, '', 0, '5956'),
(298, 1, 'Amit shah', 0, '27'),
(299, 1, 'Rahul ghandhi', 0, '27'),
(300, 1, 'Narendra Modi', 1, '27'),
(301, 1, 'ayogi adityanath', 0, '27'),
(302, 2, '<?php>...</?>', 0, '27'),
(303, 2, '<script>...</script>', 0, '27'),
(304, 2, '<&>...</&>', 0, '27'),
(305, 2, '<?php...?> ', 1, '27'),
(306, 3, 'echo ', 1, '27'),
(307, 3, 'Hello World;', 0, '27'),
(308, 3, 'Document.Write(', 0, '27'),
(309, 3, 'Write(', 0, '27'),
(310, 4, 'JavaScript', 1, '27'),
(311, 4, 'VBScript', 0, '27'),
(312, 4, 'Perl and C ++', 0, '27'),
(313, 4, 'Perl and C ', 0, '27'),
(314, 5, 'new_function myFunction()', 0, '27'),
(315, 5, 'function myFunction() Â ', 1, '27'),
(316, 5, 'create myFunction()', 0, '27'),
(317, 5, 'open myFunction()', 0, '27'),
(318, 1, 'ayogi adityanath', 0, '25'),
(319, 1, 'Narendra Modi', 1, '25'),
(320, 1, 'Rahul ghandhi', 0, '25'),
(321, 1, 'Amit shah', 0, '25'),
(322, 2, '<script>...</script>', 0, '25'),
(323, 3, '<&>...</&>', 0, '25'),
(324, 3, '<?php>...</?>', 0, '25'),
(325, 3, '<?php...?> ', 1, '25'),
(326, 3, 'echo ', 1, '25'),
(327, 3, 'Document.Write(', 0, '25'),
(328, 4, 'Write(', 0, '25'),
(329, 4, 'Hello World;', 0, '25'),
(330, 4, 'JavaScript', 1, '25'),
(331, 4, 'VBScript', 0, '25'),
(332, 4, 'Perl and C ++', 0, '25'),
(333, 4, 'new_function myFunction()', 0, '25'),
(334, 4, 'function myFunction() Â ', 1, '25'),
(335, 4, 'Perl and C ', 0, '25'),
(336, 5, 'open myFunction()', 0, '25'),
(337, 5, 'create myFunction()', 0, '25'),
(338, 6, 'image/download (2).png', 0, '27'),
(339, 6, 'image/download (1).png', 1, '27'),
(340, 6, 'image/download.png', 0, '27'),
(341, 6, 'image/download (3).png', 0, '27'),
(342, 7, 'India', 1, '27'),
(343, 7, 'Pak', 0, '27'),
(344, 7, 'Aus', 0, '27'),
(345, 7, 'USA', 0, '27'),
(346, 16, 'Rahul ghandhi', 0, '17'),
(347, 16, 'Amit shah', 0, '17'),
(348, 17, 'Narendra Modi', 1, '17'),
(349, 17, 'ayogi adityanath', 0, '17'),
(350, 17, '<?php>...</?>', 0, '17'),
(351, 18, '<?php...?> ', 1, '17'),
(352, 18, '<script>...</script>', 0, '17'),
(353, 19, '<&>...</&>', 0, '17'),
(354, 19, 'Hello World;', 0, '17'),
(355, 19, 'echo ', 1, '17'),
(356, 19, 'Document.Write(', 0, '17'),
(357, 20, 'Write(', 0, '17'),
(358, 20, 'JavaScript', 1, '17'),
(359, 20, 'VBScript', 0, '17'),
(360, 20, 'Perl and C ++', 0, '17'),
(361, 21, 'new_function myFunction()', 0, '17'),
(362, 21, 'Perl and C ', 0, '17'),
(363, 21, 'function myFunction() Â ', 1, '17'),
(364, 21, 'create myFunction()', 0, '17'),
(365, 1, 'Amit shah', 0, '28'),
(366, 1, 'Narendra Modi', 1, '28'),
(367, 1, 'Rahul ghandhi', 0, '28'),
(368, 1, 'ayogi adityanath', 0, '28'),
(369, 2, '<?php>...</?>', 0, '28'),
(370, 2, '<script>...</script>', 0, '28'),
(371, 2, '<?php...?> ', 1, '28'),
(372, 2, '<&>...</&>', 0, '28'),
(373, 3, 'echo ', 1, '28'),
(374, 3, 'Hello World;', 0, '28'),
(375, 3, 'Document.Write(', 0, '28'),
(376, 3, 'Write(', 0, '28'),
(377, 4, 'JavaScript', 1, '28'),
(378, 4, 'VBScript', 0, '28'),
(379, 4, 'Perl and C ++', 0, '28'),
(380, 4, 'Perl and C ', 0, '28'),
(381, 5, 'new_function myFunction()', 0, '28'),
(382, 5, 'function myFunction() Â ', 1, '28'),
(383, 5, 'create myFunction()', 0, '28'),
(384, 5, 'open myFunction()', 0, '28'),
(385, 6, 'new_function myFunction()', 0, '28'),
(386, 6, 'function myFunction() Â ', 1, '28'),
(387, 6, 'create myFunction()', 0, '28'),
(388, 6, 'open myFunction()', 0, '28'),
(389, 7, 'Narendra Modi', 1, '28'),
(390, 7, 'Amit shah', 0, '28'),
(391, 7, 'Rahul ghandhi', 0, '28'),
(392, 7, 'ayogi adityanath', 0, '28'),
(393, 8, '<?php>...</?>', 0, '28'),
(394, 8, '<script>...</script>', 0, '28'),
(395, 8, '<?php...?> ', 1, '28'),
(396, 8, '<&>...</&>', 0, '28'),
(397, 9, 'echo ', 1, '28'),
(398, 9, 'Hello World;', 0, '28'),
(399, 9, 'Document.Write(', 0, '28'),
(400, 9, 'Write(', 0, '28'),
(401, 10, 'JavaScript', 1, '28'),
(402, 10, 'VBScript', 0, '28'),
(403, 10, 'Perl and C ++', 0, '28'),
(404, 10, 'Perl and C ', 0, '28'),
(405, 11, 'new_function myFunction()', 0, '28'),
(406, 11, 'function myFunction() Â ', 1, '28'),
(407, 11, 'create myFunction()', 0, '28'),
(408, 11, 'open myFunction()', 0, '28');

-- --------------------------------------------------------

--
-- Table structure for table `buycorce`
--

CREATE TABLE `buycorce` (
  `id` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buycorce`
--

INSERT INTO `buycorce` (`id`, `courseid`, `studentid`, `confirm`) VALUES
(1, 3, 2, 1),
(2, 17, 2, 3),
(3, 17, 2, 3),
(4, 23, 2, 3),
(5, 27, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `buyvideo`
--

CREATE TABLE `buyvideo` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `videoid` int(11) NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `corce`
--

CREATE TABLE `corce` (
  `id` int(11) NOT NULL,
  `coursename` varchar(250) NOT NULL,
  `discription` text NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `prices` double NOT NULL,
  `demovideoid` int(20) NOT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `date1` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corce`
--

INSERT INTO `corce` (`id`, `coursename`, `discription`, `status`, `prices`, `demovideoid`, `thumbnail`, `date1`) VALUES
(3, 'Operative Dentistry ', '', '1', 999, 722643985, 'thumbnail/image_picker4957202274081673422.jpg', '2022-06-22'),
(4, 'Pharmacology ', '', '1', 499, 720615558, 'thumbnail/image_picker219749960087014382.jpg', '2022-06-22'),
(5, 'Prosthodontics', 'CD RPD FPD', '1', 5001, 748666544, 'thumbnail/Untitled-1.jpg', '2022-09-13'),
(6, 'ENDODONTICS', 'RCT', '1', 5000, 753473747, 'thumbnail/Endodontics.jpg', '2022-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `login_role`
--

CREATE TABLE `login_role` (
  `id` int(11) NOT NULL,
  `regid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_role`
--

INSERT INTO `login_role` (`id`, `regid`, `name`, `email`, `password`, `status`) VALUES
(6, '2', 'Amarjeet', 'amarj234@gmail.com', '123', '1'),
(7, '0', 'admin', 'admin@gmail.com', '12345', '2');

-- --------------------------------------------------------

--
-- Table structure for table `paidvideo`
--

CREATE TABLE `paidvideo` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `discription` text NOT NULL,
  `videoid` varchar(22) NOT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `price` double NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ids` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `ansimage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ids`, `id`, `question`, `subject`, `image`, `status`, `ansimage`) VALUES
(1, 1, 'who is the prime minister of india', '1', '', 0, NULL),
(2, 2, 'à¤­à¤¾à¤°à¤¤ à¤®à¥‡à¤‚ à¤à¤•à¤¾à¤•à¥€ à¤¨à¤¾à¤—à¤°à¤¿à¤•à¤¤à¤¾ à¤•à¤¾ à¤µà¤¿à¤šà¤¾à¤° à¤¨à¤¿à¤®à¥à¤¨à¤²à¤¿à¤–à¤¿à¤¤ à¤¦à¥‡à¤¶ à¤•à¥‡ à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤¸à¥‡ à¤²à¤¿à¤¯à¤¾ à¤—à¤¯à¤¾ à¤¹à¥ˆ ?', '1', '', 0, NULL),
(3, 3, 'à¤œà¤¬ à¤•à¥‹à¤ˆ à¤•à¤®à¥à¤ªà¥à¤¯à¥‚à¤Ÿà¤°à¥‹à¤‚ à¤•à¥‹ à¤à¤• à¤›à¥‹à¤Ÿà¥‡-à¤¸à¥‡ à¤•à¥à¤·à¥‡à¤¤à¥à¤° à¤®à¥‡à¤‚ à¤¬à¤¿à¤¨à¤¾ à¤Ÿà¥‡à¤²à¥€à¤«à¥‹à¤¨ à¤®à¥‡à¤‚ à¤¤à¤¾à¤°à¥‹ à¤•à¥‡, à¤ªà¤°à¤¸à¥à¤ªà¤° à¤œà¥‹à¥œà¤¾ à¤¦à¤¿à¤¯à¤¾ à¤œà¤¾à¤¤à¤¾ à¤¹à¥ˆ, à¤¤à¥‹ à¤‰à¤¸à¥‡ à¤•à¥à¤¯à¤¾ à¤•à¤¹à¤¤à¥‡ à¤¹à¥ˆà¤‚ ?', '1', '', 0, NULL),
(4, 4, 'à¤­à¤¾à¤°à¤¤à¥€à¤¯ à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤•à¥‡ à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ 226 à¤•à¥‡ à¤…à¤‚à¤¤à¤°à¥à¤—à¤¤ à¤ªà¥à¤°à¤¤à¥à¤¯à¥‡à¤• à¤‰à¤šà¥à¤š à¤¨à¥à¤¯à¤¾à¤¯à¤²à¤¯ à¤°à¤¿à¤Ÿ à¤¨à¤¿à¤°à¥à¤—à¤®à¤¿à¤¤ à¤•à¤¾ à¤…à¤§à¤¿à¤•à¤¾à¤° à¤¹à¥‹à¤¤à¤¾ à¤¹à¥ˆ | à¤¨à¤¿à¤®à¥à¤¨à¤²à¤¿à¤–à¤¿à¤¤ à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¥Œà¤¨ à¤¸à¥€ à¤à¤• à¤°à¤¿à¤Ÿ à¤¨à¤¹à¥€à¤‚ à¤¹à¥ˆ ?', '1', '', 0, NULL),
(5, 5, 'à¤¨à¤¿à¤®à¥à¤¨ à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¤¿à¤¸ à¤…à¤¨à¥à¤šà¥à¤›à¥‡à¤¦ à¤•à¥‡ à¤¦à¥à¤µà¤¾à¤°à¤¾ 6 à¤¸à¥‡ 14 à¤µà¤°à¥à¤· à¤¤à¤• à¤•à¥‡ à¤¬à¤šà¥à¤šà¥‹à¤‚ à¤•à¥‡ à¤²à¤¿à¤ à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤•à¤¾ à¤…à¤§à¤¿à¤•à¤¾à¤° à¤®à¥‚à¤² à¤…à¤§à¤¿à¤•à¤¾à¤° à¤®à¤¾à¤¨à¤¾ à¤—à¤¯à¤¾ à¤¹à¥ˆ ?', '1', '', 0, NULL),
(6, 6, 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤ªà¤¤à¤¿ à¤•à¥‡ à¤¨à¤¿à¤°à¥à¤µà¤¾à¤šà¤¨ à¤®à¤£à¥à¤¡à¤² à¤®à¥‡à¤‚ à¤¶à¤¾à¤®à¤¿à¤² à¤¹à¥ˆ', '1', '', 0, NULL),
(7, 7, 'à¤‰à¤ª-à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤ªà¤¤à¤¿ à¤•à¥‡ à¤…à¤¨à¥à¤¸à¤¾à¤° à¤¸à¤‚à¤˜ à¤•à¥€ à¤•à¤¾à¤°à¥à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾ à¤¶à¤•à¥à¤¤à¤¿ à¤•à¤¿à¤¸à¤®à¥‡à¤‚ à¤¨à¤¿à¤¹à¤¿à¤¤ à¤¹à¥ˆ ?', '1', '', 0, NULL),
(8, 8, 'à¤‰à¤ª-à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤ªà¤¤à¤¿ à¤•à¥‡ à¤¨à¤¿à¤°à¥à¤µà¤¾à¤šà¤• à¤®à¤£à¥à¤¡à¤² à¤®à¥‡à¤‚ à¤¶à¤¾à¤®à¤¿à¤² à¤¹à¥ˆ', '1', '', 0, NULL),
(9, 9, 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¤ªà¤¤à¤¿ à¤¦à¥à¤µà¤¾à¤°à¤¾ à¤²à¥‹à¤•à¤¸à¤­à¤¾ à¤¤à¤¥à¤¾ à¤°à¤¾à¤œà¤¯à¤¸à¤­à¤¾ à¤®à¥‡à¤‚ à¤®à¤¨à¥‹à¤¨à¥€à¤¤ à¤•à¤¿à¤ à¤œà¤¾à¤¨à¥‡ à¤µà¤¾à¤²à¥‡ à¤¸à¤¦à¤¸à¥à¤¯ à¤•à¥€ à¤¸à¤‚à¤–à¥à¤¯à¤¾ à¤•à¥à¤°à¤®à¤¶à¤ƒ à¤¹à¥ˆ', '1', '', 0, NULL),
(10, 10, 'à¤°à¤¾à¤œà¥à¤¯ à¤•à¤¾ à¤®à¤‚à¤¤à¥à¤°à¤¿à¤®à¤£à¥à¤¡à¤² à¤¸à¤¾à¤®à¥‚à¤¹à¤¿à¤• à¤°à¥‚à¤ª à¤¸à¥‡ à¤•à¤¿à¤¸à¤•à¥‡ à¤ªà¥à¤°à¤¤à¤¿ à¤‰à¤¤à¥à¤¤à¤°à¤¦à¤¾à¤¯à¥€ à¤¹à¥‹à¤¤à¤¾ à¤¹à¥ˆ ?', '1', '', 0, NULL),
(11, 1, 'What does PHP stand for?', '17', '', 0, NULL),
(14, 2, 'PHP server scripts are surrounded by delimiters, which?', '17', '', 0, NULL),
(15, 3, 'How do you write \"Hello World\" in PHP', '17', '', 0, NULL),
(16, 4, 'The PHP syntax is most similar to:', '17', '', 0, NULL),
(17, 5, 'What is the correct way to create a function in PHP?', '17', '', 0, NULL),
(18, 6, 'What is the correct way to open the file \"time.txt\" as readable?', '17', '', 0, NULL),
(19, 7, 'Which superglobal variable holds information about headers, paths, and script locations?', '17', '', 0, NULL),
(20, 8, 'What is the correct way to add 1 to the $count variable?', '17', '', 0, NULL),
(21, 9, 'Which one of these variables has an illegal name?', '17', '', 0, NULL),
(22, 10, 'How do you create a cookie in PHP?', '17', '', 0, NULL),
(23, 11, 'How do you create an array in PHP?', '17', '', 0, NULL),
(24, 12, 'Which operator is used to check if two values are equal and of same data type?', '17', '', 0, NULL),
(25, 13, 'What is the correct way to end a PHP statement?', '17', '', 0, NULL),
(26, 14, 'All variables in PHP start with which symbol?', '17', '', 0, NULL),
(27, 15, 'How do you get information from a form that is submitted using the \"get\" method?', '17', '', 0, NULL),
(34, 1, 'à¤†à¤à¤¸à¥à¤“à¤‚ (Tears) à¤®à¥‡à¤‚ à¤•à¥Œà¤¨à¤¸à¤¾ à¤ªà¤¦à¤¾à¤°à¥à¤¥ à¤˜à¥à¤²à¤¾ à¤°à¤¹à¤¤à¤¾ à¤¹à¥ˆ ?', '23', '', 0, NULL),
(35, 2, 'à¤²à¥‹à¤¹à¥‡ à¤ªà¤° à¤œà¤‚à¤— (Rust) à¤²à¤—à¤¤à¥€ à¤¹à¥ˆ ?', '23', '', 0, NULL),
(36, 3, 'à¤‡à¤¨à¥à¤¸à¥à¤²à¤¿à¤¨ (Insuline) à¤•à¥€ à¤–à¥‹à¤œ à¤•à¥€ à¤¥à¥€ ?', '23', '', 0, NULL),
(37, 4, 'à¤µà¤¨à¤¸à¥à¤ªà¤¤à¤¿ à¤¤à¥‡à¤²à¥‹à¤‚ à¤•à¥‹ à¤˜à¥€ à¤®à¥‡à¤‚ à¤ªà¤°à¤¿à¤µà¤°à¥à¤¤à¤¿à¤¤ à¤•à¤¿à¤¯à¤¾ à¤œà¤¾à¤¤à¤¾ à¤¹à¥ˆ ?', '23', '', 0, NULL),
(38, 5, 'à¤¨à¤¿à¤®à¥à¤¨à¤²à¤¿à¤–à¤¿à¤¤ à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¥Œà¤¨ à¤¸à¥€ à¤à¤• à¤®à¤¿à¤¶à¥à¤°à¤§à¤¾à¤¤à¥ à¤¹à¥ˆ ?', '23', '', 0, NULL),
(39, 6, 'à¤¨à¤¿à¤®à¥à¤¨à¤²à¤¿à¤–à¤¿à¤¤ à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¥Œà¤¨ à¤¸à¥€ à¤ˆà¤‚à¤§à¤¨ à¤—à¥ˆà¤¸ (Fuel gas) à¤¨à¤¹à¥€à¤‚ à¤¹à¥ˆ ?', '23', '', 0, NULL),
(40, 7, 'à¤¨à¤¿à¤®à¥à¤¨à¤²à¤¿à¤–à¤¿à¤¤ à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¥Œà¤¨à¤¸à¤¾ à¤¤à¤¤à¥à¤µ à¤ªà¥à¤°à¤¬à¤² à¤•à¥à¤·à¤¾à¤°à¥€à¤¯ à¤‘à¤•à¥à¤¸à¤¾à¤‡à¤¡ à¤¬à¤¨à¤¾à¤¤à¤¾ à¤¹à¥ˆ à¤œà¤¬ à¤‘à¤•à¥à¤¸à¥€à¤œà¤¨ à¤®à¥‡à¤‚ à¤œà¤²à¤¤à¤¾ à¤¹à¥ˆ ?', '23', '', 0, NULL),
(41, 8, 'à¤«à¥‡à¤¦à¤® (Fathom) à¤¹à¥ˆ ?', '23', '', 0, NULL),
(42, 9, ' à¤°à¤¿à¤šà¤° à¤¸à¥à¤•à¥‡à¤² (Richter Scale) à¤•à¤¿à¤¸à¤•à¥‡ à¤¨à¤¾à¤ªà¤¨à¥‡ à¤®à¥‡à¤‚ à¤ªà¥à¤°à¤¯à¥‹à¤— à¤¹à¥‹à¤¤à¤¾ à¤¹à¥ˆ ?', '23', '', 0, NULL),
(43, 10, 'à¤¡à¤¾à¤¯à¤¨à¤¾à¤®à¤¾à¤‡à¤Ÿ à¤•à¥‡ à¤†à¤µà¤¿à¤·à¥à¤•à¤¾à¤°à¤• à¤¨à¤¿à¤®à¥à¤¨à¤²à¤¿à¤–à¤¿à¤¤ à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¥Œà¤¨ à¤¹à¥ˆà¤‚ ?', '23', '', 0, NULL),
(44, 1, 'à¤•à¤‚à¤ªà¥à¤¯à¥‚à¤Ÿà¤° à¤•à¥‡ à¤†à¤µà¤¿à¤·à¥à¤•à¤¾à¤°à¤• à¤•à¥Œà¤¨ à¤¹à¥ˆà¤‚ ?', '24', '', 0, NULL),
(45, 2, 'à¤¸à¤¬à¤¸à¥‡ à¤ªà¤¹à¤²à¤¾ à¤•à¤‚à¤ªà¥à¤¯à¥‚à¤Ÿà¤° à¤•à¤¾ à¤¨à¤¾à¤® à¤•à¥à¤¯à¤¾ à¤¥à¤¾ ?', '24', '', 0, NULL),
(46, 3, 'à¤†à¤§à¥à¤¨à¤¿à¤• à¤•à¤®à¥à¤ªà¥à¤¯à¥‚à¤Ÿà¤° à¤•à¥€ à¤–à¥‹à¤œ à¤¸à¤°à¥à¤µà¤ªà¥à¤°à¤¥à¤® à¤•à¤¬ à¤¹à¥à¤ˆ ?', '24', '', 0, NULL),
(47, 4, 'à¤•à¤®à¥à¤ªà¥à¤¯à¥‚à¤Ÿà¤° à¤•à¥‡ à¤•à¥à¤·à¥‡à¤¤à¥à¤° à¤®à¥‡à¤‚ à¤®à¤¹à¤¾à¤¨ à¤•à¥à¤°à¤¾à¤‚à¤¤à¤¿ à¤•à¤¬ à¤¸à¥‡ à¤†à¤ˆ ?', '24', '', 0, NULL),
(48, 5, 'à¤•à¤‚à¤ªà¥à¤¯à¥‚à¤Ÿà¤° à¤•à¤¾ à¤¹à¤¿à¤¨à¥à¤¦à¥€ à¤¨à¤¾à¤® à¤•à¥à¤¯à¤¾ à¤¹à¥ˆ ?', '24', '', 0, NULL),
(49, 6, ' à¤•à¤‚à¤ªà¥à¤¯à¥‚à¤Ÿà¤° à¤¸à¤¾à¤•à¥à¤·à¤°à¤¤à¤¾ à¤¦à¤¿à¤µà¤¸ à¤•à¤¬ à¤®à¤¨à¤¾à¤¯à¤¾ à¤œà¤¾à¤¤à¤¾ à¤¹à¥ˆ ?', '24', '', 0, NULL),
(50, 7, 'CPU à¤•à¤¾ à¤ªà¥‚à¤°à¥à¤£ à¤°à¥‚à¤ª à¤•à¥à¤¯à¤¾ à¤¹à¥ˆ ?', '24', '', 0, NULL),
(51, 8, 'à¤‡à¤¨à¤®à¥‡à¤‚ à¤¸à¥‡ à¤•à¥Œà¤¨ à¤¸à¤°à¥à¤š à¤‡à¤‚à¤œà¤¨ à¤¨à¤¹à¥€à¤‚ à¤¹à¥ˆ ?', '24', '', 0, NULL),
(52, 9, 'à¤¨à¤¿à¤®à¥à¤¨ à¤®à¥‡à¤‚ à¤•à¥Œà¤¨ à¤‡à¤¨à¤ªà¥à¤Ÿ à¤‡à¤•à¤¾à¤ˆ à¤¹à¥ˆ ?', '24', '', 0, NULL),
(53, 10, '1 à¤•à¤¿à¤²à¥‹à¤¬à¤¾à¤‡à¤Ÿ (KB) à¤•à¤¿à¤¤à¤¨à¥‡ à¤¬à¤¾à¤‡à¤Ÿ à¤•à¥‡ à¤¬à¤°à¤¾à¤¬à¤° à¤¹à¥‹à¤¤à¥‡ à¤¹à¥ˆ ?', '24', '', 0, NULL),
(73, 16, 'test image', '17', 'image/download.jpg', 2, NULL),
(75, 1, 'who is the prime minister of india', '27', '1', 1, NULL),
(76, 2, 'PHP server scripts are surrounded by delimiters, which?', '27', '1', 1, NULL),
(77, 3, 'How do you write ', '27', '1', 1, NULL),
(78, 4, 'The PHP syntax is most similar to:', '27', '1', 1, NULL),
(79, 5, 'What is the correct way to create a function in PHP?', '27', '1', 1, NULL),
(80, 1, 'who is the prime minister of india', '25', '1', 1, NULL),
(81, 2, 'PHP server scripts are surrounded by delimiters, which?', '25', '1', 1, NULL),
(82, 3, 'How do you write ', '25', '1', 1, NULL),
(83, 4, 'The PHP syntax is most similar to:', '25', '1', 1, NULL),
(84, 5, 'What is the correct way to create a function in PHP?', '25', '1', 1, NULL),
(85, 6, 'Which is the national flag of India?', '27', '1', 1, 1),
(86, 7, 'Please find the country ', '27', 'image/IMG_20220622_223443.jpg', 2, NULL),
(87, 17, 'who is the prime minister of india', '17', '1', 1, NULL),
(88, 18, 'PHP server scripts are surrounded by delimiters, which?', '17', '1', 1, NULL),
(89, 19, 'How do you write ', '17', '1', 1, NULL),
(90, 20, 'The PHP syntax is most similar to:', '17', '1', 1, NULL),
(91, 21, 'What is the correct way to create a function in PHP?', '17', '1', 1, NULL),
(92, 1, 'who is the prime minister of india', '28', '1', 1, NULL),
(93, 2, 'PHP server scripts are surrounded by delimiters, which?', '28', '1', 1, NULL),
(94, 3, 'How do you write ', '28', '1', 1, NULL),
(95, 4, 'The PHP syntax is most similar to:', '28', '1', 1, NULL),
(96, 5, 'What is the correct way to create a function in PHP?', '28', '1', 1, NULL),
(97, 6, 'What is the correct way to create a function in PHP?', '28', '1', 1, NULL),
(98, 7, 'who is the prime minister of india', '28', '1', 1, NULL),
(99, 8, 'PHP server scripts are surrounded by delimiters, which?', '28', '1', 1, NULL),
(100, 9, 'How do you write ', '28', '1', 1, NULL),
(101, 10, 'The PHP syntax is most similar to:', '28', '1', 1, NULL),
(102, 11, 'What is the correct way to create a function in PHP?', '28', '1', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `wmobile` varchar(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dentalcollege` varchar(250) NOT NULL,
  `checkstudant` varchar(33) NOT NULL,
  `creentbatch` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `percentage` varchar(20) NOT NULL,
  `courseid` varchar(22) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `name`, `email`, `wmobile`, `address`, `gender`, `dentalcollege`, `checkstudant`, `creentbatch`, `category`, `percentage`, `courseid`, `password`, `status`) VALUES
(2, 'Amarjeet', 'amarj234@gmail.com', '8382946376', 'amarjeet', 'Male', 'bhu', 'I am a Doctor', '2st Year', 'SEBC', '76', '1', '123', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `prices` double NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tarasection`
--

CREATE TABLE `tarasection` (
  `id` int(11) NOT NULL,
  `sundentid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `tarasectionid` varchar(30) NOT NULL,
  `pamentmethod` varchar(50) NOT NULL,
  `date1` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarasection`
--

INSERT INTO `tarasection` (`id`, `sundentid`, `courseid`, `sname`, `cname`, `email`, `mobile`, `tarasectionid`, `pamentmethod`, `date1`, `status`) VALUES
(1, 2, 3, 'null', 'dfgf', 'amarj234@gmail.com', '8382946376', 'pay_JkYC3G9dQYrnUW', 'card', '2022-06-22', 1),
(2, 2, 3, 'Amarjeet', 'Operative Dentistry ', 'amarj234@gmail.com', '8382946376', 'pay_Jkpcwz5HAbtTIh', 'card', '2022-06-23', 1),
(5, 2, 17, 'Amarjeet', 'PHP test', 'amarj234@gmail.com', '8382946376', 'pay_JsNlIr2O9BJk3o', 'card', '2022-07-12', 1),
(6, 2, 17, 'Amarjeet', 'PHP test', 'amarj234@gmail.com', '8382946376', 'pay_Jvarx5Ksjn0X2b', 'card', '2022-07-20', 1),
(7, 2, 23, 'Amarjeet', 'Science gk', 'amarj234@gmail.com', '8382946376', 'pay_JvbLnycJ82Vwi8', 'card', '2022-07-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video_titel` varchar(250) NOT NULL,
  `discription` text NOT NULL,
  `videopath` varchar(250) NOT NULL,
  `videothumble` text NOT NULL,
  `showhide` varchar(20) DEFAULT NULL,
  `courseid` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_titel`, `discription`, `videopath`, `videothumble`, `showhide`, `courseid`) VALUES
(5, 'Pharmacology ', 'This is video for students ', '720615558', 'thumbnail/IMG-20220622-WA0001.jpg', '2', '3'),
(6, 'Operative Dentistry ', 'this very important video', '722643985', 'thumbnail/IMG-20220622-WA0000.jpg', '2', '4'),
(7, 'Introduction ', 'This video is very important for students ', '722643985', 'thumbnail/IMG-20220622-WA0000.jpg', '2', '3'),
(8, 'this is test', 'test', '723041292', 'thumbnail/download.png', '2', '4'),
(9, 'instrument', '', '', 'thumbnail/Screenshot_2022-06-14-17-23-28-556_com.google.android.youtube.jpg', '2', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `buycorce`
--
ALTER TABLE `buycorce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyvideo`
--
ALTER TABLE `buyvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corce`
--
ALTER TABLE `corce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_role`
--
ALTER TABLE `login_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paidvideo`
--
ALTER TABLE `paidvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarasection`
--
ALTER TABLE `tarasection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT for table `buycorce`
--
ALTER TABLE `buycorce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buyvideo`
--
ALTER TABLE `buyvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `corce`
--
ALTER TABLE `corce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_role`
--
ALTER TABLE `login_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paidvideo`
--
ALTER TABLE `paidvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tarasection`
--
ALTER TABLE `tarasection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
