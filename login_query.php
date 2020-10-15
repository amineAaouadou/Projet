<? php 
session_start();

require_once 'conn.php';

if(ISSERT($_POST['login'])){
	if($_POST['username'] !=""  ||  $_POST['password'] != ""){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM 'member' WHERE 'username'=? AND 'password'=? ";
	$query = $conn->prepare($sql);
	$query->execute(array($username,$password));
	$row = $query->rowCount ();
	$fetch = $query->fetch();
	if($row > 0) { 
	$_SESSION['user'] = $fetch['mem_id'];
	header("location : home.php");


	} else {
	echo " 
	<script>alert('mot de passe ou identifiant invalide')</script>
	<script>window.location = 'index.html'</script>
	 ; "
	}
	else { 
	echo " 
	<script>alert('SVP Veuillez saisir les champs requis !')</script>
	<script>window.location = 'index.html'</script>
	";
	}
}
?>