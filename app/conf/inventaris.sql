-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2022 at 12:45 AM
-- Server version: 10.3.37-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hillmyid_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset_bangunan`
--

CREATE TABLE `aset_bangunan` (
  `id_bangunan` int(255) NOT NULL,
  `kode_bangunan` varchar(100) NOT NULL,
  `jenis_bangunan` varchar(150) NOT NULL,
  `nup` varchar(20) NOT NULL,
  `luas` varchar(20) NOT NULL,
  `tahun_perolehan` year(4) NOT NULL,
  `type_bangunan` varchar(100) NOT NULL,
  `nilai` int(255) NOT NULL,
  `keterangan` tinytext DEFAULT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset_bangunan`
--

INSERT INTO `aset_bangunan` (`id_bangunan`, `kode_bangunan`, `jenis_bangunan`, `nup`, `luas`, `tahun_perolehan`, `type_bangunan`, `nilai`, `keterangan`, `tgl_input`, `id_admin`, `status`) VALUES
(1, 'AB260822', 'Gedung Kantor', '0001', '2240', 1989, 'Bertingkat, Beton.', 746000, 'Kantor Pusat', '2022-08-26', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `aset_hilang`
--

CREATE TABLE `aset_hilang` (
  `id_hilang` int(255) NOT NULL,
  `kode_hilang` varchar(100) NOT NULL,
  `nama_hilang` varchar(150) NOT NULL,
  `nup` varchar(20) NOT NULL,
  `merk_type` varchar(100) NOT NULL,
  `tahun_perolehan` year(4) NOT NULL,
  `nilai_perolehan` int(255) NOT NULL,
  `keterangan` tinytext DEFAULT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aset_irigasi`
--

CREATE TABLE `aset_irigasi` (
  `id_irigasi` int(255) NOT NULL,
  `kode_irigasi` varchar(100) NOT NULL,
  `jenis_irigasi` varchar(150) NOT NULL,
  `nup` varchar(20) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `tahun_perolehan` year(4) NOT NULL,
  `type` varchar(100) NOT NULL,
  `nilai` int(255) NOT NULL,
  `keterangan` tinytext DEFAULT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset_irigasi`
--

INSERT INTO `aset_irigasi` (`id_irigasi`, `kode_irigasi`, `jenis_irigasi`, `nup`, `ukuran`, `tahun_perolehan`, `type`, `nilai`, `keterangan`, `tgl_input`, `id_admin`, `status`) VALUES
(1, 'JIJ26082201', 'Perencanaan Fisik, Pertamanan, dll', '0003', '0', 2016, 'Jalan', 45850, '', '2022-08-26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `aset_kendaraan`
--

CREATE TABLE `aset_kendaraan` (
  `id_kendaraan` int(255) NOT NULL,
  `kode_kendaraan` varchar(100) NOT NULL,
  `nama_kendaraan` varchar(150) NOT NULL,
  `nup` varchar(20) NOT NULL,
  `merk_type` varchar(100) NOT NULL,
  `tahun_perolehan` year(4) NOT NULL,
  `nomor_identitas` text NOT NULL,
  `nilai_perolehan` int(255) NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL,
  `keterangan` tinytext DEFAULT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset_kendaraan`
--

INSERT INTO `aset_kendaraan` (`id_kendaraan`, `kode_kendaraan`, `nama_kendaraan`, `nup`, `merk_type`, `tahun_perolehan`, `nomor_identitas`, `nilai_perolehan`, `kondisi_barang`, `keterangan`, `tgl_input`, `id_admin`, `status`) VALUES
(1, 'KB26082201', 'Station Wagon', '0001', 'Toyota/Inova V-TGN4OR', 2019, 'NoPol: F 9523 TH, Rangka: MHFAW8EM8K0214187, Mesin: 1TRA685032, BPKB: P05897713126', 425831, 'RR', 'BBM: Bensin, Warna Putih.', '2022-08-26', 1, 1),
(2, 'KB26082202', 'Sepeda Motor', '0001', 'HONDA / Honda Supra X 125 CW', 2018, 'NoPol: F 9887 NA, Mesin: JBP1E1462241, Rangka: MH1JBP119GK463570, BPKP: M1438917942', 120000, 'B', 'BBM (Bensin) Warna Hitam.', '2022-08-26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `aset_peralatan`
--

CREATE TABLE `aset_peralatan` (
  `id_peralatan` int(255) NOT NULL,
  `kode_peralatan` varchar(100) NOT NULL,
  `nama_peralatan` varchar(150) NOT NULL,
  `nup` varchar(20) NOT NULL,
  `merk_type` varchar(100) NOT NULL,
  `tahun_perolehan` year(4) NOT NULL,
  `nilai_perolehan` int(255) NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL,
  `keterangan` tinytext DEFAULT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset_peralatan`
--

INSERT INTO `aset_peralatan` (`id_peralatan`, `kode_peralatan`, `nama_peralatan`, `nup`, `merk_type`, `tahun_perolehan`, `nilai_perolehan`, `kondisi_barang`, `keterangan`, `tgl_input`, `id_admin`, `status`) VALUES
(1, 'PM26082201', 'Genset AVK', '0002', 'Perkins', 2022, 163550, 'B', 'Diesel genset 30 KVA', '2022-08-26', 1, 1),
(2, 'PM26082202', 'Mesin Penghitung Uang', '0002', 'GLORY GNH710', 2022, 78000, 'B', '', '2022-08-26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `aset_tanah`
--

CREATE TABLE `aset_tanah` (
  `id_tanah` int(255) NOT NULL,
  `kode_tanah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_tanah` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nup` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `luas` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun_perolehan` year(4) NOT NULL,
  `bukti_kepemilikan` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai_perolehan` int(255) NOT NULL,
  `keterangan` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset_tanah`
--

INSERT INTO `aset_tanah` (`id_tanah`, `kode_tanah`, `jenis_tanah`, `nup`, `luas`, `tahun_perolehan`, `bukti_kepemilikan`, `nilai_perolehan`, `keterangan`, `tgl_input`, `id_admin`, `status`) VALUES
(1, 'AT15082201', 'Tanah Kolam DKK', '0002', '4.620', 2022, '158/DS/2025/HH/2020', 1850000, '', '2022-08-15', 1, 2),
(2, 'AT22082101', 'Tanah BK Kades', '0001', '31.450', 2022, '159/DS/2025/HH/2007', 1887000, '', '2022-08-21', 1, 2),
(3, 'AT22082102', 'Tanah SDN 1 Cibeureum', '0001', '8.900', 2022, '159/DS/2025/HH/2008', 2550000, '', '2022-08-21', 1, 2),
(6, 'AT22082103', 'Tanah SMP 2', '0001', '1.340', 2022, '159/DS/2025/HH/2009', 3400000, '', '2022-08-21', 1, 2),
(11, 'uux', 'milik sendiri', '003', '450', 2022, 'ada', 9000000, '-', '2022-08-26', 1, 2),
(12, 'UUX1', 'Perorangan', '005', '900', 2022, 'Bukti Sendiri', 20000000, '-', '2022-08-27', 1, 2),
(13, 'ALEX', 'milik sendiri', '006', '90000', 2019, 'Milik Sendiri', 0, '-', '2022-09-03', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `aset_tetap`
--

CREATE TABLE `aset_tetap` (
  `id_tetap` int(11) NOT NULL,
  `kode_tetap` varchar(100) NOT NULL,
  `nama_tetap` varchar(150) NOT NULL,
  `nup` varchar(20) NOT NULL,
  `tahun_perolehan` year(4) NOT NULL,
  `merk_type` varchar(100) NOT NULL,
  `nilai` int(255) NOT NULL,
  `keterangan` tinytext DEFAULT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_admin` int(255) NOT NULL,
  `nama_admin` varchar(150) NOT NULL,
  `namapengguna` varchar(100) NOT NULL,
  `katasandi` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_admin`, `nama_admin`, `namapengguna`, `katasandi`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Alfian Nurfaizi', 'Alex', 'a08372b70196c21a9229cf04db6b7ceb');

-- --------------------------------------------------------

--
-- Table structure for table `tim_inventarisasi`
--

CREATE TABLE `tim_inventarisasi` (
  `id_tim` int(255) NOT NULL,
  `nama_tim` varchar(100) NOT NULL,
  `alamat` tinytext DEFAULT NULL,
  `kontak` varchar(16) DEFAULT NULL,
  `aset_kategori` varchar(30) NOT NULL,
  `no_pengajuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tim_inventarisasi`
--

INSERT INTO `tim_inventarisasi` (`id_tim`, `nama_tim`, `alamat`, `kontak`, `aset_kategori`, `no_pengajuan`) VALUES
(2, 'Putri Talia Wijayanti S.E', 'Jl. Ciandam Sudajaya no 159, RT.002/004 Kel. Cibeureum Hilir Kec. Cibeureum, Kota Sukabumi 43165', '085777012345', 'Tanah', '0002'),
(3, 'Vanya Nuraini', 'Jl. Sudajaya no 159, RT.002/004 Kel. Cibeureum Hilir Kec. Cibeureum, Kota Sukabumi 43165', '085219204689', 'Tanah', '0001'),
(5, 'Adika Cahyo Waluyo', 'Jl. Cibeureum no 21, RT.002/004 Kel. Cibeureum Hilir Kec. Cibeureum, Kota Sukabumi 43165', '081346567741', 'Tanah', '0001'),
(6, 'Warsita Dongoran', 'Jl. Ciburial Kulon no 159, RT.002/004 Kel. Cibeureum Hilir Kec. Cibeureum, Kota Sukabumi 43165', '087779854111', 'Tanah', '0001'),
(7, 'Dinda Hartati', 'Jl. Ahmad Raya no 11, RT.001/008 Kel. Cibeureum Hilir Kec. Cibeureum, Kota Sukabumi 43165', '0852144657812', 'Tanah', '0001'),
(8, 'Gading Hardiansyah', 'Jl. Babakan Wetan no 34, RT.010/026 Kel. Cibeureum Hilir Kec. Cibeureum, Kota Sukabumi 43165', '089846461134', 'Tanah', '0001'),
(9, 'Najwa Bella Suryatmi', 'Jl. Duren Amis no 57, RT.012/022 Kel. Cibeureum Hilir Kec. Cibeureum, Kota Sukabumi 43165', '08569421365', 'Tanah', '0002'),
(10, 'Martha T. Daniel', '3620 College View\r\nGolconda, IL 62938', '085686833303', 'Kendaraan Bermotor', '0001'),
(12, 'Samual R. Steward', '862 Ryder Avenue\r\nSeattle, WA 98108', '085727888561', 'Peralatan dan Mesin', '0002'),
(14, 'Dolores D. Laymon', 'Via Campi Flegrei, 110\r\n83030-Torre Le Nocelle AV', '0852997051341', 'Jalan Irigasi dan Ja', '0003'),
(15, 'Dolores D. Laymon', 'Via Campi Flegrei, 110\r\n83030-Torre Le Nocelle AV', '085239970513', 'Jalan Irigasi dan Ja', '0003'),
(16, 'Dolores D. Laymon', 'Via Campi Flegrei, 110\r\n83030-Torre Le Nocelle AV', '085239970510', 'Jalan Irigasi dan Jaringan', '0003'),
(17, 'Alfian Nurfaizi', 'Ciadam', '08579404882', 'Bangunan', '0002'),
(18, 'Alex', 'Ciandam', '08579404882', 'Bangunan', '0003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset_bangunan`
--
ALTER TABLE `aset_bangunan`
  ADD PRIMARY KEY (`id_bangunan`),
  ADD UNIQUE KEY `kode_bangunan` (`kode_bangunan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `aset_hilang`
--
ALTER TABLE `aset_hilang`
  ADD PRIMARY KEY (`id_hilang`),
  ADD UNIQUE KEY `kode_hilang` (`kode_hilang`);

--
-- Indexes for table `aset_irigasi`
--
ALTER TABLE `aset_irigasi`
  ADD PRIMARY KEY (`id_irigasi`),
  ADD UNIQUE KEY `kode_irigasi` (`kode_irigasi`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `aset_kendaraan`
--
ALTER TABLE `aset_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD UNIQUE KEY `kode_kendaraan` (`kode_kendaraan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `aset_peralatan`
--
ALTER TABLE `aset_peralatan`
  ADD PRIMARY KEY (`id_peralatan`),
  ADD UNIQUE KEY `kode_peralatan` (`kode_peralatan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `aset_tanah`
--
ALTER TABLE `aset_tanah`
  ADD PRIMARY KEY (`id_tanah`),
  ADD UNIQUE KEY `kode_tanah` (`kode_tanah`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `aset_tetap`
--
ALTER TABLE `aset_tetap`
  ADD PRIMARY KEY (`id_tetap`),
  ADD UNIQUE KEY `kode_tetap` (`kode_tetap`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tim_inventarisasi`
--
ALTER TABLE `tim_inventarisasi`
  ADD PRIMARY KEY (`id_tim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset_bangunan`
--
ALTER TABLE `aset_bangunan`
  MODIFY `id_bangunan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aset_hilang`
--
ALTER TABLE `aset_hilang`
  MODIFY `id_hilang` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aset_irigasi`
--
ALTER TABLE `aset_irigasi`
  MODIFY `id_irigasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aset_kendaraan`
--
ALTER TABLE `aset_kendaraan`
  MODIFY `id_kendaraan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aset_peralatan`
--
ALTER TABLE `aset_peralatan`
  MODIFY `id_peralatan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aset_tanah`
--
ALTER TABLE `aset_tanah`
  MODIFY `id_tanah` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tim_inventarisasi`
--
ALTER TABLE `tim_inventarisasi`
  MODIFY `id_tim` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
