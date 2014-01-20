-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 01 月 20 日 11:57
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `thanks`
--

-- --------------------------------------------------------

--
-- 表的结构 `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `topic` varchar(50) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `dateline` int(11) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `about`
--

INSERT INTO `about` (`id`, `topic`, `content`, `dateline`) VALUES
(2, '隐隐约约隐隐约约 ', '<p>吞吞吐吐吞吞吐吐吞吞吐吐吞吞吐吐 </p>', 1390043558),
(3, '营养素营养元素一搜', '<p>营养素营养元素一搜营养素营养元素一搜营养素营养元素一搜营养素营养元素一搜营养素营养元素一搜营养素营养元素一搜营养素营养元素一搜营养素营养元素一搜营养素营养元素一搜营养素营养元素一搜营养素营养元素一搜营养素营养元素一搜</p>', 1390043682);

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `pwd` varchar(50) NOT NULL COMMENT '密码',
  `regdate` int(11) DEFAULT NULL COMMENT '创建日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`, `regdate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `addtime`) VALUES
(1, '中国是超级大国中国是超级大国', '<p>中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国<strong>是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国中国是超级大国</strong></p>', 1390029171);

-- --------------------------------------------------------

--
-- 表的结构 `server`
--

CREATE TABLE IF NOT EXISTS `server` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sName` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `addtime` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `server`
--

INSERT INTO `server` (`id`, `sName`, `content`, `addtime`, `type`) VALUES
(1, '地弹道导弹', '<p>得到地地道道的</p>', 1390044148, 2),
(2, '吞吞吐', '<p>吐吞吐吐吞吐吐吞吐吐吞吐吐吞吐</p>', 1390046635, 1);

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `typeid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(25) NOT NULL,
  `father` int(11) NOT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `type`
--

INSERT INTO `type` (`typeid`, `typename`, `father`) VALUES
(1, '色素', 0),
(2, '纷纷发', 0);
