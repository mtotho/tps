-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2014 at 01:55 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tps`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `year` int(10) NOT NULL,
  `journal` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `pages` varchar(20) NOT NULL,
  `conference` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `authors`, `year`, `journal`, `description`, `pages`, `conference`, `location`, `publisher`, `type`) VALUES
(18, '', '', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `date` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=680 ;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `email`, `file`, `date`) VALUES
(1, 'mtotho@gmail.com', 'fakedocument.doc', '9/22/2012'),
(2, 'jojo@gmail.com', 'fakedoc2.doc', '9/22/2012'),
(3, 'mtotho@gmail.com', 'fakedocument3.doc', '9/22/2012'),
(4, 'mtotho@gmail.com', 'fakedocument4.doc', '9/22/2012'),
(5, 'mtotho@gmail.com', 'word.doc', 'September 29, 2012, '),
(6, 'mtotho@gmail.com', 'word.doc', 'September 29, 2012, '),
(7, 'mtotho@gmail.com', 'word.doc', 'September 29, 2012, '),
(8, 'mtotho@gmail.com', 'word.doc', 'September 29, 2012, '),
(9, 'mtotho@gmail.com', 'word.doc', 'September 29, 2012, '),
(10, 'mtotho@gmail.com', 'word.doc', 'September 29, 2012, '),
(11, 'mtotho@gmail.com', 'word.doc', 'September 29, 2012, '),
(12, 'mtotho@gmail.com', 'JAP_article.pdf', 'September 29, 2012, '),
(13, 'mtotho@gmail.com', 'chapter_10_Wolff,_Druskat,_Stubbs,_Messer.formatte', 'September 29, 2012, '),
(14, 'mtotho@gmail.com', 'Druskat.Wolff_.Group-levelEIChapter_.doc', 'September 29, 2012, '),
(15, 'mtotho@gmail.com', 'OD_Journal_Teams_article.pdf', 'September 29, 2012, '),
(16, 'mtotho@gmail.com', 'Team_Fundamentals_Checklist.pdf', 'October 1, 2012, 7:4'),
(17, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'October 21, 2012, 3:'),
(18, 'mtotho@gmail.com', 'SAMPLE(TeamSurvey).ppt', 'October 21, 2012, 3:'),
(19, 'mtotho@gmail.com', 'SAMPLE_team_survey.ppt', 'October 21, 2012, 3:'),
(20, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'October 21, 2012, 3:'),
(21, 'cmsarraf@teleco-plus.com', 'chapter_10_Wolff,_Druskat,_Stubbs,_Messer.formatte', 'November 7, 2012, 11:43 am'),
(22, 'alhasahm@equate.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'November 10, 2012, 11:10 pm'),
(23, 'alhasahm@equate.com', 'SAMPLE_team_survey.ppt', 'November 10, 2012, 11:25 pm'),
(24, 'alhasahm@equate.com', 'OD_Journal_Teams_article.pdf', 'November 10, 2012, 11:26 pm'),
(25, 'alhasahm@equate.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'November 10, 2012, 11:26 pm'),
(26, 'mmangino@copperamt.com', 'SAMPLE_team_survey.ppt', 'November 13, 2012, 7:13 pm'),
(27, 'eileen@eileenflynnconsulting.com', 'SAMPLE_team_survey.ppt', 'November 14, 2012, 8:02 pm'),
(28, 'eileen@eileenflynnconsulting.com', 'SAMPLE_team_survey.ppt', 'November 14, 2012, 8:18 pm'),
(29, 'eileen@eileenflynnconsulting.com', 'SAMPLE_team_survey.ppt', 'November 15, 2012, 4:02 am'),
(30, 'mtotho@gmail.com', 'SAMPLE_team_survey.ppt', 'November 15, 2012, 4:41 am'),
(31, 'mtotho@gmail.com', 'SampleTeamStakeholderReport.ppt', 'November 15, 2012, 4:46 am'),
(32, 'mmangino@copperasmt.com', 'SampleTeamStakeholderReport.ppt', 'November 15, 2012, 5:18 am'),
(33, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'November 15, 2012, 5:33 am'),
(34, 'apelts@its.jnj.com', 'Team_Fundamentals_Checklist.pdf', 'November 15, 2012, 8:41 am'),
(35, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'November 16, 2012, 10:12 am'),
(36, 'mmangino@copperasmt.com', 'OD_Journal_Teams_article.pdf', 'November 16, 2012, 10:13 am'),
(37, 'tom.mattus@ssi-learn.com', 'OD_Journal_Teams_article.pdf', 'November 18, 2012, 1:32 pm'),
(38, 'steve@geipartners.com', 'SAMPLE_TEAM.pdf', 'November 19, 2012, 8:43 am'),
(39, 'mmangino@copperasmt.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'November 20, 2012, 4:47 am'),
(40, 'mmangino@copperamt.com', 'OD_Journal_Teams_article.pdf', 'November 20, 2012, 4:47 am'),
(41, 'mmangino@copperasmt.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'November 20, 2012, 4:50 am'),
(42, 'mmangino@copperamt.com', 'SampleTeamStakeholderReport.ppt', 'November 20, 2012, 5:13 am'),
(43, 'mmangino@copperamt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 5:25 am'),
(44, 'mmangino@copperamt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 5:25 am'),
(45, 'mmangino@copperamt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 5:25 am'),
(46, 'mmangino@copperamt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 5:25 am'),
(47, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-levelEIChapter_.doc', 'November 20, 2012, 5:27 am'),
(48, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-levelEIChapter_.doc', 'November 20, 2012, 5:27 am'),
(49, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-levelEIChapter_.doc', 'November 20, 2012, 5:39 am'),
(50, 'mmangino@copperasmt.com', 'JAP_article.pdf', 'November 20, 2012, 5:40 am'),
(51, 'mmangino@copperamt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 5:42 am'),
(52, 'mmangino@copperamt.com', 'JAP_article.pdf', 'November 20, 2012, 5:43 am'),
(53, 'mmangino@copperamt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 5:43 am'),
(54, 'mmangino@copperamt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 5:43 am'),
(55, 'mmangino@copperamt.com', 'EIChapter.pdf', 'November 20, 2012, 5:44 am'),
(56, 'mmangino@copperamt.com', 'Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_06.pdf', 'November 20, 2012, 5:45 am'),
(57, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'November 20, 2012, 10:51 am'),
(58, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'November 20, 2012, 10:56 am'),
(59, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'November 20, 2012, 11:00 am'),
(60, 'eileen@eileenflynnconsulting.com', 'OD_Journal_Teams_article.pdf', 'November 20, 2012, 11:15 am'),
(61, 'mtotho@gmail.com', 'OD_Journal_Teams_article.pdf', 'November 20, 2012, 11:17 am'),
(62, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 11:18 am'),
(63, 'mmangino@copperamt.com', 'OD_Journal_Teams_article.pdf', 'November 20, 2012, 11:18 am'),
(64, 'mtotho@gmail.com', 'OD_Journal_Teams_article.pdf', 'November 20, 2012, 11:19 am'),
(65, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 11:20 am'),
(66, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 11:20 am'),
(67, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 11:22 am'),
(68, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 11:22 am'),
(69, 'mmangino@copperasmt.com', 'JAP_article.pdf', 'November 20, 2012, 11:23 am'),
(70, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 11:27 am'),
(71, 'mmangino@copperasmt.com', 'JAP_article.pdf', 'November 20, 2012, 11:29 am'),
(72, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 11:30 am'),
(73, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 11:30 am'),
(74, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 11:30 am'),
(75, 'mtotho@gmail.com', 'JAP_article.pdf', 'November 20, 2012, 11:30 am'),
(76, 'mmangino@copperasmt.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 20, 2012, 11:31 am'),
(77, 'steve@geipartners.com', 'SAMPLE_TEAM.pdf', 'November 26, 2012, 9:08 pm'),
(78, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'November 30, 2012, 9:38 am'),
(79, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'December 5, 2012, 7:15 pm'),
(80, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'December 5, 2012, 7:16 pm'),
(81, 'mmangino@copperamt.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 6, 2012, 6:01 am'),
(82, 'mmangino@copperasmt.com', 'SampleTeamStakeholderReport.ppt', 'December 6, 2012, 6:07 am'),
(83, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'December 13, 2012, 8:14 am'),
(84, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'December 18, 2012, 10:58 am'),
(85, 'testtest@gg', 'SampleTeamStakeholderReport.ppt', 'December 22, 2012, 6:19 am'),
(86, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 22, 2012, 6:45 am'),
(87, 'mtotho@gmail.com', 'SampleTeamStakeholderReport.ppt', 'December 22, 2012, 6:46 am'),
(88, 'testtetst', 'SAMPLE_TEAM.pdf', 'December 22, 2012, 6:46 am'),
(89, 'testtetst', 'SampleTeamStakeholderReport.ppt', 'December 22, 2012, 6:46 am'),
(90, 'mtotho@gmail.com', '', 'December 22, 2012, 6:47 am'),
(91, '', '', 'December 22, 2012, 6:48 am'),
(92, 'mtotho@gmail.com', '', 'December 22, 2012, 6:50 am'),
(93, 'mtotho@gmail.com', '', 'December 22, 2012, 6:51 am'),
(94, 'mtotho@gmail.com', '', 'December 22, 2012, 6:51 am'),
(95, 'mtotho@gmail.com', '', 'December 22, 2012, 6:51 am'),
(96, 'mtotho@gmail.com', '', 'December 22, 2012, 6:52 am'),
(97, 'mtotho@gmail.com', '', 'December 22, 2012, 6:53 am'),
(98, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 22, 2012, 6:54 am'),
(99, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 22, 2012, 6:54 am'),
(100, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 22, 2012, 6:55 am'),
(101, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 22, 2012, 6:55 am'),
(102, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 22, 2012, 6:55 am'),
(103, 'asdasda', 'OD_Journal_Teams_article.pdf', 'December 22, 2012, 7:03 am'),
(104, 'asdasda', 'Team_Emotional_Intelligence_Survey_Technical_Manua', 'December 22, 2012, 7:03 am'),
(105, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:36 pm'),
(106, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:37 pm'),
(107, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:37 pm'),
(108, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:37 pm'),
(109, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:38 pm'),
(110, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:38 pm'),
(111, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:39 pm'),
(112, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:40 pm'),
(113, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:41 pm'),
(114, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:41 pm'),
(115, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:41 pm'),
(116, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:41 pm'),
(117, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 23, 2012, 2:41 pm'),
(118, 'mtotho@gmail.com', 'SAMPLE_TEAM.pdf', 'December 23, 2012, 2:41 pm'),
(119, 'mtotho@gmail.com', 'Team_Emotional_Intelligence_Survey_Technical_Manua', 'December 23, 2012, 2:42 pm'),
(120, 'mtotho@gmail.com', 'Team_Fundamentals_Checklist.pdf', 'December 23, 2012, 2:43 pm'),
(121, 'mtotho@gmail.com', 'Team_Fundamentals_Checklist.pdf', 'December 23, 2012, 2:48 pm'),
(122, 'mtotho@gmail.com', 'Team_Fundamentals_Checklist.pdf', 'December 23, 2012, 2:49 pm'),
(123, 'mtotho@gmail.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'December 23, 2012, 2:56 pm'),
(124, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'December 23, 2012, 6:04 pm'),
(125, 'eileen@eileenflynnconsulting.com', 'Team_Fundamentals_Checklist.pdf', 'December 23, 2012, 6:04 pm'),
(126, 'gmannaer@its.jnj.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'December 26, 2012, 5:58 am'),
(127, 'jdenton@tsh.to', 'Team_Fundamentals_Checklist.pdf', 'December 27, 2012, 10:16 pm'),
(128, 'jdenton@tsh.to', 'Team_Fundamentals_Checklist.pdf', 'December 27, 2012, 10:16 pm'),
(129, 'eileen@eileenflynnconsulting.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'January 2, 2013, 9:48 am'),
(130, 'eileen@eileenflynnconsulting.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'January 2, 2013, 9:51 am'),
(131, 'anegu@dongenergy.dk', 'chapter_10_Wolff,_Druskat,_Stubbs,_Messer.formatte', 'January 4, 2013, 1:18 am'),
(132, 'anegu@dongenergy.dk', 'Druskat.Wolff_.Group-levelEIChapter_.doc', 'January 4, 2013, 1:20 am'),
(133, 'davidjardin@mac.com', 'SampleTeamStakeholderReport.ppt', 'January 9, 2013, 10:04 am'),
(134, 'davidjardin@mac.com', 'OD_Journal_Teams_article.pdf', 'January 9, 2013, 11:38 am'),
(135, 'steve@geipartners.com', 'SAMPLE_TEAM.pdf', 'January 14, 2013, 6:23 am'),
(136, 'julia@zestfor.com', 'SAMPLE_TEAM.pdf', 'January 15, 2013, 11:17 am'),
(137, 'HNeedlem@its.jnj.com', 'SampleTeamStakeholderReport.ppt', 'January 29, 2013, 8:27 am'),
(138, 'mino_akhtar@eisai.com', 'Team_Fundamentals_Checklist.pdf', 'February 12, 2013, 10:38 am'),
(139, 'aysha.alsherawi@bac.bh', 'Team_Fundamentals_Checklist.pdf', 'February 17, 2013, 2:39 am'),
(140, 'eileen@eileenflynnconsulting.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'February 27, 2013, 12:48 pm'),
(141, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'February 27, 2013, 2:58 pm'),
(142, 'mtotho@gmail.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'February 27, 2013, 3:00 pm'),
(143, 'mmangino@copperasmt.com', 'Team_Fundamentals_Checklist.pdf', 'March 13, 2013, 11:37 am'),
(144, 'csmith@nd.edu', 'Team_Emotional_Intelligence_Survey_Technical_Manua', 'March 18, 2013, 10:00 am'),
(145, 'stephanie_pinter@oxfordcorp.com', 'Team_Fundamentals_Checklist.pdf', 'March 18, 2013, 2:12 pm'),
(146, 'mmangino@copperamt.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'March 28, 2013, 10:13 am'),
(147, 'eileen@eileenflynnconsulting.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'March 28, 2013, 10:14 am'),
(148, 'mmangino@copperamt.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'March 28, 2013, 10:15 am'),
(149, 'mmangino@copperamt.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'March 28, 2013, 10:15 am'),
(150, 'mmangino@copperamt.com', 'Druskat.Wolff_.Group-levelEIChapter_.doc', 'March 28, 2013, 10:48 am'),
(151, 'mmangino@copperamt.com', 'Druskat.Wolff_.Group-levelEIChapter_.doc', 'March 28, 2013, 10:48 am'),
(152, 'moetivator@xtra.co.nz', 'SAMPLE_TEAM.pdf', 'March 28, 2013, 7:25 pm'),
(153, 'rafiuddinrafiq@yahoo.com', 'SampleTeamStakeholderReport.ppt', 'April 1, 2013, 11:24 pm'),
(154, 'ithemba@iburst.co.za', 'SAMPLE_TEAM.pdf', 'April 21, 2013, 7:49 am'),
(155, 'gladymir72@yahoo.com', 'Team_Fundamentals_Checklist.pdf', 'May 2, 2013, 3:43 pm'),
(156, 'harvey@halengroup.com', 'SAMPLE_TEAM.pdf', 'May 2, 2013, 6:30 pm'),
(157, 'edwina.natalia@dalecarnegie. co.id', 'The_Life-Giving_Team.GOM3_.pdf', 'May 6, 2013, 2:02 am'),
(158, 'edwina.natalia@dalecarnegie. co.id', 'TuckPaper.final_.pdf', 'May 6, 2013, 2:08 am'),
(159, 'edwina.natalia@dalecarnegie. co.id', 'AOM_Symposium_2._2005_._.pdf', 'May 6, 2013, 2:10 am'),
(160, 'edwina.natalia@dalecarnegie. co.id', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'May 6, 2013, 2:10 am'),
(161, 'edwina.natalia@dalecarnegie. co.id', 'JAP_article.pdf', 'May 6, 2013, 2:10 am'),
(162, 'edwina.natalia@dalecarnegie. co.id', 'Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_061.pd', 'May 6, 2013, 2:10 am'),
(163, 'cwahler@cindywahler.com', 'SAMPLE_TEAM.pdf', 'May 9, 2013, 4:05 am'),
(164, 'cwahler@cindywahler.com', 'SampleTeamStakeholderReport.ppt', 'May 9, 2013, 4:07 am'),
(165, 's@yahoo.com', 'SAMPLE_TEAM.pdf', 'May 29, 2013, 3:25 am'),
(166, 'chongko_k@hotmail.co.th', 'Team_Fundamentals_Checklist.pdf', 'May 30, 2013, 12:14 am'),
(167, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'June 10, 2013, 6:38 am'),
(168, 'eileen@eileenflynnconsulting.com', 'SampleTeamStakeholderReport.ppt', 'June 10, 2013, 6:38 am'),
(169, 'mmangino@copperamt.com', 'SampleTeamStakeholderReport.ppt', 'June 12, 2013, 6:58 am'),
(170, 'mmangino@copperamt.com', 'OD_Journal_Teams_article.pdf', 'June 12, 2013, 7:11 am'),
(171, 'mmangino@copperamt.com', 'OD_Journal_Teams_article.pdf', 'June 12, 2013, 7:11 am'),
(172, 'mmangino@copperamt.com', 'OD_Journal_Teams_article.pdf', 'June 12, 2013, 7:11 am'),
(173, 'mmangino@copperamt.com', 'Team_Fundamentals_Checklist.pdf', 'July 17, 2013, 12:10 pm'),
(174, 'drzinasuissa@yahoo.com', 'Team_Emotional_Intelligence_Survey_Technical_Manua', 'July 20, 2013, 6:34 am'),
(175, 'drzinasuissa@yahoo.com', 'Team_Emotional_Intelligence_Survey_Technical_Manua', 'July 20, 2013, 6:43 am'),
(176, 'drzinasuissa@yahoo.com', 'Team_Emotional_Intelligence_Survey_Technical_Manua', 'July 20, 2013, 6:43 am'),
(177, 'Barbara@maxproductivity.com', 'SAMPLE_TEAM.pdf', 'July 31, 2013, 3:40 pm'),
(178, 'Barbara@maxproductivity.com', 'Team_Emotional_Intelligence_Survey_Technical_Manua', 'July 31, 2013, 3:51 pm'),
(179, 'Barbara@maxproductivity.com', 'OD_Journal_Teams_article.pdf', 'July 31, 2013, 3:55 pm'),
(180, 'Barbara@maxproductivity.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'July 31, 2013, 3:56 pm'),
(181, 'Barbara@maxproductivity.com', 'SampleTeamStakeholderReport.ppt', 'July 31, 2013, 3:57 pm'),
(182, 'Barbara@maxproductivity.com', 'SampleTeamStakeholderReport.ppt', 'July 31, 2013, 3:59 pm'),
(183, 'archana.rana@wrigley.com', 'SampleTeamStakeholderReport.ppt', 'August 23, 2013, 8:08 am'),
(184, 'jeff.w.dunaway@kp.org', 'SAMPLE_TEAM.pdf', 'September 13, 2013, 12:16 pm'),
(185, 'dumvalue@example.com', '<div style=', 'September 23, 2013, 7:59 pm'),
(186, '/../../../../../../../../WEB-INF/web.xml.js', '<div style=', 'September 23, 2013, 7:59 pm'),
(187, '/../../../../../../../../WEB-INF/web.xml', '<div style=', 'September 23, 2013, 7:59 pm'),
(188, '/../../../../../../../WEB-INF/web.xml.js', '<div style=', 'September 23, 2013, 7:59 pm'),
(189, '/../../../../../../../WEB-INF/web.xml', '<div style=', 'September 23, 2013, 7:59 pm'),
(190, '/../../../../../../WEB-INF/web.xml.js', '<div style=', 'September 23, 2013, 7:59 pm'),
(191, '/../../../../../../WEB-INF/web.xml', '<div style=', 'September 23, 2013, 7:59 pm'),
(192, '/../../../../../WEB-INF/web.xml.js', '<div style=', 'September 23, 2013, 7:59 pm'),
(193, '/../../../../../WEB-INF/web.xml', '<div style=', 'September 23, 2013, 7:59 pm'),
(194, '/../../../../WEB-INF/web.xml.js', '<div style=', 'September 23, 2013, 7:59 pm'),
(195, '/../../../../WEB-INF/web.xml', '<div style=', 'September 23, 2013, 7:59 pm'),
(196, '/../../../WEB-INF/web.xml.js', '<div style=', 'September 23, 2013, 7:59 pm'),
(197, '/../../../WEB-INF/web.xml', '<div style=', 'September 23, 2013, 7:59 pm'),
(198, '/../../WEB-INF/web.xml.js', '<div style=', 'September 23, 2013, 7:59 pm'),
(199, '/../../WEB-INF/web.xml', '<div style=', 'September 23, 2013, 7:59 pm'),
(200, '/../WEB-INF/web.xml.js', '<div style=', 'September 23, 2013, 7:59 pm'),
(201, '/../WEB-INF/web.xml', '<div style=', 'September 23, 2013, 7:59 pm'),
(202, 'file:///boot.ini.js', '<div style=', 'September 23, 2013, 7:59 pm'),
(203, '1', '<div style=', 'September 23, 2013, 7:59 pm'),
(204, 'dumvalue@example.com''''""""', '<div style=', 'September 23, 2013, 7:59 pm'),
(205, '9 1 -', '<div style=', 'September 23, 2013, 7:59 pm'),
(206, '9 - 1', '<div style=', 'September 23, 2013, 7:59 pm'),
(207, 'dumvalue@example.com''"', '<div style=', 'September 23, 2013, 7:59 pm'),
(208, '9-1', '<div style=', 'September 23, 2013, 7:59 pm'),
(209, '8-7', '<div style=', 'September 23, 2013, 7:59 pm'),
(210, '9-8', '<div style=', 'September 23, 2013, 7:59 pm'),
(211, 'acavusoglu@ripplesgroup.com', 'SAMPLE_TEAM.pdf', 'September 25, 2013, 10:29 am'),
(212, 'jsa1@stir.ac.uk', 'Team_Fundamentals_Checklist.pdf', 'September 30, 2013, 12:49 am'),
(213, 'dumvalue@example.com', '', 'October 21, 2013, 9:11 pm'),
(214, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml.js', 'October 21, 2013, 9:11 pm'),
(215, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(216, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(217, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml.js', 'October 21, 2013, 9:11 pm'),
(218, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(219, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(220, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml.js', 'October 21, 2013, 9:11 pm'),
(221, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(222, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(223, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml.js', 'October 21, 2013, 9:11 pm'),
(224, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(225, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(226, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml.js', 'October 21, 2013, 9:11 pm'),
(227, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(228, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(229, 'dumvalue@example.com', '/../../../WEB-INF/web.xml.js', 'October 21, 2013, 9:11 pm'),
(230, 'dumvalue@example.com', '/../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(231, 'dumvalue@example.com', '/../../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(232, 'dumvalue@example.com', '/../../WEB-INF/web.xml.js', 'October 21, 2013, 9:11 pm'),
(233, 'dumvalue@example.com', '/../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(234, 'dumvalue@example.com', '/../../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(235, 'dumvalue@example.com', '/../WEB-INF/web.xml.js', 'October 21, 2013, 9:11 pm'),
(236, 'dumvalue@example.com', '/../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(237, 'dumvalue@example.com', '/../WEB-INF/web.xml', 'October 21, 2013, 9:11 pm'),
(238, 'dumvalue@example.com', 'file:///boot.ini.js', 'October 21, 2013, 9:11 pm'),
(239, 'dumvalue@example.com', 'file:%2F%2F%2Fboot.ini', 'October 21, 2013, 9:11 pm'),
(240, 'dumvalue@example.com', 'file:///boot.ini', 'October 21, 2013, 9:11 pm'),
(241, 'dumvalue@example.com', 'file:///boot.ini', 'October 21, 2013, 9:11 pm'),
(242, 'dumvalue@example.com', '................oot.ini.js', 'October 21, 2013, 9:11 pm'),
(243, 'dumvalue@example.com', '................oot.ini', 'October 21, 2013, 9:11 pm'),
(244, 'dumvalue@example.com', '................oot.ini', 'October 21, 2013, 9:11 pm'),
(245, 'dumvalue@example.com', '................oot.ini', 'October 21, 2013, 9:11 pm'),
(246, 'dumvalue@example.com', 'file:///etc/passwd.js', 'October 21, 2013, 9:11 pm'),
(247, 'dumvalue@example.com', 'file:%2F%2F%2Fetc%2Fpasswd', 'October 21, 2013, 9:11 pm'),
(248, 'dumvalue@example.com', 'file:///etc/passwd', 'October 21, 2013, 9:11 pm'),
(249, 'dumvalue@example.com', 'file:///etc/passwd', 'October 21, 2013, 9:11 pm'),
(250, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd.js', 'October 21, 2013, 9:11 pm'),
(251, 'dumvalue@example.com', '%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fet', 'October 21, 2013, 9:11 pm'),
(252, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd', 'October 21, 2013, 9:11 pm'),
(253, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd', 'October 21, 2013, 9:11 pm'),
(254, 'dumvalue@example.com', 'file:///etc/hosts.js', 'October 21, 2013, 9:11 pm'),
(255, 'dumvalue@example.com', 'file:%2F%2F%2Fetc%2Fhosts', 'October 21, 2013, 9:11 pm'),
(256, 'dumvalue@example.com', 'file:///etc/hosts', 'October 21, 2013, 9:11 pm'),
(257, 'dumvalue@example.com', 'file:///etc/hosts', 'October 21, 2013, 9:11 pm'),
(258, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts.js', 'October 21, 2013, 9:11 pm'),
(259, 'dumvalue@example.com', '%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fet', 'October 21, 2013, 9:11 pm'),
(260, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts', 'October 21, 2013, 9:11 pm'),
(261, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts', 'October 21, 2013, 9:11 pm'),
(262, 'dumvalue@example.com', 'http://www.google.com/humans.txt#foo=', 'October 21, 2013, 9:11 pm'),
(263, 'dumvalue@example.com', '', 'October 21, 2013, 9:11 pm'),
(264, 'dumvalue@example.com', '', 'October 21, 2013, 9:11 pm'),
(265, 'dumvalue@example.com', '1', 'October 21, 2013, 9:11 pm'),
(266, 'dumvalue@example.com', '1', 'October 21, 2013, 9:11 pm'),
(267, 'dumvalue@example.com', '''''""""', 'October 21, 2013, 9:11 pm'),
(268, 'dumvalue@example.com', '9 1 -', 'October 21, 2013, 9:11 pm'),
(269, 'dumvalue@example.com', '9 - 1', 'October 21, 2013, 9:11 pm'),
(270, 'dumvalue@example.com', '''"', 'October 21, 2013, 9:11 pm'),
(271, 'dumvalue@example.com', '9-1', 'October 21, 2013, 9:11 pm'),
(272, 'dumvalue@example.com', '8-7', 'October 21, 2013, 9:11 pm'),
(273, 'dumvalue@example.com', '9-8', 'October 21, 2013, 9:11 pm'),
(274, 'dumvalue@example.com', '', 'October 21, 2013, 9:11 pm'),
(275, '/../../../../../../../../WEB-INF/web.xml.js', '', 'October 21, 2013, 9:11 pm'),
(276, '/../../../../../../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:11 pm'),
(277, '/../../../../../../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(278, '/../../../../../../../WEB-INF/web.xml.js', '', 'October 21, 2013, 9:12 pm'),
(279, '/../../../../../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(280, '/../../../../../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(281, '/../../../../../../WEB-INF/web.xml.js', '', 'October 21, 2013, 9:12 pm'),
(282, '/../../../../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(283, '/../../../../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(284, '/../../../../../WEB-INF/web.xml.js', '', 'October 21, 2013, 9:12 pm'),
(285, '/../../../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(286, '/../../../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(287, '/../../../../WEB-INF/web.xml.js', '', 'October 21, 2013, 9:12 pm'),
(288, '/../../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(289, '/../../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(290, '/../../../WEB-INF/web.xml.js', '', 'October 21, 2013, 9:12 pm'),
(291, '/../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(292, '/../../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(293, '/../../WEB-INF/web.xml.js', '', 'October 21, 2013, 9:12 pm'),
(294, '/../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(295, '/../../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(296, '/../WEB-INF/web.xml.js', '', 'October 21, 2013, 9:12 pm'),
(297, '/../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(298, '/../WEB-INF/web.xml', '', 'October 21, 2013, 9:12 pm'),
(299, 'file:///boot.ini.js', '', 'October 21, 2013, 9:12 pm'),
(300, '', '', 'October 21, 2013, 9:12 pm'),
(301, 'dumvalue@example.com', '', 'October 21, 2013, 9:12 pm'),
(302, 'dumvalue@example.com', '', 'October 21, 2013, 9:12 pm'),
(303, 'dumvalue@example.com''''""""', '', 'October 21, 2013, 9:12 pm'),
(304, '9 1 -', '', 'October 21, 2013, 9:12 pm'),
(305, '9 - 1', '', 'October 21, 2013, 9:12 pm'),
(306, 'dumvalue@example.com''"', '', 'October 21, 2013, 9:12 pm'),
(307, '9-1', '', 'October 21, 2013, 9:12 pm'),
(308, '8-7', '', 'October 21, 2013, 9:12 pm'),
(309, '9-8', '', 'October 21, 2013, 9:12 pm'),
(310, '9-8', '', 'October 21, 2013, 9:12 pm'),
(311, 'file:%2F%2F%2Fboot.ini', '', 'October 21, 2013, 9:13 pm'),
(312, 'file:///boot.ini', '', 'October 21, 2013, 9:13 pm'),
(313, 'drbarbs2016@gmail.com', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 6, 2013, 5:29 am'),
(314, 'ejevans@unh.edu', 'The_Life-Giving_Team.GOM3_.pdf', 'November 7, 2013, 12:26 pm'),
(315, 'ejevans@unh.edu', 'TuckPaper.final_.pdf', 'November 7, 2013, 12:27 pm'),
(316, 'ejevans@unh.edu', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 7, 2013, 12:28 pm'),
(317, 'ejevans@unh.edu', 'AOM_Symposium_2._2005_._.pdf', 'November 9, 2013, 11:08 am'),
(318, 'dumvalue@example.com', '', 'November 19, 2013, 12:57 am'),
(319, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml.js', 'November 19, 2013, 12:57 am'),
(320, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(321, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(322, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml.js', 'November 19, 2013, 12:57 am'),
(323, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(324, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(325, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml.js', 'November 19, 2013, 12:57 am'),
(326, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(327, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(328, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml.js', 'November 19, 2013, 12:57 am'),
(329, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(330, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(331, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml.js', 'November 19, 2013, 12:57 am'),
(332, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(333, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(334, 'dumvalue@example.com', '/../../../WEB-INF/web.xml.js', 'November 19, 2013, 12:57 am'),
(335, 'dumvalue@example.com', '/../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(336, 'dumvalue@example.com', '/../../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(337, 'dumvalue@example.com', '/../../WEB-INF/web.xml.js', 'November 19, 2013, 12:57 am'),
(338, 'dumvalue@example.com', '/../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(339, 'dumvalue@example.com', '/../../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(340, 'dumvalue@example.com', '/../WEB-INF/web.xml.js', 'November 19, 2013, 12:57 am'),
(341, 'dumvalue@example.com', '/../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(342, 'dumvalue@example.com', '/../WEB-INF/web.xml', 'November 19, 2013, 12:57 am'),
(343, 'dumvalue@example.com', 'file:///boot.ini.js', 'November 19, 2013, 12:57 am'),
(344, 'dumvalue@example.com', 'file:%2F%2F%2Fboot.ini', 'November 19, 2013, 12:57 am'),
(345, 'dumvalue@example.com', 'file:///boot.ini', 'November 19, 2013, 12:57 am'),
(346, 'dumvalue@example.com', 'file:///boot.ini', 'November 19, 2013, 12:57 am'),
(347, 'dumvalue@example.com', '................oot.ini.js', 'November 19, 2013, 12:57 am'),
(348, 'dumvalue@example.com', '................oot.ini', 'November 19, 2013, 12:57 am'),
(349, 'dumvalue@example.com', '................oot.ini', 'November 19, 2013, 12:57 am'),
(350, 'dumvalue@example.com', '................oot.ini', 'November 19, 2013, 12:57 am'),
(351, 'dumvalue@example.com', 'file:///etc/passwd.js', 'November 19, 2013, 12:57 am'),
(352, 'dumvalue@example.com', 'file:%2F%2F%2Fetc%2Fpasswd', 'November 19, 2013, 12:57 am'),
(353, 'dumvalue@example.com', 'file:///etc/passwd', 'November 19, 2013, 12:57 am'),
(354, 'dumvalue@example.com', 'file:///etc/passwd', 'November 19, 2013, 12:57 am'),
(355, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd.js', 'November 19, 2013, 12:57 am'),
(356, 'dumvalue@example.com', '%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fet', 'November 19, 2013, 12:57 am'),
(357, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd', 'November 19, 2013, 12:57 am'),
(358, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd', 'November 19, 2013, 12:57 am'),
(359, 'dumvalue@example.com', 'file:///etc/hosts.js', 'November 19, 2013, 12:57 am'),
(360, 'dumvalue@example.com', 'file:%2F%2F%2Fetc%2Fhosts', 'November 19, 2013, 12:57 am'),
(361, 'dumvalue@example.com', 'file:///etc/hosts', 'November 19, 2013, 12:57 am'),
(362, 'dumvalue@example.com', 'file:///etc/hosts', 'November 19, 2013, 12:57 am'),
(363, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts.js', 'November 19, 2013, 12:57 am'),
(364, 'dumvalue@example.com', '%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fet', 'November 19, 2013, 12:57 am'),
(365, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts', 'November 19, 2013, 12:57 am'),
(366, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts', 'November 19, 2013, 12:57 am'),
(367, 'dumvalue@example.com', 'http://www.google.com/humans.txt#foo=', 'November 19, 2013, 12:57 am'),
(368, 'dumvalue@example.com', '', 'November 19, 2013, 12:57 am'),
(369, 'dumvalue@example.com', '', 'November 19, 2013, 12:57 am'),
(370, 'dumvalue@example.com', '1', 'November 19, 2013, 12:57 am'),
(371, 'dumvalue@example.com', '1', 'November 19, 2013, 12:57 am'),
(372, 'dumvalue@example.com', '''''""""', 'November 19, 2013, 12:57 am'),
(373, 'dumvalue@example.com', '9 1 -', 'November 19, 2013, 12:57 am'),
(374, 'dumvalue@example.com', '9 - 1', 'November 19, 2013, 12:57 am'),
(375, 'dumvalue@example.com', '''"', 'November 19, 2013, 12:57 am'),
(376, 'dumvalue@example.com', '9-1', 'November 19, 2013, 12:57 am'),
(377, 'dumvalue@example.com', '8-7', 'November 19, 2013, 12:57 am'),
(378, 'dumvalue@example.com', '9-8', 'November 19, 2013, 12:57 am'),
(379, 'dumvalue@example.com', '', 'November 19, 2013, 12:57 am'),
(380, '/../../../../../../../../WEB-INF/web.xml.js', '', 'November 19, 2013, 12:57 am'),
(381, '/../../../../../../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(382, '/../../../../../../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(383, '/../../../../../../../WEB-INF/web.xml.js', '', 'November 19, 2013, 12:57 am'),
(384, '/../../../../../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(385, '/../../../../../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(386, '/../../../../../../WEB-INF/web.xml.js', '', 'November 19, 2013, 12:57 am'),
(387, '/../../../../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(388, '/../../../../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(389, '/../../../../../WEB-INF/web.xml.js', '', 'November 19, 2013, 12:57 am'),
(390, '/../../../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(391, '/../../../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(392, '/../../../../WEB-INF/web.xml.js', '', 'November 19, 2013, 12:57 am'),
(393, '/../../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(394, '/../../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(395, '/../../../WEB-INF/web.xml.js', '', 'November 19, 2013, 12:57 am'),
(396, '/../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(397, '/../../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(398, '/../../WEB-INF/web.xml.js', '', 'November 19, 2013, 12:57 am'),
(399, '/../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(400, '/../../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(401, '/../WEB-INF/web.xml.js', '', 'November 19, 2013, 12:57 am'),
(402, '/../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(403, '/../WEB-INF/web.xml', '', 'November 19, 2013, 12:57 am'),
(404, 'file:///boot.ini.js', '', 'November 19, 2013, 12:57 am'),
(405, '', '', 'November 19, 2013, 12:57 am'),
(406, 'file:///boot.ini', '', 'November 19, 2013, 12:57 am'),
(407, '', '', 'November 19, 2013, 12:57 am'),
(408, 'dumvalue@example.com', '', 'November 19, 2013, 12:57 am'),
(409, 'dumvalue@example.com', '', 'November 19, 2013, 12:57 am'),
(410, 'dumvalue@example.com''''""""', '', 'November 19, 2013, 12:57 am'),
(411, '9 1 -', '', 'November 19, 2013, 12:57 am'),
(412, '9 - 1', '', 'November 19, 2013, 12:57 am'),
(413, 'dumvalue@example.com''"', '', 'November 19, 2013, 12:57 am'),
(414, '9-1', '', 'November 19, 2013, 12:58 am'),
(415, '8-7', '', 'November 19, 2013, 12:58 am'),
(416, '9-8', '', 'November 19, 2013, 12:58 am'),
(417, '9-8', '', 'November 19, 2013, 12:58 am'),
(418, '................oot.ini.js', '', 'November 19, 2013, 12:58 am'),
(419, 'zsuzsanna.toldi@aquilone.hu', 'Accelerating_Team_Performance-White_Paper.pdf', 'November 22, 2013, 2:51 am'),
(420, 'erinmmccarthy@comcast.net', 'JAP_article.pdf', 'November 26, 2013, 3:42 am'),
(421, 'erinmmccarthy@comcast.net', 'chapter_10_Wolff,_Druskat,_Stubbs,_Messer.formatte', 'November 26, 2013, 3:45 am'),
(422, 'erinmmccarthy@comcast.net', 'Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_06.pdf', 'November 26, 2013, 3:46 am'),
(423, 'erinmmccarthy@comcast.net', 'Druskat.Wolff_.Group-levelEIChapter_.doc', 'November 26, 2013, 3:47 am'),
(424, 'erinmmccarthy@comcast.net', 'EIChapter.pdf', 'November 26, 2013, 3:50 am'),
(425, 'erinmmccarthy@comcast.net', 'Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_06.pdf', 'November 26, 2013, 3:51 am'),
(426, 'erinmmccarthy@comcast.net', 'Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_061.pd', 'November 26, 2013, 4:14 am'),
(427, 'erinmmccarthy@comcast.net', 'Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_061.pd', 'November 26, 2013, 4:16 am'),
(428, 'erinmmccarthy@comcast.net', 'Team_Emotional_Intelligence_Survey_Technical_Manua', 'November 26, 2013, 4:18 am'),
(429, 'fer.amkreutz@apg-am.com', 'Team_Fundamentals_Checklist.pdf', 'November 26, 2013, 6:12 am'),
(430, 'erinmmccarthy@comcast.net', 'Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_061.pd', 'November 26, 2013, 1:57 pm'),
(431, 'erinmmccarthy@comcast.net', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 26, 2013, 2:01 pm'),
(432, 'erinmmccarthy@comcast.net', 'Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_061.pd', 'November 26, 2013, 2:02 pm'),
(433, 'erinmmccarthy@comcast.net', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 26, 2013, 2:02 pm'),
(434, 'erinmmccarthy@comcast.net', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'November 26, 2013, 5:47 pm'),
(435, 'floka@hotmail.com', 'SAMPLE_TEAM.pdf', 'January 18, 2014, 5:05 am'),
(436, 'laston.charriez@westernunion.com', 'Team_Fundamentals_Checklist.pdf', 'January 20, 2014, 9:35 am'),
(437, 'cvelas4@wgu.edu', 'Accelerating_Team_Performance-White_Paper.pdf', 'January 22, 2014, 4:13 pm'),
(438, 'claire.semple@telefonica.com', 'SAMPLE_TEAM.pdf', 'January 23, 2014, 6:45 am'),
(439, 'larry@shulman-consulting.com', 'SAMPLE_TEAM.pdf', 'January 30, 2014, 7:23 am'),
(440, 'byoungseo.moon@gm.com', 'Team_Fundamentals_Checklist.pdf', 'February 10, 2014, 9:17 pm'),
(441, 'orbisonp@bellsouth.net', 'Accelerating_Team_Performance-White_Paper.pdf', 'February 15, 2014, 12:39 pm'),
(442, 'carfara@ekdd.gr', 'Druskat.Wolff_.Group-levelEIChapter_.doc', 'February 16, 2014, 3:29 am'),
(443, 'carfara@ekdd.gr', 'EIChapter.pdf', 'February 16, 2014, 3:31 am'),
(444, 'carfara@ekdd.gr', 'chapter_10_Wolff,_Druskat,_Stubbs,_Messer.formatte', 'February 16, 2014, 3:33 am'),
(445, 'carfara@ekdd.gr', 'chapter_10_Wolff,_Druskat,_Stubbs,_Messer.formatte', 'February 16, 2014, 3:34 am'),
(446, 'kknee@nexiom.net', 'Team_Fundamentals_Checklist.pdf', 'February 19, 2014, 2:25 pm'),
(447, 'mmangino@copperasmt.com', 'Team_Fundamentals_Checklist.pdf', 'March 2, 2014, 8:54 am'),
(448, 'info@margaretedwards.co.uk', 'Team_Fundamentals_Checklist.pdf', 'March 12, 2014, 9:41 am'),
(449, 'info@margaretedwards.co.uk', 'SAMPLE_TEAM.pdf', 'March 12, 2014, 9:48 am'),
(450, 'info@margaretedwards.co.uk', 'Team_Emotional_Intelligence_Survey_Technical_Manua', 'March 12, 2014, 9:50 am'),
(451, 'info@margaretedwards.co.uk', 'SampleTeamStakeholderReport.ppt', 'March 12, 2014, 9:55 am'),
(452, 'info@margaretedwards.co.uk', 'SampleTeamStakeholderReport.ppt', 'March 12, 2014, 10:01 am'),
(453, 'info@margaretedwards.co.uk', 'OD_Journal_Teams_article.pdf', 'March 12, 2014, 10:02 am'),
(454, 'info@margaretedwards.co.uk', 'Accelerating_Team_Performance-White_Paper.pdf', 'March 12, 2014, 10:02 am'),
(455, 'bh@barbarahealyassociates.com', 'Team_Fundamentals_Checklist.pdf', 'March 15, 2014, 12:17 pm'),
(456, 'bh@barbarahealyassociates.com', 'OD_Journal_Teams_article.pdf', 'March 15, 2014, 12:25 pm'),
(457, 'bh@barbarahealyassociates.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'March 15, 2014, 1:06 pm'),
(458, 'bh@barbarahealyassociates.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'March 16, 2014, 11:38 am'),
(459, 'dumvalue@example.com', '', 'March 16, 2014, 5:14 pm'),
(460, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml.js', 'March 16, 2014, 5:14 pm'),
(461, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(462, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(463, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml.js', 'March 16, 2014, 5:14 pm'),
(464, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(465, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(466, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml.js', 'March 16, 2014, 5:14 pm'),
(467, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(468, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(469, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml.js', 'March 16, 2014, 5:14 pm'),
(470, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(471, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(472, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml.js', 'March 16, 2014, 5:14 pm'),
(473, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(474, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(475, 'dumvalue@example.com', '/../../../WEB-INF/web.xml.js', 'March 16, 2014, 5:14 pm'),
(476, 'dumvalue@example.com', '/../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(477, 'dumvalue@example.com', '/../../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(478, 'dumvalue@example.com', '/../../WEB-INF/web.xml.js', 'March 16, 2014, 5:14 pm'),
(479, 'dumvalue@example.com', '/../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(480, 'dumvalue@example.com', '/../../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(481, 'dumvalue@example.com', '/../WEB-INF/web.xml.js', 'March 16, 2014, 5:14 pm'),
(482, 'dumvalue@example.com', '/../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(483, 'dumvalue@example.com', '/../WEB-INF/web.xml', 'March 16, 2014, 5:14 pm'),
(484, 'dumvalue@example.com', 'file:///boot.ini.js', 'March 16, 2014, 5:14 pm'),
(485, 'dumvalue@example.com', 'file:%2F%2F%2Fboot.ini', 'March 16, 2014, 5:14 pm'),
(486, 'dumvalue@example.com', 'file:///boot.ini', 'March 16, 2014, 5:14 pm'),
(487, 'dumvalue@example.com', 'file:///boot.ini', 'March 16, 2014, 5:14 pm'),
(488, 'dumvalue@example.com', '................oot.ini.js', 'March 16, 2014, 5:14 pm'),
(489, 'dumvalue@example.com', '................oot.ini', 'March 16, 2014, 5:14 pm'),
(490, 'dumvalue@example.com', '................oot.ini', 'March 16, 2014, 5:14 pm'),
(491, 'dumvalue@example.com', '................oot.ini', 'March 16, 2014, 5:14 pm'),
(492, 'dumvalue@example.com', 'file:///etc/passwd.js', 'March 16, 2014, 5:14 pm'),
(493, 'dumvalue@example.com', 'file:%2F%2F%2Fetc%2Fpasswd', 'March 16, 2014, 5:14 pm'),
(494, 'dumvalue@example.com', 'file:///etc/passwd', 'March 16, 2014, 5:14 pm'),
(495, 'dumvalue@example.com', 'file:///etc/passwd', 'March 16, 2014, 5:14 pm'),
(496, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd.js', 'March 16, 2014, 5:14 pm'),
(497, 'dumvalue@example.com', '%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fet', 'March 16, 2014, 5:14 pm'),
(498, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd', 'March 16, 2014, 5:14 pm'),
(499, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd', 'March 16, 2014, 5:14 pm'),
(500, 'dumvalue@example.com', 'file:///etc/hosts.js', 'March 16, 2014, 5:14 pm'),
(501, 'dumvalue@example.com', 'file:%2F%2F%2Fetc%2Fhosts', 'March 16, 2014, 5:14 pm'),
(502, 'dumvalue@example.com', 'file:///etc/hosts', 'March 16, 2014, 5:14 pm'),
(503, 'dumvalue@example.com', 'file:///etc/hosts', 'March 16, 2014, 5:14 pm'),
(504, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts.js', 'March 16, 2014, 5:14 pm'),
(505, 'dumvalue@example.com', '%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fet', 'March 16, 2014, 5:14 pm'),
(506, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts', 'March 16, 2014, 5:14 pm'),
(507, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts', 'March 16, 2014, 5:14 pm'),
(508, 'dumvalue@example.com', 'http://www.google.com/humans.txt#foo=', 'March 16, 2014, 5:14 pm'),
(509, 'dumvalue@example.com', '', 'March 16, 2014, 5:14 pm'),
(510, 'dumvalue@example.com', '', 'March 16, 2014, 5:14 pm'),
(511, 'dumvalue@example.com', '1', 'March 16, 2014, 5:14 pm'),
(512, 'dumvalue@example.com', '1', 'March 16, 2014, 5:14 pm'),
(513, 'dumvalue@example.com', '''''""""', 'March 16, 2014, 5:14 pm'),
(514, 'dumvalue@example.com', '9 1 -', 'March 16, 2014, 5:14 pm'),
(515, 'dumvalue@example.com', '9 - 1', 'March 16, 2014, 5:14 pm'),
(516, 'dumvalue@example.com', '''"', 'March 16, 2014, 5:14 pm'),
(517, 'dumvalue@example.com', '9-1', 'March 16, 2014, 5:14 pm'),
(518, 'dumvalue@example.com', '8-7', 'March 16, 2014, 5:14 pm'),
(519, 'dumvalue@example.com', '9-8', 'March 16, 2014, 5:14 pm'),
(520, 'dumvalue@example.com', '', 'March 16, 2014, 5:14 pm'),
(521, '/../../../../../../../../WEB-INF/web.xml.js', '', 'March 16, 2014, 5:14 pm'),
(522, '/../../../../../../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(523, '/../../../../../../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(524, '/../../../../../../../WEB-INF/web.xml.js', '', 'March 16, 2014, 5:14 pm'),
(525, '/../../../../../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(526, '/../../../../../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(527, '/../../../../../../WEB-INF/web.xml.js', '', 'March 16, 2014, 5:14 pm'),
(528, '/../../../../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(529, '/../../../../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(530, '/../../../../../WEB-INF/web.xml.js', '', 'March 16, 2014, 5:14 pm'),
(531, '/../../../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(532, '/../../../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(533, '/../../../../WEB-INF/web.xml.js', '', 'March 16, 2014, 5:14 pm'),
(534, '/../../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(535, '/../../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(536, '/../../../WEB-INF/web.xml.js', '', 'March 16, 2014, 5:14 pm'),
(537, '/../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(538, '/../../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(539, '/../../WEB-INF/web.xml.js', '', 'March 16, 2014, 5:14 pm'),
(540, '/../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(541, '/../../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(542, '/../WEB-INF/web.xml.js', '', 'March 16, 2014, 5:14 pm'),
(543, '/../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(544, '/../WEB-INF/web.xml', '', 'March 16, 2014, 5:14 pm'),
(545, 'file:///boot.ini.js', '', 'March 16, 2014, 5:14 pm'),
(546, '', '', 'March 16, 2014, 5:14 pm'),
(547, 'file:///boot.ini', '', 'March 16, 2014, 5:14 pm'),
(548, '', '', 'March 16, 2014, 5:14 pm'),
(549, '................oot.ini.js', '', 'March 16, 2014, 5:14 pm'),
(550, '', '', 'March 16, 2014, 5:14 pm'),
(551, 'dumvalue@example.com', '', 'March 16, 2014, 5:14 pm'),
(552, 'dumvalue@example.com', '', 'March 16, 2014, 5:14 pm'),
(553, 'dumvalue@example.com''''""""', '', 'March 16, 2014, 5:14 pm'),
(554, '9 1 -', '', 'March 16, 2014, 5:14 pm'),
(555, '9 - 1', '', 'March 16, 2014, 5:14 pm'),
(556, 'dumvalue@example.com''"', '', 'March 16, 2014, 5:14 pm'),
(557, '9-1', '', 'March 16, 2014, 5:14 pm'),
(558, '8-7', '', 'March 16, 2014, 5:14 pm'),
(559, '9-8', '', 'March 16, 2014, 5:14 pm'),
(560, '9-8', '', 'March 16, 2014, 5:14 pm'),
(561, '................oot.ini', '', 'March 16, 2014, 5:15 pm'),
(562, 'eileen@eileenflynnconsulting.com', 'Team_Fundamentals_Checklist.pdf', 'April 2, 2014, 7:25 am'),
(563, 'mtotho@gmail.com', 'Team_Fundamentals_Checklist.pdf', 'April 2, 2014, 8:28 am'),
(564, 'mtotho@gmail.com', 'Team_health_check.pdf', 'April 2, 2014, 8:35 am'),
(565, 'mtotho@gmail.com', 'Team_health_check.pdf', 'April 2, 2014, 8:36 am'),
(566, 'eileen@eileenflynnconsulting.com', 'Team_health_check.pdf', 'April 2, 2014, 8:52 pm'),
(567, 'rbkbateman@msn.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'April 24, 2014, 2:45 pm'),
(568, 'Fj', 'Accelerating_Team_Performance-White_Paper.pdf', 'June 4, 2014, 6:34 am'),
(569, 'Fj', 'Accelerating_Team_Performance-White_Paper.pdf', 'June 4, 2014, 7:00 am'),
(570, 'hg', 'OD_Journal_Teams_article.pdf', 'June 4, 2014, 10:12 am'),
(571, 'hg', 'Accelerating_Team_Performance-White_Paper.pdf', 'June 4, 2014, 10:13 am'),
(572, 'hg', 'Accelerating_Team_Performance-White_Paper.pdf', 'June 4, 2014, 10:14 am'),
(573, 'hg', 'Accelerating_Team_Performance-White_Paper.pdf', 'June 4, 2014, 10:16 am'),
(574, 'robercanas@gmail.com', 'Team_health_check.pdf', 'June 11, 2014, 3:03 am'),
(575, 'wuest@cwuest.com', 'OD_Journal_Teams_article.pdf', 'June 20, 2014, 5:57 am'),
(576, 'wuest@cwuest.com', 'Accelerating_Team_Performance-White_Paper.pdf', 'June 20, 2014, 6:01 am'),
(577, 'eileen@eileenflynnconsulting.com', 'Team_health_check.pdf', 'June 20, 2014, 11:40 am'),
(578, 'eileen@eileenflynnconsulting.com', 'Team_health_check.pdf', 'June 20, 2014, 11:47 am'),
(579, 'eileen@eileenflynnconsulting.com', 'Team_health_check.pdf', 'June 20, 2014, 11:55 am'),
(580, 'eileen@eileenflynnconsulting.com', 'Team_health_check.pdf', 'June 20, 2014, 12:28 pm'),
(581, 'steve@geipartners.com', 'SAMPLE_TEAM.pdf', 'June 30, 2014, 2:25 pm'),
(582, 'george@gdi-assoc.com', 'Team_health_check.pdf', 'July 13, 2014, 5:19 pm'),
(583, 'file:///etc/passwd.js', '', 'July 15, 2014, 4:39 pm'),
(584, 'file:///etc/passwd.js', 'file:///etc/passwd', 'July 15, 2014, 4:41 pm'),
(585, 'file:///etc/passwd.js', '/../../../../../../../../../etc/passwd.js', 'July 15, 2014, 4:41 pm'),
(586, 'file:///etc/passwd.js', '%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fet', 'July 15, 2014, 4:41 pm'),
(587, 'file:///etc/passwd.js', '/../../../../../../../../../etc/passwd', 'July 15, 2014, 4:41 pm'),
(588, 'file:///etc/passwd.js', 'file:%2F%2F%2Fetc%2Fhosts', 'July 15, 2014, 4:41 pm');
INSERT INTO `downloads` (`id`, `email`, `file`, `date`) VALUES
(589, 'file:///etc/passwd.js', 'file:///etc/hosts', 'July 15, 2014, 4:41 pm'),
(590, 'file:///etc/passwd.js', '/../../../../../../../../../etc/hosts.js', 'July 15, 2014, 4:41 pm'),
(591, 'file:///etc/passwd.js', '%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fet', 'July 15, 2014, 4:41 pm'),
(592, 'file:///etc/passwd.js', '/../../../../../../../../../etc/hosts', 'July 15, 2014, 4:41 pm'),
(593, 'file:///etc/passwd.js', 'file:///etc/hosts', 'July 15, 2014, 4:41 pm'),
(594, '', '', 'July 15, 2014, 4:41 pm'),
(595, 'dumvalue@example.com', '', 'July 15, 2014, 4:42 pm'),
(596, '/../../../../../../../../WEB-INF/web.xml.js', '', 'July 15, 2014, 4:42 pm'),
(597, '/../../../../../../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(598, '/../../../../../../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(599, '/../../../../../../../WEB-INF/web.xml.js', '', 'July 15, 2014, 4:42 pm'),
(600, 'dumvalue@example.com', '', 'July 15, 2014, 4:42 pm'),
(601, '/../../../../../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(602, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(603, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml.js', 'July 15, 2014, 4:42 pm'),
(604, 'dumvalue@example.com', '/../../../../../../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(605, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml.js', 'July 15, 2014, 4:42 pm'),
(606, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(607, 'dumvalue@example.com', '/../../../../../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(608, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml.js', 'July 15, 2014, 4:42 pm'),
(609, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(610, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml.js', 'July 15, 2014, 4:42 pm'),
(611, 'dumvalue@example.com', '/../../../../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(612, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(613, 'dumvalue@example.com', '/../../../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(614, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml.js', 'July 15, 2014, 4:42 pm'),
(615, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(616, 'dumvalue@example.com', '/../../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(617, 'dumvalue@example.com', '/../../../WEB-INF/web.xml.js', 'July 15, 2014, 4:42 pm'),
(618, 'dumvalue@example.com', '/../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(619, 'dumvalue@example.com', '/../../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(620, 'dumvalue@example.com', '/../../WEB-INF/web.xml.js', 'July 15, 2014, 4:42 pm'),
(621, 'dumvalue@example.com', '/../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(622, 'dumvalue@example.com', '/../../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(623, 'dumvalue@example.com', '/../WEB-INF/web.xml.js', 'July 15, 2014, 4:42 pm'),
(624, 'file:///etc/passwd.js', '/../../../../../../../../../etc/hosts', 'July 15, 2014, 4:42 pm'),
(625, 'dumvalue@example.com', '/../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(626, 'dumvalue@example.com', '/../WEB-INF/web.xml', 'July 15, 2014, 4:42 pm'),
(627, 'dumvalue@example.com', 'file:///boot.ini', 'July 15, 2014, 4:42 pm'),
(628, 'dumvalue@example.com', 'file:///boot.ini', 'July 15, 2014, 4:42 pm'),
(629, 'dumvalue@example.com', '................oot.ini', 'July 15, 2014, 4:42 pm'),
(630, 'dumvalue@example.com', '................oot.ini.js', 'July 15, 2014, 4:42 pm'),
(631, 'dumvalue@example.com', '................oot.ini', 'July 15, 2014, 4:42 pm'),
(632, 'dumvalue@example.com', '................oot.ini', 'July 15, 2014, 4:42 pm'),
(633, 'dumvalue@example.com', 'file:///etc/passwd.js', 'July 15, 2014, 4:42 pm'),
(634, 'dumvalue@example.com', 'file:%2F%2F%2Fetc%2Fpasswd', 'July 15, 2014, 4:42 pm'),
(635, 'dumvalue@example.com', 'file:///etc/passwd', 'July 15, 2014, 4:42 pm'),
(636, 'dumvalue@example.com', 'file:///etc/passwd', 'July 15, 2014, 4:42 pm'),
(637, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd.js', 'July 15, 2014, 4:42 pm'),
(638, 'dumvalue@example.com', '%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fet', 'July 15, 2014, 4:42 pm'),
(639, '', '', 'July 15, 2014, 4:42 pm'),
(640, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd', 'July 15, 2014, 4:42 pm'),
(641, 'dumvalue@example.com', '/../../../../../../../../../etc/passwd', 'July 15, 2014, 4:42 pm'),
(642, '', '', 'July 15, 2014, 4:42 pm'),
(643, 'dumvalue@example.com', 'file:///etc/hosts', 'July 15, 2014, 4:42 pm'),
(644, 'dumvalue@example.com', 'file:%2F%2F%2Fetc%2Fhosts', 'July 15, 2014, 4:42 pm'),
(645, 'dumvalue@example.com', 'file:///etc/hosts.js', 'July 15, 2014, 4:42 pm'),
(646, 'dumvalue@example.com', '%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fet', 'July 15, 2014, 4:42 pm'),
(647, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts.js', 'July 15, 2014, 4:42 pm'),
(648, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts', 'July 15, 2014, 4:42 pm'),
(649, 'dumvalue@example.com', '/../../../../../../../../../etc/hosts', 'July 15, 2014, 4:42 pm'),
(650, '/../../../../../../WEB-INF/web.xml.js', '', 'July 15, 2014, 4:42 pm'),
(651, '/../../../../../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(652, '/../../../../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(653, '/../../../../../WEB-INF/web.xml.js', '', 'July 15, 2014, 4:42 pm'),
(654, '/../../../../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(655, '/../../../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(656, '/../../../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(657, '/../../../../WEB-INF/web.xml.js', '', 'July 15, 2014, 4:42 pm'),
(658, '/../../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(659, '/../../../WEB-INF/web.xml.js', '', 'July 15, 2014, 4:42 pm'),
(660, '/../../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(661, '/../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(662, '/../../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(663, '/../../WEB-INF/web.xml.js', '', 'July 15, 2014, 4:42 pm'),
(664, '/../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(665, '/../../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(666, '/../WEB-INF/web.xml.js', '', 'July 15, 2014, 4:42 pm'),
(667, '/../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(668, '/../WEB-INF/web.xml', '', 'July 15, 2014, 4:42 pm'),
(669, 'file:///boot.ini.js', '', 'July 15, 2014, 4:42 pm'),
(670, 'file:%2F%2F%2Fboot.ini', '', 'July 15, 2014, 4:42 pm'),
(671, 'file:///boot.ini', '', 'July 15, 2014, 4:42 pm'),
(672, '', '', 'July 15, 2014, 4:42 pm'),
(673, '................oot.ini.js', '', 'July 15, 2014, 4:42 pm'),
(674, '', '', 'July 15, 2014, 4:42 pm'),
(675, '................oot.ini', '', 'July 15, 2014, 4:42 pm'),
(676, '', '', 'July 15, 2014, 4:42 pm'),
(677, '', '', 'July 15, 2014, 4:42 pm'),
(678, 'file:///etc/passwd.js', '', 'July 15, 2014, 4:42 pm'),
(679, '', '', 'July 15, 2014, 4:42 pm');

-- --------------------------------------------------------

--
-- Table structure for table `downloads_files`
--

CREATE TABLE IF NOT EXISTS `downloads_files` (
  `filename` varchar(150) NOT NULL,
  `uploader` varchar(40) NOT NULL,
  `date` varchar(60) NOT NULL,
  PRIMARY KEY (`filename`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads_files`
