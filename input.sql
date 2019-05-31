-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 05:45 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `input`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `pass`, `nama`) VALUES
(1, 'iqbalsiskom10', 'gantengkeren', 'Muhammad Iqbal, S.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kd_gejala` varchar(25) NOT NULL,
  `gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kd_gejala`, `gejala`) VALUES
('G01', 'Batuk Berdahak'),
('G02', 'Sesak Nafas'),
('G03', 'Sakit Pada Dada'),
('G04', 'Demam Tinggi'),
('G05', 'Keringat Malam'),
('G06', 'Nafsu Makan Menurun'),
('G07', 'Perokok Aktif'),
('G08', 'Sakit Kepala'),
('G09', 'Alergi Debu/Serat Kain/Bulu Binatang'),
('G10', 'Sulit Menelan'),
('G11', 'Batuk Berdahak Disertai Darah'),
('G12', 'Badan Terasa Lemah'),
('G13', 'Perasaan Tidak Enak'),
('G14', 'Demam Pada Siang dan Sore Hari'),
('G15', 'Batuk Berdahak Putih'),
('G16', 'Riwayat Penyakit Emfisema'),
('G17', 'Riwayat Penyakit Bronkitis'),
('G18', 'Sesak Nafas Disertai Mengi'),
('G19', 'Produksi Lendir Berlebihan'),
('G20', 'Bersin-Bersin di Pagi Hari'),
('G21', 'Demam (>1 Minggu)'),
('G22', 'Kesulitan Bernafas'),
('G23', 'Batuk Hilang Timbul'),
('G24', 'Panas Naik Turun'),
('G25', 'Batuk Kering'),
('G26', 'Berat Badan Menurun'),
('G27', 'Terasa Sakit Setelah Melakukan Kegiatan Fisik'),
('G28', 'Serangan Terjadi 3-4x Setahun'),
('G29', 'Mual atau Muntah');

-- --------------------------------------------------------

--
-- Table structure for table `log_diagnosis`
--

CREATE TABLE `log_diagnosis` (
  `id_log` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `kd_penyakit` varchar(25) NOT NULL,
  `nilaicf` double NOT NULL,
  `date_diagnosis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kd_penyakit` varchar(25) NOT NULL,
  `nm_penyakit` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `pencegahan` varchar(500) NOT NULL,
  `pengobatan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kd_penyakit`, `nm_penyakit`, `deskripsi`, `pencegahan`, `pengobatan`) VALUES
