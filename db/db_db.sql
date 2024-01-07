-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2022 pada 11.13
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(3) NOT NULL,
  `kode_customer` varchar(20) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `alamat_toko` text NOT NULL,
  `no_tlp` varchar(14) NOT NULL,
  `salesman` varchar(25) NOT NULL,
  `type_customer` varchar(20) NOT NULL,
  `foto_toko` text NOT NULL,
  `pemilik` varchar(25) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `kode_customer`, `nama_toko`, `alamat_toko`, `no_tlp`, `salesman`, `type_customer`, `foto_toko`, `pemilik`, `nik`, `tanggal_lahir`, `alamat`, `no_hp`, `status`) VALUES
(1, '1901258', 'TB. Amanda raya', 'Jl. raya sagaranten sukabumi', '08997782575', 'Himat Sulaeman', 'Outlet', './page/gambar/MANFAAT BLACK WALET.jpg', 'Hendri', '3272030909940041', '0000-00-00', 'Sukabumi indonesia', '027753130555', 'Active'),
(2, '1901212', 'TB. Agung Jaya', 'Jl. Muara 1 Pandeglang Banten', '0857234751', 'Edi Aminoto', 'Outlet', './page/gambar/Chrysanthemum.jpg', 'Egi M', '3272032110880021', '0000-00-00', 'Jl. Salabintan No. 15 Sukabumi', '08772324557', 'Active'),
(3, '1901206', 'TB. Sumber Milik', 'Jl. Otto iskandar dinata Kota Sukabumi', '08572347517', 'Edi Aminoto', 'Outlet', './page/gambar/Penguins.jpg', 'Ko Yeni', '3272030909930021', '0000-00-00', 'Jl. Otista Kota Sukabumi', '027753130555', 'Active'),
(4, '1901209', 'TB. Indah Jaya', 'Jl. raya SUkaraja No. 175 Kab. Sukabumi', '0899778547', 'Azis Sutisna', 'Warehouse', './page/gambar/Tulips.jpg', 'Erwin', '3203012328090004', '0000-00-00', 'Jl. pasir halang sukaraja sukabumi', '08587672547', 'Active'),
(5, '1901204', 'PD. Jembar', 'Jl. raya Sukalarang Sukabumi', '08565923447', 'Edi Aminoto', 'Distributor', './page/gambar/Hydrangeas.jpg', 'Hendri', '3202360501830001', '0000-00-00', 'Jl. raya manglid no. 365 sukabumi', '0821434256', 'Active'),
(6, '1901201', 'TB. Jaya Usaha', 'JL. RAYA CIBADAK - CIKIDANG\r\n', '085793921921', 'Himat Sulaeman', 'Outlet', './page/gambar/Desert.jpg', 'H. Asep', '3202061401870001', '0000-00-00', 'Jl. raya Cibadak Sukabumi', '085793921921', 'Active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivery`
--

CREATE TABLE `delivery` (
  `id_delivery` int(3) NOT NULL,
  `tgl_delivery` date NOT NULL,
  `resi_no` varchar(20) NOT NULL,
  `kurir` varchar(50) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `bukti_terima` text NOT NULL,
  `tgl_terima` date NOT NULL,
  `catatan_terima` text NOT NULL,
  `status_delivery` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `delivery`
--

INSERT INTO `delivery` (`id_delivery`, `tgl_delivery`, `resi_no`, `kurir`, `no_polisi`, `bukti_terima`, `tgl_terima`, `catatan_terima`, `status_delivery`) VALUES
(2, '2022-02-13', 'RESI012021', 'Hikmat Sulaeman', 'F8575CDE', 'page/gambar/1.jpg', '2022-02-13', 'Barang sudah diterima dgn baik', 'Telah Diterima'),
(3, '2022-02-13', 'RESI012201', 'Egi M Akbar', 'E8588CA', 'Belum Ada', '0000-00-00', 'Belum Ada', 'New');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(10) NOT NULL,
  `id_propinsi` varchar(2) NOT NULL,
  `nama_kabupaten` varchar(50) NOT NULL,
  `ongkos_kirim` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `id_propinsi`, `nama_kabupaten`, `ongkos_kirim`) VALUES
(1, '1', 'Kabupaten Aceh Barat', 44000),
(2, '1', 'Kabupaten Aceh Barat Daya', 54500),
(3, '1', 'Kabupaten Aceh Besar', 46500),
(4, '1', 'Kabupaten Aceh Jaya', 45000),
(5, '1', 'Kabupaten Aceh Selatan', 55000),
(6, '1', 'Kabupaten Aceh Singkil', 56500),
(7, '1', 'Kabupaten Aceh Tamiang', 52000),
(8, '1', 'Kabupaten Aceh Tengah', 40500),
(9, '1', 'Kabupaten Aceh Tenggara', 55500),
(10, '1', 'Kabupaten Aceh Timur', 52000),
(11, '1', 'Kabupaten Aceh Utara', 40500),
(12, '1', 'Kabupaten Aceh Bener Meriah', 53500),
(13, '1', 'Kabupaten Bireuen', 43500),
(14, '1', 'Kabupaten Gayo Lues', 56500),
(15, '1', 'Kabupaten Nagan Raya', 40500),
(16, '1', 'Kabupaten Pidie', 40500),
(17, '1', 'Kabupaten Pidie Jaya', 40500),
(18, '1', 'Kabupaten Simieule', 58000),
(19, '1', 'Kota Banda Aceh', 24500),
(20, '1', 'Kota Langsa', 36000),
(21, '1', 'Kota Lhokseumawe', 36000),
(22, '1', 'Kota Sabang', 40500),
(23, '1', 'Kota Subulussalam', 36000),
(24, '2', 'Kabupaten Asahan', 32000),
(25, '2', 'Kabupaten Batu Bara', 25500),
(26, '2', 'Kabupaten Dairi', 46500),
(27, '2', 'Kabupaten Deli Serdang', 29000),
(28, '2', 'Kabupaten Humbang Hasundutan', 58000),
(29, '2', 'Kabupaten Karo', 32000),
(30, '2', 'Kabupaten Labuhanbatu', 40500),
(31, '2', 'Kabupaten Samosir', 43500),
(32, '2', 'Kabupaten Serdang Bedagai', 28000),
(33, '2', 'Kabupaten Langkat', 29000),
(34, '8', 'Kabupaten Lebak', 13000),
(35, '8', 'Kabupaten Pandeglang', 11000),
(36, '8', 'Kabupaten Serang', 9000),
(37, '8', 'Kabupaten Tangerang', 5000),
(38, '8', 'Kota Cilegon', 5000),
(39, '8', 'Kota Serang', 7000),
(40, '8', 'Kota Tangerang', 5000),
(41, '8', 'Kota Tangerang Selatan', 5000),
(42, '10', 'Kabupaten Bandung', 10000),
(43, '10', 'Kabupaten Bandung Barat', 10000),
(44, '10', 'Kabupaten Bekasi', 8000),
(45, '10', 'Kabupaten Ciamis', 12000),
(46, '10', 'Kabupaten Bogor', 8000),
(47, '10', 'Kabupaten Cianjur', 13000),
(48, '10', 'Kabupaten Cirebon', 13000),
(49, '10', 'Kabupaten Garut', 11000),
(50, '10', 'Kabupaten Indramayu', 12000),
(51, '10', 'Kabupaten Karawang', 7000),
(52, '10', 'Kabupaten Kuningan', 10500),
(53, '10', 'Kabupaten Majalengka', 10500),
(54, '10', 'Kabupaten Pangandaran', 12000),
(55, '10', 'Kabupaten Purwakarta', 9500),
(56, '10', 'Kabupaten Subang', 10500),
(57, '10', 'Kabupaten Sukabumi', 8500),
(58, '10', 'Kabupaten Sumedang', 12000),
(59, '10', 'Kabupaten Tasikmalaya', 12000),
(60, '10', 'Kota Bandung', 8000),
(61, '10', 'Kota Banjar', 12000),
(62, '10', 'Kota Bogor', 4500),
(63, '10', 'Kota Cimahi', 8000),
(64, '10', 'Kota Cirebon', 7000),
(65, '10', 'Kota Depok', 4500),
(66, '10', 'Kota Sukabumi', 6000),
(67, '10', 'Kota Tasikmalaya', 9000),
(68, '10', 'Kabupaten Purwakarta', 12000),
(69, '9', 'Kepulauan Seribu', 8000),
(70, '9', 'Jakarta Barat', 8000),
(71, '9', 'Jakarta Pusat', 8000),
(72, '9', 'Jakarta Selatan', 8000),
(73, '9', 'Jakarta Timur', 8000),
(74, '9', 'Jakarta Utara', 8000),
(75, '11', 'Kabupaten Banjarnegara', 15000),
(76, '11', 'Kabupaten Banyumas', 15000),
(77, '11', 'Kabupaten Batang', 15000),
(78, '11', 'Kabupaten Blora', 18500),
(79, '11', 'Kabupaten Boyolali', 17000),
(80, '11', 'Kabupaten Brebes', 18500),
(81, '11', 'Kabupaten Cilacap', 14000),
(82, '11', 'Kabupaten Demak', 17500),
(83, '11', 'Kabupaten Grobogan', 17500),
(84, '11', 'Kabupaten Jepara', 17500),
(85, '11', 'Kabupaten Karanganyar', 15000),
(86, '11', 'Kabupaten Kebumen', 16500),
(87, '11', 'Kabupaten Kendal', 13000),
(88, '11', 'Kabupaten Klaten', 17000),
(89, '11', 'Kabupaten Kudus', 17500),
(90, '11', 'Kabupaten Magelang', 12000),
(91, '11', 'Kabupaten Pati', 17500),
(92, '11', 'Kabupaten Pekalongan', 17500),
(93, '11', 'Kabupaten Pemalang', 16500),
(94, '11', 'Kabupaten Purbalingga', 16500),
(95, '11', 'Kabupaten Purwerejo', 16500),
(96, '11', 'Kabupaten Rembang', 20000),
(97, '11', 'Kabupaten Semarang', 12000),
(98, '11', 'Kabupaten Sragen', 17000),
(99, '11', 'Kabupaten Sukoharjo', 17000),
(100, '11', 'Kabupaten Tegal', 18000),
(101, '11', 'Kabupaten Temanggung', 16500),
(102, '11', 'Kabupaten Wonogiri', 17500),
(103, '11', 'Kabupaten Wonosobo', 16500),
(104, '11', 'Kota Magelang', 11000),
(105, '11', 'Kota Pekalongan', 14000),
(106, '11', 'Kota Salatiga', 9500),
(107, '11', 'Kota Semarang', 8000),
(108, '11', 'Kota Surakarta', 9000),
(109, '11', 'Kota Tegal', 14000),
(110, '11', 'Kabupaten Bantul', 11000),
(111, '11', 'Kabupaten Gunung Kidul', 17000),
(112, '11', 'Kabupaten Kulen Progo', 14500),
(113, '11', 'Kabupaten Sleman', 13000),
(114, '11', 'Kota Jogjakarta', 8000),
(115, '12', 'Kabupaten Bangkalan', 35500),
(116, '12', 'Kabupaten Banyuwangi', 25000),
(117, '12', 'Kabupaten Blitar', 23500),
(118, '12', 'Kabupaten Bojonegoro', 20000),
(119, '12', 'Kabupaten Bondowoso', 26000),
(120, '12', 'Kabupaten Gresik', 15000),
(121, '12', 'Kabupaten Jember', 20500),
(122, '12', 'Kabupaten Jombang', 17500),
(123, '12', 'Kabupaten Kediri', 17500),
(124, '12', 'Kabupaten Lamongan', 17500),
(125, '12', 'Kabupaten Lumajang', 23500),
(126, '12', 'Kabupaten Madiiun', 14000),
(127, '12', 'Kabupaten Magetan', 20000),
(128, '12', 'Kabupaten Malang', 18500),
(129, '12', 'Kabupaten Mojokerto', 14000),
(130, '12', 'Kabupaten Nganjuk', 21000),
(131, '12', 'Kabupaten Ngawi', 20000),
(132, '12', 'Kabupaten Pacitan', 29000),
(133, '12', 'Kabupaten Pamengkasan', 33500),
(134, '12', 'Kabupaten Pasuruan', 20500),
(135, '12', 'Kabupaten Ponorogo', 19000),
(136, '12', 'Kabupaten Probolinggo', 20500),
(137, '12', 'Kabupaten Sampang', 37500),
(138, '12', 'Kabupaten Sidoarjo', 14000),
(139, '12', 'Kabupaten Situbondo', 23500),
(140, '12', 'Kabupaten Sumenep', 29000),
(141, '12', 'Kabupaten Trenggalek', 26000),
(142, '12', 'Kabupaten Tuban', 21500),
(143, '12', 'Kabupaten Tulungagung', 23500),
(144, '12', 'Kota Batu', 17000),
(145, '12', 'Kota Blitar', 18500),
(146, '12', 'Kota Kediri', 14000),
(147, '12', 'Kota Madiun', 12000),
(148, '12', 'Kota Malang', 14000),
(149, '12', 'Kota Mojokerto', 11500),
(150, '12', 'Kota Pasuruan', 16000),
(151, '12', 'Kota Probolinggo', 15500),
(152, '12', 'Kota Surabaya', 10000),
(153, '21', 'Kabupaten Asmat', 127000),
(154, '21', 'Kabupaten Biak Numfor', 127000),
(155, '21', 'Kabupaten Boven Digoel', 127000),
(156, '21', 'Kabupaten Deiyai', 127000),
(157, '21', 'Kabupaten Dogiyai', 127000),
(158, '21', 'Kabupaten Intan Jaya', 127000),
(159, '21', 'Kabupaten Jayapura', 86500),
(160, '21', 'Kabupaten Jayawijaya', 127000),
(161, '21', 'Kabupaten Keerom', 127000),
(162, '21', 'Kabupaten Kepulauan Yapen', 127000),
(163, '21', 'Kabupaten Lanny Jaya', 127000),
(164, '21', 'Kabupaten Mamberamo Raya', 127000),
(165, '21', 'Kabupaten Mamberamo Tengah', 127000),
(166, '21', 'Kabupaten Mappi', 127000),
(167, '21', 'Kabupaten Merauke', 127000),
(168, '21', 'Kabupaten Mimika', 127000),
(169, '21', 'Kabupaten Nabire', 127000),
(170, '21', 'Kabupaten Nduga', 127000),
(171, '21', 'Kabupaten Pinai', 127000),
(172, '21', 'Kabupaten Pegunungan Bintang', 127000),
(173, '21', 'Kabupaten Puncak', 127000),
(174, '21', 'Kabupaten Puncak Jaya', 127000),
(175, '21', 'Kabupaten Sarmi', 127000),
(176, '21', 'Kabupaten Supiori', 127000),
(177, '21', 'Kabupaten Tolikara', 127000),
(178, '21', 'Kabupaten Waropen', 127000),
(179, '21', 'Kabupaten Yahukimo', 127000),
(180, '21', 'Kabupaten Yalimo', 127000),
(181, '21', 'Kota Jayapura', 70000),
(182, '21', 'Kabupaten Fakfak', 127000),
(183, '21', 'Kabupaten Kaimana', 127000),
(184, '21', 'Kabupaten Manokwari', 127000),
(185, '21', 'Kabupaten Manokwari Selatan', 127000),
(186, '21', 'Kabupaten Maybrat', 127000),
(187, '21', 'Kabupaten Pegunungan Arfak', 127000),
(188, '21', 'Kabupaten Raja Ampat', 127000),
(189, '21', 'Kabupaten Sorong', 127000),
(190, '21', 'Kabupaten Sorong Selatan', 127000),
(191, '21', 'Kabupaten Tambrauw', 127000),
(192, '21', 'Kabupaten Teluk Bintuni', 127000),
(193, '21', 'Kabupaten Teluk Wondama', 127000),
(194, '21', 'Kota Sorong', 63500),
(195, '15', 'Kabupaten Buru', 82000),
(196, '15', 'Kabupaten Buru Selatan', 82000),
(197, '15', 'Kabupaten Kepulauan Aru', 86500),
(198, '15', 'Kabupaten Maluku Tengah', 72000),
(199, '15', 'Kabupaten Maluku Tenggara', 75000),
(200, '15', 'Kabupaten Maluku Tenggara Barat', 75000),
(201, '15', 'Kabupaten Seram Bagian Barat', 81000),
(202, '15', 'Kabupaten Seram Bagian Timur', 81000),
(203, '15', 'Kota Ambon', 40500),
(204, '15', 'Kota Tual', 58000),
(205, '15', 'Kabupaten Halmahera Barat', 58000),
(206, '15', 'Kabupaten Halmahera Tengah', 66000),
(207, '15', 'Kabupaten Halmahera Utara', 58000),
(208, '15', 'Kabupaten Halmahera Selatan', 63500),
(209, '15', 'Kabupaten Kepulauan Sula', 66000),
(210, '15', 'Kabupaten Halmahera Timur', 51000),
(211, '15', 'Kabupaten Pulau Morotai', 66000),
(212, '15', 'Kabupaten Pulau Taliabu', 66000),
(213, '15', 'Kota Ternate', 46500),
(214, '15', 'Kota Tidore Kepulauan', 53000),
(215, '13', 'Kabupaten Badung', 23500),
(216, '13', 'Kabuoaten Bangli', 24000),
(217, '13', 'Kabupaten Buleleng', 27500),
(218, '13', 'Kabupaten Gianyar', 23500),
(219, '13', 'Kabupaten Jembrana', 35000),
(220, '13', 'Kabupaten Karangasem', 30500),
(221, '13', 'Kabupaten Klungkung', 23500),
(222, '13', 'Kabupaten Tabana', 27500),
(223, '13', 'Kota Denpasar', 13000),
(224, '14', 'Kabupaten Bima', 37000),
(225, '14', 'Kabupaten Dompu', 37000),
(226, '14', 'Kabupaten Lombok Barat', 26000),
(227, '14', 'Kabupaten Lombok Tengah', 26500),
(228, '14', 'Kabupaten Lombok Timur', 26500),
(229, '14', 'Kabupaten Lombok Utara', 26500),
(230, '14', 'Kabuopaten Sumbawa', 37000),
(231, '14', 'Kabupaten Sumbawa Barat', 37000),
(232, '14', 'Kota Bima', 25500),
(233, '14', 'Kota Mataram', 17500),
(234, '14', 'Kabuoaten Alor', 51000),
(235, '14', 'Kabupaten Belu', 76000),
(236, '14', 'Kabupaten Ende', 76000),
(237, '14', 'Kabupaten Flores Timur', 76000),
(238, '14', 'Kabupaten Kupang', 41500),
(239, '14', 'Kabupaten Lembata', 65000),
(240, '14', 'Kabupaten Malaka', 65000),
(241, '14', 'Kabupaten Manggarai', 63500),
(242, '14', 'Kabupaten Manggarai Barat', 76000),
(243, '14', 'Kabupaten Manggarai Timur', 76000),
(244, '14', 'Kabupaten Ngada', 76000),
(245, '14', 'Kabupaten Ngakeo', 76000),
(246, '14', 'Kabupaten Rote Ndao', 76000),
(247, '14', 'Kabupaten Sikka', 76000),
(248, '14', 'Kabupaten Sumba Barat', 81500),
(249, '14', 'Kabupaten Sumba Barat Daya', 78500),
(250, '14', 'Kabupaten Sumba Tengah', 78500),
(251, '14', 'Kabupaten Sumba Timur', 81000),
(252, '14', 'Kabupaten Timor Tengah Selatan', 76000),
(253, '14', 'Kabupaten Timor Tengah Utara', 58000),
(254, '14', 'Kota Kupang', 37000),
(255, '16', 'Kabupaten Bengkayang', 38000),
(256, '16', 'Kabupaten  Kapuas Hulu', 55500),
(257, '3', 'Kabupaten Agam', 35000),
(258, '3', 'Kabupaten Dharmasraya', 42000),
(259, '3', 'Kabupaten Kepulauan Mentawai', 43500),
(260, '3', 'Kabupaten Lima Puluh Kota', 28000),
(261, '3', 'Kabupaten Pariaman', 25500),
(262, '3', 'Kabupaten Pasaman', 34000),
(263, '3', 'Kabupaten Pasaman Barat', 32500),
(264, '3', 'Kabupaten Pesisir Selatan', 29000),
(265, '3', 'Kabupaten Sijunjung', 35000),
(266, '3', 'Kabupaten Solok', 25500),
(267, '3', 'Kabupaten Solok Selatan', 35000),
(268, '3', 'Kabupaten Tanah Datar', 22000),
(269, '3', 'Kota Bukittinggi', 21500),
(270, '3', 'Kota Padang', 14500),
(271, '3', 'Kota Padangpanjang', 20500),
(272, '3', 'Kota Pariaman', 20500),
(273, '3', 'Kota Payakumbuh', 20500),
(274, '3', 'Kota Sawahlunto', 17000),
(275, '3', 'Kota Solok', 20500),
(276, '4', 'Kabupaten Bengkalis', 30500),
(277, '4', 'Kabupaten Indragiri Hilir', 33500),
(278, '4', 'Kabupaten Indragiri Hulu', 32000),
(279, '4', 'Kabupaten Kampar', 32000),
(280, '3', 'Kabupaten Kepulauan Meranti', 30500),
(281, '4', 'Kabupaten Kuantan Singingi', 33500),
(282, '4', 'Kabupaten Pelalawan', 26000),
(283, '4', 'Kabupaten Rokan Hilir', 33000),
(284, '4', 'Kabupaten Rokan Hulu', 30500),
(285, '4', 'Kabupaten Siak', 32000),
(286, '4', 'Kota Dumai', 25000),
(287, '4', 'Kota Pekanbaru', 14500),
(288, '4', 'Kabupaten Bintan', 55000),
(289, '4', 'Kabupaten Karimun', 46500),
(290, '4', 'Kabupaten Lingga', 55000),
(291, '4', 'Kabupaten Natuna', 48500),
(292, '4', 'Kota Batam', 17000),
(293, '4', 'Kota Tanjung Pinang', 25000),
(294, '28', 'Kabupaten Batanghari', 28000),
(295, '28', 'Kabupaten Bungo', 28000),
(296, '28', 'Kabupaten Kerinci', 28000),
(297, '28', 'Kabupaten Merangin', 28000),
(298, '28', 'Kabupaten Muaro Jambi', 39500),
(299, '28', 'Kabupaten Sarolangun', 28000),
(300, '28', 'Kabupaten Tanjung Jabung Barat', 26000),
(301, '28', 'Kabupaten Tanjung Jabung Timur', 39500),
(302, '28', 'Kabupaten Tebo', 28000),
(303, '28', 'Kota Jambi', 14500),
(304, '5', 'Kabupaten Bengkulu Selatan', 29000),
(305, '5', 'Kabupaten Bengkulu Tengah', 25000),
(306, '5', 'Kabupaten Bengkulu Utara', 25000),
(307, '5', 'Kabupaten Kaur', 36500),
(308, '5', 'Kabupaten Kepahiang', 29000),
(309, '5', 'Kabupaten Lebong', 30000),
(310, '5', 'Kabupaten Mukomuko', 36500),
(311, '5', 'Kabupaten Rejang Lebong', 29000),
(312, '5', 'Kabupaten Seluma', 29000),
(313, '5', 'Kota Bengkulu', 13500),
(314, '6', 'Kabupaten Banyuasin', 28000),
(315, '6', 'Kabupaten Empat Lawang', 42000),
(316, '6', 'Kabupaten Lahat', 31500),
(317, '6', 'Kabupaten Muara Enim', 30500),
(318, '6', 'Kabupaten Musi Banyu Asin', 30000),
(319, '6', 'Kabupaten Musi Rawas', 29500),
(320, '6', 'Kabupaten Ogan Komering Ilir', 23500),
(321, '6', 'Kabupaten Ogan Komering Ulu', 29000),
(322, '6', 'Kabupaten Ogan Komering Ulu Selatan', 36500),
(323, '6', 'Kabupaten Ogan Komering Ulu Timur', 35000),
(324, '6', 'Kota Lubuklinggau', 24500),
(325, '6', 'Kota Pagar Alam', 30000),
(326, '6', 'Kota Palembang', 14500),
(327, '6', 'Kota Prabumulih', 24000),
(328, '29', 'Kabupaten Bangka', 23500),
(329, '29', 'Kabupaten Bangka Barat', 30000),
(330, '29', 'Kabupaten Bangka Selatan', 30000),
(331, '29', 'Kabupaten Bangka Tengah', 28000),
(332, '29', 'Kabupaten Belitung', 17500),
(333, '29', 'Kabupaten Belitung Timur', 25500),
(334, '29', 'Kota Pangkal Pinang', 13500),
(335, '7', 'Kabupaten Lampung Tengah', 22000),
(336, '7', 'Kabupaten Lampung Utara', 23500),
(337, '7', 'Kabupaten Lampung Selatan', 23500),
(338, '7', 'Kabupaten Lampung Barat', 36000),
(339, '7', 'Kabupaten Lampung Timur', 23500),
(340, '7', 'Kabupaten Mesuji', 25000),
(341, '7', 'Kabupaten Pesawaran', 39500),
(342, '7', 'Kabupaten Pesisir Barat', 39500),
(343, '7', 'Kabupaten Pringsewu', 39500),
(344, '7', 'Kabupaten Tulang Bawang', 39500),
(345, '7', 'Kabupaten Tulang Bawang Barat', 39500),
(346, '7', 'Kabupaten Tanggamus', 25500),
(347, '7', 'Kabupaten Way Kanan', 39500),
(348, '7', 'Kota Bandar Lampung', 90000),
(349, '7', 'Kota Metro', 17500),
(350, '27', 'Kabupaten Boalemo', 66000),
(351, '27', 'Kabupaten Bone Bolango', 49500),
(352, '27', 'Kabupaten Gorontalo', 58000),
(353, '27', 'Kabupaten Gorontalo', 55500),
(354, '27', 'Kabupaten Pohuwalo', 45000),
(355, '27', 'Kota Gorontalo', 35000),
(356, '23', 'Kabupaten Bantaeng', 48500),
(357, '23', 'Kabupatten Barru', 45000),
(358, '23', 'Kabupaten Bone', 52000),
(359, '23', 'Kabupaten Bulukumba', 41500),
(360, '23', 'Kabupaten Enrekang', 41500),
(361, '23', 'Kabupaten Goa', 38000),
(362, '23', 'Kabupaten Janeponto', 44000),
(363, '23', 'Kabupaten Kepulauan Selayar', 45000),
(364, '23', 'Kabupaten Jeneponto', 44000),
(365, '23', 'Kabupaten Luwu Timur', 60000),
(366, '24', 'Kabupaten Luwu Utara', 60000),
(367, '23', 'Kabupaten Maros', 37000),
(368, '23', 'Kabupaten Pangkajene dan Kepulauan', 64500),
(369, '23', 'Kabupaten Pinrang', 48500),
(370, '23', 'Kabupaten Sindereng Rappang', 48500),
(371, '23', 'Kabupaten Sinjai', 47500),
(372, '23', 'Kabupaten Soppeng', 49500),
(373, '23', 'Kabupaten Tana Toraja', 43000),
(374, '23', 'Kabupaten Toraja Utara', 43000),
(375, '23', 'Kabupaten Takalar', 30000),
(376, '23', 'Kabupaten Wajo', 43000),
(377, '23', 'Kota Makassar', 22500),
(378, '23', 'Kota Palopo', 35000),
(379, '23', 'Kota Parepare', 38000),
(380, '25', 'Kabupaten Bombana', 62500),
(381, '25', 'Kabupaten Buton', 62500),
(382, '25', 'Kabupaten Buton Utara', 62500),
(383, '25', 'Kabupaten Kolaka', 62500),
(384, '25', 'Kabupaten Kolaka Timur', 66000),
(385, '25', 'Kabupaten Kolaka Utara', 66000),
(386, '25', 'Kabupaten Konawe', 62500),
(387, '25', 'Kabupaten Konawe Kepulauan', 62500),
(388, '25', 'Kabupaten Konawe Selatan', 61000),
(389, '25', 'Kabupaten Konawe Utara', 61000),
(390, '25', 'Kabupaten Muna', 62500),
(391, '25', 'Kabupaten Wakatobi', 59000),
(392, '25', 'Kota Baubau', 47500),
(393, '25', 'Kota Kendari', 31500),
(394, '20', 'Kabupaten Bulungan', 58000),
(395, '20', 'Kabupaten Malinau', 58000),
(396, '20', 'Kabupaten Nunukan', 58000),
(397, '20', 'Kabupaten Tana Tidung', 54000),
(398, '20', 'Kota Tarakan', 37000),
(399, '19', 'Kabupaten Berau', 61000),
(400, '19', 'Kabupaten Kutai Barat', 58000),
(401, '19', 'Kabupaten Kutai Kartanegara', 51000),
(402, '19', 'Kabupaten Kutai Timur', 52000),
(403, '19', 'Kabupaten Bulungan', 58000),
(404, '19', 'Kabupaten Paser', 60000),
(405, '19', 'Kabupaten Penajam Paser Utara', 60000),
(406, '19', 'Kota Balikpapan', 26500),
(407, '19', 'Kota Bontang', 35000),
(408, '19', 'Kota Samarinda', 40500),
(409, '16', 'Kabupaten Kayong Utara', 41500),
(410, '16', 'Kabupaten Ketapang', 41500),
(411, '16', 'Kabupaten Kubu Raya', 44000),
(412, '16', 'Kabupaten Landak', 40500),
(413, '16', 'Kabupaten Melawi', 45000),
(414, '16', 'Kabupaten Pontianak', 35000),
(415, '16', 'Kabupaten Sambas', 40500),
(416, '16', 'Kabupaten Saggau', 41000),
(417, '16', 'Kabupaten Sekadau', 41000),
(418, '16', 'Kabupaten Sintang', 44000),
(419, '16', 'Kota Pontianak', 35000),
(420, '16', 'Kota Singkawang', 26500),
(421, '17', 'Kabupaten Balangan', 53000),
(422, '17', 'Kabupaten Banjar', 31500),
(423, '17', 'Kabupaten Barito Kuala', 39500),
(424, '17', 'Kabupaten Hulu Sungai Selatan', 36500),
(425, '17', 'Kabupaten Hulu Sungai Tengah', 36000),
(426, '17', 'Kabupaten Kotabaru', 48500),
(427, '17', 'Kabupaten Hulu Sungai Utara', 36500),
(428, '17', 'Kabupaten Tabalong', 41500),
(429, '17', 'Kabupaten Tanah Laut', 37000),
(430, '17', 'Kabupaten Tapin', 41500),
(431, '17', 'Kota Banjarbaru', 23500),
(432, '17', 'Kota Banjarmasin', 23500),
(433, '18', 'Kabupaten Barito Selatan', 47500),
(434, '18', 'Kabupaten Barito Timur', 56500),
(435, '18', 'Kabupaten Barito Utara', 45000),
(436, '18', 'Kabupaten Gunung Mas', 62500),
(437, '18', 'Kabupaten Kapuas', 51000),
(438, '18', 'Kabupaten Katingan', 38000),
(439, '18', 'Kabupaten Kotawaringin Barat', 40500),
(440, '18', 'Kabupaten Kotawaringin Timur', 44000),
(441, '18', 'Kabupaten Lamandau', 56500),
(442, '18', 'Kabupaten Murung Raya', 54500),
(443, '17', 'Kabupaten Pulang Pisau', 58000),
(444, '18', 'Kabupaten Sukamara', 58500),
(445, '18', 'Kabupaten Seruyan', 58500),
(446, '18', 'Kota Palangkaraya', 20000),
(447, '2', 'Kabupaten Mandailing Natal', 43500),
(448, '2', 'Kabupaten Nias', 58000),
(449, '2', 'Kabupaten Nias Selatan', 58000),
(450, '2', 'Kabupaten Padang Lawas', 35000),
(451, '2', ' Kabupaten Padang Lawas Utara', 55500),
(452, '2', 'Kabupaten Pakpak Barat', 43500),
(453, '2', 'Kabupaten Simalungun', 32000),
(454, '2', 'Kabupaten Tapanuli Selatan', 35000),
(455, '2', 'Kabupaten Tapanuli Tengah', 37500),
(456, '2', 'Kabupaten Tapanuli Utara', 43500),
(457, '2', 'Kabupaten Toba Samosir', 49000),
(458, '2', 'Kota Binjay', 23500),
(459, '2', 'Kota Medan', 20000),
(460, '2', 'Kota Padang Sidempuan', 25500),
(461, '2', 'Kota Pemantangsiantar', 25500),
(462, '2', 'Kota Sibolga', 30000),
(463, '2', 'Kota Tanjungbalai', 28000),
(464, '2', 'Kota Tebing Tinggi', 29000),
(465, '6', 'Kabupaten Ogan Ilir', 29500),
(466, '10', 'Kota Bekasi', 4500),
(467, '16', 'Kabupaten Kubu Raya', 44000),
(468, '19', 'Kabupaten Malinau', 58000),
(469, '19', 'Kabupaten Nunukan', 58000),
(470, '19', 'Kabupaten Tana Tidung', 54000),
(475, '', 'kota', 9000),
(476, '', 'alief', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(30) NOT NULL,
  `layanan` varchar(30) NOT NULL,
  `biaya_paket` int(11) NOT NULL,
  `estimasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `layanan`, `biaya_paket`, `estimasi`) VALUES
(0, 'YES*', 13000, '1 Hari'),
(3, 'REGULAR', 20000, '2 - 3 Hari'),
(5, 'YES', 15000, '1-2 Hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `stok` int(5) NOT NULL,
  `Harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `ukuran`, `stok`, `Harga`) VALUES
(1, 'Dracaena Fragrans', '3x4m', 25, 75000),
(2, 'Dracaena Samderiana', '2x2m', 33, 55000),
(3, 'Sansevieria Trifasciata Laurenti', '2x4m', 32, 85000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `propinsi`
--

CREATE TABLE `propinsi` (
  `id_propinsi` int(5) NOT NULL,
  `nama_propinsi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `propinsi`
--

INSERT INTO `propinsi` (`id_propinsi`, `nama_propinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatra Utara'),
(3, 'Sumatra Barat'),
(4, 'Riau dan Kepulauan Riau'),
(5, 'Bengkulu'),
(6, 'Sumatra Selatan'),
(7, 'Lampung'),
(8, 'Banten'),
(9, 'DKI Jakarta'),
(10, 'Jawa Barat'),
(11, 'Jawa Tengah dan Jogjakarta'),
(12, 'Jawa Timur dan Madura'),
(13, 'Bali'),
(14, 'NTB dan NTT'),
(15, 'Maluku'),
(16, 'Kalimantan Barat'),
(17, 'Kalimantan Selatan'),
(18, 'Kalimantan Tengah'),
(19, 'Kalimantan Timur'),
(20, 'Kalimantan Utara'),
(21, 'Papua dan Papua Barat'),
(22, 'Sulawesi Barat'),
(23, 'Sulawesi Selatan'),
(24, 'Sulawesi Tengah'),
(25, 'Sulawesi Tenggara'),
(26, 'Sulawesi Utara'),
(27, 'Gorontalo'),
(28, 'Jambi'),
(29, 'Kepulauan Bangka Belitung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_order`
--

CREATE TABLE `sales_order` (
  `id_order` int(5) NOT NULL,
  `no_so` varchar(25) NOT NULL,
  `customer_id` int(4) NOT NULL,
  `tgl_so` date NOT NULL,
  `tgl_kirim` date NOT NULL,
  `produk` varchar(50) NOT NULL,
  `qty` int(4) NOT NULL,
  `top` int(2) NOT NULL,
  `salesman` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sales_order`
--

INSERT INTO `sales_order` (`id_order`, `no_so`, `customer_id`, `tgl_so`, `tgl_kirim`, `produk`, `qty`, `top`, `salesman`, `status`) VALUES
(1, 'AO03203759', 1, '2019-05-09', '2019-05-09', '2', 2, 30, '2', 'approved'),
(2, 'AO03203759', 1, '2019-05-09', '2019-05-09', '3', 3, 30, '2', 'approved'),
(3, 'SO06352652', 2, '2019-05-09', '2019-05-09', '1', 1, 14, '2', 'approved'),
(4, 'SO06352652', 2, '2019-05-09', '2019-05-09', '2', 2, 14, '2', 'approved'),
(5, 'SO06352652', 2, '2019-05-09', '2019-05-09', '3', 3, 14, '2', 'approved'),
(6, 'SO32892478', 5, '2019-05-15', '2019-05-17', '2', 2, 30, '3', 'approved'),
(7, 'SO32892478', 5, '2019-05-15', '2019-05-17', '1', 1, 30, '3', 'approved'),
(8, 'SO88171800', 4, '2019-05-15', '2019-05-16', '1', 4, 30, '4', 'waiting approval'),
(9, 'SO88171800', 4, '2019-05-15', '2019-05-16', '2', 3, 30, '4', 'waiting approval'),
(10, 'SO88171800', 4, '2019-05-15', '2019-05-16', '3', 1, 30, '4', 'waiting approval');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(5) NOT NULL,
  `tgl_input` date NOT NULL,
  `no_resi` varchar(10) NOT NULL,
  `nama_pengirim` varchar(20) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `jenis_barang` varchar(150) NOT NULL,
  `layanan_id` varchar(225) NOT NULL,
  `berat` int(5) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota_kab` varchar(50) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `tlp_penerima` varchar(15) NOT NULL,
  `catatan` text NOT NULL,
  `tgl_kirim` date NOT NULL,
  `status_kirim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `tgl_input`, `no_resi`, `nama_pengirim`, `alamat_pengirim`, `no_tlp`, `jenis_barang`, `layanan_id`, `berat`, `penerima`, `provinsi`, `kota_kab`, `alamat_penerima`, `tlp_penerima`, `catatan`, `tgl_kirim`, `status_kirim`) VALUES
(1, '2022-02-04', 'RESI012021', 'riyan', 'sukaraja', '085678246376', 'baju', '20000', 4, 'rival', '10', '47', 'cipanas', '087346712346', 'barang tidak boleh di banting', '2022-02-04', 'Telah Diterima'),
(8, '2022-02-13', 'RESI012201', 'Yudah SYahrizal', 'Jl. Pemuda gg, pesantren no 15 rt 04/07 tipar citamiang kota sukabumi', '085722604243', 'Lemari Besi', '20000', 16, 'Rival', '10', '66', 'Jl. Pemuda gg, pesantren no 15 rt 04/07 tipar citamiang kota sukabumi', '081928745542', 'KIRIM SECEPAT NYA', '2022-02-15', 'Dalam Perjalanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Nip` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `Nama`, `Nip`, `Password`, `email`, `Status`) VALUES
(1, 'Asep Aeng', '13140010', 'Asep01', 'asepab@yahoo.co.id', 'Manager'),
(2, 'Rival', '13170041', 'Rival1', 'muhammadrival666@gmail.com', 'Admin'),
(3, 'Hikmat Sulaeman', '13202207', 'Hikmat1', 'hikmat@gmail.com', 'Kurir'),
(4, 'Egi M Akbar', '13222220', 'egi01', 'egim1212@gmail.com', 'Kurir'),
(5, 'Rival', '132202110', 'admin', 'admin@gmail.com', 'Logistic');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id_delivery`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `propinsi`
--
ALTER TABLE `propinsi`
  ADD PRIMARY KEY (`id_propinsi`);

--
-- Indeks untuk tabel `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id_delivery` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=478;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `propinsi`
--
ALTER TABLE `propinsi`
  MODIFY `id_propinsi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
