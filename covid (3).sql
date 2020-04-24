-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2020 pada 09.24
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_level`
--

CREATE TABLE `t_level` (
  `id_level` int(3) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_level`
--

INSERT INTO `t_level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'Perawat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pasien`
--

CREATE TABLE `t_pasien` (
  `id_pasien` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(3) NOT NULL,
  `alamat` text NOT NULL,
  `kelamin` enum('Laki-Laki','Perempuan','Tidak Disebutkan') NOT NULL,
  `suhu` int(3) NOT NULL,
  `tgl_karantina` date NOT NULL,
  `tgl_selesai_karantina` date NOT NULL,
  `tgl_cek` date NOT NULL,
  `hasil` enum('Positif','Negatif') NOT NULL DEFAULT 'Positif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pasien`
--

INSERT INTO `t_pasien` (`id_pasien`, `nama`, `umur`, `alamat`, `kelamin`, `suhu`, `tgl_karantina`, `tgl_selesai_karantina`, `tgl_cek`, `hasil`) VALUES
(10, 'AKU', 10, 'rhs', 'Laki-Laki', 1, '2020-04-23', '2020-05-07', '2020-04-04', 'Positif'),
(11, 'Aqsyal Raihan Jamil', 15, 'rhs', 'Laki-Laki', 34, '2020-04-23', '2020-05-07', '2020-04-11', 'Positif'),
(12, 'Nael', 20, 'Kertoson0', 'Laki-Laki', 34, '2020-04-23', '2020-05-07', '2020-04-23', 'Positif'),
(13, 'Nail', 16, 'Kertoson0', 'Laki-Laki', 35, '2020-04-23', '2020-05-07', '2020-04-23', 'Positif'),
(14, 'Aqsyal', 17, 'Pare, Kediri', 'Laki-Laki', 35, '2020-04-24', '2020-04-30', '2020-04-21', ''),
(21, 'AOWKAOWKAOWKAOWK', 13, 'JL. Pangrango', 'Perempuan', 35, '2020-04-23', '2020-05-07', '2020-04-14', 'Negatif'),
(22, 'AWAWAOAKWOAKWOWKAOW', 80, 'JL.....', 'Tidak Disebutkan', 100, '2020-04-23', '2020-05-07', '2020-04-24', 'Negatif'),
(24, 'Pasien', 33, 'Jl. Corona', 'Perempuan', 36, '2020-04-23', '2020-05-07', '2020-04-23', 'Negatif'),
(25, 'Pasien', 33, 'Jl. Corona', 'Perempuan', 36, '2020-04-23', '2020-05-07', '2020-04-23', 'Negatif'),
(26, 'Pasien', 33, 'Jl. Corona', 'Perempuan', 36, '2020-04-23', '2020-05-07', '2020-04-23', 'Negatif'),
(27, 'Pasien', 33, 'Jl. Corona', 'Perempuan', 36, '2020-04-23', '2020-05-07', '2020-04-23', 'Negatif'),
(28, 'AKU SELESAIIN INI TUGAS', 125, 'Pare, Kediri', 'Perempuan', 60, '2020-04-18', '2020-04-30', '2020-04-15', ''),
(29, 'Last', 99, 'Jl. terakhir', 'Tidak Disebutkan', 60, '2020-04-24', '2020-05-08', '2020-04-09', 'Negatif'),
(30, '', 0, '', 'Tidak Disebutkan', 0, '2020-04-24', '2020-05-08', '0000-00-00', 'Negatif'),
(31, '', 0, '', 'Tidak Disebutkan', 0, '2020-04-24', '2020-05-08', '0000-00-00', 'Negatif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_petugas`
--

CREATE TABLE `t_petugas` (
  `id_petugas` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_petugas`
--

INSERT INTO `t_petugas` (`id_petugas`, `nama`, `username`, `password`, `id_level`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Perawat', 'perawat', '202cb962ac59075b964b07152d234b70', 2),
(5, 'tes', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 2),
(6, 'Aqsyal Raihan', 'aqsyal', 'aqsyal', 1),
(7, 'perawat', 'perawat', 'perawat', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_level`
--
ALTER TABLE `t_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `t_pasien`
--
ALTER TABLE `t_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `t_petugas`
--
ALTER TABLE `t_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_level`
--
ALTER TABLE `t_level`
  MODIFY `id_level` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_pasien`
--
ALTER TABLE `t_pasien`
  MODIFY `id_pasien` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `t_petugas`
--
ALTER TABLE `t_petugas`
  MODIFY `id_petugas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_petugas`
--
ALTER TABLE `t_petugas`
  ADD CONSTRAINT `t_petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `t_level` (`id_level`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