--

INSERT INTO `downloads_files` (`filename`, `uploader`, `date`) VALUES
('chapter_10_Wolff,_Druskat,_Stubbs,_Messer.formatted2_1.pdf', 'mtotho@gmail.com', 'September 23, 2012, 5:07 pm'),
('JAP_article.pdf', 'mtotho@gmail.com', 'September 22, 2012, 7:05 pm'),
('Druskat.Wolff_.Group-levelEIChapter_.doc', 'mtotho@gmail.com', 'September 23, 2012, 4:57 pm'),
('Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_06.pdf', 'mtotho@gmail.com', 'September 23, 2012, 11:26 pm'),
('Accelerating_Team_Performance-White_Paper1.pdf', 'mtotho@gmail.com', 'September 29, 2012, 4:52 pm'),
('OD_Journal_Teams_article.pdf', 'mtotho@gmail.com', 'September 29, 2012, 4:53 pm'),
('SAMPLE_TEAM.pdf', 'mtotho@gmail.com', 'September 29, 2012, 4:56 pm'),
('Team_Emotional_Intelligence_Survey_Technical_Manual.pdf', 'mtotho@gmail.com', 'September 29, 2012, 4:56 pm'),
('EIChapter.pdf', 'mtotho@gmail.com', 'October 1, 2012, 4:22 pm'),
('Emotion_in_Groups_Symposium.pdf', 'mtotho@gmail.com', 'October 1, 2012, 4:28 pm'),
('Team_Fundamentals_Checklist.pdf', 'mtotho@gmail.com', 'October 1, 2012, 7:41 pm'),
('Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'mtotho@gmail.com', 'October 21, 2012, 1:58 pm'),
('AOM_Symposium_2._2005_._.pdf', 'mtotho@gmail.com', 'October 21, 2012, 2:11 pm'),
('JAP_article1.pdf', 'mtotho@gmail.com', 'October 21, 2012, 2:15 pm'),
('The_Life-Giving_Team.GOM3_.pdf', 'mtotho@gmail.com', 'October 21, 2012, 2:55 pm'),
('TuckPaper.final_.pdf', 'mtotho@gmail.com', 'October 21, 2012, 2:56 pm'),
('Adaptability.pdf', 'mtotho@gmail.com', 'October 21, 2012, 3:13 pm'),
('Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_061.pdf', 'mtotho@gmail.com', 'December 2, 2012, 11:46 pm'),
('Team_health_check.pdf', 'mtotho@gmail.com', 'April 2, 2014, 8:35 am');

-- --------------------------------------------------------

--
-- Table structure for table `download_userInfo`
--

CREATE TABLE IF NOT EXISTS `download_userInfo` (
  `email` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `organization` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download_userInfo`
--

INSERT INTO `download_userInfo` (`email`, `fname`, `lname`, `title`, `organization`, `phone`) VALUES
('mtotho@gmail.com', 'michael', 'toth', 'web designer', 'none', '609-468-2946'),
('blah@gmail.com', 'george', 'clooney', 'actor', 'hollywood', '555-555-555'),
('jfk@whitehouse.gov', 'John', 'Kennedy', 'President', 'U.S. Government', '999-999-9999'),
('mmangino@copperasmt.com', 'Matthew', 'Mangino', '', '', ''),
('psherwood@sherwoodlearning.com', 'Peter', 'Sherwood', 'partner', 'sherwood learning', '9738081166'),
('ollie.scheyer@tiscali.co.uk', 'OLLIE', 'SCHEYER', 'MANAGER', 'SISSON ASSOC', ''),
('steve@geipartners.com', 'Steven', 'Wolff', '', '', ''),
('mattmangino@comcast.net', 'Matthew', 'Mangino', '', '', '973-432-2766'),
('susan.currie@symphonyhousing.org.uk', 'susan', 'currie', 'L&D Manager', 'Symphony', '01517082436'),
('cmsarraf@teleco-plus.com', 'Charles', 'Sarraf', 'A. Prof', 'University of Kaslik', '9613399929'),
('nicolesadler3@gmail.com', 'Nicole', 'Sadler', '', '', '7342057918'),
('alhasahm@equate.com', 'hadeel', '', 'HR', 'EQUATE', ''),
('eileen@eileenflynnconsulting.com', 'Eileen ', 'Flynn', '', 'Eileen Flynn Consulting', '2676143612'),
('mmangino@copperamt.com', 'Matthew', 'Mangino', '', 'COPPERAS MOUNTAIN Consulting', '973-432-2766'),
('apelts@its.jnj.com', 'Alex', 'Pelts', 'IT Lead', 'Johnson & Johnson', '(908) 874-1407'),
('tom.mattus@ssi-learn.com', 'mattus', 'tom', 'President', 'SSI', ''),
('dshaul@my.wgu.edu', 'David', 'Shaul', 'Grad STudent', 'WGU', '800-895-8660'),
('budianto.paini@gmail.com', 'Budi ', 'Wijaja', 'Mr', 'Budi', ''),
('rthurmon@its.jnj.com', '', '', '', '', ''),
('testtest@gg', 'Michael', 'Toth', 'Testing', 'Something', 'blah'),
('testtetst', 'test', 'test', 'test', 'test', 'test'),
('asdasda', 'asd', 'asd', 'sda', 'dsd', 'dasd'),
('gmannaer@its.jnj.com', 'Guy', 'Mannaerts', 'sr manager', 'j&J', ''),
('jdenton@tsh.to', 'Jane', 'Denton', 'OD Specialist', 'TSH', ''),
('anegu@dongenergy.dk', 'Anette', 'Gudum', 'Economist', 'DONG Energy', '+45 99555979'),
('davidjardin@mac.com', 'David', 'Jardin', '', 'Leadership Research Institute', '6108505074'),
('julia@zestfor.com', 'julia', 'carter', 'director', 'zestfor', '0044163544124'),
('HNeedlem@its.jnj.com', 'Heidi', 'Needleman', 'CDTL', 'Janssen R&D', '267-614-4005'),
('mino_akhtar@eisai.com', 'Mino', 'Akhtar', 'Assoc Director, ORg Dev', 'Eisai Inc', '201-746-2014'),
('aysha.alsherawi@bac.bh', 'Aysha', 'A', 'Sr. Officer', 'BAC', '39944559'),
('csmith@nd.edu', 'Cheri', 'Smith', 'Program Director, Hesburgh Lib', 'University of Notre Dame', '(574) 631-4271'),
('stephanie_pinter@oxfordcorp.com', 'Stephanie', 'Pinter', 'HR Associate', 'Oxford', '978.538.1898'),
('moetivator@xtra.co.nz', 'Lynda', 'Moe', 'Managing Director', 'Lynda Moe Transformations Limi', '+649-818-9696'),
('rafiuddinrafiq@yahoo.com', 'Rafi', 'Rafiuddin Rafi', 'MD ', 'Rayguide', '036+20613126+'),
('ithemba@iburst.co.za', 'Hennie', 'Swanepoel', 'Psychologist', 'Private', ''),
('gladymir72@yahoo.com', 'Luisa', 'Garcia', 'Owner', 'Soleil Salon and Spa LLC', '6034348233'),
('harvey@halengroup.com', 'harvey', 'goldstein', 'President', 'The Halen Group', '301 8738738'),
('edwina.natalia@dalecarnegie. co.id', 'edwina', 'natalia', 'DCT Sby', 'Dale Carnegie Training', '081803222929'),
('cwahler@cindywahler.com', 'Cindy', 'Wahler', 'Dr.', 'Leadership Excellence', '416-961-0899'),
('s@yahoo.com', 'asda', 'sda', 'researcher', 'sdsa', '0788566596'),
('chongko_k@hotmail.co.th', 'chongko', 'kewaporn', '-', '-', '-'),
('drzinasuissa@yahoo.com', 'Zina', 'Suissa', 'Ph.D.', 'self employed Coach/Psychologi', '514-421-5485'),
('Barbara@maxproductivity.com', 'Barbara', 'Metzger', 'President', 'MaxImize', '512.278.1200'),
('archana.rana@wrigley.com', 'Archana', 'Rana', 'Dir, P&O', 'Mars Inc', '312 205 2790'),
('jeff.w.dunaway@kp.org', 'Jeff', 'Dunaway', 'PI Facilitator', 'Kaiser Permanente', '408-840-9678'),
('dumvalue@example.com', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../../../../../../WEB-INF/web.xml.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../../../../../../WEB-INF/web.xml', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../../../../../WEB-INF/web.xml.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../../../../../WEB-INF/web.xml', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../../../../WEB-INF/web.xml.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../../../../WEB-INF/web.xml', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../../../WEB-INF/web.xml.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../../../WEB-INF/web.xml', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../../WEB-INF/web.xml.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../../WEB-INF/web.xml', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../WEB-INF/web.xml.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../../WEB-INF/web.xml', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../WEB-INF/web.xml.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../../WEB-INF/web.xml', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../WEB-INF/web.xml.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('/../WEB-INF/web.xml', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('file:///boot.ini.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('1', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('dumvalue@example.com''''""""', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('9 1 -', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('9 - 1', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('dumvalue@example.com''"', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('9-1', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('8-7', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('9-8', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('acavusoglu@ripplesgroup.com', 'Asli', 'Cavusoglu', '', '', ''),
('jsa1@stir.ac.uk', 'Julie', 'Allan', 'PhD student', 'Universoty of Stirling', ''),
('file:%2F%2F%2Fboot.ini', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('file:///boot.ini', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('drbarbs2016@gmail.com', 'Barbara', 'Ambrister', 'Student', 'University of Liverpool', '649-2431976'),
('ejevans@unh.edu', 'beth', 'evans', 'clinical professor', 'UNH', '603-862-0879'),
('................oot.ini.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('zsuzsanna.toldi@aquilone.hu', 'Zsuzsanna', 'Toldi', 'consultant', 'Aquilone Training', '20 2223110'),
('erinmmccarthy@comcast.net', 'Erin', 'McCarthy', 'APRN', 'NHVH', '603-856-7046'),
('fer.amkreutz@apg-am.com', 'Ferdinand', 'Amkreutz', 'cfro', 'APG US Inc', '+16466700935'),
('floka@hotmail.com', 'zizo', 'zien', 'akon', 'sos', '266512345'),
('laston.charriez@westernunion.com', 'laston', 'charriez', 'SVP ', 'Western Union', '720-332-5388'),
('cvelas4@wgu.edu', 'Christine', 'Velasquez', 'Student', 'WGU', '2403771612'),
('claire.semple@telefonica.com', 'Claire', 'Semple', 'Head of Talent & Executive Dev', 'Telefonica Digital', '07850664679'),
('larry@shulman-consulting.com', 'Larry', 'Shulman', 'Director', 'Shulman Consulting', '07811138183'),
('byoungseo.moon@gm.com', 'Byoungseo', 'Moon', 'S.Manager', 'Validation Division', '+82-32-520-2566'),
('orbisonp@bellsouth.net', 'pam', 'orbison', 'student', 'WGU', ''),
('carfara@ekdd.gr', 'christine', 'arfara', 'mrs', 'National  Centre of Public Adm', '0030-2131306321'),
('kknee@nexiom.net', 'Kare', 'Knee', 'Team Leader ', 'Sobey', '705-875-1122'),
('info@margaretedwards.co.uk', 'Margaret', 'Edwards', 'Director', 'Providing thinking Space Ltd', '07949740343'),
('bh@barbarahealyassociates.com', 'Barbara', 'Healy', 'Principal', 'BHA', '2033140950'),
('................oot.ini', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100'),
('rbkbateman@msn.com', 'Robert', 'Bateman', 'Sr Partner', 'STS', '9703728996'),
('Fj', 'F', 'J', 'Mgr', 'C', '234'),
('hg', 'h', 'g', 'c', 'n', ''),
('robercanas@gmail.com', 'Roberto', 'Lopez', 'Psichologist', 'Mas', ''),
('wuest@cwuest.com', 'Cornelia', 'Wuest', 'MD', 'C.Wuest & Partner', '+491724440548'),
('george@gdi-assoc.com', 'George', 'Chewning', 'Managing Principal', 'GDI Associates, LLC', '6028821980'),
('file:///etc/passwd.js', '', '', 'See goo.gl/DJqlP for info', 'See goo.gl/DJqlP for info', '6505550100');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_news`
--

CREATE TABLE IF NOT EXISTS `homepage_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description_line` varchar(300) NOT NULL,
  `event_location` varchar(50) NOT NULL,
  `event_date` varchar(40) NOT NULL,
  `event_location2` varchar(100) NOT NULL,
  `event_date2` varchar(100) NOT NULL,
  `event_location3` varchar(100) NOT NULL,
  `event_date3` varchar(100) NOT NULL,
  `details_text` varchar(60) NOT NULL,
  `details_url` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `homepage_news`
--

INSERT INTO `homepage_news` (`id`, `title`, `description_line`, `event_location`, `event_date`, `event_location2`, `event_date2`, `event_location3`, `event_date3`, `details_text`, `details_url`) VALUES
(15, 'TEI Accreditations now elegible for 16.75 CCEUs', 'You can now get Continuing Education Credits when you attend a TEI Accreditation', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `resource_ArticleTypes`
--

CREATE TABLE IF NOT EXISTS `resource_ArticleTypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_type` varchar(40) NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `order` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `resource_ArticleTypes`
--

INSERT INTO `resource_ArticleTypes` (`id`, `article_type`, `user`, `date`, `order`) VALUES
(1, 'Team Articles', 'mtotho@gmail.com', '9/23/2012', 1),
(2, 'Other Articles', 'mtotho@gmail.com', '9/23/2012', 2),
(3, 'Group Emotional Intelligence Articles', 'mtotho@gmail.com', 'September 29, 2012, 2:15 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resource_ArticleTypesPosition`
--

CREATE TABLE IF NOT EXISTS `resource_ArticleTypesPosition` (
  `position` int(11) NOT NULL AUTO_INCREMENT,
  `article_type` varchar(100) NOT NULL,
  PRIMARY KEY (`position`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resource_journalArticles`
--

CREATE TABLE IF NOT EXISTS `resource_journalArticles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_type` varchar(50) NOT NULL,
  `citation_definition` varchar(20) NOT NULL,
  `author_string` varchar(400) NOT NULL,
  `year` varchar(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `generic_SecondaryAuthor` varchar(1500) NOT NULL,
  `generic_SecondaryTitle` varchar(1500) NOT NULL,
  `generic_Edition` varchar(30) NOT NULL,
  `generic_Volume` varchar(20) NOT NULL,
  `generic_Pages` varchar(11) NOT NULL,
  `generic_PublishLocation` varchar(30) NOT NULL,
  `generic_Publisher` varchar(40) NOT NULL,
  `journal_title` varchar(80) NOT NULL,
  `journal_volume` varchar(10) NOT NULL,
  `journal_issue` varchar(10) NOT NULL,
  `journal_pages` varchar(10) NOT NULL,
  `download_file` varchar(90) NOT NULL,
  `user` varchar(60) NOT NULL,
  `date` varchar(80) NOT NULL,
  `fileURL` varchar(150) NOT NULL,
  `description` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `resource_journalArticles`
--

INSERT INTO `resource_journalArticles` (`id`, `article_type`, `citation_definition`, `author_string`, `year`, `title`, `generic_SecondaryAuthor`, `generic_SecondaryTitle`, `generic_Edition`, `generic_Volume`, `generic_Pages`, `generic_PublishLocation`, `generic_Publisher`, `journal_title`, `journal_volume`, `journal_issue`, `journal_pages`, `download_file`, `user`, `date`, `fileURL`, `description`) VALUES
(1, 'Group Emotional Intelligence Articles', 'generic', 'Druskat, V.U., & Wolff, S. B.', '2008', 'Group-level emotional intelligence', 'In N.M. Ashkanasy & C.L. Cooper', 'Research companion to emotion in organizations', '', '', '441-454', 'London', 'Edward Elgar', '', '', '', '', 'Druskat.Wolff_.Group-levelEIChapter_.doc', '', '', '', ''),
(2, 'Group Emotional Intelligence Articles', 'generic', 'Wolff, S. B., Druskat, V.U., Koman, E.S. & Messer, T.E.', '2006', 'The link between group emotional competence and group effectiveness', 'In V.U. Druskat, F. Sala, and G. Mount', 'Linking emotional intelligence and performance at work: Current research evidence with individuals and groups', '', '', '223-242', 'Mahway, NJ', 'LEA', '', '', '', '', 'chapter_10_Wolff,_Druskat,_Stubbs,_Messer.formatted2_1.pdf', '', '', '', ''),
(4, 'Group Emotional Intelligence Articles', 'generic', 'Koman, Elizabeth, Wolff, Steven B., & Howard, Anita', '2007', 'The Cascading Impact of Culture: Group Emotional Competence (GEC) as a Cultural Resource', 'In Robert Emmerling, Vinod Shanwal, and Manas Mandal', 'Emotional Intelligence: Theoretical and Cultural Perspectives', '', '', '39-53', 'San Francisco', 'Nova Science Publishers', '', '', '', '', 'Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_06.pdf', 'mtotho@gmail.com', 'September 23, 2012, 11:30 pm', '', ''),
(9, 'Group Emotional Intelligence Articles', 'journal', 'Druskat, V.U. & Wolff, S. B.', '2001', 'Building the emotional intelligence of groups', '', '', '', '', '', '', '', 'Harvard Business Review', '79', '3', '81-90', '', 'mtotho@gmail.com', 'October 1, 2012, 1:27 pm', 'http://hbr.org/product/building-the-emotional-intelligence-of-groups/an/R0103E-PDF-ENG', ''),
(10, 'Group Emotional Intelligence Articles', 'generic', 'Druskat, V.U., & Wolff, S. B.', '2001', 'Group emotional competence and its influence on group effectiveness', 'In Cary Cherniss and Daniel Goleman', 'The emotionally intelligence workplace', '', '', '132-155', 'San Francisco', 'Jossey-Bass', '', '', '', '', 'EIChapter.pdf', 'mtotho@gmail.com', 'October 1, 2012, 4:24 pm', '', ''),
(15, 'Team Articles', 'generic', 'Druskat, V.U., and Pescosolido, A.T.', '2006', 'The impact of emergent leader emotionally competent behavior on team trust, communication, engagement, and effectiveness', 'In. Zerbe, W.J., Ashkanasy, N., and Hartel, C.', 'Research on Emotions in Organizations, Volume 2: Individual and organizational persepectives on emotion management and display', '', '', '', 'Oxford, UK', 'Elsevier JAI', '', '', '', '', 'Druskat.Wolff_.Group-level_EI_Chapter_.doc', 'mtotho@gmail.com', 'October 21, 2012, 1:55 pm', '', ''),
(16, 'Team Articles', 'journal', 'Druskat, V.U. & Wheeler, J.V. ', '2004', 'How to Lead a Self-Managing Team', '', '', '', '', '', '', '', 'Sloan Management Review', '45', '4', '65-71', '', 'mtotho@gmail.com', 'October 21, 2012, 1:57 pm', 'http://sloanreview.mit.edu/the-magazine/1980-summer/', ''),
(17, 'Team Articles', 'journal', 'Druskat, V.U. & Wheeler, J.V.', '2003', 'Managing from the boundary: The effetive leadership of self-managing work teams', '', '', '', '', '', '', '', 'Academy of Management Journal', '46', '4', '', 'Koman_Wolff_Howard_EI_Culture_Chapter_Sep_9_061.pdf', 'mtotho@gmail.com', 'October 21, 2012, 2:09 pm', '', ''),
(18, 'Team Articles', 'generic', 'Druskat, V.U., and Wolff, S.B.', '2005', 'Effective Boundary Management Activities in Cross-Functional Decision-Making Teams', '', 'Paper presented at the Annual Academy of Management Converence', '', '', '', 'Honlulu, August 2005', '', '', '', '', '', 'AOM_Symposium_2._2005_._.pdf', 'mtotho@gmail.com', 'October 21, 2012, 2:11 pm', '', ''),
(19, 'Team Articles', 'journal', 'Druskat, V.U., & Wolff, S. B.', '1999', 'Developmental peer appraisals in self-managing work groups', '', '', '', '', '', '', '', 'The Journal of Applied Psychology', '84', '1', '58-74', 'JAP_article.pdf', 'mtotho@gmail.com', 'October 21, 2012, 2:15 pm', '', ''),
(21, 'Team Articles', 'journal', 'Gratton, L., & Erickson, T.J.', '2007', '8 Ways to Build Collaborative Teams', '', '', '', '', '', '', '', 'Harvard Business Review', '85', '11', '100-109', '', 'mtotho@gmail.com', 'October 21, 2012, 2:19 pm', '', 'Examining the team dynamics and environment at various firms, the authors isolated eight success factors: (1) "Signature" relationship practices that build bonds among the staff, in memorable ways that are particularly suited to a company''s business. (2) Role of the staff. (3) The establishment of a "gift culture," in which managers support employees by mentoring them daily, instead of a transactional "tit-for-tat culture." (4) Training in relationship skills, such as communication and conflict resolution. (5) A sense of community, which corporate HR can foster by sponsoring group activities. (6) Ambidextrous leadership, or leaders who are both task-oriented and relationship-oriented. (7) Good use of heritage relationships, by populating teams with members who know and trust one another. (8) Role clarity and task ambiguity, achieved by defining individual roles sharply but giving teams latitude on approach. As teams have grown from a standard of 20 members to comprise 100 or more, team practices that once worked well no longer apply. The new complexity of teams requires companies to increase their capacity for collaboration, by making long-term investments that build relationships and trust, and smart near-term decisions about how teams are formed and run.'),
(20, 'Team Articles', 'journal', 'Dugan, Mike', '2008', 'Hanging Together, or Hanging Separately', '', '', '', '', '', '', '', 'Physician Executive', '34', '2', '12-17', '', 'mtotho@gmail.com', 'October 21, 2012, 2:17 pm', '', ''),
(14, 'Team Articles', 'journal', 'Brett, J., Behfar, K., & Kern, M. C.', '2006', ' Managing Multicultural Teams', '', '', '', '', '', '', '', 'Harvard Business Review', '84', '11', '84-91', '', 'mtotho@gmail.com', 'October 21, 2012, 1:47 pm', '', 'Multicultural teams offer a number of advantages to international firms, including deep knowledge of different product markets, culturally sensitive customer service, and 24-hour work rotations. But those advantages may be outweighed by problems stemming from cultural differences, which can seriously impair the effectiveness of a team or even bring it to a stalemate. How can managers best cope with culture-based challenges? The authors conducted in-depth interviews with managers and members of multicultural teams from all over the world. Drawing on their extensive research on dispute resolution and teamwork and those interviews, they identify four problem categories that can create barriers to a team''s success: direct versus indirect communication, trouble with accents and fluency, differing attitudes toward hierarchy and authority, and conflicting norms for decision making. If a manager--or a team member--can pinpoint the root cause of the problem, he or she is likelier to select an appropriate strategy for solving it. The most successful teams and managers, the authors found, dealt with multicultural challenges in one of four ways: adaptation (acknowledging cultural gaps openly and working around them), structural intervention (changing the shape or makeup of the team), managerial intervention (setting norms early or bringing in a higher-level manager), and exit (removing a team member when other options have failed). Which strategy is best depends on the particular circumstances--and each has potential complications. In general, though, managers who intervene early and set norms; teams and managers who try to engage everyone on the team; and teams that can see challenges as stemming from culture, not personality, succeed in solving culture-based problems with good humor and creativity. They are the likeliest to harvest the benefits inherent in multicultural teams.'),
(22, 'Team Articles', 'journal', 'Hackman, J. Richard', '2009', 'Why Teams Don''t Work An Interview with J. Richard Hackman by Diane Coutu', '', '', '', '', '', '', '', 'HBR Articles', '', '', '', '', 'mtotho@gmail.com', 'October 21, 2012, 2:42 pm', '', 'Over the past couple of decades, a cult has grown up around teams. Even in a society as fiercely independent as America, teams are considered almost sacrosanct. The belief that working in teams makes us more creative and productive is so widespread that when faced with a challenging new task, leaders are quick to assume that teams are the best way to get the job done.<br /><br />Not so fast, says J. Richard Hackman, the Edgar Pierce Professor of Social and Organizational Psychology at Harvard University and a leading expert on teams. Hackman has spent a career exploring-and questioning-the wisdom of teams. To learn from his insights, HBR senior editor Diane Coutu interviewed Hackman in his Harvard office. In the course of their discussion, he revealed just how bad people often are at teamwork. Most of the time, his research shows, team members don''t even agree on what the team is supposed to be doing. Getting agreement is the leader''s job, and she must be willing to take great personal and professional risks to set the team''s direction. And if the leader isn''t disciplined about managing who is on the team and how it is set up, the odds are slim that a team will do a good job'),
(23, 'Team Articles', 'journal', 'Katzenbach, R., & Smith, D.K.', '2005', 'The Discipline of Teams', '', '', '', '', '', '', '', 'Harvard Business Review', '83', '7/8', '162-171', '', 'mtotho@gmail.com', 'October 21, 2012, 2:53 pm', '', 'Groups don''t become teams just because that is what someone calls them. Nor do teamwork values alone ensure team performance. So what is a team? How can managers know when the team option makes sense, and what can they do to ensure team success? In this groundbreaking 1993 article, authors answer these questions and outline the discipline that defines a real team. The essence of a team is shared commitment. Without it, groups perform as individuals; with it, they become a powerful unit of collective performance. The best teams invest a tremendous amount of time shaping a purpose that they can own. They also translate their purpose into specific performance goals. And members of successful teams pitch in and become accountable with and to their teammates. The fundamental distinction between teams and other forms of working groups turns on performance. A working group relies on the individual contributions of its members for collective performance. But a team strives for something greater than its members could achieve individually: An effective team is always worth more than the sum of its parts. The authors identify three kinds of teams: those that recommend things--task forces or project groups; those that make or do things--manufacturing, operations, or marketing groups; and those that run things--groups that oversee some significant functional activity. For managers, the key is knowing where in the organization these teams should be encouraged. Managers who can foster team development in the right place at the right time prime their organizations for top performance.'),
(24, 'Team Articles', 'journal', 'Sangvai, D., Lyn, M., & Michener, L', '2008', 'Defining High-Performance Teams and Physician Leadership', '', '', '', '', '', '', '', 'Physician Executive', '34', '2', '44-51', '', 'mtotho@gmail.com', 'October 21, 2012, 2:53 pm', '', 'The article discusses essential hallmarks of high-performance teams and physician leadership. It provides five key elements of high-performance team in primary care such as defined goals, defined clinical and administrative systems, training and cross-training, division of labor and communication structures and processes. The physicians has the unique position of coordinating the work of its interdisciplinary colleagues due to its training and status. True teamwork is self-managed when team members have clear role delineation and common procedures and language. Teaching and encouraging teamwork as well as leadership needs to be incorporated into every level of medical education.'),
(25, 'Team Articles', 'generic', 'Wolff, S. B.', '1999', 'The Life-Giving Team: How Caring Behavior Leads to Engaged Team Members and Team Effectiveness', '', 'Paper presented at the Eastern Academy of Management Conference', '', '', '', 'Philadelphia, 1999', '', '', '', '', '', 'The_Life-Giving_Team.GOM3_.pdf', 'mtotho@gmail.com', 'October 21, 2012, 2:57 pm', '', ''),
(26, 'Team Articles', 'journal', 'Wolff, S. B., Pescosolido, A. T., & Druskat, V. U. ', '2002', 'Emotional Intelligence as the basis of leadership emergence in self-managing teams', '', '', '', '', '', '', '', 'Leadership Quarterly', '13', '', '505-522', 'TuckPaper.final_.pdf', 'mtotho@gmail.com', 'October 21, 2012, 3:01 pm', '', ''),
(27, 'Team Articles', 'journal', 'Managing Teams for High Performance (Sept 07, 2007) Harvard Business Publishing Newsletters', '', '54 pages', '', '', '', '', '', '', '', '', '', '', '', '', 'mtotho@gmail.com', 'October 21, 2012, 3:04 pm', '', 'How do you build teams? What''s the best way to manage global teams and diverse teams? How can you take your team to the next level--in terms of creativity and effectiveness? The 13 articles in this Harvard Management Update collection, Managing Teams for High Performance, provide readers with a comprehensive yet concise resource for developing, managing, and enhancing all types of team endeavors. The five articles in the first section, "Building Team Trust and Cohesiveness," range from increasing your team''s emotional intelligence to the pitfalls of too much team camaraderie. The four articles in "Managing Dispersed and Cross-Functional Teams" offer critical insights and practices for taking your team to a global--and even virtual--arena. The authors of the four articles in the final section, "Powering Up Team Creativity and Effectiveness," share best practices gleaned from their research in leadership, psychology, and creativity. Whether you''ve been a team leader for years or are about to embark on your first team project, you''ll find new approaches and practical tips for team success in Managing Teams for High Performance.'),
(28, 'Other Articles', 'generic', 'Wolff, Steven B., Zhu, Guorong, Hall, D. T., Las Heras, Mireia, Gutierrez, Betzaluz', '2009', 'Impact of Career Complexity on Adaptability: A Longitudinal Study of Senior Executives', '', 'Paper to be presented at the Annual Academy of Management Conference', '', '', '', 'Chicago, August, 2009', '', '', '', '', '', 'Adaptability.pdf', 'mtotho@gmail.com', 'October 21, 2012, 3:13 pm', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `toolkit_fundamental`
--

CREATE TABLE IF NOT EXISTS `toolkit_fundamental` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(160) NOT NULL,
  `short_description` varchar(40) NOT NULL,
  `fk_category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `toolkit_fundamental`
--

INSERT INTO `toolkit_fundamental` (`id`, `name`, `description`, `short_description`, `fk_category_id`) VALUES
(1, 'GOALS &amp; OBJECTIVES', 'Are understood, embraced, aligned and updated regularly ', 'what we do', 2),
(2, 'ROLES &amp; RESPONSIBILITIES', 'Are explicit for all team members and key stakeholders, and interdependencies are clear', 'who does what', 2),
(3, 'PROCESSES &amp; PROCEDURES', 'Project planning, operational methods, and communication pathways are clear', 'how we execute', 2),
(4, 'RELATIONSHIPS', 'Are grounded in a genuine desire to understand and trust each other to enhance performance', 'how we work together', 2),
(5, 'LEADERSHIP', 'Leader provides clear direction, solves problems proactively, manages stakeholders, coaches and builds the team.', 'how our leader leads the team', 2),
(6, 'EXTERNAL ENVIRONMENT', 'Team proactively aligns with stakeholders. Stakeholders provide direction, information and support.', 'how we impact, or are effected by others', 2);

-- --------------------------------------------------------

--
-- Table structure for table `toolkit_tool`
--

CREATE TABLE IF NOT EXISTS `toolkit_tool` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `description` varchar(150) NOT NULL,
  `file` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `toolkit_tool`
--

INSERT INTO `toolkit_tool` (`id`, `name`, `description`, `file`) VALUES
(1, 'Team Charter', 'To create agreement on how the team will work together to make binding decisions and share accountability for meeting project goals and objectives.', ''),
(4, 'sample tool', 'sample descriptionsasdasdas', ''),
(5, 'Tool Name', 'Tool Description', '');

-- --------------------------------------------------------

--
-- Table structure for table `toolkit_tool2fundamental`
--

CREATE TABLE IF NOT EXISTS `toolkit_tool2fundamental` (
  `fk_fundamental_id` int(11) NOT NULL,
  `fk_tool_id` int(11) NOT NULL,
  PRIMARY KEY (`fk_fundamental_id`,`fk_tool_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toolkit_tool2fundamental`
--

INSERT INTO `toolkit_tool2fundamental` (`fk_fundamental_id`, `fk_tool_id`) VALUES
(1, 1),
(1, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `toolkit_user`
--

CREATE TABLE IF NOT EXISTS `toolkit_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `hash_pass` varchar(256) NOT NULL,
  `salt` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `toolkit_user`
--

INSERT INTO `toolkit_user` (`id`, `email`, `hash_pass`, `salt`) VALUES
(2, 'admin@teamperformancesolutions.com', '6c021f715919641565cde051bcc9b986ebbc58b1a1140da6d6718413e9f1aa05', 'fcbf17a8ad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(35) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(3) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `salt`) VALUES
('mtotho@gmail.com', 'e15bb8332948e756957378a11adf7a2857382496758d1706ad725bfa751d7424', 'de3'),
('test@gmail.com', '5ead98f63262d3e15b155fdffa3d94a180bb7fb6bc2542d0e9fad30e47746819', '8bf'),
('test@gg.com', 'fd8afb2d9530282ad408e8520e781ae325f0087d8bc2385475f49a54c001f601', 'e3f'),
('mtotho@aol.com', 'cd7a68d8408fb3b0ab6a7792d68b35b8b28d5f845b48741279e37adae31e1701', '6c5'),
('steve@geipartners.com', '86c5c855af94fe388e5a10161834b6a7530cb44540eb7a095f9dfa4584999b64', 'a06'),
('', '9ab67a4837a6242414c7ec01fcf8fcc73e4179553526066eaa559a4ef4332e14', '58b'),
('Mmangino@comcast.net', '0a0dca9b6511fc08e6bd5cb3d0d73d1aa4bedd5860c2d9ce5bcb416366287608', '799'),
('admin', '9c1793d7842bd1796c7cb23b9e3e4bd5b250ded0fc2951c49f37e7dc53052705', '98c'),
('eileen@eileenflynnconsulting.com', 'ea305b2e46a189e60f88270816d2528e14070ebb0f7a5a5651c7452e18199110', 'f50'),
('mmangino@copperasmt.com', '36608fa0528cafd792f55b7754ed8b11c6671de532a7682526d592ba349097b7', 'dfe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
