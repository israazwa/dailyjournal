-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2025 pada 18.44
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
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
(1, 'Solo leveling', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quos?', '1.jpg', '2014-12-24 10:54:54', 'admin'),
(2, 'Spy X Family', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quos?', '2.jpg', '2024-12-04 11:05:00', 'admin'),
(3, 'Blue Lock', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quos?', '3.jpg', '2024-12-04 11:05:00', 'admin'),
(4, 'Kimi No Nawa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quos?', '4.jpg', '2024-12-04 11:05:00', 'admin'),
(5, 'Mitsuha', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quos?', '5.jpg', '2024-12-04 11:05:00', 'admin');

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
(3, '2025-01-10 14:30:09', '20250110143009.jpg', 'admin'),
(4, '2025-01-10 14:30:20', '20250110145108.jpg', 'admin'),
(5, '2025-01-10 14:30:27', '20250110143027.jpg', 'admin'),
(6, '2025-01-10 14:30:35', '20250110143035.jpg', 'admin'),
(7, '2025-01-10 14:30:46', '20250110143046.jpg', 'admin'),
(8, '2025-01-10 14:30:59', '20250110143059.jpg', 'admin'),
(9, '2025-01-10 14:31:08', '20250110145058.jpg', 'admin');

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
(0, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 's-l1200.jpg'),
(1, 'fabian68', '7813d1590d28a7dd372ad54b5d29d033', 'gintoki-sakata-bb7325c2-287f-4e22-85c0-3aa8a219178-resize-750-3b03ddbf7854291e48ced17346253753_600x400 (1) (1).png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
