<?php
    session_start();
Class Manager{

    public function connexion($connexion){
        $bdd= new PDO('mysql:host=localhost;dbname=cinema_site;charset=utf8','root','');
        $reponse=$bdd->prepare('SELECT * FROM inscription WHERE nom=:nom AND mdp=:mdp');
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
        $bdd = new PDO('mysql:host=localhost;dbname=cinema_site;charset=utf8','root','');
        $req = $bdd->prepare('INSERT INTO inscription(nom, prenom, mail, mdp) VALUES(:nom, :prenom, :mail, :mdp)');
        $req->execute(array('nom'=>$ins->getNom(), 'prenom'=>$ins->getPrenom(), 'mail'=>$ins->getMail(), 'mdp'=>$ins->getMdp()));
    }

    public function reservation($reserv){
        $bdd = new PDO ('mysql:host=localhost;dbname=cinema_site;charset=utf8','root','');
        $req = $bdd->prepare('INSERT INTO reservation(nom, phone, date, heur, film) VALUES(:nom, :phone, :date, :heur, :film)');
        $req->execute(array('nom'=>$reserv->getNom(), 'phone'=>$reserv->getPhone(), 'date'=>$reserv->getDate(), 'heur'=>$reserv->getHeur, 'film'=>$reserv->getFilm()));
    }
}
?>
