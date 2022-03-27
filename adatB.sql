CREATE DATABASE develery
CHARACTER SET utf8
COLLATE utf8_hungarian_ci;

CREATE TABLE uzenetek (
    uzenetId int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nev varchar(255),
    email varchar(255),
    leiras varchar(1023)
);