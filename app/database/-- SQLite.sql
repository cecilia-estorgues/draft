-- SQLite
CREATE TABLE IF NOT EXISTS client (
num_client integer PRIMARY KEY AUTOINCREMENT,
nom varchar(50) NOT NULL,
prenom varchar(50) NOT NULL,
adresse varchar(400) NOT NULL,
code_postal integer NOT NULL,
ville varchar(150) NOT NULL,
mail varchar(200) NOT NULL
);

CREATE TABLE IF NOT EXISTS commande (
num_commande integer PRIMARY KEY AUTOINCREMENT,
date_commande date NOT NULL,
num_client integer NOT NULL,
FOREIGN KEY (num_client) REFERENCES client (num_client)
);

CREATE TABLE IF NOT EXISTS produit (
reference integer PRIMARY KEY,
nom_produit varchar(50) NOT NULL,
description varchar(3000) NOT NULL,
prix varchar(50) NOT NULL,
photo blob NOT NULL,
taux_alcool varchar(30) NOT NULL,
particularite varchar(100) NOT NULL,
ibu interger NOT NULL,
volume varchar(10) NOT NULL,

id_auteur integer NOT NULL,
id_achat integer NOT NULL,
FOREIGN KEY (id_achat) REFERENCES achat (id_achat),
FOREIGN KEY (id_auteur) REFERENCES auteur (id_auteur)
);

CREATE TABLE IF NOT EXISTS contenir (
quantite integer NOT NULL,
num_commande integer NOT NULL,
reference integer NOT NULL,
FOREIGN KEY (num_commande) REFERENCES commande (num_commande),
FOREIGN KEY (reference) REFERENCES produit (reference),
);




INSERT INTO client (prenom, nom, adresse, code_postal, ville, mail) 
VALUES
('Yona','DELORME', 'Pl Charles de Gaulle','75008','Paris','yona.delorme@gmail.com'),
('Cécilia', 'ESTORGUES', '55 Digue du Bout Blanc', '17000','La Rochelle','cecilia.estorgues@gmail.com'),
('Catarina', 'FERREIRA', '9 Av. des Fils Fouquaud', '79110','Chef-Boutonne', 'catarine.ferreira@gmail.com'),
('Abel', 'FELICIAGGI', '1000 rue Jean Jaurès', '02230','Fresnoy-le-grand','abel.feliciaggi@gmail.com'),
('Yoan', 'ERAVILLE', '17 Vge du Val', '25110', 'Cusance', 'yoan.eraville@gmail.com'), 
('Maxime', 'BERNARD', 'Le Cheylaret', '48310', 'Chauchailles', 'maxime.bernard@gmail.com');



INSERT INTO commande (date_commande, num_client)
VALUES
('16/02/2023',1),
('03/06/2022',2),
('09/10/2022',3),
('16/02/2022',4),
('08/01/2023',5),
('20/12/2022',6);


INSERT INTO produit (reference, nom_produit, description, prix, photo, taux_alcool, particularite, ibu, volume)
VALUES 
(15563,'Lime','Lime, est une bière blanche, à la composition inédite du citron. Elle diffuse autour d’elle une explosion de créativité́, où qu’elle aille. Fière d’être une bière, elle a un goût plus acidulé que les autres. Avec son attitude originale pour une bière, elle souhaite montrer aux autres, qu’il faut avoir de la créativité.','2,75€','5%','Citron',15,'75cL'),
(98645,'Zero','La Zéro, est une bière blonde sans alcool qui nous permet de savourer son houblon sans avoir mal au crâne. D’une composition 100% naturel et authentique elle ose tout. Fière d’être une bière Ale, elle a un goût plus doux que les autres. Avec son attitude originale pour une bière, elle souhaite montrer à tous qu’il ne faut pas hésiter à oser.','2,75€','0%','Sans alcool',5,'75cL'),
(54215,'Fraise','Fraise, une bière blanche, est d’une composition fruitière inédite avec sa fraise, elle casse tous les standards et diffuse autour d’elle une détermination. Fière d’être une bière, elle a un goût fruité. Avec son attitude originale pour une bière, elle vous souhaite de ne jamais baisser les bras.','4%','Fraise',15,'75cL'),
(85347,'Cherry pop','Cherry-pop, d une composition fruitée à la cerise, casse tous les standards et diffuse autour d’elle la bonne humeur et le plaisir d’aimer. Fière d’être une bière aux tons rouges, elle a un goût plus sucré que les autres. Avec son attitude originale pour une bière, elle souhaite inspiré à tous, la joie et la bonne humeur.','2,75€','4%','Cerise',15,'75cL'),
(89542,'Bubble','Bubble, d’une composition inédite avec sa base aux Bubble gum, elle nous replonge en enfance et insiste sur le fait d’être soit même. Avec son attitude originale pour une bière, elle souhaite montrer à tous qu’il ne faut pas se cacher derrière une apparence.', '2,75€','3,80%','Chewing-gum',10,'75cL'),
(58539,'Luciole','Luciole est une bière blonde Lager à laquelle a été ajoutée des paillettes alimentaires qui illuminent la bière et lui donne un effet de brillance référence à son nom.','2,75€','5.5%','Luminescente',16,'75cL'),
(88925,'La butineuse','La Butineuse, d’une composition inédite avec son miel de châtaignier, casse tous les standards et diffuse autour d’elle une explosion de créativité, où qu’elle aille. Fière d’être une bière Ale, elle a un goût plus doux que les autres. Avec son attitude originale pour une bière, elle souhaite montrer à tous qu’il ne faut pas hésiter à s’exprimer.','2,75€','5,75%','Miel de Chataigner',11,'75cL');




INSERT INTO contenir (quantite, num_commande, reference)
VALUES
(3,1
(6,2
(1,3
(4,4
(6,5
(9,6
