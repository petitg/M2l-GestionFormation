<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 17/01/2017
 * Time: 09:29
 */

    include_once ('modele/maintenance.lib.php');

    if ($_GET['maintenance'] == 1){
        archiverFormations();
        $mess = 'Formations archivés';
    }

    include_once ('vue/navbar.inc.php');
    include_once ('vue/maintenance.inc.php');
    include_once ('vue/footer.inc.php');
