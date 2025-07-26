# un site web permetant de gerer la location de plusieur apartement

# fonctionnalité :

    1. une page pour listé des apartes
    2. une fois qu'on clique sur une apartement :
        - on peux voir le nom du locatiaire si il y en a , si non on vois dispo
        - un bouton pour changer le status de l'apartement
            - si il est dispo il a un bouton ajouter locataire
            - si il n'y en a pas il y a un boutton terminer location
        - le boutton ajouter locataire est un lien vers un formualaire pour inseret des locataires le nb de locataire , puis vers un aute form , pour insert les nom des autre locataire
        - liste de loyer payer (donc insert des donnes de teste)
        - liste de de facturation de jirama
        - un bouton insert payment loyer
    3. liste des formualire pour insert des facturation
        - une formulaire pour inserert une faturation
        - une formulaire pour inserrt une payment de loyer

# todo :

    - [ok] creation de la base de donnes :
        - [ok] apartement
            - id_apart
            - nb_chambre
            - description
        - [ok] locataire
            - id_locataire
            - id_location
            - nom
            - sexe
        - [ok] location
            - id_location
            - id_apartement
            - date_debut
            - date_fin
        - [ok] resp_location
            - id_locataire
            - id_location
            - num_resp_1
            - num_resp_2

    - [ok] interation avec la base de donnes (liste des fonctions)
        - [ok] ajouter apartement
        - [ok] ajouter location
        - [ok] ajouter locataire
        - [ok] ajouter un responsable
        - [ok] terminer une location

    - creation des page 
        - liste d'apartements
            - liste simple des apartement
        - info apartement
            - status de l'apartements
                - si disponible :
                    - afficher dispo
                    - affichre lien pour commencer location
                - si non :
                    - afficher occupé
                    - afficher ifo responsable
                    - lien plus d'information
            - nb de chambre
            - description
        - fiche location
            - information sur la location
            - lien pour stoper la location
        - form_location