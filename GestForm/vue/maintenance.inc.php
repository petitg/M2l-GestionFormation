<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 17/01/2017
 * Time: 09:33

 */
?>
<div class="row">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <H3>Maintenance du site de gestion des formations</H3>
                <?php
                    if (isset($mess)) {
                        ?><p><?php echo $mess;?></p><?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <p>Archiver les formations passées</p>
                <a href="index.php?maintenance=1" target="_self"><button>Archiver</button></a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <p>Supprimer un employé</p>
                <a href="index.php?suppression" target="_self"><button>Supprimer</button></a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">

            </div>
        </div>
    </div>
</div>
