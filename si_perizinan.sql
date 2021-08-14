-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 07:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_perizinan`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab_kalab`
--

CREATE TABLE `lab_kalab` (
  `id` int(11) NOT NULL,
  `lab` varchar(100) NOT NULL,
  `kalab` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_kalab`
--

INSERT INTO `lab_kalab` (`id`, `lab`, `kalab`, `nip`) VALUES
(1, 'Teknik Sipil - Laboratorium Bahan', 'Dr. Endah Safitri, S.T., M.T', '197012122000032001'),
(2, 'Teknik Sipil - Laboratorium Struktur', 'Dr. Senot Sangadji, S.T., M.T.', '197208072000031002'),
(3, 'Teknik Sipil - Laboratorium Hidro Teknik', 'Dr. Cahyono Ikhsan, S.T., M.T.', '197009071997021001'),
(4, 'Teknik Sipil - Laboratorium Ukur Tanah', 'Ir. Suryoto, M.T.', '195801091986011001'),
(5, 'Teknik Sipil - Laboratorium Mekanika Tanah', 'Dr. Bambang Setiawan, S.T., M.T.', '196907171997021001'),
(6, 'Teknik Sipil - Laboratorium Teknik Penyehatan', 'Ir. Budi Utomo, M.T', '196006291987021002'),
(7, 'Teknik Sipil - Laboratorium Jalan Raya', 'Dr. Ir. Arif Budiarto, M.T.', '196304161997021001'),
(8, 'Teknik Sipil - Laboratorium Komputasi dan Teknologi Informasi', 'Setiono, S.T., M.Sc.', '197202241997021001'),
(9, 'Teknik Sipil - Laboratorium Trafic Engineering', 'Dr. Dewi Handayani, S.T., M.T.', '197109191995122001'),
(10, 'Teknik Sipil - Laboratorium Konstruksi Dasar', 'Ir. Purwanto, M.T.', '196107241987021001'),
(11, 'Teknik Arsitektur - Laboratorium Perancangan', 'Purwanto Setyo Nugroho, S.T., M.T.', '197203242000031001'),
(12, 'Teknik Arsitektur - Laboratorium Sains dan Teknologi Bangunan', 'Dr. Yosafat Winarto, S.T., M.T.', '197108292000121001'),
(13, 'Teknik Arsitektur - Laboratorium Struktur Bangunan', 'Amin Sumadyo, S.T.,M.T.', '197208112000121001'),
(14, 'Teknik Arsitektur - Laboratorium Urban Rural Design and Conservation', 'Dr. Eng. Kusumaningdyah Nurul Handayani, S.T., M.T.', '197912032008012011'),
(15, 'Teknik Arsitektur - Laboratorium Sejarah Arsitektur dan Arsitektur Jawa', 'Dr.Ir. Mohamad Muqoffa, M.T.', '196206101991031001'),
(16, 'Teknik Kimia - Laboratorium Teknologi Bioproses dan Zat Alami', 'Dr. Margono, S.T., M.T.', '196811071997021001'),
(17, 'Teknik Kimia - Laboratorium Instruksional 1', 'Dr. Dwi Ardiana Setyawardhani, S.T.,M.T.', '19730131199802200'),
(18, 'Teknik Kimia - Laboratorium Instruksional 2', 'Dr. Bregas Siswahjono Tatag Sembodo, S.T., M.T.', '197112061999031002'),
(19, 'Teknik Kimia - Laboratorium Konversi Energi dan Rekayasa Rekasi Kimia', 'Anatta Wahyu Budiman, S.T., Ph.D.', '1988110420161001'),
(20, 'Teknik Kimia - Laboratorium Material Maju', 'Dr.Eng. Agus Purwanto, S.T.,M.T.', '197504111999031001'),
(21, 'Teknik Kimia - Laboratorium Rekayasa Produk', 'Mujtahid Kaavessina, S.T., M.T, Ph.D.', '197909242003121002'),
(22, 'Teknik Kimia - Laboratorium Pilot Plant', 'Ir. Paryanto, M.S.', '195804251986011001'),
(23, 'Teknik Kimia - Laboratorium Komputasi Teknik Kimia', 'Dr. Joko Waluyo, S.T., M.T.', '198602162014041001'),
(24, 'Teknik Kimia - Studio Tugas Akhir', 'Inayati, S.T., M.T., Ph.D.', '197108291999032001'),
(25, 'Teknik Mesin - Laboratorium Proses Produksi', 'Heru Sukanto, S.T., M.T.', '197207311997021001'),
(26, 'Teknik Mesin - Laboratorium Material', 'Dr. Ir. Wijang Wisnu Raharjo, M.T.', '196810041999031002'),
(27, 'Teknik Mesin - Laboratorium Mekanika Fluida', 'D Danardono Dwi Prija T, S.T., M.T., Ph.D. ', '196905141999031001\''),
(28, 'Teknik Mesin - Laboratorium Motor Bakar dan Otomotif', 'Wibowo, S.T., M.T', '197104251999031001'),
(29, 'Teknik Mesin - Laboratorium Permindahan Panas dan Thermodinamika', 'Dr. Budi Kristiawan, S.T., M.T.', '197104251999031001'),
(30, 'Teknik Mesin - Laboratorium? Getaran dan Perawatan', 'Dr. Nurul Muhayat, S.T., M.T.', '197003231998021001'),
(31, 'Teknik Mesin - Laboratorium Komputasi dan Perancangan', 'Aditya Rio Prabowo, S.T., M.T., M.Eng', '199209152019031016'),
(32, 'Teknik Mesin - Laboratorium Energi Surya', 'Rendy Adhi Rachmanto, S.T., M.T.', '197101192000121006'),
(33, 'Teknik Mesin - Laboratorium Pengecoran dan Pengelasan', 'Teguh Triyono, S.T., M.Eng.', '197104301998021001'),
(34, 'Teknik Mesin - Laboratorium Otomasi dan Robotika', 'Fitrian Imaduddin, S.T., M.Sc., Ph.D.', '198506152018101'),
(35, 'Teknik Mesin - Laboratorium Nano Bioenergi', 'Prof. Dr. techn. Suyitno, S.T., M.T.', '197409022001121002'),
(36, 'Teknik Industri - Laboratorium  Praktikum Perancangan Teknik Industri', 'Yuniaristanto, S.T.,M.T.', '197506172000121001'),
(37, 'Teknik Industri - Laboratorium Perancangan dan Optimasi Sistem Industri', 'I Wayan Suletra, S.T.,M.T.', '197503082000121001'),
(38, 'Teknik Industri - Laboratorium Sistem Produksi', 'Prof. Dr. Cucuk Nur Rosyidi, S.T., M.T.', '197111041999031001'),
(39, 'Teknik Industri - Laboratorium Perencanaan dan Perancangan Produk', 'Dr. Ir. Lobes Herdiman, M.T.', '196410071997021001'),
(40, 'Teknik Industri - Laboratorium Sistem Kualitas', 'Fakhrina Fahma, S.T.P., M.T.', '197410082000032001'),
(41, 'Teknik ?Industri - Laboratorium Perancangan Sistem Kerja dan Ergonomi', 'Rahmaniyah Dwi Astuti, S.T.,M.T.', '197601221999032001'),
(42, 'Teknik Industri - Laboratorium Sistem Logistik dan Bisnis', 'Dr. Muh. Hisjam, S.T.P.,M.T.', '197006261998021001'),
(43, 'Teknik PWK - Laboratorium Perencanaan Wilayah', 'Dr. Paramita Rahayu, S.T., M.T., M.Sc', '197501072006042002'),
(44, 'Teknik PWK - Studio Perencanaan Kota', 'Ir. Rizon Pamardhi Utomo, MURP', '195902221989031001'),
(45, 'Teknik PWK - Studio Perencanaan Perumahan dan Permukiman', 'Rufia Andisetyana Putri, S.T., M.T.', '198512132014042002'),
(46, 'Teknik Elektro - Laboratorium Elektronika', 'Dr. Miftahul Anwar , S.Si., M.Eng.(Non PNS)', '1983032420130201'),
(47, 'Teknik Elektro - Laboratorium Konversi Energi dan Sistem Tenaga Listrik', 'Chico Hermanu Brillianto Apribowo, S.T., M.Eng.', '198804162015041002'),
(48, 'Teknik Elektro - Laboratorium Telekomunikasi dan Pengolahan Sinyal', 'Muhammad Hamka Ibrahim, ST., M.Eng.', '1988122920161001'),
(49, 'Teknik Elektro - Laboratorium Instrumentasi dan Kendali', 'Hari Maghfiroh, S.T., M.Eng.', '199104132018031001'),
(50, 'Teknik Elektro - Laboratorium Komputer dan Jaringan', 'Sutrisno, S.T., M.Sc, Ph.D.', '1987050620180701');

-- --------------------------------------------------------

--
-- Table structure for table `tb_form_lab`
--

CREATE TABLE `tb_form_lab` (
  `Id` int(50) NOT NULL,
  `Nama_mahasiswa` varchar(80) NOT NULL,
  `NIM` varchar(40) NOT NULL,
  `Alamat` text NOT NULL,
  `Telp` varchar(13) NOT NULL,
  `Judul_Penelitian` text NOT NULL,
  `Pembimbing` varchar(50) NOT NULL,
  `Kalab` varchar(255) NOT NULL,
  `Tim_Fakultas` varchar(255) NOT NULL,
  `Laboratorium` varchar(255) NOT NULL,
  `Syrt_1` varchar(2) NOT NULL,
  `Syrt_2` varchar(2) NOT NULL,
  `Syrt_3` varchar(2) NOT NULL,
  `Syrt_4` varchar(2) NOT NULL,
  `Syrt_5` varchar(2) NOT NULL,
  `Syrt_6` varchar(2) NOT NULL,
  `Syrt_7` varchar(2) NOT NULL,
  `Syrt_8` varchar(2) NOT NULL,
  `Syrt_9` varchar(2) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tanggal_pengajuan` datetime NOT NULL DEFAULT current_timestamp(),
  `acc_pembimbing` int(1) NOT NULL,
  `acc_kalab` int(1) NOT NULL,
  `acc_fakultas` int(1) NOT NULL,
  `tgl_acc_pembimbing` date NOT NULL,
  `tgl_acc_kalab` date NOT NULL,
  `tgl_acc_fakultas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_form_lab`
--

INSERT INTO `tb_form_lab` (`Id`, `Nama_mahasiswa`, `NIM`, `Alamat`, `Telp`, `Judul_Penelitian`, `Pembimbing`, `Kalab`, `Tim_Fakultas`, `Laboratorium`, `Syrt_1`, `Syrt_2`, `Syrt_3`, `Syrt_4`, `Syrt_5`, `Syrt_6`, `Syrt_7`, `Syrt_8`, `Syrt_9`, `tgl_mulai`, `tgl_selesai`, `tanggal_pengajuan`, `acc_pembimbing`, `acc_kalab`, `acc_fakultas`, `tgl_acc_pembimbing`, `tgl_acc_kalab`, `tgl_acc_fakultas`) VALUES
(3, 'Rois Hasan Muhammad', 'I0718032', 'aaaa', 'aa', 'aaaaa', 'Sutrisno', 'Sutrisno', 'Sutrisno', 'Teknik Elektro', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-06-23', '2021-06-22', '2021-06-11 08:03:10', 1, 0, 1, '2021-06-14', '0000-00-00', '2021-06-14'),
(4, 'Abraham Babtisio', 'I0718001', 'Serengan, Surakarta', '0819324123', 'Perbandingan Berat dengan Masa pada Setiap Hewan Berjenis Mamalia', 'Sutrisno', 'Chico Hermanu ', 'Chico Hermanu ', 'Teknik Sipil', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-06-30', '2029-07-21', '2021-06-14 15:01:16', 0, 0, 1, '0000-00-00', '0000-00-00', '2021-08-14'),
(5, 'Annisa Larasati Febrianingrum', 'I0718005', 'Tembalang, Semarang', '0899999333', 'Analisa Dampak Penerapan Peraturan Penghinaan terhadap Presiden dengan Jumlah Pembuat Meme yang Berkembang', 'Chico Hermanu ', 'Muhammad Hamka Ibrahim', 'Sutrisno', 'Teknik Industri', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-06-26', '2021-06-30', '2021-06-14 15:29:46', 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(6, 'Gibran Zulfikar Ghaffara', 'I0718012', 'Tangerang, Jawa Barat', '0823495123', 'Rancang Bangun Sistem Irigasi di Desa Makopat', 'Sutrisno', 'Muhammad Hamka Ibrahim', 'Sutrisno', 'Teknik PWK', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-06-10', '2021-06-28', '2021-06-14 15:31:52', 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(7, 'Muhammad Ghozy Al Hakim', 'I0718023', 'Purwokerto', '0815689201', 'Lengan Robot', 'Sutrisno', 'Chico Hermanu ', 'Muhammad Hamka Ibrahim', 'Teknik Elektro', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-08-19', '2021-08-26', '2021-08-12 20:26:43', 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(8, 'Muhammad Ghozy Al Hakim', 'I0718023', 'Surakarta', '0815689201', 'Lengan Robotaaa', 'Sutrisno', 'Chico Hermanu ', 'Muhammad Hamka Ibrahim', 'Teknik Mesin', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-08-19', '2021-08-21', '2021-08-12 20:33:50', 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(9, 'Muhammad Ghozy Al Hakim', 'I0718023', 'Purwokerto', '0815689201', 'Lengan Robot', 'Sutrisno', 'Muhammad Hamka Ibrahim', 'Chico Hermanu ', 'Teknik Industri', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-08-14', '2021-08-16', '2021-08-12 20:41:00', 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(10, 'Muhammad Ghozy Al Hakim', 'I0718023', 'Purwokerto', '0815689201', 'Lengan Robot', 'Gunawan', 'Sutrisno', 'Chico Hermanu ', 'Teknik Elektro', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-08-20', '2021-08-26', '2021-08-12 20:46:23', 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(11, 'Muhammad Ghozy Al Hakim', 'I0718023', 'Surakarta', '0815689201', 'Lengan Robot', 'Agus', 'Dr. Endah Safitri, S.T., M.T', 'Chico Hermanu ', 'Teknik Sipil - Laboratorium Bahan', '1', '1', '1', '0', '0', '0', '1', '1', '1', '2021-08-14', '2021-08-16', '2021-08-13 09:50:47', 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(12, 'Muhammad Ghozy Al Hakim', 'I0718023', 'Surakarta', '0815689201', 'Lengan Robotaaa', 'apip', 'Dr. Senot Sangadji, S.T., M.T.', 'Sutrisno', 'Teknik Sipil - Laboratorium Struktur', '1', '1', '0', '0', '0', '1', '1', '1', '1', '2021-08-15', '2021-08-16', '2021-08-13 09:53:35', 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(13, 'Muhammad Ghozy Al Hakim', 'I0718023', 'Purwokerto', '0815689201', 'Lengan Robot', 'Gunawan', 'Dr. Endah Safitri, S.T., M.T', 'Sutrisno', 'Teknik Sipil - Laboratorium Bahan', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-08-27', '2021-08-28', '2021-08-13 09:55:37', 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(14, 'Muhammad Ghozy Al Hakim', 'I0718023', 'Purwokerto', '0815689201', 'Lengan Robot', 'Agus', 'Dr. Eng. Kusumaningdyah Nurul Handayani, S.T., M.T', 'Sutrisno', 'Teknik Industri - Laboratorium Perancangan dan Opt', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-08-21', '2021-08-23', '2021-08-13 10:03:26', 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tkalab`
--

CREATE TABLE `tkalab` (
  `id` int(100) NOT NULL,
  `nama_kalab` varchar(255) NOT NULL,
  `NIP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tkalab`
--

INSERT INTO `tkalab` (`id`, `nama_kalab`, `NIP`) VALUES
(1, 'Dr. Endah Safitri, S.T., M.T', '197012122000032001'),
(2, 'Dr. Senot Sangadji, S.T., M.T.', '197208072000031002'),
(3, 'Dr. Cahyono Ikhsan, S.T., M.T.', '197009071997021001'),
(4, 'Ir. Suryoto, M.T.', '195801091986011001'),
(5, 'Dr. Bambang Setiawan, S.T., M.T.', '196907171997021001'),
(6, 'Ir. Budi Utomo, M.T', '196006291987021002'),
(7, 'Dr. Ir. Arif Budiarto, M.T.', '196304161997021001'),
(8, 'Setiono, S.T., M.Sc.', '197202241997021001'),
(9, 'Dr. Dewi Handayani, S.T., M.T.', '197109191995122001'),
(10, 'Ir. Purwanto, M.T.', '196107241987021001'),
(11, 'Purwanto Setyo Nugroho, S.T., M.T.', '197203242000031001'),
(12, 'Dr. Yosafat Winarto, S.T., M.T.', '197108292000121001'),
(13, 'Amin Sumadyo, S.T.,M.T.', '197208112000121001'),
(14, 'Dr. Eng. Kusumaningdyah Nurul Handayani, S.T., M.T.', '197912032008012011'),
(15, 'Dr.Ir. Mohamad Muqoffa, M.T.', '196206101991031001'),
(16, 'Dr. Margono, S.T., M.T.', '196811071997021001'),
(17, 'Dr. Dwi Ardiana Setyawardhani, S.T.,M.T.', '19730131199802200'),
(18, 'Dr. Bregas Siswahjono Tatag Sembodo, S.T., M.T.', '197112061999031002'),
(19, 'Anatta Wahyu Budiman, S.T., Ph.D.', '1988110420161001'),
(20, 'Dr.Eng. Agus Purwanto, S.T.,M.T.', '197504111999031001'),
(21, 'Mujtahid Kaavessina, S.T., M.T, Ph.D.', '197909242003121002'),
(22, 'Ir. Paryanto, M.S.', '195804251986011001'),
(23, 'Dr. Joko Waluyo, S.T., M.T.', '198602162014041001'),
(24, 'Inayati, S.T., M.T., Ph.D.', '197108291999032001'),
(25, 'Heru Sukanto, S.T., M.T.', '197207311997021001'),
(26, 'Dr. Ir. Wijang Wisnu Raharjo, M.T.', '196810041999031002'),
(27, 'D Danardono Dwi Prija T, S.T., M.T., Ph.D. ', '196905141999031001'),
(28, 'Wibowo, S.T., M.T', '197104251999031001'),
(29, 'Dr. Budi Kristiawan, S.T., M.T.', '197104251999031001'),
(30, 'Dr. Nurul Muhayat, S.T., M.T.', '197003231998021001'),
(31, 'Aditya Rio Prabowo, S.T., M.T., M.Eng', '199209152019031016'),
(32, 'Rendy Adhi Rachmanto, S.T., M.T.', '197101192000121006'),
(33, 'Teguh Triyono, S.T., M.Eng.', '197104301998021001'),
(34, 'Fitrian Imaduddin, S.T., M.Sc., Ph.D.', '198506152018101'),
(35, 'Prof. Dr. techn. Suyitno, S.T., M.T.', '197409022001121002'),
(36, 'Yuniaristanto, S.T.,M.T.', '197506172000121001'),
(37, 'I Wayan Suletra, S.T.,M.T.', '197503082000121001'),
(38, 'Prof. Dr. Cucuk Nur Rosyidi, S.T., M.T.', '197111041999031001'),
(39, 'Dr. Ir. Lobes Herdiman, M.T.', '196410071997021001'),
(40, 'Fakhrina Fahma, S.T.P., M.T.', '197410082000032001'),
(41, 'Rahmaniyah Dwi Astuti, S.T.,M.T.', '197601221999032001'),
(42, 'Dr. Muh. Hisjam, S.T.P.,M.T.', '197006261998021001'),
(43, 'Dr. Paramita Rahayu, S.T., M.T., M.Sc', '197501072006042002'),
(44, 'Ir. Rizon Pamardhi Utomo, MURP', '195902221989031001'),
(45, 'Rufia Andisetyana Putri, S.T., M.T.', '198512132014042002'),
(46, 'Dr. Miftahul Anwar , S.Si., M.Eng.(Non PNS)', '1983032420130201'),
(47, 'Chico Hermanu Brillianto Apribowo, S.T., M.Eng.', '198804162015041002'),
(48, 'Muhammad Hamka Ibrahim, ST., M.Eng.', '1988122920161001'),
(49, 'Hari Maghfiroh, S.T., M.Eng.', '199104132018031001'),
(50, 'Sutrisno, S.T., M.Sc, Ph.D.', '1987050620180701');

-- --------------------------------------------------------

--
-- Table structure for table `tlab`
--

CREATE TABLE `tlab` (
  `id` int(11) NOT NULL,
  `lab_ft` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlab`
--

INSERT INTO `tlab` (`id`, `lab_ft`) VALUES
(1, 'Teknik Sipil - Laboratorium Bahan'),
(2, 'Teknik Sipil - Laboratorium Struktur'),
(3, 'Teknik Sipil - Laboratorium Hidro Teknik'),
(4, 'Teknik Sipil - Laboratorium Ukur Tanah'),
(5, 'Teknik Sipil - Laboratorium Mekanika Tanah'),
(6, 'Teknik Sipil - Laboratorium Teknik Penyehatan'),
(7, 'Teknik Sipil - Laboratorium Jalan Raya'),
(8, 'Teknik Sipil - Laboratorium Komputasi dan Teknologi Informasi'),
(9, 'Teknik Sipil - Laboratorium Trafic Engineering'),
(10, 'Teknik Sipil - Laboratorium Konstruksi Dasar'),
(11, 'Teknik Arsitektur - Laboratorium Perancangan'),
(12, 'Teknik Arsitektur - Laboratorium Sains dan Teknologi Bangunan'),
(13, 'Teknik Arsitektur - Laboratorium Struktur Bangunan'),
(14, 'Teknik Arsitektur - Laboratorium Urban Rural Design and Conservation'),
(15, 'Teknik Arsitektur - Laboratorium Sejarah Arsitektur dan Arsitektur Jawa'),
(16, 'Teknik Kimia - Laboratorium Teknologi Bioproses dan Zat Alami'),
(17, 'Teknik Kimia - Laboratorium Instruksional 1'),
(18, 'Teknik Kimia - Laboratorium Instruksional 2'),
(19, 'Teknik Kimia - Laboratorium Konversi Energi dan Rekayasa Rekasi Kimia'),
(20, 'Teknik Kimia - Laboratorium Material Maju'),
(21, 'Teknik Kimia - Laboratorium Rekayasa Produk'),
(22, 'Teknik Kimia - Laboratorium Pilot Plant'),
(23, 'Teknik Kimia - Laboratorium Komputasi Teknik Kimia'),
(24, 'Teknik Kimia - Studio Tugas Akhir'),
(25, 'Teknik Mesin - Laboratorium Proses Produksi'),
(26, 'Teknik Mesin - Laboratorium Material'),
(27, 'Teknik Mesin - Laboratorium Mekanika Fluida'),
(28, 'Teknik Mesin - Laboratorium Motor Bakar dan Otomotif'),
(29, 'Teknik Mesin - Laboratorium Permindahan Panas dan Thermodinamika'),
(30, 'Teknik Mesin - Laboratorium? Getaran dan Perawatan'),
(31, 'Teknik Mesin - Laboratorium Komputasi dan Perancangan'),
(32, 'Teknik Mesin - Laboratorium Energi Surya'),
(33, 'Teknik Mesin - Laboratorium Pengecoran dan Pengelasan'),
(34, 'Teknik Mesin - Laboratorium Otomasi dan Robotika'),
(35, 'Teknik Mesin - Laboratorium Nano Bioenergi'),
(36, 'Teknik Industri - Laboratorium  Praktikum Perancangan Teknik Industri'),
(37, 'Teknik Industri - Laboratorium Perancangan dan Optimasi Sistem Industri'),
(38, 'Teknik Industri - Laboratorium Sistem Produksi'),
(39, 'Teknik Industri - Laboratorium Perencanaan dan Perancangan Produk'),
(40, 'Teknik Industri - Laboratorium Sistem Kualitas'),
(41, 'Teknik ?Industri - Laboratorium Perancangan Sistem Kerja dan Ergonomi'),
(42, 'Teknik Industri - Laboratorium Sistem Logistik dan Bisnis'),
(43, 'Teknik PWK - Laboratorium Perencanaan Wilayah'),
(44, 'Teknik PWK - Studio Perencanaan Kota'),
(45, 'Teknik PWK - Studio Perencanaan Perumahan dan Permukiman'),
(46, 'Teknik Elektro - Laboratorium Elektronika'),
(47, 'Teknik Elektro - Laboratorium Konversi Energi dan Sistem Tenaga Listrik'),
(48, 'Teknik Elektro - Laboratorium Telekomunikasi dan Pengolahan Sinyal'),
(49, 'Teknik Elektro - Laboratorium Instrumentasi dan Kendali'),
(50, 'Teknik Elektro - Laboratorium Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` set('Mahasiswa','Dosen','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id`, `nama`, `nim`, `email`, `alamat`, `no_telp`, `password`, `level`) VALUES
(1, 'Muhammad Ghozy Al Hakim', 'I0718023', '', '', '', 'f959d8ca0e42030d00e5b0035d22bb16beade312', 'Mahasiswa'),
(34, 'Admin', '12980980718709', '', '', '', 'e09e6f0ec3354bae52d8c017c578ecaef5de9b7c', 'Dosen,Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab_kalab`
--
ALTER TABLE `lab_kalab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_form_lab`
--
ALTER TABLE `tb_form_lab`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tkalab`
--
ALTER TABLE `tkalab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tlab`
--
ALTER TABLE `tlab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab_kalab`
--
ALTER TABLE `lab_kalab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_form_lab`
--
ALTER TABLE `tb_form_lab`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tkalab`
--
ALTER TABLE `tkalab`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tlab`
--
ALTER TABLE `tlab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
