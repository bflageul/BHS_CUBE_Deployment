# Cahier de recettes


A partir du mail envoyé par John Derry, on a les soucis suivants:
* Un message d’erreur s’affiche quand on ne poste pas une photo dans une annonce (les champs devaient être tous requis)
* Quand un utilisateur s’enregistre il n’est pas connecté tout de suite après
* J’ai l’impression que le bouton “se souvenir de moi” ne fonctionne pas, pouvez-vous vérifier ?
* Il était prévu que nous ayons un formulaire de contact sur la page du produit mais aujourd’hui c’est la boite mail qui s’ouvre
* Egalement il était prévu que j’ai sur mon compte videgrenierenligne un espace ou je peux voir les statistiques du site mais aujourd’hui je n’ai rien quand je me connecte avec mon adresse mail.
* Je passe également le mode Progressive Web App qui était initialement prévu… je n’ai même pas de favicon. 

***

On peut rédiger le début du cahier de recettes suivant:

## Test 1 - **Poster une annonce**

Message de base:
```
Un message d’erreur s’affiche quand on ne poste pas une photo dans une annonce (les champs devaient être tous requis)
```
* Objectif: 
  * **Poster une annonce**
* Eléments à tester: 
  * Page d'ajout d'une annonce
* Pré-requis:
  * Être connecté
  * Avoir le droit de poster une annonce
* Initialisation
  * Se rendre sur la page d'ajout d'une annonce
* Scénarios (proposition)
  * ID: 1
    * Démarche
      * On ne remplit pas tous les champs de l'annonce
      * On clique sur le bouton Ajouter
    * Comportement attendu
      * Message d'alerte s'affiche invitant à remplir tous les champs
      * Le message n'est pas bloquant

  * ID: 2
    * Démarche
        * On remplit tous les champs de l'annonce
    * Comportement attendu
        * L'annonce est publiée
        * Un message de confirmation apparaît
        * On est redirigés sur la page listant les annonces de l'utilisateur

* Rapport de test...
  * Commentaires...
  * Liste des tickets de bug généré...

## Test 2 - Statut de connexion après enregistrement

Message de base:
```
Quand un utilisateur s’enregistre il n’est pas connecté tout de suite après
```

* Objectif:
  * **Statut connecté après enregistrement de l'utilisateur**
* Eléments à tester:
  * 
* Pré-requis:
  *
* Initialisation
  * 
* Scénario (proposition)
  * ID: 1
    * 

* Rapport de test...
  * Commentaires...
  * Liste des tickets de bug généré...

## Test 3 - 

## Test 4 - 

## Test 5 - 