Installer le projet en local, avec wamp: 

Dans un terminal, placez-vous dans le dossier désiré pour installer le projet puis entrez:
git clone https://github.com/vinoc/helloCSE.git

cd helloCSE

composer install

Il faut aussi installer la base de données. 
Dans votre phpMyAdmin: Créez une base du nom de 'laravel'

Dans l'invité de commande entrez:
php artisan migrate --seed

Le projet est prêt, vous n'avez plus qu'à ouvrir 127.0.0.1/helloCSE/public dans votre navigateur.
