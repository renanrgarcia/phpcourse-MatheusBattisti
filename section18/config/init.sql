-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS daotest;
USE daotest;

-- Create tables
CREATE TABLE IF NOT EXISTS cars (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    brand VARCHAR(100) NOT NULL,
    km INT NOT NULL,
    color VARCHAR(50) NOT NULL
);
