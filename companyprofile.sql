-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2022 pada 13.02
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companyprofile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `hb` varchar(255) NOT NULL,
  `motto` varchar(500) NOT NULL,
  `detail_bio` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `hb`, `motto`, `detail_bio`) VALUES
(1, 'Company Bio', 'Senyum adalah sebuah cara simple untuk menikmati hidup', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt dolorem explicabo, magnam a delectus rem quas quod corrupti laboriosam velit consequatur itaque amet nesciunt deleniti temporibus! Facilis, atque delectus labore tempore facere quos soluta deleniti aliquam accusamus enim dolore itaque? Illo suscipit quam illum veniam aspernatur laborum aut. Laudantium culpa illum, obcaecati quas provident quia quam magni accusamus, delectus aspernatur doloremque enim minus similique voluptas ipsa, asperiores nemo commodi nesciunt. Tenetur consequatur recusandae enim quo aut expedita numquam, libero fugit dolore culpa natus animi officiis hic voluptatibus beatae corporis! Maiores numquam assumenda dignissimos dolor cumque, ipsam sit doloribus possimus tenetur magni amet architecto nulla quas obcaecati esse magnam officiis quisquam sequi? Exercitationem maxime earum voluptate voluptatem cum maiores eligendi autem provident vero, deserunt eius molestias consequuntur in, nisi beatae exceptu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `nama`, `icon`, `url`) VALUES
(1, 'gallery', 'fas fa-fw fa-photo-video', 'gallery'),
(4, 'About', 'fas fa-fw fa-user-cog', 'about'),
(5, 'banner image', 'fas fa-fw fa-photo-video', 'banner_image'),
(6, 'film baru', 'fas fa-fw fa-camera-retro', 'film_baru'),
(10, 'karyawan', 'fas fa-fw fa-cash-register', 'karyawan'),
(11, 'Blog', 'fas fa-fw fa-newspaper', 'blog');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_img`
--

CREATE TABLE `banner_img` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `image` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner_img`
--

INSERT INTO `banner_img` (`id`, `text`, `image`) VALUES
(2, 'Ini Adalah Banner Image', 'pantai-kuta-bali-sunset.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi_blog` varchar(5000) NOT NULL,
  `created_by` varchar(123) NOT NULL,
  `created_at` int(11) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `slug`, `isi_blog`, `created_by`, `created_at`, `image`) VALUES
