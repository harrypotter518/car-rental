-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for piratest_car
DROP DATABASE IF EXISTS `piratest_car`;
CREATE DATABASE IF NOT EXISTS `piratest_car` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `piratest_car`;

-- Dumping structure for table piratest_car.admins
DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.admins: ~1 rows (approximately)
DELETE FROM `admins`;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$Cimckcv/uXsQzUTu0Q4sfebXpFuPtlOaQ6Y0Z0Eg/vaDvkDMdBjwa', 'wgxVx4iV0ZeEaqyj3taWiMcsc0UwnMOdhFhhuD3rgHXsaBs5ffVzWgWCbOSb', '2020-11-07 06:56:49', '2021-05-06 14:34:26');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table piratest_car.admin_password_resets
DROP TABLE IF EXISTS `admin_password_resets`;
CREATE TABLE IF NOT EXISTS `admin_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `admin_password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.admin_password_resets: ~0 rows (approximately)
DELETE FROM `admin_password_resets`;
/*!40000 ALTER TABLE `admin_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_password_resets` ENABLE KEYS */;

-- Dumping structure for table piratest_car.bookings
DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `car_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_up` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_up_lat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_up_lng` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_up_datetime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_off` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_off_lat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_off_lng` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_off_datetime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grand_total` float DEFAULT NULL,
  `status` enum('seen','unseen') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unseen',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.bookings: ~1 rows (approximately)
DELETE FROM `bookings`;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` (`id`, `car_name`, `pick_up`, `pick_up_lat`, `pick_up_lng`, `pick_up_datetime`, `drop_off`, `drop_off_lat`, `drop_off_lng`, `drop_off_datetime`, `name`, `email`, `phone`, `address`, `city`, `state`, `country`, `payment_method`, `following_product_1`, `following_product_2`, `following_product_3`, `following_product_4`, `following_product_5`, `following_product_6`, `insurance_1`, `insurance_2`, `insurance_3`, `grand_total`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'BMW 330i Xdrive', '111 West Wacker Drive, Chicago, Illinois, USA', '41.8865866', '-87.6314066', '2021-06-25  11:35 am', '111 West Wacker Drive, Chicago, Illinois, USA', '41.8865866', '-87.6314066', '2021-06-26  11:35 am', 'fdgdf', 'student@lms.com', '3485627505', 'e', 'w', 'Waterloo Station, London, UK', 'Albania', 'COD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 180, 'unseen', '2021-06-07 02:59:40', '2021-06-07 02:59:40');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;

-- Dumping structure for table piratest_car.contact_us
DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('seen','unseen') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unseen',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.contact_us: ~3 rows (approximately)
DELETE FROM `contact_us`;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email_address`, `phone_number`, `message`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'Intizar', 'Ahmad', 'intiahmad92@gmail.com', '03001234567', 'test', 'seen', '2020-12-09 03:52:51', '2021-05-09 04:19:04'),
	(6, 'sf', '3232', 'newalexey2020@gmail.com', '123123123', 'asdasdasdasdasdasdsadasdsadasdasdasdasd', 'seen', '2021-05-09 02:50:24', '2021-05-09 03:00:04'),
	(7, 'harry', 'potter', 'broad.gamil@gmail.com', '234234234234234234234', 'I am very good', 'seen', '2021-05-15 14:19:26', '2021-05-15 14:19:53');
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;

