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

    - cration de fonction ;
        - [ok] prendre liste apartement
        - [ok] verifier si une apartement est dispo
    
    - dinamisation :
        - [ok] lister la lists des apartemeent dans l_aparrt
        - [ok] ajouter lien pour chaque apart , vers fiche apart
        - [ok] envouer par get l'id de l'aprt selectionner
        - [ok] recevoir d'id apart 
        - [ok] prendre les info de l'apart
        - [ok] afficher les info de base de l'apart 

- etape 2 :
    posibiliter d'initialiser une location 
        - il y a une page de confirmation qui dit : voulez vous vraiment commencer une location ?
        - un bouton oui et non
        - si il clique sur oui il va y avoir une page pour insert le nom du locataire responsable , un champ de  2 numero
        - un page qui resume le location  :
            - date de location
            - nom responsable
            - nom des simple locataire
            - nom des locataire inseret
        - un lien ajouter locataire qui renvois vers une page pour insert un locataire 
        - un lien terminer la seservation
        - puis il va y avoir une page de recapitulation
            - ne nom du responsable 
            - les personnes dans l'apart
            - date de reservation

    html :
        - [ok] creation de la page confirmation
            - [ok] message voulez vous vraiment commencer une location
            - [ok] boutton oui , boutton non
        - [ok] creation de la page insertion de locataire
            - [ok] un champ nom
            - [ok] selection sexe
            - [ok] insertion num 
            - [ok] insrtion num
        - [ok] cree la page confirmation de locataire
            - [ok] num du chambre 
            - [ok] de de debut de la location
            - [ok] nom responsable
            - [ok] locataire
            - [ok] lien ajout locataire 
            - [ok] lien terminer
    dinamisation :
        - [ok] dirger le bouton debuter location ver page confirmation location 
        - [ok] dirigier le bouton oui de la confirmaiton vers t_insert_location
        - [ok] creation de la page t_insert_location
            - [ok] recupert l"id l'apart
            - [ok] insert une location de l'apart
            - [ok] rediriger vers la page form_locataire
        - form_locataire :
            - [ok] recevoir l'id de l'apartement
            - [ok] verifier si l'apartement a un responsable
                - [ok] si non : afficher le resonsable et champ num
                - [ok] si oui : afficher locataire et seulement les champ nom et sexe
            - [ok] cette form va vers un traitement insertion locataire
            - [ok] qui va insert le nom le loataire , le responsable si il sagit d'un resonsable
            - [ok] et qui va rediriger ver la page fiche_location 
        - [ôk] fiche_location :
            - [ôk] afficher les info generale de la location
                - [ok] cree fonction pour recuperer les information d'une location
                    - [ok] recuperation des locataire
                    - [ok] recuperation des dates 
                    - [ok] recuperation du responsable
                - [ok] utiliser la fonciton dans la page de fiche 
            - [ok] bouton ajouter locataire va ver la page form_locataire



orientation aartements :
    - [ok] recuperer la liste des apartements
    - [ok] recuperer la current responsable d'une apartement 
    - [ok] recuperer la liste des current locataire d'une apartement
    - [ok] recuperer les information de location d'une apartement

posibilité de stper une location :
    - [ok] creation de traitement arret location
    - [ok] rediriger ver une page de confirmation 
    - [ok] la page de confirmaiton va rediriger ver taairment si oui 
    - [ok] rediriger le boutton arrtet locaton de f_apart ver le t avec envois de l'id de la location
    - [ok] dans la page t_arret_location
        - [ok] recevoir l'id
        - [ok] stoper le location par l'id 
        - [ok] rediriger ver la liste d'apartement

ajouter une confirmation lors de l'arret d'une location :
    - [ok] cree la page de confrirmation
        - [ok] message : voulez vous vraiment arreter la location de la chambre N° x ? (responsable actuel : xx)
        - [ok] ajouter bouton oui non 
        - [ok] redirger non vers la page de f_apart 
        - [ok] rediriger oui vers traitement d'arret 
        - [ok] rediriger traitement d'arrtet ver la page de f_apart
    - [ok] diriger le bouton oui de confirmation vers le traitement de  l'arrté de confrimation

stylisation de la page :
    - [ok] importer bootsrap dans le projets
    - [ok] cree une fichier css perso
    - [ok] ajout de header : 
        - [ok] ducumentation bootsrap sur la manier dons on consoi un header 
        - [ok] ajout du style de header avec bootstrap
    - ajout de style simpliste pour :
        - [ok] la liste des apartements
            - [ok] imaginer le style que je veux
            - [ok] documentation bootsrap pour la realisation don la disposition des elements la taille des texte et tous ce qui conserne les textes
            - [OK] realisation
        - [ok] de la fiche d'apartement
            - [OK] imagination du style 
            - [OK] documemntation 
                - [ok] sur la disposition des elements verticalement et horizontalement
                - [ok] sur les borders 
            - [ok] realisation
                - [ok] rearangement du html
        - [ok] du fromulaire location 
            - [ok] imagination du style 
                - [ok] pour le boutton ajouter :
                    - [ok] lorsqu'on clique sur ce boutton , on affiche dans un modale le formulaire pour insrret un locataire
            - [ok] documemntation 
                - [ok] aprendre profondement le fonctionnement du modale 
            - [ok] realisation
        - [ok] le 2 page de confirmation
    
etape suivante :
    - possibilité d'ajouté une apartement :
        todo :
            - [ok] html :
                - [ok] formulaire
                    - [ok] nb de chambre
                    - [ok] description de l'apartement
                    - [ok] champ image pour inseret l'image de l'apartement
                - traiement
                    - [ok] nuste cree la page de traitement
            - dinamique :
                - insert l'apartement dans la base
                    - [ok] recevoir les information saisi
                    - [ok] inseret dans la base les informations saisi
                    - [ok] rediriger vers la page liste
                - dinamiser l'image de la chambre :
                    - interation avec la base :
                        - [ok] cree la table image_apart 
                            - [ok] id apart 
                            - [ok] nom
                        - cree fonction pour interagir avec les images
                            - [ok] fonction isertion d'image
                            - [ok] recuperer les image d'une apartement
                    - documentation dons la maniere d'insert les images
                        - recevoir l'image
                        - chager l'encripting pour permetre la transfere de fichier
                        - traiter 
                            - verification du type
                            - chagement de nom 

                    - [ok] todo image :
                        - [ok] ajouté encripting 
                        - [ok] verifier si l'image est recu
                        - [ok] generer le nom unique
                        - [ok] ajouter dans le dossier le nom unique (avec le chemin)
                    - [ok] insertion dans la base et redirection