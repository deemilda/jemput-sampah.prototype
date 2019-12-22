-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 10:22 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jemput_sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m130524_201442_init', 1576305715),
('m190124_110200_add_verification_token_column_to_user_table', 1576305716);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat_info`
--

CREATE TABLE `tbl_cat_info` (
  `id_category` int(11) NOT NULL,
  `info_id` int(11) NOT NULL,
  `name_cat` varchar(45) NOT NULL,
  `desc` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desa`
--

CREATE TABLE `tbl_desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(128) NOT NULL,
  `desc` varchar(128) NOT NULL,
  `nama_petugas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_desa`
--

INSERT INTO `tbl_desa` (`id_desa`, `nama_desa`, `desc`, `nama_petugas`) VALUES
(1, 'Turi', 'Desa turi terletak', 'Budi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id_info` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `author` varchar(128) NOT NULL,
  `desc_info` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jemput_sampah`
--

CREATE TABLE `tbl_jemput_sampah` (
  `id_jemput` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transport_id` int(11) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `desc_sampah_jemput` varchar(128) NOT NULL,
  `dijemput_oleh` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setor_sampah`
--

CREATE TABLE `tbl_setor_sampah` (
  `id_setor` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `desa_id` int(11) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `desc_sampah_setor` varchar(128) NOT NULL,
  `diterima_oleh` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `setor_id` int(11) NOT NULL,
  `jemput_id` int(11) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `transaksi` varchar(45) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transport`
--

CREATE TABLE `tbl_transport` (
  `id_transport` int(11) NOT NULL,
  `nama_transport` varchar(45) NOT NULL,
  `driver` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `desa_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `auth_key` varchar(45) NOT NULL,
  `password_hash` varchar(45) NOT NULL,
  `password_reset_token` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(45) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tbl_cat_info`
--
ALTER TABLE `tbl_cat_info`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `fk_tbl_cat_info_tbl_info1_idx` (`info_id`);

--
-- Indexes for table `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `fk_tbl_info_users1_idx` (`user_id`);

--
-- Indexes for table `tbl_jemput_sampah`
--
ALTER TABLE `tbl_jemput_sampah`
  ADD PRIMARY KEY (`id_jemput`),
  ADD KEY `fk_tbl_jemput_sampah_tbl_transport1_idx` (`transport_id`),
  ADD KEY `fk_tbl_jemput_sampah_users1_idx` (`user_id`);

--
-- Indexes for table `tbl_setor_sampah`
--
ALTER TABLE `tbl_setor_sampah`
  ADD PRIMARY KEY (`id_setor`),
  ADD KEY `fk_tbl_setor_sampah_tbl_desa1_idx` (`desa_id`),
  ADD KEY `fk_tbl_setor_sampah_users1_idx` (`user_id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_tbl_transaksi_tbl_setor_sampah1_idx` (`setor_id`),
  ADD KEY `fk_tbl_transaksi_tbl_jemput_sampah1_idx` (`jemput_id`),
  ADD KEY `fk_tbl_transaksi_users1_idx` (`user_id`);

--
-- Indexes for table `tbl_transport`
--
ALTER TABLE `tbl_transport`
  ADD PRIMARY KEY (`id_transport`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_tbl_desa1_idx` (`desa_id`),
  ADD KEY `fk_users_user_role1_idx` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cat_info`
--
ALTER TABLE `tbl_cat_info`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cat_info`
--
ALTER TABLE `tbl_cat_info`
  ADD CONSTRAINT `fk_tbl_cat_info_tbl_info1` FOREIGN KEY (`info_id`) REFERENCES `tbl_info` (`id_info`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD CONSTRAINT `fk_tbl_info_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_jemput_sampah`
--
ALTER TABLE `tbl_jemput_sampah`
  ADD CONSTRAINT `fk_tbl_jemput_sampah_tbl_transport1` FOREIGN KEY (`transport_id`) REFERENCES `tbl_transport` (`id_transport`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_jemput_sampah_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_setor_sampah`
--
ALTER TABLE `tbl_setor_sampah`
  ADD CONSTRAINT `fk_tbl_setor_sampah_tbl_desa1` FOREIGN KEY (`desa_id`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_setor_sampah_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `fk_tbl_transaksi_tbl_jemput_sampah1` FOREIGN KEY (`jemput_id`) REFERENCES `tbl_jemput_sampah` (`id_jemput`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_transaksi_tbl_setor_sampah1` FOREIGN KEY (`setor_id`) REFERENCES `tbl_setor_sampah` (`id_setor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_transaksi_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_tbl_desa1` FOREIGN KEY (`desa_id`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_user_role1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
