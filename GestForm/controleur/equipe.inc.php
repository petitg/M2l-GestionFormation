<?php
/**
 * Controleur de la page equipe
 * User: Pierre
 */

    include_once ('modele/equipe.lib.php');

    $employes = selectionEmployeEquipe();

    include_once ('vue/navbar.inc.php');
    include_once ('vue/equipe.inc.php');
    include_once ("vue/footer.inc.php");