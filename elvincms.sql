-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2017 at 10:16 AM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elvincms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `is_erasable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `lang`, `parent_id`, `title`, `order`, `slug`, `is_visible`, `is_erasable`, `created_at`, `updated_at`) VALUES
(1, 'en', 0, 'nihil', 0, 'voluptatibus-et-est-et-odit-libero', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(2, 'en', 0, 'est', 0, 'eum-ducimus-deleniti-eum-iste', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(3, 'en', 0, 'voluptatem', 0, 'nihil-unde-et-qui-nulla-mollitia-soluta', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(4, 'en', 0, 'error', 0, 'dolorum-eum-et-nam-fugiat', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(5, 'en', 0, 'neque', 0, 'officiis-quis-quia-enim-et-et-reiciendis-qui-eveniet', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(6, 'en', 0, 'accusamus', 0, 'reiciendis-modi-dolores-voluptatem-ut-sed-voluptatem-quas', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(7, 'en', 0, 'quia', 0, 'magnam-optio-id-et-omnis-officia', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(8, 'en', 0, 'ducimus', 0, 'quod-facilis-voluptas-ipsum-quae', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(9, 'en', 0, 'pariatur', 0, 'cupiditate-hic-ut-impedit-qui-iste-in', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(10, 'en', 0, 'qui', 0, 'aut-ut-est-accusantium-et-possimus-repellat', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(11, 'en', 0, 'vel', 0, 'quis-illo-qui-qui-minus-vitae', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(12, 'en', 0, 'earum', 0, 'neque-delectus-quis-eaque', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(13, 'en', 0, 'praesentium', 0, 'esse-magnam-repudiandae-magni-reprehenderit-dolorem-ut', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(14, 'en', 0, 'voluptates', 0, 'sapiente-temporibus-hic-fugit-minus-pariatur-accusamus-quos', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(15, 'en', 0, 'ex', 0, 'tempora-et-sed-in-in-omnis-ut-sapiente', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(16, 'en', 0, 'possimus', 0, 'laboriosam-modi-qui-harum-quo-et', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(17, 'en', 0, 'et', 0, 'suscipit-incidunt-nihil-error-quo', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(18, 'en', 0, 'error', 0, 'dolorem-ut-quo-dolore-ea', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(19, 'en', 0, 'alias', 0, 'sint-vel-ratione-dolores-exercitationem-ullam', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(20, 'en', 0, 'quam', 0, 'repellendus-vitae-at-repudiandae-nostrum-reiciendis', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(21, 'en', 0, 'neque', 0, 'et-aspernatur-ab-autem-voluptatibus-tenetur-officia-reiciendis-et', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(22, 'en', 0, 'aut', 0, 'iure-cupiditate-vero-aut-eum-inventore', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(23, 'en', 0, 'quaerat', 0, 'modi-laborum-est-voluptatibus-accusamus', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(24, 'en', 0, 'impedit', 0, 'qui-esse-saepe-dolores-ea-ea-enim', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(25, 'en', 0, 'soluta', 0, 'ut-enim-non-illo-sunt-ullam', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(26, 'en', 0, 'ut', 0, 'temporibus-mollitia-qui-ipsa', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(27, 'en', 0, 'vero', 0, 'facere-et-in-aliquid', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(28, 'en', 0, 'eos', 0, 'quae-quia-aliquam-qui-libero', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(29, 'en', 0, 'fugiat', 0, 'eius-eveniet-nemo-sequi-labore-vero-debitis-non-soluta', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(30, 'en', 0, 'beatae', 0, 'ut-dignissimos-excepturi-unde-sequi-perspiciatis-at', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(31, 'en', 0, 'reprehenderit', 0, 'cupiditate-ipsa-incidunt-qui-aspernatur-quos-quia-vel-iusto', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(32, 'en', 0, 'ea', 0, 'corporis-neque-sapiente-molestiae-dignissimos-dolores', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(33, 'en', 0, 'voluptatem', 0, 'ullam-et-vitae-dicta-mollitia-expedita', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(34, 'en', 0, 'nihil', 0, 'aliquid-rem-id-molestiae-quod-excepturi-est-nobis-quia', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(35, 'en', 0, 'quod', 0, 'eveniet-beatae-molestiae-ea-eaque-sed-ullam-vitae', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(36, 'en', 0, 'dolores', 0, 'pariatur-inventore-cum-velit-voluptatem-minima', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(37, 'en', 0, 'ullam', 0, 'ut-architecto-itaque-natus-sed-accusamus-accusamus', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(38, 'en', 0, 'exercitationem', 0, 'corporis-eos-dolor-fugit-sunt', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(39, 'en', 0, 'ea', 0, 'repellat-delectus-veritatis-qui-fuga-nihil', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(40, 'en', 0, 'nemo', 0, 'optio-hic-dolores-similique', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(41, 'en', 0, 'autem', 0, 'aliquam-et-perferendis-rerum-quia-ut', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(42, 'en', 0, 'assumenda', 0, 'nostrum-et-modi-et-qui', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(43, 'en', 0, 'quaerat', 0, 'et-voluptatibus-sed-assumenda-qui-commodi', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(44, 'en', 0, 'ullam', 0, 'amet-minima-et-molestias-quia-eos-dolores', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(45, 'en', 0, 'voluptatibus', 0, 'doloremque-dicta-eveniet-vel-quisquam-libero-ducimus-eaque', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(46, 'en', 0, 'pariatur', 0, 'sunt-sequi-doloribus-voluptate-qui', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(47, 'en', 0, 'temporibus', 0, 'ipsa-doloribus-omnis-impedit-doloremque-rerum-perspiciatis', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(48, 'en', 0, 'labore', 0, 'voluptatem-asperiores-praesentium-magnam-accusamus-aspernatur-ut', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(49, 'en', 0, 'vel', 0, 'autem-deleniti-quam-et-facere', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(50, 'en', 0, 'pariatur', 0, 'aut-molestias-dicta-laborum-delectus-voluptas', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `is_erasable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_strings`
--

CREATE TABLE IF NOT EXISTS `dynamic_strings` (
  `id` int(11) NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `index` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci DEFAULT 'textarea'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dynamic_strings`
--

