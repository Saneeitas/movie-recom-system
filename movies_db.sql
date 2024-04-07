-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 10:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movieId` int(50) NOT NULL,
  `title` varchar(400) NOT NULL,
  `image` text NOT NULL,
  `genre` varchar(200) NOT NULL,
  `no_of_users_rated` int(200) NOT NULL,
  `avg_rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movieId`, `title`, `image`, `genre`, `no_of_users_rated`, `avg_rating`) VALUES
(2, 'A Midwinter \'s Tale (1995)', 'A Midwinter\'s Tale (1995).jpg', 'Action', 0, 0),
(3, 'Ace Ventura_ When Nature Calls (1995)', 'Ace Ventura_ When Nature Calls (1995).jpg', 'Thriller', 9, 4),
(4, 'Across the Sea of Time (1995)', 'Across the Sea of Time (1995).jpg', 'Action', 0, 0),
(5, 'Amateur (1994)', 'Amateur (1994).jpg', 'Thriller', 0, 0),
(6, 'An Awfully Big Adventure (1995)', 'An Awfully Big Adventure (1995).jpg', 'Action', 0, 0),
(7, 'Angela (1995)', 'Angela (1995).jpg', 'Thriller', 0, 0),
(8, 'Angels and Insects (1995)', 'Angels and Insects (1995).jpg', 'Comedy', 0, 0),
(9, 'Anne Frank Remembered (1995)', 'Anne Frank Remembered (1995).jpg', 'Crime', 1, 3),
(10, 'Antonia \'s Line (1995)', 'Antonia\'s Line (1995).jpg', 'Comedy', 0, 0),
(11, 'Apollo 13 (1995)', 'Apollo 13 (1995).jpg', 'Crime', 4, 2),
(12, 'Assassins (1995)', 'Assassins (1995).jpg', 'Comedy', 0, 0),
(13, 'Babe (1995)', 'Babe (1995).jpg', 'Crime', 0, 0),
(14, 'Bad Boys (1995)', 'Bad Boys (1995).jpg', 'Comedy', 0, 0),
(15, 'Balto (1995)', 'Balto (1995).jpg', 'Crime', 0, 0),
(16, 'Batman Forever (1995)', 'Batman Forever (1995).jpg', 'Comedy', 0, 0),
(17, 'Beautiful Girls (1996)', 'Beautiful Girls (1996).jpg', 'Crime', 0, 0),
(18, 'Bed of Roses (1996)', 'Bed of Roses (1996).jpg', 'Action', 0, 0),
(19, 'Before and After (1996)', 'Before and After (1996).jpg', 'Thriller', 1, 5),
(20, 'Belle de Jour (1967)', 'Belle de Jour (1967).jpg', 'Action', 0, 0),
(21, 'Beyond Rangoon (1995)', 'Beyond Rangoon (1995).jpg', 'Thriller', 0, 0),
(22, 'Big Bully (1996)', 'Big Bully (1996).jpg', 'Action', 0, 0),
(23, 'Bio-Dome (1996)', 'Bio-Dome (1996).jpg', 'Thriller', 0, 0),
(24, 'Black Sheep (1996)', 'Black Sheep (1996).jpg', 'Action', 0, 0),
(25, 'Boomerang (1992)', 'Boomerang (1992).jpg', 'Thriller', 0, 0),
(26, 'Bottle Rocket (1996)', 'Bottle Rocket (1996).jpg', 'Action', 0, 0),
(27, 'Braveheart (1995)', 'Braveheart (1995).jpg', 'Thriller', 0, 0),
(28, 'Broken Arrow (1996)', 'Broken Arrow (1996).jpg', 'Action', 0, 0),
(29, 'Canadian Bacon (1995)', 'Canadian Bacon (1995).jpg', 'Thriller', 0, 0),
(30, 'Carrington (1995)', 'Carrington (1995).jpg', 'Action', 0, 0),
(31, 'Casino (1995)', 'Casino (1995).jpg', 'Thriller', 0, 0),
(32, 'Casper (1995)', 'Casper (1995).jpg', 'Action', 0, 0),
(33, 'Catwalk (1995)', 'Catwalk (1995).jpg', 'Thriller', 0, 0),
(34, 'Chungking Express (1994)', 'Chungking Express (1994).jpg', 'Comedy', 0, 0),
(35, 'City Hall (1996)', 'City Hall (1996).jpg', 'Crime', 2, 2),
(36, 'Clockers (1995)', 'Clockers (1995).jpg', 'Comedy', 0, 0),
(37, 'Clockwork Orange (1971)', 'Clockwork Orange (1971).jpeg', 'Crime', 0, 0),
(38, 'Clueless (1995)', 'Clueless (1995).jpg', 'Comedy', 0, 0),
(39, 'Congo (1995)', 'Congo (1995).jpg', 'Crime', 0, 0),
(40, 'Copycat (1995)', 'Copycat (1995).jpg', 'Comedy', 0, 0),
(41, 'Cry, the Beloved Country (1995)', 'Cry, the Beloved Country (1995).jpg', 'Crime', 0, 0),
(42, 'Cutthroat Island (1995)', 'Cutthroat Island (1995).jpg', 'Comedy', 0, 0),
(43, 'Dangerous Minds (1995)', 'Dangerous Minds (1995).jpg', 'Crime', 0, 0),
(44, 'Dead Man Walking (1995)', 'Dead Man Walking (1995).jpg', 'Action', 1, 4),
(45, 'Dead Presidents (1995)', 'Dead Presidents (1995).jpg', 'Thriller', 0, 0),
(46, 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood (1996)', 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood (1996).jpg', 'Action', 0, 0),
(47, 'Down Periscope (1996)', 'Down Periscope (1996).jpg', 'Thriller', 0, 0),
(48, 'Dracula_ Dead and Loving It (1995)', 'Dracula_ Dead and Loving It (1995).jpg', 'Action', 0, 0),
(49, 'Dunston Checks In (1996)', 'Dunston Checks In (1996).jpg', 'Thriller', 0, 0),
(50, 'Eye for an Eye (1996)', 'Eye for an Eye (1996).jpg', 'Action', 0, 0),
(51, 'Father of the Bride Part II (1995)', 'Father of the Bride Part II (1995).jpg', 'Thriller', 0, 0),
(52, 'Flirting with Disaster (1996)', 'Flirting with Disaster (1996).jpg', 'Action', 0, 0),
(53, 'Four Rooms (1995)', 'Four Rooms (1995).jpg', 'Thriller', 0, 0),
(54, 'Frankie Starlight (1995)', 'Frankie Starlight (1995).jpg', 'Action', 0, 0),
(55, 'French Twist (1995)', 'French Twist (1995).jpg', 'Thriller', 0, 0),
(56, 'Friday (1995)', 'Friday (1995).jpg', 'Action', 0, 0),
(57, 'From Dusk Till Dawn (1996)', 'From Dusk Till Dawn (1996).jpg', 'Thriller', 0, 0),
(58, 'From the Journals of Jean Seberg (1995)', 'From the Journals of Jean Seberg (1995).jpg', 'Action', 0, 0),
(59, 'Georgia (1995)', 'Georgia (1995).jpg', 'Thriller', 0, 0),
(60, 'Get Shorty (1995)', 'Get Shorty (1995).jpg', 'Comedy', 0, 0),
(61, 'GoldenEye (1995)', 'GoldenEye (1995).jpg', 'Crime', 0, 0),
(62, 'Grumpier Old Men (1995)', 'Grumpier Old Men (1995).jpg', 'Comedy', 0, 0),
(63, 'Happiness Is in the Field (1995)', 'Happiness Is in the Field (1995).jpg', 'Crime', 0, 0),
(64, 'Happy Gilmore (1996)', 'Happy Gilmore (1996).jpg', 'Comedy', 0, 0),
(65, 'Headless Body in Topless Bar (1995)', 'Headless Body in Topless Bar (1995).jpg', 'Crime', 0, 0),
(66, 'Heat (1995)', 'Heat (1995).jpg', 'Comedy', 0, 0),
(67, 'Heidi Fleiss_ Hollywood Madam (1995)', 'Heidi Fleiss_ Hollywood Madam (1995).jpg', 'Comedy', 0, 0),
(68, 'Home for the Holidays (1995)', 'Home for the Holidays (1995).jpg', 'Crime', 0, 0),
(69, 'How to Make an American Quilt (1995)', 'How to Make an American Quilt (1995).jpg', 'Action', 0, 0),
(70, 'If Lucy Fell (1996)', 'If Lucy Fell (1996).jpg', 'Thriller', 0, 0),
(71, 'Il Postino_ The Postman (1994)', 'Il Postino_ The Postman (1994).jpg', 'Action', 0, 0),
(72, 'It Takes Two (1995)', 'It Takes Two (1995).jpg', 'Thriller', 0, 0),
(73, 'Jade (1995)', 'Jade (1995).jpg', 'Action', 0, 0),
(74, 'Jumanji (1995)', 'Jumanji (1995).jpg', 'Thriller', 0, 0),
(75, 'Jupiter \'s Wife (1995)', 'Jupiter\'s Wife (1995).jpg', 'Action', 0, 0),
(76, 'Kicking and Screaming (1995)', 'Kicking and Screaming (1995).jpg', 'Thriller', 0, 0),
(77, 'Kids of the Round Table (1995)', 'Kids of the Round Table (1995).jpg', 'Action', 0, 0),
(78, 'La Haine (1995)', 'La Haine (1995).jpg', 'Thriller', 0, 0),
(79, 'Lamerica (1994)', 'Lamerica (1994).jpg', 'Action', 0, 0),
(80, 'Last Summer in the Hamptons (1995)', 'Last Summer in the Hamptons (1995).jpg', 'Thriller', 0, 0),
(81, 'Lawnmower Man 2_ Beyond Cyberspace (1996)', 'Lawnmower Man 2_ Beyond Cyberspace (1996).jpg', 'Action', 0, 0),
(82, 'Le confessionnal (1995)', 'Le confessionnal (1995).jpg', 'Thriller', 0, 0),
(83, 'Leaving Las Vegas (1995)', 'Leaving Las Vegas (1995).jpg', 'Action', 0, 0),
(84, 'Man of the Year (1995)', 'Man of the Year (1995).jpg', 'Thriller', 0, 0),
(85, 'Margaret \'s Museum (1995)', 'Margaret\'s Museum (1995).jpg', 'Comedy', 0, 0),
(86, 'Mary Reilly (1996)', 'Mary Reilly (1996).jpg', 'Crime', 0, 0),
(87, 'Mighty Aphrodite (1995)', 'Mighty Aphrodite (1995).jpg', 'Comedy', 0, 0),
(88, 'Money Train (1995)', 'Money Train (1995).jpg', 'Crime', 0, 0),
(89, 'Mortal Kombat (1995)', 'Mortal Kombat (1995).jpg', 'Comedy', 0, 0),
(90, 'Mr. Holland \'s Opus (1995)', 'Mr. Holland\'s Opus (1995).jpg', 'Crime', 0, 0),
(91, 'Mr. Wrong (1996)', 'Mr. Wrong (1996).jpg', 'Comedy', 0, 0),
(92, 'Muppet Treasure Island (1996)', 'Muppet Treasure Island (1996).jpg', 'Crime', 0, 0),
(93, 'Nick of Time (1995)', 'Nick of Time (1995).jpg', 'Comedy', 0, 0),
(94, 'Nico Icon (1995)', 'Nico Icon (1995).jpg', 'Crime', 0, 0),
(95, 'Nixon (1995)', 'Nixon (1995).jpg', 'Action', 0, 0),
(96, 'Nobody Loves Me (1994)', 'Nobody Loves Me (1994).jpg', 'Thriller', 0, 0),
(97, 'Now and Then (1995)', 'Now and Then (1995).jpg', 'Action', 0, 0),
(98, 'Once Upon a Time... When We Were Colored (1995)', 'Once Upon a Time... When We Were Colored (1995).jpg', 'Thriller', 0, 0),
(99, 'Othello (1995)', 'Othello (1995).jpg', 'Action', 0, 0),
(100, 'Persuasion', 'Persuasion.jpg', 'Thriller', 0, 0),
(101, 'Pie in the Sky (1996)', 'Pie in the Sky (1996).jpg', 'Action', 0, 0),
(102, 'Pocahontas (1995)', 'Pocahontas (1995).jpg', 'Thriller', 0, 0),
(103, 'Powder (1995)', 'Powder (1995).jpg', 'Action', 0, 0),
(104, 'Race the Sun (1996)', 'Race the Sun (1996).jpg', 'Thriller', 0, 0),
(105, 'Restoration (1995)', 'Restoration (1995).jpg', 'Comedy', 2, 2),
(106, 'Richard III (1995)', 'Richard III (1995).jpg', 'Crime', 0, 0),
(107, 'Rob Roy (1995)', 'Rob Roy (1995).jpg', 'Action', 0, 0),
(108, 'Rumble in the Bronx (1995)', 'Rumble in the Bronx (1995).jpg', 'Thriller', 0, 0),
(109, 'sabrina (1995)', 'sabrina (1995).jpg', 'Comedy', 0, 0),
(110, 'screamers (1995)', 'screamers (1995).jpg', 'Crime', 0, 0),
(111, 'se7en (1995)', 'se7en (1995).jpg', 'Action', 0, 0),
(112, 'sense and Sensibility (1995)', 'sense and Sensibility (1995).jpg', 'Thriller', 0, 0),
(113, 'shopping (1994)', 'shopping (1994).jpg', 'Comedy', 0, 0),
(114, 'sonic Outlaws (1995)', 'sonic Outlaws (1995).jpg', 'Crime', 0, 0),
(115, 'steal Big Steal Little (1995)', 'steal Big Steal Little (1995).jpg', 'Action', 0, 0),
(116, 'sudden Death (1995)', 'sudden Death (1995).jpg', 'Thriller', 0, 0),
(117, 'The Addiction (1995)', 'The Addiction (1995).jpg', 'Comedy', 0, 0),
(118, 'The Amazing Panda Adventure (1995)', 'The Amazing Panda Adventure (1995).jpg', 'Crime', 0, 0),
(119, 'The American President (1995)', 'The American President (1995).jpg', 'Action', 0, 0),
(120, 'The Basketball Diaries (1995)', 'The Basketball Diaries (1995).jpg', 'Thriller', 0, 0),
(121, 'The Birdcage (1996)', 'The Birdcage (1996).jpg', 'Comedy', 0, 0),
(122, 'The Boys of St. Vincent (1992)', 'The Boys of St. Vincent (1992).jpg', 'Crime', 0, 0),
(123, 'The Bridges of Madison County (1995)', 'The Bridges of Madison County (1995).jpg', 'Action', 0, 0),
(124, 'The Brothers McMullen (1995)', 'The Brothers McMullen (1995).jpg', 'Thriller', 0, 0),
(125, 'The City of Lost Children (1995)', 'The City of Lost Children (1995).jpg', 'Comedy', 0, 0),
(126, 'The Crossing Guard (1995)', 'The Crossing Guard (1995).jpg', 'Crime', 0, 0),
(127, 'The Indian in the Cupboard (1995)', 'The Indian in the Cupboard (1995).jpg', 'Action', 0, 0),
(128, 'The Journey of August King (1995)', 'The Journey of August King (1995).jpg', 'Thriller', 0, 0),
(129, 'The Juror (1996)', 'The Juror (1996).jpg', 'Comedy', 0, 0),
(130, 'The Neon Bible (1995)', 'The Neon Bible (1995).jpg', 'Crime', 0, 0),
(131, 'The Neverending Story III (1994)', 'The Neverending Story III (1994).jpg', 'Action', 0, 0),
(132, 'The Silences of the Palace (1994)', 'The Silences of the Palace (1994).jpg', 'Thriller', 0, 0),
(133, 'The Star Maker (1995)', 'The Star Maker (1995).jpg', 'Comedy', 0, 0),
(134, 'The Usual Suspects (1995)', 'The Usual Suspects (1995).jpg', 'Crime', 0, 0),
(135, 'The White Balloon (1995)', 'The White Balloon (1995).jpg', 'Action', 0, 0),
(136, 'The Young Poisoner \'s Handbook (1995)', 'The Young Poisoner\'s Handbook (1995).jpg', 'Thriller', 0, 0),
(137, 'Things to Do in Denver When You\'re Dead (1995)', 'Things to Do in Denver When You\'re Dead (1995).jpg', 'Comedy', 0, 0),
(138, 'To Die For (1995)', 'To Die For (1995).jpg', 'Crime', 0, 0),
(139, 'Toy Story (1995)', 'Toy Story (1995).jpg', 'Action', 0, 0),
(140, 'Twelve Monkeys (1995)', 'Twelve Monkeys (1995).jpg', 'Thriller', 0, 0),
(141, 'Two Bits (1995)', 'Two Bits (1995).jpg', 'Comedy', 0, 0),
(142, 'Two If by Sea (1996)', 'Two If by Sea (1996).jpg', 'Crime', 0, 0),
(143, 'Unforgettable (1996)', 'Unforgettable (1996).jpg', 'Action', 0, 0),
(144, 'Up Close & Personal (1996)', 'Up Close & Personal (1996).jpg', 'Thriller', 0, 0),
(145, 'Vampire in Brooklyn (1995)', 'Vampire in Brooklyn (1995).jpg', 'Comedy', 0, 0),
(146, 'Waiting to Exhale (1995)', 'Waiting to Exhale (1995).jpg', 'Crime', 0, 0),
(147, 'When Night Is Falling (1995)', 'When Night Is Falling (1995).jpg', 'Action', 0, 0),
(148, 'White Squall (1996)', 'White Squall (1996).jpg', 'Thriller', 3, 0.33333333333333),
(149, 'Wings of Courage (1995)', 'Wings of Courage (1995).jpg', 'Crime', 3, 5),
(150, 'Yao a yao, yao dao wai po qiao (1995)', 'Yao a yao, yao dao wai po qiao (1995).jpg', 'Action', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(100) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `fullName`, `email`, `pass`) VALUES
(1, 'bbbbbb', 'bbbbbb@gmail.com', 'bbbbbb'),
(2, 'LUQMAN ABBAS', 'abbasluqman19@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movieId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movieId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
