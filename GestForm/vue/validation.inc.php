<?php
/**
 * Vue de la page de validation des formations de l'employe choisi

 *
 * @author Pierre Piron
 * @package default
 */
?>

<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-color">
                <thead>
                <tr bgcolor="#f0f8ff">
                    <th>Description</th>
                    <th>Date</th>
                    <th>Duree</th>
                    <th>Nombre de jours</th>
                    <th>Co&ucirc;t</th>
                    <th>Prerequis</th>
                    <th>Accepter</th>
                    <th>Refuser</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($formations as $formation) {
                    if (isset($formation->nsc_frm_id)){
                        ?>

                        <tr>
                            <td>
                                <p><?php echo $formation->frm_contenu; ?></p>
                            </td>
                            <td>
                                <p><?php echo $formation->nsc_frm_id; ?></p>
                            </td>
                            <td>
                                <p><?php echo $formation->frm_duree. ' heures'; ?></p>
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
                            <td>
                                <a href="index.php?validation&nom=<?php echo $formation->nsc_mpl_login; ?>&a=<?php echo $formation->nsc_frm_id; ?>" target="_self">
                                    <button type="button">Accepter</button>
                                </a>
                            </td>
                            <td>
                                <a href="index.php?validation&nom=<?php echo $formation->nsc_mpl_login; ?>&f=<?php echo $formation->nsc_frm_id; ?>" target="_self">
                                    <button type="button">refuser</button>
                                </a>
                            </td>
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