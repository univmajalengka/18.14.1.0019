-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 05:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbdl_rionurmuhammadseptiyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_guru`
--

CREATE TABLE `d_guru` (
  `Nip` char(15) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Jns_Kel` char(15) NOT NULL,
  `NoHp` varchar(15) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `d_kelas`
--

CREATE TABLE `d_kelas` (
  `Id_Kelas` char(10) NOT NULL,
  `Tahun_Ajar` varchar(5) NOT NULL,
  `Tingkat` char(5) NOT NULL,
  `Nama_kelas` varchar(20) NOT NULL,
  `Wali_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `d_matapelajar`
--

CREATE TABLE `d_matapelajar` (
  `Kode_Mp` char(10) NOT NULL,
  `Tingkat` char(5) NOT NULL,
  `Semester` char(5) NOT NULL,
  `Jenis_Mp` varchar(30) NOT NULL,
  `Mata_Pelajar` varchar(100) NOT NULL,
  `Nip` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `d_nilai`
--

CREATE TABLE `d_nilai` (
  `Id_Nilai` char(10) NOT NULL,
  `Tahun_Ajar` varchar(10) NOT NULL,
  `Tingkat` char(5) NOT NULL,
  `Nis` varchar(15) NOT NULL,
  `Kode_Md` char(10) NOT NULL,
  `Nilai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `d_siswa`
--

CREATE TABLE `d_siswa` (
  `Nis` varchar(15) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Tmp_Lahir` varchar(100) NOT NULL,
  `Tgl_lahir` date NOT NULL,
  `Jns_Kel` char(15) NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `NoHP` char(15) NOT NULL,
  `Tahun_Masuk` char(8) NOT NULL,
  `Id_Kelas` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_guru`
--
ALTER TABLE `d_guru`
  ADD PRIMARY KEY (`Nip`);

--
-- Indexes for table `d_kelas`
--
ALTER TABLE `d_kelas`
  ADD PRIMARY KEY (`Id_Kelas`);

--
-- Indexes for table `d_matapelajar`
--
ALTER TABLE `d_matapelajar`
  ADD PRIMARY KEY (`Kode_Mp`);

--
-- Indexes for table `d_nilai`
--
ALTER TABLE `d_nilai`
  ADD PRIMARY KEY (`Id_Nilai`);

--
-- Indexes for table `d_siswa`
--
ALTER TABLE `d_siswa`
  ADD PRIMARY KEY (`Nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
