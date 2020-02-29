-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2020 pada 13.07
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website-sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auto_numbers`
--

CREATE TABLE `auto_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `auto_numbers`
--

INSERT INTO `auto_numbers` (`id`, `name`, `number`, `created_at`, `updated_at`) VALUES
(1, 'dc4947d60f7a7cf2ab3805543c4137ec', 36, '2020-01-17 12:15:04', '2020-02-04 02:44:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `id_formulir` bigint(20) UNSIGNED NOT NULL,
  `id_pendaftaran` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `no_pendaftaran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_keluarga` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_saudara` int(11) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijasah` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_ayah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ayah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_ibu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ibu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_daftar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`id_formulir`, `id_pendaftaran`, `id_user`, `no_pendaftaran`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_keluarga`, `jml_saudara`, `alamat`, `asal_sekolah`, `ijasah`, `nisn`, `nama_ayah`, `agama_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `nama_ibu`, `agama_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `berkas`, `status_daftar`, `created_at`, `updated_at`) VALUES
(4, 4, 8, '005/MA/2020', 'Ahmad Fahrizi Khabibilah', 'Semarang', '2003-12-18', 'Laki-Laki', 'Islam', 'Anak Kandung', 3, 'Bandarharjo Rt05 Rw03 Tanjung Emas Semarang', 'MTs Tajul Ulum', 'DN-06 MA 0003865', '0035598038', 'Ahmad Slamet', 'Islam', 'Wiraswasta', 'Bandarharjo Rt05 Rw03 Tanjung Emas Semarang', 'Siti Aslamiyah', 'Islam', 'Swasta', 'Bandarharjo Rt05 Rw03 Tanjung Emas Semarang', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 08:46:30', '2020-02-03 11:08:20'),
(5, 4, 8, '006/MA/2020', 'Ahmad Faisal Apriyanto', 'Demak', '2003-04-03', 'Laki-Laki', 'Islam', 'Anak Kandung', 3, 'Sungai Kecil Desa Pembatuan Simpang 4 Tanah Bambu', 'MTS Nurul Hidayah', 'DN-06 MA 0003374', '0036231397', 'Datmiko', 'Islam', 'Wiraswasta', 'Sungai Kecil Desa Pembatuan Simpang 4 Tanah Bambu', 'Evyatun', 'Islam', 'Wiraswasta', 'Sungai Kecil Desa Pembatuan Simpang 4 Tanah Bambu', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 08:53:26', '2020-02-03 11:08:30'),
(6, 4, 8, '007/MA/2020', 'Arina Manasikana', 'Demak', '2004-03-21', 'Perempuan', 'Islam', 'Anak Kandung', 2, 'Weding bonang Demak', 'MTs Miftahul Ulum Weding', 'DN-06 MA 0003985', '0040699499', 'Munasir', 'Islam', 'Pedagang', 'Weding bonang Demak', 'Mukholifah', 'Islam', 'Pedagang', 'Weding bonang Demak', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 09:05:08', '2020-02-03 11:08:45'),
(7, 4, 8, '008/MA/2020', 'Diah Ayu Rahmawati', 'Semarang', '2004-02-23', 'Perempuan', 'Islam', 'Anak Kandung', 4, 'Jl.Tlogo Indah Rt 04 Rw 05', 'MTs Darul Hasanah', 'DN-06 MA 0003810', '0040994940', 'Solekhan Kurniadi', 'Islam', 'Swasta', 'Jl.Tlogo Indah Rt 04 Rw 05', 'Maskanah', 'Islam', 'Lainnya', 'Jl.Tlogo Indah Rt 04 Rw 05', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 09:15:02', '2020-02-03 11:08:57'),
(8, 4, 8, '009/MA/2020', 'Fajrul Ichsan', 'Semarang', '2004-08-07', 'Laki-Laki', 'Islam', 'Anak Kandung', 2, 'Rusun Karangroto', 'MTs Hidayatus Syubban', 'DN-06 MA 0003862', '0040814157', 'Sigito', 'Islam', 'Swasta', 'Rusun Karangroto', 'Umi Sofiah', 'Islam', 'Lainnya', 'Rusun Karangroto', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 09:21:37', '2020-02-03 11:09:08'),
(9, 4, 8, '010/MA/2020', 'Fatkhiyatur Rohmah', 'Demak', '2003-08-22', 'Laki-Laki', 'Islam', 'Anak Kandung', 7, 'Jl.anggrek No2 Weding Bonang Demak', 'MTs Miftahul Ulum Weding', 'DN-06 MA 0003833', '0032909744', 'Nur Fatoni', 'Islam', 'Swasta', 'Jl.anggrek No2 Weding Bonang Demak', 'Rubiah', 'Islam', 'Pedagang', 'Jl.anggrek No2 Weding Bonang Demak', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 09:26:14', '2020-02-03 11:09:18'),
(10, 4, 8, '011/MA/2020', 'Feri Pujianto', 'Semarang', '2000-02-04', 'Laki-Laki', 'Islam', 'Anak Kandung', 4, 'Karangroto', 'MTs Hidayatus Syubban', 'DN-06 MA 0003372', '0004042200', 'Bambang Pujianto', 'Islam', 'Swasta', 'Karangroto', 'Lestari Widi Astuti', 'Islam', 'Lainnya', 'Karangroto', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 09:43:49', '2020-02-03 11:09:28'),
(11, 4, 8, '012/MA/2020', 'Guntur Juraimi Wiji .S', 'Semarang', '2004-06-22', 'Laki-Laki', 'Islam', 'Anak Kandung', 5, 'Jl.Jatimas Rt 06 Rw 05', 'MTs Hidayatus Syubban', 'DN-06 MA 0003812', '0041377183', 'Juraimi Wiji Santoso', 'Islam', 'TNI/Polri', 'Jl.Jatimas Rt 06 Rw 05', 'Sumarlik', 'Islam', 'Lainnya', 'Jl.Jatimas Rt 06 Rw 05', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 09:48:58', '2020-02-03 11:10:03'),
(12, 4, 8, '013/MA/2020', 'Isna Septia Rizqiani', 'Semarang', '2003-09-26', 'Perempuan', 'Islam', 'Anak Kandung', 3, 'Jl.Laskar Hisbullah', 'MTs Assa\'adah', 'DN-06 MA 0003844', '003517245', 'Jhoni Sudarsono', 'Islam', 'Swasta', 'Jl.Laskar Hisbullah', 'Imronah', 'Islam', 'Lainnya', 'Jl.Laskar Hisbullah', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 10:47:34', '2020-02-03 11:10:14'),
(13, 4, 8, '014/MA/2020', 'Muhammad Fazal Ukba', 'Semarang', '2004-10-12', 'Laki-Laki', 'Islam', 'Anak Kandung', 3, 'Kudu Rt 06 Rw 04', 'MTs Futuhiyah Kudu', 'DN-06 MA 0003356', '0040878756', 'Subkhan', 'Islam', 'Pedagang', 'Kudu Rt 06 Rw 04', 'Istiqomah', 'Islam', 'Lainnya', 'Kudu Rt 06 Rw 04', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 10:51:40', '2020-02-03 11:11:24'),
(14, 4, 8, '015/MA/2020', 'Nur Aini', 'Demak', '2004-06-05', 'Perempuan', 'Islam', 'Anak Kandung', 2, 'Njetaksari Njati Rt04 Rw02 Sayung Demak', 'MTs Hidayatus Syubban', 'DN-06 MA 0003185', '0042464022', 'Suwoto', 'Islam', 'Swasta', 'Njetaksari Njati Rt04 Rw02 Sayung Demak', 'Imronah', 'Islam', 'Swasta', 'Njetaksari Njati Rt04 Rw02 Sayung Demak', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 11:07:48', '2020-02-03 11:11:37'),
(15, 4, 8, '016/MA/2020', 'Nurul Fajriyah', 'Demak', '2004-05-11', 'Perempuan', 'Islam', 'Anak Kandung', 3, 'Ploso Kec Karang Tengah Kab.Demak', 'MTs Ihsanniat', 'DN-06 MA 0003093', '0042496751', 'Ikhyak Ulumuddin', 'Islam', 'Pedagang', 'Ploso Kec Karang Tengah Kab.Demak', 'Siti Aslamah', 'Islam', 'Lainnya', 'Ploso Kec Karang Tengah Kab.Demak', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 11:20:47', '2020-02-03 12:35:35'),
(16, 4, 8, '017/MA/2020', 'Nurul Hakim', 'Demak', '2004-01-01', 'Laki-Laki', 'Islam', 'Anak Kandung', 3, 'Ngepreh Rt05 Rw06 Sayung Demak', 'MTs Futuhiyah 1 Mranggen', 'DN-06 MA 0003683', '0047966272', 'Muhammad Zaini', 'Islam', 'Swasta', 'Ngepreh Rt05 Rw06 Sayung Demak', 'Juriah', 'Islam', 'Pedagang', 'Ngepreh Rt05 Rw06 Sayung Demak', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 11:23:36', '2020-02-03 12:35:55'),
(17, 4, 8, '018/MA/2020', 'Nurun Nasikhah', 'Demak', '2004-03-24', 'Perempuan', 'Islam', 'Anak Kandung', 3, 'Ngepreh Rt 06 Rw 06', 'MTs Hidayatus Syubban', 'DN-06 MA 0003165', '0047071052', 'Abdur Rozaq', 'Islam', 'Swasta', 'Ngepreh Rt 06 Rw 06', 'Muthori\'ah', 'Islam', 'Pedagang', 'Ngepreh Rt 06 Rw 06', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 11:36:17', '2020-02-03 12:36:14'),
(18, 4, 8, '019/MA/2020', 'Rachmawati Dewi Putri', 'Semarang', '2004-03-27', 'Perempuan', 'Islam', 'Anak Kandung', 4, 'Karangroto', 'MTs Hidayatus Syubban', 'DN-06 MA 0003265', '0040878576', 'Guntori', 'Islam', 'Swasta', 'Karangroto', 'May Ru\'ah', 'Islam', 'Pedagang', 'Karangroto', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 11:48:19', '2020-02-03 12:36:56'),
(19, 4, 8, '020/MA/2020', 'Rahmatun Nazilah', 'Demak', '2003-08-08', 'Perempuan', 'Islam', 'Anak Kandung', 4, 'Jl.Anggrek No 2 Weding bonang Demak', 'MTs Miftahul Ulum Weding', 'DN-06 MA 0003365', '0036169928', 'Amirul Mukminin', 'Islam', 'Swasta', 'Jl.Anggrek No 2 Weding bonang Demak', 'Muatinah', 'Islam', 'Swasta', 'Jl.Anggrek No 2 Weding bonang Demak', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 11:52:42', '2020-02-03 11:59:53'),
(20, 4, 8, '021/MA/2020', 'Rindi Ayu Astuti', 'Semarang', '2003-05-10', 'Perempuan', 'Islam', 'Anak Kandung', 2, 'Jl.Kauman Dowo Rt01 Rw 05', 'MTs Hidayatus Syubban', 'DN-06 MA 0003860', '0033317992', 'Busro', 'Islam', 'Swasta', 'Jl.Kauman Dowo Rt01 Rw 05', 'Indah Prastuti', 'Islam', 'Swasta', 'Jl.Kauman Dowo Rt01 Rw 05', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 12:02:24', '2020-02-03 12:37:24'),
(21, 4, 8, '022/MA/2020', 'Uslukman Hafifi', 'Semarang', '2002-11-16', 'Laki-Laki', 'Islam', 'Anak Kandung', 3, 'Kudu Rt 01 Rw 04', 'MTs Hidayatus Syubban', 'DN-06 MA 0003065', '0028318646', 'Muh Kundlori', 'Islam', 'Swasta', 'Kudu Rt 01 Rw 04', 'Sumirah', 'Islam', 'Swasta', 'Kudu Rt 01 Rw 04', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 12:10:29', '2020-02-03 12:37:41'),
(22, 4, 8, '023/MA/2020', 'Mahendra Wijaksara', 'Semarang', '2004-03-10', 'Laki-Laki', 'Islam', 'Anak Kandung', 4, 'Karangroto Rt 09 Rw 02', 'SMPN 20 Semarang', 'DN-06 MA 0004365', '0041377330', 'Jumari', 'Islam', 'Swasta', 'Karangroto Rt 09 Rw 02', 'Safitri Khotimah', 'Islam', 'Lainnya', 'Karangroto Rt 09 Rw 02', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 12:14:04', '2020-02-03 12:37:59'),
(23, 4, 8, '024/MA/2020', 'Widi Arjangi', 'Semarang', '2003-11-15', 'Laki-Laki', 'Islam', 'Anak Kandung', 3, 'Kudu Rt 06 Rw 05', 'SMPN 20 Semarang', 'DN-06 MA 0003366', '0035692156', 'Sumono', 'Islam', 'Swasta', 'Kudu Rt 06 Rw 05', 'Sukimah', 'Islam', 'Lainnya', 'Kudu Rt 06 Rw 05', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 12:35:14', '2020-02-03 12:38:19'),
(24, 5, 8, '025/MA/2020', 'Zaenal Abidin', 'Semarang', '2005-07-08', 'Laki-Laki', 'Islam', 'Anak Kandung', 3, 'Penggaron Lor RT 01 RW 03', 'SMP AL-HUDA', 'DN-06 006748', '008499477', 'Sugianto', 'Islam', 'Swasta', 'Penggaron Lor RT 01 RW 03', 'Marfuah', 'Islam', 'Pedagang', 'Penggaron Lor RT 01 RW 03', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 22:03:17', '2020-02-03 22:03:39'),
(25, 5, 8, '026/MA/2020', 'Siti Aminah', 'Semarang', '2005-04-01', 'Perempuan', 'Islam', 'Anak Kandung', 3, 'Sembung Harjo RT 02 RW 03', 'MTs Hidayatus Syubban', 'DN-06 006443', '0094746661', 'Solikin', 'Islam', 'Swasta', 'Sembung Harjo RT 02 RW 03', 'Nur Chasanah', 'Islam', 'Swasta', 'Sembung Harjo RT 02 RW 03', NULL, 'DAFTAR TEMPAT', '2020-02-03 22:05:38', '2020-02-03 22:05:38'),
(26, 5, 8, '027/MA/2020', 'Muhammad Ridho', 'Demak', '2005-03-15', 'Laki-Laki', 'Islam', 'Anak Kandung', 3, 'Kudu RT 05 RW 01', 'MTs Hidayatus Syubban', 'DN-06 006767', '0099944111', 'Heri Susanto', 'Islam', 'Swasta', 'Kudu RT 05 RW 01', 'Musdalifah', 'Islam', 'Pedagang', 'Kudu RT 05 RW 01', NULL, 'DAFTAR TEMPAT', '2020-02-03 22:08:36', '2020-02-03 22:08:36'),
(27, 5, 8, '028/MA/2020', 'Abdul Rohman', 'Semarang', '2005-07-07', 'Laki-Laki', 'Islam', 'Anak Kandung', 2, 'Sembung Harjo RT 03 RW 04', 'SMP AL-HUDA', 'DN-06 006431', '008484771', 'Purwanto', 'Islam', 'Swasta', 'Sembung Harjo RT 03 RW 04', 'Rukiyah', 'Islam', 'Swasta', 'Sembung Harjo RT 03 RW 04', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 22:19:05', '2020-02-03 22:19:27'),
(28, 5, 9, '029/MA/2020', 'Muhammad Agung Setya Budi', 'Semarang', '2005-05-05', 'Laki-Laki', 'Islam', 'Anak Kandung', 1, 'Penggaron Lor RT 05 RW 04', 'SMP N 34 SEMARANG', 'DN-06 006412', '994330331', 'Juwari', 'Islam', 'Swasta', 'Penggaron Lor RT 05 RW 04', 'Sarkonah', 'Islam', 'Pedagang', 'Penggaron Lor RT 05 RW 04', NULL, 'DAFTAR ONLINE', '2020-02-03 22:39:40', '2020-02-03 22:39:40'),
(29, 3, 8, '030/MA/2020', 'ANDRE DI PRAYOGO', 'Semarang', '2003-03-22', 'Laki-Laki', 'Islam', 'Anak Kandung', 2, 'Kudu Kramat Rt 02 Rw 02 Genuk Semarang', 'MTs Futuhiyah Kudu', 'DN-06 002748', '0033318994', 'M. Bashori', 'Islam', 'Swasta', 'Kudu Kramat Rt 02 Rw 02 Genuk Semarang', 'Nur Chasanah', 'Islam', 'Swasta', 'Kudu Kramat Rt 02 Rw 02 Genuk Semarang', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 22:56:08', '2020-02-03 22:58:55'),
(30, 3, 8, '031/MA/2020', 'AZIFATUL AZIZAH', 'Semarang', '2003-01-05', 'Perempuan', 'Islam', 'Anak Kandung', 4, 'Pulosari Rt 08 Rw 04 Genuk Semarang', 'MTs Hidayatus Syubban', 'DN-06 006744', '0033317976', 'Rokhmad', 'Islam', 'Swasta', 'Pulosari Rt 08 Rw 04 Genuk Semarang', 'Sri Utami', 'Islam', 'Swasta', 'Pulosari Rt 08 Rw 04 Genuk Semarang', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 22:58:42', '2020-02-03 22:59:04'),
(31, 3, 8, '032/MA/2020', 'DEVI WULAN SAPUTRI', 'Semarang', '2003-10-07', 'Perempuan', 'Islam', 'Anak Kandung', 3, 'Dombo Rt 05 Rw 01 Sayung Demak', 'MTs Hidayatus Syubban', 'DN-06 006433', '0031622328', 'Purwono', 'Islam', 'Swasta', 'Dombo Rt 05 Rw 01 Sayung Demak', 'Nur Khayati', 'Islam', 'Swasta', 'Dombo Rt 05 Rw 01 Sayung Demak', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 23:02:30', '2020-02-03 23:08:39'),
(32, 3, 8, '033/MA/2020', 'ELSA LUTHFI ANDREA', 'Semarang', '2002-09-08', 'Perempuan', 'Islam', 'Anak Kandung', 4, 'Banjardowo Rt 03 Rw 01 Genuk Semarang', 'MTs Hidayatus Syubban', 'DN-06 006440', '0027983583', 'Suhartono', 'Islam', 'Wiraswasta', 'Banjardowo Rt 03 Rw 01 Genuk Semarang', 'Nuryanti', 'Islam', 'Wiraswasta', 'Banjardowo Rt 03 Rw 01 Genuk Semarang', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 23:05:28', '2020-02-03 23:08:49'),
(33, 3, 8, '034/MA/2020', 'KASTIA FEBRIANA', 'Semarang', '2003-01-31', 'Perempuan', 'Islam', 'Anak Kandung', 3, 'Jl Kyai Nawawi 1 Bangetayu Wetan Rt 01 Rw 03 Genuk Semarang', 'MTs Hidayatus Syubban', 'DN-06 002848', '0033318391', 'Nasikin', 'Islam', 'Swasta', 'Jl Kyai Nawawi 1 Bangetayu Wetan Rt 01 Rw 03 Genuk Semarang', 'Karmini', 'Islam', 'Swasta', 'Jl Kyai Nawawi 1 Bangetayu Wetan Rt 01 Rw 03 Genuk Semarang', 'foto,raport,skhun,ijasah', 'DITERIMA', '2020-02-03 23:08:29', '2020-02-03 23:08:59'),
(34, 5, 9, '035/MA/2020', 'Muhammad Agung Setya Budi', 'Semarang', '2005-05-05', 'Laki-Laki', 'Islam', 'Anak Kandung', 1, 'Penggaron Lor', 'SMP N 34 SEMARANG', 'DN-06 002723', '098888831', 'Juwari', 'Islam', 'Swasta', 'Penggaron Lor', 'Sarkonah', 'Islam', 'Pedagang', 'Penggaron Lor', NULL, 'DAFTAR ONLINE', '2020-02-04 02:37:28', '2020-02-04 02:37:28'),
(35, 5, 12, '036/MA/2020', 'sss', 'ddd', '0003-03-02', 'Laki-Laki', 'Islam', 'Anak Kandung', 1, 'sss', 'ddddd', 'ddd', '3213123', 'eee', 'Islam', 'Pedagang', 'dddd', 'ddd', 'Islam', 'Pedagang', 'dddd', NULL, 'DAFTAR ONLINE', '2020-02-04 02:44:38', '2020-02-04 02:44:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('Berita','Pengumuman') COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `id_user`, `judul`, `kategori`, `isi`, `slug`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 8, 'Penyerahan Piala Kejuaraan', 'Berita', '<p>Madrasah Aliyah Hidayatus Syubban Genuk Semarang berhasil menyabet juara umum dalam Pekan Olahraga Seni Ma’arif (Porsema) NU 2014 Tingkat Kota Semarang. Porsema digelar di Al-Asror pada 27-28 Oktober lalu. Kegiatan tersebut merupakan besutan Pengurus Cabang Lembaga Pendidikan Ma’arif NU Kota Semarang.</p><p>Hidayatus Syubban menyabet lima emas sekaligus, yaitu Pidato Bahasa Inggris, sepak takraw, tenis meja putra, tenis meja putri, bulu tangkis putri. Juga dua perak untuk puisi religi dan Cerdas Cermat Agama. Juga satu perunggu untuk mata lomba bulutangkis putra.</p><p>Madrasah Aliyah Hidayatus Syubban Genuk Semarang berhasil menyabet juara umum dalam Pekan Olahraga Seni Ma’arif (Porsema) NU 2014 Tingkat Kota Semarang. Porsema digelar di Al-Asror pada 27-28 Oktober lalu. Kegiatan tersebut merupakan besutan Pengurus Cabang Lembaga Pendidikan Ma’arif NU Kota Semarang.</p><p>Hidayatus Syubban menyabet lima emas sekaligus, yaitu Pidato Bahasa Inggris, sepak takraw, tenis meja putra, tenis meja putri, bulu tangkis putri. Juga dua perak untuk puisi religi dan Cerdas Cermat Agama. Juga satu perunggu untuk mata lomba bulutangkis putra.</p>', 'penyerahan-piala-kejuaraan', '/photos/8/11.jpg', '2020-01-19 12:46:10', '2020-01-19 12:46:10'),
(5, 8, 'Mengenalkan Konsep Kemerdekaan Belajar', 'Berita', '<p>Menurut Nadiem, interpretasi Kementerian Pendidikan dan Kebudayaan terhadap visi presiden ada dua hal, yaitu merdeka belajar dan guru penggerak.</p><p>Apa itu kemerdekaan belajar? Kemerdekaan belajar artinya kemerdekaan di setiap jenjang unit pendidikan.&nbsp;</p><p>\"Kemerdekaan harus turun terus. Lembaga perguruan tinggi merdeka dari berbagai macam regulasi dan birokratisasi. Para pendidik dan dosen juga dimerdekakan dari briorkrasi,\" kata&nbsp;Nadiem saat memberikan sambutan di Universitas Indonesia, Rabu (4/12/2019).</p><p>Di perguruan tinggi, mahasiswa diberikan kemerdekaan untuk belajar sesuai kemauannya, kemampuan, dan minat.</p><p>\"5 tahun ke depan nggak akan nyaman sama sekali untuk berbagai macam institusi pendidikan. Tapi kalau mau perguruan tinggi kita aman, relevan kita harus lakukan perubahan ini,\" ujar dia.</p>', 'mengenalkan-konsep-kemerdekaan-belajar', '/photos/8/naidem.jpg', '2020-01-19 12:54:23', '2020-01-19 12:54:23'),
(6, 8, 'Lomba Tumpeng Terbaik', 'Berita', '<p>Semarang – Madrasah Aliyah Hidayatus Syubban Semarang, menyelenggarakan lomba menata dan menghias tumpeng di halaman sekolah setempat, Senin (16/12). Peserta lomba adalah perwakilan kelas.</p><p>Pagi itu, 6 rombongan peserta lomba datang beriringan membawa tumpeng hasil kreasinya untuk dinilai. Penilaian juri meliputi kreasi, cipta rasa, dan teknik penyajian dengan menghadirkan juri.</p><p>Semua tumpeng yang telah dinilai, selanjutnya dinikmati bersama seluruh warga Kemenag yang pada hari itu juga melaksanakan acara khotmil Qur’an dan Istigosah sebagai bagian dari rangkaian kegiatanHri Guru Nasional.</p><p>Menurut Kepala Sekolah, tujuan lomba ini adalah untuk meningkatkan kreativitas dalam membuat tumpeng dan sekaligus sebagai ajang silaturahmi semua warga Kemenag Kota Semarang. Hari itu pula pihaknya menggelar khotmil Qur’an dan istighosah yang diikuti seluruh ASN setempat dan undangan lainnya.</p>', 'lomba-tumpeng-terbaik', '/photos/8/IMG-20191220-WA0006.jpg', '2020-01-19 13:09:42', '2020-01-19 13:09:42'),
(7, 8, 'HARI ULANG TAHUN SEKOLAH', 'Berita', '<p>Pada tanggal 3 februari adalah hari ulang tahun yayasan hidayatus syubban</p>', 'hari-ulang-tahun-sekolah', '/photos/1/IMG-20191220-WA0007.jpg', '2020-02-03 22:16:11', '2020-02-03 22:16:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` bigint(20) UNSIGNED NOT NULL,
  `nama_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kata_sambutan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah_sekolah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_sekolah`, `kata_sambutan`, `visi`, `misi`, `sejarah_sekolah`, `alamat`, `email`, `telepon`, `fax`, `facebook`, `twitter`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'MADRASAH ALIYAH HIDAYATUS SYUBBAN', '<p>Assalamu’alaikum&nbsp;wr.&nbsp;wb.</p><p>Puji&nbsp;syukur&nbsp;kami&nbsp;panjatkan&nbsp;kehadirat&nbsp;Allah&nbsp;SWT,&nbsp;atas&nbsp;segala&nbsp;nikmat&nbsp;dan&nbsp;ridhoNya,&nbsp;semoga&nbsp;kita&nbsp;dapat&nbsp;melaksanakan&nbsp;tigas&nbsp;dan&nbsp;kewajiban&nbsp;sehari-hari&nbsp;tanpa&nbsp;ada&nbsp;kesulitan&nbsp;dan&nbsp;rintangan.&nbsp;Amin.</p><p>Sholawat&nbsp;serta&nbsp;salam&nbsp;kita&nbsp;haturkan&nbsp;kepangkuan&nbsp;Nabi&nbsp;Muhammad&nbsp;SAW&nbsp;yang&nbsp;kita&nbsp;ikut&nbsp;jejak&nbsp;dan&nbsp;suri&nbsp;tauladannya&nbsp;hingga&nbsp;akhir&nbsp;zaman. Kami&nbsp;menyambut&nbsp;gembira&nbsp;atas&nbsp;terbitnya&nbsp;buku&nbsp;album&nbsp;kenangan&nbsp;MA&nbsp;Hidayatus&nbsp;Syubban&nbsp;untuk&nbsp;siswa&nbsp;angkatan&nbsp;ke&nbsp;26&nbsp;yang&nbsp;terbit&nbsp;diakhir&nbsp;tahun&nbsp;pelajaran&nbsp;2018-2019. Walaupun&nbsp;sederhana&nbsp;buku&nbsp;album&nbsp;kenangan&nbsp;ini&nbsp;setidaknya&nbsp;turut&nbsp;memberikan&nbsp;informasi,&nbsp;kesan&nbsp;dan&nbsp;pesan&nbsp;dari&nbsp;guru&nbsp;mapaun&nbsp;antar&nbsp;sesama&nbsp;alumni.</p><p>Anak-anakku&nbsp;yang&nbsp;saya&nbsp;sayangi,&nbsp;melalui&nbsp;buku&nbsp;kenangan&nbsp;ini&nbsp;Bapak&nbsp;berpesan&nbsp;:</p><p>1.&nbsp;Jagalah&nbsp;almamatermu&nbsp;ini,&nbsp;dipundakmulah&nbsp;perkembangan&nbsp;Madrasah&nbsp;di&nbsp;masa-masa&nbsp;mendatang.</p><p>2.&nbsp;Jalinlah&nbsp;hubungan&nbsp;silaturahmi&nbsp;dengan&nbsp;para&nbsp;guru&nbsp;yang&nbsp;telah&nbsp;memberikan&nbsp;banyak&nbsp;ilmunya&nbsp;kepada&nbsp;kalian.</p><p>3.&nbsp;Selalu&nbsp;ingat&nbsp;wasiat&nbsp;dari&nbsp;simbah&nbsp;KH.&nbsp;Moh.&nbsp;Ridlwan&nbsp;pendiri&nbsp;Yayasan&nbsp;Hidayatus&nbsp;Syubban.</p><p>Selamat&nbsp;jalan&nbsp;wahai&nbsp;anak-anakku,&nbsp;semoga&nbsp;kalian&nbsp;berhasil&nbsp;dalam&nbsp;menempuh&nbsp;pendidikan&nbsp;yang&nbsp;lebih&nbsp;tinggi&nbsp;untuk&nbsp;mewujudkan&nbsp;cita-cita&nbsp;kalian&nbsp;dan&nbsp;kelak&nbsp;bermanfaat&nbsp;bagi&nbsp;perkembangan&nbsp;zaman.&nbsp;Jikalau&nbsp;ada&nbsp;yang&nbsp;salah&nbsp;selama&nbsp;ini,&nbsp;keluarga&nbsp;besar&nbsp;Hidayatus&nbsp;Syubban&nbsp;minta&nbsp;maaf.</p><p>Wassalamu’alaikum&nbsp;wr.&nbsp;wb.</p>', '<p>Iman dan Taqwa Kuat, Ilmu Pengetahuan dan Teknologi Mantap (IMTAQ KUAT, IPTEK MANTAP).</p>', '<p>1. Memantapkan aqidah islam yang berhaluan ahlus sunah wal jamaah.</p><p>2. Kreatif dan inovatif terhadap pemanfaatan iptek bagi agama, bangsa dan negara.</p><p>3. Mewujudkan perilaku yang berakhlaqul karimah.</p>', '<p>Berawal dari M.Ts. Hidayatus Syubban yang sudah berjalan sejak tahun 1983 dan melihat kelulusannya yang sebagian besar tidak melanjutkan sekolah karena faktor ekonomi, juga tidak adanya sekolah lanjutan yang setingkat lebih tinggi yang dekat dengan lokasi M.Ts. Hidayatus Syubban.</p><p>Waktu itu M.A. hanya ada di Pedurungan yaitu MAN 1 dan SMA 10 yang ada di Gebangsari. Pada tahun 1989 terjadi re-urbanisasi yang cukup besar dari masyarakat kota Semarang ke karangroto akibat normalisasi kalibanger meupun terkena proyek pembangunan Pemda kota Semarang yang pada akhirnya jumlah penduduk di Karangroto meningkat pesat.</p><p>Melihat feomena yang memprihatinkan, putra dari pendiri yayasan Hidayatus Syubban yang bernama H.Ach.Syamhudi, alumnus IKIP Veteran Semarang mempunyai gagasan untuk mendirikan sekolah lanjutan dibawah naungan Departemen Agama yang merupakan lanjutan dari M.Ts. yang sudah ada. Hal tersebut disampaikan kepada KH.Muh Ridwan selaku ketua Yayasan dan akhirnya beliau merestuinya.</p><p>Dengan dukungan masyarakat dan guru M.Ts. maka pada tanggal 1 Juli 1989 M.A. Hidayatus Syubban yang berlokasi di Jl. Zaenudin No. 1 Karangroto Genuk Semarang resmi berdiri dengan ketentuan hukum diperbolehkan mengikuti ujian persamaan madrasah negeri dan piagam yang dikeluarkan kepala kantor wilayah Departemen Agama Propinsi Jawa Tengah, sementara itu pelaksanaan KBM siang hari dari jam 13.00 s/d 17.20 WIB.</p><p>Berkat dorongan dan motivasi perjuangan yang tinggi para pengelola awal M.A. Hidayatus Syubban demi agama dan anak bangsa dan perjalanannya terus mengalami peningkatan baik kualitas maupun kuantitas. Dari tahun ke tahun jumlah siswa makin banyak, sehingga jumlah ruangan yang semula hanya 3 lokal, lalu timbul ide dari pertemuan dengan dewan asatidz, agar yayasan dapat mewujudkan bangunan gedung untuk menampung siswa yang terus bertambah.</p><p>Melihat greget para ustadz dan karyawan di M.A. Hidayatus Syubban, beliau (K. Muh Ridwan) dengan putraputranya mengadakan rapat keluarga dan menginformasikan akan menjual kebun keluarganya untuk membangun kelas baru.</p><p>Tahun 1998/1999 Departemen Agama untuk pertama kalinya mengadakan akreditasi M.A. Hidayatus Syubban berstatus “ Terdaftar” menjadi “Diakui” dengan nomor piagam B/E.IV/MA/0887/99.</p><p>Tahun pelajaran 2004/2005 setelah mengajukan akreditasi ke Kanwil Departemen Agama Propinsi Jawa tengah mendapatkan sertifikat terakreditasi B.</p><p>Tahun pelajaran 2009/2010 berdasarkan hasil visitasi dari Tim accesor dari Badan Akreditasi Nasional Sekolah/Madrasah (BAN-S/M) M.A. Hidayatus Syubban mendapat peringkat Terakreditasi B.</p>', 'Jl. Kyai H. Zainuddin Raya No.1, Karangroto, Genuk, Semarang 50117', 'mahidas@gmail.com', '02476580104', '02476580104', 'https://www.facebook.com/ma.hidayatussyubban', '#', '#', '#', '2019-12-11 08:17:00', '2020-02-03 22:14:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(9, '2019_11_11_081205_create_staff_table', 2),
(12, '2019_11_14_100640_create_informasi_table', 3),
(13, '2019_11_16_161534_add_soft_delete_to_users', 4),
(14, '2019_12_11_144130_create_kontak_table', 5),
(15, '2019_12_27_150357_create_pendaftaran_table', 6),
(17, '2017_08_03_055212_create_auto_numbers', 8),
(18, '2020_01_01_183412_create_formulir_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buka` date NOT NULL,
  `tutup` date NOT NULL,
  `kuota` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_user`, `tahun_ajaran`, `buka`, `tutup`, `kuota`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 8, '2018/2019', '2018-02-25', '2018-05-25', 60, 0, '2020-01-16 14:53:43', '2020-01-16 14:53:43', NULL),
(4, 8, '2019/2020', '2019-02-01', '2019-05-25', 60, 0, '2020-01-16 14:54:51', '2020-02-03 08:41:11', NULL),
(5, 8, '2020/2021', '2020-02-03', '2020-05-25', 60, 1, '2020-01-16 14:55:30', '2020-02-03 22:53:58', NULL),
(6, 8, '2021/2022', '2021-02-01', '2021-05-25', 60, 0, '2020-02-03 22:17:14', '2020-02-03 22:48:25', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Guru','Karyawan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id_staff`, `nama`, `status`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'KH. Muh. Shohib, M.Pd.I', 'Guru', 'KEPALA MADRASAH', '/photos/1/guru.png', '2019-11-13 10:41:44', '2019-12-28 08:59:56'),
(2, 'KH. Ach. Syamhudi, M.Pd.I', 'Guru', 'KETUA YAYASAN', '/photos/1/guru.png', '2019-12-03 16:55:07', '2019-12-28 08:57:26'),
(3, 'Eka Fitriyana, S.Pd', 'Guru', 'WAKA KURIKULUM', '/photos/1/guru.png', '2019-12-03 16:58:16', '2019-12-28 09:01:28'),
(4, 'Joko Susilo,  S.Pd', 'Guru', 'GURU MATEMATIKA', '/photos/1/guru.png', '2019-12-03 16:58:59', '2019-12-28 09:02:07'),
(5, 'Mughni, S.Ag', 'Guru', 'GURU AL-QUR\'AN', '/photos/1/guru.png', '2019-12-28 09:03:29', '2019-12-28 09:03:29'),
(6, 'Mahfud MD, S.Pd.I', 'Guru', 'GURU SKI', '/photos/1/guru.png', '2019-12-28 09:04:11', '2019-12-28 09:05:20'),
(7, 'Alif Mahmudah, S.Pd.I', 'Guru', 'GURU AQIDAH', '/photos/1/guru.png', '2019-12-28 09:04:55', '2019-12-28 09:04:55'),
(8, 'Mujiyati, S.Pd', 'Guru', 'GURU BIOLOGI', '/photos/1/guru.png', '2019-12-28 09:06:06', '2019-12-28 09:06:06'),
(9, 'Lukman Hakim, M.Pd.I', 'Guru', 'GURU BAHASA INDONESIA', '/photos/1/guru.png', '2019-12-28 09:06:43', '2020-01-04 13:31:29'),
(10, 'Musta\'in, S.Ag', 'Guru', 'GURU BAHASA ARAB', '/photos/1/guru.png', '2019-12-28 09:07:22', '2019-12-28 09:07:22'),
(11, 'Abdul Kholiq, S.Pd.I', 'Guru', 'GURU FIQIH', '/photos/1/guru.png', '2019-12-28 09:08:25', '2019-12-28 09:09:32'),
(12, 'Sholihatun, S.Pd', 'Guru', 'GURU BAHASA INGGRIS', '/photos/1/guru.png', '2019-12-28 09:09:19', '2019-12-28 09:09:44'),
(13, 'Titin Sudiarti, S.Pd', 'Guru', 'GURU KIMIA', '/photos/1/guru.png', '2019-12-28 09:10:17', '2019-12-28 09:10:17'),
(14, 'Muttawadhi\'ah, S.Pd', 'Guru', 'GURU FISIKA', '/photos/1/guru.png', '2019-12-28 09:11:14', '2019-12-28 09:11:14'),
(15, 'Kukuh Wijanarko, S.Kom', 'Guru', 'GURU TIK', '/photos/1/guru.png', '2019-12-28 09:11:55', '2019-12-28 09:11:55'),
(16, 'Nanda Kurniawati, S.Pd', 'Guru', 'GURU BAHASA JAWA', '/photos/1/guru.png', '2019-12-28 09:12:34', '2019-12-28 09:12:34'),
(17, 'Mapluri, S.Ag', 'Guru', 'GURU PENJASKES', '/photos/1/guru.png', '2019-12-28 09:13:08', '2019-12-28 09:13:08'),
(18, 'Noor Rohmad, S.Pd', 'Guru', 'GURU EKONOMI DAN SEJARAH', '/photos/1/guru.png', '2019-12-28 09:13:51', '2019-12-28 09:13:51'),
(19, 'Syifa Ludfi Fauziah, S.Pd', 'Guru', 'GURU SEJARAH DAN GEOGRAFI', '/photos/1/guru.png', '2019-12-28 09:14:40', '2019-12-28 09:14:40'),
(20, 'Mawahib, S.Pd', 'Guru', 'GURU PKN', '/photos/1/guru.png', '2019-12-28 09:15:11', '2019-12-28 09:15:11'),
(21, 'Nailatul Izzah, SE', 'Karyawan', 'BAGIAN ADMINISTRASI', '/photos/1/guru.png', '2019-12-28 09:15:55', '2019-12-28 09:15:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `role` enum('Administrator','Siswa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `role`, `fullname`, `nickname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'Administrator', 'Administrator', 'Admin', 'admin@admin.com', NULL, '$2y$10$OAzk3gUVOgvjt4fGB.N/z.SdlWRP8nsArGBwKSFI/LsorwyilrfG.', 'ofh8K4ML4lpNPYoDCKCaNxyofplDR736MVCo5rzewsZNblRLuHeRfZDEV3zB', '2020-01-16 14:15:05', '2020-01-26 08:09:24', NULL),
(9, 'Siswa', 'Muhammad Agung Setya Budi', 'Agung', 'setyaagung74@gmail.com', NULL, '$2y$10$XsdI5GxXg00Bg6C/Yb3uqemuinGGQHr1xyh1uuiW8xKqymDKJb426', 'Gmi8SVbIe2MBWUJfCMP4duaZsbxa0rWUPkuoGU4USMwCUBa99gamtmsRRHtY', '2020-01-16 14:36:16', '2020-01-16 14:36:16', NULL),
(10, 'Siswa', 'Ilham Jaya Kusuma', 'Ilham', 'ilhamjaya@gmail.com', NULL, '$2y$10$lS9OwXTSPRXOzoHphf2RBO.dsruVqvl5VfK70Qw8Nb6P8CXh3UEoq', 'JnKtxTjXl42gmBIyqhLEWeL4Oz3Uw264wLHsPu2AzInVbSs9P1ANYzDHIjLv', '2020-01-26 08:10:49', '2020-01-26 08:11:00', NULL),
(11, 'Siswa', 'Ilham Jaya Kusuma', 'Ilham', 'ilhamjaya74@gmail.com', NULL, '$2y$10$7GdKQZ4fg0MYduMUvN2CSuSBeWszS444g.Op962YHpcUNA0XnfWcu', 'mOZUuW60VZ5u3a5Ixja48RzGnX6RflErGfp3Pi8cOrrVEr94PhSdpAlxEulL', '2020-02-03 22:50:10', '2020-02-03 22:50:10', NULL),
(12, 'Siswa', 'Guntur', 'Guntur', 'guntur@gmail.com', NULL, '$2y$10$Y5kpUZO/GXQILV3f.7yileGORZriLkhACm7VstPgg4NsPrEMAJ.8u', 'FbLqKsqZn0y6hM1EjX7P6busqL8R1NdWPFty6Df35dlWMVPTQzUho2QVzJGU', '2020-02-04 02:42:57', '2020-02-22 00:24:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auto_numbers`
--
ALTER TABLE `auto_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auto_numbers`
--
ALTER TABLE `auto_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id_formulir` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
