<?php
/**
 * Controleur de la page formation

 *
 * @author Pierre Piron
 * @package default
 */

    include_once ("modele/formation.lib.php");

    if(isset($_GET['code'])){
        choisirFormation($_GET['code']);
        miseAJourCredits();
    }

    $formations = selectionFormations();

    include_once ("vue/navbar.inc.php");
    include_once ("vue/formation.inc.php");
    include_once ("vue/footer.inc.php");
