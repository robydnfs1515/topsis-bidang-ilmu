-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 02:56 AM
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
-- Database: `dbskripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `ID_ALTERNATIF` int(11) NOT NULL,
  `NAMA_ALTERNATIF` varchar(50) NOT NULL,
  `KETERANGAN_ALTERNATIF` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`ID_ALTERNATIF`, `NAMA_ALTERNATIF`, `KETERANGAN_ALTERNATIF`) VALUES
(1, 'Sistem Pakar', '-'),
(3, 'Sistem Pendukung Keputusan', '-'),
(4, 'Citra', '-'),
(5, 'Jaringan Komputer', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `ID_KRITERIA` int(11) NOT NULL,
  `NAMA_KRITERIA` varchar(50) NOT NULL,
  `BOBOT_KRITERIA` int(11) NOT NULL,
  `STATUS_KRITERIA` varchar(11) NOT NULL,
  `KETERANGAN_KRITERIA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`ID_KRITERIA`, `NAMA_KRITERIA`, `BOBOT_KRITERIA`, `STATUS_KRITERIA`, `KETERANGAN_KRITERIA`) VALUES
(1, 'Nilai Akademik', 5, 'Benefit', '-'),
(2, 'Historis Project', 4, 'Benefit', '-'),
(3, 'Pelatihan', 3, 'Benefit', '-'),
(4, 'Minat', 4, 'Benefit', '-');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID_MHS` int(11) NOT NULL,
  `NAMA_MHS` varchar(60) NOT NULL,
  `NIM_MHS` varchar(15) NOT NULL,
  `ANGKATAN_MHS` varchar(11) NOT NULL,
  `PRODI_MHS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID_MHS`, `NAMA_MHS`, `NIM_MHS`, `ANGKATAN_MHS`, `PRODI_MHS`) VALUES
(34, 'Ulfa Ilyatin', '170170095', '2017', 'Teknik Informatika'),
(35, 'Suci Ramadani', '170170089', '2017', 'Teknik Informatika'),
(37, 'Khairuni', '170170092', '2017', 'Teknik Informatika'),
(38, 'Lindawati', '170170002', '2017', 'Teknik Informatika'),
(39, 'Farah Julianda', '180170082', '2018', 'Teknik Informatika'),
(40, 'Risfan Yani', '180170071', '2018', 'Teknik Informatika'),
(41, 'Ali herlian', '180170123', '2018', 'Teknik Informatika'),
(42, 'Silvia Anggraini', '180170018', '2018', 'Teknik Informatika'),
(43, 'Nurnajmina', '180170075', '2018', 'Teknik Informatika'),
(44, 'Putri Ulan Dari', '180170067', '2018', 'Teknik Informatika'),
(45, 'Zulena', '180170119', '2018', 'Teknik Informatika'),
(46, 'Rizki aulia', '180170021', '2018', 'Teknik Informatika'),
(47, 'Aisyah Bulkeis', '180170105', '2018', 'Teknik Informatika'),
(48, 'Isna', '180170084', '2018', 'Teknik Informatika'),
(49, 'Lidya Istiqa', '180170096', '2018', 'Teknik Informatika'),
(50, 'Nurqamarina', '180170039', '2018', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `matriks`
--

CREATE TABLE `matriks` (
  `ID_MATRIKS` int(11) NOT NULL,
  `ID_MHS` int(11) NOT NULL,
  `M11` int(11) NOT NULL,
  `M12` int(11) NOT NULL,
  `M13` int(11) NOT NULL,
  `M14` int(11) NOT NULL,
  `M21` int(11) NOT NULL,
  `M22` int(11) NOT NULL,
  `M23` int(11) NOT NULL,
  `M24` int(11) NOT NULL,
  `M31` int(11) NOT NULL,
  `M32` int(11) NOT NULL,
  `M33` int(11) NOT NULL,
  `M34` int(11) NOT NULL,
  `M41` int(11) NOT NULL,
  `M42` int(11) NOT NULL,
  `M43` int(11) NOT NULL,
  `M44` int(11) NOT NULL,
  `M51` int(11) NOT NULL,
  `M52` int(11) NOT NULL,
  `M53` int(11) NOT NULL,
  `M54` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matriks`
--