-- Dumping structure for table piratest_car.countries
DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=298 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table piratest_car.countries: 296 rows
DELETE FROM `countries`;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`id`, `country_code`, `country_name`, `created_at`, `updated_at`) VALUES
	(2, 'AL', 'Albania', NULL, NULL),
	(3, 'DZ', 'Algeria', NULL, NULL),
	(4, 'DS', 'American Samoa', NULL, NULL),
	(5, 'AD', 'Andorra', NULL, NULL),
	(6, 'AO', 'Angola', NULL, NULL),
	(7, 'AI', 'Anguilla', NULL, NULL),
	(8, 'AQ', 'Antarctica', NULL, NULL),
	(9, 'AG', 'Antigua and Barbuda', NULL, NULL),
	(10, 'AR', 'Argentina', NULL, NULL),
	(11, 'AM', 'Armenia', NULL, NULL),
	(12, 'AW', 'Aruba', NULL, NULL),
	(13, 'AU', 'Australia', NULL, NULL),
	(14, 'AT', 'Austria', NULL, NULL),
	(15, 'AZ', 'Azerbaijan', NULL, NULL),
	(16, 'BS', 'Bahamas', NULL, NULL),
	(17, 'BH', 'Bahrain', NULL, NULL),
	(18, 'BD', 'Bangladesh', NULL, NULL),
	(19, 'BB', 'Barbados', NULL, NULL),
	(20, 'BY', 'Belarus', NULL, NULL),
	(21, 'BE', 'Belgium', NULL, NULL),
	(22, 'BZ', 'Belize', NULL, NULL),
	(23, 'BJ', 'Benin', NULL, NULL),
	(24, 'BM', 'Bermuda', NULL, NULL),
	(25, 'BT', 'Bhutan', NULL, NULL),
	(26, 'BO', 'Bolivia', NULL, NULL),
	(27, 'BA', 'Bosnia and Herzegovina', NULL, NULL),
	(28, 'BW', 'Botswana', NULL, NULL),
	(29, 'BV', 'Bouvet Island', NULL, NULL),
	(30, 'BR', 'Brazil', NULL, NULL),
	(31, 'IO', 'British Indian Ocean Territory', NULL, NULL),
	(32, 'BN', 'Brunei Darussalam', NULL, NULL),
	(33, 'BG', 'Bulgaria', NULL, NULL),
	(34, 'BF', 'Burkina Faso', NULL, NULL),
	(35, 'BI', 'Burundi', NULL, NULL),
	(36, 'KH', 'Cambodia', NULL, NULL),
	(37, 'CM', 'Cameroon', NULL, NULL),
	(38, 'CA', 'Canada', NULL, NULL),
	(39, 'CV', 'Cape Verde', NULL, NULL),
	(40, 'KY', 'Cayman Islands', NULL, NULL),
	(41, 'CF', 'Central African Republic', NULL, NULL),
	(42, 'TD', 'Chad', NULL, NULL),
	(43, 'CL', 'Chile', NULL, NULL),
	(44, 'CN', 'China', NULL, NULL),
	(45, 'CX', 'Christmas Island', NULL, NULL),
	(46, 'CC', 'Cocos (Keeling) Islands', NULL, NULL),
	(47, 'CO', 'Colombia', NULL, NULL),
	(48, 'KM', 'Comoros', NULL, NULL),
	(49, 'CG', 'Congo', NULL, NULL),
	(50, 'CK', 'Cook Islands', NULL, NULL),
	(51, 'CR', 'Costa Rica', NULL, NULL),
	(52, 'AF', 'Afghanistan', NULL, NULL),
	(53, 'AL', 'Albania', NULL, NULL),
	(54, 'DZ', 'Algeria', NULL, NULL),
	(55, 'DS', 'American Samoa', NULL, NULL),
	(56, 'AD', 'Andorra', NULL, NULL),
	(57, 'AO', 'Angola', NULL, NULL),
	(58, 'AI', 'Anguilla', NULL, NULL),
	(59, 'AQ', 'Antarctica', NULL, NULL),
	(60, 'AG', 'Antigua and Barbuda', NULL, NULL),
	(61, 'AR', 'Argentina', NULL, NULL),
	(62, 'AM', 'Armenia', NULL, NULL),
	(63, 'AW', 'Aruba', NULL, NULL),
	(64, 'AU', 'Australia', NULL, NULL),
	(65, 'AT', 'Austria', NULL, NULL),
	(66, 'AZ', 'Azerbaijan', NULL, NULL),
	(67, 'BS', 'Bahamas', NULL, NULL),
	(68, 'BH', 'Bahrain', NULL, NULL),
	(69, 'BD', 'Bangladesh', NULL, NULL),
	(70, 'BB', 'Barbados', NULL, NULL),
	(71, 'BY', 'Belarus', NULL, NULL),
	(72, 'BE', 'Belgium', NULL, NULL),
	(73, 'BZ', 'Belize', NULL, NULL),
	(74, 'BJ', 'Benin', NULL, NULL),
	(75, 'BM', 'Bermuda', NULL, NULL),
	(76, 'BT', 'Bhutan', NULL, NULL),
	(77, 'BO', 'Bolivia', NULL, NULL),
	(78, 'BA', 'Bosnia and Herzegovina', NULL, NULL),
	(79, 'BW', 'Botswana', NULL, NULL),
	(80, 'BV', 'Bouvet Island', NULL, NULL),
	(81, 'BR', 'Brazil', NULL, NULL),
	(82, 'IO', 'British Indian Ocean Territory', NULL, NULL),
	(83, 'BN', 'Brunei Darussalam', NULL, NULL),
	(84, 'BG', 'Bulgaria', NULL, NULL),
	(85, 'BF', 'Burkina Faso', NULL, NULL),
	(86, 'BI', 'Burundi', NULL, NULL),
	(87, 'KH', 'Cambodia', NULL, NULL),
	(88, 'CM', 'Cameroon', NULL, NULL),
	(89, 'CA', 'Canada', NULL, NULL),
	(90, 'CV', 'Cape Verde', NULL, NULL),
	(91, 'KY', 'Cayman Islands', NULL, NULL),
	(92, 'CF', 'Central African Republic', NULL, NULL),
	(93, 'TD', 'Chad', NULL, NULL),
	(94, 'CL', 'Chile', NULL, NULL),
	(95, 'CN', 'China', NULL, NULL),
	(96, 'CX', 'Christmas Island', NULL, NULL),
	(97, 'CC', 'Cocos (Keeling) Islands', NULL, NULL),
	(98, 'CO', 'Colombia', NULL, NULL),
	(99, 'KM', 'Comoros', NULL, NULL),
	(100, 'CG', 'Congo', NULL, NULL),
	(101, 'CK', 'Cook Islands', NULL, NULL),
	(102, 'CR', 'Costa Rica', NULL, NULL),
	(103, 'HR', 'Croatia (Hrvatska)', NULL, NULL),
	(104, 'CU', 'Cuba', NULL, NULL),
	(105, 'CY', 'Cyprus', NULL, NULL),
	(106, 'CZ', 'Czech Republic', NULL, NULL),
	(107, 'DK', 'Denmark', NULL, NULL),
	(108, 'DJ', 'Djibouti', NULL, NULL),
	(109, 'DM', 'Dominica', NULL, NULL),
	(110, 'DO', 'Dominican Republic', NULL, NULL),
	(111, 'TP', 'East Timor', NULL, NULL),
	(112, 'EC', 'Ecuador', NULL, NULL),
	(113, 'EG', 'Egypt', NULL, NULL),
	(114, 'SV', 'El Salvador', NULL, NULL),
	(115, 'GQ', 'Equatorial Guinea', NULL, NULL),
	(116, 'ER', 'Eritrea', NULL, NULL),
	(117, 'EE', 'Estonia', NULL, NULL),
	(118, 'ET', 'Ethiopia', NULL, NULL),
	(119, 'FK', 'Falkland Islands (Malvinas)', NULL, NULL),
	(120, 'FO', 'Faroe Islands', NULL, NULL),
	(121, 'FJ', 'Fiji', NULL, NULL),
	(122, 'FI', 'Finland', NULL, NULL),
	(123, 'FR', 'France', NULL, NULL),
	(124, 'FX', 'France, Metropolitan', NULL, NULL),
	(125, 'GF', 'French Guiana', NULL, NULL),
	(126, 'PF', 'French Polynesia', NULL, NULL),
	(127, 'TF', 'French Southern Territories', NULL, NULL),
	(128, 'GA', 'Gabon', NULL, NULL),
	(129, 'GM', 'Gambia', NULL, NULL),
	(130, 'GE', 'Georgia', NULL, NULL),
	(131, 'DE', 'Germany', NULL, NULL),
	(132, 'GH', 'Ghana', NULL, NULL),
	(133, 'GI', 'Gibraltar', NULL, NULL),
	(134, 'GK', 'Guernsey', NULL, NULL),
	(135, 'GR', 'Greece', NULL, NULL),
	(136, 'GL', 'Greenland', NULL, NULL),
	(137, 'GD', 'Grenada', NULL, NULL),
	(138, 'GP', 'Guadeloupe', NULL, NULL),
	(139, 'GU', 'Guam', NULL, NULL),
	(140, 'GT', 'Guatemala', NULL, NULL),
	(141, 'GN', 'Guinea', NULL, NULL),
	(142, 'GW', 'Guinea-Bissau', NULL, NULL),
	(143, 'GY', 'Guyana', NULL, NULL),
	(144, 'HT', 'Haiti', NULL, NULL),
	(145, 'HM', 'Heard and Mc Donald Islands', NULL, NULL),
	(146, 'HN', 'Honduras', NULL, NULL),
	(147, 'HK', 'Hong Kong', NULL, NULL),
	(148, 'HU', 'Hungary', NULL, NULL),
	(149, 'IS', 'Iceland', NULL, NULL),
	(150, 'IN', 'India', NULL, NULL),
	(151, 'IM', 'Isle of Man', NULL, NULL),
	(152, 'ID', 'Indonesia', NULL, NULL),
	(153, 'IR', 'Iran (Islamic Republic of)', NULL, NULL),
	(154, 'IQ', 'Iraq', NULL, NULL),
	(155, 'IE', 'Ireland', NULL, NULL),
	(156, 'IL', 'Israel', NULL, NULL),
	(157, 'IT', 'Italy', NULL, NULL),
	(158, 'CI', 'Ivory Coast', NULL, NULL),
	(159, 'JE', 'Jersey', NULL, NULL),
	(160, 'JM', 'Jamaica', NULL, NULL),
	(161, 'JP', 'Japan', NULL, NULL),
	(162, 'JO', 'Jordan', NULL, NULL),
	(163, 'KZ', 'Kazakhstan', NULL, NULL),
	(164, 'KE', 'Kenya', NULL, NULL),
	(165, 'KI', 'Kiribati', NULL, NULL),
	(166, 'KP', 'Korea, Democratic People\'s Republic of', NULL, NULL),
	(167, 'KR', 'Korea, Republic of', NULL, NULL),
	(168, 'XK', 'Kosovo', NULL, NULL),
	(169, 'KW', 'Kuwait', NULL, NULL),
	(170, 'KG', 'Kyrgyzstan', NULL, NULL),
	(171, 'LA', 'Lao People\'s Democratic Republic', NULL, NULL),
	(172, 'LV', 'Latvia', NULL, NULL),
	(173, 'LB', 'Lebanon', NULL, NULL),
	(174, 'LS', 'Lesotho', NULL, NULL),
	(175, 'LR', 'Liberia', NULL, NULL),
	(176, 'LY', 'Libyan Arab Jamahiriya', NULL, NULL),
	(177, 'LI', 'Liechtenstein', NULL, NULL),
	(178, 'LT', 'Lithuania', NULL, NULL),
	(179, 'LU', 'Luxembourg', NULL, NULL),
	(180, 'MO', 'Macau', NULL, NULL),
	(181, 'MK', 'Macedonia', NULL, NULL),
	(182, 'MG', 'Madagascar', NULL, NULL),
	(183, 'MW', 'Malawi', NULL, NULL),
	(184, 'MY', 'Malaysia', NULL, NULL),
	(185, 'MV', 'Maldives', NULL, NULL),
	(186, 'ML', 'Mali', NULL, NULL),
	(187, 'MT', 'Malta', NULL, NULL),
	(188, 'MH', 'Marshall Islands', NULL, NULL),
	(189, 'MQ', 'Martinique', NULL, NULL),
	(190, 'MR', 'Mauritania', NULL, NULL),
	(191, 'MU', 'Mauritius', NULL, NULL),
	(192, 'TY', 'Mayotte', NULL, NULL),
	(193, 'MX', 'Mexico', NULL, NULL),
	(194, 'FM', 'Micronesia, Federated States of', NULL, NULL),
	(195, 'MD', 'Moldova, Republic of', NULL, NULL),
	(196, 'MC', 'Monaco', NULL, NULL),
	(197, 'MN', 'Mongolia', NULL, NULL),
	(198, 'ME', 'Montenegro', NULL, NULL),
	(199, 'MS', 'Montserrat', NULL, NULL),
	(200, 'MA', 'Morocco', NULL, NULL),
	(201, 'MZ', 'Mozambique', NULL, NULL),
	(202, 'MM', 'Myanmar', NULL, NULL),
	(203, 'NA', 'Namibia', NULL, NULL),
	(204, 'NR', 'Nauru', NULL, NULL),
	(205, 'NP', 'Nepal', NULL, NULL),
	(206, 'NL', 'Netherlands', NULL, NULL),
	(207, 'AN', 'Netherlands Antilles', NULL, NULL),
	(208, 'NC', 'New Caledonia', NULL, NULL),
	(209, 'NZ', 'New Zealand', NULL, NULL),
	(210, 'NI', 'Nicaragua', NULL, NULL),
	(211, 'NE', 'Niger', NULL, NULL),
	(212, 'NG', 'Nigeria', NULL, NULL),
	(213, 'NU', 'Niue', NULL, NULL),
	(214, 'NF', 'Norfolk Island', NULL, NULL),
	(215, 'MP', 'Northern Mariana Islands', NULL, NULL),
	(216, 'NO', 'Norway', NULL, NULL),
	(217, 'OM', 'Oman', NULL, NULL),
	(218, 'PK', 'Pakistan', NULL, NULL),
	(219, 'PW', 'Palau', NULL, NULL),
	(220, 'PS', 'Palestine', NULL, NULL),
	(221, 'PA', 'Panama', NULL, NULL),
	(222, 'PG', 'Papua New Guinea', NULL, NULL),
	(223, 'PY', 'Paraguay', NULL, NULL),
	(224, 'PE', 'Peru', NULL, NULL),
	(225, 'PH', 'Philippines', NULL, NULL),
	(226, 'PN', 'Pitcairn', NULL, NULL),
	(227, 'PL', 'Poland', NULL, NULL),
	(228, 'PT', 'Portugal', NULL, NULL),
	(229, 'PR', 'Puerto Rico', NULL, NULL),
	(230, 'QA', 'Qatar', NULL, NULL),
	(231, 'RE', 'Reunion', NULL, NULL),
	(232, 'RO', 'Romania', NULL, NULL),
	(233, 'RU', 'Russian Federation', NULL, NULL),
	(234, 'RW', 'Rwanda', NULL, NULL),
	(235, 'KN', 'Saint Kitts and Nevis', NULL, NULL),
	(236, 'LC', 'Saint Lucia', NULL, NULL),
	(237, 'VC', 'Saint Vincent and the Grenadines', NULL, NULL),
	(238, 'WS', 'Samoa', NULL, NULL),
	(239, 'SM', 'San Marino', NULL, NULL),
	(240, 'ST', 'Sao Tome and Principe', NULL, NULL),
	(241, 'SA', 'Saudi Arabia', NULL, NULL),
	(242, 'SN', 'Senegal', NULL, NULL),
	(243, 'RS', 'Serbia', NULL, NULL),
	(244, 'SC', 'Seychelles', NULL, NULL),
	(245, 'SL', 'Sierra Leone', NULL, NULL),
	(246, 'SG', 'Singapore', NULL, NULL),
	(247, 'SK', 'Slovakia', NULL, NULL),
	(248, 'SI', 'Slovenia', NULL, NULL),
	(249, 'SB', 'Solomon Islands', NULL, NULL),
	(250, 'SO', 'Somalia', NULL, NULL),
	(251, 'ZA', 'South Africa', NULL, NULL),
	(252, 'GS', 'South Georgia South Sandwich Islands', NULL, NULL),
	(253, 'SS', 'South Sudan', NULL, NULL),
	(254, 'ES', 'Spain', NULL, NULL),
	(255, 'LK', 'Sri Lanka', NULL, NULL),
	(256, 'SH', 'St. Helena', NULL, NULL),
	(257, 'PM', 'St. Pierre and Miquelon', NULL, NULL),
	(258, 'SD', 'Sudan', NULL, NULL),
	(259, 'SR', 'Suriname', NULL, NULL),
	(260, 'SJ', 'Svalbard and Jan Mayen Islands', NULL, NULL),
	(261, 'SZ', 'Swaziland', NULL, NULL),
	(262, 'SE', 'Sweden', NULL, NULL),
	(263, 'CH', 'Switzerland', NULL, NULL),
	(264, 'SY', 'Syrian Arab Republic', NULL, NULL),
	(265, 'TW', 'Taiwan', NULL, NULL),
	(266, 'TJ', 'Tajikistan', NULL, NULL),
	(267, 'TZ', 'Tanzania, United Republic of', NULL, NULL),
	(268, 'TH', 'Thailand', NULL, NULL),
	(269, 'TG', 'Togo', NULL, NULL),
	(270, 'TK', 'Tokelau', NULL, NULL),
	(271, 'TO', 'Tonga', NULL, NULL),
	(272, 'TT', 'Trinidad and Tobago', NULL, NULL),
	(273, 'TN', 'Tunisia', NULL, NULL),
	(274, 'TR', 'Turkey', NULL, NULL),
	(275, 'TM', 'Turkmenistan', NULL, NULL),
	(276, 'TC', 'Turks and Caicos Islands', NULL, NULL),
	(277, 'TV', 'Tuvalu', NULL, NULL),
	(278, 'UG', 'Uganda', NULL, NULL),
	(279, 'UA', 'Ukraine', NULL, NULL),
	(280, 'AE', 'United Arab Emirates', NULL, NULL),
	(281, 'GB', 'United Kingdom', NULL, NULL),
	(282, 'US', 'United States', NULL, NULL),
	(283, 'UM', 'United States minor outlying islands', NULL, NULL),
	(284, 'UY', 'Uruguay', NULL, NULL),
	(285, 'UZ', 'Uzbekistan', NULL, NULL),
	(286, 'VU', 'Vanuatu', NULL, NULL),
	(287, 'VA', 'Vatican City State', NULL, NULL),
	(288, 'VE', 'Venezuela', NULL, NULL),
	(289, 'VN', 'Vietnam', NULL, NULL),
	(290, 'VG', 'Virgin Islands (British)', NULL, NULL),
	(291, 'VI', 'Virgin Islands (U.S.)', NULL, NULL),
	(292, 'WF', 'Wallis and Futuna Islands', NULL, NULL),
	(293, 'EH', 'Western Sahara', NULL, NULL),
	(294, 'YE', 'Yemen', NULL, NULL),
	(295, 'ZR', 'Zaire', NULL, NULL),
	(296, 'ZM', 'Zambia', NULL, NULL),
	(297, 'ZW', 'Zimbabwe', NULL, NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;

-- Dumping structure for table piratest_car.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table piratest_car.menus
DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_type_id` bigint(20) unsigned DEFAULT NULL,
  `post_id` bigint(20) unsigned DEFAULT NULL,
  `order` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `status` enum('active','blocked') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `menu_is` enum('external','internal') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'internal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menus_menu_type_id_foreign` (`menu_type_id`),
  KEY `menus_post_id_foreign` (`post_id`),
  CONSTRAINT `menus_menu_type_id_foreign` FOREIGN KEY (`menu_type_id`) REFERENCES `menu_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `menus_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `modules_data` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.menus: ~3 rows (approximately)
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `title`, `slug`, `menu_type_id`, `post_id`, `order`, `parent_id`, `status`, `menu_is`, `created_at`, `updated_at`) VALUES
	(1, 'Booking', '/', 1, NULL, '0', 0, 'active', 'external', '2020-11-07 18:12:15', '2021-05-06 14:12:33'),
	(11, 'Cars ', 'cars', 1, 31, '1', 0, 'active', 'internal', '2020-11-12 00:40:54', '2020-11-26 07:23:07');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table piratest_car.menu_types
