<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajout de contact</title>
</head>
<body>
    <header>
        <h1>Gestionnaire de contact</h1>
    </header>
    <main>
        <?php 
      //  include_once("../contr%C3%B4leur/contact.php");
       // include_once(__DIR__.'../contrôleur/contact.php');
       include_once("../modele/connexion_database.php");
      // include_once(/*__DIR__*/.'../modele/connexion_database.php');
        ?>
        <form action="../contrôleur/contact.php" method="post">
            <label for="prenom">Prénom</label><br>
            <input type="text" id="prenom" name="prenom" autocomplete="off" required><br>
            <label for="nom">Nom</label><br>
            <input type="text" id="nom" name="nom" autocomplete="off" required><br>
            <label for="telephone">Numéro téléphone</label><br>
            <input type="tel" id="telephone" name="telephone" required><br>
            <label for="favori">Favori</label>
            <select name="favori" id="favori">
                <option value="0">Non</option> 
                <option value="1">Oui</option>
            </select><br>
            <input type="submit" name="enregistrer" placeholder=" " value="Enregistrer">
        </form><br>
        <button type="button"><a href="liste.php" <!--target="_blank"-- rel="Liste des contacts">Voir la liste des contacts</a></button>
        <!--<a href="liste.html"><input type="button" value="Voir la liste des contactes" ></a>-->
    </main>
    <footer>

    </footer>
</body>
</html>