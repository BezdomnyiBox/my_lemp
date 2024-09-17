CREATE DATABASE IF NOT EXISTS dev;
USE dev;
CREATE TABLE IF NOT EXISTS guest
(
    guest_id INT AUTO_INCREMENT PRIMARY KEY,
    guest_name VARCHAR(30) NOT NULL
);
DELETE FROM guest;
INSERT INTO guest(guest_name) VALUES
('Buffon'),
('Carlos'),
('Pique'),
('Maldini'),
('Zidane'),
('Xavi'),
('Ronaldo'),
('Iniesta'),
('Suarez'),
('Messi');
