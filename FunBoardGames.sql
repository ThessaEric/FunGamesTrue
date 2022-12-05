DROP DATABASE IF EXISTS FunBoardGames;
CREATE DATABASE FunBoardGames;
USE FunBoardGames;

CREATE TABLE Game (
name_game varchar(20)
id_game INT primary key,
stock_game INT,
price_game INT,
type_game varchar(20),
age int
img_game VARCHAR(100)
);

CREATE TABLE Orders (
id_oder INT primary key,
price_order int,
total_quant INT,
date_order date,
date_delivery date
);

CREATE TABLE Users (
id_user int primary key,
status VARCHAR(20),
first_name_user VARCHAR(20),
last_name_user VARCHAR(20),
mail_user VARCHAR(50),
birth_time date
);

CREATE TABLE Adress (
id_adress int primary key,
country VARCHAR(20),
postal_code int,
city VARCHAR(40),
street varchar(50),
nb_street int
);

CREATE TABLE Supplier (
id_supplier int primary key,
siret VARCHAR(20),
name_supplier varchar(20),
name_contact VARCHAR(40),
mail_supplier varchar(50)
);

INSERT INTO Game VALUES(01,100,50,'?',5);
INSERT INTO Game VALUES(02,100,50,'?',5);
INSERT INTO Game VALUES(03,100,50,'?',5);
INSERT INTO Game VALUES(04,100,50,'?',5);
INSERT INTO Game VALUES(05,100,50,'?',5);
INSERT INTO Game VALUES(06,100,50,'?',5);
INSERT INTO Game VALUES(07,100,50,'?',5);
INSERT INTO Game VALUES(08,100,50,'?',5);
INSERT INTO Game VALUES(09,100,50,'?',5);
INSERT INTO Game VALUES(10,100,50,'?',5);
INSERT INTO Game VALUES(11,100,50,'?',5);
INSERT INTO Game VALUES(12,100,50,'?',5);
INSERT INTO Game VALUES(13,100,50,'?',5);
INSERT INTO Game VALUES(14,100,50,'?',5);
INSERT INTO Game VALUES(15,100,50,'?',5);
INSERT INTO Game VALUES(16,100,50,'?',5);
INSERT INTO Game VALUES(17,100,50,'?',5);
INSERT INTO Game VALUES(18,100,50,'?',5);
INSERT INTO Game VALUES(19,100,50,'?',5);
INSERT INTO Game VALUES(20,100,50,'?',5);
