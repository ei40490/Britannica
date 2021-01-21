-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 08:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `britannicadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `emri`, `email`, `phone`, `message`, `created_date`) VALUES
(5, 'eeded', 'e@test.com', 0, 'asdasdasdasasdasdasasdaad', '2020-12-01 17:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `kurset`
--

CREATE TABLE `kurset` (
  `id` int(11) NOT NULL,
  `titulli` tinytext NOT NULL,
  `pershkrimi` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `autori` varchar(128) NOT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurset`
--

INSERT INTO `kurset` (`id`, `titulli`, `pershkrimi`, `foto`, `autori`, `created_date`) VALUES
(28, 'Anglisht', ' Gjuhë Angleze nga A1 në C2. Per grupmoshat: 6 – 11 vjeç. (3 herë                 ne javë nga 50 minuta) 10 – 17 vjeç. (3 herë ne...', 'english.jpg', '0', '2020-07-27 02:32:20'),
(29, 'Italisht', 'Gjuhë Italiane nga A1 në B2.Per grupmoshat: 10 – 17 vjeç. (3                 herë ne javë nga 50 minuta) 18+ vjeç. (3 herë ne javë nga...', 'Italian.jpg', '0', '2020-07-27 02:32:34'),
(30, 'Gjermanisht', '    Gjuhë Gjermane nga A1 në B2.Per grupmoshat: 10 – 17 vjeç. (3                 herë ne javë nga 50 minuta) 18+ vjeç. (3 herë ne javë...', 'german.jpg', '0', '2020-07-27 02:32:51'),
(31, 'Frengjisht', '  Gjuhë Franceze nga A1 në B2. Per grupmoshat: 10 – 17 vjeç. (3                 herë ne javë nga 50 minuta) 18+ vjeç. (3 herë ne javë...', 'french.jpg', '0', '2020-07-27 02:33:10'),
(32, 'Turqisht', '  Gjuhë Turke nga A1 në B2. Per grupmoshat: 10 – 17 vjeç. (3 herë                 ne javë nga 50 minuta) 18+ vjeç. (3 herë ne javë nga...', 'turkish.jpg', '0', '2020-07-27 02:33:33'),
(33, 'Kroatisht', ' Gjuhë Kroate nga A1 në B2. Per grupmoshat: 10 – 17 vjeç. (3 herë                 ne javë nga 50 minuta) 18+ vjeç. (3 herë ne javë nga...', 'croatian.jpg', 'Edon', '2020-07-27 02:33:58'),
(34, 'Shqip', ' Gjuhë Shqipe nga A1 në B2. Per grupmoshat: 18+ vjeç. (3 herë ne                 javë nga 75 minuta) Kurset prezantojnë të dyja, Shqipen e                 shkruar...', 'albanian.jpg', '0', '2020-07-27 02:34:29'),
(36, 'Spanisht', 'Gjuhë Shqipe nga A1 në B2. Per grupmoshat: 18+ vjeç. (3 herë ne                 javë nga 75 minuta) Kurset prezantojnë të dyja, Spanjolle e                 shkruar...', 'spanish.jpg', '0', '2020-07-27 02:37:27'),
(37, 'Kurse Speciale', 'TOEFL (Testi i Anglishtes si Gjuhë e Huaj) Përgatitje IELTS                 (Sistem Ndërkombëtar i Testimit të Gjuhës Angleze) Përgatitje                 APTIS ...', 'kursespeciale.jpg', '0', '2020-07-27 02:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `lajmet`
--

CREATE TABLE `lajmet` (
  `id` int(11) NOT NULL,
  `titulli` tinytext DEFAULT NULL,
  `pershkrimi` varchar(255) NOT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lajmet`
--

INSERT INTO `lajmet` (`id`, `titulli`, `pershkrimi`, `foto`, `created_date`) VALUES
(1, 'Fjalit', ' Fjale te urta nga studentet shum fjale', 'gift.jpg', NULL),
(3, '28 Nentori', 'Urime dita e flamurit', 'Flamuri.jpg', NULL),
(5, 'Ndertimi', 'Ndertimi i qyteteve', 'gift.jpg', NULL),
(7, 'Br', 'Britannica\'s Talent', 'talent.png', NULL),
(9, 'Kid', 'Kids Football Tournament', 'football.jpg', NULL),
(11, 'Handikos', 'Handikos ndihmohet nga Britannica me \"Gift Cards\"', 'gift.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pershkrimet`
--

CREATE TABLE `pershkrimet` (
  `id` int(11) NOT NULL,
  `titulli` varchar(20) NOT NULL,
  `body` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pershkrimet`
--

INSERT INTO `pershkrimet` (`id`, `titulli`, `body`) VALUES
(1, 'Sketch London', 'asdasdasdsaasdsadsdsaasddasds'),
(2, 'Sketch London', 'asdasdasdsaasdsadsdsaasddasds');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `created_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `created_date`) VALUES
(52, 'edonEdited', 'edon@live.com', '$2y$10$pYDOPTW4UJ4dWZs9w/X/eOQVxBARN3W4nKnzeVUS5N0ikGhXVFWSK', 1, '2020-07-26 21:47:54'),
(55, 'Nona Besit', 'nana@besit.coma', 'test123', 1, '2020-07-26 22:17:51'),
(56, 'edon', 'aaad@test.com', '$2y$10$24fY3Ft49DPMvIuoylWfg./BZFEKwF6UTazUlDN9b0ErqleuyzN7i', 0, '2020-07-27 00:42:44'),
(57, 'edon', 'edon@a.com', '$2y$10$ADTYcQCzpgi8Pi1NIgaB5Oh52eInKf2EdM1eE7ncw2a6Bs3U6l7wy', 1, '2020-07-27 02:59:26'),
(61, 'edon', 'aaa@aa.com', '$2y$10$ljxNSUm5T/uUG05ZYvN3/ONVarhLucW28JElyjrnGN6vHmfchRx7O', 0, '2020-07-27 03:18:21'),
(62, 'use', 'use@use.com', '$2y$10$mZPEQ8JNJfxWTni2Z.w70e/xnOibD4/QRf.9g6EnSRV2xxuSu9a.C', 0, '2020-07-27 03:26:02'),
(64, 'aaaa', 'admin@po.com', '$2y$10$PkXKHN7miPRAfu7A2fjsieTOZELi63uVbFc0xpi/BQhpmA1J2G1B.', 1, '2020-07-27 04:14:56'),
(65, 'art', 'art@des.com', '$2y$10$mYnOrxIzF/OlfbkkU60MluawJ8KVUlUoruZIl9Jh/s03wsDMleZZy', 0, '2020-07-27 20:10:50'),
(67, 'ubt', 'ubt@uni.net', '$2y$10$G4aYYYRPhxm1WGUvsZ2G6e3hrJOUb./P6KNCEwf8NzJIysZxkT5ZC', 0, '2020-08-20 15:07:38'),
(68, 'Admini Kryesor', 'admini@kryesor.com', 'Presheva1234.', 1, '2020-08-20 15:22:15'),
(70, 'aaaa', 'aaaaaa@bbbb.com', '$2y$10$6nu137Ui5t4GZnzEr.Gd0eLcyvwH1Sd4cb9kNvJ.GSBVrv2iGQwSG', 1, '2020-08-20 15:23:03'),
(71, 'test', 'tes@tes.com', '$2y$10$EZTNzKG2bO9Ueszmas.z7e94ykDDUUmd6Kb.2oFO7FXE8WUg52F8a', 0, '2020-08-20 16:06:19'),
(73, 'Liza', 'Liza@abe.com', '$2y$10$slvVZc9rRtELYQvTagPwGuDwpN7kzXy9N/wkp9/dvO8MWX8HpFHIK', 0, '2020-08-21 11:09:06'),
(74, 'Edon', 'Edon@ismaili.com', '$2y$10$xmcLykmCCW3dcHVsqRwDfuNzd3VDund75OMusEC1t2CUbKPUpwv6K', 0, '2020-08-21 11:26:35'),
(75, 'xl', 'xl@xl.com', '$2y$10$XVo5H/CjnHwIr.BRYgN3GOttVAVooaJ6LIapGR/nW7deMyYpf.mma', 1, '2020-10-30 16:10:49'),
(76, 'laki', 'laki@live.com', '$2y$10$oQ9lfE2bsFz76DMmOwqWTuiGZlrKkdMJj0aSZy768epcoSgDcucZC', 0, '2020-11-11 18:54:12'),
(77, 'Ellie', 'ellie@ma-emira.com', '$2y$10$HaMCPpzVWWYXzFmJhCC1AuNCNLSZgRGUD9NQMFlO49CSXov9msmfi', 1, '2020-11-25 22:27:03'),
(78, 'drilon', 'driton@gmai.com', '$2y$10$jCwapByIVZo.1517/EoJ..Dc7stvRUSkWhTTT68.yMCI1EPrL8uu.', 0, '2020-12-16 01:33:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurset`
--
ALTER TABLE `kurset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lajmet`
--
ALTER TABLE `lajmet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pershkrimet`
--
ALTER TABLE `pershkrimet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kurset`
--
ALTER TABLE `kurset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `lajmet`
--
ALTER TABLE `lajmet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pershkrimet`
--
ALTER TABLE `pershkrimet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
