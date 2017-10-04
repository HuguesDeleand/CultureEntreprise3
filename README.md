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

Username : `root`

Password : `password`

Dans le panneau de gauche, la base de données `siteweb` apparaît. Celle-ci contient une table `PERSONNE`. Cliquer sur la table pour visualiser son contenu (par exemple, après insertion d'une nouvelle personne depuis le fichier `index.php`).

-------------------

Version de docker utilisée (sous Linux Mint 17.3) : `Docker version 17.06.2-ce, build cec0b72`

Version de docker-compose utilisée (sous Linux Mint 17.3) : `docker-compose version 1.16.1, build 6d1ac21`

