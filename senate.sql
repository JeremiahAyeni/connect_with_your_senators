-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2019 at 12:20 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senate`
--

-- --------------------------------------------------------

--
-- Table structure for table `senate_list`
--

DROP TABLE IF EXISTS `senate_list`;
CREATE TABLE IF NOT EXISTS `senate_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senate_list`
--

INSERT INTO `senate_list` (`id`, `name`, `state`, `phone`, `email`, `image`) VALUES
(1, 'Sen. E. Abaribe', 'ABIA', '08033129452', 'enyiabaribe@yahoo.com', NULL),
(2, 'Sen. O. Kalu', 'ABIA', '08034000001', 'okalu@orjikalu.com', NULL),
(3, 'Sen. T. Orji', 'ABIA', '07082800000', 'senatortaorji@gmail.com', NULL),
(4, 'Sen. B. Yaroe', 'ADAMAWA', '08034050460', 'bdyaroe@gmail.com', NULL),
(7, 'Sen. I. Abbo', 'ADAMAWA', '08066285112', 'faradugun@gmail.com', NULL),
(8, 'Sen. A. Ahmed', 'ADAMAWA', NULL, 'aishatu.ahmed@nass.gov.ng', NULL),
(9, 'Sen. B. Akpan', 'AKWA IBOM', '08055555188', 'akpanalbert@hotmail.com', NULL),
(10, 'Sen. A. Eyakenyi', 'AKWA IBOM', '08035054282', 'konssie@yahoo.com', NULL),
(11, 'Sen. C. Ekpeyong', 'AKWA IBOM', '08027785234', 'chrisekpesg@yahoo.com', NULL),
(12, 'Sen. I. Ubah', 'ANAMBRA', '09096655596', 'senatorifeanyiubah@gmail.com', NULL),
(13, 'Sen. E. Uche', 'ANAMBRA', '08037620002', 'u.ekwunife@yahoo.com', NULL),
(14, 'Sen. A. Oduah', 'ANAMBRA', '08055084340', 'senatorstella@gmail.com', NULL),
(15, 'Sen. H. Jika', 'BAUCHI', '08038666690', 'jikahalliru@gmail.com', NULL),
(16, 'Sen. A. Bulkachuwa', 'BAUCHI', NULL, 'adamu.bulkachuwa@nass.gov.ng', NULL),
(41, 'Sen. L. Gamau', 'BAUCHI', NULL, 'lawal.gumau@nass.gov.ng', NULL),
(42, 'Sen. O. EWHRUDJAKPO', 'BAYELSA', '09031352791', 'ogagadick@gmail.com', NULL),
(43, 'Sen. D. Diri', 'BAYELSA', '08036668698', 'douyediri@gmail.com', NULL),
(59, 'Sen. D. Wangagra', 'BAYELSA', NULL, 'degi.wangagha@nass.gov.ng', NULL),
(60, 'Sen. E. Orker-Jev', 'BENUE', NULL, 'emmanuel.orkerjev@nass.gov.ng', NULL),
(61, 'Sen A. Morro', 'BENUE', '08068870606', 'abahmoro@yahoo.com', NULL),
(62, 'Sen. A. Kyari', 'BORNO', NULL, 'abubakar.kyari@nass.gov.ng', NULL),
(63, 'Sen. K. Shettima', 'BORNO', '08034459047', 'kashimshettima@gmail.com', NULL),
(64, 'Sen. M. Ndume', 'BORNO', '08109480004', 'mohammed.ndume@nass.gov.ng', NULL),
(65, 'Sen. R. Oko', 'CROSS RIVER', NULL, 'rose.oko@nass.gov.ng', NULL),
(66, 'Sen. G. Bassey', 'CROSS RIVER', '08034444555', 'gershombassey@gmail.com', NULL),
(67, 'Sen. S. Onor', 'CROSS RIVER', '08030998460', 'irunandu@yahoo.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sms_setting`
--

DROP TABLE IF EXISTS `sms_setting`;
CREATE TABLE IF NOT EXISTS `sms_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `api_key` varchar(255) NOT NULL,
  `host_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_setting`
--

INSERT INTO `sms_setting` (`id`, `api_key`, `host_url`) VALUES
(1, 'MZGnXajfgOzRc9Yw5jCUmbbF4vhGb80SPKN6jIer5OTz7tT7Qhpg7wRup0VT', 'https://www.bulksmsnigeria.com/api/v1/sms/create');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
