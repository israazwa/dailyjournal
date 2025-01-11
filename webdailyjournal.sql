-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql200.byetcluster.com
-- Waktu pembuatan: 11 Jan 2025 pada 06.29
-- Versi server: 10.6.19-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38085183_webdailyjournal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Kucing Adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quos?', '20250111181837.jpg', '2025-01-11 18:18:37', 'admin'),
(2, 'Kucing Lorem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quos?', '20250111181655.jpg', '2025-01-11 18:16:55', 'admin'),
(3, 'Kucing Ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quos?', '20250111181715.jpg', '2025-01-11 18:17:15', 'admin'),
(4, 'Kucing Dolor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quos?', '20250111181741.jpg', '2025-01-11 18:17:41', 'admin'),
(5, 'Kucing SitAmet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quos?', '20250111181810.jpg', '2025-01-11 18:18:10', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `gambar` text NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `tanggal`, `gambar`, `username`) VALUES
(3, '2025-01-10 14:30:09', '20250111181603.jpg', 'admin'),
(4, '2025-01-10 14:30:20', '20250111181545.jpg', 'admin'),
(5, '2025-01-10 14:30:27', '20250111181526.jpg', 'admin'),
(6, '2025-01-10 14:30:35', '20250111181508.jpg', 'admin'),
(8, '2025-01-10 14:30:59', '20250111181439.jpeg', 'admin'),
(10, '2025-01-11 18:16:22', '20250111181622.jpeg', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(0, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'sg-11134201-23010-cbj7fdauqxlv0e.jpg'),
(1, 'israazwa', '7813d1590d28a7dd372ad54b5d29d033', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzfd_DeoiWKLK7c8fnZ4j1wd_WDozHHI2r3w&s');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
