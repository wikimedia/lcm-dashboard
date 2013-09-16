-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2013 at 07:07 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `lcmdashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `ime-gap_statement`
--

CREATE TABLE IF NOT EXISTS `ime_gap_statement` (
  `langcode_iso` varchar(20) NOT NULL,
  `autonym` varchar(45) DEFAULT NULL,
  `inputmethod` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`langcode_iso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ime-gap_statement`
--


-- --------------------------------------------------------

--
-- Table structure for table `langdetail`
--

CREATE TABLE IF NOT EXISTS `langdetail` (
  `langcode_iso` varchar(20) NOT NULL,
  `langcode_wmf` varchar(20) NOT NULL,
  `langname_eng` varchar(50) NOT NULL,
  `langname_autonym` varchar(50) NOT NULL,
  `langname_html` varchar(20) NOT NULL,
  `macro_lang` varchar(1) NOT NULL,
  `wmf_proj_status` varchar(1) NOT NULL,
  `fallback_code` varchar(20) NOT NULL,
  `narayam` varchar(1) NOT NULL,
  `jquery_ime` varchar(1) NOT NULL,
  `webfonts` varchar(1) NOT NULL,
  `jquery_webfonts` varchar(1) NOT NULL,
  `i18n_mw_core` varchar(1) NOT NULL,
  `jquery_i18n` varchar(1) NOT NULL,
  `jquery_uls` varchar(1) NOT NULL,
  `translate` varchar(1) NOT NULL,
  `dictionary` varchar(1) NOT NULL,
  `spellchecker` varchar(1) NOT NULL,
  `glossary` varchar(1) NOT NULL,
  `f_or_i` varchar(1) NOT NULL,
  PRIMARY KEY (`langcode_iso`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

--
-- Dumping data for table `langdetail`
--

