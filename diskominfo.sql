-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 04:54 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diskominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `nama`
--

CREATE TABLE `nama` (
  `id` int(4) NOT NULL,
  `nospd` varchar(50) NOT NULL,
  `namapegawai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nama`
--

INSERT INTO `nama` (`id`, `nospd`, `namapegawai`) VALUES
(1, '1', 'Yanti Yulianti,Mulyana, S.E.,Drs. H. Wawan Munawar Sidik, M.M.'),
(2, '2', 'Drs. H. Wawan Munawar Sidik, M.M.,Ilham Maulana, S.T.,Mardiyansyah, M.Ip.'),
(3, '3', 'Iwan Setiawan, S.Sos, M.Si,Dr. Drs. Kardenal, M.Si.,H. Soma, S.E.,Mega Puspasari, S.E.,Dany Maya Irmana'),
(4, '4', 'Uus,Asbi,Hj. Supartini,Martimbang Irijono,Dra. Betty Sugiarti,H. Agnes Yoeanes Abidin, S.Sos., M.Si.,H. Rudi Fahrudin, S.E.,Ilham Maulana, S.T.,Yanti Yulianti,Drs. H. Wawan Munawar Sidik, M.M.'),
(5, '5', 'Dr. Drs. Kardenal, M.Si.,Drs. H. Wawan Munawar Sidik, M.M.,Christian P. Messakh, S.Sos.');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(3) NOT NULL,
  `nik` bigint(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nik`, `nama`, `email`, `password`, `jabatan`) VALUES
(1, 22222, 'User', 'user@gmail.com', 'user', 'user'),
(2, 11111, 'Admin', 'admin@gmail.com', 'admin', 'admin'),
(3, 12345, 'Hari', 'mharikhairunuzula@gmail.com', 'khairunuzula', 'admin'),
(6, 20202, 'Zula', 'haritoushiro@gmail.com', 'abcde', 'user'),
(7, 99999, 'udin', 'hahahihi@gmail.com', '123123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `spd`
--

CREATE TABLE `spd` (
  `id` int(4) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `skpd` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `subbagian` varchar(50) NOT NULL,
  `nospd` varchar(50) NOT NULL,
  `tglberangkat` date NOT NULL,
  `tglkembali` date NOT NULL,
  `program` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `koderekening` varchar(30) NOT NULL,
  `uangtransport` bigint(18) NOT NULL,
  `jumlahorang` bigint(18) NOT NULL,
  `uangharian` bigint(18) NOT NULL,
  `surat1` varchar(100) NOT NULL,
  `surat2` varchar(100) NOT NULL,
  `surat3` varchar(100) NOT NULL,
  `surat4` varchar(100) NOT NULL,
  `suratBalasan` varchar(100) NOT NULL,
  `statusCair` varchar(30) NOT NULL DEFAULT 'Menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spd`
--

INSERT INTO `spd` (`id`, `bidang`, `skpd`, `bagian`, `subbagian`, `nospd`, `tglberangkat`, `tglkembali`, `program`, `kegiatan`, `koderekening`, `uangtransport`, `jumlahorang`, `uangharian`, `surat1`, `surat2`, `surat3`, `surat4`, `suratBalasan`, `statusCair`) VALUES
(1, 'bid1', 'skpd1', 'Bag 1', 'SUBBAG 11', '1', '2018-08-29', '2018-08-30', 'abc', 'asc', '5.2.2.15.01', 100000, 3, 100000, 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/query.pdf', 'Disetujui'),
(2, 'bid1', 'skpd2', 'Bag 2', 'SUBBAG 21', '2', '2018-08-29', '2018-08-31', 'Asian Games 2018', 'Opening Ceremony', '5.2.2.15.02', 3000000, 3, 5000000, 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', '', 'Menunggu'),
(3, 'bid1', 'skpd1', 'Bag 1', 'SUBBAG 11', '3', '2018-08-31', '2018-09-05', 'Asian Games 2018', 'Closing ceremony', '5.2.2.15.02', 10000000, 5, 12000000, 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/StatechartDiagram_1.pdf', 'Disetujui'),
(4, 'bid1', 'skpd1', 'Bag 2', 'SUBBAG 21', '4', '2018-08-08', '2018-08-17', 'HUT Republik Indonesia ke 73', 'Perayaan HUT RI', '5.2.2.15.01', 100000000, 10, 22000000, 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/query1.pdf', 'Disetujui'),
(5, 'bid1', 'skpd1', 'Bag 1', 'SUBBAG 11', '5', '2018-08-23', '2018-08-29', 'Asian Games 2018', 'Lomba Badminton', '5.2.2.15.01', 100000000, 3, 12000000, 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', 'assets/DOKUMENSURAT/', '', 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nama`
--
ALTER TABLE `nama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spd`
--
ALTER TABLE `spd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nospd` (`nospd`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nama`
--
ALTER TABLE `nama`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `spd`
--
ALTER TABLE `spd`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
