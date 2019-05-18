-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2019 pada 20.25
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataprogramers`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `dataskillprogramer`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `dataskillprogramer` (
`idskills` int(11)
,`iduser` int(11)
,`name` varchar(30)
,`namaSkills` text
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `dataskillprogramerv2`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `dataskillprogramerv2` (
`iduser` int(11)
,`idskills` int(11)
,`name` varchar(30)
,`namaSkills` text
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`id`, `name`, `user_id`) VALUES
(1, 'React', 1),
(2, 'PHP', 1),
(3, 'Java', 2),
(4, 'Pyton', 2),
(5, 'CSS', 2),
(13, 'JavaScript ', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'dummy1'),
(2, 'dummy2'),
(3, 'dummy3');

-- --------------------------------------------------------

--
-- Struktur untuk view `dataskillprogramer`
--
DROP TABLE IF EXISTS `dataskillprogramer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dataskillprogramer`  AS  select `skills`.`id` AS `idskills`,`users`.`id` AS `iduser`,`users`.`name` AS `name`,group_concat(`skills`.`name` separator ',') AS `namaSkills` from (`users` left join `skills` on((`skills`.`user_id` = `users`.`id`))) group by `users`.`id` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `dataskillprogramerv2`
--
DROP TABLE IF EXISTS `dataskillprogramerv2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dataskillprogramerv2`  AS  select `users`.`id` AS `iduser`,`skills`.`id` AS `idskills`,`users`.`name` AS `name`,group_concat(`skills`.`name` separator ',') AS `namaSkills` from (`users` left join `skills` on((`skills`.`user_id` = `users`.`id`))) group by `skills`.`user_id` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
