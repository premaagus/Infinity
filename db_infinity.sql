-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 09:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
(5, 15, 'Evi Dwi Krisna', '4424', 'Perempuan', 'Denpasar', '1992-03-13', 'Hindu', '081122223334', 'Denpasar', 'Matematika'),
(8, 20, 'Luh Putu Ayu Desiani', '3424', 'Perempuan', 'Denpasar', '1990-08-12', 'Hindu', '081242424334', 'Denpasar', 'Basis Data'),
(9, 21, 'Putu Dilia Dewi', '3314', 'Perempuan', 'Denpasar', '1990-09-30', 'Hindu', '087761661669', 'Denpasar', 'Bahasa Inggris'),
(10, 22, 'I Wayan Sunarta', '4412', 'Laki - Laki', 'Denpasar', '1970-04-14', 'Hindu', '0812231332', 'Denpasar', 'Bahasa Bali'),
(11, 23, 'Ngakan Putu Darma Yasa', '4142', 'Laki - Laki', 'Denpasar', '1989-04-12', 'Hindu', '081242442433', 'Denpasar', 'Pemrograman Grafik'),
(12, 24, 'Ni Made Rai Surati', '1442', 'Perempuan', 'Denpasar', '1986-02-04', 'Hindu', '081232323233', 'Denpasar', 'Sejarah Indonesia'),
(13, 25, 'Putu Warma Putra', '4124', 'Laki - Laki', 'Denpasar', '1987-12-04', 'Hindu', '081123123332', 'Denpasar', 'Perangkat Bergerak'),
(14, 26, 'Made Pradnyana Ambara', '4242', 'Laki - Laki', 'Denpasar', '1985-03-04', 'Hindu', '081231442245', 'Denpasar', 'Web Dinamis'),
(15, 27, 'I Gusti Ayu Sri Erna Dewi', '3412', 'Perempuan', 'Denpasar', '1980-02-05', 'Hindu', '0877277347', 'Denpasar', 'PKWU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tahun_ajaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_mapel`, `id_guru`, `hari`, `jam_mulai`, `jam_selesai`, `id_kelas`, `tahun_ajaran`) VALUES
(5, 6, 8, 'senin', '12:50:00', '14:10:00', 1, 2018),
(6, 7, 8, 'senin', '14:10:00', '15:30:00', 1, 2018),
(7, 8, 5, 'senin', '15:45:00', '17:05:00', 1, 2018),
(8, 9, 9, 'senin', '17:05:00', '18:25:00', 1, 2018),
(9, 11, 10, 'selasa', '12:50:00', '14:10:00', 1, 2018),
(10, 12, 11, 'selasa', '14:10:00', '15:30:00', 1, 2018),
(12, 13, 12, 'selasa', '15:45:00', '17:05:00', 1, 2018),
(13, 14, 13, 'selasa', '17:05:00', '18:25:00', 1, 2018),
(14, 15, 14, 'rabu', '12:50:00', '14:10:00', 1, 2018),
(15, 8, 5, 'rabu', '12:50:00', '14:10:00', 1, 2018),
(16, 16, 15, 'rabu', '15:45:00', '17:05:00', 1, 2018),
(19, 8, 5, 'senin', '12:50:00', '14:10:00', 2, 2018),
(20, 9, 9, 'senin', '14:10:00', '15:30:00', 2, 2018),
(22, 6, 8, 'senin', '15:45:00', '17:05:00', 2, 2018),
(23, 7, 8, 'senin', '17:05:00', '18:25:00', 2, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `ruangan` varchar(4) NOT NULL,
  `background_kelas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `ruangan`, `background_kelas`) VALUES
(1, 'XII RPL 3', '10', 'pattern-purple.png'),
(2, 'XII RPL 4', '2', 'pattern-orange.png');

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
(9, 'Bahasa Inggris', 2, 'biru.png'),
(11, 'Bahasa Bali', 2, 'biru.png'),
(12, 'Pemrograman Grafik', 4, 'ijo.png'),
(13, 'Sejarah Indonesia', 2, 'orange.png'),
(14, 'Perangkat Bergerak', 4, 'ijo.png'),
(15, 'Web Dinamis', 2, 'ijo.png'),
(16, 'PKWU', 2, 'ungu.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_materi` varchar(30) NOT NULL,
  `desc_materi` text NOT NULL,
  `file_materi` varchar(50) NOT NULL,
  `extensi_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `id_mapel`, `id_kelas`, `nama_materi`, `desc_materi`, `file_materi`, `extensi_file`) VALUES
(17, 8, 1, 'Aritmatika', 'Sosiologi', '5bc32c5780782.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `desc_pengumuman` text NOT NULL,
  `waktu_pengumuman` datetime NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `desc_pengumuman`, `waktu_pengumuman`, `id_mapel`, `id_kelas`) VALUES
(1, 'Untuk hari ini pelajaran ditiadakan', '2018-10-15 19:12:00', 8, 1),
(3, 'Tugas dimajukan menjadi besok', '2018-10-15 21:10:00', 9, 1);

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
(19, 39, 'I Wayan Prema Agus Prasetya', '3413', 'Laki - Laki', 'Denpasar', '2001-08-30', 'Hindu', '087761661669', 'Denpasar', 'Rekayasa Perangkat Lunak', 1),
(20, 40, 'Ryan Ardito Zahwan Ragazzo', '3415', 'Laki - Laki', 'Surabaya', '2001-07-14', 'Islam', '087761661669', 'Denpasar', 'Rekayasa Perangkat Lunak', 2),
(21, 41, 'I Wayan Prema Agus Prasetya', '1424', 'Laki - Laki', 'Denpasar', '2001-08-30', 'Hindu', '087761661669', 'Denpasar', 'Rekayasa Perangkat Lunak', 1),
(23, 43, 'Made Deva Mahayana', '4125', 'Laki - Laki', 'Denpasar', '2000-12-20', 'Hindu', '087761661669', 'Denpasar', 'Rekayasa Perangkat Lunak', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa_tugas`
--

CREATE TABLE `tb_siswa_tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai` int(4) DEFAULT NULL,
  `file_tugas` varchar(50) NOT NULL,
  `tgl_pengumpulan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa_tugas`
--

INSERT INTO `tb_siswa_tugas` (`id_tugas`, `id_siswa`, `nilai`, `file_tugas`, `tgl_pengumpulan`) VALUES
(5, 19, NULL, '5bc433b82ef5b.txt', '2018-10-15 14:29:00');

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
  `tugas_selesai` datetime NOT NULL,
  `file_tugas` varchar(25) NOT NULL,
  `extensi_file` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tugas`
--

INSERT INTO `tb_tugas` (`id_tugas`, `id_mapel`, `id_kelas`, `nama_tugas`, `desc_tugas`, `tugas_mulai`, `tugas_selesai`, `file_tugas`, `extensi_file`, `status`) VALUES
(5, 8, 1, 'asdasd', 'asdasd', '2018-10-14 20:09:00', '2018-10-15 11:17:00', '5bc337d857970.doc', 'application/msword', 'blocked'),
(6, 8, 1, 'Tugas IPA', 'asdasd', '2018-10-15 10:55:00', '2018-10-15 11:03:00', '5bc401b2be658.docx', 'application/vnd.openxmlfo', 'blocked'),
(7, 8, 1, 'Quartil', 'Kerjakan LKS Halaman 1 - 50', '2018-10-15 15:14:00', '2018-10-15 15:17:00', '5bc43e8a60d92.txt', 'text/plain', 'blocked'),
(9, 9, 1, 'Speaking', 'kerjakan tugas, soal ada dalam file 1 - 40', '2018-10-15 20:48:00', '2018-10-23 22:00:00', '5bc48ced580bc.docx', 'application/vnd.openxmlfo', 'ready');

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
(10, 'premaagus', 'premaagus@gmail.com', '$2y$12$Ibvy5.rwholmc0TvUTqflOX2xXl1zbzEI8ZMa549hx3JRwmI7X9Hu', '5bc4e5d2924bc.jpg', 'Prema Agus', 1),
(11, 'bul', 'ryanardito25@gmail.com', '$2y$12$Uvhr7ZWAF38WsUf9GaPxC.Lz5Nm9e5MgeKh3qDFpJAe405JpCssba', '5bba17b85d110.jpg', 'Ryan Ardito', 1),
(15, 'evidwi', 'evidwi@gmail.com', '$2y$12$5FxqvOZpaANS3qwZulW4m.Zj/boWm1osnnn01YvJ44dMST8oLmUv6', 'profile.png', 'Evi Dwi', 3),
(20, 'ayudesiani', 'ayudesiani@gmail.com', '$2y$12$xk4T/K9.g1O1XnnJskPlN.l0EOT/Z0qnrCmjKtHHL9vnVr99HLl.2', 'profile.png', 'Ayu Desiani', 3),
(21, 'diliadewi', 'diliadewi@gmail.com', '$2y$12$xKZctqs0R7ipDw5cc23KleloWswP5yNkv7Rdh2ZNNgJFFYrzSbEvu', 'profile.png', 'Dilia Dewi', 3),
(22, 'wayansunarta', 'wayansunarta@gmail.com', '$2y$12$fqw9utAzIaYPYnPcX0KGrec1X3sOcDSwBXUTf8YckYqdtYHNX/G.m', 'profile.png', 'Wayan Sunarta', 3),
(23, 'ngakandarma', 'ngakandarma@gmail.com', '$2y$12$LWUXELddhBWgRRxteA8BsOGZ4yN8B9CEx0kM8hawU5RANItR2DUjK', 'profile.png', 'Ngakan Darma', 3),
(24, 'raisurarti', 'raisurarti@gmail.com', '$2y$12$VJ8wzQFIHT9eKNTltcdRieTKBnnvBWo8otw59QoUcI7VtjCoClHuS', 'profile.png', 'Rai Surarti', 3),
(25, 'warmaputra', 'warmaputra@gmail.com', '$2y$12$qLGD6H4w1LT7phYTpqTdlu4OXvwMP9D2UVtm3xSYtnNczXJPldwPG', 'profile.png', 'Warma Putra', 3),
(26, 'pradnyanaambara', 'pradnyanaambara@gmail.com', '$2y$12$iIdzbhMsb3HEEA6CYSGFaevIb6fy41mfOp.R2je1LKK4.uQmsydS2', 'profile.png', 'Pradnyana Ambara', 3),
(27, 'ernadewi', 'ernadewi@gmail.com', '$2y$12$57Y/xZqbE5x5RKdhgZLV1.xZSm3pOh20NiI5WALNMjfhzIxyGxqdW', 'profile.png', 'Erna Dewi', 3),
(39, 'premaagusp', 'premaagusp@gmail.com', '$2y$12$Ov3Q8g0BSkOsxn9wzsqrFuEGccTWjj8vy28LLs/h6UkIXD8vtiuNi', '5bc08ff5c382f.jpg', 'Prema Agus', 2),
(40, 'ryanardito', 'ryanardito@gmail.com', '$2y$12$Aw8wtejqnBkekx6X4fH9QOhKBXWgAKCREuHGRUNPO7/Sbrj3xteem', '5bc47ef171245.png', 'Ryan Ardito', 2),
(41, 'premaaguspras', 'premaprasetya@gmail.com', '$2y$12$h/zg0El8WJFm/WGAAIQyKOQxrVkUlB/tJ32/OfvKgseS9/oBRnp5W', '5bc49a8a14e16.jpg', 'Prema Prasetya', 2),
(42, 'admin', 'admin@gmail.com', '$2y$12$l5hTlRmLRzZFqBwROItGl.DlOlSdwmOjT.O/ZpT.kp.kP51H73bhy', '5bc4e6f1d9a1e.jpg', 'Admin 1', 1),
(43, 'devamahayana', 'devamahayana@gmail.com', '$2y$12$9OaMjh.iqnOsZMkVeD4/mepTraiNoxY6.gjJfE905NbVDJVm9Tvba', '5bc4ed98a2c75.jpg', 'Deva Mahayana', 2);

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
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
