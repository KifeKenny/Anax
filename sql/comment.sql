SET NAMES utf8;

use usercomments;

DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `comment`;


CREATE TABLE `user` (
	`id` INT AUTO_INCREMENT,
    `firstName` VARCHAR(20),
    `mail` VARCHAR(50),
    `password` VARCHAR(20),
	
    KEY `index_mail` (`mail`),
	PRIMARY KEY (`id`)
);

CREATE TABLE `comment` (
	`id` INT AUTO_INCREMENT,
    `user_id` INT,
    `user_mail` VARCHAR(50),
    `name` VARCHAR(20),
    `text` VARCHAR(100),

	PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
    FOREIGN KEY (`user_mail`) REFERENCES `user` (`mail`)
);