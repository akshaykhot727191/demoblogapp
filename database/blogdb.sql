-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 05:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(3) NOT NULL,
  `cname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`) VALUES
(1, ' Movie'),
(2, 'IPL'),
(3, 'Lifestyle'),
(4, 'world'),
(5, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'user'),
(2, 'guest', 'guest', 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `dese` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `title`, `category`, `image`, `dese`) VALUES
(1, 'Movie Pilot', ' Movie', '1-MoviePilot-768x477.webp', 'Movie Pilot is one of the largest movie blogs in the world. It has a community of over 30 million readers and contributors. One of the unique things about Movie Pilot is that its content is written by its fans, rather than professional journalists. As a result, the content is more genuine and personable. Accepting content from fans means the editors also have a larger pool of quality articles to choose from, which makes it easier for them to curate excellent content. Many of their fans also discover interesting indie films and lesser-known actors to write about, which are easier to rent for in the search engines.\r\n\r\nMovie Pilot’s focus on crafting quality content has made them one of the most successful movie blogs on the Internet. They currently ranked for over 1.7 million keywords, according to SEMRush.'),
(2, 'Screenrant', ' Movie', '3-ScreenRant-768x437.jpg', 'Screenrant takes movie reporting to the next level. They speak with industry insiders to make bold predictions about upcoming movies and unearth other interesting insights that readers won’t find anywhere else. An example of one of these predictions includes the blog post\r\n\r\nScreenrant attributes its success largely to the knowledge and connections of its writers. They prioritize hiring writers near major film centers, such as Los Angeles and New York. This gives writers the opportunity to interview directors and other industry professionals to get the inside scoop on upcoming movies.'),
(3, 'Mumbai Indians vs Delhi Capitals Dream 11 Prediction: Best picks for MI vs DC IPL 2020 Final', 'IPL', '936356-930467-814292-dc-vs-mi.jpg', 'MI vs DC Dream11 Team - Check My Dream11 Team, Best players list of today\'s match, Mumbai Indians vs Delhi Capitals Final Dream11 Team Player List, MI Dream11 Team Player List, DC Dream11 Team Player List, Dream11 Guru Tips, Online Cricket Tips, Mumbai Indians vs Delhi Capitals Head to Head.\r\nThe first time in the 13 years of IPL history, Delhi Capitals (DC) are making their final appearance in the Indian Premier League (IPL). The side will face champions Mumbai Indians (MI) in the last game of the 13th edition on Tuesday (November 10) at Dubai International Stadium, Dubai.\r\n\r\nDelhi Capitals squared off against Sunrisers Hyderabad (SRH) in Qualifier 2 and defeated them by 17 runs to have a second shot against Mumbai. Delhi had lost Qualifier 1 against Mumbai Indians by 57 runs.\r\n\r\nAs for MI, it is the sixth time they are making it to the final and winning it four times. MI won the IPL titles in 2013, 2015, 2017 & 2019.'),
(4, 'IPL 2020: Delhi Capitals knock Sunrisers Hyderabad out, have second shot at Mumbai in final', 'IPL', '936353-delhi-capitals-beat-sunrisers-hyderabad-to-face-mumbai-in-final.jpg', 'Delhi Capitals (DC) have a second shot against Mumbai Indians (MI) as they defeated Sunrisers Hyderabad (SRH) by 17 runs in the Qualifier 2 of the Indian Premier League (IPL) 2020 at Sheikh Zayed Stadium, Abu Dhabi.\r\nDelhi Capitals (DC) have a second shot against Mumbai Indians (MI) as they defeated Sunrisers Hyderabad (SRH) by 17 runs in the Qualifier 2 of the Indian Premier League (IPL) 2020 at Sheikh Zayed Stadium, Abu Dhabi.\r\n\r\nThis is the first time Delhi have reached the final since IPL\'s inception. They now face last year\'s champions yet again and have a chance to win the trophy.\r\nAfter winning the toss and opting to bat first, DC sent Marcus Stoinis along with Shikhar Dhawan to open the innings. Dhawan led the way with a 50-ball 78 as they posted 189/3 in their 20 overs. against a sloppy SRH.'),
(5, '  Kajal Aggarwal looks ravishing in red, custom-made Manish Malhotra saree for her first Karva Chaut', 'Lifestyle', 'kajal.jpg', 'Kajal and Gautam tied the knot on October 30 in a fairytale-esque wedding in Mumbai. The big day was, however, preceded by several events that included haldi, mehendi and the chooda ceremony.\r\nActress Kajal Aggarwal\'s latest Karva Chauth look has the internet talking. Dressed in a bright red Manish Malhotra ensemble, the newlywed looked ravishing as she celebrated the Hindu festival and observed fast for her husband, entrepreneur Gautam Kitchlu. \r\n\r\nKarva Chauth was celebrated on November 4. \r\nStyled by Ami Patel, Kajal looked vibrant with her bridal glow and elegant as she posed in a fluid gleaming Manish Malhotra scarlet red flowy custom-made saree that came in a light, semi-sheer fabric that accentuated her curves. '),
(6, 'Kareena Kapoor Khan ups maternity style quotient in easy-breezy slip dress; see pics', 'Lifestyle', '935368-kareena.jpg', 'From sporting chic yet comfortable co-ords to looking elegant in a pink House of Masaba attire, Kareena Kapoor Khan has managed to steal hearts with all of her recent looks.\r\nWhen mom-to-be Kareena Kapoor Khan steps out sporting an outfit, be rest assured that it is going to be an instant hit among fashion enthusiasts, her fans and most recently even expectant mothers. \r\n\r\nThough it is not a recent phenomenon, Kareena of late has been giving some major maternity fashion goals, stepping out in comfortable, laid-back attires that seem to set off motherhood fashion trends and up her own style quotient.\r\n\r\nKareena, who is expecting her second child with actor-husband Saif Ali Khan, on Tuesday, stepped out in an easy-breezy white strappy slip dress that featured an asymmetrical high-low hem. The white number also featured black polka dots and a v-neck. '),
(7, 'Trump may cause problems for China before he leaves presidency, say experts', 'world', '936359-trump.jpg', 'Trump could attempt to block visas for more Communist party officials, or make trouble by trying to order US athletes to skip the Beijing 2022 Winter Olympics.\r\nWith US President Donald Trump showing no signs that he will leave office gracefully after his defeat to President-elect Joe Biden in the US Presidential elections, experts and former officials say they fear a growing risk that he could make disruptive moves to double down on priorities and tie his successor\'s hands in his final months in the White House.\r\n\r\nExperts added that China could be a particular target, given Trump\'s repeated efforts to blame Beijing for the Covid-19 pandemic and the economic conditions of the United States, says Mark Magnier in the South China Morning Post.\r\n\r\n\"Trump has promised to punish China for Covid-19, so the question is, what does that mean,\" said Jeff Moon, principal at China Moon Strategies and former National Security Council official.'),
(8, 'Chinese President Xi-Jinping instructs officials to speed up construction of rail line in Tibet, clo', 'world', '936354-xi-jingping.jpg', 'The project would significantly contribute to the economic and social development of the western region, especially in Sichuan province and Tibet Autonomous Region, Xi said.\r\nChinese President  Xi Jinping on Sunday gave orders to officials to speed up the construction of the new $47.8 billion railway project connecting the country\'s southwest Sichuan province to Linzhi in Tibet close to the Indian border in Arunachal Pradesh.\r\n\r\nThe Sichuan-Tibet Railway will go through the southeast of the Qinghai-Tibet Plateau, one of the world\'s most geologically active areas, according to the Chinese official media. It will travel through Ya\'an and enters Tibet via Qamdo, and therefore shorten the travel time from Chengdu to Lhasa from 48 hours to 13 hours.   '),
(9, 'You can now send money through WhatsApp using UPI, here\'s how', 'Technology', '935842-whatsapp.jpg', 'In India, the WhatsApp payment service will compete against other major players like Google Pay and PhonePe, among others.\r\nYou will now be able to send money through popular messaging app WhatsApp as the service received approval from the National Payments Corporation of India (NPCI) to go live on Unified Payment Interface (UPI) in the multi-bank model.\r\n\r\nThe approval comes after two years of testing. \r\n\r\n“We’ve been working on this with the National Payments Corporation of India, who oversee everything to make sure it’s secure and reliable. And we’ve built it using India’s Unified Payments Interface, which makes it easy for anyone to instantly accept payments across different apps -- and for companies to provide people with great services,” Facebook CEO Mark Zuckerberg said in a statement.'),
(10, 'Call of Duty (COD) Mobile: How to obtain Legendary weapons in game? check here', 'Technology', '935610-call-of-duty-new.jpg', 'Just like PUBG, COD Mobile also caters a similar in-game environment for its players with 100 players jumping off to a familiar battlefield in the aim to gun-down each other to achieve the ultimate chicken dinner.\r\nLegendary weapons in the Call of Duty mobile version are a rarity. However, with the introduction of Mythic weapon in COD Mobile, legendary weapons have dropped a level below, but are still hot property.\r\n\r\nLegendary weapons are essentially blueprints. Using the blueprints, the player can have any attachments on a weapon, and drastically change the aesthetic and design with regards to the original blueprint.\r\n\r\nIt is a revamped version of a weapon with a brand new set of designs. Players involved in multiplayer matches who do not have an upgraded weapon because of their ranking can use the blueprint, for the attachments which have already been unlocked.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
