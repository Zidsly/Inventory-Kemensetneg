-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 02:45 PM
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
  `nama_kategori` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` blob DEFAULT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `id_kategori`, `nama_kategori`, `nama`, `deskripsi`, `gambar`, `tgl_masuk`) VALUES
(15, 1, 5000, 'Barang Konsumsi', 'Ballpoint Balliner Merah', '', 0x6173736574732f696d672f62616c6c7061696e74206d657261682e6a7067, '2023-07-10'),
(16, 2, 5001, 'Barang Konsumsi', 'Binder Clip Kenko 107', '', 0x6173736574732f696d672f322e6a706567, '2023-07-12'),
(17, 3, 5003, 'Barang Konsumsi', 'Penghapus Pensil Staedler', '', 0x6173736574732f696d672f612e6a7067, '2023-07-12');

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
(1, 15, 93);

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
(505, 100, 15, '2023-07-11', 100);

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
(5000, 'Konsumsi', 117111, 'Alat Tulis', 1010301001),
(5001, 'Konsumsi', 117111, 'Penjepit Kertas', 1010301003),
(5003, 'Konsumsi', 117111, 'Penghapus/Korektor', 1010301004),
(5004, 'Konsumsi', 117111, 'Buku Tulis', 1010301005),
(5005, 'Konsumsi', 117111, 'Ordner Dan Map', 1010301006),
(5006, 'Konsumsi', 117111, 'Penggaris', 1010301007),
(5007, 'Konsumsi', 117111, 'Cutter', 1010301008),
(5008, 'Konsumsi', 117111, 'Pita Mesin Ketik', 1010301009),
(5009, 'Konsumsi', 117111, 'Alat Perekat', 1010301010),
(5010, 'Konsumsi', 117111, 'Alat Tulis Kantor Lainnya', 1010301999),
(5011, 'Konsumsi', 117111, 'Kertas HVS', 1010302001),
(5012, 'Konsumsi', 117111, 'Berbagai Kertas', 1010302002),
(5013, 'Konsumsi', 117111, 'Amplop', 1010302004),
(5014, 'Konsumsi', 117111, 'Kop Surat', 1010302005),
(5015, 'Konsumsi', 117111, 'Plat Cetak', 1010303003),
(5016, 'Konsumsi', 117111, 'Film Cetak', 1010303006),
(5017, 'Konsumsi', 117111, 'USB/Flash Disk', 1010304006),
(5018, 'Konsumsi', 117111, 'Mouse', 1010304010),
(5019, 'Konsumsi', 117111, 'Bahan Komputer Lainnya', 1010304999),
(5020, 'Konsumsi', 117111, 'Kabel Listrik', 1010306001),
(5021, 'Konsumsi', 117111, 'Lampu Listrik', 1010306002),
(5022, 'Konsumsi', 117111, 'Stop Kontak', 1010306003),
(5023, 'Konsumsi', 117111, 'Batu Baterai', 1010306010),
(5024, 'Konsumsi', 117111, 'Alat Listrik Lainnya', 1010306999),
(5025, 'Konsumsi', 117111, 'Perlengkapan Lapangan', 1010307007),
(5026, 'Konsumsi', 117111, 'Meterai', 1010309001),
(5027, 'Konsumsi', 117111, 'Alat Penunjang Kedokteran', 1010310001),
(5028, 'Konsumsi', 117111, 'Alat Penunjang Kegiatan Kantor', 1010310999),
(5029, 'Konsumsi', 117111, 'Bahan Penunjang Kegiatan Kantor', 1010311999),
(5030, 'Konsumsi', 117111, 'Obat Lainnya', 1010314999),
(5031, 'Pemeliharaan', 117113, 'Pengharum Ruangan', 1010305012),
(5033, 'Bahan Baku', 117131, 'Bahan Kimia Cair', 1010102002),
(5034, 'Suku Cadang', 117114, 'Alat Studio dan Komunikasi', 1010206999),
(5035, 'Penjagaan', 117191, 'Cadangan Pangan', 1010601002),
(5036, 'Lainnya', 117199, 'Obat Lainnya', 1010401999);

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
(39, 103, '2023-07-11', NULL, 'Menunggu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `id_order_detail` int(25) NOT NULL,
  `id_transaksi` int(25) NOT NULL,
  `id_barang` int(25) NOT NULL,
  `jumlah_minta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order_detail`
--

INSERT INTO `tb_order_detail` (`id_order_detail`, `id_transaksi`, `id_barang`, `jumlah_minta`) VALUES
(44, 39, 15, 7);

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
  `tipe_akun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `nama_lengkap`, `email`, `nip`, `password`, `tipe_akun`) VALUES
(100, 'supervisor', 'Admin Supervisor', 'adminsupervisor@gmail.com', '0', 'admin', 'supervisor'),
(101, 'admin1', 'Admin Gudang ', 'admingudang@gmail.com', '000056787', 'admin', 'admin'),
(102, 'zids', 'Muhammad Zidan Satrio', 'm.zidan.satrio@gmail.com', '0', 'xyz123', 'user'),
(103, 'davina123', 'Davina', 'davina@gmail.com', '000056783', 'qwerty', 'user');

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
  MODIFY `id_barang` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_cek_stok`
--
ALTER TABLE `tb_cek_stok`
  MODIFY `id_cek_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_input_stok`
--
ALTER TABLE `tb_input_stok`
  MODIFY `id_input_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5037;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  MODIFY `id_order_detail` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);

--
-- Constraints for table `tb_cek_stok`
--
ALTER TABLE `tb_cek_stok`
  ADD CONSTRAINT `tb_cek_stok_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`);

--
-- Constraints for table `tb_input_stok`
--
ALTER TABLE `tb_input_stok`
  ADD CONSTRAINT `tb_input_stok_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `tb_input_stok_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD CONSTRAINT `tb_order_detail_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_order` (`id_transaksi`),
  ADD CONSTRAINT `tb_order_detail_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
