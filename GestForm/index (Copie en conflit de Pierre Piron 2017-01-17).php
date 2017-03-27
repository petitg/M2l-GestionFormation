<?php

    session_start();

    include_once ("modele/pdo.lib.php");

    if (isset($_GET['deco'])){
        session_destroy();
        $erreur ="Vous avez été déconnecté";
        include_once ('vue/login.inc.php');

    }
    else if (isset($_SESSION['login'])){
        if (isset($_GET['formation'])){
            include_once ('controleur/formation.inc.php');
        }
        else if (isset($_GET['code'])){
            
            include_once('controleur/formation.inc.php');
        }
        else if (isset($_GET['historique'])){

            include_once ('controleur/historique.inc.php');
        }
        else if (isset($_GET['equipe'])){

            include_once ('controleur/equipe.inc.php');
        }
        else if (isset($_GET['validation'])){

            include_once ('controleur/validation.inc.php');
        }
        else if (isset($_GET['ajoutemploye'])){

            include_once ('controleur/ajoutemploye.inc.php');
        }
        else if (isset($_GET['ajoutformation'])){

            include_once ('controleur/ajoutformation.inc.php');
        }
        else if (isset($_GET['maintenance'])){
            include_once ('controleur/maintenance.inc.php');
        }
        else if (isset($_GET['edition'])){

            include_once ('controleur/edition.inc.php');
        }
        else {
            include_once ('controleur/home.inc.php');
        }
    }
    else{

        include_once ('controleur/login.inc.php');
    }
