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
}

 ?>
