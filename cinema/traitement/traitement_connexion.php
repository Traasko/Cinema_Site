<?php

require('../manager/manager_connexion.php');
require('../model/class_connexion.php');

$user = new Connexion($_POST['mail'], $_POST['mdp']);
$manager = new Manager();
$manager->connexion($user);

?>
