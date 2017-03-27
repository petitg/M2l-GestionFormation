<?php
/**
 * Controleur de la page ajout employe
 * User: Pierre
 */

include_once ('modele/edition.lib.php');
$id = $_GET['edition'];



    $formation = recuperationFormation($id);



include_once ('vue/navbar.inc.php');
include_once ('vue/edition.inc.php');
include_once ("vue/footer.inc.php");