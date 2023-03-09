-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2023 pada 09.55
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `community_complient_services`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `community`
--

CREATE TABLE `community` (
  `nik` bigint(16) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `community`
--

INSERT INTO `community` (`nik`, `name`, `email`, `username`, `password`, `telp`) VALUES
(0, '', '', '', '', ''),
(1, 'asdf', 'reubendanu2535@gmail.com', 'asdf', 'asdfsf', '234234'),
(234234242342342123, 'asdf', '', 'a', 'a', '234234234234234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `nik` bigint(16) NOT NULL,
  `title` varchar(60) NOT NULL,
  `report` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` enum('pending','process','completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id_report`, `date`, `nik`, `title`, `report`, `photo`, `status`) VALUES
(4, '2022-05-06 00:00:00', 1, 'ian', 'long report', 'image.jpg', ''),
(11, '2023-02-05 00:00:00', 1, 'title', 'isi', 'Screenshot_20230116_095530.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `response`
--

CREATE TABLE `response` (
  `id_response` int(16) NOT NULL,
  `id_report` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `response` text NOT NULL,
  `id_staff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(16) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `level` enum('admin','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id_staff`, `name`, `username`, `password`, `telp`, `level`) VALUES
(1, 'admin', 'admin', 'admin', '082340800201', 'admin'),
(2, 'kokujo', 'kokujo', 'kokujo', '3453453', 'admin'),
(3, 'kuro', 'kuro', 'kuro', '3453453', 'admin'),
(4, 'izu', 'izu', 'izu', '3453453', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id_response`),
  ADD KEY `id_report` (`id_report`),
  ADD KEY `id_staff` (`id_staff`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `response`
--
ALTER TABLE `response`
  MODIFY `id_response` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `community` (`nik`);

--
-- Ketidakleluasaan untuk tabel `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `response_ibfk_1` FOREIGN KEY (`id_report`) REFERENCES `report` (`id_report`),
  ADD CONSTRAINT `response_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
