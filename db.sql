CREATE DATABASE template_mvc;
USE template_mvc;

CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  forget VARCHAR(255),
  created_at TIMESTAMP DEFAULT current_TIMESTAMP(),
  updated_at TIMESTAMP DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
);