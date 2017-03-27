<?php
/**
 * Vue de la page historique des formations

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
                        <th>Nombre de jours</th>
                        <th>Co&ucirc;t</th>
                        <th>Prerequis</th>
                        <th>Etat</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($formations as $formation) {
                        if (!isset($formation->nsc_frm_id)){
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
                                <td>
                                     <?php
                                            switch ($formation->nsc_etat){
                                                case 1 :
                                                    ?><i class='fa fa-hourglass-half' aria-hidden='true'><?php
                                                break;
                                                case 2 :
                                                    ?><i class='fa fa-calendar-check-o' aria-hidden='true'><?php
                                                break;
                                                case 3 :
                                                    ?><i class='fa fa-times' aria-hidden='true'><?php
                                                break;
                                                default :
                                                    ?><i class='fa fa-check' aria-hidden='true'></i><?php
                                            }?>
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