DROP TABLE IF EXISTS `menu_types`;
CREATE TABLE IF NOT EXISTS `menu_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','blocked') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.menu_types: ~0 rows (approximately)
DELETE FROM `menu_types`;
/*!40000 ALTER TABLE `menu_types` DISABLE KEYS */;
INSERT INTO `menu_types` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Top Menu', 'top-menu', 'active', '2020-11-07 18:10:41', '2020-11-07 18:11:12');
/*!40000 ALTER TABLE `menu_types` ENABLE KEYS */;

-- Dumping structure for table piratest_car.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.migrations: ~18 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_10_13_144548_create_admin_password_resets_table', 1),
	(5, '2020_10_13_144548_create_admins_table', 1),
	(6, '2020_10_20_051105_create_modules_table', 1),
	(7, '2020_10_21_112643_create_modules_data_table', 1),
	(8, '2020_10_22_022611_create_tags_table', 1),
	(9, '2020_10_22_030040_create_menu_types_table', 1),
	(10, '2020_10_22_035755_create_menus_table', 1),
	(11, '2020_10_25_030304_create_widget_pages_table', 1),
	(12, '2020_10_25_031712_create_widgets_table', 1),
	(13, '2020_10_25_033839_create_widgets_data_table', 1),
	(14, '2020_10_28_155607_contact_us', 1),
	(15, '2020_10_29_020527_create_newsletters_table', 1),
	(16, '2020_10_29_033047_create_student_password_resets_table', 1),
	(17, '2020_10_29_033047_create_students_table', 1),
	(18, '2020_11_08_043502_create_bookings_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table piratest_car.modules
DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `term` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_slug` tinyint(4) DEFAULT 0,
  `is_menu` tinyint(4) DEFAULT 0,
  `is_description` tinyint(4) DEFAULT 0,
  `is_image` tinyint(4) DEFAULT 0,
  `multi_images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_seo` tinyint(4) DEFAULT 0,
  `category` tinyint(4) DEFAULT 0,
  `parent_id` int(11) DEFAULT NULL,
  `category_module_id` int(11) DEFAULT NULL,
  `multiple_category` tinyint(4) DEFAULT 0,
  `tags` tinyint(4) DEFAULT 0,
  `extra_fields` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail_height` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail_width` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','blocked') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `modules_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.modules: ~9 rows (approximately)
