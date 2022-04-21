-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 12 avr. 2022 à 05:03
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spotify`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnements`
--

CREATE TABLE `abonnements` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dateAbonnement` date NOT NULL,
  `id_Artiste` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `abonnements`
--

INSERT INTO `abonnements` (`id`, `id_user`, `dateAbonnement`, `id_Artiste`) VALUES
(2, 1, '2022-04-10', 10),
(4, 2, '2022-04-10', 10),
(5, 1, '2022-04-10', 40),
(6, 1, '2022-04-11', 130);

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `nameAlbum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateAlbum` date NOT NULL,
  `id_Artiste` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `albums`
--

INSERT INTO `albums` (`id`, `nameAlbum`, `dateAlbum`, `id_Artiste`) VALUES
(1, 'Joro', '2022-03-26', 9),
(2, 'Made in Lagos', '2022-03-26', 9),
(3, 'Emiliana', '2022-03-26', 3),
(4, 'Calm Down', '2022-03-26', 7),
(5, 'Finesse', '2022-03-26', 6),
(6, 'Degaine', '2022-03-26', 2),
(7, 'Playboy', '2022-03-26', 4),
(8, 'Original Vibe Machine', '2022-03-26', 1),
(9, 'Ayo Girl', '2022-03-26', 5),
(10, 'Ronisia', '2022-03-26', 8),
(11, 'Going To Where The Tea Trees Are', '2022-03-26', 18),
(12, 'Le temp passe etc.', '2022-03-26', 13),
(13, 'Son little', '2022-03-26', 17),
(14, 'Best Of & Variations', '2022-03-26', 20),
(15, 'In Between Dreams', '2022-03-26', 14),
(16, 'Toujours des fleurs', '2022-03-26', 15),
(17, 'Les failles', '2022-03-26', 16),
(18, 'Drive', '2022-03-26', 11),
(19, 'Qu\'en restera t-il ?', '2022-03-26', 19),
(20, 'Sick Sad Girl', '2022-03-26', 12),
(21, 'Envolver', '2022-03-26', 21),
(22, 'MAMIII', '2022-03-26', 22),
(23, 'Planet Her', '2022-03-26', 23),
(24, '=', '2022-03-26', 24),
(25, 'The Lockdown Sessions', '2022-03-26', 25),
(26, 'abcdefu', '2022-03-26', 26),
(27, 'Mercury-Act 1', '2022-03-26', 27),
(28, 'Feel Something', '2022-03-26', 28),
(29, 'F*CK LOVE 3: OVER YOU', '2022-03-26', 29),
(30, 'Long Way Down (Deluxe)', '2022-03-26', 30),
(31, 'Love In The Future', '2022-03-26', 36),
(32, 'Easy On Me', '2022-03-26', 31),
(33, 'I Was/ I Am', '2022-03-26', 31),
(34, 'Oh No, Not Again!-EP', '2022-03-26', 32),
(35, 'Kid Krow', '2022-03-26', 33),
(36, 'Arcade', '2022-03-26', 34),
(37, 'brent', '2022-03-26', 35),
(38, 'Out of love', '2022-03-26', 37),
(39, 'In The Lonely Hour', '2022-03-26', 38),
(40, 'Lover', '2022-03-26', 39),
(41, 'Sousou', '2022-03-26', 47),
(42, 'African Giant', '2022-03-26', 44),
(43, 'Matta', '2022-03-26', 48),
(44, 'Le prisonier', '2022-03-26', 41),
(45, 'Au top des annees 80, vol 1.', '2022-03-26', 43),
(46, 'Rien 100 Rien', '2022-03-26', 47),
(47, 'Vapeur toxiques', '2022-03-26', 45),
(48, 'Buster Keaton', '2022-03-26', 49),
(49, 'Comme un aimant', '2022-03-26', 42),
(50, 'L\'ecole Du Micro D\'argent', '2022-03-26', 46),
(51, 'joyful', '2022-03-26', 50),
(52, 'clarity', '2022-03-26', 51),
(53, 'The Outpour Experience', '2022-03-26', 52),
(54, 'Positive', '2022-03-26', 53),
(55, 'God Made', '2022-03-26', 54),
(56, 'All in Your Hands', '2022-03-26', 55),
(57, 'My Portion', '2022-03-26', 56),
(58, 'Alive & Well: No Limits', '2022-03-26', 57),
(59, 'Gotta Bilieve', '2022-03-26', 58),
(60, 'Anymore', '2022-03-26', 59),
(62, 'LOST IN PARADISE', '2022-03-27', 60),
(63, 'Nonante-Cinq', '2022-03-27', 61),
(64, 'Poison ou Antidote', '2022-03-27', 10),
(65, 'Rx', '2022-03-27', 62),
(66, '100 Visages', '2022-03-27', 63),
(67, 'QALF INFINITY', '2022-03-27', 40),
(68, 'M.I.L.S', '2022-03-27', 64),
(69, 'Akimbo', '2022-03-27', 65),
(70, 'Tailler', '2022-03-27', 66),
(71, 'Fiction', '2022-03-27', 67),
(72, 'Bare Bones', '2022-03-27', 68),
(73, 'My One and Only Thrill', '2022-03-27', 69),
(74, 'French Touch', '2022-03-27', 70),
(75, 'Pink Me Up Off the Floor', '2022-03-27', 71),
(76, 'Once in a Moon', '2022-03-27', 72),
(77, 'Dream a little dream', '2022-03-27', 73),
(78, 'Plan A', '2022-03-27', 80),
(79, 'Desesperados', '2022-03-27', 81),
(80, 'Sigue/Forever My Love', '2022-03-27', 78),
(81, 'Sensuel Bebe', '2022-03-27', 79),
(82, '@donnocean', '2022-03-27', 76),
(83, 'LEGENDADDY', '2022-03-27', 75),
(84, '12x3', '2022-03-27', 77),
(85, 'Good Things', '2022-03-27', 82),
(86, 'Less Is More', '2022-03-27', 83),
(87, 'King Of Bongo', '2022-03-27', 84),
(88, 'JORDI(Deluxe)', '2022-03-27', 85),
(89, '@Cover Me In Sunshine', '2022-03-27', 86),
(90, 'Woodstock', '2022-03-27', 87),
(91, 'Razorlight', '2022-03-27', 88),
(92, '1000 Forms Of Fear', '2022-03-27', 89),
(93, 'First Band On The Moon', '2022-03-27', 90),
(94, 'Save Me, San Francisco(Golden Gate)', '2022-03-27', 91),
(95, 'O.O', '2022-03-27', 92),
(96, 'Maniac', '2022-03-27', 93),
(97, 'Darari', '2022-03-27', 94),
(98, 'King', '2022-03-28', 10),
(99, 'Vibe', '2022-03-28', 95),
(100, 'Calypso : Winter Edition', '2022-03-28', 96),
(101, 'ADN', '2022-03-28', 97),
(102, 'Ena W Yek', '2022-03-28', 98),
(103, 'Authentic', '2022-03-28', 98),
(104, 'J\'ai des Doutes', '2022-03-28', 99),
(105, 'Je t\'a(b)ime', '2022-03-28', 100),
(106, 'Plus besoin', '2022-03-28', 101),
(107, 'Fleur froide- Second etat: la cristalisation', '2022-03-28', 102),
(108, 'Bad Habits', '2022-03-28', 24),
(109, 'Story Of My Life', '2022-03-28', 103),
(110, 'Won\'t Stand Down', '2022-03-28', 104),
(111, 'Kill The Noise', '2022-03-28', 105),
(112, 'Never Let Me Go', '2022-03-28', 106),
(113, 'Black Summer', '2022-03-28', 107),
(114, 'Human disorder', '2022-03-28', 108),
(115, 'Wild Child', '2022-03-28', 109),
(116, 'Enemies', '2022-03-28', 110),
(117, 'BOREALIS', '2022-03-28', 111),
(118, 'Despair', '2022-03-28', 112),
(119, 'Piano & Chill', '2022-03-28', 113),
(120, 'Pretending', '2022-03-28', 114),
(121, 'Moonbeams', '2022-03-28', 115),
(122, 'Piano & Chill 2', '2022-03-28', 116),
(123, 'The Watchtower', '2022-03-28', 117),
(124, 'The Book of jen', '2022-03-28', 118),
(125, 'Away', '2022-03-28', 119),
(126, 'Face Your Fear', '2022-03-28', 120),
(127, 'American Love Call', '2022-03-28', 121),
(128, 'Black Boy', '2022-03-28', 122),
(129, 'Good To You', '2022-03-28', 123),
(130, 'Queen Alone', '2022-03-28', 124),
(131, 'It Rain Love', '2022-03-28', 125),
(132, 'Big Crown Vault Vol.1', '2022-03-28', 125),
(133, 'I\'ll Be Fine', '2022-03-28', 126),
(134, 'It\'s Only Us', '2022-03-28', 127),
(135, 'Sunday Morning', '2022-03-28', 129),
(136, 'Paradis D\'amour', '2022-04-10', 130),
(137, 'Ayo', '2022-04-12', 131);

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

CREATE TABLE `artistes` (
  `id` int(11) NOT NULL,
  `nameArtist` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `artistes`
--

INSERT INTO `artistes` (`id`, `nameArtist`) VALUES
(1, '1da Banton'),
(2, 'Aya Nakamora'),
(3, 'Ckay'),
(4, 'Fireboy Dml'),
(5, 'Jason Derulo'),
(6, 'Pheelz'),
(7, 'Rema'),
(8, 'Ronisia'),
(9, 'Wizkid'),
(10, 'Dadju'),
(11, 'Charlotte Cardin'),
(12, 'Cloud'),
(13, 'Emma Peters'),
(14, 'Jack Johnson'),
(15, 'Janie'),
(16, 'Pomme'),
(17, 'Son Little'),
(18, 'Peter Von Poehl'),
(19, 'Tim Dup'),
(20, 'Vanessa Paradis'),
(21, 'Anitta'),
(22, 'Becky G'),
(23, 'Doja Cat'),
(24, 'Ed Sheeran'),
(25, 'Elton John'),
(26, 'Gayle'),
(27, 'Imagine Dragon'),
(28, 'Jaymes Young'),
(29, 'The kid Laroi'),
(30, 'Tom Odell'),
(31, 'Adele'),
(32, 'Alexander 23 IDK'),
(33, 'Conan Gray'),
(34, 'Duncan Laurence'),
(35, 'Jeremy Zucker'),
(36, 'John Legend'),
(37, 'Lil Tecca'),
(38, 'Sam Smith'),
(39, 'Taylor Swift'),
(40, 'Damso'),
(41, 'Antoine Ciosi'),
(42, 'Cunnie Williams'),
(43, 'Debut de la Soiree'),
(44, 'Burna Boy'),
(45, 'Don Choa'),
(46, 'IAM'),
(47, 'Jul'),
(48, 'Kwamz'),
(49, 'Miyagi Captain'),
(50, 'Dante Bowe'),
(51, 'Doe Clarity'),
(52, 'Earnest Pugh'),
(53, 'Erica Campbell'),
(54, 'Deltrick Haddon'),
(55, 'Marvin Sapp'),
(56, 'Jekalyn Carr'),
(57, 'Phil Wickham'),
(58, 'Tasha Cobbs'),
(59, 'Tony Williams Anymore'),
(60, 'Ali'),
(61, 'Angele'),
(62, 'Jeune Loup'),
(63, 'Leto'),
(64, 'Ninho'),
(65, 'Ziak'),
(66, 'Jamie Cullum'),
(67, 'Jane Birkin'),
(68, 'Madeleine Peyroux'),
(69, 'Melody Gardot'),
(70, 'Carla Bruni'),
(71, 'Norah Jones'),
(72, 'Sarah Kang'),
(73, 'Pink Martini'),
(74, 'Thomas Dutronc'),
(75, 'Daddy Yankee'),
(76, 'Danny Ocean'),
(77, 'Dekko'),
(78, 'J Balvin'),
(79, 'Jhay Cortez'),
(80, 'Paulo Londra'),
(81, 'Rauw Alejandro'),
(82, 'Aloe Blacc'),
(83, 'Lost Frequencies'),
(84, 'Mano Negra'),
(85, 'Maroon 5'),
(86, 'Willow Sage Hart'),
(87, 'Portugal'),
(88, 'RazorLight'),
(89, 'Sia'),
(90, 'The Cardigans'),
(91, 'Train'),
(92, 'NMIXX'),
(93, 'Stray Kids'),
(94, 'Treasure'),
(95, 'Franglish'),
(96, 'Joe Dwet'),
(97, 'Leila AD'),
(98, 'Lyna Mahyem'),
(99, 'Lynda'),
(100, 'NEJ'),
(101, 'Sirine'),
(102, 'Tayc'),
(103, 'Illenium Sueco'),
(104, 'Muse'),
(105, 'Red Hot Chili Peppers'),
(106, 'Papa Roach'),
(107, 'James Visualizer'),
(108, 'Skip The Use'),
(109, 'The Black Keys'),
(110, 'The Score'),
(111, 'Sofiane Pamart'),
(112, 'Gorati'),
(113, 'Beyond Two Soul'),
(114, 'Evolution of Stars'),
(115, 'Greg Barley'),
(116, 'Eriks Esenvalds'),
(117, 'Sigimund'),
(118, 'Tedosio'),
(119, 'Tony Green'),
(120, 'Curtis Harding'),
(121, 'Durand Jones'),
(122, 'Joel Culpepper'),
(123, 'Jonny P'),
(124, 'Lady Wray'),
(125, 'Lee Fields'),
(126, 'Marvin Brooks'),
(127, 'Monophonics'),
(128, 'Nekfeu'),
(129, 'The Main Squeeze'),
(130, 'Krisy'),
(131, 'Eden');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nameCategorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nameCategorie`, `color`) VALUES
(1, 'Hip-Hop', '#ba5d07'),
(3, 'Charts', '#8d67ab'),
(4, 'Pop', '#e13300'),
(5, 'Afro', '#af2896'),
(7, 'Rock', '#e61e32'),
(8, 'Chill', '#477d95'),
(9, 'R&B', '#dc148c'),
(11, 'Mood', '#8d67ab'),
(12, 'Soul', '#dc148c'),
(14, 'Gaming', '#148a08'),
(15, 'Sleep', '#1e3264'),
(16, 'At Home', '#477d95'),
(17, 'Latin', '#777777'),
(19, 'Jazz', '#1e3264'),
(25, 'Gospel', '#ba5d07');

