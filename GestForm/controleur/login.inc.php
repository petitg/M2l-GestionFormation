<?php
/**
 * Controleur de la page de connexion

 *
 * @author Pierre Piron
 * @package default
 */



    if (!empty($_POST['login']) && !empty($_POST['password'])){
        include_once ('modele/login.lib.php');

        if (!empty($resreq= testConnection($_POST['login'], $_POST['password']))){

            $erreur = "rentre ici";
            $_SESSION['login'] = $resreq->mpl_login;
            $_SESSION['nom'] = $resreq->mpl_nom;
            $_SESSION['credit'] = $resreq->mpl_credit;
            $_SESSION['jour'] = $resreq->mpl_jour;
            $_SESSION['admin'] = 0;

            if (!empty($resreq2 = testChefEquipe($_SESSION['nom']))){
                $_SESSION['admin'] = 1;
                $_SESSION['equipe'] = $resreq2->qp_nom;
            }

            header('Location: index.php');


        }
        else{
            $erreur = "Identifiant ou mot de passe incorrect";
            include_once ('vue/login.inc.php');
        }
    }
    else{
        include_once ('vue/login.inc.php');
    }