DELETE FROM `modules`;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`id`, `name`, `term`, `slug`, `is_slug`, `is_menu`, `is_description`, `is_image`, `multi_images`, `is_seo`, `category`, `parent_id`, `category_module_id`, `multiple_category`, `tags`, `extra_fields`, `extra_field_title_1`, `extra_field_title_2`, `extra_field_title_3`, `extra_field_title_4`, `extra_field_title_5`, `extra_field_title_6`, `extra_field_title_7`, `extra_field_title_8`, `extra_field_title_9`, `extra_field_title_10`, `extra_field_title_11`, `extra_field_title_12`, `extra_field_title_13`, `extra_field_title_14`, `extra_field_title_15`, `thumbnail_height`, `thumbnail_width`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'CMS PAGES', 'Page', 'cms-pages', 1, 1, 1, 1, NULL, 1, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '350', '260', 'active', '2020-11-07 08:54:19', '2020-11-07 08:54:19'),
	(2, 'Blog Categories', 'Blog Category', 'blog-categories', 1, 0, 0, 0, NULL, 0, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-07 08:55:42', '2020-11-07 08:55:42'),
	(3, 'Blogs', 'Blog', 'blogs', 1, 0, 1, 1, NULL, 1, 1, 2, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '350', '236', 'active', '2020-11-07 08:56:28', '2020-11-10 07:23:22'),
	(4, 'Slider', 'Slider', 'slider', 0, 0, 0, 1, NULL, 0, 0, NULL, NULL, 0, 0, '3', 'Title 2', 'Button Text', 'Button Link', 'Button Link', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '330', '260', 'active', '2020-11-07 18:47:50', '2020-11-07 18:48:57'),
	(5, 'Our Cars', 'Car', 'our-cars', 0, 0, 0, 1, '1', 0, 0, NULL, NULL, 0, 0, '5', 'Category', 'Price', 'Price Type (e.g Hour, Month, Year)', 'Horsepower', 'Features', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '330', '260', 'active', '2020-11-07 20:14:04', '2020-11-12 00:13:53'),
	(6, 'Services', 'Service', 'services', 0, 0, 1, 0, NULL, 0, 0, NULL, NULL, 0, 0, '1', 'Service Icon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:23:01', '2020-11-08 12:23:01'),
	(7, 'Our Experts', 'Expert', 'our-experts', 0, 0, 0, 1, NULL, 0, 0, NULL, NULL, 0, 0, '6', 'Designation', 'Phone Number', 'Email Address', 'Twitter Link', 'Facebook Link', 'Linkedin Link', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '340', '86', 'active', '2020-11-08 12:48:23', '2020-11-08 12:48:23'),
	(8, 'Testimonials', 'Testimonial', 'testimonials', 0, 0, 1, 0, NULL, 0, 0, NULL, NULL, 0, 0, '2', 'Designation', 'Rating', 'Message', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 13:00:58', '2020-11-08 13:01:06'),
	(9, 'PARTNERS', 'PARTNER', 'partners', 0, 0, 0, 1, '0', 0, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '330', '260', 'active', '2020-11-08 14:06:43', '2020-12-08 23:04:08'),
	(10, 'other', NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL);
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;

-- Dumping structure for table piratest_car.modules_data
DROP TABLE IF EXISTS `modules_data`;
CREATE TABLE IF NOT EXISTS `modules_data` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module_id` bigint(20) unsigned NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `category_ids` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag_ids` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','blocked') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `modules_data_slug_unique` (`slug`),
  KEY `modules_data_module_id_foreign` (`module_id`),
  CONSTRAINT `modules_data_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.modules_data: ~33 rows (approximately)
DELETE FROM `modules_data`;
/*!40000 ALTER TABLE `modules_data` DISABLE KEYS */;
INSERT INTO `modules_data` (`id`, `title`, `slug`, `module_id`, `description`, `category`, `category_ids`, `tag_ids`, `extra_field_1`, `extra_field_2`, `extra_field_3`, `extra_field_4`, `extra_field_5`, `extra_field_6`, `extra_field_7`, `extra_field_8`, `extra_field_9`, `extra_field_10`, `extra_field_11`, `extra_field_12`, `extra_field_13`, `extra_field_14`, `extra_field_15`, `image`, `images`, `meta_title`, `meta_keywords`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Car Rental', NULL, 4, NULL, NULL, NULL, NULL, 'Welcome to <span>BlackTie Car Rental</span> Template', 'Get Started', '#.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'home-bg_1604760612.jpg', NULL, NULL, NULL, NULL, 'active', '2020-11-07 18:50:14', '2021-06-01 03:30:44'),
	(2, 'Good service', NULL, 4, NULL, NULL, NULL, NULL, 'Book Your <span>Trip Car</span> Today', 'Get Started', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'banner2_1604760699.jpg', NULL, NULL, NULL, NULL, 'active', '2020-11-07 18:51:42', '2021-05-06 13:29:58'),
	(4, 'Subaru Impreza', NULL, 10, NULL, NULL, NULL, NULL, 'Premium', '$125', 'Month', '4', '5', '3 Bags', 'Automatic', 'Single Zone', '25', NULL, NULL, NULL, NULL, NULL, NULL, '01_cms_1605092098.jpg', '01_cms_1605092098.jpg', NULL, NULL, NULL, 'active', '2020-11-08 07:57:44', '2020-11-12 00:55:07'),
	(5, 'Hyundai Santa Fe', NULL, 10, NULL, NULL, NULL, NULL, 'Streetsville H', '$199', 'Hour', '5', '6', '2 Bags', 'Automatic', 'Dual Zone', '25 years', NULL, NULL, NULL, NULL, NULL, NULL, '01_cms_1605092139.jpg', '01_cms_1605092139.jpg', NULL, NULL, NULL, 'active', '2020-11-08 07:59:19', '2020-11-12 00:55:50'),
	(6, 'Honda Vizel', NULL, 10, NULL, NULL, NULL, NULL, 'Streetsville H', '$215', 'Day', '4', '2', '2 Bags', 'Automatic', 'Dual Zone', '10 years', NULL, NULL, NULL, NULL, NULL, NULL, '04_cms_1605092187.jpg', '04_cms_1605092187.jpg', NULL, NULL, NULL, 'active', '2020-11-08 08:00:37', '2020-11-12 00:56:32'),
	(7, 'Phone Reservation', '-6', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>', NULL, NULL, NULL, '<i class="fas fa-phone-alt"></i>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:24:01', '2020-11-08 12:24:01'),
	(8, 'Special Rates', '-7', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>', NULL, NULL, NULL, '<i class="fas fa-money-bill"></i>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:24:38', '2020-11-08 12:24:38'),
	(9, 'One Way Rental', '-8', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>', NULL, NULL, NULL, '<i class="fas fa-road"></i>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:25:12', '2020-11-08 12:25:12'),
	(10, 'Life Insurance', '-9', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>', NULL, NULL, NULL, '<i class="fas fa-umbrella"></i>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:25:51', '2020-11-08 12:25:51'),
	(11, 'City to City', '-10', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>', NULL, NULL, NULL, '<i class="fas fa-building"></i>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:26:26', '2020-11-08 12:26:26'),
	(12, 'Free Rides', '-11', 6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>', NULL, NULL, NULL, '<i class="fas fa-car"></i>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:27:05', '2020-11-08 12:27:05'),
	(13, 'Sophia DOE', '-12', 7, NULL, NULL, NULL, NULL, 'Support Manager', '+1-123-456-7890', 'joseph@example.com', '#', '#', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'team-img1_1604825371.jpg', NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:49:33', '2020-11-08 12:49:33'),
	(14, 'Emily DOE', NULL, 7, NULL, NULL, NULL, NULL, 'Support Manager', '+1-123-456-7890', 'joseph@example.com', '#', '#', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'team-img2_1604825454.jpg', NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:49:33', '2020-11-08 12:50:55'),
	(15, 'Olivia DOE', NULL, 7, NULL, NULL, NULL, NULL, 'Support Manager', '+1-123-456-7890', 'joseph@example.com', '#', '#', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'team-img3_1604825464.jpg', NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:49:33', '2020-11-08 12:51:14'),
	(16, 'MARTIN DOE', NULL, 7, NULL, NULL, NULL, NULL, 'Support Manager', '+1-123-456-7890', 'joseph@example.com', '#', '#', '#', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'team-img4_1604825489.jpg', NULL, NULL, NULL, NULL, 'active', '2020-11-08 12:49:33', '2020-11-08 12:51:30'),
	(17, 'Jhon Doe', '-13', 8, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet.</p>', NULL, NULL, NULL, 'CEO - Company Inc', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 13:02:00', '2020-11-08 13:02:00'),
	(18, 'Jhon Doe', NULL, 8, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet.</p>', NULL, NULL, NULL, 'CEO - Company Inc', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 13:02:00', '2020-11-08 13:02:47'),
	(19, 'Jhon Doe', NULL, 8, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet.</p>', NULL, NULL, NULL, 'CEO - Company Inc', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 13:02:00', '2020-11-08 13:02:54'),
	(20, 'Popular posts', 'popular-posts', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 13:18:09', '2020-11-08 13:18:09'),
	(21, 'Productivity', 'productivity', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 13:18:26', '2020-11-08 13:18:26'),
	(22, 'Resumes', 'resumes', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 13:18:39', '2020-11-08 13:18:39'),
	(23, 'Women', 'women', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 13:18:52', '2020-11-08 13:18:52'),
	(24, 'Top Companies', 'top-companies', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 13:19:03', '2020-11-08 13:19:03'),
	(25, 'Duis ultricies aliquet mauris', 'duis-ultricies-aliquet-mauris', 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam. In eu porta purus, sit amet pulvinar eros. Cras accumsan dignissim convallis. Curabitur aliquam efficitur diam ac pellentesque. Fusce ac leo est.<br />\r\n<br />\r\nDuis ultricies aliquet mauris vestibulum lacinia. Nulla a nibh ipsum. In diam nisl, mattis ac magna eget, pulvinar viverra ipsum. Ut vitae diam ultrices, semper risus vitae, accumsan nunc. Suspendisse ut dolor non sem pellentesque vulputate eu ut eros. Proin mollis tortor in est semper porta. Etiam rutrum, est non pellentesque sollicitudin, ligula turpis mattis nisl, at egestas justo libero id libero. In ac pretium magna. Praesent lobortis sapien bibendum, scelerisque neque in, egestas lorem. Sed pharetra lectus a odio euismod mattis. Donec egestas ante ac magna blandit aliquet. In fringilla venenatis lacus in dictum. Donec vel lacus ut tellus feugiat ullamcorper in sit amet mauris. Sed aliquet accumsan risus in tristique. Nullam semper, massa in cursus hendrerit, turpis nibh eleifend leo, sed semper est massa vel odio.</p>', NULL, '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1_1604827864.jpg', NULL, 'Duis ultricies aliquet mauris', 'Duis ultricies aliquet mauris', 'Duis ultricies aliquet mauris', 'active', '2020-11-08 13:20:37', '2020-11-08 13:31:07'),
	(26, 'Lorem ipsum dolor sit amet, consectetur', 'lorem-ipsum-dolor-sit-amet-consectetur', 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor, lobortis diam. In eu porta purus, sit amet pulvinar eros. Cras accumsan dignissim convallis. Curabitur aliquam efficitur diam ac pellentesque. Fusce ac leo est.<br />\r\n<br />\r\nDuis ultricies aliquet mauris vestibulum lacinia. Nulla a nibh ipsum. In diam nisl, mattis ac magna eget, pulvinar viverra ipsum. Ut vitae diam ultrices, semper risus vitae, accumsan nunc. Suspendisse ut dolor non sem pellentesque vulputate eu ut eros. Proin mollis tortor in est semper porta. Etiam rutrum, est non pellentesque sollicitudin, ligula turpis mattis nisl, at egestas justo libero id libero. In ac pretium magna. Praesent lobortis sapien bibendum, scelerisque neque in, egestas lorem. Sed pharetra lectus a odio euismod mattis. Donec egestas ante ac magna blandit aliquet. In fringilla venenatis lacus in dictum. Donec vel lacus ut tellus feugiat ullamcorper in sit amet mauris. Sed aliquet accumsan risus in tristique. Nullam semper, massa in cursus hendrerit, turpis nibh eleifend leo, sed semper est massa vel odio.</p>', NULL, '24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4_1604827887.jpg', NULL, 't ullamcorper in sit amet mauris. Sed aliquet accumsan risus in tristique. Nullam semper, massa in cursus hendrerit, turpis nibh eleifend leo, sed semper est massa vel odio.', 't ullamcorper in sit amet mauris. Sed aliquet accumsan risus in tristique. Nullam semper, massa in cursus hendrerit, turpis nibh eleifend leo, sed semper est massa vel odio.', 't ullamcorper in sit amet mauris. Sed aliquet accumsan risus in tristique. Nullam semper, massa in cursus hendrerit, turpis nibh eleifend leo, sed semper est massa vel odio.', 'active', '2020-11-08 13:21:42', '2020-11-08 13:31:29'),
	(27, '1', NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'comp-logo_1607488714.png', 'comp-logo_1607488714.png', NULL, NULL, NULL, 'active', '2020-11-08 14:07:21', '2020-12-09 18:38:38'),
	(28, '2', NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'comp-logo_1607488741.png', 'comp-logo_1607488741.png', NULL, NULL, NULL, 'active', '2020-11-08 14:07:35', '2020-12-09 18:39:03'),
	(29, '3', NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'comp-logo_1607488756.png', 'comp-logo_1607488756.png', NULL, NULL, NULL, 'active', '2020-11-08 14:07:52', '2020-12-09 18:39:18'),
	(30, 'Blog', 'blog', 1, '<p>Blog</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 14:34:06', '2020-11-08 14:34:06'),
	(31, 'Cars', 'cars', 1, '<p>Cars</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-12 00:40:54', '2020-11-12 00:40:54'),
	(32, '4', NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'comp-logo_1607488770.png', 'comp-logo_1607488770.png', NULL, NULL, NULL, 'active', '2020-12-08 22:55:33', '2020-12-09 18:39:33'),
	(33, 'Ford Mustang 2019 Ecoboost', NULL, 5, NULL, NULL, NULL, NULL, 'American Muscle', '$75', 'Day', '310', 'a. Bluetooth,b. Heated front seats,c. Cooled front seats,d. 4 persons,e. Rear wheel drive,f. Automatic transmission,g. USB port', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '05-1_cms_1620364308.jpg', '05-2_cms_1620364307.jpg,05-1_cms_1620364308.jpg', NULL, NULL, NULL, 'active', '2020-12-08 22:55:33', '2021-05-07 05:11:49'),
	(34, 'BMW 330i Xdrive', NULL, 5, NULL, NULL, NULL, NULL, 'Eurolux', '$180', 'Day', '250', 'a. Bluetooth,b. Apple car play,c. Heated front seats,d. Touch screen infotainment,e. 5 persons,f. All wheel drive,g. Automatic transmission,h. USB port,i. Voice control,j. Sunroof', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '06-3_cms_1621088180.jpg', '06-3_cms_1620364375.jpg,06-2_cms_1621088178.jpg,06-3_cms_1621088180.jpg', NULL, NULL, NULL, 'active', '2020-12-08 22:55:33', '2021-05-15 14:16:21');
/*!40000 ALTER TABLE `modules_data` ENABLE KEYS */;

-- Dumping structure for table piratest_car.newsletters
DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','blocked') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.newsletters: ~3 rows (approximately)
DELETE FROM `newsletters`;
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
INSERT INTO `newsletters` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'intiahmad91@gmail.com', 'active', '2020-11-08 13:49:26', '2020-11-08 13:49:26'),
	(2, 'intiahmad91@gmail.com', 'active', '2020-11-08 13:49:26', '2020-11-08 13:49:26'),
	(3, 'admin@demo.com', 'active', '2020-11-08 13:50:21', '2020-11-08 13:50:21');
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;

-- Dumping structure for table piratest_car.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table piratest_car.students
DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.students: ~0 rows (approximately)
DELETE FROM `students`;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

-- Dumping structure for table piratest_car.student_password_resets
DROP TABLE IF EXISTS `student_password_resets`;
CREATE TABLE IF NOT EXISTS `student_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `student_password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.student_password_resets: ~0 rows (approximately)
DELETE FROM `student_password_resets`;
/*!40000 ALTER TABLE `student_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_password_resets` ENABLE KEYS */;

-- Dumping structure for table piratest_car.tags
DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','blocked') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.tags: ~0 rows (approximately)
DELETE FROM `tags`;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for table piratest_car.temporary_bookings
DROP TABLE IF EXISTS `temporary_bookings`;
CREATE TABLE IF NOT EXISTS `temporary_bookings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `car_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_up` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_up_lat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_up_lng` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_up_datetime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_off` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_off_lat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_off_lng` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_off_datetime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `following_product_6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grand_total` float DEFAULT NULL,
  `status` enum('seen','unseen') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unseen',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.temporary_bookings: ~0 rows (approximately)
DELETE FROM `temporary_bookings`;
/*!40000 ALTER TABLE `temporary_bookings` DISABLE KEYS */;
INSERT INTO `temporary_bookings` (`id`, `car_name`, `pick_up`, `pick_up_lat`, `pick_up_lng`, `pick_up_datetime`, `drop_off`, `drop_off_lat`, `drop_off_lng`, `drop_off_datetime`, `name`, `email`, `phone`, `address`, `city`, `state`, `country`, `payment_method`, `following_product_1`, `following_product_2`, `following_product_3`, `following_product_4`, `following_product_5`, `following_product_6`, `insurance_1`, `insurance_2`, `insurance_3`, `grand_total`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Ford Mustang 2019 Ecoboost', '111 West Wacker Drive, Chicago, Illinois, USA', '41.8865866', '-87.6314066', '2021-06-16  01:05 pm', '111 West Wacker Drive, Chicago, Illinois, USA', '41.8865866', '-87.6314066', '2021-06-17  01:05 pm', 'study', 'student@lms.com', '3485627505', 'dfgdf', 'Fgdolls hair, Melbourne Street, South Brisbane QLD, Australia', 'sdfsd', 'Albania', 'Paypal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75, 'unseen', '2021-06-07 04:06:30', '2021-06-07 04:06:30');
/*!40000 ALTER TABLE `temporary_bookings` ENABLE KEYS */;

-- Dumping structure for table piratest_car.update_site
DROP TABLE IF EXISTS `update_site`;
CREATE TABLE IF NOT EXISTS `update_site` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table piratest_car.update_site: ~0 rows (approximately)
DELETE FROM `update_site`;
/*!40000 ALTER TABLE `update_site` DISABLE KEYS */;
INSERT INTO `update_site` (`id`, `state`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `update_site` ENABLE KEYS */;

-- Dumping structure for table piratest_car.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table piratest_car.widgets
DROP TABLE IF EXISTS `widgets`;
CREATE TABLE IF NOT EXISTS `widgets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `widget_page_id` bigint(20) unsigned NOT NULL,
  `is_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_fields` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_title_8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_extra_image_title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_image_title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_image_1_height` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_image_1_width` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_extra_image_title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_image_title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_image_2_height` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_image_2_width` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `radio_buttons` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `radio_button_title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `radio_button_title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `radio_button_title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_bullets` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','blocked') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `widgets_widget_page_id_foreign` (`widget_page_id`),
  CONSTRAINT `widgets_widget_page_id_foreign` FOREIGN KEY (`widget_page_id`) REFERENCES `widget_pages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.widgets: ~16 rows (approximately)
DELETE FROM `widgets`;
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
INSERT INTO `widgets` (`id`, `title`, `widget_page_id`, `is_description`, `extra_fields`, `extra_field_title_1`, `extra_field_title_2`, `extra_field_title_3`, `extra_field_title_4`, `extra_field_title_5`, `extra_field_title_6`, `extra_field_title_7`, `extra_field_title_8`, `is_extra_image_title_1`, `extra_image_title_1`, `extra_image_1_height`, `extra_image_1_width`, `is_extra_image_title_2`, `extra_image_title_2`, `extra_image_2_height`, `extra_image_2_width`, `radio_buttons`, `radio_button_title_1`, `radio_button_title_2`, `radio_button_title_3`, `is_bullets`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Site Setting', 1, '0', '4', 'Site Slogan', 'Site Email Address', 'Site Phone Number', 'Site Address', NULL, NULL, NULL, NULL, '1', 'Header Logo', '250', '200', '1', 'Favicon', '16', '16', '1', 'Home Page Slider', NULL, NULL, '0', 'active', '2020-11-07 07:09:32', '2020-11-10 07:35:57'),
	(3, 'Type Writer', 2, '1', '7', 'Type Writer', 'Type Writer Text 1', 'Type Writer Text 2', 'Type Writer Text 3', 'Heading', 'Button Text', 'Button Link', NULL, '1', 'Type Writer Image', '250', '200', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-07 09:10:00', '2020-11-07 09:10:07'),
	(4, 'Booking Form Text', 2, '0', '2', 'Heading', 'Button Text', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, 'Heading', 'Button Text', NULL, '0', 'active', '2020-11-07 09:14:00', '2020-11-07 09:14:55'),
	(5, 'After Booking Form Text', 2, '1', '2', 'Heading in Black', 'Heading in Yellow', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-07 09:18:01', '2020-11-07 09:18:01'),
	(6, 'CAR RENTALS', 2, '1', '3', 'Heading', 'Button Text', 'Button Link', NULL, NULL, NULL, NULL, NULL, '1', 'Upload Image', '250', '200', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-07 09:26:00', '2020-11-07 17:44:37'),
	(7, 'ABOUT CAR RENTAL TEMPLATE', 2, '1', '5', 'Heading', 'Under Heading Content', 'First Icon', 'Second Icon', 'Third Icon', NULL, NULL, NULL, '1', 'Upload Image', '250', '200', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'active', '2020-11-07 15:58:31', '2020-11-07 15:58:31'),
	(8, 'Counters', 2, '0', '8', '1st Counter Title', '1st Counter', '2nd Counter Title', '2nd Counter', '3rd Counter Title', '3rd Counter', '4th Counter Title', '4th Counter', '1', 'Upload Image', '250', '200', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-08 12:11:55', '2020-11-08 12:14:32'),
	(9, 'CAR RENTAL SERVICES', 2, '1', '1', 'Heading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-08 12:21:03', '2020-11-08 12:21:03'),
	(10, 'Get Started Today', 2, '1', '3', 'Heading', 'Button Text', 'Button Link', NULL, NULL, NULL, NULL, NULL, '1', 'Upload Image', '250', '200', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-08 12:39:50', '2020-11-08 12:39:50'),
	(11, 'Customer Support Center', 2, '1', '1', 'Heading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-08 12:43:03', '2020-11-08 12:43:51'),
	(12, 'Testimonials', 2, '0', '1', 'Heading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Upload Image', '250', '200', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-08 12:57:43', '2020-11-08 12:58:24'),
	(13, 'Latest Blog', 2, '1', '1', 'Heading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-08 13:15:14', '2020-11-08 13:15:14'),
	(14, 'Newsletter', 2, '1', '1', 'Heading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-08 13:44:36', '2020-11-08 13:44:36'),
	(15, 'Contact Us', 2, '1', '1', 'Heading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-08 13:57:08', '2020-11-08 13:57:08'),
	(16, 'Our Partners', 2, '1', '1', 'Heading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-08 14:04:33', '2020-11-08 14:04:33'),
	(17, 'Geo Location API KEYs', 1, '0', '1', 'API KEy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'active', '2020-11-10 07:26:04', '2020-11-10 07:26:04');
/*!40000 ALTER TABLE `widgets` ENABLE KEYS */;

-- Dumping structure for table piratest_car.widgets_data
DROP TABLE IF EXISTS `widgets_data`;
CREATE TABLE IF NOT EXISTS `widgets_data` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `widget_id` bigint(20) unsigned NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_field_8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_image_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_image_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `radio_button_1` tinyint(4) DEFAULT 0,
  `radio_button_2` tinyint(4) DEFAULT 0,
  `radio_button_3` tinyint(4) DEFAULT 0,
  `bullets` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','blocked') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `widgets_data_widget_id_foreign` (`widget_id`),
  CONSTRAINT `widgets_data_widget_id_foreign` FOREIGN KEY (`widget_id`) REFERENCES `widgets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.widgets_data: ~16 rows (approximately)
DELETE FROM `widgets_data`;
/*!40000 ALTER TABLE `widgets_data` DISABLE KEYS */;
INSERT INTO `widgets_data` (`id`, `title`, `widget_id`, `description`, `extra_field_1`, `extra_field_2`, `extra_field_3`, `extra_field_4`, `extra_field_5`, `extra_field_6`, `extra_field_7`, `extra_field_8`, `extra_image_1`, `extra_image_2`, `radio_button_1`, `radio_button_2`, `radio_button_3`, `bullets`, `status`, `created_at`, `updated_at`) VALUES
	(1, NULL, 3, 'You can select favorite car', 'Welcome to Black Tie', 'Car Rental', 'Special Rates', '', 'Flexible, personalized car rental service in Chicago', 'Details', 'booking_details', NULL, 'home-bg_1604759802.jpg', NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-07 00:12:54', '2021-05-06 13:31:07'),
	(2, NULL, 4, NULL, 'Quick Booking', 'Submit Car Booking', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-07 00:15:16', '2020-11-07 00:15:16'),
	(3, NULL, 5, 'You can select favorite car', 'Pick ', 'your poison', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-07 00:18:29', '2020-11-07 00:18:29'),
	(4, NULL, 6, 'You can select favorite car', 'CAR RENTALS', 'Read More', '#', NULL, NULL, NULL, NULL, NULL, 'service-bg-1_1604821773.jpg', NULL, NULL, NULL, NULL, '[{"bullets":"Neomejeno \\u0161tevilo besed Neomejeno \\u0161tevilo besed"},{"bullets":"adfadfa"}]', 'active', '2020-11-07 00:27:51', '2020-11-08 02:49:37'),
	(5, NULL, 1, NULL, 'BlackTie-Car Rental', 'essamrashadmd15@gmail.com', '2022907481', '111 West Wacker Drive, Chicago, IL, USA', NULL, NULL, NULL, NULL, 'logo_a.png', 'ms-icon-310x310_1620225853.png', 0, NULL, NULL, NULL, 'active', '2020-11-07 06:42:36', '2021-05-23 00:28:08'),
	(6, NULL, 7, 'You can select favorite car', 'ABOUT CAR RENTAL SITE', 'You can select favorite car', 'Mauris convallis felis', 'Mauris convallis felis', 'Mauris convallis felis', NULL, NULL, NULL, 'about-img_1604822273.jpg', NULL, NULL, NULL, NULL, '[{"bullets":"Lorem ipsum dolor sit amet, consectetur adipiscing elit."},{"bullets":"Sed a mauris at ex lobortis hendrerit in nec felis."},{"bullets":"Nunc sed urna sit amet sapien rhoncus pretium congue id sem."},{"bullets":"Vivamus sagittis sapien a tellus consequat rutrum."},{"bullets":"Mauris at justo malesuada ligula accumsan tincidunt quis efficitur orci."}]', 'active', '2020-11-07 07:12:10', '2020-11-08 02:57:56'),
	(7, NULL, 8, NULL, 'HAPPY CLIENT', '499', 'CARS', '199', 'DESTINATIONS', '50', 'AWARDS', '199', 'counter-bg_1604823383.jpg', NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 03:13:47', '2020-11-08 03:16:25'),
	(8, NULL, 9, 'You can select favorite car', 'Car Rental <span>Services</span>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 03:21:37', '2021-01-31 00:50:13'),
	(9, NULL, 10, 'Sed sed neque laoreet, rhoncus libero id, pharetra est. Sed ut neque est. Maecenas et est sagittis, mollis risus dignissim, mattis dolor.', 'Get Started Today', 'Purchase Now', '#', NULL, NULL, NULL, NULL, NULL, 'tagline-bg_1604824847.jpg', NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 03:40:54', '2020-11-08 03:40:54'),
	(10, NULL, 11, 'You can select favorite car', 'Customer <span>Suport</span> Center', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 03:44:35', '2020-11-08 03:44:35'),
	(11, NULL, 12, NULL, 'TESTIMONIALS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'testimonial-bg_1604825922.jpg', NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 03:58:44', '2020-11-08 03:58:44'),
	(12, NULL, 13, 'You can select favorite car', 'Latest From <span>Blog</span>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 04:15:49', '2020-11-08 04:15:49'),
	(13, NULL, 14, 'Subscribe for our weekly newsletter.', 'Newsletter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 04:45:14', '2020-11-08 04:45:14'),
	(14, NULL, 15, 'You can select favorite car', 'Contact <span>Us</span>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 04:57:36', '2020-11-08 04:57:36'),
	(15, NULL, 16, 'You can select favorite car', 'Our <span>Partners</span>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-08 05:05:02', '2020-11-08 05:05:02'),
	(16, NULL, 17, NULL, 'AIzaSyCsu8cKEoa351kOewTsP7zUWbRYLNb5dJo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2020-11-09 22:29:12', '2021-05-17 02:04:04');
/*!40000 ALTER TABLE `widgets_data` ENABLE KEYS */;

-- Dumping structure for table piratest_car.widget_pages
DROP TABLE IF EXISTS `widget_pages`;
CREATE TABLE IF NOT EXISTS `widget_pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','blocked') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `widget_pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table piratest_car.widget_pages: ~2 rows (approximately)
DELETE FROM `widget_pages`;
/*!40000 ALTER TABLE `widget_pages` DISABLE KEYS */;
INSERT INTO `widget_pages` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Site Settings', 'site-settings', 'active', '2020-11-07 07:02:32', '2020-11-07 07:02:32'),
	(2, 'Home Page Content', 'home-page-content', 'active', '2020-11-07 09:00:29', '2020-11-07 09:00:29');
/*!40000 ALTER TABLE `widget_pages` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
