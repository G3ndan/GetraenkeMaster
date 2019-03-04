-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2019 at 12:57 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Getranke_Manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bestellungen`
--

CREATE TABLE `Bestellungen` (
  `g_id` int(11) NOT NULL,
  `sorte` varchar(80) NOT NULL,
  `anzahl` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Bestellungen`
--

INSERT INTO `Bestellungen` (`g_id`, `sorte`, `anzahl`, `user_id`, `date`) VALUES
(1, 'Wasser 1.0l Still', 3, 1, '2019-02-07'),
(2, 'Wasser 1.0l Sprudel', 4, 2, '2019-02-07'),
(3, 'Wasser 1.0l Still', 1, 3, '2019-02-07'),
(10, 'Wasser 1.0l Still', 3, 7, '2019-02-11'),
(11, 'Wasser 1.0l Still', 3, 7, '2019-02-11'),
(12, 'Milch 1.0l', 2, 7, '2019-02-11'),
(13, 'Cola 0.5l Zero', 2, 7, '2019-02-11'),
(14, 'Wasser 1.0l Still', 3, 7, '2019-02-11'),
(15, 'Milch 1.0l', 2, 7, '2019-02-11'),
(16, 'Cola 0.5l Zero', 2, 7, '2019-02-11'),
(20, 'Milch 1.0l', 3, 7, '2019-02-11'),
(21, 'Cola 0.5l Light', 1, 7, '2019-02-11'),
(22, 'Wasser 0.5l Medium', 2, 7, '2019-02-11'),
(23, 'Wasser 1.0l Still', 1, 7, '2019-02-11'),
(24, 'Cola 0.5l Zero', 1, 7, '2019-02-11'),
(25, 'Fanta 0.5l', 4, 7, '2019-02-11'),
(26, 'Wasser 1.0l Still', 2, 2, '2019-02-12'),
(27, 'Milch 1.0l', 2, 2, '2019-02-12'),
(28, 'Cola 0.5l Zero', 1, 2, '2019-02-12'),
(40, 'Wasser 0.5l Sprudel', 1, 2, '2019-02-14'),
(43, 'Wasser 0.5l Sprudel', 1, 2, '2019-02-14'),
(44, 'Milch 1.0l', 4, 1, '2019-02-15'),
(45, 'Milch 1.0l', 1, 1, '2019-01-05'),
(46, 'Milch 1.0l', 1, 1, '2019-03-05'),
(47, 'Milch 1.0l', 1, 1, '2019-04-05'),
(48, 'Milch 1.0l', 1, 1, '2019-05-05'),
(49, 'Milch 1.0l', 1, 1, '2019-06-05'),
(50, 'Milch 1.0l', 1, 1, '2019-07-05'),
(51, 'Milch 1.0l', 1, 1, '2019-08-05'),
(52, 'Milch 1.0l', 1, 1, '2019-09-05'),
(53, 'Milch 1.0l', 1, 1, '2019-10-05'),
(54, 'Milch 1.0l', 1, 1, '2019-11-05'),
(55, 'Milch 1.0l', 1, 1, '2019-12-05'),
(56, 'Fanta 0.5l', 1, 1, '2019-02-19'),
(57, 'Wasser 1.0l Still', 1, 1, '2019-02-19'),
(58, 'Cola 0.5l Zero', 1, 1, '2019-02-19'),
(59, 'Fanta 0.5l', 4, 1, '2019-02-19'),
(60, 'Cola 0.5l Normal', 1, 1, '2019-02-19'),
(61, 'Wasser 1.0l Sprudel', 1, 1, '2019-02-19'),
(62, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-19'),
(63, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-19'),
(64, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-19'),
(65, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-19'),
(66, 'Cola 0.5l Light', 1, 1, '2019-02-19'),
(67, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-19'),
(68, 'Wasser 1.0l Sprudel', 1, 1, '2019-02-19'),
(69, 'Cola 0.5l Normal', 1, 1, '2019-02-19'),
(70, 'Cola 0.5l Light', 1, 1, '2019-02-19'),
(71, 'Wasser 0.5l Still', 1, 1, '2019-02-19'),
(72, 'Cola 0.5l Normal', 1, 1, '2019-02-20'),
(73, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-20'),
(74, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-20'),
(75, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-20'),
(76, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-20'),
(77, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-20'),
(78, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-20'),
(79, 'Wasser 0.5l Sprudel', 1, 1, '2019-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `Sorte`
--

CREATE TABLE `Sorte` (
  `Getraenke` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Sorte`
--

INSERT INTO `Sorte` (`Getraenke`) VALUES
('Wasser 0.5l Sprudel'),
('Wasser 0.5l Medium'),
('Wasser 0.5l Still'),
('Wasser 1.0l Sprudel'),
('Wasser 1.0l Medium'),
('Wasser 1.0l Still'),
('Cola 0.5l Normal'),
('Cola 0.5l Light'),
('Cola 0.5l Zero'),
('Fanta 0.5l'),
('Cola 0.5l Gemischt'),
('Milch 1.0l');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` binary(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`user_id`, `email`, `password`) VALUES
(1, 'admin@admin.admin', 0x243279243130247457557855536c585478752e554269677349784c48655054754f416849516b53504343375637344e49467850683450527279632f6d),
(2, 'aaa@aaa.aaa', 0x243279243130245a7a5434793243546848306e39564d346a6662536f65726d6d34686b735148626a644365494e41427833453666585776376b593257),
(3, 'bbb@aaa.aaa', 0x243279243130244a5945524f515a68666b4e2f4f54326177724c4e324f73463458476f476734596545326e79637969447846762f66556b54475a3565),
(4, 'aaa@fff.fff', 0x2432792431302433713474537a4a7778433930704a7354725667524e754979313654626330546c69647561715643354d58376d664e4c4667674e3053);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bestellungen`
--
ALTER TABLE `Bestellungen`
  ADD PRIMARY KEY (`g_id`),
  ADD KEY `users` (`user_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bestellungen`
--
ALTER TABLE `Bestellungen`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
