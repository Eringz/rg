/*
SQLyog - Free MySQL GUI v5.02
Host - 5.5.5-10.3.16-MariaDB : Database - willwatch
*********************************************************************
Server version : 5.5.5-10.3.16-MariaDB
*/


create database if not exists `willwatch`;

USE `willwatch`;

SET FOREIGN_KEY_CHECKS=0;

/*Table structure for table `user_logs` */

DROP TABLE IF EXISTS `user_logs`;

CREATE TABLE `user_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_login` tinyint(1) NOT NULL DEFAULT 0,
  `users_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `user_fk_cons` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

/*Data for the table `user_logs` */

insert into `user_logs` values 
(1,1,1,'0000-00-00 00:00:00'),
(2,0,1,'2021-12-18 18:11:49'),
(3,1,1,'2021-12-18 18:15:40'),
(4,0,1,'2021-12-18 18:15:57'),
(5,1,2,'2021-12-18 18:16:16'),
(6,0,2,'2021-12-18 18:16:44'),
(7,1,5,'2022-01-12 09:02:06'),
(8,0,5,'2022-01-12 09:02:58'),
(9,1,5,'2022-01-12 13:14:04'),
(10,0,5,'2022-01-12 13:14:07'),
(11,1,5,'2022-01-13 01:45:57'),
(12,0,5,'2022-01-13 01:46:03'),
(13,1,5,'2022-01-13 01:48:39'),
(14,0,5,'2022-01-13 01:48:47'),
(15,1,5,'2022-01-13 01:50:03'),
(16,0,5,'2022-01-13 01:50:05'),
(17,1,5,'2022-01-13 01:53:51'),
(18,0,5,'2022-01-13 01:53:56'),
(19,1,5,'2022-01-13 01:54:32'),
(20,0,5,'2022-01-13 01:55:11'),
(21,1,5,'2022-01-13 01:55:19'),
(22,0,5,'2022-01-13 01:57:20'),
(23,1,5,'2022-01-13 01:57:26'),
(24,0,5,'2022-01-13 02:01:44'),
(25,1,5,'2022-01-13 02:01:53'),
(26,0,5,'2022-01-13 02:02:18'),
(27,1,5,'2022-01-13 02:02:23'),
(28,0,5,'2022-01-13 02:03:21'),
(29,1,5,'2022-01-13 02:03:27'),
(30,0,5,'2022-01-13 02:11:27'),
(31,1,5,'2022-01-13 02:11:34'),
(32,0,5,'2022-01-13 02:11:38'),
(33,1,5,'2022-01-13 02:12:24'),
(34,0,5,'2022-01-13 02:12:32'),
(35,1,5,'2022-01-13 02:24:48'),
(36,0,5,'2022-01-13 02:25:37'),
(37,1,5,'2022-01-13 02:25:42'),
(38,0,5,'2022-01-13 02:25:44'),
(39,1,5,'2022-01-13 02:28:43'),
(40,0,5,'2022-01-13 02:28:44'),
(41,1,5,'2022-01-13 02:29:49'),
(42,0,5,'2022-01-13 02:29:51'),
(43,1,5,'2022-01-13 02:30:35'),
(44,0,5,'2022-01-13 02:30:42'),
(45,1,6,'2022-01-13 02:39:14'),
(46,0,6,'2022-01-13 02:39:22'),
(47,1,5,'2022-01-13 02:57:30'),
(48,0,5,'2022-01-13 02:57:31'),
(49,1,5,'2022-01-13 12:31:43'),
(50,0,5,'2022-01-13 12:31:55'),
(51,1,15,'2022-01-13 12:32:27'),
(52,0,15,'2022-01-13 12:32:30'),
(53,1,16,'2022-01-14 09:37:12'),
(54,0,16,'2022-01-14 09:37:29'),
(55,1,5,'2022-01-14 09:48:47'),
(56,0,5,'2022-01-14 10:05:39'),
(57,1,5,'2022-01-14 10:07:45'),
(58,0,5,'2022-01-14 10:07:52'),
(59,1,5,'2022-01-14 10:19:44'),
(60,0,5,'2022-01-14 10:19:48'),
(61,1,17,'2022-01-14 10:33:31'),
(62,0,17,'2022-01-14 10:33:35'),
(63,1,5,'2022-01-14 11:05:14'),
(64,0,5,'2022-01-14 11:37:24'),
(65,1,5,'2022-01-14 12:11:42'),
(66,0,5,'2022-01-14 12:15:18');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert into `users` values 
(1,'dpentavia@gmail.com','$2y$10$mX8bJaM5S4DqgB2C/LKhMehiLCxc.dcoWrhTgPzcNGLnhQ0y9gkCW',NULL),
(2,'dondonpentavia@gmail.com','$2y$10$w2uKvNUGvw63UDefgRVi0.W98FVUqO8UGggKXhj7vZZKPbseiGMu2',NULL),
(3,'baisac.andolino@gmail.com','$2y$10$YlRViEydwOTDEPu4K1vHK.1vbZKIg4jJfplEjZkNtf7nehV489qIa',NULL),
(5,'janwill','$2y$10$BeaYXhzRVJJTGS5/.sii1uKUl6.y20Y/JVC1vg7X4KDDKcr1MmjVG',NULL),
(6,'sherlyn','$2y$10$l6OaULWkkTS240S9NU1BsOc33Ls2WhMEVhpvKyP9PvEoXH1N8bSyC',NULL),
(15,'sheshe','$2y$10$D9E8CebYDrgndsNOquXw5u/Q/BZNjjITxAiELSJN4Fu726f/0rrAK',NULL),
(16,'janwillmocorro@gmail.com','$2y$10$2zslNACZzuaIMkFlYn6hv.m/3Onx9LqbngT/nlEuW87QBjl5b90Ie',NULL),
(17,'sherlyntorillas','$2y$10$s8hWRNhITXqi/6rpKHJmxOndtsjWXD6uxwTFwGxNzdGZ4nXEw/Sv2',NULL);

SET FOREIGN_KEY_CHECKS=1;
