CREATE DATABASE sitename;

USE sitename;

CREATE TABLE users 
(
user_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(40) NOT NULL,
email VARCHAR(60) NOT NULL,
pass CHAR(40) NOT NULL,
registration_date DATETIME NOT NULL,
PRIMARY KEY (user_id)
);


INSERT INTO users (first_name, last_name, email, pass, registration_date) VALUES
('David', 'Jones', 'davey@monkees.com', SHA2('fasfd', 512), NOW()),
('Peter', 'Tork', 'peter@monkees.com', SHA2('warw', 512), NOW()),
('Micky', 'Dolenz', 'micky@monkees.com ', SHA2('afsa', 512), NOW()),
('Mike', 'Nesmith', 'mike@monkees.com', SHA2('abdfadf', 512), NOW()),
('David', 'Sedaris', 'david@authors.com', SHA2('adfwrq', 512), NOW()),
('Nick', 'Hornby', 'nick@authors.com', SHA2('jk78', 512), NOW()),
('Melissa', 'Bank', 'melissa@authors.com', SHA2('jhk,h', 512), NOW()),
('Toni', 'Morrison', 'toni@authors.com', SHA2('hdhd', 512), NOW()),
('Jonathan', 'Franzen', 'jonathan@authors.com', SHA2('64654', 512), NOW()),
('Don', 'DeLillo', 'don@authors.com', SHA2('asf8', 512), NOW()),
('Graham', 'Greene', 'graham@authors.com', SHA2('5684eq', 512), NOW()),
('Michael', 'Chabon', 'michael@authors.com', SHA2('srw6', 512), NOW()),
('Richard', 'Brautigan', 'richard@authors.com', SHA2('zfs654', 512), NOW()),
('Russell', 'Banks', 'russell@authors.com', SHA2('wwr321', 512), NOW()),
('Homer', 'Simpson', 'homer@simpson.com', SHA2('5srw651', 512), NOW()),
('Marge', 'Simpson', 'marge@simpson.com', SHA2('ljsa', 512), NOW()),
('Bart', 'Simpson', 'bart@simpson.com', SHA2('pwqojz', 512), NOW()),
('Lisa', 'Simpson', 'lisa@simpson.com', SHA2('uh6', 512), NOW()),
('Maggie', 'Simpson', 'maggie@simpson.com', SHA2('plda664', 512), NOW()),
('Abe', 'Simpson', 'abe@simpson.com', SHA2('qopkrokr65', 512), NOW());