INSERT INTO `matriks` (`ID_MATRIKS`, `ID_MHS`, `M11`, `M12`, `M13`, `M14`, `M21`, `M22`, `M23`, `M24`, `M31`, `M32`, `M33`, `M34`, `M41`, `M42`, `M43`, `M44`, `M51`, `M52`, `M53`, `M54`) VALUES
(1, 1, 5, 1, 2, 5, 5, 1, 3, 4, 5, 1, 3, 4, 4, 1, 3, 3, 5, 3, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `matriks_dua`
--

CREATE TABLE `matriks_dua` (
  `ID_MATRIKS_DUA` int(11) NOT NULL,
  `ID_MHS` int(11) NOT NULL,
  `MDUA_SATU` int(11) NOT NULL,
  `MDUA_DUA` int(11) NOT NULL,
  `MDUA_TIGA` int(11) NOT NULL,
  `MDUA_EMPAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matriks_dua`
--

INSERT INTO `matriks_dua` (`ID_MATRIKS_DUA`, `ID_MHS`, `MDUA_SATU`, `MDUA_DUA`, `MDUA_TIGA`, `MDUA_EMPAT`) VALUES
(1, 1, 5, 1, 3, 5),
(2, 34, 5, 1, 2, 5),
(3, 35, 5, 5, 3, 3),
(4, 37, 5, 1, 2, 2),
(5, 38, 4, 1, 2, 2),
(6, 39, 5, 1, 3, 5),
(7, 40, 5, 5, 2, 2),
(8, 41, 4, 5, 1, 1),
(9, 42, 4, 5, 3, 5),
(10, 43, 5, 5, 5, 5),
(11, 44, 5, 5, 2, 5),
(12, 45, 5, 1, 3, 5),
(13, 46, 4, 3, 2, 2),
(14, 47, 5, 5, 4, 5),
(15, 48, 5, 5, 3, 3),
(16, 49, 4, 4, 2, 5),
(17, 50, 5, 1, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `matriks_empat`
--

CREATE TABLE `matriks_empat` (
  `ID_MATRIKS_EMPAT` int(11) NOT NULL,
  `ID_MHS` int(11) NOT NULL,
  `MEMPAT_SATU` int(11) NOT NULL,
  `MEMPAT_DUA` int(11) NOT NULL,
  `MEMPAT_TIGA` int(11) NOT NULL,
  `MEMPAT_EMPAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matriks_empat`
--

INSERT INTO `matriks_empat` (`ID_MATRIKS_EMPAT`, `ID_MHS`, `MEMPAT_SATU`, `MEMPAT_DUA`, `MEMPAT_TIGA`, `MEMPAT_EMPAT`) VALUES
(1, 1, 4, 1, 3, 3),
(2, 34, 5, 1, 2, 4),
(3, 35, 5, 5, 3, 3),
(4, 37, 5, 1, 1, 4),
(5, 38, 3, 1, 2, 3),
(6, 39, 4, 1, 3, 3),
(7, 40, 5, 5, 1, 2),
(8, 41, 4, 1, 1, 1),
(9, 42, 5, 5, 3, 5),
(10, 43, 5, 1, 2, 2),
(11, 44, 5, 5, 3, 4),
(12, 45, 5, 1, 3, 4),
(13, 46, 4, 1, 2, 2),
(14, 47, 5, 5, 3, 3),
(15, 48, 5, 5, 4, 4),
(16, 49, 5, 5, 2, 3),
(17, 50, 5, 5, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `matriks_lima`
--

CREATE TABLE `matriks_lima` (
  `ID_MATRIKS_LIMA` int(11) NOT NULL,
  `ID_MHS` int(11) NOT NULL,
  `MLIMA_SATU` int(11) NOT NULL,
  `MLIMA_DUA` int(11) NOT NULL,
  `MLIMA_TIGA` int(11) NOT NULL,
  `MLIMA_EMPAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matriks_lima`
--

INSERT INTO `matriks_lima` (`ID_MATRIKS_LIMA`, `ID_MHS`, `MLIMA_SATU`, `MLIMA_DUA`, `MLIMA_TIGA`, `MLIMA_EMPAT`) VALUES
(1, 1, 5, 4, 1, 5),
(2, 34, 4, 1, 2, 4),
(3, 35, 4, 1, 3, 3),
(4, 37, 5, 1, 2, 1),
(5, 38, 3, 1, 2, 2),
(6, 39, 5, 5, 2, 4),
(7, 40, 5, 1, 2, 2),
(8, 41, 4, 1, 1, 1),
(9, 42, 4, 5, 3, 3),
(10, 43, 5, 5, 4, 5),
(11, 44, 5, 3, 3, 4),
(12, 45, 5, 1, 4, 5),
(13, 46, 4, 3, 2, 2),
(14, 47, 5, 5, 3, 3),
(15, 48, 5, 5, 4, 4),
(16, 49, 5, 1, 3, 3),
(17, 50, 3, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `matriks_satu`
--

CREATE TABLE `matriks_satu` (
  `ID_MATRIKS_SATU` int(11) NOT NULL,
  `ID_MHS` int(11) NOT NULL,
  `MSATU_SATU` int(11) NOT NULL,
  `MSATU_DUA` int(11) NOT NULL,
  `MSATU_TIGA` int(11) NOT NULL,
  `MSATU_EMPAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matriks_satu`
--

INSERT INTO `matriks_satu` (`ID_MATRIKS_SATU`, `ID_MHS`, `MSATU_SATU`, `MSATU_DUA`, `MSATU_TIGA`, `MSATU_EMPAT`) VALUES
(1, 1, 5, 1, 1, 5),
(2, 34, 3, 1, 1, 5),
(3, 35, 5, 1, 3, 3),
(4, 37, 5, 1, 1, 3),
(5, 38, 4, 1, 2, 2),
(6, 39, 5, 1, 2, 5),
(7, 40, 5, 5, 2, 5),
(8, 41, 4, 5, 1, 2),
(9, 42, 5, 5, 3, 5),
(10, 43, 5, 3, 3, 2),
(11, 44, 5, 5, 3, 5),
(12, 45, 4, 1, 3, 3),
(13, 46, 4, 1, 2, 2),
(14, 47, 5, 1, 3, 3),
(15, 48, 4, 1, 2, 3),
(16, 49, 4, 4, 2, 5),
(17, 50, 4, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `matriks_tiga`
--

CREATE TABLE `matriks_tiga` (
  `ID_MATRIKS_TIGA` int(11) NOT NULL,
  `ID_MHS` int(11) NOT NULL,
  `MTIGA_SATU` int(11) NOT NULL,
  `MTIGA_DUA` int(11) NOT NULL,
  `MTIGA_TIGA` int(11) NOT NULL,
  `MTIGA_EMPAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matriks_tiga`
--

INSERT INTO `matriks_tiga` (`ID_MATRIKS_TIGA`, `ID_MHS`, `MTIGA_SATU`, `MTIGA_DUA`, `MTIGA_TIGA`, `MTIGA_EMPAT`) VALUES
(1, 1, 5, 1, 3, 5),
(2, 34, 4, 5, 3, 4),
(3, 35, 5, 5, 3, 3),
(4, 37, 5, 1, 2, 2),
(5, 38, 4, 1, 2, 2),
(6, 39, 5, 1, 3, 4),
(7, 40, 5, 5, 2, 2),
(8, 41, 4, 1, 1, 1),
(9, 42, 5, 1, 1, 3),
(10, 43, 5, 1, 3, 3),
(11, 44, 5, 5, 2, 4),
(12, 45, 5, 1, 3, 3),
(13, 46, 4, 2, 2, 2),
(14, 47, 5, 1, 4, 4),
(15, 48, 5, 2, 4, 4),
(16, 49, 4, 1, 2, 3),
(17, 50, 5, 1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `ID_USERS` int(11) NOT NULL,
  `NAMA_USER` varchar(100) NOT NULL,
  `USERNAME_USER` varchar(100) NOT NULL,
  `PASSWORD_USER` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`ID_USERS`, `NAMA_USER`, `USERNAME_USER`, `PASSWORD_USER`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`ID_ALTERNATIF`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`ID_KRITERIA`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID_MHS`);

--
-- Indexes for table `matriks`
--
ALTER TABLE `matriks`
  ADD PRIMARY KEY (`ID_MATRIKS`);

--
-- Indexes for table `matriks_dua`
--
ALTER TABLE `matriks_dua`
  ADD PRIMARY KEY (`ID_MATRIKS_DUA`);

--
-- Indexes for table `matriks_empat`
--
ALTER TABLE `matriks_empat`
  ADD PRIMARY KEY (`ID_MATRIKS_EMPAT`);

--
-- Indexes for table `matriks_lima`
--
ALTER TABLE `matriks_lima`
  ADD PRIMARY KEY (`ID_MATRIKS_LIMA`);

--
-- Indexes for table `matriks_satu`
--
ALTER TABLE `matriks_satu`
  ADD PRIMARY KEY (`ID_MATRIKS_SATU`);

--
-- Indexes for table `matriks_tiga`
--
ALTER TABLE `matriks_tiga`
  ADD PRIMARY KEY (`ID_MATRIKS_TIGA`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`ID_USERS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `ID_ALTERNATIF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `ID_KRITERIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID_MHS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `matriks`
--
ALTER TABLE `matriks`
  MODIFY `ID_MATRIKS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matriks_dua`
--
ALTER TABLE `matriks_dua`
  MODIFY `ID_MATRIKS_DUA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `matriks_empat`
--
ALTER TABLE `matriks_empat`
  MODIFY `ID_MATRIKS_EMPAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `matriks_lima`
--
ALTER TABLE `matriks_lima`
  MODIFY `ID_MATRIKS_LIMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `matriks_satu`
--
ALTER TABLE `matriks_satu`
  MODIFY `ID_MATRIKS_SATU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `matriks_tiga`
--
ALTER TABLE `matriks_tiga`
  MODIFY `ID_MATRIKS_TIGA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `ID_USERS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
