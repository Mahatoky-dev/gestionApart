CREATE OR REPLACE VIEW v_resp_location_locataire AS 
SELECT 
    r_l.id_locataire id_resp,
    r_l.id_location,
    nom,
    sexe,
    num_resp_1,
    num_resp_2
FROM locataire l
JOIN resp_location r_l ON l.id_locataire = r_l.id_locataire; 

-- vue entre l'apartement et le responsable
CREATE OR REPLACE VIEW v_apart_resp AS
SELECT 
    a.id_apart,
    a.nb_chambre,
    a.description,
    r_l.id_locataire id_resp,
    r_l.num_resp_1,
    r_l.num_resp_2,
    locataire.nom nom_resp
FROM resp_location r_l
JOIN location l ON r_l.id_location = l.id_location
JOIN locataire ON locataire.id_locataire = r_l.id_locataire
JOIN apartements a ON a.id_apart = l.id_apart
WHERE l.date_fin >= NOW();

CREATE OR REPLACE VIEW v_apart_locataire AS 
SELECT 
    l.id_apart,
    locataire.id_locataire,
    locataire.nom,
    locataire.sexe
FROM location l 
JOIN locataire ON l.id_location = locataire.id_location
WHERE l.date_fin >= NOW();