-- --------------------------------------------------------

--
-- Structure de la table `ecoutes`
--

CREATE TABLE `ecoutes` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_musique` int(11) DEFAULT NULL,
  `dateEcoute` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ecoutes`
--

INSERT INTO `ecoutes` (`id`, `id_user`, `id_musique`, `dateEcoute`) VALUES
(1, 1, 1, '2022-04-06'),
(2, 1, 65, '2022-04-06'),
(3, 1, 69, '2022-04-06'),
(4, 1, 68, '2022-04-06'),
(5, 1, 69, '2022-04-07'),
(6, 2, 5, '2022-04-07'),
(7, 2, 70, '2022-04-07'),
(8, 1, 5, '2022-04-07'),
(9, 1, 3, '2022-04-07'),
(10, 1, 39, '2022-04-08'),
(11, 1, 39, '2022-04-08'),
(12, 2, 47, '2022-04-08'),
(13, 2, 70, '2022-04-08'),
(14, 2, 70, '2022-04-08'),
(15, 2, 70, '2022-04-08'),
(16, 2, 70, '2022-04-08'),
(17, 2, 70, '2022-04-08'),
(18, 2, 70, '2022-04-08'),
(19, 2, 70, '2022-04-08'),
(20, 2, 70, '2022-04-08'),
(21, 2, 70, '2022-04-08'),
(22, 1, 3, '2022-04-08'),
(23, 2, 5, '2022-04-08'),
(24, 2, 5, '2022-04-08'),
(25, 2, 10, '2022-04-08'),
(26, 2, 142, '2022-04-08'),
(27, 1, 39, '2022-04-08'),
(28, 1, 39, '2022-04-08'),
(29, 1, 66, '2022-04-08'),
(30, 1, 66, '2022-04-08'),
(31, 1, 66, '2022-04-08'),
(32, 1, 66, '2022-04-08'),
(33, 1, 66, '2022-04-08'),
(34, 1, 70, '2022-04-08'),
(35, 1, 68, '2022-04-08'),
(36, 1, 16, '2022-04-08'),
(37, 1, 5, '2022-04-08'),
(38, 1, 5, '2022-04-08'),
(39, 1, 2, '2022-04-09'),
(40, 1, 1, '2022-04-09'),
(41, 2, 2, '2022-04-09'),
(42, 2, 1, '2022-04-09'),
(43, 1, 31, '2022-04-09'),
(44, 1, 31, '2022-04-09'),
(45, 1, 31, '2022-04-09'),
(46, 1, 31, '2022-04-09'),
(47, 1, 70, '2022-04-10'),
(48, 1, 70, '2022-04-10'),
(49, 1, 5, '2022-04-10'),
(50, 1, 66, '2022-04-10'),
(51, 1, 71, '2022-04-10'),
(52, 1, 180, '2022-04-10'),
(53, 1, 71, '2022-04-10'),
(54, 1, 70, '2022-04-11'),
(55, 1, 1, '2022-04-11'),
(56, 1, 1, '2022-04-11'),
(57, 1, 3, '2022-04-11'),
(58, 1, 1, '2022-04-11'),
(59, 1, 180, '2022-04-11'),
(60, 1, 180, '2022-04-11'),
(61, 2, 65, '2022-04-11'),
(62, 2, 71, '2022-04-11'),
(63, 2, 5, '2022-04-11'),
(64, 2, 71, '2022-04-11'),
(65, 2, 41, '2022-04-11'),
(66, 2, 41, '2022-04-11'),
(67, 2, 46, '2022-04-11'),
(68, 2, 10, '2022-04-11'),
(69, 1, 181, '2022-04-12');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_Musique` int(11) DEFAULT NULL,
  `dateLike` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `id_user`, `id_Musique`, `dateLike`) VALUES
(4, 1, 3, '2022-04-08'),
(5, 1, 39, '2022-04-08'),
(7, 2, 70, '2022-04-08'),
(8, 2, 5, '2022-04-08'),
(9, 2, 10, '2022-04-08'),
(10, 2, 142, '2022-04-08'),
(11, 1, 5, '2022-04-08'),
(12, 1, 1, '2022-04-09'),
(14, 1, 31, '2022-04-09'),
(15, 1, 70, '2022-04-10'),
(16, 1, 71, '2022-04-10'),
(17, 1, 180, '2022-04-10'),
(18, 2, 71, '2022-04-11'),
(19, 2, 46, '2022-04-11'),
(20, 1, 181, '2022-04-12');

-- --------------------------------------------------------

--
-- Structure de la table `likesalbum`
--

CREATE TABLE `likesalbum` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dateLike` date NOT NULL,
  `id_Album` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `likesalbum`
