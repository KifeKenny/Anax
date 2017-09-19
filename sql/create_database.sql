-- create the database and use it
CREATE DATABASE IF NOT EXISTS usercomments;
USE usercomments;

-- skapaar en avändare med lösenord pass
GRANT ALL ON usercomments.* TO admin@localhost IDENTIFIED BY "test";
