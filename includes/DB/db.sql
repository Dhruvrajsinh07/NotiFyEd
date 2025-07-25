DROP DATABASE IF EXISTS NotiFyEd;

CREATE DATABASE NotiFyEd;

USE NotiFyEd;

CREATE TABLE `User`(
    id int AUTO_INCREMENT PRIMARY KEY,
    Username varchar(255) NOT NULL,
    Email varchar(255) NOT NULL UNIQUE,
    Password varchar(255) NOT NULL,
    role ENUM('Admin', 'student') NOT NULL DEFAULT 'student'
);

INSERT INTO `user`(`Username`, `Email`, `Password`, `role`) VALUES ('Khushal Rajani','admin@gmail.com','admin12345','Admin');