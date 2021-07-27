-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 11:50 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgumi`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter`) VALUES
(8);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `order` tinyint(16) NOT NULL,
  `module` varchar(32) CHARACTER SET utf8 NOT NULL,
  `title` varchar(32) CHARACTER SET utf8 NOT NULL,
  `url` text CHARACTER SET utf8 NOT NULL,
  `location` varchar(32) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `order`, `module`, `title`, `url`, `location`) VALUES
(1, 1, 'main', 'Főoldal', '', 'main,footer'),
(2, 3, 'rolunk', 'Rólunk', 'rolunk', 'main,footer'),
(3, 4, 'kapcsolat', 'Kapcsolat', 'kapcsolat', 'main'),
(4, 2, 'munkaink', 'Munkáink', 'munkaink', 'main,footer'),
(5, 0, 'single-product', 'Munka', 'munka/', ''),
(7, 6, '', 'Látogasson el hozzánk!', 'https://www.google.com/maps/place/Bal%C3%A1zs+Gumi+Kft./@46.4323809,20.3185601,15z/data=!4m8!1m2!3m1!2sBal%C3%A1zs+Gumi+Kft.!3m4!1s0x47446fa43308c73f:0x47bebe760c0de66d!8m2!3d46.4323816!4d20.3185594', 'main,footer');

-- --------------------------------------------------------

--
-- Table structure for table `munkaink`
--

CREATE TABLE `munkaink` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `sku` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `munkaink`
--

INSERT INTO `munkaink` (`id`, `name`, `sku`, `description`, `date`) VALUES
(26, 'Személyautó, kisteherautó  és motorkerékpár gumiszerelése, centirozása', 'szemelyauto,-kisteherauto--es-motorkerekpar-gumiszerelese,-centirozasa', 'személyautó, kisteherautó  és motorkerékpár gumiszerelése és centirozasa', '2021-03-16'),
(27, 'Gumi köpeny javítás ', 'gumi-kopeny-javitas-', 'gumi köpeny javítás, nem tudok rola tobbet mondani', '2021-03-16'),
(28, 'Alufelni görgőzés, javítása', 'alufelni-gorgozes,-javitasa', 'Alufelni görgőzés ,javítása, ennyi igazabol', '2021-03-16'),
(29, 'Autóklíma töltése, ózonos fertőtlenítése', 'autoklima-toltese,-ozonos-fertotlenitese', 'autóklíma töltése, ózonos fertotlenitese, nagyon szépen végzett munka', '2021-03-16'),
(30, 'Futómű beállítás  ', 'futomu-beallitas--', 'futómű beállítás, igazábol csak ennyi', '2021-03-16'),
(31, 'Autójavítás', 'autojavitas', 'Ez egy elég széleskörű leírás, bármi jöhet!', '2021-03-16'),
(32, 'Motor olajcsere ', 'motor-olajcsere-', 'motor olajcsere, szűrő is cserélhető', '2021-03-16'),
(33, 'Műszakira való felkészítés', 'muszakira-valo-felkeszites', 'muszakira való felkészítés, ez magában foglalja az összes többi munkánkat is', '2021-03-16'),
(34, 'Fékjavítas, futómű javítás', 'fekjavitas,-futomu-javitas', 'fekjavitas, futómű javítás, bármi ami gurul!', '2021-03-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `munkaink`
--
ALTER TABLE `munkaink`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `munkaink`
--
ALTER TABLE `munkaink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
