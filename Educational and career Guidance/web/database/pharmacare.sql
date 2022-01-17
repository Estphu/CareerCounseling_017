-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2020 at 11:29 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desertcr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `P_key` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`P_key`, `Name`, `Email`, `Subject`, `Message`) VALUES
(11, 'Mr Kumar', 'offers@visionsoftwares.com', 'Special Offers on Websites, IT Software & Hardware Solutions - Vision Technologies', '\r\n*Special Offers from Vision Technologies*\r\n\r\n*HR & Payroll Software*  - AED 2,999/ onwards\r\n(www.visionsoftwares.com/hrms)\r\n\r\n*Accounting Software*  - AED 1,999/- only\r\n(www.visionsoftwares.com/accounts)\r\n\r\n*Cheque Printing Software* â€“ AED 599/- only \r\n(www.visionsoftwares.com/cheque)\r\n\r\n*Fingerprint / RFID / Door Access / FaceID Time Attendance System* - AED 1,099/- onwards\r\n(www.visionsoftwares.com/time)\r\n\r\n*SMS Credits*  - AED 5.75 fils only\r\n(www.visionsoftwares.com/sms)\r\n\r\n*Website Designing & Hosting* - AED 999/- only\r\n(www.visionsoftwares.com/webdesign)\r\n\r\n*Auto Garage Software*  - AED 3,999/- only \r\n(www.visionsoftwares.com/autogarage)\r\n\r\n*Call Monitoring Software*  - AED 1,999/- only \r\n(www.visionsoftwares.com/call)\r\n\r\n*GYM Software*  - AED 2,999/- only*\r\n(www.visionsoftwares.com/gym)\r\n\r\n*Laboratory Information Management Software*  - AED 4,999/- onwards\r\n(www.visionsoftwares.com/lab)\r\n\r\n*Medical / Dental / Homecare Software*  - AED 500/ month only\r\n(www.visionsoftwares.co'),
(12, 'Madhuban Shrestha', 'madhubanms@hotmail.com', 'booking', 'I booked for overnight safari. But I did not get confirmation reply.'),
(13, 'Madhuban Shrestha', 'madhubanms@hotmail.com', 'booking', 'I booked overnight desert safari. But I did not get confirmation reply.'),
(14, 'Mark Doe', 'e4rn0w@gmail.com', 'Congratulations - Your registration was confirmed !', 'Hey,\r\n\r\nCongratulations!\r\n\r\nYour registration has been confirmed.\r\n\r\nAll you need to do now is visit the link below to get started, Get Access Now.\r\n\r\nhttp://bit.do/earn0w\r\n\r\nThe first step has been taken, count yourself lucky.\r\n\r\nRegards,\r\n\r\nMark');

-- --------------------------------------------------------

--
-- Table structure for table `formm`
--

