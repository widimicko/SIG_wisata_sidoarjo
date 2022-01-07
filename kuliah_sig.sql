-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 02:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `tourism`
--

CREATE TABLE `tourism` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourism`
--

INSERT INTO `tourism` (`id`, `name`, `category`, `description`, `lat`, `lng`) VALUES
(2, 'Taman Kahuripan', 'Alam', 'Alam Taman Kahuripan', -7.438405662999026, 112.69631201378209),
(3, 'Bakso Tutus cabang Karang Ploso Malang', 'Kuliner', 'Kuliner Bakso Tutus cabang Karang Ploso Malang', -7.454009537716605, 112.70745375956884),
(4, 'Bakso Cak Ndut Tetelan Urat', 'Kuliner', 'Kuliner Bakso Cak Ndut Tetelan Urat', -7.452818060935489, 112.70560839958233),
(5, 'Museum Mpu Tantular', 'Sejarah', 'Sejarah Museum Mpu Tantular', -7.433836773631211, 112.71989822387695),
(6, 'Heritage Of Handayani', 'Sejarah', 'Sejarah Heritage Of Handayani', -7.433994438056588, 112.69461364564876),
(7, 'Masjid Iskandariya', 'Religi', 'Religi Masjid Iskandariya', -7.439432077294834, 112.70797813839302),
(8, 'Masjid Nurul Yaqin Pondok Jati', 'Religi', 'Religi Masjid Nurul Yaqin Pondok Jati', -7.44268745340659, 112.70484531827218),
(9, 'Masjid Siti Suci Nur Rochmah', 'Religi', 'Religi Masjid Siti Suci Nur Rochmah', -7.443435949246662, 112.71218305674313),
(11, 'Ikan Bakar Cianjur', 'Kuliner', 'Kuliner Ikan Bakar Cianjur', -7.449432175602407, 112.70375097697081),
(12, 'Meiji Park Cafe', 'Kuliner', 'Kuliner Meiji Park Cafe', -7.484176017940495, 112.69723892211914),
(15, 'Lapangan Sepak Bola Gor Sidoarjo', 'Hiburan', 'Hiburan Lapangan Sepak Bola Gor Sidoarjo', -7.447757238690241, 112.70587027072906),
(16, 'Surya Square & Garden', 'Hiburan', 'Hiburan Surya Square & Garden', -7.455071023918097, 112.67865657806396),
(17, 'Alun - Alun Kabupaten Sidoarjo', 'Hiburan', 'Hiburan Alun - Alun Kabupaten Sidoarjo', -7.446193402588802, 112.71768808364868),
(18, 'Source Coffee Sidoarjo', 'Kuliner', 'Kuliner Source Coffee Sidoarjo', -7.46149641588024, 112.72800922393799);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourism`
--
ALTER TABLE `tourism`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourism`
--
ALTER TABLE `tourism`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
