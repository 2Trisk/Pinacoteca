INSERT INTO tecnica(stile_artistico) VALUES ('espressionismo'),
('cubismo'),('puntinismo'),('impressionismo'),('surrealismo');


INSERT INTO autore(nome_autore,cognome_autore,luogo_di_nascita,data_di_nascita,data_di_morte)
VALUES ('Edvard','Munch','Ådalsbruk','1863-12-12','1944-01-23'),('Jackson ','Pollock','Cody','1912-01-28','1956-08-11'),
('Pablo','Picasso','Malaga','1991-10-25','1973-04-8'),('Georges','Seurat','Parigi','1859-12-02','1891-03-29'),
('Paul','Signac','Parigi','1863-11-11','1935-08-15'),('Claude','Monet','Parigi','1840-11-14','1926-12-5'),
('Edouard ','Manet','Parigi','1832-01-23','1883-04-30'),('Vincent','van Gogh','Zundert','1953-03-30','1890-07-29'), 
('Salvador','Dali','Figueres','1904-05-11','1989-01-23');


INSERT INTO collezione(nome_collezione) VALUES ('Sammlung Wagner'), 
('Collection Dubois'),('Collezione Bariano');

INSERT INTO dipinto(id_collezione,id_autore,id_tecnica,nome_dipinto,anno_uscita,percorso_immagine) VALUES

(3,2,1,'La Lupa',1943,'images/pollock_lupa.jpg'),
(2,1,1,'L''urlo',1910,'images/munch_urlo.jpg'),
(1,4,3,'La Tour Eiffel',1889,'images/seurat_tour_eiffel.jpg'),
(2,8,4,'Campo di grano con volo di corvi',1890,'images/vincent_campo_grano.jpg'),
(2,6,4,'Lo stagno delle ninfee, Armonia verde',1910,'images/monet_armonia_verde.jpg'),

(2,1,1,'La danza della vita',1900,'images/munch_danza.jpg'),
(2,3,2,'Les Demoiselles D''Avignon',1907,'images/picasso_demoiselles.jpg'),
(1,7,4,'Il Bar delle Folies-Bergere',1883,'images/manet_bar.jpg'),
(3,9,5,'La persistenza della memoria',1931,'images/dali_la_persistenza_della_memoria.jpg'),
(3,9,5,'Giraffa in fiamme',1937,'images/dali_giraffa_in_fiamme.jpg'),

(3,2,1,'Mural',1943,'images/pollock_murale.jpg'),
(3,3,2,'Guernica',1937,'images/picasso_guernica.jpg'),
(1,5,3,'Le port de Saint-Tropez',1889,'images/signac_le_port_de.jpg'),
(1,4,3,'Una Domenica pomeriggio sull''isola della Grande-Jatte',1886,'images/seurat_domenica_pomeriggio.jpg'),
(1,8,4,'Notte Stellata',1889,'images/vincent_notte_stellata.jpg'),
(1,6,4,'Impressione,Levar del Sole',1872,'images/monet_levar_del_sole.jpg');


