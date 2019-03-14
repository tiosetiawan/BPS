-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 01:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bps`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggaran`
--

CREATE TABLE `anggaran` (
  `kode` varchar(50) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `volume` int(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `hargasat` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggaran`
--

INSERT INTO `anggaran` (`kode`, `uraian`, `volume`, `satuan`, `hargasat`, `jumlah`) VALUES
('     511119', 'Belanja Pembulatan Gaji PNS', 1, 'Thn', '14000', '14000'),
('524111				', 'Transport PP Konsultasi LK ke BPS Pusat', 3, 'O-P', '2000000', '6000000'),
('524113', 'Translok pengumpulan data administrasi perkantoran', 24, 'O-K', '150000', '3600000');

-- --------------------------------------------------------

--
-- Table structure for table `lpd`
--

CREATE TABLE `lpd` (
  `id` int(3) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nosurat` varchar(100) NOT NULL,
  `tempatt` varchar(100) NOT NULL,
  `tanggalb` varchar(20) NOT NULL,
  `tanggalk` varchar(20) NOT NULL,
  `perihal` text NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lpd`
--

INSERT INTO `lpd` (`id`, `nip`, `nosurat`, `tempatt`, `tanggalb`, `tanggalk`, `perihal`, `laporan`) VALUES
(3, '196512261993031002 ', '001 /SPD/2018', 'kota gorontalo', '1 oktober 2018', '1 oktober 2018', 'pseufghwuoighnwijkrg', 'wefgwegwergew'),
(4, '196508042007011002 ', '007/SPD/2018', 'kota gorontalo', '1 april 2018', '1 april 2018', 'pencacahan', 'coba di coba'),
(5, '196512261993031002 ', '002/SPD/2018', 'gorontalo', '1 oktober 2018', '1 oktober 2018', 'dia dia', 'laporan berjalan lancar.'),
(6, '196512261993031002 ', '001 /SPD/2018', 'manado', '1 oktober 2018', '2 oktober 2018', 'pencacahan', 'berjalan lancar');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `pd` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `jk`, `ttl`, `golongan`, `jabatan`, `pd`, `username`, `password`, `hak_akses`) VALUES
('19591212 198103 1 012', 'Suleman Dai', 'L', 'Gorontalo, 12 Desember 1959', 'Penata Muda Tkt I / ', 'Staf IPDS', 'SMA', 'suleman', 'sulemen', 'pegawai'),
('196312011983012001', 'Masni Taniyo, SE', 'P', 'Gorontalo, 1 Desember 1963', 'Penata Tkt 1/III d ', 'Kasubbag Tata Usaha', 'tatausaha', 'tatausaha', 'tatausaha', 'tatausaha'),
('19641106 199203 2 001', 'Ir. Nur Maimun Saleh', 'P', 'Surabaya, 6 November 1964', 'Penata Tkt 1/III d ', 'Kasi Statistik Distribusi', 'S1', 'Nur', 'Nur', 'kasie'),
('196508042007011002', 'Suleman Mahmud', 'L', 'Bunta,  4 Agustus 1965', 'Pengatur Muda / IIa', 'Staf Tata Usaha', 'SMA', 'suleman', 'pegawai', 'pegawai'),
('196512261993031002', 'Roni Abdjul', 'L', 'Gorontalo, 26 Desember 1965', 'Pengatur Tkt. I / II', 'KSK Dumbo Raya', 'SMA', 'rony', 'pegawai', 'pegawai'),
('196607151993011001', 'Awaluddin Kurusi, SE, MM', 'L', 'Pare-Pare, 15 Juli 1966', 'Pembina  Tkt. I/IVb', 'Kepala  Kantor', 'S2', 'pimpinan', 'pimpinan', 'pimpinan'),
('19800209 200212 2 004', 'Eta Dian Ayu A. Sita, S.ST, M.Si', 'P', 'Surabaya, 9 Februari 1980', 'Penata Tkt. I / IIId', 'Kasi Statistik Produksi', 'S2', 'Eta', 'Eta', 'kasie'),
('19850331 2008011002', 'Andika Wishnu Setyaji,SST,M.Ikom', 'L', 'Surabaya, 31 Maret 1985', 'Penata / IIIc', 'Kasi Statistik Sosial', 'S2', 'wisnu', 'wisnu123', 'kasie'),
('19880801 201012 2 006', 'Amar Sumandari, SST', 'P', 'Jakarta, 1 Agustus 1988', 'Penata Muda Tkt I / ', 'Kasi Statistik Nerwilis', 'D IV', 'Amar', 'Amar', 'kasie'),
('19901017 2013112001', 'Lely Oktavianti, SST', 'P', 'Jombang, 17 Oktober 1990', 'Penata Muda / III a', 'Koord. IPDS', 'D IV', 'lely', 'pegawai', 'kasie');

-- --------------------------------------------------------

--
-- Table structure for table `spd`
--

CREATE TABLE `spd` (
  `id` int(3) NOT NULL,
  `nosurat` varchar(100) NOT NULL,
  `komitmen` varchar(100) NOT NULL,
  `namakomitmen` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `tbiaya` varchar(20) NOT NULL,
  `mp` varchar(100) NOT NULL,
  `alat` varchar(100) NOT NULL,
  `tempatb` varchar(100) NOT NULL,
  `tempatt` varchar(100) NOT NULL,
  `lamap` varchar(100) NOT NULL,
  `tb` varchar(20) NOT NULL,
  `tk` varchar(20) NOT NULL,
  `pengikut` varchar(100) NOT NULL,
  `pengikutn` varchar(100) NOT NULL,
  `pengikutt` varchar(100) NOT NULL,
  `pengikutk` varchar(100) NOT NULL,
  `instansi` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spd`
--

INSERT INTO `spd` (`id`, `nosurat`, `komitmen`, `namakomitmen`, `nip`, `kode`, `tbiaya`, `mp`, `alat`, `tempatb`, `tempatt`, `lamap`, `tb`, `tk`, `pengikut`, `pengikutn`, `pengikutt`, `pengikutk`, `instansi`, `keterangan`) VALUES
(9, '001 /SPD/2018', '19901017 2013112001', 'Lely Oktavianti, SST', '196512261993031002', '524113', 'C', 'Pencacahan', 'motor dinas', 'kota gorontalo', 'kota gorontalo', '2 hari', '2018/29/01', '2018/31/01', '-', '-', '-', '-', 'Badan Pusat Statisti', 'Lihat Sebelah'),
(10, '002/SPD/2018', '19901017 2013112001', 'Lely Oktavianti, SST', '196512261993031002', '524113', 'C', 'Pencacahan', 'Motor Dinas', 'kota gorontalo', 'kota gorontalo', '2 hari', '2018/28/01', '2018/28/01', '-', '-', '-', '-', 'Badan Pusat Statisti', 'Lihat DIsebelah'),
(11, ' 003/SPD/2018', '19850331 2008011002', 'Andika Wishnu Setyaji,SST,M.Ikom', '196312011983012001', '524113', 'C', 'Pencacahan', 'Motor dinas', 'kota gorontalo', 'kota gorontalo', '1 hari', '2018/28/01', '2018/28/01', '-', '-', '-', '-', 'Badan Pusat Statisti', 'lihat disebelah'),
(12, '004/SPD/2018', '19901017 2013112001', 'Lely Oktavianti, SST', '196512261993031002', '524113', 'C', 'Pencacahan', 'motor dinas', 'kota gorontalo', 'kota gorontalo', '2 hari', '2018/30/01', '2018/30/01', '-', '-', '-', '-', 'Badan Pusat Statisti', 'disebelah'),
(13, '007/SPD/2018', '19901017 2013112001', 'Lely Oktavianti, SST', '196508042007011002', '524113', 'C', 'pencacahan', 'motor', 'kota gorontalo', 'kota gorontalo', '1 hari', '2018/30/01', '2018/31/01', '-', '-', '-', '-', 'Badan Pusat Statisti', 'disebalah'),
(14, '/SPD/2018', '19901017 2013112001', 'Lely Oktavianti, SST', '196508042007011002', '     511119', 'C', 'Survei', 'motor dinas', 'gorontalo', 'gorontalo', '1 hari', '2018/28/02', '2018/01/03', '-', '-', '-', '-', 'Badan Pusat Statisti', 'perjalanan dinas'),
(17, '0033/SPD/2018', '19641106 199203 2 001', 'Ir. Nur Maimun Saleh', '196512261993031002', '524113', 'c', 'pencacahan', 'motor dinas', 'gorontalo', 'gorontalo', '2 hari', '2018/23/02', '2018/23/02', '-', '-', '-', '-', 'Badan Pusat Statisti', 'disebalah');

-- --------------------------------------------------------

--
-- Table structure for table `uploadst`
--

CREATE TABLE `uploadst` (
  `nosurat` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `komitmen` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `hits` int(3) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadst`
--

INSERT INTO `uploadst` (`nosurat`, `nip`, `komitmen`, `nama_file`, `deskripsi`, `tgl_upload`, `hits`) VALUES
('001 /SPD/2018', '196512261993031002', 'Lely Oktavianti, SST', '_PENGAJUAN JUDUL KERJA PRAKTEK.docx', 'asas', '2018-01-24', 1),
(' 002/SPD/2018', '196512261993031002', 'Lely Oktavianti, SST', 'PENGAJUAN JUDUL KERJA PRAKTEK.docx', 'wdwqd', '2018-01-24', 1),
(' 003/SPD/2018', '19901017 2013112001', 'Lely Oktavianti, SST', 'blanko - Penilaian oleh Guru & Dosen Pembimbing.docx', 'wd', '2018-01-24', 1),
(' 007/SPD/2018', '196508042007011002', 'Lely Oktavianti, SST', 'dokumentasi program.docx', 'tes', '2018-01-29', 1),
(' 0010/SPD/2018', '196512261993031002', 'Ir. Nur Maimun Saleh', 'COVER.docx', 'akan melaksanankan tugas', '2018-02-23', 1),
(' 009/SPD/2018', '196512261993031002 ', 'Ir. Nur Maimun Saleh', 'Daftar ISi.docx', 'akan melakukan perjalan dinas', '2018-02-23', 1),
(' /SPD/2018', '196512261993031002 ', 'Eta Dian Ayu A. Sita, S.ST, M.Si', 'bab 1 KP.docx', 'afefwsefe', '2018-03-23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggaran`
--
ALTER TABLE `anggaran`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `lpd`
--
ALTER TABLE `lpd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `spd`
--
ALTER TABLE `spd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kode` (`kode`),
  ADD KEY `komitmen` (`komitmen`);

--
-- Indexes for table `uploadst`
--
ALTER TABLE `uploadst`
  ADD PRIMARY KEY (`nosurat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lpd`
--
ALTER TABLE `lpd`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `spd`
--
ALTER TABLE `spd`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lpd`
--
ALTER TABLE `lpd`
  ADD CONSTRAINT `lpd_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`);

--
-- Constraints for table `spd`
--
ALTER TABLE `spd`
  ADD CONSTRAINT `spd_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`),
  ADD CONSTRAINT `spd_ibfk_2` FOREIGN KEY (`kode`) REFERENCES `anggaran` (`kode`),
  ADD CONSTRAINT `spd_ibfk_3` FOREIGN KEY (`komitmen`) REFERENCES `pegawai` (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
