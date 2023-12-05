-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2023 pada 07.35
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(32) NOT NULL,
  `foto_kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `foto_kategori`) VALUES
(1, 'Alam', 'categories-alam.jpg'),
(2, 'Budaya', 'categories-budaya.jpg'),
(4, 'Bawah Laut', 'categories-bawah-laut.jpg'),
(5, 'Kebun Binatang', 'categories-kebun-binatang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_wisata`, `komentar`, `tgl_komentar`) VALUES
(1, 5, 1, 'Jalan yang berliku. Tak tampak pinggir lautnya. Eh ternyata masih di balik bukit pantainya. Setelah naik trun tangga kita baru disuguhi pantai yang ciamik. rekomen datang kesini buat healing....', '2023-11-23'),
(2, 6, 1, 'Pantai yang cukup indah. Sangat bersih pantainya, pasirnya juga halus. Mungkin akses untuk masuk ke pantai bisa diperbaiki lagi biar jalannya mulus', '2023-11-24'),
(3, 6, 2, 'Tidak disangka-sangka kalau harus sampai di bumi Kraton, biarpun status sebagai misi kerja, namun 80% tanah Jawa Timur sudah saya injak. Semua itu karena tuntutan kerja di dunia telekomunikasi.\r\nNamun apa boleh buat itu semua tinggal kenangan.', '2023-11-12'),
(4, 2, 2, 'Pantai Parangtritis Yogyakarta, pengalaman yang sangat menarik bisa berkunjung ke pantai ini, pemandangan yang indah dan ombak , serta banyak spot foto yang menarik sangat disarankan untuk di kunjungi', '2023-11-23'),
(5, 12, 14, 'Diamond beach banyak wisatawan yang mau mengunjungi tempat ini,, untuk makan di nusa penida saya recomend di holy penida restoran makanan enak harga murah, lokasi dekat dengan pelabuhan dan banyak penginapan', '2023-12-02'),
(6, 12, 17, 'Candi Borobudur adalah sebuah keajaiban arsitektur dan spiritualitas di Indonesia. Dikenal sebagai salah satu situs Warisan Dunia UNESCO, candi ini memikat dengan keindahan dan keagungan struktur batu-batu yang dipahat dengan detail yang luar biasa. Terletak di antara hijaunya lereng Gunung Merapi, Candi Borobudur menawarkan pengalaman yang mendalam bagi para pengunjung yang tertarik dengan sejarah, seni, dan agama.', '2023-11-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita','','') NOT NULL,
  `email_user` varchar(32) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `role` enum('ADMIN','USER','','') NOT NULL DEFAULT 'USER',
  `foto_user` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `jenis_kelamin`, `email_user`, `no_telp`, `alamat`, `role`, `foto_user`) VALUES
(1, 'admin', 'admin', 'admin', 'Pria', 'admin@gmail.com', '081510211241', 'Jakarta', 'ADMIN', 'person_2.jpg'),
(2, 'Solihudin', 'solih', 'solih123', 'Pria', 'zsolihudin@gmail.com', '081213161669', 'Bekasi', 'USER', 'person_3.jpg'),
(5, 'Yuli Yulianti', 'yuli', 'yuli123', 'Wanita', 'yulianti@gmail.com', '081256782345', 'Bandung', 'USER', 'person_4.jpg'),
(6, 'Heru Yankee', 'heru', 'herukan123', 'Pria', 'Heru254@gmail.com', '081267451234', 'Cikarang', 'USER', 'person_1.jpg'),
(12, 'Yadi Surya', 'yadisur', 'yadi123', 'Pria', 'yadi241@gmail.com', '081256785623', 'Cilacap', 'USER', 'default.jpg'),
(13, 'person 2', 'okee', 'okeoke', 'Pria', 'person@gmail.com', '0687', 'Jakarta', 'USER', 'person_1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_tempat` varchar(32) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `lokasi` varchar(32) NOT NULL,
  `fasilitas` text NOT NULL,
  `htm` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto_1` varchar(32) NOT NULL,
  `foto_2` varchar(32) NOT NULL,
  `foto_3` varchar(32) NOT NULL,
  `foto_4` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_tempat`, `id_kategori`, `lokasi`, `fasilitas`, `htm`, `deskripsi`, `foto_1`, `foto_2`, `foto_3`, `foto_4`) VALUES
