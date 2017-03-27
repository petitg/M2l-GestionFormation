<?php
/**
 * Vue de la page de connexion

 *
 * @author Pierre Piron
 * @package default
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="inc/css/bootstrap.min.css" rel="stylesheet">

    <script src="inc/js/bootstrap.js"></script>
    <title>Gestion Formation : Connexion</title>
</head>
<body>

<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Gestion Formation</a>
            </div>
        </div>
    </nav>
</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-2 col-md-8" style=" margin-top: 100px">
            <div class="jumbotron">
                <h1>Gestion Formation</h1>
                <p>Connectez-vous pour accéder à l'interface de gestion des formations</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="jumbotron">
                <form method="post" action="index.php">
                    <div align="center" class="form-group">
                        <label for="login">Login : </label><input type="text" name="login" placeholder="identifiant" style="position: absolute">
                    </div>
                    <div align="center" class="form-group">
                        <label for="password">Mot de passe : </label><input type="password" name="password" placeholder="mot de passe" style="position: absolute;">
                    </div>
                    <div align="center">
                        <button class="btn-u" type="submit" value="envoy">Connexion</button>
                    </div>
                    <?php
                    if (isset($erreur)){
                        echo "<br><div align='center'><p>$erreur</p></div>";
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>