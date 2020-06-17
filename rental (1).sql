-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2020 pada 14.43
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jenkel_admin` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `jenkel_admin`, `username`, `password`, `level`) VALUES
(7, 'juli', 'Laki-Laki', 'juli', 'juli123', 'ADMIN'),
(8, 'wulan', 'Perempuan', 'wulan', 'wulan123', 'SUPER'),
(9, 'budi', 'Perempuan', 'budi', 'budi123', 'SUPER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `merk` varchar(90) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `harga` double NOT NULL,
  `s_mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `no_polisi`, `merk`, `tahun`, `harga`, `s_mobil`) VALUES
(6, 'DK 34 R', 'Four Touner', '2009', 18000000, 'AKTIF'),
(7, 'DK 56 Z', 'KARIMUN', '2002', 12000000, 'AKTIF'),
(10, 'BT 3 R', 'JIP', '2009', 400000, 'AKTIF'),
(12, 'DK 26 XC', 'AVANZA', '20019', 18000000, 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama_order` varchar(90) NOT NULL,
  `ktp` varchar(25) NOT NULL,
  `jenkel_order` varchar(20) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `tlp_order` varchar(12) NOT NULL,
  `tujuan` varchar(90) NOT NULL,
  `tgl_order` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama` int(11) NOT NULL,
  `harga_total` double NOT NULL,
  `s_order` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_mobil`, `id_admin`, `nama_order`, `ktp`, `jenkel_order`, `alamat`, `tlp_order`, `tujuan`, `tgl_order`, `tgl_kembali`, `lama`, `harga_total`, `s_order`) VALUES
(4, 5, 1, 'wulandari', '1332987655', 'Perempuan', 'Denpasar', '081234565773', 'kintamani', '2020-06-18', '2020-06-20', 2, 10000000, ''),
(5, 6, 9, 'wulan', '1223335568', 'Perempuan', 'mengwi', '088133566785', 'badung', '2020-06-20', '2020-06-23', 3, 54000000, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
