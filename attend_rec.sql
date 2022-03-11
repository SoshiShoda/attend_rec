-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-03-11 09:47:12
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `attend_rec`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `records`
--

CREATE TABLE `records` (
  `user_id` int(11) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `worked_date` date NOT NULL,
  `started_at_hour` int(11) NOT NULL DEFAULT current_timestamp(),
  `started_at_minute` int(11) NOT NULL DEFAULT current_timestamp(),
  `ended_at_hour` int(11) NOT NULL DEFAULT current_timestamp(),
  `ended_at_minute` int(11) NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `records`
--

INSERT INTO `records` (`user_id`, `employee_id`, `worked_date`, `started_at_hour`, `started_at_minute`, `ended_at_hour`, `ended_at_minute`, `created_at`, `updated_at`) VALUES
(1, '', '2022-01-06', 3, 15, 5, 45, '2022-03-05 14:40:40', '2022-03-05 14:40:40'),
(1, '', '2022-02-01', 6, 15, 9, 15, '2022-03-05 14:39:23', '2022-03-05 14:39:23'),
(1, '', '2022-02-09', 1, 45, 2, 15, '2022-03-05 14:37:51', '2022-03-05 14:37:51'),
(1, '', '2022-02-10', 1, 15, 1, 45, '2022-03-05 14:26:09', '2022-03-05 14:26:09'),
(1, '', '2022-02-12', 2, 15, 3, 45, '2022-03-06 06:49:41', '2022-03-06 06:49:41'),
(1, '', '2022-02-28', 2, 15, 2, 45, '2022-03-05 10:53:17', '2022-03-05 10:53:17'),
(1, '', '2022-03-01', 1, 15, 1, 45, '2022-03-05 10:52:59', '2022-03-05 10:52:59'),
(1, '', '2022-03-04', 4, 15, 4, 45, '2022-03-04 18:31:47', '2022-03-04 18:31:47'),
(1, '', '2022-03-05', 1, 15, 1, 45, '2022-03-05 14:25:25', '2022-03-05 14:25:25'),
(1, '', '2022-03-06', 6, 15, 6, 45, '2022-03-06 06:48:53', '2022-03-06 06:48:53');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `password` varchar(126) NOT NULL,
  `family_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `address` varchar(254) NOT NULL,
  `tel` varchar(254) NOT NULL,
  `joined_at` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_id`, `employee_id`, `password`, `family_name`, `first_name`, `email`, `address`, `tel`, `joined_at`, `created_at`, `updated_at`) VALUES
(1, '001', '$2y$10$a2Nkt9VxHxMZueq4mlptqeM070yQC6p9DQSPTtaFdIjd5AdhUh82u', 'やまだ', 'たろう', '', '', '', '', '2022-03-04 18:31:25', '2022-03-04 18:31:25'),
(2, '001', '$2y$10$YajgrYwrajllBe9intRt/u9c8SNUMW9yktIlXHkqZTPyykxNpdvLa', '山田', '太郎', '', '', '', '', '2022-03-05 10:52:28', '2022-03-05 10:52:28');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`user_id`,`worked_date`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `started_at_hour` (`started_at_hour`),
  ADD KEY `started_at_minute` (`started_at_minute`),
  ADD KEY `ended_at_hour` (`ended_at_hour`),
  ADD KEY `ended_at_minute` (`ended_at_minute`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `password` (`password`),
  ADD KEY `family_name` (`family_name`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `email` (`email`),
  ADD KEY `address` (`address`),
  ADD KEY `tel` (`tel`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
