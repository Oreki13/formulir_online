-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 08:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_formulir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(271) NOT NULL,
  `role_id` int(11) NOT NULL,
  `login_cek` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `nama`, `email`, `gambar`, `password`, `role_id`, `login_cek`, `is_active`, `date_created`) VALUES
(1, 'asd', 'dev@dev.dev', 'user.png', '$2y$10$/CbqPiKjK3BfiT.Z3usGPeqaQwmW/UjpWolm9dCa6JlBq3PuhmHpa', 1, 0, 1, 1565316860);

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `name` varchar(258) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `ttl_tanggal` date NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `name_ortu` varchar(258) NOT NULL,
  `tempat_lahir_ortu` varchar(128) NOT NULL,
  `ttl_tanggal_ortu` date NOT NULL,
  `agama_ortu` varchar(128) NOT NULL,
  `no_hp_ortu` int(50) NOT NULL,
  `alamat_ortu` varchar(300) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `alamat_rumah` varchar(258) NOT NULL,
  `date_created` int(11) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `email`, `name`, `no_hp`, `agama`, `jenis_kelamin`, `tempat_lahir`, `ttl_tanggal`, `gambar`, `jurusan`, `name_ortu`, `tempat_lahir_ortu`, `ttl_tanggal_ortu`, `agama_ortu`, `no_hp_ortu`, `alamat_ortu`, `kabupaten`, `kecamatan`, `kode_pos`, `alamat_rumah`, `date_created`, `kelurahan`, `keterangan`) VALUES
(9, 'asdad@asd.asd', 'Muhammad Arfandy Surya Nugraha', 8838213, 'Islam', 'laki-Laki', 'Malang', '2001-01-28', 'screen-0.jpg', 'Profesional 1 Tahun', 'Joko Lelono', 'Blitar', '1970-11-15', 'Islam', 2147483647, 'Asrama Yon Zipur 2', 'Prabumulih', 'Prabumulih Timur', 31113, 'Asrama yon Zipur 2', 1561351840, 'G Ibul Barat', 'Terdaftar'),
(14, 'asd@asd.asd', 'Arfandy Nugraha Surya', 2147483647, 'Kristen Protestan', 'laki-Laki', 'Malang', '1901-11-21', 'cropped-472-709-3016092.jpg', 'Profesional 1 Tahun', '1234', 'Blitar', '1901-03-19', 'Islam', 2147483647, 'Asrama Yon Zipur 2', 'Prabumulih', 'Prabumulih Timur', 31113, 'Asrama yon Zipur 2 SG', 1561471849, 'Ibbul', 'Terdaftar'),
(15, 'irwansyah.pct@gmail.com', '', 0, '', '', '', '0000-00-00', 'user.png', '', '', '', '0000-00-00', '', 0, '', '', '', 0, '', 0, '', 'Belum Terdaftar'),
(16, 'irwansyah.pct@gmail.com', '', 0, '', '', '', '0000-00-00', 'user.png', '', '', '', '0000-00-00', '', 0, '', '', '', 0, '', 0, '', 'Belum Terdaftar'),
(17, 'ratipradistia@gmail.com', '', 0, '', '', '', '0000-00-00', 'user.png', '', '', '', '0000-00-00', '', 0, '', '', '', 0, '', 0, '', 'Belum Terdaftar'),
(18, 'demo@demo.com', 'asdsd', 12390, 'Islam', 'Perempuan', 'Prabumulih', '2000-01-23', 'cropped-472-709-1028303.png', 'Profesional 1 Tahun', '23sd', '23sd', '1901-11-03', 'Islam', 2147483647, '23', '23sd', '23', 23, '23', 1563190628, 'gan', 'Terdaftar'),
(19, 'demo2@demo.com', 'asdsd', 12390, 'Islam', 'Perempuan', 'Prabumulih', '2000-01-23', 'cropped-472-709-1028303.png', 'Profesional 1 Tahun', '23sd', '23sd', '1901-11-03', 'Islam', 2147483647, '23', '23sd', '23', 23, '23', 1563190628, 'gan', 'Terdaftar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `gambar` varchar(155) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `login_cek` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `gambar`, `password`, `role_id`, `login_cek`, `is_active`, `date_created`) VALUES
(3, 'Muhammad Arfandy', 'arfandynugraha212@gmail.com', 'user.png', '$2y$10$gHrCD/004jOyzogskNI5au.ljnF2ir2TMn7iw6Au9PnAoLULeZTbG', 2, 0, 1, 1560319677),
(12, 'dude', 'asdad@asd.asd', 'user.png', '$2y$10$IaBANRqFBg5e3nzOoJqSVOIFgTuwnJ6xjHQk.1KlhV..Vb7Kjvdo2', 3, 0, 1, 1561351840),
(14, 'Demo1', 'demo@demo.com', 'user.png', '$2y$10$QLtXAJhv0JRV49A8.j/vxewo/EPugMcauEOzNKbDmbuClJ1pxlOLe', 3, 1, 1, 1561387839),
(16, 'asd', 'asd@asd.asd', 'user.png', '$2y$10$PBfrv3KwgqDAA.uDAkneFewx3WDiK0kNmQGJoCpE01WkXQOuCvlS2', 3, 0, 1, 1561471718),
(19, 'Irwansyah', 'irwansyah.pct@gmail.com', 'user.png', '$2y$10$l5st9jDJPwEWQT3auyVPE.mOjXghA66dbFIqVsrVf1RhiFoITdHqW', 3, 1, 0, 1563186645),
(20, 'Rati Pradistia', 'ratipradistia@gmail.com', 'user.png', '$2y$10$bgE9qQvbQyeC.3rEwY0KoutMPU.HeH/0lpWTPBe4tzg0oEFkJNFNm', 3, 1, 0, 1563186814),
(21, 'Admin', 'admin@admin.com', 'user.png', '$2y$10$gHrCD/004jOyzogskNI5au.ljnF2ir2TMn7iw6Au9PnAoLULeZTbG', 1, 0, 1, 1560319677),
(22, 'Demo2', 'demo2@demo.com', 'user.png', '$2y$10$QLtXAJhv0JRV49A8.j/vxewo/EPugMcauEOzNKbDmbuClJ1pxlOLe', 3, 1, 1, 1561387839);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 1),
(4, 3, 3),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`no`, `id`, `menu`) VALUES
(1, 1, 'Admin'),
(2, 2, 'Add On'),
(3, 3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-user-friends', 1),
(2, 3, 'Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 3, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Ganti Password', 'user/gantipassword', 'fas fa-fw fa-key', 1),
(5, 1, 'Ganti Password', 'admin/gantipassword', 'fas fa-fw fa-key', 1),
(6, 2, 'Buat Admin', 'admin/create', 'fas fa-fw fa-user-plus', 1),
(7, 2, 'List admin', 'admin/list', 'fas fa-fw fa-list', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(6, 'irwansyah.pct@gmail.com', 'Z8BIif/4uAKAQ5U/JU3BGjgKPOg0NRc5t5SVKV7wCbM=', 1563186645),
(7, 'ratipradistia@gmail.com', 'iBGfNO3XkGqduKF5QGQ88KvKWwmqofTl5s6gtzS5H78=', 1563186814);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
