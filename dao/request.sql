-- insertion d'un apartement 
INSERT INTO
    apartements (nb_chambre, description)
VALUE (%s,'%s');

-- insert une location
INSERT INTO 
    location (id_apart,date_debut,date_fin) 
VALUE (%s,NOW(),'9999-01-01');

-- insert un locataire
INSERT INTO 
    locataire (id_location,nom,sexe) 
VALUE (%s,'%s','%s');

-- ajouter un responsable d'une location
INSERT INTO 
    resp_location (
        id_location,
        id_locataire,
        num_resp_1,
        num_resp_2
        )
VALUE (
    %s,
    %s,
    '%s',
    '%s'
);

-- arreter une location
UPDATE location 
SET date_fin = NOW()
WHERE id_location = %s;

-- prendre toute les apartements 
SELECT id_apart FROM apartements;

-- recuperer les location en cours d'une apartements 
SELECT * FROM location WHERE id_apart = 1 AND date_fin >= NOW();

-- prendre l'informaition d'une apartements
SELECT * FROM apartement WHERE id_apart = %s;

-- prendre le responsable d'une location
SELECT 
    * 
FROM resp_location 
JOIN 

WHERE id_location = %s;