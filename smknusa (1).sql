-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 09 Jul 2018 pada 07.11
-- Versi server: 5.7.21
-- Versi PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smknusa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `status` enum('approved','unapproved','spam') DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `reply` text,
  `replied_by` int(11) DEFAULT NULL,
  `replied_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id`, `email`, `name`, `content`, `ip_address`, `status`, `post_id`, `reply`, `replied_by`, `replied_at`, `created_at`, `updated_at`, `deleted_at`, `updated_by`, `deleted_by`, `is_deleted`) VALUES
(1, 'olilakbar49@gmail.com', 'Yudha', 'Bagaimana cara melihat pengumuman?', NULL, 'spam', 1, NULL, NULL, NULL, '2018-06-28 13:35:05', '2018-07-02 11:10:42', NULL, 1, NULL, 0),
(2, 'olilakbar49@gmail.com', 'Saputra', 'Bagaimana cara melihat galeri?', NULL, 'approved', 1, '<p>Pilih menu Tentang -&gt; Galeri</p>', 1, '2018-07-01 11:20:36', '2018-07-01 11:00:11', '2018-07-01 11:20:36', NULL, 1, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `background_color` varchar(10) NOT NULL,
  `text_color` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `title`, `url`, `start_date`, `end_date`, `background_color`, `text_color`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `is_deleted`) VALUES
(1, 'Title Event Ke 1', '', '2018-07-02 06:45:00', '2018-07-17 13:20:00', '#ffff00', '#171717', '2018-07-04 10:00:20', '2018-07-04 13:10:49', NULL, 1, 1, NULL, 0),
(2, 'Title Event Ke 2', '', '2018-07-02 06:45:00', '2018-07-07 13:20:00', '#ff0000', '#ffffff', '2018-07-04 10:53:02', NULL, NULL, 1, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

DROP TABLE IF EXISTS `galery`;
CREATE TABLE IF NOT EXISTS `galery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`id`, `filename`, `categories`, `content`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `is_deleted`) VALUES
(1, 'logo_smk.png', 'Info', 'Logo SMK Negeri 1 Purwosari', '2018-07-04 04:40:59', NULL, NULL, 1, NULL, NULL, 0),
(2, 'AGENDA.png', 'Website Sekolah', 'Agenda', '2018-07-04 04:45:31', NULL, NULL, 1, NULL, NULL, 0),
(3, 'GURU.png', 'Website Sekolah', 'Guru', '2018-07-04 04:46:49', NULL, '2018-07-04 05:56:05', 1, NULL, 1, 1),
(4, '1bfd1d7f2f9fa311658dd451743f7e89.jpg', 'Sukses', 'Komunikasi', '2018-07-04 04:47:48', '2018-07-04 05:54:03', NULL, 1, 1, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `categories` text,
  `tags` text,
  `type` enum('blog','pengumuman') NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('publish','draft') NOT NULL,
  `comment_status` enum('open','close') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `image`, `categories`, `tags`, `type`, `slug`, `status`, `comment_status`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `is_deleted`) VALUES
(1, 'Ini Title', '<p>Ini Content</p>', '858403c5872929064b5ada28808a9d1d.png', 'categories', 'tags', 'blog', 'ini-title', 'draft', 'open', '2018-06-26 12:51:30', '2018-06-28 12:43:16', NULL, 1, 1, NULL, 0),
(2, 'Mak Aku Pengen Nambah RAM', '<p>Suatu hari ada seorang anak kecil yang beringinan besar membelikan ram baru untuk laptop kesayangannya.</p>', 'b246d4e6e0be53b83788a47a699242e8.jpg', 'harapan,kehidupan', 'semoga,terkabul', 'blog', 'mak-aku-pengen-nambah-ram', 'draft', 'open', '2018-06-28 06:37:18', '2018-06-30 06:26:40', NULL, 1, 1, NULL, 0),
(3, 'Buka Bersama', '<p>Ini Pengumuman</p>', NULL, 'ramadhan', 'bukber', 'pengumuman', 'buka-bersama', 'draft', 'open', '2018-06-30 05:46:13', '2018-07-01 11:23:12', NULL, 1, 1, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` enum('Admin','Author') NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_login` tinyint(1) DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `role`, `password`, `photo`, `is_active`, `is_login`, `last_login`, `ip_address`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `is_deleted`) VALUES
(1, 'Admin SMKNUSA', 'admin', 'admin@smknusa.com', 'Admin', '$2y$10$93ajkSXOsWfyqWK27DhrSuAWWnwmXBj5nvPee96XPrebPfwUH0ske', '2fe0d6eaa0bba95310226a885709de06.png', NULL, 1, '2018-07-09 07:11:27', '::1', '2018-06-25 08:26:39', '2018-07-01 07:13:05', NULL, NULL, 1, NULL, 0);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
