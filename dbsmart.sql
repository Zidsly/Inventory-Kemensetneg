-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 05:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(25) NOT NULL,
  `kode_barang` int(25) NOT NULL,
  `id_kategori` int(25) NOT NULL,
  `nama_sub_kategori` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` blob DEFAULT NULL,
  `tgl_masuk` date NOT NULL,
  `stok_minimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `id_kategori`, `nama_sub_kategori`, `nama`, `deskripsi`, `gambar`, `tgl_masuk`, `stok_minimal`) VALUES
(1, 1, 1010301001, 'Alat Tulis', 'Ballpoint Balliner Merah', '', '', '2023-07-22', 999999),
(2, 2, 1010301001, 'Alat Tulis', 'Ballpoint Faster', '', '', '2023-07-22', 999999),
(3, 4, 1010301001, 'Alat Tulis', 'Ballpoint Pilot G-2 XS', '', '', '2023-07-22', 999999),
(4, 5, 1010301001, 'Alat Tulis', 'Pensil Staedler 2B', '', '', '2023-07-22', 999999),
(5, 7, 1010301001, 'Alat Tulis', 'Spidol Snowman BG-12N Hit', '', '', '2023-07-22', 999999),
(6, 8, 1010301001, 'Alat Tulis', 'Spidol', '', '', '2023-07-22', 999999),
(7, 14, 1010301001, 'Alat Tulis', 'Ballpoint Boxy Mitsubishi', '', '', '2023-07-22', 999999),
(8, 17, 1010301001, 'Alat Tulis', 'Ballpoint Balliner Biru', '', '', '2023-07-22', 999999),
(9, 18, 1010301001, 'Alat Tulis', 'Ballpoint Balliner Hitam', '', '', '2023-07-22', 999999),
(10, 19, 1010301001, 'Alat Tulis', 'Standard BOLDLINER Refill', '', '', '2023-07-22', 999999),
(11, 21, 1010301001, 'Alat Tulis', 'Ballpoint Rapat', '', '', '2023-07-22', 999999),
(12, 22, 1010301001, 'Alat Tulis', 'Ballpoint Boxy Hitam', '', '', '2023-07-22', 999999),
(13, 23, 1010301001, 'Alat Tulis', 'Ballpoint Boxy Biru', '', '', '2023-07-22', 999999),
(14, 24, 1010301001, 'Alat Tulis', 'Ballpoint Boxy Merah', '', '', '2023-07-22', 999999),
(15, 25, 1010301001, 'Alat Tulis', 'Refill Tinta Pulpen Zebra', '', '', '2023-07-22', 999999),
(16, 26, 1010301001, 'Alat Tulis', 'Refill Semi Gell 1.0', '', '', '2023-07-22', 999999),
(17, 27, 1010301001, 'Alat Tulis', 'Refill Semi Gell 0.7', '', '', '2023-07-22', 999999),
(18, 28, 1010301001, 'Alat Tulis', 'Ballpoint Gel Pen Boxy Hi', '', '', '2023-07-22', 999999),
(19, 29, 1010301001, 'Alat Tulis', 'Spidol Snowman Permanen', '', '', '2023-07-22', 999999),
(20, 1, 1010301003, 'Penjepit Kertas', 'Binder Clip Kenko 107', '', '', '2023-07-22', 999999),
(21, 2, 1010301003, 'Penjepit Kertas', 'Binder Clip Kenko 111', '', '', '2023-07-22', 999999),
(22, 3, 1010301003, 'Penjepit Kertas', 'Binder Clip Kenko 155', '', '', '2023-07-22', 999999),
(23, 4, 1010301003, 'Penjepit Kertas', 'Binder Clip Kenko 260', '', '', '2023-07-22', 999999),
(24, 6, 1010301003, 'Penjepit Kertas', 'paper clip no. 3', '', '', '2023-07-22', 999999),
(25, 10, 1010301003, 'Penjepit Kertas', 'Paper Clip no. 3100, Viny', '', '', '2023-07-22', 999999),
(26, 1, 1010301004, 'Penghapus/Korektor', 'Penghapus Pensil Staedler', '', '', '2023-07-22', 999999),
(27, 3, 1010301004, 'Penghapus/Korektor', 'Penghapus Pensil Staedler', '', '', '2023-07-22', 999999),
(28, 6, 1010301004, 'Penghapus/Korektor', 'Tipe Ex Pentel 2L-21M', '', '', '2023-07-22', 999999),
(29, 7, 1010301004, 'Penghapus/Korektor', 'Tip-Ex Kuas', '', '', '2023-07-22', 999999),
(30, 8, 1010301005, 'Buku Tulis', 'Buku Blanco SSP', '', '', '2023-07-22', 999999),
(31, 9, 1010301005, 'Buku Tulis', 'Buku Ekspedisi', '', '', '2023-07-22', 999999),
(32, 15, 1010301005, 'Buku Tulis', 'Buku Agenda Bintang Obor ', '', '', '2023-07-22', 999999),
(33, 17, 1010301005, 'Buku Tulis', 'Buku Kwitansi NCR rangkap', '', '', '2023-07-22', 999999),
(34, 23, 1010301005, 'Buku Tulis', 'Kwitansi Merk AA', '', '', '2023-07-22', 999999),
(35, 24, 1010301005, 'Buku Tulis', 'BLOCK NOTE DPP UK.1/2 FOL', '', '', '2023-07-22', 999999),
(36, 25, 1010301005, 'Buku Tulis', 'Buku kas uk F4', '', '', '2023-07-22', 999999),
(37, 27, 1010301005, 'Buku Tulis', 'Buku kwitansi NCR rangkap', '', '', '2023-07-22', 999999),
(38, 30, 1010301005, 'Buku Tulis', 'Buku Bon Permintaan Baran', '', '', '2023-07-22', 999999),
(39, 34, 1010301005, 'Buku Tulis', 'Buku Blangko SPD', '', '', '2023-07-22', 999999),
(40, 35, 1010301005, 'Buku Tulis', 'Block Note DPP 1/2 Folio ', '', '', '2023-07-22', 999999),
(41, 36, 1010301005, 'Buku Tulis', 'Block Note DPP 1/4 Folio ', '', '', '2023-07-22', 999999),
(42, 39, 1010301005, 'Buku Tulis', 'Buku Cek Bank', '', '', '2023-07-22', 999999),
(43, 40, 1010301005, 'Buku Tulis', 'Buku Bon Permintaan Baran', '', '', '2023-07-22', 999999),
(44, 41, 1010301005, 'Buku Tulis', 'NCR Rangkap 5 (Kwitansi I', '', '', '2023-07-22', 999999),
(45, 42, 1010301005, 'Buku Tulis', 'Buku Tamu', '', '', '2023-07-22', 999999),
(46, 2, 1010301006, 'Ordner Dan Map', 'Ordner Gung Yu', '', '', '2023-07-22', 999999),
(47, 3, 1010301006, 'Ordner Dan Map', 'Map DPP', '', '', '2023-07-22', 999999),
(48, 9, 1010301006, 'Ordner Dan Map', 'Map Plastik merk Daichi', '', '', '2023-07-22', 999999),
(49, 10, 1010301006, 'Ordner Dan Map', 'Map Plastik Snelhecter Me', '', '', '2023-07-22', 999999),
(50, 11, 1010301006, 'Ordner Dan Map', 'Map kemensetneg SET DPP', '', '', '2023-07-22', 999999),
(51, 16, 1010301006, 'Ordner Dan Map', 'Dus Arsip', '', '', '2023-07-22', 999999),
(52, 19, 1010301006, 'Ordner Dan Map', 'Bantex Document File Hita', '', '', '2023-07-22', 999999),
(53, 20, 1010301006, 'Ordner Dan Map', 'Map DPP Logo Baru', '', '', '2023-07-22', 999999),
(54, 1, 1010301007, 'Penggaris', 'Penggaris Butterfly 30cm', '', '', '2023-07-22', 999999),
(55, 2, 1010301007, 'Penggaris', 'Penggaris Butterfly 40cm', '', '', '2023-07-22', 999999),
(56, 3, 1010301007, 'Penggaris', 'Penggaris Besi Kenko 30cm', '', '', '2023-07-22', 999999),
(57, 4, 1010301007, 'Penggaris', 'Penggaris Besi Kenko 50cm', '', '', '2023-07-22', 999999),
(58, 1, 1010301008, 'Cutter (Alat Tulis Kantor', 'Cutter Kenko A300', '', '', '2023-07-22', 999999),
(59, 2, 1010301008, 'Cutter (Alat Tulis Kantor', 'Cutter Kenko L500', '', '', '2023-07-22', 999999),
(60, 6, 1010301009, 'Pita Mesin Ketik', 'Pita Kain', '', '', '2023-07-22', 999999),
(61, 1, 1010301010, 'Alat Perekat', 'Plakban Kain Daimaru 2\'\' ', '', '', '2023-07-22', 999999),
(62, 2, 1010301010, 'Alat Perekat', 'Lem Cair Povinal 112', '', '', '2023-07-22', 999999),
(63, 5, 1010301010, 'Alat Perekat', 'Selotipe Panvix 0,5 72 ya', '', '', '2023-07-22', 999999),
(64, 6, 1010301010, 'Alat Perekat', 'Selotipe Panvix 1 72 yard', '', '', '2023-07-22', 999999),
(65, 7, 1010301010, 'Alat Perekat', 'Double Tape Kenko 0,5\'\'', '', '', '2023-07-22', 999999),
(66, 8, 1010301010, 'Alat Perekat', 'plakban plastik daimaru 2', '', '', '2023-07-22', 999999),
(67, 9, 1010301010, 'Alat Perekat', 'Lem Tikus Cap Gajah', '', '', '2023-07-22', 999999),
(68, 10, 1010301010, 'Alat Perekat', 'Double tape 1\'\'', '', '', '2023-07-22', 999999),
(69, 13, 1010301010, 'Alat Perekat', 'Lakban Bening', '', '', '2023-07-22', 999999),
(70, 14, 1010301010, 'Alat Perekat', 'Double Tape 3M Uk.1', '', '', '2023-07-22', 999999),
(71, 1, 1010301010, 'Alat Perekat', 'Plakban Kain Daimaru 2\'\' ', '', '', '2023-07-22', 999999),
(72, 2, 1010301010, 'Alat Perekat', 'Lem Cair Povinal 112', '', '', '2023-07-22', 999999),
(73, 5, 1010301010, 'Alat Perekat', 'Selotipe Panvix 0,5 72 ya', '', '', '2023-07-22', 999999),
(74, 6, 1010301010, 'Alat Perekat', 'Selotipe Panvix 1 72 yard', '', '', '2023-07-22', 999999),
(75, 7, 1010301010, 'Alat Perekat', 'Double Tape Kenko 0,5\'\'', '', '', '2023-07-22', 999999),
(76, 8, 1010301010, 'Alat Perekat', 'plakban plastik daimaru 2', '', '', '2023-07-22', 999999),
(77, 9, 1010301010, 'Alat Perekat', 'Lem Tikus Cap Gajah', '', '', '2023-07-22', 999999),
(78, 10, 1010301010, 'Alat Perekat', 'Double tape 1\'\'', '', '', '2023-07-22', 999999),
(79, 13, 1010301010, 'Alat Perekat', 'Lakban Bening', '', '', '2023-07-22', 999999),
(80, 14, 1010301010, 'Alat Perekat', 'Double Tape 3M Uk.1', '', '', '2023-07-22', 999999),
(81, 1, 1010301999, 'Alat Tulis Kantor Lainnya', 'Stabillo Boss', '', '', '2023-07-22', 999999),
(82, 2, 1010301999, 'Alat Tulis Kantor Lainnya', 'Isi Cutter Kenko A100', '', '', '2023-07-22', 999999),
(83, 3, 1010301999, 'Alat Tulis Kantor Lainnya', 'Isi Cutter Kenko L150', '', '', '2023-07-22', 999999),
(84, 4, 1010301999, 'Alat Tulis Kantor Lainnya', 'Isi Stapler max 10', '', '', '2023-07-22', 999999),
(85, 5, 1010301999, 'Alat Tulis Kantor Lainnya', 'Isi Stapler max 3', '', '', '2023-07-22', 999999),
(86, 6, 1010301999, 'Alat Tulis Kantor Lainnya', 'Stapler Max HD 50', '', '', '2023-07-22', 999999),
(87, 9, 1010301999, 'Alat Tulis Kantor Lainnya', 'Pembolong Kenko no.40', '', '', '2023-07-22', 999999),
(88, 10, 1010301999, 'Alat Tulis Kantor Lainnya', 'Plastik Gantung', '', '', '2023-07-22', 999999),
(89, 11, 1010301999, 'Alat Tulis Kantor Lainnya', 'Stapler Max HD 10', '', '', '2023-07-22', 999999),
(90, 13, 1010301999, 'Alat Tulis Kantor Lainnya', 'Serutan Pensil Angel 5', '', '', '2023-07-22', 999999),
(91, 16, 1010301999, 'Alat Tulis Kantor Lainnya', 'Isi Stapler no. 1210 FAH', '', '', '2023-07-22', 999999),
(92, 20, 1010301999, 'Alat Tulis Kantor Lainnya', 'Tempat Solatip Besar', '', '', '2023-07-22', 999999),
(93, 24, 1010301999, 'Alat Tulis Kantor Lainnya', 'Isi stapler no. 1215', '', '', '2023-07-22', 999999),
(94, 29, 1010301999, 'Alat Tulis Kantor Lainnya', 'Plastik Laminating Folio', '', '', '2023-07-22', 999999),
(95, 30, 1010301999, 'Alat Tulis Kantor Lainnya', 'Gunting Stainless Kenko', '', '', '2023-07-22', 999999),
(96, 1, 1010302001, 'Kertas HVS', 'Kertas HVS A4 80 gram Bol', '', '', '2023-07-22', 999999),
(97, 2, 1010302001, 'Kertas HVS', 'Kertas HVS A3 80 gram Bol', '', '', '2023-07-22', 999999),
(98, 3, 1010302001, 'Kertas HVS', 'Kertas HVS F4 80 gram Bol', '', '', '2023-07-22', 999999),
(99, 5, 1010302001, 'Kertas HVS', 'Kertas HVS Warna A4 60 gr', '', '', '2023-07-22', 999999),
(100, 14, 1010302001, 'Kertas HVS', 'Kertas HVS Warna F4 60 gr', '', '', '2023-07-22', 999999),
(101, 15, 1010302001, 'Kertas HVS', 'Kertas HVS A5', '', '', '2023-07-22', 999999),
(102, 3, 1010302002, 'Berbagai Kertas', 'Kertas Faximile uk 210 x ', '', '', '2023-07-22', 999999),
(103, 4, 1010302002, 'Berbagai Kertas', 'Post it uk. 654', '', '', '2023-07-22', 999999),
(104, 5, 1010302002, 'Berbagai Kertas', 'Post It uk.653', '', '', '2023-07-22', 999999),
(105, 6, 1010302002, 'Berbagai Kertas', 'Post It Sign Here', '', '', '2023-07-22', 999999),
(106, 7, 1010302002, 'Berbagai Kertas', 'Kertas Faximile Oji Fax', '', '', '2023-07-22', 999999),
(107, 8, 1010302002, 'Berbagai Kertas', 'Kertas Sticker Lable no 1', '', '', '2023-07-22', 999999),
(108, 10, 1010302002, 'Berbagai Kertas', 'Post It 655', '', '', '2023-07-22', 999999),
(109, 11, 1010302002, 'Berbagai Kertas', 'Post It 656', '', '', '2023-07-22', 999999),
(110, 12, 1010302002, 'Berbagai Kertas', 'Post It Mark and Note', '', '', '2023-07-22', 999999),
(111, 13, 1010302002, 'Berbagai Kertas', 'Stiker Dus Arsip Hijau', '', '', '2023-07-22', 999999),
(112, 14, 1010302002, 'Berbagai Kertas', 'Stiker Dus Arsip Kuning', '', '', '2023-07-22', 999999),
(113, 15, 1010302002, 'Berbagai Kertas', 'Stiker Dus Arsip Biru', '', '', '2023-07-22', 999999),
(114, 16, 1010302002, 'Berbagai Kertas', 'Stiker Dus Arsip Merah', '', '', '2023-07-22', 999999),
(115, 17, 1010302002, 'Berbagai Kertas', 'Label Bagasi', '', '', '2023-07-22', 999999),
(116, 18, 1010302002, 'Berbagai Kertas', 'Kartu Kontrol Barang', '', '', '2023-07-22', 999999),
(117, 19, 1010302002, 'Berbagai Kertas', 'Pleacing Card Garuda', '', '', '2023-07-22', 999999),
(118, 20, 1010302002, 'Berbagai Kertas', 'Post It Sign Here Warna-W', '', '', '2023-07-22', 999999),
(119, 1, 1010302004, 'Amplop', 'Amplop Polos Jaya No.90', '', '', '2023-07-22', 999999),
(120, 3, 1010302004, 'Amplop', 'Amplop Jaya Kecil', '', '', '2023-07-22', 999999),
(121, 8, 1010302004, 'Amplop', 'Amplop Putih DPP uk. 12 x', '', '', '2023-07-22', 999999),
(122, 18, 1010302004, 'Amplop', 'Amplop coklat Wantimpres ', '', '', '2023-07-22', 999999),
(123, 20, 1010302004, 'Amplop', 'Amplop coklat Kemensetneg', '', '', '2023-07-22', 999999),
(124, 23, 1010302004, 'Amplop', 'Amplop coklat kecil kemse', '', '', '2023-07-22', 999999),
(125, 27, 1010302004, 'Amplop', 'Amplop coklat polos', '', '', '2023-07-22', 999999),
(126, 29, 1010302004, 'Amplop', 'Amplop coklat kecil DPP u', '', '', '2023-07-22', 999999),
(127, 30, 1010302004, 'Amplop', 'Amplop Nastim', '', '', '2023-07-22', 999999),
(128, 31, 1010302004, 'Amplop', 'Amplop coklat Wantimpres ', '', '', '2023-07-22', 999999),
(129, 1, 1010302005, 'Kop Surat', 'Kop Surat DPP Garuda warn', '', '', '2023-07-22', 999999),
(130, 3, 1010302005, 'Kop Surat', 'Kop Surat DPP Garuda warn', '', '', '2023-07-22', 999999),
(131, 10, 1010302005, 'Kop Surat', 'Kop Surat Kemsetneg Set.D', '', '', '2023-07-22', 999999),
(132, 11, 1010302005, 'Kop Surat', 'Kop Surat Kemsetneg Set.D', '', '', '2023-07-22', 999999),
(133, 5, 1010303003, 'Plat Cetak', 'Plakat Wantimpres uk.181 ', '', '', '2023-07-22', 999999),
(134, 6, 1010303003, 'Plat Cetak', 'Plakat Lipat Wantimpres L', '', '', '2023-07-22', 999999),
(135, 7, 1010303003, 'Plat Cetak', 'Plakat ukuran 20x29 cm', '', '', '2023-07-22', 999999),
(136, 2, 1010303006, 'Film Cetak', 'DVD RW Merk Sony', '', '', '2023-07-22', 999999),
(137, 4, 1010303006, 'Film Cetak', 'CD RW 700 MB Merk Sony', '', '', '2023-07-22', 999999),
(138, 1, 1010304004, 'Tinta/Toner Printer', 'Toner Q 7553 A', '', '', '2023-07-22', 999999),
(139, 2, 1010304004, 'Tinta/Toner Printer', 'Toner CB 435 A', '', '', '2023-07-22', 999999),
(140, 5, 1010304004, 'Tinta/Toner Printer', 'Tinta HP C 4936 A - Black', '', '', '2023-07-22', 999999),
(141, 6, 1010304004, 'Tinta/Toner Printer', 'Tinta HP C 4937 A - Cyan', '', '', '2023-07-22', 999999),
(142, 7, 1010304004, 'Tinta/Toner Printer', 'Tinta HP C 4938 A - Magen', '', '', '2023-07-22', 999999),
(143, 8, 1010304004, 'Tinta/Toner Printer', 'Tinta HP C 4939 A - Yello', '', '', '2023-07-22', 999999),
(144, 11, 1010304004, 'Tinta/Toner Printer', 'Toner HP Laserjet Q 6511 ', '', '', '2023-07-22', 999999),
(145, 12, 1010304004, 'Tinta/Toner Printer', 'Toner EPSON 85N Black', '', '', '2023-07-22', 999999),
(146, 13, 1010304004, 'Tinta/Toner Printer', 'Toner EPSON 85N Yellow', '', '', '2023-07-22', 999999),
(147, 14, 1010304004, 'Tinta/Toner Printer', 'Toner EPSON 85N Cyan', '', '', '2023-07-22', 999999),
(148, 15, 1010304004, 'Tinta/Toner Printer', 'Toner EPSON 85N Light Cya', '', '', '2023-07-22', 999999),
(149, 16, 1010304004, 'Tinta/Toner Printer', 'Toner EPSON 85N Magenta', '', '', '2023-07-22', 999999),
(150, 17, 1010304004, 'Tinta/Toner Printer', 'Toner EPSON 85N Light Mag', '', '', '2023-07-22', 999999),
(151, 19, 1010304004, 'Tinta/Toner Printer', 'Toner Laserjet HP CE 505 ', '', '', '2023-07-22', 999999),
(152, 20, 1010304004, 'Tinta/Toner Printer', 'Toner Fuji Xerox C 3055 B', '', '', '2023-07-22', 999999),
(153, 21, 1010304004, 'Tinta/Toner Printer', 'Toner Fuji Xerox C 3055 C', '', '', '2023-07-22', 999999),
(154, 22, 1010304004, 'Tinta/Toner Printer', 'Toner Fuji Xerox C 3055 M', '', '', '2023-07-22', 999999),
(155, 23, 1010304004, 'Tinta/Toner Printer', 'Toner Fuji Xerox C 3055 Y', '', '', '2023-07-22', 999999),
(156, 24, 1010304004, 'Tinta/Toner Printer', 'Tinta Canon CLI-36 Colour', '', '', '2023-07-22', 999999),
(157, 25, 1010304004, 'Tinta/Toner Printer', 'Tinta Canon PGI-35 Black', '', '', '2023-07-22', 999999),
(158, 26, 1010304004, 'Tinta/Toner Printer', 'Toner Xerox CM 305 Cyan', '', '', '2023-07-22', 999999),
(159, 27, 1010304004, 'Tinta/Toner Printer', 'Toner Xerox CM 305 Magent', '', '', '2023-07-22', 999999),
(160, 28, 1010304004, 'Tinta/Toner Printer', 'Toner Xerox CM 305 Yellow', '', '', '2023-07-22', 999999),
(161, 29, 1010304004, 'Tinta/Toner Printer', 'Toner Xerox CM 305 Black', '', '', '2023-07-22', 999999),
(162, 30, 1010304004, 'Tinta/Toner Printer', 'Toner Fax KX-FAT88', '', '', '2023-07-22', 999999),
(163, 31, 1010304004, 'Tinta/Toner Printer', 'Toner HP 85A', '', '', '2023-07-22', 999999),
(164, 32, 1010304004, 'Tinta/Toner Printer', 'Tinta 950 Black', '', '', '2023-07-22', 999999),
(165, 33, 1010304004, 'Tinta/Toner Printer', 'Tinta 951 XL Cyan', '', '', '2023-07-22', 999999),
(166, 34, 1010304004, 'Tinta/Toner Printer', 'Tinta 951 XL Yellow', '', '', '2023-07-22', 999999),
(167, 35, 1010304004, 'Tinta/Toner Printer', 'Tinta 951 XL Magenta', '', '', '2023-07-22', 999999),
(168, 36, 1010304004, 'Tinta/Toner Printer', 'Toner HP Laserjet 201 A B', '', '', '2023-07-22', 999999),
(169, 37, 1010304004, 'Tinta/Toner Printer', 'Toner HP Laserjet 201 A Y', '', '', '2023-07-22', 999999),
(170, 38, 1010304004, 'Tinta/Toner Printer', 'Toner HP Laserjet 201 A M', '', '', '2023-07-22', 999999),
(171, 39, 1010304004, 'Tinta/Toner Printer', 'Toner HP Laserjet 201 A C', '', '', '2023-07-22', 999999),
(172, 40, 1010304004, 'Tinta/Toner Printer', 'Toner HP 26A', '', '', '2023-07-22', 999999),
(173, 41, 1010304004, 'Tinta/Toner Printer', 'Toner HP Drum Black 104A', '', '', '2023-07-22', 999999),
(174, 4, 1010304006, 'USB/Flash Disk', 'Flash Disk 8 GB', '', '', '2023-07-22', 999999),
(175, 1, 1010304010, 'Mouse', 'Mouse Logitech B100', '', '', '2023-07-22', 999999),
(176, 15, 1010304999, 'Bahan Komputer Lainnya', 'Kabel Fiber Optik Patch C', '', '', '2023-07-22', 999999),
(177, 16, 1010304999, 'Bahan Komputer Lainnya', 'Keyboard Logitech K200', '', '', '2023-07-22', 999999),
(178, 17, 1010304999, 'Bahan Komputer Lainnya', 'Keyboard Wireless Logitec', '', '', '2023-07-22', 999999),
(179, 18, 1010304999, 'Bahan Komputer Lainnya', 'Keyboard Wireless MK220R', '', '', '2023-07-22', 999999),
(180, 19, 1010304999, 'Bahan Komputer Lainnya', 'Vention Sound Card USB 2.', '', '', '2023-07-22', 999999),
(181, 20, 1010304999, 'Bahan Komputer Lainnya', 'Netline Converter USB Typ', '', '', '2023-07-22', 999999),
(182, 21, 1010304999, 'Bahan Komputer Lainnya', 'Vention Adapter USB 3.2 T', '', '', '2023-07-22', 999999),
(183, 22, 1010304999, 'Bahan Komputer Lainnya', 'USB Type C 8 in 1 Adapter', '', '', '2023-07-22', 999999),
(184, 23, 1010304999, 'Bahan Komputer Lainnya', 'Kabel Data Ipad', '', '', '2023-07-22', 999999),
(185, 1, 1010306001, 'Kabel Listrik', 'Kabel NYYHY 2 x 0,75 mm', '', '', '2023-07-22', 999999),
(186, 5, 1010306001, 'Kabel Listrik', 'Kabel NYM 3 x 2,5', '', '', '2023-07-22', 999999),
(187, 6, 1010306001, 'Kabel Listrik', 'Kabel NYM 2 x1,5', '', '', '2023-07-22', 999999),
(188, 7, 1010306001, 'Kabel Listrik', 'Kabel NYM 2 x 0,75', '', '', '2023-07-22', 999999),
(189, 11, 1010306001, 'Kabel Listrik', 'Kabel NYM 2 x 2,25 mm', '', '', '2023-07-22', 999999),
(190, 12, 1010306001, 'Kabel Listrik', 'Kabel NYM 2 x 2,5 mm', '', '', '2023-07-22', 999999),
(191, 1, 1010306002, 'Lampu Listrik', 'Lampu TL Ring 22 Watt Phi', '', '', '2023-07-22', 999999),
(192, 3, 1010306002, 'Lampu Listrik', 'Lampu TL 18 Watt Philips', '', '', '2023-07-22', 999999),
(193, 4, 1010306002, 'Lampu Listrik', 'Lampu TL 36 Watt Philips', '', '', '2023-07-22', 999999),
(194, 12, 1010306002, 'Lampu Listrik', 'Lampu PLC Tusuk 26 watt', '', '', '2023-07-22', 999999),
(195, 15, 1010306002, 'Lampu Listrik', 'Lampu LED Donwlight 12W', '', '', '2023-07-22', 999999),
(196, 16, 1010306002, 'Lampu Listrik', 'Lampu TL LED 16W', '', '', '2023-07-22', 999999),
(197, 17, 1010306002, 'Lampu Listrik', 'Lampu TL LED 8W', '', '', '2023-07-22', 999999),
(198, 18, 1010306002, 'Lampu Listrik', 'Lampu TL Ring 22W', '', '', '2023-07-22', 999999),
(199, 19, 1010306002, 'Lampu Listrik', 'Lampu LED Philips 12 W', '', '', '2023-07-22', 999999),
(200, 20, 1010306002, 'Lampu Listrik', 'Lampu ML Philips 100 W', '', '', '2023-07-22', 999999),
(201, 21, 1010306002, 'Lampu Listrik', 'Lampu LED Phillips Downli', '', '', '2023-07-22', 999999),
(202, 1, 1010306003, 'Stop Kontak', 'stop Kontak 4 lubang', '', '', '2023-07-22', 999999),
(203, 1, 1010306010, 'Batu Baterai', 'Baterai Alkaline AA', '', '', '2023-07-22', 999999),
(204, 2, 1010306010, 'Batu Baterai', 'Baterai Alkaline AAA', '', '', '2023-07-22', 999999),
(205, 3, 1010306010, 'Batu Baterai', 'Baterai Segi Empat 9V', '', '', '2023-07-22', 999999),
(206, 4, 1010306010, 'Batu Baterai', 'Baterai Remover 1.2 V', '', '', '2023-07-22', 999999),
(207, 5, 1010306010, 'Batu Baterai', 'Baterai Sedang', '', '', '2023-07-22', 999999),
(208, 6, 1010306010, 'Batu Baterai', 'Baterai ABC Besar', '', '', '2023-07-22', 999999),
(209, 10, 1010306010, 'Batu Baterai', 'Baterai Rechargeable 2000', '', '', '2023-07-22', 999999),
(210, 11, 1010306010, 'Batu Baterai', 'Baterai Maxell CR 1632', '', '', '2023-07-22', 999999),
(211, 12, 1010306010, 'Batu Baterai', 'Baterai Panasonic CR 2016', '', '', '2023-07-22', 999999),
(212, 13, 1010306010, 'Batu Baterai', 'Baterai GP Alkaline 27A 1', '', '', '2023-07-22', 999999),
(213, 14, 1010306010, 'Batu Baterai', 'Baterai Lithium CR2025', '', '', '2023-07-22', 999999),
(214, 15, 1010306010, 'Batu Baterai', 'Baterai Nikon EN-EL15', '', '', '2023-07-22', 999999),
(215, 16, 1010306010, 'Batu Baterai', 'Baterai Sony NP-FW50', '', '', '2023-07-22', 999999),
(216, 17, 1010306010, 'Batu Baterai', 'Baterai Panasonic CR 2032', '', '', '2023-07-22', 999999),
(217, 18, 1010306010, 'Batu Baterai', 'Baterai LR44 1,5 V', '', '', '2023-07-22', 999999),
(218, 19, 1010306010, 'Batu Baterai', 'Baterai Sony NP-F770', '', '', '2023-07-22', 999999),
(219, 20, 1010306010, 'Batu Baterai', 'Panasonic Eneloop AA 2500', '', '', '2023-07-22', 999999),
(220, 8, 1010306999, 'Alat Listrik Lainnya', 'Balas 18/20 Watt Philips', '', '', '2023-07-22', 999999),
(221, 16, 1010306999, 'Alat Listrik Lainnya', 'Stater S10', '', '', '2023-07-22', 999999),
(222, 17, 1010306999, 'Alat Listrik Lainnya', 'Stater S2', '', '', '2023-07-22', 999999),
(223, 24, 1010306999, 'Alat Listrik Lainnya', 'Isolasi Ban 3M', '', '', '2023-07-22', 999999),
(224, 26, 1010306999, 'Alat Listrik Lainnya', 'Steker Arde', '', '', '2023-07-22', 999999),
(225, 29, 1010306999, 'Alat Listrik Lainnya', 'Steker Kombinasi', '', '', '2023-07-22', 999999),
(226, 31, 1010306999, 'Alat Listrik Lainnya', 'Fitting Lampu TL', '', '', '2023-07-22', 999999),
(227, 33, 1010306999, 'Alat Listrik Lainnya', 'Balas 36W', '', '', '2023-07-22', 999999),
(228, 41, 1010306999, 'Alat Listrik Lainnya', 'Kapasitor 30 MF', '', '', '2023-07-22', 999999),
(229, 42, 1010306999, 'Alat Listrik Lainnya', 'Kapasitor 40 MF', '', '', '2023-07-22', 999999),
(230, 43, 1010306999, 'Alat Listrik Lainnya', 'Kapasitor 35 MF', '', '', '2023-07-22', 999999),
(231, 44, 1010306999, 'Alat Listrik Lainnya', 'Kapasitor 45 MF', '', '', '2023-07-22', 999999),
(232, 45, 1010306999, 'Alat Listrik Lainnya', 'Stop kontak terminal 6 lu', '', '', '2023-07-22', 999999),
(233, 46, 1010306999, 'Alat Listrik Lainnya', 'Kapasitor 60 MF', '', '', '2023-07-22', 999999),
(234, 47, 1010306999, 'Alat Listrik Lainnya', 'MCB 1 Phase 10 Ampere', '', '', '2023-07-22', 999999),
(235, 48, 1010306999, 'Alat Listrik Lainnya', 'MCB 1 Phase 16 Ampere', '', '', '2023-07-22', 999999),
(236, 49, 1010306999, 'Alat Listrik Lainnya', 'MCB 1 Phase 20 Ampere', '', '', '2023-07-22', 999999),
(237, 50, 1010306999, 'Alat Listrik Lainnya', 'MCB 3 Phase 63 Ampere', '', '', '2023-07-22', 999999),
(238, 51, 1010306999, 'Alat Listrik Lainnya', 'MCB 3 Phase 100 Ampere', '', '', '2023-07-22', 999999),
(239, 52, 1010306999, 'Alat Listrik Lainnya', 'Baterai Sony Charger BC-V', '', '', '2023-07-22', 999999),
(240, 53, 1010306999, 'Alat Listrik Lainnya', 'Flash Godox TT685S Sony', '', '', '2023-07-22', 999999),
(241, 54, 1010306999, 'Alat Listrik Lainnya', 'Panasonic Eneloop Pro Sma', '', '', '2023-07-22', 999999),
(242, 55, 1010306999, 'Alat Listrik Lainnya', 'Flash Diffuser Godox 685S', '', '', '2023-07-22', 999999),
(243, 4, 1010307007, 'Perlengkapan Lapangan', 'Pluit', '', '', '2023-07-22', 999999),
(244, 1, 1010310001, 'Persediaan Berupa Alat Pe', 'Baju APD Anti Virus', '', '', '2023-07-22', 999999),
(245, 2, 1010310001, 'Persediaan Berupa Alat Pe', 'Kacamata Safety Glass', '', '', '2023-07-22', 999999),
(246, 3, 1010310001, 'Persediaan Berupa Alat Pe', 'Masker Single Filter (Che', '', '', '2023-07-22', 999999),
(247, 4, 1010310001, 'Persediaan Berupa Alat Pe', 'Masker Surgical Sensi', '', '', '2023-07-22', 999999),
(248, 5, 1010310001, 'Persediaan Berupa Alat Pe', 'Masker Tester', '', '', '2023-07-22', 999999),
(249, 6, 1010310001, 'Persediaan Berupa Alat Pe', 'Bracket', '', '', '2023-07-22', 999999),
(250, 7, 1010310001, 'Persediaan Berupa Alat Pe', 'Masker Medis Isi 5 Softie', '', '', '2023-07-22', 999999),
(251, 8, 1010310001, 'Persediaan Berupa Alat Pe', 'Masker Medis Softies 3 Pl', '', '', '2023-07-22', 999999),
(252, 9, 1010310001, 'Persediaan Berupa Alat Pe', 'HME Filter (GeNose)', '', '', '2023-07-22', 999999),
(253, 10, 1010310001, 'Persediaan Berupa Alat Pe', 'Kantung Udara Nafas (GeNo', '', '', '2023-07-22', 999999),
(254, 11, 1010310001, 'Persediaan Berupa Alat Pe', 'Sarung Tangan Latex isi 1', '', '', '2023-07-22', 999999),
(255, 12, 1010310001, 'Persediaan Berupa Alat Pe', 'Disposable Gown', '', '', '2023-07-22', 999999),
(256, 13, 1010310001, 'Persediaan Berupa Alat Pe', 'Plastik Sampah Limbah Ber', '', '', '2023-07-22', 999999),
(257, 14, 1010310001, 'Persediaan Berupa Alat Pe', 'Masker N95 isi 20 buah', '', '', '2023-07-22', 999999),
(258, 15, 1010310001, 'Persediaan Berupa Alat Pe', 'Masker Medis KF94', '', '', '2023-07-22', 999999),
(259, 16, 1010310001, 'Persediaan Berupa Alat Pe', 'Lancet/jarum tes (isi 200', '', '', '2023-07-22', 999999),
(260, 17, 1010310001, 'Persediaan Berupa Alat Pe', 'Strip tes Hemoglobin (isi', '', '', '2023-07-22', 999999),
(261, 18, 1010310001, 'Persediaan Berupa Alat Pe', 'Strip tes gula darah (isi', '', '', '2023-07-22', 999999),
(262, 19, 1010310001, 'Persediaan Berupa Alat Pe', 'Strip tes asam urat (isi ', '', '', '2023-07-22', 999999),
(263, 20, 1010310001, 'Persediaan Berupa Alat Pe', 'Strip tes kolestrol (isi ', '', '', '2023-07-22', 999999),
(264, 1, 1010310999, 'Alat Penunjang Kegiatan K', 'Lap Kanebo', '', '', '2023-07-22', 999999),
(265, 2, 1010310999, 'Alat Penunjang Kegiatan K', 'Kuas Ban Mobil', '', '', '2023-07-22', 999999),
(266, 3, 1010310999, 'Alat Penunjang Kegiatan K', 'Lap Piring Bahan Handuk', '', '', '2023-07-22', 999999),
(267, 4, 1010310999, 'Alat Penunjang Kegiatan K', 'Tali Rapia', '', '', '2023-07-22', 999999),
(268, 5, 1010310999, 'Alat Penunjang Kegiatan K', 'Cangkir & Tatakan Exclusi', '', '', '2023-07-22', 999999),
(269, 6, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Snack 6\'\' Sango', '', '', '2023-07-22', 999999),
(270, 7, 1010310999, 'Alat Penunjang Kegiatan K', 'Mangkuk Soup Kuping + Tat', '', '', '2023-07-22', 999999),
(271, 8, 1010310999, 'Alat Penunjang Kegiatan K', 'Pemanas Warmer Kinox', '', '', '2023-07-22', 999999),
(272, 9, 1010310999, 'Alat Penunjang Kegiatan K', 'Pitcher Gelas Pemanas Kin', '', '', '2023-07-22', 999999),
(273, 10, 1010310999, 'Alat Penunjang Kegiatan K', 'Pemanas Pirex Persegi uk.', '', '', '2023-07-22', 999999),
(274, 11, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Nasi Beling Marine', '', '', '2023-07-22', 999999),
(275, 12, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Nasi Beling Marine', '', '', '2023-07-22', 999999),
(276, 13, 1010310999, 'Alat Penunjang Kegiatan K', 'Penjepit Lauk uk. Besar', '', '', '2023-07-22', 999999),
(277, 14, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Sambal Dynasty', '', '', '2023-07-22', 999999),
(278, 15, 1010310999, 'Alat Penunjang Kegiatan K', 'Pitcher Luminarch', '', '', '2023-07-22', 999999),
(279, 16, 1010310999, 'Alat Penunjang Kegiatan K', 'Panci Bima uk. 22 Stainle', '', '', '2023-07-22', 999999),
(280, 17, 1010310999, 'Alat Penunjang Kegiatan K', 'Gelas Minum Berkaki Goble', '', '', '2023-07-22', 999999),
(281, 18, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Makan Ceper Sango', '', '', '2023-07-22', 999999),
(282, 19, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Plate uk. 12 3/4\'\'', '', '', '2023-07-22', 999999),
(283, 20, 1010310999, 'Alat Penunjang Kegiatan K', 'Dandang Alumunium BIMA uk', '', '', '2023-07-22', 999999),
(284, 21, 1010310999, 'Alat Penunjang Kegiatan K', 'Wajan Alumunium uk. 30 cm', '', '', '2023-07-22', 999999),
(285, 22, 1010310999, 'Alat Penunjang Kegiatan K', 'Wajan Alumunium uk. 36 cm', '', '', '2023-07-22', 999999),
(286, 23, 1010310999, 'Alat Penunjang Kegiatan K', 'Panci Hot Spot Stainless ', '', '', '2023-07-22', 999999),
(287, 24, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Gula Sachet Kerami', '', '', '2023-07-22', 999999),
(288, 25, 1010310999, 'Alat Penunjang Kegiatan K', 'Cangkir dan Tatakan Motif', '', '', '2023-07-22', 999999),
(289, 26, 1010310999, 'Alat Penunjang Kegiatan K', 'Cangkir dan Tatakan Putih', '', '', '2023-07-22', 999999),
(290, 27, 1010310999, 'Alat Penunjang Kegiatan K', 'Coffee Maker uk. 9 ltr (5', '', '', '2023-07-22', 999999),
(291, 28, 1010310999, 'Alat Penunjang Kegiatan K', 'Gelas Softdrink Royalex', '', '', '2023-07-22', 999999),
(292, 29, 1010310999, 'Alat Penunjang Kegiatan K', 'Gelas Es Krim Kedaung', '', '', '2023-07-22', 999999),
(293, 30, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Snack List Biru St', '', '', '2023-07-22', 999999),
(294, 31, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Snack Putih Polos ', '', '', '2023-07-22', 999999),
(295, 32, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Kue Bulat Beling d', '', '', '2023-07-22', 999999),
(296, 33, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Tusuk Gigi Keramik', '', '', '2023-07-22', 999999),
(297, 34, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Kue Bulat Susun Em', '', '', '2023-07-22', 999999),
(298, 35, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Garam dan Lada', '', '', '2023-07-22', 999999),
(299, 36, 1010310999, 'Alat Penunjang Kegiatan K', 'Gelas/Mug Putih List Biru', '', '', '2023-07-22', 999999),
(300, 37, 1010310999, 'Alat Penunjang Kegiatan K', 'Mangkok Sango', '', '', '2023-07-22', 999999),
(301, 38, 1010310999, 'Alat Penunjang Kegiatan K', 'Hot Pot uk. 22 cm Merk Se', '', '', '2023-07-22', 999999),
(302, 39, 1010310999, 'Alat Penunjang Kegiatan K', 'Panci Teflon Gagang uk. 2', '', '', '2023-07-22', 999999),
(303, 40, 1010310999, 'Alat Penunjang Kegiatan K', 'Panci Susu Alumunium uk. ', '', '', '2023-07-22', 999999),
(304, 41, 1010310999, 'Alat Penunjang Kegiatan K', 'Pitcher Gelas Pemanas Mer', '', '', '2023-07-22', 999999),
(305, 42, 1010310999, 'Alat Penunjang Kegiatan K', 'Mangkok Puding Indo Keram', '', '', '2023-07-22', 999999),
(306, 43, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Makan Motif St. Ja', '', '', '2023-07-22', 999999),
(307, 44, 1010310999, 'Alat Penunjang Kegiatan K', 'Gelas/Mug Motif St. James', '', '', '2023-07-22', 999999),
(308, 45, 1010310999, 'Alat Penunjang Kegiatan K', 'Mangkok Motif St. James 6', '', '', '2023-07-22', 999999),
(309, 46, 1010310999, 'Alat Penunjang Kegiatan K', 'Mangkok Puding Motif St. ', '', '', '2023-07-22', 999999),
(310, 47, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Snack Motif St. Ja', '', '', '2023-07-22', 999999),
(311, 48, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Oval Motif St. Jam', '', '', '2023-07-22', 999999),
(312, 49, 1010310999, 'Alat Penunjang Kegiatan K', 'Bima Steamer Stainless St', '', '', '2023-07-22', 999999),
(313, 50, 1010310999, 'Alat Penunjang Kegiatan K', 'Krisbow Dessert Tong', '', '', '2023-07-22', 999999),
(314, 51, 1010310999, 'Alat Penunjang Kegiatan K', 'Poci Compass Tea Pot L 1.', '', '', '2023-07-22', 999999),
(315, 52, 1010310999, 'Alat Penunjang Kegiatan K', 'Tatakan Poci Oval Plate S', '', '', '2023-07-22', 999999),
(316, 53, 1010310999, 'Alat Penunjang Kegiatan K', 'Cangkir Teh Compass Mug S', '', '', '2023-07-22', 999999),
(317, 54, 1010310999, 'Alat Penunjang Kegiatan K', 'Tatakan Cangkir Tea Cup S', '', '', '2023-07-22', 999999),
(318, 55, 1010310999, 'Alat Penunjang Kegiatan K', 'Cangkir Kopi plus Tatakan', '', '', '2023-07-22', 999999),
(319, 56, 1010310999, 'Alat Penunjang Kegiatan K', 'Cangkir Teh Sango dengan ', '', '', '2023-07-22', 999999),
(320, 57, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Snack Sango dengan', '', '', '2023-07-22', 999999),
(321, 58, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Snack Persegi Panj', '', '', '2023-07-22', 999999),
(322, 59, 1010310999, 'Alat Penunjang Kegiatan K', 'Gelas Goblet Colorado', '', '', '2023-07-22', 999999),
(323, 60, 1010310999, 'Alat Penunjang Kegiatan K', 'Panci Gagang Teflon ukura', '', '', '2023-07-22', 999999),
(324, 61, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Sambal 1 Lubang', '', '', '2023-07-22', 999999),
(325, 62, 1010310999, 'Alat Penunjang Kegiatan K', 'Tissue Halus Tessa 120 sh', '', '', '2023-07-22', 999999),
(326, 63, 1010310999, 'Alat Penunjang Kegiatan K', 'Tutup Gelas Kertas Putih ', '', '', '2023-07-22', 999999),
(327, 64, 1010310999, 'Alat Penunjang Kegiatan K', 'Doily Paper Rosa uk. 6,5', '', '', '2023-07-22', 999999),
(328, 65, 1010310999, 'Alat Penunjang Kegiatan K', 'Sarung Tangan Plastik', '', '', '2023-07-22', 999999),
(329, 66, 1010310999, 'Alat Penunjang Kegiatan K', 'Doily Paper Rosa uk. 7,5', '', '', '2023-07-22', 999999),
(330, 67, 1010310999, 'Alat Penunjang Kegiatan K', 'Tissue Toilet Gulung Nice', '', '', '2023-07-22', 999999),
(331, 68, 1010310999, 'Alat Penunjang Kegiatan K', 'Gunting Stainless Kenko', '', '', '2023-07-22', 999999),
(332, 69, 1010310999, 'Alat Penunjang Kegiatan K', 'Spon Pencuci Piring', '', '', '2023-07-22', 999999),
(333, 70, 1010310999, 'Alat Penunjang Kegiatan K', 'Plastik Sampah Besar uk. ', '', '', '2023-07-22', 999999),
(334, 71, 1010310999, 'Alat Penunjang Kegiatan K', 'Doily Paper Oval uk. 8 x ', '', '', '2023-07-22', 999999),
(335, 72, 1010310999, 'Alat Penunjang Kegiatan K', 'Isi Ulang Gas Hi-cool', '', '', '2023-07-22', 999999),
(336, 73, 1010310999, 'Alat Penunjang Kegiatan K', 'Sikat Gigi Oral B', '', '', '2023-07-22', 999999),
(337, 74, 1010310999, 'Alat Penunjang Kegiatan K', 'Tapas Cuci Polytex Stainl', '', '', '2023-07-22', 999999),
(338, 75, 1010310999, 'Alat Penunjang Kegiatan K', 'Tusuk Gigi Bungkus Kertas', '', '', '2023-07-22', 999999),
(339, 76, 1010310999, 'Alat Penunjang Kegiatan K', 'Cup Kue Putih', '', '', '2023-07-22', 999999),
(340, 77, 1010310999, 'Alat Penunjang Kegiatan K', 'Plastik Wrap uk. Besar', '', '', '2023-07-22', 999999),
(341, 78, 1010310999, 'Alat Penunjang Kegiatan K', 'Tissue Halus Compact Nice', '', '', '2023-07-22', 999999),
(342, 79, 1010310999, 'Alat Penunjang Kegiatan K', 'Tissue Napkin Jumbo isi 5', '', '', '2023-07-22', 999999),
(343, 80, 1010310999, 'Alat Penunjang Kegiatan K', 'Paku Payung', '', '', '2023-07-22', 999999),
(344, 81, 1010310999, 'Alat Penunjang Kegiatan K', 'Tisu Halus Tessa isi 250 ', '', '', '2023-07-22', 999999),
(345, 82, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Garam/Lada Mika', '', '', '2023-07-22', 999999),
(346, 83, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Tusuk Gigi Mika', '', '', '2023-07-22', 999999),
(347, 84, 1010310999, 'Alat Penunjang Kegiatan K', 'Tempat Sambal Mika', '', '', '2023-07-22', 999999),
(348, 85, 1010310999, 'Alat Penunjang Kegiatan K', 'Asahan Pisau (Diamond and', '', '', '2023-07-22', 999999),
(349, 86, 1010310999, 'Alat Penunjang Kegiatan K', 'Parutan Menara (4 sisi)', '', '', '2023-07-22', 999999),
(350, 87, 1010310999, 'Alat Penunjang Kegiatan K', 'Cup Kue Hitam uk. Sedang', '', '', '2023-07-22', 999999),
(351, 88, 1010310999, 'Alat Penunjang Kegiatan K', 'Plastik Sampah Bening uk.', '', '', '2023-07-22', 999999),
(352, 89, 1010310999, 'Alat Penunjang Kegiatan K', 'Cup Kue Bening', '', '', '2023-07-22', 999999),
(353, 90, 1010310999, 'Alat Penunjang Kegiatan K', 'Tissue Livi Hand Towel', '', '', '2023-07-22', 999999),
(354, 91, 1010310999, 'Alat Penunjang Kegiatan K', 'Gunting Kecil', '', '', '2023-07-22', 999999),
(355, 92, 1010310999, 'Alat Penunjang Kegiatan K', 'Tissue Basah Mitu Sachet', '', '', '2023-07-22', 999999),
(356, 93, 1010310999, 'Alat Penunjang Kegiatan K', 'Bendera Indonesia uk 100x', '', '', '2023-07-22', 999999),
(357, 94, 1010310999, 'Alat Penunjang Kegiatan K', 'Jas Hujan Terusan Plastik', '', '', '2023-07-22', 999999),
(358, 95, 1010310999, 'Alat Penunjang Kegiatan K', 'Mangkok Putih diameter 6 ', '', '', '2023-07-22', 999999),
(359, 96, 1010310999, 'Alat Penunjang Kegiatan K', 'Cup Kue Hitam uk. 70 mm x', '', '', '2023-07-22', 999999),
(360, 97, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring Snack Model Perseg', '', '', '2023-07-22', 999999),
(361, 98, 1010310999, 'Alat Penunjang Kegiatan K', 'Piring snack bulat untuk ', '', '', '2023-07-22', 999999),
(362, 99, 1010310999, 'Alat Penunjang Kegiatan K', 'Tutup gelas bahan stainle', '', '', '2023-07-22', 999999),
(363, 100, 1010310999, 'Alat Penunjang Kegiatan K', 'Cangkir teh untuk Anggota', '', '', '2023-07-22', 999999),
(364, 101, 1010310999, 'Alat Penunjang Kegiatan K', 'Tutup mug', '', '', '2023-07-22', 999999),
(365, 102, 1010310999, 'Alat Penunjang Kegiatan K', 'Kamper A', '', '', '2023-07-22', 999999),
(366, 103, 1010310999, 'Alat Penunjang Kegiatan K', 'Kamper B', '', '', '2023-07-22', 999999),
(367, 104, 1010310999, 'Alat Penunjang Kegiatan K', 'Cairan C', '', '', '2023-07-22', 999999),
(368, 105, 1010310999, 'Alat Penunjang Kegiatan K', 'Cairan D', '', '', '2023-07-22', 999999),
(369, 106, 1010310999, 'Alat Penunjang Kegiatan K', 'Glass Towel', '', '', '2023-07-22', 999999),
(370, 107, 1010310999, 'Alat Penunjang Kegiatan K', 'Paper Napkin Tebal dan Mo', '', '', '2023-07-22', 999999),
(371, 108, 1010310999, 'Alat Penunjang Kegiatan K', 'Doily Paper Rosa uk. 4,5 ', '', '', '2023-07-22', 999999),
(372, 109, 1010310999, 'Alat Penunjang Kegiatan K', 'Zhiyun Tech 18650 Baterry', '', '', '2023-07-22', 999999),
(373, 110, 1010310999, 'Alat Penunjang Kegiatan K', 'Spon Pencuci Mobil', '', '', '2023-07-22', 999999),
(374, 111, 1010310999, 'Alat Penunjang Kegiatan K', 'Kemoceng Debu Bulu Ayam u', '', '', '2023-07-22', 999999),
(375, 112, 1010310999, 'Alat Penunjang Kegiatan K', 'Selang Air Benang uk. 1/2', '', '', '2023-07-22', 999999),
(376, 113, 1010310999, 'Alat Penunjang Kegiatan K', 'Wajan Penggorengan Teflon', '', '', '2023-07-22', 999999),
(377, 114, 1010310999, 'Alat Penunjang Kegiatan K', 'Apron Anti Air dan Minyak', '', '', '2023-07-22', 999999),
(378, 115, 1010310999, 'Alat Penunjang Kegiatan K', 'Pointer Hijau', '', '', '2023-07-22', 999999),
(379, 1, 1010311999, 'Bahan Penunjang Kegiatan ', 'Semir Ban KIT uk. 400 ml', '', '', '2023-07-22', 999999),
(380, 2, 1010311999, 'Bahan Penunjang Kegiatan ', 'Shampo Pencuci Mobil KIT ', '', '', '2023-07-22', 999999),
(381, 3, 1010311999, 'Bahan Penunjang Kegiatan ', 'KIT Poles', '', '', '2023-07-22', 999999),
(382, 5, 1010311999, 'Bahan Penunjang Kegiatan ', 'Breath Simmering Liquid M', '', '', '2023-07-22', 999999),
(383, 6, 1010311999, 'Bahan Penunjang Kegiatan ', 'Hand Sanitizer Polisoft 5', '', '', '2023-07-22', 999999),
(384, 7, 1010311999, 'Bahan Penunjang Kegiatan ', 'Disinfektan Saniswiss 20 ', '', '', '2023-07-22', 999999),
(385, 8, 1010311999, 'Bahan Penunjang Kegiatan ', 'Hand Sanitizer Dettol Gel', '', '', '2023-07-22', 999999),
(386, 9, 1010311999, 'Bahan Penunjang Kegiatan ', 'Hand Sanitizer Onemed Ase', '', '', '2023-07-22', 999999),
(387, 10, 1010311999, 'Bahan Penunjang Kegiatan ', 'Hand Sanitizer Klarens Ca', '', '', '2023-07-22', 999999),
(388, 11, 1010311999, 'Bahan Penunjang Kegiatan ', 'Hand Sanitizer Bio Saniti', '', '', '2023-07-22', 999999),
(389, 12, 1010311999, 'Bahan Penunjang Kegiatan ', 'Sabun Sunlight Jumbo 750 ', '', '', '2023-07-22', 999999),
(390, 13, 1010311999, 'Bahan Penunjang Kegiatan ', 'Sabun Cair Yuri 410 ml', '', '', '2023-07-22', 999999),
(391, 14, 1010311999, 'Bahan Penunjang Kegiatan ', 'Sabun Abu Pencuci Piring ', '', '', '2023-07-22', 999999),
(392, 15, 1010311999, 'Bahan Penunjang Kegiatan ', 'Cairan Pembersih Mr. Musc', '', '', '2023-07-22', 999999),
(393, 16, 1010311999, 'Bahan Penunjang Kegiatan ', 'Magic Cleans Powder Klins', '', '', '2023-07-22', 999999),
(394, 17, 1010311999, 'Bahan Penunjang Kegiatan ', 'Bodas Pembersih Kerak Por', '', '', '2023-07-22', 999999),
(395, 18, 1010311999, 'Bahan Penunjang Kegiatan ', 'Kamper Swallow Twin Ball ', '', '', '2023-07-22', 999999),
(396, 19, 1010311999, 'Bahan Penunjang Kegiatan ', 'Kamper Bagus', '', '', '2023-07-22', 999999),
(397, 20, 1010311999, 'Bahan Penunjang Kegiatan ', 'Kamper Bola Tenis Gantung', '', '', '2023-07-22', 999999),
(398, 21, 1010311999, 'Bahan Penunjang Kegiatan ', 'Kamper Kelereng uk. 300 g', '', '', '2023-07-22', 999999),
(399, 22, 1010311999, 'Bahan Penunjang Kegiatan ', 'Pewangi Mobil Ambipur', '', '', '2023-07-22', 999999),
(400, 23, 1010311999, 'Bahan Penunjang Kegiatan ', 'Bayfresh uk. 320 ml', '', '', '2023-07-22', 999999),
(401, 24, 1010311999, 'Bahan Penunjang Kegiatan ', 'Pengharum Toilet Bebek', '', '', '2023-07-22', 999999),
(402, 25, 1010311999, 'Bahan Penunjang Kegiatan ', 'Kamper Bagus Hanger isi 4', '', '', '2023-07-22', 999999),
(403, 26, 1010311999, 'Bahan Penunjang Kegiatan ', 'Penghilang Bau Mobil Gaja', '', '', '2023-07-22', 999999),
(404, 27, 1010311999, 'Bahan Penunjang Kegiatan ', 'Spiritus Lilin', '', '', '2023-07-22', 999999),
(405, 28, 1010311999, 'Bahan Penunjang Kegiatan ', 'Livi', '', '', '2023-07-22', 999999),
(406, 29, 1010311999, 'Bahan Penunjang Kegiatan ', 'compack', '', '', '2023-07-22', 999999),
(407, 30, 1010311999, 'Bahan Penunjang Kegiatan ', 'Hand Glove', '', '', '2023-07-22', 999999),
(408, 31, 1010311999, 'Bahan Penunjang Kegiatan ', 'Mitu', '', '', '2023-07-22', 999999),
(409, 32, 1010311999, 'Bahan Penunjang Kegiatan ', 'Hygiene Kit', '', '', '2023-07-22', 999999),
(410, 33, 1010311999, 'Bahan Penunjang Kegiatan ', 'Hand Sanitizer Onemed Ase', '', '', '2023-07-22', 999999),
(411, 34, 1010311999, 'Bahan Penunjang Kegiatan ', 'Tiang Bendera Stainless B', '', '', '2023-07-22', 999999),
(412, 35, 1010311999, 'Bahan Penunjang Kegiatan ', 'Tiang Bendera Stainless 2', '', '', '2023-07-22', 999999),
(413, 36, 1010311999, 'Bahan Penunjang Kegiatan ', 'Bendera Meja Uk. 15x20', '', '', '2023-07-22', 999999),
(414, 1, 1010314999, 'Obat Lainnya (Barang Kons', 'Pembasmi Serangga HIT 600', '', '', '2023-07-22', 999999),
(415, 6, 1010601002, 'Cadangan Pangan', 'Kopi Indocoffe Original B', '', '', '2023-07-22', 999999),
(416, 7, 1010601002, 'Cadangan Pangan', 'Max Creamer uk.450 gr', '', '', '2023-07-22', 999999),
(417, 12, 1010601002, 'Cadangan Pangan', 'Kopi Indocoffe Original B', '', '', '2023-07-22', 999999),
(418, 13, 1010601002, 'Cadangan Pangan', 'Gula Rendah Kalori Tropic', '', '', '2023-07-22', 999999),
(419, 14, 1010601002, 'Cadangan Pangan', 'Gula Pasir Merk Gulaku', '', '', '2023-07-22', 999999),
(420, 18, 1010601002, 'Cadangan Pangan', 'Gula pasir stick gulaku i', '', '', '2023-07-22', 999999),
(421, 20, 1010601002, 'Cadangan Pangan', 'Teh celup sariwangi isi 5', '', '', '2023-07-22', 999999),
(422, 22, 1010601002, 'Cadangan Pangan', 'Kopi Arabika Extra Warung', '', '', '2023-07-22', 999999),
(423, 29, 1010601002, 'Cadangan Pangan', 'Creamer Max isi 50 Sachee', '', '', '2023-07-22', 999999),
(424, 30, 1010601002, 'Cadangan Pangan', 'Kopi Kapal Api 165 gr', '', '', '2023-07-22', 999999),
(425, 31, 1010601002, 'Cadangan Pangan', 'Teh Tong Tji Jasmine isi ', '', '', '2023-07-22', 999999),
(426, 32, 1010601002, 'Cadangan Pangan', 'Teh Tong Tji Hijau isi 25', '', '', '2023-07-22', 999999),
(427, 38, 1010601002, 'Cadangan Pangan', 'Teh Tong Tji Lemon dengan', '', '', '2023-07-22', 999999),
(428, 39, 1010601002, 'Cadangan Pangan', 'Teh Tong Tji Melati denga', '', '', '2023-07-22', 999999),
(429, 40, 1010601002, 'Cadangan Pangan', 'Nescafe Gold Premium Mix', '', '', '2023-07-22', 999999),
(430, 41, 1010601002, 'Cadangan Pangan', 'Kopi Kapal Api Special Ta', '', '', '2023-07-22', 999999),
(431, 42, 1010601002, 'Cadangan Pangan', 'Kapsul Dispenser', '', '', '2023-07-22', 999999),
(432, 43, 1010601002, 'Cadangan Pangan', 'Kapsul Robusta Gold', '', '', '2023-07-22', 999999),
(433, 44, 1010601002, 'Cadangan Pangan', 'Kapsul Flores', '', '', '2023-07-22', 999999),
(434, 45, 1010601002, 'Cadangan Pangan', 'Kapsul Mandheling', '', '', '2023-07-22', 999999),
(435, 46, 1010601002, 'Cadangan Pangan', 'Kapsul Toraja', '', '', '2023-07-22', 999999),
(436, 47, 1010601002, 'Cadangan Pangan', 'Kapsul Cafetiero', '', '', '2023-07-22', 999999),
(437, 48, 1010601002, 'Cadangan Pangan', 'Kapsul Espresso', '', '', '2023-07-22', 999999),
(438, 49, 1010601002, 'Cadangan Pangan', 'Kapsul Arabica Gold', '', '', '2023-07-22', 999999),
(439, 50, 1010601002, 'Cadangan Pangan', 'Gula Tropicana Slim isi 5', '', '', '2023-07-22', 999999),
(440, 0, 0, 'nama_kategori', 'nama', 'deskripsi', 0x67616d626172, '2023-07-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cek_stok`
--

CREATE TABLE `tb_cek_stok` (
  `id_cek_stok` int(11) NOT NULL,
  `id_barang` int(25) NOT NULL,
  `jumlah_stok_akhir` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_cek_stok`
--

INSERT INTO `tb_cek_stok` (`id_cek_stok`, `id_barang`, `jumlah_stok_akhir`) VALUES
(1, 15, 73),
(2, 16, 40),
(3, 17, 28);

-- --------------------------------------------------------

--
-- Table structure for table `tb_input_stok`
--

CREATE TABLE `tb_input_stok` (
  `id_input_stok` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(25) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `jumlah_input` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_input_stok`
--

INSERT INTO `tb_input_stok` (`id_input_stok`, `id_user`, `id_barang`, `tgl_pembelian`, `jumlah_input`) VALUES
(504, 100, 15, '2023-10-07', 100),
(505, 100, 15, '2023-07-11', 100),
(506, 100, 16, '2023-07-12', 55),
(507, 100, 17, '2023-07-12', 40);

--
-- Triggers `tb_input_stok`
--
DELIMITER $$
CREATE TRIGGER `update_stok` AFTER INSERT ON `tb_input_stok` FOR EACH ROW BEGIN
    -- Check if id_barang exists in tb_cek_stok
    DECLARE id_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO id_exists FROM tb_cek_stok WHERE id_barang = NEW.id_barang;
    
    IF id_exists = 0 THEN
        -- Insert new id_barang into tb_cek_stok with jumlah_input as initial value
        INSERT INTO tb_cek_stok (id_barang, jumlah_stok_akhir)
        VALUES (NEW.id_barang, NEW.jumlah_input);
    ELSE
        -- Update jumlah_stok_akhir for existing id_barang
        UPDATE tb_cek_stok
        SET jumlah_stok_akhir = jumlah_stok_akhir + NEW.jumlah_input
        WHERE id_barang = NEW.id_barang;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `kode_kategori` int(11) NOT NULL,
  `nama_sub_kategori` varchar(50) NOT NULL,
  `kode_sub_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `kode_kategori`, `nama_sub_kategori`, `kode_sub_kategori`) VALUES
(5000, 'Barang Konsumsi', 117111, 'Alat Tulis', 1010301001),
(5001, 'Barang Konsumsi', 117111, 'Penjepit Kertas', 1010301003),
(5003, 'Barang Konsumsi', 117111, 'Penghapus/Korektor', 1010301004),
(5004, 'Barang Konsumsi', 117111, 'Buku Tulis', 1010301005),
(5005, 'Barang Konsumsi', 117111, 'Ordner Dan Map', 1010301006),
(5006, 'Barang Konsumsi', 117111, 'Penggaris', 1010301007),
(5007, 'Barang Konsumsi', 117111, 'Cutter', 1010301008),
(5008, 'Barang Konsumsi', 117111, 'Pita Mesin Ketik', 1010301009),
(5009, 'Barang Konsumsi', 117111, 'Alat Perekat', 1010301010),
(5010, 'Barang Konsumsi', 117111, 'Alat Tulis Kantor Lainnya', 1010301999),
(5011, 'Barang Konsumsi', 117111, 'Kertas HVS', 1010302001),
(5012, 'Barang Konsumsi', 117111, 'Berbagai Kertas', 1010302002),
(5013, 'Barang Konsumsi', 117111, 'Amplop', 1010302004),
(5014, 'Barang Konsumsi', 117111, 'Kop Surat', 1010302005),
(5015, 'Barang Konsumsi', 117111, 'Plat Cetak', 1010303003),
(5016, 'Barang Konsumsi', 117111, 'Film Cetak', 1010303006),
(5017, 'Barang Konsumsi', 117111, 'USB/Flash Disk', 1010304006),
(5018, 'Barang Konsumsi', 117111, 'Mouse', 1010304010),
(5019, 'Barang Konsumsi', 117111, 'Bahan Komputer Lainnya', 1010304999),
(5020, 'Barang Konsumsi', 117111, 'Kabel Listrik', 1010306001),
(5021, 'Barang Konsumsi', 117111, 'Lampu Listrik', 1010306002),
(5022, 'Barang Konsumsi', 117111, 'Stop Kontak', 1010306003),
(5023, 'Barang Konsumsi', 117111, 'Batu Baterai', 1010306010),
(5024, 'Barang Konsumsi', 117111, 'Alat Listrik Lainnya', 1010306999),
(5025, 'Barang Konsumsi', 117111, 'Perlengkapan Lapangan', 1010307007),
(5026, 'Barang Konsumsi', 117111, 'Meterai', 1010309001),
(5027, 'Barang Konsumsi', 117111, 'Alat Penunjang Kedokteran', 1010310001),
(5028, 'Barang Konsumsi', 117111, 'Alat Penunjang Kegiatan Kantor', 1010310999),
(5029, 'Barang Konsumsi', 117111, 'Bahan Penunjang Kegiatan Kantor', 1010311999),
(5030, 'Barang Konsumsi', 117111, 'Obat Lainnya', 1010314999),
(5031, 'Bahan untuk Pemeliharaan', 117113, 'Pengharum Ruangan', 1010305012),
(5033, 'Bahan Baku', 117131, 'Bahan Kimia Cair', 1010102002),
(5034, 'Suku Cadang', 117114, 'Alat Studio dan Komunikasi', 1010206999),
(5035, 'Persediaan Berjaga', 117191, 'Cadangan Pangan', 1010601002),
(5036, 'Persediaan Lainnya', 117199, 'Obat Lainnya', 1010401999);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_minta` date NOT NULL,
  `tgl_siap` date DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Menunggu',
  `tgl_ambil` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_transaksi`, `id_user`, `tgl_minta`, `tgl_siap`, `status`, `tgl_ambil`) VALUES
(39, 103, '2023-07-11', NULL, 'Menunggu', NULL),
(40, 103, '2023-07-12', NULL, 'Menunggu', NULL),
(41, 103, '2023-07-16', '2023-07-16', 'Siap Diambil', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `id_order_detail` int(25) NOT NULL,
  `id_transaksi` int(25) NOT NULL,
  `id_barang` int(25) NOT NULL,
  `jumlah_minta` int(11) NOT NULL,
  `saldo_persediaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order_detail`
--

INSERT INTO `tb_order_detail` (`id_order_detail`, `id_transaksi`, `id_barang`, `jumlah_minta`, `saldo_persediaan`) VALUES
(44, 39, 15, 7, 0),
(45, 40, 15, 15, 0),
(46, 40, 16, 10, 0),
(47, 40, 17, 12, 0),
(48, 41, 15, 5, 0),
(49, 41, 16, 5, 0);

--
-- Triggers `tb_order_detail`
--
DELIMITER $$
CREATE TRIGGER `update_stok2` AFTER INSERT ON `tb_order_detail` FOR EACH ROW BEGIN
  UPDATE tb_cek_stok
  SET jumlah_stok_akhir = jumlah_stok_akhir - NEW.jumlah_minta
  WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok3` BEFORE INSERT ON `tb_order_detail` FOR EACH ROW BEGIN
  DECLARE saldo_persediaan INT;
  
  -- Menghitung saldo_permintaan
  SELECT jumlah_stok_akhir - NEW.jumlah_minta INTO saldo_persediaan
  FROM tb_cek_stok
  WHERE id_barang = NEW.id_barang;

  -- Update nilai saldo_permintaan pada tb_order_detail
  SET NEW.saldo_persediaan = saldo_persediaan;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipe_akun` text NOT NULL,
  `foto_user` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `nama_lengkap`, `email`, `nip`, `password`, `tipe_akun`, `foto_user`) VALUES
(100, 'supervisor', 'Admin Supervisor', 'adminsupervisor@gmail.com', '0', 'admin', 'supervisor', ''),
(101, 'admin1', 'Admin Gudang ', 'admingudang@gmail.com', '000056787', 'admin', 'admin', ''),
(102, 'zids', 'Muhammad Zidan Satrio', 'm.zidan.satrio@gmail.com', '0', 'xyz123', 'user', ''),
(103, 'davina123', 'Davina', 'davina@gmail.com', '000056783', 'qwerty', 'user', 0x67616d626172),
(104, 'test', 'DDD', 'askdjaslkjd@foiasjdklas', '900', 'test123', 'user', 0x6173736574732f696d672f666f746f70726f66696c2f74657374323032332d30372d32307465732e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_cek_stok`
--
ALTER TABLE `tb_cek_stok`
  ADD PRIMARY KEY (`id_cek_stok`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tb_input_stok`
--
ALTER TABLE `tb_input_stok`
  ADD PRIMARY KEY (`id_input_stok`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`id_order_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `tb_cek_stok`
--
ALTER TABLE `tb_cek_stok`
  MODIFY `id_cek_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_input_stok`
--
ALTER TABLE `tb_input_stok`
  MODIFY `id_input_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=508;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5037;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  MODIFY `id_order_detail` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
