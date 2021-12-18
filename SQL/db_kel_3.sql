-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 01:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kel_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'manager'),
(2, 'pegawai'),
(4, 'Head of Human Resource');

-- --------------------------------------------------------

--
-- Table structure for table `performa`
--

CREATE TABLE `performa` (
  `id_performa` int(11) NOT NULL,
  `pemohon` int(11) NOT NULL,
  `pegawai` int(11) NOT NULL,
  `unit` int(2) NOT NULL,
  `deskripsi_layanan` text NOT NULL,
  `tanggal_deadline` date NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `file` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
  `status` int(2) NOT NULL,
  `performa` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `delegate_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performa`
--

INSERT INTO `performa` (`id_performa`, `pemohon`, `pegawai`, `unit`, `deskripsi_layanan`, `tanggal_deadline`, `tanggal_selesai`, `file`, `catatan`, `status`, `performa`, `created_at`, `update_at`, `delegate_at`) VALUES
(1, 2, 2, 2, 'benerin printer eror', '2021-12-21', '2021-12-18 03:53:31', '751266d9d24de33ae018c86b5e704f61.pdf', 'Good Job Again', 3, 5, '2021-12-17 11:02:18', '2021-12-17 14:38:29', '0000-00-00 00:00:00'),
(3, 2, 2, 2, 'tes', '2021-12-21', '2021-12-17 12:03:15', '32cdb45a354645a6792b32ea84bba2f3.pdf', 'Good Job', 3, 5, '2021-12-17 11:31:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 2, 2, 'Benerin monitor', '2021-12-24', '2021-12-18 03:57:06', '12dd64dccb51104e844cedaeadc77f84.pdf', 'Good Job Again', 3, 5, '2021-12-18 03:47:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 2, 2, 'Benerin power supply', '2021-12-22', '2021-12-18 04:29:05', 'bf52081d6c332e26e90a9e6ec9549787.pdf', 'Good Job, I will hire you again!', 3, 4, '2021-12-18 04:02:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 6, 2, 'Benerin jam', '2021-12-20', '2021-12-18 10:49:13', '31ec47784d268a588fd8810072f4fbe1.pdf', 'Mantap', 3, 5, '2021-12-18 04:43:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 6, 4, 'Bikin web app', '2021-12-31', '0000-00-00 00:00:00', '', '', 1, 0, '2021-12-18 11:20:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`) VALUES
(1, 'unit akuntansi\r\n'),
(2, 'support'),
(4, 'IT'),
(5, 'HRD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `no_pegawai` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `unit` int(2) NOT NULL,
  `jabatan` int(2) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('1','2','3','4','5','6') NOT NULL,
  `last_login` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `no_pegawai`, `nama`, `unit`, `jabatan`, `no_hp`, `email`, `password`, `role`, `last_login`) VALUES
(1, '0001', 'Admin', 2, 1, '0831313871', 'saocekuy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', '2021-12-18 10:43:56'),
(2, '0002', 'pegawai 1', 1, 2, '082317729876', 'soackeuy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '4', '2021-12-18 19:23:22'),
(4, '0003', 'Manager', 4, 1, '0812455578', 'rikikurniawan88@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2', '2021-12-18 19:10:07'),
(5, '0004', 'Bag SDM', 5, 4, '0812345678', 'rikikurniawan88@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '3', '2021-12-18 19:23:50'),
(6, '0005', 'Riki', 4, 2, '08951922147', 'rikikurniawan88@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '4', '2021-12-18 16:48:36'),
(7, '0006', 'Agus', 4, 2, '08154477774', 'soackeuy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '4', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `performa`
--
ALTER TABLE `performa`
  ADD PRIMARY KEY (`id_performa`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `performa`
--
ALTER TABLE `performa`
  MODIFY `id_performa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
