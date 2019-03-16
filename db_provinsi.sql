-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 02:58 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_provinsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_person`
--

CREATE TABLE `m_person` (
  `id` int(11) NOT NULL,
  `name_person` varchar(50) NOT NULL,
  `region_id` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `income` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jlh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_person`
--

INSERT INTO `m_person` (`id`, `name_person`, `region_id`, `address`, `income`, `created_at`, `jlh`) VALUES
(1, 'Mamet', '4', 'Jls.Kejaksaan', 10000000, '2019-03-16 09:07:53', 0),
(2, 'Rojali', '4', 'mdnasdnas', 12312312, '2019-03-16 09:07:45', 0),
(4, 'Bambang', '3', 'asdasasdasd', 100000000, '2019-03-16 09:07:18', 0),
(5, 'Suharja', '5', 'Jl.pencepongan\r\n', 1200000, '2019-03-16 13:36:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_provinsi`
--

CREATE TABLE `m_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `namadaerah` varchar(50) NOT NULL,
  `jml_penduduk` int(11) NOT NULL,
  `ttl_pendapatan` int(11) NOT NULL,
  `rrt_pendapatan` int(11) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_regions`
--

CREATE TABLE `m_regions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_regions`
--

INSERT INTO `m_regions` (`id`, `name`, `created_at`) VALUES
(1, 'DKI Jakarta', '2019-03-16 08:02:22'),
(3, 'Bandung', '2019-03-16 08:05:44'),
(4, 'Surabaya', '2019-03-16 08:05:54'),
(5, 'Bekasi', '2019-03-16 11:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `m_users`
--

CREATE TABLE `m_users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_users`
--

INSERT INTO `m_users` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'admin@admin.com', 'admin', '2019-03-16 03:38:31'),
(3, 'admin', 'admin', '2019-03-16 10:15:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_person`
--
ALTER TABLE `m_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_provinsi`
--
ALTER TABLE `m_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `m_regions`
--
ALTER TABLE `m_regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_users`
--
ALTER TABLE `m_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_person`
--
ALTER TABLE `m_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_provinsi`
--
ALTER TABLE `m_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_regions`
--
ALTER TABLE `m_regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_users`
--
ALTER TABLE `m_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
