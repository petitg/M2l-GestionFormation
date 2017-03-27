<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 17/01/2017
 * Time: 12:25
 */

    include_once ('modele/ajoutformation.lib.php');

if (isset($_POST['envoi'])){
    if(!empty($_POST['contenu']) && !empty($_POST['date']) && !empty($_POST['nbjours']) && !empty($_POST['prerequis']) && !empty($_POST['cout'])){
        ajoutFormation($_POST['contenu'], $_POST['date'], $_POST['nbjours'], $_POST['prerequis'], $_POST['cout']);
        $err = "Formation ajoutée";
    }
    else{
        $err = "Remplissez tous les champs";
        echo $contenu;
        echo $date;
        echo $nbjours;
        echo $prerequis;
    }
}



    include_once ('vue/navbar.inc.php');
    include_once ('vue/ajoutformation.inc.php');
    include_once ('vue/footer.inc.php');