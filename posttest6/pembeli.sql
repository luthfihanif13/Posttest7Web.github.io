-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 04:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama_pembeli`, `email`, `no_hp`, `alamat`, `gambar`, `waktu`) VALUES
(1, 'ahmad', 'ahmad@gmail.com', 89663472, 'jl.samarinda', '', '2022-10-27 22:08:55'),
(2, 'luthfi', 'luthfi@gmail.com', 89522322, 'jl.kenangan', '', '2022-10-27 22:08:55'),
(3, 'hanif', 'hanif@gmail.com', 81324422, 'jl.merdeka', '', '2022-10-27 22:08:55'),
(5, 'piii', 'piii@gmail.com', 812998122, 'jl.kusuma b1', '1.jpg', '2022-10-28 09:23:35'),
(6, 'peanut', 'kacangtanah@gmail.com', 332817332, 'jl. selai peanut', 'ISO.jpg', '2022-10-28 09:22:20'),
(8, 'piilut', 'lutpii@gmsil.com', 2147483647, 'jl.mulawarman', '22. pilih bahasa baru lanjut.jpg', '2022-10-28 14:34:23'),
(10, 'ahmad luthfi hanif', 'ahmadluthfi.alh@gmail.com', 812998122, 'jl.kusuma bangsa 2', '13(lalu pilih partision table).jpg', '2022-10-28 14:18:51'),
(11, 'haniifLuthfi', 'luthfiHanif@gmail.com', 822936422, 'jl.basuki rahmat 2A', 'XAMPP.png', '2022-10-28 14:48:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
