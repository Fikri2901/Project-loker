-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2020 pada 08.42
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loker`
--
CREATE DATABASE IF NOT EXISTS `db_loker` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_loker`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_pelamaran`
--

DROP TABLE IF EXISTS `form_pelamaran`;
CREATE TABLE IF NOT EXISTS `form_pelamaran` (
  `id_form_pelamaran` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uploud_cv` varchar(50) NOT NULL,
  `uploud_ijazah` varchar(50) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  PRIMARY KEY (`id_form_pelamaran`),
  KEY `id_pelamar` (`id_pelamar`,`id_perusahaan`),
  KEY `id_perusahaan` (`id_perusahaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
--

DROP TABLE IF EXISTS `loker`;
CREATE TABLE IF NOT EXISTS `loker` (
  `id_loker` int(11) NOT NULL AUTO_INCREMENT,
  `nama_loker` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_loker`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`id_loker`, `nama_loker`, `gambar`, `alamat`, `deskripsi`, `kategori`) VALUES
(1, 'Programmer', 'Programmer.jpeg', 'surabaya', 'Desain-Desain', 'full time'),
(2, 'Back-End Developer', 'Back-End_Developer.jpg', 'pasuruan', 'periklanan', 'part time'),
(3, 'Software developer', 'Software_developer.jpeg', 'jember', 'sosial human', 'full time'),
(4, 'Developer website', 'Developer_website.jpg', 'sidoarjo', 'pengelola data basis', 'part time'),
(5, 'Education & Training', 'Education_&_Training.jpg', 'malang', 'pelatihan', 'part time'),
(6, 'IT support', 'IT_support.jpg', 'mojokerto', 'memimpin project', 'full time'),
(7, 'Guru komputer', 'Guru_komputer.jpg', 'surabaya', 'membuat program', 'magang'),
(8, 'Designer', 'Designer.jpeg', 'malang', 'pemasaran', 'freelance'),
(9, 'Project manager', 'Project_manager.jpeg', 'probolinggo', 'manager', 'part time'),
(11, 'System Administrator', 'System_Administrator.jpg', 'PLN pusat surabaya', 'Minimal D3 Teknik Informatika, laki-laki minimal 20 thn.', 'part time');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg_pelamar`
--

DROP TABLE IF EXISTS `reg_pelamar`;
CREATE TABLE IF NOT EXISTS `reg_pelamar` (
  `id_pelamar` int(11) NOT NULL AUTO_INCREMENT,
  `foto_profil` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `lulusan` varchar(50) NOT NULL,
  `tinggi_bdn` int(3) NOT NULL,
  `berat_bdn` int(3) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `level` int(3) NOT NULL,
  PRIMARY KEY (`id_pelamar`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reg_pelamar`
--

INSERT INTO `reg_pelamar` (`id_pelamar`, `foto_profil`, `nama`, `username`, `password`, `tgl_lahir`, `email`, `alamat`, `no_telp`, `lulusan`, `tinggi_bdn`, `berat_bdn`, `jenis_kelamin`, `level`) VALUES
(1, 'profil.jpg', 'ega', 'ega', '123', '2020-03-04', 'ega@gmail.com', 'bojonegoro', 88888888, 'SMA', 160, 50, 'Laki-Laki', 2),
(12, 'mukti12.jpeg', 'mukti12', 'mukti12', '123', '2020-01-01', 'mukti@gmail.com', 'bojonegoro', 22222222, 'S1', 47, 50, 'laki laki', 2),
(13, 'fikri.jpg', 'fikri', 'fikri', '123', '2000-09-01', 'fikri@gmail.com', 'pasuruan', 888811181, 'S2', 65, 43, 'perempuan', 2),
(14, 'viki.jpg', 'viki', 'viki', '123', '2020-01-01', 'viki@gmail.com', 'pasuruan , jl.MT HARYONO', 2222222, 'D3', 27, 41, 'laki laki', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg_perusahaan`
--

DROP TABLE IF EXISTS `reg_perusahaan`;
CREATE TABLE IF NOT EXISTS `reg_perusahaan` (
  `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `contact_person` int(11) NOT NULL,
  `level` int(3) NOT NULL,
  PRIMARY KEY (`id_perusahaan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reg_perusahaan`
--

INSERT INTO `reg_perusahaan` (`id_perusahaan`, `logo`, `nama`, `username`, `password`, `email`, `alamat`, `no_telp`, `fax`, `website`, `deskripsi`, `contact_person`, `level`) VALUES
(1, 'vikky.jpg', 'vikky', 'vikky', '321', 'vikky@gmail.com', 'pasuruan', 880880880, 1222222211, 'vikky.blogspot.com', 'iki gwe perusahaan', 111111111, 0),
(3, 'samsung.jpg', 'samsung', 'samsung', '321', 'samsung@gmail.com', 'amerika serikat', 7333922, 911922, 'samsung.co.id', 'ini perusahaan samsung', 34424224, 3);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `form_pelamaran`
--
ALTER TABLE `form_pelamaran`
  ADD CONSTRAINT `form_pelamaran_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `reg_perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `form_pelamaran_ibfk_2` FOREIGN KEY (`id_pelamar`) REFERENCES `reg_pelamar` (`id_pelamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