--

INSERT INTO `likesalbum` (`id`, `id_user`, `dateLike`, `id_Album`) VALUES
(2, 1, '2022-04-09', 9),
(3, 2, '2022-04-10', 108),
(4, 1, '2022-04-11', 31),
(5, 1, '2022-04-11', 136);

-- --------------------------------------------------------

--
-- Structure de la table `likesplaylist`
--

CREATE TABLE `likesplaylist` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dateLike` date NOT NULL,
  `id_Playlist` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `likesplaylist`
--

INSERT INTO `likesplaylist` (`id`, `id_user`, `dateLike`, `id_Playlist`) VALUES
(1, 1, '2022-04-09', 4),
(3, 2, '2022-04-09', 4),
(4, 2, '2022-04-09', 10);

-- --------------------------------------------------------

--
-- Structure de la table `musicxplaylists`
--

CREATE TABLE `musicxplaylists` (
  `id` int(11) NOT NULL,
  `id_musique` int(11) DEFAULT NULL,
  `id_playlist` int(11) DEFAULT NULL,
  `dateAjout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `musicxplaylists`
--

INSERT INTO `musicxplaylists` (`id`, `id_musique`, `id_playlist`, `dateAjout`) VALUES
(6, 1, 4, '2022-04-10'),
(8, 71, 4, '2022-04-10'),
(9, 3, 2, '2022-04-11'),
(10, 4, 2, '2022-04-11'),
(11, 6, 2, '2022-04-11'),
(12, 10, 2, '2022-04-11'),
(13, 41, 2, '2022-04-11');

