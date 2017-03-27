<?php
/**
 * Fichier contenant la barre de naivigation

 * Appelé sur toutes les pages excepté la page de connexion
 * @author Pierre Piron
 * @package default
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="inc/css/bootstrap.min.css" rel="stylesheet">
	<link href="inc/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="inc/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Gestion formation</title>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
	<div class="navbar-header">
	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="index.php">Gestion Formation</a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
	  <ul class="nav navbar-nav">
		<li><a href="index.php">Accueil</a></li>
		<li><a href="index.php?formation">Formation</a></li>
		<li><a href="index.php?historique">Historique</a></li>
		<?php
		  if ($_SESSION['admin'] == 1){
			?>
		  	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Administration<span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="index.php?equipe">Mon &eacute;quipe</a></li>
				<li><a href="index.php?ajoutemploye">Ajouter un employé</a></li>
			  	<li><a href="index.php?ajoutformation">Ajouter une formation</a></li>
			 	<li><a href="index.php?maintenance">Maintenance</a></li>
			  </ul>
			</li>
			<?php
		  }
		?>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="index.php?deco"><span class="fa fa-user-times"></span> Déconnexion</a></li>
	  </ul>
	</div>
  </div>
</nav>

<div class="container-fluid info">
    <div class="row">
        <div class="col-md-4 col-md-offset-2 col-xs-8 col-xs-offset-2">
            <p class="p-header">
                <?php
                    echo "Utilisateur connecté : ".$_SESSION['nom'];
                ?>
            </p>
        </div>
        <div class="col-md-4 col-md-offset-2 col-xs-8 col-xs-offset-2">
            <p class="p-header">
                <?php
                echo "Credits restants : ".$_SESSION['credit'];
                ?>
            </p>
        </div>
    </div>
</div>
