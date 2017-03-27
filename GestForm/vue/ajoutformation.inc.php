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
                <form action="index.php?ajoutformation" method="post">
                    <div class="form-group">
                        <label for="contenu">Contenu de la formation : </label><input type="text" name="contenu" id="contenu"><br>
                    </div>
                    <div class="form-group">
                        <label for="date">date de la formation : </label><input type="date" name="date" id="date"><br>
                    </div>
                    <div class="form-group">
                        <label for="nbjours">durée de la formation (en nombre de jours) : </label><input type="number" name="nbjours" id="nbjours" min="1" max="15"><br>
                    </div>
                    <div class="form-group">
                        <label for="prerequis">prerequis : </label><input type="text" name="prerequis" id="prerequis"><br>
                    </div>
                    <div class="form-group">
                        <label for="cout">Coût en crédit : </label><input type="text" name="cout" id="cout"><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Ajouter" name="envoi">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
