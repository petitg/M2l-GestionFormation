<?php
/**
 * Modele de la page historique des formations

 *
 * @author Pierre Piron
 * @package default
 */

    /**
     * Selection historique formation

     * Récupère en base les formations auquel l'employé
     * est inscris
     * @return array liste des formations
     */
    function selectionnerHistorique(){
        global $pdo;
        $req = $pdo -> prepare('SELECT * FROM tb_formation LEFT JOIN tb_inscrire ON tb_formation.frm_id = tb_inscrire.nsc_frm_id AND tb_inscrire.nsc_mpl_login = ? ORDER BY frm_date ASC');
        $req->execute(array($_SESSION['login']));
        $formation = $req->fetchAll();

        return $formation;

    }
