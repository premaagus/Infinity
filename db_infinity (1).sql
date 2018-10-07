-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 07:38 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_infinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nik` varchar(6) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `bidang_ilmu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `id_user`, `nama_lengkap`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `telp`, `alamat`, `bidang_ilmu`) VALUES
(4, 14, 'Luh Putu Ayu Desiani', '3444', 'Perempuan', 'Denpasar', '1985-05-30', 'Hindu', '081337123123', 'Denpasar', 'Database Information'),
(5, 15, 'Evi Dwi Krisna', '3445', 'Perempuan', 'Denpasar', '1992-03-13', 'Hindu', '081122223334', 'Denpasar', 'Matematika'),
(6, 16, 'Putu Dilia Dewi', '3446', 'Perempuan', 'Denpasar', '1988-04-30', 'Hindu', '08123111222', 'Denpasar', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `jam_mulai` datetime NOT NULL,
  `jam_selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `ruangan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `ruangan`) VALUES
(1, 'XII RPL 3', '9'),
(2, 'XII RPL 4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Siswa'),
(3, 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `jumlah_jam` int(5) NOT NULL,
  `background_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`, `jumlah_jam`, `background_mapel`) VALUES
(6, 'Basis Data', 4, 'merah.png'),
(7, 'Administrasi Basis Data', 2, 'merah.png'),
(8, 'Matematika', 4, 'orange.png'),
(9, 'Bahasa Inggris', 2, 'biru.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nama_materi` varchar(30) NOT NULL,
  `desc_materi` text NOT NULL,
  `file_materi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `capt_pengumuman` varchar(30) NOT NULL,
  `desc_pengumuman` text NOT NULL,
  `waktu_pengumuman` datetime NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nis` varchar(6) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `id_user`, `nama_lengkap`, `nis`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `telp`, `alamat`, `jurusan`, `id_kelas`) VALUES
(6, 13, 'Made Deva Mahayana', '3415', 'Laki - Laki', 'Denpasar', '2000-12-24', 'Hindu', '081123123123', 'Kesiman', 'Rekayasa Perangkat Lunak', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa_tugas`
--

CREATE TABLE `tb_siswa_tugas` (
  `id_siswa` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `nilai` int(4) NOT NULL,
  `file_tugas` varchar(50) NOT NULL,
  `tgl_pengumpulan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_tugas` varchar(30) NOT NULL,
  `desc_tugas` text NOT NULL,
  `tugas_mulai` datetime NOT NULL,
  `tugas_selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `profile_img` varchar(50) NOT NULL,
  `profile_name` varchar(50) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `profile_img`, `profile_name`, `id_level`) VALUES
(10, 'premaagus', 'premaagus@gmail.com', '$2y$12$Ibvy5.rwholmc0TvUTqflOX2xXl1zbzEI8ZMa549hx3JRwmI7X9Hu', '5bba0fb1194e0.jpg', 'Prema Agus', 1),
(11, 'bul', 'ryanardito25@gmail.com', '$2y$12$Uvhr7ZWAF38WsUf9GaPxC.Lz5Nm9e5MgeKh3qDFpJAe405JpCssba', '5bba17b85d110.jpg', 'Ryan Ardito', 1),
(13, 'devamahayana', 'devamahayana@gmail.com', '$2y$12$vfbcSSontDJtOroAtfSySOyrNuOa.0h7JZpFX9Sh5K4fXSJf63SCy', '5bba200895392.jpg', 'Deva Mahyana', 2),
(14, 'ayudesiani', 'ayudesiani@gmail.com', '$2y$12$GV5MzL6taCaKMk/c8Jxkvekn/ikT9wJaNrMnrR0slLygwN4AxvEau', '5bb6b3f607716.png', 'Ayu Desiani', 3),
(15, 'evidwi', 'evidwi@gmail.com', '$2y$12$5FxqvOZpaANS3qwZulW4m.Zj/boWm1osnnn01YvJ44dMST8oLmUv6', '5bba4043c1f27.png', 'Evi Dwi', 3),
(16, 'diliadewi', 'diliadewi@gmail.com', '$2y$12$UMr/vnFYvZldSlDAPYsw7uhJrNsj3989hXecLpUopWkTUE5hsx8F.', '5bba410e9d0e7.png', 'Dilia Dewi', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
