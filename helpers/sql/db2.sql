CREATE DATABASE IF NOT EXISTS `mleko_db2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mleko_db2`;

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;