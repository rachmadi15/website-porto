-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 10:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psikologi`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_baru`
--

CREATE TABLE `berita_baru` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `berita_panjang` text NOT NULL,
  `berita_pendek` varchar(500) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_baru`
--

INSERT INTO `berita_baru` (`id`, `judul`, `berita_panjang`, `berita_pendek`, `foto`) VALUES
(2, 'Kepribadian Golongan Darah O yang Disebut Lebih \'Kebal\' COVID-19', 'Baru-baru ini, heboh dua studi yang menunjukkan bukti golongan darah O lebih kebal COVID-19. Studi yang dipublikasikan di jurnal Blood Advances menunjukkan hanya 38,4 persen pasien Corona dengan golongan darah O di antara 7.422 orang yang dites positif COVID-19.\r\nSatu studi lainnya menemukan, di antara 95 pasien yang sakit kritis karena COVID-19, 84 persen pasien Corona golongan darah A atau AB membutuhkan alat bantu pernapasan. Sementara itu, pasien Corona golongan darah O atau B, sebanyak 61 persen.\r\n\r\nSelain disebut lebih \'kebal\' karena Corona. Golongan darah O juga diklaim rentan gigitan nyamuk. Banyak fakta unik di balik golongan darah O ini, karakteristiknya pun disebut memiliki keistimewaan dibandingkan golongan darah lainnya.\r\n\r\nProfesor Jepang Tokeji Furukawa menerbitkan sebuah makalah yang mengklaim bahwa setiap golongan darah mencerminkan kepribadian seseorang yang memilikinya. Empat golongan darah primer, A, B, O dan AB dibedakan satu sama lain berdasarkan antigennya.\r\n\r\nAntigen ditemukan di permukaan sel darah merah dan membantu menjelaskan seberapa efektif sistem kekebalan seseorang bekerja.\r\n\r\nWarga Jepang sangat gemar menanyakan golongan darah kepada orang lain karena mereka percaya pada teori kepribadian golongan darah. Orang Jepang menggunakannya sebagai alat untuk menilai potensi seorang karyawan dan keserasian dua orang menikah.', 'Baru-baru ini, heboh dua studi yang menunjukkan bukti golongan darah O lebih kebal COVID-19.', 'news-201130-0ac60fb446.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `send_to` int(5) NOT NULL,
  `send_by` int(3) NOT NULL,
  `message` tinytext NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `send_to`, `send_by`, `message`, `time`) VALUES
(11, 47, 5, 'halo', '2020-12-14 08:53:12'),
(12, 5, 47, 'halo juga wkwkwkw', '2020-12-14 08:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `libur` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `id_pasien`, `id_dokter`, `harga`) VALUES
(3, 14, 22, 20000),
(4, 14, 22, 20000),
(5, 14, 23, 20000),
(6, 14, 25, 20000),
(7, 14, 27, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `address`, `email`, `telp`, `gender`) VALUES
(2, 'Kikikiki', 'Utopia', 'Kiki@yoyo.com', '10101093132', 'male'),
(3, 'Amjad Aziz', 'lampung', 'amjad@gmail.com', '123456789', 'male'),
(5, 'kuku', 'bulan', 'kuku@lmao.com', '1231231231232', 'male'),
(8, 'Tuyul', 'hutan', 'Tuyul@hantu.com', '1223332123213', 'male'),
(9, 'yohan', 'Gangdong', 'yohan@gangdong.com', '121241212312', 'male'),
(10, 'aaaa', 'aaaaaa', 'ddddd', '12321412', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `newstext` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `berita` text NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `newstext`, `image`, `berita`, `judul`) VALUES
(14, 'Pandemi COVID-19 memicu peningkatan masalah psikologis terutama akibat hambatan belajar. Menurut data Ikatan Psikolog Klinis (IPK) Indonesia, sejak pandemi pada Maret hingga Agustus 2020 tercatat ada sekitar 14.619 kasus masalah psikologis.', 'news-201123.png', '', ''),
(19, 'Pernikahan akan mengalami fase dinamis yang seringkali mengganggu hubungan. ', 'news-201130-bff886bf82.jpg', 'Pernikahan akan mengalami fase dinamis yang seringkali mengganggu hubungan. Untuk itu, diskusi dan penyesuaian sebelum pernikahan dianggap penting untuk mencegah konflik dan menjaga kelanggengan rumah tangga.\r\nDosen Psikologi Universitas Airlangga (Unair) Surabaya Tri Kurniati Ambarini MPsi membagikan empat hal yang harus diperhatikan dan didiskusikan bersama pasangan sebelum menikah.\r\n1. Negosiasi Peran Individu dan Tema Pernikahan\r\nMenurutnya, pasangan harus menentukan bagaimana peran mereka nantinya saat telah berkeluarga. Siapa yang nantinya akan mencari nafkah, mengurus rumah tangga, seberapa besar alokasi waktu untuk keluarga hingga bagaimana rencana masa depan mereka berdua. Tidak harus suami mencari nafkah dan istri mengurus rumah tangga. Sehingga sosialisasi gender di antara kedua pasangan diperlukan untuk membentuk pemahaman yang baik mengenai keinginan, kemampuan, serta ekspektasi dari satu sama lain.\r\n\r\n\"Kalau yang lebih pintar masak suami, ya tak apa suami yang handle beberapa urusan rumah tangga. Istri bisa support di bagian lain. Makanya penentuan peran dan rencana itulah yang akan merepresentasikan tema keluarga yang ingin dibangun. Apakah berdasar kerja sama, pembagian peran, maupun tema yang lain. Itu semua bisa diusahakan dengan diskusi awal pra-nikah,\" kata Tri, Selasa (3/11/2020).\r\n2. Regulasi Batas Antara Keluarga dan Teman\r\n\r\nPasangan hendaknya memperhatikan dan mendiskusikan external marital boundary, perlu menetapkan sejauh mana baik suami maupun istri dapat berinteraksi dengan keluarga dan teman. Biasanya seberapa sering suami atau istri mengunjungi keluarga masing-masing, bermain bersama teman, maupun sejauh mana pasangan dapat mendiskusikan masalah dengan keluarga dan teman dibanding dengan pasangannya.', 'Ini Cara Menjaga Kelanggengan Rumah Tangga Agar Tak Alami Fase Dinamis'),
(20, 'Baru-baru ini, heboh dua studi yang menunjukkan bukti golongan darah O lebih kebal COVID-19.', 'news-201130-0ac60fb446.jpg', 'Baru-baru ini, heboh dua studi yang menunjukkan bukti golongan darah O lebih kebal COVID-19. Studi yang dipublikasikan di jurnal Blood Advances menunjukkan hanya 38,4 persen pasien Corona dengan golongan darah O di antara 7.422 orang yang dites positif COVID-19.\r\nSatu studi lainnya menemukan, di antara 95 pasien yang sakit kritis karena COVID-19, 84 persen pasien Corona golongan darah A atau AB membutuhkan alat bantu pernapasan. Sementara itu, pasien Corona golongan darah O atau B, sebanyak 61 persen.\r\n\r\nSelain disebut lebih \'kebal\' karena Corona. Golongan darah O juga diklaim rentan gigitan nyamuk. Banyak fakta unik di balik golongan darah O ini, karakteristiknya pun disebut memiliki keistimewaan dibandingkan golongan darah lainnya.\r\n\r\nProfesor Jepang Tokeji Furukawa menerbitkan sebuah makalah yang mengklaim bahwa setiap golongan darah mencerminkan kepribadian seseorang yang memilikinya. Empat golongan darah primer, A, B, O dan AB dibedakan satu sama lain berdasarkan antigennya.\r\n\r\nAntigen ditemukan di permukaan sel darah merah dan membantu menjelaskan seberapa efektif sistem kekebalan seseorang bekerja.\r\n\r\nWarga Jepang sangat gemar menanyakan golongan darah kepada orang lain karena mereka percaya pada teori kepribadian golongan darah. Orang Jepang menggunakannya sebagai alat untuk menilai potensi seorang karyawan dan keserasian dua orang menikah.', 'Kepribadian Golongan Darah O yang Disebut Lebih \'Kebal\' COVID-19');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `id`, `nama`, `email`) VALUES
(13, 27, 'Amat', 'sule@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `psychologist`
--

CREATE TABLE `psychologist` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `libur` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psychologist`
--

