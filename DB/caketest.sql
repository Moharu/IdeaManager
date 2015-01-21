-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2015 at 05:46 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `caketest`
--

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE IF NOT EXISTS `ideas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `img` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `title`, `body`, `created`, `modified`, `user_id`, `img`) VALUES
(7, 'Pikachu', 'Pika, pika...\r\n\r\nPikachu, use Thundershock!', '2015-01-21 16:27:25', '2015-01-21 16:27:25', 14, 'http://img3.wikia.nocookie.net/__cb20140410201208/pokemon/images/e/ef/025Pikachu_SSB4.png'),
(8, 'Exodia', 'Exodia, The Forbidden One! Obliterate!!!', '2015-01-21 16:11:43', '2015-01-21 16:11:43', 13, 'http://img1.wikia.nocookie.net/__cb20120202054331/yugiohenespanol/es/images/4/44/Foto_exodia,_el_prohibido.jpg'),
(10, 'Garurumon', 'Garurumon digivolves to...\r\nWereGarurumon!', '2015-01-21 16:17:47', '2015-01-21 16:17:47', 15, 'https://pbs.twimg.com/profile_images/121057962/Garurumon-1.gif'),
(11, 'Daffy Duck', '...because I''m a SPLIT PERSONALITY, see! A schit - a schit - a SCHITZOPHRENIAC!!', '2015-01-21 16:23:03', '2015-01-21 16:23:03', 16, 'http://2.bp.blogspot.com/_9DbWcozSA54/S9kZOON2FmI/AAAAAAAABFc/yppWZ2Nzp7s/s1600/Daffy%2BDuck.png'),
(12, 'Uryu Ishida', 'I''m the last Quincy...', '2015-01-21 16:25:00', '2015-01-21 16:25:00', 17, 'http://images5.fanpop.com/image/photos/27500000/Uryu-Ishida-3-bleach-anime-27540496-640-480.jpg'),
(13, 'Chico Bioca', 'EU QUERO SABER QUEM É QUE...', '2015-01-21 17:40:28', '2015-01-21 17:40:28', 26, 'http://photo2.ask.fm/385/606/798/910003012-1qfnloa-fqd63a4ha7eonmf/original/hqdefault.jpg'),
(14, 'Dhalsim', 'Yoga Blast!', '2015-01-21 16:30:47', '2015-01-21 16:35:11', 18, 'http://img1.wikia.nocookie.net/__cb20091113115458/streetfighter/images/9/90/Character_Select_Dhalsim_by_UdonCrew.jpg'),
(15, 'Kung Lao', 'Hat Throw!', '2015-01-21 16:34:57', '2015-01-21 16:34:57', 19, 'http://vignette2.wikia.nocookie.net/mortalkombat/images/e/e7/Versus_Kung_Lao_%28MK9%29.png/revision/latest?cb=20110720211203&path-prefix=es'),
(16, 'Pegasus Seiya', 'Pegasus... Ryu Sei Ken!!!', '2015-01-21 17:21:06', '2015-01-21 17:21:28', 20, 'https://macacaosapao.files.wordpress.com/2009/12/seiya.jpg'),
(17, 'Jailson', 'AHH QUE DELÍCIA!', '2015-01-21 17:36:11', '2015-01-21 17:36:11', 25, 'https://lh6.googleusercontent.com/-t8NfQJ_sb6E/AAAAAAAAAAI/AAAAAAAAAFI/gZexEEnCmOI/photo.jpg'),
(18, 'Jiraiya', 'Kuchiyose no Jutsu!\r\nGamabunta!', '2015-01-21 17:24:26', '2015-01-21 17:24:26', 21, 'http://img1.wikia.nocookie.net/__cb20120925123905/naruto/images/2/21/Profile_Jiraiya.PNG'),
(19, 'Zordon', 'Rangers, the planet needs your help!', '2015-01-21 17:25:58', '2015-01-21 17:25:58', 22, 'http://loyalkng.com/wp-content/uploads/2010/01/zordon.jpg'),
(20, 'Saiyan Prince', 'DIE!! KAKAROTTO!!!', '2015-01-21 17:32:15', '2015-01-21 17:32:15', 23, 'http://static.comicvine.com/uploads/original/14/149746/3122976-vegeta_by_anjoicaros-d5ehi0o.png'),
(21, 'Thomas', '...', '2015-01-21 17:34:10', '2015-01-21 17:34:10', 24, 'http://www.families.com/wp-content/uploads/media/21_Tom%20The%20Cat.jpg'),
(24, 'Popeye', 'Spinach!', '2015-01-21 17:44:34', '2015-01-21 17:44:34', 27, 'http://www.animationmagazine.net/wordpress/wp-content/uploads/Popeye-post-new1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'The title', 'This is the post body.', '2015-01-19 13:42:51', '2015-01-19 15:08:20'),
(2, 'A title once again', 'And the post body follows.', '2015-01-19 13:43:26', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2015-01-19 13:43:26', NULL),
(5, 'Testando', 'batata', '2015-01-19 15:14:38', '2015-01-19 15:17:13'),
(6, '123', '321321', '2015-01-19 15:44:23', '2015-01-19 15:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(400) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `img` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`, `role`, `img`) VALUES
(1, 'teste', '6fe3acde0831956ec2eb6defd1f781f6ab589819', '2015-01-20 15:02:29', '2015-01-20 15:02:29', 'admin', ''),
(2, 'teste', 'f9dbb5f9b6cc469e676ad73b1d37e2f87fddb5f0', '2015-01-20 15:03:37', '2015-01-20 15:03:37', 'admin', ''),
(4, 'funciona', '$2a$10$BVvGVwck3/Y.uCOpilHwSOeI7JjIO6lUo4f8h9dhc/EGpA22sT/F.', '2015-01-20 15:22:26', '2015-01-20 15:22:26', 'admin', ''),
(5, 'novo', '$2a$10$d7ccyJMjdzoMElw1UXNzW.5oNtEadnsbs3kgTFHLSDuA2pAOQXYjK', '2015-01-20 15:45:41', '2015-01-20 15:45:41', 'author', ''),
(6, 'hawabanga', '$2a$10$5gaTPOyfk4MsvUAbgviWJeyDUjcTpvboiiE.Du4diTdNsNZgN5KvW', '2015-01-20 17:20:22', '2015-01-20 17:20:22', 'author', ''),
(7, 'batatao', '$2a$10$kyijNeS4omoC365dpI2dCO/bNmUuI/sokTHKNL9H3HOvowrF.xYmq', '2015-01-21 13:33:39', '2015-01-21 13:33:39', 'author', 'http://www.carvel.com/public/images/ice-cream-cakes/celebration-cakes/round-cake.jpg'),
(8, 'root', '$2a$10$txAHOvI2C5/fkCgNEQZe3eSAb5M/kkjJi/Kh5bRqijdkGMmNrUmz6', '2015-01-21 14:26:33', '2015-01-21 14:26:33', 'admin', ''),
(9, 'waba', '$2a$10$2MAb0aE1kWhUfqckUdSK8uHgjiJt29eLHcbe6sAxnKn6GA8vk26j.', '2015-01-21 14:40:15', '2015-01-21 14:40:15', 'author', ''),
(10, 'admin', '$2a$10$7Y7jvTozhSIYwbpvU1gyw.3.NSpoXm6UhuW94FgnvVrcq9b6i/x4q', '2015-01-21 15:22:33', '2015-01-21 15:22:33', 'admin', 'http://fc07.deviantart.net/fs26/f/2008/037/2/7/Dark_magician_by_cloud_ff7.jpg'),
(11, 'papaléguas', '$2a$10$dYcoo776nQVYqx1fIb71oeHXPGk8bCwlsV3YLORAGoG/LoBI/wgri', '2015-01-21 15:55:06', '2015-01-21 15:55:06', 'author', 'http://3.bp.blogspot.com/_2eaHkdVDEC0/TTwYOdyfqlI/AAAAAAAAAHw/jmjKTWDc-H0/s160/papaleguas03.gif'),
(12, 'Wellington', '$2a$10$OhOux9K4oPodBOurNsS6/O1ZzaF/7oYOfm3FWVuMknP24FV0oYKtW', '2015-01-21 16:06:51', '2015-01-21 16:06:51', 'author', 'https://scontent-a.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10671497_565653020229593_7014362896835348049_n.jpg?oh=a1f4d336b02f6159cbc9237f9f5ca606&oe=556F1DEF'),
(13, 'Exodia', '$2a$10$YXH8pEHwA4ic.3jRlqX1guH8lG0tzh4dZY4WyRBIrZ.jsRdLde.yy', '2015-01-21 16:11:17', '2015-01-21 16:11:17', 'author', 'http://img1.wikia.nocookie.net/__cb20120202054331/yugiohenespanol/es/images/4/44/Foto_exodia,_el_prohibido.jpg'),
(14, 'Pikachu', '$2a$10$M7FqHYPJ4srLMujee56U9e8t3Zg5b5MUFsHLBHmvk7nk937HmUJ/O', '2015-01-21 16:12:21', '2015-01-21 16:12:21', 'author', 'http://img3.wikia.nocookie.net/__cb20140410201208/pokemon/images/e/ef/025Pikachu_SSB4.png'),
(15, 'Garurumon', '$2a$10$M63xgO/JiQnW7cLm7uDGWu1VOPK/DoYpXn71MrCqGqOKYXtRCm8AO', '2015-01-21 16:16:22', '2015-01-21 16:16:22', 'author', 'https://pbs.twimg.com/profile_images/121057962/Garurumon-1.gif'),
(16, 'Daffy Duck', '$2a$10$P6adMW.lZxp08CO21RLTtupwz/ASEY3GHzk/WVgYlKNaC/dU/10ui', '2015-01-21 16:19:34', '2015-01-21 16:19:34', 'author', 'http://2.bp.blogspot.com/_9DbWcozSA54/S9kZOON2FmI/AAAAAAAABFc/yppWZ2Nzp7s/s1600/Daffy%2BDuck.png'),
(17, 'Uryu Ishida', '$2a$10$nfu.AIriPb74J2aBpHERZuHjFqiuuIFQJLPp7vOlgb2Dj3UVe0szq', '2015-01-21 16:24:38', '2015-01-21 16:24:38', 'author', 'http://images5.fanpop.com/image/photos/27500000/Uryu-Ishida-3-bleach-anime-27540496-640-480.jpg'),
(18, 'Dhalsim', '$2a$10$wclM3JYr8JDb6l/zQkTu4Oyw7jYZcVRG3xUOUVen1kL.rCU2v9qcu', '2015-01-21 16:28:19', '2015-01-21 16:28:19', 'author', 'http://img1.wikia.nocookie.net/__cb20091113115458/streetfighter/images/9/90/Character_Select_Dhalsim_by_UdonCrew.jpg'),
(19, 'Kung Lao', '$2a$10$w/dnm57Wn3kLyuB1VDOGouJFLdsG6VdVh.NaAe7t5UWeYLSrY72f2', '2015-01-21 16:34:04', '2015-01-21 16:34:04', 'author', 'http://vignette2.wikia.nocookie.net/mortalkombat/images/e/e7/Versus_Kung_Lao_%28MK9%29.png/revision/latest?cb=20110720211203&path-prefix=es'),
(20, 'Pegasus Seiya', '$2a$10$vxw65g90Vd.88JJH.HrnzuebKxUY3I7tphYOdU5DpFcKe7ugTb9oW', '2015-01-21 17:20:45', '2015-01-21 17:20:45', 'author', 'https://macacaosapao.files.wordpress.com/2009/12/seiya.jpg'),
(21, 'Jiraiya', '$2a$10$pOqrnvWzmg60YIT4JkibpOb3bn5yk.gTeDE76cWOdgKCGsa/YFl5e', '2015-01-21 17:22:40', '2015-01-21 17:22:40', 'author', 'http://img1.wikia.nocookie.net/__cb20120925123905/naruto/images/2/21/Profile_Jiraiya.PNG'),
(22, 'Zordon', '$2a$10$LnzW2K7AYpt/kc/CMVjI7.CtyEorkuM4SK4fXR0Eduf6MuecaRWxC', '2015-01-21 17:25:16', '2015-01-21 17:25:16', 'author', 'http://loyalkng.com/wp-content/uploads/2010/01/zordon.jpg'),
(23, 'Saiyan Prince', '$2a$10$G7MTkFLEnnVpHWiZ/sMRv.iQnkpWr3r6idY4rOhAeem2wofP1CrbS', '2015-01-21 17:31:42', '2015-01-21 17:31:42', 'author', 'http://static.comicvine.com/uploads/original/14/149746/3122976-vegeta_by_anjoicaros-d5ehi0o.png'),
(24, 'Thomas', '$2a$10$.TVWQZVyCf8deGspz7IR8Oyap2FxaBBjpktqPANjD2ZcnozPU4WaO', '2015-01-21 17:33:05', '2015-01-21 17:33:05', 'author', 'http://www.families.com/wp-content/uploads/media/21_Tom%20The%20Cat.jpg'),
(25, 'Jailson', '$2a$10$bslzHsj23Sb/eC4rEKC4SOXv6iQNremx80i.u3IVneO/X/zDV9qIm', '2015-01-21 17:35:42', '2015-01-21 17:35:42', 'author', 'https://lh6.googleusercontent.com/-t8NfQJ_sb6E/AAAAAAAAAAI/AAAAAAAAAFI/gZexEEnCmOI/photo.jpg'),
(26, 'Chico Bioca', '$2a$10$cuLefv2OsnanycBY7ME10uXsId4bvUL8RxrjhWfp2mMOScn5/XyN2', '2015-01-21 17:40:00', '2015-01-21 17:40:00', 'author', 'http://photo2.ask.fm/385/606/798/910003012-1qfnloa-fqd63a4ha7eonmf/original/hqdefault.jpg'),
(27, 'Popeye', '$2a$10$gjerLwd2sPThZUlm5XGTsu7TX.cgcuqgpY05ouP91GdHXOLIPXr1K', '2015-01-21 17:44:21', '2015-01-21 17:44:21', 'author', 'http://www.animationmagazine.net/wordpress/wp-content/uploads/Popeye-post-new1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
