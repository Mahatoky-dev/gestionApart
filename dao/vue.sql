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

CREATE OR REPLACE VIEW v_apart_resp AS
SELECT 
    a.id_apart,
    locat.nom
FROM apartements a
JOIN location l ON l.id_apart = a.id_apart
JOIN v_resp_location_locataire v_l_l ON v_l_l.id_location = l.id_location
JOIN locataire locat ON locat.id_locataire = v_l_l.id_resp 
WHERE l.date_fin >= NOW();

CREATE OR REPLACE VIEW v_apart_locataire AS 
SELECT 
    l.id_apart,
    locataire.nom
FROM location l 
JOIN locataire ON l.id_location = locataire.id_location
WHERE l.date_fin >= NOW(); 