INSERT INTO `psychologist` (`id`, `fullname`, `address`, `email`, `telp`, `gender`, `jam`, `libur`, `price`, `password`, `role`, `foto`, `jumlah`) VALUES
(27, 'Maikur', 'Lampung', 'wimeti0229@gmail.com', '081239031227', 'male', '20:30', 'Minggu', 50000, '$2y$10$ZZud8SQnwaRhGKotHz.E3OJ1ejwM7Ge7PDSNdg53au8p3eJLNuUEK', 'dokter', 'news-201205-989652eef22.jpg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `psychologist` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date`, `time`, `psychologist`, `location`) VALUES
(2, '2020-12-12', '12:00', 'Yatno', 'kcabang'),
(4, '2020-11-24', '21:08', 'Bibi', 'kpusat'),
(5, '2020-12-12', '12:38', 'Uya Kuya', 'kcabang'),
(6, '2020-12-10', '21:48', 'Malin', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `role` enum('member','admin','dokter') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `provinsi`, `kota`, `telepon`, `jk`, `foto`, `role`, `created_at`, `is_active`) VALUES
(14, 'Amat', 'sule@gmail.com', '$2y$10$3cN7qApeFZ86Hn0nImYkvOZ/hHno9GrAVmoLXXuFec5pc2B2TxESC', 'Lombok', 'Dompu', '081239031227', 'L', 'brok11.jpg', 'member', '2020-12-13 05:03:38', '1'),
(16, 'azis', 'azislam@gmail.com', '$2y$10$4jOoHO25w64yA3Fq5mgxBu2Yc3Quz6wZ9e4QU2NBY6zAGn336huu2', 'NTB', 'Dompu', '', '', '', 'member', '2020-12-02 23:40:50', '0'),
(21, 'tina', 'tinatoon@gmail.com', '$2y$10$2FKWjO48YplwD/dBajx3fuJ6xIW78oASgj0rzmMRInmfQuKBv23bm', 'NTB', 'Dompu', '', '', 'default.png', 'member', '2020-12-11 07:36:40', '0'),
(43, 'Rachmadi', 'rachmadi0722@gmail.com', '$2y$10$ucCP5uO/lZX0VG5/Czk8Hu0L8yQqc/HPSM1dB3CFMoPNYUttQZrji', 'NTB', 'Dompu', '', '', 'default.png', 'admin', '2020-12-14 02:53:40', '1'),
(59, 'Maikur', 'wimeti0229@gmail.com', '$2y$10$w.3Y3ZY.Dng/kFkx1a.HXOyJuerLzeEoI4/D3bKDnepDJIXd0LDzK', '', '', '', '', '', 'dokter', '2020-12-14 08:49:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Dida Nurwanda', 'didanurwanda', '$2y$10$1bxIR4tiYdycEvK6tLyUf.FUyP0EvWqeV/wzffKffnhe0R7e8Bqpe'),
(2, 'Mark', 'mark', '$2y$10$gm8znIyAw3OyDsGFdsPIueRy2X0TmQmfiw5IFnJqyc55Eqd21hSWS'),
(3, 'Ahmad Saepudin', 'ahmadesae', '$2y$10$dfnDoZCGQhT4unXGzWpCI.V8SbBPhJw3hjm4HcCFx53g4WE5nkC4G'),
(4, 'Luffy', 'Luffy', '124'),
(5, 'Amat', 'Amat', '000'),
(6, 'azis', 'azis', '$2y$10$JjBub20ufE.dYmhpcaP92OLZgOTU.u8plWMVGAMZzvu0sY36es9C.'),
(10, 'Sasuke', 'Sasuke', '$2y$10$gJwMSaW3xrE5UPeRrTQbmeu38dMMcYc7SGRLdN4xpbYtV39eoG7xy'),
(11, 'tina', 'tina', '$2y$10$A3ZDfMVFRH1keY/miqtcve258loaS5rVS1U7MIagZBOi3MUABcG6e'),
(33, 'Rachmadi', 'Rachmadi', '$2y$10$G4IIREYTFFmiFpBLD0ORGuUxi/P1Zq.ozly0oWe7PCbysEQ4Ojuj.'),
(47, 'Maikur', 'Maikur', '$2y$10$YFan8O/TY07QzGzEAV4xI.yFPZkO6IoQ2j3nAn8Kyf0L5UjT8VJJO');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `token` varchar(225) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita_baru`
--
ALTER TABLE `berita_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `sent_to` (`send_to`),
  ADD KEY `send_by` (`send_by`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `psychologist`
--
ALTER TABLE `psychologist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
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
-- AUTO_INCREMENT for table `berita_baru`
--
ALTER TABLE `berita_baru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `psychologist`
--
ALTER TABLE `psychologist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`send_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
