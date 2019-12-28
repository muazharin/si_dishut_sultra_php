-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 09:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishut_sultra`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_posting` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_posting`, `email`, `konten`) VALUES
(1, 12, 'alfanmuazharin@gmail.com', 'qwe'),
(2, 12, 'muazharin@gmail.com', 'Infonya bermanfaat'),
(3, 10, 'nurauliyah.na@gmaill.com', 'asd'),
(4, 11, 'maulidkude@gmail.com', 'xczzxc'),
(5, 9, 'budidharmawanp@gmail.com', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `kph`
--

CREATE TABLE `kph` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(17) NOT NULL,
  `pangkat_gol` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `luas_wilayah` double NOT NULL,
  `potensi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kph`
--

INSERT INTO `kph` (`id`, `foto`, `no`, `nama`, `nip`, `pangkat_gol`, `jabatan`, `lokasi`, `luas_wilayah`, `potensi`) VALUES
(1, '10032018163731default-person.jpg', 1, 'Ir. Ahmad Safiuddin', '19640402719980310', 'Pembina, IV/a', 'Kepala UPTD KPH Unit I Kapontori', 'Kab. Buton', 14047.49, 'Belum Tertera'),
(2, '11032018222527user1-128x128.jpg', 2, 'Indra Warsyadi, SP., M.Si', '19740802200003100', 'Pembina, IV/a', 'Kepala UPTD KPH Unit II Lasalimu', 'Kab. Buton', 48462.49, 'Belum Tertera'),
(3, '11032018222540user2-160x160.jpg', 3, 'Lamberi, S.Hut., M.Si', '19711231200003103', 'Pembina, IV/a', 'Kepala UPTD KPH Unit III Lakompa', 'Kab. Buton Selatan', 28720.21, 'Belum Tertera'),
(4, '11032018222553user8-128x128.jpg', 4, 'La Jakiy', '19631231198403108', 'Penata,  III/c', 'Kepala UPTD KPH Unit IV Katondaki', 'Kab. Buton Tengah', 15674.59, 'Belum Tertera'),
(5, '11032018222605user6-128x128.jpg', 5, 'La Ode Rahmat Salim, S.Hut.', '19730617200003100', 'Pembina, IV/a', 'Kepala UPTD KPH Unit V Wakonti', 'Kota Bau-Bau', 12109.54, 'Belum Tertera'),
(6, '11032018223357default-person.jpg', 6, 'Unding, S.Hut., M.Si', '19761218199703100', 'Penata Tingkat I,  III/d', 'Kepala UPTD KPH Unit VI Pulau Muna', 'Kab. Muna', 73814.73, 'Belum Tertera'),
(7, '11032018224059default-person.jpg', 7, 'Eman, SE, M.Si', '19660415199890310', 'Pembina, IV/a', 'Kepala UPTD KPH Unit VII Peropaea', 'Kab. Buton Utara', 17725.36, 'Belum Tertera'),
(8, '16042018175938muaz_alfan.jpg', 8, 'Hamlidin, S.Hut.', '19680202200003101', 'Penata Tingkat I,  III/d', 'Kepala UPTD KPH Unit VIII Gantara', 'sultra', 123, 'Belum tertera');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content_pesan` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_lengkap`, `no_hp`, `email`, `content_pesan`, `status`) VALUES
(4, 'Adnan Hidayat', '08xxxxxx', 'adnanhidayat@gmail.com', 'Saya rasa website ini sudah sangat bagus. Tinggal content nya saja yang perlu dijaga dan ditingkatkan.', 'read'),
(5, 'Tanty', '08xxxxxx', 'tanty@gmail.com', 'Kalo menurut saya, tampilan dari website ini masih perlu di kembangkan lagi. Supaya para pembaca merasa tertarik untuk selalu mengunjungi website ini. Sekian.', 'read'),
(6, 'Nur Aulliyah', '08xxxxx', 'nuraulliyah@gmail.com', 'Ya belum lah~', 'read'),
(7, 'Agustina Rahman', '08xxxxxx', 'agustinarahman@gmail.com', 'tidak install semua', 'read'),
(8, 'ilo kinzano', '082393545622', 'mufty.roy@gmail.com', 'bagus untk informasi bidang kehutanan indonesia\r\n', 'read'),
(9, 'Muazharin Alfan', '082243309590', 'alfanmuazharin@gmail.com', 'ini website yg luar biasa utk ukuran instansi pemerintahan (y)', 'read'),
(10, 'Ragil Manggalaning Yudhanto', '082311463010', 'ragilmanggalanin42@gmail.com', 'Bagus.\r\nItu ji. (y)', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id_posting` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `posted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id_posting`, `judul`, `content`, `foto`, `waktu`, `posted`) VALUES
(5, '674 Pegawai Dishut Kabupaten Pindah ke Provinsi', '<p>Sebanyak 674 pegawai ngeri sipil (PNS) dinas kehutanan (Dishut) kabupaten/kota saat ini sudah melengkapi berkas untuk pindah di Dishut Pemerintah Provinsi (Pemprov) Sulawesi Tenggara (Sultra). Selain itu terdapat beberapa lagi pegawai, termasuk penyuluh kehutanan yang sedang menyusun berkas perpindahan.</p>\r\n\r\n<p>Kepala Dishut Sultra Rusbandriyo mengatakan untuk data pastinya ada Badan Kepegawaian Daerah (BKD) Sultra. Menganai gaji sudah dianggarkan Pemprov di Badan Pengelola Keuangan dan Aset Daerah melalui Anggaran Pendapatan dan Belanja Daerah (APBD) 2017.</p>\r\n\r\n<p>&ldquo;Untuk anggaran operasionalnya kita desain masuk dalam wilayah Kesatuan Pengelolaan Hutan (KPH) yang kita rencanakan dalam bentuk UPTD (Unit Pelaksana Teknis Dinas) Dinas Kehutanan,&rdquo; kata Rusbandriyo di Kendari, Senin (19/12/2016).</p>\r\n\r\n<p>Dana Alokasi Khusus (DAK) yang sebelumnya mengalir ke Dishut kabupaten/kota tak serta merta juga pindah ke provinsi. Berdasarkan kebijakan nasional, Sultra tidak masuk dalam 12 Daerah Aliran Sungai (DAS) prioritas, sehingga DAK masuk ke Dinas Pekerjaan Umum (PU) bagian pengairan untuk merehabilitasi DAS.</p>\r\n\r\n<p>Lanjut Rusbandriyo, sebelum masuknya pegawai dari kabupaten kota tersebut, PNS di Dishut Sultra hanya sekira 177. Dengan tambahan 674 dan beberapa pegawai dan penyuluh maka akan mencapai 8 ratus lebih.</p>\r\n', '26022018152804pegawai_ilustrasi.jpg', '2018-04-16 16:53:26', 'zharin'),
(6, 'Rehabilitasi Kawasan Hutan, Dishut Sultra Gelar Penanaman Pohon', '<p>Dinas Kehutanan Provinsi Sulawesi Tenggara, bersama Kodim 1417 Kendari melakukan penanaman pohon di Kampung Baru, Kelurahan Puunggaloba, Kecamatan Kendari Barat, Kamis (18/1/2018).</p>\r\n\r\n<p>Masyarakat Kampung Baru juga terlibat langsung, dan tampak antusias mengikuti penanaman pohon bertajuk &lsquo;merehabilitasi hutan sebagai kawasan lindung&rsquo; ini. Dengan adanya kegiatan tersebut diharapkan masayarakat ikut serta berperan dalam menjaga kelestarian hutan.</p>\r\n\r\n<p>&ldquo;Kegiatan ini bertujuan untuk merehabilitasi lokasi-lokasi atau lahan yang masih dalam kondisi kosong, supaya berfungsi secara optimal sebagai kawasan pelestarian alam,&rdquo; ujar Kepala Dinas Kehutanan Sultra Rusbandrio.</p>\r\n\r\n<p>Dalam kegiatan rehabilitasi hutan ini, Dinas Kehutanan Sultra menanam tak kurang dari 300 bibit pohon, seperti kayu trembesi dan lainnya.</p>\r\n\r\n<p>Lanjut menurut Rusbandrio, pelestarian kawasan hutan ini akan terus dilakukan secara bertahap. &ldquo;Dalam waktu dekat ini kami akan melakukan kegiatan yang sama, hanya tempatnya kami belum tentukan,&rdquo; imbuhnya.</p>\r\n', '26022018152932rehabilitasi.jpg', '2018-04-16 16:53:22', 'zharin'),
(7, 'Jaringan Listrik akan Diputus , Dishut Sultra Minta Warga Tinggalkan Tahura', '<p>Masyarakat Kelurahan Punggaloba yang mendiami kawasan Taman Hutan Raya (Tahura) Nipanipa kembali didesak untuk meninggalkan hutan konservasi itu. Surat perintah pengosongan sudah dilayangkan oleh Dinas Kehutanan (Dishut) Provinsi&nbsp;<a href=\"http://kendaripos.co.id/category/index/sulawesi-tenggara/\" target=\"_blank\">Sultra</a>&nbsp;ditujukan kepada 221 KK melalui lurah setempat.</p>\r\n\r\n<p>Meski tak memberikan batas waktu, namun pemerintah meminta proses pindah disegerakan. Sebab, dalam waktu dekat jaringan listrik di lokasi yang populer disebut &ldquo;kampung baru&rdquo; itu akan segera diputus.</p>\r\n\r\n<p>Kepala Dinas Kehutanan&nbsp;<a href=\"http://kendaripos.co.id/category/index/sulawesi-tenggara/\" target=\"_blank\">Sultra</a>, Ir. Subandriyo membenarkan hal itu. Kata dia, pemerintah ingin secepatnya masyarakat meninggalkan lokasi itu. Sebab, tuntutan masyarakat untuk disediakan hunian baru sudah dipenuhi. Kawasan perumahan Purirano sudah siap ditempati sejak akhir tahun lalu.</p>\r\n\r\n<p>&ldquo;Tim terpadu sudah berupaya untuk mengajak warga secepatnya pindah. Bahkan sudah ada surat dari gubernur beberapa waktu lalu supaya listrik disana ditarik. Sebab sejak awal, pemerintah hanya memberikan izin pemasangan untuk sementara saja saat itu,&rdquo; ujar Subandriyo, Rabu (21/2).</p>\r\n\r\n<p>Dia mengaku cukup memahami warga yang menolak untuk pindah. Sebab kawasan itu dihuni sejak tahun 1991. Tetapi menurutnya, masyarakat juga harus paham jika kawasan itu adalah hutan lindung yang tidak bisa dialihfungsikan menjadi hutan produksi. &ldquo;Kita tidak bisa berbuat banyak kalau masyarakat terus menolak. Memang tempat itu sudah dilarang keras ada aktivitas disana, karena masuk hutan konservasi,&rdquo; tambah Subandriyo.</p>\r\n\r\n<p>Lebih lanjut, Subandriyo menegaskan pemerintah tidak ingin melibatkan aparat untuk mendesak warga pindah. Akan lebih baik kata dia, warga berinisiatif pindah di kawasan relokasi yang sudah siap huni. &ldquo;Saya tidak mau komentari soal rumahnya, kepemilikannya, yang jelas kita ada tim terpadu, dan kita harus kosongkan itu,&rdquo; tandasnya.</p>\r\n', '26022018153138Warga-Tahura-3.jpg', '2018-04-16 16:53:18', 'zharin'),
(8, 'Mobil Dirusak, Petugas Patroli Dishut Sultra Nyaris Tewas Dikeroyok Perambah Hutan', '<p>Upaya penggerebekan pelaku perambahan Hutan Lindung (HL) di Desa Laleko Kecamatan Batu Putih Kabupaten Kolaka Utara (Kolut) oleh Tim Dinas Lingkungan Hidup (DLH) dan Dinas Kehutanan (Dishut)&nbsp;<a href=\"http://kendaripos.co.id/category/index/sulawesi-tenggara/\" target=\"_blank\">Sulawesi Tenggara</a>&nbsp;(Sultra) berujung penganiayaan. Seorang petugas Dishut Sultra nyaris tewas dikeroyok pelaku ilegal loging. Tidak hanya itu, kendaraan mereka dirusak, kaca mobil pecah berhamburan.</p>\r\n\r\n<p>Insiden ini berlangsung Kamis (2/11/2017) sekira pukul 20.00 Wita malam, ketika instansi tersebut melakukan patroli gabungan di zona hutan lindung Kolut. Saat menyisir wilayah tersebut, mereka menemukan satu unit truk merah yang sedang melakukan pengangkutan kayu hasil perambahan. Karena tak memiliki dokumen lengkap maka dilakukan penyitaan sebagai barang bukti (BB).</p>\r\n\r\n<p>Kapolres Kolut, AKBP Bambang Satriawan saat dikonfirmasi&nbsp;<a href=\"http://kendaripos.co.id/\" target=\"_blank\">Kendari Pos</a>&nbsp;Jumat (3/11/2017) membenarkan kejadian itu. Dijelaskan, pelaku yang mencapai puluhan orang dengan membawa sajam melakukan penghadangan terhadap petugas patroli saat bertolak meninggalkan lokasi membawa BB. Tepatnya di jalan Trans Sulawesi Desa Lelewawo, mobil Toyota Avanza merah maroon dengan nomor polisi (nopol) DT 1943 BE yang ditumpangi beberapa petugas Dishut dikepung dan dirusak hingga kaca jebol. &ldquo;Mereka (petugas) kemudian mengadu ke rumah kades setempat,&rdquo; ucap.</p>\r\n\r\n<p>Bukannya merasa aman karena telah melapor di rumah Kades Lelewawo Kata Kapolres, para pelaku yang telah diketahui identitasnya<br />\r\nmendatangi salah satu petugas bernama Herawan kemudian melakukan penganiayan hingga korban terkapar ke lantai. &ldquo;Korban luka lalu bengkak pipi dan punggung setelah dikeroyok diduga lebih dari dua orang berdasarkan keterangan saksi,&rdquo; ungkapnya.</p>\r\n', '26022018153220dikeroyok.jpg', '2018-04-16 16:53:14', 'zharin'),
(9, 'Dishut Sultra Siapkan Bibit Tanaman Hutan Gratis', '<p>Kendari, Antara Sultra - Pemerintah Provinsi Sulawesi Tenggara (Sultra), menyiapkan bibit secara gratis bagi siapa saja yang ingin melakukan penanaman pohon untuk menghijaukan hutan yang kritis.<br />\r\n<br />\r\n&quot;Kami siapkan bibit secara gratis melalui benih bibit milik Dinas Kehutanan, kalau ada masyarakat atau pun LSM yang ingin melakukan kegiatan penanaman pohon kami siapkan,&quot; kata kepala Dinas Kehutanan Sultra, Rusbandriyo, di Kendari, Minggu.<br />\r\n<br />\r\nIa mengatakan, sebagian besar lahan kritis di wilayah Sultra merupakan tanah milik warga setempat sehingga pihaknya terus menyadarkan warga untuk tidak membiarkan lahannya tidak ditanami.<br />\r\n<br />\r\n&quot;Dalam setiap kesempatan, kami mengimbau kepada warga agar tidak membiarkan lahannya tidak ditanami, Kami juga merencanakan mereboisasi sebagian lahan kritis tersebut,&quot; katanya.<br />\r\n<br />\r\nMenurut Rusbandriyo, upaya penghijauan atas lahan kritis yang dilakukan pemerintah tidak bisa dilakukan secara sekaligus, akan tetapi harus bertahap.<br />\r\n<br />\r\nUpaya meminimalisasi lahan kritis yakni melalui kegiatan penanaman bibit pohon yang merupakan rangkaian program pemerintah pusat yang telah dicanangkan selama ini dengan melibatkan sejumlah organisasi penggiat lingkungan hidup.<br />\r\n<br />\r\n&quot;Kami memiliki anggaran untuk reboisasi, tetapi hanya sifatnya pengayaan artinya melihat spot-spot hutan yang sudah kurang pohonnya kami tambah tanamannya,&quot; katanya.<br />\r\n<br />\r\n&quot;Secara keseluruhan luas hutan di Sultra mencapai 3,68 juta hektare yang tersebar di 17 kabupaten/kota. Dari data itu yang sangat kritis sekitar 269 ribu haktere,&quot; katanya.<br />\r\n<br />\r\nDijelaskan, tingkat kekritisan lahan hutan terdiri dari tidak kritis, potensial kritis, agar kritis, kritis dan sangat kritis.</p>\r\n', '26022018153427bibit.jpg', '2018-04-16 16:53:09', 'zharin'),
(10, 'Aktivis Lingkungan Kecam, Atas Tindakan Dishut Sultra Yang Tak Transparan', '<p>Dinas Kehutanan (Dishut) Provinsi Sulawesi Tenggara (Sultra) tidak transparan dalam memberikan informasi kepada publik. Terkait hasil temuan tim operasi pengamanan Hutan yang melibatkan Kesatuan pengamanan Hutan Produksi (KPHP) Unit XIX BMW Sejuk Konut, kepolisian, Polisi militer (Pom) dan Gakum, yang turun beberapa Waktu lalu, di desa Waturambaha, kecamatan Lasolo Kepulauan, Kabupaten Konawe Utara.</p>\r\n\r\n<p>Wartawan SULTRALINE.ID bersama awak media lain mencoba mempertanyakan langsung kepada Kepala Dishut Sultra hasil dari operasi pengamanan Hutan tersebut, namun tak dapat ditemui dan hanya diwakili Kepala bidang perlindungan hutan dan KSdae Yasir Syam.</p>\r\n\r\n<p>Menurut Yasir Syam, tim operasi dibentuk atas aduan KPHP unit XIX BMW sejuk Konut bahwa terdapat ada Perusahaan yang tidak memiliki izin pinjam pakai kawasan hutan. Maka dibentuklah tim gabungan yang melibatkan Kepolisian resort (Polres) Konawe, Detasemen Polisi Militer (Danpom) Sultra.</p>\r\n\r\n<p>&ldquo;Tim operasi gabungan itu memang atas perintah langsung kepala Dinas untuk melakukan operasi dengan melibatkan berbagai instansi dari Kepolisian, Denpom, dan Gamuk KLHK, &ldquo;ujarnya saat ditemui di ruang kerjanya, Rabu (20/12/2017)</p>\r\n\r\n<p>Ditanyai hasil dari operasi tersebut, pihaknya hanya menemukan satu perusahaan yang melanggar yakni PT Sultra Jembatan Mas (SJM). Padahal jumlah perusahaan tambang dan sawit terdapat ratusan perusahaan yang beroperasi di Konut. Ini yang menjadi pertanyaan kenapa cuma satu. &ldquo;Dalam operasi tersebut kami hanya menemukan PT SJM yang melanggar karena melakukan penambangan tanpa izin pinjam pakai kawasan hutan, &rdquo; katanya</p>\r\n\r\n<p>&ldquo;Langsung kita hentikan aktivitas penambangannya, &ldquo;sambung Yasir Syam.</p>\r\n\r\n<p>Namun saat dimintai hasil temuan, Ia tidak mau memperlihatkan. &ldquo;Ada sama Kepala Dinas dan ini akan kami bawah ke kementerian &rdquo; ucapnya</p>\r\n\r\n<p>Ia berdalih dengan menjelaskan bahwa tim operasi terbagi lagi ada operasi rutin hanya dilakukan tenaga keamanan Kehutanan, operasi fungsional yang hanya melibatkan di internal Kehutanan, operasi gabungan dengan melibatkan Kehutanan kepolisian Polres Konawe dan Denpom ada dua orang gakum KLHK.</p>\r\n\r\n<p>&ldquo;Tergantung situasi dan aduan yang masuk, sehingga itu yang menjadi landasan kami lakukan operasi pengamanan hutan, &rdquo; katanya</p>\r\n\r\n<p>Namun semestinya bukan itu yang dimaksud, tapi harus memberikan hasil laporan secara tertulis bukan hanya menjelaskan. Apalagi kata Yasir Syam akan membawa hasil temuan ke Kementerian Lingkungan Hidup dan Kehutanan. Dengan melampirkan hasil temuan dan memperlihatkan ke publik.</p>\r\n\r\n<p>Sementara ditemui di tempat terpisah koordinator Lsm Perkumpulan Hijau Sultra, indra Mandala, mengatakan jika operasi tim kehutanan tidak transparan dan tidak di buka ke publik. Pihaknya akan melaporkan ke Komisi Informasi Publik (KIP) pusat, Ombudsman RI.</p>\r\n\r\n<p>&ldquo;Janganlah kita main main dengan hutan, lihat saja banyak kepala daerah masul bui karena hutan,&rdquo; kecamnya</p>\r\n\r\n<p>&ldquo;karenakan operasi tim kehutanan itu menggunakan uang daerah. Artinya publik wajib tau apa hasil dari kegiatan tim operasi, enak saja pakai uang rakyat tapi tidak mau ditau apa yang mereka kerjakan,&rdquo; tuturnya, Rabu (20/12/2017)</p>\r\n\r\n<p>Tidak hanya itu, Lanjut Indra, mencium ada aroma yang tidak sedap, jika publik tidak mendapatkan akses informasi dari tim kehutanan.</p>\r\n\r\n<p>&ldquo;Kadis kehutanan harus bertanggung jawab dengan cara-cara yang anti kebebasan informasi, kami akan laporkan masalah ini ke kementerian Lingkungan hidup dan Kehutanan kalau perlu ke KPK, &rdquo; kecamnya</p>\r\n\r\n<p>Sementara menurut Direktur Walhi Sultra, Kisran Makati saat dihubungi melalui telepon selulernya, mempertanyakan kenapa hanya ada satu perusahaan yang bermasalah dan di periksa tim operasi.</p>\r\n\r\n<p>&ldquo;Kami mendesak kepala dinas kehutanan untuk transparansi dan membuka hasil temuan tim operasi ,jika tidak di lakukan walhi mencium ada aroma yang tidak benar, &rdquo; geramnya</p>\r\n\r\n<p>Untuk diketahui sebelumnya ada pemberitaan di salah satu media cetak dengan judul Patroli Pengamanan Hutan melibatkan PM terbitan 9 Desember 2017.</p>\r\n', '26022018153626yasir_syam.jpeg', '2018-04-16 16:53:05', 'zharin'),
(11, 'Bibit Gratis di Dishut Sultra', '<p>Pemerintah Provinsi&nbsp;Sulawesi Tenggara (Sultra), menyiapkan bibit secara gratis bagi siapa saja yang ingin melakukan penanaman pohon untuk menghijaukan hutan yang kritis.</p>\r\n\r\n<p>&ldquo;Kami siapkan bibit secara gratis melalui benih bibit milik Dinas Kehutanan, kalau ada masyarakat atau pun LSM yang ingin melakukan kegiatan penanaman pohon kami siapkan,&rdquo; kata kepala Dinas Kehutanan Sultra, Rusbandriyo, di Kendari, Minggu.</p>\r\n\r\n<p>Ia mengatakan, sebagian besar lahan kritis di wilayah Sultra merupakan tanah milik warga setempat sehingga pihaknya terus menyadarkan warga untuk tidak membiarkan lahannya tidak ditanami.</p>\r\n\r\n<p>&ldquo;Dalam setiap kesempatan, kami mengimbau kepada warga agar tidak membiarkan lahannya tidak ditanami, Kami juga merencanakan mereboisasi sebagian lahan kritis tersebut,&rdquo; katanya.</p>\r\n\r\n<p>Menurut Rusbandriyo, upaya penghijauan atas lahan kritis yang dilakukan pemerintah tidak bisa dilakukan secara sekaligus, akan tetapi harus bertahap.</p>\r\n\r\n<p>Upaya meminimalisasi lahan kritis yakni melalui kegiatan penanaman bibit pohon yang merupakan rangkaian program pemerintah pusat yang telah dicanangkan selama ini dengan melibatkan sejumlah organisasi penggiat lingkungan hidup.</p>\r\n\r\n<p>&ldquo;Kami memiliki anggaran untuk reboisasi, tetapi hanya sifatnya pengayaan artinya melihat spot-spot hutan yang sudah kurang pohonnya kami tambah tanamannya,&rdquo; katanya.</p>\r\n\r\n<p>&ldquo;Secara keseluruhan luas hutan di Sultra mencapai 3,68 juta hektare yang tersebar di 17 kabupaten/kota. Dari data itu yang sangat kritis sekitar 269 ribu haktere,&rdquo; katanya.</p>\r\n\r\n<p>Dijelaskan, tingkat kekritisan lahan hutan terdiri dari tidak kritis, potensial kritis, agar kritis, kritis dan sangat kritis.&nbsp;</p>\r\n', '27022018102126bibitok.jpg', '2018-04-16 16:53:01', 'zharin'),
(12, 'Peringati Hari Bakti Rimbawan, Dishut Sultra Isi dengan Donor Darah', '<p>Dinas Kehutanan Provinsi Sulawesi Tenggara (Sultra) menggelar aksi donor darah, Kamis (16/3). Kegiatan ini salah satu sumbangsih dalam memperingati Hari Bakti Rimbawan ke-34 yang jatuh tiap 16 Maret.</p>\r\n\r\n<p>Donor darah diikuti ratusan pegawai instansi tersebut.</p>\r\n\r\n<p>Kepala Dinas (Kadis) Kehuatan Sultra Rusbandrio mengatakan, kegiatan ini dilakukan sebagai wujud kepedulian terhadap sesama.</p>\r\n\r\n<p>&ldquo;Mengingat sekarang ini sangatlah tidak mudah bagi Palang Merah Indonesia (PMI) Sultra untuk mencari stok darah,&rdquo; ujarnya.</p>\r\n\r\n<p>Dalam kerangka membantu PMI Sultra, kata dia, pihaknya mengadakan donor darah.</p>\r\n\r\n<p>&ldquo;Selain aksi donor darah, kami juga akan melaksanakan aksi penanaman pohon dalam waktu dekat ini,&rdquo; ungkapnya.</p>\r\n\r\n<p>Jenis pohon yang akan ditanam antara lain trambesi.</p>\r\n\r\n<p>Namun sebelumnya, jenis pohon yang akan ditanam tersebut terlebih dahulu akan disesuaikan dengan struktur wilayahnya.</p>\r\n\r\n<p>&ldquo;Terkait dengan struktur wilayah ini, saat kami sedang melakukan koordinasi dengan Pemerintah Kota (Pemkot) Kendari, berkait jalan-jalan mana yang perlu dilakukan penanaman pohon,&rdquo; ucapnya.</p>\r\n', '27022018102645donor.jpg', '2018-04-16 16:52:56', 'zharin');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`) VALUES
(2, 'zharin', '3a492c0b90b1637377810ff5f02fa3e0'),
(6, 'mufti', 'dd6a160efe63a6b04244b2bbad757977');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `video_link` varchar(200) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `posted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul_video`, `keterangan`, `video_link`, `waktu`, `posted`) VALUES
(3, 'Tadabbur Quran Juz 30 Full - Abu Usamah - Best Quran Recitation', 'Juz 30', 'v9n878qwRFs', '2018-05-17 06:16:29', 'mufti'),
(4, 'Juz 30', 'Muzammil Hasballah Juz 30 Full', 'Zv18GEpMdXs', '2018-05-17 06:35:28', 'mufti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_pesan` (`id_posting`);

--
-- Indexes for table `kph`
--
ALTER TABLE `kph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id_posting`),
  ADD KEY `posted` (`posted`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `posted` (`posted`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kph`
--
ALTER TABLE `kph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id_posting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_posting`) REFERENCES `postingan` (`id_posting`);

--
-- Constraints for table `postingan`
--
ALTER TABLE `postingan`
  ADD CONSTRAINT `postingan_ibfk_1` FOREIGN KEY (`posted`) REFERENCES `user_admin` (`username`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`posted`) REFERENCES `user_admin` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
