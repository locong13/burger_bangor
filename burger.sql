-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 10:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burger`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `email`, `no_tlp`, `nama`) VALUES
(1, 'ryanwp28@gmail.com', 2147483647, 'ryanwp');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `sub_detail` varchar(100) NOT NULL,
  `harga` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama`, `gambar`, `detail`, `sub_detail`, `harga`) VALUES
(1, 'Hamburger', 'img/ken1.jpeg', 'Hamburger adalah hidangan cepat saji yang terdiri dari daging cincang yang dibentuk menjadi patty, kemudian dipanggang atau digoreng, dan disajikan di dalam roti bundar yang sering disebut sebagai \"bun\". Hamburger biasanya disertai dengan berbagai macam p', 'lorem ipsum', '35k '),
(2, 'Friens Fries', 'img/bur1.jpeg', 'Kentang goreng adalah hidangan yang populer dan disukai oleh banyak orang di seluruh dunia. Hidangan ini umumnya terdiri dari kentang yang dipotong-potong dan digoreng hingga berwarna keemasan dan renyah. Berikut adalah penjelasan tentang kenta', 'asal layah ape jaen', '25k'),
(3, 'Pizza', 'img/4.jpg', 'Pizza adalah hidangan yang berasal dari Italia, tetapi telah menjadi salah satu makanan internasional yang paling populer. Pizza umumnya terdiri dari adonan yang tipis dan lembut yang dilapisi dengan saus tomat, keju, dan berbagai topping. Berikut adalah ', 'gitu gak der', '50k');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