(1, 'company profile', 'company_profile', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat suscipit voluptas autem ipsum excepturi deserunt nemo officia quos doloribus quod natus ex eaque, mollitia voluptatem doloremque tempore, tempora ut provident iure deleniti. Quidem nam totam asperiores deleniti corporis odio soluta, possimus aut nemo eligendi autem voluptas. Quas exercitationem voluptatem quisquam optio, fuga dolores eius quod dolorum molestiae voluptates, rem totam quasi. Enim fuga et iusto aut itaque! Quo non doloremque nulla rem blanditiis in ea cum impedit mollitia reprehenderit! Dolorum, porro sequi dicta deserunt repellat odio aspernatur fuga velit autem illum iusto saepe! Ab porro mollitia magni qui asperiores neque ipsam reprehenderit nam nesciunt unde? Nulla, ea saepe? Nobis culpa nemo quidem assumenda molestiae aut! Laboriosam assumenda dolorem natus animi reiciendis fugiat illum placeat molestias reprehenderit autem cumque, nemo repellat est soluta odit possimus. Culpa tenetur quibusdam cumque! Et voluptatem reiciendis repudiandae voluptate quis voluptates, quam omnis maiores non maxime minima ut enim vel autem, similique, rerum corporis asperiores harum repellendus. Sit necessitatibus quasi architecto officiis, in alias asperiores blanditiis quisquam iusto nulla eum natus dicta. Laborum officiis corporis ratione, quam vero earum! Ducimus sapiente commodi velit? Consequuntur illum voluptates quam magnam doloribus autem soluta explicabo odio nobis quis tempora reprehenderit optio a quae dolor facere natus, vero sed ullam quas libero. Voluptate assumenda pariatur nobis iusto dolorem reprehenderit consequuntur fuga? Impedit, debitis eos! Rem earum, necessitatibus alias autem aliquam accusantium, ipsam cupiditate quam officiis in deleniti itaque, aut at explicabo ipsum ratione consequuntur voluptate? In assumenda repellendus ea qui. Voluptatum ducimus, distinctio illo ea sapiente fugiat debitis facilis voluptas veritatis provident culpa, blanditiis repellat porro quisquam quia, omnis soluta pariatur doloribus repellendus quam expedita dignissimos quae! Dolor possimus doloremque vel odio totam laborum nam aspernatur praesentium, eveniet consequuntur ab dolore delectus voluptatem at ipsum animi libero iusto. Impedit quasi nam enim dignissimos nobis. Recusandae numquam nesciunt debitis quae, officiis dicta fuga sit, incidunt neque optio quis culpa voluptatibus laudantium, reprehenderit maiores quaerat dolorum similique ullam consequuntur adipisci ipsa! Recusandae quod eos esse quibusdam excepturi tempora minus consequatur dolorem voluptates! Nisi nihil ipsa voluptatum repellendus dolor odio, vitae quasi deleniti ratione tenetur? Quod harum iure quasi debitis eligendi asperiores id dignissimos nemo voluptate officia tenetur dolor commodi accusamus neque atque minus, porro enim eaque a esse fugit reprehenderit. Hic aspernatur asperiores similique quibusdam ut accusamus quis vitae, deserunt, voluptatem vel voluptas maxime quaerat inventore iure quos itaque doloremque, nihil distinctio dolor! Quae possimus asperiores esse eum quibusdam natus tenetur voluptatem eaque exercitationem eligendi, rerum, ullam pariatur, repudiandae dignissimos molestiae laboriosam ipsam illum vero impedit. Atque sint at odio soluta vero eos maxime, hic cumque doloremque libero reprehenderit. Doloremque distinctio, voluptate molestias quaerat accusamus blanditiis eos reprehenderit excepturi sequi perspiciatis, animi voluptatem unde, ducimus facilis odio delectus dolor possimus nobis dicta odit! Eum harum soluta dignissimos sed saepe velit perspiciatis architecto asperiores illum, dolores, qui totam, similique atque aperiam dolore. Soluta, illo ut! Cupiditate, quod illo obcaecati officiis assumenda impedit quibusdam maiores tenetur aperiam fugiat labore voluptates dolorem illum id pariatur.', 'admin', 1640610405, 'buyutan41.jpg'),
(2, 'tes aja', 'tes_aja', '<h1><em>testtest</em></h1>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" xss=removed>\r\n <tbody>\r\n  <tr>\r\n   <td>tabel</td>\r\n   <td>nomor</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td> </td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n\r\n<p> </p>', 'admin', 1640611657, '123.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `film_baru`
--

CREATE TABLE `film_baru` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film_baru`
--

INSERT INTO `film_baru` (`id`, `judul`, `youtube`, `image`) VALUES
(1, 'marvel', 'https://www.youtube.com/watch?v=mgTS8ztqJHk', 'IMG_20200605_215332_023.jpg'),
(2, 'moon', 'https://www.youtube.com/watch?v=6AviDjR9mmo', 'IMG_20200704_212559_518.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nm_kry` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `jbt` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nm_kry`, `fb`, `ig`, `tw`, `jbt`, `image`) VALUES
(1, 'Taehyung', 'https://www.facebook.com/taehyung', 'https://www.instagram.com/thv/', 'https://www.instagram.com/thv/', 'webdeveloper', 'v.jpg'),
(2, 'seokjin', 'https://www.facebook.com/seokjin', 'https://www.instagram.com/thv/', 'https://www.instagram.com/thv/', 'network engineer', 'jin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `as_id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `as_id`, `gambar`, `date_created`) VALUES
(1, 'Desfi Nur Hanafi', 'desfihanafi@gmail.com', '$2y$10$GPe/JPD0QbeBaW5Q4WuzyuJwFkqSzZZi06NEt/dCAPtT9d9kgJhk.', 1, 'user.png', 1639742346),
(2, 'alam', 'alamcoba@gmail.com', '$2y$10$7ElKiYui94eU4MFxJtp/AukZ9zfvD5bxcWsHFbpYg3JndZYx3JGvq', 2, 'user.png', 1639742816),
(3, 'Desfinh', 'desficoba@gmail.com', '$2y$10$7q5WygQpNg13I7f3bUZrV.BFjiJ0m5lqsX8BEBLiIIVSuzdX522oC', 2, 'user.png', 1639814733),
(4, 'hanafi', 'hanafi@gmail.com', '$2y$10$QCmmC0E7xdyz1yEASgEp.O9loE0U29xZhyKDxWtGEmv0saYvtvMSy', 2, 'user.png', 1640676646),
(5, 'joko', 'joko@gmail.com', '$2y$10$ZzZ.diLvkbN8d/4oa3ZYoeY85QWf2NxXjrrJoLEDZh7nmm2GszWMu', 2, 'user.png', 1640676708),
(6, 'akbar', 'akbar@gmail.com', '$2y$10$jm2GIh3OlK0cF/zOEPztue3GnWRwNgMOGj3UKglNzwLpPizM4yfee', 2, 'user.png', 1640888195),
(7, 'contoh', 'contoh@gmail.com', '$2y$10$M2Pa35h3VxLB0MKGWU7a2eaPC0WvzFjEbC90KsgnQyJ/iqxReXrTK', 2, 'user.png', 1641037620);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner_img`
--
ALTER TABLE `banner_img`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `film_baru`
--
ALTER TABLE `film_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `banner_img`
--
ALTER TABLE `banner_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `film_baru`
--
ALTER TABLE `film_baru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
