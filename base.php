<?php
session_start();
?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) &&
is_array($_SESSION['ERRMSG_ARR']) &&
count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul style="padding:0; color:red;">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?>
<form action="reg.php" method="POST">
Identifiant<br>
<input type="text" name="identifiant" /><br>
Mot de passe<br>
<input type="password" name="pwd" /><br>
<input type="submit" value="Login" />
</form>