-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2022 pada 03.05
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `aktivasi` varchar(6) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `email`, `password`, `level`, `aktivasi`, `status`) VALUES
(12, '1001', 'fae0b27c451c728867a567e8c1bb4e53', 'user', '', ''),
(14, '666', 'fae0b27c451c728867a567e8c1bb4e53', 'admin', '', ''),
(15, '1', 'c4ca4238a0b923820dcc509a6f75849b', 'user', '', ''),
(16, '123123', '787eccab05c22abbc0ca3c3cc389ac4b', 'user', '', ''),
(17, 'eddyyucca@gmail.com', 'fae0b27c451c728867a567e8c1bb4e53', 'user', '605378', 'belum aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `file` text NOT NULL,
  `date` varchar(10) NOT NULL,
  `status_pengajuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `nip`, `file`, `date`, `status_pengajuan`) VALUES
(7, '666', '', '2021-01-01', 'Diterima'),
(8, '1', '', '2019-11-11', 'Diterima'),
(9, '1001', '', '2019-11-11', 'Diterima'),
(11, '1001', 'cv_fauziah.pdf', '2021-08-06', 'Ditolak'),
(12, '1001', 'cetak.pdf', '2021-08-06', 'Diterima'),
(13, '123123', '', '2012-12-12', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_riwayat_pelatihan`
--

CREATE TABLE `data_riwayat_pelatihan` (
  `id_pelatihan` int(10) NOT NULL,
  `id_kar` varchar(20) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `penyelenggara` varchar(25) NOT NULL,
  `periode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_riwayat_pelatihan`
--

INSERT INTO `data_riwayat_pelatihan` (`id_pelatihan`, `id_kar`, `bidang`, `penyelenggara`, `periode`) VALUES
(2, '1202005081', 'jaringan', 'bnsp', '2019'),
(3, '2199806251', 'Komputer', 'BPNS', '2016'),
(4, '1199503122', 'Mekanik', 'Balai Tenaga Kerja', '2019'),
(5, '3199607191', 'Komputer', 'Kursus Kereta Kencana', '2016'),
(6, '3199607191', 'Public Speaking', 'Seminar Katolik', '2017'),
(7, '4199609131', 'Menjahit', 'Balai Desa Tatakan', '2015'),
(8, '4199609131', 'Komputer', 'Balai Tenaga Kerja', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `developer`
--

CREATE TABLE `developer` (
  `id_dev` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('super_admin','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `developer`
--

INSERT INTO `developer` (`id_dev`, `username`, `password`, `level`) VALUES
(1, 'admin', 'd56b699830e77ba53855679cb1d252da', 'super_admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pen` int(10) NOT NULL,
  `id_kar` varchar(50) NOT NULL,
  `tingkat_pendidikan` varchar(50) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL,
  `kota_pendidikan` varchar(50) NOT NULL,
  `tahun_pendidikan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pen`, `id_kar`, `tingkat_pendidikan`, `nama_sekolah`, `nama_jurusan`, `kota_pendidikan`, `tahun_pendidikan`) VALUES
(2, '1202005081', 'TK', 'teka tadika mesra', '', 'tapin', '2018/2019'),
(3, '1202005081', 'SD', 'SD rantau', '', 'rantau', '2018/2019'),
(4, '1202005081', 'SMP/MTs', 'MTsN Tapin Selatan', 'Agama', 'Rantau', '2020/2021'),
(5, '1202005081', 'S1', 'UNISKA', 'TEKNIK INFORMATIKA', 'BANJARBARU', '2022/2022'),
(6, '1202005081', 'SMA/SMK/MA', 'SMKN 1 TAPIN SELATAN', 'TEKNIK KOMPUTER DAN JARIN', 'TAPIN', '2030/2032'),
(8, '2199806251', 'TK', 'TK Kencana', '', 'Rantau', '2004'),
(9, '2199806251', 'SD', 'SDN TATAKAN 1', '', 'Rantau', '2010'),
(10, '2199806251', 'SMP/MTs', 'MTsN 5 Tapin', '', 'Rantau', '2013'),
(11, '2199806251', 'SMA/SMK/MA', 'SMAN 1 Tapin', 'IPA', 'Rantau', '2016'),
(12, '2199806251', 'S1', 'Universitas Lambung Mangkurat', 'Tenik Elektro', 'Banjarbaru', '2019'),
(13, '1199503122', 'TK', 'TK Tunas Bangsa', '', 'Kotabaru', '2001'),
(14, '1199503122', 'SD', 'SD Pelita Harapan', '', 'Kotabaru', '2007'),
(15, '1199503122', 'SMP/MTs', 'SMPN 1 Kotabaru', '', 'Kotabaru', '2010'),
(16, '1199503122', 'SMA/SMK/MA', 'SMAN 3 Kotabaru', 'IPS', 'Kotabaru', '2013'),
(17, '1199503122', 'S1', 'Universitas Ahmad Yani', 'Pertambangan', 'Banjarbaru', '2018'),
(18, '3199607191', 'TK', 'TK Bunda Maria', '', 'Banjarmasin', '2002'),
(19, '3199607191', 'SD', 'SDN BANJARMASIN 2', '', 'Banjarmasin', '2008'),
(20, '3199607191', 'SMP/MTs', 'SMPN 2 Banjarmasin', '', 'Banjarmasin', '2011'),
(21, '3199607191', 'SMA/SMK/MA', 'SMAN 7 Banjarmasin', 'IPA', 'Banjarmasin', '2014'),
(22, '3199607191', 'S1', 'Universitas Indonesia', 'Pertambangan', 'Jakarta', '2018'),
(23, '4199609131', 'TK', 'TK Kencana', '', 'Rantau', '2002'),
(24, '4199609131', 'SD', 'SDN TATAKAN 1', '', 'Rantau', '2008'),
(25, '4199609131', 'SMP/MTs', 'MTsN 5 Tapin', '', 'Rantau', '2011'),
(26, '4199609131', 'SMA/SMK/MA', 'SMKN 1 Tapin Selatan', 'Perkebunan', 'Rantau', '2014'),
(27, '4199609131', 'S1', 'Universitas Lambung Mangkurat', 'Perkebunan', 'Banjarbaru', '2018');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
