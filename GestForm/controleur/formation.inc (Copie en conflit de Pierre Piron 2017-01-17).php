<?php
/**
 * Controleur de la page formation

 *
 * @author Pierre Piron
 * @package default
 */

    include_once ("modele/formation.lib.php");

if (isset($_POST['envoi'])){
    if(!empty($_POST['contenu']) && !empty($_POST['date']) && !empty($_POST['duree']) && !empty($_POST['nbJours']) && !empty($_POST['credit']) && !empty($_POST['prerequis'])) {
        include_once ("modele/edition.lib.php");
        $id = $_GET['formation'];
        editionFormation($id ,$_POST['contenu'], $_POST['date'], $_POST['duree'], $_POST['nbJours'], $_POST['credit'], $_POST['prerequis']);
        $err = "formation édité";
    }
    else{
        $err = "Remplissez tous les champs";
    }
}

    if(isset($_GET['code'])){
        choisirFormation($_GET['code']);
        miseAJourCredits();
    }

    $formations = selectionFormations();

    include_once ("vue/navbar.inc.php");

    if (!empty($formations)){
        include_once ("vue/formation.inc.php");
    }
    else{
        include_once ("vue/aucuneformation.inc.php");
    }
    include_once ("vue/footer.inc.php");
