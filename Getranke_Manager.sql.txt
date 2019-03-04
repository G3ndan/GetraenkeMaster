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
(1, 'admin@admin.admin', 0x243279243130247457557855536c585478752e554269677349784c48655054754f416849516b53504343375637344e49467850683450527279632f6d);

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