('P01', 'Pneumonia', 'Pneumonia adalah radang akut yang menyerang jaringan paru dan sekitarnya.  Pneumonia adalah manifestasi infeksi saluran pernapasan akut (ISPA) yang paling berat karena dapat menyebabkan kematian.', 'Pencegahan pneumonia dapat kita lakukan dengan langkah-langkah sederhana. Beberapa di antaranya adalah:\r\n1. Menjalani Vaksinasi\r\n2. Menjaga Kebersihan\r\n3. Jangan Merokok\r\n4. Hindari konsumsi minuman beralkohol secara berlebih', '1. Mengonsumsi analgesik (obat pereda sakit) seperti parasetamol atau ibuprofen untuk meredakan dan menurunkan demam.\r\n2. Berhenti merokok karena kebiasaan ini dapat memperburuk pneumonia.\r\n3. Menghindari konsumsi obat batuk '),
('P02', 'Kanker Paru-Paru', 'Kanker paru adalah kondisi ketika sel-sel jaringan di paru-paru tumbuh dengan luar biasa cepat, menyebabkan tumor terbentuk. Paru-paru Anda membantu Anda bernapas dan memberikan oksigen ke seluruh tubuh Anda. Penyebab paling umum adalah merokok, penggunaan pipa cangklong, atau cerutu. ', '1. Berhenti merokok segera\r\n2. Mengelola Nyeri\r\n3. Mengatasi Sesak Nafas\r\n4. Gaya Hidup Sehat', '1. Operasi. Dokter mengangkat jaringan kanker melalui prosedur operasi.\r\n2. Kemoterapi. Menggunakan obat-obatan khusus untuk mengecilkan atau membunuh kanker. Obat-obatan bisa berupa pil yang dapat Anda minum atau obat-obatan yang diberikan dalam pembuluh darah Anda, atau kadang-kadang keduanya.\r\n3. Terapi radiasi. Menggunakan sinar berenergi tinggi (mirip dengan sinar-X) untuk membunuh kanker.\r\n4. Terapi target. Menggunakan obat untuk memblokir pertumbuhan dan penyebaran sel kanker. '),
('P03', 'Tuberkulosis (TBC)', 'Tuberkulosis atau TBC adalah suatu penyakit infeksi yang disebabkan oleh bakteri Mycobacterium tuberculosis yang dapat menular melalui percikan dahak. ', 'Untuk mencegah TB adalah dengan menerima vaksin BCG (Bacillus Calmette-Guerin). Di Indonesia, vaksin ini termasuk dalam daftar imunisasi wajib dan diberikan sebelum bayi berusia 2 bulan.', 'Langkah pengobatan yang dibutuhkan adalah dengan mengonsumsi beberapa jenis antibiotik dalam jangka waktu tertentu.'),
('P04', 'Bronkitis', 'Bronkitis adalah suatu peradangan pada bronkus (saluran udara ke paru-paru). Penyakit ini biasanya bersifat ringan dan pada akhirnya akan sembuh sempurna. Bronkitis akut disebabkan oleh virus yang sama dengan yang menyebabkan flu atau pilek. Kasus lainnya dapat diakibatkan oleh infeksi bakteri, bahan kimia, debu, atau zat polutan lainnya yang menyebabkan iritasi saluran pernapasan.', '1. Pastikan bahwa Anda sudah cukup tidur\r\n2. Hindari menyentuh mulut, hidung, dan mata jika Anda tengah berada di antara orang-orang yang terinfeksi.\r\n3. Hindari penggunaan barang pribadi bersama dengan orang lain.\r\n4. Cuci tangan Anda selalu, apalagi ketika sedang musing hujan.\r\n5. Hindari kebiasaan merokok.\r\n6. Mengonsumsi makanan yang sehat dan menerapkan pola hidup yang sehat.\r\n7. Melakukan vaksinasi flu dan pneumonia.\r\n8. Batasi paparan polusi udara.', 'Tujuan dilakukannya pengobatan yaitu untuk membuat Anda dapat bernapas lebih mudah. Untuk dapat mendukung pengobatan, Anda sebaiknya:\r\n1. Minumlah air yang banyak;\r\n2. Bernapaslah pada kondisi udara yang hangat dan lembap;\r\n3. Konsumsilah obat batuk acetaminofen atau aspirin'),
('P05', 'Penyakit Paru Obstruktif Kronik (PPOK)', 'PPOK adalah penyakit yang ditandai oleh keterabatasan jalan napas progresif yang disebabkan oleh reaksi peradangan abnormal. Tercakup didalamnya penyakit bronkitis kronis dan emfisema, dan paling sering terjadi karena merokok.', '1. Berhenti Merokok\r\n2. Hindari Polusi Udara\r\n3. Hindari Paparan Dari Pekerjaan\r\n4. Ketahui Riwayat Keluarga\r\n5. Dapatkan Vaksin', '1. Obat-obatan : Bronkodilator: obat ini membuat Anda dapat bernapas lebih mudah dengan mengendurkan otot di paru-paru dan memperlebar saluran udara, Kombinasi bronkodilator dengan kortikosteroid inhalasi: obat jenis steroid diberikan dengan tujuan mengurangi peradangan paru\r\n2. Vaksin\r\n3. Terapi Oksigen\r\n4. Operasi'),
('P06', 'Asma', 'Asma adalah penyakit pernapasan kronis yang disebabkan oleh peradangan dan penyempitan jalur udara (bronkus). Peradangan kemudian juga mengakibatkan paru-paru memproduksi lendir secara berlebihan sehingga menyulitkan udara keluar-masuk dengan lancar.', 'Ketika asma kambuh, segera lakukan langkah-langkah berikut:\r\nTetap tenang dan langsung duduk serileks mungkin sambil coba mengatur napas perlahan. Coba tarik napas dalam-dalam dengan 10 ketukan dan hembuskan perlahan dengan hitungan yang sama. Ulangi berkali-kali sampai napas Anda jadi teratur.\r\nAnda juga bisa melonggarkan pakaian yang terlalu ketat agar bisa bernapas lebih bebas. Pakai alat bantu napas Anda, baik itu inhaler atau nebulizer. ', 'Pengobatan pencegahan asma yang paling umum adalah inhaler, obat oral, dan suntikan. Konsultasi lebih lanjut ke dokter terkait obat-obatan pencegah yang sesuai dengan kebutuhan Anda.'),
('P07', 'Emfisema', 'Emfisema adalah penyakit paru progresif yang disebabkan oleh merokok, kontaminan atmosfir, atau kekurangan protein alfa1-antiripsin yang menghambat enzim proteolitik yang merusak alveoli (kantung udara). Penyakit ini merusak kantung-kantung udara di dalam paru-paru (disebut juga dengan alveoli) dengan membuatnya membuatnya kehilangan elastisitas secara permanen.', '1. Berhenti merokok adalah pengendalian emfisema dan penyakit paru yang paling efektif. Menghindari polutan lainnya juga akan membantu agar kondisi ini tidak memburuk.\r\n2. Program rehabilitasi paru akan mengajarkan Anda cara untuk berlatih pernapasan, cara mengurangi stres, dan cara berolahraga dengan emfisema.\r\n', '1. Terapi oksigen.\r\n2. Obat-obatan untuk mengurangi peradangan (anti-inflamasi).\r\n3. Obat-obatan untuk membuka saluran udara dan mengencerkan dahak (bronkodilator).\r\n4. Antibiotik dan vaksinasi untuk mencegah infeksi.'),
('P08', 'Pneumotoraks', 'neumothoraks adalah sebuah kondisi di mana terdapat udara yang mengalir di antara paru-paru dan dinding dada. Terdapat dua tipe pneumotoraks, yakni: pneumotohraks idiopatik (terjadi secara tiba-tiba pada orang yang sehat tanpa ada riwayat pernah terkena penyakit tersebut) dan pneumothoraks sekunder (yang berasal dari suatu komplikasi yang terjadi pada paru-paru).', '1. Memeriksakan diri Anda ke dokter untuk mengawasi perkembangan dan gejala, juga kesehatan Anda secara umum\r\n2. Konsumsi obat-obatan yang diresepkan. Jangan memulai atau menghentikan konsumsi obat tanpa izin dari dokter\r\n3. Konsultasikan dengan dokter mengenai obat apa yang Anda konsumsi, baik yang diresepkan atau yang Anda beli sendiri di apotek\r\n4. Beritahu dokter apabila Anda sedang hamil', 'Pneumothoraks ringan dapat diatasi dengan hanya membiarkan paru-paru beradaptasi dengan atmosfer. Untuk pneumothoraks yang lebih parah, dokter akan memasangkan jarum suntik dan selang pada dada Anda untuk mengeluarkan udara yang ada di sana. Apabila lubang yang dibuat berukuran besar, Anda harus membiarkan selang tersebut terpasang sampai beberapa hari untuk menjaga paru-paru agar tidak mengembang, sampai lubangnya benar-benar pulih. '),
('P09', 'Efusi Pleura ', 'Efusi pleura umumnya dibagi menjadi dua, yaitu transudatif dan eksudatif. Efusi pleura transudatif disebabkan oleh meningkatnya tekanan dalam pembuluh darah atau rendahnya kadar protein dalam darah. Hal ini mengakibatkan cairan merembes ke lapisan pleura. Sedangkan efusi pelura eksudatif disebabkan oleh peradangan, cedera pada paru-paru, tumor, dan penyumbatan pembuluh darah atau pembuluh getah bening.', 'Pencegahan dan pengobatan dapat ditentukan setelah mengetahui penyebab efusi pleura. Pemeriksaan itu dapat termasuk tes darah, rontgen dan pemeriksaan radiologi lain. Setiap penyebab yang berbeda memiliki cara penanganan yang berbeda walaupun prinsipnya sama untuk mencegah efusi pleura kembali, contohnya:\r\n1. infeksi penanganan dengan antibiotik\r\n2. gagal jantung dengan obat diuretik\r\n3. cedera dapat dengan operasi\r\n4. tumor dengan kemoterapi\r\ndan lainnya', 'Karena efusi pleura timbul sebagai komplikasi dari penyakit-penyakit lain, maka pengobatan yang harus dilakukan pun adalah dengan cara menyembuhkan kondisi-kondisi yang menyebabkannya. Contoh yang bisa diambil di sini adalah pengobatan kanker dengan radioterapi dan kemoterapi, atau pengobatan pneumonia dengan antibiotik.');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `kd_penyakit` varchar(25) NOT NULL,
  `kd_gejala` varchar(25) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`kd_penyakit`, `kd_gejala`, `mb`, `md`) VALUES
