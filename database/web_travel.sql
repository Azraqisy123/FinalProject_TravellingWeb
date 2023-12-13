-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 07:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(32) NOT NULL,
  `foto_kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `foto_kategori`) VALUES
(1, 'Alam', 'categories-alam.jpg'),
(2, 'Budaya', 'categories-budaya.jpg'),
(4, 'Bawah Laut', 'categories-bawah-laut.jpg'),
(8, 'Kebun Binatang', 'categories-kebun-binatang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_wisata`, `komentar`, `tgl_komentar`) VALUES
(1, 5, 1, 'Jalan yang berliku. Tak tampak pinggir lautnya. Eh ternyata masih di balik bukit pantainya. Setelah naik trun tangga kita baru disuguhi pantai yang ciamik', '2023-11-23'),
(2, 6, 1, 'Pantai yang cukup indah. Sangat bersih pantainya, pasirnya juga halus. Mungkin akses untuk masuk ke pantai bisa diperbaiki lagi biar jalannya mulus', '2023-11-24'),
(3, 6, 2, 'Tidak disangka-sangka kalau harus sampai di bumi Kraton, biarpun status sebagai misi kerja, namun 80% tanah Jawa Timur sudah saya injak. Semua itu karena tuntutan kerja di dunia telekomunikasi.\nNamun apa boleh buat itu semua tinggal kenangan.', '2023-11-12'),
(4, 2, 2, 'Pantai Parangtritis Yogyakarta, pengalaman yang sangat menarik bisa berkunjung ke pantai ini, pemandangan yang indah dan ombak , serta banyak spot foto yang menarik sangat disarankan untuk di kunjungi', '2023-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `jenis_kelamin`, `email_user`, `no_telp`, `alamat`, `role`, `foto_user`) VALUES
(1, 'admin', 'admin', 'admin', 'Pria', 'admin@gmail.com', '081510211241', 'Jakarta', 'ADMIN', 'person_2.jpg'),
(2, 'Solihudin', 'solih', '12345', 'Pria', 'zsolihudin@gmail.com', '081213161669', 'Bekasi', 'USER', 'person_3.jpg'),
(5, 'Yuli Yulianti', 'yuli', 'yuli123', 'Wanita', 'yulianti@gmail.com', '081256782345', 'Bandung', 'USER', 'person_4.jpg'),
(6, 'Heru Yankee', 'heru', 'herukan123', 'Pria', 'Heru254@gmail.com', '081267451234', 'Cikarang', 'USER', 'person_1.jpg'),
(12, 'Yadi Surya', 'yadisur', 'yadi12345', 'Pria', 'yadi2413@gmail.com', '081256785624', 'Tangerang', 'USER', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
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
  `foto_4` varchar(32) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_tempat`, `id_kategori`, `lokasi`, `fasilitas`, `htm`, `deskripsi`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `view`) VALUES
(1, 'Pantai Teluk Asmara', 1, 'Sumbermanjing Wetan - Malang', 'Toilet\r\nKamar mandi\r\nTempat parkir\r\nGazebo\r\nPenginapan\r\nSPBU\r\nWarung makan\r\nTikar\r\nHammock\r\nTenda', 10000, 'Pantai Teluk Asmara merupakan pantai cantik di Malang yang dikelilingi oleh pulau-pulau kecil yang sangat indah.\r\n\r\nItulah mengapa Pantai Teluk Asmara disebut sebagai Raja Ampat-nya Malang karena memang memiliki pemandangan yang mirip dengan Raja Ampat di Papua.\r\n\r\nLiburan ke Malang dengan mengunjungi Pantai Teluk Asmara merupakan pilihan yang tepat untuk sekedar kabur dari rutinitas sehari-hari seperti bekerja, dan lain-lain. Wisata alam seperti pantai memang pilihan yang paling tepat untuk dijadikan destinasi wisata.', 'Pantai-Teluk-Asmara-1.jpg', 'Pantai-Teluk-Asmara-2.jpg', 'Pantai-Teluk-Asmara-3.jpg', 'Pantai-Teluk-Asmara-4.jpg', 19),
(2, 'Pantai Parangtritis', 1, 'Bantul - Yogyakarta', 'Motor ATV, Kuda, dan Delman untuk berkeliling Pantai Parangtritis\r\nGazebo Pantai\r\nWarung Makan\r\nToko Souvenir dan Baju\r\nPenginapan\r\nToilet umum\r\nMushola\r\nPenginapan / Hotel', 10000, 'Pantai Parangtritis memang terkenal diantara para wisatawan, karena selain memiliki legenda yang melekat dengan Ratu Kidul sebagai penguasa laut selatan, namun ternyata keindahannya tidak bisa bisa diragukan lagi karena pantai ini merupakan pantai paling luas di Yogyakarta dimana memiliki luas berkilo-kilo meter persegi, berbeda dengan pantai-pantai di kawasan Yogyakarta lainya seperti Pantai di Gunung Kidul yang ukurannya relatif kecil.\r\n\r\nPantai Parangtritis terbilang sebagai pantai yang spesial di Indonesia, karena di pantai ini terdapat padang pasir yang lazimnya kita temui di belahan dunia arab. Namun di pantai ini anda akan bisa menemukan gundukan-gundukan pantai layaknya sedang di padang pasir arab. Padang pasir yang ada di kawasan Pantai Parangtritis ini dinamakan Gumuk Pasir. Keindahan Pantai Parangtritis memang tidak dapat diraguka lagi, karena setiap harinya dikunjungi oleh ribuan wisatawan yang berbondong-bondong untuk melihat pantai di laut selatan jawa ini.', 'Pantai-Parangtritis-1.jpg', 'Pantai-Parangtritis-2.jpg', 'Pantai-Parangtritis-3.jpg', 'Pantai-Parangtritis-4.jpg', 4),
(14, 'Diamond Beach', 1, 'Nusa penida', '- Pelabuhan \r\nTerdapat 4 pelabuhan (Buyuk, Toya Pakeh, Banjar Nyuh, Sampalan) di Nusa Penida dimana pelabuhan utama sebagai pintu masuk ke pulau dengan menggunakan jalur laut. \r\n\r\n- Transportasi \r\nDisediakan transportasi umum berupa pick up yang sudah dimodifikasi dan dapat disewa jika kamu ingin berkeliling bersama rombongan.\r\n\r\n- Penginapan \r\nBackpacker tidak perlu berkecil hati apabila ingin menginap di Nusa Penida, karena ada berbagai jenis penginapan bagi kamu pembawa ransel. Mulai dari hotel bintang 2 hingga 5 bisa kamu pilih, seperti Krisna Guest House, The Mel Huts, Linas Villas, Manta Cottage Sea View plus, Ramwan Guest House hingga Nova Homestay. \r\n\r\n- Restoran dan Cafe \r\nPoh Manis Restaurant dapat menjadi salah satu tempat makan alternatif di Nusa Penida yang menyuguhkan hidangan makanan laut dan steak.\r\n\r\n- Penyewaan Motor \r\nMotor merupakan cara terbaik untuk menjelajah Nusa Penida. Harga sewa sepeda motor di daerah Toyapakeh dipatok sekitar Rp 80.000 – Rp 120.000.', 25000, 'Pesona indah yang ditawarkan pulau Nusa Penida, menjadikannya sebagai tujuan wajib ketika anda liburan ke Bali, terutama tempat rekreasi alam pesisir yang membuat wisatawan berdecak kagum. Salah satu yang baru di kawasan pariwisata ini adalah pantai Diamond.\r\n\r\nSeperti diketahui, Nusa Penida adalah pulau Kecil yang terletak di kabupaten Klungkung Bali, untuk menuju pulau tersebut bisa dengan transportasi laut, dan pilihan populer adalah dengan fast boat atau kapal cepat.\r\n\r\nSebelumnya keindahan Pantai Diamond di pulau Nusa Penida tersebut hanya bisa dinikmati dari ketinggian di atas tebing bukit, namun sekarang anda bisa langsung menuju bibir pantainya.\r\n\r\nPantai Diamond sekarang ini salah satu objek wisata terbaru yang alamnya cantik, indah dan instagramable di pulau Nusa Penida, menawarkan keindahan pantai pasir putih bersih dan masih jarang dikunjungi, lokasinya juga tersembunyi di balik tebing bukit.\r\n\r\nTapi perlu diketahui, untuk menikmati keindahan pantai Diamond dan dapat menginjakkan kaki di pesisir pantainya, anda perlu stamina ekstra, karena anda harus menapaki tangga demi tangga yang terletak di dinding tebing bukit yang curam.\r\n\r\nDaya tarik tempat rekreasi alam di pulau Nusa Penida sekarang ini semakin hits dan populer, sejumlah tempat wisata terbaru juga bermunculan seiring meningkatnya kunjungan wisatawan ke kawasan pariwisata Pulau Nusa Penida ini.\r\n\r\nTempat-tempat yang dulunya tersembunyi, serta akses ke lokasi yang tidak memungkinkan, kini mulai jadi perhatian warga, sehingga potensi wisata tersembunyi tersebut bisa dinikmati oleh wisatawan.\r\n\r\nSalah satunya adalah pantai Diamond, namanya memang baru muncul seiring akses ke lokasi pantai tersebut di buka pada tahun 2018.', 'diamond-beach-1.jpg', 'diamond-beach-2.jpg', 'diamond-beach-3.jpg', 'diamond-beach-4.jpg', 22),
(17, 'Candi Borobudur', 2, 'Magelang - Jawa Tengah', 'Museum Karmawibhangga\r\nMuseum Samudraraksa\r\nVisitor Center & Audio Visual\r\nCycling\r\nTourist Train\r\nAndong Tour\r\nElephant Safari\r\nMahakarya Borobudur', 40000, 'Candi yang sangat megah dan rupawan ini telah dikenal oleh wisatawan lokal maupun mancanegara sebagai kuil Buddha terbesar di dunia. Wajar saja, karena Candi Borobudur memiliki luas sekitar 2500 meter persegi, dengan panjang 121,66 meter, lebar 121,38 meter, dan tinggi 35,40 meter.Selain dari skalanya yang besar, Candi yang sangat legendaris ini tentunya juga menyimpan beragam fakta unik, serta berbagai macam hal menarik yang bisa Sobat Pesona temui saat berkunjung kesini. \r\n\r\nDestinasi\r\nTak hanya menawarkan keajaiban dunia, di sini Sobat Pesona juga bisa menemukan beraneka ragam objek wisata lainnya yang tidak kalah menarik. Di sekitar candi, terdapat tiga museum yang Sobat Pesona bisa kunjungi untuk menambah wawasan, yaitu Museum Borobudur, Museum Kapal Samudraraksa, dan Museum MURI. Jika ada di antara Sobat Pesona yang ingin melihat pemandangan luar biasa Candi Borobudur dari kejauhan, maka Sobat Pesona wajib mendatangi Punthuk Setumbu yang berlokasi di bagian barat Candi Borobudur. Di sini, Sobat Pesona juga bisa menyaksikan indahnya matahari terbit atau terbenam di masing-masing ufuk. Tak jauh dari Punthuk Setumbu, Sobat Pesona juga bisa menemukan sebuah bangunan yang memiliki bentuk unik jika berjalan ke arah utara. Bangunan yang berbentuk seperti ayam ini adalah gereja yang dibangun pada tahun 90-an dan dikenal sebagai Gereja Ayam oleh warga setempat. Jika Sobat Pesona masih belum puas, di bagian timur Candi Borobudur terdapat tiga buah candi kecil yang juga tak kalah bagus, yaitu Candi Pawon, Candi Ngawen, dan Candi Mendut. Ingin menghabiskan waktu lebih lama lagi di sekitar Candi Borobudur? Coba menginap ke Desa Wisata yang ada di sekitar Candi Borobudur aja! Diantaranya seperti Desa Wanurejo, Desa Karangrejo, Desa Tanjungsari, Desa Giritengah, Desa Majaksingi, dan Desa Candirejo.', 'candi-borobudur-1.jpg', 'candi-borobudur-2.jpg', 'candi-borobudur-3.jpg', 'candi-borobudur-4.jpg', 27),
(21, 'Pulau Padar', 1, 'Labuan Bajo - Nusa Tenggara Timu', 'Spot Diving\r\nSnorkeling\r\nSpeedboat', 5000, 'Salah satu keunikan utama yang juga menjadi daya tarik dari wisata alam ini adalah pemandangannya yang begitu menawan. Saat pengunjung sudah tiba di puncak maka mereka akan menyaksikan betapa indahnya pemandangan perbukitan yang indah mengelilingi pulau Padar. Seain itu, mata akan dimanjakan dengan keindahan pemandangan air laut biru yang turut menghiasi keindahan pulau ini.\r\n\r\nAlasan tersebut menjadi salah satu sebab mengapa banyak wisatawan ingin berkunjung ke kawasan wisata ini. Terlebih bagi para traveler yang mencintai keindahan alam natural maka pulau ini menjadi salah satu tujuan yang recommended. Tempat dengan keindahan bukit-bukit disekitarnya ini menjadikannya lebih menarik dibandingkan dengan pulai lain yang juga terdapat di dekat kawasan wisata tersebut.\r\n\r\nSaat ini Pulau Padar juga semakin terkenal karena banyaknya para pengunjung yang datang dan menikmati sensasi berfoto ria dengan berbagai spot. Mereka tidak segan mengunggah hasil foto jalan-jalan mereka di akun sosial media masing-masing. Tentunya hal ini menjadikan para wisatawan lain merasa penasaran dan ingin berkunjung ke tempat wisata yang indah ini. Keindahan alam yang disuguhkan di pulau ini pun bahkan juga menarik hati para wisatawan luar negeri.\r\n\r\nKawasan wisata ini juga lengkap dengan Pink Beasch yang bisa dikunjungi saat anda berada di  Lombok. Bagi anda yang ingin berkunjung an menikmati suasana alam di Pink Beach maka anda bisa menghabiskan waktu sekitar 40 menit dengan menggunakan jasa sewa speedboat.\r\n\r\nMeskipun merupakan salah satu wilayah untuk trekking namun untuk menuju puncak kawasan pulau Padar ini tidaklah mudah. Dibutuhkan perjuangan yang cukup serius agar anda bisa mencapai tujuan yang diinginkan. Bagi para pecinta trekking maka pulau Padar ini sangat recommended untuk segera dicoba.\r\n\r\nBagi anda yang masih tergolong trakker pemula diharapkan untuk tetap membawa tongkat Traking agar anda selalu terjaga keseimbangannya. Dengan keseimbangan yang terjaga tersebut maka anda bisa menyusuri wilayah sekitar pulau dengan hikmat demi mendapatkan pengalaman yang luar biasa hebat.\r\n\r\nPulau ini menyimpan pantai yang menakjubkan dan juga menjadi spot favorit untuk Snorkeling dan Diving karena keindahan pemandangan bawah lautnya yang luar biasa. Terdapat sekitar 42 spot penyelaman yang bisa dipilih misalnya Batu Samsia yang digambarkan sebagai rangkaian saluran air yang menjadikan seseorang dapat bergaul dengan spesies laut beserta para temannya misalnya kura-kura, mackerel, hiu dan lain-lain.\r\n\r\nPulau Padar merupakan pulau terbesar ketiga di Taman Nasional Komodo. Pulau ini mampu menarik minat para wisatawan dari berbagai pihak. Dengan menyusuri pulau Padar maka pengunjung dapat sekaligus menyaksikan keindahan seluruh Taman Nasional Komodo tanpa mengelilingi pulau Komodo. Tentunya hal ini menjadi daya tarik tersediri yang mampu menjadikan para wisatawan berkunjung dan terus berkunjung di kawasan wisata ini.\r\n\r\nPulau ini cukup terkenal dengan nama Gili Padar. Kawasana wisata ini menyuguhkan pemandangan yang indah untuk spot berfoto ria anda bersama teman, kerabat maupun keluarga.', 'Pulau-padar-1.jpg', 'Pulau-padar-2.jpg', 'Pulau-padar-3.jpg', 'Pulau-padar-4.jpg', 13),
(22, 'Istana Maimun', 2, 'Medan - Sumatera Utara', '- Lahan parkir\r\n\r\nDi obyek wisata ini telah disediakan lahan parkir yang lumayan luas untuk menampung kendaraan dari para pengunjung. Tempat parkirnya juga ada petugas yang menjaga, jadi aman.\r\n\r\n- Mushola\r\n\r\nApabila di tengah waktu petualangan anda di tempat ini ternyata telah masuk jam untuk sholat, anda yang muslim bisa langsung ke mushola untuk menunaikan ibadah.\r\n\r\n- Tempat makan\r\n\r\nBiasanya setelah menghabiskan waktu bekeliling dan bermain anda merasa haus atau bahkan lapar. Nah di sekitaran obyek wisata ini anda dapat menemukan beberapa warung atau tempat makan yang menjajakan snack, makanan dan minuman.\r\n\r\n- Penginapan\r\n\r\nUntuk anda yang ingin bermalam, di dekat obyek wisata ini anda dapat menemukan beberapa penginapan atau hotel dengan tarif yang cukup bervariasi.\r\n\r\n- Toko souvenir\r\n\r\nRasanya ada yang kurang jika kita meninggalkan museum dan galeri ini tanpa buah tangan. Untungnya di sana ada toko souvenir dengan berbagai pernak-pernik dan merchandise yang bisa anda beli untuk saudara di rumah.\r\n\r\n- Toilet umum\r\n\r\nFasilitas yang satu ini juga tidak kalah penting. Untungnya anda bisa menemukannya di sana.', 5000, 'Obyek wisata Istana Maimun sendiri memiliki lokasi yang tepatnya berada di Kelurahan Sukaraja, Kecamatan Medan Maimun, Kota Medan, Sumatera Utara. Istana Maimun sama seperti Masjid Raya Medan adalah salah satu dari beberapa landmark kota Medan. Dan karena itulah, banyak orang-orang dari berbagai daerah atau bahkan negara datang untuk melihat keindahan Istana Maimun.\r\n\r\nBangunan peninggalan Kerajaan Deli Serdang, Sumatera Utara dari Sultan Mahmud Alrasyid ini mempunyai arsitektur yang didesain oleh arsitek asal Italia. Luas Istana Maimun yang mencapai 2.772 meter persegi ini memiliki sekitar 30 ruangan di dalamnya. Ukiran yang terpahat di bangunan yang telah berusia 130 tahun ini juga sangat indah dan menarik untuk dipandang.\r\n\r\nObyek wisata Istana Maimun dibangun pada tanggal 26 Agustus 1888 dan baru diresmikan pada 18 Mei 1891. Bangunan ini menghadap ke timur dengan dua lantai yang terdapat tiga bagian yakni bangunan induk, sayap kanan, dan sayap kiri. Pada bagian depan sekitar 100 meter terdapat masjid Al-Maksum yang dikenal dengan Masjid Raya Medan.\r\n\r\nIstana ini menjadi salah satu istana yang paling indah di Indonesia. Hal ini dikarenakan desainnya yang unik dengan paduan berbagai budaya seperti Melayu bergaya Islam, India, Spanyol, dan Italia. Pengaruh Islam sendiri dapat dilihat dari bentuk atapnya yang melengkung seperti perahu yang ada di Timur Tengah. Lalu di bagian ruang tamu, anda akan menemukan ruang tahta yang didominasi dengan warna kuning. Ruang yang memiliki luas sekitar 412 meter persegi itu difungsikan sebagai penobatan Sultan Deli atau acara tradisional lain.', 'Istana-Maimun-1.jpg', 'Istana-Maimun-2.jpg', 'Istana-Maimun-3.jpg', 'Istana-Maimun-4.jpg', 7),
(23, 'Candi Prambanan', 2, 'Daerah Istimewa Yogyakarta', '- Musola\r\nUntuk mendukung kenyamanan pengunjung para penggurus mendirikan beberapa musola. Anda tidak perlu khawatir dengan mukena dan perangkat shiolat lainnya karena sudah disiapkan. Selain itu air yang melimpah membuat wisatwan tidak perlu takut untuk mencari wudhu. Kemudahan untuk mengakses dan petugas yang siap siaga membantu.\r\n\r\n- Toilet Umum\r\nBerikutnya, toilet umum bersih dan tersedia cukup banyak. Anda tidak perlu khwatir antri untuk membuang hajat. Semua toilet dipastikan bersih dan memenuhi standar fasilitas umum yang nyaman sekaligus aman.\r\n\r\n- Parkir Luas\r\nFasilitas lain yang tersaji adalah area parkis yang sangat luas sehingga semua jenis kendaraan bisa masuk dengan rapi. Bukan hanya itu petugas siap siaga untuk mengatur jalannya kendaraan yang masuk dan keluar. Jadi, tidak akan ada tumpukan mobil atau motor yang membuat macet.\r\n\r\n- Taman\r\nSelain menyediakan area kebun binatang yang berada di belakang komplek Prambanan. Di area yang sama juga disediakan taman luas yang memungkinkan setiap pengunjung untuk beristirahat dan menghabiskan waktu luang bersama keluarga dan teman di taman yang asri sekaligus nyaman tersebut.\r\n\r\n- Spot Foto Terindah\r\nCandi Prambanan memiliki spot foto yang cantik sekaligus eksklusif. Kondisi ini didukung dengan kompleks candi yang dibuat sedemikian rupa sehingga pengunjug bebas untuk mengambil gambar. Fasilitas ini tentu sangat membantu Anda yang gemar dengan kegiatan berselfy.  Jadi, ada baiknya siapkan kamera terbaik.\r\n\r\nTidak hanya itu keunikan terlihat dari setiap relief yang menceritakan kisah ramayana yang bisa dilihat secara langsung oleh para pengunjung. Karena di komplek terdapat begitu banyak candi wisatawan bebas mengabadikan moment dengan kamera. Yang tidak diperbolehkan saat berkunjung adalah menaiki batu atau patung yang berada di sekitar kompleks.', 50000, 'Candi Prambanan termasuk bagian dari warisan bersejarah yang dimiliki Indonesia. Dibangun sebagai bentuk penghormatan terhadap Tri-Murti yang dipercayai oleh agama hindu. Tidak ketinggalan kisah Roro Jonggrang dan pemuda yang mencintainya lekat dengan kemewahan pada candi yang berada di Sleman Yogyakarta tersebut. Ini yang membuat dia sering juga disebut dengan candi seribu.', 'candi-prambanan-1.jpg', 'candi-prambanan-2.jpg', 'candi-prambanan-3.jpeg', 'candi-prambanan-4.jpeg', 2),
(24, 'Museum PETA', 2, 'Kota Bogor - Jawa Barat', '- toilet\r\n- tempat parkir\r\n- pusat informasi \r\n- perpustakaan\r\n- kantor\r\n- taman\r\n- monumen Soedirman\r\n- mushola.', 10000, 'Bogor merupakan sebuah kota yang memiliki aset sejarah yang mana para pejuang tentara negara kita berawal dari kota Bogor. Gedung yang saat ini dijadikan sebagai museum ini awalnya dibangun pada tahun 1745 dengan gaya bangunan Eropa (Inggris) oleh para Tentara KNIL.\r\n\r\nPembela Tanah Air atau dalam bahasa Jepang Kyodo Bo-ei Giyugun ini adalah Tentara peribumi yang dibentuk oleh Jepang tepatnya pada tanggal 3 Oktober 1943 dan berdasarkan pada maklumat Osamu Seirei No. 44. Maklumat tersebut kemudian dumumkan oleh Panglima Tentara Keenambelas yaitu Letnan Jendral Kumakichi Harada sebagai Tentara Sukarela. Lokasi gedung yang tak jauh dari Istana Bogor ini menjadi tempat berlatihnya pasukan tersebut dan dipusatkan di kompleks militer Bogor dan saat itu bernama Jawa Bo-ei Giyugun Kanbu Resentai. Walaupun pada zaman itu masih berada di bawah kendali penjajah Jepang. Namun dikemudian hari, para pejuang terutama pasukan PETA sering melakukan perlawanan terhadap pihak Jepang.\r\n\r\nTentara PETA merupakan tentara kebangsaan. Tentara PETA ini memang disiapkan oleh para pemimpin-pemimpin Kebangsaan Tanah Air yang untuk selanjutkan dijadikan tentara kebangsaan Negara Indonesia dan di kota Bogor inilah untuk pertama kalinya diselenggarakan pembentukan taruna-taruna. Adanya pembentukan taruna ini kemudian melahirkan perwira-perwira Tentara Sukarela Pembela Tanah Air yaitu Tentara Kebangsaan Indonesia. Disinilah para perwira Tentara Sukarela Pembela Tanah Air dibangkitkan jiwa keprajuritan kebangsaan Indonesia yang untuk kemudian hari dapat berperan di dalam gerakan persiapan Proklamasi Kemerdekaan Bangsa Indonesia. Kemudian terbentuklah Badan Keamanan Rakyat (BKR) yang menjadi cikal bakal Tentara Nasional Indonesia (TNI).\r\n\r\nPembangunan Museum PETA atau Pembela Tanah Air ini dibentuk atas prakarsa YAPETA atau Yayasan Pembela Tanah Air. Tujuan dibangunnya museum ini adalah untuk memberikan penghargaan kepada mantan Tentara PETA serta kontribusinya terhadapan pendirinya bangsa dan negara tercinta ini. Selain itu juga museum ini dapat memberikan gambara perjuangan Kemerdekaan Indonesia serta persiapan dalam mengisi Kemerdekaan tersebut.\r\n\r\nRancangan pendirian museum PETA ini dimulai pada tanggal 14 November 1993 dengan peletakan batu pertamanya oleh Bapak Umar Wirahadikusumah yang merupakan Wakil Presiden Republik Indonesia pada masa itu, selain itu beliau juga merupakan sesepuh YAPETA. Dibutuhkan waktu sekitar 2 tahun untuk menyelesaikan pembangunan museum ini. Museum PETA pada awalnya membaur dengan kompleks zeni. Kemudian gedung ini diresmikan sebagai Museum PETA pada tanggal 18 Desember 1995 oleh Presiden Republik Indonesia yang ke II yaitu Bapak H. M. Soeharto, beliau juga merupakan Perwira PETA Angkatan I.\r\n\r\nKota Bogor yang dijadikan pusat latihan para tentara ini dijadikan sebagai Kota Pembela Tanah Air atau PETA yang telah diputuskan melalui surat Keputusan DPRD Kotamadya Tingkat II Bogor Nomor.3/Kep/DPRD/1995. Surat keputusan tersebut dikeluarkan pada tanggal 19 Oktober 1995. Kondisi inilah yang semakin mengukuhkan Bogor sebagai Bumi Keprajuritan yang telah melahirkan perwira-perwira yang tangguh dan memiliki peran besar dalam kemerdekaan Negara Indonesia.', 'museum-PETA-1.jpg', 'museum-PETA-2.jpg', 'museum-PETA-3.jpg', 'museum-PETA-4.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `FK_User` (`id_user`),
  ADD KEY `FK_Wisata` (`id_wisata`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `FK_Kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_Wisata` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`);

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `FK_Kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
