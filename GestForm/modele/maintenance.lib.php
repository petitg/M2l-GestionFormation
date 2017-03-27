<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 17/01/2017
 * Time: 09:35
 */

    function archiverFormations(){

        global $pdo;

        $pdo->query('CALL archiverFormations');
    }

