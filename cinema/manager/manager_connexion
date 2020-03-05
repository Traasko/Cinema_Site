<?php
    session_start();
Class Manager{

    public function connexion($connexion){
        $bdd= new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
        $reponse=$bdd->prepare('SELECT * FROM ins_rest WHERE nom=:nom AND mdp=:mdp');
        $reponse->execute(array(
        'nom'=>$connexion->getMail(),
        'mdp'=>$connexion->getMdp()));
        $donne=$reponse->fetch();

        if ($donne['nom'] == $connexion->getMail() && $donne['mdp'] == $connexion ->getMdp()){
            $_SESSION['id'] = $donne['id'];
            $_SESSION['nom'] = $donne['nom'];
            $_SESSION['prenom'] = $donne['prenom'];
            $_SESSION['mail'] = $donne['mail'];
            $_SESSION['mdp'] = $donne['mdp'];
            header('location: ../index.php');
        }
        else{
            echo 'Vous n\'êtes pas connecter';
        }
    }

    public function inscription($ins){
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
        $req = $bdd->prepare('INSERT INTO ins_rest(nom, prenom, mail, mdp) VALUES(:nom, :prenom, :mail, :mdp)');
        $req->execute(array('nom'=>$ins->getNom(), 'prenom'=>$ins->getPrenom(), 'mail'=>$ins->getMail(), 'mdp'=>$ins->getMdp()));
    }

    public function reservation($reserv){
        $bdd = new PDO ('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
        $req = $bdd->prepare('INSERT INTO reservation(nom, prenom, phone, date, heur) VALUES(:nom, :prenom, :phone, :date, :heur)');
        $req->execute(array('nom'=>$reserv->getNom(), 'prenom'=>$reserv->getPrenom(), 'phone'=>$reserv->getPhone(), 'date'=>$reserv->getDate(), 'heur'=>$reserv->getHeur()));
    }
}
?>
