
CREATE DATABASE auth;

CREATE TABLE `paquet` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `dateenreg` datetime NOT NULL,
  `recu` text NOT NULL,
  `emis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25) NOT NULL UNIQUE,
    email VARCHAR(320) NOT NULL UNIQUE,
    password VARCHAR(256) NOT NULL,
    is_admin TINYINT(1) not null default 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


