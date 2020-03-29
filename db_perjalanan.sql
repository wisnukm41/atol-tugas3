-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 10:39 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perjalanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `tempat`, `deskripsi`, `gambar`) VALUES
(9, 'Pulau Komodo ', 'Pulau Komodo masuk dalam kawasan Taman Nasional Komodo bersama pulau-pulau lain di sekitar Kepulauan Nusa Tenggara. Pada tahun 1986, UNESCO menetapkan tempat wisata di Indonesia ini sebagai salah satu situs warisan dunia. Pulau ini dianggap sebagai habitat binatang komodo yang wajib dilindungi. Salah satu penghargaan tertinggi yang berhasil diraih adalah berhasil masuk dalam jajaran tujuh kejaiban alam di dunia atau yang lebih dikenal dengan New Seven Wonders of Nature pada tahun 2011.', '378b66260627ba804064.jpg'),
(10, 'Trio Gili ', 'Trio Gili merupakan tiga pulau cantik yang ada di Lombok. Ketiga pulau tersebut antara lain Gili Trawangan, Gili Meno dan Gili Air. Ketiganya tak hanya dikenal oleh wisatawan domestik, tapi juga telah berhasil mengundang banyak wisatawan mancanegara untuk datang.\r\n', 'b5ac49dd9e64fa3ac623.jpg'),
(11, 'Raja Ampat', 'Raja Ampat menjadi primadona baru di dunia pariwisata Indonesia. Pesona tempat wisata di Indonesia ini mulai banyak dikenal baik oleh wisatawan domestik maupun mancanegara. Raja Ampat sendiri merupakan kumpulan dari pulau-pulau di ujung Papua. Ada empat pulau utama di sini, yaitu Waigeo, Misool, Salawati dan Batanta.', '11e2ba9635c76a8db4a7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
