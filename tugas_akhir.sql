-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2017 at 11:40 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Buda'),
(4, 'Katolik');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `nama` varchar(200) NOT NULL,
  `nisn` int(20) NOT NULL,
  `tmp_lahir` varchar(200) NOT NULL,
  `tgl_lahir` varchar(200) NOT NULL,
  `kelamin` varchar(200) NOT NULL,
  `nik` int(20) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `asal_sekolah` varchar(200) NOT NULL,
  `prodi1` varchar(200) NOT NULL,
  `prodi2` varchar(200) NOT NULL,
  `ipa1` int(11) NOT NULL,
  `mtk1` int(11) NOT NULL,
  `mtk3` int(11) NOT NULL,
  `indo1` int(11) NOT NULL,
  `bing1` int(11) NOT NULL,
  `status` varchar(99) NOT NULL DEFAULT 'Sedang Di Proses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `username`, `password`, `email`, `level`, `nama`, `nisn`, `tmp_lahir`, `tgl_lahir`, `kelamin`, `nik`, `agama`, `alamat`, `asal_sekolah`, `prodi1`, `prodi2`, `ipa1`, `mtk1`, `mtk3`, `indo1`, `bing1`, `status`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 99, 'firman', 0, '0', '0', 'Laki-Laki', 99, 'Islam', '99', '99', '99', '99', 99, 99, 99, 99, 99, 'Admin'),
(12, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'firmanedam@yahoo.com', 1, 'firman', 0, '', '', 'Laki-Laki', 0, '', '', '', '', '', 39, 18, 0, 21, 16, 'Sedang Di Proses'),
(13, 'ucokawaw', '733b5e6a2e24f2764086325a28b6013d', 'ucok@cantik.com', 1, 'ucok', 0, '', '', 'Laki-Laki', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 'Sedang Di Proses'),
(14, 'uu', 'fa5d7f86abfb67640f3e082ff8aa1768', 'aa@aa.co', 1, 'mmm', 0, 't8t7878', '17/11/2017', 'Perempuan', 98797, 'Katolik', 'ghj', 'kjgkg', 'Teknik komputer dan jaringan', 'Teknik komputer dan jaringan', 0, 0, 0, 0, 0, 'Sedang Di Proses'),
(15, 'anggi', '4a283e1f5eb8628c8631718fe87f5917', 'anggi@gmail.com', 1, 'Anggi', 1234, 'Sidoarjo', '27/11/2000', 'Perempuan', 5678, 'Islam', 'Sidoarjo', 'Balben', 'Rekayasa Perangkat Lunak', 'Multimedia', 80, 70, 0, 85, 90, 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`) VALUES
(1, 'Rekayasa Perangkat Lunak'),
(2, 'MultiMedia'),
(3, 'Teknik komputer dan jaringan'),
(4, 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nama`) VALUES
(1, 'Lulus'),
(2, 'Tidak Lulus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
