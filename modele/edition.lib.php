<?php
/**
 * Created by PhpStorm.
 * @User: Guillaume
 * @package default
 */

    /**
     * Modifie une formation dans la BDD
     * @param $id
     * @param $contenu
     * @param $date
     * @param $nbJours
     * @param $prerequis
     * @param $cout
     */
    function editionFormation($id, $contenu, $date, $nbJours, $prerequis, $cout){

        global $pdo;
        $req = $pdo->prepare('UPDATE tb_formation SET  frm_contenu = ?, frm_date = ?, frm_nbjours = ?, frm_prerequis = ?, frm_cout = ? WHERE frm_id = ?');
        $req->execute(array($contenu, $date, $nbJours, $cout, $prerequis, $id));

    }

/**
 * Recupère toutes les informations de la formation à modifier
 * @param $id
 * @return mixed
 */
    function recuperationFormation($id){

        global $pdo;
        $req = $pdo->prepare('SELECT * FROM tb_formation WHERE frm_id = ?');
        $req->execute(array($id));

        return $req->fetch();
    }