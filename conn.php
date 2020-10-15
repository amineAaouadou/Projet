
<?php
$bdd = new PDO('mysql:host=localhost;dbname=gsb', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$resultat = $bdd->query('SELECT * FROM visiteur');
echo 'Il y a '. $resultat->rowCount() . ' entrée(s) dans la base de données : </br>';
while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
    echo $donnees['id'] . ' '.$donnees['message'].'</br>';
}
?>

