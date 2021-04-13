-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2021 pada 07.30
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cafe`
--

CREATE TABLE `cafe` (
  `id_cafe` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `nama_cafe` varchar(100) NOT NULL,
  `kode_cafe` varchar(100) NOT NULL,
  `logo_cafe` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `background_body` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `tageline` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `maps_url` text NOT NULL,
  `maps_embed` text NOT NULL,
  `message_wa` varchar(255) NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cafe`
--

INSERT INTO `cafe` (`id_cafe`, `id_pemilik`, `nama_cafe`, `kode_cafe`, `logo_cafe`, `background`, `background_body`, `menu`, `tageline`, `alamat`, `maps_url`, `maps_embed`, `message_wa`, `date_create`) VALUES
(1, 1, 'PT. MSN', 'pt-msn', 'logo-putih.png', 'bg.jpg', 'food.jpg', 'menu.pdf', 'Solusi Fried Chicken', 'Jl Kayu Agung II No 9, Kec Turangga, Kec Lengkong Kota Bandung', 'https://goo.gl/maps/g53wN7KiX6DwpBJC6', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4069183.925383313!2d106.7335334!3d-5.1338872!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e08cd5ed284e081%3A0xeae889e76b24f6e4!2sAditya%20pangestu!5e0!3m2!1sen!2sid!4v1617866184409!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Hi kak, saya mau pesan :\r\n-', '2021-04-08 05:22:39'),
(26, 13, 'Aditya Panegstu Cafe', 'Aditya-Panegstu-Cafe', '26-2021041342.png', '26-2021041353.jpg', '26-2021041326.jpg', '26-2021041328.pdf', 'Bancet Goreng Nikmat', 'Banjaran', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126698.81140251903!2d107.6185521!3d-7.0867764!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6895096bb3a5c7%3A0xe34f861e827e1118!2sMount%20Malabar!5e0!3m2!1sen!2sid!4v1618284844739!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Hi kak, saya mau pesan : -', '2021-04-13 03:43:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `id_cafe` int(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id_message`, `id_cafe`, `message`) VALUES
(1, 1, 'Rasa Bintang Lima , Harga Kaki Lima'),
(2, 1, 'Perut Buncit, dompet kurus kering :V'),
(3, 1, 'Dijamin Muantapsss :)'),
(8, 26, 'adit'),
(9, 26, 'bandar'),
(10, 26, 'salak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_kartu` varchar(100) NOT NULL,
  `foto_kartu` varchar(255) NOT NULL,
  `status_aktif` int(11) NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `username`, `no_hp`, `email`, `password`, `id_kartu`, `foto_kartu`, `status_aktif`, `date_create`) VALUES
(12, 'Aditya Pangestu', 'udinsedunia', '12345678', 'udu@in.d', '$2y$10$5Ex9vX6SSqUBT3LkoreQ7eXY6Fwpmx3BP8lz020MehqkCxT68FYfK', '12345678', '12345678-2021041214.jpg', 1, '2021-04-12 12:13:30'),
(13, 'Aditya Pangestu', 'adityapangestu', 'adityapangestu', 'adityapangestu@gmail.lol', '$2y$10$WJChGgFptmUKNJ3aNWXuv.j1z9hqBNL/.xdnUPExkQdXyQd8Sqgz6', '10116256', '10116256-2021041343.jpg', 1, '2021-04-13 03:42:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `id_sosmed` int(11) NOT NULL,
  `id_cafe` int(11) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message_wa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id_sosmed`, `id_cafe`, `instagram`, `whatsapp`, `facebook`, `youtube`, `twitter`, `email`, `message_wa`) VALUES
(1, 1, 'msninfinite', '082317994353', 'https://www.facebook.com/official.izone', 'https://www.youtube.com/watch?v=BaOScwq_lZs', 'Liga1Match', 'info@ptmsn.co.id', ''),
(3, 26, '', '082317994353', '', '', '', '', 'hi dit');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cafe`
--
ALTER TABLE `cafe`
  ADD PRIMARY KEY (`id_cafe`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indeks untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cafe`
--
ALTER TABLE `cafe`
  MODIFY `id_cafe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
