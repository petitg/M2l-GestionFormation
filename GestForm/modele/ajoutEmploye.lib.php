<?php
/**
 * Modele de la page ajout d'employe
 *
 * User: Pierre
 */

 function ajoutEmploye($nom, $prenom, $login, $password, $fonction, $equipe){

     global $pdo;

     $pass = password_hash($password, PASSWORD_DEFAULT);

     $req = $pdo->prepare('INSERT INTO tb_employe (mpl_nom, mpl_prenom, mpl_login, mpl_password, mpl_credit, mpl_jour, mpl_fonction, mpl_qp_nom) VALUES (?, ?, ?, ?, 5000, 20, ?, ?)');
     $req->execute(array($nom, $prenom, $login, $pass, $fonction, $equipe));

 }