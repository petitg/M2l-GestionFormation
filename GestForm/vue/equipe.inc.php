<?php
/**
 * Vue de la page equipe
 *
 * User: Pierre
 */
    ?>
    <?php
    foreach ($employes as $employe) {
        if ($employe->mpl_login != $_SESSION['login']) {
            ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3"
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-color">
                            <tr bgcolor="#f0f8ff">
                                <th class="col-md-1">Nom</th>
                                <th class="col-md-1">Prenom</th>
                                <th class="col-md-4">Formations en attende de validation</th>
                            </tr>
                            <tr>
                                <td><?php echo $employe->mpl_nom; ?></td>
                                <td><?php echo $employe->mpl_prenom; ?></td>
                                <td><a href="index.php?validation&nom=<?php echo $employe->mpl_login; ?>" target="_self">
                                        <button type="button">Voir les formation en attente</button>
                                    </a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            </div>

            <?php
        }
    }
?>
