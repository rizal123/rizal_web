-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 13. Februari 2009 jam 20:41
-- Versi Server: 5.0.51
-- Versi PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `pakde`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `id` int(10) NOT NULL auto_increment,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `alamat`, `pesan`) VALUES
(4, 'khusnu', 'Jl.Sunan Kalijaga Gg. Puntadewa no.78 Tuban', 'Nggawe dewe po''o'),
(2, 'khuluq', 'Latsari', 'mencoba');
