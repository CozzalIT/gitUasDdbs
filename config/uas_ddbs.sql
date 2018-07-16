-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 07:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_ddbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(15) NOT NULL,
  `idCabang` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `level`, `idCabang`) VALUES
('cabang', 'f74e4339be40ffd3b2a263873e653be4', 'cabang', 1),
('pusat', '42836637e4afa63e6ba120974d7671dc', 'pusat', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idBuku` int(5) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `pengarang` varchar(25) NOT NULL,
  `thnTerbit` varchar(5) NOT NULL,
  `penerbit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idBuku`, `judul`, `pengarang`, `thnTerbit`, `penerbit`) VALUES
(1, 'Belajar Programming', 'Abu Halim', '2011', 'Erlangga');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `idCabang` int(5) NOT NULL,
  `namaCabang` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`idCabang`, `namaCabang`, `alamat`, `status`) VALUES
(1, 'Perpus Bina Bakti', 'Sayati lama, no 22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idMember` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noTlp` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idMember`, `nama`, `jenisKelamin`, `alamat`, `noTlp`, `email`) VALUES
(1, 'Adnan Agnia', 'Laki-laki', 'Cimareme', '082112545', 'adnan@gmail.com'),
(2, 'Riska Pratiwi Putri', 'Perempuan', 'Cigondewah', '085663145', 'rpp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idPeminjaman` int(5) NOT NULL,
  `idMember` int(5) NOT NULL,
  `idBuku` int(5) NOT NULL,
  `tglPinjam` datetime NOT NULL,
  `tglTempo` datetime NOT NULL,
  `tglKembali` datetime NOT NULL,
  `idPetugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `idPetugas` int(5) NOT NULL,
  `idCabang` int(5) DEFAULT NULL,
  `nama` varchar(25) NOT NULL,
  `jenisKelalmin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noTlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`idPetugas`, `idCabang`, `nama`, `jenisKelalmin`, `alamat`, `noTlp`) VALUES
(1, 1, 'Din Muztakin', 'Laki-laki', 'Margakunci', '085512745'),
(2, 1, 'Dian Nur Halimah', 'Perempuan', 'Cimahi', '082236648');

-- --------------------------------------------------------

--
-- Table structure for table `stokbuku`
--

CREATE TABLE `stokbuku` (
  `idStok` int(5) NOT NULL,
  `idBuku` int(5) NOT NULL,
  `idCabang` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD KEY `idCabang` (`idCabang`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idBuku`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`idCabang`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idMember`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idPeminjaman`),
  ADD KEY `idPetugas` (`idPetugas`),
  ADD KEY `idMember` (`idMember`),
  ADD KEY `idBuku` (`idBuku`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idPetugas`),
  ADD KEY `idCabang` (`idCabang`);

--
-- Indexes for table `stokbuku`
--
ALTER TABLE `stokbuku`
  ADD PRIMARY KEY (`idStok`),
  ADD KEY `idBuku` (`idBuku`),
  ADD KEY `idCabang` (`idCabang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `idBuku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `idCabang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idMember` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `idPeminjaman` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `idPetugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stokbuku`
--
ALTER TABLE `stokbuku`
  MODIFY `idStok` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`idCabang`) REFERENCES `cabang` (`idCabang`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`idMember`) REFERENCES `member` (`idMember`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`idBuku`) REFERENCES `buku` (`idBuku`);

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`idCabang`) REFERENCES `cabang` (`idCabang`);

--
-- Constraints for table `stokbuku`
--
ALTER TABLE `stokbuku`
  ADD CONSTRAINT `stokbuku_ibfk_1` FOREIGN KEY (`idBuku`) REFERENCES `buku` (`idBuku`),
  ADD CONSTRAINT `stokbuku_ibfk_2` FOREIGN KEY (`idCabang`) REFERENCES `cabang` (`idCabang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
