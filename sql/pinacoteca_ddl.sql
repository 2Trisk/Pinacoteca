DROP DATABASE IF EXISTS pinacoteca;

CREATE DATABASE pinacoteca;


CREATE TABLE tecnica (
	id_tecnica INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	stile_artistico ENUM('espressionismo','cubismo','puntinismo','impressionismo','surrealismo') NOT NULL
);

CREATE TABLE autore (
	id_autore INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_autore varchar(30) NOT NULL,
	cognome_autore varchar(30) NOT NULL,
	luogo_di_nascita varchar(30) NOT NULL,
	data_di_nascita date NOT NULL,
	data_di_morte date NOT NULL
);

CREATE TABLE collezione (
	id_collezione INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_collezione  varchar(30) NOT NULL
);

CREATE TABLE dipinto (
	id_dipinto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_collezione  INT NOT NULL,
	id_autore INT NOT NULL,
	id_tecnica INT NOT NULL,
	nome_dipinto varchar(50) NOT NULL,
	anno_uscita int NOT NULL,
	percorso_immagine varchar(50) NOT NULL,
	FOREIGN KEY (id_collezione ) REFERENCES collezione(id_collezione ),
	FOREIGN KEY (id_autore) REFERENCES autore(id_autore),
	FOREIGN KEY (id_tecnica) REFERENCES tecnica(id_tecnica),
    CHECK (anno_uscita BETWEEN 1 and 2020)
);


CREATE OR REPLACE VIEW view_all AS SELECT 
d.nome_dipinto, a.nome_autore,a.cognome_autore,t.stile_artistico, d.anno_uscita, g.nome_collezione,d.percorso_immagine 
FROM dipinto d INNER JOIN autore a ON d.id_autore = a.id_autore 
INNER JOIN tecnica t ON t.id_tecnica = d.id_tecnica 
INNER JOIN collezione g ON g.id_collezione  = d.id_collezione  ORDER BY d.anno_uscita;








