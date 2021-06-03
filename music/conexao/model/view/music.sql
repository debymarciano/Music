SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `conteudo` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `song` varchar(120) NOT NULL,
  `album` varchar NOT NULL,
  `execution` varchar(30) NOT NULL,
  `artist` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `conteudo` (`id`, `song`, `album`, `execution`, `artist`)

