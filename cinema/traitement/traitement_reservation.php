<?php

require('../manager/manager_connexion.php');
require('../model/class_reservation.php');

$reservation = new Reservation($_POST['nom'], $_POST['phone'], $_POST['date'], $_POST['heur'], $_POST['film']);
$manager = new Manager();
$manager->reservation($reservation);

var_dump($reservation);
?>
