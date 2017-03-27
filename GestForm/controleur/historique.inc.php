<?php
/**
 * Controleur de la page historique des formations

 *
 * @author Pierre Piron
 * @package default
 */

include_once ("modele/historique.lib.php");

$formations = selectionnerHistorique();


include_once ("vue/navbar.inc.php");
include_once ("vue/historique.inc.php");
include_once ("vue/footer.inc.php");
