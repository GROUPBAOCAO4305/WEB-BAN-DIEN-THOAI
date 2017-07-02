-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2014 at 05:45 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bandienthoai`
--
CREATE DATABASE IF NOT EXISTS `bandienthoai` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bandienthoai`;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
  `Mabinhluan` int(11) NOT NULL AUTO_INCREMENT,
  `Mathanhvien` int(11) NOT NULL,
  `Masanpham` int(11) NOT NULL,
  `Noidung` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Mabinhluan`),
  KEY `Mathanhvien` (`Mathanhvien`),
  KEY `Masanpham` (`Masanpham`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`Mabinhluan`, `Mathanhvien`, `Masanpham`, `Noidung`) VALUES
(27, 6, 12, 'Em nÃ³ quÃ¡ tuyá»‡t! :)'),
(28, 6, 11, 'Em nÃ³ ngon quÃ¡ :)'),
(29, 6, 15, 'Em nÃ³ Ä‘áº¹p quÃ¡ :)'),
(30, 6, 11, 'HÃ ng kÃ©m quÃ¡'''),
(31, 6, 11, ':( chÃ¡n quÃ¡ ahhhh');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iddonhang` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT '1',
  `gia` decimal(55,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iddonhang` (`iddonhang`),
  KEY `idsanpham` (`idsanpham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `iddonhang`, `idsanpham`, `soluong`, `gia`) VALUES
(25, 26, 12, 1, '4000000'),
(26, 26, 15, 1, '4000000'),
(27, 26, 11, 1, '4400000'),
(32, 28, 18, 1, '4000000'),
(34, 30, 12, 1, '5900000'),
(45, 33, 13, 1, '8000000'),
(46, 33, 15, 1, '4500000'),
(58, 40, 12, 1, '5900000'),
(59, 41, 11, 1, '4400000'),
(60, 41, 12, 1, '5900000'),
(61, 42, 11, 1, '4400000');

-- --------------------------------------------------------

--
-- Table structure for table `chitietphukien`
--

