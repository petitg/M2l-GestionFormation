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
                    <div class="form-group">
                        <label for="nom">Nom de l'employé : </label><input type="text" name="nom" id="nom"><br>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom de l'employé : </label><input type="text" name="prenom" id="prenom"><br>
                    </div>
                    <div class="form-group">
                        <label for="login">Login de l'employé (1ère lettre du prenom + nom en minuscule : </label><input type="text" name="login" id="login"><br>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe : </label><input type="password" name="password" id="password"><br>
                    </div>
                    <div class="form-group">
                        <label for="fonction">Fonction : </label><input type="text" name="fonction" id="fonction"><br>
                    </div>
                    <div class="form-group">
                        <label for="equipe">Equipe : </label><select name="equipe" id="equipe">
                            <option value="Ressource Humaine">Ressource Humaine</option>
                            <option value="Cafétaria">Cafétaria</option>
                            <option value="Comptabilité">Comptabilité</option>
                            <option value="Communication">Communication</option>
                        </select><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Ajouter" name="envoi">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
