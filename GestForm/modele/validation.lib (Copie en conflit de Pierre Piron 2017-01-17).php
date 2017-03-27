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
        $credit = recupCredit($formation);
        actualiserCredit($credit, $login);
    }

    function recupCredit($formation){

        global $pdo;
        $req = $pdo->prepare('SELECT frm_cout FROM tb_formation where frm_id= ?');
        $req->execute(array($formation));
        $credit = $req->fetch();
        return $credit->frm_cout;
    }

    function actualiserCredit($credit, $login){

        global $pdo;

        $req = $pdo->prepare('SELECT mpl_credit FROM tb_employe WHERE mpl_login = ?');
        $req->execute(array($login));
        $soldeCredit = $req->fetch();

        $credit_restant = ($credit + $soldeCredit->mpl_credit);

        $req = $pdo->prepare('UPDATE tb_employe SET mpl_credit = ? WHERE mpl_login = ?');
        $req->execute(array($credit_restant, $login));
    }
