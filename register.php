<?php
require_once 'conn.php';

if(ISSET($_POST['register'])){
if($_POST['firstname'] !="" || $_POST['username'] !="" || $_POST['password'] != ""){
try{
$identifiant = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['identifiant'];
$motdepasse = $_POST['password'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$dateEmbauche = $_POST['dateEmbauche'];
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO 'member' VALUES ('$id', '$nom', '$prenom', '$login', '$mdp')";
$conn->exec($sql);
}catch(PDOException $e){
echo $e->getMessage();
}

$conn = null;
header('location:index.php');
}else{
echo "
<script>alert('Veuillez saisir les champs requis!')</script>
<script>window.location = 'registration.php'</script>
";
}
}
?>