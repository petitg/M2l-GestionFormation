<?php
/**
 * Vue de la page des formations

 *
 * @author Pierre Piron
 * @package default
 */
?>
<?php if (isset($err)) { ?>
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo $err; ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-color">
                    <thead>
                    <tr bgcolor="#f0f8ff">
                        <th>Description</th>
                        <th>Date</th>
                        <th>Nombre de jours</th>
                        <th>Co&ucirc;t</th>
                        <th>Prerequis</th>
                        <th></th>
                        <?php
                        if ($_SESSION['admin'] == 1){
                            ?><th></th><?php
                        }
                        ?>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($formations as $formation){
                        if (isset($formation->nsc_frm_id)){

                        }
                        else {
                            ?>

                            <tr>
                                <td>
                                    <p><?php echo $formation->frm_contenu; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $formation->frm_date; ?></p>
                                </td>
                                <td class="td-width">
                                    <p> <?php echo $formation->frm_nbjours; ?> </p>
                                </td>
                                <td>
                                    <p> <?php echo $formation->frm_cout; ?> </p>
                                </td>
                                <td>
                                    <p> <?php echo $formation->frm_prerequis; ?> </p>
                                </td>
                                <td align="center">
                                    <a href="index.php?code=<?php echo $formation->frm_id; ?>">
                                        <button type="button">Choisir</button>
                                    </a>
                                </td>
                                <?php
                                if ($_SESSION['admin'] == 1){
                                    ?><td>
                                    <a href="index.php?edition=<?php echo $formation->frm_id; ?>">
                                        <button type="button">&Eacute;dition</button>
                                    </a>
                                    </td><?php
                                }
                                ?>
                            </tr>
                            <?php
                        }
                        }
                    ?>

                    </tbody>
                </table>
            </div>


        </div>
    </div>

