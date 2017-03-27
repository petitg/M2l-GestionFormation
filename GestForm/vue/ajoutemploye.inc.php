<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 01/01/2017
 * Time: 15:00
 */

    if (isset($err)){
        ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <?php echo $err;?>
        </div>
    </div>
</div>
<?php
    }

?>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <form action="index.php?ajoutemploye" method="post">
                    Nom de l'employé : <input type="text" name="nom"><br>
                    Prenom de l'employé : <input type="text" name="prenom"><br>
                    Login de l'employé (1ère lettre du prenom + nom en minuscule : <input type="text" name="login"><br>
                    Mot de passe : <input type="password" name="password"><br>
                    Fonction : <input type="text" name="fonction"><br>
                    Equipe : <select name="equipe">
                        <option value="Ressource Humaine">Ressource Humaine</option>
                        <option value="Cafétaria">Cafétaria</option>
                        <option value="Comptabilité">Comptabilité</option>
                        <option value="Communication">Communication</option>
                    </select><br>
                    <input type="submit" value="Ajouter" name="envoi">
                </form>
            </div>
        </div>
    </div>
</div>
