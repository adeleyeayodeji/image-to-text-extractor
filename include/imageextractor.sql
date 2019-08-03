-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 01:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imageextractor`
--

-- --------------------------------------------------------

--
-- Table structure for table `userfile`
--

CREATE TABLE `userfile` (
  `id` int(11) NOT NULL,
  `sitelogo` mediumtext,
  `sitetitle` mediumtext,
  `description` mediumtext,
  `footer` mediumtext,
  `ads1` mediumtext,
  `ads2` mediumtext,
  `username` mediumtext,
  `password` mediumtext,
  `email` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userfile`
--

INSERT INTO `userfile` (`id`, `sitelogo`, `sitetitle`, `description`, `footer`, `ads1`, `ads2`, `username`, `password`, `email`) VALUES
(1, 'imagetotext.png', 'Image to text extractor', 'Easily extract text from image with Advert space ... you can buy script at <a href=\'https://www.biggidroid.com\'>Our Store</a>', 'Â© 2018 | <a href=\"https://adeleyeayodeji.com/\" target=\"_blank\">Adeleye Ayodeji</a>', '<script>document.write(\"Ads code here\")</script>', '<script>document.write(\"Ads code here\")</script>', 'admin', 'admin', 'adeleyeayodeji12345@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userfile`
--
ALTER TABLE `userfile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userfile`
--
ALTER TABLE `userfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
