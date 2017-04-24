-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Apr 2017 pada 15.20
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praklaravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nip`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'arul', '20312321', 'nfeijeidjeidj', 7, '2017-04-11 06:12:00', '2017-04-11 06:12:00'),
(2, 'Andre Prasetya Rahman', '234123131', 'Perjuangan', 8, '2017-04-12 21:14:36', '2017-04-12 21:14:36'),
(3, 'M. Budi Saputra', '3412312', 'pemuda', 9, '2017-04-12 21:15:02', '2017-04-12 21:15:02'),
(4, 'Fajar Khairumman', '99238123', 'pramuka', 10, '2017-04-12 21:15:26', '2017-04-12 21:15:26'),
(5, 'Alulz', '92912', 'Gelatik', 11, '2017-04-12 21:15:55', '2017-04-12 21:15:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_matakuliah`
--

CREATE TABLE `dosen_matakuliah` (
  `id` int(10) UNSIGNED NOT NULL,
  `dosen_id` int(10) UNSIGNED NOT NULL,
  `matakuliah_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `dosen_matakuliah`
--

INSERT INTO `dosen_matakuliah` (`id`, `dosen_id`, `matakuliah_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-04-11 06:12:59', '2017-04-11 06:12:59'),
(2, 2, 5, '2017-04-12 21:17:54', '2017-04-12 21:17:54'),
(3, 3, 2, '2017-04-12 21:18:03', '2017-04-12 21:18:03'),
(4, 4, 3, '2017-04-12 21:18:15', '2017-04-12 21:18:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_matakuliah`
--

CREATE TABLE `jadwal_matakuliah` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `ruangan_id` int(10) UNSIGNED NOT NULL,
  `dosen_matakuliah_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_matakuliah`
--

INSERT INTO `jadwal_matakuliah` (`id`, `mahasiswa_id`, `ruangan_id`, `dosen_matakuliah_id`, `created_at`, `updated_at`) VALUES
(2, 5, 2, 1, '2017-04-11 06:16:05', '2017-04-11 06:16:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nim` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(5, 'Andre Prasetya Rahman', '1515015080', 'eefneijede', 6, '2017-04-11 05:58:20', '2017-04-11 05:58:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `title`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Framework', 'Pemrograman Framework', '2017-03-16 23:30:58', '2017-03-16 23:30:58'),
(2, 'Visual', 'Pemorgraman Visual', '2017-04-11 06:10:39', '2017-04-11 06:10:39'),
(3, 'AI', 'Kecerdasan Buatan', '2017-04-12 21:16:17', '2017-04-12 21:16:17'),
(4, 'SMBD', '', '2017-04-12 21:16:55', '2017-04-12 21:16:55'),
(5, 'Kriptografi', '', '2017-04-12 21:17:09', '2017-04-12 21:17:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_03_09_052529_buat_table_pengguna', 1),
('2017_03_11_083749_dosen', 2),
('2017_03_11_083858_mahasiswa', 2),
('2017_03_11_083918_ruangan', 2),
('2017_03_11_083937_matakuliah', 2),
('2017_03_11_083955_dosen_matakuliah', 2),
('2017_03_11_084032_jadwal_matakuliah', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Andre Prasetya Rahman', 'ddd', 'GMKN5bD2JpOgO3J6rnfzett8kiywlp6LSsrOn1Syt9LRYZhSqyd6bcMviu1H', '2017-04-11 05:58:20', '2017-04-24 04:35:33'),
(7, 'dww', 'dcewdwdw', NULL, '2017-04-11 06:12:00', '2017-04-11 06:12:00'),
(8, 'Andre Prasetya Rahman', 'kdakdmwd', NULL, '2017-04-12 21:14:35', '2017-04-12 21:14:35'),
(9, 'Andre Prasetya Rahman', 'asqddqdq', NULL, '2017-04-12 21:15:02', '2017-04-12 21:15:02'),
(10, 'spitzery', 'andre', NULL, '2017-04-12 21:15:26', '2017-04-12 21:15:26'),
(11, 'wwdwd', 'wqsqsqqd', NULL, '2017-04-12 21:15:55', '2017-04-12 21:15:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Ruangan 407', '2017-03-16 23:26:14', '2017-03-16 23:26:14'),
(2, 'Ruangan 404', '2017-03-23 17:44:39', '2017-03-24 06:36:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_matakuliah_dosen_id_foreign` (`dosen_id`),
  ADD KEY `dosen_matakuliah_matakuliah_id_foreign` (`matakuliah_id`);

--
-- Indexes for table `jadwal_matakuliah`
--
ALTER TABLE `jadwal_matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_matakuliah_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `jadwal_matakuliah_ruangan_id_foreign` (`ruangan_id`),
  ADD KEY `jadwal_matakuliah_dosen_id_foreign` (`dosen_matakuliah_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jadwal_matakuliah`
--
ALTER TABLE `jadwal_matakuliah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
  ADD CONSTRAINT `dosen_matakuliah_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dosen_matakuliah_matakuliah_id_foreign` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_matakuliah`
--
ALTER TABLE `jadwal_matakuliah`
  ADD CONSTRAINT `jadwal_matakuliah_dosen_id_foreign` FOREIGN KEY (`dosen_matakuliah_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_matakuliah_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_matakuliah_ruangan_id_foreign` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangan` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
