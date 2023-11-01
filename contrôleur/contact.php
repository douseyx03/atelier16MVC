<?php
   
   include_once("../modele/connexion_database.php");
   
   class Traitement_contact extends Connexion_database {
       public $errs = array();
   
       public function Traitements ($prenom, $nom, $numero, $favori) {

               if (preg_match("/^[a-zA-Z]{1,25}$/", $prenom) && preg_match("/^[a-zA-Z]{1,25}$/", $nom)) {
                   
               } else {
                   $this->errs[] = "Le prénom et le nom doivent contenir uniquement des lettres et avoir une longueur maximale de 25 caractères.";
               }
   
               if (preg_match("/^[7-9][0-9]{0,8}$/", $numero)) {
                   
               } else {
                   $this->errs[] = "Le numéro doit commencer par 7, être composé de chiffres et avoir une longueur maximale de 9 chiffres.";
               }
   
               
               if ($favori !== 0 && $favori !== 1) {
                   $this->errs[] = "Veuillez sélectionner 'Favori' ou 'Non favori'.";
               }
   
               if (empty($this->errs)) {
                   $insertcontact = new Connexion_database();
                   $sql = $insertcontact->enregistrer($prenom, $nom, $numero, $favori);
                   if ($sql) {
                       echo "Votre contact a bien été enregistré!";
                   } else {
                       echo "L'enregistrement de votre contact a échoué. Réessayez!";
                   }
               } else {
                   
                   foreach ($this->errs as $err) {
                       echo "<tr>$err</tr>" . "<br>";
                   }
               }
           }
       }
       
       if (isset($_POST['submit'])) {
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $numero = htmlspecialchars($_POST['numero']);
        $favori = isset($_POST['favori']) ? intval($_POST['favori']) : 0;
        $traitement = new Traitement_contact();
        $traitement->Traitements($prenom, $nom, $numero, $favori);
    }
        $traitement->enregistrer("$prenom","$nom","$numero","$favori") ;
   
        

    
?>
