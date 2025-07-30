CREATE
OR REPLACE DATABASE location_apart;

USE location_apart;

CREATE
OR REPLACE TABLE apartements (
    id_apart INT PRIMARY KEY AUTO_INCREMENT,
    nb_chambre INT,
    description VARCHAR(400)
);

CREATE
OR REPLACE TABLE location (
    id_location INT PRIMARY KEY AUTO_INCREMENT,
    id_apart INT,
    date_debut DATETIME,
    date_fin DATETIME
);

CREATE
OR REPLACE TABLE locataire (
    id_locataire INT PRIMARY KEY AUTO_INCREMENT,
    id_location INT,
    nom VARCHAR(60),
    sexe CHAR
);

CREATE OR REPLACE TABLE resp_location (
    id_location INT,
    id_locataire INT,
    num_resp_1 VARCHAR(50),
    num_resp_2 VARCHAR(50)
);

CREATE OR REPLACE TABLE img_apart (
    id_apart INT,
    nom VARCHAR(50)
);

-- initialisation des cles etrangere
ALTER TABLE location ADD CONSTRAINT fk_apart FOREIGN KEY (id_apart) REFERENCES apartements (id_apart);

ALTER TABLE location ADD CONSTRAINT fk_resp FOREIGN KEY (id_responsable) REFERENCES locataire (id_locataire);

ALTER TABLE locataire ADD CONSTRAINT
fk_location FOREIGN KEY (id_location) REFERENCES location(id_location);

ALTER TABLE resp_location ADD CONSTRAINT
fk_location FOREIGN KEY (id_location) REFERENCES location(id_location);

ALTER TABLE resp_location ADD CONSTRAINT
fk_locataire FOREIGN KEY (id_locataire) REFERENCES locataire(id_locataire);

ALTER TABLE img_apart ADD CONSTRAINT 
fk_img_apart FOREIGN KEY (id_apart) REFERENCES apartements (id_apart);