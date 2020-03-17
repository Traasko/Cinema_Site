<?php

require('../manager/manager_connexion.php');
require('../model/class_inscription.php');

$inscription = new Inscription($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['mdp']);
$manager = new Manager();
$manager -> inscription($inscription);

var_dump($inscription);
?>
