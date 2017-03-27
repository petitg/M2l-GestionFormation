<?php
/**
 * Modele de la page formation

 *
 * @author Pierre Piron
 * @package default
 */

    /**
     * Sélection des formations

     * Récupère tous les formations disponibles ainsi que les lignes de la table inscrire
     * @return array liste des formations
     */
    function selectionFormations(){
        global $pdo;
        $date = date("y-m-j");
        $req = $pdo -> prepare('Select * from tb_formation LEFT JOIN tb_inscrire 
                                ON tb_formation.frm_id = tb_inscrire.nsc_frm_id AND tb_inscrire.nsc_mpl_login = ? 
                                WHERE tb_formation.frm_date > ? ORDER BY frm_date ASC LIMIT 50');
        $req->execute(array($_SESSION['login'],$date));
        $formation = $req->fetchAll();

        return $formation;
 
    }

    /**
     * Choix d'une formation
     *
     * Lorsqu'un utilisateur choisit une formation et crée un champ dans la table inscrire,
     * et appel les méthodes calculerCredits et insererCreditsRestants
     * pour mettre à jour les crédits de l'employé
     * @param int $id_form clé primaire de la formation
     */
    function choisirFormation($id_form){

        global $pdo;

        $today = date("Y-m-d");

        $req = $pdo->prepare('INSERT INTO tb_inscrire (nsc_mpl_login, nsc_frm_id, nsc_etat, nsc_dateInscri) 
                              VALUES (?, ?, 1, ?)');
        $req->execute(array($_SESSION['login'], $id_form, $today));

        $credit_restant = calculerCredits($id_form);
        insererCreditsRestants($credit_restant);

    }

    /**
     * Calcul crédits restants

     * Récupère les crédits restant de l'utilisateur
     * et le cout de la formation.
     * Calcul le nouveau solde de crédit et renvoi la valeur
     * @param int $id_form clé primaire de la formation
     * @return int credit restant à l'employé
     */
    function calculerCredits($id_form){

        global $pdo;

        $req = $pdo->prepare('SELECT frm_cout FROM tb_formation where frm_id = ?');
        $req->execute(array($id_form));
        $cout = $req->fetch();
        $req = $pdo->prepare('SELECT mpl_credit FROM tb_employe WHERE mpl_login = ?');
        $req->execute(array($_SESSION['login']));
        $credit = $req->fetch();
        $credit_restant = ($credit->mpl_credit - $cout->frm_cout);
        return $credit_restant;
    }

    /**
     * Insertion crédit restant

     * Recoit le nouveau solde de crédit
     * et l'inser dans la table employe
     * @param int $credit_restant credit restant à insérer dans la base
     */
    function insererCreditsRestants($credit_restant){

        global $pdo;

        $req = $pdo->prepare('UPDATE tb_employe SET mpl_credit = ? WHERE mpl_login = ?');
        $req->execute(array($credit_restant, $_SESSION['login']));

    }

    /**
     * Mis  à jour des crédis
     *
     * Recupere le solde de crédit de l'employé
     * et mets à jours la variable de seesion contenant les crédits
     *
     */
    function miseAJourCredits(){

        global $pdo;

        $req = $pdo->prepare('SELECT mpl_credit FROM tb_employe WHERE mpl_login = ?');
        $req->execute(array($_SESSION['login']));
        $credit = $req->fetch();
        $_SESSION['credit'] = $credit->mpl_credit;
    }
