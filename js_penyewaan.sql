-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2023 pada 13.49
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `js_penyewaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `deskripsi`, `gambar`) VALUES
(1, '<h2 style=\"font-style:italic\">Selamat datang di PT BAKUNG PERMAI</h2>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;Kami adalah mitra terpercaya Anda dalam dunia konstruksi, menyediakan layanan penyewaan alat berat yang handal untuk membantu Anda mewujudkan proyek-proyek besar Anda dengan sukses. Dengan pengalaman dalam industri, kami memiliki pemahaman mendalam tentang kebutuhan Anda dan berkomitmen untuk memberikan solusi terbaik dalam setiap langkah perjalanan proyek Anda. Kami sangat menghargai kepercayaan Anda pada kami sebagai mitra penyedia alat berat Anda.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;Jika Anda memiliki pertanyaan, permintaan khusus, atau hanya ingin berbicara dengan kami, jangan ragu untuk menghubungi tim kami di [nomor telepon] atau melalui [alamat email]. Kami siap membantu Anda dengan segala yang Anda butuhkan.</p>\r\n', 'about.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contak`
--

CREATE TABLE `contak` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` text NOT NULL,
  `email` text NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contak`
--

INSERT INTO `contak` (`id`, `alamat`, `tlp`, `email`, `maps`) VALUES
(1, 'Jl. A. Y. Patty, Kel Honipopu, Kec. Sirimau, Kota Ambon, Maluku', '081283284568', 'pt_bakungpermai@gmai.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15926.131489204905!2d128.1812074!3d-3.6931271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce85058510ac7%3A0x82e5d75c684bc1d7!2sMonumen%20Gong%20Perdamaian%20Dunia!5e0!3m2!1sid!2sid!4v1694141552497!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `deskripsi`, `gambar`) VALUES
(1, 'Dozer', '<p>Bulldozer, atau biasa disebut dozer, adalah jenis mesin konstruksi berat yang digunakan untuk berbagai tugas dalam industri konstruksi, pertambangan, dan pertanian. Dozer dirancang untuk mendorong, mengangkat, dan menggali material seperti tanah, pasir, kerikil, batu, dan bahkan salju.</p>', 'dozer.png'),
(2, 'Vibro Roller', '<p>Mesin Vibro Roller merupakan alat yang sangat penting dalam industri konstruksi dan perawatan jalan. Getaran yang dihasilkan oleh mesin ini membantu mencapai kepadatan yang diinginkan pada permukaan tanah atau aspal, yang merupakan langkah penting dalam menjaga keamanan dan kualitas infrastruktur.</p>', 'vibro_roller.png'),
(3, 'Bucket Excavator', 'Bucket excavator, atau sering disebut juga sebagai bucket-wheel excavator, adalah jenis mesin berat yang digunakan dalam industri pertambangan, terutama untuk menggali dan memindahkan material dalam skala besar.', 'bucket_excavator.png'),
(4, 'Forklift', '<p>Forklift adalah&nbsp;alat bantu untuk mengangkat benda-benda berat dari satu tempat ke tempat yang lainnya, namun forklift biasanya hanya digunakan untuk jarak pendek seperti di dalam ruangan atau di dalam area pabrik saja.</p>', 'PELATIHAN-Operator-Forklift-11.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `judul`, `deskripsi`) VALUES
(1, 'Powered by tech', 'Hanya PT BAKUNG PERMAI yang mempertemukan semua aktor di industri rental alat dengan kontraktor melalui satu platform teknologi.'),
(2, 'Making real deals happen', '<p>Trek memfasilitasi transaksi sungguhan dan sudah banyak yang merasakan manfaatnya</p>'),
(3, 'Solid physical infrastructures', 'Untuk mengantarkan proses rental terbaik kepada Anda, kami membangun jaringan infrastruktur fisik yang solid mulai dari sistem logistik hingga administrasi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `status`) VALUES
(1, 'admin', '$2y$10$N1wGTL0Wrldpt/whCDtJ6esCZaQFkmL0m59od07rM.ns3DIBf07X2', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `produk` text NOT NULL,
  `tipe` text NOT NULL,
  `s_jam` text NOT NULL,
  `min_sewa` text NOT NULL,
  `har_opr` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `produk`, `tipe`, `s_jam`, `min_sewa`, `har_opr`, `gambar`) VALUES
(1, 1, '20-ton Dozer Komatsu D65', 'Komatsu D65', 'Rp 220.000', '100 jam', 'Rp 250.000', '16010cb7a82062e22d69ac6731903048.png'),
(2, 1, '6-ton Dozer Komatsu D31P', 'Komatsu D31P', 'Rp 210.000', '100 jam', 'Rp 250.000', 'D39PX-22.png'),
(3, 2, '10-t Vibro Roller Volvo SD100D C', 'Volvo SD100D C', 'Rp. 220.000', '50 jam', 'Rp 250.000', 'sv900d-1_e-thumb-558x380-822-removebg-preview.png'),
(4, 3, '5-ton Mini Excavator - Komatsu', 'Komatsu PC50', 'Rp. 170.000', '50 jam', 'Rp 250.000', 'PC50MR_2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `perusahaan` text NOT NULL,
  `email` text NOT NULL,
  `tlp` text NOT NULL,
  `tgl_sewa` text NOT NULL,
  `lama_sewa` text NOT NULL,
  `spl_alat` text NOT NULL,
  `lok_proyek` text NOT NULL,
  `proses` text NOT NULL,
  `tgl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`id`, `nama`, `perusahaan`, `email`, `tlp`, `tgl_sewa`, `lama_sewa`, `spl_alat`, `lok_proyek`, `proses`, `tgl`) VALUES
(1, 'Bernard Mills', 'Eu Enim Company', 'risus.quisque@protonmail.edu', '(013158) 98796', '2023-4-17', '3 Minggu', 'Ini data testingan untuk pengisian data baru', 'P.O. Box 879, 2796 At Av.', 'Proses', '2023-09-06'),
(2, 'Brynn Schmidt', 'Quisque Tincidunt Pede Industries', 'non@yahoo.com', '0800 288 1885', '2023-24-27', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '5870 Vitae Rd.', 'Belum diproses', '2023-06-06'),
(3, 'Quamar Dean', 'Est Institute', 'sit@outlook.net', '(016977) 7728', '2024-12-4', '2 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #442-6024 Orci. Road', 'Belum diproses', '2023-06-28'),
(4, 'Jason Key', 'Metus In Consulting', 'commodo.auctor@protonmail.ca', '0845 46 44', '2024-18-25', '3 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #384-873 Tincidunt St.', 'Belum diproses', '2023-09-09'),
(5, 'Emmanuel Webb', 'Maecenas Incorporated', 'sed@yahoo.org', '(01725) 03248', '2023-28-9', '1 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #731-7375 Mauris Road', 'Belum diproses', '2023-08-22'),
(6, 'Quail Andrews', 'Dui Lectus Rutrum Foundation', 'turpis@outlook.couk', '0800 697 4886', '2024-27-22', '2 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #426-1683 Sed Ave', 'Proses', '2023-07-12'),
(7, 'Brooke Rios', 'Sed Eu Institute', 'purus.accumsan.interdum@protonmail.net', '0845 46 48', '2023-27-30', '2 Minggu', 'Ini data testingan untuk pengisian data baru', '9988 Tempus, St.', 'Proses', '2023-09-20'),
(8, 'Galena Jenkins', 'Lorem Company', 'ornare.elit.elit@icloud.org', '055 1242 8863', '2023-7-19', '3 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #730-6626 Quis, Avenue', 'Belum diproses', '2023-09-02'),
(9, 'Carson Lester', 'Ligula Aenean Gravida Inc.', 'non.dapibus@yahoo.org', '07624 196864', '2023-39-8', '2 Minggu', 'Ini data testingan untuk pengisian data baru', '997 Enim St.', 'Proses', '2023-07-17'),
(10, 'Tucker Wolfe', 'Euismod Enim Institute', 'velit.aliquam.nisl@outlook.ca', '07475 212194', '2023-29-12', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '406-9248 Leo St.', 'Proses', '2023-08-06'),
(11, 'Abigail Shaw', 'Commodo Hendrerit Associates', 'sit@aol.couk', '(026) 3458 8387', '2023-15-18', '1 Minggu', 'Ini data testingan untuk pengisian data baru', '543-516 Tincidunt St.', 'Proses', '2023-06-22'),
(12, 'Pascale Buckley', 'Dapibus Limited', 'elementum.sem@outlook.org', '0800 508687', '2024-31-23', '2 Minggu', 'Ini data testingan untuk pengisian data baru', '6464 Lorem, Ave', 'Belum diproses', '2023-09-08'),
(13, 'Deborah Logan', 'Nec Ante Maecenas Foundation', 'in.faucibus.morbi@yahoo.ca', '0923 743 9539', '2024-32-1', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '105 Eget Road', 'Belum diproses', '2023-06-07'),
(14, 'Avram Whitley', 'Faucibus Industries', 'augue.scelerisque.mollis@google.org', '0800 082903', '2023-8-19', '3 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #469-1794 Egestas. Road', 'Proses', '2023-09-23'),
(15, 'Veda Jacobs', 'Magna Nam Associates', 'est.mauris@google.edu', '(0110) 758 4458', '2023-27-25', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '456-3552 Duis Rd.', 'Proses', '2023-06-13'),
(16, 'Winifred Green', 'Id Magna Industries', 'congue@icloud.edu', '07354 153810', '2024-38-3', '3 Minggu', 'Ini data testingan untuk pengisian data baru', 'P.O. Box 415, 4660 Quis Road', 'Proses', '2023-07-19'),
(17, 'Francis Clemons', 'Ut Nisi Corporation', 'enim.gravida@hotmail.ca', '0800 687757', '2023-40-14', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '4795 Aliquet Avenue', 'Belum diproses', '2023-09-07'),
(18, 'Maisie Harding', 'Non Sapien LLP', 'eleifend.non.dapibus@outlook.ca', '07995 684238', '2023-19-15', '2 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #119-3597 Ipsum Rd.', 'Proses', '2023-09-28'),
(19, 'Malcolm Coffey', 'Proin Vel Institute', 'a.aliquet@hotmail.couk', '(0110) 072 6570', '2023-49-14', '1 Minggu', 'Ini data testingan untuk pengisian data baru', '351-6907 Velit Street', 'Belum diproses', '2023-06-19'),
(20, 'Cedric Glover', 'Maecenas Iaculis Corp.', 'eu.lacus.quisque@hotmail.ca', '056 5138 9965', '2023-48-11', '2 Minggu', 'Ini data testingan untuk pengisian data baru', '880-4646 Enim. Rd.', 'Belum diproses', '2023-06-27'),
(21, 'Mercedes Hess', 'Fames Ac Associates', 'accumsan.interdum.libero@protonmail.org', '(01882) 24466', '2024-7-21', '1 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #634-4932 Eros. Rd.', 'Proses', '2023-07-17'),
(22, 'Haviva Chang', 'Tellus Eu Augue Foundation', 'velit.dui.semper@protonmail.edu', '0916 548 4687', '2023-10-11', '2 Minggu', 'Ini data testingan untuk pengisian data baru', '657-4133 Urna. Street', 'Belum diproses', '2023-09-27'),
(23, 'Cameran Parrish', 'Aliquet Lobortis Limited', 'lacinia.at.iaculis@aol.com', '0500 685487', '2023-28-6', '2 Minggu', 'Ini data testingan untuk pengisian data baru', 'P.O. Box 881, 4100 Et Rd.', 'Proses', '2023-08-10'),
(24, 'Kenneth Snyder', 'Sed Id Risus Corp.', 'sed.congue.elit@icloud.net', '0845 46 49', '2023-30-14', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '483 Cras St.', 'Proses', '2023-09-01'),
(25, 'Megan Robinson', 'Iaculis Quis Institute', 'nunc.quisque.ornare@aol.edu', '(012822) 15651', '2023-5-23', '1 Minggu', 'Ini data testingan untuk pengisian data baru', '3093 Ipsum Rd.', 'Proses', '2023-06-10'),
(26, 'Norman Delgado', 'Luctus Ipsum Leo Incorporated', 'orci.quis@protonmail.edu', '076 8432 5868', '2022-49-19', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '8326 Fusce Street', 'Proses', '2023-08-04'),
(27, 'Nissim Barry', 'Consequat Foundation', 'aenean.eget@aol.org', '07775 485712', '2023-33-30', '3 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #878-623 Nibh Rd.', 'Belum diproses', '2023-08-04'),
(28, 'Jena Rose', 'Consequat Lectus Institute', 'nibh.sit@yahoo.couk', '0800 1111', '2023-46-2', '1 Minggu', 'Ini data testingan untuk pengisian data baru', '413-3010 Non, Road', 'Proses', '2023-08-06'),
(29, 'Dahlia Love', 'Tincidunt Neque Vitae Ltd', 'mus@outlook.net', '(016143) 22691', '2023-26-15', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '509-2322 Sodales St.', 'Proses', '2023-06-13'),
(30, 'Rooney Dejesus', 'Mauris Elit Limited', 'odio.semper@protonmail.couk', '0800 246283', '2024-39-5', '1 Minggu', 'Ini data testingan untuk pengisian data baru', 'P.O. Box 599, 5107 Magna Avenue', 'Belum diproses', '2023-09-25'),
(31, 'Indira Justice', 'Elit Aliquam Incorporated', 'malesuada@google.com', '0500 074293', '2023-47-2', '2 Minggu', 'Ini data testingan untuk pengisian data baru', '6614 Ipsum. St.', 'Belum diproses', '2023-08-14'),
(32, 'Jonas Vance', 'Ornare Facilisis Foundation', 'ultrices.sit.amet@protonmail.ca', '07624 973152', '2024-39-16', '1 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #503-4655 Placerat, Rd.', 'Belum diproses', '2023-09-23'),
(33, 'Brady Lynch', 'Donec Tempus Industries', 'vel.mauris.integer@outlook.org', '0976 698 6517', '2022-49-21', '1 Minggu', 'Ini data testingan untuk pengisian data baru', 'P.O. Box 675, 9678 Sagittis Street', 'Belum diproses', '2023-09-21'),
(34, 'Wilma Conley', 'In Tempus Corp.', 'eu@google.net', '(01111) 22401', '2023-18-29', '1 Minggu', 'Ini data testingan untuk pengisian data baru', '808-7445 In St.', 'Belum diproses', '2023-07-25'),
(35, 'Declan Pace', 'Tincidunt Tempus Ltd', 'quis.lectus@hotmail.couk', '(0111) 267 8334', '2023-42-10', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '2498 Eu Av.', 'Belum diproses', '2023-07-09'),
(36, 'Palmer Lambert', 'Aliquam Adipiscing Lacus Corp.', 'curabitur.consequat.lectus@aol.couk', '(0171) 312 2433', '2023-59-13', '2 Minggu', 'Ini data testingan untuk pengisian data baru', 'P.O. Box 224, 2043 Mi, Rd.', 'Belum diproses', '2023-09-26'),
(37, 'Lyle Snider', 'Suspendisse Aliquet Corporation', 'velit.egestas@yahoo.org', '(018631) 89745', '2023-20-3', '3 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #247-4836 Sapien. Rd.', 'Belum diproses', '2023-09-13'),
(38, 'Fallon Mcdaniel', 'Diam PC', 'in.faucibus@hotmail.com', '0975 629 1745', '2023-58-24', '1 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #936-9602 Convallis Ave', 'Belum diproses', '2023-07-25'),
(39, 'Tatyana Nolan', 'Morbi Foundation', 'varius.nam@hotmail.edu', '(016977) 8755', '2022-44-6', '1 Minggu', 'Ini data testingan untuk pengisian data baru', '1420 Consequat St.', 'Belum diproses', '2023-07-12'),
(40, 'Aladdin Richards', 'Nisi Sem PC', 'adipiscing.non@hotmail.edu', '0800 447 7850', '2024-4-22', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '530-5517 Tincidunt. Ave', 'Proses', '2023-08-31'),
(41, 'Rhea Garza', 'Elit Etiam Consulting', 'luctus.sit.amet@google.org', '0500 223058', '2023-18-15', '2 Minggu', 'Ini data testingan untuk pengisian data baru', '740-8996 Ipsum. St.', 'Belum diproses', '2023-06-14'),
(42, 'Lester Acevedo', 'Nec Enim Corporation', 'quis.diam@protonmail.com', '0500 551882', '2022-6-10', '3 Minggu', 'Ini data testingan untuk pengisian data baru', 'P.O. Box 942, 6980 Leo. St.', 'Proses', '2023-09-01'),
(43, 'Alexa Reilly', 'Porttitor Eros PC', 'felis.nulla.tempor@aol.edu', '(016977) 8234', '2022-55-1', '1 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #718-7363 Ligula Rd.', 'Belum diproses', '2023-07-11'),
(44, 'Tucker Camacho', 'Amet Ornare Foundation', 'ornare.elit@hotmail.net', '(0121) 522 1743', '2023-26-16', '1 Minggu', 'Ini data testingan untuk pengisian data baru', '511-7518 Sagittis Rd.', 'Belum diproses', '2023-09-21'),
(45, 'Sade Ballard', 'Et Rutrum Company', 'et.magnis@icloud.org', '07624 870632', '2023-44-26', '3 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #273-4828 Nunc St.', 'Proses', '2023-06-12'),
(46, 'Hope Bright', 'Justo Corp.', 'fermentum@hotmail.com', '0845 46 46', '2024-51-13', '1 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #524-4274 Mauris Ave', 'Proses', '2023-06-03'),
(47, 'Porter Pittman', 'Pretium Neque PC', 'magnis.dis@icloud.edu', '055 7760 7626', '2024-41-29', '2 Minggu', 'Ini data testingan untuk pengisian data baru', '767-6497 Ipsum. Rd.', 'Belum diproses', '2023-06-20'),
(48, 'Jordan Mcdowell', 'Ultrices Vivamus Corporation', 'nascetur.ridiculus.mus@aol.com', '0908 441 6521', '2023-21-18', '3 Minggu', 'Ini data testingan untuk pengisian data baru', '4207 Risus, St.', 'Belum diproses', '2023-06-23'),
(49, 'Rahim Strong', 'Blandit Viverra LLP', 'a.facilisis@google.com', '0319 873 8922', '2024-49-13', '3 Minggu', 'Ini data testingan untuk pengisian data baru', 'Ap #786-7167 Egestas Av.', 'Belum diproses', '2023-08-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `status` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id`, `status`, `gambar`) VALUES
(1, 'aktif', 'luke-besley-k5l-zbRSPds-unsplash.jpg'),
(2, 'aktif', 'gambar2.jpg'),
(3, 'aktif', 'gambar3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Pekerjaan Tanah', '<p>Kelengkapan alat berat kami menawarkan kecakapan UntUk menyelesaikan pekerjaan tanah, mulai dari penggalian atau penimbunan skala proyek rumahan sampai kontrak komersial bernilai besar.</p>', 'gambar1.jpg'),
(2, 'Akses ke Ketinggian', 'Manlift mampu mengantarkan pekerja-pekerja Anda ke ketinggian atau posisi yang sulit terjangkau dengan alat lainnya. Sering\r\ndigunakan untUk pekerjaan konstruksi, pembersihan gedung, atau instalasi.', 'gambar2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `website`
--

INSERT INTO `website` (`id`, `nama`, `logo`) VALUES
(1, 'PT Bakung Permai', 'logo-alat-berat-32-removebg-preview.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contak`
--
ALTER TABLE `contak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contak`
--
ALTER TABLE `contak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
