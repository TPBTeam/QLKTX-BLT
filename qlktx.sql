-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 07:06 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlktx`
--

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `idgroup` int(10) NOT NULL,
  `namegroup` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`idgroup`, `namegroup`) VALUES
(1, 'admin'),
(2, 'Quản lý KTX');

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `mahopdong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `masophong` int(11) NOT NULL,
  `makhunha` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylap` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `ngaybatdau` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khunha`
--

CREATE TABLE `khunha` (
  `makhunha` int(10) NOT NULL,
  `tenkhu` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `soluongsinhvien` int(255) UNSIGNED NOT NULL,
  `idql` int(10) NOT NULL,
  `soluongp` int(255) NOT NULL,
  `loaikhu` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khunha`
--

INSERT INTO `khunha` (`makhunha`, `tenkhu`, `soluongsinhvien`, `idql`, `soluongp`, `loaikhu`) VALUES
(2, 'A1', 0, 61, 32, 'knam'),
(3, 'A2', 0, 60, 302, 'knam'),
(4, 'C3', 0, 62, 104, 'knam');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvienql`
--

CREATE TABLE `nhanvienql` (
  `idql` int(10) NOT NULL,
  `manvql` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hotennv` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cmtnv` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinhnv` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinhnv` date NOT NULL,
  `diachinv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoainv` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvienql`
--

INSERT INTO `nhanvienql` (`idql`, `manvql`, `hotennv`, `cmtnv`, `gioitinhnv`, `ngaysinhnv`, `diachinv`, `sodienthoainv`) VALUES
(60, 'NV0060', 'Đặng Quốc Thắng', '168570498', 'Nam', '1997-05-10', 'Châu Giang, Duy Tiên, Hà Nam', '0984923450'),
(61, 'NV0061', 'Phạm Thị Thảo', '168570499', 'Nữ', '1999-11-17', 'Châu Giang, Duy Tiên, Hà Nam', '0984923450'),
(62, 'NV0062', 'Phạm Thị Phương', '168570497', 'Nữ', '1998-04-04', 'Châu Giang, Duy Tiên, Hà Nam', '0984923450'),
(63, 'NV0063', 'Lê Trung Tiến Bình', '168570496', 'Nam', '1999-04-24', 'Châu Giang, Duy Tiên, Hà Nam', '0984923450');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `masophong` int(11) NOT NULL,
  `makhunha` int(10) NOT NULL,
  `soluongsv` int(2) UNSIGNED NOT NULL,
  `tinhtrangphong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ghichuphong` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `mahopdong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `socmt` int(12) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `lop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `khoahoc` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(10) NOT NULL,
  `username` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idgroup` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `email`, `idgroup`) VALUES
(1, 'admin', '@@pg1711', 'thangdangblog@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`idgroup`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`mahopdong`),
  ADD KEY `masophong` (`masophong`);

--
-- Indexes for table `khunha`
--
ALTER TABLE `khunha`
  ADD PRIMARY KEY (`makhunha`),
  ADD KEY `manvql` (`idql`);

--
-- Indexes for table `nhanvienql`
--
ALTER TABLE `nhanvienql`
  ADD PRIMARY KEY (`idql`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`masophong`),
  ADD KEY `makhunha` (`makhunha`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`),
  ADD KEY `mahopdong` (`mahopdong`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idgroup` (`idgroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `idgroup` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khunha`
--
ALTER TABLE `khunha`
  MODIFY `makhunha` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvienql`
--
ALTER TABLE `nhanvienql`
  MODIFY `idql` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `masophong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_ibfk_1` FOREIGN KEY (`masophong`) REFERENCES `phong` (`masophong`);

--
-- Constraints for table `khunha`
--
ALTER TABLE `khunha`
  ADD CONSTRAINT `khunha_ibfk_1` FOREIGN KEY (`idql`) REFERENCES `nhanvienql` (`idql`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`makhunha`) REFERENCES `khunha` (`makhunha`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`mahopdong`) REFERENCES `hopdong` (`mahopdong`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idgroup`) REFERENCES `group` (`idgroup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
