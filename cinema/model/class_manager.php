<?php

Class Manager{

public function inscription($user){
        $bdd = new PDO('mysql:host=localhost;dbname=projet_cinema;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO inscription(nom, prenom, mail, mdp) VALUES(:nom, :prenom, :mail, :mdp)');
        $req->execute(array('nom'=>$user->getNom(), 'prenom'=>$user->getPrenom(), 'mail'=>$user->getMail(), 'mdp'=>$user->getmdp()));
  }
}
?>
