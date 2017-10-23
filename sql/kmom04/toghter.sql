-- create the database and use it
-- CREATE DATABASE IF NOT EXISTS anaxdb;


-- skapaar en avändare med lösenord pass
-- GRANT ALL ON anaxdb.* TO admin@localhost IDENTIFIED BY "anax";

USE anaxdb;

DROP TABLE IF EXISTS Comment2;
DROP TABLE IF EXISTS Book;
DROP TABLE IF EXISTS User2;



SET NAMES utf8;
--
-- Table Book
--
CREATE TABLE Book (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `author` VARCHAR(256) NOT NULL,
    `name` VARCHAR(256) NOT NULL
) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;

--
-- Table Book
--
CREATE TABLE Comment2 (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `title` VARCHAR(80),
    `content` VARCHAR(455) NOT NULL,
    `userMail` VARCHAR(80) NOT NULL,
    `userId` INTEGER

) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;

CREATE TABLE User2 (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `acronym` VARCHAR(80) UNIQUE NOT NULL,
    `mail` VARCHAR(80) UNIQUE NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `created` DATETIME,
    `updated` DATETIME,
    `deleted` DATETIME,
    `active` DATETIME
) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;


INSERT INTO `User2` (`acronym`, `mail`, `password`) VALUES
  ('admin', 'admin@hotmail.com', '$2y$10$jxFOW8M4pD.xM.4z4zIsm.mo2GGQOn/r0aD2LJSln/egg3Q1cpVH.')
;



SELECT * FROM Book;
SELECT * FROM Comment2;
SELECT * FROM User2;
