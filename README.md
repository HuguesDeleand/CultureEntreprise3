# Exercice 3 du TP

### 1- Cloner le projet dans le dossier personnel
```bash
$ git clone https://github.com/HuguesDeleand/CultureEntreprise3
```

### 2- Se rendre au bon emplacement pour lancer docker 
```bash
$ cd CultureEntreprise3/hugues-deleand3
$ docker-compose up
```

### 3- Accéder à la page index.php depuis le navigateur de la machine hôte
Dans un navigateur, taper `localhost/index.php`

Pour insérer des données dans la base de données depuis la machine hôte, se rendre dans le dossier `CultureEntreprise3/hugues-deleand3/siteweb/www` puis tester des requêtes PHP/MySQL dans le fichier `index.php`


### 4- Accéder à PHPMyAdmin
Taper la commande `docker ps`, repérer l'image `corbinu/docker-phpmyadmin` et copier le `CONTAINER ID` correspondant. Lancer `docker inspect CONTAINER ID`. Dans la rubrique "Networks", le champ "IPAddress" indique l'IP permettant d'accéder à l'interface de PHPMyAdmin.

