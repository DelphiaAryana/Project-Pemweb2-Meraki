-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 18, 2023 at 11:27 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sasirangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_poin`
--

CREATE TABLE `data_poin` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `poin_kuis` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_poin`
--

INSERT INTO `data_poin` (`id`, `id_user`, `poin_kuis`) VALUES
(21, 14, 70),
(23, 11, 80),
(25, 13, 40),
(29, 15, 70);

-- --------------------------------------------------------

--
-- Table structure for table `data_soal`
--

CREATE TABLE `data_soal` (
  `id` int(10) NOT NULL,
  `soal` text NOT NULL,
  `jawaban_a` varchar(100) NOT NULL,
  `jawaban_b` varchar(100) NOT NULL,
  `jawaban_c` varchar(100) NOT NULL,
  `jawaban_d` varchar(100) NOT NULL,
  `kunci_jawaban` varchar(5) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_soal`
--

INSERT INTO `data_soal` (`id`, `soal`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `kunci_jawaban`, `image`) VALUES
(1, 'Kain sasirangan juga mempunyai nilai magis dan pesan-pesan yang yang disampaikan melalui warna dan motif-motif yang sesuai dengan kepribadian dan budaya yang berkembang di Kalimantan Selatan. Gambar disamping menunjukkan salah satu contoh motif lajur yakni motif ...', 'Hiris Pudak', 'Kangkung Kaumbakan', 'Kulat Karikit', 'Gigi Haruan', 'a', 'images/UmtMXKeJ9eNzptzDUwTtrrQSCVK6HoJemwAp21N0.jpg'),
(2, 'Pada zaman dahulu motif ini diartikan oleh masyarakat banjar sebagai lambang dari ketajaman pemikiran. Setiap tindakan dan langkah yang dilakukan harus didasari akan ketajaman berfikir kedepannya agar menjadi lebih baik. Motif apakah ini ?', 'Gigi Haruan', 'Bayam Raja', 'Naga Balimbur', 'Kambang Melati', 'a', 'images/UxqNQASxPdGxGGJAx2wBO93lFEhE73EIuFLHboWi.jpg'),
(4, 'Motif ini biasanya dibuat untuk mereka yang memiliki kedudukan terhormat atau dianggap memiliki martabat lebih tinggi di kalangan masyarakat. Motif ini  sendiri mengandung makna leluhur yang bermartabat dan dihormati. Motif apakah ini ?', 'Gigi Haruan', 'Bayam Raja', 'Naga Balimbur', 'Kambang Melati', 'b', 'images/q1XqqqFMCPuAibZUE5ug1FWkdSyw1REjvgRFcROc.png'),
(5, 'Penggunaan motif ini dapat memberikan pemakainya makna religious untuk selalu beribadat dan memohon perlindungan Allah SWT. Teguh dalam menghadapi segala ujian dan cobaan serta tetap berpegang teguh pada prinsip dan keyakinan dalam memeluk agama. Motif apakah ini?', 'Kangkung Kaumbakan', 'Mangrove', 'Pohon Kelapa', 'Padi', 'a', 'images/1XlEgnh9L2OWTEBxiJQMrDTcbTeh76ajF0Nfb0cc.jpg'),
(6, 'Motif ini yang bermakna sekuntum bunga yang melambangkan keindahkan yang banyak dipergunakan sebagai ornamen khas Banjar, seperti ukiran arsitektur rumah adat Banjar. Motif apakah ini?', 'Bunga Melati', 'Bunga Kenanga', 'Bunga Matahari', 'Bunga Sasaki', 'd', 'images/iUkkKuLSEy6AvmR8yThBmhUQufYGmZmMkSahteuj.jpg'),
(7, 'Motif ini terinspirasi dari hewan yang berbentuk kecil namun memiliki kecepatan dan racun bisa mematika. Hewan ini walaupun dengan bentuknya yang kecil, bahkan hampir tak terlihat namun memiliki kecepatan, ketepatan, kepekaan, bahkan senjata yang bisa melindungi diri ataupun mengalahkan musuhnya. Motif apakah ini?', 'Kalajengking', 'Ular Lidi', 'Semut Peluru', 'Lebah', 'b', 'images/KtfojUvFE20AOJYrZ3R2i63q71GPXWo70Wg32TLu.jpg'),
(8, 'Selain itu, ada lagi contoh motif yang mirip dengan hempasan ombak di tepi pantai,. Motif ini ialah perwujudan dari dinamika kehidupan manusia yang selalu naik dan turun. Motif apakah ini?', 'Ombak Sinapur Karang', 'Ombak', 'Tsunami', 'Tornado', 'a', 'images/NiXbFiCcxw3lef0uFyY6a7vw7m79373xysXV69jZ.png'),
(9, 'Salah satu motif yang digunakan dalam seni sasirangan Banjar, seni tenun tradisional dari Kalimantan Selatan, Indonesia. Motif ini memiliki pola yang kaya dan rumit, dengan tumpukan garis-garis melintang dan zigzag yang saling berhubungan.', 'Ramak Sahang', 'Ombak Sinapur', 'Naga Balimbur', 'Gigi Haruan', 'a', 'images/TPslVq0EbkCgmJ4ZwGQnYffb8IoSRUhpZm5MHCDv.jpg'),
(10, 'Motif ini memiliki ciri khas berupa pola berulang yang menyerupai bunga atau kembang yang menggantung. Motif apakah ini?', 'Kangkung Kaumbakan', 'Bunga Kenanga', 'Kambang Kancang', 'Gigi Haruan', 'c', 'images/dC3KqUZktJwBQA7S6FEm3gMxVJIPNAXmG8Fft2HU.jpg'),
(11, 'Menggambarkan burung Murai atau burung penyanyi yang terkenal dengan suara kicauannya yang indah. Motif ini bisa berupa gambar burung Murai secara realistis atau abstrak dalam bentuk garis dan pola yang terinspirasi dari karakteristik burung Murai.', 'Hiris pudak', 'Bunga Kenanga', 'Naga Balimbur', 'Mayang Murai', 'd', 'images/N6aRIozXoPdUi83Oz9dZp4vPh7rxFvuDw56XfEC3.jpg'),
(12, 'Motif ini terinspirasi oleh bentuk dan pola daun jeraju, yang merupakan tanaman dengan daun yang panjang dan ramping. Motif Daun Jeraju pada sasirangan Banjar umumnya ditampilkan dalam bentuk pola repetitif yang menggambarkan daun jeraju. Motif apakah ini?', 'Kalajengking', 'Bunga Kenanga', 'Naga Balimbur', 'Daun Jaruju', 'd', 'images/3U0AiZMlbSfF6dJq1KNkaig2JJzy6gcv8nvO4jyx.png'),
(13, 'Motif ini sering ditemukan pada kain sasirangan Banjar yang indah dan penuh warna. Hiris Gegatas secara harfiah dapat diartikan sebagai \"iris\" atau \"memotong\" yang menghasilkan garis-garis atau pola geometris yang teratur. Motif apa ini?', 'Hiris Pudak', 'Hiris Gegatas', 'Kulat  Karikit', 'Kambang Melati', 'b', 'images/aiePdUqDkvsp86BTzW2390xdcMx2Tv7yD5qJehWS.jpg'),
(14, 'Motif yang memiliki arti seekor naga yang berenang di suatu perairan yang dalam dan luas dan membasuh diri untuk meraih kesucian adalah makna dari motif sasirangan ...', 'Kangkung Kaumbakan', 'Ular Lidi', 'Naga Balimbur', 'Gigi Haruan', 'c', 'images/7j7V1ppZodueSjX7oLh50XQjroqWDAMGbHwf9VVe.png'),
(15, 'Motif ini memiliki makna sebagai salah satu tanda Keberasan Tuhan Yang Maha Pencipta. Motif apakah ini?', 'Hiris Pudak', 'Ular Lidi', 'Bintang', 'Bintang Bahambur', 'c', 'images/d1uSL5rsvnrZku57bOdmInQdJkQB1AhScMBGnYed.jpg'),
(16, 'Banjarmasin mempunyai kain khas dari daerahnya yang dibuat dengan menjelujur atau teknik menjahit menggunakan tangan. Apa nama kain khas tersebut?', 'Sasirangan', 'Batik', 'Songket', 'Lurik', 'a', 'images/opHospolByZWOXqHWDOeir5TYhaC0D1jUMMTvpYL.jpg'),
(21, 'Salah satu motif yang dibuat agar pembeli dari luar daerah mengetahui tentang kebudayaan banjar adalah motif ...', 'Hiris Pudak', 'Kangkung Kaumbakan', 'Rumah Banjar', 'Bunga Sasaki', 'c', 'images/iPs11G5kszpl7jZRdvXoKpsnARxDBPiY1u52N7MJ.jpg'),
(22, 'Motif sasirangan yang mengilustrasikan seekor hewan yang merayap adalah ...', 'Kalajengking', 'Bayam Raja', 'Kulat  Karikit', 'Halilipan', 'd', 'images/ksb6AVqoQt5ajRoOVLb8BMNU9okJDqFQL6jLOMTN.jpg'),
(23, 'Berikut merupakan bagian dari tahap-tahap pembuatan kain sasirangan, kecuali ...', 'Menjahit jelujur', 'Pewarnaan kain', 'Menggambar motif di atas kain menggunakan pewarna', 'Penjemuran kain dan setrika', 'c', 'images/VQHfb7Z6M8sXYpnWWKn025VaH0DSDhrrfbymFPyD.png'),
(24, 'Sasirangan memiliki bermacam-macam teknik dalam pembuatannya. Di bawah ini yang termasuk bagian dari teknik membuat sasirangan adalah ...', 'Teknik lukis dan teknik jahit', 'Teknik lukis dan teknik ikat', 'Teknik jahit dan teknik ikat', 'Teknik jahit dan teknik lukis', 'c', 'images/i3Pccqz1Sz1oENT3g80SajHnOpaciqRCcQBI6sXa.jpg'),
(25, 'Secara umum sasirangan dapat digolongkan menjadi tiga kelompok. Apa saja tida kelompok tersebut?', 'Motif lajur, motif ceplok, motif variasi', 'Motif lajur, motif dadar, motif variasi', 'Motif ceplok, motif gegatas, motif pudak', 'Motif lajur, motif ceplok, motif gegatas', 'a', 'images/mhYPTlteUEByZIZzFk4ru8WHDNf26mldfaRbEMgt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `modern_style`
--

CREATE TABLE `modern_style` (
  `id` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modern_style`
--

INSERT INTO `modern_style` (`id`, `image`, `jenis`) VALUES
(1, 'images/iSmT6y9sZ23pzBwUAoNRuBXFxFWwIzLHph1JbfAO.jpg', 'kemeja'),
(2, 'images/Jcnfep8cZMRJBam2c7yR5qTSqDkZnQQcEcTNcNyi.jpg', 'seragam'),
(4, 'images/7W00mh5H6rQgvTp3YImUH4ySQLjHdJ5U2jSaaQIj.jpg', 'dress'),
(6, 'images/f49bM0lfioR7adQX68OAgEjI4jzs7HnXSd6Vm8rj.jpg', 'blouse'),
(7, 'images/UUORtEpXajRYMofVg5W4fb2qyB9zWAe0lug8dqn3.jpg', 'seragam'),
(8, 'images/HL37qNLmOKNi2RvASQoc6UByYByfgHtJmwlKb7sC.jpg', 'tunik'),
(9, 'images/ep2Mht7cyFJiP14M4ejumfDj7BK0FqvmY8Ws55mX.jpg', 'dress'),
(10, 'images/WQgfB0AiBZiKEh3DkkNqYhsejw9hB9HY9Ksgermt.jpg', 'tunik'),
(11, 'images/1YxhLjrwbM2Dni1fb3Iwv90U2ChCogiMFzxbNST2.jpg', 'tunik'),
(13, 'images/ObRaw7s9JAH2NTkUSe0OM0kX57BiPUmvn1XU8poi.jpg', 'tunik'),
(14, 'images/UhhzkCiIDMZZF9xq9pSNsg4YF1f6GGDauqL5mrEU.jpg', 'kemeja'),
(15, 'images/8FNWxypt37vg9UYh79driMiU2zleoCrYWl1M6xBE.jpg', 'blouse'),
(17, 'images/1R59O9q0IngwUIdhnZrou7YrBDfRP2xv0Z7EOcma.jpg', 'seragam'),
(18, 'images/7uNmHTfWy6PxaW11gJzncAVtq0wuiZYldXMK88UG.jpg', 'seragam'),
(19, 'images/DjmsIPbDciPj7b2ocOYotM9A1hfj3jF1mCBIiiMf.jpg', 'blouse'),
(20, 'images/pQPHwqPnbT9dY4BoLaOWfDOL94Eyddk2tFLWNfZM.webp', 'kemeja'),
(21, 'images/e8DzuP37cdluksFZHPk2FUbqzpsASXikpEBfWcnQ.jpg', 'dress'),
(22, 'images/ZMv12eMGgZXCZL5E2Vl72pDOFpUC9ohepWwqS4vu.jpg', 'seragam');

-- --------------------------------------------------------

--
-- Table structure for table `motif_sasirangan`
--

CREATE TABLE `motif_sasirangan` (
  `id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motif_sasirangan`
--

INSERT INTO `motif_sasirangan` (`id`, `nama`, `deskripsi`, `image`) VALUES
(21, 'Hiris Pudak', 'Pudak adalah sebuah tanaman sebutan orang banjar untuk tanaman pandan. Tanaman pandan ini sering ditanam di halaman rumah suku banjar. Pandan sering digunakan untuk bahan pewangi alami atau pemberi aroma pada setiap masakan. Selain digunakan untuk pemberi aroma sedap, tanaman pandan banyak dimanfaatkan suku Banjar sebagai pewarna kue, sebagai campuran bunga rampai (bunga-bunga dalam upacara adat) ketika melaksanakan acara adat suku Banjar seperti acara pernikahan ataupun acara-acara lain. Motif sasirangan hiris pudak bermakna bahwa sebagai manusia harus bermanfaat untuk sesamanya. Hiris pudak adalah istilah bahasa Banjar yang artinya pandan yang dipotong kecil-kecil. Pandan sendiri adalah tanaman yang berbau harum. Bentuk daunnya panjang dan ramping yang memiliki banyak kegunaan. Salah stunya adalah sebagai pewarna hijau dalam membuat roti, dan menjadi karangan bunga rampai, bunga rampai sendiri adalah berbagai bunga yang dirangkai seperti bunga mawar, melati, kenanga, cempak, pandan yang kemudian dijadikan sebagai upacara adat pekawinan dalam suku Banjar. Motif hiris pudak hampir sama dengan kulat karikit dan gigi haruan, perbedaannya hanya masalah ukuran panjang garis patah-patahnya, yang mempunyai garis lebih panjang diantara kedua motif tersebut. Pandan yang dipotong kecil-kecil inilah yang menjadi ide dasar terciptanya motif hiris pudak.', 'images/Q0IIDloPxziDLiN1OnnAUKvuX3UjKXoDKYlkR5ON.jpg'),
(22, 'Bayam Raja', 'Motif \"Bayam Raja\" mungkin merujuk pada motif yang terinspirasi oleh tumbuhan bayam raja. Bayam raja (Amaranthus gangeticus) adalah sejenis tanaman daun hijau yang sering ditanam sebagai tanaman sayuran. Jika motif \"Bayam Raja\" digunakan dalam sasirangan Banjar, motif ini mungkin menggambarkan bentuk daun bayam raja atau menggunakan elemen-elemen geometris yang terinspirasi oleh daun tersebut. Pola dan warna yang digunakan dalam motif ini dapat bervariasi, tergantung pada interpretasi dan kekreativitasan pengrajin sasirangan. Makna simbolis dari motif \"Bayam Raja\" dalam sasirangan Banjar dapat bervariasi tergantung pada interpretasi masyarakat setempat dan konteks penggunaannya. Namun, secara umum, motif yang terinspirasi oleh tumbuhan sering dikaitkan dengan alam, kesuburan, dan keseimbangan.', 'images/0SfBnrnFe3ULywkxpHeOo7TUIzxyOgrwPnpGjGxg.png'),
(24, 'Ular Lidi', 'Ular lidi merupakan jenis ular yang berebntuk kecil namun memiliki kecepatan dan racun bisa mematika. Seman (2008: 17-18) berpendapat bahwa ular lidi terdapat dalam salah satu dongeng Banjar yang dianggap sebagai simbol kecerdikan. Begitupun pada motif kain sasirangan gambarnya mirip hiris pudak, tetapi berganda dua dan melengkung dengan garis vertikal dan bervariasi. Ular memang dikenal sebagai jenis reptile yang cukup cerdik dan mematikan. Melalui simbol pada kain sasirangan terdapat sikap integritas yang berhubungan dengan ular lidi. Ular lidi walaupun dengan bentuknya yang kecil, bahkan hampir tak terlihat namun memiliki kecepatan, ketepatan, kepekaan, bahkan senjata yang bisa melindungi diri ataupun mengalahkan musuhnya. Pemahaman dan pembelajaran yang dapat disampaikan pada peserta didik melalui motif ular lidi pada kain sasirangan ialah kecerdikan atau kecerdasan. Kecerdikan atau kecerdasan merupakan sikap berpikir rasional untuk menentukan langkah atau tindakan dalam menghadapi segala situasi. Marzuki (2011) menyebutkan bahwa kecerdasan merupakan kemampuan seseorang dalam melakukan sesuatu secara cermat, tepat, dan cepat. Peserta didik yang memiliki kecerdasan seperti ini tentunya dapat diandalkan untuk memberikan manfaat bagi kepentingan bersama. Melalui motif ular lidi pada kain sasirangan peserta didik dapat mempelajari kecerdasan yang diwujudkan dalam aspek, cermat, tepat dan cepat.', 'images/RRyzDzbPvvCAgD0lNGZCYhJ5OV08Q18YqQb2ktqy.jpg'),
(25, 'Gigi Haruan', 'Iwak haruan atau ikan gabus merupakan salah satu jenis ikan tawar yang banyak dijumpai hampir diseluruh sungai Banjarmasin. Iwak haruan memiliki warna hitam dan menjadi salah satu lauk favorit masyarakat Banjar. Ikan ini memiliki gigi runcing yang tajam, sehingga seman (2008: 14) menyatakan bahwa motif gigi haruan pada kain sasirangan menjadi simbol “ketajaman berpikir”. Selain pada kain sasirangan, motif gigi haruan juga terdapat pada ornament pilis rumah adat Banjar dan sering mengiasi air guci atau hiasan dinding yang dipasang ketika sedang terjadi perhelatan besar. Motif gigi haruan memuat makna sebagai ketajaman berpikir sebagai salah satu aspek dari integritas yang diharapkan dimiliki oleh peserta didik.  Ketajaman berpikir yang dimiliki oleh peserta didik diawali dengan kepekaan dan rasa ingin tahu dalam dirinya. Melalui rasa penasaran aspek kognitif anak terus berkembang dan terkait untuk menghubungkan hal satu dengan yang lain. Hasanah (2013) juga menyatakan hal serupa yaitu rasa ingin tahu merupakan sipak dan tindakan yang selalu berupaya untuk mengetahui apa yang dipelajarinya secara lebih mendalam dan meluas dalam berbagai aspek terkait. Melalui hal tersebut peserta didik akan muncul sikap teliti dan kritis terhadap suatu permasalahan.', 'images/u0OkN3uFjKMJPwayafCD00fBEIAEg986vd4PodPE.jpg'),
(26, 'Hiris Gegatas', 'Motif Hiris Gegatas merupakan salah satu motif yang digunakan dalam seni sasirangan Banjar, yang merupakan seni tenun tradisional dari Kalimantan Selatan, Indonesia. Motif ini sering ditemukan pada kain sasirangan Banjar yang indah dan penuh warna. Hiris Gegatas secara harfiah dapat diartikan sebagai \"iris\" atau \"memotong\" yang menghasilkan garis-garis atau pola geometris yang teratur. Motif ini terdiri dari garis-garis paralel yang terhubung membentuk bidang berbentuk segi empat, segi enam, atau bentuk-bentuk geometris lainnya. Biasanya, warna yang kontras digunakan untuk menciptakan efek visual yang menarik.', 'images/13zCxEwagwe2rNMlFlddfdBnl4qXw9Rl2MvTWSFI.jpg'),
(27, 'Ombak Sinapur Karang', 'Ombak merupakan peristiwa alam yang terjadi secara alami atau ulah manusia. Ombak yang terjadi secara alami disebabkan oleh angin kecang, peristiwa pasang surut, atau pergerakan dasar bumi yang membuat air bergerak sesuai sifatnya. Kemudian, ombak yang terjadi akibat ulah manusia adalah adanya pergerakan alat ransportasi yang melintas di permukaan air hingga menciptakan raik air dan membuat permukannya bergelombang. Gelombang yang cukup besar terkadang mampu menerjang karang atau bebatuan baik ditengah laut ataupun di tepi pantai. Seman (2008: 16) menyatakan bahwa motif ombak sinampur karang pada kain sasirangan bisa dikiaskan sebagai gelombang perjuangan dalam hidup manusia. Karang layaknya kekuatan dan keteguhan manusia dalam menghadapi berbagai permasalahan yang datang silih berganti seperti ombak.   Peserta didik melalui sikap kemandirian diharapkan mampu menjadi individu dan pribadi yang lebih kuat serta tangguh ketika menghadapi suatu masalah. Dengan sikap kuat dan tangguh peserta didik juga mampu mengatasi bahkan menghindari permasalahan atau kesulitan yang akan terjadi. Marzuki (2011) menjelaskan bahwa ketangguhan yakni sikap dan prilaku pantang menyerah atau tidak pernah putus asa ketika menghadapi kesulitan sehingga mampu mengatasi kesulitan tersebut dalam mencapai tujuan. Hal ini jika dapat diterapkan dan dikembangkan dengan cara yang tepat maka akan menghasilkan generasi emas bagi Negara Indonesia. Melalui motif ombak sinampur karang pada kain sasirangan peserta didik akan mengenal sikap pantang menyerah, tangguh, dan berpikir kritis.', 'images/PQbpukzZ66qiOhnAV57BJoY6T93S8BgxDRfPANOq.png'),
(30, 'Tampuk Manggis', 'Tampuk manggis ini tergambar juga pada relief sungkul tangga rumah adat Kalimantan Selatan. Tampuk manggis mempunyai 2 makna yaitu kejujuran dan bekerja keras.', 'images/Yhsn8fvAAXnTSUqW1fVfxbImLPSS5gAMUc2L7aLD.jpg'),
(31, 'Bintang', 'Bintang menjadi salah satu motif pada kain sasirangan yang memiliki keterkaitan dengan aspek religius dalam pendidikan karakter. Bintang merupakan benda alam yang terdapat di langit dan hanya akan muncul pada malam hari. Seman (2008:16) menyatakan bahwa bintang yang terdapat pada motif kain sasirangan, memiliki makna sebagai salah satu tanda Keberasan Tuhan Yang Maha Pencipta. Bintang-bintang pada kain sasirangan digambarkan dalam sudut empat, lima, tujuh, delapan dan bahkan tergambar gugusan beribu-ribu bintang di langit yang tak mampu dihitung, sebagai bintang bertabur atau bintang behambur. Pada kain sasirangan motif ini sering menjadi dasar dan dipadukan dengan motif besar yang lebih sedikit.  Meyakini keberadaan Tuhan merupakan hal yang wajib diakui oleh setiap pemeluk agama. Dengan adanya bukti-bukti kebesaran Tuhan di muka bumi ini, maka akan menambah keyakinan manusia atas keberadaan dan kekuasaan Tuhan. Melalui motif bintang pada kain sasirangan akan menambahkan nilai tauhid dalam diri peserta didik. Fatimah (2015) menyebutkan bahwa tauhid merupakan sikap mengesakan Allah dalam hal menicipta, menguasai, mengatur, dan mengikhlaskan peribadahan hanya kepada Allah. Sehingga peserta didik menyadari keberadaan dirinya di muka bumi dan senantiasa selalu bersyukur kepada Tuhan. Melalui pemahaman mengenai motif bintang pada kain sasirangan, peserta didik akan memambah keyakinan dan rasa syukur pada Allah. Sehingga munculah sikap yakin pada Allah dan senantiasa bersyukur pada Allah akan segala nikmat dan segala isi dunia yang dapat dimanfaatkan oleh manusia.', 'images/z4uFywUuU0wcARvS8WfedVD3PqYsHuM4L3BNFOgo.jpg'),
(32, 'Naga Balimbur', 'Naga Balimbur menjadi salah satu motif batik Kalimantan yang cukup dikenal. Bukan hanya karena tampilannya, tetapi juga filosofi yang terkandung pada motifnya. Banyak kalangan mengatakan bahwa kemunculan motif batik ini berawal dari sebuah cerita rakyat yang mengisahkan tentang Naga Balimbur. Tidak hanya menjadi inspirasi, cerita yang beredar juga mempengaruhi filosofi batik Naga Balimbur. Masyarakat mengatakan bahwa motif batik ini memiliki arti seekor naga yang berenang di suatu perairan yang dalam dan luas. Sedangkan kata balimbur berasal dari kata “limbur” yang memiliki makna membasuh diri untuk meraih kesucian. Dari cerita singkat tersebut dapat disimpulkan bahwa motif Naga Balimbur melambangkan kesucian. Juga, keberanian dan keperkasaan dalam menghadapi tantangan dari setiap dinamika kehidupan. Selain itu, ada pula pendapat yang mengatakan bahwa motif Naga Balimbur telah digunakan sejak zaman dulu oleh petinggi istana khususnya ksatria. Makna motif Naga Balimbur adalah suatu keadaan yang menggambarkan kegembiraan. Dimana suasana dari keadaan tersebut sangat gembira dan menyenangkan. Seperti pada filosofinya yang menceritakan tentang seekor naga yang sedang mandi di tengah sungai pada pagi hari. Motif batik yang diangkat dari sebuah kisah atau cerita rakyat tentu menjadi bentuk dari pelestarian budaya. Hal inilah yang membuat masyarakat Kalimantan membuat batik dengan motif naga balimbur. Harapan dari adanya motif ini dapat memperkenalkan budaya Kalimantan secara luas.', 'images/aAfDV05M7AGBQWgKJHoJQ8H4L4H17s73Em5fl3tt.png'),
(33, 'Daun Katu', 'Daun katu adalah tanaman yang biasanya ada di sekitar rumah mempunyai tinggi sekitar satu sampai dua meter. Mempunyai daun yang bergandengan berwarna hijau tua. Banyaknya tanaman daun katu inilah yang menjadikan terciptanya motif daun katu. Dari pengertian tersebut dapat disimpulkan bahwa motif adalah desain, pola, corak hias yang dibuat dari berbagai bentuk atau garis yang tujuannya adalah untuk menghias agar menjadi kesatuan yang utuh dan untuk memperindah. Motif yang berfungsi sebagai hiasan juga merupakan sumber informasi kebudayaan dalam wujud lambang-lambang yang mempunyai makna. Motif yang diterapkan pada setiap benda kerajinan umumnya merupakan stilisasi dari bentuk-bentuk yang ada di sekitar alam, contohnya tumbuh-tumbuhan, binatang, awan, gunung, dan sebagainya.', 'images/LsDvcH9jWgNwIeVwANLq1GWNCbX9qT1mllh9CsX2.jpg'),
(34, 'Daun Jeraju', 'Motif Daun Jeraju merupakan salah satu motif yang sering digunakan dalam seni sasirangan Banjar, seni tenun tradisional yang berasal dari Kalimantan Selatan, Indonesia. Motif ini terinspirasi oleh bentuk dan pola daun jeraju, yang merupakan tanaman dengan daun yang panjang dan ramping. Motif Daun Jeraju pada sasirangan Banjar umumnya ditampilkan dalam bentuk pola repetitif yang menggambarkan daun jeraju. Motif ini memiliki ciri khas berupa garis-garis melengkung yang mewakili urat daun dan seringkali diberi tambahan detail seperti titik-titik kecil atau bentuk geometris sederhana untuk memberikan keindahan visual pada kain.  Makna simbolis dari motif Daun Jeraju dalam sasirangan Banjar bisa bervariasi tergantung pada tradisi dan interpretasi masyarakat setempat. Namun, secara umum, motif ini sering dihubungkan dengan unsur alam, kesuburan, pertumbuhan, dan kehidupan. Daun jeraju juga memiliki konotasi positif dalam budaya Banjar, sering dianggap sebagai lambang kemakmuran, kebahagiaan, dan harapan. Sasirangan Banjar dengan motif Daun Jeraju sering digunakan dalam berbagai acara dan upacara tradisional, seperti pernikahan, khitanan, atau acara keagamaan. Kain dengan motif ini dianggap memiliki nilai estetika tinggi dan sering kali dijadikan simbol status sosial atau sebagai hadiah istimewa dalam budaya Banjar.', 'images/z7cURyIs3PbeWZBmcrU82IXeJcM2HJoStwVEWBYh.png'),
(35, 'Kembang Sasaki', 'Motif Kambang Sakaki pada sasirangan Banjar menggambarkan bunga sakaki yang merupakan bunga yang khas di daerah Kalimantan Selatan. Kambang berarti bunga atau kembang dalam bahasa Banjar, sedangkan Sakaki adalah nama tanaman yang mirip dengan bunga melati yang memiliki aroma yang harum. Bunga sakaki memiliki ciri khas kelopak bunga yang melingkar dengan pola-pola yang indah. Motif Kambang Sakaki sering ditampilkan dalam sasirangan Banjar dengan berbagai variasi warna dan ukuran. Motif ini umumnya terdiri dari pola bunga yang terulang secara berulang, menciptakan kesan keindahan dan keseimbangan pada kain sasirangan. Motif ini dapat menggunakan warna-warna cerah dan kontras untuk menonjolkan kecantikannya. Dalam konteks sasirangan Banjar, Kambang Sakaki memiliki makna simbolis yang melambangkan keindahan, kegembiraan, keanggunan, dan kehidupan yang berbunga. Bunga sakaki juga sering dihubungkan dengan kesuburan, kelimpahan, dan keberuntungan.', 'images/6FoI5Y0YuvKSwitiPDFIroNwZIPVyDKFKGQnozAC.jpg'),
(36, 'Mayang Murai', 'Motif  \"Mayang Murai\" menggambarkan burung Murai atau burung penyanyi yang terkenal dengan suara kicauannya yang indah. Motif ini bisa berupa gambar burung Murai secara realistis atau abstrak dalam bentuk garis dan pola yang terinspirasi dari karakteristik burung Murai. Motif ini mungkin mencakup bentuk-bentuk seperti sayap, ekor, atau paruh burung Murai. Motif  \"Mayang Merak\" menggambarkan burung Merak dengan keindahan bulu yang mencolok. Burung Merak sering dianggap sebagai simbol keindahan, kemewahan, dan keanggunan dalam berbagai budaya di Asia Tenggara. Motif ini umumnya menampilkan pola-pola yang melingkar atau melengkung yang meniru bentuk bulu dan motif dekoratif pada bulu burung Merak.', 'images/6lbz6G3XyR0SnTmaRB0QKVB4q6REZ41waIeFB0bv.jpg'),
(37, 'Kembang Kancang', 'Motif \"Kambang Kancang\" adalah salah satu motif yang sering digunakan dalam seni sasirangan Banjar, seni tenun tradisional dari Kalimantan Selatan, Indonesia. Motif ini memiliki ciri khas berupa pola berulang yang menyerupai bunga atau kembang yang menggantung. Secara harfiah, \"Kambang\" berarti bunga atau kembang, sedangkan \"Kancang\" berarti menggantung atau bergelantung. Motif Kambang Kancang menggambarkan kelopak bunga yang terulang secara berulang dengan pola yang melingkar dan menjuntai, menciptakan kesan seperti bunga yang menggantung atau bergelantung. Motif Kambang Kancang biasanya menampilkan garis-garis melengkung atau lengkungan yang menggambarkan kelopak bunga, dan sering kali menggunakan warna-warna cerah dan kontras untuk menonjolkan keindahan motifnya. Pola ini dapat diterapkan dalam berbagai variasi ukuran, warna, dan komposisi di kain sasirangan. Makna simbolis dari motif Kambang Kancang dalam sasirangan Banjar umumnya melambangkan keindahan, keanggunan, dan kehidupan yang berkembang. Bunga yang bergelantung juga sering dihubungkan dengan kesuburan dan harapan.', 'images/EpIf3z3hS7OwNqWqVOAeZ7OwUOepLiKcN5JgenyN.jpg'),
(38, 'Ramak Sahang', 'Motif \"Ramak Sahang\" adalah salah satu motif yang digunakan dalam seni sasirangan Banjar, seni tenun tradisional dari Kalimantan Selatan, Indonesia. Motif ini memiliki pola yang kaya dan rumit, dengan tumpukan garis-garis melintang dan zigzag yang saling berhubungan. \"Ramak\" berarti rumit atau padat, sedangkan \"Sahang\" merujuk pada susunan atau urutan. Dalam motif Ramak Sahang, garis-garis melintang dan zigzag saling terhubung dan saling melilit, membentuk pola yang padat dan rumit. Motif Ramak Sahang seringkali terdiri dari garis-garis melintang yang berulang, membentuk pola geometris yang terorganisir dengan baik. Pola ini bisa melibatkan kombinasi garis horizontal, vertikal, dan zigzag, menciptakan tampilan yang penuh dengan tekstur dan detail. Makna simbolis dari motif Ramak Sahang dalam sasirangan Banjar dapat bervariasi tergantung pada interpretasi masyarakat setempat. Namun, secara umum, motif ini dapat melambangkan keteraturan, kesatuan, dan keharmonisan. Pola yang rumit dan padat juga bisa menggambarkan kerumitan dan keindahan kehidupan. Sasirangan dengan motif Ramak Sahang seringkali dihargai karena kerumitan dan kerajinan yang terkandung dalam pembuatannya. Kain dengan motif ini sering digunakan dalam upacara adat, acara keagamaan, dan acara pernikahan untuk menunjukkan keindahan dan keanggunan tradisi Banjar.', 'images/lrdkhKapAiwhZPebvIwowWfz9TaeApbmgyJV2ine.jpg'),
(39, 'Bintang Bahambur', 'Motif \"Bintang Bahambur\" mungkin merujuk pada pola atau motif yang menyerupai bintang yang bersinar atau menyebar. Pola ini mungkin terdiri dari garis-garis atau elemen-elemen geometris yang terulang dan menciptakan tampilan yang mirip dengan bintang yang memancar. Bintang Bahambur\" dalam konteks sasirangan Banjar, secara umum, motif bintang sering dihubungkan dengan berbagai konsep dan makna seperti kecerahan, kejayaan, keseimbangan, dan spiritualitas.', 'images/qEApJRnld8IL1VRDDqIC13SqzXW7J9mTcaUBNyR4.jpg'),
(40, 'Halilipan', 'Mengilustrasikan seekor hewan merayap, motif halilipan (kelabang) memiliki cita rasa seni yang fantastik.  Pada batik ini karakter kelabang hanya berada satu ekor yang cukup besar di sisi pojok kain.  Sisanya berupa warna bias berdasar biru.', 'images/mQrwhloml36oVzJZgzNVFX8Ys7GyqrhXnam6MQxU.jpg'),
(41, 'Rumah Banjar', 'Agar pembeli dari luar daerah mengetahui tentang kebudayaan Banjar, maka rumah tradisional pun diabadikan dalam motif batik.  Barang sedetik saja melihatnya, Anda pasti akan terpukau.  Desainnya trendy, tidak terlihat jadul meskipun bertema kedaerahan.', 'images/ytFfoMTjPDRhpY1g3efeFSLASidxaZ7RhazlrChQ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Delphia Aryana', 'delphiaaryana@gmail.com', '$2y$10$McAy6l9w03mUw.TDtbT1MusNp88JfVZkUMZOFnfkjDBwAML2a/Nw.', '2023-05-08 05:23:02', '2023-05-08 05:23:02', 1),
(3, 'Nur Fitri Yanti', 'yanti@gmail.com', '$2y$10$xn9r8oY4snO7C7FWgwcTjeSm.zJWRjlxJDI2ShZNa9en6Ql6c85Nq', NULL, NULL, 0),
(11, 'M. Gymnastiar', 'agim@gmail.com', '$2y$10$jrhwQkZxVYw3aQgdjYlR7enfQTZenhKDax7HbgW3wdB8MmemOz5gC', '2023-06-13 01:30:36', '2023-06-13 01:30:36', 0),
(13, 'Maysarah', 'may@gmail.com', '$2y$10$77OHcTpklkkGxaXsCd.jN.kLEcAg.wMagUyNvHIKsUjgvZsikP8e.', '2023-06-13 03:19:18', '2023-06-13 03:19:18', 0),
(14, 'Maisya Puspita Sari', 'maisya@gmail.com', '$2y$10$fxHKD5Tm86aF7ZHGVy7YXuEEw3/i6aFuzXbh5xygkvuyrm1Fa646K', NULL, NULL, 0),
(15, 'Iif Alifah', 'iifalifah@gmail.com', '$2y$10$eGAxi0QgGiCJHeCCajTT4.o11MRUj3umlR5mGZG7rbr9x60KGyegu', '2023-06-15 21:30:41', '2023-06-15 21:30:41', 0),
(16, 'Difana Nanda Pridhasila Zein', 'nanda@gmail.com', '$2y$10$seLOkRwksCgn7jbFIUTbv.DOwn2tDruRBKqpLABElHLiPOnsRz4tC', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_poin`
--
ALTER TABLE `data_poin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `data_soal`
--
ALTER TABLE `data_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modern_style`
--
ALTER TABLE `modern_style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motif_sasirangan`
--
ALTER TABLE `motif_sasirangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_poin`
--
ALTER TABLE `data_poin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `data_soal`
--
ALTER TABLE `data_soal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `modern_style`
--
ALTER TABLE `modern_style`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `motif_sasirangan`
--
ALTER TABLE `motif_sasirangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_poin`
--
ALTER TABLE `data_poin`
  ADD CONSTRAINT `data_poin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
