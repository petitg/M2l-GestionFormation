<?php
/**
 * Modele de la page equipe
 *
 * User: Pierre
 */


    /**
     * Selection employe de l'equipe
     *
     * Fonction permettant d'obtenir la liste des employés de l'équipe du chef d'équipe connecté
     * @return array liste des noms et prenoms des employés de l'équipe
     */
    function selectionEmployeEquipe(){

        global $pdo;

        $req = $pdo->prepare('SELECT mpl_nom, mpl_prenom, mpl_login FROM tb_employe WHERE mpl_qp_nom = ?');
        $req->execute(array($_SESSION['equipe']));

        $listeEmploye = $req->fetchAll();
        return $listeEmploye;

    }