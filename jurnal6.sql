-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Okt 2018 pada 15.40
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhsiswa`
--

CREATE TABLE `mhsiswa` (
  `kode` int(3) NOT NULL,
  `nama` text NOT NULL,
  `nim` text NOT NULL,
  `kelas` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `hobi` text NOT NULL,
  `fakultas` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhsiswa`
--

INSERT INTO `mhsiswa` (`kode`, `nama`, `nim`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`) VALUES
(1, 'shintajah', '6757', '<br />\r\n<b>Notice</b>:  Undefined index: kls in <b>C:xampphtdocsjurnal6ubah.php</b> on line <b>42</b><br />\r\n', '', '', 'FIT', 'sukapura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingg`
--

CREATE TABLE `postingg` (
  `Kode` int(225) NOT NULL,
  `Isi Posting` text NOT NULL,
  `Gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhsiswa`
--
ALTER TABLE `mhsiswa`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `postingg`
--
ALTER TABLE `postingg`
  ADD PRIMARY KEY (`Kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
