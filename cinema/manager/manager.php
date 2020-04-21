<?php

    session_start();
Class Manager{

  public function Inscription($ins){
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');
    $r = $bdd->prepare('INSERT INTO user (nom, prenom, mdp) VALUES (:nom, :prenom, :mdp)');
    $r->execute(array(
      'nom' => $ins->getNom(),
      'prenom' => $ins->getPrenom(),
      'mdp' => $ins->getMdp()
    ));
  }

  public function Connexion($con){
   $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');
   $r = $bdd->prepare('SELECT * FROM user WHERE nom = :nom AND mdp = :mdp');
   $r -> execute(array(
     'nom' => $con->getNom(),
     'mdp' => $con->getMdp()
   ));
  $donne=$r->fetch();

  if ($donne['nom'] == $con->getNom() && $donne['mdp'] == $con->getMdp()) {
    $_SESSION['id'] = $donne['id'];
    $_SESSION['nom'] = $donne['nom'];
    $_SESSION['prenom'] = $donne['prenom'];
    $_SESSION['mdp'] = $donne['mdp'];
    if ($_SESSION['id'] == 5){
      header('location: ../indexadmin.php');
    }
    else {
    header('location: ../index2.php');
    }
  }
  else {
    echo 'erreur';
  }

}

}

?>
