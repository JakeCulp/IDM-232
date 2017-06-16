-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2017 at 09:35 PM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jakeculp_dupowerlifting`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL,
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `major` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `year` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `weight_class` varchar(40) NOT NULL,
  `best_total` varchar(80) NOT NULL,
  `fav_lift` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bio` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `photo` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `name`, `major`, `year`, `weight_class`, `best_total`, `fav_lift`, `bio`, `photo`) VALUES
(1, 'Anand Patel', 'Computer Engineering', 'Senior', '66', '325 lb/147.5 kg Squat, 235 lb/106.6 kg Bench, 452 lb/205 kg Deadlift', 'Overhead Press', 'I like lululemon''s leggings.', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-0/p480x480/18301124_10212929534016173_258441518446764229_n.jpg?oh=5fea9f0250df08a8c8bb529135a7f350&oe=59B7368C'),
(2, 'Abhishek Valanju', 'Information Systems', 'Senior', '85', '185 squat', 'Squat', '', 'https://scontent-lga3-1.xx.fbcdn.net/v/t31.0-8/18121601_1365564330157331_1902778650149467512_o.jpg?oh=8ec5cd0d1a72ed5cf933cda439497998&oe=59B79D29'),
(3, 'Alexander Ly', 'Mechanical Engineering', 'Senior', '66', '1060', 'Squat', 'Began lifting in August 2015. Prior fitness experience includes Muay Thai and casual running. Will be working at Boeing as an aerospace engineer upon graduation.', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/148546_195139003980157_714038183_n.jpg?oh=be03b47363e42358a64c0c5b5bbb4a32&oe=59A1E6A0'),
(4, 'Anthony Mai', 'Information Technology', 'Sophomore', '66', '385kg / 848lb', 'Deadlift', '', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/558576_495247223819822_202406570_n.jpg?oh=ffbfc2376ab15983a6c33d30bb91e68b&oe=59C0FEFC'),
(5, 'Zach Bryceland', 'Computer Engineering', 'Senior', '84', '950', 'Deadlift', '', 'https://scontent-lga3-1.xx.fbcdn.net/v/t31.0-8/17632436_10212703518405456_5561504993068842444_o.jpg?oh=3ead3f4f294e601f152f5b2343608e89&oe=59AC52FB'),
(6, 'Dario Marasco', 'Computer Science', 'Senior', '83', '1077', 'Squat', '', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/3923_10208695334249653_3683080672985265275_n.jpg?oh=3c1a4d644b7f77896c4bbfb8201374e8&oe=59AD2A5E'),
(7, 'William Yang', 'Mechanical Engineering', 'Junior', '80', '915 lbs (Bench, Squat, DL) ', 'Squat', 'I got back to lifting after couple years of being inactive and was initially really weak. I started to do programs when I came back and started hitting PRs! I trained for a year until I started co-op and taking classes on top of that. I''m trying to time manage better this term and get back to the gym. The deload is going to be sad since I haven''t lifted in like months. Hit me up if you see me at the gym, I like meeting new people and learning new things on lifting. ', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/13690652_10206511905221283_4935061267450080370_n.jpg?oh=3a2e9d2d087a9feccf375f7c48e20d61&oe=59ADD2BA'),
(8, 'Cathy White', 'Communications and History\r\n', 'Junior', '57', '665 lbs', 'Bench', 'I like to lift weights.', 'https://scontent-lga3-1.xx.fbcdn.net/v/t31.0-8/14361339_10154091025669541_4047026003445413228_o.jpg?oh=99433ece3817baa6ec18af5b49243842&oe=59A753AE'),
(9, 'Brandon Eng', 'Biomedical Engineering', 'Senior', '66', '950', 'Squat', '', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/16002927_10210082621575272_8717729098833530630_n.jpg?oh=3c9489520d3dbd6b8699f6d2b455befe&oe=59AA4C7D'),
(10, 'Ray P', 'Immunology', 'Masters', '66', '776.2lb', 'Squat', 'Electrolytes are what plants crave', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/16388347_1455416407811049_5506300867056775010_n.jpg?oh=3777fa67656d9704b7f90e63461ad220&oe=59B42F24'),
(11, 'Joey Franko', 'Civil Engineering', 'Junior', '83kg or 93kg', '1215 Raw, 1420 Equipped', 'Deadlift', '', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/1797540_701408843234300_5644179005513162256_n.jpg?oh=c8deda63f3390c1abf6170069ed1b21a&oe=59C2E2BC'),
(12, 'Lawrence Lindawan', 'MPH Biostatisics', '1st year Grad student', '93', '1160', 'Squat', 'Happiness is perfecting new skills. Interested in lifting, rehab, and physical therapy. ', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/11693925_10208163249588116_2470418951334190392_n.jpg?oh=c74e296ab9bc0fb7515b7fcb73019691&oe=597DDAC8'),
(13, 'Josh Dunkle', 'Business', 'Pre-Junior', '93-105', '1475', 'Squat', '', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/18425213_10154550275996884_5081048556185990032_n.jpg?oh=d1ac979ee9eebc87f7ed2599f43aa046&oe=59BD66D2'),
(14, 'Michael Shmukler', 'Biomedical Engineering', 'Senior', '83 kg (Moving up to 93 kg)', '978 lbs (335 lb Squat, 231 lb Bench, 412 lb Deadlift)', 'Squat', '', 'https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-1/p320x320/17021691_1572646736083576_7364755770529043972_n.jpg?oh=3e3dd57312e7764ec13048bdc6b1c1e0&oe=5978E942'),
(15, 'Evan Louderback', 'Chemical Engineering', 'Senior', '93kg', '1246 lb', 'Deadlift', 'Only goes to the gym to socialize', 'https://scontent.fash1-1.fna.fbcdn.net/v/t1.0-1/c0.0.200.200/p200x200/12814057_10209018322638586_8584930769379010720_n.jpg?oh=88c1e8f634cada2f9b499f0fdc54de7c&oe=59C1628E'),
(16, 'Jake Culp', 'Interactive Digital Media', 'Junior', '105kg', '', 'Bench', 'I made this site.', 'http://tvwriter.net/wp-content/uploads/cache/2012/06/jesus-christ-thumbs-up/4273433525.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
