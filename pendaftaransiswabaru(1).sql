-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2023 pada 17.40
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaransiswabaru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_calon_siswa`
--

CREATE TABLE `data_calon_siswa` (
  `kode` int(11) NOT NULL,
  `pendaftaran` varchar(50) NOT NULL,
  `tahun_masuk` varchar(20) NOT NULL,
  `gelombang` varchar(20) NOT NULL,
  `nama_lengkap` varchar(75) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_lengkap` varchar(75) NOT NULL,
  `nomor_wa` varchar(20) NOT NULL,
  `nama_ayah` varchar(75) NOT NULL,
  `nomor_wa_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(40) NOT NULL,
  `penghasilan_ayah` int(11) NOT NULL,
  `nama_ibu` varchar(75) NOT NULL,
  `nomor_wa_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(40) NOT NULL,
  `penghasilan_ibu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_calon_siswa`
--

INSERT INTO `data_calon_siswa` (`kode`, `pendaftaran`, `tahun_masuk`, `gelombang`, `nama_lengkap`, `nik`, `nisn`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat_lengkap`, `nomor_wa`, `nama_ayah`, `nomor_wa_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `nomor_wa_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`) VALUES
(4, 'Siswa Baru', '2023-2024', 'Gelombang 1', 'NI MADE BERLIANA DESWITA RINI', '2893010394839', '21082010149', 'Laki - laki', 'SINGARAJA, BALI', '2002-12-27', 'RUNGKUT PUSKESMAS NOMOR 5', '0829-3829-4839', 'I WAYAN SUDIARGA, S.H.', '023892093892', 'JAKSA', 10000000, 'NI PUTU VICHAN, S.I.P', '029277818390', 'SEKRETARIS PRIBADI GUBERNUR BALI', 15000000),
(5, 'Siswa Baru', '2023-2024', 'Gelombang 1', 'BYANCA REBECCA SITOMPUL ', '2738394950304', '21082010092', 'Perempuan', 'JAKARTA, INDONESIA', '2003-07-16', 'JAKARTA UTARA, MANGGA DUA, RT 3 RW 2', '027-3920-283', 'IRFAN HERMANSYAH, S.E', '09293940302', 'MANAJER ', 13000000, 'THERESSA KATHERINE, S.T', '029382039208', 'TEKNISI AIR', 12000000),
(7, 'Siswa Baru', '2024-2025', 'Gelombang 1', 'BAMBANG SATRIJA ', '49393828394949', '2039484739030', 'Laki - laki', 'PACITAN, JAWA TIMUR', '2003-08-10', 'MENANGGAL RW 4, RT 13', '08201028628', 'ZAIN DWI KUSUMA, S.I.K', '020392839089', 'POLRI ', 15000000, 'DIAH ATSAMISTA, S.E', '0203949303949', 'IBU RUMAH TANGGA', 0),
(8, 'Siswa Baru', '2024-2025', 'Gelombang 1', 'TIARA ANDINI', '03887477389', '083082898389', 'Perempuan', 'KEPULAUAN RIAU, SUMATERA', '2003-08-10', 'PURI SURYA JAYA TAMAN ATHENA H3 - 12', '081626819289', 'SUDHARMONO, S.H.', '0818283728939', 'HAKIM PENGADILAN NEGERI SURABAYA', 11000000, 'AJENG FITRIANI', '08281989289', 'IBU RUMAH TANGGA', 0),
(9, 'Siswa Baru', '2024-2025', 'Gelombang 1', 'SALWA AMALIA BALQIS', '0392838280', '02837728738', 'Perempuan', 'MOJOKERTO, JAWA TIMUR', '2003-08-10', 'GRIYA PERMATA GEDANGAN JALAN JERUK D2 NO 6', '08181892914', 'AGUNG PIETER, S.P', '081283992090', 'PETANI', 8000000, 'INDAH  DEBORA, S.Kom', '08289828989', '7000000', 0),
(10, 'Siswa Baru', '2024-2025', 'Gelombang 1', 'YOSAFAT ZEBAOTH', '0328182038082', '0283827638293', 'Laki - laki', 'MEDAN, SUMATERA UTARA', '2023-06-13', 'TAMAN PASADENA C3 / 09', '081827372808', 'SUBAGYO BAMBANG SUMADYO, S.Sos', '081829829898', 'PNS', 7000000, 'DHARA NINDRA CANTIKA, S.E', '08182737280', 'MARKETING', 9000000),
(11, 'Siswa Baru', '2024-2025', 'Gelombang 1', 'NATHANAEL KALADZE ERWANTO', '08281827802', '02817927992', 'Laki - laki', 'SIDOARJO, JAWA TIMUR', '2003-08-10', 'TAMAN BOSTON K3/23', '082817278787', 'NICHOLAS NATHANAEL SUHENDAR, S.Kom', '082817278728', 'STAFF IT', 9000000, 'PUTRI BUANA NINGTYAS, S.E', '083828389', 'KARYAWAN SWASTA', 6000000),
(12, 'Siswa Baru', '2025-2026', 'Gelombang 1', 'ALPHART JALES KUSUMAMATJA', '08281982989', '0287268672', 'Laki - laki', 'BANDUNG, JAWA BARAT', '2003-08-10', 'TAMAN SYDNEY B5 -19', '08287178728', 'HERCULES ALATAS, S.H', '08282891899', 'JAKSA ', 10000000, 'AINUN CANTIKA, S.Ds.', '0828289891', 'KARYAWAN SWASTA', 7000000),
(14, 'Siswa Baru', '2025-2026', 'Gelombang 1', 'ANDI ALATAS SOEDHARMONO', '0818289389', '0282839898', 'Laki - laki', 'BALI, KABUPATEN GIANYAR', '2002-08-10', 'PERUMAHAN GRAHA GUNUNG ANYAR F 12', '0828283829', 'MULADI SOEDHARMONO, S.H.', '08182737289', 'PENGACARA', 10000000, 'SADTYA CANTIKA', '0828839892', 'IBU RUMAH TANGGA', 0),
(15, 'Siswa Baru', '2025-2026', 'Gelombang 1', 'YOLANDA CANTIKA TATANGKENG', '08281727872', '02828737287', 'Perempuan', 'KEPULAUAN RIAU, SUMATERA', '2004-12-10', 'MEDOKAN SAWAH 12', '0828737727', 'Ir. HARMOKO LUHUT SIREGAR', '08281828389', 'TENAGA AHLI KEPRESIDENAN', 17000000, 'Dra. Retno Adiyatma', '08281982889', 'DIREKTUR', 20000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Siswa') NOT NULL DEFAULT 'Siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(8, 'hana', '123456', 'Siswa'),
(9, 'nan', '123456', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_calon_siswa`
--
ALTER TABLE `data_calon_siswa`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_calon_siswa`
--
ALTER TABLE `data_calon_siswa`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