CREATE TABLE `formm` (
  `P_key` int(20) NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `code` text NOT NULL,
  `country` varchar(20) NOT NULL,
  `travel` text NOT NULL,
  `returnn` text NOT NULL,
  `adult` varchar(20) NOT NULL,
  `kids` varchar(20) NOT NULL,
  `tour` varchar(100) NOT NULL,
  `book` varchar(20) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formm`
--

INSERT INTO `formm` (`P_key`, `name`, `lastname`, `email`, `phone`, `address`, `city`, `state`, `code`, `country`, `travel`, `returnn`, `adult`, `kids`, `tour`, `book`, `msg`) VALUES
(26, 'Patricia', 'Rmeily', 'p.i.rmeily@gmail.com', '0096170196966', 'Dubai UAE Sports City Elite Residence 8', 'UAE', 'UAE', '971', 'Dubai', '2020-02-09', '2020-02-09', '1', 'No of Kids', 'VIP Desert Safari AED-185', 'Not Confirm', ' '),
(27, 'Carolina', 'Jimenez', 'caroncha@hotmail.com', '+12395950013', 'Hotel Le Meridien Mina Seyahi Beach Resort', 'Dubai', 'na', 'United States', 'Dubai', '2020-02-10', '2020-02-10', '2', '0', 'Red Dune Safari With Quad Bike AED-300', 'Confirm', ' '),
(28, 'Madhuban Man', 'Shrestha', 'madhubanms@hotmail.com', '559340264', 'J5 Rimal Hotel Apartment', 'Al Muraqqabad Road, Deira', 'Deira', '27070', 'The United Arab Emir', '2020-02-29', '2020-03-01', '2', 'No of Kids', 'Overnight Desert Safari AED-250', 'Confirm', ' '),
(29, 'Madhuban Man', 'Shrestha', 'madhubanms@hotmail.com', '559340624', 'J5 Rimal Hotel Apartment', 'Al Muraqqabad Road, Deira', 'Deira', '27070', 'The United Arab Emir', '2020-02-29', '2020-03-01', '2', '0', 'Overnight Desert Safari AED-250', 'Confirm', ' I just booked earlier also. But I did not get any reply.'),
(30, 'Ruth', 'Ruth', 'mcfarlaneruth6@gmail.com', '85031234567', 'http://easylisting.xyz', 'Ð ÑšÐ Ñ•Ð¡ÐƒÐ Ñ”Ð Ð†Ð Â°', 'Ð Â Ð Ñ•Ð¡ÐƒÐ¡ÐƒÐ Ñ‘Ð¡Ð', '', 'Oman', '', '', '5', '9', 'UAE City Tour AED-620', 'Not Confirm', 'Hi, \r\nIf you read these words, your domain is in a global database of less-than-honest marketers who spam forms on public web pages for backlinks or trying to sell some product you donâ€™t need. \r\nYou should have noticed that the process of collecting leads, growing an email list, and giving people opportunities to contact you has spam back, which might be frustrating. More than that, it may hurt your business because, in a pile of garbage, essential messages get lost sometimes. \r\nItâ€™s vital to stop spam form entries. \r\nHere we can help! \r\nWe are Safe Intelligence Digital Marketing Agency who guarantee to rid you of this scourge or at least significantly reduce the number of spam messages to help save your time, money, and mental resources. So you could pay more attention to essential things as working with your clients, instead of reading garbage and fighting spambots. \r\nPlease visit http://easylisting.xyz to get professional help. \r\n \r\nFeedback from our clients \r\n \r\nâ€œThank you, guys! Itâ€™s a great job youâ€™ve made! I highly recommend your service.â€ \r\n \r\nâ€œToo much spam was hurting my business; important messages got lost sometimes. After the work that youâ€™ve done, Iâ€™ve stopped receiving hundreds of spam messages daily in feedback forms. Now important messages donâ€™t go unnoticed. The business feels fine. Thank youâ€ \r\n \r\nFind out how you can stop annoying spam right now! Visit http://easylisting.xyz'),
(31, 'Joshuafex', 'Joshuafex', 'no-replyGreessake@gmail.com', '88229481473', 'https://www.no-site.com', 'Lar', 'Iran', '', 'Iran', '', '', '5', '9', 'Ferrari World AED-260', 'Not Confirm', 'GÐ¾Ð¾d dÐ°y!  desertcrescent.ae \r\n \r\nDid yÐ¾u knÐ¾w thÐ°t it is pÐ¾ssiblÐµ tÐ¾ sÐµnd Ð°ppÐµÐ°l whÐ¾lly lÐµgÐ°l? \r\nWÐµ suggÐµsting Ð° nÐµw lÐµgÐ°l mÐµthÐ¾d Ð¾f sÐµnding businÐµss Ð¾ffÐµr thrÐ¾ugh ÑÐ¾ntÐ°Ñt fÐ¾rms. SuÑh fÐ¾rms Ð°rÐµ lÐ¾ÑÐ°tÐµd Ð¾n mÐ°ny sitÐµs. \r\nWhÐµn suÑh businÐµss Ð¾ffÐµrs Ð°rÐµ sÐµnt, nÐ¾ pÐµrsÐ¾nÐ°l dÐ°tÐ° is usÐµd, Ð°nd mÐµssÐ°gÐµs Ð°rÐµ sÐµnt tÐ¾ fÐ¾rms spÐµÑifiÑÐ°lly dÐµsignÐµd tÐ¾ rÐµÑÐµivÐµ mÐµssÐ°gÐµs Ð°nd Ð°ppÐµÐ°ls. \r\nÐ°lsÐ¾, mÐµssÐ°gÐµs sÐµnt thrÐ¾ugh fÐµÐµdbÐ°Ñk FÐ¾rms dÐ¾ nÐ¾t gÐµt intÐ¾ spÐ°m bÐµÑÐ°usÐµ suÑh mÐµssÐ°gÐµs Ð°rÐµ ÑÐ¾nsidÐµrÐµd impÐ¾rtÐ°nt. \r\nWÐµ Ð¾ffÐµr yÐ¾u tÐ¾ tÐµst Ð¾ur sÐµrviÑÐµ fÐ¾r frÐµÐµ. WÐµ will sÐµnd up tÐ¾ 50,000 mÐµssÐ°gÐµs fÐ¾r yÐ¾u. \r\nThÐµ ÑÐ¾st Ð¾f sÐµnding Ð¾nÐµ milliÐ¾n mÐµssÐ°gÐµs is 49 USD. \r\n \r\nThis lÐµttÐµr is ÑrÐµÐ°tÐµd Ð°utÐ¾mÐ°tiÑÐ°lly. PlÐµÐ°sÐµ usÐµ thÐµ ÑÐ¾ntÐ°Ñt dÐµtÐ°ils bÐµlÐ¾w tÐ¾ ÑÐ¾ntÐ°Ñt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nWhatsApp - +375259112693'),
(32, 'Adenaya Ewunuga', 'Adenaya Ewunuga', 'sphereemerald@gmail.com', '84764943223', 'http://google.com', 'Al Ladhiqiyah', 'Syria', '', 'Syria', '', '', '8', '3', 'Dinner in Desert AED-135', 'Not Confirm', 'Dear Sir/Ma, \r\nWe humbly introduce our company N.Y & TANTIMONIQUE INTERNATIONAL, we are an export company. We have been in business touching all countries of the world productively for 17 years. \r\n \r\nWe export Agricultural products; \r\nCocoa Beans, Cocoa Powder, HardWood Charcoal, Bitter Kolanut (Garcinia Kola), Ginger, Palm Oil \r\nAll types of Hardwoods (processed & Unprocessed Woods), Groundnut & Cashew Nuts \r\nHibiscus Flower, Shea Butter, Cassava Etc \r\n \r\nSea Products; \r\nTillapia Fillet, Mackarel, Titus, Tillapia, Cat fish, crabs, finger Fish, snails, shrimps, crayfish etc \r\n \r\nInverters; \r\n1KW â€“ 500 KW Inverters \r\n \r\nSperm Booster Roots; \r\nThis roots increase greatly the Male Sperm Motility and Morphology. It helps fertility and easy conception. \r\n \r\nWe look forward to hearing and working with you for a profitable business relationship. \r\nPlease accept the assurances of our highest corporate regards. \r\n \r\nWarm regards, \r\nAdenaya Ewunuga \r\nMD \r\nN.Y & TANTIMONIQUE INTERNATONAL \r\nhttp://www.nyexporter.com/ \r\nWhatsapp - +2347061983384 \r\nPhone - +2347055577725'),
(33, 'dyncInheshy', 'dyncInheshy', 'czahtSekWeicypeetere@excitedxnx.online', '82294963817', 'http://creditscorewww.com/\r\n', 'New York', 'USA', '', 'Nepal', '', '', '4', '4', 'Musandam Dibba Tour AED-510', 'Not Confirm', 'http://creditscorewww.com/  what is my credit score  http://creditscorewww.com/  - annual credit report completely free experian  <a href=\"http://creditscorewww.com/ \">annualcreditreport com official website </a> '),
(34, 'Heatherunolf', 'Heatherunolf', 'atrixxtrix@gmail.com', '82341859254', 'http://no-site.com', 'Suva', 'Japan', '', 'Japan', '', '', '8', '3', 'Fishing Deira Creek AED-180', 'Not Confirm', 'Dear Sir/mdm, \r\n \r\nHow are you? \r\n \r\nWe supply Professional surveillance & medical products: \r\n \r\nMoldex, makrite and 3M N95 1860, 9502, 9501, 8210 \r\n3ply medical, KN95, FFP2, FFP3, PPDS masks \r\nFace shield/medical goggles \r\nNitrile/vinyl/PP gloves \r\nIsolation/surgical gown lvl1-4 \r\nProtective PPE/Overalls lvl1-4 \r\nIR non-contact thermometers/oral thermometers \r\nsanitizer dispenser \r\nCrystal tomato \r\n \r\nLogitech/OEM webcam \r\nMarine underwater CCTV \r\nExplosionproof CCTV \r\n4G Solar CCTV \r\nHuman body thermal cameras \r\nfor Body Temperature Measurement up to accuracy of Â±0.1?C \r\n \r\nWhatsapp: +65 87695655 \r\nTelegram: cctv_hub \r\nSkype: cctvhub \r\nEmail: sales@thecctvhub.com \r\nW: http://www.thecctvhub.com/ \r\n \r\nIf you do not wish to receive email from us again, please let us know by replying. \r\n \r\nregards, \r\nCCTV HUB'),
(35, 'Mike Fleming\r\n', 'Mike Fleming\r\n', 'no-replyonect@google.com', '85347595741', 'https://www.google.com', 'Willemstad', 'Netherlands Antilles', '', 'France', '', '', '3', '9', 'HeliCopter Tour AED-920', 'Not Confirm', 'GÐ¾Ð¾d dÐ°y! \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.monkeydigital.co/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nthank you \r\nMike Fleming\r\n \r\nMonkey Digital \r\nsupport@monkeydigital.co'),
(36, 'Xxx', 'Yyy', 'ibrahimzia44@gmail.com', '031312345678', 'Abbottabad jhangu', 'Abtbd', 'Kpk', '00000', 'Pakistan', '2020-08-13', '2020-08-27', '4', '5', 'Evening Desert Safari AED-290', 'Not Confirm', ' Hello testing');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('', ''),
('admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`P_key`);

--
-- Indexes for table `formm`
--
ALTER TABLE `formm`
  ADD PRIMARY KEY (`P_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `P_key` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `formm`
--
ALTER TABLE `formm`
  MODIFY `P_key` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
