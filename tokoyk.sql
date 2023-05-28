-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 08:04 AM
-- Server version: 10.4.21-MariaDB-log
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoyk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(46, 'Kaos Coding special', 'Salah satu lini pakaian terbaik cotton yang nyaman untuk menemani harimu dan memiliki print desain yang unik.', 'Kaos', 150000, 59, 'kaos1.png'),
(47, 'Relaxed Fit T-shirt', 'Salah satu lini pakaian terbaik cotton yang nyaman untuk menemani harimu dan memiliki print desain yang unik.', 'Kaos', 149000, 14, 'kaos2.png'),
(48, 'Short Sleeve Youth', 'Salah satu lini pakaian terbaik cotton yang nyaman untuk menemani harimu dan memiliki print desain yang unik.', 'Kaos', 149000, 13, 'kaos3.png'),
(51, 'Cotton tshirt', 'Salah satu lini pakaian terbaik cotton yang nyaman untuk menemani harimu dan memiliki print desain yang unik.', 'Kaos', 150000, 18, 'kaos4.png'),
(52, 'Softcase iphone 2', 'Bahan ringan dan kuat • Melalui proses print press, sehingga awet dan tahan lama', 'Softcase', 500000, 17, 's1.png'),
(53, 'Softcase poopy', 'Bahan ringan dan kuat • Melalui proses print press, sehingga awet dan tahan lama', 'Softcase', 500000, 60, 's2.png'),
(54, 'Softcase code', 'Bahan ringan dan kuat • Melalui proses print press, sehingga awet dan tahan lama', 'Softcase', 500000, 18, 's4.png'),
(55, 'sticker v1', 'Bahan PVC Anti air, warna cerah, tidak berbekas jika dilepas', 'Sticker', 300000, 18, 'tic1.png'),
(56, 'Sticker v2', 'Bahan PVC Anti air, warna cerah, tidak berbekas jika dilepas', 'Sticker', 500000, 59, 'tic2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nohp` int(16) NOT NULL,
  `jasa` varchar(10) NOT NULL,
  `pembayaran` varchar(5) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `nohp`, `jasa`, `pembayaran`, `tgl_pesan`, `batas_bayar`) VALUES
(43, 'yanto', 'Pati,Muria Raya', 0, '', '', '2022-02-18 11:25:26', '2022-02-19 11:25:26'),
(44, 'heri', 'pati', 0, '', '', '2022-02-28 12:49:36', '2022-03-01 12:49:36'),
(47, 'ygy', 'Pati,Muria Raya', 0, '', '', '2022-03-04 03:49:23', '2022-03-05 03:49:23'),
(52, 'Dandi Habib', 'Raya Rogoino Street, Ds.Pagerharjo, RT 02 / RW 01', 0, '', '', '2022-03-24 05:22:38', '2022-03-25 05:22:38'),
(53, 'Dandi Habib', 'Raya Rogoino Street, Ds.Pagerharjo, RT 02 / RW 01', 0, '', '', '2022-03-24 05:25:15', '2022-03-25 05:25:15'),
(54, 'Dandi Habib', 'Raya Rogoino Street', 2147483647, 'JNE', 'BCA', '2022-03-24 05:42:05', '2022-03-25 05:42:05'),
(55, 'Dandi Habib', 'Raya Rogoino Street', 6289667, 'JNE', 'BCA', '2022-04-06 08:02:50', '2022-04-07 08:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(14, 20, 44, 'Softcase', 2, 300000, ''),
(15, 21, 41, 'Softcase', 1, 300000, ''),
(16, 27, 44, 'Softcase', 1, 300000, ''),
(17, 30, 41, 'Softcase', 1, 300000, ''),
(18, 32, 44, 'Softcase', 1, 300000, ''),
(19, 34, 1, 'Kaos coding', 1, 150000, ''),
(20, 39, 44, 'Softcase', 1, 300000, ''),
(21, 41, 41, 'Softcase', 1, 300000, ''),
(22, 43, 47, 'Relaxed Fit T-shirt', 1, 1499000, ''),
(23, 44, 48, 'Short Sleeve Youth', 1, 1499000, ''),
(24, 45, 47, 'Relaxed Fit T-shirt', 1, 1499000, ''),
(25, 46, 46, 'Kaos Coding special', 1, 150000, ''),
(26, 47, 47, 'Relaxed Fit T-shirt', 1, 149000, ''),
(27, 47, 52, 'Softcase iphone 2', 1, 500000, ''),
(28, 47, 55, 'sticker v1', 1, 300000, ''),
(29, 48, 48, 'Short Sleeve Youth', 2, 149000, ''),
(30, 51, 48, 'Short Sleeve Youth', 1, 149000, ''),
(31, 51, 51, 'Cotton tshirt', 1, 150000, ''),
(32, 52, 48, 'Short Sleeve Youth', 1, 149000, ''),
(33, 52, 51, 'Cotton tshirt', 1, 150000, ''),
(34, 53, 48, 'Short Sleeve Youth', 1, 149000, ''),
(35, 54, 47, 'Relaxed Fit T-shirt', 1, 149000, ''),
(36, 55, 48, 'Short Sleeve Youth', 1, 149000, ''),
(37, 55, 55, 'sticker v1', 1, 300000, ''),
(38, 55, 56, 'Sticker v2', 1, 500000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg= NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'user', 'user', 'user', 2),
(3, 'yanto', 'yanto soto', '123', 2),
(4, 'ygy', 'ygy', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
