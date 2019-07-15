-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 14.50
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olahraga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_tbl`
--

CREATE TABLE `login_tbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_06_25_085319_create_table_konten', 1),
(2, '2019_07_09_023835_add_deleted_at_colomn_to_artikel_tbl', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konten`
--

CREATE TABLE `tb_konten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_konten`
--

INSERT INTO `tb_konten` (`id`, `judul`, `kategori`, `isi`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'coba', 'sepakbola', 'yyguuihoohh', '195201812.png', '2019-07-08 21:49:29', '2019-07-10 18:13:27', '2019-07-10 18:13:27'),
(2, 'testt', 'badminton', '<p>ghqlehijsk</p>', '1520035246.jpg', '2019-07-08 22:09:30', '2019-07-08 22:09:38', '2019-07-08 22:09:38'),
(3, 'yedgwjjj', 'basket', 'hdchjl', '1394605890.jpg', '2019-07-08 22:18:50', '2019-07-10 18:13:34', '2019-07-10 18:13:34'),
(4, 'Jadwal Perempatfinal Copa America 2019', 'sepakbola', '<p>Jakarta - Copa America 2019 akan memasuki babak perempatfinal usai fase grup tuntas digelar. Berikut adalah jadwal perempatfinal Copa America selengkapnya</p>', '1035144682.png', '2019-07-08 22:21:45', '2019-07-09 00:10:41', '2019-07-09 00:10:41'),
(5, 'Jadwal Perempatfinal Copa America 2019 edit', 'sepakbola', 'Jakarta - Copa America 2019 akan memasuki babak perempatfinal usai fase grup tuntas digelar. Berikut adalah jadwal perempatfinal Copa America selengkapnya.\r\n\r\nDelapan tim lolos ke babak perempatfinal Copa America. Dua di antaranya adalah tim peringkat ketiga terbaik di fase grup yakni Peru dan Paraguay.\r\n\r\nBabak perempatfinal Copa America akan mulai bergulir pada 27 Juni atau 28 Juni waktu Indonesia. Brasil sebagai juara Grup A akan menghadapi Paraguay di Arena do Gremio pada Jumat (28/6/2019) pagi WIB.\r\n\r\nPada hari Sabtu (29/6) dini hari WIB, Venezuela yang merupakan runner-up Grup A akan melawan Argentina yang lolos sebagai runner-up Grup B. Beberapa jam kemudian, laga antara Kolombia dan Chile akan digelar. Satu laga perempatfinal lainnya akan dimainkan Minggu (30/6) dini hari WIB. Uruguay akan menghadapi Peru di Itaipava Arena Fonte Nova.\r\n\r\nJadwal perempatfinal Copa America 2019:\r\nJumat (28/6/2019)\r\n07:30 WIB Brasil vs Paraguay\r\nSabtu (29/6/2019)\r\n02:00 WIB Venezuela vs Argentina 06:00 WIB Kolombia vs Chile\r\nMinggu (30/6/2019)\r\n02:00 WIB Uruguay vs Peru', '25950776.png', '2019-07-08 22:33:47', '2019-07-10 20:16:42', NULL),
(6, 'lfaklj', 'badminton', 'bjcdlkekhlaehf', '85247006.png', '2019-07-09 01:29:27', '2019-07-09 01:30:13', '2019-07-09 01:30:13'),
(8, 'uas', 'basket', 'twduagougawod', '738847578.png', '2019-07-09 23:50:10', '2019-07-09 23:50:10', NULL),
(9, 'uasfhlu', 'basket', 'aeysrdtufyiguolih;jo\'kdctvyjbjnkml', '1974231910.png', '2019-07-15 05:40:17', '2019-07-15 05:40:17', NULL),
(10, 'Jadwal Perempatfinal Copa Americajkk', 'sepakbola', 'jdjfvjkggllhhfjyfkgkgdtkfgl liytfy hiilhi', '1277815295.png', '2019-07-15 05:45:25', '2019-07-15 05:46:42', '2019-07-15 05:46:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_konten`
--
ALTER TABLE `tb_konten`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_konten_id_unique` (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_konten`
--
ALTER TABLE `tb_konten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
