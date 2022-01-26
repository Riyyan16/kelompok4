-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2022 pada 07.39
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryptodata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(15) NOT NULL,
  `tanggal` varchar(60) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(30) NOT NULL,
  `koin` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id`, `tanggal`, `jumlah`, `harga`, `koin`, `email`) VALUES
(6, 'Sat Jan 22 2022 00:27:39 GMT+0700 (Western Indonesia Time)', 12, 2289, 'ABBC Coin ', 'aa684011@gmail.com'),
(7, 'Sat Jan 22 2022 00:34:58 GMT+0700 (Western Indonesia Time)', 12, 2289, 'ABBC Coin ', 'aa684011@gmail.com'),
(8, 'Sat Jan 22 2022 00:37:26 GMT+0700 (Western Indonesia Time)', 111, 122060, 'dYdX ', 'aa684011@gmail.com'),
(9, 'Sat Jan 22 2022 00:39:38 GMT+0700 (Western Indonesia Time)', 12, 556070000, 'Bitcoin ', 'aa684011@gmail.com'),
(10, 'Sat Jan 22 2022 00:42:30 GMT+0700 (Western Indonesia Time)', 111, 13, 'Aurora ', 'aa684011@gmail.com'),
(11, 'Sat Jan 22 2022 00:43:08 GMT+0700 (Western Indonesia Time)', 12, 2676881, 'Aave ', 'aa684011@gmail.com'),
(12, 'Sat Jan 22 2022 00:44:37 GMT+0700 (Western Indonesia Time)', 111, 13953, 'Loopring ', 'aa684011@gmail.com'),
(13, 'Sat Jan 22 2022 00:45:47 GMT+0700 (Western Indonesia Time)', 34, 16580, 'Algorand ', 'aa684011@gmail.com'),
(14, 'Sat Jan 22 2022 00:50:55 GMT+0700 (Western Indonesia Time)', 12, 2670743, 'Aave ', 'aa684011@gmail.com'),
(23, 'Sun Jan 23 2022 16:47:12 GMT+0700 (Western Indonesia Time)', 12, 2893, 'AIOZ Netwo', 'aa684011@gmail.com'),
(24, 'Sun Jan 23 2022 16:48:07 GMT+0700 (Western Indonesia Time)', 12, 24500, '1Inch ', 'aa684011@gmail.com'),
(25, 'Sun Jan 23 2022 16:49:37 GMT+0700 (Western Indonesia Time)', 12, 2338001, 'Aave ', 'aa684011@gmail.com'),
(26, 'Sun Jan 23 2022 16:49:47 GMT+0700 (Western Indonesia Time)', 1000, 185, 'Smooth Lov', 'aa684011@gmail.com'),
(27, 'Sun Jan 23 2022 16:52:06 GMT+0700 (Western Indonesia Time)', 1222, 920000, '1X Short X', 'aa684011@gmail.com'),
(28, 'Sun Jan 23 2022 17:06:21 GMT+0700 (Western Indonesia Time)', 12, 53, 'Achain ', 'yusril@gmail.com'),
(29, 'Sun Jan 23 2022 21:29:44 GMT+0700 (Western Indonesia Time)', 12, 23894, '1Inch ', 'aa684011@gmail.com'),
(30, 'Sun Jan 23 2022 21:42:50 GMT+0700 (Western Indonesia Time)', 12, 431, 'Amp ', 'aa684011@gmail.com'),
(31, 'Sun Jan 23 2022 21:48:39 GMT+0700 (Western Indonesia Time)', 11, 23358, '1Inch ', 'aa684011@gmail.com'),
(32, 'Sun Jan 23 2022 21:54:37 GMT+0700 (Western Indonesia Time)', 12, 53, 'Achain ', 'aa684011@gmail.com'),
(33, 'Sun Jan 23 2022 21:54:59 GMT+0700 (Western Indonesia Time)', 12, 23324, '1Inch ', 'aa684011@gmail.com'),
(34, 'Sun Jan 23 2022 21:56:30 GMT+0700 (Western Indonesia Time)', 1, 2045, 'ABBC Coin ', 'aa684011@gmail.com'),
(35, 'Sun Jan 23 2022 22:10:51 GMT+0700 (Western Indonesia Time)', 12, 2200000, 'Aave ', 'aa684011@gmail.com'),
(36, 'Sun Jan 23 2022 22:39:23 GMT+0700 (Western Indonesia Time)', 12, 422, 'Amp ', 'aa684011@gmail.com'),
(37, 'Sun Jan 23 2022 22:39:38 GMT+0700 (Western Indonesia Time)', 12, 468060, 'Cosmos ', 'aa684011@gmail.com'),
(38, 'Sun Jan 23 2022 23:05:26 GMT+0700 (Western Indonesia Time)', 12, 23678, '1Inch ', 'aa684011@gmail.com'),
(39, 'Sun Jan 23 2022 23:12:06 GMT+0700 (Western Indonesia Time)', 12, 2041, 'ABBC Coin ', 'aa684011@gmail.com'),
(40, 'Sun Jan 23 2022 23:39:37 GMT+0700 (Western Indonesia Time)', 12, 619, 'Tokenomy ', 'aa684011@gmail.com'),
(41, 'Sun Jan 23 2022 23:56:21 GMT+0700 (Western Indonesia Time)', 12, 23679, '1Inch ', 'aa684011@gmail.com'),
(42, 'Sun Jan 23 2022 23:56:27 GMT+0700 (Western Indonesia Time)', 12, 4435, 'Alpaca Fin', 'aa684011@gmail.com'),
(43, 'Sun Jan 23 2022 23:57:27 GMT+0700 (Western Indonesia Time)', 12, 4435, 'Alpaca Fin', 'aa684011@gmail.com'),
(44, 'Mon Jan 24 2022 00:02:50 GMT+0700 (Western Indonesia Time)', 12, 162060, 'Alitas ', 'aa684011@gmail.com'),
(45, 'Mon Jan 24 2022 01:10:59 GMT+0700 (Western Indonesia Time)', 12, 619, 'Tokenomy ', 'aa684011@gmail.com'),
(46, 'Mon Jan 24 2022 01:12:51 GMT+0700 (Western Indonesia Time)', 12, 6901, 'Efinity To', 'aa684011@gmail.com'),
(47, 'Mon Jan 24 2022 01:24:29 GMT+0700 (Western Indonesia Time)', 12, 53, 'Achain ', 'aa684011@gmail.com'),
(48, 'Mon Jan 24 2022 01:25:44 GMT+0700 (Western Indonesia Time)', 12, 474779, 'Cosmos ', 'aa684011@gmail.com'),
(49, 'Mon Jan 24 2022 01:32:06 GMT+0700 (Western Indonesia Time)', 12, 5550, 'Automata N', 'aa684011@gmail.com'),
(50, 'Mon Jan 24 2022 01:42:09 GMT+0700 (Western Indonesia Time)', 12, 23576, '1Inch ', 'yusril@gmail.com'),
(51, 'Mon Jan 24 2022 01:43:30 GMT+0700 (Western Indonesia Time)', 5, 23576, '1Inch ', 'yusril@gmail.com'),
(52, 'Mon Jan 24 2022 01:44:56 GMT+0700 (Western Indonesia Time)', 12, 0, 'Shiba Inu ', 'yusril@gmail.com'),
(53, 'Mon Jan 24 2022 12:43:08 GMT+0700 (Western Indonesia Time)', 12, 15190, 'Cardano ', 'aa684011@gmail.com'),
(54, 'Mon Jan 24 2022 13:04:06 GMT+0700 (Western Indonesia Time)', 12, 15296, 'Cardano ', 'aa684011@gmail.com'),
(55, 'Mon Jan 24 2022 13:36:23 GMT+0700 (Western Indonesia Time)', 2, 2157498, 'Aave ', 'yusril@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `login`) VALUES
(463, 'AllBe', 'albi@gmail.com', 'Null'),
(465, 'yusrilalbi', 'aa684011@gmail.com', 'Null'),
(466, 'UseReal', 'yusril@gmail.com', 'true');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
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
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=467;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
