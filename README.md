# Setup and Installation Guide

## Install packages

sudo apt update
sudo apt install mysql-server php apache2 -y

## Setup MySQL Password

sudo mysql_secure_installation
sudo mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Admin@123';
FLUSH PRIVILEGES;
exit;

## Setup Database

SHOW DATABASES;
CREATE DATABASE students;

### Creating Table 

CREATE TABLE students (
    Roll_No INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Class VARCHAR(50) NOT NULL,
    Address VARCHAR(255) NOT NULL
);

### Select Database

USE students;

### Insert Values

INSERT INTO students (Name, Class, Address) VALUES ('John Doe', '10th Grade', '123 Main Street');
INSERT INTO students (Name, Class, Address) VALUES 
('Jane Smith', '11th Grade', '456 Elm Street'),
('Alice Johnson', '12th Grade', '789 Oak Street');

### Show selected database and other commands

SELECT DATABASE();
SHOW TABLES;
SHOW TABLES FROM database_name;