('P01', 'G01', 1, 0.2),
('P01', 'G02', 0.8, 0.1),
('P01', 'G03', 0.7, 0.1),
('P01', 'G04', 0.8, 0.3),
('P01', 'G29', 0.8, 0.1),
('P02', 'G01', 1, 0.2),
('P02', 'G02', 0.9, 0.1),
('P02', 'G05', 0.8, 0.1),
('P02', 'G06', 0.6, 0),
('P02', 'G07', 0.9, 0.5),
('P02', 'G08', 0.8, 0.4),
('P02', 'G10', 0, 0),
('P02', 'G21', 0, 0),
('P02', 'G23', 0, 0),
('P02', 'G24', 0, 0),
('P02', 'G26', 0, 0),
('P03', 'G01', 0, 0),
('P03', 'G02', 0, 0),
('P03', 'G06', 0, 0),
('P03', 'G11', 0, 0),
('P03', 'G12', 0, 0),
('P03', 'G13', 0, 0),
('P03', 'G14', 0, 0),
('P03', 'G26', 0, 0),
('P04', 'G01', 0, 0),
('P04', 'G02', 0, 0),
('P04', 'G05', 0, 0),
('P04', 'G07', 0, 0),
('P04', 'G09', 0, 0),
('P04', 'G12', 0, 0),
('P04', 'G24', 0, 0),
('P05', 'G01', 0, 0),
('P05', 'G02', 0, 0),
('P05', 'G07', 0, 0),
('P05', 'G16', 0, 0),
('P05', 'G17', 0, 0),
('P05', 'G18', 0, 0),
('P06', 'G02', 0, 0),
('P06', 'G03', 0, 0),
('P06', 'G18', 0, 0),
('P06', 'G19', 0, 0),
('P06', 'G20', 0, 0),
('P06', 'G28', 0, 0),
('P07', 'G02', 0, 0),
('P07', 'G06', 0, 0),
('P07', 'G08', 0, 0),
('P07', 'G10', 0, 0),
('P07', 'G15', 0, 0),
('P07', 'G21', 0, 0),
('P07', 'G26', 0, 0),
('P08', 'G01', 0, 0),
('P08', 'G02', 0, 0),
('P08', 'G18', 0, 0),
('P08', 'G27', 0, 0),
('P09', 'G02', 0, 0),
('P09', 'G03', 0, 0),
('P09', 'G04', 0, 0),
('P09', 'G22', 0, 0),
('P09', 'G25', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelamin` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indexes for table `log_diagnosis`
--
ALTER TABLE `log_diagnosis`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`kd_penyakit`,`kd_gejala`),
  ADD KEY `kd_penyakit` (`kd_penyakit`),
  ADD KEY `kd_gejala` (`kd_gejala`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_diagnosis`
--
ALTER TABLE `log_diagnosis`
  MODIFY `id_log` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `relasi`
--
ALTER TABLE `relasi`
  ADD CONSTRAINT `relasi_ibfk_1` FOREIGN KEY (`kd_penyakit`) REFERENCES `penyakit` (`kd_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_ibfk_2` FOREIGN KEY (`kd_gejala`) REFERENCES `gejala` (`kd_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
