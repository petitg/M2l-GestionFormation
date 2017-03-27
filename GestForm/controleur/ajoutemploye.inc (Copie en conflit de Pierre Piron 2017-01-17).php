<?php
/**
 * Controleur de la page ajout employe
 * User: Pierre
 */

include_once ('modele/ajoutemploye.lib.php');

    if (isset($_POST['envoi'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['fonction']) && !empty($_POST['equipe'])){
            ajoutEmploye($_POST['nom'], $_POST['prenom'], $_POST['login'], $_POST['password'], $_POST['fonction'], $_POST['equipe']);
            $err = "employe ajouter";
        }
        else{
            $err = "Remplissez tous les champs";
        }
    }

include_once ('vue/navbar.inc.php');
include_once ('vue/ajoutemploye.inc.php');
include_once ("vue/footer.inc.php");