CREATE TABLE IF NOT EXISTS `chitietphukien` (
  `Mahang` int(11) NOT NULL AUTO_INCREMENT,
  `Tenphukien` varchar(255) NOT NULL,
  `Maphukien` varchar(50) NOT NULL,
  `Mota` longtext NOT NULL,
  `Baohanh` varchar(50) NOT NULL,
  `Tinhtrang` varchar(50) NOT NULL,
  `Trangthai` varchar(50) NOT NULL,
  `Hinhanh` varchar(255) NOT NULL,
  `Gia` varchar(100) NOT NULL,
  PRIMARY KEY (`Mahang`),
  KEY `Maphukien` (`Maphukien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `chitietphukien`
--

INSERT INTO `chitietphukien` (`Mahang`, `Tenphukien`, `Maphukien`, `Mota`, `Baohanh`, `Tinhtrang`, `Trangthai`, `Hinhanh`, `Gia`) VALUES
(3, 'Bao cáº§m tay Blackberry Curve', 'PK02', '<p><span>Thiáº¿t káº¿ da Ä‘Æ¡n giáº£n, lá»‹ch l&atilde;m, báº£o vá»‡ nháº¹ nh&agrave;ng cho chiáº¿c BlackBerry cá»§a báº¡n. Sá»­ dá»¥ng cho c&aacute;c d&ograve;ng m&aacute;y&nbsp;</span><span>&nbsp;BlackBerry Curve 83xx/85xx/93xx/9220/9320</span></p>', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/2014101205042820141006031417baoda1.png', '50000'),
(4, 'Bao cáº§m tay Blackberry  Z10', 'PK02', '<p><span>Chiáº¿c Ä‘iá»‡n thoáº¡i kh&ocirc;ng chá»‰ l&agrave; phÆ°Æ¡ng tiá»‡n li&ecirc;n láº¡c m&agrave; c&ograve;n kháº³ng Ä‘á»‹nh c&aacute; t&iacute;nh, phong c&aacute;ch cá»§a báº¡n. "Dáº¿ y&ecirc;u" lu&ocirc;n má»›i, Ä‘áº¹p, kh&ocirc;ng c&oacute; báº¥t ká»³ váº¿t cháº§y xÆ°á»›c n&agrave;o l&agrave; Ä‘iá»u m&agrave; báº¥t cá»© chá»§ nh&acirc;n n&agrave;o cÅ©ng mong muá»‘n. NhÆ°ng h&agrave;ng ng&agrave;y c&oacute; thá»ƒ c&oacute; bao "nguy hiá»ƒm" xáº£y ra Ä‘á»‘i vá»›i m&aacute;y m&agrave; báº¡n kh&ocirc;ng biáº¿t trÆ°á»›c: va Ä‘áº­p, d&iacute;nh bá»¥i, báº©n hay nhá»¡ tay Ä‘&aacute;nh rÆ¡i...</span></p>\r\n<p><strong>Bao cáº§m tay - Leather Pocket</strong><span>&nbsp;Ä‘Æ°á»£c sáº£n xuáº¥t báº±ng cháº¥t liá»‡u cao cáº¥p, bá»n Ä‘áº¹p gi&uacute;p cho chiáº¿c&nbsp;<a href="http://dauden.vn/blackberry-z10-brandnew-black"><strong>BlackBerry Z10</strong></a>&nbsp;y&ecirc;u qu&yacute; cá»§a báº¡n kh&ocirc;ng bá»‹ xÆ°á»›c, tr&aacute;nh va Ä‘áº­p, bá»¥i báº©n áº£nh hÆ°á»Ÿng Ä‘áº¿n m&aacute;y.&amp;</span></p>', '3 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/2014101205043320141006034429baoda2.png', '200000'),
(5, 'BÃ n phÃ­m Blackberry Q10 White', 'PK05', '', '6 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/2014101205044520141006034633banphim1.jpg', '350000'),
(6, 'BÃ n phÃ­m Blackberry Q10 Black', 'PK05', '', '06 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/2014101205045020141006034748banphim2.jpg', '350000'),
(7, 'Thiáº¿t bá»‹ trÃ¬nh chiáº¿u Blackberry Presenter', 'PK06', '<ul>\r\n<li><strong>T&ecirc;n sáº£n pháº©m:</strong>&nbsp;BlackBerry Presenter</li>\r\n<li><strong>Model sá»­ dá»¥ng:</strong>&nbsp;Káº¿t ná»‘i Bluetooth tÆ°Æ¡ng th&iacute;ch vá»›i táº¥t cáº£ c&aacute;c model BlackBerry c&oacute; há»‡ h&agrave;nh OS 4.6 trá»Ÿ l&ecirc;n.</li>\r\n<li><strong>Thá»i gian sá»­ dá»¥ng:&nbsp;</strong></li>\r\n<li><strong>HÆ°á»›ng dáº«n sá»­ dá»¥ng:&nbsp;</strong><span>Trong thá»i buá»•i c&ocirc;ng nghá»‡ th&ocirc;ng tin viá»‡c d&ugrave;ng M&aacute;y t&iacute;nh x&aacute;ch tay Ä‘á»ƒ tr&igrave;nh chiáº¿u slide vá»›i m&aacute;y chiáº¿u Ä‘&ocirc;i khi g&acirc;y báº¥t tiá»‡n, báº¡n kh&ocirc;ng thá»ƒ l&uacute;c n&agrave;o cÅ©ng mang b&ecirc;n m&igrave;nh chiáº¿c m&aacute;y t&iacute;nh x&aacute;ch tay cá»“ng ká»nh. Vá»›i má»™t giáº£i ph&aacute;p cá»§a BlackBerry th&igrave; giá» Ä‘&acirc;y báº¡n c&oacute; thá»ƒ tr&igrave;nh chiáº¿u slide báº±ng ch&iacute;nh chiáº¿c BlackBerry cá»§a m&igrave;nh. Äiá»u Ä‘&oacute; Ä‘á»“ng nghÄ©a vá»›i viá»‡c Ä‘iá»‡n thoáº¡i "D&acirc;u Ä</span></li>\r\n</ul>', '06 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/2014101205045620141006034948Presenter-thiet-bi-trinh-chieu-bb-box1-300x300.png', '750000'),
(8, 'Micro SD 16GB Sandisk Nobox', 'PK06', '<h1><span style="font-size: small;"><strong>THáºº NHá»š MICRO SD 16GB SANDISK &nbsp;CH&Iacute;NH H&Atilde;NG - Má»ž&nbsp;Rá»˜NG&nbsp;DUNG LÆ¯á»¢NG Bá»˜ NHá»š&nbsp;CHO Dáº¾ Y&Ecirc;U&nbsp;V&Agrave; M&Aacute;Y T&Iacute;NH Báº¢NG</strong></span></h1>\r\n<h2><span style="font-size: small;"><strong>THáºº NHá»š CHáº¤T CHáº¤T LÆ¯á»¢NG CAO CHO&nbsp;BLACKBERRY V&Agrave; PLAYBOOK.</strong></span></h2>\r\n<p><span>Má»™t chiáº¿c Ä‘iá»‡n thoáº¡i</span><strong>&nbsp;</strong><span>hoáº·c má»™t m&aacute;y t&iacute;nh báº£ng c&oacute; bá»™ nhá»› trong háº¡n cháº¿ l&agrave; má»™t Ä‘iá»u háº¿t sá»©c kh&oacute; chá»‹u. Bá»Ÿi váº­y, c&aacute;c thiáº¿t bá»‹ thÆ°á»ng c&oacute; khe cáº¯m má»Ÿ rá»™ng nháº±m gia tÄƒng th&ecirc;m bá»™ nhá»›, gi&uacute;p ngÆ°á»i d&ugrave;ng c&oacute; thá»ƒ lÆ°u trá»¯ nhiá»u hÆ¡n dá»¯ liá»‡u cá»§a m&igrave;nh.</span></p>\r\n<p><span><span>Tháº» nhá»› ngo&agrave;i ch&iacute;nh&nbsp;l&agrave; má»™t thiáº¿t bá»‹ kh&ocirc;ng thá»ƒ thiáº¿u cho táº¥t cáº£ c&aacute;c&nbsp;thiáº¿t bá»‹ di Ä‘á»™ng hoáº·</span></span></p>', '06 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/201410120505042014100603505316GB_avar.jpg', '335000'),
(9, 'Tháº» nhá»› Micro SD 8GB  Nobox', 'PK06', '<ul>\r\n<li><span><span>Tháº» nhá»› Micro SD 8G sandisk&nbsp;d&agrave;nh cho táº¥t cáº£ c&aacute;c d&ograve;ng m&aacute;y blackberry c&oacute; há»— trá»£ tháº» nhá»›.</span></span></li>\r\n</ul>\r\n<p><span><span>Vá»›i chiáº¿c tháº» nhá»›&nbsp;</span></span><span>Micro SD 8G sandisk, báº¡n sáº½ thoáº£i m&aacute;i lÆ°u láº¡i nhá»¯ng táº¥m áº£nh, nhá»¯ng b&agrave;i h&aacute;t y&ecirc;u th&iacute;ch cá»§a m&igrave;nh nhiá»u hÆ¡n ná»¯a.</span></p>', '06 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/2014101205061120141006035206thenho1.jpg', '225000'),
(10, 'MÃ n hÃ¬nh Z10', 'PK03', '', '6 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141012050440201410120501302014100306261420140929044338Blackberry-Logo.jpg', '850000'),
(15, 'Sáº C USB BLACKBERRY', 'PK01', '', '01 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025060333dau-sac-usb-bb-750-mah-white-2-160x160.jpg', '150000'),
(16, 'PIN Sáº C Dá»° PHÃ’NG - PISEN EASY POWER', 'PK01', '', '01 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025060536sac-du-phong-pisen-easy-power-5000mAh-4-160x160.png', '450000'),
(17, 'Sáº C 3 CHáº¤U - PLAYBOOK ', 'PK01', '', '01 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025060619sac-playbook-rapid-travel-charger-3-160x160.png', '550000'),
(18, 'Äáº¾ Sáº C BB TOUR 9630 - BOLD 9650', 'PK01', '', '01 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025060703Dock-sac-charing-pod-bb-9630-9650-1-160x160.png', '150000'),
(19, 'PIN L-S1 BLACKBERRY Z10', 'PK01', '', '01 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025060903pin-ls1-1800-mah-bb-z10-box-160x160.PNG', '550000'),
(20, 'PIN JM1 BLACKBERRY 99/97/93', 'PK01', '', '01 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025061014pin-JM1-1230mah-9790-9900-9930-9380-9850-9860-9981-1-160x160.png', '200000'),
(21, 'DOCK Sáº C BLACKBERRY Z10', 'PK01', '', '01 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025061117Dock-sac-blackberry-z10-white-160x160.jpg', '750000'),
(22, 'PIN BLACKBERRY PLAYBOOK', 'PK01', '', '01 thÃ¡ng + 01 Ä‘á»•i 01 tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025061159Pin-blackberry-playbook-160x160.jpg', '750000'),
(23, 'BAO DA Má»˜C BLACKBERRY PASSPORT', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025061914DTR-bao-da-blackberry-passport-160x160.jpg', '500000'),
(24, 'BAO DA Má»˜C BLACKBERRY Q10 ', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025062200dtr-bao-cam-tay-blackberry-q10-moc-vuong-160x160.jpg', '390000'),
(25, 'á»P LÆ¯NG TRANSFORM SHELL Z10', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025062325op-lung-transform-hard-shell-bb-z10-red-box-160x160.png', '500000'),
(26, 'BAO Gáº¬P Z30 - LEATHER FLIP CASE ', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025062412blackberry-leather-flip-shell-case-for-z30-black-p42227-300-160x160.jpg', '500000'),
(27, 'BAO Gáº¬P - FLIP SHELL BLACKBERRY Q10', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025062457BCT-gap-flip-shell-bb-q10-white-box-160x160.png', '500000'),
(28, 'CASE SILICONE BLACKBERRY PLAYBOOK', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025062541BLACKBERRY-PLAYBOOK-SOFT-SHELL-600x600-160x160.png', '200000'),
(29, 'BAO THUN BLACKBERRY PLAYBOOK', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025062753Tui-dung-neoprene-sleeve-bb-playbook-blue-box-160x160.png', '200000'),
(30, 'BAO ÄEO SEN CHO BLACKBERRY Z3 ', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025062925Z3.jpg', '390000'),
(31, 'BAO DA RÃšT BLACKBERRY PLAYBOOK', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025063105Bao-da-rut-leather-sleeve-bb-playbook-2-160x160.png', '175000'),
(32, 'BAO DA ÄEO BLACKBERRY Z10', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025063158Bao-deo-swivel-holster-z10-box-1-160x160.jpg', '500000'),
(33, 'BAO DA PASSPORT LEATHER FLIP COVER ', 'PK02', '', '3 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025063254bao-da-blackberry-passport-leather-flip-case-black-avatar-160x160.jpg', '200000'),
(34, 'MÃ€N HÃŒNH BLACKBERRY Z30 ', 'PK03', '', '6 ThÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025063652Man-hinh-LCD-srceen-bb-z30-black-1-160x160.png', '1800000'),
(35, 'MÃ€N HÃŒNH BLACKBERRY STORM 9550/9520', 'PK03', '', '6 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025063742lcd-screen-bb-9550-9520-2-160x160.jpg', '700000'),
(36, 'MÃ€N HÃŒNH BLACKBERY 9900 ', 'PK03', '', '6 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025063931Man-hinh-LCD-srceen-bb-9900-white-2-160x160.png', '950000'),
(37, 'MÃ€N HÃŒNH BLACKBERRY Q10', 'PK03', '', '6 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025065210Man-hinh-LCD-srceen-bb-q10-white-160x160.png', '1500000'),
(38, 'MÃ€N HÃŒNH BLACKBERRY 98', 'PK01', '', '6 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025065532Man-hinh-LCD-screen-bb-9860-9850-1-160x160.jpg', '600000'),
(39, 'Máº¶T Cáº¢M á»¨NG - BLACKBERRY 9860/9850', 'PK03', '', '6 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025065753Cam-ung-bb-9860-1-160x160.png', '500000'),
(40, 'THIáº¾T Bá»Š TRÃŒNH CHIáº¾U - BLACKBERRY PRESENTER', 'PK01', '', '6 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025070011Presenter-thiet-bi-trinh-chieu-bb-box1-160x160.png', '750000'),
(41, 'Äiá»u Khiá»ƒn TRÃŒNH CHIáº¾U', 'PK01', '', '6 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025070100Philips-Gesture-controlled-presenter-SNP-6000-3-160x160.PNG', '1035000'),
(42, 'THáºº NHá»š MICRO SD 32 GB', 'PK06', '', '6 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/2014102507013732GB_avar-160x160.jpg', '675000'),
(43, 'MICRO SD 64GB SANDISK CLASS 10 ', 'PK06', '', '6 thÃ¡ng', 'Má»›i 100%', 'CÃ²n hÃ ng', 'phukien/20141025070258THE-NHO-64GB-CLASS10-SANDISK-160x160.jpg', '1350000');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE IF NOT EXISTS `chitietsanpham` (
  `Mota` longtext NOT NULL,
  `Masanpham` int(11) NOT NULL AUTO_INCREMENT,
  `Madong` varchar(25) NOT NULL,
  `Tensp` varchar(55) NOT NULL,
  `Manhinh` varchar(55) NOT NULL,
  `RomRam` varchar(55) NOT NULL,
  `Bonhotrong` varchar(55) NOT NULL,
  `CPU` varchar(55) NOT NULL,
  `Hedieuhanh` varchar(55) NOT NULL,
  `Gia` decimal(55,0) NOT NULL,
  `Kichthuoc` varchar(55) NOT NULL,
  `Trongluong` varchar(55) NOT NULL,
  `Camera` varchar(55) NOT NULL,
  `Thenho` varchar(55) NOT NULL,
  `Wifi` varchar(55) NOT NULL,
  `Java` varchar(55) NOT NULL,
  `Pin` varchar(55) NOT NULL,
  `Hinhanh` varchar(100) NOT NULL,
  `Baohanh` varchar(55) NOT NULL,
  `GPS` varchar(55) NOT NULL,
  `Ghiam` varchar(55) NOT NULL,
  `Mang` varchar(55) NOT NULL,
  `NgaySX` varchar(55) NOT NULL,
  `Trangthai` varchar(55) NOT NULL,
  `Loaihang` varchar(55) NOT NULL,
  `Bluetooth` varchar(55) NOT NULL,
  `Audio` varchar(55) NOT NULL,
  `Video` varchar(55) NOT NULL,
  `Radio` varchar(55) NOT NULL,
  `Tinhtrang` varchar(10) NOT NULL,
  PRIMARY KEY (`Masanpham`),
  KEY `Madong` (`Madong`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`Mota`, `Masanpham`, `Madong`, `Tensp`, `Manhinh`, `RomRam`, `Bonhotrong`, `CPU`, `Hedieuhanh`, `Gia`, `Kichthuoc`, `Trongluong`, `Camera`, `Thenho`, `Wifi`, `Java`, `Pin`, `Hinhanh`, `Baohanh`, `GPS`, `Ghiam`, `Mang`, `NgaySX`, `Trangthai`, `Loaihang`, `Bluetooth`, `Audio`, `Video`, `Radio`, `Tinhtrang`) VALUES
('                    	 BlackBerry Z3 lÃ  Smartphone má»›i nháº¥t cá»§a BlackBerry, sau nhá»¯ng thÃ nh cÃ´ng tá»« Z10 vÃ  Z30. BlackBerry Z3 xuáº¥t hiá»‡n vÃ  hy vá»ng giá»¯ Ä‘Æ°á»£c Ä‘Ã  bá»©c phÃ¡ cá»§a dÃ²ng Ä‘iá»‡n thoáº¡i mÃ n hÃ¬nh full cáº£m á»©ng. BlackBerry Z3 Ä‘Æ°á»£c trang bá»‹ nhiá»u chá»©c nÄƒng hiá»‡n Ä‘áº¡i : Camera 5Mb, MÃ n hÃ¬nh full 5inch, Cháº¡y há»‡ Ä‘iá»u hÃ nh BlackBerry OS 10 vÃ  dung lÆ°á»£ng pin lÃªn Ä‘áº¿n 2500mAh.\r\nBlackBerry Z3  khÃ´ng bo trÃ²n cÃ¡c gÃ³c nhÆ° z10 hay z30, chiáº¿c BlackBerry Z3 Ä‘Æ°á»£c thiáº¿t káº¿ vá»›i nhá»¯ng gÃ³c vuÃ´ng, mang láº¡i sá»± máº¡nh máº½ vÃ  cÃ³ láº½ thÃ­ch há»£p hÆ¡n vá»›i phÃ¡i nam. BlackBery Z3 Ä‘em láº¡i cáº£m giÃ¡c ráº¥t cháº¯c cháº¯n, mÃ n hÃ¬nh 5 inch vá»«a váº·n thao tÃ¡c Ä‘áº·c biá»‡t lÃ  Ä‘á»‘i vá»›i bÃ n tay cá»§a nam giá»›i. Máº·t trÆ°á»›c lÃ  mÃ n hÃ¬nh cáº£m á»©ng hoÃ n toÃ n, khÃ´ng cÃ³ báº¥t ká»³ phÃ­m báº¥m nÃ o. Máº·t sau lÃ  vá» nhá»±a sáº§n, táº¡o cáº£m giÃ¡c má»m máº¡i.\r\n\r\nBÃªn thÃ¢n mÃ¡y lÃ  phÃ­m Volume vÃ  nhá»¯ng phÃ­m     \r\nBÃªn thÃ¢n mÃ¡y lÃ  phÃ­m Volume vÃ  nhá»¯ng phÃ­m chá»©c nÄƒng khÃ¡c. BlackBerry Z3 cÃ³ thiáº¿t káº¿ nguyÃªn khá»‘i vÃ  khÃ´ng thá»ƒ thÃ¡o pin. VÃ¬ tháº¿, khe sim vÃ  khe tháº» nhá»› Ä‘á»u náº±m á»Ÿ cáº¡nh bÃªn.\r\n\r\n\r\n\r\n \r\n\r\nBLACKBERRY Z3 CHÃNH HÃƒNG - MÃ€N HÃŒNH Cáº¢M á»¨NG FULL 5 INCH VÃ€ PIN LÃŠN Äáº¾N 2500MAH\r\n\r\nCau Hinh BlackBerry Z3  chinh hang\r\n\r\nBlackBerry Z3 chÃ­nh hÃ£ng Ä‘Æ°á»£c trang bá»‹ mÃ n hÃ¬nh 5 inch Ä‘á»™ phÃ¢n giáº£i 540x960 pixel cÃ¹ng chip lÃµi kÃ©p 1,2 GHz Qualcomm MSM8230 vÃ  1,5 GB RAM. Smartphone nÃ y cÃ³ camera Ä‘á»™ phÃ¢n giáº£i 5 megapixel, há»— trá»£ tá»± Ä‘á»™ng láº¥y nÃ©t vÃ  Ä‘Ã¨n flash LED trong khi camera trÆ°á»›c Ä‘áº¡t Ä‘á»™ phÃ¢n giáº£i 1,1 megapixel. Äiá»ƒm máº¡nh cá»§a sáº£n pháº©m nÃ y chÃ­nh lÃ  dung lÆ°á»£ng Pin lÃªn Ä‘áº¿n 2.500 mAh cho thá»i gian thoáº¡i 15.5 giá» vÃ  384 giá» Ä‘á»‘i vá»›i thá»i gian chá», giá» Ä‘Ã¢y báº¡n cÃ³ thá»ƒ thá»a thÃ­ch sá»­ dá»¥ng mÃ  khÃ´ng pháº£i lo Ä‘áº¿n chuyá»‡n pin háº¿t giá»¯a chá»«ng. BlackBerry Z3 cÃ³ bá»™ nhá»› trong 8 GB há»— trá»£ má»Ÿ rá»™ng lÃªn Ä‘áº¿n 32Gb thÃ´ng qua khe cáº¯m tháº» nhá»› microSD.                                   ', 11, 'BB.10', 'Blackberry Z3 hÃ ng cÃ´ng ty', '5" diagonal 16:9 aspect ratio', '1.5GB RAM', '8GB Flash', 'Dual Core 1.2 GHz Qualcomm MSM8230', 'BlackBerry 10 OS', '4400000', 'Height 140 mm / 5.51 in ; Width 72.8 mm / 2.87 in; Dept', '164g / 5.78 oz', '5 megapixel auto-focus camera Flash, continuous and tou', 'LÃªn Ä‘áº¿n 32GB', '802.11 b/g/n 2.4 GHz', 'CÃ³', '2500mAH non-removable battery', 'sanpham/20141014042310Z3.png', 'ThÃ¢n mÃ¡y: 18 thÃ¡ng, Phá»¥ kiá»‡n 6 thÃ¡ng - 01 Ä‘á»•', 'CÃ³', 'CÃ³', '', '2013-05-01', 'CÃ²n hÃ ng', 'HÃ ng cao cáº¥p', 'Bluetooth 4.0 Low Energy (LE) with aptXâ„¢ enabled', 'WMV, WMA, MP3, MKA, AAC, AMR, F4V, WAV, AWB, OGG, FLAC', '3GP, 3GP2, M4A, M4V, MOV, MP4, MKV, MPEG-4, AVI', '', 'Má»›i 100%'),
('                    	                    	   BlackBerry Q10 - Sá»± káº¿t há»£p hoÃ n háº£o giá»¯a mÃ n hÃ¬nh cáº£m á»©ng & bÃ n phÃ­m nháº­p liá»‡u cá»±c tá»‘t.\r\n \r\n\r\nBlackberry Ä‘Ã£ cÃ³ sá»± trá»Ÿ láº¡i Ä‘áº§y ngoáº¡n má»¥c vá»›i há»‡ Ä‘iá»u hÃ nh BlackBerry OS 10 â€“ má»™t bÆ°á»›c Ä‘á»™t phÃ¡ trong tráº£i nghiá»‡m thÃ´ng minh hoÃ n toÃ n má»›i, há»— trá»£ mÃ n hÃ¬nh cáº£m á»©ng cÅ©ng nhÆ° giá»¯ nhá»¯ng tháº¿ máº¡nh xÆ°a nay cá»§a mÃ¬nh. Vá»›i hÃ ng loáº¡t tÃ­nh nÄƒng tÃ­nh nÄƒng thao tÃ¡c vÃ´ cÃ¹ng thuáº­n tiá»‡n vÃ  nhanh chÃ³ng, quáº£n lÃ½ cá»­a sá»• vÃ  Ä‘a nhiá»‡m cá»±c ká»³ trá»±c quan, thao tÃ¡c Ä‘Æ¡n giáº£n, chia sáº» dá»… dÃ ng, tÆ°Æ¡ng thÃ­ch sÃ¢u giá»¯a cÃ¡c pháº§n má»m,â€¦ ÄÃ³ luÃ´n luÃ´n lÃ  nhá»¯ng Ä‘iá»u mÃ  BlackBerry hÆ°á»›ng tá»›i, táº¡o ra sá»± thuáº­n tiá»‡n tá»‘i Ä‘a cho ngÆ°á»i dÃ¹ng.\r\n\r\nVá»›i cÃ¡c cáº¡nh Ä‘Æ°á»£c thiáº¿t káº¿ báº±ng thÃ©p, khÃ´ng gá»‰. BlackBerry Q10 thÃ¡ch thá»©c má»i va Ä‘áº­p vÃ  mang Ä‘áº¿n sá»± bá»n bá»‰ hiáº¿m tháº¥y cá»§a má»™t chiáº¿c Smartphone.\r\n\r\nBLACKBERRY HUB - QUáº¢N LÃ Tá»T HÆ N CHá»ˆ Báº°NG Má»˜T CÃI VUá»T NHáº¸\r\n\r\nTáº¥t cáº£ email, tin nháº¯n hay thÃ´ng bÃ¡o trÃªn chiáº¿c smartphone sáº½ Ä‘Æ°á»£c tÃ­nh nÄƒng BlackBerry Hub táº­p trung láº¡i 1 vá»‹ trÃ­.                    	                                                            ', 12, 'BB.10', 'Blackberry Q10-Black cÃ´ng ty', 'Super AMOLED cáº£m á»©ng Ä‘iá»‡n dung, 16 triá»‡u mÃ u;', '2GB RAM', '16 GB', 'Dual-core 1.5 GHz Cortex-A9', 'BlackBerry OS 10', '5900000', '119.6 x 66.8 x 10.4 mm', '139g', '8 MP, 3264 x 2448 pixels, autofocus, LED flash', 'Há»— trá»£ lÃªn Ä‘áº¿n 64GB', 'Wi-Fi 802.11 a/b/g/n, dual band, Wi-Fi hotspot', 'CÃ³', 'Li-Ion 2100 mAh', 'sanpham/20141030021811Avatar-Q10-chinh-hang-black-gia-4990k-170x170.png', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', 'GPRS/EDGE/3G/4G', '2013-01-01', 'CÃ²n hÃ ng', 'HÃ ng cao cáº¥p', 'CÃ³, v4.0 vá»›i A2DP', 'WMA, eAAC+, MP3, FLAC, WAV', 'MP4, H.263, DivX, WMV, Xvid, H.264(MPEG4-AVC)', 'TBD', 'Má»›i 100%'),
('                    	                    	  BlackBerry Z30 - Smartphone cao cáº¥p vá»›i mÃ n hÃ¬nh 5 inch cá»±c lá»›n vÃ  kháº£ nÄƒng Ä‘a nhiá»‡m tuyá»‡t vá»i.\r\n \r\n\r\nBLACKBERRY Z30 - MÃ€N HÃŒNH 5 INCH SUPER AMOLED TUYá»†T Äáº¸P:\r\n\r\nNáº¯m báº¯t Ä‘Æ°á»£c nhu cáº§u ngÆ°á»i dÃ¹ng hiá»‡n nay mong muá»‘n sá»Ÿ há»¯u Ä‘iá»‡n thoáº¡i smartphone vá»›i mÃ n hÃ¬nh lá»›n, BlackBerry cho ra máº¯t sáº£n pháº©m BlackBerry Z30 ChÃ­nh hÃ£ng táº¡i Viá»‡t Nam, nháº±m Ä‘Æ°a Ä‘áº¿n cho khÃ¡ch hÃ ng tráº£i nghiá»‡m cáº£m á»©ng thoáº£i mÃ¡i hÆ¡n, hiá»ƒn thá»‹ nhiá»u ná»™i dung hÆ¡n, lÆ°á»›t web, chÆ¡i game, Ä‘á»c sÃ¡ch vÃ  cháº¡y cÃ¡c á»©ng dá»¥ng khÃ¡c Ä‘Æ°á»£c thÃ´ng thoÃ¡ng vÃ  thoáº£i mÃ¡i hÆ¡nâ€¦\r\n\r\nBlackBerry Z30 ChÃ­nh hÃ£ng sá»­ dá»¥ng cÃ´ng nghá»‡ mÃ n hÃ¬nh Super AMOLED vá»›i Ä‘á»™ phÃ¢n giáº£i HD 1280x720 pixels. Nhá» váº­y, cháº¥t lÆ°á»£ng hiá»ƒn thá»‹ trÃªn BlackBerry Z30 Ä‘áº¡t má»©c xuáº¥t sáº¯c vá»›i Ä‘á»™ sáº¯c nÃ©t cao, máº­t Ä‘á»™ Ä‘iá»ƒm áº£nh Ä‘áº¡t tá»›i 295ppi, mÃ u sáº¯c rá»±c rá»¡, Ä‘á»™ sÃ¡ng máº¡nh, tÆ°Æ¡ng pháº£n cao vÃ  gÃ³c nhÃ¬n rá»™ng.\r\n\r\nBLACKBERRY Z30 â€“ THIáº¾T Káº¾ SANG TRá»ŒNG, PHONG CÃCH DOANH NHÃ‚N:\r\n\r\nKhÃ´ng chá»‰ áº¥n tÆ°á»£ng vá» mÃ n hÃ¬nh, BlackBerry Z30 cÅ©ng táº¡o Ä‘Æ°á»£c áº¥n tÆ°á»£ng vá»›i ngÆ°á»i dÃ¹ng bá»Ÿi kiá»ƒu thiáº¿t káº¿ sang trá»ng.\r\n\r\nCÃ¡c cáº¡nh mÃ¡y cÃ³ Ä‘á»™ má»m vá»«a pháº£i Ä‘á»ƒ khÃ´ng dung hÃ²a quÃ¡ nhiá»u nhá»¯ng Ä‘Æ°á»ng nÃ©t máº¡nh máº½ cá»§a thiáº¿t bá»‹, máº·t sau Ä‘Æ¡n giáº£n vá»›i hoa vÄƒn Ä‘á»™c Ä‘Ã¡o, cáº¡nh mÃ¡y cháº¯c cháº¯n, há»‡ thá»‘ng hiá»ƒn thá»‹ vÃ  Ä‘Ã¨n bÃ¡o thÃ´ng minhâ€¦ Táº¥t cáº£ Ä‘á»u táº¡o nÃªn má»™t sá»± tin tÆ°á»Ÿng vÃ  áº¥n tÆ°á»£ng vá» phong cÃ¡ch lá»‹ch lÃ£m, Ä‘á»‰nh Ä‘áº¡t mÃ  BlackBerry Z30 ChÃ­nh hÃ£ng hÆ°á»›ng Ä‘áº¿n Ä‘á»‘i tÆ°á»£ng doanh nhÃ¢n.\r\n\r\nBLACKBERRY Z30 â€“ Cáº¤U HÃŒNH Máº NH Máº¼, Xá»¬ LÃ Tá»¨C THá»œI:\r\n\r\nBlackBerry Z30 black cau hinh cao                  	                                                            ', 13, 'BB.10', 'Blackberry Z30 hÃ ng cÃ´ng ty', 'LCD', '2GB', '16GB', '1.7 GHz', 'OS BB 10.2', '8000000', '', '', '8.0 MP quay 1080HD, kÃ¨m theo Ä‘Ã¨n flash', 'LÃªn Ä‘áº¿n 64GB', 'Chuáº©n 802.11/a/g/n', 'CÃ³', '2880 mAh', 'sanpham/20141014042358Z30.jpg', '', 'CÃ³', 'CÃ³', 'GPRS/EDGE/3G/4G	', '2013-01-01', 'CÃ²n hÃ ng', 'HÃ ng cao cáº¥p', '4.0', 'MP3, WAV, WMA, eAAC+', 'H.263, H.264(MPEG4-AVC), Xvid, DivX, MP4, WMV', 'Stereo FM with RDS', 'Má»›i 100%'),
('                    	                    	BLACKBERRY Z10 - SIÃŠU PHáº¨M SMARTPHONE, Äá»ˆNH CAO CÃ”NG NGHá»†\r\nBLACKBERRY Z10 LÃ€ Má»˜T CHIáº¾C SMARTPHONE CÃ“ KIá»‚U DÃNG KHÃ Äáº¸P, Cáº¤U HÃŒNH TÆ¯Æ NG Äá»I VÃ€ TÃNH NÄ‚NG Máº NH. Z10 THá»‚ HIá»†N NHIá»€U ÄIá»‚M Má»šI Máºº HÆ N LÃ€ Káº¾ THá»ªA HAY Cáº¢I TIáº¾N NÃ‰T CÅ¨ Cá»¦A ÄIá»†N THOáº I BLACKBERRY THáº¾ Há»† TRÆ¯á»šC. RA Máº®T TRONG Má»˜T Sá»° KIá»†N ÄÆ¯á»¢C GIá»šI CÃ”NG NGHá»† CHÃš Ã CUá»I THÃNG 1 NÄ‚M NGOÃI, Z10 LÃ€ Sáº¢N PHáº¨M DáºªN Äáº¦U TRONG LÃ€NG ÄIá»†N THOáº I Cá»¦A BLACKBERRY TRÆ¯á»šC ÄÃ‚Y.                    ', 15, 'BB.10', 'Blackberry Z10 4G', 'Cáº£m á»©ng 4.2', '2 GB', '16 GB', 'Dual-core 1.5 GHz Krait', 'BlackBerry 10 OS', '4500000', '130 x 65.6 x 9 mm (5.12 x 2.58 x 0.35 in)', '135g', '8 MP, 3264 x 2448 pixels, autofocus, LED flash', 'LÃªn Ä‘áº¿n 32GB', 'Wi-Fi 802.11 a/b/g/n, dual band', 'CÃ³', 'Li-Ion 1800 mAh battery', 'sanpham/20141030024832Blackberry-z10-black-hot-price-160x160.jpg', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', 'GPRS/EDGE/3G/4G', '2013-01-01', 'CÃ²n hÃ ng', 'HÃ ng cao cáº¥p', 'CÃ³, v4.0 with A2DP, LE', 'FLAC, MP3, WAV, eAAC+, WMA', 'MP4, Xvid, H.264(MPEG4-AVC), DivX, WMV, H.263', 'CÃ³', 'Má»›i 100%'),
('BlackBerry Passport - GÃ£ khá»•ng lá»“ lá»‹ch lÃ£m\r\nSá»± kiá»‡n ra máº¯t BlackBerry Passport Ä‘Æ°á»£c tá»• chá»©c táº¡i Toronto, London vÃ  Dubai ngÃ y 24/9 vá»«a qua Ä‘Ã£ mang láº¡i ráº¥t nhiá»u ngáº¡c nhiÃªn vÃ  há»©ng thÃº cho nhá»¯ng tÃ­n Ä‘á»“ cá»§a BlackBerry. Nhá»¯ng tin tá»©c rÃ² rá»‰ khÃ´ng ngá»«ng mÃ  bÃ¡o chÃ­ Ä‘Ã£ Ä‘Æ°a tin trong suá»‘t thá»i gian vá»«a qua Ä‘Ã£ Ä‘Æ°á»£c kháº³ng Ä‘á»‹nh báº±ng nhá»¯ng thÃ´ng tin chÃ­nh thá»©c tá»« BlackBerry. VÃ  Ä‘áº¿n ngÃ y hÃ´m nay chÃºng ta Ä‘Ã£ hoÃ n toÃ n cÃ³ thá»ƒ tin tÆ°á»Ÿng ráº±ng: BlackBerry PassPort thá»±c sá»± lÃ  má»™t sáº£n pháº©m phÃ¡ vá»¡ ranh giá»›i thiáº¿t káº¿ vÃ  Ä‘á»™t phÃ¡ tÃ­nh nÄƒng.', 16, 'BB.10', 'Blackberry PassPort', '16M colors Size	1440 x 1440 pixels, 4.5 inches (~453 pp', '3GB', '32Gb', 'Quad-core 2.26 GHz Krait 400', 'BlackBery 10.3', '15500000', '128 x 90.3 x 9.3 mm (5.04 x 3.56 x 0.37 in)', '196 g (6.91 oz)', '', 'microSD, up to 128 GB', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, DLNA,', 'CÃ³', 'Li-Ion 3450 mAh', 'sanpham/20141029090624BlackBerry-Passport-pre-oder-170x170.png', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', 'GPRS/EDGE/3G/4G', '2014-10-01', 'CÃ²n hÃ ng', 'HÃ ng cao cáº¥p', 'v4.0, A2DP, LE', '', '', 'CÃ³', 'Má»›i 100%'),
('                    	                    	                    	                                                            ', 17, 'BB.10', 'Blackberry Z3', '', '', '', '', '', '2000000', '', '', '', '', '', '', '', 'sanpham/20141029090802BlackBerry-z3-chinh-hang-dau-den-170x170.jpg', '', 'CÃ³', 'CÃ³', '', '2013-01-01', 'CÃ²n hÃ ng', 'HÃ ng phá»• thÃ´ng', '', '', '', '', 'Má»›i 100%'),
('                    	                    ', 18, 'BB.10', 'Blackberry 9700 ', '', '', '', '', '', '2000000', '', '', '', '', '', '', '', 'sanpham/201410160435569700.jpg', '', 'CÃ³', 'CÃ³', '', '2013-10-01', 'CÃ²n hÃ ng', 'HÃ ng phá»• thÃ´ng', '', '', '', '', 'Má»›i 100%'),
('                    	                    ', 19, 'BB.10', 'Blackberry 9780 ', '', '', '', '', '', '3000000', '', '', '', '', '', '', '', 'sanpham/201410160436339780.jpg', '', 'CÃ³', 'CÃ³', '', '2012-10-02', 'CÃ²n hÃ ng', 'HÃ ng phá»• thÃ´ng', '', '', '', '', 'Má»›i 100%'),
('                    	        BlackBerry Bold 9900 - Cáº¥u hÃ¬nh máº¡nh máº½, tÃ­nh nÄƒng Ä‘á»™c Ä‘Ã¡o.\r\nVá»šI Há»† ÄIá»€U HÃ€NH BLACKBERRY OS7 CÃ™NG Vá»šI NHá»®NG Cáº¢I TIáº¾N PHáº¦N Cá»¨NG Máº NH Máº¼, BLACKBERRY BOLD 9900 Xá»¨NG ÄÃNG LÃ€ Má»˜T TRONG NHá»®NG CHIáº¾C SMARTPHONE ÄÃNG Äá»‚ TRáº¢I NGHIá»†M.            	                                        ', 21, 'BB.B', 'BOLD 9900 BLACK', 'Cáº£m á»©ng Ä‘a Ä‘iá»ƒm, 16 triá»‡u mÃ u  	640 x 480 pi', '768 MB ', '8GB', '1.2 GHz QC 8655 processor', 'BlackBerry OS 7.0', '4300000', '115 x 66 x 10.5 mm ', '130 g', '5 MP, 2592x1944 pixels, LED flash', 'microSD, up to 32GB', '', 'CÃ³', 'Li-Ion 1230 mAh', 'sanpham/201410300321159900black_avar-170x170.png', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', 'GSM/GPRS/3G', '2009-02-01', 'CÃ²n hÃ ng', 'HÃ ng phá»• thÃ´ng', 'Yes, v2.1 with A2DP, EDR', '', '', 'No', 'Má»›i 100%'),
('', 22, 'BB.B', 'BlackBerry Bold 9000 Black', '65K mÃ u, 2.5in', '128MB', '1GB', 'Single Core 624 MHz', 'BlackBerry OS', '2000000', '114 x 66 x 14 mm', '133g', '2Megapixel', '', 'Wifi 802.11b â€¢ Wifi 802.11g', 'CÃ³', 'Li-Ion 1500 mAh', 'sanpham/20141030034116blackberry-bold-9000-black.png', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', '', '2005-02-01', 'CÃ²n hÃ ng', 'HÃ ng phá»• thÃ´ng', 'Bluetooth 2.0 with A2DP', '', '', '', 'Má»›i 100%'),
('                    	BLACKBERRY CURVE 9220 CHÃNH HÃƒNG - ÄIá»†N THOáº I THÃ”NG MINH GIÃ Tá»T\r\nPhiÃªn báº£n BlackBerry Curve 9220 dÃ¹ng há»‡ Ä‘iá»u hÃ nh BlackBerry OS 7.1, mÃ¡y mang nhá»¯ng nÃ©t thiáº¿t káº¿ riÃªng nhÆ°ng váº«n mang nÃ©t chung cá»§a dÃ¹ng Curve Ä‘Ã³ lÃ  thiáº¿t káº¿ phÃ­m báº¥m tÃ¡ch rá»i. BlackBerry Curve 9220 Ä‘Æ°á»£c trang bá»‹ pin dung lÆ°á»£ng lÃªn Ä‘áº¿n 1450 mAh giÃºp nÃ¢ng cao thá»i gian sá»­ dá»¥ng.                    ', 23, 'BB.C', 'BLACKBERRY CURVE 9220', 'TFT, 65 nghÃ¬n mÃ u; 2.44 inches', '512 MB ', '512 MB ', 'Solo-core 800 MHz', 'BlackBerry OS 7.1', '1900000', '109 x 60 x 12.7 mm', '102g', '2 MP, 1600x1200 pixels', 'Há»— trá»£ tháº» nhá»› lÃªn tá»›i 32 GB', 'Wi-Fi 802.11 b/g/n', '', 'Standard battery, Li-Ion 1450 mAh (J-S1)', 'sanpham/20141030034654bb9220WH-avar-160x160.png', '18 ThÃ¡ng', 'KhÃ´ng', 'CÃ³', 'GPRS/EDGE/3G/4G', '2006-02-01', 'CÃ²n hÃ ng', 'HÃ ng phá»• thÃ´ng', 'CÃ³, v2.1 with A2DP', 'MP3, WMA, FLAC, WAV, eAAC+', 'H.263, H.264(MPEG4-AVC), MP4', 'Stereo FM radio with RDS', 'Má»›i 100%'),
('', 24, 'BB.8800', 'Blackberry 8800 ', '2.5inch, 65K mÃ u, 320 x 240pixels', '16MB', '64MB', 'Single Core Intel XScale PXA270 (312 MHz)', 'BlackBerry OS', '430000', '114 x 66 x 14 mm', '134g ', 'No', '', 'No', 'No', 'Li-Ion', 'sanpham/20141030040005blackberry-8800-black.png', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', ' EDGE/GPRS', '2003-05-02', 'CÃ²n hÃ ng', 'HÃ ng giÃ¡ ráº»', 'Bluetooth 2.0 with A2DP', 'mp3', 'MP4', 'No', 'Má»›i 100%'),
('', 25, 'BB.8700', 'BlackBerry 8700c', '2.6inch, 65K mÃ u-TFT, 320 x 240pixels ', '16MB', '64MB', '', 'BlackBerry OS', '400000', '110 x 70 x 20 mm', '134g', 'No', 'No', '', '', 'Li-Ion 1100mAh', 'sanpham/20141030041150blackberry-8700c.jpg', '18 ThÃ¡ng', 'CÃ³', 'KhÃ´ng', 'GSM/EDGE', '2001-05-09', 'CÃ²n hÃ ng', 'HÃ ng giÃ¡ ráº»', 'Bluetooth 1.1', '', '', '', 'Má»›i 100%'),
('', 26, 'BB.T', 'BlackBerry Torch 9800', '16M mÃ u-TFT Touchscreen (Cáº£m á»©ng), 3.2inch', '512MB', '4GB', 'Single Core 624 MHz', 'BlackBerry OS 6.0', '1290000', '111 x 62 x 14.6 mm', '161g', '5Megapixel', '', 'â€¢ Wifi 802.11b â€¢ Wifi 802.11g', '', 'Li-Ion 1300mAh', 'sanpham/20141030041834blackberry-torch-9800-blackberry-slider-9800-black-anh-4.png', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', '', '2005-02-18', 'CÃ²n hÃ ng', 'HÃ ng giÃ¡ ráº»', 'Bluetooth 2.1 with A2DP', 'MP3', 'MP4', '', 'Má»›i 100%'),
('', 27, 'BB.S', 'BlackBerry Storm 9500', '3.2inch, 65K mÃ u-TFT Touchscreen (Cáº£m á»©ng), 480 x ', '128MB', '1GB', 'Single Core, Qualcomm MSM7600 (528 MHz)', 'BlackBerry OS', '2000000', '112.5 x 62.2 x 14 mm', '155g', '3.15Megapixel', '', '', '', 'Li-Ion 1400mAh', 'sanpham/20141030042458blackberry-storm-9500-anh-3.png', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', 'EDGE/GPRS', '2004-07-10', 'CÃ²n hÃ ng', 'HÃ ng giÃ¡ ráº»', 'Bluetooth 2.0 with A2DP', 'MP3/WMA/eAAC+ player', 'MP4/H.264/H.263/WMV player ', '', 'Má»›i 100%'),
('', 28, 'BB.P', 'BlackBerry Pearl 3G 9100', '2.3inch, 360 x 400pixels, 256K mÃ u-TFT', '', '256MB', 'Single Core', 'BlackBerry OS', '1900000', '108 x 50 x 13.3 mm', '94g', '3.15Megapixel', '', ' Wifi 802.11b â€¢ Wifi 802.11g', '', 'Li-Ion 1150mAh', 'sanpham/20141030043000blackberry-pearl-3g-9100-black.jpg', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', 'GSM/EDGE/3G', '2005-04-25', 'CÃ²n hÃ ng', 'HÃ ng giÃ¡ ráº»', 'Bluetooth 2.1 with A2DP', 'MP3', 'MP4', '', 'Má»›i 100%'),
('  Má»›i Ä‘Ã¢y, táº¡i triá»ƒn lÃ£m MWC 2014 á»Ÿ Barcelona, CEO cá»§a BlackBerry Ä‘Ã£ giá»›i thiá»‡u sÆ¡ lÆ°á»£c vá» chiáº¿c BlackBerry Q20 Classic, tuy chÆ°a cÃ´ng bá»‘ vá» giÃ¡ bÃ¡n cÅ©ng nhÆ° ngÃ y ra máº¯t, nhÆ°ng vá»›i kiá»ƒu dÃ¡ng bÃ n phÃ­m QWERTY truyá»n thá»‘ng káº¿t há»£p vá»›i mÃ n hÃ¬nh cáº£m á»©ng rá»™ng, BlackBerry Q20 Classic há»©a háº¹n sáº½ káº¿ thá»«a nhá»¯ng truyá»n thá»‘ng Ä‘Ã£ trá»Ÿ thÃ nh sá»©c máº¡nh thÆ°Æ¡ng hiá»‡u cá»§a BlackBerry, cÅ©ng nhÆ° bá»• sung nhá»¯ng cÃ´ng nghá»‡ hiá»‡n Ä‘áº¡i Ä‘á»ƒ Ä‘em láº¡i nhá»¯ng tráº£i nghiá»‡m háº¿t sá»©c thÃº vá»‹ dÃ nh cho ngÆ°á»i dÃ¹ng. CÃ²n Ä‘á»‘i vá»›i nhá»¯ng Fan cá»§a BlackBerry, chiáº¿c BlackBerry Q20 Classic sáº½ mang láº¡i nhá»¯ng cáº£m giÃ¡c khÃ³ táº£ vá» má»™t máº«u smartphone vá»›i nhá»¯ng nÃ©t ráº¥t riÃªng, vá»«a cá»• Ä‘iá»ƒn mÃ  vá»«a hiá»‡n Ä‘áº¡i, vá»«a Ä‘á»™c Ä‘Ã¡o vÃ  máº¡nh máº½.                  	                    ', 30, 'BB.10', 'BLACKBERRY Q20 CLASSIC', '1440 x 1440 pixels, 3.5 inches (~582 ppi) - 16 triá»‡u ', '2 GB', '', 'Dual-core 1.5 GHz', 'BlackBerry 10.3 OS', '16000000', '', '', '', '', 'Wi-Fi 802.11 a/b/g/n, dual-band, DLNA, Wi-Fi hotspot', 'CÃ³', '', 'sanpham/201410310246211111111.jpg', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', 'GSM/3G/4G', '2014-10-10', 'CÃ²n hÃ ng', 'HÃ ng cao cáº¥p', 'v4.0, A2DP, LE', '', '', '', 'Má»›i 100%'),
('BLACKBERRY Q10 GOLD - SPECIAL EDITION CHÃNH HÃƒNG - Äáº¶C BIá»†T VÃ€ KHÃC BIá»†T \r\nBáº¡n muá»‘n thá»ƒ hiá»‡n mÃ¬nh vá»›i Ä‘iá»ƒm nháº¥n lÃ  chiáº¿c Ä‘iá»‡n thoáº¡i, ngÆ°á»i báº¡n Ä‘á»“ng hÃ nh thÃ¢n cáº­n nháº¥t cá»§a táº¥t cáº£ chÃºng ta. BlackBerry khÃ´ng chá»‰ cÃ³ nhá»¯ng dÃ²ng mÃ¡y xa xá»‰ nhÆ° BlackBerry Porsche Design, BlackBerry Q10 Gold Special Edition Ä‘em Ä‘áº¿n cho báº¡n má»™t lá»±a chá»n khÃ¡c, há»£p lÃ½ hÆ¡n trong má»©c giÃ¡ sá»Ÿ há»¯u, nhÆ°ng váº«n cÃ³ nhá»¯ng Ä‘iá»ƒm nháº¥n cáº§n thiáº¿t.\r\nBlackBerry Q10 Gold Special Edition Ä‘Ã£ chÃ­nh thá»©c Ä‘áº¿n Viá»‡t Nam. KhÃ´ng chá»‰ Ä‘áº·c biá»‡t mÃ  cÃ²n Ä‘Æ°á»£c nháº­p vá» VN vá»›i sá»‘ lÆ°á»£ng giá»›i háº¡n - 100 bá»™ trÃªn toÃ n quá»‘c.\r\n\r\n', 32, 'BB.10', 'BLACKBERRY Q10 GOLD', '3.1 inches', '2G RAM', '16 GB', 'Dual-core 1.5 GHz Krait', 'BlackBerry OS 10', '8900000', '119.6 x 66.8 x 10.4 mm', '139g', '8 MP, 3264 x 2448 pixels, autofocus, LED flash', 'Há»— trá»£ tháº» nhá»› lÃªn Ä‘áº¿n 64 GB.', 'Wi-Fi 802.11 a/b/g/n, dual band, Wi-Fi hotspot', 'cÃ³', 'Pin chuáº©n, Li-Ion 2100 mAh', 'sanpham/20141031030201q10-white-gold-160x160.jpg', '18 ThÃ¡ng', 'CÃ³', 'CÃ³', 'Class 10 (4+1/3+2 slots), 32 - 48 kbps/236.8 Kbps', '2014-10-02', 'CÃ²n hÃ ng', 'HÃ ng cao cáº¥p', 'cÃ³', 'AAC, AAC+, MP3, WMA, eAAC+', '3GP, MP4, WMV', 'TBD', 'Má»›i 100%');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idthanhvien` int(11) NOT NULL,
  `ngaydat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fullname` (`idthanhvien`),
  KEY `idthanhvien` (`idthanhvien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `idthanhvien`, `ngaydat`) VALUES
(26, 6, '2014-10-29 15:58:04'),
(28, 7, '2014-10-29 16:09:09'),
(29, 6, '2014-10-30 08:31:12'),
(30, 6, '2014-10-30 08:42:37'),
(31, 6, '2014-10-30 10:26:54'),
(32, 6, '2014-10-30 11:44:55'),
(33, 7, '2014-10-31 13:06:55'),
(34, 7, '2014-10-31 13:26:54'),
(35, 7, '2014-10-31 15:56:22'),
(36, 6, '2014-10-31 15:57:45'),
(37, 6, '2014-10-31 16:02:33'),
(38, 6, '2014-10-31 16:05:01'),
(39, 6, '2014-10-31 16:08:15'),
(40, 6, '2014-10-31 16:10:05'),
(41, 6, '2014-10-31 16:12:39'),
(42, 6, '2014-10-31 16:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `Malienhe` int(11) NOT NULL AUTO_INCREMENT,
  `Hoten` varchar(55) NOT NULL,
  `Tieude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Diachi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(55) NOT NULL,
  `SDT` int(25) NOT NULL,
  `Noidung` varchar(999) NOT NULL,
  PRIMARY KEY (`Malienhe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`Malienhe`, `Hoten`, `Tieude`, `Diachi`, `Email`, `SDT`, `Noidung`) VALUES
(2, 'Huá»³nh Cao NguyÃªn', 'VN sfsf', 'Báº¯c Ninh', 'caonguyen0392@gmail.com', 1657381202, 'sfsfsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphukien`
--

CREATE TABLE IF NOT EXISTS `loaiphukien` (
  `Maphukien` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Loaiphukien` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Maphukien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaiphukien`
--

INSERT INTO `loaiphukien` (`Maphukien`, `Loaiphukien`) VALUES
('PK01', 'Sáº¡c,Dock,CÃ¡p USB'),
('PK02', 'Bao da, Case'),
('PK03', 'MÃ n hÃ¬nh'),
('PK04', 'Náº¯p pin'),
('PK05', 'Keyboard'),
('PK06', 'Tháº» nhá»›');

-- --------------------------------------------------------

--
-- Table structure for table `nhanxet`
--

CREATE TABLE IF NOT EXISTS `nhanxet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsanpham` int(11) NOT NULL,
  `idthanhvien` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idsanpham` (`idsanpham`,`idthanhvien`),
  KEY `idthanhvien` (`idthanhvien`),
  KEY `idsanpham_2` (`idsanpham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nhanxet`
--

INSERT INTO `nhanxet` (`id`, `idsanpham`, `idthanhvien`, `tieude`, `noidung`) VALUES
(1, 11, 6, 'MÃ n hÃ¬nh bá»‹ vÃªnh', 'MÃ n hÃ¬nh  Blackberry Z3 bá»‹ vÃªnh khi Ä‘ang sá»­ dá»¥ng.Vui lÃ²ng kiá»ƒm tra ká»¹ hÃ ng');

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

CREATE TABLE IF NOT EXISTS `quangcao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diachi` varchar(255) NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hinhanh` varchar(255) NOT NULL,
  `loai` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `quangcao`
--

INSERT INTO `quangcao` (`id`, `diachi`, `ngaydang`, `hinhanh`, `loai`) VALUES
(4, 'dauden.vn', '2014-10-29 17:21:13', 'quangcao/20141029062113d2yWK2w.png', 'left'),
(5, 'quang3g.vn', '2014-10-29 17:22:19', 'quangcao/20141029062517r2_b2_playbook_journey_banner.jpg', 'right'),
(6, 'bbviet.com1', '2014-10-29 17:25:41', 'quangcao/20141030102837Blackberry Bold.png', 'left'),
(7, 'dauden.vn', '2014-10-29 17:26:19', 'quangcao/20141029062619BBPassport.jpg', 'Slide'),
(8, 'dauden.vn', '2014-10-29 17:27:26', 'quangcao/20141029062726BBQ10.jpg', 'Slide'),
(9, 'quang3g.vn', '2014-10-29 17:27:46', 'quangcao/20141029062746BBZ30.jpg', 'Slide'),
(11, 'www.quang3g.vn', '2014-10-30 09:22:09', 'quangcao/20141030102209d2yWK2w.png', 'right'),
(12, 'www.Ä‘auen.vn', '2014-10-30 09:22:46', 'quangcao/20141030102246r2_b2_playbook_journey_banner.jpg', 'right');

-- --------------------------------------------------------

--
-- Table structure for table `quantri`
--

CREATE TABLE IF NOT EXISTS `quantri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tendangnhap` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Matkhau` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(55) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(55) NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` varchar(25) NOT NULL,
  `Quyen` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `quantri`
--

INSERT INTO `quantri` (`id`, `Tendangnhap`, `Matkhau`, `fullname`, `Email`, `diachi`, `ngaysinh`, `sdt`, `Quyen`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Huá»³nh Cao NguyÃªn', '', '', '1992-03-13', '0', '1'),
(4, 'Nguyen', '27ff2ffe376b2edcc7c2de309173f0d8', 'Trá»‹nh VÄƒn NguyÃªn', 'nguyen47@gmail.com', 'ÄÄƒk LÄƒk', '1970-01-01', '0987654322', '2'),
(7, 'LeAnh', '1041986a1866a944effa7ea0750485a3', 'LÃª Sá»¹ Tuáº¥n Anh', 'tuananh@gmail.com', 'Háº£i DÆ°Æ¡ng', '1993-07-27', '01663636890', '3'),
(8, 'Vangiap', '1041986a1866a944effa7ea0750485a3', 'Tráº§n VÄƒn GiÃ¡p', 'vangiap@gmail.com', 'Thanh HÃ³a', '1989-06-12', '0987654321', '4'),
(9, 'ngoctu', '1041986a1866a944effa7ea0750485a3', 'ÄoÃ n Ngá»c TÃº', 'tu@gmail.com', 'SÆ¡n La', '1993-07-12', '0188441675', '5'),
(10, 'dinhtri', '1041986a1866a944effa7ea0750485a3', 'LÃª ÄÃ¬nh TrÃ­', 'tri@gmail.com', 'BÃ¬nh Thuáº­n', '1993-04-03', '01677890234', '6');

-- --------------------------------------------------------

--
-- Table structure for table `tbldongsanpham`
--

CREATE TABLE IF NOT EXISTS `tbldongsanpham` (
  `Madong` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Tendong` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Madong`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldongsanpham`
--

INSERT INTO `tbldongsanpham` (`Madong`, `Tendong`) VALUES
('BB.10', 'Blackberry 10'),
('BB.8700', 'Blackberry  87 Series'),
('BB.8800', 'Blackberry 88 Series'),
('BB.B', 'Blackberry Bold'),
('BB.C', 'Blackberry Curve'),
('BB.P', 'Blackberry Pearl'),
('BB.S', 'Blackberry Storm'),
('BB.T', 'Blackberry Torch'),
('PB', 'PlayBook');

-- --------------------------------------------------------

--
-- Table structure for table `tbltintuc`
--

CREATE TABLE IF NOT EXISTS `tbltintuc` (
  `MaTinTuc` int(11) NOT NULL AUTO_INCREMENT,
  `TieuDe` longtext CHARACTER SET utf8,
  `TomTat` longtext CHARACTER SET utf8,
  `NoiDung` longtext CHARACTER SET utf8,
  `NgayDangTin` date DEFAULT NULL,
  `TacGia` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `HinhAnh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`MaTinTuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbltintuc`
--

INSERT INTO `tbltintuc` (`MaTinTuc`, `TieuDe`, `TomTat`, `NoiDung`, `NgayDangTin`, `TacGia`, `HinhAnh`) VALUES
(8, 'BlackBerry & Suy nghÄ© má»›i nháº±m tÃ¬m kiáº¿m lá»±a chá»n tÃ­ch cá»±c hÆ¡n', '<p><span>Trong 2 ng&agrave;y qua, Ä‘&atilde; c&oacute; má»™t sá»‘ b&agrave;i Ä‘Äƒng vá» viá»‡c liá»‡u BlackBerry c&oacute; thá»ƒ trá»Ÿ th&agrave;nh c&ocirc;ng ty tÆ° nh&acirc;n hay kh&ocirc;ng? (Xem th&ecirc;m theo link á»Ÿ cuá»‘i b&agrave;i). Má»™t trong nhá»¯ng l&yacute; do dáº«n Ä‘áº¿n láº­p...</span></p>', '<p style="text-align: center;"><img style="font-size: 10px;" src="http://cdn.blackberryvietnam.net/attachments/blackberry-logo-jpg.18984/" border="0" alt="[IMG]" /></p>\r\n<p><span style="white-space: pre;"> </span>Trong 2 ng&agrave;y qua, Ä‘&atilde; c&oacute; má»™t sá»‘ b&agrave;i Ä‘Äƒng vá» viá»‡c liá»‡u BlackBerry c&oacute; thá»ƒ trá»Ÿ th&agrave;nh c&ocirc;ng ty tÆ° nh&acirc;n hay kh&ocirc;ng? (Xem th&ecirc;m theo link á»Ÿ cuá»‘i b&agrave;i). Má»™t trong nhá»¯ng l&yacute; do dáº«n Ä‘áº¿n láº­p luáº­n Ä‘&oacute; l&agrave; Ä‘á»ƒ cáº£i thiá»‡n t&igrave;nh h&igrave;nh t&agrave;i ch&iacute;nh Ä‘á»“ng thá»i giá»¯ vá»¯ng c&ocirc;ng ty Ä‘á»ƒ tiáº¿p tá»¥c cáº¡nh tranh vá»›i c&aacute;c nh&agrave; sáº£n xuáº¥t Ä‘iá»‡n thoáº¡i th&ocirc;ng minh kh&aacute;c v&agrave; t&igrave;m kiáº¿m cÆ¡ há»™i l&agrave;m sá»‘ng láº¡i nhá»¯ng th&agrave;nh c&ocirc;ng m&agrave; há» c&oacute; Ä‘Æ°á»£c trong qu&aacute; khá»©.&nbsp;<br /><br /><span style="white-space: pre;"> </span>BB10 á»Ÿ th&igrave; hiá»‡n táº¡i chÆ°a thá»ƒ gi&uacute;p BlackBerry trá»Ÿ láº¡i vá»›i nhá»¯ng g&igrave; há» tá»«ng c&oacute; tr&ecirc;n thá»‹ trÆ°á»ng smartphone trong khi cá»• phiáº¿u c&ocirc;ng ty tiáº¿p tá»¥c giáº£m 19% trong nÄƒm nay c&ograve;n gi&aacute; trá»‹ thá»‹ trÆ°á»ng giáº£m xuá»‘ng 4,8 tá»‰ USD tá»« Ä‘á»‰nh cao 84 tá»‰ USD v&agrave;o nÄƒm 2008. N&oacute;i c&aacute;ch kh&aacute;c th&igrave; t&igrave;nh h&igrave;nh váº«n chÆ°a trá»Ÿ n&ecirc;n kháº£ quan vá»›i h&atilde;ng Ä‘iá»‡n thoáº¡i Ä‘áº¿n tá»« Canada n&agrave;y, tháº­m ch&iacute; Reuters tiáº¿t lá»™ l&atilde;nh Ä‘áº¡o cao cáº¥p cá»§a h&atilde;ng Ä‘ang t&iacute;nh tá»›i kháº£ nÄƒng biáº¿n BlackBerry th&agrave;nh c&ocirc;ng ty tÆ° nh&acirc;n, tÆ°Æ¡ng tá»± nhÆ° c&aacute;ch Dell Ä‘&atilde; tá»«ng l&agrave;m.<br /><br /><span style="white-space: pre;"> </span>Ä&acirc;y kh&ocirc;ng pháº£i biá»‡n ph&aacute;p duy nháº¥t m&agrave; ban l&atilde;nh Ä‘áº¡o BlackBerry Ä‘á» xuáº¥t Ä‘á»ƒ cá»©u c&ocirc;ng ty, truá»›c Ä‘&oacute; há» tá»«ng nghÄ© tá»›i kháº£ nÄƒng cáº¥p ph&eacute;p sá»­ dá»¥ng BlackBerry 10 cho h&atilde;ng thá»© ba hoáº·c li&ecirc;n káº¿t vá»›i má»™t Ä‘á»‘i t&aacute;c n&agrave;o Ä‘&oacute; nhÆ°ng Ä‘&acirc;y Ä‘Æ°á»£c cho l&agrave; c&aacute;ch há»¯u hiá»‡u nháº¥t bá»Ÿi BlackBerry Ä‘ang náº¯m trong tay ná»n táº£ng QNX, má»™t ná»n táº£ng c&oacute; thá»ƒ ph&aacute;t triá»ƒn rá»™ng ráº£i trong nhiá»u lÄ©nh vá»±c, Ä‘áº·c biá»‡t l&agrave; trong ng&agrave;nh c&ocirc;ng nghiá»‡p &ocirc; t&ocirc; v&agrave; tá»± Ä‘á»™ng ho&aacute;.<br /><br /><span style="white-space: pre;"> </span>Theo má»™t sá»‘ nguá»“n tin th&acirc;n cáº­n th&igrave; BlackBerry Ä‘&atilde; tháº£o luáº­n vá»›i&nbsp;<strong>S</strong>ilver Lake Partners - Ä‘Æ¡n vá»‹ gi&uacute;p Dell ráº¥t nhiá»u trong qu&aacute; tr&igrave;nh biáº¿n Dell th&agrave;nh c&ocirc;ng ty tÆ° nh&acirc;n - vá» kháº£ nÄƒng há»£p t&aacute;c tr&ecirc;n thá»‹ trÆ°á»ng m&aacute;y t&iacute;nh doanh nghiá»‡p. Silver Lake Partners tá»«ng bá» ra 25 tá»‰ USD Ä‘á»ƒ mua cá»• phiáº¿u cá»§a Dell v&agrave; náº¿u nhÆ° BlackBerry quyáº¿t Ä‘á»‹nh má»Ÿ cá»­a Ä‘&oacute;n c&ocirc;ng ty tÆ° nh&acirc;n th&igrave; Silver Lake Partners sáº½ thá»±c hiá»‡n Ä‘iá»u tÆ°Æ¡ng tá»± nhÆ° há» Ä‘&atilde; l&agrave;m vá»›i Dell. Ráº¥t nhiá»u kháº£ nÄƒng c&oacute; thá»ƒ Silver Lake Partners há»£p t&aacute;c vá»›i BlackBerry trong Ä‘iá»‡n to&aacute;n di Ä‘á»™ng, viá»‡c m&agrave; c&aacute;c nh&agrave; sáº£n xuáº¥t m&aacute;y t&iacute;nh Ä‘&atilde; pháº£i váº­t lá»™n Ä‘á»ƒ Ä‘áº¡t Ä‘Æ°á»£c.<br /><br /><span style="white-space: pre;"> </span>Äá»ƒ trá»Ÿ th&agrave;nh c&ocirc;ng ty tÆ° nh&acirc;n Ä‘á»“ng nghÄ©a c&ocirc;ng ty Ä‘&oacute; kh&ocirc;ng c&ograve;n t&ecirc;n tr&ecirc;n thá»‹ trÆ°á»ng chá»©ng kho&aacute;n. Há» pháº£i tráº£ tiá»n cá»• phiáº¿u cho c&aacute;c cá»• Ä‘&ocirc;ng Ä‘á»ƒ cá»• Ä‘&ocirc;ng r&uacute;t khá»i c&ocirc;ng ty v&agrave; v&ocirc; hiá»‡u h&oacute;a quyá»n lá»±c cá»§a c&aacute;c cá»• Ä‘&ocirc;ng, khi Ä‘&oacute; Ä‘Æ°á»£c coi l&agrave; c&ocirc;ng ty tÆ° nh&acirc;n. Khi má»™t c&ocirc;ng ty trá»Ÿ n&ecirc;n kh&oacute; khÄƒn th&igrave; viá»‡c trá»Ÿ th&agrave;nh c&ocirc;ng ty tÆ° nh&acirc;n l&agrave; má»™t giáº£i ph&aacute;p tá»‘t gi&uacute;p há» tr&aacute;nh khá»i &aacute;p lá»±c tá»« c&aacute;c cá»• Ä‘&ocirc;ng v&agrave; dÆ° luáº­n.<br /><br /><span style="white-space: pre;"> </span>Th&aacute;ng trÆ°á»›c, CEO cá»§a BlackBerry - &ocirc;ng Thorsten Heins cho biáº¿t c&ocirc;ng ty Ä‘&atilde; Ä‘i Ä‘&uacute;ng hÆ°á»›ng v&agrave; chá»‰ cáº§n th&ecirc;m thá»i gian Ä‘á»ƒ giáº£i quyáº¿t c&aacute;c váº¥n Ä‘á». &Ocirc;ng cho biáº¿t c&ocirc;ng ty sáº½ c&ocirc;ng bá»‘ th&ecirc;m c&aacute;c thiáº¿t bá»‹ cháº¡y tr&ecirc;n há»‡ Ä‘iá»u h&agrave;nh BlackBerry 10 trong 08 th&aacute;ng tá»›i. BlackBerry Ä‘ang Ä‘áº·t niá»m tin ráº¥t nhiá»u v&agrave;o BlackBerry 10.<br /><br />Sá»± cá»Ÿi má»Ÿ cá»§a BlackBerry trong viá»‡c t&igrave;m kiáº¿m v&agrave; xem x&eacute;t c&aacute;c thá»a thuáº­n Ä‘&aacute;nh dáº¥u má»™t sá»± thay Ä‘á»•i cÄƒn báº£n trong suy nghÄ© cá»§a nh&agrave; sáº£n xuáº¥t Ä‘iá»‡n thoáº¡i th&ocirc;ng minh vá»‘n Ä‘Æ°á»£c cho l&agrave; "cá»• há»§" n&agrave;y. BlackBerry trÆ°á»›c Ä‘&acirc;y gá»i l&agrave; Research in Motion Ä‘&atilde; ráº¥t th&agrave;nh c&ocirc;ng trong viá»‡c cung cáº¥p t&iacute;nh nÄƒng email báº£o máº­t tr&ecirc;n c&aacute;c thiáº¿t bá»‹ cáº§m tay, giá» Ä‘&acirc;y Ä‘á»ƒ c&ocirc;ng ty kh&ocirc;i phá»¥c láº¡i thá»i ho&agrave;ng kim th&igrave; nhá»¯ng ngÆ°á»i giá»¯ vai tr&ograve; l&atilde;nh Ä‘áº¡o pháº£i l&agrave;m viá»‡c nhiá»u hÆ¡n ná»¯a v&agrave; Ä‘Æ°a ra c&aacute;c quyáº¿t Ä‘á»‹nh thá»±c sá»± s&aacute;ng suá»‘t, viá»‡c ra máº¯t BlackBerry 10 l&agrave; má»™t dáº¥u má»‘c quan trá»ng cá»§a BlackBerry nhÆ°ng Ä‘iá»u n&agrave;y váº«n chÆ°a Ä‘á»§ Ä‘á»ƒ c&ocirc;ng ty n&agrave;y kh&ocirc;i phá»¥c.<br /><br /><span style="white-space: pre;"> </span>BlackBerry sáº½ c&ograve;n ph&aacute;t triá»ƒn ráº¥t máº¡nh, tháº­m ch&iacute; Ä‘&aacute;nh báº¡i thá»i ho&agrave;ng kim cá»§a há», bá»Ÿi QNX l&agrave; má»™t ná»n táº£ng Ä‘áº§y t&igrave;m áº©n. Quan trá»ng l&agrave; há» pháº£i biáº¿t m&igrave;nh n&ecirc;n l&agrave;m Ä‘iá»u Ä‘&oacute; nhÆ° tháº¿ n&agrave;o.</p>\r\n<p><span><br /></span></p>', '2014-01-01', 'Admin', 'baiviet/20141012043828Baiviet02.jpg'),
(11, '16 sá»± kiá»‡n thÃº vá»‹ vá» BlackBerry!', '<p><span>Blackberry Ä‘&atilde; tá»«ng thá»‘ng trá»‹ tháº¿ giá»›i trong lÄ©nh vá»±c smartphone trong má»™t thá»i gian d&agrave;i. NhÆ°ng vá»›i nhá»¯ng th&aacute;ch thá»©c gáº§n Ä‘&acirc;y tá»« IPhone &amp; Android, tÆ°Æ¡ng lai l&agrave; Windows Phone Ä‘ang dáº§n Ä‘áº©y BlackBerry Ä‘i sau tr&ecirc;n thá»‹ trÆ°á»ng smartphone Liá»‡u BB10 c&oacute; gi&uacute;p BlackBerry vÆ°á»£t qua Ä‘Æ°á»£c thá»i ká»³ khá» khÄƒn nháº¥t n&agrave;y hay BlackBerry sáº½ trá»Ÿ l&ecirc;n lá»—i thá»i? C&oacute; láº½ ', '<p><img class="bbCodeImage LbImage" src="http://media.bbvietnam.com/images/neversayno/dbImage_banner.jpg" alt="[â€‹IMG]" />â€‹<span>Blackberry Ä‘&atilde; tá»«ng thá»‘ng trá»‹ tháº¿ giá»›i trong lÄ©nh vá»±c smartphone trong má»™t thá»i gian d&agrave;i. NhÆ°ng vá»›i nhá»¯ng th&aacute;ch thá»©c gáº§n Ä‘&acirc;y tá»« IPhone &amp; Android, tÆ°Æ¡ng lai l&agrave; Windows Phone Ä‘ang dáº§n Ä‘áº©y BlackBerry Ä‘i sau tr&ecirc;n thá»‹ trÆ°á»ng smartphone Liá»‡u BB10 c&oacute; gi&uacute;p BlackBerry vÆ°á»£t qua Ä‘Æ°á»£c thá»i ká»³ khá» khÄƒn nháº¥t n&agrave;y hay BlackBerry sáº½ trá»Ÿ l&ecirc;n lá»—i thá»i? C&oacute; láº½ l&agrave; kh&ocirc;ng, dÆ°á»›i Ä‘&acirc;y l&agrave; 16 sá»± kiá»‡n th&uacute; vá»‹ vá» BlackBerry sáº½ gi&uacute;p ch&uacute;ng ta biáº¿t th&ecirc;m vá» BlackBerry</span><br /><br /><br />\r\n<div><img class="bbCodeImage LbImage" src="http://media.bbvietnam.com/images/neversayno/dbImage_Viet.jpg" alt="[â€‹IMG]" />â€‹</div>\r\n</p>', '2014-10-02', 'Admin', 'baiviet/20141030081032dbImage_banner.jpg'),
(12, 'Cáº£nh bÃ¡o tá»« BlackBerry vá» Z10 khÃ´ng rÃµ nguá»“n gá»‘c táº¡i Viá»‡t Nam', '<p><span>NhÆ° th&ocirc;ng tin BBVietnam Ä‘&atilde; Ä‘Æ°a trong topic "</span><a class="internalLink" href="http://bbvietnam.com/threads/35028/">Táº¡m biá»‡t BlackBerry Z10, chiáº¿n binh Ä‘&atilde; ho&agrave;n th&agrave;nh nhiá»‡m vá»¥</a><span>", h&ocirc;m 10/7, Ä‘áº¡i diá»‡n&nbsp;</span>BlackBerry<span>&nbsp;khu vá»±c Ä&ocirc;ng DÆ°Æ¡ng Ä‘&atilde; ch&iacute;nh thá»©c c&ocirc;ng bá»‘ BlackBerry Ä‘&atilde; ngá»«ng cung á»©ng sáº£n pháº©m BlackBerry&nbsp;</span>Z10<span>&nbsp;tr&ecirc;n to&agrave', '<p><img class="bbCodeImage LbImage" src="http://media.bbvietnam.com/images/vnbb/BB_Balance.jpg" alt="[â€‹IMG]" />&nbsp;â€‹<br />NhÆ° th&ocirc;ng tin BBVietnam Ä‘&atilde; Ä‘Æ°a trong topic "<a class="internalLink" href="http://bbvietnam.com/threads/35028/">Táº¡m biá»‡t BlackBerry Z10, chiáº¿n binh Ä‘&atilde; ho&agrave;n th&agrave;nh nhiá»‡m vá»¥</a>", h&ocirc;m 10/7, Ä‘áº¡i diá»‡n&nbsp;BlackBerry&nbsp;khu vá»±c Ä&ocirc;ng DÆ°Æ¡ng Ä‘&atilde; ch&iacute;nh thá»©c c&ocirc;ng bá»‘ BlackBerry Ä‘&atilde; ngá»«ng cung á»©ng sáº£n pháº©m BlackBerry&nbsp;Z10&nbsp;tr&ecirc;n to&agrave;n Viá»‡t Nam.<br /><br />Theo ná»™i dung th&ocirc;ng c&aacute;o, BlackBerry Z10 Ä‘Æ°á»£c xem l&agrave; Ä‘&atilde; ho&agrave;n th&agrave;nh nhiá»‡m vá»¥ mang Ä‘áº¿n cho ngÆ°á»i sá»­ dá»¥ng má»™t tráº£i nghiá»‡m má»›i vá» ná»n táº£ng há»‡ Ä‘iá»u h&agrave;nh BlackBerry10. Äá»ƒ tiáº¿p tá»¥c sá»© má»‡nh n&agrave;y, tá»« 1/7/2014, h&atilde;ng Ä‘&atilde; cho ra máº¯t BlackBerry Z3 vá»›i cháº¥t lÆ°á»£ng ti&ecirc;u chuáº©n cá»§a BlackBerry Ä‘á»ƒ Ä‘áº£m báº£o tráº£i nghiá»‡m BlackBerry10, Ä‘á»“ng thá»i n&acirc;ng cáº¥p vá» k&iacute;ch thÆ°á»›c m&agrave;n h&igrave;nh v&agrave; thá»i lÆ°á»£ng pin.<br /><br />Th&ocirc;ng c&aacute;o cá»§a BlackBerry nháº¥n máº¡nh: "Hiá»‡n nay, theo quan s&aacute;t cá»§a ch&uacute;ng t&ocirc;i, viá»‡c kinh doanh h&agrave;ng BlackBerry Z10 kh&ocirc;ng ch&iacute;nh h&atilde;ng cá»§a c&aacute;c Ä‘áº¡i l&yacute; táº¡i Viá»‡t Nam Ä‘ang táº¡o ra nhá»¯ng nguy cÆ¡ kh&ocirc;ng thá»ƒ kiá»ƒm so&aacute;t nhÆ° sau:<br /><br />1. Cháº¥t lÆ°á»£ng h&agrave;ng&nbsp;x&aacute;ch tay&nbsp;kh&ocirc;ng Ä‘Æ°á»£c kiá»ƒm chá»©ng hay báº£o Ä‘áº£m g&acirc;y bá»©c x&uacute;c cho ngÆ°á»i d&ugrave;ng (th&ocirc;ng qua ráº¥t nhiá»u pháº£n &aacute;nh vá» cháº¥t lÆ°á»£ng h&agrave;ng h&oacute;a tá»« c&aacute;c cá»™ng Ä‘á»“ng máº¡ng), áº£nh hÆ°á»Ÿng nghi&ecirc;m trá»ng tá»›i thÆ°Æ¡ng hiá»‡u BlackBerry v&agrave; thÆ°Æ¡ng hiá»‡u cá»§a Qu&yacute; Ä‘áº¡i l&yacute;.,<br /><br />2. L&atilde;ng ph&iacute; cÆ¡ há»™i b&aacute;n h&agrave;ng BlackBerry Z3 v&agrave; ng&acirc;n s&aacute;ch truyá»n th&ocirc;ng, v&igrave; th&aacute;ng 7 l&agrave; thá»i gian BlackBerry, nh&agrave; ph&acirc;n phá»‘i v&agrave; Qu&yacute; Ä‘áº¡i l&yacute; táº­p trung truyá»n th&ocirc;ng v&agrave; b&aacute;n h&agrave;ng máº¡nh cho sáº£n pháº©m n&agrave;y.<br /><br />Vá»›i c&aacute;c há»‡ lá»¥y n&ecirc;u tr&ecirc;n, ch&uacute;ng t&ocirc;i kháº©n thiáº¿t k&iacute;nh Ä‘á» nghá»‹ Qu&yacute; Ä‘áº¡i l&yacute; háº¡n cháº¿ tá»‘i Ä‘a viá»‡c kinh doanh h&agrave;ng BlackBerry Z10 kh&ocirc;ng r&otilde; nguá»“n gá»‘c, phá»‘i há»£p vá»›i BlackBerry, nh&agrave; ph&acirc;n phá»‘i trong viá»‡c b&aacute;n sáº£n pháº©m ch&iacute;nh h&atilde;ng Ä‘á»ƒ vá»«a Ä‘áº£m báº£o uy t&iacute;n, vá»«a Ä‘áº£m báº£o lá»£i &iacute;ch kinh doanh.<br /><br />Ch&uacute;ng t&ocirc;i coi viá»‡c cam káº¿t kh&ocirc;ng kinh doanh h&agrave;ng BlackBerry kh&ocirc;ng r&otilde; nguá»“n gá»‘c l&agrave; sá»± á»§ng há»™ nhiá»‡t th&agrave;nh cá»§a Qu&yacute; Ä‘áº¡i l&yacute; vá»›i sá»± ph&aacute;t triá»ƒn cá»§a BlackBerry táº¡i Viá»‡t Nam."</p>', '2014-10-04', 'Admin', 'baiviet/20141030081642BB_Balance.jpg'),
(13, 'BlackBerry Ä‘Ã£ hoÃ n táº¥t quÃ¡ trÃ¬nh tÃ¡i cÆ¡ cáº¥u cÃ´ng ty, chuyá»ƒn sang giai Ä‘oáº¡n á»•n Ä‘á»‹nh vÃ  phÃ¡t triá»ƒn', '<p><span>Theo th&ocirc;ng tin trang Reuters c&oacute; Ä‘Æ°á»£c th&igrave;&nbsp;</span>BlackBerry<span>&nbsp;Ä‘&atilde; káº¿t th&uacute;c qu&aacute; tr&igrave;nh dá»‹ch chuyá»ƒn cÆ¡ cáº¥u Ä‘áº§y kh&oacute; khÄƒn v&agrave; k&eacute;o d&agrave;i suá»‘t thá»i gian qua Ä‘á»ƒ báº¯t Ä‘áº§u má»™t qu&aacute; tr&igrave;nh ph&aacute;t triá»ƒn má»›i. CEO&nbsp;</span>John Chen<span>&nbsp;Ä‘&atilde; c&oacute; má»™t th&ocirc;ng b&aacute;o ná»™i bá»™ tá»›i to&agrave;n thá»ƒ c&aacute;n bá»™ nh&acirc;n vi&ecirc;', '<p><img class="bbCodeImage LbImage" src="https://bbvnmedia.files.wordpress.com/2014/08/jc.jpg" alt="[â€‹IMG]" />â€‹<br /><span>Theo th&ocirc;ng tin trang Reuters c&oacute; Ä‘Æ°á»£c th&igrave;&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/blackberry/" target="_blank">BlackBerry</a><span>&nbsp;Ä‘&atilde; káº¿t th&uacute;c qu&aacute; tr&igrave;nh dá»‹ch chuyá»ƒn cÆ¡ cáº¥u Ä‘áº§y kh&oacute; khÄƒn v&agrave; k&eacute;o d&agrave;i suá»‘t thá»i gian qua Ä‘á»ƒ báº¯t Ä‘áº§u má»™t qu&aacute; tr&igrave;nh ph&aacute;t triá»ƒn má»›i. CEO&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/john+chen/" target="_blank">John Chen</a><span>&nbsp;Ä‘&atilde; c&oacute; má»™t th&ocirc;ng b&aacute;o ná»™i bá»™ tá»›i to&agrave;n thá»ƒ c&aacute;n bá»™ nh&acirc;n vi&ecirc;n BlackBerry: "</span><em>Ch&uacute;ng ta Ä‘&atilde; ho&agrave;n táº¥t qu&aacute; tr&igrave;nh t&aacute;i cÆ¡ cáº¥u v&agrave; tinh giáº£m lá»±c lÆ°á»£ng lao Ä‘á»™ng k&eacute;o d&agrave;i trong 3 nÄƒm qua</em><span>".</span><br /><br /><span>Chen Ä‘&atilde; Ä‘&iacute;ch th&acirc;n cáº£m Æ¡n nhá»¯ng ngÆ°á»i Ä‘&atilde; á»Ÿ láº¡i vá»›i c&ocirc;ng ty v&agrave; n&oacute;i th&ecirc;m:</span><br />\r\n<div class="bbCodeBlock bbCodeQuote">\r\n<blockquote class="quoteContainer">\r\n<div class="quote">Quan trá»ng hÆ¡n, trá»« khi xáº£y ra c&aacute;c suy tho&aacute;i báº¥t ngá» tr&ecirc;n thá»‹ trÆ°á»ng, ch&uacute;ng ta sáº½ bá»• sung th&ecirc;m nh&acirc;n vi&ecirc;n trong má»™t sá»‘ lÄ©nh vá»±c nhÆ° ph&aacute;t triá»ƒn sáº£n pháº©m, b&aacute;n h&agrave;ng v&agrave; dá»‹ch vá»¥ kh&aacute;ch h&agrave;ng, báº¯t Ä‘áº§u tá»« con sá»‘ khi&ecirc;m tá»‘n.</div>\r\n</blockquote>\r\n</div>\r\n<span>BlackBerry Ä‘&atilde; giáº£m lá»±c lÆ°á»£ng lao Ä‘á»™ng cá»§a m&igrave;nh khoáº£ng 60 pháº§n trÄƒm trong ba nÄƒm qua Ä‘á»ƒ cá»‘ gáº¯ng cáº¯t giáº£m chi ph&iacute; v&agrave; t&aacute;i cÆ¡ cáº¥u láº¡i c&ocirc;ng ty. C&ocirc;ng ty má»™t thá»i thá»‘ng trá»‹ thá»‹ trÆ°á»ng Ä‘iá»‡n thoáº¡i th&ocirc;ng minh Ä‘&atilde; chá»©ng kiáº¿n doanh sá»‘ b&aacute;n h&agrave;ng bá»‹ giáº£m Ä‘&aacute;ng ká»ƒ trong bá»‘n nÄƒm qua bá»Ÿi iPhone cá»§a Apple v&agrave; má»™t loáº¡t c&aacute;c thiáº¿t bá»‹ Ä‘Æ°á»£c há»— trá»£ bá»Ÿi há»‡ Ä‘iá»u h&agrave;nh Android cá»§a Google.</span><br /><br /><span>Chen, ngÆ°á»i Ä‘&atilde; náº¯m quyá»n táº¡i BlackBerry khoáº£ng 8 th&aacute;ng trÆ°á»›c, Ä‘&atilde; nhanh ch&oacute;ng Ä‘em Ä‘áº¿n sá»± á»•n Ä‘á»‹nh cho c&ocirc;ng ty báº±ng c&aacute;ch b&aacute;n c&aacute;c t&agrave;i sáº£n kh&ocirc;ng pháº£i cá»‘t l&otilde;i, há»£p t&aacute;c Ä‘á»ƒ thá»±c hiá»‡n sáº£n xuáº¥t v&agrave; chuá»—i cung á»©ng cá»§a c&ocirc;ng ty hiá»‡u quáº£ hÆ¡n v&agrave; n&acirc;ng cao lÆ°á»£ng tiá»n máº·t th&ocirc;ng qua viá»‡c b&aacute;n má»™t sá»‘ báº¥t Ä‘á»™ng sáº£n táº¡i Waterloo, Ontario.</span><br /><br /><span>Chen, má»™t ngÆ°á»i Ä‘Æ°á»£c biáº¿t Ä‘áº¿n nhÆ° l&agrave; má»™t nghá»‡ sÄ© c&oacute; thá»ƒ thay Ä‘á»•i cá»¥c diá»‡n trong lÄ©nh vá»±c c&ocirc;ng nghá»‡ cao, dá»± kiáº¿n c&ocirc;ng ty váº«n l&agrave; má»™t Ä‘á»‘i thá»§ cáº¡nh tranh trong lÄ©nh vá»±c Ä‘iá»‡n thoáº¡i th&ocirc;ng minh, nhÆ°ng táº­p trung v&agrave;o viá»‡c Ä‘á»‹nh h&igrave;nh láº¡i c&ocirc;ng ty Ä‘á»ƒ x&acirc;y dá»±ng v&agrave; ph&aacute;t triá»ƒn tr&ecirc;n sá»©c máº¡nh cá»‘t l&otilde;i cá»§a m&igrave;nh trong c&aacute;c lÄ©nh vá»±c nhÆ° báº£o máº­t dá»¯ liá»‡u di Ä‘á»™ng v&agrave; quáº£n l&yacute; thiáº¿t bá»‹ di Ä‘á»™ng.</span><br /><br /><span>Trong báº£n th&ocirc;ng b&aacute;o, Chen n&oacute;i vá»›i c&aacute;c nh&acirc;n vi&ecirc;n ráº±ng &ocirc;ng tin ráº±ng BlackBerry hiá»‡n táº¡i Ä‘ang á»•n Ä‘á»‹nh tr&ecirc;n con Ä‘Æ°á»ng cá»§a m&igrave;nh Ä‘á»ƒ phá»¥c há»“i v&agrave; &ocirc;ng tin tÆ°á»Ÿng c&ocirc;ng ty sáº½ Ä‘áº¡t Ä‘Æ°á»£c má»¥c ti&ecirc;u c&oacute; l&atilde;i v&agrave;o cuá»‘i nÄƒm t&agrave;i ch&iacute;nh hiá»‡n h&agrave;nh.</span><br /><br /><span>&Ocirc;ng cÅ©ng lÆ°u &yacute; BlackBerry hiá»‡n Ä‘ang á»Ÿ má»™t vá»‹ tháº¿ Ä‘á»ƒ thá»±c hiá»‡n chiáº¿n lÆ°á»£c mua láº¡i c&aacute;c c&ocirc;ng ty kh&aacute;c Ä‘á»ƒ tÄƒng cÆ°á»ng lÄ©nh vá»±c c&oacute; kháº£ nÄƒng th&uacute;c Ä‘áº©y tÄƒng trÆ°á»Ÿng doanh thu trong tÆ°Æ¡ng lai.</span><br /><br /><span>Tuáº§n trÆ°á»›c, BlackBerry Ä‘&atilde; c&ocirc;ng bá»‘ má»™t viá»‡c nhÆ° váº­y vá»›i má»™t thá»a thuáº­n mua láº¡i Secusmart, má»™t c&ocirc;ng ty cá»§a Äá»©c chuy&ecirc;n vá» m&atilde; h&oacute;a dá»¯ liá»‡u v&agrave; giá»ng n&oacute;i. Thá»a thuáº­n n&agrave;y dá»± kiáº¿n sáº½ Ä‘&aacute;nh b&oacute;ng t&ecirc;n tuá»•i cá»§a BlackBerry vá»›i má»™t sá»‘ kh&aacute;ch h&agrave;ng c&oacute; &yacute; thá»©c báº£o máº­t cao giá»‘ng nhÆ° c&aacute;c cÆ¡ quan ch&iacute;nh phá»§.</span><br /><br /><span>Chen, ngÆ°á»i ná»•i tiáº¿ng v&igrave; Ä‘&atilde; kh&ocirc;i phá»¥c láº¡i c&ocirc;ng ty pháº§n má»m doanh nghiá»‡p Sybase Inc v&agrave;o cuá»‘i nÄƒm 1990, n&oacute;i vá»›i nh&acirc;n vi&ecirc;n trong c&aacute;c báº£n th&ocirc;ng b&aacute;o ráº±ng &ocirc;ng tin tÆ°á»Ÿng BlackBerry hiá»‡n nay c&oacute; tá»• chá»©c v&agrave; Ä‘á»™i ngÅ© nh&acirc;n vi&ecirc;n ph&ugrave; há»£p Ä‘á»ƒ thá»±c hiá»‡n chiáº¿n lÆ°á»£c kinh doanh cá»§a m&igrave;nh.</span><br /><br /><span>Chen nháº¥n máº¡nh trong báº£n th&ocirc;ng b&aacute;o "</span><em>kh&ocirc;ng c&oacute; chá»— cho nhá»¯ng sai láº§m Ä‘á»ƒ ho&agrave;n th&agrave;nh bÆ°á»›c ngoáº·t gi&uacute;p BlackBerry th&agrave;nh c&ocirc;ng</em><span>", v&agrave; &ocirc;ng k&ecirc;u gá»i nh&acirc;n vi&ecirc;n tiáº¿p tá»¥c táº­p trung Ä‘á»ƒ c&ocirc;ng ty ph&aacute;t h&agrave;nh má»™t báº£n n&acirc;ng cáº¥p cho há»‡ thá»‘ng quáº£n l&yacute; thiáº¿t bá»‹ (BES12) v&agrave; c&aacute;c thiáº¿t bá»‹ má»›i Passport v&agrave; Classic v&agrave;o m&ugrave;a thu n&agrave;y.</span></p>', '2014-10-05', 'Admin', 'baiviet/20141030082059jc.jpg'),
(15, 'ThÃ¡ng 11 sÃ´i Ä‘á»™ng cá»§a cá»™ng Ä‘á»“ng BlackBerry', '<p><span>Táº¥t cáº£ ch&uacute;ng ta Ä‘á»u nghÄ© ráº±ng th&aacute;ng 9 l&agrave; má»™t th&aacute;ng Ä‘áº§y s&ocirc;i Ä‘á»™ng cá»§a cá»™ng Ä‘á»“ng BlackBerry, vá»›i sá»± ra máº¯t cá»§a Passport Ä‘&igrave;nh Ä‘&aacute;m v&agrave; Khan sang trá»ng..</span></p>', '<p><img class="bbCodeImage LbImage" src="https://bbvnmedia.files.wordpress.com/2014/10/bb10-2014.jpg" alt="[â€‹IMG]" />â€‹<br /><span>Táº¥t cáº£ ch&uacute;ng ta Ä‘á»u nghÄ© ráº±ng th&aacute;ng 9 l&agrave; má»™t th&aacute;ng Ä‘áº§y s&ocirc;i Ä‘á»™ng cá»§a cá»™ng Ä‘á»“ng BlackBerry, vá»›i sá»± ra máº¯t cá»§a Passport Ä‘&igrave;nh Ä‘&aacute;m v&agrave; Khan sang trá»ng. NhÆ°ng c&oacute; láº½ ch&uacute;ng ta Ä‘&atilde; nháº§m náº¿u, chá»‰ l&agrave; náº¿u theo nhá»¯ng tin tá»©c r&ograve; rá»‰ má»›i nháº¥t tá»« #Teamblackberry, má»™t loáº¡t c&aacute;c sá»± kiá»‡n quan trá»ng v&agrave; Ä‘Æ°á»£c nhiá»u ngÆ°á»i mong Ä‘á»£i dÆ°á»›i Ä‘&acirc;y th&igrave;&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/th%C3%A1ng+11/" target="_blank">Th&aacute;ng 11</a><span>&nbsp;má»›i l&agrave; th&aacute;ng s&ocirc;i Ä‘á»™ng nháº¥t cá»§a cá»™ng Ä‘á»“ng BlackBerry trong nÄƒm 2014 n&agrave;y.</span></p>\r\n<ul>\r\n<li>13/11:&nbsp;<a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/bbm+meetings/" target="_blank">BBM meetings</a>&nbsp;ra máº¯t ch&iacute;nh thá»©c</li>\r\n<li>19-20/11: Ra máº¯t ch&iacute;nh thá»©c BlackBerry&nbsp;<a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/classic/" target="_blank">Classic</a></li>\r\n<li>BlackBerry&nbsp;<a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/blend/" target="_blank">Blend</a>&nbsp;cÅ©ng sáº½ c&oacute; cho c&aacute;c d&ograve;ng BB10 c&ograve;n láº¡i trong th&aacute;ng 11 n&agrave;y c&ugrave;ng vá»›i báº£n OS 10.3.1 official tr&ecirc;n to&agrave;n cáº§u.</li>\r\n</ul>\r\n<p><span>Ng&agrave;y h&ocirc;m qua 27/10 th&igrave;&nbsp;</span><strong><a class="internalLink" href="http://bbvietnam.com/threads/blackberry-classic-voi-ten-ma-sqc100-1-da-duoc-gfc-thong-qua.43698/">BlackBerry Classic vá»›i t&ecirc;n m&atilde; SQC100-1 Ä‘&atilde; Ä‘Æ°á»£c GCF th&ocirc;ng qua</a>.&nbsp;</strong><span>V&agrave; c&oacute; thá»ƒ c&ograve;n nhiá»u báº¥t ngá» ná»¯a cÅ©ng sáº½ c&oacute; ngay trong th&aacute;ng 11 n&agrave;y, tháº­t l&agrave; má»™t th&aacute;ng ráº¥t "lá»›n"</span></p>', '2014-10-09', 'LÃª Anh', 'baiviet/20141030084957bb10-2014.jpg'),
(16, 'BlackBerry Passport máº¡ vÃ ng táº¡i Viá»‡t Nam vá»›i chi phÃ­ tá»« 8-10 triá»‡u Ä‘á»“ng', '<p>L&agrave; má»™t sáº£n pháº©m c&oacute; thiáº¿t káº¿ Ä‘á»™c Ä‘&aacute;o, chiáº¿c&nbsp;BlackBerry&nbsp;Passport&nbsp;c&agrave;ng th&ecirc;m sang trá»ng, ph&ugrave; há»£p vá»›i ngÆ°á»i d&ugrave;ng doanh nh&acirc;n sau khi Ä‘Æ°á»£c&nbsp;máº¡ v&agrave;ng...</p>', '<p><a class="internalLink" href="http://bbvietnam.com/threads/blackberry-passport-ma-vang-tai-viet-nam-voi-chi-phi-tu-8-10-trieu-dong.43702/"><img class="bbCodeImage LbImage" src="https://bbvnmedia.files.wordpress.com/2014/10/passport-mavang.jpg" alt="[â€‹IMG]" /></a>â€‹<br /><span>L&agrave; má»™t sáº£n pháº©m c&oacute; thiáº¿t káº¿ Ä‘á»™c Ä‘&aacute;o, chiáº¿c&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/blackberry/" target="_blank">BlackBerry</a><span>&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/passport/" target="_blank">Passport</a><span>&nbsp;c&agrave;ng th&ecirc;m sang trá»ng, ph&ugrave; há»£p vá»›i ngÆ°á»i d&ugrave;ng doanh nh&acirc;n sau khi Ä‘Æ°á»£c&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/m%E1%BA%A1+v%C3%A0ng/" target="_blank">máº¡ v&agrave;ng</a><span>.</span><br /><br /><span>C&aacute;c sáº£n pháº©m máº¡ v&agrave;ng cá»§a BlackBerry trÆ°á»›c Ä‘&acirc;y nhÆ° Bold 9900, Q10 c&oacute; sá»©c h&uacute;t ráº¥t lá»›n Ä‘á»‘i vá»›i ngÆ°á»i d&ugrave;ng doanh nh&acirc;n. Do Ä‘&oacute;, ngay khi máº«u Passport vá»«a b&aacute;n ra táº¡i Viá»‡t Nam, sáº£n pháº©m n&agrave;y Ä‘&atilde; Ä‘Æ°á»£c Ä‘em ra má»• xáº» Ä‘á»ƒ máº¡ v&agrave;ng nháº±m phá»¥c vá»¥ nhu cáº§u ngÆ°á»i d&ugrave;ng trong nÆ°á»›c.</span><br /><br /><img class="bbCodeImage LbImage" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2014_10_28/blacberrypassportmavang1.jpg" alt="[â€‹IMG]" /><br /><br /><span>Chiáº¿c Passport máº¡ v&agrave;ng vá»«a Ä‘Æ°á»£c c&ocirc;ng bá»‘ bá»Ÿi c&ocirc;ng ty Royal Gold &amp; Karalux, Ä‘Æ¡n vá»‹ chuy&ecirc;n máº¡ v&agrave;ng má»™t sá»‘ sáº£n pháº©m cao cáº¥p. Theo Ä‘Æ¡n vá»‹ n&agrave;y, gi&aacute; máº¡ v&agrave;ng cho má»™t chiáº¿c Passport l&agrave; tá»« 8 Ä‘áº¿n 10 triá»‡u, t&ugrave;y v&agrave;o Ä‘á»™ tinh xáº£o v&agrave; y&ecirc;u cáº§u cá»§a kh&aacute;ch h&agrave;ng.</span><br /><br /><img class="bbCodeImage LbImage" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2014_10_28/blacberrypassportmavang4.jpg" alt="[â€‹IMG]" /><br /><br /><span>Chiáº¿c Passport n&agrave;y Ä‘Æ°á»£c máº¡ v&agrave;ng báº±ng phÆ°Æ¡ng ph&aacute;p máº¡ bá»ƒ - th&aacute;o rá»i tá»«ng chi tiáº¿t, sau Ä‘&oacute; nh&uacute;ng ngáº­p trong bá»ƒ v&agrave;ng. Theo Ä‘Æ¡n vá»‹ cháº¿ t&aacute;c, phÆ°Æ¡ng ph&aacute;p n&agrave;y gi&uacute;p bá» máº·t lá»›p v&agrave;ng b&aacute;m cháº·t v&agrave; Ä‘á»u v&agrave;o khung m&aacute;y hÆ¡n.</span><br /><br /><img class="bbCodeImage LbImage" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2014_10_28/blacberrypassportmavang3.jpg" alt="[â€‹IMG]" /><br /><br /><span>Theo anh Nguyá»…n Ngá»c - ká»¹ sÆ° ch&iacute;nh thá»±c hiá»‡n máº¡ v&agrave;ng cho Blackberry Passport, thá»i gian thá»±c hiá»‡n tá»« viá»‡c th&aacute;o láº¯p Ä‘áº¿n khi máº¡ v&agrave;ng ho&agrave;n chá»‰nh máº¥t 3-4 tiáº¿ng l&agrave;m viá»‡c li&ecirc;n tá»¥c.</span><br /><br /><img class="bbCodeImage LbImage" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2014_10_28/blacberrypassportmavang5.jpg" alt="[â€‹IMG]" /><br /><br /><span>NgÆ°á»i d&ugrave;ng cÅ©ng c&oacute; thá»ƒ t&ugrave;y chá»n kháº¯c logo, th&ocirc;ng Ä‘iá»‡p c&aacute; nh&acirc;n l&ecirc;n th&acirc;n m&aacute;y hoáº·c bá»• sung há»a tiáº¿t Ä‘á»ƒ tÄƒng t&iacute;nh sang trá»ng cho thiáº¿t bá»‹ n&agrave;y.</span><br /><br /><img class="bbCodeImage LbImage" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2014_10_28/blacberrypassportmavang7.jpg" alt="[â€‹IMG]" /><br /><br /><span>Kh&aacute;c vá»›i má»™t sá»‘ sáº£n pháº©m nhÆ° iPhone 6, c&aacute;c chi tiáº¿t máº¡ v&agrave;ng tr&ecirc;n Passport chá»‰ Ä‘iá»ƒm xuyáº¿t nháº¹ quanh th&acirc;n m&aacute;y, gi&uacute;p n&oacute; tr&ocirc;ng ná»•i báº­t nhÆ°ng kh&ocirc;ng qu&aacute; sáº·c sá»¡.</span><br /><br /><img class="bbCodeImage LbImage" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2014_10_28/blacberrypassportmavang8.jpg" alt="[â€‹IMG]" /><br /><br /><img class="bbCodeImage LbImage" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2014_10_28/blacberrypassportmavang11.jpg" alt="[â€‹IMG]" /><br />\r\n<div>Pháº§n khung l&agrave;m báº±ng th&eacute;p kh&ocirc;ng gá»‰ cá»§a m&aacute;y Ä‘Æ°á»£c máº¡ v&agrave;ng tinh xáº£o.â€‹</div>\r\n<br /><img class="bbCodeImage LbImage" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2014_10_28/blacberrypassportmavang12.jpg" alt="[â€‹IMG]" /><br />\r\n<div>Cáº£ n&uacute;t nguá»“n, tÄƒng giáº£m &acirc;m lÆ°á»£ng v&agrave; cáº§n gáº¡t &acirc;m thanh Ä‘á»u Ä‘Æ°á»£c th&aacute;o bá» Ä‘á»ƒ máº¡ v&agrave;ng.â€‹</div>\r\n<br /><img class="bbCodeImage LbImage" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2014_10_28/blacberrypassportmavang15.jpg" alt="[â€‹IMG]" /><br />\r\n<div>BlackBerry Passport Ä‘á» d&aacute;ng vá»›i iPhone 6 máº¡ v&agrave;ng.â€‹</div>\r\n</p>', '2014-10-10', 'LÃª Anh', 'baiviet/20141030085306passport-mavang.jpg'),
(17, 'BlackBerry Classic vá»›i tÃªn mÃ£ SQC100-1 Ä‘Ã£ Ä‘Æ°á»£c GCF thÃ´ng qua', '<p><span>NhÆ° thÆ°á»ng lá»‡, táº¥t cáº£ c&aacute;c thiáº¿t bá»‹ di Ä‘á»™ng muá»‘n Ä‘Æ°á»£c ph&aacute;t h&agrave;nh ra thá»‹ trÆ°á»ng Ä‘á»u pháº£i Ä‘Æ°á»£c&nbsp;</span>chá»©ng nháº­n<span>&nbsp;bá»Ÿi GCF (Global Certification Forum). V&agrave; ng&agrave;y h&ocirc;m qua, thiáº¿t bá»‹ BlackBerry&nbsp;</span>Classic<span>&nbsp;vá»›i t&ecirc;n m&atilde; SQC100-1 Ä‘&atilde; Ä‘Æ°á»£c GCF chá»©ng nháº­n, Ä‘á»§ ti&ecirc;u chuáº©n Ä‘á»ƒ ph&aacute;t h&agrave;nh ra thá»‹ trÆ°á»ng...</span></p>', '<p><img class="bbCodeImage LbImage" src="https://bbvnmedia.files.wordpress.com/2014/10/classic-sm03.jpg" alt="[â€‹IMG]" />â€‹<br /><span>NhÆ° thÆ°á»ng lá»‡, táº¥t cáº£ c&aacute;c thiáº¿t bá»‹ di Ä‘á»™ng muá»‘n Ä‘Æ°á»£c ph&aacute;t h&agrave;nh ra thá»‹ trÆ°á»ng Ä‘á»u pháº£i Ä‘Æ°á»£c&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/ch%E1%BB%A9ng+nh%E1%BA%ADn/" target="_blank">chá»©ng nháº­n</a><span>&nbsp;bá»Ÿi GCF (Global Certification Forum). V&agrave; ng&agrave;y h&ocirc;m qua, thiáº¿t bá»‹ BlackBerry&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/classic/" target="_blank">Classic</a><span>&nbsp;vá»›i t&ecirc;n m&atilde; SQC100-1 Ä‘&atilde; Ä‘Æ°á»£c GCF chá»©ng nháº­n, Ä‘á»§ ti&ecirc;u chuáº©n Ä‘á»ƒ ph&aacute;t h&agrave;nh ra thá»‹ trÆ°á»ng.</span><br /><br /><span>BlackBerry Classic l&agrave; thiáº¿t bá»‹ BB10 Ä‘áº§u ti&ecirc;n Ä‘Æ°á»£c trang bá»‹ d&atilde;y ph&iacute;m cá»©ng chá»©c nÄƒng (toolbelt) quen thuá»™c tr&ecirc;n c&aacute;c thiáº¿t bá»‹ BBOS. Äá»“ng thá»i Ä‘i k&egrave;m vá»›i n&oacute; l&agrave; phi&ecirc;n báº£n OS 10.3.1 cÅ©ng Ä‘Æ°á»£c bá»• sung th&ecirc;m c&aacute;c t&iacute;nh nÄƒng "g&acirc;y nghiá»‡n" cá»§a BBOS nhÆ° ph&iacute;m táº¯t (hotkeys) v&agrave; c&aacute;c tiá»‡n &iacute;ch kh&aacute;c trong Calendar, Danh báº¡, ... Ä&acirc;y Ä‘Æ°á»£c coi l&agrave; chiáº¿c "Bold tháº¿ há»‡ má»›i", v&agrave; Ä‘Æ°á»£c ká»³ vá»ng l&agrave; sáº½ l&ocirc;i k&eacute;o Ä‘Æ°á»£c ngÆ°á»i d&ugrave;ng BBOS n&acirc;ng cáº¥p l&ecirc;n BB10.</span><br /><br /><em><strong>Th&ocirc;ng tin vá» chá»©ng nháº­n cá»§a GCF</strong></em></p>\r\n<ul>\r\n<li><em>Manufacturer: BlackBerry Ltd</em></li>\r\n<li><em>Marketing Name(s): SQC100-1</em></li>\r\n<li><em>Date of Certification: 2014-10-27</em></li>\r\n<li><em>Publication Date: 2014-10-27</em></li>\r\n<li><em>GCF Reference: 4737</em></li>\r\n</ul>\r\n<p><strong>Chi tiáº¿t c&aacute;c th&ocirc;ng sá»‘ Ä‘Æ°á»£c chá»©ng nháº­n</strong></p>\r\n<div class="bbCodeBlock bbCodeQuote">\r\n<blockquote class="quoteContainer expanded">\r\n<div class="quote"><strong>R99 BANDS</strong><br /> \r\n<ul>\r\n<li><em>GSM 850</em></li>\r\n<li><em>GSM 900</em></li>\r\n<li><em>GSM 1800</em></li>\r\n<li><em>GSM 1900</em></li>\r\n<li><em>Supports EDGE : Class 12</em></li>\r\n</ul>\r\n<em><strong>UTRA BANDS &amp; CATEGORIES</strong></em><br /> \r\n<ul>\r\n<li><em>UTRA FDDI</em></li>\r\n<li><em>UTRA FDDII</em></li>\r\n<li><em>UTRA FDDV</em></li>\r\n<li><em>UTRA FDDVI</em></li>\r\n<li><em>UTRA FDDVIII</em></li>\r\n<li><em>Supports HSDPA : Category 10</em></li>\r\n<li><em>Supports Enhanced Uplink : Category 6</em></li>\r\n</ul>\r\n<em><strong>E-UTRA BANDS &amp; CATEGORIES</strong></em><br /> \r\n<ul>\r\n<li><em>E-UTRA FDD Band 1: Category : 4</em></li>\r\n<li><em>E-UTRA FDD Band 2: Category : 4</em></li>\r\n<li><em>E-UTRA FDD Band 3: Category : 4</em></li>\r\n<li><em>E-UTRA FDD Band 5: Category : 4</em></li>\r\n<li><em>E-UTRA FDD Band 7: Category : 4</em></li>\r\n<li><em>E-UTRA FDD Band 8: Category : 4</em></li>\r\n<li><em>E-UTRA FDD Band 20: Category : 4</em></li>\r\n</ul>\r\n<em><strong>BEARER AGNOSTIC</strong></em><br /> \r\n<ul>\r\n<li><em>Audio 3GPP release implemented : Rel-11</em></li>\r\n<li><em>Support OMA MMS 1.0, 1.1, 1.2 or 1.3</em></li>\r\n</ul>\r\n</div>\r\n</blockquote>\r\n</div>', '2014-10-15', 'LÃª Anh', 'baiviet/20141030085748classic-sm03.jpg'),
(18, 'BES12 - KhÃ´ng pháº£i lÃ  má»™t báº£n cáº­p nháº­t, Ä‘Ã³ lÃ  má»™t ká»· nguyÃªn má»›i cho doanh nghiá»‡p di Ä‘á»™ng', '<p>BES&nbsp;(BlackBerry Enterprise Service) l&agrave; dá»‹ch vá»¥&nbsp;quáº£n trá»‹&nbsp;di Ä‘á»™ng&nbsp;doanh nghiá»‡p&nbsp;(EMM) ná»•i tiáº¿ng cá»§a BlackBerry. Phi&ecirc;n báº£n hiá»‡n táº¡i BES10 Ä‘&atilde; há»— trá»£ quáº£n trá»‹ cho c&aacute;c thiáº¿t bá»‹ BlackBerry, iOS v&agrave; Android, v&agrave; sáº¯p tá»›i Ä‘&acirc;y phi&ecirc;n báº£n&nbsp;BES12&nbsp;sáº½ há»— trá»£ th&ecirc;m c&aacute;c thiáº¿t bá»‹ di Ä‘á»™ng cháº¡y Windows Phone..</p>', '<p><img class="bbCodeImage LbImage" src="https://bbvnmedia.files.wordpress.com/2014/10/bes12.jpg" alt="[â€‹IMG]" />â€‹<br /><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/bes/" target="_blank">BES</a><span>&nbsp;(BlackBerry Enterprise Service) l&agrave; dá»‹ch vá»¥&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/qu%E1%BA%A3n+tr%E1%BB%8B/" target="_blank">quáº£n trá»‹</a><span>&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/di+%C4%91%E1%BB%99ng/" target="_blank">di Ä‘á»™ng</a><span>&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/doanh+nghi%E1%BB%87p/" target="_blank">doanh nghiá»‡p</a><span>&nbsp;(</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/emm/" target="_blank">EMM</a><span>) ná»•i tiáº¿ng cá»§a BlackBerry. Phi&ecirc;n báº£n hiá»‡n táº¡i BES10 Ä‘&atilde; há»— trá»£ quáº£n trá»‹ cho c&aacute;c thiáº¿t bá»‹ BlackBerry, iOS v&agrave; Android, v&agrave; sáº¯p tá»›i Ä‘&acirc;y phi&ecirc;n báº£n&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/bes12/" target="_blank">BES12</a><span>&nbsp;sáº½ há»— trá»£ th&ecirc;m c&aacute;c thiáº¿t bá»‹ di Ä‘á»™ng cháº¡y Windows Phone. V&agrave; trong sá»± kiá»‡n sáº¯p diá»…n ra (13/11) táº¡i Sans Francisco (Má»¹) d&agrave;nh cho kh&aacute;ch h&agrave;ng doanh nghiá»‡p cá»§a BlackBerry tá»• chá»©c, cháº¯c cháº¯n ch&uacute;ng ta sáº½ c&oacute; nhiá»u th&ocirc;ng tin hÆ¡n vá» phi&ecirc;n báº£n BES12 n&agrave;y.</span><br /><br /><span>V&agrave; h&ocirc;m nay, tr&ecirc;n trang Inside BlackBerry, Luke Reimer - Quáº£n l&yacute; Marketing máº£ng doanh nghiá»‡p cá»§a BlackBerry cho biáº¿t, BES12 kh&ocirc;ng pháº£i l&agrave; chá»‰ má»™t báº£n cáº­p nháº­t, Ä‘&oacute; l&agrave; má»™t ká»· nguy&ecirc;n má»›i cho doanh nghiá»‡p di Ä‘á»™ng</span><br />\r\n<div class="bbCodeBlock bbCodeQuote">\r\n<blockquote class="quoteContainer">\r\n<div class="quote">Má»™t c&aacute;i g&igrave; Ä‘&oacute; th&uacute; vá»‹ Ä‘ang Ä‘áº¿n, v&agrave; ch&uacute;ng t&ocirc;i muá»‘n báº¡n l&agrave; má»™t pháº§n cá»§a n&oacute;. Gá»­i cho táº¥t cáº£ nhá»¯ng ngÆ°á»i Ä‘&atilde; c&oacute; nhá»¯ng tuy&ecirc;n bá»‘ t&aacute;o báº¡o nhÆ°ng kh&ocirc;ng c&oacute; cÆ¡ sá»Ÿ cá»§a nh&agrave; cung cáº¥p kh&aacute;c. Ä&oacute; l&agrave; thá»i gian cho má»™t thá»© Ä‘Æ°á»£c thiáº¿t káº¿ Ä‘Æ¡n giáº£n nháº¥t, triá»ƒn khai linh hoáº¡t, thiáº¿t láº­p chá»©c nÄƒng v&agrave; an to&agrave;n cho c&aacute;c c&ocirc;ng cá»¥ di Ä‘á»™ng.<br /><br />Ch&uacute;ng t&ocirc;i Ä‘&atilde; thiáº¿t káº¿ má»™t c&aacute;ch cáº©n tháº­n v&agrave; x&acirc;y dá»±ng sáº£n pháº©m n&agrave;y trong hai nÄƒm qua. Tá»« thiáº¿t káº¿ kiáº¿n tr&uacute;c há»‡ thá»‘ng Ä‘áº¿n giao diá»‡n ngÆ°á»i d&ugrave;ng, ch&uacute;ng t&ocirc;i Ä‘ang sáºµn s&agrave;ng Ä‘á»ƒ cung cáº¥p má»™t sáº£n pháº©m sáº½ l&agrave;m ná»• tung thá»‹ trÆ°á»ng EMM v&agrave; th&uacute;c Ä‘áº©y doanh nghiá»‡p cá»§a báº¡n tiáº¿n xa, xa hÆ¡n ná»¯a.</div>\r\n</blockquote>\r\n</div>\r\n</p>', '2014-10-16', 'LÃª Anh', 'baiviet/20141030090421bes12.jpg'),
(19, 'DÃ¡n da lÃ  gÃ¬ & Táº¡i sao nÃªn dÃ¡n da cho BlackBerry?', '<p><span>Vá»›i nhá»¯ng táº¥m da tháº­t tá»« b&ograve;, Ä‘&agrave; Ä‘iá»ƒu hay c&aacute; sáº¥u Ä‘Æ°á»£c chá»n lá»c ká»¹ c&agrave;ng,&nbsp;</span>Davis<span>&nbsp;thiáº¿t káº¿ sau Ä‘&oacute; d&ugrave;ng tia laser cáº¯t miáº¿ng da chuáº©n x&aacute;c v&agrave; ph&ugrave; há»£p cho m&aacute;y cá»§a báº¡n. Nhá»¯ng&nbsp;</span>miáº¿ng d&aacute;n da<span>&nbsp;n&agrave;y c&oacute; Ä‘á»™ d&agrave;y tá»« 0.8-1mm Ä‘á»ƒ c&oacute; thá»ƒ d&aacute;n dá»… d&agrave;ng l&ecirc;n máº·t lÆ°ng chiáº¿c Ä‘iá»‡n thoáº¡i...</span></p>', '<p><img class="bbCodeImage LbImage" src="http://i.imgur.com/R2vkBux.jpg" alt="[â€‹IMG]" />â€‹<br /><strong><em><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/d%C3%A1n+da/" target="_blank">D&aacute;n da</a>&nbsp;l&agrave; g&igrave;?</em></strong><br /><br /><span>Vá»›i nhá»¯ng táº¥m da tháº­t tá»« b&ograve;, Ä‘&agrave; Ä‘iá»ƒu hay c&aacute; sáº¥u Ä‘Æ°á»£c chá»n lá»c ká»¹ c&agrave;ng,&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/davis/" target="_blank">Davis</a><span>&nbsp;thiáº¿t káº¿ sau Ä‘&oacute; d&ugrave;ng tia laser cáº¯t miáº¿ng da chuáº©n x&aacute;c v&agrave; ph&ugrave; há»£p cho m&aacute;y cá»§a báº¡n. Nhá»¯ng&nbsp;</span><a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/mi%E1%BA%BFng+d%C3%A1n+da/" target="_blank">miáº¿ng d&aacute;n da</a><span>&nbsp;n&agrave;y c&oacute; Ä‘á»™ d&agrave;y tá»« 0.8-1mm Ä‘á»ƒ c&oacute; thá»ƒ d&aacute;n dá»… d&agrave;ng l&ecirc;n máº·t lÆ°ng chiáº¿c Ä‘iá»‡n thoáº¡i.</span><br /><br /><strong><em>Táº¡i sao láº¡i n&ecirc;n d&aacute;n da?</em></strong></p>\r\n<ul>\r\n<li>L&agrave;m cho sáº£n pháº©m sang trá»ng hÆ¡n vá»›i lá»›p da tháº­t bao phá»§ bá» máº·t d&aacute;n</li>\r\n<li>Cáº£m gi&aacute;c cáº§m &ecirc;m v&agrave; tá»± tin hÆ¡n</li>\r\n<li>Báº£o vá»‡ bá» máº·t Ä‘Æ°á»£c d&aacute;n da. Quan trá»ng nháº¥t l&agrave; báº£o vá»‡ Ä‘Æ°á»£c á»‘ng k&iacute;nh camera kh&ocirc;ng bá»‹ xÆ°á»›c l&agrave;m áº£nh hÆ°á»Ÿng Ä‘áº¿n cháº¥t lÆ°á»£ng chá»¥p áº£nh.</li>\r\n<li>Kh&ocirc;ng b&aacute;m v&agrave; kh&ocirc;ng Ä‘á»ƒ láº¡i dáº¥u v&acirc;n tay tr&ecirc;n máº·t lÆ°ng cá»§a thiáº¿t bá»‹.</li>\r\n<li>C&aacute; nh&acirc;n h&oacute;a sáº£n pháº©m. C&aacute;c báº¡n c&oacute; thá»ƒ kháº¯c t&ecirc;n, sá»‘ Ä‘iá»‡n thoáº¡i, ng&agrave;y th&aacute;ng &yacute; nghÄ©a hoáº·c h&igrave;nh m&agrave; m&igrave;nh th&iacute;ch l&ecirc;n miáº¿ng d&aacute;n da Ä‘á»ƒ n&oacute; trá»Ÿ l&ecirc;n Ä‘á»™c nháº¥t, chá»‰ duy nháº¥t báº¡n c&oacute;.</li>\r\n</ul>\r\n<div><img class="bbCodeImage LbImage" src="http://i.imgur.com/ox8c5AS.jpg" alt="[â€‹IMG]" />â€‹</div>\r\n<p><br /><strong><em>Khuyáº¿n m&atilde;i:</em></strong><br /><br /><span>Tá»« ng&agrave;y 8.10.2014 &ndash; 28.10.2014 Davis tá»• chá»©c ChÆ°Æ¡ng tr&igrave;nh khuyáº¿n m&atilde;i vá»›i nhiá»u Æ°u Ä‘&atilde;i v&agrave; c&oacute; nhá»¯ng pháº§n qu&agrave; Ä‘áº·c biá»‡t cho kh&aacute;ch h&agrave;ng khi mua sáº£n pháº©m táº¡i Davis.vn. M&igrave;nh giá»›i thiá»‡u cho c&aacute;c báº¡n c&oacute; nhu cáº§u trang tr&iacute; v&agrave; báº£o vá»‡ thiáº¿t bá»‹ cá»§a m&igrave;nh báº±ng da tháº­t th&igrave; Ä‘áº·t h&agrave;ng.</span><br /><br /><strong><em>Ná»™i dá»¥ng chÆ°Æ¡ng tr&igrave;nh:</em></strong></p>\r\n<ul>\r\n<li>Kháº¯c t&ecirc;n miá»…n ph&iacute; v&agrave; giáº£m gi&aacute; ph&iacute; kháº¯c h&igrave;nh c&ograve;n 20,000 vnd cho kh&aacute;ch h&agrave;ng khi mua sáº£n pháº©m cá»§a Davis.vn. &Aacute;p dá»¥ng vá»›i táº¥t cáº£ sáº£n pháº©m.</li>\r\n<li>Táº·ng m&oacute;c kh&oacute;a Ä‘eo thá»i trang Ä‘á»‘i vá»›i Ä‘Æ¡n h&agrave;ng tr&ecirc;n 250,000 vnd . Äiá»ƒm Ä‘áº·c biá»‡t cá»§a sáº£n pháº©m n&agrave;y l&agrave; Davis sáº½ kháº¯c t&ecirc;n cho báº¡n l&ecirc;n sáº£n pháº©m Ä‘á»ƒ n&oacute; trá»Ÿ th&agrave;nh sáº£n pháº©m duy nháº¥t cá»§a ri&ecirc;ng báº¡n.</li>\r\n<li>Miá»…n ph&iacute; ph&iacute; ship Ä‘á»‘i vá»›i Ä‘á»‘i vá»›i Ä‘Æ¡n h&agrave;ng tá»« 350,000 vnd trá»Ÿ l&ecirc;n.</li>\r\n<li>Táº·ng káº¹p tai nghe báº±ng da cho kh&aacute;ch h&agrave;ng th&acirc;n thiáº¿t cá»§a Davis (L&agrave; nhá»¯ng kh&aacute;ch h&agrave;ng Ä‘&atilde; Ä‘áº·t tá»« 2 sáº£n pháº©m trá»Ÿ l&ecirc;n)</li>\r\n</ul>\r\n<p><strong><em>Má»™t sá»‘ máº«u d&aacute;n da d&agrave;nh cho&nbsp;<a class="Tinhte_XenTag_TagLink" href="http://bbvietnam.com/tags/blackberry/" target="_blank">Blackberry</a>:</em></strong><br /><br /></p>\r\n<div><img class="bbCodeImage LbImage" src="http://i.imgur.com/5BXYXpG.jpg" alt="[â€‹IMG]" /><br /><br /><img class="bbCodeImage LbImage" src="http://i.imgur.com/2r97RIP.jpg" alt="[â€‹IMG]" /><br /><br /><img class="bbCodeImage LbImage" src="http://i.imgur.com/7AUGynC.jpg" alt="[â€‹IMG]" /><br /><br /><img class="bbCodeImage LbImage" src="http://i.imgur.com/a35iYvd.jpg" alt="[â€‹IMG]" />â€‹</div>\r\n<p><br /><strong><em>V&agrave; c&ograve;n ráº¥t nhiá»u sáº£n pháº©m kh&aacute;c. C&aacute;c báº¡n xem táº¡i Ä‘&acirc;y Ä‘á»ƒ biáº¿t th&ecirc;m th&ocirc;ng tin chi tiáº¿t.</em></strong></p>\r\n<ul>\r\n<li>Facebook:&nbsp;<a class="externalLink" rel="nofollow" href="https://www.facebook.com/www.davis.vn" target="_blank">facebook.com/www.davis.vn</a></li>\r\n<li>Website:&nbsp;<a class="externalLink" rel="nofollow" href="http://www.davis.vn/" target="_blank">www.davis.vn</a></li>\r\n<li>Email:&nbsp;<a href="mailto:info@davis.vn">info@davis.vn</a></li>\r\n<li>Hotline: 0972.539.283 (Mr.To&agrave;n )</li>\r\n<li>Äá»‹a chá»‰: Sá»‘ 5B ÄÆ°á»ng 379 (Tr&ecirc;n Ä‘Æ°á»ng L&ecirc; VÄƒn Viá»‡t Ä‘i v&agrave;o), PhÆ°á»ng TÄƒng NhÆ¡n Ph&uacute; A, Quáº­n 9, HCM</li>\r\n</ul>', '2014-10-18', 'LÃª Anh', 'baiviet/20141030091407R2vkBux.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE IF NOT EXISTS `thanhvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tendangnhap` varchar(25) NOT NULL,
  `Matkhau` varchar(25) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Diachi` varchar(255) NOT NULL,
  `Ngaysinh` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Tendangnhap` (`Tendangnhap`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `Tendangnhap`, `Matkhau`, `fullname`, `Email`, `Diachi`, `Ngaysinh`) VALUES
(6, 'LeAnh', 'utghol', 'LÃª Sá»¹ Tuáº¥n Anh', 'tuananh@gmail.com', 'Háº£i DÆ°Æ¡ng', '1993-07-27'),
(7, 'QuocToan', 'utghol', 'LÆ°Æ¡ng Quá»‘c ToÃ¡n', 'Toan@gmail.com', '', '2014-10-06'),
(8, 'caonguyen', 'utghol', 'Cao NguyÃªn Huá»³nh', 'nguyen37@gmail.com', 'ÄÄƒk LÄƒk', '1992-03-13');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_spbanchay`
--
CREATE TABLE IF NOT EXISTS `vw_spbanchay` (
`idsanpham` int(11)
,`Tensp` varchar(55)
,`Hinhanh` varchar(100)
,`gia` decimal(55,0)
,`SL` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ww_thanhtien`
--
CREATE TABLE IF NOT EXISTS `ww_thanhtien` (
`iddonhang` int(11)
,`Tongtien` decimal(65,0)
);
-- --------------------------------------------------------

--
-- Structure for view `vw_spbanchay`
--
DROP TABLE IF EXISTS `vw_spbanchay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_spbanchay` AS select `chitietdonhang`.`idsanpham` AS `idsanpham`,`chitietsanpham`.`Tensp` AS `Tensp`,`chitietsanpham`.`Hinhanh` AS `Hinhanh`,`chitietdonhang`.`gia` AS `gia`,count(`chitietdonhang`.`idsanpham`) AS `SL` from (`chitietdonhang` join `chitietsanpham`) where (`chitietdonhang`.`idsanpham` = `chitietsanpham`.`Masanpham`) group by `chitietdonhang`.`idsanpham`;

-- --------------------------------------------------------

--
-- Structure for view `ww_thanhtien`
--
DROP TABLE IF EXISTS `ww_thanhtien`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ww_thanhtien` AS select `chitietdonhang`.`iddonhang` AS `iddonhang`,sum((`chitietdonhang`.`soluong` * `chitietdonhang`.`gia`)) AS `Tongtien` from `chitietdonhang` group by `chitietdonhang`.`iddonhang`;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`Masanpham`) REFERENCES `chitietsanpham` (`Masanpham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sfsfsf` FOREIGN KEY (`Mathanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`iddonhang`) REFERENCES `donhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`idsanpham`) REFERENCES `chitietsanpham` (`Masanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietphukien`
--
ALTER TABLE `chitietphukien`
  ADD CONSTRAINT `chitietphukien_ibfk_1` FOREIGN KEY (`Maphukien`) REFERENCES `loaiphukien` (`Maphukien`);

--
-- Constraints for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `chitietsanpham_ibfk_1` FOREIGN KEY (`Madong`) REFERENCES `tbldongsanpham` (`Madong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idthanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nhanxet`
--
ALTER TABLE `nhanxet`
  ADD CONSTRAINT `nhanxet_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `chitietsanpham` (`Masanpham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nhanxet_ibfk_2` FOREIGN KEY (`idthanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
