<?php
/**
 * Modele de la page de connexion

 *
 * @author Pierre Piron
 * @package default
 */

    /**
     * test de connexion
     *
     * @param string $login identifiant de connexion
     * @param string $pass mot de passe de connexion
     * @return bool|mixed faux si pas identifié ou renvoi une ligne
     */
    function testConnection($login, $pass){

        global $pdo;

        $req = $pdo->prepare('SELECT * FROM tb_employe WHERE mpl_login = ?');
        $req->execute(array($login));
        if($passC = $req->fetch()) {

            if (password_verify($pass, $passC->mpl_password)) {

                $req->execute(array($login));
                return $req->fetch();
            }
            else{
                return false;
            }
        }
        else{
            
            return false;
        }

    }

    /**
     * verification chef equipe

     * Vérifie si la personne qui se connecte
     * est chef d'une équipe
     * @param string $nom nom de l'employé qui se connecte
     * @return array renvoi rien si pas chef d'équipe, une ligne si chef d'équipe
     */
    function testChefEquipe($nom){

        global $pdo;

        $req = $pdo->prepare('SELECT * FROM tb_equipe WHERE qp_chef = ?');
        $req->execute(array($nom));
        return $req->fetch();

    }