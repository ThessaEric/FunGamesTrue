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

INSERT INTO Game VALUES('Monopoly',01,100,50,'?',5,"https://images.pexels.com/photos/4004420/pexels-photo-4004420.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
INSERT INTO Game VALUES('Uno',02,100,50,'?',5,"https://images.pexels.com/photos/2689343/pexels-photo-2689343.jpeg?auto=compress&cs=tinysrgb&w=600");
INSERT INTO Game VALUES('Loup garou',03,100,50,'?',5,"https://images.king-jouet.com/6/gu238003_6.jpg");
INSERT INTO Game VALUES('Bonne paye',04,100,50,'?',5,"https://www.regles-de-jeux.com/wp-content/uploads/2012/11/bonne-paie1.jpg");
INSERT INTO Game VALUES('Catan',05,100,50,'?',5,"https://c8.alamy.com/compfr/rap20n/jeu-de-fete-avec-mes-amis-les-colons-de-catane-jeu-de-conseil-populaire-les-joueurs-se-bousculent-la-region-pour-obtenir-plus-de-ressources-et-de-points-de-victoire-rap20n.jpg");
INSERT INTO Game VALUES('Cluedo',06,100,50,'?',5,"http://gusandco.net/wp-content/uploads/2011/04/241_1.jpg");
INSERT INTO Game VALUES('Echecs',07,100,50,'?',5,"https://images.pexels.com/photos/6688954/pexels-photo-6688954.jpeg?auto=compress&cs=tinysrgb&w=600");
INSERT INTO Game VALUES('Scrabble',08,100,50,'?',5,"https://images.pexels.com/photos/256417/pexels-photo-256417.jpeg?auto=compress&cs=tinysrgb&w=600");
INSERT INTO Game VALUES('Trivial Poursuit',09,100,50,'?',5,"https://st3.depositphotos.com/1263499/33737/i/600/depositphotos_337373828-stock-photo-trivial-pursuit-board-game-80s.jpg");
INSERT INTO Game VALUES('Puissance 4',10,100,50,'?',5,"https://www.espritjeu.com/upload/image/puissance-4-p-image-71452-grande.jpg");
INSERT INTO Game VALUES('Dominos',11,100,50,'?',5,"https://images.pexels.com/photos/585293/pexels-photo-585293.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
INSERT INTO Game VALUES('Triomino',12,100,50,'?',5,"https://4.bp.blogspot.com/-nUYIH4D-cuU/XFsW1cxfpqI/AAAAAAAAZ4w/QoQUWRcjDlAUcC6rzbSacMuozHQZ3xTDACLcBGAs/s1600/IMG_0890.JPG");
INSERT INTO Game VALUES('Risk',13,100,50,'?',5,"https://c8.alamy.com/compfr/rtbkb4/personnes-jouant-la-strategie-classique-baord-risque-de-jeu-rtbkb4.jpg");
INSERT INTO Game VALUES('Docteur Maboule',14,100,50,'?',5,"https://www.jouetopia.fr/wp-content/uploads/docteur-maboul-jeu-societe.jpg");
INSERT INTO Game VALUES('Dames',15,100,50,'?',5,"https://st.depositphotos.com/1016680/3591/i/950/depositphotos_35919473-stock-photo-checkers.jpg");
INSERT INTO Game VALUES('Milles Bornes',16,100,50,'?',5,"https://img2.freepng.fr/20180702/ova/kisspng-mille-bornes-jigsaw-puzzles-dujardin-card-game-boa-robocar-poli-5b39c941aaa407.568024121530513729699.jpg");
INSERT INTO Game VALUES("Jeu de l'Oie",17,100,50,'?',5);
INSERT INTO Game VALUES('Mastermind',18,100,50,'?',5);
INSERT INTO Game VALUES('Les petits chevaux',19,100,50,'?',5);
INSERT INTO Game VALUES("Qui est ce",20,100,50,'?',5);


