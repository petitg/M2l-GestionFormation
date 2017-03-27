<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 05/01/2017
 * Time: 14:21
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
        <div class="col-md-6 col-md-offset-3">
            <div class="jumbotron">
                <form action="index.php?formation=<?php echo $id;?>" method="post" class="edition">
                    <label for="contenu">Contenu Formation : </label><input type="text" name="contenu" id="contenu" value="<?php echo $formation->frm_contenu;?>"><br><br>
                    <label for="date">Date : </label><input type="datetime" name="date" id="date" value="<?php echo $formation->frm_date;?>"><br><br>
                    <label for="nbJours">Nombre de jours pour effectuer la formation : </label><input type="text" name="nbJours" value="<?php echo $formation->frm_nbjours;?>"><br><br>
                    <label for="credit">Cout en credit : </label><input type="text" name="credit" id="credit" value="<?php echo $formation->frm_cout;?>"><br><br>
                    <label for="prerequis">Prerequis : </label><input type="text" name="prerequis" id="prerequis" value="<?php echo $formation->frm_prerequis;?>"><br><br>

                    <input type="submit" value="Ajouter" name="envoi">
                </form>
            </div>
        </div>
    </div>
</div>
