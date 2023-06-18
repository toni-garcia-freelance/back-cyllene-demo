# Application démo pour un entretien au sein de l'entreprise Cyllene

Application démo réalisée par Toni GARCIA pour présenter une application minimal avec VueJS3 et Laravel (notamment avec Nova pour l'administration).
En back l'application comporte une partie administration réalisée avec Nova sur laquelle on peut :
- Ajouter/Modifier et supprimer l'ensemble des données en base de données: Adresse, prix, station de recharge, commentaire des utilisateurs sur une station et utilisateur

Pour la partie frontend de l'applciation voici l'url: https://github.com/toni-garcia-freelance/back-cyllene-demo](https://github.com/toni-garcia-freelance/front-cyllene-demo
Voici une vidéo de démonstation de l'app en Back : https://user-images.githubusercontent.com/119334403/246669152-ac738705-5d02-4c22-87ee-d0907c3491ff.mp4

Installation de l'application :

Récupérer le code à partir de git 

Placer vous dans le répertoire et lancer la commande : composer install 

Créer un fichier .env et modifier les paramètres de votre base de données 

Ajouter la ligne NOVA_LICENSE_KEY dans le fichier .env, la valeur de la license nova vous sera envoyez par mail ou vous pouvez la demander par mail : toni.garcia.freelance@gmail.com

Voici la liste des commandes à lancer pour la suite :

Créer vos tables:
php artisan migrate

Ajouter des données dans vos tables:
php artisan db:seed 

Créer un utilisateur pour Nova:
php artisan nova:user 

Générer les clés pour Laravel:
php artisan key:generate

Valider la license avec Nova:
php artisan nova:check-license

Vous pouvez ensuite lancer votre serveur avec la commande :
php artisan serve

L'url pour accéder à l'administration de Nova est : votreurl/nova/login
