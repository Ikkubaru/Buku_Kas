-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Sep 2023 pada 17.00
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(12) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nominal` float NOT NULL,
  `username` varchar(120) NOT NULL,
  `jenis_transaksi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `keterangan`, `nominal`, `username`, `jenis_transaksi`, `tanggal`) VALUES
(1, 'kas mingguan', 2000000, 'username2', 'pemasukan', '2023-09-01'),
(2, 'kas mingguan', 2000000, 'username2', 'pemasukan', '2023-08-25'),
(3, 'kas mingguan', 2000000, 'username2', 'pemasukan', '2023-08-18'),
(4, 'kas mingguan', 2000000, 'username2', 'pemasukan', '2023-08-11'),
(5, 'kas mingguan', 2000000, 'username2', 'pemasukan', '2023-08-04'),
(6, 'kas mingguan', 2000000, 'username2', 'pemasukan', '2023-07-28'),
(7, 'kas mingguan', 2000000, 'username2', 'pemasukan', '2023-07-21'),
(8, 'biaya konsumsi', 50000, 'username2', 'pengeluaran', '2023-09-04'),
(9, 'biaya konsumsi', 50000, 'username2', 'pengeluaran', '2023-09-01'),
(10, 'biaya konsumsi', 50000, 'username2', 'pengeluaran', '2023-08-25'),
(11, 'biaya konsumsi', 50000, 'username2', 'pengeluaran', '2023-08-11'),
(13, 'Menang turnamen e-sport', 10000000, 'username3', 'pemasukan', '2023-08-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `username` varchar(120) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(4, 'username2', 'Iqbal S. P.', '6cb75f652a9b52798eb6cf2201057c73', 'Admin'),
(5, 'username3', 'Arrofi', '819b0643d6b89dc9b579fdfc9094f28e', 'User'),
(6, 'username4', 'Ikkubaru', '34cc93ece0ba9e3f6f235d4af979b16c', 'User'),
(7, 'username4', 'nama4', '34cc93ece0ba9e3f6f235d4af979b16c', 'Admin'),
(8, 'username5', 'Chivo', 'db0edd04aaac4506f7edab03ac855d56', 'User'),
(9, 'username6', 'nama6', '218dd27aebeccecae69ad8408d9a36bf', 'Admin'),
(10, 'username7', 'Teguh', '00cdb7bb942cf6b290ceb97d6aca64a3', 'User'),
(12, 'username9', 'nama9', '5d69dd95ac183c9643780ed7027d128a', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