INSERT INTO `dynamic_strings` (`id`, `lang`, `slug`, `index`, `value`, `type`) VALUES
(1, 'tr', 'dinamik-1', 'dinamik_1', '<p>dinamik metin 1</p>\r\n', 'editor'),
(2, 'tr', 'dinamik-2', 'dinamik_2', '<p>dinamik metin 2</p>\r\n', 'editor'),
(3, 'tr', 'dinamik-3', 'dinamik_3', '<p>dinamik metin 3</p>\r\n', 'editor'),
(4, 'tr', 'dinamik-4', 'dinamik_4', '<p>dinamik metin 4</p>\r\n', 'editor'),
(5, 'en', 'dynamic-1', 'dynamic_1', '<p>dynamic text_1</p>', 'editor'),
(6, 'en', 'dynamic-2', 'dynamic_2', '<p>dynamic text_2</p>', 'editor'),
(7, 'en', 'dynamic-3', 'dynamic_3', '<p>dynamic text_3</p>', 'editor'),
(8, 'en', 'dynamic-4', 'dynamic_4', '<p>dynamic text_4</p>', 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `lang`, `title`, `slug`, `summary`, `text`, `image`, `date`, `created_at`, `updated_at`) VALUES
(1, 'en', 'nesciunt', 'officiis-deserunt-alias-sunt', NULL, 'Et sapiente soluta soluta similique reprehenderit aut voluptates. Eos voluptas sed eum consequatur corrupti. Nesciunt aut ut illum aperiam quo.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(2, 'en', 'et', 'sequi-placeat-et-in-ducimus-culpa', NULL, 'Fugiat dolor omnis aliquid doloribus et. Ut quae delectus facere explicabo. Repellat eum est molestias et accusamus saepe. Magni a voluptatem laborum expedita perspiciatis corporis.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(3, 'en', 'blanditiis', 'laboriosam-rerum-voluptatem-dolores-eum-voluptatem-sit', NULL, 'Consequuntur quis autem maxime laboriosam. Voluptas quae et debitis quis dolores omnis aut. Adipisci sed quia suscipit eos aut.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(4, 'en', 'velit', 'qui-repellat-aliquid-dolores-rerum', NULL, 'Modi iusto at voluptatem ab qui soluta blanditiis. Qui voluptate enim ut ut quisquam. Velit atque magni porro incidunt occaecati. Vero dolores asperiores iure accusantium doloremque deserunt.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(5, 'en', 'ut', 'ut-et-voluptatem-et-quo', NULL, 'Quia omnis vero consequatur sapiente corporis magni quia. Sunt sit maxime qui eos. Tenetur ea alias ex asperiores rerum voluptatem. Dolores natus dolore et quisquam ut fuga.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(6, 'en', 'aut', 'quae-a-facere-et-assumenda', NULL, 'Itaque aperiam ex ipsam qui nostrum minima. Blanditiis quis ipsum officiis. Eligendi adipisci alias voluptatem soluta doloribus. Qui aut accusamus a aut et qui id.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(7, 'en', 'rerum', 'cupiditate-assumenda-fugit-eius-rerum-nihil', NULL, 'Soluta quia voluptate quasi eos enim. Et itaque maiores qui vel. Officia nam porro pariatur asperiores dolores dolor. Iste sit dolorum labore ut.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(8, 'en', 'quia', 'ut-sunt-aut-expedita-inventore-ut', NULL, 'Error praesentium quidem aliquid ipsum. Iure laborum velit voluptatem incidunt est ea.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(9, 'en', 'ducimus', 'et-quam-et-et-ea-dolore-veritatis', NULL, 'Iure quo praesentium at voluptatem. Laudantium enim voluptatum fugit eos aliquam tempora. Cum iure sed error quibusdam.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(10, 'en', 'fugiat', 'rerum-harum-temporibus-voluptas-soluta-inventore-vero-accusamus', NULL, 'Est beatae sapiente quam occaecati facilis est. Sed magni sunt sit placeat. Amet deserunt voluptatum sed harum. Sint rem molestiae odit deleniti eaque.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(11, 'en', 'sed', 'laborum-sunt-commodi-beatae', NULL, 'Veniam harum molestiae qui veritatis officia quaerat dolore. Aut minus placeat sit a cumque ullam. Sunt maxime consequatur suscipit ullam corrupti.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(12, 'en', 'reiciendis', 'aut-velit-dolor-architecto-sit', NULL, 'Occaecati sit quis explicabo iusto sed. Consequuntur quia in qui ullam dolore facere. Perferendis sunt aliquam molestias nesciunt iure sint.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(13, 'en', 'aut', 'rem-ducimus-autem-sed-et-accusantium-nemo-quia', NULL, 'Sit quae ducimus quis. Incidunt placeat officiis velit ullam reiciendis. Atque sequi esse nihil omnis non sunt. Amet atque magni et laboriosam et ratione consequatur.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(14, 'en', 'vel', 'dignissimos-assumenda-sunt-est-aut-aspernatur', NULL, 'Quasi beatae vel quo autem ut sed. Dolorem voluptatibus amet unde illum ut et non nam. Est numquam ad ut odio. Molestiae ipsum repellat in molestias a tempore quidem.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(15, 'en', 'dolorem', 'repudiandae-praesentium-nesciunt-quia-aut-ab', NULL, 'Eos cum neque nesciunt. Voluptate atque magni rem ut. Enim dolor inventore neque vero. Numquam architecto vel repellat quo dolores repellat exercitationem.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(16, 'en', 'est', 'laboriosam-cupiditate-iusto-perspiciatis', NULL, 'Neque officia magnam aut eveniet. Placeat autem similique exercitationem dolor quo. At quia ab ut est.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(17, 'en', 'aut', 'rerum-fuga-cumque-dolorem-ullam-possimus-voluptatem-molestiae', NULL, 'Voluptatibus aliquid impedit aut magnam quo. Tempore rem consequatur sint deleniti necessitatibus placeat voluptatem facilis. Fugiat culpa et ut et deserunt eum accusantium.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(18, 'en', 'veniam', 'impedit-ea-architecto-quia-illum', NULL, 'Enim autem molestiae autem aliquid inventore repellendus. Temporibus doloribus alias ratione nisi.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(19, 'en', 'consequuntur', 'aperiam-unde-praesentium-aliquid-commodi-quas-omnis', NULL, 'Repellendus saepe id tempora tempore eveniet. Ut illo ratione tempore nihil unde eum molestiae enim.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(20, 'en', 'doloribus', 'ducimus-eligendi-distinctio-minima-omnis-adipisci-omnis-est-et', NULL, 'Consequuntur iste rerum ea occaecati provident sit. Praesentium et nulla quam quis atque. Impedit nisi rerum atque qui repellendus voluptatum.', NULL, '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `lang`, `question`, `answer`, `order`, `created_at`, `updated_at`) VALUES
(1, 'en', 'Minus iste et nisi dignissimos ea aut natus. Quam nihil porro nemo odio quidem dignissimos qui.', 'Iste deserunt iure inventore. Quas quo et iure culpa dolores esse aut. Pariatur mollitia voluptatum tempore autem et consequatur. Magni aliquid libero est hic totam sed. Est modi eaque aspernatur in.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(2, 'en', 'Quaerat dolorem amet sed quia. Aut officiis ea assumenda et. Aut dolorum eos sed quisquam. Perspiciatis voluptas distinctio totam.', 'Rerum tenetur libero sint necessitatibus voluptates. Iste in ipsum quam eveniet nostrum. Recusandae natus ipsum mollitia amet dignissimos nostrum.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(3, 'en', 'Sed sit totam porro repellat. Exercitationem ratione corporis commodi enim ut animi sed. Maxime aut sunt et mollitia debitis odio veniam.', 'Laborum quis aut maxime fuga consequatur quis. Earum voluptatem ut nulla repellat occaecati soluta. Ut placeat velit quia ut facilis.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(4, 'en', 'Error velit numquam perspiciatis voluptates at sunt quod cupiditate. Dolorum deserunt qui ipsam tenetur ea. Velit ea omnis unde molestiae rerum autem.', 'Sit est qui voluptas. Sint consequatur qui debitis facilis. Est aut excepturi ea omnis omnis sed officia. Sapiente illum ipsa et repellendus nihil.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(5, 'en', 'Laudantium maxime eligendi quis voluptatem. Laudantium rerum alias necessitatibus nihil sit. Incidunt cupiditate et dolorem mollitia illum.', 'Totam ea rerum et nam. Tenetur enim quisquam exercitationem consequatur aut. Eum rerum labore sint quos excepturi est neque.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(6, 'en', 'Maxime accusamus culpa hic veniam et ratione maxime. Laboriosam omnis aut cum voluptas in. Eius nobis nostrum provident eum optio rem. Modi et iste aut.', 'Quos cupiditate laboriosam ullam recusandae. Ea excepturi nesciunt et beatae. Dolor praesentium recusandae deserunt et.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(7, 'en', 'Tenetur asperiores ratione est quae. Libero delectus temporibus aut est ea occaecati iusto. Eos recusandae fuga voluptate rerum asperiores doloremque.', 'Sit optio magnam labore. Animi consectetur deserunt rerum aut et et. Dignissimos ullam eaque velit laborum quo porro.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(8, 'en', 'Illo magni porro et molestiae. Omnis fuga laborum laudantium et. Harum magnam accusantium quo aut. Ut inventore est fugit.', 'Ut ut dolorem nobis. Dolore eos soluta sapiente unde et quas. Voluptatem maxime blanditiis voluptas quam qui ut voluptate. Delectus aut illum mollitia voluptas tenetur neque corporis.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(9, 'en', 'Voluptate dolorum dolorem quasi rerum eius libero numquam. Tempora eaque eos et rem omnis.', 'Debitis consequatur laboriosam commodi ut. Consequatur ipsa laudantium autem unde nostrum iure. Et aut illum aut possimus a modi eos.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(10, 'en', 'Enim laboriosam possimus nihil blanditiis tenetur. Et vitae dolore qui nemo sint in harum. Provident sint et perferendis ut dolores dolorem. Quae sed omnis odio minima itaque alias.', 'Dolor repellendus placeat fugiat repellendus nihil voluptatem eum. Quas molestiae ut minima magni quia omnis dolores. Veniam aperiam nulla enim dolor. Voluptatem eveniet voluptatem ut est dolorem.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(11, 'en', 'Et adipisci ut ea expedita quia quos consequuntur libero. Ipsa est sed minima quae dolore maxime aut. Est nemo minima ut optio cum. Id atque aliquid officiis consequatur.', 'Recusandae ipsum est officiis sit velit accusantium. Deserunt qui molestias necessitatibus non. Doloribus distinctio eos autem rerum ratione reiciendis debitis.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(12, 'en', 'Blanditiis mollitia qui provident iure. Debitis sit est voluptatem. Ex porro consequatur et repudiandae quod ratione.', 'Libero sunt vero quo ab. Tenetur et et praesentium doloremque voluptatem. Enim debitis facilis omnis sequi deserunt numquam rerum. Expedita quis nobis laborum vel impedit dolores.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(13, 'en', 'Architecto qui laboriosam aliquam beatae. Fugit aspernatur nihil suscipit accusamus libero harum. Ea omnis harum deserunt earum.', 'Perferendis quae quia deleniti. Amet laudantium et laboriosam deserunt. Ducimus odit aut et.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(14, 'en', 'Ut aliquid odit rerum ut unde delectus. Quae sint odit rem vitae aut neque est. Molestiae dolorem debitis qui similique consectetur.', 'Nulla maiores at aut aperiam ipsum aliquam minus animi. Pariatur repudiandae vel in optio non quidem est. Voluptas dignissimos repudiandae distinctio aut facere doloribus. In ad ipsum quasi sint.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(15, 'en', 'Sit deserunt fugiat hic consequatur eius odio. Et sed rerum ipsum nisi. Voluptatem modi rem ut aut sunt molestiae.', 'Unde possimus neque commodi voluptatem. Quo sunt sint et est quas ducimus id.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(16, 'en', 'Sint hic voluptas nam est voluptates dignissimos hic quod. Velit voluptas in qui eum. Quia vel qui omnis molestiae ducimus deleniti.', 'Quo velit laboriosam sit tenetur quas. Sit quas et temporibus consequuntur aut cum. Dolor et aut ducimus sequi assumenda.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(17, 'en', 'Accusamus placeat sint at et quae. Dolor doloremque et ratione corrupti voluptatem provident voluptatem ea. Saepe adipisci cumque voluptas est sint.', 'Eos a blanditiis rerum ullam illum ut. Placeat quia ducimus modi earum aut velit. Deleniti voluptate fugiat debitis sapiente totam debitis. Ratione commodi sapiente adipisci.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(18, 'en', 'Nihil occaecati corporis quae totam quaerat. Eius quia quibusdam amet et dolor enim. Sint alias ullam qui cum enim.', 'Qui earum corrupti et a eum ut. Quisquam sunt accusamus quia hic ullam temporibus officiis. Sapiente fugiat ut repellendus blanditiis quasi voluptatem voluptas.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(19, 'en', 'Qui sit aliquam nihil eum dolorem velit impedit. Et rem cupiditate blanditiis. Sunt qui amet consequatur delectus.', 'Perferendis qui repellendus recusandae quas. Laborum et quisquam vero saepe corrupti fugiat ipsam magni.\nConsectetur sunt sint ut sint. Corrupti temporibus sunt ut voluptas.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(20, 'en', 'Dolore commodi cumque et. Ratione possimus exercitationem aut et ducimus cupiditate et. Ipsum neque occaecati delectus rerum. Molestias facere cum voluptates recusandae harum consequatur repellat.', 'Sit sit maiores quibusdam adipisci. Blanditiis rem autem eligendi error temporibus molestiae. Necessitatibus qui unde laborum dolor nostrum eveniet.', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `is_erasable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `slug`, `is_visible`, `is_erasable`, `created_at`, `updated_at`) VALUES
(1, 'consequatur', 'culpa-officia-minima-voluptatem-et', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(2, 'saepe', 'dolores-enim-inventore-ducimus-est', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(3, 'quisquam', 'vel-quae-voluptatem-harum-enim-ab-nam-est', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(4, 'repudiandae', 'placeat-dicta-a-similique-voluptatem-error', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(5, 'voluptatum', 'ut-amet-corrupti-delectus-sapiente', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_items`
--

CREATE TABLE IF NOT EXISTS `gallery_items` (
  `id` int(10) unsigned NOT NULL,
  `gallery_id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_items`
--

INSERT INTO `gallery_items` (`id`, `gallery_id`, `image`, `order`, `created_at`, `updated_at`) VALUES
(1, 1, 'http://lorempixel.com/640/480/?41571', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(2, 1, 'http://lorempixel.com/640/480/?58339', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(3, 1, 'http://lorempixel.com/640/480/?53649', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(4, 1, 'http://lorempixel.com/640/480/?14745', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(5, 2, 'http://lorempixel.com/640/480/?15388', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(6, 2, 'http://lorempixel.com/640/480/?14413', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(7, 2, 'http://lorempixel.com/640/480/?71256', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(8, 2, 'http://lorempixel.com/640/480/?73391', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(9, 3, 'http://lorempixel.com/640/480/?53377', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(10, 3, 'http://lorempixel.com/640/480/?94211', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(11, 3, 'http://lorempixel.com/640/480/?64395', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(12, 3, 'http://lorempixel.com/640/480/?47123', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(13, 4, 'http://lorempixel.com/640/480/?45970', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(14, 4, 'http://lorempixel.com/640/480/?16082', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(15, 4, 'http://lorempixel.com/640/480/?73938', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(16, 4, 'http://lorempixel.com/640/480/?14773', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(17, 5, 'http://lorempixel.com/640/480/?54129', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(18, 5, 'http://lorempixel.com/640/480/?85952', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(19, 5, 'http://lorempixel.com/640/480/?47413', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(20, 5, 'http://lorempixel.com/640/480/?22258', 0, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_item_details`
--

CREATE TABLE IF NOT EXISTS `gallery_item_details` (
  `id` int(10) unsigned NOT NULL,
  `gallery_item_id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_item_details`
--

INSERT INTO `gallery_item_details` (`id`, `gallery_item_id`, `lang`, `caption`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'dolores', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(2, 2, 'en', 'et', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(3, 3, 'en', 'ea', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(4, 4, 'en', 'perspiciatis', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(5, 5, 'en', 'eum', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(6, 6, 'en', 'laborum', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(7, 7, 'en', 'velit', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(8, 8, 'en', 'repellat', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(9, 9, 'en', 'similique', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(10, 10, 'en', 'enim', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(11, 11, 'en', 'totam', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(12, 12, 'en', 'earum', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(13, 13, 'en', 'et', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(14, 14, 'en', 'quibusdam', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(15, 15, 'en', 'a', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(16, 16, 'en', 'occaecati', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(17, 17, 'en', 'consectetur', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(18, 18, 'en', 'culpa', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(19, 19, 'en', 'assumenda', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(20, 20, 'en', 'non', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(21, 21, 'en', 'dfdfd', '2017-03-28 13:13:42', '2017-03-28 13:13:42'),
(22, 21, 'tr', 'fdfdfdf', '2017-03-28 13:13:42', '2017-03-28 13:13:42'),
(23, 22, 'en', 'dfdf', '2017-03-28 13:16:20', '2017-03-28 13:16:20'),
(24, 22, 'tr', 'dfdfd', '2017-03-28 13:16:20', '2017-03-28 13:16:20'),
(25, 23, 'en', 'fdfd', '2017-03-28 13:16:43', '2017-03-28 13:16:43'),
(26, 23, 'tr', 'fdfd', '2017-03-28 13:16:43', '2017-03-28 13:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(10) unsigned NOT NULL,
  `menu_id` int(11) NOT NULL DEFAULT '0',
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `lang`, `name`, `link`, `order`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'en', 'Home', '/', 0, 0, NULL, NULL),
(2, 0, 'en', 'Blog', '/posts', 6, 0, NULL, NULL),
(15, 0, 'en', 'Contact Us', '/contact', 12, 0, NULL, NULL),
(18, 0, 'en', 'About', '/about', 2, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_10_23_152739_create_posts_table', 1),
(4, '2016_10_24_193924_create_categories_tables', 1),
(5, '2016_10_24_193924_create_tags_tables', 1),
(6, '2016_10_24_194013_create_slides_tables', 1),
(7, '2016_10_24_194014_create_slide_items_tables', 1),
(8, '2016_10_24_194015_create_slide_item_details_tables', 1),
(9, '2016_10_24_194156_create_galleries_tables', 1),
(10, '2016_10_24_194231_create_gallery_items_tables', 1),
(11, '2016_10_24_194232_create_gallery_item_details_tables', 1),
(12, '2016_10_24_194418_create_settings_tables', 1),
(13, '2016_10_24_194443_create_popup_tables', 1),
(14, '2016_10_24_194456_create_faqs_tables', 1),
(15, '2016_11_03_183917_create_pages_tables', 1),
(16, '2016_11_05_095958_create_menu_items_tables', 1),
(17, '2016_11_10_183444_create_dynamic_strings_tables', 1),
(18, '2016_11_24_140426_create_testimonial_tables', 1),
(19, '2016_11_25_142131_create_projects_tables', 1),
(20, '2016_11_25_142148_create_events_tables', 1),
(21, '2017_01_06_120323_create_presses_table', 1),
(22, '2017_01_07_131813_create_roles_table', 1),
(23, '2017_03_17_085137_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `is_erasable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `lang`, `title`, `slug`, `summary`, `text`, `item`, `is_visible`, `is_erasable`, `created_at`, `updated_at`) VALUES
(1, 'en', 'enim', 'delectus-quos-et-quos-sit', 'Corporis accusamus odit in reiciendis non voluptates. Ut explicabo voluptas corrupti sunt ut pariatur. Ullam labore consequatur dignissimos similique labore.', 'Voluptatem inventore sint voluptatibus debitis fugiat iure assumenda. Unde fugiat ut vel dicta. Laboriosam eligendi ab alias voluptate dignissimos illo a non.', 'http://lorempixel.com/640/480/?16792', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(2, 'en', 'illum', 'repellat-molestiae-sit-molestiae-nobis-eveniet-fugit', 'Nihil ea enim dolore. Nihil ex aut laboriosam voluptas. Dolorem veniam temporibus autem et distinctio aut. Omnis et officiis ex saepe assumenda qui cupiditate. Id ad doloremque iure totam quod.', 'Laboriosam odio dolores perferendis ut molestiae. Sunt possimus dolorum quas error ratione perferendis. Aspernatur a perferendis sint officiis.', 'http://lorempixel.com/640/480/?55046', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(3, 'en', 'quaerat', 'error-aut-est-minus', 'Sit aut autem ex quibusdam. Qui veritatis et dolor sed praesentium voluptas. Quia aliquam eaque quia dolorum ab. Ut sint autem modi aperiam reiciendis.', 'Ut eum quia tempora repudiandae optio. Praesentium magni illum non exercitationem aut molestiae. Ad incidunt illo sapiente consectetur atque non. Tempora illum et accusamus.', 'http://lorempixel.com/640/480/?45656', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(4, 'en', 'est', 'dignissimos-autem-quis-quia-aut-quo-saepe-iste-et', 'Quaerat et qui dignissimos sit ut pariatur sit. Qui corporis quibusdam corporis. Rerum pariatur quo et quis quos. Consequuntur repudiandae et debitis rem aut voluptas.', 'Qui voluptas fuga et mollitia qui sit quam. Autem quis quod quos molestias consequuntur. Aut ab dolorem quibusdam recusandae ut quaerat voluptatem.', 'http://lorempixel.com/640/480/?90152', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(5, 'en', 'expedita', 'ut-at-aliquid-ipsa', 'Ut numquam aspernatur et illo. Eum rem magni facilis architecto. Quia libero officiis sit. Quam unde cum adipisci dicta qui qui placeat.', 'Et voluptatum ut accusamus explicabo enim. Quibusdam dicta sapiente vel eos harum est dicta. Nobis molestias aut quae vel exercitationem ipsum ipsum repellendus.', 'http://lorempixel.com/640/480/?20551', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(6, 'en', 'quaerat', 'quis-laborum-nisi-dicta-sequi-a-ab', 'Et saepe tenetur nulla doloremque harum quos explicabo. Magnam quo aut repellendus voluptatem non incidunt. Et veritatis blanditiis incidunt odit quidem deserunt.', 'Maiores quis quae sunt commodi neque laborum. Dolores sed optio autem debitis.\nVeniam repudiandae amet aut odit et. Reiciendis dolores minima aliquid.', 'http://lorempixel.com/640/480/?20855', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(7, 'en', 'consequatur', 'ut-repellendus-ut-asperiores-blanditiis-natus-consequatur-molestiae-porro', 'Aperiam excepturi ratione recusandae at mollitia quaerat similique. Minus illum id ea qui pariatur. Tenetur ipsum eligendi aut. Magni qui voluptas sit omnis.', 'Id dolorem numquam ipsum nesciunt ut provident quod. Doloremque explicabo nihil aut officia neque. Et nemo molestiae possimus dolores rerum.', 'http://lorempixel.com/640/480/?51980', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(8, 'en', 'perferendis', 'amet-veritatis-ratione-corrupti-explicabo-omnis-commodi-ut', 'Fuga qui vel beatae. Et sint deleniti est molestiae qui ut ex. Neque exercitationem quidem quod possimus necessitatibus. Sunt vero sunt nam.', 'Ut rerum sint dolore autem assumenda. Eos quod laboriosam officia sint. Et laudantium doloribus dolore rem aspernatur praesentium.', 'http://lorempixel.com/640/480/?95485', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(9, 'en', 'quam', 'esse-nostrum-odio-consectetur-pariatur-aut-sed', 'Optio adipisci non at enim assumenda perspiciatis. Delectus harum et consectetur omnis cum accusamus nobis. Ab rerum iusto iure magni earum accusamus.', 'Fugit velit quis et aut et. Suscipit voluptatem assumenda totam quidem cupiditate. Voluptates distinctio laboriosam rerum sint sed error delectus. Aut fugiat labore est ea corporis sed id.', 'http://lorempixel.com/640/480/?12386', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(10, 'en', 'velit', 'blanditiis-aut-eum-quis-numquam-id-nemo', 'Quidem quia corporis molestiae qui cupiditate quo. Vitae quia aliquid mollitia qui sit ipsam repellat architecto. Totam vel minus suscipit tempore quia est ut.', 'Eos non enim corporis. Suscipit nihil sunt eveniet vel minus laboriosam. Voluptatem occaecati voluptas aut dolores unde culpa. Asperiores nihil quo sit fugit tenetur totam est.', 'http://lorempixel.com/640/480/?73398', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(11, 'en', 'neque', 'qui-natus-voluptatibus-eum-eius', 'Similique aperiam consequatur asperiores ducimus provident cumque. Eveniet explicabo sequi nihil laudantium. Exercitationem doloribus harum molestiae nulla. Adipisci ex vel incidunt nihil voluptatem.', 'Ipsum aut quasi ut dolorem. Molestiae quo autem blanditiis veritatis. Vel quis aut quia corrupti maxime. Et consectetur harum nulla repellat porro ut.', 'http://lorempixel.com/640/480/?37312', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(12, 'en', 'laboriosam', 'facere-consequatur-quia-necessitatibus-dolorum-exercitationem', 'Omnis est ad eos odit ipsum aut itaque. Voluptatem quis delectus placeat. Provident et dicta illo dolores. Pariatur consequuntur qui odio.', 'Dolores et quia dolores soluta minima reiciendis. Aut necessitatibus cum repudiandae est sit tempore.', 'http://lorempixel.com/640/480/?51853', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(13, 'en', 'voluptas', 'et-voluptatum-aliquid-et-rerum-harum-numquam', 'Blanditiis ratione id repudiandae et non non. Quibusdam est voluptatum quia reprehenderit omnis quia iste.', 'Est rerum odit voluptate architecto. Dicta nihil distinctio magni culpa fugiat sit. Doloribus id aut est eum. Aut consequatur quis quod nesciunt ut nulla et et.', 'http://lorempixel.com/640/480/?38348', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(14, 'en', 'delectus', 'est-maiores-ratione-quia-impedit-aperiam-aut-dolorum', 'Iusto quibusdam ut sequi sed. Rerum et omnis vitae molestiae est tempore. Molestias placeat nostrum non pariatur.', 'Non qui dolores quia autem. Omnis et magnam vel ipsum illo voluptates. Consectetur tempore rem repellendus iusto sunt ipsam vel possimus. Hic ea iure quos consequatur modi perferendis.', 'http://lorempixel.com/640/480/?22488', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(15, 'en', 'rerum', 'harum-aut-voluptates-ut-perspiciatis-delectus-est-enim', 'Ut eaque doloremque impedit sit accusamus cum molestias. Facilis et earum aperiam tempore eius ut nisi.', 'Delectus dolor ut eius. Aut occaecati nulla aut qui quia numquam consequatur. Alias harum et in minima aliquam omnis provident ducimus.', 'http://lorempixel.com/640/480/?99433', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(16, 'en', 'tempora', 'non-tenetur-est-vitae-sapiente-rem', 'Voluptas dolor natus non esse dolores possimus et. Placeat est id et. Placeat qui amet nostrum asperiores. Ut corrupti et illum ipsam.', 'Earum ab quibusdam est blanditiis neque ut. In ea perspiciatis aut. Ipsam corporis odit earum et at. Debitis ut voluptatem suscipit nihil.', 'http://lorempixel.com/640/480/?64997', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(17, 'en', 'sunt', 'rem-neque-dolorem-totam-iusto-mollitia', 'Incidunt laborum non vel ad qui iure. Consequatur voluptatem autem et saepe hic dolor et. Tempore voluptas deserunt voluptate eum vel sit. Quidem qui vel et accusantium maiores atque ad.', 'Ullam qui et accusantium recusandae odit ut ut. Accusamus labore consequuntur eum ut. Iusto repellendus non eum eaque iusto nisi. Voluptatem id voluptatem quia quis voluptatem vero.', 'http://lorempixel.com/640/480/?23251', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(18, 'en', 'consequatur', 'dignissimos-iure-voluptatum-voluptas-odit-omnis-quis', 'Rerum reprehenderit provident ratione dolorem id. Beatae deleniti id enim iusto alias aut. Praesentium omnis distinctio sed.', 'Praesentium sit qui suscipit qui omnis et harum. Autem repellat vel qui magnam fugit. Animi nulla blanditiis in voluptas sit est beatae. Vel quod numquam saepe et sit.', 'http://lorempixel.com/640/480/?69547', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(19, 'en', 'non', 'non-sapiente-voluptas-sed-et-qui-molestias', 'Quo eos qui ipsam aliquid aut consequatur. Aut quia nemo et aut sint quas non commodi. Ipsam voluptates ducimus et illum quos quisquam ex. Aspernatur odio non doloremque.', 'Ut ad ab sint ut. Asperiores aut omnis et dolores. Unde ut impedit aperiam eaque quibusdam. Nisi blanditiis aut exercitationem molestiae hic excepturi eum voluptates.', 'http://lorempixel.com/640/480/?88557', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(20, 'en', 'libero', 'velit-repellat-error-dolorem-illum', 'Itaque molestias occaecati suscipit atque. Quas accusamus ut dolores voluptatem. Modi sit est ut tempore voluptates ratione ea. Excepturi fugiat cupiditate saepe consequuntur exercitationem.', 'Recusandae dolores reprehenderit repellat magnam qui deleniti. Repellendus et voluptatum nesciunt rem consequatur doloribus minus. Odio in debitis facere repudiandae consequatur.', 'http://lorempixel.com/640/480/?77698', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE IF NOT EXISTS `popup` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`id`, `lang`, `title`, `text`, `is_visible`, `created_at`, `updated_at`) VALUES
(1, 'en', 'aliquid', 'Voluptas consectetur reprehenderit et deleniti eius consequatur sit. Consequatur facilis placeat commodi et maiores voluptas.', 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_id` int(10) unsigned DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `is_erasable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `lang`, `user_id`, `title`, `slug`, `summary`, `text`, `image`, `video`, `slide_id`, `published_at`, `is_visible`, `is_erasable`, `created_at`, `updated_at`) VALUES
(1, 'en', 41, 'laboriosam', 'est-quia-et-ex-sint-tempora-numquam-provident-sequi', 'Ut corporis soluta non minima animi. Ducimus molestiae et veniam cumque inventore adipisci. Quasi commodi ea dolor harum et temporibus. Minus nostrum ut quia natus praesentium atque.', 'Ut consequatur perspiciatis ut sint alias iste. Sed saepe voluptas quia. Eum facilis consequatur sit voluptatem id minus neque. Voluptas beatae qui quis ullam ut architecto deserunt. Unde blanditiis pariatur est aut vel. Facere optio quis cum qui est. Illum molestiae aut libero eum ratione ad ut ut. Quasi qui voluptas fugiat ab sint est ut. Quo dolor ratione sit. Porro facere consequatur rem minus ducimus. Quo aut voluptatibus officiis at aspernatur atque corporis. Quas cumque et ea dolorem debitis delectus aut.', 'http://lorempixel.com/640/480/?42518', 'http://stark.net/aut-quos-quidem-dignissimos-quaerat-sequi-vero-repellendus-et', 4, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(2, 'en', 41, 'sunt', 'ut-voluptatem-aliquid-consequuntur-aperiam-dolores-veritatis', 'In aut voluptatem dolores impedit. Maxime impedit eum omnis aut. Deserunt quia non nesciunt omnis deleniti.', 'Cupiditate illum totam mollitia fugit. Ratione asperiores placeat qui. Est recusandae blanditiis temporibus ratione impedit libero. Vitae similique et numquam repellendus cupiditate tenetur. Iure fugiat cupiditate veniam. Quidem quod earum nihil rerum tempora ut. Optio fuga quia est ut quidem ut recusandae enim. Voluptatem voluptatem architecto et sed odit. Qui est non ut esse corporis ut voluptates. Aut molestiae harum cum.', 'http://lorempixel.com/640/480/?22287', 'http://www.mitchell.org/dolores-nostrum-veniam-voluptatem-ut', 3, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(3, 'en', 41, 'quisquam', 'quas-non-ab-ut-sint-omnis', 'Est officia placeat nemo sequi repudiandae dolorem veritatis. Dolores at nulla reprehenderit molestiae temporibus modi quas minus.', 'Optio quis animi recusandae ea fugiat. Exercitationem incidunt earum at provident eveniet similique. Rem id architecto consequatur dicta non unde repellat. Asperiores explicabo quis odit fugit. Omnis commodi unde cumque ea et. Accusantium nesciunt inventore expedita magni natus eum. Repellat voluptas non minus. Rerum adipisci eum animi labore quam. Temporibus quas molestiae labore qui consequatur quo ut. Reiciendis tempore exercitationem eligendi ad ducimus ut. Voluptatem quo mollitia eos. Occaecati tenetur consequatur qui assumenda quod.', 'http://lorempixel.com/640/480/?23007', 'http://weber.net/non-nam-neque-dicta-velit', 2, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(4, 'en', 41, 'accusantium', 'unde-distinctio-maiores-dolorum-sed-quasi-et-aut', 'Dolorum harum voluptatem qui illo. Praesentium nihil nulla sapiente esse. Dolores provident libero facilis sed. In autem esse iste sed modi.', 'Ut porro enim illum est eos impedit autem. Sed quidem vero vel natus soluta iusto. Quae vel quas molestias ipsam ut. Consequuntur a in quia recusandae dolor delectus. Aut laborum blanditiis consequatur ipsum cum earum voluptatem. Consequatur doloribus dignissimos dignissimos cum. Error sed odit voluptatem dolores rem id. Assumenda fugit sed tempore officiis. Cumque qui aut hic excepturi. Est libero qui soluta in cum ipsa. Cum accusamus quidem et omnis ea facere. Ex aperiam sit necessitatibus eos ea.', 'http://lorempixel.com/640/480/?28632', 'http://www.runte.com/itaque-doloremque-aut-eaque-magnam-deleniti-adipisci', 2, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(5, 'en', 41, 'sint', 'et-natus-vero-cupiditate-reprehenderit-corporis', 'Dolorum ut asperiores dolores accusantium. Eos eum non et necessitatibus voluptates laboriosam qui. Quae unde ipsam molestias blanditiis consequatur quia.', 'Reiciendis facere omnis veniam esse voluptas hic. Est ea molestiae deleniti laudantium id eum eligendi occaecati. Aut voluptatum qui aperiam cum enim voluptates occaecati. Est eum repudiandae rem voluptatem qui dolorem. Modi blanditiis ducimus voluptate aut aut architecto. Veritatis aperiam harum aperiam et aspernatur cumque. Nisi sunt qui consequuntur est aliquid vel quia voluptatem. Accusamus molestiae dolorem officia. Id facere ut voluptatibus voluptas rerum aut sit minus. Sapiente temporibus molestias similique omnis delectus. Perspiciatis qui est quaerat doloribus. Occaecati blanditiis in placeat et vel est. Fugiat aperiam quia repellendus sed iste ipsam porro. A numquam debitis perspiciatis repellendus.', 'http://lorempixel.com/640/480/?89286', 'http://bosco.biz/consequuntur-nihil-excepturi-accusantium-dolores-fugiat-iste-et', 3, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(6, 'en', 42, 'perspiciatis', 'excepturi-quidem-earum-atque-voluptatem-sed', 'Quidem sunt accusamus omnis rerum accusamus quidem. Sint harum qui at esse eum non pariatur voluptates. Ex eius veritatis sit.', 'Fugit autem sed consectetur. Dicta maxime velit recusandae alias sunt porro. Dolorum sint qui deleniti quas. Veniam iusto enim accusamus non molestiae perferendis illum illum. Veniam quisquam veritatis expedita harum expedita tempore et. Placeat molestias minima qui fuga maxime velit corrupti. Voluptatum quae architecto amet a itaque. Quos similique vel quia qui molestias rerum. Totam ut voluptatem magni ducimus nam quia. Odit ipsum omnis deleniti eligendi maxime esse aperiam. Soluta eum et maxime sit. In sequi natus asperiores nostrum impedit aut ea officiis.', 'http://lorempixel.com/640/480/?41679', 'http://www.price.info/exercitationem-unde-corrupti-quae-atque-tempore.html', 5, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(7, 'en', 42, 'repellat', 'esse-quia-reprehenderit-eum-dolor-corporis-aut-consequatur', 'Quae enim sint expedita non fugiat. Fugiat non pariatur aperiam. Doloremque maiores inventore optio ullam ea.', 'Fugiat et adipisci velit aut ullam laborum magnam. Excepturi laudantium quia maiores sit officia quisquam architecto. Consequuntur aut rem sed rerum distinctio ad. Dignissimos rem placeat voluptates atque occaecati. Incidunt aliquam ut vero vel aperiam nisi. Labore velit ratione molestiae iste. Consequuntur optio dolorum earum ipsam eaque et. Omnis beatae repellendus molestiae dolorem adipisci laudantium repellat. Reprehenderit omnis quisquam eum a. Est velit quis possimus. Natus est voluptas deleniti sed sed. Sed qui quia nesciunt itaque minima repellendus. Fugit molestias sapiente minima at in asperiores.', 'http://lorempixel.com/640/480/?14156', 'http://www.nikolaus.com/blanditiis-ad-earum-suscipit-eveniet', 1, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(8, 'en', 42, 'et', 'consequuntur-ex-et-enim-ipsum-sequi-mollitia', 'Quia aut eaque nobis animi eos. Rerum adipisci qui illum qui ut. Nam perspiciatis voluptas qui quibusdam alias. Dolorum et qui doloremque est ut ea.', 'Quisquam repellendus voluptates et. Nam illum non beatae. Et est recusandae aut a aliquam inventore aspernatur. Quam eveniet magni quibusdam qui est molestiae et. Dignissimos dolor ut omnis dolorem. Libero consequatur eos ipsum sint voluptatem. Non sint minus nihil nihil itaque. Deserunt eos eligendi fugit et in. Velit laborum architecto expedita exercitationem. Voluptas repellat magni est vel. Totam minus aliquid laborum et eum et eos. Aut qui est aperiam quo. Tenetur excepturi voluptates sed voluptas sit.', 'http://lorempixel.com/640/480/?77169', 'http://bode.com/', 2, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(9, 'en', 42, 'quisquam', 'et-voluptatem-tenetur-itaque-et-quo-optio', 'Odit ad magnam nulla ipsa nihil beatae. Porro qui qui accusamus odio. Fugit est alias nihil corrupti alias qui.', 'Dolor nisi quos exercitationem iusto sapiente. Suscipit et illum delectus laborum. Dolores dolorum voluptatem et facilis qui ea adipisci. Sunt omnis impedit perspiciatis repudiandae molestias recusandae distinctio. Quia voluptas quas voluptas a. Eum incidunt modi et provident repellendus maiores nihil. Incidunt earum nisi autem aut rerum repudiandae. Quod harum animi aut nemo dolore. Minima magnam expedita et dolorem vel. Maiores aliquam cumque qui inventore.', 'http://lorempixel.com/640/480/?30965', 'http://www.stracke.com/', 1, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(10, 'en', 42, 'sit', 'incidunt-voluptatibus-maxime-occaecati-aliquid-sint-facere-totam-ex', 'Ducimus ea ratione ullam maiores adipisci est et. Fugit et pariatur similique. Molestiae nihil iste modi ex. Debitis quaerat incidunt quis cum exercitationem sapiente optio.', 'Ipsum excepturi rerum qui et. Aut eos alias laborum ipsam blanditiis. Est voluptas rerum ut culpa. Sit aut repellendus odit expedita. Magni laboriosam quia et repellendus. Similique tempora ad fugit quis. Blanditiis enim vitae provident sed sit et. Delectus nostrum eos ducimus et non natus. Ipsam cupiditate unde qui repellat quia ad. Modi temporibus ullam dolor itaque enim.', 'http://lorempixel.com/640/480/?74066', 'http://www.swaniawski.com/inventore-et-eligendi-ut-et-eveniet', 1, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(11, 'en', 43, 'eos', 'ut-tempore-error-ut-aut-voluptatem-incidunt-ipsum', 'Et eum porro esse. Vitae quos sed dolorum dicta incidunt. Quo hic qui dolore ea perspiciatis placeat sed. Provident dolor id corrupti vel nulla iure.', 'A temporibus corporis soluta eveniet esse vero quis. Odio nesciunt sunt neque voluptatem. Quia quo est porro aliquam eos quibusdam et. Ipsam possimus magnam assumenda velit voluptatem magni. Voluptatem ea doloribus blanditiis similique quis saepe. Dolores libero aut unde architecto fugit molestiae. Enim eaque non iste velit voluptatem in quae. Ducimus velit deserunt veniam qui. Ratione et temporibus cum rerum accusamus odit repellendus. Dignissimos eius nobis quibusdam aut tenetur consequatur.', 'http://lorempixel.com/640/480/?71441', 'http://kub.net/', 5, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(12, 'en', 43, 'rerum', 'dicta-totam-reiciendis-quam-ratione-exercitationem', 'Corrupti vel accusamus aspernatur repellat nemo. Quasi sequi quasi est occaecati nihil porro. Cupiditate eveniet ab fugiat qui possimus magnam ipsam.', 'Vel necessitatibus doloribus aut velit ullam. Necessitatibus libero voluptate ratione. Id expedita sed dolores voluptatem. Placeat autem sint velit. Sint reiciendis maiores voluptatibus adipisci molestias earum. Deserunt eveniet quia accusamus aut aperiam ipsum. Culpa deserunt a laudantium laudantium nihil dolorem culpa quia. Totam aspernatur ut officiis iste. Non ipsa voluptatem ea commodi.', 'http://lorempixel.com/640/480/?13934', 'http://www.mcglynn.net/qui-totam-qui-facere-dolore-sed-illum-et-est', 1, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(13, 'en', 43, 'nisi', 'aliquam-ut-iste-asperiores-omnis', 'Animi facere et facilis minus. Vitae cupiditate tenetur sapiente voluptas possimus numquam praesentium. Ut quibusdam sit sint.', 'Qui eum dolorem dolor quasi voluptates. Voluptatem et quia consequatur sed quibusdam amet. Accusamus ut omnis quia inventore mollitia eum qui. In ea aut atque fuga vitae omnis. Incidunt velit est ea. Et sed quaerat aut illo ipsum rem. Excepturi exercitationem labore illum similique. Accusamus quod tenetur eum voluptates vel rerum quos. Placeat error voluptates odio aut. Ut id sed nisi quia nulla officiis totam. Quae dolorem sunt est molestiae est repudiandae. Sunt voluptatem accusantium itaque et qui enim est. Quia blanditiis tenetur blanditiis.', 'http://lorempixel.com/640/480/?61855', 'http://www.greenfelder.net/', 3, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(14, 'en', 43, 'sed', 'sit-nisi-ut-minima-est-ad-ducimus-est-fugit', 'Voluptatem labore accusamus quas quasi doloremque autem doloremque. Et quia laudantium est veniam. Ut quia voluptates quas.\nDebitis minima ad amet dolor. Minus deleniti ut ullam et.', 'Repellat impedit quo neque error assumenda velit numquam. Facere quas et velit et. Aut facilis quod ut veritatis. Vel eos praesentium eius quam maiores molestias qui voluptas. Distinctio tempore ut nobis officia consequatur officia incidunt. Doloribus vitae est harum. Ipsum quia dolor id ex deleniti sed. Molestiae ullam sed inventore harum ut ut. Aliquam magnam est praesentium nemo necessitatibus. Quia tenetur praesentium sit ut exercitationem officia aliquid. Officia iste aliquid corrupti deleniti. Omnis perferendis numquam iure at.', 'http://lorempixel.com/640/480/?63836', 'http://prosacco.com/delectus-non-accusantium-accusamus-dolores-qui', 5, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(15, 'en', 43, 'et', 'necessitatibus-labore-amet-necessitatibus-perspiciatis-et-possimus', 'Voluptas ullam cum minima atque nobis quia molestiae aut. Est exercitationem nihil explicabo facilis. Consectetur accusantium ea aut.', 'Eum ratione mollitia occaecati voluptatem blanditiis eaque. Et facilis suscipit voluptatem nihil animi magnam doloribus. Adipisci minus magnam odio quisquam. Aperiam sint iure placeat architecto. Excepturi hic quia aut omnis laborum aut. Aut aut repellendus id cum est. Perferendis aut est eum omnis omnis dicta excepturi. Et vel culpa sed sunt eum placeat dolores in. Accusamus officiis voluptatem vero qui rerum quo. Laboriosam delectus aut aut. Voluptas rerum harum ea exercitationem exercitationem rerum repellendus. Accusamus voluptatem accusantium possimus quia et adipisci.', 'http://lorempixel.com/640/480/?88662', 'http://www.lueilwitz.info/', 4, '2017-03-28 12:09:31', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(16, 'en', 44, 'harum', 'nostrum-facilis-at-sunt-quibusdam', 'Repudiandae voluptatibus neque autem tenetur. Id quia consequatur quibusdam pariatur voluptatibus facere. Doloremque qui reprehenderit ea rerum.', 'Earum odit ut modi. Dolorem consequatur iure qui et. Odit voluptate non ipsum nisi qui suscipit. Esse ut sunt omnis velit. Iste asperiores voluptatem voluptatem sit quo et veniam. Sed quas excepturi voluptas iste perferendis. Quaerat occaecati laboriosam molestiae commodi repellendus consequuntur. Voluptatem est iure aperiam consequuntur sed. Laboriosam voluptatem officiis sit exercitationem et adipisci atque eius. Velit quia sit eius voluptatem consectetur quisquam omnis repellendus.', 'http://lorempixel.com/640/480/?35283', 'http://www.romaguera.com/rem-et-quia-aspernatur-neque-pariatur-sit', 4, '2017-03-28 12:09:32', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(17, 'en', 44, 'repellendus', 'maiores-et-reprehenderit-dignissimos-aspernatur', 'Facere iure est quis facere fuga sed. Ut tempore dignissimos corporis necessitatibus neque excepturi totam. Accusamus voluptas reiciendis dolor cum. Laboriosam nesciunt quis ex aspernatur sint et.', 'Beatae amet eos labore facere tempora dolorum ea ipsa. Molestiae veniam temporibus laboriosam quas in similique veritatis. Mollitia quam eum id eligendi omnis. Deleniti laudantium error et consequuntur sed ea. Earum non aliquam temporibus expedita atque optio accusamus. Illum rem est qui beatae ipsa voluptatem explicabo. Asperiores ducimus laborum eligendi aut ut. Eligendi sapiente eos odio qui voluptatum nobis. Quod cumque magni occaecati.', 'http://lorempixel.com/640/480/?60758', 'http://www.strosin.com/illum-aut-placeat-labore-at-sit-sint-numquam.html', 2, '2017-03-28 12:09:32', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(18, 'en', 44, 'voluptas', 'numquam-sequi-magnam-omnis', 'Laboriosam corporis aliquam sint sint ea. Nihil voluptate quia eum labore error atque nisi consequatur. Non voluptatum praesentium tenetur debitis libero voluptatem voluptatem.', 'Culpa cumque quia quos fugit quia at nobis. Quisquam eos earum omnis aut rem necessitatibus et. Impedit ut accusantium sequi eum qui. Id fuga hic labore libero non. Accusantium quia iusto ipsum qui neque. Ut ut eveniet est aliquam aperiam est. Provident non quia amet non quas saepe dolore.', 'http://lorempixel.com/640/480/?27897', 'http://www.hagenes.com/modi-distinctio-pariatur-sint-sit-modi-enim-voluptatem.html', 4, '2017-03-28 12:09:32', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(19, 'en', 44, 'vel', 'fugit-hic-aut-alias-minima', 'Necessitatibus officia ullam quae cum. Dolorum quia cupiditate voluptatem sapiente voluptatibus et. Aliquam voluptatem ea ut in voluptatem maiores et.', 'Est omnis velit neque possimus sint deserunt vel. Facilis odio similique blanditiis magni. Voluptates quia vel sequi in consequatur aperiam. Rem provident odit ut omnis nostrum. Incidunt explicabo atque accusamus sunt consequatur quia. Ut quod necessitatibus rerum dignissimos odit quisquam et praesentium. Aut aliquid perferendis dicta quod. Iste harum beatae vel voluptates qui. Saepe accusamus fugit mollitia qui vel veritatis. Ex iure fuga velit aut. Corporis expedita possimus velit sunt. Ea dolores asperiores ut reiciendis. Sed tenetur aut impedit aut.', 'http://lorempixel.com/640/480/?86425', 'http://glover.com/incidunt-reprehenderit-voluptatibus-quod-accusantium-aut.html', 4, '2017-03-28 12:09:32', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(20, 'en', 44, 'nihil', 'qui-molestias-culpa-qui-sunt-officia', 'Qui ipsum consequatur ut consequatur enim amet. Eum consequuntur autem et aperiam dignissimos ullam. Est aut qui eum esse commodi natus. Repudiandae ut id voluptas quae et.', 'Dolor voluptatum ut sed vel. Ut autem consequatur fugiat repudiandae. Sit aut quibusdam quos autem corrupti voluptatem molestiae maiores. Consequatur ratione iste nisi blanditiis autem debitis. Perspiciatis ut recusandae quasi voluptas saepe omnis magnam. Nobis consectetur sed perferendis harum odit. Molestiae rerum numquam atque nulla autem commodi. Nisi totam a magnam et voluptatem. Sed porro in saepe illo ut.', 'http://lorempixel.com/640/480/?97542', 'https://www.buckridge.com/et-autem-assumenda-aperiam-voluptas-natus-earum-minima', 5, '2017-03-28 12:09:32', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(21, 'en', 45, 'at', 'nulla-et-veritatis-veniam-aut-doloremque', 'Et in eos possimus amet id qui dolor. Laudantium ut autem alias quaerat. Rerum voluptatem animi veritatis. Nobis praesentium doloremque quidem debitis.', 'Doloremque error non cupiditate ratione. Et optio nesciunt perferendis quidem suscipit. A qui nihil alias dolores non. Quia libero dignissimos ut voluptates nesciunt. Eveniet dicta quas reiciendis quod possimus necessitatibus. Iusto ut culpa porro ut. Soluta pariatur ratione ut magni saepe sed. Quidem officiis ut laboriosam quia deleniti et. Omnis odit odit sequi facilis dolores deserunt unde. Perferendis ad et a. Vero quo eligendi adipisci quia voluptas reiciendis delectus. Non rerum facilis cumque rerum. Eum voluptatem mollitia odio adipisci autem.', 'http://lorempixel.com/640/480/?57094', 'http://www.shields.com/voluptas-repellendus-praesentium-dolorem', 3, '2017-03-28 12:09:32', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(22, 'en', 45, 'qui', 'repellendus-illum-quia-sequi-voluptas-et-beatae-perspiciatis', 'Fugiat expedita nesciunt sit et fuga inventore natus. Voluptatibus sunt cum earum similique adipisci. Qui possimus laborum qui at rerum. Ipsa porro quisquam dicta soluta.', 'Consectetur odit sequi omnis et est vel. Et qui id alias nostrum qui nihil. Praesentium quia dolorem tenetur consequatur quod. Nam maxime ut sunt in illum. Harum sapiente blanditiis sint. Dolores aut hic repellat sed est. Accusantium minus iusto doloremque consequatur aut iure. Sed eos quod rem adipisci reiciendis sequi. Fugit adipisci corrupti qui commodi et.', 'http://lorempixel.com/640/480/?56511', 'http://www.wisoky.com/omnis-aut-fugit-cupiditate-ab-sunt', 3, '2017-03-28 12:09:32', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(23, 'en', 45, 'impedit', 'laboriosam-dolorem-et-molestiae-eveniet-architecto', 'Voluptatem voluptatem natus vel voluptatem exercitationem et. Facilis qui cumque ducimus vel deleniti aut. Sed labore sunt et laborum.', 'Et est consectetur nihil voluptas architecto est quisquam. Dolores eius quod esse. Quo dolores voluptatem sed odio ullam. Nisi qui libero et architecto tenetur ut in dolor. Rerum ea sint et ullam dolorem in nihil. Rerum ipsum occaecati tempore quo nulla. Tempora ut libero eum totam hic cumque eum.', 'http://lorempixel.com/640/480/?15556', 'http://schimmel.com/', 2, '2017-03-28 12:09:32', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(24, 'en', 45, 'iusto', 'quisquam-quis-eius-omnis-ex-assumenda-odit', 'Suscipit eos sit eum ad voluptatem. Ad commodi quae eos nostrum. Voluptas at quis enim voluptas aut molestias mollitia. Natus sint quasi repellendus ducimus odit quidem.', 'Exercitationem vitae delectus id et architecto deserunt sed. Deleniti perspiciatis adipisci sunt accusamus. Voluptatum consequatur similique autem dolores sint magni in. Labore impedit velit aut. Optio nulla harum veniam dolore maiores nisi. Doloribus soluta est aspernatur ut labore sunt. Pariatur vel voluptatem aut amet. Nisi illum sed exercitationem odio aut et rerum. A id amet voluptas velit alias voluptatem error perspiciatis. Rerum quibusdam aliquam molestias molestiae ut. Deleniti repudiandae labore qui vel eius. Doloribus esse et expedita qui modi facilis omnis. Et repudiandae laborum molestiae sapiente neque temporibus.', 'http://lorempixel.com/640/480/?89589', 'http://www.cassin.com/voluptas-provident-illum-aliquid-blanditiis-sed-quia-earum', 4, '2017-03-28 12:09:32', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(25, 'en', 45, 'at', 'impedit-cupiditate-assumenda-aperiam-aliquam-esse-officiis-ullam', 'Et reprehenderit reprehenderit vel et. Sit et in ipsum sequi voluptatem aut. Repellendus architecto ducimus ea consequatur officia.', 'Autem sed praesentium sunt non provident veritatis totam. Itaque et enim fugiat. Voluptas est aut vero. Eum et voluptatem corrupti molestiae ducimus at. Possimus non at corrupti in. Magnam sit et est similique inventore qui quaerat. In sed odit et reiciendis. Et optio vel commodi tempore voluptatem et ipsum. Quo cupiditate sed iure itaque voluptas.', 'http://lorempixel.com/640/480/?12950', 'http://www.homenick.com/', 2, '2017-03-28 12:09:32', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE IF NOT EXISTS `post_categories` (
  `category_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`category_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(2, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(3, 2, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(4, 2, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(5, 3, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(6, 3, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(7, 4, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(8, 4, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(9, 5, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(10, 5, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(11, 6, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(12, 6, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(13, 7, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(14, 7, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(15, 8, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(16, 8, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(17, 9, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(18, 9, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(19, 10, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(20, 10, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(21, 11, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(22, 11, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(23, 12, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(24, 12, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(25, 13, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(26, 13, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(27, 14, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(28, 14, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(29, 15, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(30, 15, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(31, 16, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(32, 16, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(33, 17, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(34, 17, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(35, 18, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(36, 18, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(37, 19, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(38, 19, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(39, 20, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(40, 20, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(41, 21, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(42, 21, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(43, 22, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(44, 22, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(45, 23, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(46, 23, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(47, 24, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(48, 24, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(49, 25, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(50, 25, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE IF NOT EXISTS `post_tags` (
  `tag_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`tag_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(2, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(3, 2, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(4, 2, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(5, 3, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(6, 3, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(7, 4, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(8, 4, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(9, 5, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(10, 5, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(11, 6, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(12, 6, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(13, 7, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(14, 7, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(15, 8, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(16, 8, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(17, 9, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(18, 9, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(19, 10, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(20, 10, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(21, 11, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(22, 11, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(23, 12, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(24, 12, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(25, 13, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(26, 13, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(27, 14, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(28, 14, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(29, 15, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(30, 15, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(31, 16, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(32, 16, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(33, 17, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(34, 17, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(35, 18, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(36, 18, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(37, 19, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(38, 19, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(39, 20, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(40, 20, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(41, 21, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(42, 21, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(43, 22, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(44, 22, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(45, 23, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(46, 23, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(47, 24, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(48, 24, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(49, 25, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(50, 25, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `presses`
--

CREATE TABLE IF NOT EXISTS `presses` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `is_erasable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presses`
--

INSERT INTO `presses` (`id`, `lang`, `title`, `slug`, `text`, `image`, `link`, `is_visible`, `is_erasable`, `created_at`, `updated_at`) VALUES
(1, 'en', 'saepe', 'enim-incidunt-placeat-et-ab-quos-hic-ut', 'Eos quidem iure minima iusto voluptatem. Qui quae officiis voluptatem. Voluptas ut voluptatem sint eius.', 'http://lorempixel.com/640/480/?84023', 'http://www.cartwright.com/ut-iusto-dolorem-sit-ipsam-possimus-consequuntur.html', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(2, 'en', 'voluptatem', 'voluptatum-eius-et-maiores-ut-repellat-est-officia-provident', 'Placeat facere quam quam. Quia repellat eaque iure qui. Vitae enim commodi blanditiis quia sapiente et. Sequi aperiam tempora assumenda.', 'http://lorempixel.com/640/480/?70248', 'http://collins.info/accusamus-veritatis-in-in-rem-porro-doloremque-vitae.html', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(3, 'en', 'molestiae', 'delectus-perferendis-laboriosam-eos-modi-officia-consequatur', 'Ipsa amet reprehenderit consequatur voluptatem. Neque molestiae cumque expedita quasi enim fugit. Tempore aut sed similique. Consequatur quia voluptas numquam aut architecto.', 'http://lorempixel.com/640/480/?12631', 'https://www.hayes.biz/id-quia-culpa-rerum', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(4, 'en', 'ratione', 'veniam-voluptatem-quae-id-et-alias-perspiciatis', 'Delectus ut vel sit explicabo velit ea neque. Molestiae facere voluptatem voluptas sapiente. At sapiente nesciunt dolore eius dolores aliquid tempore.', 'http://lorempixel.com/640/480/?59051', 'https://www.keebler.com/qui-ipsum-omnis-deserunt-quas-nemo', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(5, 'en', 'ab', 'enim-eos-optio-illo-et', 'Similique debitis dicta quis ut cum recusandae. In perspiciatis rerum aliquam error voluptate. Velit accusamus sequi quis sit. Consequatur iusto aut rerum deserunt vero.', 'http://lorempixel.com/640/480/?75217', 'http://www.welch.net/velit-hic-odit-alias-harum-neque-vitae.html', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(6, 'en', 'eveniet', 'et-adipisci-fugit-nobis-error-et', 'Expedita et et reprehenderit et iusto. Non consequatur quia non. Deserunt velit quia et exercitationem temporibus asperiores officiis et.', 'http://lorempixel.com/640/480/?48668', 'http://www.price.com/est-non-suscipit-veritatis-ullam', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(7, 'en', 'voluptate', 'a-nemo-et-deserunt-et', 'Animi nesciunt accusantium harum est. Enim enim dolorem magnam tempora. Aut ratione beatae sed modi esse et ut voluptatibus.', 'http://lorempixel.com/640/480/?71353', 'http://www.kertzmann.com/molestiae-eum-quia-et-et', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(8, 'en', 'neque', 'quod-est-veritatis-dolorum-et-laudantium-dolor-quibusdam', 'Consequuntur aut expedita aut. Quod laboriosam odit dolorum consequatur. Ab qui qui excepturi harum.\nEt est deleniti ipsa quod est similique. Aut nihil et molestias dolorem possimus ut.', 'http://lorempixel.com/640/480/?20067', 'https://www.bins.info/aut-assumenda-delectus-eum-est', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(9, 'en', 'sint', 'et-dicta-reiciendis-consequuntur-maxime', 'Est necessitatibus accusantium autem asperiores. Velit beatae quia sed dolorem et aut atque dolores. Consequatur eveniet eius consectetur nesciunt. Saepe ut et est ullam sint at iusto modi.', 'http://lorempixel.com/640/480/?70530', 'http://mccullough.biz/quasi-suscipit-est-repellendus-molestias-hic-voluptatem', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(10, 'en', 'consequatur', 'cumque-totam-fugiat-non-dolorem-adipisci-consequatur-exercitationem', 'Vel dolorem corrupti qui quod est consequatur qui. Aut esse labore eos quis soluta numquam. Similique et voluptatum corrupti perferendis libero.', 'http://lorempixel.com/640/480/?98617', 'https://hegmann.net/quam-velit-illo-quos-eos.html', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(11, 'en', 'laborum', 'possimus-autem-dignissimos-mollitia-aut-ut', 'Quaerat nemo iusto enim ut. Occaecati voluptatem delectus dolorem quae amet dicta. Officiis fugit temporibus est et ducimus odio.', 'http://lorempixel.com/640/480/?94837', 'http://hudson.com/', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(12, 'en', 'dolor', 'repellat-dolorem-enim-sunt-et-tempore-doloribus-et', 'Rerum id voluptatem incidunt quaerat alias et. Laboriosam ut libero ut. Consequuntur quas enim autem. Temporibus quidem tempora ut at esse sint.', 'http://lorempixel.com/640/480/?80541', 'http://www.balistreri.com/', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(13, 'en', 'placeat', 'et-rerum-consequatur-eos-nisi-nam-blanditiis', 'Quam aut sint sit id. Fugiat quia consequatur iusto. Numquam sint eos aut laboriosam aut.\nNihil placeat cumque iusto unde. Harum aperiam similique saepe. Et voluptatem porro ut qui tempora quo et.', 'http://lorempixel.com/640/480/?16702', 'https://gleason.com/ut-quos-omnis-nostrum-optio-reiciendis.html', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(14, 'en', 'asperiores', 'voluptas-similique-adipisci-maxime-vitae', 'Id doloremque nemo inventore quia est. Qui ut earum sed qui harum tenetur. Eius eum unde error quasi iusto.', 'http://lorempixel.com/640/480/?38854', 'http://www.kemmer.net/quo-tenetur-aut-autem-commodi', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(15, 'en', 'modi', 'optio-excepturi-omnis-placeat-vero-hic-dolores-illo', 'Ut sed tempore aperiam tempore. Animi asperiores et fuga perspiciatis est. Eum blanditiis aut aliquid ipsum.', 'http://lorempixel.com/640/480/?45333', 'https://mann.com/ullam-harum-quia-eaque-commodi-ea-laboriosam-quasi.html', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(16, 'en', 'natus', 'eaque-voluptas-velit-veniam-culpa-blanditiis-nulla', 'Ipsam deserunt nihil culpa qui est. Illo sed odio corporis ratione repellendus minus animi. Itaque ducimus tempora consequuntur. Eum sed praesentium molestias dolore.', 'http://lorempixel.com/640/480/?78138', 'https://www.hagenes.biz/consequatur-modi-architecto-exercitationem-soluta-omnis-est', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(17, 'en', 'libero', 'iure-omnis-quia-enim-nemo', 'Provident saepe est fugiat. Qui id voluptatibus repellat ut eius quibusdam eos. Mollitia et perferendis pariatur. Culpa explicabo omnis eum ut cupiditate.', 'http://lorempixel.com/640/480/?87162', 'http://runte.biz/amet-iste-omnis-quam-id', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(18, 'en', 'iste', 'eveniet-aliquam-temporibus-dicta-unde-dolore', 'Magnam laudantium pariatur deleniti qui. Sint rem qui a vel maiores. Explicabo molestias quia non est. Reiciendis dolore laboriosam eligendi enim non architecto.', 'http://lorempixel.com/640/480/?29496', 'http://www.casper.org/', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(19, 'en', 'doloribus', 'iusto-eveniet-rerum-qui-ex-dignissimos', 'Placeat vero illum quaerat suscipit. Aut voluptates repellendus modi eaque quia eos. Et ut facilis et debitis est nam.', 'http://lorempixel.com/640/480/?60097', 'http://quigley.net/doloribus-et-reiciendis-aut-deleniti-culpa', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(20, 'en', 'possimus', 'exercitationem-sint-nemo-dolorem-aperiam-unde-molestiae', 'Maiores sit consequatur velit et. Aliquam enim corporis minus animi culpa. Totam delectus est voluptatem totam quia. Blanditiis voluptas rerum consequatur qui unde deserunt nisi.', 'http://lorempixel.com/640/480/?41832', 'https://glover.net/et-autem-similique-consequatur-praesentium-illum-a.html', 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'completed',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `lang`, `status`, `title`, `slug`, `text`, `date`, `created_at`, `updated_at`) VALUES
(1, 'en', 'completed', 'non', 'est-et-dolorem-facere-aliquid-est-iste-dolores-in', 'Aliquam aut soluta consequatur sint cum. Veritatis aperiam ullam mollitia aliquam quo enim. Laboriosam hic atque delectus. Enim ea omnis eveniet architecto.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(2, 'en', 'completed', 'est', 'sit-aut-voluptates-incidunt-nostrum-adipisci-corrupti-magni-expedita', 'Qui sint tenetur qui quia provident beatae perferendis. Et illum et impedit. Mollitia fugit sint necessitatibus nihil illum. Velit et autem illum consequatur excepturi dolore ex.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(3, 'en', 'completed', 'fugiat', 'eum-aliquid-repudiandae-aut-natus-est', 'Sit voluptas laborum voluptatem est dignissimos sunt. Et odio mollitia ipsa laudantium in. Doloribus necessitatibus ut qui illum nihil reiciendis. Alias ratione mollitia velit autem ut velit vel.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(4, 'en', 'completed', 'et', 'et-laborum-inventore-cum-impedit-nemo-eos-commodi-non', 'Officiis eius voluptas quod laudantium saepe fugiat. Blanditiis reprehenderit rerum vitae et autem nihil dolores. Velit non exercitationem temporibus nulla necessitatibus architecto ut.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(5, 'en', 'completed', 'non', 'deserunt-eos-suscipit-debitis-assumenda-et-et', 'Reprehenderit itaque earum nulla maxime dolores. Tempora placeat harum eius doloremque hic aut.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(6, 'en', 'completed', 'harum', 'hic-ipsa-totam-quo-doloribus', 'Reprehenderit ipsum quo aliquid mollitia. Itaque autem ut dolor odio laudantium. Nostrum sapiente quisquam ut ut.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(7, 'en', 'completed', 'debitis', 'pariatur-quia-dignissimos-maxime-necessitatibus-ullam', 'Necessitatibus autem dolores nobis odio. Optio voluptates autem voluptatibus quibusdam nisi velit facere maxime. Nam rerum qui sit sequi.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(8, 'en', 'completed', 'fuga', 'quaerat-quia-delectus-quia-vel', 'Eos sit consectetur quibusdam velit esse cum assumenda. Qui et excepturi velit aut veniam. Sit dolorum consequatur eveniet quaerat cum accusantium quo. Sit itaque adipisci minima placeat adipisci.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(9, 'en', 'completed', 'architecto', 'maiores-et-adipisci-doloremque-impedit-reprehenderit-consequatur-ipsum', 'Et sed repellendus temporibus quo molestias eveniet iusto natus. Et vitae dolorem architecto earum cum hic non. Reiciendis sit enim aut. Libero rem dolor laboriosam. Impedit aut minus et quis.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(10, 'en', 'completed', 'harum', 'est-aut-quaerat-reiciendis-quis-magnam-ea', 'Fugiat unde sed sequi reiciendis eum vero. Consequatur in dolorem commodi. Autem illum praesentium et reprehenderit exercitationem possimus. Ipsa provident provident ut iste provident est.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(11, 'en', 'completed', 'dolor', 'quidem-quibusdam-nemo-ut-dolor', 'Molestiae quis quod repudiandae cum. Nesciunt consequuntur a ratione et dolorum.\nIllum maxime ut velit totam. Adipisci repudiandae odit corrupti amet vel.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(12, 'en', 'completed', 'accusamus', 'dicta-ex-dolorem-nam', 'Deleniti quo consectetur aliquid rerum libero. Tenetur illo voluptatem aut et qui doloremque sequi est.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(13, 'en', 'completed', 'tempore', 'ipsa-qui-in-eos-non', 'Aut deleniti voluptatem vel quasi. Doloribus maiores ea at nemo dolor repellat qui. Quae est fugiat ipsum vero autem ipsum rerum molestiae.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(14, 'en', 'completed', 'distinctio', 'dolores-odio-quae-quaerat-ut', 'At provident omnis natus facilis ad magni aliquid labore. Qui ut itaque aut non tempora. Aut perferendis quia maxime rem ea.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(15, 'en', 'completed', 'et', 'qui-quos-sunt-sequi-sunt-alias', 'Nesciunt aperiam qui ut odit autem et. Qui sint molestiae est mollitia quod atque hic voluptas. Nihil qui nisi voluptatem sunt asperiores incidunt sed. Expedita quasi cum sit minima nesciunt magni.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(16, 'en', 'completed', 'in', 'autem-explicabo-voluptatem-voluptas-dolorem', 'Atque inventore dolores non voluptatem nostrum maiores. Veritatis quam quod ipsum sed quo. Et quos dignissimos vel placeat in. Qui tenetur quos sit quia fuga consequatur.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(17, 'en', 'completed', 'delectus', 'neque-dolores-quam-incidunt-consectetur', 'Ullam et a voluptate cupiditate est nobis et. Architecto est ea mollitia voluptas labore. Quia sed neque aliquid aliquid est omnis.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(18, 'en', 'completed', 'temporibus', 'rerum-illum-dolor-culpa-modi-minus-ut', 'Vel aut et qui laboriosam et. Sit animi omnis similique dolor rerum molestias.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(19, 'en', 'completed', 'sequi', 'voluptatibus-voluptate-aut-quasi-voluptatibus', 'Beatae nostrum quo iste sunt et est quod. Deserunt et omnis suscipit est repudiandae non. Adipisci repellat laboriosam unde voluptates commodi velit totam.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(20, 'en', 'completed', 'aliquid', 'voluptas-excepturi-omnis-voluptas', 'Incidunt qui quaerat libero cupiditate qui modi rerum. Provident doloribus vero nostrum quia cum vel. Ut quae sed sit nemo provident sequi autem.', '2017-03-28 12:09:32', '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'developer', 'Developer', 'developer', NULL, NULL),
(2, 'editor', 'Editor', 'editor', NULL, NULL),
(3, 'admin', 'Admin', 'admin', NULL, NULL),
(4, 'user', 'User', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL,
  `group` varchar(45) COLLATE utf8_unicode_ci DEFAULT 'global',
  `index` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci DEFAULT 'text'
) ENGINE=InnoDB AUTO_INCREMENT=9013 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `group`, `index`, `value`, `type`) VALUES
(5, 'contact', 'Is_contact_available', '1', 'booleon'),
(6, 'contact', 'Email', 'info@guncebektas.com', 'text'),
(7, 'contact', 'Phone_1', '5555555556', 'text'),
(8, 'contact', 'Phone_2', NULL, 'text'),
(9, 'contact', 'Phone_3', NULL, 'text'),
(10, 'contact', 'Fax', '6666666666', 'text'),
(11, 'contact', 'Address', 'example address information', 'text'),
(12, 'contact', 'City', 'İzmir', 'text'),
(13, 'contact', 'Country', 'Türkiye', 'text'),
(14, 'contact', 'Location', '38.40625379485267,27.147216796875', 'map'),
(101, 'general', 'Site_name', 'ElvinCMS', 'text'),
(102, 'general', 'Site_logo', NULL, 'finder'),
(103, 'general', 'Maintenance_mode', '0', 'booleon'),
(104, 'general', 'Construction_mode', '0', 'booleon'),
(105, 'general', 'Multi_language', '0', 'booleon'),
(515, 'social', 'Facebook_page', '#123', 'text'),
(516, 'social', 'Twitter_page', '#', 'text'),
(517, 'social', 'Linkedin_page', '#', 'text'),
(518, 'social', 'Google+_page', '#', 'text'),
(519, 'social', 'Youtube_page', '#', 'text'),
(520, 'social', 'Pinterest_page', '#', 'text'),
(521, 'social', 'Instagram_page', '#', 'text'),
(522, 'social', 'Freelancer_page', '#', 'text'),
(523, 'social', 'Github_page', '#', 'text'),
(9000, 'modules', 'Dynamic_string_module', '1', 'booleon'),
(9001, 'modules', 'Page_module', '1', 'booleon'),
(9002, 'modules', 'Blog_module', '1', 'booleon'),
(9003, 'modules', 'Gallery_module', '1', 'booleon'),
(9004, 'modules', 'Slide_module', '1', 'booleon'),
(9005, 'modules', 'Menu_module', '0', 'booleon'),
(9006, 'modules', 'Faq_module', '1', 'booleon'),
(9007, 'modules', 'Popup_module', '1', 'booleon'),
(9008, 'modules', 'Testimonials_module', '1', 'booleon'),
(9009, 'modules', 'Project_module', '1', 'booleon'),
(9010, 'modules', 'Event_module', '1', 'booleon'),
(9011, 'modules', 'User_module', '1', 'booleon'),
(9012, 'modules', 'Press_module', '1', 'booleon');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `is_erasable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `is_visible`, `is_erasable`, `created_at`, `updated_at`) VALUES
(1, 'voluptates', 1, 1, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(2, 'in', 1, 1, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(3, 'voluptatum', 1, 1, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(4, 'officiis', 1, 1, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(5, 'nihil', 1, 1, '2017-03-28 12:09:10', '2017-03-28 12:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `slide_items`
--

CREATE TABLE IF NOT EXISTS `slide_items` (
  `id` int(10) unsigned NOT NULL,
  `slide_id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_items`
--

INSERT INTO `slide_items` (`id`, `slide_id`, `image`, `order`, `created_at`, `updated_at`) VALUES
(1, 1, 'http://lorempixel.com/640/480/?28399', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(2, 1, 'http://lorempixel.com/640/480/?42029', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(3, 1, 'http://lorempixel.com/640/480/?81361', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(4, 1, 'http://lorempixel.com/640/480/?29009', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(5, 2, 'http://lorempixel.com/640/480/?16405', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(6, 2, 'http://lorempixel.com/640/480/?83950', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(7, 2, 'http://lorempixel.com/640/480/?81278', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(8, 2, 'http://lorempixel.com/640/480/?27229', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(9, 3, 'http://lorempixel.com/640/480/?51155', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(10, 3, 'http://lorempixel.com/640/480/?74535', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(11, 3, 'http://lorempixel.com/640/480/?44209', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(12, 3, 'http://lorempixel.com/640/480/?25625', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(13, 4, 'http://lorempixel.com/640/480/?18598', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(14, 4, 'http://lorempixel.com/640/480/?85222', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(15, 4, 'http://lorempixel.com/640/480/?13798', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(16, 4, 'http://lorempixel.com/640/480/?99688', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(17, 5, 'http://lorempixel.com/640/480/?73306', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(18, 5, 'http://lorempixel.com/640/480/?21084', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(19, 5, 'http://lorempixel.com/640/480/?65043', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(20, 5, 'http://lorempixel.com/640/480/?44658', 0, '2017-03-28 12:09:10', '2017-03-28 12:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `slide_item_details`
--

CREATE TABLE IF NOT EXISTS `slide_item_details` (
  `id` int(10) unsigned NOT NULL,
  `slide_item_id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_item_details`
--

INSERT INTO `slide_item_details` (`id`, `slide_item_id`, `lang`, `caption`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'et', 'http://russel.com/', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(2, 2, 'en', 'quidem', 'http://hamill.com/non-iste-accusamus-omnis', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(3, 3, 'en', 'debitis', 'http://wolf.org/', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(4, 4, 'en', 'pariatur', 'http://www.ryan.info/debitis-neque-a-illum-et-aut', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(5, 5, 'en', 'est', 'http://kub.com/odit-voluptates-minus-et-pariatur-aut-corporis-perferendis-et', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(6, 6, 'en', 'aspernatur', 'http://corwin.com/ex-quis-dolor-temporibus-nisi', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(7, 7, 'en', 'ut', 'http://hansen.org/qui-omnis-inventore-et-ipsam-eum-ea-consequatur', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(8, 8, 'en', 'ratione', 'http://www.swaniawski.com/aut-in-eligendi-enim-facilis-rerum-labore-vitae', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(9, 9, 'en', 'at', 'http://www.legros.com/consectetur-veniam-reprehenderit-dolorum-qui', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(10, 10, 'en', 'debitis', 'https://www.kutch.com/veniam-deserunt-et-dolor', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(11, 11, 'en', 'ab', 'http://mayer.com/aperiam-vitae-sed-cumque.html', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(12, 12, 'en', 'unde', 'https://altenwerth.info/saepe-ab-rerum-harum-nemo-consectetur-ullam-repellendus.html', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(13, 13, 'en', 'voluptatem', 'http://www.mraz.net/ab-provident-ea-quae-eos.html', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(14, 14, 'en', 'incidunt', 'http://grant.org/ut-atque-commodi-nemo-est-tenetur-suscipit-eius.html', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(15, 15, 'en', 'id', 'https://www.rutherford.com/harum-praesentium-officiis-assumenda-blanditiis-est', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(16, 16, 'en', 'dolores', 'http://www.lesch.com/vel-eum-libero-deleniti-eos-autem-dignissimos-mollitia', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(17, 17, 'en', 'ducimus', 'http://www.ebert.com/debitis-est-voluptatem-sunt-recusandae', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(18, 18, 'en', 'rem', 'http://gottlieb.com/quas-a-non-accusantium-nobis-et-aperiam.html', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(19, 19, 'en', 'nostrum', 'http://johnston.com/et-consequatur-error-qui-possimus-cupiditate.html', '2017-03-28 12:09:10', '2017-03-28 12:09:10'),
(20, 20, 'en', 'sit', 'http://mccullough.net/id-quos-architecto-in-fugit-ut-hic-aut.html', '2017-03-28 12:09:10', '2017-03-28 12:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `lang`, `name`) VALUES
(1, 'en', 'excepturi'),
(2, 'en', 'consectetur'),
(3, 'en', 'consequuntur'),
(4, 'en', 'aut'),
(5, 'en', 'eligendi'),
(6, 'en', 'similique'),
(7, 'en', 'ut'),
(8, 'en', 'illo'),
(9, 'en', 'sunt'),
(10, 'en', 'qui'),
(11, 'en', 'ea'),
(12, 'en', 'et'),
(13, 'en', 'sequi'),
(14, 'en', 'voluptatibus'),
(15, 'en', 'velit'),
(16, 'en', 'eaque'),
(17, 'en', 'quis'),
(18, 'en', 'dolores'),
(19, 'en', 'totam'),
(20, 'en', 'ratione'),
(21, 'en', 'incidunt'),
(22, 'en', 'nisi'),
(23, 'en', 'temporibus'),
(24, 'en', 'animi'),
(25, 'en', 'voluptas'),
(26, 'en', 'velit'),
(27, 'en', 'eaque'),
(28, 'en', 'tempora'),
(29, 'en', 'vero'),
(30, 'en', 'nulla'),
(31, 'en', 'numquam'),
(32, 'en', 'animi'),
(33, 'en', 'voluptas'),
(34, 'en', 'harum'),
(35, 'en', 'enim'),
(36, 'en', 'harum'),
(37, 'en', 'ut'),
(38, 'en', 'molestiae'),
(39, 'en', 'vitae'),
(40, 'en', 'ullam'),
(41, 'en', 'voluptate'),
(42, 'en', 'rerum'),
(43, 'en', 'suscipit'),
(44, 'en', 'nihil'),
(45, 'en', 'quod'),
(46, 'en', 'et'),
(47, 'en', 'est'),
(48, 'en', 'est'),
(49, 'en', 'rerum'),
(50, 'en', 'aut');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `is_erasable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `lang`, `text`, `person`, `is_approved`, `is_visible`, `is_erasable`, `created_at`, `updated_at`) VALUES
(1, 'en', 'Illo minus et quidem omnis voluptatum nisi. Qui sunt magnam exercitationem aliquid libero. Esse dolores doloribus veniam omnis saepe. Voluptas qui pariatur excepturi corrupti est nulla.', 'Augustus Monahan', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(2, 'en', 'Et quasi repellat eos minima est. Et ut nihil optio quidem.', 'Wyatt Mayer', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(3, 'en', 'Praesentium molestiae quisquam et ipsam repellendus enim. Occaecati blanditiis similique deleniti vel aut et quo ad. Et asperiores architecto sit ea magnam.', 'Ebony Auer', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(4, 'en', 'Incidunt voluptatem molestiae impedit eos enim sed. Vel qui a quam ut. Sit alias dolor dolores tempora maxime qui error.', 'Nickolas Ebert', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(5, 'en', 'Quo consequatur quidem error ducimus quia exercitationem. Sed qui aut occaecati consequatur debitis molestias. Et autem optio dolorem non enim.', 'Ms. Gabriella Schamberger', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(6, 'en', 'Consequatur ipsam et quisquam molestias quidem. Cum ut quisquam amet deleniti architecto est libero. Sed sit qui quam facere.', 'Prof. Gerard Schultz V', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(7, 'en', 'Odit qui explicabo sed aperiam qui. Quia vel aspernatur culpa ab quia rem consectetur. Harum voluptatibus accusamus sint quod sit. Architecto eaque beatae qui iste.', 'Mr. Florencio Lebsack V', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(8, 'en', 'Recusandae et nisi aliquam dolorum. Voluptatem consequuntur ducimus doloremque nihil cupiditate temporibus. Iste adipisci dolor maiores optio. Expedita labore minima eaque repellendus ut et.', 'Blaze Doyle', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(9, 'en', 'Quidem autem quasi deserunt aut. Vel a veniam voluptas quia labore sed quibusdam placeat. Possimus consequatur ab aspernatur nesciunt.', 'Ms. Neoma Mitchell', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(10, 'en', 'Et nesciunt saepe laborum velit qui. Ipsum non consectetur nihil laborum. Laboriosam distinctio quia et delectus facilis sunt.', 'Magali Weber', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(11, 'en', 'Aut perspiciatis atque magnam saepe nihil voluptatem et. Perferendis tempore dolor mollitia est nesciunt facilis.', 'Ms. Shawna Cummerata', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(12, 'en', 'Aliquid magnam et est blanditiis harum. Dolor libero qui odio neque ea amet voluptatibus. Possimus aut sit mollitia non dolores amet. In qui animi rerum quis.', 'Rosendo Sporer', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(13, 'en', 'Et dolor commodi excepturi illo aut. Eos et iste in amet. Voluptatem quae aut similique optio sequi delectus velit.\nIpsam iure ut autem accusamus. Aliquam maxime debitis et laudantium placeat.', 'Mrs. Mina Erdman', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(14, 'en', 'Rem debitis consequatur necessitatibus error unde aliquam deserunt. Vero quo fugit aut doloremque fugit. Est harum repudiandae et illum suscipit necessitatibus et.', 'Misael Jast', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(15, 'en', 'Tempore rerum ea qui aut a velit. Facere ducimus qui est dolore voluptates ut voluptates sit. Necessitatibus fugit est eius sunt soluta. Ea soluta officiis velit quas iusto et.', 'Dr. Clyde Bins', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(16, 'en', 'Esse labore nobis exercitationem ipsa. Deleniti quo laudantium qui eum voluptas excepturi voluptatem. Sit ipsam nemo debitis.', 'Prof. Kaylee Paucek', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(17, 'en', 'A hic quia et quam occaecati. Delectus accusamus quae iste dolores itaque unde. Et illo sit mollitia. Unde ad ut est quibusdam et ea rerum.', 'Ollie Schaden', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(18, 'en', 'Ut velit aut ex eum nihil. Aperiam qui est repellat aut.\nDebitis ab recusandae rerum provident at officiis et. Ea fugit error amet. Esse voluptas blanditiis iste quasi.', 'Prof. Jalen Weissnat III', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(19, 'en', 'Ut in tenetur eaque voluptates dicta incidunt id voluptas. Quos nostrum et consequatur illo earum quam. Asperiores numquam quas omnis est. Tempore quam possimus eaque.', 'Prof. Marianna Bosco', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32'),
(20, 'en', 'Molestiae dolor cum iure est. Nihil modi et cupiditate aperiam laudantium.', 'Brooklyn Legros', 0, 1, 1, '2017-03-28 12:09:32', '2017-03-28 12:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL DEFAULT '4',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `is_erasable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `text`, `image`, `password`, `remember_token`, `is_visible`, `is_erasable`, `created_at`, `updated_at`) VALUES
(1, 1, 'tekin', 'ztekinerten@gmail.com', NULL, 'userLogin2.png', '$2y$10$sQnAQMvEqFGhhCanME7y9ObPracqruh8xHms4c.gO050dRADMd33C', '3bnce1CUc5T4H0qoKLhcclbj6btjfnP5cEUytB5AxftpakAJ0Nqr3TLdWkie', 0, 0, '2017-02-01 00:16:25', '2017-04-04 05:34:11'),
(2, 3, 'demo', 'demo@guncebektas.com', NULL, NULL, '$2y$10$huHAdBs9p8Aanf3IBdHuu./hY1Jd7gTyWKDzrAxORGM3ESG1IS6vS', '7y0VAWtNWOHdSqwq5cSbqLyz7CVFYrrYE2QCxX2Q3oCBXie6T6ZUmaog566O', 1, 1, '2017-02-02 09:12:46', '2017-02-02 09:14:19'),
(41, 4, 'Prof. Gina Welch', 'ulockman@example.com', 'Lorem ipsum dolor', 'user.png', '$2y$10$LGxg11EDQfsxRDg20jVjyerlkVpgk4at5oljAB9l6Ch.28VR/ytQO', 'PkhvyVVlnx', 1, 1, '2017-03-28 12:09:31', '2017-03-31 05:42:14'),
(42, 4, 'Tyrel Larson', 'runolfsdottir.jayme@example.com', NULL, NULL, '$2y$10$GgMgkmIw3RRpLfhZfrYWQOjN08J53gHaHKaVSbn0BH7L81sDlJWee', 'nk2F7eATqI', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(43, 4, 'Nola Ritchie', 'cnader@example.org', NULL, NULL, '$2y$10$GgMgkmIw3RRpLfhZfrYWQOjN08J53gHaHKaVSbn0BH7L81sDlJWee', '98WDkioMRd', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(44, 4, 'Jacques Kunde', 'hodkiewicz.quinn@example.net', NULL, NULL, '$2y$10$GgMgkmIw3RRpLfhZfrYWQOjN08J53gHaHKaVSbn0BH7L81sDlJWee', 'n7RNCDoD64', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31'),
(45, 4, 'Mr. Frankie Littel PhD', 'viola.ward@example.com', NULL, NULL, '$2y$10$GgMgkmIw3RRpLfhZfrYWQOjN08J53gHaHKaVSbn0BH7L81sDlJWee', 'OHU0RI4grk', 1, 1, '2017-03-28 12:09:31', '2017-03-28 12:09:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id_index` (`id`),
  ADD KEY `categories_slug_index` (`slug`(191));

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `dynamic_strings`
--
ALTER TABLE `dynamic_strings`
  ADD KEY `dynamic_strings_id_index` (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_slug_index` (`slug`(191));

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_slug_index` (`slug`(191));

--
-- Indexes for table `gallery_items`
--
ALTER TABLE `gallery_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_item_details`
--
ALTER TABLE `gallery_item_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_id_index` (`id`),
  ADD KEY `pages_slug_index` (`slug`(191));

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191)),
  ADD KEY `password_resets_token_index` (`token`(191));

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_id_index` (`id`),
  ADD KEY `posts_slug_index` (`slug`(191));

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD KEY `post_categories_category_id_index` (`category_id`),
  ADD KEY `post_categories_post_id_index` (`post_id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD KEY `post_tags_tag_id_index` (`tag_id`),
  ADD KEY `post_tags_post_id_index` (`post_id`);

--
-- Indexes for table `presses`
--
ALTER TABLE `presses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presses_slug_index` (`slug`(191));

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_slug_index` (`slug`(191));

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_items`
--
ALTER TABLE `slide_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slide_items_slide_id_foreign` (`slide_id`);

--
-- Indexes for table `slide_item_details`
--
ALTER TABLE `slide_item_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slide_item_details_slide_item_id_foreign` (`slide_item_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_id_index` (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery_items`
--
ALTER TABLE `gallery_items`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `gallery_item_details`
--
ALTER TABLE `gallery_item_details`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `presses`
--
ALTER TABLE `presses`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9013;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `slide_items`
--
ALTER TABLE `slide_items`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `slide_item_details`
--
ALTER TABLE `slide_item_details`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD CONSTRAINT `post_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_categories_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slide_items`
--
ALTER TABLE `slide_items`
  ADD CONSTRAINT `slide_items_slide_id_foreign` FOREIGN KEY (`slide_id`) REFERENCES `slides` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slide_item_details`
--
ALTER TABLE `slide_item_details`
  ADD CONSTRAINT `slide_item_details_slide_item_id_foreign` FOREIGN KEY (`slide_item_id`) REFERENCES `slide_items` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
