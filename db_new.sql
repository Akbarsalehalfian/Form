-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2021 pada 04.49
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tes001`
--

CREATE TABLE `tb_tes001` (
  `id` int(30) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `j_rumah` varchar(50) DEFAULT NULL,
  `p_rumah` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tes001`
--

INSERT INTO `tb_tes001` (`id`, `nama`, `no_hp`, `j_rumah`, `p_rumah`, `alamat`) VALUES
(1, 'admin', '12345678900', '1001', 'add001', 'kota:bandung\r\nkcp:coblong\r\nrt/rw:001006\r\njl.dipati'),
(3, 'admin3', '12345678911', '1003', 'add3', 'kota:bandung kcp;coblong'),
(4, 'admin4', '11414', '1002', 'add4', 'add5'),
(5, 'admin5', '5555', '1003', 'add55', 'kota5'),
(2, 'admin2', '12345677890', '1002', 'desa', 'desa'),
(6, 'admin6', '', '1001', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
