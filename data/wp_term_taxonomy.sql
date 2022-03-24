-- Adminer 4.8.1 MySQL 8.0.28-0ubuntu0.20.04.3 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `wp_term_taxonomy`;
CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint unsigned NOT NULL DEFAULT '0',
  `count` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1,	1,	'category',	'',	0,	0),
(2,	2,	'product_type',	'',	0,	0),
(3,	3,	'product_type',	'',	0,	0),
(4,	4,	'product_type',	'',	0,	0),
(5,	5,	'product_type',	'',	0,	0),
(6,	6,	'product_visibility',	'',	0,	0),
(7,	7,	'product_visibility',	'',	0,	0),
(8,	8,	'product_visibility',	'',	0,	0),
(9,	9,	'product_visibility',	'',	0,	0),
(10,	10,	'product_visibility',	'',	0,	0),
(11,	11,	'product_visibility',	'',	0,	0),
(12,	12,	'product_visibility',	'',	0,	0),
(13,	13,	'product_visibility',	'',	0,	0),
(14,	14,	'product_visibility',	'',	0,	0),
(15,	15,	'product_cat',	'',	0,	0),
(16,	16,	'wp_theme',	'',	0,	1),
(18,	18,	'product_cat',	'',	0,	0),
(19,	19,	'product_cat',	'',	0,	0),
(20,	20,	'product_cat',	'',	0,	0),
(21,	21,	'product_cat',	'',	15,	0),
(22,	22,	'product_cat',	'',	15,	0),
(23,	23,	'product_cat',	'',	15,	0),
(24,	24,	'product_cat',	'',	15,	0),
(25,	25,	'product_cat',	'',	15,	0),
(26,	26,	'product_tag',	'',	0,	0),
(30,	30,	'wp_theme',	'',	0,	2),
(33,	33,	'nav_menu',	'',	0,	5),
(34,	34,	'nav_menu',	'',	0,	13),
(35,	35,	'nav_menu',	'',	0,	7),
(36,	36,	'nav_menu',	'',	0,	1),
(37,	37,	'product_cat',	'',	15,	0),
(38,	38,	'product_cat',	'',	15,	0),
(39,	39,	'product_cat',	'',	15,	0),
(40,	40,	'product_cat',	'',	15,	0),
(41,	41,	'wp_theme',	'',	0,	1),
(42,	42,	'category',	'',	1,	1),
(43,	43,	'category',	'',	1,	1),
(44,	44,	'category',	'',	1,	1);

-- 2022-03-24 20:46:31
