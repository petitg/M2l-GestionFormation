<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 05/01/2017
 * Time: 14:13
 */

    function editionFormation($id, $contenu, $date, $nbJours, $prerequis, $cout){

        global $pdo;
        $req = $pdo->prepare('UPDATE tb_formation SET  frm_contenu = ?, frm_date = ?, frm_nbjours = ?, frm_prerequis = ?, frm_cout = ? WHERE frm_id = ?');
        $req->execute(array($contenu, $date, $nbJours, $cout, $prerequis, $id));

    }

    function recuperationFormation($id){

        global $pdo;
        $req = $pdo->prepare('SELECT * FROM tb_formation WHERE frm_id = ?');
        $req->execute(array($id));

        return $req->fetch();
    }