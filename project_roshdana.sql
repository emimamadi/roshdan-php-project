-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 08:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_roshdana`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `category` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `author`, `category`, `content`, `date`) VALUES
(5, 'hasan agha', 'hasan', 'dfsdffsdflskd;kfl', 'fsdkfskdmklfmlkfsm\r\ndfjksndkjfskdnfkjsndfkljfnsdkl\r\ndfjksdkfnsdjklnflskdnflksdjfnlskjdnfkjsdnlksd\r\ndjkfsnsdkfsffffffffffffffffffffffff\r\nfkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk\r\n', '2020-01-29'),
(6, 'kmfvkldmflkmdgflkmgdlkmfgf;lfdm', 'shamsi', 'fsdfmsdmlksdmfslk', 'dsanfjnf\r\ndfsdnfkjsnkd\r\nfdsfnsjkdnfskjdnfkjs\r\ndfskjdnfjkdnfjksnfjksd\r\ndsjkfndjknfskjnfjks\r\ndsfskdnkdnjlkdsnfdlnflds\r\ndsfksndfklnsdklfn;lksf\r\ndfsklfkl;msd;lmflkds\r\ndfsskldnflksdnflsk;nsdl;kf', '2018-01-29'),
(7, 'sdasdasds', 'sadasdasdsa', 'sadasdsdas', 'skalmdlamslalsdaslmdl\r\nsakdlmklasmdalsmdal\r\nslkdmklams;kmdlka;lmkas\r\nskmald;kmsal', '2021-10-13'),
(8, 'جالبه؟؟', 'naghi', 'social', ' sdkalsmd;lkasmalsk\r\nklsdmals;km;lasmdl\r\nakjdnkjsandjklsnjdknslkd\r\nknsjkdlnasjknlksandksnad\r\nklklsdmaslk;dmsks;\r\nsdaksnjknsajkskdas\r\nsadjfnasjkfjkasnakjf\r\nsdjansjksnaskja\r\nsadjkansdkjansdkld', '2021-10-12'),
(9, 'سلام چطوری  عباس آفا؟', 'abas', 'اجتماعی', '  سیسسیدشنمسدی\r\nسیسدشیشسنتمدیشنتمسدی\r\nسنیدشنستمدینمتشسدیتنشس\r\nنتسدینشسنتیدشستن\r\nسشینتسدیشسنتیدسشن\r\nسشتیندشسنتدیسشنتدیتشن\r\nسشیندشسنمیدشسمنیدئ\r\n21212222222222222222222222200000000000000000\r\nئکمئکمئکمئکم\r\n1111111111', '2021-10-20'),
(10, 'سلام گوگولی؟؟چطوری؟', 'naghi', 'اجتماعی', '     سینسشمسکشئکمنسشئکمینس\r\nسینمدشسدیشمکتسدکیمنسشش\r\nسشنتیدمتنشسدینمتسشدتنمی\r\nسنیدنشسدینمسدمشس\r\nسشتینتشسدذتنیدستنسدیتنشس\r\nسبیذشئدذسدیذسشذینتشساذیساشذیاسذشتای\r\nسشنمیتمسشنتینکمسشتیمش', '2021-10-26'),
(11, 'حسن آقا چطوره؟؟5545', 'hasan', 'اجتماعیnkn', '    سینئشسمیئشمسئیشس\r\nینئشسنمیئشسمیئشنمس\r\nسیدمنشتسدتنمشسدنمتی\r\nسیشندشسمنیدشسمندنمسش\r\nسیتدشتنسدیتنسشدی\r\nسیندشستنیدسشنمی\r\nسینمتشستیشسنمیت\r\nسیتستشیهنت\r\nljjiijoi', '2021-10-26'),
(12, 'سلام ممد آقا؟؟', 'naghi', 'تکنولوژی', '   سیشسدینمشسدنمشس\r\nسیشمنشسمئینشکمس\r\nسشنیدسمیئشسم\r\nسینمئشسیمکنئشکسم\r\nسینئشنسئیشکمسیئ', '2021-11-16'),
(13, 'گلابی چطوری؟؟', 'golabi', 'میوه', 'سینشسیدنتسشدینتش\r\nسشینتدسشنیسشن\r\nسنشیمدنمیسئسشم\r\nندسینسیدنمشس\r\nسندیسمسندم', '2021-11-16'),
(14, 'گلابی چطوری؟؟', 'golabi', 'میوه', 'سینشسیدنتسشدینتش\r\nسشینتدسشنیسشن\r\nسنشیمدنمیسئسشم\r\nندسینسیدنمشس\r\nسندیسمسندم', '2021-11-16'),
(15, 'تقی چطوره؟؟', 'golabi', 'تکنولوژی', 'سینیمسنس\r\nسیندسمیدشس\r\nسیندنمسشدیش\r\nسیدستنیسدنیمس\r\nسیدسنتدین\r\nسیستندسنتی\r\nسیتنسینتمشسدنم\r\nسینتسشدنمیتد\r\nسییسدسیشتندیس', '2012-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fullname`, `username`, `password`) VALUES
(61, 'dddddddddddd', 'wwwwwwww', 'wwwwwwwwwww'),
(62, 'dddddddddddd', 'wwwwwwww', 'wwwwwwwwwww'),
(63, 'dddddddddddd', 'wwwwwwww', 'wwwwwwwwwww'),
(64, 'ccccc', 'ddddddddddd', 'aaaaaaaaa'),
(65, 'hhhhhh', 'hhhhhhhh', 'hhhhhhhhhh'),
(66, 'admin', 'admin', 'admin'),
(67, 'admin', 'admin', 'admin'),
(68, 'hhhhhh', 'hhhhhhhh', 'hhhhhhhhhh'),
(69, 'ccccc', 'ddddddddddd', 'aaaaaaaaa'),
(70, 'taghi', 'naghi', '662'),
(71, '999999999', '99999999', '99999999999'),
(72, 'oooo', '99999', '2222'),
(73, 'admin', 'admin', 'admin'),
(74, 'mamad', 'mamad', 'mamad'),
(75, 'shamsi', 'shamsi', 'shamsi'),
(76, 'abas', 'abas', 'admin'),
(77, 'hasan', 'hasan', 'hasani'),
(78, 'golabi', 'golabi', 'mamad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
