-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Bulan Mei 2025 pada 18.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id_role` int(11) NOT NULL COMMENT '1=admin,2=user',
  `admin_photo_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `id_role`, `admin_photo_url`) VALUES
(1, 'admin', 'admin@localhost.com', '$2y$10$EL1MgBqEKNPqEPfHjsM1/OcG8qFuv2DJutp4UWUQXoqZ3iF5NGtdK', '2025-04-27 21:50:00', '2025-05-10 12:29:38', 1, 'admin20250510122938avatar2.jpg'),
(4, 'user', 'user@localhost.com', '$2y$10$oGgZfghL0a/0g8W6yEOk7u328MMxDG9VilgNbUBjjsVNjVhkGiNxC', '2025-05-10 09:54:11', '2025-05-10 12:30:13', 1, 'admin20250510123012avatar4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `idadmins` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image_url`, `created_at`, `updated_at`, `idadmins`) VALUES
(1, 'Pineapple', 'AllFood is an all-around online restaurant website template for taking your food business to the next level. Whether you run a more general restaurant or focus on particular dishes, AllFood is a tool that caters to both. The clean and modern design beautifully displays your works of art for everyone to indulge in. On top of that, you can also brand and customize the default look of AllFood per your request.\r\n\r\nWith its many great and practical features, AllFood will significantly benefit you. In the kit, AllFood delivers slider, back to top button, sticky header, filterable portfolio, hover effects and more. With Google Maps, you can display the exact location of your restaurant, so no one gets lost. Moreover, a functional contact form and a blog section are also part of the bundle for you to put into practice.', 'news202505101228101.jpg', '2025-05-10 12:28:10', '2025-05-10 12:30:21', 4),
(2, 'Cherry', 'AllFood is an all-around online restaurant website template for taking your food business to the next level. Whether you run a more general restaurant or focus on particular dishes, AllFood is a tool that caters to both. The clean and modern design beautifully displays your works of art for everyone to indulge in. On top of that, you can also brand and customize the default look of AllFood per your request.\r\n\r\nWith its many great and practical features, AllFood will significantly benefit you. In the kit, AllFood delivers slider, back to top button, sticky header, filterable portfolio, hover effects and more. With Google Maps, you can display the exact location of your restaurant, so no one gets lost. Moreover, a functional contact form and a blog section are also part of the bundle for you to put into practice.', 'news202505101228282.jpg', '2025-05-10 12:28:28', '2025-05-10 12:47:25', 1),
(3, 'Cactus', 'AllFood is an all-around online restaurant website template for taking your food business to the next level. Whether you run a more general restaurant or focus on particular dishes, AllFood is a tool that caters to both. The clean and modern design beautifully displays your works of art for everyone to indulge in. On top of that, you can also brand and customize the default look of AllFood per your request.\r\n\r\nWith its many great and practical features, AllFood will significantly benefit you. In the kit, AllFood delivers slider, back to top button, sticky header, filterable portfolio, hover effects and more. With Google Maps, you can display the exact location of your restaurant, so no one gets lost. Moreover, a functional contact form and a blog section are also part of the bundle for you to put into practice.', 'news202505101228563.jpg', '2025-05-10 12:28:56', '2025-05-16 23:24:54', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `idadmins` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `image_url`, `created_at`, `updated_at`, `idadmins`) VALUES
(2, 'sliders20250510122635PG - TK-01.png', '2025-05-10 12:26:38', '2025-05-10 12:26:38', 1),
(3, 'sliders20250510122647SD - SMP.png', '2025-05-10 12:26:49', '2025-05-10 12:26:49', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` tinyint(4) NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `nama_role`) VALUES
(1, 'Administrator'),
(2, 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `parent_photo_url` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `idadmins` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `content`, `parent_name`, `parent_photo_url`, `created_at`, `updated_at`, `idadmins`) VALUES
(1, 'With any SEO website templates below, skyrocket your marketing agency to the extreme. Every item is optimized to the last detail, delivers remarkable performance, and ensures fast loading. Of course, all templates are also coded with search engine optimization in mind to get you all the organic traffic you deserve.\r\n\r\nRegardless of the goals, you plan to reach this year, attain them comfortably with our website templates for SEO agencies. Mobile-ready, cross-browser compatible, and professional design are the three main characteristics of every template. Unlock yourself a whole new horizon of possibilities and have a solid start on the internet. Spark everyone’s attention with your skills and unique services and grow your business to the next level.', 'Anna', 'testimoni20250510123235avatar2.png', '2025-05-10 12:32:35', '2025-05-10 12:32:35', 1),
(2, 'With any SEO website templates below, skyrocket your marketing agency to the extreme. Every item is optimized to the last detail, delivers remarkable performance, and ensures fast loading. Of course, all templates are also coded with search engine optimization in mind to get you all the organic traffic you deserve. Regardless of the goals, you plan to reach this year, attain them comfortably with our website templates for SEO agencies. Mobile-ready, cross-browser compatible, and professional design are the three main characteristics of every template. Unlock yourself a whole new horizon of possibilities and have a solid start on the internet. Spark everyone’s attention with your skills and unique services and grow your business to the next level.', 'Nanny', 'testimoni20250510123253avatar3.png', '2025-05-10 12:32:53', '2025-05-10 12:32:53', 1),
(3, 'With any SEO website templates below, skyrocket your marketing agency to the extreme. Every item is optimized to the last detail, delivers remarkable performance, and ensures fast loading. Of course, all templates are also coded with search engine optimization in mind to get you all the organic traffic you deserve. Regardless of the goals, you plan to reach this year, attain them comfortably with our website templates for SEO agencies. Mobile-ready, cross-browser compatible, and professional design are the three main characteristics of every template. Unlock yourself a whole new horizon of possibilities and have a solid start on the internet. Spark everyone’s attention with your skills and unique services and grow your business to the next level.', 'Adam', 'testimoni20250510123306avatar5.png', '2025-05-10 12:33:06', '2025-05-16 23:25:01', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
