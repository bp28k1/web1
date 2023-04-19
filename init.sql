CREATE DATABASE `njeweb1db`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `njeweb1db`;

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL DEFAULT '',
  `uto_nev` varchar(45) NOT NULL DEFAULT '',
  `bejelentkezes` varchar(12) NOT NULL DEFAULT '',
  `jelszo` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE utf8_general_ci;

INSERT INTO `users` (`id`, `csaladi_nev`, `uto_nev`, `bejelentkezes`, `jelszo`) VALUES
(1, 'root', 'root', 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785'),
(2, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(5, 'S', 'Zs', 'zss', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

CREATE TABLE `messages` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE utf8_general_ci;

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'Vendég', 'vendeg@vendeg.vendeg', 'Egyszerűen csodálatos!', '2023-04-19 14:23:11'),
(2, 'Vendég', 'vendeg@vendeg.vendeg', 'Ez egy nagyszerű weboldal!', '2023-04-19 09:47:46'),
(3, 'admin', 'admin@admin.admin', 'Köszönjük az építő jellegű kritikát!', '2023-04-20 10:18:38'),
(4, 'Vendég', 'teszt@teszt.hu', 'Ez egy teszt üzenet!', '2023-04-20 17:23:11'),
(5, 'S Zs', 'teszt@teszt.hu', 'Ez egy teszt üzenet bejelentkezve!', '2023-04-20 17:24:47');