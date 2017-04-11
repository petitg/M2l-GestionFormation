<?php
/**
 * Created by PhpStorm.
 * @User: Guillaume
 * @package default
 */

function ajoutFormation($contenu, $date, $nbjours, $prerequis, $cout){

    global $pdo;


    $req = $pdo->prepare('INSERT INTO tb_formation (frm_contenu, frm_date, frm_nbjours, frm_prerequis, frm_cout) VALUES (?, ?, ?, ?, ?)');
    $req->execute(array($contenu, $date, $nbjours, $prerequis, $cout));

}