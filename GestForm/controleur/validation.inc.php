<?php
/**
 * Controleur de la page validation des formations

 *
 * @author Pierre Piron
 * @package default
 */

    include_once ("modele/validation.lib.php");

    $loginEmploye = $_GET['nom'];
    if (isset($_GET['a'])){
        formationAccepter($_GET['nom'], $_GET['a']);
        header('location:index.php?validation&nom='.$loginEmploye);
    }
    elseif (isset($_GET['f'])) {
        formationRefuser($_GET['nom'], $_GET['f']);
        header('location:index.php?validation&nom='.$loginEmploye);
    }
    else {


        $formations = formationEnAttente($loginEmploye);

        include_once("vue/navbar.inc.php");
        include_once("vue/validation.inc.php");
        include_once("vue/footer.inc.php");
    }