<?php

class Manager {

  public function Inscription($insc){
    $bdd = new PDO('mysql:host=localhost;dbname=cinema_site;charset=utf8','root','');
    $r = $bdd->prepare('INSERT INTO inscription (nom, prenom, age, mdp) VALUES (:nom, :prenom, :age, :mdp)');
    $r->execute(array(
      'nom' => $insc->getNom(),
      'prenom' => $insc->getPrenom(),
      'age' => $insc->getAge(),
      'mdp' => $insc->getMdp()
    ));
  }


public function Connexion($con){
     $bdd = new PDO('mysql:host=localhost;dbname=cinema_site;charset=utf8','root','');
     $r = $bdd->prepare('SELECT * FROM inscription WHERE nom = :nom AND mdp = :mdp');
     $r -> execute(array(
       'nom' => $con->getNom(),
       'mdp' => $con->getMdp()
     ));
    $donne=$r->fetch();

    if ($donne['nom'] == $con->getNom() && $donne['mdp'] == $con->getMdp()) {
      $_SESSION['id'] = $donne['id'];
      $_SESSION['nom'] = $donne['nom'];
      $_SESSION['prenom'] = $donne['prenom'];
      $_SESSION['age'] = $donne['age'];
      $_SESSION['mdp'] = $donne['mdp'];
      if ($_SESSION['id'] == 10){
        header('location: ../accueiladmin.php');
      }
      else {
      header('location: ../form/indexconnexion.php');
      }
    }
    else {
      echo 'erreur';
    }

 }

 public function Reservation($res){
    $bdd = new PDO('mysql:host=localhost;dbname=cinema_site;charset=utf8','root','');
    $r = $bdd->prepare('INSERT INTO reservation (nom, date, heur, film) VALUES (:nom, :date, :heur, :film)');
    $r->execute(array(
      'nom' => $res->getNom(),
      'date' => $res->getDate(),
      'heur' => $res->getHeur(),
      'film' => $res->getFilm()
    ));
 }

 public function Contact($con){
    $bdd = new PDO('mysql:host=localhost;dbname=cinema_site;charset=utf8','root','');
    $r = $bdd->prepare('INSERT INTO contact (msg, nom, prenom) VALUES (:message, :nom, :prenom)');
    $r->execute(array(
      'msg' => $con->getMsg(),
      'nom' => $con->getNom(),
      'prenom' => $con->getPrenom()
    ));
 }

}

 ?>
