##### Allez dans le répertoire

`$ cd rent-a-car`

Installer les dépendances (Vendor)

`$ composer install`

##### Creation de la Base de données et des tables

Editez la ligne 18 du .env pour mettre vos informations

`$ php bin/console doctrine:database:create`

`$ php bin/console doctrine:migrations:migrate`

##### Chargez les fixtures Fixtures

`$ php bin/console hautelook:fixtures:load --no-interaction`

##### Lancer l'application application

`$ php bin/console server:run`

##### Lancer les tests Behat

`$ vendor/bin/behat`

##### Lancer les tests PHPUnit

`$ bin/phpunit`

-----

##### Pour se connectez aller sur l'url  `/login`

Utilisateur avec ROLE_USER

email : user@email.fr /
password : user


Utilisateur avec ROLE_ADMIN

email : admin@email.fr /
password : admin
