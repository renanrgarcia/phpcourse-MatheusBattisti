-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS contact_agenda;
USE contact_agenda;

-- Create tables
CREATE TABLE IF NOT EXISTS contacts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    observations TEXT
);

-- Insert initial data
INSERT INTO contacts (name, phone, observations) VALUES
('Renan', 'renan@example.com', 'Car seller'),
('Thais', 'thais@example.com', 'Cosmetics saleswoman');