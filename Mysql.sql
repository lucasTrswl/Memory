-- Modifier le mot de passe et l'email de l'utilisateur (story 3)
UPDATE utilisateur
SET email='nouvel email', mot_de_passe='nouveau mot de passe'
WHERE identifiant=1


-- Identification sur le site (story 4)
SELECT * FROM utilisateur WHERE pseudo = 'zouzou' AND mot_de_passe = ' '


-- Ajouter le jeu The Power of Memory dans la base de donnée (story 5)
INSERT INTO jeu(nom_du_jeu) VALUES('The Power of Memory')


-- Afficher les scores de mes utilisateurs (story 6)
SELECT score_partie, identifiant_du_joueur FROM score 


-- Afficher les scores de mes utilisateurs avec des filtres (ici difficulte_partie) (story 7)
SELECT score_partie, identifiant_du_joueur FROM score WHERE difficulte_partie = 2


--Enregistrer le score du joueur (story 8)
UPDATE `score` SET `score_partie`='18'WHERE identifiant_du_joueur='zouzou'


--Afficher la discution du chat en general (story 9)
INSERT INTO `message`(`identifiant`, `identifiant_du_jeu`, `identifiant_expediteur`, `message`) VALUES ('1','the power of the memory','Zazouin','bonjour Zazouin')


--(story 10)