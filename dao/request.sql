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