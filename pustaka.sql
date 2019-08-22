-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Feb 2018 pada 10.17
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pustaka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(255) NOT NULL,
  `kd_buku` char(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isbn` varchar(40) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `halaman` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `th_terbit` char(4) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `sinopsis` text NOT NULL,
  `tgl_publish` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `kd_buku`, `judul`, `isbn`, `pengarang`, `penerbit`, `halaman`, `jumlah`, `th_terbit`, `gambar`, `sinopsis`, `tgl_publish`) VALUES
(10, 'B0001', 'Ilmu Pengetahuan Alam - Kelas 8', '978-602-1530-62-7', 'Siti Zubaidah', 'Pusat Kurikulum', 234, 8, '2014', 'bk-1506918070.jpg', 'Buku Ilmu Pengetahuan Alam Kelas 8 (VIII) SMP Semester 2', '2017-10-02'),
(9, 'B0002', 'Ilmu Pengetahuan Alam - Kelas 8', '978-602-1530-62-7', 'Siti Zubaidah', 'Pusat Kurikulum', 214, 14, '2014', 'bk-1506917760.jpg', 'Buku Ilmu Pengetahuan Alam Kelas 8 (VIII) SMP Semester 1', '2017-10-02'),
(132, 'B0116', 'Bercocok Tanam Cabai Rawit, Cabai Merah dan Cabai Jawa', '797-736-743-6', 'Husna Amin ', 'Sinar Cemerlang Abadi', 105, 1, '2010', 'bk-1508455012.jpg', 'Buku Bercocok Tanam Cabai Rawit, Cabai Merah dan Cabai Jawa', '2017-10-20'),
(11, 'B0003', 'Prakarya - Kelas 8', '978-602-1530-66-5', 'Suci Pareti', 'Pusat Kurikulum', 252, 15, '2014', 'bk-1506918507.jpg', 'Buku Prakarya Kelas 8 (VIII) SMP Semester 1', '2017-10-02'),
(131, 'B0115', 'Belimbing Manis', '979-736-459-3', 'Ir. H. Rahmat Rukmana M.Sc.,M.M', 'Aneka Ilmu', 82, 3, '2005', 'bk-1508453982.jpg', 'Buku Belimbing Manis', '2017-10-20'),
(21, 'B0004', 'Prakarya - Kelas 8', '978-602-1530-66-5', 'Suci Pareti', 'Pusat Kurikulum', 192, 10, '2014', 'bk-1507176763.jpg', 'Buku Prakarya Kelas 8 (VIII) SMP Semester 2', '2017-10-05'),
(13, 'B0005', 'Seni Budaya - Kelas 8', '978-602-1530-74-0', 'Eko Purnomo', 'Pusat Kurikulum', 164, 15, '2014', 'bk-1506919301.jpg', 'Buku Seni Budaya Kelas 8 (VIII) SMP Semester 1', '2017-10-02'),
(130, 'B0114', 'Bahaya dan Pencegahan DBD', '978-979-17609-1-1', 'Edi Warsidi', 'Mitra Utama', 84, 3, '2009', 'bk-1508453838.jpg', 'Buku Bahaya dan Pencegahan DBD', '2017-10-20'),
(14, 'B0006', 'Seni Budaya - Kelas 8', '978-602-1530-74-0', 'Eko Purnomo', 'Pusat Kurikulum', 142, 11, '2014', 'bk-1506919424.jpg', 'Buku Seni Budaya Kelas 8 (VIII) SMP Semester 2', '2017-10-02'),
(129, 'B0113', 'Teknik Membuat Kompor', '979-736-765-7', 'Husna Amin', 'Sinar Cemerlang Abadi', 59, 3, '2010', 'bk-1508453689.jpg', 'Buku Teknik Membuat Kompor', '2017-10-20'),
(15, 'B0007', 'Seni Budaya - Kelas 7', '978-602-282-333-9', 'Eko Purnomo', 'Pusat Kurikulum', 132, 20, '2013', 'bk-1506919706.jpg', 'Buku Seni Budaya Kelas 7 (VII) SMP Semester 1', '2017-10-02'),
(128, 'B0112', 'Mengolah Sampah Menjadi Kompos', '978-602-8426-01-5', 'Edi Warsidi', 'Mitra Utama', 81, 3, '2008', 'bk-1508453531.jpg', 'Buku Mengolah Sampah Menjadi Kompos', '2017-10-20'),
(16, 'B0008', 'Seni Budaya - Kelas 7', '978-602-282-333-9', 'Eko Purnomo', 'Pusat Kurikulum', 102, 14, '2013', 'bk-1506919827.jpg', 'Buku Seni Budaya Kelas 7 (VII) SMP Semester 2', '2017-10-02'),
(17, 'B0009', 'Bahasa Sunda - Kelas 8', '978-602-1300-07-7', 'Tatang Sumarno', 'Pusat Kurikulum', 165, 34, '2014', 'bk-1506920292.jpg', 'Buku Bahasa Sunda Kelas 8 (VIII) SMP', '2017-10-02'),
(127, 'B0111', 'Bahaya dan Upaya Pencegahan Narkoba', '978-979-736-809-8', 'Drs. Sunarno', 'Bengawan Ilmu', 90, 3, '2008', 'bk-1508453310.jpg', 'Buku Bahaya dan Upaya Pencegahan Narkoba', '2017-10-20'),
(20, 'B0011', 'Pendidikan Jasmani Olahraga Dan Kesehatan - Kelas 8', '978-602-1530-78-8', 'Roji ', 'Pusat Kurikulum', 224, 11, '2014', 'bk-1506921137.jpg', 'Buku Pendidikan Jasmani Olahraga dan Kesehatan Kelas 8 (VIII) SMP Semester 2', '2017-10-02'),
(19, 'B0010', 'Pendidikan Jasmani Olahraga Dan Kesehatan - Kelas 8', '978-602-1530-78-8', 'Roji', 'Pusat Kurikulum', 220, 14, '2014', 'bk-1506920970.jpg', 'Buku Pendidikan Jasmani Olahraga dan Kesehatan Kelas 8 (VIII) SMP Semester 1', '2017-10-02'),
(126, 'B0110', 'Kiat Sukses Beternak Jangkrik', '979-736-374-0', 'Hardi Soenanto', 'Aneka Ilmu', 56, 3, '2010', 'bk-1508311830.jpg', 'Buku Kiat Sukses Beternak Jangkrik', '2017-10-18'),
(22, 'B0012', 'Prakarya - Kelas 7', '978-602-282-340-7', 'Suci Pareti', 'Pusat Kurikulum', 166, 19, '2014', 'bk-1507177373.jpg', 'Buku Prakarya Kelas 7 (VII) SMP Semester 1', '2017-10-05'),
(125, 'B0109', 'Budidaya Tanaman Jarak Pagar', '979-736-659-6', 'Taufik H,S.T.', 'Aneka Ilmu', 78, 3, '2007', 'bk-1508311565.jpg', 'Buku Budidaya Tanaman Jarak Pagar', '2017-10-18'),
(23, 'B0013', 'Prakarya - Kelas 7', '978-602-282-340-7', 'Suci Pareti', 'Pusat Kurikulum', 142, 15, '2014', 'bk-1507177547.jpg', 'Buku Prakarya Kelas 7 (VII) SMP Semester 2', '2017-10-05'),
(24, 'B0014', 'Ilmu Pengetahuan Alam - Kelas 7', '978-602-282-314-8', 'Wahono Widodo', 'Pusat Kurikulum', 150, 20, '2013', 'bk-1507178506.jpg', 'Buku Ilmu Pengetahuan Alam Kelas 7 (VII) SMP Semester 2', '2017-10-05'),
(124, 'B0108', 'Budidaya Dan Analisa Strawberry', '978-979-1496-74-2', 'Aries Setiani', 'Sinar Cemerlang Abadi', 68, 3, '2007', 'bk-1508311417.jpg', 'Buku Budidaya Dan Analisa Strawberry', '2017-10-18'),
(25, 'B0015', 'Bahasa Indonesia - Kelas 7', '978-602-282-385-8', 'Fairul Zabadi', 'Pusat Kurikulum', 272, 18, '2013', 'bk-1507178675.jpg', 'Buku Indonesia Kelas 7 (VII) SMP', '2017-10-05'),
(26, 'B0016', 'Pendidikan Agama Islam - Kelas 7', '978-602-282-266-0', 'Mustahdi ', 'Pusat Kurikulum', 212, 15, '2013', 'bk-1507178841.jpg', 'Buku Pendidikan Agama Islam Kelas 7 (VII) SMP ', '2017-10-05'),
(27, 'B0017', 'Bahasa Inggris - Kelas 7', '978-602-282-377-3', 'Yuli Rulani Khatimah', 'Pusat Kurikulum', 210, 20, '2013', 'bk-1507179013.jpg', 'Buku Bahasa Inggris Kelas 7 (VII) SMP', '2017-10-05'),
(28, 'B0017', 'Bahasa Inggris - Kelas 7', '978-602-282-377-3', 'Yuli Rulani Khatimah', 'Pusat Kurikulum', 210, 20, '2013', 'bk-1507179013.jpg', 'Buku Bahasa Inggris Kelas 7 (VII) SMP', '2017-10-05'),
(123, 'B0107', 'Budidaya Anggur', '978-979-1106-19-1', 'Ika Kurniawati', 'Gbyyas Putra', 60, 3, '2010', 'bk-1508310809.jpg', 'Buku Budidaya Anggur', '2017-10-18'),
(29, 'B0018', 'Pendidikan Pancasila Dan Kewarganegaraan', '978-602-282-369-9', 'Salikun', 'Pusat Kurikulum', 162, 18, '2013', 'bk-1507179169.jpg', 'Buku Pendidikan Pancasila Dan Kewarganegaraan Kelas 7 (VII) SMP ', '2017-10-05'),
(30, 'B0019', 'Pendidikan Jasmani Olahraga Dan Kesehatan - Kelas 7', '978-602-282-370-4', 'Muhajir ', 'Pusat Kurikulum', 182, 20, '2013', 'bk-1507179346.jpg', 'Buku Pendidikan Jasmani Olahraga dan Kesehatan Kelas 7 (VII) SMP Semester 1', '2017-10-05'),
(31, 'B0020', 'Pendidikan Jasmani Olahraga Dan Kesehatan - Kelas 7', '978-602-282-340-4', 'Muhajir', 'Pusat Kurikulum', 146, 12, '2013', 'bk-1507179440.jpg', 'Buku Pendidikan Jasmani Olahraga dan Kesehatan Kelas 7 (VII) SMP Semester 2', '2017-10-05'),
(32, 'B0021', 'Ilmu Pengetahuan Alam - Kelas 7', '978-602-282-314-8', 'Wahono Widodo', 'Pusat Kurikulum', 150, 13, '2013', 'bk-1507521441.jpg', 'Buku Ilmu Pengetahuan Alam Kelas 7 (VII) SMP Semester 1', '2017-10-09'),
(122, 'B0106', 'Pembenihan Dan Pembesaran Ikan Mola', '979-736-712-6', 'M.Gufron H.Kardi K', 'Aneka Ilmu', 164, 3, '2007', 'bk-1508310614.jpg', 'Buku Pembenihan Dan Pembesaran Ikan Mola', '2017-10-18'),
(34, 'B0022', 'Matematika - Kelas 7', '978-602-282-351-3', 'Abdur Rahman As\'ari', 'Pusat Kurikulum', 254, 19, '2013', 'bk-1507521618.jpg', 'Buku Matematika Kelas 7 (VII) SMP Semester 1', '2017-10-09'),
(35, 'B0023', 'Matematika - Kelas 7', '978-602-282-351-3', 'Abdur Rahman As\'ari', 'Pusat Kurikulum', 218, 10, '2013', 'bk-1507521708.jpg', 'Buku Matematika Kelas 7 (VII) SMP Semester 2', '2017-10-09'),
(38, 'B0025', 'Matematika - Kelas 8', '978-602-282-095-6', 'Abdur Rahman As\'ari', 'Pusat Kurikulum', 220, 7, '2014', 'bk-1507521942.jpg', 'Buku Matematika Kelas 8 (VIII) SMP Semester 2', '2017-10-09'),
(39, 'B0026', 'Ilmu Pengetahuan Sosial - Kelas 8', '978-602-282-091-8', 'Mukminan', 'Pusat Kurikulum', 178, 10, '2014', 'bk-1507522056.jpg', 'Buku Ilmu Pengetahuan Alam Kelas 8 (VIII) SMP Semester 1', '2017-10-09'),
(41, 'B0027', 'Ilmu Pengetahuan Sosial - Kelas 7', '978-602-282-325-4', 'Ahmad Mushlih', 'Pusat Kurikulum', 264, 17, '2013', 'bk-1507522193.jpg', 'Buku Ilmu Pengetahuan Sosial Kelas 7 (VII) SMP', '2017-10-09'),
(42, 'B0028', 'Pendidikan Pancasila Dan Kewarganegaraan - Kelas 8', '978-602-1530-70-2', 'Salikun', 'Pusat Kurikulum', 170, 14, '2014', 'bk-1507523535.jpg', 'Buku Pendidikan Pancasila Dan Kewarganegaraan Kelas 8 (VIII) SMP ', '2017-10-09'),
(43, 'B0029', 'Bahasa Inggris - Kelas 8', '978-602-1530-58-0', 'Siti Wachidah', 'Pusat Kurikulum', 226, 12, '2014', 'bk-1507523653.jpg', 'Buku Bahasa Inggris Kelas 8 (VIII) SMP', '2017-10-09'),
(44, 'B0030', 'Ilmu Pengetahuan Sosial - Kelas 8', '978-602-282-091-8', 'Mukminan', 'Pusat Kurikulum', 222, 7, '2014', 'bk-1507525084.jpg', 'Buku Ilmu Pengetahuan Sosial Kelas 8 (VIII) SMP Semester 2', '2017-10-09'),
(45, 'B0031', 'Bahasa Indonesia - Kelas 8', '978-602-1530-82-5', 'Fairul Zabadi', 'Pusat Kurikulum', 222, 3, '2014', 'bk-1507525714.jpg', 'Buku Indonesia Kelas 8 (VIII) SMP', '2017-10-09'),
(47, 'B0032', 'Buku Pintar Microsoft Power Point untuk Pemula', '978-979-1477-72-7', 'Osdirwan Oesman', 'Kriya Pustaka', 80, 3, '2009', 'bk-1507782002.jpg', 'Buku Pintar Microsoft Power Point untuk Pemula ', '2017-10-12'),
(48, 'B0033', 'Sepiring Kembang Tahu dan Segelas Susu Kedelai', '978-9415-96-9', 'Muhammad Saidi', 'SIC', 47, 3, '2006', 'bk-1507782245.jpg', 'Buku Sepiring Kembang Tahu dan Segelas Susu Kedelai', '2017-10-12'),
(49, 'B0034', 'Mari Membuat Wayang Kulit', '979-9415-87-9', 'SIC', 'SIC', 55, 3, '2005', 'bk-1507782442.jpg', 'Buku Mari Membuat Wayang Kulit', '2017-10-12'),
(50, 'B0035', 'Jahe Manfaat Ganda', '979-9415-73-9', 'Endyah Murniati', 'Titik Oktia M', 50, 3, '2006', 'bk-1507782656.jpg', 'Buku Jahe Manfaat Ganda', '2017-10-12'),
(51, 'B0036', 'Aneka Minuman Segar Hangat', '979-9415-97-9', 'Supriyono', 'Titik Oktia M', 75, 3, '2006', 'bk-1507782775.jpg', 'Buku Aneka Minuman Segar Hangat', '2017-10-12'),
(52, 'B0037', 'Ajeg Bali Pecalang Pendidikan Budi Pekerti', '979-3233-28-1', 'SIC', 'SIC', 125, 3, '2002', 'bk-1507782929.jpg', 'Buku Ajeg Bali Pecalang Pendidikan Budi Pekerti', '2017-10-12'),
(53, 'B0038', 'Pola Pelaksanaan PEndidikan Kecakapan Hidup', '979-3233-48-6', 'Moh. Najid M.Hum', 'Suyatno', 89, 3, '2006', 'bk-1507783105.jpg', 'Buku Pola Pelaksanaan Pendidikan Kecakapan Hidup', '2017-10-12'),
(54, 'B0040', 'Menjernihkan Air Kotor', '978-979-8191-75-6', 'Bayu Indra Kumusa', 'Media Pusindo', 58, 3, '2010', 'bk-1507783242.jpg', 'Buku Menjernihkan Air Kotor', '2017-10-12'),
(55, 'B0041', 'Mengenal Perangkat Komputer dan Cara Menginstal Software', '978-979-070-147-2', 'Kuwat', 'Arif', 60, 3, '2009', 'bk-1507783363.jpg', 'Buku Mengenal Perangkat Komputer dan Cara Menginstal Software', '2017-10-12'),
(56, 'B0042', 'Merakit Sendiri Teknologi Tepat Guna', '979-9415-77-2', 'Endyah Murniati', 'SIC', 62, 3, '2006', 'bk-1507783511.jpg', 'Buku Merakit Sendiri Teknologi Tepat Guna', '2017-10-12'),
(57, 'B0043', 'Menghias Rumah Dengan Tanaman Pot', '979-9415-95-0', 'Supriyono', 'Ariani Fitria', 46, 3, '2006', 'bk-1507783623.jpg', 'Buku Menghias Rumah Dengan Tanaman Pot', '2017-10-12'),
(58, 'B0044', 'Bermain Sepak Takraw', '978-979-048-258-6', 'Armelia F', 'PT.Aneka Ilmu', 60, 3, '2009', 'bk-1507783770.jpg', 'Buku Bermain Sepak Takraw', '2017-10-12'),
(59, 'B0045', 'Bemain Sepak Bola', '978-979-048-146-6', 'Abdul Rohim', 'CV.Aneka Ilmu', 62, 3, '2008', 'bk-1507783914.jpg', 'Buku Bermain Sepak Bola', '2017-10-12'),
(60, 'B0046', 'Panduan Mahir Akses Internet', '978-602-8453-05-9', 'Hanni Sofia', 'Kriya Pustaka', 72, 3, '2010', 'bk-1507784184.jpg', 'Buku Panduan Mahir Akses Internet', '2017-10-12'),
(61, 'B0047', 'Cerdas Jelajah Internet', '978-979-1477-65-9', 'Rudi Haryanto', 'Kriya Pustaka', 76, 3, '2009', 'bk-1507784278.jpg', 'Buku Cerdas Jelajah Internet', '2017-10-12'),
(62, 'B0048', 'Cara Menulis Cerita Fiksi dari Buku Harian', '979-927-12-7', 'Naning Pranoto', 'Penebar Plus', 70, 3, '2015', 'bk-1507784418.jpg', 'Buku Cara Menulis Cerita Fiksi dari Buku Harian', '2017-10-12'),
(63, 'B0049', 'Pembibitan Itik', '978-979-002-477-9', 'Ir.Bambang Cahyono', 'Penebar Swadaya', 146, 3, '2015', 'bk-1508127077.jpg', 'Buku Pembibitan Itik', '2017-10-16'),
(64, 'B0050', 'Memanfaatkan Kototran Ternak', '978-979-002-182-2', 'Ade Iwan Setiawan', 'Penebar Swadaya', 85, 3, '2015', 'bk-1508127197.jpg', 'Buku Memanfaatkan Kototran Ternak', '2017-10-16'),
(65, 'B0051', 'Pembesaran Lele Kolam Terpal', '978-979-002-422-9', 'Andri Hendriana', 'Penebar Swadaya', 78, 3, '2015', 'bk-1508127312.jpg', 'Buku Pembesaran Lele Kolam Terpal', '2017-10-16'),
(66, 'B0052', 'Praktis & Cantik membuat Kreasi Cokelat', '979-3235-43-8', 'Dra. Yuti Regawati', 'Puspa Swara', 52, 3, '2002', 'bk-1508127460.jpg', 'Buku Praktis & Cantik membuat Kreasi Cokelat', '2017-10-16'),
(67, 'B0053', 'Terbukti Pome Tumpas Penyakit', '978-979-1480-69-7', 'Dr.Adji Suranto, Sp.A', 'Pustaka Bunda', 74, 3, '2011', 'bk-1508127579.jpg', 'Buku Terbukti Pome Tumpas Penyakit', '2017-10-16'),
(68, 'B0054', 'Usaha Membuat Tempe dan Oncom', '978-979-002-435-9', 'Bambang Sarwono', 'Penebar Swadaya', 100, 3, '2015', 'bk-1508127667.jpg', 'Buku Usaha Membuat Tempe dan Oncom', '2017-10-16'),
(69, 'B0055', 'Bagaimana Mobil & Motor Berjalan', '978-979-014-159-9', 'Rully Dwihapsari', 'Pacu Minat Baca', 60, 3, '2015', 'bk-1508127775.jpg', 'Buku Bagaimana Mobil & Motor Berjalan', '2017-10-16'),
(70, 'B0056', 'Membuat Aneka Olahan Cabai', '978-979-002-181-5', 'Suyanti', 'Penebar Swadaya', 76, 3, '2015', 'bk-1508127846.jpg', 'Buku Membuat Aneka Olahan Cabai', '2017-10-16'),
(71, 'B0057', 'Kolam Ikan ', '978-979-002-388-8', 'Heru Susanto', 'Penebar Swadaya', 91, 3, '2015', 'bk-1508127937.jpg', 'Buku Kolam Ikan', '2017-10-16'),
(72, 'B0058', 'Pembenihan & Pembesaran Lele', '978-979-002-462-5', 'Hernowo', 'Penebar Swadaya', 90, 3, '2015', 'bk-1508128043.jpg', 'Buku Pembenihan & Pembesaran Lele', '2017-10-16'),
(73, 'B0059', 'Ramuan & Khasiat Sirsak', '978-979-002-475-5', 'Lina Mardiana', 'Penebar Swadaya', 67, 3, '2015', 'bk-1508128143.jpg', 'Buku Ramuan & Khasiat Sirsak', '2017-10-16'),
(74, 'B0060', 'Dahsyatnya Sirsak Tumpas Penyakit', '978-979-1480-61-1', 'Dr.Adji Suranto, Sp.A', 'Pustaka Bunda', 73, 3, '2011', 'bk-1508128246.jpg', 'Buku Dahsyatnya Sirsak Tumpas Penyakit', '2017-10-16'),
(75, 'B0061', 'Berkreasi Dengan Kulit Jagung', '979-8955-88-9', 'Retno Sulistyowati', 'Puspa Swara', 68, 3, '1999', 'bk-1508128355.jpg', 'Buku Berkreasi Dengan Kulit Jagung', '2017-10-16'),
(76, 'B0062', 'Mari Menanam Anggur', '979-9415-85-3', 'Ahmad Sapari', 'SIC', 63, 3, '2006', 'bk-1508128457.jpg', 'Buku Mari Menanam Anggur', '2017-10-16'),
(77, 'B0062', 'Keterampilan Sumber Industri', '979-9415-76-4', 'Endyah Murniati', 'SIC', 112, 3, '2006', 'bk-1508128571.jpg', 'Buku Keterampilan Sumber Industri', '2017-10-16'),
(78, 'B0062', 'Aneka Ramuan Bekhasiat Dari Temu Temuan', '979-3235-77-2', 'Sardhi Duryatmo', 'Puspa Swara', 58, 3, '2003', 'bk-1508128660.jpg', 'Buku Aneka Ramuan Bekhasiat Dari Temu Temuan', '2017-10-16'),
(79, 'B0063', 'Aneka Produk Olahan Kelapa', '978-979-489-172-8', 'Rony Palungkun', 'Penebar Swadaya', 116, 3, '2015', 'bk-1508128746.jpg', 'Buku Aneka Produk Olahan Kelapa', '2017-10-16'),
(80, 'B0064', 'Pengolahan Hasil Perikanan', '979-1464-95-6', 'Ir.Endang Suprtiningsih', 'V.Vony Rrorng, A.Pi', 60, 3, '2008', 'bk-1508128896.jpg', 'Buku Pengolahan Hasil Perikanan', '2017-10-16'),
(81, 'B0065', 'Wiraswasta Cuci Cetak Foto Hitam Putih', '979-8955-36-6', 'Wilson Nababan', 'Puspa Swara', 82, 3, '1997', 'bk-1508128991.jpg', 'Buku Wiraswasta Cuci Cetak Foto Hitam Putih', '2017-10-16'),
(82, 'B0066', 'Bertanam Pisang Dan Pengolahannya', '979-9415-99-3', 'Muhammad Saidi', 'SIC', 66, 3, '2006', 'bk-1508129075.jpg', 'Buku Bertanam Pisang Dan Pengolahannya', '2017-10-16'),
(83, 'B0067', 'Peluang Usaha Berternak Bebek Darat', '979-9415-41-1', 'Bambang Marhiyanto', 'SIC', 48, 3, '2006', 'bk-1508129181.jpg', 'Buku Peluang Usaha Berternak Bebek Darat', '2017-10-16'),
(84, 'B0068', '19 Aktivitas Sains Menyenangkan Energi', '978-979-014-147-6', 'Arief Pramudyo N', 'Pacu Minat Baca', 60, 3, '2015', 'bk-1508129285.jpg', 'Buku 19 Aktivitas Sains Menyenangkan Energi', '2017-10-16'),
(85, 'B0069', 'Segudang Aneka Pemberdayaan Buah Buahanan', '979-9415-75-6', 'Endah Murniati', 'SIC', 64, 3, '2006', 'bk-1508129328.jpg', 'Buku Segudang Aneka Pemberdayaan Buah Buahanan', '2017-10-16'),
(86, 'B0070', 'Beternak Ayam Buras', '979-9415-39-9', 'Bambang Marhiyanto', 'SIC', 60, 3, '2006', 'bk-1508129413.jpg', 'Buku Beternak Ayam Buras', '2017-10-16'),
(87, 'B0071', 'Aneka Kerajinan Dari Limbah Alumunium Foil', '979-9386-48-9', 'Slamet Riyadi', 'Puspa Swara', 50, 3, '2001', 'bk-1508129506.jpg', 'Buku Aneka Kerajinan Dari Limbah Alumunium Foil', '2017-10-16'),
(88, 'B0072', 'Cetak Sablon Untuk Pemula', '979-3235-59-4', 'Guntur Nusantara', 'Puspa Swara', 54, 3, '2004', 'bk-1508129624.jpg', 'Buku Cetak Sablon Untuk Pemula', '2017-10-16'),
(89, 'B0073', 'Pemeliharaan Ayam Ras Petelur DI kandang Baterai', '978-979-489-503-0', 'Ir.Hari Santosa', 'Penebar Swadaya', 107, 3, '2015', 'bk-1508129738.jpg', 'Buku Pemeliharaan Ayam Ras Petelur DI kandang Baterai', '2017-10-16'),
(90, 'B0074', 'Wirausaha Kerajinan Bambu', '979-9386-17-9', 'Sardhi Duryatmo', 'Puspa Swara', 74, 3, '2000', 'bk-1508129849.jpg', 'Buku Wirausaha Kerajinan Bambu', '2017-10-16'),
(91, 'B0075', 'Bertanam Tomat Dalam Pot dan Polibag', '978-979-002-396-3', 'Yati Suryati', 'Penebar Swadaya', 75, 3, '2015', 'bk-1508129950.jpg', 'Buku Bertanam Tomat Dalam Pot dan Polibag', '2017-10-16'),
(92, 'B0076', 'Usaha Pembibitan Belut Di Lahan Sempit', '978-979-002-438-0', 'M.Fajar Januriyata', 'Penebar Swadaya', 115, 3, '2015', 'bk-1508130086.jpg', 'Buku Usaha Pembibitan Belut Di Lahan Sempit', '2017-10-16'),
(93, 'B0077', 'Membuat Aneka Olahan Jagung', '979-489-914-3', 'Erliza Hambali', 'Penebar Swadaya', 83, 3, '2015', 'bk-1508130175.jpg', 'Buku Membuat Aneka Olahan Jagung', '2017-10-16'),
(94, 'B0078', 'Budidaya Kelinci', '979-9415-86-1', 'Sumadji', 'SIC', 47, 3, '2006', 'bk-1508130256.jpg', 'Buku Budidaya Kelinci', '2017-10-16'),
(95, 'B0079', 'Jambu Biji Tanaman Idola', '979-9415-78-0', 'Endyah Murniati', 'SIC', 47, 3, '2006', 'bk-1508130341.jpg', 'Buku Jambu Biji Tanaman Idola', '2017-10-16'),
(96, 'B0080', 'Beternak Lebah ', '979-9415-43-8', 'Bambang Marhiyanto', 'SIC', 60, 3, '2007', 'bk-1508130411.jpg', 'Buku Beternak Lebah ', '2017-10-16'),
(97, 'B0081', 'Membuat Kompos', '978-979-489-540-5', 'L.Murbandono', 'Penebar Swadaya', 68, 3, '2015', 'bk-1508130568.jpg', 'Buku Membuat Kompos', '2017-10-16'),
(98, 'B0082', 'Membuat Mi Sehat', '978-979-002-203-4', 'Suyanti', 'Penebar Swadaya', 72, 3, '2015', 'bk-1508130667.jpg', 'Buku Membuat Mi Sehat', '2017-10-16'),
(99, 'B0083', 'Membuat Bihun, Kwetiau dan Sohun Sehat', '978-979-002-403-8', 'Suyanti', 'Penebar Swadaya', 76, 3, '2015', 'bk-1508130762.jpg', 'Buku Membuat Bihun, Kwetiau dan Sohun Sehat', '2017-10-16'),
(100, 'B0084', 'Kegagalan Modal Kesuksesan', '978-602-9271-18-8', 'Wenny Hikmah', 'Logika Galecio', 68, 3, '2015', 'bk-1508130858.jpg', 'Buku Kegagalan Modal Kesuksesan', '2017-10-16'),
(101, 'B0085', 'Pintar Microsoft Excel', '978-979-1477-79-6', 'Osdirwan Oesman', 'Kriya Pustaka', 72, 3, '2009', 'bk-1508130978.jpg', 'Buku Pintar Microsoft Excel', '2017-10-16'),
(102, 'B0086', 'Membuat Nata De Coco', '979-3567-12-0', 'Y.P. Saragih', 'Puspa Swara', 62, 3, '2004', 'bk-1508131075.jpg', 'Buku Membuat Nata De Coco', '2017-10-16'),
(103, 'B0087', 'Kiat Sukses Jual Beli Mobil', '979-3833-65-3', 'Drs. Boentarto', 'Puspa Swara', 76, 3, '2005', 'bk-1508131157.jpg', 'Buku Kiat Sukses Jual Beli Mobil', '2017-10-16'),
(104, 'B0088', 'Rahasia Dahsyat Sukses dan Masa Depan Cemerlang', '978-602-70334-4-3', 'Supriyadi,ST', 'Brainside Intellegence', 132, 3, '2017', 'bk-1508131319.jpg', 'Buku Rahasia Dahsyat Sukses dan Masa Depan Cemerlang', '2017-10-16'),
(105, 'B0089', 'Pencegahan Bahaya Narkoba', '978-602-18784-9-1', 'Ichsan Solehudin', 'Brainside Intellegence', 84, 3, '2017', 'bk-1508131444.jpg', 'Buku Pencegahan Bahaya Narkoba', '2017-10-16'),
(106, 'B0090', 'Organisasi Kepemimpinan Untuk Pelajar', '978-602-72941-0-3', 'Supriyadi,ST', 'Nurroihan', 134, 3, '2015', 'bk-1508131574.jpg', 'Buku Organisasi Kepemimpinan Untuk Pelajar', '2017-10-16'),
(107, 'B0091', 'Motivasi Sukses Belajar', '978-602-72941-1-0', 'Supriyadi,ST', 'Nurroihan', 103, 3, '2017', 'bk-1508131681.jpg', 'Buku Motivasi Sukses Belajar', '2017-10-16'),
(108, 'B0092', 'Rahasia Pola Asuh Anak ', '978-602-18784-2-2', 'Ichsan Solihudin', 'Brainside Intellegence', 130, 3, '2012', 'bk-1508131775.jpg', 'Buku Rahasia Pola Asuh Anak ', '2017-10-16'),
(109, 'B0093', 'Kiat Sukses Jual Beli Motor Baru & Bekas', '979-3235-72-1', 'Drs. Boentarto', 'Puspa Swara', 70, 3, '2003', 'bk-1508131855.jpg', 'Buku Kiat Sukses Jual Beli Motor Baru & Bekas', '2017-10-16'),
(110, 'B0094', 'Jangan Takut Mulai Bisnis', '978-979-1481-45-8', 'Richie Indrajaya', 'Puspa Swara', 72, 3, '2008', 'bk-1508131936.jpg', 'Buku Jangan Takut Mulai Bisnis', '2017-10-16'),
(111, 'B0095', '101 ++ Ide Jitu Peluang Usaha', '978-979-1481-55-7', 'Tim Gemini Writer', 'Puspa Swara', 68, 3, '2011', 'bk-1508132033.jpg', 'Buku 101 ++ Ide Jitu Peluang Usaha', '2017-10-16'),
(112, 'B0096', 'Ragam Inspirasi Desain Cantik', '978-602-8485-34-6', 'Sari Sulistiyo', 'Puspa Swara', 68, 3, '2011', 'bk-1508132120.jpg', 'Buku Ragam Inspirasi Desain Cantik', '2017-10-16'),
(113, 'B0097', 'Camilan Keluarga Lezat & Praktis', '978-602-8453-43-1', 'Aiwida Farida', 'Kriya Pustaka', 60, 3, '2011', 'bk-1508132217.jpg', 'Buku Ragam Camilan Keluarga Lezat & Praktis', '2017-10-16'),
(114, 'B0098', 'Sulam Perca Unik & Cantik', '978-602-8453-04-2', 'Haneda Ananta', 'Kriya Pustaka', 74, 3, '2010', 'bk-1508132303.jpg', 'Buku Sulam Perca Unik & Cantik', '2017-10-16'),
(115, 'B0099', 'Mini Cake Untuk Pemula', '978-502-8453-39-4', 'Dhiandra Novrina Diyanti', 'Kriya Pustaka', 72, 3, '2011', 'bk-1508132418.jpg', 'Buku Mini Cake Untuk Pemula', '2017-10-16'),
(116, 'B0100', 'Kreasi Sulam Timbul', '978-602-8453-10-3', 'Cut Meurah Hanoem', 'Kriya Pustaka', 56, 3, '2011', 'bk-1508132514.jpg', 'Buku Kreasi Sulam Timbul', '2017-10-16'),
(117, 'B0101', 'Kemasan Kain Catchy & Unique', '978-602-8453-31-6', 'Astri Damayanti', 'Kriya Pustaka', 56, 3, '2011', 'bk-1508132624.jpg', 'Buku Kemasan Kain Catchy & Unique', '2017-10-16'),
(118, 'B0102', 'Flanel Untuk Make Over', '978-602-8453-34-9', 'Dian Kusuma Wardhani', 'Kriya Pustaka', 64, 3, '2011', 'bk-1508132744.jpg', 'Buku Flanel Untuk Make Over', '2017-10-16'),
(119, 'B0103', 'Aplikasi Jeans Chic & Trendy', '978-602-8453-32-6', 'Aphrodita Wibowo', 'Kriya Pustaka', 68, 3, '2011', 'bk-1508132832.jpg', 'Buku Aplikasi Jeans Chic & Trendy', '2017-10-16'),
(120, 'B0104', 'Aksesori Cantik Dari Manik', '979-3567-56-2', 'Yuki', 'Puspa Swara', 70, 3, '2005', 'bk-1508132845.jpg', 'Buku Aksesori Cantik Dari Manik', '2017-10-16'),
(121, 'B0105', 'Kreasi Sulam Perca Untuk Pemula', '978-979-1477-73-4', 'Haneda Ananta', 'Kriya Pustaka', 80, 3, '2009', 'bk-1508132944.jpg', 'Buku Kreasi Sulam Perca Untuk Pemula', '2017-10-16'),
(133, 'B0117', 'Potensi dan Analisis Usaha Beternak Kerbau', '979-9029-90-7', 'Ir. H. Rahmat Rukmana M.Sc.,M.M', 'Aneka Ilmu', 50, 3, '2010', 'bk-1508455115.jpg', 'Buku Potensi dan Analisis Usaha Beternak Kerbau', '2017-10-20'),
(134, 'B0118', 'Bonsai Mini Yang Cantik', '978-979-1496-76-6', 'Susi Dyah Fatmawati', 'Sinar Cemerlang Abadi', 58, 3, '2007', 'bk-1508455291.jpg', 'Buku Bonsai Mini Yang Cantik', '2017-10-20'),
(135, 'B0119', 'Budidaya Buah Dalam Pot', '978-979-1106-11-5', 'Ir.Bambang Cahyono', 'Sinar Cemerlang Abadi', 74, 3, '2007', 'bk-1508455418.jpg', 'Buku Budidaya Buah Dalam Pot', '2017-10-20'),
(136, 'B0120', 'Budidaya Manggis', '979-736-698-7', 'Setijo Pijoto', 'Aneka Ilmu', 106, 3, '2007', 'bk-1508455509.jpg', 'Buku Budidaya Manggis', '2017-10-20'),
(137, 'B0121', 'Cara Membuat Saus', '978-979-736-837-1', 'Abdul Majid', 'Aneka Ilmu', 60, 3, '2008', 'bk-1508456534.jpg', 'Buku Cara Membuat Saus', '2017-10-20'),
(138, 'B0122', 'Cara Mudah Bertanam Semangka', '978-979-1496-68-1', 'Sri Widayati', 'Sinar Cemerlang Abadi', 60, 3, '2010', 'bk-1508456626.jpg', 'Buku Cara Mudah Bertanam Semangka', '2017-10-20'),
(139, 'B0123', 'Tenik Budidaya dan Pengolahan Jambu Mete', '979-736-657-9', 'Ir. Budi Samadi', 'Aneka Ilmu', 47, 3, '2007', 'bk-1508456721.jpg', 'Buku Tenik Budidaya dan Pengolahan Jambu Mete', '2017-10-20'),
(140, 'B0124', 'Teknik Budidaya Dan Analisis Usaha Tani Kacang Hijau', '979-736-7000-2', 'Ir.Bambang Cahyono', 'Aneka Ilmu', 122, 3, '2010', 'bk-1508456821.jpg', 'Buku Teknik Budidaya Dan Analisis Usaha Tani Kacang Hijau', '2017-10-20'),
(141, 'B0125', 'Budidaya Dan  Pascapanen melinjo', '979-736-693-6', 'H. Rahmat Rukmana', 'Aneka Ilmu', 53, 3, '2008', 'bk-1508456922.jpg', 'Buku Budidaya Dan  Pascapanen melinjo', '2017-10-20'),
(142, 'B0126', 'Teknik Budidaya Dan Pascapanen Markisa', '979-736-711-8', 'Setijo Pijoto', 'Aneka Ilmu', 105, 3, '2007', 'bk-1508457102.jpg', 'Buku Teknik Budidaya Dan Pascapanen Markisa', '2017-10-20'),
(143, 'B0127', 'Tanaman Obat Keluarga', '978-979-736-907-4', 'Eko Susilowati', 'Sinar Cemerlang Abadi', 72, 3, '2007', 'bk-1508457209.jpg', 'Buku Tanaman Obat Keluarga', '2017-10-20'),
(144, 'B0128', 'Atletik Cabang Lempar', '978-979-048-245-6', 'Munasilah', 'Aneka Ilmu', 58, 3, '2008', 'bk-1508457310.jpg', 'Buku Atletik Cabang Lempar', '2017-10-20'),
(145, 'B0129', 'Beternak Domba', '979-736-689-8', 'H. Rahmat Rukmana', 'Aneka Ilmu', 103, 3, '2008', 'bk-1508457377.jpg', 'Buku Beternak Domba', '2017-10-20'),
(146, 'B0130', 'Bermain Bulu Tangkis', '979-736-048-244-9', 'Sutono L.R', 'Aneka Ilmu', 80, 3, '2008', 'bk-1508457485.jpg', 'Buku Bermain Bulu Tangkis', '2017-10-20'),
(147, 'B0131', 'Bercocok Tanam Pepaya', '979-736-548-9', 'Wahyu Muljana', 'Aneka Ilmu', 62, 3, '2008', 'bk-1508457669.jpg', 'Buku Bercocok Tanam Pepaya', '2017-10-20'),
(148, 'B0132', 'Bercocok Tanam Palawija', '979-736-356-2', 'Sugeng HR', 'Aneka Ilmu', 54, 3, '2010', 'bk-1508457850.jpg', 'Buku Bercocok Tanam Palawija', '2017-10-20'),
(149, 'B0133', 'Bercocok Tanam Kopi', '979-736-546-8', 'Wahyu Muljana', 'Aneka Ilmu', 70, 3, '2006', 'bk-1508458005.jpg', 'Buku Bercocok Tanam Kopi', '2017-10-20'),
(150, 'B0134', 'Bercocok Tanam Cengkeh', '979-736-545-9', 'Wahyu Muljana', 'Aneka Ilmu', 75, 3, '2010', 'bk-1508458084.jpg', 'Buku Bercocok Tanam Cengkeh', '2017-10-20'),
(151, 'B0135', 'Ada Apa Dengan Narkoba', '979-736-732-0', 'Winarto S.S', 'Aneka Ilmu', 89, 3, '2007', 'bk-1508458241.jpg', 'Buku Ada Apa Dengan Narkoba', '2017-10-20'),
(152, 'B0136', 'Kiat Praktis Menjadi Penyiar', '978-979-18712-1-1', 'Taofik Rahman', 'P & G Kilat Jaya', 59, 3, '2008', 'bk-1508458357.jpg', 'Buku Kiat Praktis Menjadi Penyiar', '2017-10-20'),
(153, 'B0137', 'Teknologi Budidaya Ayam Buras Dan Itik', '978-979-18712-4-2', 'Drs. Koes Irianto', 'P & G Kilat Jaya', 78, 3, '2008', 'bk-1508458467.jpg', 'Buku Teknologi Budidaya Ayam Buras Dan Itik', '2017-10-20'),
(154, 'B0138', 'Beternak Ikan Koi', '978-979-736-824-1', 'Abu Ilya', 'Aneka Ilmu', 58, 3, '2009', 'bk-1508458563.jpg', 'Buku Beternak Ikan Koi', '2017-10-20'),
(155, 'B0139', 'Budidaya Tanaman Krisan', '978-979-1106-24-5', 'Ika Kurniawati', 'Sinar Cemerlang Abadi', 58, 3, '2007', 'bk-1508458641.jpg', 'Buku Budidaya Tanaman Krisan', '2017-10-20'),
(156, 'B0140', 'Budidaya Jalak Putih', '978-979-1769-0-4', 'Rukmana', 'Mitra Utama', 75, 3, '2008', 'bk-1508458742.jpg', 'Buku Budidaya Jalak Putih', '2017-10-20'),
(157, 'B0141', 'Budidaya Jambu Biji', '979-736-780-0', 'T. Puji Rahayu', 'Aneka Ilmu', 58, 3, '2007', 'bk-1508458826.jpg', 'Buku Budidaya Jambu Biji', '2017-10-20'),
(158, 'B0142', 'Gula Merah Dari Tebu', '979-736-378-3', 'Ir. H. Rahmat Rukmana M.Sc.,M.M', 'Aneka Ilmu', 79, 3, '2010', 'bk-1508458917.jpg', 'Buku Gula Merah Dari Tebu', '2017-10-20'),
(159, 'B0143', 'Potensi Dan Prospeknya Ikan Sepat Siam', '979-736-692-8', 'H. Rahmat Rukmana', 'Aneka Ilmu', 55, 3, '2007', 'bk-1508458996.jpg', 'Buku Potensi Dan Prospeknya Ikan Sepat Siam', '2017-10-20'),
(160, 'B0144', 'Beternak Kodok', '978-979-1496-90-2', 'Abdul Rohim', 'Sinar Cemerlang Abadi', 60, 3, '2007', 'bk-1508459073.jpg', 'Buku Beternak Kodok', '2017-10-20'),
(161, 'B0145', 'Budidaya Aglaonema', '979-736-739-8', 'Ika Kurniawati', 'Gbyyas Putra', 74, 3, '2010', 'bk-1508459178.jpg', 'Buku Budidaya Aglaonema', '2017-10-20'),
(162, 'B0146', 'Budidaya Bunga Melati', '978-979-736-775-6', 'Yusuf Maulana', 'Sinar Cemerlang Abadi', 55, 3, '2007', 'bk-1508459268.jpg', 'Buku Budidaya Bunga Melati', '2017-10-20'),
(163, 'B0147', 'Budidaya Ikan Betutu', '979-736-702-9', 'M.Gufron H.Kardi K', 'Aneka Ilmu', 153, 3, '2010', 'bk-1508459339.jpg', 'Buku Budidaya Ikan Betutu', '2017-10-20'),
(164, 'B0148', 'Penangkaran Cucak Hijau', '978-979-17609-6-6', 'Rukmana', 'Mitra Utama', 90, 3, '2009', 'bk-1508459441.jpg', 'Buku Penangkaran Cucak Hijau', '2017-10-20'),
(165, 'B0149', 'Rajungan', '979-736-704-5', 'M.Gufron H.Kardi K', 'Aneka Ilmu', 74, 3, '2007', 'bk-1508459550.jpg', 'Buku Rajungan', '2017-10-20'),
(166, 'B0150', 'Budidaya Kepiting Bakau', '979-736-703-7', 'M.Gufron H.Kardi K', 'Aneka Ilmu', 189, 3, '2007', 'bk-1508459651.jpg', 'Buku Budidaya Kepiting Bakau', '2017-10-20'),
(167, 'B0151', 'Budidaya Tanaman Palem', '979-736-744-4', 'Abi Wisam. M. R', 'Gbyyas Putra', 55, 3, '2007', 'bk-1508459740.jpg', 'Buku Budidaya Tanaman Palem', '2017-10-20'),
(168, 'B0152', 'Budidaya Tanaman Soka', '978-979-1495-39-4', 'Frida N', 'Gbyyas Putra', 74, 3, '2010', 'bk-1508459819.jpg', 'Buku Budidaya Tanaman Soka', '2017-10-20'),
(169, 'B0153', 'Mengenal Produk Nasional Batik Dan Tenun', '978-979-1493-73-4', 'Teguh Prayitno', 'Sindur Press', 60, 3, '2009', 'bk-1508459917.jpg', 'Buku Mengenal Produk Nasional Batik Dan Tenun', '2017-10-20'),
(170, 'B0154', 'Mengenal Piranti Komputer Pribadi', '978-602-8155-53-3', 'Abu Azka', 'Cahaya Pustaka Raga', 97, 3, '2009', 'bk-1508460015.jpg', 'Buku Mengenal Piranti Komputer Pribadi', '2017-10-20'),
(171, 'B0155', 'Etiket Pergaulan', '978-602-221-085-6', 'Pinandita Nur Amalia', 'Gading Inti Prima', 97, 3, '2012', 'bk-1508460128.jpg', 'Buku Etiket Pergaulan', '2017-10-20'),
(172, 'B0156', 'Belajar Pidato Untuk Pemula', '978-979-736-737-6', 'Asul Wiyanto', 'Aneka Ilmu', 74, 3, '2008', 'bk-1508460403.jpg', 'Buku Belajar Pidato Untuk Pemula', '2017-10-20'),
(173, 'B0157', 'Budidaya Dan Manfaat Kecubung,Jengger Ayam Dan Kana', '978-979-050-080-8', 'Kardono', 'Armandelta Selaras', 53, 3, '2010', 'bk-1508460578.jpg', 'Buku Budidaya Dan Manfaat Kecubung,Jengger Ayam Dan Kana', '2017-10-20'),
(174, 'B0158', 'Budidaya Dan Manfaat Bawang,Mentimun Dan Pare', '978-979-050-076-1', 'Kardono', 'Armandelta Selaras', 91, 3, '2010', 'bk-1508460671.jpg', 'Buku Budidaya Dan Manfaat Bawang,Mentimun Dan Pare', '2017-10-20'),
(175, 'B0159', 'Budidaya Dan Manfaat Mengkudu,Blustru,Ciplukan Dan Mahkota Dewa', '978-979-050-077-8', 'Kardono', 'Armandelta Selaras', 63, 3, '2010', 'bk-1508460798.jpg', 'Buku Budidaya Dan Manfaat Mengkudu,Blustru,Ciplukan Dan Mahkota Dewa', '2017-10-20'),
(176, 'B0160', 'Budidaya Dan Manfaat Temu Giring,Temu Hitam Dan Temu Lawak', '978-979-050-085-3', 'Kardono', 'Armandelta Selaras', 57, 3, '2010', 'bk-1508460931.jpg', 'Buku Budidaya Dan Manfaat Temu Giring,Temu Hitam Dan Temu Lawak', '2017-10-20'),
(177, 'B0161', 'Budidaya Dan Manfaat Wortel,SIrsak Dan Alpukat', '978-979-050-086-0', 'Kardono', 'Armandelta Selaras', 65, 3, '2010', 'bk-1508461006.jpg', 'Buku Budidaya Dan Manfaat Wortel,SIrsak Dan Alpukat', '2017-10-20'),
(178, 'B0162', 'Langkah Langkah Membuat Skenario Untuk Film Sekolah', '978-602-9362-17-6', 'Rumidah Rabi\'ah', 'Valtis Vortuna', 78, 3, '2017', 'bk-1508461192.jpg', 'Buku Langkah Langkah Membuat Skenario Untuk Film Sekolah', '2017-10-20'),
(179, 'B0163', 'Menciptakan Pribadi Anak Mudah Bergaul', '978-979-1495-22-6', 'Muryanto S.Pd', 'Gbyyas Putra', 58, 3, '2009', 'bk-1508461457.jpg', 'Buku Menciptakan Pribadi Anak Mudah Bergaul', '2017-10-20'),
(180, 'B0164', 'Budidaya Dan Pacapanen Lobster Air Tawar', '978-979-736-821-0', 'Puja Laksana', 'Aneka Ilmu', 58, 3, '2009', 'bk-1508461559.jpg', 'Buku Budidaya Dan Pacapanen Lobster Air Tawar', '2017-10-20'),
(181, 'B0165', 'Mari Beternak Ayam', '979-736-352-9', 'Sukanto', 'Aneka Ilmu', 58, 3, '2008', 'bk-1508461644.jpg', 'Buku Mari Beternak Ayam', '2017-10-20'),
(182, 'B0166', 'Membuat Ukiran Dari Bahan Cabus', '978-979-149-428-1', 'Edji Kismartanto', 'Pamularsih', 58, 3, '2007', 'bk-1508461733.jpg', 'Buku Membuat Ukiran Dari Bahan Cabus', '2017-10-20'),
(183, 'B0167', 'Bagaimana Mengolah Dan Mengawetkan Ikan', '978-607-842600-8', 'Edi Warsidi', 'Mitra Utama', 93, 3, '2008', 'bk-1508461921.jpg', 'Buku Bagaimana Mengolah Dan Mengawetkan Ikan', '2017-10-20'),
(184, 'B0168', 'Mengenal Dan Membudidayakan Buah Naga', '979-736-724-9', 'Sri Winarsih', 'Aneka Ilmu', 57, 3, '2009', 'bk-1508462007.jpg', 'Buku Mengenal Dan Membudidayakan Buah Naga', '2017-10-20'),
(185, 'B0169', 'Kreasiku Seri Tata Surya', '978-979-1496-15-5', 'Drs. Mulyadi', 'Sinar Cemerlang Abadi', 58, 3, '2009', 'bk-1508462094.jpg', 'Buku Kreasiku Seri Tata Surya', '2017-10-20'),
(186, 'B0170', 'Teladan Si Tukang Bubur', '978-602-221-338-3', 'Rio Agung Haryu Mulia', 'Gading Inti Prima', 56, 3, '2017', 'bk-1508462257.jpg', 'Buku Teladan Si Tukang Bubur', '2017-10-20'),
(187, 'B0171', 'Landasan, Asas Dan Kedisiplinan Kepramukaan', '978-602-221-351-2', 'SIti Kurnia', 'Gading Inti Prima', 64, 3, '2017', 'bk-1508462399.jpg', 'Buku Landasan, Asas Dan Kedisiplinan Kepramukaan', '2017-10-20'),
(188, 'B0172', 'Wacana Perdamaian Dan Toleransi Agama Agama Indonesia', '978-602-8608-82-4', 'Rumidah Rabi\'ah', 'Gading Inti Prima', 96, 3, '2017', 'bk-1508462548.jpg', 'Buku Wacana Perdamaian Dan Toleransi Agama Agama Indonesia', '2017-10-20'),
(189, 'B0173', 'Seni Karawitan', '978-979-070-130-4', 'S. Heliarta', 'Aneka Ilmu', 60, 3, '2009', 'bk-1508462655.jpg', 'Buku Seni Karawitan', '2017-10-20'),
(190, 'B0174', 'Mengenal Teater Di Indonesia', '978-979-070-131-1', 'M. Noor Said', 'Aneka Ilmu', 52, 3, '2009', 'bk-1508462738.jpg', 'Buku Mengenal Teater Di Indonesia', '2017-10-20'),
(191, 'B0175', 'Mengenal Istilah Komputer A-Z', '978-602-8155-54-0', 'Deni Risna', 'Cahaya Pustaka Raga', 103, 3, '2010', 'bk-1508462837.jpg', 'Buku Mengenal Istilah Komputer A-Z', '2017-10-20'),
(192, 'B0176', 'Kelola Hati, Raih Perdamaian', '978-602-8608-83-1', 'Laksmi Sitara', 'Gading Inti Prima', 83, 3, '2012', 'bk-1508463083.jpg', 'Buku Kelola Hati, Raih Perdamaian', '2017-10-20'),
(193, 'B0177', 'Kearifan Lokal: Benteng Kerukunan', '978-602-8608-85-5', 'Samita Radmila', 'Gading Inti Prima', 96, 3, '2012', 'bk-1508463190.jpg', 'Buku Kearifan Lokal: Benteng Kerukunan', '2017-10-20'),
(194, 'B0178', 'Budaya Betawi Yang Ku Kenal', '978-979-050-056-3', 'Fidelara', 'Armandelta Selaras', 56, 3, '2010', 'bk-1508463170.jpg', 'Buku Budaya Betawi Yang Ku Kenal', '2017-10-20'),
(195, 'B0179', 'SIkap Dan Moral Penentu Kesuksesan', '978-979-1493-39-0', 'Dra. Hj. Sri Mulyati', 'Sindur Press', 60, 3, '2009', 'bk-1508463338.jpg', 'Buku SIkap Dan Moral Penentu Kesuksesan', '2017-10-20'),
(196, 'B0180', 'Seni Dan Teknik Mendengarkan', '978-602-8608-88-6', 'Eddy Junaedi', 'Gading Inti Prima', 71, 3, '2012', 'bk-1508463881.jpg', 'Buku Seni Dan Teknik Mendengarkan', '2017-10-20'),
(197, 'B0181', 'Rumput Laut Rumput Harapan', '978-979-17609-1-1', 'Edi Warsidi', 'Mitra Utama', 58, 3, '2009', 'bk-1508464028.jpg', 'Buku Rumput Laut Rumput Harapan', '2017-10-20'),
(198, 'B0182', ' ', '978-602-221-352-9', 'Siti Nur Laela', 'Gading Inti Prima', 78, 3, '2017', 'bk-1508464271.jpg', 'Buku Perkembangan Karakter Dalam Perkemahan Penggalang', '2017-10-20'),
(199, 'B0183', 'Menjelajah Internet', '978-602-8155-52-6', 'M. Rezky', 'Cahaya Pustaka Raga', 112, 3, '2009', 'bk-1508464349.jpg', 'Buku Menjelajah Internet', '2017-10-20'),
(200, 'B0184', 'Ensiklopedia IPA Percobaan Sains 2', '978-979-3535-64-7', 'Nita Sudarjo', 'Penerbit Lentera Abadi', 207, 3, '2017', 'bk-1508464770.jpg', 'Buku Ensiklopedia IPA Percobaan Sains 2', '2017-10-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` varchar(1000) NOT NULL,
  `kelas` enum('VII','VIII','IX') NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_publish` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `tanggal_pinjam`, `nama`, `kategori`, `kelas`, `lama_pinjam`, `tanggal_kembali`, `denda`, `status`, `tgl_publish`) VALUES
(89, '2018-01-25', 'Annisa derrymia Jasmine', 'Buku Bahasa Sunda Kelas 8 (VIII) SMP', 'VIII', 2, '2018-01-29', '1000', 0, '2018-01-25'),
(88, '2018-01-25', 'Annisa derrymia Jasmine', 'Buku Seni Budaya Kelas 8 (VIII) SMP Semester 1', 'VIII', 4, '2018-01-28', '0', 0, '2018-01-25'),
(87, '2018-01-25', 'Giza Shabila Harris', 'Buku Bahaya dan Pencegahan DBD', 'VII', 2, '2018-01-31', '2000', 0, '2018-01-25'),
(86, '2018-01-25', 'Giza Shabila Harris', 'Buku Belimbing Manis', 'VII', 5, '0000-00-00', '0', 1, '2018-01-25'),
(85, '2018-01-25', 'Abar Almazari', 'Buku Seni Budaya Kelas 7 (VII) SMP Semester 1', 'VII', 4, '2018-01-30', '500', 0, '2018-01-25'),
(84, '2018-01-25', 'Abar Almazari', 'Buku Prakarya Kelas 7 (VII) SMP Semester 1', 'VII', 3, '2018-01-30', '1000', 0, '2018-01-25'),
(83, '2018-01-25', 'Ananda Vanya Putri', 'Buku Prakarya Kelas 7 (VII) SMP Semester 1', 'VII', 4, '2018-01-31', '1000', 0, '2018-01-25'),
(82, '2018-01-25', 'Ananda Vanya Putri', 'Buku Seni Budaya Kelas 7 (VII) SMP Semester 1', 'VII', 3, '0000-00-00', '0', 1, '2018-01-25'),
(81, '2018-01-25', 'Aisha Humayra', 'Buku Prakarya Kelas 7 (VII) SMP Semester 1', 'VII', 4, '2018-01-29', '0', 0, '2018-01-25'),
(80, '2018-01-25', 'Aisha Humayra', 'Buku Seni Budaya Kelas 7 (VII) SMP Semester 1', 'VII', 3, '2018-01-31', '1500', 0, '2018-01-25'),
(90, '2018-01-25', 'Rahma Dzakia Fitri', 'Buku Ilmu Pengetahuan Alam Kelas 8 (VIII) SMP Semester 1', 'VIII', 5, '2018-01-30', '0', 0, '2018-01-25'),
(91, '2018-01-25', 'Mochamad Al-faiz', 'Buku Prakarya Kelas 8 (VIII) SMP Semester 1', 'VIII', 6, '0000-00-00', '0', 1, '2018-01-25'),
(92, '2018-01-25', 'Taris Falih hibban', 'Buku Indonesia Kelas 8 (VIII) SMP', 'VIII', 5, '2018-01-31', '500', 0, '2018-01-25'),
(93, '2018-01-25', 'Alia Rahma Nisa', 'Buku Ensiklopedia IPA Percobaan Sains 2', 'IX', 4, '0000-00-00', '0', 1, '2018-01-25'),
(94, '2018-01-25', 'Avika Mollina Putri Ghifari ', 'Buku Belimbing Manis', 'IX', 2, '2018-01-29', '1000', 0, '2018-01-25'),
(95, '2018-01-25', 'Avika Mollina Putri Ghifari ', 'Buku Bercocok Tanam Cabai Rawit, Cabai Merah dan Cabai Jawa', 'IX', 3, '0000-00-00', '0', 1, '2018-01-25'),
(96, '2018-01-30', 'Sophia Queen Alsheera', 'Buku Mengolah Sampah Menjadi Kompos', 'IX', 5, '2018-02-08', '500', 0, '2018-01-30'),
(97, '2018-01-30', 'Sophia Queen Alsheera', 'Buku Budidaya Tanaman Jarak Pagar', 'IX', 2, '0000-00-00', '0', 1, '2018-01-30'),
(98, '2018-01-30', 'Sophia Queen Alsheera', 'Buku Bonsai Mini Yang Cantik', 'IX', 4, '2018-01-31', '0', 0, '2018-01-30'),
(99, '2018-01-30', 'Umar Hanif Abdul Aziz', 'Buku Ensiklopedia IPA Percobaan Sains 2', 'IX', 5, '0000-00-00', '0', 1, '2018-01-30'),
(100, '2018-01-30', 'Umar Hanif Abdul Aziz', 'Buku Pola Pelaksanaan Pendidikan Kecakapan Hidup', 'IX', 2, '2018-02-06', '1000', 0, '2018-01-30'),
(101, '2018-01-30', 'Gian Guido Hibatulloh', 'Buku Pembenihan & Pembesaran Lele', 'IX', 6, '2018-02-09', '500', 0, '2018-01-30'),
(102, '2018-01-30', 'Gian Guido Hibatulloh', 'Buku Budidaya Anggur', 'IX', 7, '2018-02-02', '0', 0, '2018-01-30'),
(103, '2018-01-30', 'Mohammad Raesa Fadila', 'Buku Bertanam Tomat Dalam Pot dan Polibag', 'IX', 4, '0000-00-00', '0', 1, '2018-01-30'),
(104, '2018-01-30', 'Mohammad Raesa Fadila', 'Buku Aneka Produk Olahan Kelapa', 'IX', 6, '2018-02-09', '500', 0, '2018-01-30'),
(105, '2018-01-30', 'Zenita Aina Rifania', 'Buku Pintar Microsoft Excel', 'IX', 7, '0000-00-00', '0', 1, '2018-01-30'),
(106, '2018-01-30', 'Zenita Aina Rifania', 'Buku Mari Membuat Wayang Kulit', 'IX', 2, '2018-02-05', '500', 0, '2018-01-30'),
(107, '2018-01-30', 'Hasna Nazihah Ahmad', 'Buku Menghias Rumah Dengan Tanaman Pot', 'IX', 5, '2018-01-31', '0', 0, '2018-01-30'),
(108, '2018-01-30', 'Hasna Nazihah Ahmad', 'Buku Mari Membuat Wayang Kulit', 'IX', 5, '0000-00-00', '0', 1, '2018-01-30'),
(109, '2018-01-30', 'Hasna Nazihah Ahmad', 'Buku Membuat Aneka Olahan Jagung', 'IX', 1, '2018-02-05', '1000', 0, '2018-01-30'),
(110, '2018-01-30', 'M. Kurniawan Al-Fajar', 'Buku Pintar Microsoft Excel', 'IX', 4, '0000-00-00', '0', 1, '2018-01-30'),
(111, '2018-01-30', 'M. Kurniawan Al-Fajar', 'Buku Mengenal Perangkat Komputer dan Cara Menginstal Software', 'IX', 2, '2018-02-06', '1000', 0, '2018-01-30'),
(112, '2018-01-30', 'M. Kurniawan Al-Fajar', 'Buku Pintar Microsoft Power Point untuk Pemula ', 'IX', 3, '0000-00-00', '0', 1, '2018-01-30'),
(113, '2018-01-30', 'Iqna Insyi Nabila', 'Buku Budidaya Anggur', 'IX', 4, '0000-00-00', '0', 1, '2018-01-30'),
(114, '2018-01-30', 'Iqna Insyi Nabila', 'Buku Aneka Ramuan Bekhasiat Dari Temu Temuan', 'IX', 4, '2018-02-08', '1000', 0, '2018-01-30'),
(115, '2018-01-30', 'Wiati Acika Gumati', 'Buku 19 Aktivitas Sains Menyenangkan Energi', 'IX', 4, '0000-00-00', '0', 1, '2018-01-30'),
(116, '2018-01-30', 'Wiati Acika Gumati', 'Buku Sepiring Kembang Tahu dan Segelas Susu Kedelai', 'IX', 5, '0000-00-00', '0', 1, '2018-01-30'),
(117, '2018-01-30', 'Wiati Acika Gumati', 'Buku Budidaya Anggur', 'IX', 2, '2018-02-07', '1500', 0, '2018-01-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visit`
--

CREATE TABLE `tb_visit` (
  `id` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_visit`
--

INSERT INTO `tb_visit` (`id`, `ip`, `tanggal`, `hits`, `online`) VALUES
(2, 'user-PC', '2017-11-12', 75, '1510483027'),
(3, 'user-PC', '2017-11-13', 69, '1510570962'),
(4, 'user-PC', '2017-11-17', 17, '1510957783'),
(5, 'user-PC', '2017-11-18', 3, '1510973050'),
(6, 'user-PC', '2017-11-20', 57, '1511183534'),
(7, 'user-PC', '2017-11-20', 57, '1511183534'),
(8, 'user-PC', '2017-12-06', 56, '1512532847'),
(9, 'user-PC', '2017-12-07', 29, '1512656427'),
(10, 'user-PC', '2017-12-11', 14, '1512992747'),
(11, 'user-PC', '2017-12-19', 10, '1513660364'),
(12, 'user-PC', '2017-12-20', 6, '1513751461'),
(13, 'user-PC', '2017-12-21', 4, '1513810987'),
(14, 'user-PC', '2017-12-26', 7, '1514268210'),
(15, 'user-PC', '2017-12-27', 59, '1514350912'),
(16, 'user-PC', '2018-01-22', 1, '1516661913'),
(17, 'user-PC', '2018-01-23', 66, '1516667692'),
(18, 'user-PC', '2018-01-24', 3, '1516757576'),
(19, 'user-PC', '2018-01-25', 56, '1516850870'),
(20, 'user-PC', '2018-01-26', 16, '1516927615'),
(21, 'user-PC', '2018-01-30', 53, '1517276121'),
(22, 'user-PC', '2018-01-31', 15, '1517388286'),
(23, 'user-PC', '2018-02-01', 1, '1517472464');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `id_anggota` int(255) NOT NULL,
  `nis` int(20) NOT NULL,
  `nm_lengkap` varchar(200) NOT NULL,
  `kelas` enum('VII','VIII','IX') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `status` enum('petugas','anggota') NOT NULL,
  `tgl_publish` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`id_anggota`, `nis`, `nm_lengkap`, `kelas`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `username`, `password`, `status`, `tgl_publish`) VALUES
(15, 101114834, 'Asep Risdiana', '', 'Bandung', '1995-08-03', 'Laki-Laki', 'Jl Sindang Sari Barat', 'risdiana', '123', 'petugas', '2017-12-27'),
(22, 17180703, 'Ananda Vanya Putri', 'VII', 'Cimahi', '2005-04-30', 'Perempuan', 'Jln Alam Asri Lestari No 12 Ciawitali', 'ananda', 'Ananda12345', 'anggota', '2018-01-25'),
(21, 17180702, 'Aisha Humayra', 'VII', 'Bandung', '2005-12-08', 'Perempuan', 'Jln Cihanjuang Cibaligo No 3', 'aisha', 'Aisha12345', 'anggota', '2018-01-25'),
(20, 17180701, 'Abar Almazari', 'VII', 'Bandung', '2005-09-12', 'Laki-Laki', 'Jln Cihanjuang Cibaligo', 'abar', 'Abar12345', 'anggota', '2018-01-25'),
(23, 17180704, 'Audry Satya Pramudika', 'VII', 'Subang', '2004-05-26', 'Laki-Laki', 'Margaluyu No 124', 'audry', 'Audry12345', 'anggota', '2018-01-25'),
(24, 17180705, 'Fely Febrianti', 'VII', 'Bandung', '2005-02-19', 'Perempuan', 'Jln Kamarung', 'fely', 'Fely12345', 'anggota', '2018-01-25'),
(25, 17180706, 'Giza Shabila Harris', 'VII', 'Bandung', '2005-09-29', 'Perempuan', 'Jln Nirwana', 'giza', 'Giza12345', 'anggota', '2018-01-25'),
(26, 17180707, 'Himendra Fadhil Gunawan', 'VII', 'Bandung', '2005-04-29', 'Laki-Laki', 'Jln Cihanjuang', 'himendra', 'Himendra12345', 'anggota', '2018-01-25'),
(27, 17180708, 'Imtinan Mumtaz', 'VII', 'Palangkaraya', '2005-10-31', 'Perempuan', 'Jln Cisawi', 'imtinan', 'Imtinan12345', 'anggota', '2018-01-25'),
(28, 17180709, 'M. Fikri King Alsheera', 'VII', 'Bandung', '2005-10-10', 'Laki-Laki', 'Jln Cihanjuang', 'fikri', 'Fikri12345', 'anggota', '2018-01-25'),
(29, 17180710, 'Muhammad Fauzi Abdurrafi', 'VII', 'Bandung', '2005-02-05', 'Laki-Laki', 'Jln Babakan Cianjur', 'fauzi', 'Fauzi12345', 'anggota', '2018-01-25'),
(30, 17180711, 'Nuansa Bhalqiest Jasmine Alexandria', 'VII', 'Bandung', '2005-03-30', 'Perempuan', 'Jln Sarimanah', 'nuansa', 'Nuansa12345', 'anggota', '2018-01-25'),
(31, 17180712, 'Rifqi Muhamad Farhan', 'VII', 'Tasikmalaya', '2004-04-18', 'Laki-Laki', 'Perumahan Bumi Sari', 'rifqi', 'Rifqi12345', 'anggota', '2018-01-25'),
(32, 17180713, 'Thariq Fadhillah Mumtaz', 'VII', 'Bandung', '2004-11-09', 'Laki-Laki', 'Cluster Darul Halim', 'thariq', 'Thariq12345', 'anggota', '2018-01-25'),
(33, 17180714, 'Djainal Mutaqin', 'VII', 'Bandung', '2005-06-17', 'Laki-Laki', 'Jln Cilimus', 'djainal', 'Djainal12345', 'anggota', '2018-01-25'),
(34, 17180715, 'Zahra Khairunnisa Ramadhania', 'VII', 'Bandung', '2005-10-12', 'Perempuan', 'Sariwangi Regency', 'zahra', 'Zahra12345', 'anggota', '2018-01-25'),
(35, 16170701, 'Annisa derrymia Jasmine', 'VIII', 'Bandung', '2004-02-19', 'Perempuan', 'Cibaligo Permai', 'annisa', 'Annisa123456', 'anggota', '2018-01-25'),
(36, 16170702, 'Lintang Farrah Karainan', 'VIII', 'Sumedang', '2004-05-28', 'Perempuan', 'Sariwangi Regency', 'lintang', 'Lintang123456', 'anggota', '2018-01-25'),
(37, 16170704, 'Muhammad Fakhreza Andnur Ramadhan', 'VIII', 'Bandung', '2003-11-05', 'Laki-Laki', 'Jln Cihanjuang', 'andnur', 'Andnur123456', 'anggota', '2018-01-25'),
(38, 16170705, 'Muhammad Fawwaz Azhar', 'VIII', 'Bandung', '2004-04-21', 'Laki-Laki', 'Jln Sukajadi', 'fawwaz', 'Fawwaz123456', 'anggota', '2018-01-25'),
(39, 16170706, 'Muhammad Naufal Zahran Al-Firdaus', 'VIII', 'Surabaya', '2004-03-15', 'Laki-Laki', 'Jln Cihanjuang', 'naufal', 'Naufal123456', 'anggota', '2018-01-25'),
(40, 16170707, 'Muhammad Raditya Rizqullah', 'VIII', 'Bandung', '2004-04-22', 'Laki-Laki', 'Pondok Bunga Sariwangi', 'raditya', 'Raditya123456', 'anggota', '2018-01-25'),
(41, 16170708, 'Mochamad Al-faiz', 'VIII', 'Bandung', '2004-02-19', 'Laki-Laki', 'Cibaligo Permai', 'faiz', 'Faiz123456', 'anggota', '2018-01-25'),
(42, 16170709, 'Rahma Dzakia Fitri', 'VIII', 'Bandung', '2004-03-31', 'Perempuan', 'Jln Cihanjuang', 'rahma', 'Rahma123456', 'anggota', '2018-01-25'),
(43, 16170710, 'Taris Falih hibban', 'VIII', 'Ciamis', '2004-06-25', 'Laki-Laki', 'Sariwangi Regency', 'taris', 'Taris123456', 'anggota', '2018-01-25'),
(44, 16170711, 'Vania Rahma Diyanti', 'VIII', 'Surabaya', '2004-04-11', 'Perempuan', 'Sariwangi Regency', 'vania', 'Vania123456', 'anggota', '2018-01-25'),
(45, 17180812, 'Indra Anggara', 'VIII', 'Bandung', '2003-07-25', 'Laki-Laki', 'Sariwangi Regency', 'indra', 'Indra123456', 'anggota', '2018-01-25'),
(46, 17180813, 'Rivaldo Enda Nugraha', 'VIII', 'Bandung', '2004-02-13', 'Laki-Laki', 'Jln Cisasawi', 'rivaldo', 'Rivaldo123456', 'anggota', '2018-01-25'),
(47, 15160701, 'Alia Rahma Nisa', 'IX', 'Garut', '2002-09-21', 'Perempuan', 'Jln Ikan Mas', 'alia', 'Alia1234567', 'anggota', '2018-01-25'),
(48, 15160702, 'Avika Mollina Putri Ghifari ', 'IX', 'Bandung', '2003-04-06', 'Perempuan', 'Jln Cihanjuang', 'avika', 'Avika1234567', 'anggota', '2018-01-25'),
(49, 15160703, 'Farid Nurtajriyan', 'IX', 'Bandung', '2003-06-20', 'Laki-Laki', 'Jln Paledang', 'farid', 'Farid1234567', 'anggota', '2018-01-25'),
(50, 15160704, 'Fasya Ananda Fatharani', 'IX', 'Bandung', '2002-11-20', 'Perempuan', 'Jln Gerlong', 'fasya', 'Fasya1234567', 'anggota', '2018-01-25'),
(51, 15160706, 'Gian Guido Hibatulloh', 'IX', 'Yogyakarta', '2002-12-12', 'Laki-Laki', 'Jln Cihanjuang', 'gian', 'Gian1234567', 'anggota', '2018-01-25'),
(52, 15160707, 'Hasna Nazihah Ahmad', 'IX', 'Jakarta', '2003-01-10', 'Perempuan', 'Duta Asri Residence', 'hasna', 'Hasna1234567', 'anggota', '2018-01-25'),
(53, 15160708, 'Ilham Miftah Farid', 'IX', 'Bandung', '2002-06-06', 'Laki-Laki', 'Jln Negla', 'ilham', 'Ilham1234567', 'anggota', '2018-01-25'),
(54, 15160709, 'Iqna Insyi Nabila', 'IX', 'Bandung', '2003-03-12', 'Perempuan', 'Jln Sariwangi', 'iqna', 'Iqna1234567', 'anggota', '2018-01-25'),
(55, 15160710, 'Luthfi Alfareza Abdul Rafi', 'IX', 'Cimahi', '2003-01-12', 'Laki-Laki', 'Karyawangi Parongpong', 'luthfi', 'Luthfi1234567', 'anggota', '2018-01-25'),
(56, 15160711, 'Muhammad Fatsha Al Kautsar', 'IX', 'Bandung', '2003-03-12', 'Laki-Laki', 'Jln Negla', 'fatsha', 'Fatsha1234567', 'anggota', '2018-01-25'),
(57, 15160712, 'M. Kurniawan Al-Fajar', 'IX', 'Bandung', '2003-04-27', 'Laki-Laki', 'Perum Nirwana', 'kurniawan', 'Kurniawan1234567', 'anggota', '2018-01-25'),
(58, 15160713, 'Mohammad Raesa Fadila', 'IX', 'Majalengka', '2003-04-05', 'Laki-Laki', 'Griya Amanda', 'raesa', 'Raesa1234567', 'anggota', '2018-01-25'),
(59, 15160714, 'Nadiah Khoirunnisa', 'IX', 'Bandung', '2003-03-04', 'Perempuan', 'Jln Daarul Fikri', 'nadiah', 'Nadiah1234567', 'anggota', '2018-01-25'),
(60, 15160715, 'Rony Subur Pratama', 'IX', 'Bandung', '2002-10-12', 'Laki-Laki', 'Lembah Permai', 'rony', 'Rony1234567', 'anggota', '2018-01-25'),
(61, 15160716, 'Sophia Queen Alsheera', 'IX', 'Bandung', '2003-05-11', 'Perempuan', 'Jln Cihanjuang', 'sophia', 'Sophia1234567', 'anggota', '2018-01-25'),
(62, 15160717, 'Surya Aditia Akbar', 'IX', 'Bandung', '2002-08-01', 'Laki-Laki', 'Mekarwangi Sariwangi', 'surya', 'Surya1234567', 'anggota', '2018-01-25'),
(63, 15160718, 'Umar Hanif Abdul Aziz', 'IX', 'Bandung', '2002-10-06', 'Laki-Laki', 'Bumi Sariwangi', 'umar', 'Umar1234567', 'anggota', '2018-01-25'),
(64, 15160719, 'Wiati Acika Gumati', 'IX', 'Bandung', '2003-05-22', 'Perempuan', 'Jln Cibaligo', 'wiati', 'Wiati1234567', 'anggota', '2018-01-25'),
(65, 15160720, 'Zenita Aina Rifania', 'IX', 'Bandung', '2003-05-24', 'Perempuan', 'Jln Cihanjuang', 'zenita', 'Zenita1234567', 'anggota', '2018-01-25'),
(66, 15160722, 'Mohammad Ryamizard', 'IX', 'Batu', '2003-03-25', 'Laki-Laki', 'Sariwangi Regency', 'rya', 'Rya1234567', 'anggota', '2018-01-25'),
(67, 16170823, 'Moch. Rangga Fauzan', 'IX', 'Garut', '2002-10-10', 'Laki-Laki', 'Cibaligo Permai', 'rangga', 'Rangga1234567', 'anggota', '2018-01-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tb_visit`
--
ALTER TABLE `tb_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `tb_visit`
--
ALTER TABLE `tb_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_anggota` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
