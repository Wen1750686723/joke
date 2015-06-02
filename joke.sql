-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 02 日 03:25
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `joke`
--

-- --------------------------------------------------------

--
-- 表的结构 `joke_joke`
--

CREATE TABLE IF NOT EXISTS `joke_joke` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '笑话表',
  `title` varchar(64) CHARACTER SET utf8 NOT NULL,
  `img` varchar(128) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `content1` text CHARACTER SET utf8 NOT NULL,
  `content2` text CHARACTER SET utf8 NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '笑话类别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `joke_joke`
--

INSERT INTO `joke_joke` (`id`, `title`, `img`, `content`, `content1`, `content2`, `type`) VALUES
(1, '1', '1', '1', '1', '1', 0),
(2, '2', '2', '2', '2', '2', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
