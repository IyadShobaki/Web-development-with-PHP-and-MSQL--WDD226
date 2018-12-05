CREATE DATABASE Tulip collate utf8mb4_bin;

USE Tulip;

CREATE TABLE contacts 
(
id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(40) NOT NULL,
email VARCHAR(60) NOT NULL,
message VARCHAR(8000) NOT NULL,
contact_date DATETIME DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);


INSERT INTO contacts (first_name, last_name,message, email) VALUES
('David', 'Jones','GREAT CUSTOMER SERVICE AND SHIPPING', 'davey@monkees.com'),
('Peter', 'Tork','Easy ordering and quick delivery!', 'peter@monkees.com'),
('Micky', 'Dolenz','Fast delivery good product very happy with my experience with the company', 'micky@monkees.com '),
('Mike', 'Nesmith','Fast shipping & great prices!', 'mike@monkees.com'),
('David', 'Sedaris','Awesome service and product', 'david@authors.com'),
('Nick', 'Hornby','Very happy with our orders, I will continue to purchase with this company!!', 'nick@authors.com'),
('Melissa', 'Bank','Fair prices. Quick shipping. Sometimes things end up being out of stock after you order but still good.', 'melissa@authors.com'),
('Toni', 'Morrison','They never fail me with an order. Great quality in shirts', 'toni@authors.com'),
('Jonathan', 'Franzen','Recent shipment was lost. However, order was replaced and arrived the next day! Thank you!!!!!', 'jonathan@authors.com'),
('Don', 'DeLillo','Great place to shop. I love shopping here. Customer service is GREAT !!!!!!!', 'don@authors.com'),
('Graham', 'Greene','Excellent customer service & orders always arrive quickly!', 'graham@authors.com'),
('Michael', 'Chabon','Everything was great. Got everything ok time, exactly as I ordered', 'michael@authors.com'),
('Richard', 'Brautigan','Excellent company! I have ordered several times and have not been disappointed at all. Fast processing time. Fast delivery time.', 'richard@authors.com');

--------------------


USE Tulip;

CREATE TABLE Product 
(
id int NOT NULL AUTO_INCREMENT,
pname varchar(255),
price double,
    
PRIMARY KEY (id)
);

insert into Product (pname, price) values ('Hot Sale Fashion Simple Shirts', 24.99),('Wrangler Slim Men \s Blue Jeans', 29.99), ('Cyamo Short Peat', 19.99),('New Fashion Casual Blazer', 39.99),('Carven Navy ', 149.99),('Mens Denim Jeans', 35.99), ('Refuge Skinny Boyfriend Destroyed Jeans', 19.99),('Wrapped Open Back Jumpsuit', 10.99), ('Lettuce Trim Skimmer Top', 19.99),('Half Sleeves Maxi Dress', 15.99),('Midi Skirt', 39.99),('Woven Shirt', 19.99);





