-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2022 pada 03.23
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
-- Struktur dari tabel `asupan`
--

CREATE TABLE `asupan` (
  `id_asupan` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `kalori` int(4) NOT NULL,
  `ukuran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `asupan`
--

INSERT INTO `asupan` (`id_asupan`, `nama`, `kategori`, `kalori`, `ukuran`) VALUES
(1, 'Rendang sapi', 'Daging', 200, '1 Potong'),
(2, 'Capcay', 'Sayuran', 250, '1 Porsi'),
(3, 'Nasi', 'Lainnya', 130, '100 gram'),
(4, 'Ayam Goreng (Dada)', 'Daging', 280, '1 Potong'),
(5, 'Ayam Goreng (Sayap)', 'Daging', 50, '1 Potong'),
(6, 'Ayam Goreng (Paha Atas)', 'Daging', 210, '1 Potong'),
(7, 'Ayam Goreng (Paha Bawah)', 'Daging', 80, '1 Potong'),
(8, 'Pisang', 'Buah', 90, '1 Buah'),
(9, 'Apel Merah', 'Buah', 100, '1 Buah'),
(10, 'Udang', 'Seafood', 100, '100 gram'),
(11, 'Ikan Tuna', 'Seafood', 135, '100 gram'),
(12, 'Bihun', 'Lainnya', 100, '100 gram'),
(13, 'Kurma', 'Buah', 125, '3 butir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `balasan`
--

CREATE TABLE `balasan` (
  `id_balasan` int(10) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `id_diskusi` int(8) NOT NULL,
  `datetime` datetime NOT NULL,
  `imageURL` varchar(80) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `balasan`
--

INSERT INTO `balasan` (`id_balasan`, `pengirim`, `isi`, `id_diskusi`, `datetime`, `imageURL`, `status`) VALUES
(1, 'vasilykash', 'setau saya sih tidak', 4, '2022-03-08 14:49:30', 'null', 'null'),
(13, 'rosemonde', 'boleh yg penting sdh konsultasi ke dokter. Dan kalau tidak salah HbA1c harus dibawah 7,5%', 1, '2022-04-11 05:15:39', 'null', 'verified'),
(14, 'flazefy', 'sinovac, moderna, aztra zeneca', 3, '2022-04-12 04:19:05', 'null', 'verified'),
(19, 'teresevyy', 'awdadwad', 13, '2022-04-21 03:50:59', 'null', 'null'),
(21, 'flazefy', 'tesssss', 14, '2022-05-17 02:35:18', 'null', 'null'),
(25, 'rosemonde', 'hollaa', 14, '2022-06-19 02:22:43', 'null', 'null'),
(26, 'flazefy', 'thx jawabannya', 1, '2022-06-19 02:33:04', 'null', 'null'),
(27, 'flazefy', 'tesssss', 39, '2022-06-19 05:30:27', 'null', 'null');

-- --------------------------------------------------------

--
-- Struktur dari tabel `covid`
--

CREATE TABLE `covid` (
  `id_tes` int(6) NOT NULL,
  `id_faskes` int(8) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `jamMulai` time NOT NULL,
  `jamSelesai` time NOT NULL,
  `hariPraktik` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `covid`
--

INSERT INTO `covid` (`id_tes`, `id_faskes`, `jenis`, `jamMulai`, `jamSelesai`, `hariPraktik`) VALUES
(1, 1, 'Antigen & PCR', '10:00:00', '19:30:00', 'Mo, Tu, We, Thu, Fr, St'),
(2, 1, 'Vaksinasi', '06:30:00', '15:30:00', 'St'),
(3, 1, 'Karantina', '00:00:00', '00:00:00', 'All day'),
(4, 2, 'Antigen', '06:00:00', '16:00:00', 'Mo, Tu, We, Thu, St, Su'),
(5, 3, 'Antigen & PCR', '05:00:00', '21:00:00', 'All day'),
(6, 3, 'Vaksinasi', '06:00:00', '17:00:00', 'Mo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskusi`
--

CREATE TABLE `diskusi` (
  `id_diskusi` int(6) NOT NULL,
  `namaPengguna` varchar(30) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `view` int(6) NOT NULL,
  `up` int(6) NOT NULL,
  `imageURL` varchar(80) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diskusi`
--

INSERT INTO `diskusi` (`id_diskusi`, `namaPengguna`, `pertanyaan`, `kategori`, `view`, `up`, `imageURL`, `datetime`) VALUES
(1, 'flazefy', 'Mau nanya, apakah orang dengan riwayat penyakit\r\ndiabetes boleh vaksin? ', 'Vaksin & Imunisasi', 0, 0, 'null', '2022-03-01 09:01:10'),
(2, 'flazefy', 'Halo, ingin bertanya. Apakah anak berumur 14 thn sudah bisa vaksin? Mksh.', 'Vaksin & Imunisasi', 0, 0, 'null', '2022-03-04 06:31:58'),
(3, 'vasilykash', 'Vaksin yang ada di Indonesia apa saja ya?', 'Vaksin & Imunisasi', 0, 0, 'null', '2022-03-08 20:04:20'),
(4, 'richardkyle', 'Apakah cacar air bisa menular ke orang yang pernah terkena sebelumnya? thx.', 'Penyakit Menular', 0, 0, 'null', '2022-03-06 11:41:23'),
(13, 'teresevyy', 'waedadwa', 'Kulit & Kelamin', 0, 0, 'null', '2022-04-21 03:50:46'),
(14, 'flazefy', 'test', 'Kulit & Kelamin', 0, 0, 'null', '2022-05-15 06:54:36'),
(43, 'flazefy', 'tes', 'Obat-Obatan', 0, 0, 'null', '2022-06-19 05:34:32'),
(44, 'flazefy', 'twsdasd', 'Kulit & Kelamin', 0, 0, 'null', '2022-06-25 02:57:49');

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
(1, 'Dr. Usman Yousaf, Sp.M', 'Mata', '17:00:00', '20:00:00', 'Su,Mo,Tu,We,Th', 'RS. Dian Harapan'),
(2, 'Drg. Beatrix Beargen', 'Gigi', '15:00:00', '22:00:00', 'Mo,Tu,We,Fr', 'RS. Dian Harapan'),
(4, 'dr. Adams', 'Umum', '15:00:00', '20:00:00', 'Mo,Tu,We,Thu,Fr', 'RSUD. Abepura'),
(5, 'drg. Robert SP.A', 'Anak', '16:00:00', '23:00:00', 'We, Thu, Fr, St, Su', 'RSUD. Abepura'),
(6, 'dr. Roland Mitch', 'Umum', '16:30:00', '24:00:00', 'Mo, Tu, We, Thu, Fr', 'RS. Dian Harapan'),
(7, 'dr. Austin SP.A', 'Anak', '16:00:00', '22:00:00', 'Mo, Tu, We, Thu, Fr, Su', 'RS. Dian Harapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faskes`
--

CREATE TABLE `faskes` (
  `id_faskes` int(6) NOT NULL,
  `namaFaskes` varchar(40) NOT NULL,
  `rating` float NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `kontak` varchar(14) NOT NULL,
  `fasilitas` varchar(500) NOT NULL,
  `poliklinik` varchar(700) NOT NULL,
  `kordinat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faskes`
--

INSERT INTO `faskes` (`id_faskes`, `namaFaskes`, `rating`, `alamat`, `kontak`, `fasilitas`, `poliklinik`, `kordinat`) VALUES
(1, 'RS. Dian Harapan', 3.8, 'Jl. Teruna Bakti Yabansai Waena, Yabansai, \r\nHeram, Kota Jayapura, Papua 99358', '0967572123', 'Farmasi, Ambulans, Instalasi Bedah, Rawat Jalan, Medical Check Up, Radiologi, Ruang Perawatan Anak, NICU, IGD, Tumbuh Kembang Anak, Instalasi Bersalin, Instalasi Rawat Inap, Penunjang Diagnostik, Laboratorium, Radiologi Gigi, Ruang Tunggu, PICU', 'Bedah/Sunat, Orthopaedi dan Traumatologi, Bedah Saraf, Bedah Anak, Bedah Plastik Rekonstruksi dan Estetik, Bedah Onkologi, Bedah Umum, Urologi, Bedah Digestif, Bedah Toraks Kardiovaskular, Bedah Vaskuler dan Endovaskuler, Bedah Mulut dan Maksilofasial, Bedah Kepala Leher, Orthopaedi dan Traumatologi (Spine), Bedah Orthopaedi, Poli Gigi, Dental X-Ray, Gigi Umum, Dental Cosmetic, Mata Umum, Lasik, Operasi Katarak, Psikolog, Psikiatri, Fisioterapi, Terapi Okupasi, Terapi Wicara, THT, Alergi Imunologi, Otologi, Kebidanan, Kandungan', '-2.5910217846120474, 140.64260107215972'),
(2, 'RSUD. Abepura', 3.6, 'Jl. Kesehatan No.1, Yobe, Abepura, Kota Jayapura, Papua 99351', '0967581064', 'Farmasi, Ambulans, Instalasi Bedah, Rawat Jalan, Medical Check Up, IGD, Penunjang Diagnostik, Instalasi Rawat Intensif, Laboratorium, Instalasi Rawat Inap, Radiologi, Bedah Bersalin, Ruang Tunggu', 'Poli Penyakit Dalam, Poli Anak, Poli Kebidanan & Peny. Kandungan, Poli Bedah, Poli Orthopedi, Poli Bedah Urologi, Poli Bedah Saraf, Poli Saraf, Poli Jantung Dan Pembuluh Darah, Poli Mata, Poli THT, Poli Gigi Dan Mulut, Fisioterapi, Poli Kulit dan Kelamin, Poli KB, Poli Paru, Poli Gizi, Poli Akupuntur, Poli VCT', '-2.615026527442366, 140.6687531971121'),
(3, 'RS. Bhayangkara Kotaraja', 4.1, 'Jl. Jeruk Nipis, Wahno, Abepura, Kota Jayapura, Papua 99224', '0967587787', 'Farmasi, Ambulans, Instalasi Bedah, Rawat Jalan, Medical Check Up, Radiologi, Ruang Perawatan Anak, NICU, IGD, Instalasi Bersalin Instalasi Rawat Inap, Penunjang Diagnostik, Laboratorium, Radiologi Gigi, Ruang Tunggu, PICU, Forensik', 'Poli Penyakit Dalam, Poli Anak, Poli Kebidanan & Peny. Kandungan, Poli Bedah, Poli Orthopedi, Poli Bedah Urologi, Poli Bedah Saraf, Poli Saraf, Poli Jantung Dan Pembuluh Darah, Poli Mata, Poli THT, Poli Gigi Dan Mulut, Fisioterapi, Poli Kulit dan Kelamin, Poli KB, Poli Paru, Poli Gizi, Poli Akupuntur, Poli VCT, Poli Urologi, Anestesiologi', '-2.591069705470215, 140.67447289314563');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(8) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`) VALUES
(1, 'Sakit perut bagian atas'),
(2, 'Mual'),
(3, 'Muntah'),
(4, 'Pusing'),
(5, 'Flu'),
(6, 'Tenggorokan gatal'),
(7, 'Kulit melepuh'),
(8, 'Bisul'),
(9, 'Demam'),
(10, 'Kelelahan'),
(11, 'Kehilangan nafsu makan'),
(12, 'Gatal'),
(13, 'Menggigil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalkalori`
--

CREATE TABLE `jadwalkalori` (
  `id_jadwal` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_asupan` int(10) NOT NULL,
  `date` date NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwalkalori`
--

INSERT INTO `jadwalkalori` (`id_jadwal`, `id_user`, `id_asupan`, `date`, `waktu`) VALUES
(16, 1, 1, '2022-04-22', 'pagi'),
(17, 1, 11, '2022-04-22', 'siang'),
(18, 1, 3, '2022-04-22', 'siang'),
(19, 1, 4, '2022-04-22', 'malam'),
(20, 1, 7, '2022-04-22', 'pagi'),
(21, 1, 4, '2022-04-25', 'pagi'),
(22, 1, 8, '2022-04-25', 'siang'),
(23, 1, 3, '2022-04-25', 'pagi'),
(24, 1, 2, '2022-04-25', 'siang'),
(25, 1, 12, '2022-04-25', 'siang'),
(26, 1, 10, '2022-04-25', 'siang'),
(27, 1, 11, '2022-04-25', 'malam'),
(29, 1, 3, '2022-04-25', 'malam'),
(30, 1, 1, '2022-04-25', 'malam'),
(31, 1, 2, '2022-04-27', 'pagi'),
(32, 1, 1, '2022-04-27', 'pagi'),
(33, 1, 4, '2022-04-27', 'siang'),
(34, 1, 3, '2022-04-27', 'siang'),
(35, 1, 7, '2022-04-27', 'malam'),
(36, 1, 12, '2022-04-27', 'malam'),
(37, 1, 2, '2022-04-28', 'pagi'),
(38, 1, 8, '2022-04-28', 'siang'),
(39, 1, 5, '2022-04-28', 'siang'),
(40, 1, 3, '2022-04-28', 'siang'),
(41, 1, 12, '2022-05-17', 'pagi'),
(42, 1, 2, '2022-05-17', 'pagi'),
(43, 1, 8, '2022-05-17', 'siang'),
(46, 1, 10, '2022-05-17', 'siang'),
(47, 6, 11, '2022-05-17', 'pagi'),
(48, 6, 2, '2022-05-17', 'pagi'),
(49, 1, 10, '2022-05-25', 'pagi'),
(50, 1, 3, '2022-05-25', 'pagi'),
(51, 1, 2, '2022-05-25', 'malam'),
(53, 6, 3, '2022-05-26', 'pagi'),
(54, 6, 11, '2022-05-26', 'pagi'),
(55, 1, 12, '2022-05-31', 'pagi'),
(77, 1, 2, '2022-06-09', 'pagi'),
(78, 1, 8, '2022-06-09', 'pagi'),
(79, 1, 12, '2022-06-09', 'pagi'),
(80, 1, 2, '2022-06-16', 'pagi'),
(81, 1, 5, '2022-06-16', 'pagi'),
(82, 1, 9, '2022-06-16', 'siang'),
(83, 1, 6, '2022-06-16', 'siang'),
(84, 1, 3, '2022-06-16', 'siang'),
(85, 1, 1, '2022-06-17', 'pagi'),
(86, 1, 4, '2022-06-17', 'pagi'),
(87, 1, 11, '2022-06-17', 'siang'),
(88, 1, 12, '2022-06-17', 'siang'),
(89, 1, 8, '2022-06-18', 'pagi'),
(90, 1, 11, '2022-06-18', 'pagi'),
(91, 1, 2, '2022-06-19', 'pagi'),
(92, 1, 12, '2022-06-19', 'pagi'),
(94, 1, 4, '2022-06-19', 'siang'),
(95, 1, 3, '2022-06-19', 'siang'),
(96, 1, 2, '2022-06-19', 'malam'),
(97, 1, 1, '2022-06-19', 'malam'),
(98, 1, 3, '2022-06-19', 'malam'),
(100, 1, 8, '2022-06-19', 'malam'),
(101, 1, 6, '2022-06-19', 'malam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebutuhankalori`
--

CREATE TABLE `kebutuhankalori` (
  `id_kebutuhan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `kalori` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kebutuhankalori`
--

INSERT INTO `kebutuhankalori` (`id_kebutuhan`, `id_user`, `kalori`, `date`) VALUES
(1, 1, 1778, '2022-04-22'),
(3, 1, 1720, '2022-04-21'),
(5, 1, 2192, '2022-04-25'),
(7, 1, 2200, '2022-04-27'),
(11, 1, 1750, '2022-04-28'),
(13, 1, 1800, '2022-05-17'),
(14, 6, 1400, '2022-05-17'),
(15, 1, 1800, '2022-05-25'),
(16, 1, 1800, '2022-05-26'),
(19, 6, 1400, '2022-05-26'),
(20, 1, 1800, '2022-05-31'),
(21, 1, 1800, '2022-06-04'),
(22, 1, 1800, '2022-06-09'),
(23, 1, 1800, '2022-06-11'),
(24, 1, 1900, '2022-06-16'),
(25, 1, 2000, '2022-06-17'),
(26, 1, 1900, '2022-06-18'),
(27, 1, 1800, '2022-06-19'),
(28, 5, 1900, '2022-06-19'),
(29, 6, 1700, '2022-06-19'),
(30, 2, 1900, '2022-06-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kms`
--

CREATE TABLE `kms` (
  `id_kms` int(12) NOT NULL,
  `id_user` int(10) NOT NULL,
  `namaAnak` varchar(25) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `tinggi` int(3) NOT NULL,
  `berat` int(2) NOT NULL,
  `tanggalLahirA` date NOT NULL,
  `datecreated` date NOT NULL,
  `hasilBerat` varchar(30) NOT NULL,
  `hasilTinggi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kms`
--

INSERT INTO `kms` (`id_kms`, `id_user`, `namaAnak`, `jenisKelamin`, `tinggi`, `berat`, `tanggalLahirA`, `datecreated`, `hasilBerat`, `hasilTinggi`) VALUES
(42, 1, 'Tester123', 'Pria', 70, 7, '2022-03-17', '2022-06-14', 'Berat Badan Normal', 'Tinggi Badan Lebih'),
(43, 1, 'Tester256', 'Wanita', 89, 15, '2022-01-05', '2022-06-14', 'Berat Badan Lebih', 'Tinggi Badan Lebih'),
(44, 1, 'Tester256', 'Wanita', 85, 18, '2021-11-18', '2022-06-14', 'Berat Badan Lebih', 'Tinggi Badan Lebih'),
(47, 1, 'Tester256', 'Pria', 75, 18, '2022-01-06', '2022-06-16', 'Berat Badan Lebih', 'Tinggi Badan Lebih'),
(48, 1, 'Tester123', 'Pria', 76, 26, '2021-11-24', '2022-06-16', 'Berat Badan Lebih', 'Tinggi Badan Lebih'),
(49, 1, 'Tester256', 'Pria', 75, 24, '2021-06-10', '2022-06-16', 'Berat Badan Lebih', 'Tinggi Badan Normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masukan`
--

CREATE TABLE `masukan` (
  `id_masukan` int(8) NOT NULL,
  `text` varchar(200) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masukan`
--

INSERT INTO `masukan` (`id_masukan`, `text`, `nama`, `datetime`) VALUES
(1, 'Leonardho R. Sitanggang', 'Kedepannya web dapat mendukung dark', '2022-04-10 06:41:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `newsfeed`
--

CREATE TABLE `newsfeed` (
  `idBerita` int(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `newsfeed`
--

INSERT INTO `newsfeed` (`idBerita`, `title`, `isi`, `tanggal`) VALUES
(1, 'Resmi! Kasus Aktif Covid-19 di Indonesia Kalahkan India', 'Tsunami Covid-19 yang terjadi dalam beberapa pekan terakhir membuat kasus aktif di Indonesia menembus 443.473 pasien pada Rabu (14/7/2021).\r\nKasus aktif ini bertambah 35.764 kasus dibandingkan kemarin, dan merupakan pertambahan tercepat sejak pandemi melanda Indonesia.\r\n\r\nAlhasil, Indonesia naik ke peringkat 5 dunia dalam kasus aktif terbanyak. Indonesia mengalahkan India yang tercatat memiliki 439.814 kasus aktif. Padahal, India merupakan salah satu episentrum Covid-19 dunia dengan varian delta yang menjadi sumber ketakutan dunia pada saat ini.\r\n\r\nKasus aktif di Indonesia juga semakin mendekati kasus aktif di Rusia yang tercatat 454.241 pasien. Padahal, India merupakan salah satu episentrum Covid-19 dunia dengan varian delta yang menjadi sumber ketakutan dunia pada saat ini.\r\n\r\nKenaikan kasus aktif di Indonesia disebabkan oleh pertambahan kasus baru Covid-19 di Indonesia yang mencapai 54.517 pasien dalam sehari. Dengan jumlah tersebut, Indonesia kembali memimpin pertambahan kasus baru di seluruh dunia, mengalahkan Inggris yang tercatat 42.302 kasus dan India 36.390 kasus. Alhasil, hingga hari ini total konfirmasi positif di Indonesia menembus 2,67 juta.\r\n\r\nSementara itu, kasus kematian bertambah 991 orang sehingga total menjadi 69.210 orang. Ini merupakan kasus kematian Covid-19 yang cukup tinggi di Indonesia dalam sehari. Kabar baiknya, kasus kesembuhan bertambah 17.762 orang dalam sehari. Totalnya ada 2,157 juta pasien yang sembuh dari Covid-19.\r\n\r\nEpidemiolog Griffith University Dicky Budiman sebenarnya telah mengingatkan bahwa Indonesia berpeluang menjadi episentrum Covid-19 dunia. Pasalnya, ketika sejak awal pandemi terjadi, ada tiga negara yang berpotensi menjadi episentrum corona dunia karena memiliki penduduk yang padat yakni India, Brasil, dan Indonesia,\r\n\r\n\"Saat ini dua dari tiga negara itu masih menjadi episentrum dan kasus kematian yang menjadi masalah. Indonesia bukan berarti sudah bebas, tapi malah bisa semakin besar kasusnya karena sinergitas pemerintah dan masyarakat. Dalam situasi harus menghadapi bersama-sama, tidak ada yang lebih dominan,\" kata Dicky, belum lama ini.\r\n\r\nDia menegaskan prgram pemerintah tidak akan berhasil jika tidak ada peran dari masyarakat, baik untuk 3T dan menerapkan protokol kesehatan. Selain itu, Dicky mengungkapkan anjuran protokol kesehatan harus disertai regulasi yang mendukung.\r\n\r\n\"Misalnya anjuran membatasi pergerakan masyarakat, tapi malah dipermudah pergerakan jadi kan kontraproduktif. Indonesia kasusnya tidak mirip kaya India memang tidak, hanya sedikit kemungkinannya, tapi kalau tidak ditangani serius bisa saja,\" ujarnya.', '2021-05-10'),
(2, 'Menkes: Vaksin Moderna untuk Nakes karena Stok Terbatas', 'Menteri Kesehatan Budi Gunadi Sadikin menekankan dosis vaksin covid-19 Moderna akan difokuskan untuk pemberian booster dosis ketiga kepada tenaga kesehatan.\r\n\"Ini (Moderna) masuknya terbatas. Jadi saya mohon support-nya, ini kita berikan prioritasnya ke nakes,\" kata Budi dalam Rapat Kerja bersama Komisi IX DPR, Rabu (14/7).\r\n\r\nBudi menjelaskan Moderna merupakan vaksin RNA yang memiliki efikasi tinggi. Dari seluruh vaksin yang digunakan di Indonesia, ia mengatakan Moderna memiliki efikasi paling tinggi.\r\nBerdasarkan data WHO, vaksin Moderna memiliki efikasi 94,1 persen.\r\n\r\nBudi mengklaim mencampur vaksin Moderna dengan Sinovac--yang digunakan pada dosis pertama dan kedua tenaga kesahatan--dapat memperkuat daya tahan tubuh terhadap varian corona.\r\n\r\n\"Saya bisa kirim studinya, ini sudah disetujui BPOM dan ITAGI. Mencampur atau combining dua jenis itu (vaksin) membuat lebih tahan kombinasi varian yang ada,\" tutur Budi.\r\n\r\nMenkes menduga akan banyak orang yang menginginkan dosis vaksin Moderna. Namun ia menegaskan agar seluruh pihak memfokuskan vaksin tersebut untuk nakes.\r\n\r\n\"Karena semua powerful people will ask for this. Yuk kita beri ke nakes dulu, karena bisa kita lindungi lebih cepat. Rencananya saya mau minggu ini sudah mulai,\" kata dia.\r\n\r\nSelain Moderna, Pfizer juga merupakan salah satu vaksin dengan efikasi tinggi yang digunakan di Indonesia. Budi mengatakan vaksin ini digunakan untuk vaksin program pemerintah.\r\n\r\nVaksin Pfizer memiliki efikasi 95 persen setelah mendapat dua suntikan. Kementerian Kesehatan pada Juni mengatakan 50 juta dosis vaksin asal perusahaan farmasi Amerika Serikat itu baru masuk bertahap Agustus 2021.\r\n\r\nBudi menegaskan vaksin Moderna maupun Pfizer tidak digunakan dalam program vaksin Gotong Royong (GR) perusahaan maupun individu. Kedua program tersebut menggunakan vaksin Sinopharm dan Cansino.\r\n\r\nIa mengatakan vaksin yang dipakai dalam vaksin GR tidak jauh lebih baik dibanding vaksin pemerintah. Sinopharm memiliki efikasi 78,02 persen, sementara Cansino memiliki efikasi 65,7 persen.\r\n\r\nSelain Moderna dan Pfizer, vaksin program pemerintah juga menggunakan Sinovac, AstraZeneca dan Novavax.Menurut Badan Pengawas Obat dan Makanan (BPOM), efikasi vaksin Sinovac mencapai 65,3 persen. Sementara efikasi vaksin AstraZeneca 62,1 persen.\r\n\r\nSementara vaksin Novavax diklaim 93 persen efektif melawan corona. Budi mengatakan vaksin ini kemungkinan baru masuk ke Indonesia pada September 2021.\r\n\r\n\"Ada satu vaksin program lagi yang juga bagus di kalangan microbiologist, mereka senang, Novavax namanya. Tapi ini belum keluar EUA-nya dari Amerika,\" katanya.\r\n\r\nSaat ini vaksinasi masih berjalan di penjuru daerah dengan laju yang berbeda-beda. Pada beberapa daerah di Jawa, vaksinasi sudah mencapai tahap ketiga atau pada kelompok masyarakat umum di atas 18 tahun dan anak di atas 12 tahun.\r\n\r\nSatuan Tugas Penanganan Covid-19 mencatat saat ini sudah 36.914.607 orang sudah mendapat vaksin dosis pertama dan 15.190.998 orang mendapat vaksin dosis kedua. Total target vaksinasi untuk mencapai herd immunity adalah 208.265.720 orang.', '2021-05-12'),
(3, 'Susul Moderna, Vaksin Pfizer Sebentar Lagi Dapat Izin di RI', 'BPOM menyebutkan sejumlah vaksin sedang dalam proses mendapatkan izin penggunaan darurat atau Emergency Use Authorization (EUA). Salah satunya Pfizer yang masih berproses untuk finalisasi mendapatkan izin EUA.\r\n\r\nKepala Badan POM, Penny Lukito mengatakan proses ini cukup lama dibandingkan Moderna yang telah mendapatkan EUA beberapa waktu lalu. Pfizer memiliki beberapa fasilitas produksi tapi yang memiliki baru 2 fasilitas yang datanya sudah lengkap dan siap mendapatkan EUA dalam waktu dekat.\r\n\r\n\"Dari 5 fasilitas 2 yang sudah lengkap data, Pfizer akan mendapatkan EUA dalam waktu dekat,\" kata Penny dalam Rapat Kerja Komisi IX DPR RI, Selasa (13/7/2021).\r\n\r\nSeperti Pfizer, Penny juga mengatakan vaksin Sputnik juga sedang dalam proses finalisasi mendapatkan EUA. Harus melakukan inspeksi untuk fasilitas produksinya serta dia mengakui belum ada pengalaman vaksin dari Rusia.\r\n\r\nMenurutnya, Sputnik harus melakukan cakupan inspeksi lebih luas lagi. \"Sedang dalam proses akhir beberapa data cakupan inspeksi. Mudah-mudahan Sputnik mendapatkan EUA,\" kata Penny. Sementara itu untuk Novavax sedang dalam sudah rolling subsmission dan membutuhkan uji komparabilitas, diharapkan bulan September mendatang.\r\n\r\nAda juga Cansino dan sudah mendapatkan data khasiat, keamanan dan mutu. Namun masih membutuhkan sejumlah data lagi dan dikatakan belum tahu kapan akan mendapatkan ijin penggunaan daruratnya. Terakhir Covaxin dari Bharat Biotech India yang juga telah melakukan rolling submission. Namun seperti Cansino masih membutuhkan data lagi.\r\n\r\n\"Covaxin produksi Bharat biotech India dengan Amarox sudah rolling submission masih dibutuhkan data,\" kata ungkapnya.\r\n\r\nSejauh ini sudah ada sejumlah vaksin yang mengantongi izin penggunaan dari BPOM, yakni ada Sinovac CoronaVac, AstraZeneca, Bio Farma, Sinopharm dan Moderna.', '2021-05-13'),
(4, 'Vaksinasi Tahap 3 Dimulai, Sasar Anak Usia 12-17 Tahun', 'Kementrian Kesehatan melalui Direktorat Jenderal Pencegahan dan Pengendalian Penyakit mengeluarkan Surat Edaran percepatan vakinasi covid-19 bagi Kepala dinas kesehatan provinsi dan kabupaten/kota, yang tertuang dalam Surat Edaran nomor HK.02.02/I/1727/2021 tentang Vaksinasi Tahap 3 bagi Masyarakat Rentan, Masyarakat Umum Lainnya, dan Anak Usia 12-17 tahun.\r\n\r\nDikeluarkannya Surat Edaran tersebut berdasarkan beberapa pertimbangan, mulai dari peningkatan kasus terkonfirmasi covid-19 pada usia anak anak, dimana sampai dengan tanggal 29 Juni 2021 pukul 18.00 WIB tercatat lebih dari 2 juta orang terkonfirmasi covid-19, dimana 10,6% di antaranya yaitu lebih dari 200 ribuan merupakan kasus aktif. Dilaporkan, sejumlah hampir 260 ribu kasus terkonfirmasi merupakan anak usia 0-18 tahun, dimana lebih dari 108 ribu kasus berada pada rentang usia 12-17 tahun.\r\n\r\nDari sejumlah tersebut, tercatat lebih dari 600 anak usia 0-18 tahun meninggal, sejumlah 197 anak di antaranya berumur 12-17 tahun dengan angka Case Fatality Rate pada kelompok usia tersebut adalah 0,18%.\r\n\r\nPertimbangan selanjutnya adanya rekomendasi dari Komite Penasihat Ahli Imunisasi Nasional atau Indonesian Technical Advisory Group on Immunization (ITAGI) dan persetujuan penggunaan Vaksin covid-19 produksi PT. Biofarma (Sinovac) untuk kelompok usia > 12 tahun dari BPOM tertanggal 27 Juni 2021, maka vaksinasi dapat diberikan bagi anak usia 12-17 tahun.\r\n\r\nSehubungan dengan hal tersebut, maka seluruh Kepala Dinas Kesehatan Provinsi, Kabupaten dan Kota diminta untuk menyampaikan kepada direktur rumah sakit dan seluruh pimpinan fasilitas pelayanan kesehatan yang menyelenggarakan pelayanan vaksinasi covid-19 agar melaksanakan upaya percepatan vaksinasi covid-19 tahap 3 bagi seluruh masyarakat rentan, dan masyarakat umum lainnya berusia 18 tahun ke atas mulai 1 Juli 2021.\r\n\r\nVaksinasi bagi anak usia 12-17 tahun dapat dilakukan di fasilitas pelayanan kesehatan atau di sekolah/madrasah/pesantren berkoordinasi dengan Dinas Pendidikan dan Kanwil/Kantor Kemenag setempat untuk mempermudah pendataan dan monitoring pelaksanaan.\r\n\r\nMekanisme skrining, pelaksanaan dan observasi sama seperti vaksinasi pada usia >18 tahun. Peserta vaksinasi harus membawa kartu keluarga atau dokumen lain yang mencantumkan NIK anak. Pencatatan dalam aplikasi PCare vaksinasi dimasukkan dalam kelompok remaja.\r\n\r\nKemudian vaksin yang digunakan untuk anak usia 12-17 ini adalah vaksin Sinovac dengan dosis 0,5 ml sebanyak dua kali pemberian dengan jarak atau interval minimal 28 hari.\r\n\r\nPemerintah daerah juga diminta melakukan identifikasi dan percepatan vaksinasi bagi sasaran tahap 1 dan 2 yang belum mendapatkan 2 dosis vaksinasi. Surat Edaran ini mulai berlaku sejak 1 Juli 2021. Apalagi sebanyak 14 juta dosis vaksin Sinovac tiba di Indonesia dalam bentuk bahan baku (bulk).\r\n\r\nTotal bahan baku vaksin dari Sinovac yang sudah ada di Indonesia adalah sejumlah 105 juta dosis vaksin dalam bentuk bahan baku. Artinya perlu proses sekitar 1 bulan di Biofarma untuk diproses menjadi vaksin jadi yang siap dipakai.\r\n\r\n“Dari 105 juta ini nanti akan jadi 85 juta vaksin jadi yang bisa kita pakai dan itu akan siap 1 bulan setelah sekarang. Jadi mungkin di awal Agustus akan ada 85 juta vaksin Sinovac yang siap kita gunakan,” kata Menteri Kesehatan RI Budi Gunadi Sadikin.\r\n\r\nDengan kedatangan 14 juta vaksin Sinovac ini menggambarkan bahwa jumlah vaksin yang sudah ada di Indonesia semakin lama semakin banyak. Belum lagi ditambah donasi vaksin gratis dari Covax GAVI yang pada bulan ini akan masuk dari AstraZeneca, dan bulan Agustus akan masuk vaksin dari Pfizer. Sehingga target 181,5 juta rakyat Indonesia yang divaksin bisa tercapai.\r\n\r\n“Kita harus ingat bahwa vaksin ini tidak membuat kita 100 persen kebal terhadap virus covid-19. Vaksin ini akan membuat daya tahan tubuh kita semakin baik.Jika virus masuk ke tubuh, kita bisa lebih cepat merespons dan melawan virus tersebut,” tutur Budi.\r\n\r\nOrang yang sudah divaksinasi covid-19, masih bisa terinfeksi virus covid-19, namun mengurangi tingkat keparahan dan kematian akibat penyakit ini. “Sehingga kalau kita terpapar virus covid-19 yang harusnya sakit berat menjadi sakit ringan, dan yang seharusnya sakit ringan menjadi tanpa gejala,” sebut Budi.\r\n\r\nBudi mengimbau kepada masyarakat untuk selalu disiplin protokol kesehatan dengan memakai masker, menjaga jarak, dan mencuci tangan pakai sabun. Kondisinya saat ini kasus konfirmasi positif covid-19 di Indonesia melonjak, yakni 20 ribu lebih pada Selasa (29/6).\r\n\r\nPemerintah sudah mengantisipasi melonjaknya kasus tersebut sejak sebelum lebaran Idul Fitri dengan mempersiapkan rumah sakit, mempersiapkan obat-obatan, memvaksinasi tenaga kesehatan, dan melengkapi oksigen di rumah sakit.\r\n\r\n“Sekarang tolong bantu kami dengan cara kalau tidak ada kegiatan yang perlu, tinggal lah di rumah, supaya kita bisa mengurangi laju penularan,” pungkas Budi. (OL-2)\r\n', '2021-05-17'),
(5, 'Cara menghindari diabetes sejak dini', 'Diabetes tipe 2 adalah penyakit kronis yang menyerang jutaan orang di seluruh dunia. Kasus yang tidak terkontrol dapat menyebabkan kebutaan, gagal ginjal, penyakit jantung, dan kondisi serius lainnya. Sebelum diabetes didiagnosis, ada masa di mana kadar gula darah tinggi tetapi tidak cukup tinggi untuk didiagnosis sebagai diabetes. Ini dikenal sebagai pradiabetes.\r\n\r\nDiperkirakan bahwa hingga 70% orang dengan pradiabetes terus mengembangkan diabetes tipe 2. Perkembangan dari prediabetes menjadi diabetes tidak bisa dihindari. Meskipun ada faktor tertentu yang tidak dapat Anda ubah seperti gen, usia, atau perilaku masa lalu ada banyak tindakan yang dapat Anda lakukan untuk mengurangi risiko dan cara mencegah diabetes.\r\n\r\nJika Anda menderita diabetes, itu artinya kadar gula darah di dalam tubuh Anda terlalu tinggi. Pada diabetes tipe 2, hal ini terjadi karena tubuh tidak menghasilkan cukup insulin atau tidak menggunakan insulin dengan baik (ini disebut resistensi insulin). Cara mencegah diabetes umumnya dapat dilakukan dengan perilaku makan sehat, lebih aktif secara fisik dan menurunkan berat badan beberapa kilogram.\r\n\r\nTidak ada kata terlambat untuk memulai. Membuat beberapa perubahan sederhana dalam gaya hidup sekarang dapat membantu Anda menghindari komplikasi kesehatan serius dari diabetes di masa mendatang, seperti kerusakan saraf, ginjal, dan jantung. Berikut ini adalah beberapa cara mencegah diabetes yang dikutip dari American Diabetes Association dan hardvard.edu.\r\n\r\n1. Perbanyak Lakukan Aktivitas Fisik\r\n\r\nMelakukan aktivitas fisik secara teratur adalah cara mencegah diabetes yang pertama. Olahraga dapat meningkatkan sensitivitas insulin sel Anda. Saat berolahraga, lebih sedikit insulin yang dibutuhkan untuk menjaga kadar gula darah Anda terkendali.\r\n\r\nSatu studi pada orang dengan pradiabetes menemukan bahwa olahraga berintensitas sedang meningkatkan sensitivitas insulin sebesar 51% dan olahraga intensitas tinggi meningkatkannya hingga 85%. Namun, efek ini hanya terjadi pada hari-hari saat berolahraga.\r\n\r\nBanyak jenis aktivitas fisik telah terbukti mengurangi resistensi insulin dan gula darah pada orang dewasa yang kelebihan berat badan, obesitas, dan prediabetik. Ini termasuk latihan aerobik, latihan interval intensitas tinggi dan latihan kekuatan.\r\n\r\nBerolahraga lebih sering tampaknya mengarah pada peningkatan respons dan fungsi insulin. Oleh karena itu, yang terbaik adalah memilih aktivitas fisik yang paling Anda sukai, dapat dilakukan secara teratur, dan dapat Anda lakukan dalam jangka panjang.\r\n\r\n2. Perbanyak Konsumsi Makanan Berserat Tinggi\r\n\r\nMemperbanyak konsumsi makanan berserat tinggi adalah cara mencegah diabetes yang kedua. Mengonsumsi banyak serat bermanfaat untuk meningkatkan kesehatan usus dan pengelolaan berat badan. Studi pada individu obesitas, lansia dan prediabetik telah menunjukkan bahwa hal ini dapat membantu menjaga kadar gula darah dan insulin tetap rendah.\r\n\r\nSerat dapat dibagi menjadi dua kategori besar yakni serat larut dan tidak larut. Serat larut menyerap air, sedangkan serat tidak larut tidak. Di saluran pencernaan, serat larut dan air membentuk gel yang memperlambat laju penyerapan makanan.\r\n\r\nMakanan berserat membantu memperbaiki kontrol gula darah. Sebagian besar makanan nabati yang belum diolah mengandung serat. Makanan berserat tinggi antara lain buah-buahan, sayuran, kacang-kacangan, biji-bijian dan kacang-kacangan.\r\n\r\n3. Kurangi Konsumsi Alkohol\r\n\r\nMengurangi konsumsi atau asupan alkohol adalah cara mencegah diabetes yang ketiga. Bukti secara konsisten mengaitkan konsumsi alkohol dalam jumlah sedang dengan penurunan risiko penyakit jantung. Hal yang sama juga berlaku untuk diabetes tipe 2. Alkohol dalam jumlah sedang — sebanyak satu gelas sehari untuk wanita, hingga dua gelas sehari untuk pria — meningkatkan efisiensi insulin dalam memasukkan glukosa ke dalam sel.\r\n\r\nDan beberapa penelitian menunjukkan bahwa konsumsi alkohol dalam jumlah sedang menurunkan risiko diabetes tipe 2. Tetapi asupan alkohol yang berlebihan justru meningkatkan risikonya. Jika Anda sudah terbiasa dengan minum alkohol, kuncinya adalah menjaga konsumsinya agar tetap berada dalam kisaran sedang, karena jumlah alkohol yang tinggi dapat meningkatkan risiko diabetes.\r\n\r\n4. Kontrol Berat Badan\r\n\r\nMengontrol berat badan adalah cara mencegah diabetes yang ke empat. Berat badan yang berlebihan adalah penyebab utama diabetes tipe 2. Kelebihan berat badan meningkatkan kemungkinan terkena diabetes tipe 2 tujuh kali lipat. Memiliki tubuh gemuk membuat Anda 20 sampai 40 kali lebih mungkin terkena diabetes daripada seseorang dengan berat badan yang sehat.\r\n\r\nMenurunkan berat badan dapat membantu mencegah diabetes jika berat badan Anda berada di atas kisaran berat badan yang sehat. Kehilangan 7-10% dari berat badan saat ini dapat mengurangi kemungkinan Anda terkena diabetes tipe 2 hingga 50%.\r\n\r\n5. Berhenti Merokok\r\n\r\nBerhenti merokok adalah cara mencegah diabetes yang kelima. Merokok telah terbukti menyebabkan atau berkontribusi pada banyak kondisi kesehatan yang serius, termasuk penyakit jantung, emfisema, dan kanker paru-paru, payudara, prostat, dan saluran pencernaan. Ada juga penelitian yang menghubungkan merokok dan perokok pasif dengan diabetes tipe 2.\r\n\r\nDalam analisis dari beberapa penelitian yang melibatkan lebih dari satu juta orang, merokok ditemukan meningkatkan risiko diabetes sebesar 44% pada rata-rata perokok dan 61% pada orang yang merokok lebih dari 20 batang setiap hari. Para peneliti menyatakan bahwa meskipun banyak pria bertambah berat badannya setelah berhenti merokok, setelah beberapa tahun bebas rokok, risiko diabetes mereka lebih rendah daripada jika mereka terus merokok.\r\n\r\n6. Perbanyak Minum Air Putih\r\n\r\nMinum lebih banyak air putih adalah cara mencegah diabetes yang ke enam. Air putih merupakan minuman paling alami yang dapat Anda minum. Terlebih lagi, mengonsumsi air putih di sebagian besar waktu dapat membantu Anda menghindari minuman yang tinggi gula, pengawet, dan bahan-bahan lain yang membahayakan. Minuman manis seperti soda dan punch telah dikaitkan dengan peningkatan risiko diabetes tipe 2 dan diabetes autoimun laten orang dewasa (LADA).\r\n\r\nLADA adalah salah satu bentuk diabetes tipe 1 yang terjadi pada orang yang berusia di atas 18 tahun. Berbeda dengan gejala akut yang terlihat pada diabetes tipe 1 di masa kanak-kanak, LADA berkembang perlahan, membutuhkan lebih banyak pengobatan seiring perkembangan penyakit.\r\n\r\n7. Konsumsi Makanan Sehat\r\n\r\nMemiliki rencana makan yang sehat adalah cara mencegah diabetes yang selanjutnya. Penting bagi Anda untuk mengurangi jumlah kalori yang dimakan dan diminum setiap hari, sehingga Anda dapat menurunkan berat badan dan mempertahankannya. Untuk melakukan itu, diet Anda harus memasukkan porsi yang lebih kecil dan lebih sedikit lemak dan gula.\r\n\r\nAnda juga harus makan berbagai makanan dari setiap kelompok makanan, termasuk banyak biji-bijian, buah-buahan, dan sayuran. Sebaiknya batasi juga daging merah, dan hindari daging olahan.\r\n\r\n8. Mengoptimalkan Asupan Vitamin D\r\n\r\nVitamin D penting untuk mengontrol gula darah dan cara mencegah diabetes. Penelitian telah menemukan bahwa orang yang tidak mendapatkan cukup vitamin D, atau yang kadar darahnya terlalu rendah, memiliki risiko lebih besar terhadap semua jenis diabetes. Sebagian besar organisasi kesehatan merekomendasikan untuk menjaga tingkat vitamin D dalam darah setidaknya 30 ng/ml (75 nmol/l).\r\n\r\nSatu studi menemukan bahwa orang dengan kadar vitamin D tertinggi dalam darah, sebesar 43%,lebih kecil kemungkinannya untuk mengembangkan diabetes tipe 2 dibandingkan orang dengan kadar darah terendah. Sumber makanan yang baik untuk vitamin D termasuk ikan berlemak dan minyak ikan cod. Selain itu, paparan sinar matahari dapat meningkatkan kadar vitamin D dalam darah.', '2021-05-19'),
(6, 'Cara mengatasi penyakit maag agar tidak kambuh lagi', 'Kalau kamu pernah mengalami maag, pasti tahu seperti apa rasa sakitnya. Saat maag menyerang, sakit yang biasa muncul umumnya terarasa melilit dan perih pada perut. Penyebab maag cukup banyak, mulai dari infeksi bakteri Helicobacter pylori, efek samping penggunaan obat antiinflamasi nonsteroid (OAINS), luka terbuka yang muncul di lapisan dalam lambung (tukak lambung), hingga stres berkepanjangan.\r\n\r\nMaag sering diatasi dengan obat antasida. Padahal, mengonsumsi obat mengandung antasida saja sebenarnya tidak cukup. Pasalnya, obat maag tidak dapat menyembuhkan penyakit secara total. Memulai pola makan sehat dengan menu yang tidak sembarangan adalah cara yang efektif untuk meredakannya. Kalau kamu tidak ingin penyakit ini kambuh, berikut pola makan yang perlu diterapkan.\r\n\r\n1. Makan Porsi Kecil Tapi Sering\r\n\r\nMelansir dari Verywell Health, kamu perlu menghindari makan dalam porsi besar sekaligus kalau tidak ingin maag kembali kambuh. Cobalah untuk makan dengan porsi kecil namun sering, yakni setidaknya 5-6 kali setiap hari.\r\n\r\nAsam lambung akan diproduksi setiap kali kamu makan. Ketika kamu makan dengan porsi besar, otomatis tubuh menghasilkan asam lambung lebih banyak untuk membantu proses pencernaan. Nah, jumlah asam lambung yang terlalu banyak ini rentan menyebabkan iritasi.\r\n\r\n2. Jangan Makan Sebelum Tidur\r\n\r\nTidur setelah makan sering menjadi penyebab utama naiknya asam lambung. Oleh karenanya, pastikan makan setidaknya tiga jam sebelum tidur. Selain itu, usahakan untuk tetap tegak selama beberapa jam setelah makan agar perut bisa mencerna makanan dengan baik dan mencegah terjadinya refluks asam.\r\n\r\n3. Ubah Cara Masak\r\n\r\nJika kamu sering mengalami maag, maka kamu mungkin perlu mengubah cara memasak. Pasalnya, makanan yang digoreng cenderung memicu refluks asam. Makanan yang digoreng lebih sulit untuk dicerna sepenuhnya, sehingga makanan ini dapat tinggal lebih lama di dalam lambung. Untuk mengurangi risiko refluks asam, coba resep makanan yang dikukus, direbus, atau dipanggang.\r\n\r\n4. Konsumsi Makanan Sehat\r\n\r\nMemilih makanan yang dikonsumsi adalah kunci utama pencegahan maag. Dikutip dari Verywell Health, berikut jenis makanan yang aman untuk lambung:\r\n\r\n- Sayuran. Brokoli, asparagus, kacang hijau, dan seledri adalah jenis sayuran rendah asam yang tentunya aman untuk perut kamu.\r\n\r\n- Sayuran akar. Sayuran akar, seperti kentang, bit dan wortel tidak mengandung gas, sehingga aman untuk lambung.\r\n\r\n- Oatmeal. Selain bisa dijadikan pengganti nasi, oatmeal rendah gula dan tinggi serat, sehingga tidak menyebabkan refluks asam lambung.\r\n\r\n- Roti. Roti yang terbuat dari gandum whole wheat atau whole grain yang belum diproses dipenuhi oleh serat, dan vitamin yang aman untuk lambung.\r\n\r\n- Nasi. Memang sulit makan tanpa nasi, namun jika memungkinkan, gunakan beras merah sebagai alternatifnya.\r\n\r\n- Daging dan unggas, atau ikan dan seafood non-lemak. Maag bukan berarti tidak boleh makan daging. Kamu bisa menikmati lezatnya daging-dagingan dengan memilih potongan yang rendah lemak.\r\n\r\n- Putih telur. Penuh protein dan rendah lemak. Hindari kuning telur karena memicu refluks asam.  \r\n\r\n- Buah. Semua buah baik untuk kesehatan, namun pengidap maag sebaiknya mengurangi buah-buahan tinggi asam seperti lemon, jeruk, atau tomat.\r\n\r\n5. Hindari Makanan yang Mengiritasi Lambung\r\n\r\nAdapun makanan dan minuman yang perlu dihindari karena memicu refluks asam, yaitu:\r\n\r\n- Alkohol. Sudah menjadi rahasia umum kalau alkohol dapat mengiritasi lambung.\r\n\r\n- Kafein. Kurangi atau hentikan kebiasaan minum kopi, teh, dan soda berkafein. Kafein adalah zat yang meningkatkan produksi asam lambung.\r\n\r\n- Susu. Meskipun mengandung nutrisi baik, ternyata susu termasuk minuman yang meningkatkan asam lambung. Jadi, alangkah lebih baik untuk menguranginya.\r\n\r\n- Daging tertentu. Hindari daging olahan dan daging yang berlemak tinggi karena dapat memicu refluks asam.\r\n\r\n- Makanan berlemak tinggi. Usahakan untuk menghindari makanan yang mengandung lemak tambahan yang dapat meningkatkan asam lambung dan memicu refluks.\r\n\r\n- Makanan pedas. Makanan pedas yang dibuat atau dicampur dengan cabai, merica, dan lada hitam bisa meningkatkan produksi asam dan memicu refluks.\r\n\r\n- Makanan asin. Makanan asin meningkatkan pertumbuhan H. Pylori, yakni bakteri yang dapat menyebabkan maag.\r\n\r\n- Cokelat. Cokelat meningkatkan produksi asam lambung dan memicu gejala refluks.\r\n\r\n6. Rutin Minum Air Putih\r\n\r\nSatu lagi, kamu juga perlu untuk mencukupi kebutuhan air putih bagi tubuh untuk membantu organ-organ tubuh bekerja dengan optimal. Usahakan untuk minum 1-3 gelas air putih saat bangun tidur, sebelum makan serta sebelum tidur.', '2021-05-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(10) NOT NULL,
  `namaObat` varchar(25) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `aturan` varchar(500) NOT NULL,
  `efek` varchar(250) NOT NULL,
  `lastUpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `namaObat`, `deskripsi`, `aturan`, `efek`, `lastUpdate`) VALUES
(1, 'Antisida', '', '', '', '2022-04-25'),
(2, 'Antibiotik', '', '', '', '2022-04-25'),
(3, 'Omeprazole', '', '', '', '2022-04-25'),
(4, 'Mylanta', '', '', '', '2022-04-25'),
(5, 'Promag', '', '', '', '2022-04-25'),
(6, 'Analgesik', '', '', '', '2022-04-26'),
(7, 'Antihistamin', '', '', '', '2022-04-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(8) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempatLahir` varchar(25) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `tinggiBadan` int(3) NOT NULL,
  `beratBadan` int(3) NOT NULL,
  `jKelamin` varchar(10) NOT NULL,
  `namaLengkap` varchar(35) NOT NULL,
  `namaPengguna` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `nomorPonsel` varchar(14) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nik`, `tempatLahir`, `tanggalLahir`, `alamat`, `pekerjaan`, `tinggiBadan`, `beratBadan`, `jKelamin`, `namaLengkap`, `namaPengguna`, `email`, `nomorPonsel`, `password`) VALUES
(1, '1234567891234567', 'Berlin', '2001-08-08', 'Jl. Telekomunikasi No.12', 'Mahasiswa', 184, 68, 'Pria', 'Leonardho R Sitanggang', 'flazefy', 'flazen.edu@gmail.com', '08114882001', 'tester123'),
(2, '1231231231231235', 'Montreal', '1997-11-07', '3551 Willison Street', 'Wiraswasta', 185, 73, 'Pria', 'Kyle Richard', 'richardkyle', 'kylerich8181@gmail.com', '081248857133', 'kyle123'),
(5, '1231231231231240', 'Moscow', '1980-04-20', 'Pochtovaya, bld. 28, appt. 11', 'Teknisi Nuklir', 170, 86, 'Pria', 'Vasili Kashimir', 'vasilykash', 'vasiliKashimir15@gmail.com', '0811488901', 'icyman'),
(6, '1234563218906471', 'Denpasar', '1994-11-09', 'Jl. Rengasdengklok', 'Desainer', 170, 61, 'Wanita', 'Rose Monde', 'rosemonde', 'rosemondea@gmail.com', '081248857133', 'fisheye123'),
(35, '1234567893456781', 'Bandung', '1994-06-16', 'Jl. Rengasdengklok', 'Mahasiswa', 165, 58, 'Wanita', 'Terese Evy', 'teresevyy', 'teresevy@gmail.com', '082348857312', 'nopassword');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasiobatpenyakit`
--

CREATE TABLE `relasiobatpenyakit` (
  `id_relasi` int(10) NOT NULL,
  `id_penyakit` int(10) NOT NULL,
  `id_obat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `relasiobatpenyakit`
--

INSERT INTO `relasiobatpenyakit` (`id_relasi`, `id_penyakit`, `id_obat`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 6),
(7, 2, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasipenyakitgejala`
--

CREATE TABLE `relasipenyakitgejala` (
  `id_relasi` int(12) NOT NULL,
  `id_penyakit` int(8) NOT NULL,
  `id_gejala` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `relasipenyakitgejala`
--

INSERT INTO `relasipenyakitgejala` (`id_relasi`, `id_penyakit`, `id_gejala`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(5, 2, 7),
(6, 2, 8),
(7, 2, 9),
(8, 2, 10),
(9, 2, 11),
(10, 2, 12),
(11, 1, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_review` int(10) NOT NULL,
  `id_user` int(8) NOT NULL,
  `text` varchar(300) NOT NULL,
  `star` int(2) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id_review`, `id_user`, `text`, `star`, `datetime`) VALUES
(1, 2, 'Dengan Medstory saya dapat memantau kesehatan, berdiskusi mengenai kesehatan, dan mendapat informasi terbaru. Aplikasinya mudah digunakan dan gratis', 5, '2022-04-10 18:36:15'),
(2, 5, 'Dengan Medstory saya dapat memantau kesehatan, berdiskusi mengenai kesehatan, dan mendapat informasi terbaru. Aplikasinya mudah digunakan dan gratis', 5, '2022-04-10 18:36:15'),
(3, 1, 'Dengan Medstory saya dapat memantau kesehatan, berdiskusi mengenai kesehatan, dan mendapat informasi terbaru. Aplikasinya mudah digunakan dan gratis', 5, '2022-04-10 18:36:15'),
(7, 6, 'Dengan Medstory saya dapat memantau kesehatan, berdiskusi mengenai kesehatan, dan mendapat informasi terbaru. Aplikasinya mudah digunakan dan gratis', 4, '2022-04-10 18:36:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikatvaksin`
--
-- Kesalahan membaca struktur untuk tabel medstory.sertifikatvaksin: #1932 - Table 'medstory.sertifikatvaksin' doesn't exist in engine
-- Kesalahan membaca data untuk tabel medstory.sertifikatvaksin: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `medstory`.`sertifikatvaksin`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `smartdoc`
--

CREATE TABLE `smartdoc` (
  `id_penyakit` int(8) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `penanganan` varchar(400) NOT NULL,
  `rasio` varchar(100) NOT NULL,
  `level` int(2) NOT NULL,
  `pencegahan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `smartdoc`
--

INSERT INTO `smartdoc` (`id_penyakit`, `nama_penyakit`, `penanganan`, `rasio`, `level`, `pencegahan`) VALUES
(1, 'Maag / Radang lambung', 'Memerlukan diagnosis medis, perlu tes pencitraan (USG), ', '150 ribu kasus pertahun', 1, 'Kurangi kafein dan coklat, Mengunyah makanan secara perlahan, Jangan berolahraga setelah makan, Beri jeda 2 jam jika ingin tidur setelah makan, Kurangi obat antiflamasi, Memperhatikan berat badan ideal'),
(2, 'Cacar air', 'Biasanya dapat diobati sendiri, tidak perlu tes laboratorium, dan penyakit yang dapat menyebar', '150 ribu kasus pertahun', 2, 'Dapat dicegah dengan vaksinasi, Mandi oatmeal, dan gunakan pelembab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tescovid`
--
-- Kesalahan membaca struktur untuk tabel medstory.tescovid: #1932 - Table 'medstory.tescovid' doesn't exist in engine
-- Kesalahan membaca data untuk tabel medstory.tescovid: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `medstory`.`tescovid`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksinasi`
--
-- Kesalahan membaca struktur untuk tabel medstory.vaksinasi: #1932 - Table 'medstory.vaksinasi' doesn't exist in engine
-- Kesalahan membaca data untuk tabel medstory.vaksinasi: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `medstory`.`vaksinasi`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id_announcement`);

--
-- Indeks untuk tabel `asupan`
--
ALTER TABLE `asupan`
  ADD PRIMARY KEY (`id_asupan`);

--
-- Indeks untuk tabel `balasan`
--
ALTER TABLE `balasan`
  ADD PRIMARY KEY (`id_balasan`);

--
-- Indeks untuk tabel `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`id_tes`);

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
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `jadwalkalori`
--
ALTER TABLE `jadwalkalori`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `kebutuhankalori`
--
ALTER TABLE `kebutuhankalori`
  ADD PRIMARY KEY (`id_kebutuhan`);

--
-- Indeks untuk tabel `kms`
--
ALTER TABLE `kms`
  ADD PRIMARY KEY (`id_kms`);

--
-- Indeks untuk tabel `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`id_masukan`);

--
-- Indeks untuk tabel `newsfeed`
--
ALTER TABLE `newsfeed`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `relasiobatpenyakit`
--
ALTER TABLE `relasiobatpenyakit`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indeks untuk tabel `relasipenyakitgejala`
--
ALTER TABLE `relasipenyakitgejala`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indeks untuk tabel `smartdoc`
--
ALTER TABLE `smartdoc`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id_announcement` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `asupan`
--
ALTER TABLE `asupan`
  MODIFY `id_asupan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `balasan`
--
ALTER TABLE `balasan`
  MODIFY `id_balasan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `covid`
--
ALTER TABLE `covid`
  MODIFY `id_tes` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id_diskusi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `jadwalkalori`
--
ALTER TABLE `jadwalkalori`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `kebutuhankalori`
--
ALTER TABLE `kebutuhankalori`
  MODIFY `id_kebutuhan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `kms`
--
ALTER TABLE `kms`
  MODIFY `id_kms` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `masukan`
--
ALTER TABLE `masukan`
  MODIFY `id_masukan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `newsfeed`
--
ALTER TABLE `newsfeed`
  MODIFY `idBerita` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `relasiobatpenyakit`
--
ALTER TABLE `relasiobatpenyakit`
  MODIFY `id_relasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `relasipenyakitgejala`
--
ALTER TABLE `relasipenyakitgejala`
  MODIFY `id_relasi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `smartdoc`
--
ALTER TABLE `smartdoc`
  MODIFY `id_penyakit` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