(1, 'Pantai Teluk Asmara', 1, 'Sumbermanjing Wetan - Malang', 'Toilet\r\nKamar mandi\r\nTempat parkir\r\nGazebo\r\nPenginapan\r\nSPBU\r\nWarung makan\r\nTikar\r\nHammock\r\nTenda', 10000, 'Pantai Teluk Asmara merupakan pantai cantik di Malang yang dikelilingi oleh pulau-pulau kecil yang sangat indah.\r\n\r\nItulah mengapa Pantai Teluk Asmara disebut sebagai Raja Ampat-nya Malang karena memang memiliki pemandangan yang mirip dengan Raja Ampat di Papua.\r\n\r\nLiburan ke Malang dengan mengunjungi Pantai Teluk Asmara merupakan pilihan yang tepat untuk sekedar kabur dari rutinitas sehari-hari seperti bekerja, dan lain-lain. Wisata alam seperti pantai memang pilihan yang paling tepat untuk dijadikan destinasi wisata.', 'Pantai-Teluk-Asmara-1.jpg', 'Pantai-Teluk-Asmara-2.jpg', 'Pantai-Teluk-Asmara-3.jpg', 'Pantai-Teluk-Asmara-4.jpg'),
(2, 'Pantai Parangtritis', 1, 'Bantul - Yogyakarta', 'Motor ATV, Kuda, dan Delman untuk berkeliling Pantai Parangtritis\r\nGazebo Pantai\r\nWarung Makan\r\nToko Souvenir dan Baju\r\nPenginapan\r\nToilet umum\r\nMushola\r\nPenginapan / Hotel', 15000, 'Pantai Parangtritis memang terkenal diantara para wisatawan, karena selain memiliki legenda yang melekat dengan Ratu Kidul sebagai penguasa laut selatan, namun ternyata keindahannya tidak bisa bisa diragukan lagi karena pantai ini merupakan pantai paling luas di Yogyakarta dimana memiliki luas berkilo-kilo meter persegi, berbeda dengan pantai-pantai di kawasan Yogyakarta lainya seperti Pantai di Gunung Kidul yang ukurannya relatif kecil.\r\n\r\nPantai Parangtritis terbilang sebagai pantai yang spesial di Indonesia, karena di pantai ini terdapat padang pasir yang lazimnya kita temui di belahan dunia arab. Namun di pantai ini anda akan bisa menemukan gundukan-gundukan pantai layaknya sedang di padang pasir arab. Padang pasir yang ada di kawasan Pantai Parangtritis ini dinamakan Gumuk Pasir. Keindahan Pantai Parangtritis memang tidak dapat diraguka lagi, karena setiap harinya dikunjungi oleh ribuan wisatawan yang berbondong-bondong untuk melihat pantai di laut selatan jawa ini.', 'Pantai-Parangtritis-1.jpg', '', '', ''),
(14, 'Diamond Beach', 1, 'Nusa penida', '- Pelabuhan  <br> \r\nTerdapat 4 pelabuhan (Buyuk, Toya Pakeh, Banjar Nyuh, Sampalan) di Nusa Penida dimana pelabuhan utama sebagai pintu masuk ke pulau dengan menggunakan jalur laut.  <br><br>\r\n\r\n- Transportasi <br> \r\nDisediakan transportasi umum berupa pick up yang sudah dimodifikasi dan dapat disewa jika kamu ingin berkeliling bersama rombongan. <br><br>\r\n\r\n- Penginapan  <br> \r\nBackpacker tidak perlu berkecil hati apabila ingin menginap di Nusa Penida, karena ada berbagai jenis penginapan bagi kamu pembawa ransel. Mulai dari hotel bintang 2 hingga 5 bisa kamu pilih, seperti Krisna Guest House, The Mel Huts, Linas Villas, Manta Cottage Sea View plus, Ramwan Guest House hingga Nova Homestay.  <br><br>\r\n\r\n- Restoran dan Cafe  <br> \r\nPoh Manis Restaurant dapat menjadi salah satu tempat makan alternatif di Nusa Penida yang menyuguhkan hidangan makanan laut dan steak. <br><br>\r\n\r\n- Penyewaan Motor  <br> \r\nMotor merupakan cara terbaik untuk menjelajah Nusa Penida. Harga sewa sepeda motor di daerah Toyapakeh dipatok sekitar Rp 80.000 – Rp 120.000. <br><br>', 25000, 'Pesona indah yang ditawarkan pulau Nusa Penida, menjadikannya sebagai tujuan wajib ketika anda liburan ke Bali, terutama tempat rekreasi alam pesisir yang membuat wisatawan berdecak kagum. Salah satu yang baru di kawasan pariwisata ini adalah pantai Diamond. <br><br>\r\n\r\nSeperti diketahui, Nusa Penida adalah pulau Kecil yang terletak di kabupaten Klungkung Bali, untuk menuju pulau tersebut bisa dengan transportasi laut, dan pilihan populer adalah dengan fast boat atau kapal cepat. <br><br>\r\n\r\nSebelumnya keindahan Pantai Diamond di pulau Nusa Penida tersebut hanya bisa dinikmati dari ketinggian di atas tebing bukit, namun sekarang anda bisa langsung menuju bibir pantainya. <br><br>\r\n\r\nPantai Diamond sekarang ini salah satu objek wisata terbaru yang alamnya cantik, indah dan instagramable di pulau Nusa Penida, menawarkan keindahan pantai pasir putih bersih dan masih jarang dikunjungi, lokasinya juga tersembunyi di balik tebing bukit. <br><br>\r\n\r\nTapi perlu diketahui, untuk menikmati keindahan pantai Diamond dan dapat menginjakkan kaki di pesisir pantainya, anda perlu stamina ekstra, karena anda harus menapaki tangga demi tangga yang terletak di dinding tebing bukit yang curam. <br><br>\r\n\r\nDaya tarik tempat rekreasi alam di pulau Nusa Penida sekarang ini semakin hits dan populer, sejumlah tempat wisata terbaru juga bermunculan seiring meningkatnya kunjungan wisatawan ke kawasan pariwisata Pulau Nusa Penida ini. <br><br>\r\n\r\nTempat-tempat yang dulunya tersembunyi, serta akses ke lokasi yang tidak memungkinkan, kini mulai jadi perhatian warga, sehingga potensi wisata tersembunyi tersebut bisa dinikmati oleh wisatawan. <br><br>\r\n\r\nSalah satunya adalah pantai Diamond, namanya memang baru muncul seiring akses ke lokasi pantai tersebut di buka pada tahun 2018. <br><br>', 'diamond-beach-1.jpg', 'diamond-beach-2.jpg', 'diamond-beach-3.jpg', 'diamond-beach-4.jpg'),
(17, 'Candi Borobudur', 2, 'Magelang - Jawa Tengah', 'Museum Karmawibhangga\r\nMuseum Samudraraksa\r\nVisitor Center & Audio Visual\r\nCycling\r\nTourist Train\r\nAndong Tour\r\nElephant Safari\r\nMahakarya Borobudur', 40000, 'Candi yang sangat megah dan rupawan ini telah dikenal oleh wisatawan lokal maupun mancanegara sebagai kuil Buddha terbesar di dunia. Wajar saja, karena Candi Borobudur memiliki luas sekitar 2500 meter persegi, dengan panjang 121,66 meter, lebar 121,38 meter, dan tinggi 35,40 meter.Selain dari skalanya yang besar, Candi yang sangat legendaris ini tentunya juga menyimpan beragam fakta unik, serta berbagai macam hal menarik yang bisa Sobat Pesona temui saat berkunjung kesini. \r\n\r\nDestinasi\r\nTak hanya menawarkan keajaiban dunia, di sini Sobat Pesona juga bisa menemukan beraneka ragam objek wisata lainnya yang tidak kalah menarik. Di sekitar candi, terdapat tiga museum yang Sobat Pesona bisa kunjungi untuk menambah wawasan, yaitu Museum Borobudur, Museum Kapal Samudraraksa, dan Museum MURI. Jika ada di antara Sobat Pesona yang ingin melihat pemandangan luar biasa Candi Borobudur dari kejauhan, maka Sobat Pesona wajib mendatangi Punthuk Setumbu yang berlokasi di bagian barat Candi Borobudur. Di sini, Sobat Pesona juga bisa menyaksikan indahnya matahari terbit atau terbenam di masing-masing ufuk. Tak jauh dari Punthuk Setumbu, Sobat Pesona juga bisa menemukan sebuah bangunan yang memiliki bentuk unik jika berjalan ke arah utara. Bangunan yang berbentuk seperti ayam ini adalah gereja yang dibangun pada tahun 90-an dan dikenal sebagai Gereja Ayam oleh warga setempat. Jika Sobat Pesona masih belum puas, di bagian timur Candi Borobudur terdapat tiga buah candi kecil yang juga tak kalah bagus, yaitu Candi Pawon, Candi Ngawen, dan Candi Mendut. Ingin menghabiskan waktu lebih lama lagi di sekitar Candi Borobudur? Coba menginap ke Desa Wisata yang ada di sekitar Candi Borobudur aja! Diantaranya seperti Desa Wanurejo, Desa Karangrejo, Desa Tanjungsari, Desa Giritengah, Desa Majaksingi, dan Desa Candirejo.', 'candi-borobudur-1.jpg', 'candi-borobudur-2.jpg', 'candi-borobudur-3.jpg', 'candi-borobudur-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `FK_User` (`id_user`),
  ADD KEY `FK_Wisata` (`id_wisata`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `FK_Kategori` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_Wisata` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`);

--
-- Ketidakleluasaan untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `FK_Kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
