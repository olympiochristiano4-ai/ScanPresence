Pour que notre travail en commun se passe bien et sans problèmes trop complexes, il est important qu'on prenne le temps de bien faire les choses depuis la base. Ainsi, au niveau même de la présentation de nos codes sur le dépôt il faudra respecter certaines règles.

Premièrement il faudra toujours avant de commencer à travailler sur une nouvelle fonctionnalité vous rendre sur la branche principale et récupérer la version à jour des fichiers. Avec les commandes: 

- git checkout main;  ( ça c'est pour aller sur la branche principale)
- git pull origin main; ( c'est bien pull et non push pour récupérer les fichiers à jour)

Ensuite il faudra créer et vous déplacer sur une nouvelle branche, avec 

git checkout -b feature/nom-de-la-fonctionnalité; 

( feature/ c'est juste une convention pour commencer les noms sinon ce n'est pas indispensable, mettez des noms cours par exemple pour l'interface feature/interface-connexion et autre)

Retenez qu'une branche doit présenter une fonctionnalité complète pas les types de fichier si vous faites la page html et le fichier css  qui va avec vous pouvez  et devez d'ailleurs les mettre sur la même branche. Donc jamais une branche ne doit servir à la fois pour connexion et inscription ou accueil ou autre, JAMAIS !

La deuxième étape c'est l'enregistrement local et l'envoie.

Quand vous finissez votre ou vos codes pour une MÊME fonctionnalité, il faut vérifier les fichiers modifiés puis les envoyer sur le dépôt distant.

git status; ( pour voir les fichiers modifiés)
git add .;  ( . signifie tous les fichiers si vous ne voulez en envoyer qu'un utilisez le nom à la place du point )
git commit -m " Un message court et CLAIRE qui présente ce que vous avez fait";

git push origin feature/nom-de-la-fonctionnalité ( et non push origin main qui l'enverrait sur la branche principale, github refuserait car j'ai désactivé l'envoie directe sur la branche principale, il faut que le code soit revue d'abord puis s'il y a aucun souci je pourrai faire la fusion avec la branche principale de mon côté)

La troisième étape concerne la fusion de votre travail avec la branche principale.

Après votre git push origin vu plus haut, il faut aller sur github , vous verrez une bande jaune, remplissez le titre et appuyer sur create a pull request. Vous avez ainsi bien effectuez votre tâche.

Pour la suite le relecteur va se charger de :
 Se connecter à github et ouvrir votre pull request , allez dans l'onglet "Files changed"  pour vérifier le code et laisser des commentaires de correction en cas de problèmes, puis faire le merge ( la fusion avec la branche principale )

N'oubliez jamais après l'annonce de la fusion il faut revenir sur la branche principale et recharger les fichiers à jour avec 

git checkout main; 
git pull origin main;

Si vous avez des questions, Daryl, Valencia, Samson, Naomie, je compte sur vous pour qu'on en parle de suite, je veux que chacun soit un minimum à l'aise... Donc à vous maintenant...