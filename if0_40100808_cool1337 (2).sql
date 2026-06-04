-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: sql209.infinityfree.com
-- Время создания: Ноя 26 2025 г., 15:44
-- Версия сервера: 11.4.7-MariaDB
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `if0_40100808_cool1337`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abuse_reports`
--

CREATE TABLE `abuse_reports` (
  `id` int(11) NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `reported_item_id` int(11) NOT NULL,
  `item_type` enum('user','asset','game','forum') NOT NULL,
  `reason` text NOT NULL,
  `reported_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `resolved` tinyint(1) DEFAULT 0,
  `resolved_by` int(11) DEFAULT NULL,
  `resolved_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('image','shirt','pants','tshirt','hat','model') NOT NULL,
  `creator_id` int(11) NOT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `moderated_by` int(11) DEFAULT NULL,
  `moderated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `type` enum('hat','head','face','shirt','pants','tshirt') NOT NULL,
  `price` int(11) DEFAULT 0,
  `buywith` enum('robux','tix','free') DEFAULT 'free',
  `creator` int(11) NOT NULL,
  `datemade` int(11) NOT NULL,
  `approved` tinyint(1) DEFAULT 1,
  `sales` int(11) DEFAULT 0,
  `favorites` int(11) DEFAULT 0,
  `asseturl` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `description`, `type`, `price`, `buywith`, `creator`, `datemade`, `approved`, `sales`, `favorites`, `asseturl`, `thumbnail`) VALUES
(1, 'Classic Fedora', 'A stylish classic fedora hat', 'hat', 50, 'robux', 1, 1763850496, 1, 0, 0, NULL, NULL),
(2, 'Blue T-Shirt', 'A simple blue t-shirt', 'tshirt', 10, 'tix', 1, 1763850496, 1, 0, 0, NULL, NULL),
(3, 'Smiley Face', 'A happy smiley face', 'face', 0, 'free', 1, 1763850496, 1, 0, 0, NULL, NULL),
(4, 'Denim Pants', 'Cool denim jeans', 'pants', 75, 'robux', 1, 1763850496, 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `posted` int(11) NOT NULL,
  `approved` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `favorited` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `sent_from` int(11) NOT NULL,
  `sent_to` int(11) NOT NULL,
  `pending` enum('pending','accepted','declined') DEFAULT 'pending',
  `date_sent` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `creator` int(11) NOT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `players` int(11) DEFAULT 0,
  `date_created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`id`, `name`, `description`, `creator`, `thumbnail`, `players`, `date_created`) VALUES
(1, 'test', 'test', 1, 'no', 0, '2025-11-23 14:41:01');

-- --------------------------------------------------------

--
-- Структура таблицы `inserver`
--

CREATE TABLE `inserver` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `serverid` int(11) NOT NULL,
  `jointime` timestamp NOT NULL DEFAULT current_timestamp(),
  `leavetime` timestamp NULL DEFAULT NULL,
  `isonline` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `owneditems`
--

CREATE TABLE `owneditems` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `purchased` timestamp NOT NULL DEFAULT current_timestamp(),
  `purchaseprice` int(11) DEFAULT 0,
  `currency` enum('robux','tix','free') DEFAULT 'free'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `servers`
--

CREATE TABLE `servers` (
  `id` int(11) NOT NULL,
  `serverid` varchar(100) NOT NULL,
  `servername` varchar(255) NOT NULL,
  `playercount` int(11) DEFAULT 0,
  `maxplayers` int(11) DEFAULT 10,
  `creatorid` int(11) NOT NULL,
  `creatorname` varchar(50) NOT NULL,
  `placeid` int(11) DEFAULT NULL,
  `placename` varchar(255) DEFAULT NULL,
  `ipaddress` varchar(45) DEFAULT NULL,
  `port` int(11) DEFAULT NULL,
  `starttime` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastping` timestamp NOT NULL DEFAULT current_timestamp(),
  `isactive` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bux` int(11) DEFAULT 0,
  `tix` int(11) DEFAULT 0,
  `theme` varchar(50) DEFAULT 'Roblox 2008',
  `perms` enum('User','Moderator','Administrator','Owner') DEFAULT 'User',
  `bantype` enum('None','Warning','TempBan','PermBan') DEFAULT 'None',
  `lastseen` int(11) DEFAULT NULL,
  `joined` timestamp NOT NULL DEFAULT current_timestamp(),
  `avatar` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `buildersclub` tinyint(1) DEFAULT 0,
  `bcexpire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `bux`, `tix`, `theme`, `perms`, `bantype`, `lastseen`, `joined`, `avatar`, `birthdate`, `gender`, `country`, `ip`, `description`, `buildersclub`, `bcexpire`) VALUES
(1, 'ROBLOX', '$2y$10$w78WF86IKayRv1ySm5m3cut8BPg74J8MIoymR830uKUsbNwgSnQ2i', 'dfhgjkjuegeyef@gmail.com', 13387, 15315, 'Roblox 2008', 'Owner', 'None', 1764183142, '2025-11-22 22:52:47', NULL, NULL, 'Male', NULL, NULL, NULL, 0, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abuse_reports`
--
ALTER TABLE `abuse_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resolved` (`resolved`),
  ADD KEY `reported_item_id` (`reported_item_id`);

--
-- Индексы таблицы `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `approved` (`approved`),
  ADD KEY `creator_id` (`creator_id`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator` (`creator`),
  ADD KEY `type` (`type`),
  ADD KEY `approved` (`approved`),
  ADD KEY `buywith` (`buywith`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itemid` (`itemid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `approved` (`approved`);

--
-- Индексы таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid_itemid` (`uid`,`itemid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `itemid` (`itemid`);

--
-- Индексы таблицы `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sent_from` (`sent_from`),
  ADD KEY `sent_to` (`sent_to`);

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator` (`creator`);

--
-- Индексы таблицы `inserver`
--
ALTER TABLE `inserver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `serverid` (`serverid`),
  ADD KEY `isonline` (`isonline`);

--
-- Индексы таблицы `owneditems`
--
ALTER TABLE `owneditems`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_item` (`user`,`item`),
  ADD KEY `user` (`user`),
  ADD KEY `item` (`item`);

--
-- Индексы таблицы `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serverid` (`serverid`),
  ADD KEY `creatorid` (`creatorid`),
  ADD KEY `placeid` (`placeid`),
  ADD KEY `isactive` (`isactive`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `perms` (`perms`),
  ADD KEY `bantype` (`bantype`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abuse_reports`
--
ALTER TABLE `abuse_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `inserver`
--
ALTER TABLE `inserver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `owneditems`
--
ALTER TABLE `owneditems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
