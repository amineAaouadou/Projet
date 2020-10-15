<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/style.css" media="all" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
           
            <form action="register.php" method="POST">
                <h1>Connexion</h1>
               
                <label><b>Nom </b></label>
                <input type="text" placeholder="Entrer le nom " name="nom" required>

                <label><b>Prénom </b></label>
                <input type="text" placeholder="Entrer le prénom" name="prenom" required>

                 <label><b>Identifiant</b></label>
                <input type="text" placeholder="Entrer l'identifiant" name="id" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                 <label><b>Code postal</b></label>
                <input type="text" placeholder="Ex : 75017" name="cp" required>

                <label><b>Ville</b></label>
                <input type="text" placeholder="Entrer la ville" name="ville" required>

                <label><b>Date d'embauche</b></label>
                <input type="text" placeholder="Ex : 01-13-2020" name="dateEmbauche" required>


                <input type="submit" id='submit' value='LOGIN' >
               
            </form>
        </div>
    </body>
</html>
