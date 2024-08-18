-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2024 pada 19.09
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_spring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`, `negara`, `provinsi`, `kota`, `created_at`) VALUES
(1, 'Arcamanik', 'Indonesia', 'Jawa Barat', 'Bandung', '2024-08-18 15:59:14'),
(2, 'Cibiru', 'Indonesia', 'Jawa Barat', 'Bandung', '2024-08-18 15:59:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_seq`
--

CREATE TABLE `lokasi_seq` (
  `next_val` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi_seq`
--

INSERT INTO `lokasi_seq` (`next_val`) VALUES
(101);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id` int(11) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `pimpinan_proyek` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id`, `nama_proyek`, `client`, `tgl_mulai`, `tgl_selesai`, `pimpinan_proyek`, `keterangan`, `created_at`) VALUES
(1, 'proyek 2', 'Budi Budiman', '2024-08-07', '2024-08-28', 'Agus', 'Proyek yang sangat penting untuk kelancaran', '2024-08-18 15:44:18'),
(2, 'proyek 2', 'Panji Alafa', '2024-01-20', '2024-05-20', 'Bario', 'Proyek yang harus dikerjakan', '2024-08-18 12:54:56'),
(3, 'proyek 3', 'Yuzzar', '2024-08-21', '2024-08-07', 'Pota', 'Harus segera selesaikan', '2024-08-18 12:55:10'),
(4, 'proyek 3', 'Yuzzar', '2024-08-21', '2024-08-07', 'Pota', 'Harus segera selesaikan', '2024-08-18 12:55:18'),
(5, 'proyek 5', 'Yuzzar', '2024-08-02', '2024-08-23', 'Potalu', 'ini sangat bagus', '2024-08-18 13:06:00'),
(52, 'proyek web', 'Andi', '2024-08-07', '2024-08-20', 'Kania', 'Web company profile', '2024-08-18 15:13:41'),
(53, 'proyek web', 'Andi', '2024-08-07', '2024-08-20', 'Kania', 'Web company profile', '2024-08-18 15:14:49'),
(54, 'proyek web', 'Andi', '2024-08-07', '2024-08-20', 'Kania', 'Web company profile', '2024-08-18 15:14:54'),
(55, 'proyek web', 'Andi', '2024-08-10', '2024-08-22', 'Potalu', 'p', '2024-08-18 15:16:22'),
(58, 'proyek 3', 'Yuzzar', '2024-08-09', '2024-08-14', 'Pota', 'ini adalah proyek', '2024-08-18 15:18:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek_lokasi`
--

CREATE TABLE `proyek_lokasi` (
  `proyek_id` int(11) NOT NULL,
  `lokasi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek_seq`
--

CREATE TABLE `proyek_seq` (
  `next_val` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proyek_seq`
--

INSERT INTO `proyek_seq` (`next_val`) VALUES
(151);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proyek_lokasi`
--
ALTER TABLE `proyek_lokasi`
  ADD PRIMARY KEY (`proyek_id`,`lokasi_id`),
  ADD KEY `lokasi_id` (`lokasi_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `proyek_lokasi`
--
ALTER TABLE `proyek_lokasi`
  ADD CONSTRAINT `proyek_lokasi_ibfk_1` FOREIGN KEY (`proyek_id`) REFERENCES `proyek` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proyek_lokasi_ibfk_2` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
