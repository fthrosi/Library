-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2023 pada 09.14
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
-- Database: `e-perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `kode_buku` bigint(20) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `stok_buku` int(11) NOT NULL,
  `foto_buku` text NOT NULL,
  `rak` int(11) NOT NULL,
  `jumlah_dipinjam` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_buku`, `nama_buku`, `penerbit`, `penulis`, `sinopsis`, `stok_buku`, `foto_buku`, `rak`, `jumlah_dipinjam`, `created_at`, `updated_at`) VALUES
(1, 21071101, 'Bukan Cinderella', 'Gramedia', 'Dheti Azmi', 'Novel ini bukanlah kisah Cinderella yang kehilangan sepatu kaca, ketika sang pangeran menjemput sang putri dan memberikan sebelah sepatu yang tertinggal di pesta dansa. Namun, ini kisah Amora yang kehilangan sebelah sepatu Converses barunya karena tertukar dengan milik orang lain. Namanya Amora Olivia, cewek biasa yang tengah bahagia karena baru saja membeli sepatu baru dengan uang yang susah payah ia tabung sebulan ini. Dan kini sebelah sepatu kebanggaannya itu harus tertukar dengan sebelah sepatu butu yang ukurannya lebih besar dari sepatu miliknya. Sumpah serapah Amora keluarkan saat mencari sebelah sepatunya, bahkan Amora nekat berteriak di koridor sekolah hanya untuk sebelah sepatu. Namun, bukannya mendapatkan kembali sebelah sepatunya, Amora justru harus mendekam di ruang BK karena sudah berurusan dengan sosok Adam Wijaya, sang ketua OSIS yang dikenal angkuh. Dan, drama oun dimulai sesudahnya. Hingga menyeret Amora dan teman-teman sekelasnya masuk ke permasalahan melawan Adam Wijaya beserta antek-anteknya.', 10, 'bukan cinderella.jpg', 1, NULL, '2023-12-20 13:52:19', '2023-12-20 13:52:19'),
(2, 21071102, 'Cinta Brotosaurus', 'Gagas Media', 'Raditya Dika', 'Resensi novel Cinta Brontosaurus ini menceritakan tentang perjalanan cinta Dika yang penuh lika-liku. Novel ini menceritakan mantan-mantannya dengan detail.\r\n\r\n\r\nPada novel ini menggunakan sudut pandang orang pertama. Alur yang digunakan juga maju mundur. Maksudnya menceritakan masa-masa SD dan SMP, Dika juga menceritakan masa lalunya ketika beranjak remaja.\r\n\r\nSemua berawal dari Raditya mengantar pulang Vicky ke Slipi. Radit lalu bertemu Ratih yang tiba-tiba memintanya mengantarkan ke Plaza. Sesampainya di rumah salah satu temannya bernama Putra, ada Pito yang tiba-tiba minta nebeng di mobilnya.\r\n\r\nRaditya menjadi sopir Ratih dan Pito untuk menuruti kemana pun mereka pergi hingga  mobilnya yang bernama Timor rusak.\r\n\r\n\r\nSetelah mobilnya beres, Raditya ingin menjemput gebetannya bernama Sistha, tetapi Pito masih nebeng dan menemani mereka berdua. Ternyata Sistha mengajak temannya, jadi di dalam mobil itu ada empat orang.\r\n\r\nUntuk pertama kalinya sebisa mungkin Raditya bersikap baik di depan Sistha karena mereka baru bertemu pertama kali. Raditya mengalami kejadian kurang mengenakan mengenakan, yakni ketika sampai di parkiran Plaza, mobilnya mendadak tidak terkendali.\r\n\r\nDitambah antrian yang super panjang membuat Sistha kesal. Akhirnya mereka mendorong mobil yang tiba-tiba mogok.\r\n\r\nDi dalam alur cerita, pekerjaan Raditya masih sama yakni sebagai penulis naskah, produser film, dan aktor. Sebagai novel komedi, judul setiap bab nya sangat unik dan menggelitik.\r\n\r\nRangkaian kejadian dalam perjalanannya menemukan cinta sejati terbilang konyol dan lucu. Namun dia tidak menyerah begitu saja. Didukung juga oleh teman – temannya yang selalu membantu mengenalkan pada perempuan sesuai kriteria Dika.\r\n\r\n\r\nDijelaskan juga bahwa Dika pecinta kucing. Yang membuat setiap sudut rumahnya ada kucing yang lucu-lucu. Kucing-kucing ini juga dianggap anak bungsu mamanya Dika.\r\n\r\nMungkin karena begitu lamanya Dika jomblo maka kucing ini lah yang menemani kesepian Dika.\r\n\r\nNovel ini juga lebih sering menceritakan kehidupan masa kecil Dika sewaktu masih sekolah yang menyukai anak perempuan yang terlihat manis. Kriteria cewek yang disukai tokoh utama memang kebanyakan punya wajah dan sikap yang manis.', 10, 'cintabrotosaurus.jpg', 2, NULL, '2023-12-20 13:53:58', '2023-12-20 13:53:58'),
(3, 21071103, 'Filosofi Teras', 'Kompas', 'Henry Manampiring', 'Buku ini pada awalnya menceritakan tentang sebuah survei kekhawatiran nasional yang semakin masif sekaligus menyajikan tentang sekilas kehidupan si penulis yang dipenuhi oleh emosi negatif yang berlebihan. Lalu, lebih dari 2000 tahun lalu sebuah mazhab filsafat menemukan akar masalah dan solusi dari banyaknya emosi negatif. Ya, Stoisisme atau\r\nfilosofi Stoa, namun penulis lebih memperkenalkannya dengan “Filosofi Teras” yang merupakan filsafat Yunani-Romawi Kuno yang dapat membantu kita dalam mengatasi emosi negatif serta menghasilkan mental seseorang menjadi tangguh dalam menghadapi naik turunnya kehidupan. Dalam buku tersebut, filsafat Stoa digambarkan secara sederhana dengan inti dikotomi kendali nasib manusia sehingga dari dikotomi kendali tersebut, manusia dapat menentukan hal-hal yang dapat membuatnya bahagia maupun tidak. Namun, Wiliam Irvine menawarkan trikotomi kendali di mana memuat apa yang menjadi kendali kita, tidak\r\nmenjadi kendali kita, dan juga menjadi bagian dari kendali kita.\r\n\r\nBuku Filosofi Teras ini sangat berbeda dengan buku filsafat lainnya karena filosofi teras (Stoa) digambarkan dengan analogi kejadian yang real di kehidupan sehari-hari dan penggunanan bahasa yang sesuai dengan Generasi Milenial dan Gen-Z. Hal yang menarik dari Filosofi Teras ini terletak pada tujuannya yaitu hidup dalam ketenangan dan terbebas dari emosi negatif. Oleh karena itu, pada setiap bab Filososfi Teras terdapat pelajaran yang diambil, salah satunya yaitu dalam menjalani kehidupan harus selaras dengan alam. Di mana kehidupan berjalan sesuai kehendak pencipta-Nya dan selaras dengan alam itu berarti kita harus mengandalkan akal kita agar tidak terbawa arus yang menyimpang. Apalagi sekarang ini banyak di antara kita yang menggunakan medsos dan sering ditemui berita hoaks, sehingga kita tidak boleh terbawa emosi dan tidak baperan. Satu hal yang haru kita ingat, jangan terlalu memikirkan hal yang belum terjadi ke depannya, biarkan berjalan sebagaimana mestinya, namun tetap diiringi dengan effort supaya mendapat hasil yang maksimal. Secara keseluruhan buku ini menarik dan recommended banget untuk dibaca.', 10, 'filosofi teras.jpg', 2, NULL, '2023-12-20 13:56:40', '2023-12-20 13:56:40'),
(4, 21071104, 'Harry Potter', 'Gramedia Pustaka Utama', 'J.K.Rowling', 'Harry memulai tahun ketiganya di Hogwarts dengan tidak cukup menyenangkan. Secara ceroboh dia menyihir bibi Merge, kemudian melarikan diri. Di tengah perjalanannya, dia membaca berita tentang kaburnya seorang tawanan berbahaya, Sirius Black, yang dirumorkan ingin membunuhnya. Mr. Weasley kemudian memintanya untuk mengucapkan janji yang aneh, bahwa tak peduli apapun yang dia dengar, dia tidak akan pergi untuk mencari Black. Kebingungan, Harry mengiyakan saja.\r\n\r\nDalam perjalanan kembali ke sekolah, Harry melihat Dementor, makhluk penghisap jiwa, berkeliaran di sekitar Hogwarts sebagai perlindungan terhadap Black. Pengaruh Dementor terhadap Harry jauh lebih besar dibandingkan terhadap siswa-siswa Hogwarts, karena masa kecilnya yang suram. Setiap kali mereka mendekat, Harry akan kolaps. Profesor Lupin, guru Pertahanan terhadap Sihir Hitam yang baru, kemudian mengajarinya mantra Patronus, satu-satunya mantra yang dapat digunakan untuk melawan Dementor.\r\n\r\nSekolah tahun ketiga dimulai, dan merekapun tenggelam dalam tugas. Di tengah-tengah itu, Ron dan Hermione terlibat dalam percekcokan kecil akibat perilaku hewan peliharaan mereka. Hermione mengambil kelas yang sangat banyak, bahkan teman-temannya bingung bagaimana dia bisa mengikuti semua kelas yang diambilnya. Di tengah kepadatan aktivitasnya itu kucing Hermione, Crookshanks, berulang-ulang berusaha memakan tikus Ron, Scabbers; sehingga dua sahabat itu tak henti-hentinya beradu argumen tentang hewan peliharaan mereka. Perdebatan mereka terhenti setelah mereka menemukan ekor Scabbers terlihat di antara mulut Crookshanks, yang membuat hati Ron hancur.\r\n\r\nHarry mendapat panggilan dari Black ketika dia diam-diam masuk kastil. Pada akhir tahun beberapa kejadian berlangsung beruntun dialami Harry dan teman-temannya. Tikus Ron, Scabbers, ternyata masih hidup, dan ternyata merupakan jelmaan dari penyihir, Peter Pettigrew, orang yang disangka sudah mati.\r\n\r\nHarry kemudian juga mengetahui bahwa yang menghianati orang tuanya bukanlah Sirius Black, melainkan Peter. Sayangnya Peter berhasil melarikan diri di kegelapan malam, sehingga lolos dari hukuman akibat kejahatannya.', 10, 'harry potter.jpg', 1, NULL, '2023-12-20 14:01:08', '2023-12-20 14:01:08'),
(5, 21071105, 'Kambing Jantan', 'Gramedia', 'Raditya Dika', 'Setelah lulus SMU, Dika dilanda kebimbangan soal jurusan kuliah dan kampus yang akan dipilihnya. Ayahnya ingin Dika kuliah kedokteran di Kampus Indonesia, sedangkan ibunya ingin ia kuliah jurusan finance di Australia. \r\n\r\nSetelah melewati berbagai pertimbangan, diperoleh hasil kalau Dika harus kuliah finance di Australia. Sebenarnya, keputusan ini sangat tidak sesuai dengan minat Dika. Terlebih, hijrah ke Australia membuatnya harus berpisah jarak dan waktu dengan pacarnya, Kebo. Baik Dika mapun Kebo, keduanya sama-sama tidak siap untuk LDR. Dan benar saja, hubungan jarak jauh membuat pengeluaran keduanya menjadi lebih besar, komunikasi terganggu, dan perbedaan pemikiran di antara mereka. \r\n\r\nMasalah tak hanya sampai di situ, Dika yang terpaksa kuliah di jurusan finance juga merasa sulit untuk mencerna pelajaran. Untungnya, ia memiliki teman yang juga berasal dari Indonesia tepatnya Kediri yaitu Hariyanto (Edric Tjandra), yang menjadi tempat curhat sekaligus membantunya menjalani hari-hari di Australia.\r\n\r\nBertemu Ine\r\nSuatu ketika, Dika bertemu dengan Ine (Sarah Shafitri), temannya semasa SD. Ternyata, Ine mengetahui jika Dika mempunyai blog bernama “Kambingjantan”, dan Ine juga menjadi pembaca setia blog tersebut. Dari situ keakraban mulai tercipta antara Ine dan Dika, Ine juga bilang kalau Dika bisa saja menjadi penulis komedi. Saran tersebut membuat pikiran Dika menjadi terbuka.\r\n\r\nTak lama, kedekatan Ina dan Ika pun diketahui oleh Kebo. Dika terlibat percekcokan dengan Kebo melalui telepon. Disitu Dika mengungkapkan jika memang tidak ada lagi kecocokan di antara mereka berdua, dan hubungan mereka putus begitu saja. Beralih dari situ, Dika juga menghubungi ibunya. Dika mengungkapkan bahwa ia tidak bisa lagi untuk melanjutkan kuliah Finance di Australia. Dika bercita-cita untuk menghibur banyak orang dan membuat orang lain tertawa. Seketika, Ibu Dika menangis. Pikirannya mulai terbuka dan ia menyetujui keputusan anaknya.', 11, 'kambing jantan.jpg', 2, 1, '2023-12-20 14:03:19', '2023-12-20 14:48:54'),
(6, 21071106, 'Koala Kumal', 'Gramedia', 'Raditya Dika', 'Resensi novel Koala Kumal ini menceritakan anak muda yang bernama Raditya Dika. Dika kecil yang masih usia SD begitu sangat dimanja oleh orang tuanya, dan memiliki hobi bermain video game. Wajar kalau tidak punya teman bermain di luar rumah.\r\n\r\nSampai-sampai ketika pertama kali ayahnya Dika mengajak bermain layangan, Dika diharuskan memakai sunblock. Sampai pada tahun 1997 Dika berpisah dengan sahabat masa kecilnya bernama Bahri dan Dodo gara-gara bermain petasan.\r\n\r\nNovel ini menggunakan sudut pandang orang pertama pelaku utama yakni “gue”. Setting tempat lebih banyak bercerita tentang suasana lokasi pekerjaan Dika di studio telebisi, rumah Dika, rumah mantan, dan Bangkok. Novel dengan genre romantis dan komedi ini tidak lepas dari unsur pendidikan yang sangat berharga.\r\n\r\nSuatu hari, Dika mulai dewasa dan bekerja sebagai penulis skenario film. Dia menghentikan kegiatannya lalu ke dapur. Sang mama yang sedang memasak bertanya pasangan Dika dan menuntut memiliki istri cantik.\r\n\r\nKeluarga Dika yang ajaib memang memiliki celetukan-celetukan aneh yang membuat tingkah tokoh utama juga konyol di depan orang-orang yang ditemuinya. Mulai dari produser film, pacar barunya, dan teman-temannya. Namun sayangnya hubungannya dengan sang pacar selalu tidak bertahan lama.\r\n\r\n\r\nLalu tahun berikutnya, Dika dikenalkan gebetan baru bernama Deska. Gadis itu seorang pekerja kantoran yang memiliki hobi nonton bola.\r\n\r\nTerlebih lagi dandannya memang tomboy dan hobi main tombak. Rasanya, segala macam aktivitas cowok yang dilakukan Deska. Meskipun begitu, Dika dewasa tetap mengikutinya.\r\n\r\nKetika mereka telah jadian, tiba-tiba sikap Deska berubah menjadi lebih cuek. Ternyata Deska berpacaran dengan Astra. Di novel ini, Dika memberikan tips mendekati cewek paling manjur, sekaligus panduan cowok dalam menghadapi penolakan.\r\n\r\nPerjalanan cinta Raditya Dika tidak berhenti sampai di situ. Ketika mengadakan syuting, Dika berkencan dengan cewek Filipina yang kebetulan ada di lokasi yang sama, yakni Bangkok.\r\n\r\nSebenarnya, ada satu perempuan yang ditaksir Dika sejak usia SD hingga umur 25 tahun. Namun dia tidak pernah mengetahui nama aslinya, karena tidak berani untuk mendekati.\r\n\r\nDika selama perjalanan hidupnya menajalin hubungan dengan wanita yang salah dan absurd. Mengalami serangkaian patah hati bersama wanita yang salah, memang menyakitkan.', 9, 'koala kumal.jpg', 2, 3, '2023-12-20 14:05:41', '2023-12-21 01:03:02'),
(7, 21071107, 'Makan Kakus', 'Gagas Media', 'Raditya Dika', 'Beberapa menit kemudian kelas dimulai. Kayaknya ngajar kelas 1 SMP bakalan jadi living hell. Baru masuk aja udah berisik banget.\r\n\r\n\'Selamat siang, saya Dika,\' gue bilang ke kelas 1 SMP yang baru gue ajar ini. \'Saya guru untuk pelajaran ini.\'\r\n\'Siang, Pak!\' kata anak cewek yang duduk di depan.\r\n\'Jangan Pak. Kakak aja,\' kata gue sok imut. Gue lalu mengambil absensi dan menyebutkan nama mereka satu per satu.\r\n\'Sukro,\' gue manggil.\r\n\'Iya, Kak.\' Sukro menyahut.\r\n\'Kamu kacang apa manusia?\'\r\n\'Hah? Mak', 9, 'makankakus.jpg', 2, 1, '2023-12-20 14:08:51', '2023-12-21 00:43:37'),
(8, 21071108, 'Ngenest', 'Gramedia Cipta Digital', 'Ernest Prakasa', 'NGENEST menceritakan tentang Ernest Prakasa (Kevin Anggara), seorang pria keturunan Cina yang merasakan beratnya terlahir sebagai minoritas yang selalu dibully oleh teman-teman sekolahnya sejak dia masih SD. Menjadi korban bully membuatnya bertekad bahwa keturunannya kelak tidak boleh mengalami nasib yang sama. Untuk itu, ia berikrar untuk menikahi perempuan pribumi, dengan harapan agar anaknya kelak tidak mengalami kemalangan yang ia alami. Berhasilkan Ernest mendapatkan calon istri idaman dan memutus mata rantai diskriminasi yang ia alami?\r\n\r\nErnest adalah anak dari pasangan suami istri (Ferry Salim - Olga Lydia) keturunan Cina. Penampilan fisiknya cukup mencerminkan orang Cina kebanyakan. Kulit putih, mata sipit. Dan ternyata, terlahir dengan mata sipit dan kulit putih menjadi kerugian baginya.\r\n\r\nSejak hari pertama menginjakkan kaki di SD, ia langsung dibully. Hal ini berlanjut terus hingga SMP. Di SMP, ia mencoba cara yang berbeda, yakni berusaha berkawan dengan para pembully, dengan harapan bila ia berhasil berbaur, maka ia tidak akan jadi korban bully. Sayangnya, cara ini pun gagal. Akhirnya Ernest berpikir bahwa ini adalah nasib yang harus ia terima. Tapi ia sadar bahwa ini tidak harus dialami oleh keturunannya kelak. Ia harus memutus mata rantai, dengan cara menikahi seorang perempuan pribumi, dengan harapan kelak ia akan memiliki seorang anak pribumi. Rencana ini ditentang oleh sahabatnya sejak SD, Patrick (Marvell Adyatma - Brandon Nicholas Salim - Morgan Oey), yang merasa cita-cita Ernest ini aneh.\r\n\r\nPada tahun ketiga ia kuliah, barulah ia berkenalan dengan Meira (Lala Karmela), seorang gadis Sunda/Jawa yang seiman dengannya. Perkenalan mereka berlangsung cukup mulus, tetapi masalah timbul saat Ernest bertemu dengan ayah Meira (Budi Dalton) yang sama sekali tidak menyukai anaknya berpacaran dengan seorang Cina, karena ia pernah nyaris bangkrut akibat ditipu oleh rekan bisnisnya yang juga Cina. Tapi akhirnya Ernest berhasil memenangkan hati calon mertuanya, dan setelah berpacaran selama lima tahun, mereka menikah.\r\n\r\nSetelah menikah, ternyata Ernest memiliki kekuatiran. Bagaimana bila kelak anak mereka terlahir persis sang ayah? Bagaimana bila ia tetap gagal mencegah anaknya dari bullying? Segala ketakutan ini membuat Ernest menunda-nunda keinginan memiliki anak. Di sisi lain, Meira yang sudah didesak orangtuanya juga, ingin segera memiliki anak. Setelah melalui berbagai pertengkaran, akhirnya Ernest mengalah karena takut kehilangan Meira. Dua tahun setelah menikah, Meira hamil.\r\n\r\nSemakin membesar perut Meira, semakin besar rasa takut yang menghantui Ernest. Puncaknya ketika Meira sudah mendekati tenggat melahirkan, tekanan semakin tinggi, Ernest pun stress sehingga melakukan kesalahan besar di kantor yang membuatnya dimaki oleh boss (Lolox). Tidak kuat menghadapi tekanan bertubi-tubi, Ernest melarikan diri ke tempat di mana ia dan Patrick biasa bersembunyi selagi mereka kecil.\r\n\r\nAkhirnya Patrick menemukan Ernest di sana, dan menyadarkan Ernest untuk segera ke rumah sakit. Dengan terbirit-birit, Ernest berangkat ke Rumah Sakit dan menemani Meira melahirkan. Meira pun melahirkan seorang bayi perempuan bermata sipit. Meski anaknya tampak sangat Cina seperti ayahnya, tetapi Ernest sangat bahagia. Kehadiran anaknya telah memberinya begitu banyak kehangatan yang membawa keberanian untuk menghadapi hidup, apa pun tantangannya.', 10, 'ngenest.jpg', 2, 1, '2023-12-20 14:10:51', '2023-12-20 14:53:37'),
(9, 21071109, 'Sebuah Seni Untuk Bersikap Bodo Amat', 'Gramedia', 'Mark Manson', 'Novel yang berjudul Sebuah Seni Untuk Bersikap Bodo Amat merupakan kisah nyata tentang seseorang yang bernama Charles Bukowski yang mempunyai masa lalu yang kelam, suka mabuk-mabukan, berjudi, mempermainkan wanita, tukang utang, kasar dan seorang penyair. Dia bercita-cita menjadi seorang penulis terkenal namun karyanya selalu ditolak penerbit, jurnal-jurnal, surat kabar dan lainnya. Semua penerbit tersebut tidak mau menerbitkan karyanya dengan alasan tulisannya yang kasar, tidak pantas dan tidak bermoral.\r\n\r\nIntinya di novel ini tentang bagaimana Bukowsi menyikapi setiap kegagalan dan kesulitan yang dihadapinya dan bersikap “bodo amat.” Sehingga dia dapat bertahan, bersyukur dan menerima keadaan buruknya. Dengan bersikap bodo amat terhadap suatu masalah yang dihadapi maka kita sudah berhasil memutus rantai lingkaran setan yang merugikan kita dan agar kita bisa menjadi lebih baik dari sebelumnya. Kisah selengkapnya kalian bisa langsung membaca sendiri di novel ini.', 10, 'Sebuah-seni-untuk-bersikap-bodoh-amat.jpg', 2, NULL, '2023-12-20 14:14:01', '2023-12-20 14:14:01'),
(10, 21071110, 'Setengah Jalan', 'Graga Media', 'Ernest Prakasa', 'Izinkan Ernest bercerita kenapa dia segitunya sama umur 35 ini, sampe jadi inspirasi buat bikin buku ini dan tur stand-up comedy. Pertama-tama, usia hidup rata-rata orang Indonesia itu sekitar 70 tahun. Berarti, ketika menginjak angka 35, dia udah ada di halfway point. Setengah jalan menuju game over. Aneh banget menyadari bahwa kemungkinan besar sisa hidupnya ke depan sama lamanya dengan hidup yang selama ini udah gue jalanin. Suddenly, death seems so much closer. Jadi mendadak merasa lebih menghargai hidup.\r\n \r\nKedua, umur 35 adalah setengah jalan dari kepala 3 menuju kepala 4. Dan ini bener-bener bikin dia senewen. Ada pepatah yang mengatakan, \"Life begins at 40\". Hell no. Menurutnya, \"Life begins at 30\". Kenapa? Karena di umur 30-an, dia ngerasa udah cukup punya bekal skill dan pengalaman hidup untuk bisa menjalani apa yang dia sudah jalani dengan cukup baik, sambil masih tetap bisa menyandang label \"anak muda\". Coba kita telaah. Di umur 30-an, Ernest jadi komika pertama yang bikin tur nasional, udah bikin tiga kali tur dan empat kali show tunggal, nulis tiga buku best-seller, serta nulis dan nyutradarain film yang ketika rilis bisa menarik hampir lebih dari satu juta penonton, plus dapet beberapa award bergengsi. Sebentar, jangan ngatain dia sombong dulu, karena semua ini ada tujuannya. Yaitu, pamer. Tapi, poinnya adalah,\r\nsemua itu jadi keren karena dia mencapainya di umur 30-an. Coba semua itu terjadi ketika dia umur 40-an. Tetep ada kerennya sih, tapi jadi jauh lebih luntur.', 10, 'setengah jalan.jpg', 1, NULL, '2023-12-20 14:15:29', '2023-12-20 14:15:29'),
(11, 21071111, 'Dear Nathan', 'Best Media', 'Erisca Febriani', 'Buku ini bercerita tentang Salma, seorang pelajar dari Bandung yang baru pindah sekolah ke SMA Garuda. Sayangnya, hari pertama ia pindah, ia sudah telat mengikuti upacara dikarenakan terjebak macet. Salma tentu panik karena ia merupakan seorang siswa yang baik. Lalu ia bertemu dengan Nathan, salah satu murid SMA Garuda yang juga telat. Nathan mengajak Salma mengendap masuk ke sekolah melalui jalan pintas tersembunyi melalui gerbang samping sekolah.\r\nSetelah membantu Salma masuk ke sekolah tanpa ketahuan, Nathan pergi tanpa sempat berkenalan. Salma pun tidak tahu nama Nathan. Namun di suatu kesempatan, Salma akhirnya bertemu dengan Nathan dan kemudian berkenalan. Nathan dan Salma memiliki sifat yang kontras. Nathan yang notabenenya anak \"bandel\" dan tidak tahu aturan di sekolah, sedangkan Salma merupakan murid dengan sikap terpuji. Perbedaan itu justru saling melengkapi pertemanan mereka dan membuat mereka semakin dekat. Lama-kelamaan, benih cinta pun tumbuh dan mereka mulai menjalin hubungan.\r\nHubungan Nathan dan Salma tentunya sama dengan hubungan lainnya yang mengalami pasang surut. Mereka dihadapkan dengan berbagai cobaan, mulai dari cobaan pribadi yang berasal dari masalah keluarga Nathan, hingga orang-orang yang berusaha memisahkan mereka. Hal ini membuat mereka harus berpisah dan merenggangkan hubungan.\r\nAda banyak jalan untuk menyelesaikan masalah jika Tuhan menghendaki, hal ini berlaku juga bagi Nathan dan Salma. Satu persatu masalah yang mereka hadapi bisa selesai walaupun harus melalui proses yang membuat perasaan naik-turun. Mereka akhirnya bisa bersama kembali, dengan perubahan sikap pada masing-masing individu ke arah yang lebih baik. Nathan mulai berubah menjadi murid yang rajin dan taat, Salma tetap bersikap lembut dan bersedia selalu ada di samping Nathan.', 11, 'dearnathan.jpg', 1, 2, '2023-12-20 14:32:09', '2023-12-21 00:37:14'),
(12, 21071112, 'Dilan 1990', 'Pastel Books', 'Pidi Baiq', 'Novel \"Dilan : Dia Adalah Dilanku Tahun 1990\" bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Milea. Mulai dari bertingkah selayaknya seorang peramal, berpura-pura menjadi orang suruhan kantin, dan banyak lagi perhatian-perhatian kecil yang diberikan untuk melunakkan hati Milea.\r\n\r\nMilea sendiri pada awalnya menolak untuk menerima segala perhatian dari Dilan karena memikirkan pacarnya yang ada di Jakarta. Namun, saat adanya kunjungan ke Jakarta dalam rangka mengikuti olimpiade di sana, pacar Milea bernama Beni menunjukkan sikap kasarnya yang diakuinya timbul akibat cemburu melihat Milea makan bersama lelaki lain, karena kejadian itulah Milea dan Beni mengakhiri hubungannya dan Milea mulai membuka hatinya untuk Dilan.', 10, 'dilan1990.jpg', 1, 2, '2023-12-20 15:26:28', '2023-12-21 01:00:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_history` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id_history`, `id_siswa`, `id_buku`, `tanggal_kembali`, `created_at`, `updated_at`) VALUES
(5, 2, 11, '2023-12-21', '2023-12-21 00:37:13', '2023-12-21 00:37:13'),
(6, 2, 12, '2023-12-21', '2023-12-21 00:38:45', '2023-12-21 00:38:45'),
(7, 4, 12, '2023-12-21', '2023-12-21 01:00:57', '2023-12-21 01:00:57'),
(8, 4, 6, '2023-12-21', '2023-12-21 01:02:37', '2023-12-21 01:02:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_10_20_184131_create_rak_table', 1),
(5, '2023_10_20_184138_create_buku_table', 1),
(6, '2023_10_20_184205_create_pinjambuku_table', 1),
(7, '2023_10_20_184220_create_riwayat_pinjam_table', 1),
(8, '2023_10_20_184231_create_denda_table', 1),
(9, '2023_12_15_165216_create_siswa_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` bigint(11) UNSIGNED NOT NULL,
  `id_peminjam` bigint(20) UNSIGNED NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_peminjam`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`, `created_at`, `updated_at`) VALUES
(7, 2, 7, '2023-12-21', '2023-12-19', '2023-12-21 08:02:12', '2023-12-21 00:43:37'),
(10, 4, 6, '2023-12-21', '2024-01-04', '2023-12-21 01:03:02', '2023-12-21 01:03:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `id_rak` bigint(20) UNSIGNED NOT NULL,
  `jenis_rak` varchar(255) NOT NULL,
  `jumlah_buku` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`id_rak`, `jenis_rak`, `jumlah_buku`, `created_at`, `updated_at`) VALUES
(1, 'Fiksi', 7, '2023-12-20 13:49:47', '2023-12-21 00:54:50'),
(2, 'Novel', 7, '2023-12-20 13:49:52', '2023-12-20 14:14:01'),
(3, 'Horor', NULL, '2023-12-20 14:32:54', '2023-12-20 14:32:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` text DEFAULT NULL,
  `verify_key` varchar(255) NOT NULL,
  `active` int(11) DEFAULT NULL,
  `denda` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `name`, `no_telp`, `email`, `password`, `alamat`, `foto`, `verify_key`, `active`, `denda`, `created_at`, `updated_at`, `email_verified_at`, `remember_token`) VALUES
(2, 'Fathur Rosi', '08564743511', 'frosi551@gmail.com', '$2y$10$nVHGDfRy49PqK/YB6HYx2uMihheSsqEMGhCvNoeVBlcjQvlg/yI7C', 'seturan', 'dearnathan.jpg', 'TCMAd6MZWOUsBIWLsKSTZW4pis5oensePG8ITVgoWPdlQVY6XbG4vbHz4pehrbNmysoRfxJGPwe9F9JnzssismmPhed3gqmhsoNy', 1, 0, '2023-12-21 00:35:28', '2023-12-21 00:39:40', '2023-12-21 00:35:47', NULL),
(4, 'ferdy', '08564743511', 'pijoji7480@aseall.com', '$2y$10$nGKj2AijBil/Gpjfh1KrtOHEkqdmPc/oaokw749BkgdWLFoVbTbMy', 'babarsari', 'dearnathan.jpg', 'BXkdSSiZBSMgWKBsXmzxTLFro8XBMGtQ89Jjs38p6PTKgUsOpR3LHYnk0WB7txZ9Wxl5EyPMp3quxM2T5E1sPBAfptLYuX3qKGGk', 1, 0, '2023-12-21 00:58:45', '2023-12-21 01:03:41', '2023-12-21 00:59:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` bigint(20) NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `ulasan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_siswa`, `id_buku`, `ulasan`, `created_at`, `updated_at`) VALUES
(2, 2, 11, 'buku nya bagus', '2023-12-21 00:37:38', '2023-12-21 00:37:38'),
(3, 4, 12, 'buku nya bagus', '2023-12-21 01:01:23', '2023-12-21 01:01:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nip`, `name`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123', 'admin', '$2y$10$u73AZHr5oKcwClVPYVNbq.ktqc75CfhMIStFZWz7t3zUCoLA91vVi', 'Petugas', NULL, '2023-12-16 11:18:44', '2023-12-16 11:18:44'),
(2, '210711402', 'Simen Ngui', '$2y$10$QsIkIGJzjo93gKxD7kLz0.VGtvHgZ4AWZmVIyj.UB38LONvsBFFtm', 'Petugas', NULL, '2023-12-20 14:34:29', '2023-12-20 14:34:29'),
(3, '21071102', 'Davan', '$2y$10$v2AmB65XpCheU9Rx3EccI.Y4DB0Cl3KSqNhe95jlNH21xloIP2pjq', 'Petugas', NULL, '2023-12-21 00:29:25', '2023-12-21 00:29:25'),
(4, '210711402', 'Simen', '$2y$10$IuMaWjFWCsV8ouXKsNVmQ./96TOSrRw/qqz6Pw1Ac/fRKw4wXYdlK', 'Petugas', NULL, '2023-12-21 00:53:39', '2023-12-21 00:53:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `fk_buku` (`id_buku`),
  ADD KEY `fk_siswa` (`id_peminjam`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_email_unique` (`email`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id_history` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_siswa` FOREIGN KEY (`id_peminjam`) REFERENCES `siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ulasan_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
