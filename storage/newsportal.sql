-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2023 at 11:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'prio@webwire.com', 'prio1234');

-- --------------------------------------------------------

--
-- Table structure for table `conf`
--

CREATE TABLE `conf` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descritpion` text DEFAULT NULL,
  `date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `deadline` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conf`
--

INSERT INTO `conf` (`id`, `title`, `descritpion`, `date`, `location`, `img_url`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 'WEBWIRE TRIBUNE SCULPTURE', 'With a renewed vision and an array of historical and commissioned works, WebWire Tribune Sculpture 2023 brings together a wide array of inspiring artists from around the world. The exhibition is curated by independent curator and writer Fatoş Üstek and is presented by distinguished international galleries.', '2023-11-30', 'Dhake Bangladesh', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700817752/newsportal/zdp2xjznei5fefy80bhw.jpg', '30 November - 1 December 2023', '2023-11-24 03:22:33', '2023-11-24 03:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(40) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `content` text DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `views` int(11) DEFAULT 1,
  `likes` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `author`, `url`, `description`, `created_at`, `updated_at`, `content`, `source`, `location`, `type`, `views`, `likes`) VALUES
(5, 'Studios got hacked', 'Ryan Gosling', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700777053/newsportal/tu56wmd1eem0hdqko3xw.png', 'The account is hacked, but it seems Hotta Studio does not care about this.', '2023-11-23 22:04:14', '2023-11-23 22:04:14', 'The main worry that is going around for that scenario is:\n\nif you didn’t unbind the guest account, someone can “access” (either through hacking, brute forcing, phishing, reusing compromised password… no one knows at this point) your guest account and unbind your mail. There is no verification needed to unbind anything. So even if you bind your mail, someone can just unbind it if they somehow access your guest account.\n\nNow if you unbind everything except for your mail, they have to “access” your mail to get in, which should be harder to hack but still vulnerable to phishing, brute forcing but this is where 2FA comes in as extra security.\n\nSo difference between guest and email logins for security is just the 2FA + maybe big corpo is more secure against actual hacking attempts', 'BBC', 'UK', 'media', 1, 1),
(6, 'Israel-Hamas war live updates', 'Marlene Lenthang', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700784822/newsportal/uft34mx1eoossztvq3io.webp', 'Hostage release and Gaza truce to start Friday, Qatar says', '2023-11-24 00:13:43', '2023-11-24 00:13:43', 'There are just two doctors left at Al-Shifa hospital in the Gaza Strip, the hospital’s head of plastic surgery, Dr. Ahmed El Mokhallalati, told NBC News.\n\n\"Most of the staff have left yesterday, except for two doctors, me and my colleague and one nurse all in the hospital,\" he said Thursday.\n\nThough he described the situation as \"very, very difficult,\" he said they\'re focused on an estimated 200 patients left at the hospital, which was raided by Israeli military last week under claims that it was used as a Hamas stronghold. ', 'NBC', 'UK', 'world', 1, 1),
(7, 'Trump rages about judge', 'Christina Zhao', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700792424/newsportal/ipcbcoeonf489qgmfevk.webp', 'law clerk while gag order is paused in New York fraud trial', '2023-11-24 02:20:24', '2023-11-24 02:20:24', 'A New York appeals court last week temporarily blocked the gag order, issuing a stay after Trump’s attorneys had appealed the order as “unconstitutional.” The pause will be in effect until at least Nov. 27, when a panel of appeals court judges will consider the issue.\r\n\r\nWith the gag order on hold, Trump took to his Truth Social platform on Thursday morning and accused Engoron of criminally defrauding him and the state of New York. He also alleged that the judge’s law clerk is “Politically Biased & Corrupt,” writing that the clerk sits “by his side on the \'Bench\' & tell him what to do.”\r\n\r\nTrump, in the same post, called President Joe Biden “crooked” and addressed “all of the other Radical Left Lunatics, Communists, Fascists, Marxists, Democrats, & RINOS, who are seriously looking to DESTROY OUR COUNTRY.”', 'NBC news', 'USA', 'politics', 2, 1),
(8, 'Microsoft, can we please just call it Windows 11.1 already?', 'Tom Warren', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700809720/newsportal/spftu8giotjzismvs9b7.webp', 'Windows 11.1 and point updates make way more sense than Windows 11 22H2 and Windows 11 2023 Update.', '2023-11-24 07:08:41', '2023-11-24 07:08:41', 'A few years ago multiple sources told me that Microsoft was looking at naming its updates after animals or people, but ultimately decided against this for a variety of reasons, not least because people can do bad things and you don’t want an OS named after a bad person. Instead, Microsoft transitioned to monthly names over point releases, and now we’re back to yearly names that don’t really mean much when you consider Windows 11 has had multiple big updates in 2023 alone.\r\n\r\nApple successfully uses point releases for iOS, iPadOS, and watchOS, even if it stubbornly sticks to naming macOS releases after locations. It’s easy for me to troubleshoot a family member’s iPhone and get a quick and clear idea of what version of iOS they’re running. On Windows, the 23H2 version number doesn’t really tell me much, because there are monthly updates that can add features on top. It’s also far easier to Google “Windows 11.1” than “Windows 11 2023 Update November update” or “Windows 23H2 November features” to find out what got added.', 'The Verge', 'USA', 'tech', 1, 1),
(9, 'Davis Cup Finals 2023', 'Jonathan Jurejko', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700815646/newsportal/tsk3atiqdxgrh8xzze4c.jpg', 'Novak Djokovic told a group of British fans to \"shut up\" as they tried to drown out his interview with musical instruments after their team were knocked out of the Davis Cup by Serbia.', '2023-11-24 08:47:25', '2023-11-24 08:47:25', 'Britain lost the quarter-final 2-0 as Cameron Norrie was unable to inflict a rare defeat on the world number one.\r\n\r\n\"You should learn how to show some respect,\" Djokovic told the fans.\r\n\r\nJack Draper was beaten 7-6 (7-2) 7-6 (8-6) by Miomir Kecmanovic in the opening match of the best-of-three tie.\r\n\r\nThat result meant Norrie had to beat 24-time Grand Slam champion Djokovic for the first time in his career.\r\n\r\nBut Djokovic showed his class as he cruised to a 6-4 6-4 win and set Serbia up for a semi-final against Italy on Saturday.\r\n\r\nAfter an assured and drama-free performance, Djokovic had the spiky exchange prior to his on-court interview, challenging the small number of British fans who act as the team\'s band.\r\n\r\nHe had celebrated at the end of the first set by blowing a kiss to a British supporter heckling him and also cupped his ear in their direction at the end of the match.\r\n\r\n\"It\'s normal that sometimes fans step over the line and in the heat of the moment you react too, and in a way show that you don\'t allow this kind of behaviour,\" Djokovic said.\r\n\r\n\"They can do whatever they want, but I\'m going to respond to that. That\'s what happened.\r\n\r\n\"I was trying to talk and they were purposely starting to play the drums so that I don\'t talk and they were trying to annoy me the entire match.\"\r\n\r\nBritain, who last won the Davis Cup in 2015, will not automatically qualify for the 2024 knockout stage after their quarter-final exit in Malaga.\r\n\r\nUnless they receive a wildcard for the Final Eight, Leon Smith\'s team will have to negotiate the same path as this year - a qualifying tie early next year, followed by the round-robin stage.', 'BBC Sport in Malaga', 'UK', 'sports', 1, 1),
(10, 'Some US food banks see increased demand amid holidays', 'Aisha Frazier', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700816332/newsportal/uectare81di5asiqamtq.avif', '\"Hunger is not just something that happens within the holidays.\"', '2023-11-24 08:58:52', '2023-11-24 08:58:52', 'As families across the nation prepare for the holiday season, some food banks across the United States dedicated to fighting hunger say they are experiencing an increase in demand following the end of pandemic-era SNAP benefits, an increase in inflation, and other regional factors.\r\n\r\nCaroline De La Fuente helps care for her 16 grandchildren while their parents work to make ends meet and is one of the thousands of people who, according to data, depend on food banks. She told ABC News that without the San Antonio Food Bank, her family and others in the community wouldn\'t eat.\r\n\r\n\"A lot of people would go hungry,\" she said. \"Kids would go hungry at night. People would not be able to celebrate Thanksgiving.\"\r\n\r\nDuring the pandemic, states provided Supplemental Nutrition Assistance Program (SNAP) households with extra pandemic-related benefits called emergency allotments, making it easier for families to put food on the table. Those measures ended in March, putting a strain on many households.\r\n\r\nDe La Fuente said her family\'s SNAP benefits were cut, but other factors such as rising prices make it harder for her family to make ends meet.\r\n\r\n\"The price of food has gone up tremendously,\" she said. \"The budget only goes so far when prices are going up, up, up and pay is not going up like that.\"\r\n\r\nRadha Muthiah, CEO of Capital Area Food Bank, which services the greater Washington, D.C., area, said it\'s important not to forget about those who are food insecure.\r\n\r\nMuthiah told ABC News that while sometimes there are seasonal surges in demand, this year the Capital Area Food Bank has experienced a much higher demand than they initially projected.\r\n\r\n\"We\'re in November, and we have consistently been distributing about 30 to 35% more than what we had targeted each month,\" she said.\r\n\r\nMichael Flood, CEO of the Los Angeles Regional Food Bank, told ABC News it serves around 900,000 people a month, which is more than it did several months ago.\r\n\r\nHe said that this year LA Regional Food Bank has had to augment its food supply by purchasing the food itself due to that increased amount, which can be challenging.', 'ABC News', 'UK', 'bussiness', 1, 1),
(11, 'Israel Gaza war: History of the conflict explained', 'By Nomia Iqbal & Alex Lederman', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700817381/newsportal/qktzsxrezrapk8yss1ft.webp', 'The Palestinian militant group Hamas launched an unprecedented assault on Israel on 7 October, with hundreds of gunmen infiltrating communities near the Gaza Strip.', '2023-11-24 09:16:20', '2023-11-24 09:16:20', 'About 1,200 people were killed, while the Israeli military says more than 200 soldiers and civilians, including women and children, were taken to Gaza as hostages.\r\n\r\nMore than 14,000 Palestinians in Gaza have been killed in air and artillery strikes carried out by the Israeli military in response, according to the Hamas-run health ministry in Gaza. \r\n\r\nBritain took control of the area known as Palestine following the defeat of the Ottoman Empire, which ruled that part of the Middle East, in World War One.\r\n\r\nThe land was inhabited by a Jewish minority and Arab majority, as well as other, smaller ethnic groups.\r\n\r\nTensions between the two peoples grew when the international community gave the UK the task of establishing a \"national home\" in Palestine for Jewish people.\r\n\r\nThis stemmed from the Balfour Declaration of 1917, a pledge made by then Foreign Secretary Arthur Balfour to Britain\'s Jewish community.\r\n\r\nThe declaration was enshrined in the British mandate over Palestine and endorsed by the newly-created League of Nations - forerunner of the United Nations - in 1922.\r\n\r\nTo Jews Palestine was their ancestral home, but Palestinian Arabs also claimed the land and opposed the move.\r\n\r\nBetween the 1920s and 1940s, the number of Jews arriving there grew, with many fleeing from persecution in Europe, especially the Nazi Holocaust in World War Two.\r\n\r\nViolence between Jews and Arabs, and against British rule, also increased.\r\n\r\nIn 1947, the UN voted for Palestine to be split into separate Jewish and Arab states, with Jerusalem becoming an international city.\r\n\r\nThat plan was accepted by Jewish leaders but rejected by the Arab side and never implemented.\r\n\r\nIn 1948, unable to solve the problem, Britain withdrew and Jewish leaders declared the creation of the State of Israel.\r\n\r\nIt was intended to be a safe haven for Jews fleeing persecution, as well as a national homeland for Jews.\r\n\r\nFighting between Jewish and Arab militias had been intensifying for months, and the day after Israel declared statehood, five Arab countries attacked.\r\n\r\nHundreds of thousands of Palestinians fled or were forced out of their homes in what they call Al Nakba, or the \"Catastrophe\"\r\n\r\nBy the time the fighting ended in a ceasefire the following year, Israel controlled most of the territory. \r\n\r\nJordan occupied land which became known as the West Bank, and Egypt occupied Gaza.\r\n\r\nJerusalem was divided between Israeli forces in the West, and Jordanian forces in the East.\r\n\r\nBecause there was never a peace agreement there were more wars and fighting in the following decades.\r\n\r\nIn a war in 1967, Israel occupied East Jerusalem and the West Bank, as well as most of the Syrian Golan Heights, Gaza and the Egyptian Sinai peninsula.\r\n\r\nMost Palestinian refugees and their descendants live in Gaza and the West Bank, as well as in neighbouring Jordan, Syria and Lebanon.\r\n\r\nNeither they nor their descendants have been allowed by Israel to return to their homes - Israel says this would overwhelm the country and threaten its existence as a Jewish state.\r\n\r\nIsrael still occupies the West Bank and claims the whole of Jerusalem as its capital, while the Palestinians claim East Jerusalem as the capital of a hoped-for future Palestinian state. The US is one of only a handful of countries to recognise the city as Israel\'s capital.\r\n\r\nIn the past 50 years Israel has built settlements in the West Bank and East Jerusalem, where more than 700,000 Jews now live.\r\n\r\nSettlements are held to be illegal under international law - that is the position of the UN Security Council and the UK government, among others - although Israel rejects this.', 'BBC News', 'UK', 'politics', 1, 1),
(12, 'What is ‘aesthetic’? Ask Sofia Coppola.', 'Rachel Tashjian', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700817672/newsportal/wpeyne9jyyjepoor7syd.avif', 'We all know that groovy squeeze bottle of Graza olive oil or that spiral Paloma Wool sweater aren’t just meant to look pretty sitting in your pantry or hanging in your closet. They’re meant to be photographed and posted.', '2023-11-24 09:21:11', '2023-11-24 09:21:11', 'On TikTok, such stuff is described as “aesthetic” — an adjective, not a noun — and this new application of the word suggests that you’re not choosing a product that looks pretty, but saying something about your commitment to your sense of identity.\r\n\r\nLike the fancy stereo equipment embraced by yuppies in the 1980s, your funky products make your buying habits feel like informed or even cultured choices. You’re not buying olive oil; you’re cultivating a vibe! You’re world-building through your clothes, belongings and groceries, mood-boarding your daily existence.\r\n\r\nYou don’t even have to share pictures of these things online for them to be aesthetic. These products insist that there is something more, even something cinematic, to the small and boring choices you make every day.\r\n\r\nThis past summer and fall, Coppola’s aesthetic gained traction on TikTok. One of the most popular iterations, based on an explainer by user @latenightwar, involves sharing photos of your unclean room — an unmade bed, piles of journals and books and a disco ball, an assortment of clothing stuffed in a closet, vintage perfume bottles — with a voice-over declaring that this is a statement of the dweller’s inner emotional turmoil:\r\n\r\n“Here’s the thing, when a boy’s room is messy, it’s like, ‘Oh my god, he’s filthy. It’s fetid. It’s disgusting. It reeks. You’re lazy, you’re letting yourself go.’ But when my room is messy, when a girl’s room is messy, it’s Sofia Coppola. It’s, ‘Hell is a teenage girl.’ It’s Lindsay Lohan in an early-2000s movie. It’s indie. It’s hot.”\r\n\r\nIs your office filled with Victorian-style furniture, framed photographs of disgruntled White women and a rack of clothing? It’s Coppola-coded. Another meme promises “5 hours of girls getting ready in Sofia Coppola movies - ASMR.” (Alas, further searching suggests no such mash-up exists.)\r\n\r\nIt seems obvious that Coppola’s work would inspire such treatment. A similar thing happened when Wes Anderson released his film “Asteroid City” earlier this year. Both filmmakers have a highly mannered style in which the look of the film is as essential as the dialogue and plot.\r\n\r\nWhat Sofia Coppola gets right\r\n\r\nThe look of her films often is the plot. She has said that she wanted “The Virgin Suicides” (1999) to resemble a 1970s hair commercial, and for “Marie Antoinette” (2006) to feel like a music video. You’re meant to put together what’s going on by examining a woman’s face or pile of stuff, or by listening to the soundtrack. Which is very much how teenagers, notoriously reticent creatures, also communicate.', 'The Washington Post', 'USA', 'fashion', 1, 1),
(13, 'Sashiko is easy, practical and beautiful', 'Bel Jacobs', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700817941/newsportal/hhqus7rbfxymavybu0ry.webp', 'Sashiko is easy, practical and beautiful – and gaining fans around the world. Bel Jacobs speaks to practitioners to find out more.', '2023-11-24 09:25:40', '2023-11-24 09:25:40', 'arlier this year, visitors to the Metropolitan Museum of Art\'s Kimono Style would have been treated to a stunning example of Japanese craftsmanship. Made in the late 1800s, the Meiji Period, the fisherman\'s jacket or donza featured indigo-dyed sleeves and tunic delicately sewn over with white geometric patterns using sashiko, a quilting technique of simple running stitches used to reinforce or patch textiles – or, as in this jacket, join layers of cloth together, in a technique known as boro. The piece had a particular flourish: the yarns were dyed with small geometric patterns before being used to sew and stitch. \r\n\r\nThis luxurious adjunct aside, the jacket\'s makers would have been astonished at the sight of it hanging on the wall of one of the world\'s most prestigious museums. Sashiko emerged through necessity, particularly in poor rural areas, during the Edo period. \"Cotton came late to the north of Japan,\" explains craft and design writer Katie Treggiden. \"So the only way people could get hold of it was as tiny rags of fabrics, that were either passed around or bought from tradesmen from the south. Sashiko – literally, \'little stabs\' – was a way of connecting all those little pieces into a quilted fabric, known as boro, that would keep them warm.\" \r\n\r\nKatie Treggiden is among the guest panellists at this year’s Design for Planet Festival, along with Madeleine Michell of British slow-fashion brand Toast, who are keen advocates of clothes repair and visible mending. The festival takes place this year at the Enterprise Centre, University of East Anglia, UK, one of the world\'s most sustainable buildings, from 17 to 18 October, and under the theme of Collaborate, it aims to mobilise the UK\'s design community to unite efforts in addressing the twin climate and ecological crises. Guests will hear from leading voices in sustainability and design today on topics ranging from food systems to fashion, and next-practice materials (innovative materials) to future mobility needs.\r\n\r\nIt\'s perhaps no surprise that sashiko has become a wider trend in the West – it is simple to do, and beautiful as well as practical. Today, that rich aesthetic of patchwork swatches in a hundred shades of indigo, carefully worked over with white stitches, can be found – like the Met\'s donza – in art galleries, demonstrated in small craft workshops, and across thousands of posts on TikTok and Instagram. \r\n\r\nLondon\'s V&A and the Hove Museum of Creativity are among the UK venues to offer sashiko workshops recently. Participants in last years\' Great British Sewing Bee were challenged to upcycle denim pieces, using sashiko – Rob Jones of Romor Designs was among those whose sashiko and boro work featured in the semi-final in 2022, and Jones runs workshops in person in London and online. In the US, Atsushi Futatsuya of Upcycle Stiches has been running an in-person sashiko workshop. In the fashion world, luxury Japanese brand Kenzo employs the technique liberally, using it to enliven hoodies and sweatshirts, even on the lining of its Target parka.\r\n\r\nWhy now? \"Now, more than ever, there\'s a real focus on mending,\" says knitwear designer Hannah Porter. \"People are becoming more conscious when it comes to caring for their clothes. Sustainability applies to various facets of the clothing industry, from considering the materials, to where your clothing is made and who has made them. Japanese mending is such a beautiful ancient craft and people want to learn these techniques to make their clothing more bespoke and interesting. Sashiko is also very beginner friendly so it\'s a great skill to learn within the atmosphere of a workshop, and meet like-minded people.\"\r\n\r\nIt is, agrees Jessica Smulders Cohen, ideal for those who are only just starting their journey into repair; the designer and weaver now runs sashiko courses for slow-fashion brand Toast, and will be running a workshop at the Design for Planet Festival. \"It\'s the most basic form of stitching,\" she smiles. \"You can just literally pull it through to the back of the fabric from the front and up again. And, if you create a row and then come back and fill in the gaps, you can create a strong \'brick wall\' of stitches, making it ideal for denim repair.\" But it\'s not just denim. \"As long as you use appropriate matching thread, you can use sashiko across all woven fabrics. As a technique, it\'s very versatile.\"', 'BBC Style', 'USA', 'fashion', 1, 1),
(14, 'Premier League fantasy football tips: Should you captain Mohamed Salah?', 'Julian Edwards', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700818741/newsportal/evi2oiancmygabx42ror.jpg', 'There is a hectic schedule of Premier League football on the way with eight FPL deadlines in the next five weeks.', '2023-11-24 09:39:00', '2023-11-24 09:39:00', 'Try not to have any dead weight on your bench because it\'s almost certain you will need to call upon all 13 outfield players in your squad during this time.\n\nYou should also have gameweek 18 in mind when you make any transfer from now on as neither Manchester City nor Brentford have a fixture that week.\n\nAt the moment my plan is to bench Erling Haaland and Bryan Mbeumo then, taking the risk of having just one playing substitute, but another way around it would be to play your Free Hit chip.\n\nEqually, if you haven\'t already used your wildcard then you could gradually lose your Manchester City and Brentford players in the run-up to gameweek 18 and bring them back in again on the wildcard in gameweek 19.\n\nIt\'s thought both clubs might have a double gameweek soon after that to catch up on the missed fixture so using the wildcard could be a clever way to attack it.\n\nMy first choice this week would be Haaland for Manchester City\'s game at home to Liverpool, but there is a slight concern with his ankle injury.\n\nMohamed Salah has scored in six of his last eight Premier League games against City so he\'s an obvious fallback if you don\'t want to take the risk on Haaland, but there are other enticing options to consider.\n\nTottenham versus Aston Villa looks like it could be full of goals so Son Heung-min or Ollie Watkins would be the top two candidates there, and Jarrod Bowen is worth a look as well for West Ham\'s trip to Burnley depending on what David Moyes says about the injury that saw him return early from international duty.\n\nIt\'s difficult to predict where the clean sheets might be coming this week with Manchester City facing Liverpool and the Newcastle and Arsenal defences having to try and keep out Chelsea and Brentford.\n\nLuton versus Crystal Palace might be a game for the defenders and I would happily start assets from either team in that one.\n\nPersonally, I\'ve been toying with the idea of selling Matty Cash and doubling up on the Arsenal defence by signing William Saliba, but I\'m torn because I still feel there could be attacking returns for Cash in his next two games against Tottenham and Bournemouth. Aston Villa are also at home to Sheffield United in the all-important gameweek 18.\n\nIf I opt for the double Arsenal route then I like the look of the games against Wolves and Luton for potential clean sheets in gameweeks 14 and 15, but after that they face three of the most dangerous attacking teams in Villa, Brighton and Liverpool.\n\nOther managers might be wondering what to do with Kaoru Mitoma after he withdrew from the Japan squad. He\'s heavily owned at 35% with Brighton away to Nottingham Forest on Saturday, but if he remains an injury doubt then an early move for Mbeumo could be a sensible choice. His price will start to climb over the next couple of weeks as Brentford embark on a run of games against Luton, Brighton, Sheffield United and Aston Villa before their blank in gameweek 18.\n\nThere are plenty of in-form midfielders to choose from, though, and if you\'re looking for the slightly less popular picks then James Ward-Prowse, Cole Palmer, Gabriel Martinelli, Raheem Sterling, Hwang Hee-chan and Eberechi Eze are all still under 10% ownership.\n\nI like Palmer and Sterling in particular as long-term options to hopefully bring you in the points in that fast-improving Chelsea team.\n\nOn the subject of Chelsea, Statman Dave was getting very excited about Reece James in this week\'s Fantasy 606 podcast. James has started their last two games, had a rest during the international break and currently comes in at the price of just £5.3m. That does seem a bargain when you consider Kieran Trippier is £7m and Trent Alexander-Arnold is £7.9m, and we\'ve certainly seen that James is capable of delivering the big scores like those two if he gets a run of games.\n\nIt goes back to the point, though, about having a strong bench in your FPL squad as you know he\'s unlikely to start three games in the space of seven days when those midweek fixtures come along, so you\'ll need someone to step in when he\'s left out.\n\nGoing against Haaland and Salah with the captaincy didn\'t pay off last week, but if you\'re the type of manager that fancies a gamble then I\'ve got a feeling that Everton might produce a bit of a performance against Manchester United at a pumped-up Goodison Park on Sunday and Dominic Calvert-Lewin could be your man.', 'BBC Sports', 'USA', 'sports', 1, 1),
(15, 'The Chinese mafia\'s downfall in a lawless casino town', 'Jonathan Head', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700819216/newsportal/qww4wnfukehaxgw2u7vt.webp', 'The photographs released by Chinese police showed their officers holding a man and a woman in handcuffs in front of a border gate.', '2023-11-24 09:46:55', '2023-11-24 09:46:55', 'They had just been handed over from Myanmar, the latest in scores of arrests of those accused of running scam centres in a town on the north-eastern border with China.\r\n\r\nThe two were Ming Guoping and Ming Zhenzhen, son and granddaughter of one of the powerful warlords who have run the town of Laukkaing for the past 14 years.\r\n\r\nA sudden escalation of the conflict in Myanmar has spelled the end of the Chinese mafia - the Godfather-esque \"four families\" - in this notoriously lawless border town.\r\n\r\nAt around the same time as the Chinese police released the photos of the handcuffed pair last Thursday, the official Myanmar military news published a photo of an apparent autopsy being conducted in the back of a van on the body of a 69 year-old man.\r\n\r\nIt was the warlord himself - Ming Xuechang - who, the military said, had taken his own life after being captured, an explanation greeted with scepticism by many.\r\n\r\nIt was an ignominious end to an extraordinary story that began in the days of war and revolution, but turned into one of drugs, gambling, greed and Machiavellian rivalry.\r\n\r\n Ming Xuechang was a henchman of Bai Suocheng, who heads one of the families.\r\n\r\nUnder them the remote, impoverished backwater of Laukkaing was transformed into a rowdy casino hub of gaudy high-rise towers and seedy red-light districts. \r\n\r\nAlthough powerful, the Mings were not a part of this coveted list of four - the other three families were headed by Wei Chaoren, Liu Guoxi and Liu Zhengxiang.\r\n\r\nInitially developed to take advantage of Chinese demand for gambling, which is illegal in China and many other neighbouring countries, Laukkaing\'s casinos evolved into a lucrative front for money laundering, trafficking and in particular for dozens of scam centres. \r\n\r\nMore than 100,000 foreign nationals, many of them Chinese, were estimated to have been lured to these scam centres, where they were effectively imprisoned and forced to work long hours running sophisticated online fraud operations targeting victims all over the world.\r\n\r\nMing Xuechang ran one of the most notorious of these scam centres, called Crouching Tiger Villa. He also reportedly ran the local police force, which, while it donned the regular uniform of the Myanmar national police, acted as little more than a private militia, one of several which enforced the rule of the four families in Laukkaing. \r\n\r\nIn September, as China ramped up pressure on all the groups running scam centres to shut them down and hand over those who worked there, the Ming family resisted. By some estimates the casinos of each family were processing several billion dollars every year. It was a huge business to give up.\r\n\r\nThe families also had close ties to the Myanmar military, and the Mings may have believed they were protected, even from the demands of China, which has long had a powerful influence in this border region.\r\n\r\nIn the early hours of the morning of 20 October, a group of scam workers was being transferred from Crouching Tiger Villa, probably in anticipation of a move against the scam centre by the Chinese police.\r\n\r\nA number of workers, reported to be between 50 and 100, tried to escape, and the scam centre guards opened fire, killing several. Some accounts say there were undercover Chinese police officers among the dead.\r\n\r\nThat prompted a strongly-worded letter from the local government office in the neighbouring Chinese province - and the announcement of arrest warrants by the Chinese police for four of the Ming family.\r\n\r\nIt was China\'s visible frustration over the unwillingness or inability of Myanmar\'s ruling junta to rein in its allies in Laukkaing which encouraged three insurgent armies, calling themselves the Brotherhood Alliance, to launch their attacks against the military in late October.\r\n\r\nChina has in the past always urged restraint in order to keep the peace on its border, but its need to weed out the well-funded and well-armed families in Laukkaing appears to have changed its priorities. \r\n\r\nThe insurgents say their goal is to eliminate the scam centres, and to support the wider opposition campaign to overthrow the military regime which seized power in 2021.\r\n\r\nBut in Laukkaing the conflict is more like payback, in a vendetta which goes back to the days of the Cold War.\r\n\r\nThe four families owed their control of Laukkaing to none other than Min Aung Hlaing, the military commander who led the 2021 coup and still heads the junta.\r\n\r\nBack in 2009, Min Aung Hlaing led a military operation to oust the then-dominant warlord in Laukkaing, a veteran fighter called Peng Jiasheng. \r\n\r\nHe wanted to install allies more compliant to the needs of the then-military government, which at the time was putting pressure on all of Myanmar\'s ethnic insurgent groups to transform themselves into pro-government so-called border guard forces.\r\n\r\nMost refused, including Peng, even though the military had promised in return that they would be allowed to continue making money from illegal businesses like narcotics.\r\n\r\nPeng was part of a generation of warlords in Shan State who emerged in the chaos of the post-independence years in Myanmar, when the central government\'s authority did not extend to most border regions. \r\n\r\nDesperately poor, remote and infertile, Shan State\'s only real economy was the cultivation of opium. It became the world\'s largest producer, and funded the various insurgent groups.\r\n\r\nPeng began as a commander in the China-backed Burmese Communist Party, but he mutinied in 1989 as Chinese support stopped, breaking the Burmese Communist Party up into several armed insurgent groups.\r\n\r\nThis was a time when the Myanmar military government was feeling vulnerable. It had just crushed a popular uprising in 1988 with great brutality - the uprising in which Aung San Suu Kyi first emerged as an opposition leader. \r\n\r\nWorried about a possible alliance between the established ethnic insurgent groups and the opposition movement, the generals moved quickly to make peace with the insurgents, giving them a free hand to run their fiefdoms as they pleased.\r\n\r\nPeng began developing Laukkaing as a gambling hub after being put under pressure to cut back on the narcotics business that was funding his operation.\r\n\r\nBut when in 2009 he rejected the military\'s request to turn his forces into a border guard force, Min Aung Hlaing persuaded Bai Suocheng, Peng\'s deputy-commander at the time, to rebel against him.\r\n\r\nPeng was driven out into China. The casinos were left pockmarked by bullet-holes, although dedicated gamblers kept betting throughout the fighting. Bai and the other three families took over the casino economy.', 'BBC World', 'China', 'world', 1, 1),
(16, 'Small Bristol businesses report some customers cannot pay', 'Pete Simson & Clara Bullock', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700819431/newsportal/birr9qwcebl2aryvb1cy.webp', 'Small businesses say some customers are unable to afford items and services as the cost of living crisis remains, despite a fall in inflation.', '2023-11-24 09:50:30', '2023-11-24 09:50:30', 'The latest figures show the rate at which prices are rising had dropped to 4.6% in the year to October.\r\n\r\nThe Prime Minister has now said the government will target cutting taxes.\r\n\r\nBut Bristol-based barber Kawa Hamed said he is still having to resist putting his prices up so he does not lose customers.\r\n\r\n\"Sometimes I have people who come in and can\'t afford to pay,\" said Mr Hamed, who owns a barbers in Lawrence Weston.\r\n\r\n\"I see people every day, they are complaining about the price of life and their costs.\" \r\n\r\nMr Hamed\'s energy bills have risen from £250 to almost £600 a month, while some items like hair wax have gone up £1 in the past year.\r\n\r\n\"It\'s difficult. I hope things will get better, but I never see things come down,\" he added.\r\n\r\nInflation dropping does not mean prices are going down, but they are rising less quickly than earlier in the year.\r\n\r\nIn certain areas, inflation remains high - for example with rent (6.1%), and food (10.1%).\r\n\r\nAccording to the Office for National Statistics, food prices were around 30% higher in October 2023 compared to October 2021.\r\n\r\nJoy Huntington, from Rare Butchers in Southville, said: \"People are being more circumspect with the way they are spending and they are asking for advice on cheaper cuts and comparing prices, which I think is very sensible in the current climate.\"\r\n\r\nThe damage caused by food inflation in particular is immense, according to Melanie Vaxavanakis, founder of the MAZI project, which helps marginalised young people in Bristol gain access to fresh food.\r\n\r\n\"We started off supporting 15 young people per week with weekly recipe kits, it\'s now 80, and that could be much higher if we had the capacity,\" she said.\r\n\r\n\"We\'ve had a 46% increase in referrals since the start of the year.\"\r\n\r\nAsked if the government should be pleased for hitting its inflation target, Ms Vaxavanakis said: \"The damage has already been done. So many young people are continuously struggling to eat that day.\r\n\r\n\"There needs to be more thought about our food systems which rely too heavily on imported goods.\"\r\n\r\nThe government will outline its latest spending plans on Wednesday during the Autumn Statement.\r\n\r\nChancellor Jeremy Hunt said: \"Now we are beginning to win the battle against inflation, we can move to the next part of our plan, which is the long term growth of the British economy.\"\r\n\r\nHowever Ms Huntington does not share the chancellor\'s optimism for growth.\r\n\r\n\"I think the jury\'s out on that. People are trying to be cheerful because we approach Christmas and you don\'t want to spread doom and gloom,\" she said.\r\n\r\n\"I think many are putting a brave face on it though and weathering the storm.\"', 'BBC News', 'Mexico', 'bussiness', 1, 1),
(17, 'Technology festival\'s sock that detect Alzheimer\'s signs', 'Dave Harvey', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700819621/newsportal/cf6je6z7fkhqtjglpwct.webp', 'Socks that detect the early signs of Alzheimer\'s Disease. A pregnancy test that blind women can use. And a holographic Barack Obama you can chat with.', '2023-11-24 09:53:40', '2023-11-24 09:53:40', 'These are some of the things you can find at Bristol\'s technology festival. Dave Harvey has been for a look.\r\n\r\nIn a lab for tech start-ups, dozens of new ideas are being pitched, demonstrated and debated. One man says he has \"re-invented the drone\".\r\n\r\nAnd a woman has formulated the perfect probiotic drink for people with major bowel disorders.\r\n\r\nThis is the first event at Bristol\'s technology festival. There will be 48 more, involving 5,000 people.\r\n\r\nDr Neciah Dorh is one. He is demonstrating his own health technology business, and is awed by the range of others.\r\n\r\nHe said: \"We\'ve got everything from therapeutics to digital health, helping people with dementia, diagnosing infections, the next generation of vaccines.\"\r\n\r\nThere\'s a lot happening, to tackle the biggest problems our healthcare systems are facing.\r\n\r\nLet\'s start with the dementia socks. An intriguing idea, born out of a personal tragedy.\r\n\r\nZeke Steer watched his own great-grandmother decline into dementia, and wanted to help.\r\n\r\nSpin forward a few years, and the research scientist has developed socks which detect early physical signs of the onset of diseases like Alzheimer\'s.\r\n\r\n\"Sensors in our socks are detecting early signs of distress, and alerting a carer that they may need help,\" he says.\r\n\r\nThe socks can measure heart rate, sweat, and other secretions.\r\n\r\n\"And everyone wears a pair of socks,\" smiles Dr Steer, adding that they are more discreet than other wearable technology.\r\n\r\nNext to him, researchers are working on electrifying lateral flow tests. The type of consumer health test made famous by Covid-19, the technology is also used in pregnancy tests and many others.\r\n\r\n\"But they rely on a visible line, as we all saw in Covid\", explains Paul Ko Ferrigno in a pitch to the room.\r\n\r\nRemember those Covid conversations about whether the test line was \"faint, solid, strong...\"? The team at \'eclateral\' team think they can do better than that.\r\n\r\nThey are now electrifying the kit, so that results are more precise, more quantifiable, more scientific.\r\n\r\n\"And most of all,\" Mr Ferrigno adds, \"it means a blind woman will be able to get her pregnancy test result directly, and discreetly.\"\r\n\r\nThis is the first big showcase of Bristol\'s fourth Technology Festival. There will be debates on AI and disruptive tech.\r\n\r\nNetworking sessions with investors, pitching events for new start-ups seeking support.\r\n\r\nBen Shorrock is one of the co-founders and the chief exec of TechSpark.\r\n\r\n\"Bristol\'s tech sector has grown fast,\" he explains.\r\n\r\n\"From one or two start-up communities five years ago, there are now dozens of places like this, which has 40 companies in it alone.\r\n\r\n\"All are working on vital health technologies, new ways to cut carbon and save the planet, all transformational stuff.\"\r\n\r\nBack in the demo room, I\'m chatting with Barack Obama.\r\n\r\nThe former US President jokes about how he met Michelle: \"Way smarter than me, and I just knew this was going to be something\".\r\n\r\nHis golf game is \"great, thank you sir\".\r\n\r\nBut when I ask which of his two children is his favourite, he scolds me: \"As a good parent, I love each of my children unconditionally and equally, it\'s not fair to pick favourites.\"\r\n\r\nClearly I am not interviewing the actual Barack Obama.\r\n\r\nI\'m looking at a holographic image which shimmers and moves as its lips form the words it is speaking. The voice is pretty authentic.\r\n\r\nThe answers are crafted by an AI programme, scouring the internet to learn what President Obama \"might say\".\r\n\r\n\"There is a lot about Barack Obama in the public domain,\" explains James Routley.\r\n\r\nHe is one of the team at Bath-based tech firm Rocketmakers, who created the AI hologram they call \'Portrait\'.\r\n\r\n\"So our guy knows a lot of the interviews and profiles that are out there. We fed him a bit of personality as well, and this is the result.\"\r\n\r\nIt is uncanny. Within reason, you can ask any question and President Obama replies.\r\n\r\nHis proudest achievement? The Affordable Care programme, also known as Obama Care.\r\n\r\nRocketmakers imagine their AI characters helping students in schools, or checking in airline passengers, where they can know all the latest delays and updates, training engineers on oil rig repairs, numerous other situations.\r\n\r\nLike the other firms, this tech is at the early stage. Looking for customers, for investors, for problems to solve.\r\n\r\nBut Bristol is home to hundreds of these small start-up companies, employing some 80,000 people and earning over £1.5bn.\r\n\r\n\"It\'s grown fast,\" smiles Mr Shorrock, \"and will only grow more now.\"', 'Business and Environment Correspondent, BBC West', 'Canada', 'media', 1, 1),
(18, 'Artificial Intelligence: NI can be \'testing centre\' for new technology', 'Ross McKee', 'https://res.cloudinary.com/di7kzjary/image/upload/v1700819783/newsportal/qfudnorhvtpz3ndoswj8.webp', 'Northern Ireland can be a testing centre for artificial intelligence in the UK, according to a group representing the software industry.', '2023-11-24 09:56:21', '2023-11-24 09:56:21', 'Belfast-based IT firm Kainos announced it was investing £10m to develop the use of generative AI in its business.\r\n\r\nDavid Crozier, new head of The Software Alliance, believes more companies in Northern Ireland will follow suit.\r\n\r\nHe described the Kainos announcement as a \"super statement of intent\".\r\n\r\nHe said Northern Ireland had \"historically been very strong at developing enterprise software solutions\" so it was \"no surprise\" technology companies here were investing in research and innovation.\r\n\r\n\"Kainos won\'t be the last company to make announcements in terms of investing in AI, and generative AI in particular, and I think that\'s where Northern Ireland can be very strong in terms of its value proposition.\"\r\n\r\nMr Crozier said he believed Northern Ireland could be \"the perfect petri dish and testing ground for technologies, which, then if they work here, can be exported globally\".\r\n\r\nHe added that \"the likes of our teachers, our educators and our parents need to consider how the next generation of talent can be trained in those types of technologies - be of the mindset that those technologies will be part of their future and their career\".\r\n\r\nNorthern Ireland has various clusters of research in AI including cybersecurity, medicine, robotics and economics.\r\n\r\nThe Artificial Intelligence Research Centre (AIRC) was announced earlier this year at Ulster University, in partnership with Kainos.\r\n\r\nMeanwhile, the research and development of AI-enabled cybersecurity projects is facilitated at the Cyber AI-hub at Queen\'s University Belfast.\r\n\r\nThe Belfast Region City Deal and Derry and Strabane District City Deal provide the potential to unlock further funding for AI, alongside private investment.\r\n\r\nKainos, which has staff in more than 20 countries, is already working in the field of AI for various organisations including the United Nations, the Ministry of Defence and the National Crime Agency.\r\n\r\nIts incoming chief executive, Russell Sloan, said it was investing in the skills of more than 1,000 staff through the £10m investment \"to ensure they can harness generative AI for the benefit of our customers\".\r\n\r\n\"If you think about all of the roles we have within the organisation or actually across wider industry, they will change as a result of generative AI,\" he said.\r\n\r\n\"So we need to make sure that people are staying abreast of what is available to them.\r\n\r\n\"That\'s not just within the technology sector as well, I think if you look more broadly within society you can see roles will change and evolve, and we need to make sure that we\'re changing and evolving with that.\"\r\n\r\nHowever, there are concerns about AI.\r\n\r\nIn July, the Trades Union Congress said Westminster had to act to ensure employment law kept pace with advances in AI technology and MPs have warned Prime Minister Rishi Sunak that the UK is in danger of falling behind the EU unless new legislation comes soon.\r\n\r\nInterest in AI has mushroomed since chatbot ChatGPT emerged, causing a stir with its ability to answer complex questions in a human-sounding way.\r\n\r\nIt can do that because of the incredible computational power AI systems possess, which has caused unease.\r\n\r\nFor Kainos\' incoming chief executive, it is not necessarily that AI will cause jobs to disappear but that it will \"reduce an element of the mundane tasks that people have to perform and allow them to focus on the higher-value tasks\".\r\n\r\nMr Sloan also acknowledges there are \"things we need to be mindful of\" in terms of security and ethics.\r\n\r\n\"If you think about bias within algorithms, about bias within data sets, we need to make sure we\'re implementing things without bias and doing things in the right way for customers.\"\r\n\r\nIn the meantime, the UK is set to host a global AI summit this November, which will \"bring together key countries, leading tech companies and researchers to agree safety measures to evaluate and monitor the most significant risks from AI\".\r\n\r\nThere are 50,000 people employed in the sector in the UK, and Downing Street says it is worth £3.7bn to the economy.\r\n\r\nMr Sloan highlighted the importance of education and \"pushing the boundaries about what Northern Ireland does in terms of AI and possibly even becoming a centre of excellence on a worldwide scale\".\r\n\r\nSimon Whittaker, chief executive officer of Northern Ireland cyber-security firm, Vertical Structure, said the investment from Kainos was significant.\r\n\r\n\"This should be seen as a mark of how seriously they are taking this incredible set of technologies,\" he said.\r\n\r\n\"I know that there are significant local employers based here developing and using these technologies in, for instance, their chatbots for customer support, some decision making and other areas, we are just not aware of it.\r\n\r\n\"We have shown ourselves to be a region of significant talent in many industries over the last century, most recently in cyber-security, as called out by [US] President Biden in his recent visit, and now we have the opportunity to be world beating in AI.\"\r\n\r\nMr Whittaker added that responsible AI usage was \"all about ensuring that we can empower people to use the technology without losing track of the fact that the person must still own the output\".\r\n\r\nBelfast-based firm Enzai\'s governance platform helps users understand and manage the risks of AI and has attracted customers from the US to India.\r\n\r\nEarlier this year, the firm\'s co-founder Ryan Donnelly joined government ministers and advisers in a meeting at 10 Downing Street to discuss AI.\r\n\r\nThe company has also raised $4m (£3.18m) in seed funding.\r\n\r\nMr Donnelly believes Northern Ireland has an opportunity to be a centre for AI, but that it will have to continue to adapt.\r\n\r\n\"It moves so quickly - to grab the opportunity of AI, to be AI savvy - you have to move quickly,\" he added.\r\n\r\n\"These are the most powerful technologies that have been developed, with every step forward there is an equal step forward in risk that companies need to manage.\"\r\n\r\nMeanwhile, for David Crozier, education is crucial - he said that while AI is not a \"panacea to all problems\", he believes it will bring more opportunities.\r\n\r\n\"I think our members and myself are in the glass half-full category,\" he added.\r\n\r\n\"If you go back to the invention of the printing press, the steam engine, it is just a new technology, there will be opportunities there to do things more efficiently, but that goldrush brings opportunity to build new tools, new solutions.\r\n\r\n\"Northern Ireland is well placed to take advantage of that next wave that AI brings, provided we continue to have a very strong education system.\"', 'BBC News', 'Ireland', 'tech', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
(1, 'Sakir', 'sakir@gmail.com', '2023-11-01 17:57:53', '$2y$10$/6wqSFtQ7gjqpv.Y0DRee.9J0SgUAji9G7wnhAjSFB8Uyj73R66um', NULL, '2023-11-01 08:06:49', '2023-11-01 08:06:49', 'sakirash'),
(2, NULL, 'nafess@gmail.com', NULL, '$2y$10$2aOWLvM./DI4IRFwcvKaWuHjaqt/QgOJKLiDQ6lBApSEu53yBOvym', NULL, '2023-11-01 11:35:09', '2023-11-01 11:35:09', 'nafees63'),
(3, 'Sakir', 'uaaa@gmail.com', NULL, '$2y$10$3SeKFUbCMCJfm.w2JEpaOOgC/giGfrQJ0qJ79NkNM01msMuNJYVlC', NULL, '2023-11-01 11:42:45', '2023-11-01 11:42:45', 'sakirAsh'),
(4, 'jq', 'jq12@gmail.com', NULL, '$2y$10$71wqonLih3bn9WHtK8loveb50SZ8b5Q7ILPR.kPCDll8Jw/aHf3Hu', NULL, '2023-11-01 14:13:20', '2023-11-01 14:13:20', 'jq_'),
(5, 'mushfiq alam', 'mushfiq9912@gmail.com', NULL, '$2y$10$q4K.D98Cokvc/i3remBkQuv7pDrIOshMecabIsKQK/CZqzWcNGyE2', NULL, '2023-11-20 13:35:13', '2023-11-20 13:35:13', 'mushfiqalam_');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conf`
--
ALTER TABLE `conf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conf`
--
ALTER TABLE `conf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
