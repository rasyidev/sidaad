-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 04:16 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidaad`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jkel` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`nik`, `nama`, `ttl`, `agama`, `jkel`, `kewarganegaraan`, `status`, `pekerjaan`, `alamat`) VALUES
('123123123', 'Uzumaki Naruto', 'Konoha, 05 Januari 2005', 'Islam', 'Laki - laki', 'Warga Negara Asing', 'Kawin', 'Genin Ninja', 'Konohagakure, Otsuki, Jepang'),
('13017892193729', 'Ten Ten', 'Kyoto, 8 Oktober 2005', 'Konghucu', 'Perempuan', 'Indonesia', 'Belum Kawin', 'Ninja Ahli Senjata', 'Jl. Katana Shuriken, Kyoto'),
('1601291104990002', 'Habib Abdurrasyid', 'Kyoto, 8 Oktober 2005', 'Islam', 'Laki - laki', 'Indonesia', 'Belum Kawin', 'Web Developer', 'Ds. Marga Mulya, Kec. Sinar peninjauan, Kab. Ogan Komering Ulu, Prov. Sumatera Selatan'),
('2313872194912', 'Sabrina Orial Manurung', 'Jakarta, 12 Maret 1998', 'Kristen Protestan', 'Perempuan', 'Indonesia', 'Belum Kawin', 'Manajer Proyek', 'Jl. Airan Raya, Ds. Jatimulyo'),
('231387219491223', 'Hanya Contoh Saja', 'Jakarta, 12 Maret 1998', 'Islam', 'Laki - laki', 'Indonesia', 'Kawin', 'Pelajar', 'Jl. Airan Raya, Ds. Jatimulyo'),
('343238759382', 'Neji Hyuga', 'Kyoto, 8 Oktober 2005', 'Islam', 'Laki - laki', 'Indonesia', '', 'Expert Ninja', 'Ds. Marga Mulya, Kec. Sinar peninjauan, Kab. Ogan Komering Ulu, Prov. Sumatera Selatan'),
('36874221038421', 'Rock Lee', 'Osaka, 27 Agustus 2006', 'Budha', 'Laki - laki', 'Indonesia', 'Belum Kawin', 'Ninja', 'Jl. Sake Kick, Osaka'),
('39038596124901', 'Sasuke Uchiha', '30 Mei 2003', 'Kristen Protestan', 'Laki - laki', 'Indonesia', 'Belum Kawin', 'Expert Ninja', 'Jl. Tokyo Baru'),
('73792042912639', 'Sakura Haruno', 'Tokyo, 12 Maret 2005', 'Katolik', 'Perempuan', 'Indonesia', 'Belum Kawin', 'Ninja Medis', 'Jl. Tokyo Lama, Samping Mie Ramen'),
('92385829032137', 'Kakashi Hatake', 'Yokohama, 23 September 1998', 'Hindu', 'Laki - laki', 'Indonesia', 'Kawin', 'Ninja Ahli Senjata', 'Jl. Sharingan, Yokohama');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trx` int(11) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nomor_surat` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trx`, `jenis_surat`, `nik`, `user_id`, `nomor_surat`, `created_at`) VALUES
(60, 'Surat Keterangan Tidak Mampu', '343238759382', 2, 0, '01-04-2020'),
(61, 'Surat Keterangan Status Pernikahan', '1601291104990002', 2, 0, '01-04-2020'),
(62, 'Surat Keterangan Status Pernikahan', '13017892193729', 11, 0, '02-04-2020'),
(63, 'Surat Keterangan Status Pernikahan', '36874221038421', 2, 0, '02-04-2020'),
(64, 'Surat Keterangan Tidak Mampu', '92385829032137', 2, 0, '02-04-2020'),
(65, 'Surat Keterangan Status Pernikahan', '13017892193729', 1, 0, '02-04-2020'),
(66, 'Surat Keterangan Tidak Mampu', '39038596124901', 2, 0, '03-04-2020'),
(67, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(68, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(69, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(70, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(71, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(72, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(73, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(74, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(75, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(76, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(77, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(78, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(79, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(80, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(81, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(82, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(83, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(84, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 12, '04-04-2020'),
(85, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(86, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(87, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(88, 'Surat Keterangan Status Pernikahan', '343238759382', 2, 0, '04-04-2020'),
(89, 'Surat Keterangan Tidak Mampu', '36874221038421', 2, 0, '04-04-2020'),
(90, 'Surat Keterangan Tidak Mampu', '36874221038421', 2, 0, '04-04-2020'),
(91, 'Surat Keterangan Status Pernikahan', '92385829032137', 1, 0, '05-04-2020'),
(92, 'Surat Keterangan Status Pernikahan', '92385829032137', 1, 0, '05-04-2020'),
(93, 'Surat Keterangan Status Pernikahan', '92385829032137', 1, 0, '05-04-2020'),
(94, 'Surat Keterangan Status Pernikahan', '92385829032137', 1, 0, '05-04-2020'),
(95, 'Surat Keterangan Status Pernikahan', '92385829032137', 1, 0, '05-04-2020'),
(96, 'Surat Keterangan Status Pernikahan', '92385829032137', 1, 0, '05-04-2020'),
(97, 'Surat Keterangan Status Pernikahan', '92385829032137', 1, 0, '05-04-2020'),
(98, 'Surat Keterangan Status Pernikahan', '92385829032137', 1, 0, '05-04-2020'),
(99, 'Surat Keterangan Status Pernikahan', '92385829032137', 1, 0, '05-04-2020'),
(100, 'Surat Keterangan Status Pernikahan', '73792042912639', 1, 0, '05-04-2020'),
(101, 'Surat Keterangan Status Pernikahan', '73792042912639', 1, 0, '05-04-2020'),
(102, 'Surat Keterangan Status Pernikahan', '73792042912639', 1, 0, '05-04-2020'),
(103, 'Surat Keterangan Tidak Mampu', '36874221038421', 1, 0, '05-04-2020'),
(104, 'Surat Keterangan Status Pernikahan', '39038596124901', 1, 0, '05-04-2020'),
(105, 'Surat Keterangan Status Pernikahan', '1601291104990002', 1, 0, '05-04-2020'),
(106, 'Surat Keterangan Status Pernikahan', '1601291104990002', 1, 0, '05-04-2020'),
(107, 'Surat Keterangan Status Pernikahan', '92385829032137', 11, 0, '05-04-2020'),
(108, 'Surat Izin Keramaian', '92385829032137', 11, 0, '05-04-2020'),
(109, 'Surat Izin Keramaian', '343238759382', 11, 0, '05-04-2020'),
(110, 'Surat Izin Keramaian', '343238759382', 11, 0, '05-04-2020'),
(111, 'Surat Izin Keramaian', '73792042912639', 11, 0, '05-04-2020'),
(112, 'Surat Pengantar SKCK', '36874221038421', 11, 0, '05-04-2020'),
(113, 'Surat Keterangan Domisili', '2313872194912', 2, 0, '06-04-2020'),
(114, 'Surat Keterangan Domisili', '73792042912639', 2, 0, '06-04-2020'),
(115, 'Surat Keterangan Tidak Mampu', '36874221038421', 2, 0, '06-04-2020'),
(116, 'Surat Keterangan Penghasilan Orangtua', '2313872194912', 2, 0, '06-04-2020'),
(117, 'Surat Keterangan Tidak Mampu', '123123123', 2, 15, '08-04-2020'),
(123, 'Surat Keterangan Status Pernikahan', '36874221038421', 1, 16, '26-04-2020'),
(124, 'Surat Keterangan Status Pernikahan', '13017892193729', 1, 17, '26-04-2020'),
(125, 'Surat Keterangan Status Pernikahan', '73792042912639', 1, 18, '26-04-2020'),
(126, 'Surat Keterangan Status Pernikahan', '123123123', 1, 19, '26-04-2020'),
(127, 'Surat Keterangan Tidak Mampu', '123123123', 1, 20, '26-04-2020'),
(128, 'Surat Keterangan Usaha', '123123123', 1, 21, '26-04-2020'),
(129, 'Surat Izin Keramaian', '123123123', 1, 22, '26-04-2020'),
(132, 'Surat Keterangan Tidak Mampu', '231387219491223', 1, 23, '27-04-2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`) VALUES
(1, 'Habib Abdurrasyid', '!administrator', 1),
(2, 'Syaiful Huda', '12345', 2),
(11, 'Agil Melania Aziz', '1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'Operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trx`),
  ADD KEY `pemohon` (`nik`),
  ADD KEY `operator` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksiDataPenduduk` FOREIGN KEY (`nik`) REFERENCES `data_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksiUsers` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
