<?php
/**
 * Modele de la page de validation des formations

 *
 * @author Pierre Piron
 * @package default
 */

    /**
     * 

     * Recupère les formations de l'employe
     * choisi par le chef d'équipe
     */
    function formationEnAttente($login){

        global $pdo;
        $req = $pdo -> prepare('SELECT * FROM `tb_formation` FULL JOIN tb_inscrire ON tb_inscrire.nsc_frm_id = frm_id WHERE tb_inscrire.nsc_etat = 1 AND tb_inscrire.nsc_mpl_login = ?');
        $req->execute(array($login));
        $formation = $req->fetchAll();

        return $formation;
    }


    function formationAccepter($login, $formation){

        global $pdo;
        $req = $pdo->prepare('UPDATE tb_inscrire SET nsc_etat = 2 WHERE nsc_mpl_login = ? AND nsc_frm_id = ?');
        $req->execute(array($login, $formation));

    }


    function formationRefuser($login, $formation){

        global $pdo;
        $req = $pdo->prepare('UPDATE tb_inscrire SET nsc_etat = 3 WHERE nsc_mpl_login = ? AND nsc_frm_id = ?');
        $req->execute(array($login, $formation));
    }
