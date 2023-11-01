<?php 
include_once(__DIR__."../contrôleur/contact.php");

class Connexion_database 
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "gestion_contact";
    public $con;
    public $contactTable = "contact";

    public function __construct()
    {
        try {
            $this->con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if ($this->con->connect_error) {
                die("Erreur de connexion à la base de données : " . $this->con->connect_error);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function Enregistrer($prenom, $nom, $numero, $favori)
    {
        $sql = "INSERT INTO $this->contactTable (prenom, nom, numero, favori) VALUES ('$prenom', '$nom', '$numero', '$favori')";
        $query = $this->con->query($sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function Supprimer($numero)
    {
        $sql = "DELETE FROM $this->contactTable WHERE numero='$numero'";
        $query = $this->con->query($sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function Modifier($prenom, $nom, $numero, $favori)
    {
    }

    public function Afficher_contact($prenom, $nom, $numero, $favori){

    }

    public function favori_contact($prenom, $nom, $numero, $favori){
        $sql = "SELECT * FROM this->contactTable WHERE favori=1";
        $query = $this->con->query($sql);
        if ($query) {
            return true;
                //get_include_path "liste_favori.php";
        } else {
            return "Actualiser la page";
        }
    }
}


?>