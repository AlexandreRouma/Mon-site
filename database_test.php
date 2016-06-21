<?php
// on se connecte à MySQL
$db = mysql_connect('sql2.olympe.in', 'etdkd2u2', '66133410');
// on sélectionne la base
mysql_select_db('etdkd2u2',$db);
?>



<?php

// on crée la requête SQL
$sql = 'SELECT id,login,name FROM users ORDER BY id';

// on envoie la requête
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

// on fait une boucle qui va faire un tour pour chaque enregistrement
while($data = mysql_fetch_assoc($req))
{
    // on affiche les informations de l'enregistrement en cours
    echo '<b>'.$data['id'].' '.$data['name'].' '.$data['login'].'<br>';
}

// on ferme la connexion à mysql
mysql_close();
?>