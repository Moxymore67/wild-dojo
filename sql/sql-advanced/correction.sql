-- Requête 0:
CREATE TABLE employes(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    prenom varchar(255) NOT NULL,
    profession varchar(255) NOT NULL,
    dateemb date NOT NULL,
    salaire int NOT NULL,
    commission int NOT NULL,
    id_departement int NOT NULL);

CREATE TABLE departement(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom varchar(255) NOT NULL,
    ville varchar(255) NOT NULL,
    numerodepartement INT NOT NULL);

-- Requête 1:
INSERT INTO employes (prenom,profession,dateemb,salaire,commission,id_departement) VALUES ("Pierre", "ingenieur", "1993-10-01", 4000, 3000, 1),
("Paul","technicien","1988-05-10",3000,2000,2),
("Jacques","vendeur","1980-10-29",5000,5000,2),
("Yavuz","president","2019-10-29",10000,10000,3),
("Lolo",'vendeur',"1980-10-29",7000,2000,2),
("Bill", "stagiaire","2018-10-29",1000,0,1);

INSERT INTO departement ( nom, ville, numerodepartement) VALUES ("Commercial", "Strasbourg", 67,
("Developpement", "Lyon", 69),
("Direction", "Paris", 75);

-- Requête 2:
SELECT * FROM Employes WHERE commission IS NOT NULL
SELECT * FROM Employes WHERE commission>0

-- Requête 3:
SELECT prenom, profession, salaire FROM Employes ORDER BY profession, salaire DESC

-- Requête 4:
SELECT D.nom, AVG(salaire) as moyenne FROM Employes E JOIN Departement D ON D.id=E.id_departement GROUP BY D.id ORDER BY moyenne DESC

-- Requête 5:
SELECT AVG(salaire) FROM Employes WHERE id_departement=2

-- Requête 6:
SELECT D.numerodepartement, MAX(E.salaire) as max FROM Employes E, Departement D WHERE E.id_departement=D.id GROUP BY E.id_departement

-- Requête 7:
SELECT D.nom, MAX(salaire) FROM Employes E, Departement D WHERE D.id=E.id_departement GROUP BY D.nom

-- Requête 8:
SELECT profession, AVG(salaire) FROM Employes GROUP BY profession

-- Requête 9:
SELECT AVG(salaire) as Moyenne FROM Employes GROUP BY profession ORDER BY Moyenne ASC LIMIT 1
