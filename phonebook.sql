-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 17, 2007 at 01:14 PM
-- Server version: 4.1.9
-- PHP Version: 4.3.10
-- 
-- Database: `sales`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `user` varchar(5) NOT NULL default '',
  `password` varchar(8) NOT NULL default '',
  `name` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES ('1', '1', 'bethoven');
INSERT INTO `admin` VALUES ('2', '2', 'marvin agustin');

-- --------------------------------------------------------

-- 
-- Table structure for table `customer`
-- 

CREATE TABLE `customer` (
  `custno` smallint(4) unsigned zerofill NOT NULL auto_increment,
  `lname` varchar(16) NOT NULL default '',
  `fname` varchar(15) NOT NULL default '',
  `mi` char(1) NOT NULL default '',
  `addr` varchar(40) NOT NULL default '',
  `dbirth` date NOT NULL default '0000-00-00',
  `pword` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`custno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0 AUTO_INCREMENT=108 ;

-- 
-- Dumping data for table `customer`
-- 

INSERT INTO `customer` VALUES (0100, 'blaya', 'bethoven', 'm', 'downtown, loay, bohol', '1987-02-21', '1');
INSERT INTO `customer` VALUES (0101, 'estrada', 'joseph', 'g', 'bohol', '0000-00-00', '1');
INSERT INTO `customer` VALUES (0102, 'blaya', 'barry', 'c', 'tagbilaran, bohol', '1986-12-04', '1');
INSERT INTO `customer` VALUES (0103, 'endres', 'barry', 'c', 'tagbilaran city, bohol', '1982-08-06', '1');
INSERT INTO `customer` VALUES (0104, 'cajes', 'barry', 'c', 'gallares, tagbilaran', '1985-05-06', '1');
INSERT INTO `customer` VALUES (0105, 'varquez', 'rose', 't', 'loboc, bohol', '0000-00-00', '1');
INSERT INTO `customer` VALUES (0106, 'nabua', 'michelle', 'g', 'tagbilaran city', '1998-10-10', '1');
INSERT INTO `customer` VALUES (0107, 'acojedo', 'lorena', 'r', 'baclayon, bohol', '1998-10-10', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `payments`
-- 

CREATE TABLE `payments` (
  `pno` smallint(5) unsigned zerofill NOT NULL auto_increment,
  `tcode` smallint(1) NOT NULL default '0',
  `datepaid` date NOT NULL default '0000-00-00',
  `orno` varchar(10) NOT NULL default '',
  `gtotal` float NOT NULL default '0',
  PRIMARY KEY  (`pno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `payments`
-- 

INSERT INTO `payments` VALUES (00001, 21, '2007-01-22', '45454', 0);
INSERT INTO `payments` VALUES (00002, 2, '2007-01-22', '456', 0);
INSERT INTO `payments` VALUES (00003, 16, '2007-01-22', '3434', 0);
INSERT INTO `payments` VALUES (00004, 25, '2007-01-22', '56565', 0);
INSERT INTO `payments` VALUES (00005, 12, '2007-01-22', '345435', 0);
INSERT INTO `payments` VALUES (00006, 17, '2007-01-22', '45464', 0);
INSERT INTO `payments` VALUES (00007, 28, '2007-01-31', '4546', 0);
INSERT INTO `payments` VALUES (00008, 1, '2007-01-31', '4544', 43);
INSERT INTO `payments` VALUES (00009, 29, '2007-01-31', '45465', 39.5);
INSERT INTO `payments` VALUES (00010, 30, '2007-01-31', 't57657676', 72);
INSERT INTO `payments` VALUES (00011, 33, '2007-02-02', '43543543', 16);
INSERT INTO `payments` VALUES (00012, 34, '2007-03-17', '45656', 5.5);

-- --------------------------------------------------------

-- 
-- Table structure for table `products`
-- 

CREATE TABLE `products` (
  `pcode` smallint(1) unsigned NOT NULL auto_increment,
  `descrip` varchar(25) NOT NULL default '',
  `uprice` float NOT NULL default '0',
  `unit` char(3) NOT NULL default '',
  PRIMARY KEY  (`pcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `products`
-- 

INSERT INTO `products` VALUES (1, 'Biogesic', 3.5, 'tab');
INSERT INTO `products` VALUES (2, 'Neozep', 4, 'tab');
INSERT INTO `products` VALUES (3, 'Biogesic Syrup', 35.5, 'bot');
INSERT INTO `products` VALUES (4, 'Medicol', 2, 'tab');
INSERT INTO `products` VALUES (5, 'Tuseran', 4, 'cap');
INSERT INTO `products` VALUES (6, 'Solmux', 35, 'bot');

-- --------------------------------------------------------

-- 
-- Table structure for table `trans`
-- 

CREATE TABLE `trans` (
  `tcode` smallint(7) unsigned zerofill NOT NULL auto_increment,
  `custno` smallint(4) NOT NULL default '0',
  `orderdate` date NOT NULL default '0000-00-00',
  `status` char(1) NOT NULL default '',
  PRIMARY KEY  (`tcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- 
-- Dumping data for table `trans`
-- 

INSERT INTO `trans` VALUES (0000001, 100, '2006-12-13', 'O');
INSERT INTO `trans` VALUES (0000002, 100, '2006-12-13', 'O');
INSERT INTO `trans` VALUES (0000003, 101, '2006-12-13', 'C');
INSERT INTO `trans` VALUES (0000004, 102, '2006-12-13', 'P');
INSERT INTO `trans` VALUES (0000005, 102, '2006-12-13', 'P');
INSERT INTO `trans` VALUES (0000006, 102, '2006-12-13', 'P');
INSERT INTO `trans` VALUES (0000007, 102, '2006-12-13', 'P');
INSERT INTO `trans` VALUES (0000008, 102, '2006-12-13', 'C');
INSERT INTO `trans` VALUES (0000009, 102, '2006-12-13', 'P');
INSERT INTO `trans` VALUES (0000010, 102, '2006-12-13', 'P');
INSERT INTO `trans` VALUES (0000011, 105, '2006-12-13', 'P');
INSERT INTO `trans` VALUES (0000012, 104, '2006-12-15', 'O');
INSERT INTO `trans` VALUES (0000013, 104, '2006-12-15', 'C');
INSERT INTO `trans` VALUES (0000014, 104, '2006-12-15', 'C');
INSERT INTO `trans` VALUES (0000015, 104, '2006-12-15', 'P');
INSERT INTO `trans` VALUES (0000016, 104, '2006-12-15', 'O');
INSERT INTO `trans` VALUES (0000017, 104, '2006-12-15', 'O');
INSERT INTO `trans` VALUES (0000018, 107, '2006-12-15', 'P');
INSERT INTO `trans` VALUES (0000019, 100, '2007-01-08', 'A');
INSERT INTO `trans` VALUES (0000020, 100, '2007-01-08', 'A');
INSERT INTO `trans` VALUES (0000021, 100, '2007-01-08', 'O');
INSERT INTO `trans` VALUES (0000022, 100, '2007-01-10', 'C');
INSERT INTO `trans` VALUES (0000023, 100, '2007-01-10', 'C');
INSERT INTO `trans` VALUES (0000024, 105, '2007-04-17', 'A');
INSERT INTO `trans` VALUES (0000025, 104, '2007-04-17', 'O');
INSERT INTO `trans` VALUES (0000026, 107, '2007-01-19', 'A');
INSERT INTO `trans` VALUES (0000027, 104, '2007-01-22', 'A');
INSERT INTO `trans` VALUES (0000028, 100, '2007-01-31', 'O');
INSERT INTO `trans` VALUES (0000029, 100, '2007-01-31', 'O');
INSERT INTO `trans` VALUES (0000030, 100, '2007-01-31', 'O');
INSERT INTO `trans` VALUES (0000031, 106, '2007-02-02', 'A');
INSERT INTO `trans` VALUES (0000032, 104, '2007-02-02', 'A');
INSERT INTO `trans` VALUES (0000033, 104, '2007-02-02', 'O');
INSERT INTO `trans` VALUES (0000034, 100, '2007-03-17', 'O');

-- --------------------------------------------------------

-- 
-- Table structure for table `trans_dtl`
-- 

CREATE TABLE `trans_dtl` (
  `tdtlcode` smallint(5) unsigned zerofill NOT NULL auto_increment,
  `tcode` smallint(7) unsigned zerofill NOT NULL default '0000000',
  `pcode` smallint(1) NOT NULL default '0',
  `qnty` smallint(1) NOT NULL default '0',
  PRIMARY KEY  (`tdtlcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

-- 
-- Dumping data for table `trans_dtl`
-- 

INSERT INTO `trans_dtl` VALUES (00001, 0000001, 4, 4);
INSERT INTO `trans_dtl` VALUES (00002, 0000001, 6, 1);
INSERT INTO `trans_dtl` VALUES (00003, 0000002, 3, 2);
INSERT INTO `trans_dtl` VALUES (00004, 0000002, 4, 1);
INSERT INTO `trans_dtl` VALUES (00005, 0000003, 6, 1);
INSERT INTO `trans_dtl` VALUES (00006, 0000004, 4, 1);
INSERT INTO `trans_dtl` VALUES (00007, 0000004, 2, 2);
INSERT INTO `trans_dtl` VALUES (00008, 0000005, 3, 1);
INSERT INTO `trans_dtl` VALUES (00009, 0000005, 4, 1);
INSERT INTO `trans_dtl` VALUES (00010, 0000006, 3, 2);
INSERT INTO `trans_dtl` VALUES (00011, 0000006, 2, 1);
INSERT INTO `trans_dtl` VALUES (00012, 0000007, 1, 0);
INSERT INTO `trans_dtl` VALUES (00013, 0000007, 3, 0);
INSERT INTO `trans_dtl` VALUES (00014, 0000007, 4, 0);
INSERT INTO `trans_dtl` VALUES (00015, 0000007, 2, 0);
INSERT INTO `trans_dtl` VALUES (00016, 0000000, 4, 4);
INSERT INTO `trans_dtl` VALUES (00017, 0000000, 2, 3);
INSERT INTO `trans_dtl` VALUES (00018, 0000000, 3, 3);
INSERT INTO `trans_dtl` VALUES (00019, 0000000, 6, 2);
INSERT INTO `trans_dtl` VALUES (00020, 0000010, 4, 3);
INSERT INTO `trans_dtl` VALUES (00021, 0000010, 2, 3);
INSERT INTO `trans_dtl` VALUES (00022, 0000011, 4, 1);
INSERT INTO `trans_dtl` VALUES (00023, 0000012, 3, 1);
INSERT INTO `trans_dtl` VALUES (00024, 0000012, 2, 2);
INSERT INTO `trans_dtl` VALUES (00025, 0000014, 3, 0);
INSERT INTO `trans_dtl` VALUES (00026, 0000014, 4, 0);
INSERT INTO `trans_dtl` VALUES (00027, 0000015, 2, 2);
INSERT INTO `trans_dtl` VALUES (00028, 0000015, 6, 3);
INSERT INTO `trans_dtl` VALUES (00029, 0000015, 5, 4);
INSERT INTO `trans_dtl` VALUES (00030, 0000016, 3, 2);
INSERT INTO `trans_dtl` VALUES (00031, 0000016, 4, 4);
INSERT INTO `trans_dtl` VALUES (00032, 0000016, 2, 0);
INSERT INTO `trans_dtl` VALUES (00033, 0000017, 3, 3);
INSERT INTO `trans_dtl` VALUES (00034, 0000017, 4, 2);
INSERT INTO `trans_dtl` VALUES (00035, 0000017, 2, 0);
INSERT INTO `trans_dtl` VALUES (00036, 0000018, 3, 2);
INSERT INTO `trans_dtl` VALUES (00037, 0000018, 6, 1);
INSERT INTO `trans_dtl` VALUES (00038, 0000019, 3, 0);
INSERT INTO `trans_dtl` VALUES (00039, 0000019, 2, 0);
INSERT INTO `trans_dtl` VALUES (00040, 0000021, 6, 44);
INSERT INTO `trans_dtl` VALUES (00041, 0000024, 4, 4);
INSERT INTO `trans_dtl` VALUES (00042, 0000024, 6, 6);
INSERT INTO `trans_dtl` VALUES (00043, 0000025, 3, 3);
INSERT INTO `trans_dtl` VALUES (00044, 0000025, 2, 2);
INSERT INTO `trans_dtl` VALUES (00045, 0000026, 4, 5);
INSERT INTO `trans_dtl` VALUES (00046, 0000026, 2, 1);
INSERT INTO `trans_dtl` VALUES (00047, 0000027, 3, 4);
INSERT INTO `trans_dtl` VALUES (00048, 0000027, 2, 3);
INSERT INTO `trans_dtl` VALUES (00049, 0000028, 1, 2);
INSERT INTO `trans_dtl` VALUES (00050, 0000028, 4, 2);
INSERT INTO `trans_dtl` VALUES (00051, 0000029, 3, 1);
INSERT INTO `trans_dtl` VALUES (00052, 0000029, 2, 1);
INSERT INTO `trans_dtl` VALUES (00053, 0000030, 4, 1);
INSERT INTO `trans_dtl` VALUES (00054, 0000030, 6, 2);
INSERT INTO `trans_dtl` VALUES (00055, 0000031, 3, 1);
INSERT INTO `trans_dtl` VALUES (00056, 0000031, 2, 5);
INSERT INTO `trans_dtl` VALUES (00057, 0000031, 6, 1);
INSERT INTO `trans_dtl` VALUES (00058, 0000032, 4, 5);
INSERT INTO `trans_dtl` VALUES (00059, 0000032, 2, 0);
INSERT INTO `trans_dtl` VALUES (00060, 0000033, 3, 0);
INSERT INTO `trans_dtl` VALUES (00061, 0000033, 2, 4);
INSERT INTO `trans_dtl` VALUES (00062, 0000034, 1, 1);
INSERT INTO `trans_dtl` VALUES (00063, 0000034, 4, 1);
