-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2023 pada 11.24
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesbackend`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `AccountId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`AccountId`, `Name`) VALUES
(1, 'dada'),
(2, 'dudu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `AccountId` int(11) NOT NULL,
  `TransactionDate` datetime NOT NULL,
  `Description` varchar(50) NOT NULL,
  `DebitCreditStatus` varchar(1) NOT NULL COMMENT '''D'' = debit, ''C'' = kredit',
  `Amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`AccountId`, `TransactionDate`, `Description`, `DebitCreditStatus`, `Amount`) VALUES
(1, '2023-05-05 13:30:09', 'Beli Pulsa', 'D', '15000'),
(1, '2023-05-05 13:30:26', 'Bayar Listrik', 'C', '45000'),
(1, '2023-05-05 13:30:51', 'Beli Pulsa', 'D', '10000'),
(1, '2023-05-05 13:54:14', 'Beli Pulsa', 'D', '35000'),
(1, '2023-05-05 13:54:26', 'Beli Pulsa', 'D', '29000'),
(1, '2023-05-05 13:54:53', 'Beli Pulsa', 'D', '9000'),
(1, '2023-05-05 14:03:39', 'Beli Pulsa', 'D', '5000'),
(1, '2023-05-05 14:04:30', 'Beli Pulsa', 'D', '70000'),
(1, '2023-05-05 14:13:36', 'Beli Pulsa', 'D', '11000'),
(1, '2023-05-05 14:17:04', 'Beli Pulsa', 'D', '18000'),
(1, '2023-05-05 14:17:21', 'Beli Pulsa', 'D', '2000'),
(1, '2023-05-05 15:26:22', 'Bayar Listrik', 'D', '70000'),
(1, '2023-05-05 15:29:48', 'Bayar Listrik', 'D', '130000'),
(2, '2023-05-05 15:38:35', 'Beli Pulsa', 'D', '14000'),
(2, '2023-05-05 15:39:28', 'Bayar Listrik', 'D', '98000'),
(2, '2023-05-05 15:39:50', 'Bayar Listrik', 'D', '110000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`AccountId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `AccountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
