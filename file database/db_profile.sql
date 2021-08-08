-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2021 pada 04.26
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `umur` int(3) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `tgl_lahir`, `alamat`, `no_tlp`, `umur`, `hobi`, `status`) VALUES
(2, '2000-06-23', 'Perumahan Griya Damai Lestas 2&3, Blok K 03, Weru,', '089660660023', 21, 'Gym', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama_pengunjung` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan1`
--

CREATE TABLE `pekerjaan1` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(50) NOT NULL,
  `lama_kerja` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan1`
--

INSERT INTO `pekerjaan1` (`id_pekerjaan`, `nama_pekerjaan`, `lama_kerja`, `nama_perusahaan`) VALUES
(1, 'Duta Sosial Kota Cirebon', '2019-2020', 'Dinas Sosial Kota Cirebon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan2`
--

CREATE TABLE `pekerjaan2` (
  `id_pekerjaan2` int(11) NOT NULL,
  `nama_pekerjaan` varchar(50) NOT NULL,
  `lama_kerja` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nama_sd` varchar(50) NOT NULL,
  `tahun_masuk` int(50) NOT NULL,
  `tahun_lulus_` int(50) NOT NULL,
  `nama_smp` varchar(50) NOT NULL,
  `tahun_masuk_smp` int(50) NOT NULL,
  `tahun_lulus_smp` int(50) NOT NULL,
  `nama_sma` varchar(50) NOT NULL,
  `tahun_masuk_sma` int(50) NOT NULL,
  `tahun_keluar_sma` int(50) NOT NULL,
  `nama_prerguruan` varchar(50) NOT NULL,
  `tahun_masuk_perguruan` int(50) NOT NULL,
  `tahun_lulus_perguruan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sd`
--

CREATE TABLE `sd` (
  `id_sd` int(11) NOT NULL,
  `nama_sd` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `tahun_lulus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sd`
--

INSERT INTO `sd` (`id_sd`, `nama_sd`, `alamat`, `tahun_masuk`, `tahun_lulus`) VALUES
(1, 'SDN 2 Setu Wetan Bank Jabar', 'Desa Setu Wetan, Weru, Kab. Cirebon', 2006, 2012);

-- --------------------------------------------------------

--
-- Struktur dari tabel `smk`
--

CREATE TABLE `smk` (
  `id_smk` int(11) NOT NULL,
  `nama_smk` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `tahun_lulus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `smk`
--

INSERT INTO `smk` (`id_smk`, `nama_smk`, `alamat`, `jurusan`, `tahun_masuk`, `tahun_lulus`) VALUES
(2, 'MAN 1 Cirebon', 'Desa Weru Kidul, Weru, Kab. Cirebon', 'Ilmu Sosial', 2015, 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `smp`
--

CREATE TABLE `smp` (
  `id_smp` int(11) NOT NULL,
  `nama_smp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `tahun_lulus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `smp`
--

INSERT INTO `smp` (`id_smp`, `nama_smp`, `alamat`, `tahun_masuk`, `tahun_lulus`) VALUES
(2, 'SMPN 1 Weru', 'Desa Setu Kulon, Weru, Kab. Cirebon', 2012, 2015);

-- --------------------------------------------------------

--
-- Struktur dari tabel `univ`
--

CREATE TABLE `univ` (
  `id_univ` int(11) NOT NULL,
  `nama_univ` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `tahun_lulus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `univ`
--

INSERT INTO `univ` (`id_univ`, `nama_univ`, `alamat`, `prodi`, `tahun_masuk`, `tahun_lulus`) VALUES
(1, 'UNIVERSITAS CATUR INSAN CENDEKIA', 'JL.Kesambi No.202, Derajat, Kec.Kesambi, Kota.Cirebon', 'S1 - Sistem Infomrasi', 2019, 'Mahasiswa Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(125) NOT NULL,
  `nama_lengkap` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Fikri Ananda', 'fikri230600@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `pekerjaan1`
--
ALTER TABLE `pekerjaan1`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `pekerjaan2`
--
ALTER TABLE `pekerjaan2`
  ADD PRIMARY KEY (`id_pekerjaan2`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `sd`
--
ALTER TABLE `sd`
  ADD PRIMARY KEY (`id_sd`);

--
-- Indeks untuk tabel `smk`
--
ALTER TABLE `smk`
  ADD PRIMARY KEY (`id_smk`);

--
-- Indeks untuk tabel `smp`
--
ALTER TABLE `smp`
  ADD PRIMARY KEY (`id_smp`);

--
-- Indeks untuk tabel `univ`
--
ALTER TABLE `univ`
  ADD PRIMARY KEY (`id_univ`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan1`
--
ALTER TABLE `pekerjaan1`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan2`
--
ALTER TABLE `pekerjaan2`
  MODIFY `id_pekerjaan2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sd`
--
ALTER TABLE `sd`
  MODIFY `id_sd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `smk`
--
ALTER TABLE `smk`
  MODIFY `id_smk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `smp`
--
ALTER TABLE `smp`
  MODIFY `id_smp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `univ`
--
ALTER TABLE `univ`
  MODIFY `id_univ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
