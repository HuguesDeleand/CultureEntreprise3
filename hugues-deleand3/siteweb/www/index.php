<?php
try
{
	$bdd = new PDO('mysql:host=dbmysql;dbname=siteweb;charset=utf8', 'siteweb', 'password');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


/* 1 - Affichage du contenu de la table PERSONNE de la BDD */


$reponse = $bdd->query('SELECT * FROM PERSONNE');

?>
<h2>Liste des personnes dans la base de données :</h2><br />
<?php

while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>id</strong> : <?php echo $donnees['id']; ?><br />
    <strong>nom</strong> : <?php echo $donnees['nom']; ?><br />
	<strong>prenom</strong> : <?php echo $donnees['prenom']; ?><br />
   </p>
<?php
}

$reponse->closeCursor();


/* 2 - Test : on ajoute une nouvelle personne dans la BDD et on affiche le contenu de la table PERSONNE */


$bdd->exec('INSERT INTO PERSONNE(id, nom, prenom) VALUES(\'2\', \'Marie\', \'François\')');
$reponse = $bdd->query('SELECT * FROM PERSONNE');

?>
<h2>Liste des personnes dans la base de données après insertion :</h2><br />
<?php

while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>id</strong> : <?php echo $donnees['id']; ?><br />
    <strong>nom</strong> : <?php echo $donnees['nom']; ?><br />
	<strong>prenom</strong> : <?php echo $donnees['prenom']; ?><br />
   </p>
<?php
}

$reponse->closeCursor();


/* 3 - Test : on supprime François Marie */


$bdd->exec('DELETE FROM PERSONNE WHERE nom=\'Marie\'');
$reponse = $bdd->query('SELECT * FROM PERSONNE');

?>
<h2>Liste des personnes dans la base de données après suppression :</h2><br />
<?php

while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>id</strong> : <?php echo $donnees['id']; ?><br />
    <strong>nom</strong> : <?php echo $donnees['nom']; ?><br />
	<strong>prenom</strong> : <?php echo $donnees['prenom']; ?><br />
   </p>
<?php
}

$reponse->closeCursor();

?>