-- --------------------------------------------------------

--
-- Structure de la table `musicxplaylistsspotify`
--

CREATE TABLE `musicxplaylistsspotify` (
  `id` int(11) NOT NULL,
  `id_musique` int(11) DEFAULT NULL,
  `id_playlist` int(11) DEFAULT NULL,
  `dateAjout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `musicxplaylistsspotify`
--

INSERT INTO `musicxplaylistsspotify` (`id`, `id_musique`, `id_playlist`, `dateAjout`) VALUES
(1, 1, 4, '2022-04-08'),
(2, 2, 4, '2022-04-08'),
(3, 3, 4, '2022-04-08'),
(4, 4, 4, '2022-04-08'),
(5, 5, 4, '2022-04-08'),
(6, 6, 4, '2022-04-08'),
(7, 7, 4, '2022-04-08'),
(8, 8, 4, '2022-04-08'),
(9, 9, 4, '2022-04-08'),
(10, 10, 4, '2022-04-08'),
(11, 11, 12, '2022-04-09'),
(12, 12, 12, '2022-04-09'),
(13, 13, 12, '2022-04-09'),
(14, 14, 12, '2022-04-09'),
(15, 15, 12, '2022-04-09'),
(16, 16, 12, '2022-04-09'),
(17, 17, 12, '2022-04-09'),
(18, 18, 12, '2022-04-09'),
(19, 19, 12, '2022-04-09'),
(20, 20, 12, '2022-04-09'),
(21, 21, 2, '2022-04-09'),
(22, 22, 2, '2022-04-09'),
(23, 23, 2, '2022-04-09'),
(24, 24, 2, '2022-04-09'),
(25, 25, 2, '2022-04-09'),
(26, 26, 2, '2022-04-09'),
(27, 27, 2, '2022-04-09'),
(28, 28, 2, '2022-04-09'),
(29, 29, 2, '2022-04-09'),
(30, 30, 2, '2022-04-09'),
(31, 31, 6, '2022-04-09'),
(32, 32, 6, '2022-04-09'),
(33, 33, 6, '2022-04-09'),
(34, 34, 6, '2022-04-09'),
(35, 35, 6, '2022-04-09'),
(36, 36, 6, '2022-04-09'),
(37, 37, 6, '2022-04-09'),
(38, 38, 6, '2022-04-09'),
(39, 39, 6, '2022-04-09'),
(40, 40, 6, '2022-04-09'),
(41, 41, 10, '2022-04-09'),
(42, 42, 10, '2022-04-09'),
(43, 43, 10, '2022-04-09'),
(44, 44, 10, '2022-04-09'),
(45, 45, 10, '2022-04-09'),
(46, 46, 10, '2022-04-09'),
(47, 47, 10, '2022-04-09'),
(48, 48, 10, '2022-04-09'),
(49, 49, 10, '2022-04-09'),
(50, 50, 10, '2022-04-09'),
(51, 62, 15, '2022-04-09'),
(52, 53, 15, '2022-04-09'),
(53, 54, 15, '2022-04-09'),
(54, 55, 15, '2022-04-09'),
(55, 56, 15, '2022-04-09'),
(56, 57, 15, '2022-04-09'),
(57, 58, 15, '2022-04-09'),
(58, 59, 15, '2022-04-09'),
(59, 60, 15, '2022-04-09'),
(60, 61, 15, '2022-04-09'),
(61, 65, 1, '2022-04-09'),
(62, 66, 1, '2022-04-09'),
(63, 67, 1, '2022-04-09'),
(64, 68, 1, '2022-04-09'),
(65, 69, 1, '2022-04-09'),
(66, 70, 1, '2022-04-09'),
(67, 71, 1, '2022-04-09'),
(68, 72, 1, '2022-04-09'),
(89, 75, 14, '2022-04-09'),
(90, 76, 14, '2022-04-09'),
(91, 77, 14, '2022-04-09'),
(92, 78, 14, '2022-04-09'),
(93, 79, 14, '2022-04-09'),
(94, 80, 14, '2022-04-09'),
(95, 81, 14, '2022-04-09'),
(96, 82, 14, '2022-04-09'),
(97, 83, 14, '2022-04-09'),
(98, 180, 7, '2022-04-10');

-- --------------------------------------------------------

--
-- Structure de la table `musiques`
--

CREATE TABLE `musiques` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_Artiste` int(11) DEFAULT NULL,
  `id_Album` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `musiques`
--

INSERT INTO `musiques` (`id`, `titre`, `duree`, `id_Artiste`, `id_Album`, `id_categorie`) VALUES
(1, 'Ayo girl', '2:45', 8, 9, 5),
(2, 'Calm Down', '3:39', 7, 4, 5),
(3, 'Degaine', '3:30', 2, 6, 5),
(4, 'Essence', '4:16', 9, 2, 5),
(5, 'Finesse', '2:44', 6, 5, 5),
(6, 'Joro', '4:30', 9, 1, 5),
(7, 'Melodie(Tatami)', '2:20', 8, 10, 5),
(8, 'No wahala', '2:42', 1, 8, 5),
(9, 'Playboy', '3:27', 4, 7, 5),
(10, 'Emiliana', '2:44', 3, 3, 5),
(11, 'The Story of the Impossible', '3:37', 18, 11, 16),
(12, 'Le temps passe', '3:12', 13, 12, 16),
(13, 'Lay Down', '3:48', 17, 13, 16),
(14, 'Il y a', '2:39', 20, 14, 16),
(15, 'Banana Pancakes', '3:11', 14, 15, 16),
(16, 'Mon Idole', '4:41', 15, 16, 16),
(17, 'anxiete', '3:50', 16, 17, 16),
(18, 'Drive', '3:10', 11, 18, 16),
(19, 'Une autre histoire d\'amour', '4:12', 19, 19, 16),
(20, 'Crawl', '3:10', 12, 20, 16),
(21, 'abcdefu', '2:48', 26, 26, 3),
(22, 'Another Love', '4:04', 30, 30, 3),
(23, 'Cold Heart Pnau', '3:22', 25, 25, 3),
(24, 'Enemy', '3:38', 27, 27, 3),
(25, 'Envolver', '3:13', 21, 21, 3),
(26, 'Infinity', '3:57', 28, 28, 3),
(27, 'MAMIII', '3:46', 22, 22, 3),
(28, 'Shivers', '3:27', 24, 24, 3),
(29, 'Stay', '2:21', 29, 29, 3),
(30, 'Woman', '2:52', 23, 23, 3),
(31, 'All of Me', '4:29', 36, 31, 8),
(32, 'Arcade', '3:03', 34, 36, 8),
(33, 'Easy On Me', '3:44', 31, 32, 8),
(34, 'Heather', '3:18', 33, 35, 8),
(35, 'I m Not The Only One', '3:59', 38, 39, 8),
(36, 'IDK You Yet', '3:04', 32, 34, 8),
(37, 'Lover', '3:41', 39, 40, 8),
(38, 'Out of Love', '3:01', 37, 38, 8),
(39, 'Someone Like You', '3:06', 31, 33, 8),
(40, 'you were good to me', '3:39', 35, 37, 8),
(41, 'Sousou', '3:57', 47, 41, 14),
(42, 'On The Low', '3:05', 44, 42, 14),
(43, 'Matta', '3:44', 48, 43, 14),
(44, 'Le prisonnier', '2:24', 41, 44, 14),
(45, 'Nuit de folie', '4:12', 43, 45, 14),
(46, 'JCVD', '3:14', 47, 46, 14),
(47, 'Jusqu\'au bout', '5:01', 45, 47, 14),
(48, 'Captain', '3:34', 49, 48, 14),
(49, 'Life Goes One', '3:33', 42, 49, 14),
(50, 'Demain,c est loin', '9:07', 46, 50, 14),
(53, 'All in your hands', '4:35', 55, 56, 25),
(54, 'Anymore', '3:52', 59, 60, 25),
(55, 'Believe', '2:54', 58, 59, 25),
(56, 'Clarity', '3:34', 51, 52, 25),
(57, 'God Made', '3:20', 54, 55, 25),
(58, 'House of the Lord', '4:10', 57, 58, 25),
(59, 'Joyful', '2:16', 50, 51, 25),
(60, 'My Portion', '4:10', 56, 57, 25),
(61, 'Positive', '3:31', 53, 54, 25),
(62, 'Thank You so Much', '3:43', 52, 53, 25),
(65, 'Demons', '4:37', 61, 63, 1),
(66, 'Fixette', '3:47', 65, 69, 1),
(67, 'LOST IN PARADISE', '5:36', 60, 62, 1),
(68, 'MOROSE', '3:52', 40, 67, 1),
(69, 'Macaroni', '3:52', 63, 66, 1),
(70, 'Robe', '3:49', 10, 64, 1),
(71, 'Sensuelle', '2:05', 62, 65, 1),
(72, 'Zipette', '3:29', 64, 68, 1),
(75, 'Baby I m a Fool', '3:34', 69, 73, 19),
(76, 'Come Away With Me', '3:19', 71, 75, 19),
(77, 'Dream a Little Dream', '3:52', 73, 77, 19),
(78, 'Harvest Moon', '3:08', 67, 71, 19),
(79, 'Moon River', '3:19', 70, 74, 19),
(80, 'Once in a Moon', '4:11', 72, 76, 19),
(81, 'The Age of Anxiety', '3:30', 66, 70, 19),
(82, 'To Live', '4:37', 71, 75, 19),
(83, 'To Love You All Over Again', '4:02', 68, 72, 19),
(93, '12x3', '2:39', 77, 84, 17),
(94, 'Desesperados', '3:34', 81, 79, 17),
(95, 'Fuera del Mercado', '2:39', 76, 82, 17),
(96, 'Plan A', '2:58', 80, 78, 17),
(97, 'Rumbaton', '4:08', 75, 83, 17),
(98, 'Sensual Bebe', '3:29', 79, 81, 17),
(99, 'Sigue', '2:39', 78, 80, 17),
(102, 'America', '4:09', 88, 91, 11),
(103, 'Chandelier', '3:36', 89, 92, 11),
(104, 'Cover Me In Sunshine', '2:21', 86, 89, 11),
(105, 'Hey Soul Sister', '3:36', 91, 94, 11),
(106, 'I Need a Dollar', '4:03', 82, 85, 11),
(107, 'Lovefool', '3:13', 90, 93, 11),
(108, 'Memories', '3:09', 85, 88, 11),
(109, 'Out of Time Man', '3:24', 84, 87, 11),
(110, 'Reality', '2:39', 83, 86, 11),
(111, 'Feel It Still', '2:43', 87, 90, 11),
(112, 'O.O', '3:39', 92, 95, 4),
(113, 'Maniac', '3:28', 93, 96, 4),
(114, 'Darari', '3:47', 94, 97, 4),
(125, 'King', '3:49', 10, 98, 9),
(126, 'Peur d\'aimer', '3:34', 95, 99, 9),
(127, 'C\'est Toi', '2:41', 96, 100, 9),
(128, 'A Qui La Faute', '3:25', 97, 101, 9),
(129, 'Ena W Yek', '3:15', 98, 102, 9),
(130, 'Mal De Toi', '3:15', 98, 103, 9),
(131, 'J\'ai Des Doutes', '2:52', 99, 104, 9),
(132, 'Je t\'abime', '3:48', 100, 105, 9),
(133, 'Plus Besoin', '2:48', 101, 106, 9),
(134, 'Dodo', '2:59', 102, 107, 9),
(142, 'Bad Habits', '4:10', 24, 108, 7),
(143, 'Story Of My Life', '4:00', 103, 109, 7),
(144, 'Won\'t Stand Down', '3:29', 104, 110, 7),
(145, 'Kill The Noise', '3:08', 105, 111, 7),
(146, 'Beautiful James', '4:08', 106, 112, 7),
(147, 'Black Summer', '3:52', 107, 113, 7),
(148, 'Human Disorder', '2:38', 108, 114, 7),
(149, 'Wild Child', '2:44', 109, 115, 7),
(150, 'Ennemies', '2:41', 110, 116, 7),
(151, 'Borealis', '2:11', 111, 117, 15),
(152, 'Despair', '3:14', 112, 118, 15),
(153, 'Echoes Of You', '2:20', 113, 119, 15),
(154, 'Pretending', '3:20', 114, 120, 15),
(155, 'Moonbeams', '3:40', 115, 121, 15),
(156, 'Northern Lights', '3:11', 116, 122, 15),
(157, 'The Watchtower', '3:25', 117, 123, 15),
(158, 'The_Book of jen', '2:47', 118, 124, 15),
(159, 'Away', '2:57', 119, 125, 15),
(170, 'Need Your Love', '2:57', 120, 126, 12),
(171, 'Don\'t You Know', '3:20', 121, 127, 12),
(172, 'Black Boy', '4:03', 122, 128, 12),
(173, 'Good To You', '2:38', 123, 129, 12),
(174, 'In Love', '2:17', 124, 130, 12),
(175, 'Blessed With The Best', '3:49', 125, 131, 12),
(176, 'Thinking About You', '2:40', 125, 132, 12),
(177, 'Shake What Your Mama', '2:47', 126, 133, 12),
(178, 'Last One Standing', '7:16', 127, 134, 12),
(179, 'Sunday Morning', '3:49', 129, 135, 12),
(180, 'Erotiquement Votre', '3:01', 130, 136, 9),
(181, 'Ayo', '4:42', 131, 137, 25);

-- --------------------------------------------------------

--
-- Structure de la table `playlists`
--

CREATE TABLE `playlists` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dateCreation` date NOT NULL,
  `namePlaylist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `playlists`
--

INSERT INTO `playlists` (`id`, `id_user`, `dateCreation`, `namePlaylist`, `description`) VALUES
(2, 2, '2022-04-09', 'Lofi beats', 'Purrrr with beats to chill, relax, study, code, focus, and sleep'),
(4, 1, '2022-04-10', 'detente', 'En detente');

-- --------------------------------------------------------

--
-- Structure de la table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `valSearch` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `search`
--

INSERT INTO `search` (`id`, `id_user`, `valSearch`) VALUES
(1, 2, 'Demons'),
(2, 2, 'Finesse'),
(3, 2, ''),
(4, 2, 'cat'),
(5, 2, 'Dem'),
(6, 1, 'Erotiquement'),
(7, 1, 'Finesse'),
(8, 2, 'nh'),
(9, 1, 'Ayo');

-- --------------------------------------------------------

--
-- Structure de la table `spotify_playlists`
--

CREATE TABLE `spotify_playlists` (
  `id` int(11) NOT NULL,
  `dateCreation` date NOT NULL,
  `namePlaylist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `spotify_playlists`
--

INSERT INTO `spotify_playlists` (`id`, `dateCreation`, `namePlaylist`, `description`, `genre`) VALUES
(1, '2022-04-08', 'Pop Urbaine', 'Tous les hits pop urbaine et afropop.', 'Hip-Hop'),
(2, '2022-04-08', 'Top Songs - Globals', 'Your weekly update of the most played tracks right now - Global.', 'Charts'),
(3, '2022-04-08', 'Hit Radio', 'Le meilleur des hits ! ', 'Pop'),
(4, '2022-04-08', 'Afro Hits', 'Feel-good Afropop from Europe and Africa.', 'Afro'),
(5, '2022-04-08', 'Top Hits Rock', 'Tous les plus gros hits rock récents réunis sur une même playlist.', 'Rock'),
(6, '2022-04-08', 'Chill Hits', 'Kick back to the best new and recent chill hits.', 'Chill'),
(7, '2022-04-08', 'R&Bae', 'Le R&B français, nouvelle ère.', 'R&B'),
(8, '2022-04-08', 'La vie est belle', 'Le meilleur de la musique d\'hier et d\'aujourd\'hui pour une journée parfaite.', 'Mood'),
(9, '2022-04-08', 'Feelin\' Good', 'Feel good with this positively timeless playlist!', 'Soul'),
(10, '2022-04-08', 'Gaming avec Jul', 'Gaming à la maison avec la sélection de Jul !', 'Gaming'),
(11, '2022-04-08', 'Nocturne', 'Pour tomber dans les bras de Morphée...', 'Sleep'),
(12, '2022-04-08', 'Au Calme', 'La playlist idéale pour se détendre en musique.', 'At Home'),
(13, '2022-04-08', 'Viva Latino', 'Today\'s top Latin hits, elevando nuestra música.', 'Latin'),
(14, '2022-04-08', 'Hard Bop Classics', 'Funky jazz from the mid 1950s to the early 1960s.', 'Jazz'),
(15, '2022-04-08', 'Fresh Gospel', 'New songs from some of the latest and greatest Gospel music artists.', 'Gospel');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `identifiantEmailUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profilNameUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mdpUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genreUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthUser` date NOT NULL,
  `etatUser` int(11) NOT NULL,
  `nombreConnexion` int(11) NOT NULL,
  `dateInscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `identifiantEmailUser`, `profilNameUser`, `mdpUser`, `genreUser`, `birthUser`, `etatUser`, `nombreConnexion`, `dateInscription`) VALUES
(1, 'jeremyobiang412@gmail.com', 'Jerems', '6988621f2b10f70d88109bb66a10e2a4', 'masculin', '2002-04-25', 1, 422, '2022-04-03'),
(2, 'jeremyobiang413@gmail.com', 'Jerems2', '6988621f2b10f70d88109bb66a10e2a4', 'masculin', '2002-04-25', 1, 40, '2022-04-06'),
(5, 'jeremyobiang414@gmail.com', 'Jerems', '6988621f2b10f70d88109bb66a10e2a4', 'masculin', '2022-04-12', 1, 1, '2022-04-12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnements`
--
ALTER TABLE `abonnements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4788B7676B3CA4B` (`id_user`),
  ADD KEY `IDX_4788B7678D27A5A3` (`id_Artiste`);

--
-- Index pour la table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F4E2474F8D27A5A3` (`id_Artiste`);

--
-- Index pour la table `artistes`
--
ALTER TABLE `artistes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ecoutes`
--
ALTER TABLE `ecoutes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F7F0E126B3CA4B` (`id_user`),
  ADD KEY `IDX_F7F0E123080FFCC` (`id_musique`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_49CA4E7D6B3CA4B` (`id_user`),
  ADD KEY `IDX_49CA4E7DFF3DC650` (`id_Musique`);

--
-- Index pour la table `likesalbum`
--
ALTER TABLE `likesalbum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3F53ADED6B3CA4B` (`id_user`),
  ADD KEY `IDX_3F53ADED16DC0077` (`id_Album`);

--
-- Index pour la table `likesplaylist`
--
ALTER TABLE `likesplaylist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E805FEF46B3CA4B` (`id_user`),
  ADD KEY `IDX_E805FEF47E2F9FEE` (`id_Playlist`);

--
-- Index pour la table `musicxplaylists`
--
ALTER TABLE `musicxplaylists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_214D9F673080FFCC` (`id_musique`),
  ADD KEY `IDX_214D9F678759FDB8` (`id_playlist`);

--
-- Index pour la table `musicxplaylistsspotify`
--
ALTER TABLE `musicxplaylistsspotify`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F345B8163080FFCC` (`id_musique`),
  ADD KEY `IDX_F345B8168759FDB8` (`id_playlist`);

--
-- Index pour la table `musiques`
--
ALTER TABLE `musiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D9372DFAC9486A13` (`id_categorie`),
  ADD KEY `IDX_D9372DFA8D27A5A3` (`id_Artiste`),
  ADD KEY `IDX_D9372DFA16DC0077` (`id_Album`);

--
-- Index pour la table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5E06116F6B3CA4B` (`id_user`);

--
-- Index pour la table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B4F0DBA76B3CA4B` (`id_user`);

--
-- Index pour la table `spotify_playlists`
--
ALTER TABLE `spotify_playlists`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `search_idx` (`identifiantEmailUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnements`
--
ALTER TABLE `abonnements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT pour la table `artistes`
--
ALTER TABLE `artistes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `ecoutes`
--
ALTER TABLE `ecoutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `likesalbum`
--
ALTER TABLE `likesalbum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `likesplaylist`
--
ALTER TABLE `likesplaylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `musicxplaylists`
--
ALTER TABLE `musicxplaylists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `musicxplaylistsspotify`
--
ALTER TABLE `musicxplaylistsspotify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `musiques`
--
ALTER TABLE `musiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT pour la table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `spotify_playlists`
--
ALTER TABLE `spotify_playlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnements`
--
ALTER TABLE `abonnements`
  ADD CONSTRAINT `FK_4788B7676B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_4788B7678D27A5A3` FOREIGN KEY (`id_Artiste`) REFERENCES `artistes` (`id`);

--
-- Contraintes pour la table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `FK_F4E2474F8D27A5A3` FOREIGN KEY (`id_Artiste`) REFERENCES `artistes` (`id`);

--
-- Contraintes pour la table `ecoutes`
--
ALTER TABLE `ecoutes`
  ADD CONSTRAINT `FK_F7F0E123080FFCC` FOREIGN KEY (`id_musique`) REFERENCES `musiques` (`id`),
  ADD CONSTRAINT `FK_F7F0E126B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `FK_49CA4E7D6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_49CA4E7DFF3DC650` FOREIGN KEY (`id_Musique`) REFERENCES `musiques` (`id`);

--
-- Contraintes pour la table `likesalbum`
--
ALTER TABLE `likesalbum`
  ADD CONSTRAINT `FK_3F53ADED16DC0077` FOREIGN KEY (`id_Album`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `FK_3F53ADED6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `likesplaylist`
--
ALTER TABLE `likesplaylist`
  ADD CONSTRAINT `FK_E805FEF46B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_E805FEF47E2F9FEE` FOREIGN KEY (`id_Playlist`) REFERENCES `spotify_playlists` (`id`);

--
-- Contraintes pour la table `musicxplaylists`
--
ALTER TABLE `musicxplaylists`
  ADD CONSTRAINT `FK_214D9F673080FFCC` FOREIGN KEY (`id_musique`) REFERENCES `musiques` (`id`),
  ADD CONSTRAINT `FK_214D9F678759FDB8` FOREIGN KEY (`id_playlist`) REFERENCES `playlists` (`id`);

--
-- Contraintes pour la table `musicxplaylistsspotify`
--
ALTER TABLE `musicxplaylistsspotify`
  ADD CONSTRAINT `FK_F345B8163080FFCC` FOREIGN KEY (`id_musique`) REFERENCES `musiques` (`id`),
  ADD CONSTRAINT `FK_F345B8168759FDB8` FOREIGN KEY (`id_playlist`) REFERENCES `spotify_playlists` (`id`);

--
-- Contraintes pour la table `musiques`
--
ALTER TABLE `musiques`
  ADD CONSTRAINT `FK_D9372DFA16DC0077` FOREIGN KEY (`id_Album`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `FK_D9372DFA8D27A5A3` FOREIGN KEY (`id_Artiste`) REFERENCES `artistes` (`id`),
  ADD CONSTRAINT `FK_D9372DFAC9486A13` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `playlists`
--
ALTER TABLE `playlists`
  ADD CONSTRAINT `FK_5E06116F6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `FK_B4F0DBA76B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
