<?php

require('../manager/manager_connexion.php');
require('../model/class_reservation.php');

$reservation = new Reservation($_POST['nom'], $_POST['prenom'], $_POST['phone'], $_POST['date'], $_POST['heur']);
$manager = new Manager();
$manager->reservation($reservation);

var_dump($reservation);
?>
