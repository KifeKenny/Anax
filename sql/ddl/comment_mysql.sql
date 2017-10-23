USE anaxdb;

SET NAMES utf8;

DROP TABLE IF EXISTS Comment2;
CREATE TABLE Comment2 (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `title` VARCHAR(80),
    `content` VARCHAR(455) NOT NULL,
    `user_mail` VARCHAR(80) NOT NULL,
    `user_id` INTEGER
    
) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;


SELECT * FROM Comment2