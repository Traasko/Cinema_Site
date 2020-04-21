<?php

class Manager {

  public function Inscription($ins){
    $bdd = new PDO('mysql:host=localhost;dbname=projetcinema;charset=utf8','root','');
    $r = $bdd->prepare('INSERT INTO inscription (nom, prenom, age, mdp) VALUES (:nom, :prenom, :age, :mdp)');
    $r->execute(array(
      'nom' => $ins->getNom(),
      'prenom' => $ins->getPrenom(),
      'age' => $ins->getAge(),
      'mdp' => $ins->getMdp()
    ));
  }



}

 ?>
