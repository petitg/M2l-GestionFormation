<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 17/01/2017
 * Time: 12:36
 */

function ajoutFormation($contenu, $date, $nbjours, $prerequis, $cout){

    global $pdo;


    $req = $pdo->prepare('INSERT INTO tb_formation (frm_contenu, frm_date, frm_nbjours, frm_prerequis, frm_cout) VALUES (?, ?, ?, ?, ?)');
    $req->execute(array($contenu, $date, $nbjours, $prerequis, $cout));

}