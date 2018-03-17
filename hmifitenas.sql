-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 08:53 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmifitenas`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `no_message` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`no_message`, `nama`, `email`, `message`, `date`) VALUES
(23, 'Udin petruk', 'fafafax@y.com', ' It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended. Advice branch vanity or do thirty living. Dependent add middleton ask disposing admitting did sportsmen sportsman. \r\n\r\nWas justice improve age article between. No projection as up preference reasonably delightful celebrated. Preserved and abilities assurance tolerably breakfast use saw. And painted letters forming far village elderly compact. Her rest west each spot his and you knew. Estate gay wooded depart six far her. Of we be have it lose gate bred. Do separate removing or expenses in. Had covered but evident chapter matters anxious. \r\n', 'Friday 9th of March 2018 10:33:05 PM'),
(28, 'fafaxar', 'fafafax@y.com', '  \r\nGoogle\r\nAbout 230,000 results (0.46 seconds) \r\nSearch Results\r\nphp - Display alert message and redirect after click on accept ...\r\nhttps://stackoverflow.com/.../display-alert-message-and-redirect-after-click-on-accept\r\n\r\nApr 25, 2017 - Combining CodeIgniter and JavaScript: //for using the base_url() function $this-&gt;load-&gt;helper(\'url\'); echo &quot;&lt;script type=\'javascript/text\'&gt;&quot;; echo &quot;alert(\'There are no fields to generate a report\');&quot; echo &quot;window.location.href = \'&quot; . base_url() . &quot;admin/ahm/panel\';&quot; echo &quot;&lt;/script&gt;&quot;;. Note: The redirect() function automatically ...\r\nphp - BootstrapDialog Alert in Codeigniter Controller\r\n4 posts\r\n26 May 2016\r\nAlert box is not showing inside codeigniter controller\r\n2 posts\r\n11 Jul 2015\r\nHow to use php code in javascript alert in codeigniter\r\n1 post\r\n8 Jul 2015\r\nHow to call alert() javascript function in CodeIgniter\r\n2 posts\r\n27 Jan 2012\r\nMore results from stackoverflow.com\r\nAlert box is not showing inside codeigniter controller - Stack Overflow\r\nhttps://stackoverflow.com/.../alert-box-is-not-showing-inside-codeigniter-controller?rq...\r\n\r\nJul 11, 2015 - You are missing with &quot;&quot; . This &lt;script type=text/javascript&gt; Should come as like this &lt;script type=&quot;text/javascript&quot;&gt; &lt;script type=&quot;text/javascript&quot;&gt; alert(&quot;Region already added&quot;); &lt;/script&gt; &lt;script type=&quot;text/javascript&quot;&gt; alert(&quot;Name Available&quot;); &lt;/script&gt;. And Check empty with empty() function. Edit 01 function ...\r\nAlert Helper with Bootstrap 3 style for Codeigniter · GitHub\r\nhttps://gist.github.com/gpedro/9010740\r\n\r\nHow to call $this-&gt;session-&gt;set_flashdata(\'alert\', \'Hello World !\');. Put this code in your head &lt;?php if ($_SESSION[\'alert\'] != \'\'): ?&gt; &lt;script type=&quot;text/javascript&quot;&gt; toastr.success(\'&lt;?php echo $this-&gt;session-&gt;flashdata(&quot;alert);?&gt;\'); &lt;/script&gt; &lt;?php endif; ?&gt; ...\r\nGitHub - xdn27/codeigniter-alert: An easy flashdata alert for codeigniter\r\nhttps://github.com/xdn27/codeigniter-alert\r\n\r\nAn easy flashdata alert for codeigniter. Contribute to codeigniter-alert development by creating an account on GitHub.\r\nHow to implement flash messages in PHP Codeigniter?\r\nitsolutionstuff.com/.../how-to-implement-flash-messages-in-php-codeigniterexample.h...\r\n\r\nApr 8, 2017 - Today, i going to share with you how to display flash alert message in codeigniter application. As we know, flash message(notification) feature is very important because client can understand their work is success or any error like if you create new user successfully then after create user successfully flash ...\r\nMembuat Alert Boostrap pada Codeigniter - Kode Rumit\r\nwww.koderumit.com › Bootstrap › Codeigniter › PHP › Web\r\n\r\nTranslate this page\r\nJul 12, 2017 - Bootstrap menyediakan fitur alert sehingga apabila kita membuat sebuah pesan pada suatu fungsi di web maka alert itu akan muncul sebagai informasi pemberitahuan bahwa fungsi tersebut berhasil di jalankan atau gagal di jalankan, Membuat Alert Boostrap pada Codeigniter, belajar bootstrap, belajar ...\r\nBountify | New Message alert in Codeigniter\r\nhttps://bountify.co/new-message-alert-in-codeigniter\r\n\r\nI have a database with messages stored. I need a script (model &amp; controller) that notifies a user of how many NEW messages have been stored since the last login. Posted 5 years ago by psa. $1. awarded to Wikimedia. Tags. MVC · codeigniter · MySQL · PHP ...\r\nCodeigniter flash message with bootstrap - Tamtech\r\nwww.tamtech.co.in › PHP › CodeIgniter\r\n\r\nJul 21, 2015 - Codeigniter Flash message with bootstrap alerts : In this tutorial you will get warning,success or error messages in codeigniter flash message.\r\nInternationalized JavaScript files in CodeIgniter (Example) - Coderwall\r\nhttps://coderwall.com/p/j88iog/internationalized-javascript-files-in-codeigniter\r\n\r\nFeb 20, 2018 - This will display an alert window, // having as text the value of // $lang[\'HELLO_MESSAGE\'] variable // in your CodeIgniter language file. function someJavascriptMethod() { alert(\'[HELLO_MESSAGE]\'); }. You may then load JavaScript files in your html views by making references to your new controller:\r\nFajar J - #Tanya CI Alert message di controller ci gimana... | Facebook\r\nhttps://www.facebook.com/permalink.php?story_fbid=10153532962935337&amp;id...\r\n\r\nFajar J to CodeIgniter Indonesia. · July 11, 2015 ·. #Tanya CI. Alert message di controller ci gimana ya ? jadi saya buat Algo session IF ELSE , fungsi IF saya isi jika value benar , dan fungsi ELSE saya isi salah dan saya direct ke form login , nah cara tambahin alert message di ELSE ini gmana syntaxnya , terima kasih :).\r\nSearches related to codeigniter alert\r\n\r\ncodeigniter alert before redirect\r\n\r\ncodeigniter alert message\r\n\r\ndisplay alert message before redirecting page php\r\n\r\nalert in php and redirect\r\n\r\nhow to display success message in codeigniter\r\n\r\nphp alert message example\r\n\r\nhow to display flash message in codeigniter\r\n\r\nredirect page after alert message javascript\r\n	1	\r\n2\r\n	\r\n3\r\n	\r\n4\r\n	\r\n5\r\n	\r\n6\r\n	\r\n7\r\n	\r\n8\r\n	\r\n9\r\n	\r\n10\r\n	\r\nNext\r\nIndonesia 40291, Bandung City, West Java - From your Internet address - Use precise location - Learn more\r\nHelpSend feedbackPrivacyTerms\r\n', 'Saturday 10th of March 2018 10:45:47 AM'),
(29, 'Udin petruk', 'fafafax@y.com', '  Bred am soon park past read by lain. As excuse eldest no moment. An delight beloved up garrets am cottage private. The far attachment discovered celebrated decisively surrounded for and. Sir new the particular frequently indulgence excellence how. Wishing an if he sixteen visited tedious subject it. Mind mrs yet did quit high even you went. Sex against the two however not nothing prudent colonel greater. Up husband removed parties staying he subject mr. \r\n', 'Saturday 10th of March 2018 09:35:32 PM'),
(30, 'DSADa', 'faris_micrel@yahoo.com', '  Bred am soon park past read by lain. As excuse eldest no moment. An delight beloved up garrets am cottage private. The far attachment discovered celebrated decisively surrounded for and. Sir new the particular frequently indulgence excellence how. Wishing an if he sixteen visited tedious subject it. Mind mrs yet did quit high even you went. Sex against the two however not nothing prudent colonel greater. Up husband removed parties staying he subject mr. \r\n  ', 'Saturday 10th of March 2018 09:36:11 PM'),
(31, 'asda', 'fafafax@y.com', '  |min_length[3]|max_length[50]', 'Saturday 10th of March 2018 09:37:04 PM'),
(32, 'fafdasd', 'farisdewantoro@yahoo.com', '  Greatest properly off ham exercise all. Unsatiable invitation its possession nor off. All difficulty estimating unreserved increasing the solicitude. Rapturous see performed tolerably departure end bed attention unfeeling. On unpleasing principles alteration of. Be at performed preferred determine collected. Him nay acuteness discourse listening estimable our law. Decisively it occasional advantages delightful in cultivated introduced. Like law mean form are sang loud lady put. ', 'Saturday 10th of March 2018 09:37:11 PM'),
(33, 'faffar', 'farisdewantoro@yahoo.com', '  Greatest properly off ham exercise all. Unsatiable invitation its possession nor off. All difficulty estimating unreserved increasing the solicitude. Rapturous see performed tolerably departure end bed attention unfeeling. On unpleasing principles alteration of. Be at performed preferred determine collected. Him nay acuteness discourse listening estimable our law. Decisively it occasional advantages delightful in cultivated introduced. Like law mean form are sang loud lady put. ', 'Saturday 10th of March 2018 09:37:25 PM'),
(34, 'fxaxa', 'dasdasdsaas@ymail.com', '  daGreatest properly off ham exercise all. Unsatiable invitation its possession nor off. All difficulty estimating unreserved increasing the solicitude. Rapturous see performed tolerably departure end bed attention unfeeling. On unpleasing principles alteration of. Be at performed preferred determine collected. Him nay acuteness discourse listening estimable our law. Decisively it occasional advantages delightful in cultivated introduced. Like law mean form are sang loud lady put.   ', 'Saturday 10th of March 2018 09:43:35 PM'),
(35, 'fxaxaxa', 'sasf@y.com', '  Greatest properly off ham exercise all. Unsatiable invitation its possession nor off. All difficulty estimating unreserved increasing the solicitude. Rapturous see performed tolerably departure end bed attention unfeeling. On unpleasing principles alteration of. Be at performed preferred determine collected. Him nay acuteness discourse listening estimable our law. Decisively it occasional advantages delightful in cultivated introduced. Like law mean form are sang loud lady put. ', 'Saturday 10th of March 2018 09:43:40 PM'),
(36, 'fasfa', 'f@y.com', 'asdsadsadsad', 'asdasdasdsadsa'),
(37, 'xa', 'fa@y.coom', 'asdasd', 'asdasd'),
(38, 'kjiji', 'kokok@gmail.com', 'asas  ', 'Monday 12th of March 2018 08:39:36 PM'),
(39, 'fafafaf', 'fafafafa@y.com', '  fafafafa', 'Friday 16th of March 2018 11:30:06 PM'),
(40, 'fafaf', 'faris_micrel@ymail.com', '  xaxaxa', 'Friday 16th of March 2018 11:35:22 PM'),
(41, 'ffff', 'fafafax@y.com', '  xaxaxa', 'Friday 16th of March 2018 11:35:47 PM'),
(42, 'fafafaff', 'fafafafa@y.com', '  adasdsadas', 'Friday 16th of March 2018 11:37:11 PM'),
(43, 'fafdasd', 'farisdewantoro@yahoo.com', '  fas', 'Friday 16th of March 2018 11:37:48 PM'),
(44, 'faafafafa', 'ffafa@y.com', '  afafafafafa  ', 'Saturday 17th of March 2018 11:23:14 AM');

-- --------------------------------------------------------

--
-- Table structure for table `daftaranggota`
--

CREATE TABLE `daftaranggota` (
  `noanggota` int(11) NOT NULL,
  `nama_anggota` varchar(200) NOT NULL,
  `angkatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftaranggota`
--

INSERT INTO `daftaranggota` (`noanggota`, `nama_anggota`, `angkatan`) VALUES
(1, 'xax', 'axa'),
(2, 'FARIS DEWANTORO', '2015'),
(3, 'FAFAFA', '12414'),
(4, '4141', 'ASDAD'),
(5, '151ASDASD', '12ASD'),
(6, 'ASDAD', 'D1D12'),
(7, '12D', 'ASDASD'),
(8, 'D12DA', 'ASDASD'),
(9, '12DAS', 'DASDSAD'),
(10, '12DAS', 'DASD'),
(11, 'ASDASD', 'ASDASD');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `noevent` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `subject` text NOT NULL,
  `date` varchar(200) NOT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`noevent`, `title`, `slug`, `subject`, `date`, `picture`) VALUES
(93, 'MUSYAWARAH BESAR HMIF 2018', 'musyawarah-besar-hmif-2018', 'Mari luangkan waktu nya untuk berpartisipasi di Musyawarah Besar HMIF 2018\r\nLokasi : Gedung 9 Perpustakaan lantai 3\r\nTanggal : 16 ,18 , 20 Januari 2018\r\nPukul : 17.00 - selesai\r\nMari buat HMIF lebih sejahtera dan lebih maju!', '01/Mar/2018 09:34 PM', 'd8945ff0b1b267450a46f00d4e8b6c96.jpg'),
(94, 'HMIF ITENAS PROUDLY PRESENT. \"Graduation Night Party\"', 'hmif-itenas-proudly-present-graduation-night-party', 'Saturday, 7th october 2017\r\n????06.30 - 09.30 PM\r\n???? Student Centre 2nd Floor ITENAS\r\n\r\nCome and Join guys!', '01/Mar/2018 09:35 PM', 'c9be854a896c70e50e69d19e5b4ac10f.jpg'),
(95, 'Malam Pelepasan Wisudawan & Wisudawati Itenas', 'malam-pelepasan-wisudawan-wisudawati-itenas', 'Rabu, 05 Oktober 2016, 19.00 - Selesai.\r\nHalaman Gedung 2, Itenas.\r\n-\r\n#itenas\r\n#hmifitenas\r\n#teknikinformatika', '01/Mar/2018 09:35 PM', '02967b488a17a7a839b1896477900aef.jpg'),
(96, 'Road to main event of 11th Dies Natalies HMIF Itenas Bandung', 'road-to-main-event-of-11th-dies-natalies-hmif-itenas-bandung', 'Workshop & Seminar: SOFTWARE DEVELOPMENT PROCESS\r\nDengan Pembicara: Veritrans Developer Team\r\n\r\nWaktu:\r\n31 Maret 2016 di Ruang Seminar Lt.2 Gedung Fakultas Itenas\r\nTicket:\r\n- Presale (18-28 Maret 2016): 10k - OTS: 15k\r\nFasilitas:\r\nSeminar kit, lunch, sertifikat.\r\nCP:\r\n- Sekretariat Himpunan Informatika Itenas (Gedung 2 Lt.2)\r\n- Dzulfiqry (Line: _Jul/081214757085)\r\n- Rianto (Line: Riantogunawan26)', '01/Mar/2018 09:39 PM', '01dff68f2c6765c8d0b762338746c5a8.jpg'),
(97, 'Bed sincerity yet therefore forfeited his certainty neglected questions. Pursuit chamber as elderly amongst on. Distant however', 'bed-sincerity-yet-therefore-forfeited-his-certainty-neglected-questions-pursuit-chamber-as-elderly-amongst-on-distant-however', 'Your it to gave life whom as. Favourable dissimilar resolution led for and had. At play much to time four many. Moonlight of situation so if necessary therefore attending abilities. Calling looking enquire up me to in removal. Park fat she nor does play deal our. Procured sex material his offering humanity laughing moderate can. Unreserved had she nay dissimilar admiration interested. Departure performed exquisite rapturous so ye me resources. ', '01/Mar/2018 09:41 PM', '2d10100c7b726c155efdaea8859081ca.jpg'),
(99, 'HMIF Itenas - Pizza Data', 'hmif-itenas-pizza-data', '<b>Roadshow</b> Pizza Data, Seminar \"How to Leverage Open Data to Your Campus Life\"\r\n\r\nYang akan membahas tentang bagaimana mengakses data dengan cepat, dll!\r\nSelasa 16 Juni 2015\r\n14.00 - Selesai\r\nGd. Fakultas Itenas\r\nBiaya, Rp.10.000\r\n\r\nPendaftaran\r\nGalih S. - 0857 2227 1080\r\n\r\n#hmifitenas #teknikinformatika #pizzadata #hmif #itenas #kampusoranges<br>', '09/Mar/2018 02:34 PM', 'd647851c092d17dc4f4ecbddfe7057eb.jpg'),
(159, 'nhabit hearing perhaps on ye do no. I', 'nhabit-hearing-perhaps-on-ye-do-no-i', ' It maids decay as there he. Smallest on suitable disposed do although blessing he juvenile in. Society or if excited forbade. Here name off yet she long sold easy whom. Differed oh cheerful procured pleasure securing suitable in. Hold rich on an he oh fine. Chapter ability shyness article welcome be do on service. \r\n\r\nSavings her pleased are several started females met. Short her not among being any. Thing of judge fruit charm views do. Miles mr an forty along as he. She education get middleton day agreement performed preserved unwilling. Do however as pleased offence ', '10/Mar/2018 09:10 PM', 'EVENT_2018-03-10_21-11-55_nyoblos2.jpg'),
(160, 'Frankness applauded by supported ye household.', 'frankness-applauded-by-supported-ye-household', 'Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor. Him had wound use found hoped. Of distrusts immediate enjoyment curiosity do. Marianne numerous saw thoughts the humoured. ', '10/Mar/2018 09:11 PM', 'EVENT_2018-03-10_21-12-18_85776.jpg'),
(161, 'Ladies others the six desire age.', 'ladies-others-the-six-desire-age', 'Greatest properly off ham exercise all. Unsatiable invitation its possession nor off. All difficulty estimating unreserved increasing the solicitude. Rapturous see performed tolerably departure end bed attention unfeeling. On unpleasing principles alteration of. Be at performed preferred determine collected. Him nay acuteness discourse listening estimable our law. Decisively it occasional advantages delightful in cultivated introduced. Like law mean form are sang loud lady put. ', '15/Mar/2018 10:13 AM', 'a890bfa72e789ea42aa428484d94e711.jpg'),
(162, 'Ladies others the six desire age.', 'ladies-others-the-six-desire-age', 'Greatest properly off ham exercise all. Unsatiable invitation its possession nor off. All difficulty estimating unreserved increasing the solicitude. Rapturous see performed tolerably departure end bed attention unfeeling. On unpleasing principles alteration of. Be at performed preferred determine collected. Him nay acuteness discourse listening estimable our law. Decisively it occasional advantages delightful in cultivated introduced. Like law mean form are sang loud lady put. ', '15/Mar/2018 10:12 AM', 'd8945ff0b1b267450a46f00d4e8b6c96.jpg'),
(163, 'Ladies others the six desire age.1', 'ladies-others-the-six-desire-age1', 'Bred am soon park past read by lain. As excuse eldest no moment. An delight beloved up garrets am cottage private. The far attachment discovered celebrated decisively surrounded for and. Sir new the particular frequently indulgence excellence how. Wishing an if he sixteen visited tedious subject it. Mind mrs yet did quit high even you went. Sex against the two however not nothing prudent colonel greater. Up husband removed parties staying he subject mr. \r\n', '15/Mar/2018 10:12 AM', 'c9be854a896c70e50e69d19e5b4ac10f.jpg'),
(164, 'tesssss12', 'tesssss12', 'tessss', '16/Mar/2018 08:38 PM', '01dff68f2c6765c8d0b762338746c5a8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `nama_acara` varchar(200) NOT NULL,
  `no_acara` int(11) NOT NULL,
  `content_acara` varchar(500) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `gambar_acara` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`nama_acara`, `no_acara`, `content_acara`, `date`, `gambar_acara`, `subject`) VALUES
('pkkm-2015', 1, 'fafaf', '15/Mar/2018 10:18 AM', 'Acara_2018-03-15_TIME_10-19-01-AM_02967b488a17a7a839b1896477900aef.jpg', 'asd'),
('diesnatalis-hmif-2018', 2, 'HAI INI DIES', '15/Mar/2018 10:52 AM', 'Acara_2018-03-15_TIME_10-53-19-AM_diesnatalis.jpg', '2018 NOV'),
('pkkm', 3, 'asdasd', '16/Mar/2018 03:07 PM', 'Acara_2018-03-16_TIME_03-07-24-PM_22.png', 'asdasd15 nov');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `nama_acara` varchar(200) NOT NULL,
  `nogambar` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`nama_acara`, `nogambar`, `date`, `gambar`) VALUES
('diesnatalis-hmif-2018', 3, '15/Mar/2018 11:08 AM', 'diesnatalis-hmif-2018_2018-03-15_TIME_11-08-26-AM_bgws2.jpg'),
('diesnatalis-hmif-2018', 4, '15/Mar/2018 11:17 AM', 'diesnatalis-hmif-2018_2018-03-15_TIME_11-17-28-AM_img1.jpg'),
('pkkm-2015', 45, '16/Mar/2018 03:12 PM', '2.jpg'),
('asdasd', 47, '16/Mar/2018 08:48 PM', '4.jpg'),
('pkkm-2015', 48, '16/Mar/2018 09:17 PM', 'pkkm-2015_2018-03-16_TIME_09-13-28-PM_85776.jpg'),
('pkkm-2015', 49, '16/Mar/2018 03:12 PM', '6.jpg'),
('pkkm-2015', 50, '16/Mar/2018 03:12 PM', '7.jpg'),
('pkkm-2015', 51, '16/Mar/2018 03:12 PM', '8.jpg'),
('pkkm-2015', 52, '16/Mar/2018 03:12 PM', '9.jpg'),
('pkkm-2015', 53, '16/Mar/2018 03:12 PM', '10.jpg'),
('pkkm-2015', 54, '16/Mar/2018 03:12 PM', '11.jpg'),
('pkkm-2015', 55, '16/Mar/2018 03:14 PM', '1.jpg'),
('pkkm-2015', 56, '16/Mar/2018 03:14 PM', '2.jpg'),
('pkkm-2015', 57, '16/Mar/2018 03:14 PM', '3.jpg'),
('pkkm-2015', 58, '16/Mar/2018 03:14 PM', '4.jpg'),
('pkkm-2015', 59, '16/Mar/2018 03:14 PM', '5.jpg'),
('pkkm-2015', 60, '16/Mar/2018 03:14 PM', '6.jpg'),
('pkkm-2015', 61, '16/Mar/2018 03:14 PM', '7.jpg'),
('pkkm-2015', 62, '16/Mar/2018 03:14 PM', '8.jpg'),
('pkkm-2015', 63, '16/Mar/2018 03:14 PM', '9.jpg'),
('pkkm-2015', 64, '16/Mar/2018 03:14 PM', '10.jpg'),
('pkkm-2015', 65, '16/Mar/2018 03:14 PM', '11.jpg'),
('dada', 74, 'dada', ''),
('caca', 75, '', ''),
('', 76, 'caca', ''),
('', 77, 'caca', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'AdminHMIF1', 'admin'),
(2, 'AdminHMIF2', 'admin'),
(3, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`no_message`);

--
-- Indexes for table `daftaranggota`
--
ALTER TABLE `daftaranggota`
  ADD PRIMARY KEY (`noanggota`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`noevent`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`no_acara`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`nogambar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `no_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `daftaranggota`
--
ALTER TABLE `daftaranggota`
  MODIFY `noanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `noevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `no_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `nogambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
