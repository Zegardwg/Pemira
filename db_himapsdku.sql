-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2024 pada 12.08
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_himapsdku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','advokesma','humas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(7, 'Nurafiif Almas Azhari', 'admin1@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin'),
(17, 'Subekti Bimo W', 'admin2@gmail.com', '5db482aa594b7c7587a8b1f39782fdcf', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_terkumpul`
--

CREATE TABLE `tb_data_terkumpul` (
  `id_data_terkumpul` int(11) NOT NULL,
  `id_pencoblos` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_data_terkumpul`
--

INSERT INTO `tb_data_terkumpul` (`id_data_terkumpul`, `id_pencoblos`, `id_kandidat`) VALUES
(8, 1, 1),
(9, 2, 1),
(10, 3, 2),
(11, 4, 1),
(12, 6, 2),
(13, 7, 2),
(14, 8, 2),
(15, 9, 2),
(16, 10, 1),
(17, 11, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_design`
--

CREATE TABLE `tb_design` (
  `id_design` int(11) NOT NULL,
  `nama_designer` varchar(200) NOT NULL,
  `instansi_designer` varchar(200) NOT NULL,
  `design` text NOT NULL,
  `datadesign` longblob NOT NULL,
  `typedesign` varchar(12) NOT NULL,
  `sizedesign` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_essay`
--

CREATE TABLE `tb_essay` (
  `id_essay` int(11) NOT NULL,
  `nama_peserta` varchar(200) NOT NULL,
  `instansi_peserta` varchar(200) NOT NULL,
  `file` text NOT NULL,
  `datafile` longblob NOT NULL,
  `typefile` varchar(200) NOT NULL,
  `sizefile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kandidat`
--

CREATE TABLE `tb_kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `kode_kandidat` int(50) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `nama_wakil` text NOT NULL,
  `visi` text NOT NULL,
  `id_misi` int(11) NOT NULL,
  `foto_ketua` longblob NOT NULL,
  `foto_wakil` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kandidat`
--

INSERT INTO `tb_kandidat` (`id_kandidat`, `kode_kandidat`, `nama_ketua`, `nama_wakil`, `visi`, `id_misi`, `foto_ketua`, `foto_wakil`) VALUES
(1, 608428, 'Wilson', 'James', '\"Menjadi agen perubahan yang mendorong kemajuan dan kesejahteraan anggota himpunan, melalui inovasi, kolaborasi, dan kepemimpinan yang berintegritas.\"', 1, 0x6b6e6474312e6a7067, 0x6a6e647431312e6a7067),
(2, 239425, 'Agus', 'Siti', '\"Menjadi pionir dalam menciptakan komunitas akademis yang dinamis dan berdaya saing tinggi, serta menjadi sumber inspirasi bagi pengembangan diri dan kontribusi positif bagi masyarakat.\"', 2, 0x6b6e6474322e6a7067, 0x6b6e647432322e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_misi`
--

CREATE TABLE `tb_misi` (
  `id_misi` int(11) NOT NULL,
  `misi1` varchar(200) NOT NULL,
  `misi2` varchar(200) NOT NULL,
  `misi3` varchar(200) NOT NULL,
  `misi4` varchar(200) NOT NULL,
  `misi5` varchar(200) NOT NULL,
  `misi6` varchar(200) NOT NULL,
  `misi7` varchar(200) NOT NULL,
  `misi8` varchar(200) NOT NULL,
  `misi9` varchar(200) NOT NULL,
  `misi10` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_misi`
--

INSERT INTO `tb_misi` (`id_misi`, `misi1`, `misi2`, `misi3`, `misi4`, `misi5`, `misi6`, `misi7`, `misi8`, `misi9`, `misi10`) VALUES
(1, '1. Menyediakan program pembinaan dan pelatihan yang bertujuan untuk meningkatkan keterampilan, pengetahuan, dan potensi anggota himpunan agar dapat bersaing dan berkontribusi secara maksimal.', '2. Menggalang ide-ide inovatif dan kreatif dari anggota himpunan untuk menciptakan solusi yang relevan terhadap tantangan zaman, sehingga himpunan menjadi pusat inovasi yang inspiratif.', '3. Membangun kemitraan yang erat dengan organisasi mahasiswa lainnya, stakeholder, dan dunia industri untuk memperluas jaringan, menciptakan peluang kolaborasi, dan mendukung pengembangan karier anggo', '4. Menegakkan nilai-nilai kepemimpinan yang berlandaskan integritas, tanggung jawab, dan keadilan untuk menciptakan lingkungan himpunan yang inklusif, transparan, dan adil.', '', '', '', '', '', ''),
(2, '1. Mendorong partisipasi aktif anggota dalam proses pengambilan keputusan, agar kebijakan dan program himpunan mencerminkan kebutuhan dan aspirasi anggota secara menyeluruh.', '2. Menyelenggarakan acara dan kompetisi yang memungkinkan anggota mengekspresikan bakat dan kreativitas mereka, menciptakan lingkungan yang mendukung perkembangan pribadi dan artistik.', '3. Menjadi suara mahasiswa dalam hal isu-isu yang relevan dengan kesejahteraan mahasiswa, pendidikan, dan lingkungan kampus, serta berkomitmen untuk memperjuangkan perubahan positif.', '4. Menyusun program-program berkelanjutan yang tidak hanya memberikan manfaat jangka pendek, tetapi juga memberikan dampak positif yang berkesinambungan dalam pengembangan anggota dan lingkungan kampu', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pencoblos`
--

CREATE TABLE `tb_pencoblos` (
  `id_pencoblos` int(11) NOT NULL,
  `kode_pencoblos` int(50) NOT NULL,
  `nim_pencoblos` char(10) NOT NULL,
  `nama_pencoblos` varchar(200) NOT NULL,
  `prodi_pencoblos` varchar(200) NOT NULL,
  `tahun_angkatan` varchar(200) NOT NULL,
  `status_pencoblosan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pencoblos`
--

INSERT INTO `tb_pencoblos` (`id_pencoblos`, `kode_pencoblos`, `nim_pencoblos`, `nama_pencoblos`, `prodi_pencoblos`, `tahun_angkatan`, `status_pencoblosan`) VALUES
(1, 124326, 'V3921024', 'Nurafiif Almas Azhari', 'Teknik Informatika', '2021', 1),
(2, 423554, 'V3921029', 'Rayya Alika Putri', 'Teknik Informatika', '2021', 1),
(3, 988376, 'V3821021', 'Nadifa Nisaul Ifani ', 'Teknik Informatika', '2021', 1),
(4, 354079, 'V3821005', 'EARLIAN ZAKA BINTANG LAZUARDI', 'Teknologi Hasil Pertanian', '2022', 1),
(5, 295129, 'V4021010', 'ELSA PUDYANINGRAT', 'Teknik Informatika', '2022', 0),
(6, 347685, 'V3922041', 'Subekti ', 'Teknik Informatika', '2022', 1),
(7, 234877, 'V3922044', 'SUGENG', 'Teknik Informatika', '2023', 1),
(8, 648327, 'V3822023', 'Ariel', 'Teknologi Hasil Pertanian', '2023', 1),
(9, 578158, 'V4022034', 'Sumual', 'Akuntansi', '2023', 1),
(10, 89901, 'V3922047', 'Widi Suryo Nugroho', 'Teknik Informatika', '2022', 1),
(11, 210383, 'V3922048', 'Winasis Widya ', 'Teknik Informatika', '2022', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan_fasilitas`
--

CREATE TABLE `tb_pesan_fasilitas` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesan_fasilitas`
--

INSERT INTO `tb_pesan_fasilitas` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(46, 0, 'a', 'Anynomus', '2022-02-24 07:44:21'),
(47, 46, 'b', 'Admin_Humas', '2022-02-24 07:48:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan_hima`
--

CREATE TABLE `tb_pesan_hima` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan_ukt`
--

CREATE TABLE `tb_pesan_ukt` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesan_ukt`
--

INSERT INTO `tb_pesan_ukt` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(35, 0, 'a', 'Anynomus', '2022-02-24 07:49:16'),
(36, 35, 'b', 'Admin_Advokesma', '2022-02-24 07:49:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data_terkumpul`
--
ALTER TABLE `tb_data_terkumpul`
  ADD PRIMARY KEY (`id_data_terkumpul`),
  ADD KEY `id_pencoblos` (`id_pencoblos`),
  ADD KEY `id_kandidat` (`id_kandidat`);

--
-- Indeks untuk tabel `tb_design`
--
ALTER TABLE `tb_design`
  ADD PRIMARY KEY (`id_design`);

--
-- Indeks untuk tabel `tb_essay`
--
ALTER TABLE `tb_essay`
  ADD PRIMARY KEY (`id_essay`);

--
-- Indeks untuk tabel `tb_kandidat`
--
ALTER TABLE `tb_kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indeks untuk tabel `tb_misi`
--
ALTER TABLE `tb_misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indeks untuk tabel `tb_pencoblos`
--
ALTER TABLE `tb_pencoblos`
  ADD PRIMARY KEY (`id_pencoblos`);

--
-- Indeks untuk tabel `tb_pesan_fasilitas`
--
ALTER TABLE `tb_pesan_fasilitas`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indeks untuk tabel `tb_pesan_hima`
--
ALTER TABLE `tb_pesan_hima`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indeks untuk tabel `tb_pesan_ukt`
--
ALTER TABLE `tb_pesan_ukt`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_data_terkumpul`
--
ALTER TABLE `tb_data_terkumpul`
  MODIFY `id_data_terkumpul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_design`
--
ALTER TABLE `tb_design`
  MODIFY `id_design` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_essay`
--
ALTER TABLE `tb_essay`
  MODIFY `id_essay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_kandidat`
--
ALTER TABLE `tb_kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_misi`
--
ALTER TABLE `tb_misi`
  MODIFY `id_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pencoblos`
--
ALTER TABLE `tb_pencoblos`
  MODIFY `id_pencoblos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan_fasilitas`
--
ALTER TABLE `tb_pesan_fasilitas`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan_hima`
--
ALTER TABLE `tb_pesan_hima`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan_ukt`
--
ALTER TABLE `tb_pesan_ukt`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
