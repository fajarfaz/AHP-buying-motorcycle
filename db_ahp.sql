-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Nov 2018 pada 09.58
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ahp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kriteria`, `sub`) VALUES
(12, 'Harga Sepeda Motor', '<15jt'),
(13, 'Harga Sepeda Motor', '15-20jt'),
(14, 'Harga Sepeda Motor', '>20jt'),
(15, 'Kapasitas Mesin', '<120CC'),
(16, 'Kapasitas Mesin', '120-150CC'),
(17, 'Kapasitas Mesin', '>150cc'),
(18, 'Pemakaian Bahan Bakar', '<50km/liter'),
(19, 'Pemakaian Bahan Bakar', '50-65km/liter'),
(20, 'Pemakaian Bahan Bakar', '>65km/liter'),
(21, 'Model Sepeda Motor', 'Matic'),
(22, 'Model Sepeda Motor', 'Bebek'),
(23, 'Model Sepeda Motor', 'Sport');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sepeda`
--

CREATE TABLE `tb_sepeda` (
  `id_sepeda` int(11) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `kapasitas` int(4) NOT NULL,
  `bbm` int(4) NOT NULL,
  `model` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sepeda`
--

INSERT INTO `tb_sepeda` (`id_sepeda`, `merek`, `harga`, `kapasitas`, `bbm`, `model`) VALUES
(3, 'Vario 125 CBS New', 19821000, 125, 59, 'Matic'),
(4, 'Verza 150 SP LP', 19695000, 150, 48, 'Sport'),
(5, 'CBR 150 LP', 34500000, 110, 38, 'Sport'),
(6, 'All New Scoopy Stylish LP', 18870000, 115, 62, 'Matic'),
(7, 'Vario 150 New', 23135000, 150, 52, 'Matic');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`) VALUES
(5, 'adin', '5679d7b8f79fc9647c640dfc5663e033', 'Adinta'),
(6, 'Suci', 'bc4bf56def8e1511105c22531db90885', 'Suciana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  ADD PRIMARY KEY (`id_sepeda`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
