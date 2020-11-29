CREATE DATABASE IF NOT EXISTS `mleko_db1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mleko_db1`;

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` int(11) NOT NULL,
  `pass` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;