-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2022 pada 05.23
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medstory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcement`
--

CREATE TABLE `announcement` (
  `id_announcement` int(6) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `announcement`
--

INSERT INTO `announcement` (`id_announcement`, `deskripsi`, `tanggal`, `jam`) VALUES
(1, 'Maintenance Mingguan', '2022-01-01', '23:00:00'),
(2, 'Penambahan Fitur Pencarian', '2022-01-07', '22:30:00'),
(3, 'Maintenance Mingguan', '2022-01-20', '23:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskusi`
--

CREATE TABLE `diskusi` (
  `id_diskusi` int(6) NOT NULL,
  `namaPengguna` varchar(30) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `view` int(6) NOT NULL,
  `up` int(6) NOT NULL,
  `comment` int(6) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diskusi`
--

INSERT INTO `diskusi` (`id_diskusi`, `namaPengguna`, `pertanyaan`, `kategori`, `tanggal`, `view`, `up`, `comment`, `jam`) VALUES
(1, 'flazefy', 'Mau nanya, apakah orang dengan riwayat penyakit\r\ndiabetes boleh vaksin? ', 'Vaksin & Imunisasi', '2022-01-05', 64, 34, 2, '23:57:00'),
(2, 'flazefy', 'Halo, ingin bertanya. Apakah anak berumur 14 thn sudah bisa vaksin? Mksh.', 'Vaksin & Imunisasi', '2022-01-07', 0, 0, 0, '01:17:11'),
(3, 'vasilyKash', 'Vaksin yang ada di Indonesia apa saja ya?', 'Vaksin & Imunisasi', '2021-12-30', 140, 50, 3, '21:10:00'),
(4, 'richardKyle', 'Apakah cacar air bisa menular ke orang yang pernah terkena sebelumnya? thx.', 'Penyakit Menular', '2021-12-28', 176, 56, 4, '13:10:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokterpraktik`
--

CREATE TABLE `dokterpraktik` (
  `id_dokter` int(6) NOT NULL,
  `namaDokter` varchar(35) NOT NULL,
  `spesialis` varchar(35) NOT NULL,
  `jamMulai` time NOT NULL,
  `jamSelesai` time NOT NULL,
  `hariPraktik` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokterpraktik`
--

INSERT INTO `dokterpraktik` (`id_dokter`, `namaDokter`, `spesialis`, `jamMulai`, `jamSelesai`, `hariPraktik`, `lokasi`) VALUES
(1, 'Dr. Usman Yousaf, Sp.M', 'Mata', '17:00:00', '20:00:00', 'Su,Mo,Tu,We,Th', 'Apotik Kimia Farma'),
(2, 'Drg. Beatrix Beargen', 'Gigi', '15:00:00', '22:00:00', 'Mo,Tu,We,Fr', 'Apotik Kimia Farma'),
(4, 'dr. Adams', 'Dokter Umum', '15:00:00', '20:00:00', 'Mo,Tu,We,Thu,Fr', 'Apotik K24'),
(5, 'drg. Robert SP.A', 'Anak', '16:00:00', '23:00:00', 'We, Thu, Fr, St, Su', 'Apotik K24 Waena'),
(6, 'dr. Roland Mitch', 'Umum', '16:30:00', '24:00:00', 'Mo, Tu, We, Thu, Fr', 'RS Dian Harapan'),
(7, 'dr. Austin SP.A', 'Anak', '16:00:00', '22:00:00', 'Mo, Tu, We, Thu, Fr, Su', 'RS Dian Harapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faskes`
--

CREATE TABLE `faskes` (
  `id_faskes` int(6) NOT NULL,
  `namaFaskes` varchar(40) NOT NULL,
  `rating` varchar(4) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `kontak` varchar(14) NOT NULL,
  `fasilitas` varchar(500) NOT NULL,
  `poliklinik` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faskes`
--

INSERT INTO `faskes` (`id_faskes`, `namaFaskes`, `rating`, `alamat`, `kontak`, `fasilitas`, `poliklinik`) VALUES
(1, 'RS. Dian Harapan', '3.8', 'Jl. Teruna Bakti Yabansai Waena, Yabansai, \r\nHeram, Kota Jayapura, Papua 99358', '0967572123', 'Farmasi, Ambulans, Instalasi Bedah, Rawat Jalan, Medical Check Up, Radiologi, Ruang Perawatan Anak, NICU, IGD, Tumbuh Kembang Anak, Instalasi Bersalin, Instalasi Rawat Inap, Penunjang Diagnostik, Laboratorium, Radiologi Gigi, Ruang Tunggu, PICU', 'Bedah/Sunat, Orthopaedi dan Traumatologi, Bedah Saraf, Bedah Anak, Bedah Plastik Rekonstruksi dan Estetik, Bedah Onkologi, Bedah Umum, Urologi, Bedah Digestif, Bedah Toraks Kardiovaskular, Bedah Vaskuler dan Endovaskuler, Bedah Mulut dan Maksilofasial, Bedah Kepala Leher, Orthopaedi dan Traumatologi (Spine), Bedah Orthopaedi, Poli Gigi, Dental X-Ray, Gigi Umum, Dental Cosmetic, Mata Umum, Lasik, Operasi Katarak, Psikolog, Psikiatri, Fisioterapi, Terapi Okupasi, Terapi Wicara, THT, Alergi Imunologi, Otologi, Kebidanan, Kandungan'),
(2, 'RSUD. Abepura', '3.6', 'Jl. Kesehatan No.1, Yobe, Abepura, Kota Jayapura, Papua 99351', '0967581064', 'Farmasi, Ambulans, Instalasi Bedah, Rawat Jalan, Medical Check Up, IGD, Penunjang Diagnostik, Instalasi Rawat Intensif, Laboratorium, Instalasi Rawat Inap, Radiologi, Bedah Bersalin, Ruang Tunggu', 'Poli Penyakit Dalam, Poli Anak, Poli Kebidanan & Peny. Kandungan, Poli Bedah, Poli Orthopedi, Poli Bedah Urologi, Poli Bedah Saraf, Poli Saraf, Poli Jantung Dan Pembuluh Darah, Poli Mata, Poli THT, Poli Gigi Dan Mulut, Fisioterapi, Poli Kulit dan Kelamin, Poli KB, Poli Paru, Poli Gizi, Poli Akupuntur, Poli VCT'),
(3, 'RS. Bhayangkara Kotaraja', '4.1', 'Jl. Jeruk Nipis, Wahno, Abepura, Kota Jayapura, Papua 99224', '0967587787', 'Farmasi, Ambulans, Instalasi Bedah, Rawat Jalan, Medical Check Up, Radiologi, Ruang Perawatan Anak, NICU, IGD, Instalasi Bersalin Instalasi Rawat Inap, Penunjang Diagnostik, Laboratorium, Radiologi Gigi, Ruang Tunggu, PICU, Forensik', 'Poli Penyakit Dalam, Poli Anak, Poli Kebidanan & Peny. Kandungan, Poli Bedah, Poli Orthopedi, Poli Bedah Urologi, Poli Bedah Saraf, Poli Saraf, Poli Jantung Dan Pembuluh Darah, Poli Mata, Poli THT, Poli Gigi Dan Mulut, Fisioterapi, Poli Kulit dan Kelamin, Poli KB, Poli Paru, Poli Gizi, Poli Akupuntur, Poli VCT, Poli Urologi, Anestesiologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(6) NOT NULL,
  `kodeBooking` varchar(6) NOT NULL,
  `namaPengguna` varchar(35) NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `namaDokter` varchar(35) NOT NULL,
  `lokasi` varchar(40) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `kodeBooking`, `namaPengguna`, `spesialis`, `namaDokter`, `lokasi`, `jam`, `tanggal`) VALUES
(2, 'GAFF01', 'flazefy', 'Gigi', 'Drg. Albert Flick', 'Apotik Kimia Farma', '17:00:00', '2022-01-20'),
(3, 'MUYF01', 'flazefy', 'Mata', 'Dr. Usman Yousaf', 'Apotik Kimia Farma', '14:30:00', '2022-01-14'),
(8, 'R01PCK', 'vasilyKash', 'Umum', 'dr. Roland Mitch', 'RS Dian Harapan', '15:30:00', '2022-01-11'),
(9, 'BC6Y98', 'richardKyle', 'Gigi', 'Drg. Beatrix Beargen', 'Apotik Kimia Farma', '17:00:00', '2022-01-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `newsfeed`
--

CREATE TABLE `newsfeed` (
  `idBerita` int(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `newsfeed`
--

INSERT INTO `newsfeed` (`idBerita`, `title`, `tanggal`) VALUES
(1, 'Resmi! Kasus Aktif Covid-19 di Indonesia Kalahkan India', '2021-05-10'),
(2, 'Menkes: Vaksin Moderna untuk Nakes karena Stok Terbatas', '2021-05-12'),
(3, 'Susul Moderna, Vaksin Pfizer Sebentar Lagi Dapat Izin di RI', '2021-05-13'),
(4, 'Vaksinasi Tahap 3 Dimulai, Sasar Anak Usia 12-17 Tahun', '2021-05-17'),
(5, 'Cara menghindari diabetes sejak dini', '2021-05-19'),
(6, 'Cara mengatasi penyakit maag agar tidak kambuh lagi', '2021-05-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_darah`
--

CREATE TABLE `pemeriksaan_darah` (
  `id_pemeriksaanD` int(6) NOT NULL,
  `namaPengguna` varchar(35) NOT NULL,
  `namaDokter` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `j_Leukosit` varchar(16) NOT NULL,
  `j_Eritrosit` varchar(16) NOT NULL,
  `j_Trombosit` varchar(16) NOT NULL,
  `j_Hemoglobin` varchar(16) NOT NULL,
  `j_Hematrokit` varchar(16) NOT NULL,
  `j_Glukosa` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemeriksaan_darah`
--

INSERT INTO `pemeriksaan_darah` (`id_pemeriksaanD`, `namaPengguna`, `namaDokter`, `tanggal`, `jam`, `lokasi`, `j_Leukosit`, `j_Eritrosit`, `j_Trombosit`, `j_Hemoglobin`, `j_Hematrokit`, `j_Glukosa`) VALUES
(1, 'flazefy', 'Dr. Josef Mengele', '2021-12-01', '18:25:00', 'Apotik Medika', '11,0 / 5,0-10,0', '4,4 / 4,5-5,5', '- / -', '- / -', '- / -', '130 / <140'),
(2, 'vasilyKash', 'dr. Roland Mitch', '2021-12-20', '13:30:00', 'Apotik Sakura Abepura', '13,0 / 5,0-10,0', '6,4 / 4,5-5,5', '- / -', '- / -', '- / -', '150 / <140'),
(3, 'richardKyle', 'dr. Austin SP.A', '2022-01-25', '17:20:00', 'RS Dian Harapan', '11,0 / 5,0-10,0', '4,4 / 4,5-5,5', '180K / 450K', '- / -', '- / -', '- / -'),
(4, 'vasilyKash', 'drg. Robert SP.A', '2022-01-09', '17:10:00', 'Apotik Sakura Abepura', '11,0 / 5,0-10,0', '4,4 / 4,5-5,5', '- / -', '- / -', '- / -', '145 / <140');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_penyakit`
--

CREATE TABLE `pemeriksaan_penyakit` (
  `id_pemeriksaanP` int(6) NOT NULL,
  `namaPengguna` varchar(35) NOT NULL,
  `namaDokter` varchar(40) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `hasil` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemeriksaan_penyakit`
--

INSERT INTO `pemeriksaan_penyakit` (`id_pemeriksaanP`, `namaPengguna`, `namaDokter`, `jenis`, `hasil`, `tanggal`, `jam`, `lokasi`) VALUES
(1, 'flazefy', 'Dr. Josef Mengele', 'Covid (PCR)', 'negatif', '2021-12-18', '09:30:00', 'RS Provita Jayapura'),
(2, 'vasilyKash', 'Dr. Josef Mengele', 'Malaria', 'negatif', '2021-11-10', '11:10:00', 'RS Dian Harapan'),
(3, 'richardKyle', 'Dr. Josef Mengele', 'E-Bola', 'positif', '2021-05-01', '16:30:00', 'RSUD Dok II Jayapura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(7) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempatLahir` varchar(25) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `tinggiBadan` int(3) NOT NULL,
  `beratBadan` int(3) NOT NULL,
  `jKelamin` varchar(10) NOT NULL,
  `namaLengkap` varchar(35) NOT NULL,
  `namaPengguna` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `nomorPonsel` varchar(14) NOT NULL,
  `password` varchar(25) NOT NULL,
  `diskusi` int(6) NOT NULL,
  `balasan` int(6) NOT NULL,
  `jawaban` int(6) NOT NULL,
  `golDarah` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nik`, `tempatLahir`, `tanggalLahir`, `alamat`, `pekerjaan`, `tinggiBadan`, `beratBadan`, `jKelamin`, `namaLengkap`, `namaPengguna`, `email`, `nomorPonsel`, `password`, `diskusi`, `balasan`, `jawaban`, `golDarah`) VALUES
(1, '1234567891234567', 'Berlin', '1996-08-09', 'Jl. Telekomunikasi No.12', 'Mahasiswa', 184, 68, 'Pria', 'Leonardho R Sitanggang', 'FlazeFy', 'flazen.edu@gmail.com', '08114882001', 'tester123', 8, 21, 14, 'B-'),
(2, '1231231231231235', 'Montreal', '1997-11-07', '3551 Willison Street', 'Wiraswasta', 185, 73, 'Pria', 'Kyle Richard', 'richardKyle', 'kylerich8181@gmail.com', '081248857133', 'kyle123', 5, 9, 16, 'B+'),
(5, '1231231231231240', 'Moscow', '1980-04-20', 'Pochtovaya, bld. 28, appt. 11', 'Teknisi Nuklir', 170, 86, 'Pria', 'Vasili Kashimir', 'vasilyKash', 'vasiliKashimir15@gmail.com', '0811488901', 'icyman', 11, 23, 17, 'AB-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayatkesehatan`
--

CREATE TABLE `riwayatkesehatan` (
  `idRiwayat` int(6) NOT NULL,
  `namaPengguna` varchar(30) NOT NULL,
  `namaDokter` varchar(30) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `sejak` varchar(15) NOT NULL,
  `keluhan` varchar(200) NOT NULL,
  `diagnosa` varchar(200) NOT NULL,
  `solusi` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `penyakit` varchar(20) NOT NULL,
  `kontak` varchar(14) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayatkesehatan`
--

INSERT INTO `riwayatkesehatan` (`idRiwayat`, `namaPengguna`, `namaDokter`, `spesialis`, `sejak`, `keluhan`, `diagnosa`, `solusi`, `tanggal`, `lokasi`, `penyakit`, `kontak`, `alamat`) VALUES
(1, 'flazefy', 'Dr. Braidy Rose', 'Penyakit Dalam', '1 Minggu', 'Dada sakit setelah makan, Terkadang mual & muntah, Terkadang berak darah, Perut melilit jika lapar, Sering bersendawa', 'Tekanan darah 100/70, BB 63 Kg & Asam lambung tinggi', 'Obat Promaag 2 kali/sehari, Metrodinazole 1 kali/sehari, Istirahat yang cukup, Kurangi kafein, makanan pedas, dan asam', '2008-07-04', 'RS Dian Harapan', 'Maag Kronis', '967572123', 'Jl. Teruna Bakti Yabansai Waena,  Yabansai, Heram'),
(2, 'flazefy', 'Drg. Albert Flick', 'Gigi', '2 Minggu', 'Gigi sebelah kanan bawah ngilu', 'Gigi geraham impaksi', 'Obat Ibuprofen 2 kali/sehari, Dexamethasone 2 kali/sehari, Asam mefenamat 1 kali/sehari, Istirahat yang cukup, hindari makanan/minuman panas dan pedas untuk 1 minggu, jangan berkumur terlalu kencang', '2009-04-07', 'Apotik Kimia Farma', 'Cabut Gigi', '1240074314', 'Jl. Raya Waena Sentani, Waena,  Heram'),
(3, 'flazefy', 'Dr. Usman Yousaf, Sp.M', 'Mata', '10 tahun', 'Penglihatan kabur dan mudah pusing', 'Rabun Jauh -5 dan -6', 'Operasi lasik', '2021-08-09', 'Apotik Kimia Farma', 'Rabun Jauh', '1240074314', 'Jl. Raya Waena Sentani, Waena,  Heram'),
(4, 'vasilyKash', 'dr. Adams', 'Umum', '2 hari', 'Pusing, mual & muntah, badan panas, tulang keram', 'Tekanan darah 80/60, Trombosit tinggi', 'Obat Makrolida 2 kali/sehari, Oralit ', '2018-05-28', 'RS Dian Harapan', 'Keracunan Makanan', '1240074314', 'Jl. Teruna Bakti Yabansai Waena,  Yabansai, Heram'),
(5, 'richardKyle', 'Drg. Beatrix Beargen', 'Gigi', '1 bulan', 'Gigi depan ngilu', '2 Gigi depan berlubang', 'Obat Ibuprofen 2 kali/sehari saat ngilu saja', '2019-11-09', 'Apotik Sakura Abepur', 'Tambal Gigi', '0912884121', 'Jl. Ayapo, Kota Baru, Abepura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_alergi`
--

CREATE TABLE `riwayat_alergi` (
  `id` int(6) NOT NULL,
  `namaPengguna` varchar(30) NOT NULL,
  `alergi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_alergi`
--

INSERT INTO `riwayat_alergi` (`id`, `namaPengguna`, `alergi`) VALUES
(1, 'flazefy', 'Durian'),
(2, 'flazefy', 'Cuaca Dingin'),
(3, 'vasilyKash', 'Cuaca Panas'),
(4, 'richardKyle', 'Makanan Laut'),
(5, 'vasilyKash', 'Coklat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_penyakit`
--

CREATE TABLE `riwayat_penyakit` (
  `id_penyakit` int(6) NOT NULL,
  `namaPengguna` varchar(30) NOT NULL,
  `penyakit` varchar(40) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_penyakit`
--

INSERT INTO `riwayat_penyakit` (`id_penyakit`, `namaPengguna`, `penyakit`, `tahun`) VALUES
(1, 'flazefy', 'Muntaber', '2004'),
(2, 'flazefy', 'Cacar Air', '2008'),
(3, 'flazefy', 'Rabun Jauh -4,5 & -5,0', '2009'),
(4, 'flazefy', 'DBD', '2015'),
(5, 'flazefy', 'Malaria', '2017'),
(6, 'vasilyKash', 'Covid-19', '2020'),
(7, 'vasilyKash', 'Thyfus', '2004'),
(8, 'richardKyle', 'Malaria', '2003'),
(9, 'richardKyle', 'Maag Kronis', '2020'),
(10, 'richardKyle', 'Cacar Air', '2009'),
(11, 'vasilyKash', 'Hipotermia', '2004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_vaksinasi`
--

CREATE TABLE `riwayat_vaksinasi` (
  `id` int(6) NOT NULL,
  `namaPengguna` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_vaksinasi`
--

INSERT INTO `riwayat_vaksinasi` (`id`, `namaPengguna`, `jenis`, `tahun`) VALUES
(1, 'flazefy', 'Imunisasi Polio', 2004),
(2, 'flazefy', 'Vaksinasi Campak', 2007),
(3, 'flazefy', 'Vaksinasi Corona Virus', 2020),
(4, 'vasilyKash', 'Vaksinasi Corona Virus', 2020),
(5, 'richardKyle', 'Vaksinasi Corona Virus', 2021),
(6, 'richardKyle', 'Vaksinasi Malaria', 2021),
(7, 'vasilyKash', 'Vaksinasi Cacar Air', 1999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikatvaksin`
--

CREATE TABLE `sertifikatvaksin` (
  `id_sertif` int(6) NOT NULL,
  `namaPengguna` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `urlSertif` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lokasi` varchar(40) NOT NULL,
  `dosis` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sertifikatvaksin`
--

INSERT INTO `sertifikatvaksin` (`id_sertif`, `namaPengguna`, `nik`, `urlSertif`, `tanggal`, `jam`, `lokasi`, `dosis`) VALUES
(1, 'flazefy', '1234567891234567', 'sertif_flazefy1', '2021-08-30', '10:20:00', 'RS. Dian Harapan', 1),
(2, 'flazefy', '1234567891234567', 'sertif_flazefy2', '2021-09-28', '09:40:00', 'RS. Dian Harapan', 2),
(3, 'richardKyle', '1231231231231235', 'sertif_richardKyle1', '2021-12-10', '11:15:00', 'RSUD. Dok 2 Jayapura', 1),
(4, 'vasilyKash', '1231231231231240', 'sertif_vasilyKash1', '2021-12-02', '14:50:00', 'RSUD. Yowari', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tescovid`
--

CREATE TABLE `tescovid` (
  `id_tes` int(6) NOT NULL,
  `namaTempat` varchar(40) NOT NULL,
  `lokasi` varchar(40) NOT NULL,
  `kontak` varchar(16) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tescovid`
--

INSERT INTO `tescovid` (`id_tes`, `namaTempat`, `lokasi`, `kontak`, `jenis`) VALUES
(1, 'RS. Dian Harapan', 'Jl. Teruna Bakti Yabansai Waena, Yabansa', '0967572123', 'Antigen & PCR'),
(2, 'RSUD. Abepura', 'Jl. Kesehatan No.1, Yobe, Abepura', '0967581064', 'Antigen'),
(3, 'Denkesyah 17.04.02/ Waena', 'JL Sentani, Waena, Heram', '0967572285', 'Antigen'),
(4, 'RS. Bhayangkara Kotaraja', 'Jl. Jeruk Nipis, Wahno, Abepura', '0967587787', 'Antigen & PCR'),
(5, 'RS. Angkatan Laut Dr. Soedibjo Sardadi', 'Jl. Amphibi No.1, Hamadi', '+62967532146', 'Antigen'),
(6, 'RSUD. Dok II', 'Jl. Kesehatan No.1, Bayangkara', '0967533616', 'PCR'),
(7, 'RS. Provita Jayapura', 'Jl. Dr. Sam Ratulangi, Bayangkara', '096751628880', 'PCR & Antigen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksinasi`
--

CREATE TABLE `vaksinasi` (
  `id_vaksinasi` int(6) NOT NULL,
  `namaTempat` varchar(30) NOT NULL,
  `lokasi` varchar(40) NOT NULL,
  `kontak` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vaksinasi`
--

INSERT INTO `vaksinasi` (`id_vaksinasi`, `namaTempat`, `lokasi`, `kontak`) VALUES
(1, 'RS. Dian Harapan', 'Jl. Teruna Bakti Yabansai Waena, Yabansa', '0967572123'),
(2, 'RSUD. Abepura', 'Jl. Kesehatan No.1, Yobe, Abepura', '0967581064'),
(3, 'RS. Angkatan Laut Dr. Soedibjo', 'Jl. Amphibi No.1, Hamadi', '0967532146'),
(4, 'RSUD. Dok II', 'Jl. Kesehatan No.1, Bayangkara', '0967533616');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id_announcement`);

--
-- Indeks untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id_diskusi`);

--
-- Indeks untuk tabel `dokterpraktik`
--
ALTER TABLE `dokterpraktik`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id_faskes`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indeks untuk tabel `newsfeed`
--
ALTER TABLE `newsfeed`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indeks untuk tabel `pemeriksaan_darah`
--
ALTER TABLE `pemeriksaan_darah`
  ADD PRIMARY KEY (`id_pemeriksaanD`);

--
-- Indeks untuk tabel `pemeriksaan_penyakit`
--
ALTER TABLE `pemeriksaan_penyakit`
  ADD PRIMARY KEY (`id_pemeriksaanP`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `riwayatkesehatan`
--
ALTER TABLE `riwayatkesehatan`
  ADD PRIMARY KEY (`idRiwayat`);

--
-- Indeks untuk tabel `riwayat_alergi`
--
ALTER TABLE `riwayat_alergi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_penyakit`
--
ALTER TABLE `riwayat_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `riwayat_vaksinasi`
--
ALTER TABLE `riwayat_vaksinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sertifikatvaksin`
--
ALTER TABLE `sertifikatvaksin`
  ADD PRIMARY KEY (`id_sertif`);

--
-- Indeks untuk tabel `tescovid`
--
ALTER TABLE `tescovid`
  ADD PRIMARY KEY (`id_tes`);

--
-- Indeks untuk tabel `vaksinasi`
--
ALTER TABLE `vaksinasi`
  ADD PRIMARY KEY (`id_vaksinasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id_announcement` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id_diskusi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dokterpraktik`
--
ALTER TABLE `dokterpraktik`
  MODIFY `id_dokter` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id_faskes` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `newsfeed`
--
ALTER TABLE `newsfeed`
  MODIFY `idBerita` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_darah`
--
ALTER TABLE `pemeriksaan_darah`
  MODIFY `id_pemeriksaanD` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_penyakit`
--
ALTER TABLE `pemeriksaan_penyakit`
  MODIFY `id_pemeriksaanP` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `riwayatkesehatan`
--
ALTER TABLE `riwayatkesehatan`
  MODIFY `idRiwayat` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `riwayat_alergi`
--
ALTER TABLE `riwayat_alergi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `riwayat_penyakit`
--
ALTER TABLE `riwayat_penyakit`
  MODIFY `id_penyakit` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `riwayat_vaksinasi`
--
ALTER TABLE `riwayat_vaksinasi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sertifikatvaksin`
--
ALTER TABLE `sertifikatvaksin`
  MODIFY `id_sertif` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tescovid`
--
ALTER TABLE `tescovid`
  MODIFY `id_tes` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `vaksinasi`
--
ALTER TABLE `vaksinasi`
  MODIFY `id_vaksinasi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
