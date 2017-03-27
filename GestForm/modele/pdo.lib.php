<?php
/**
 * Variable PDO de connaexion à la bdd

 *
 * @author Pierre Piron
 * @package default
 */

$pdo = new PDO('mysql:host=localhost;dbname=GestionFormation;charset=utf8', 'root', "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);