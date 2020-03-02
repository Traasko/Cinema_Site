<?php

Class Inscription{

    private $nom;
    private $prenom;
    private $mail;
    private $mdp;

    public function __construct($nom, $prenom, $mail, $mdp){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMail($mail);
        $this->setMdp($mdp);
    }

    public function getNom(){ return $this->nom; }
    public function getPrenom(){ return $this->prenom; }
    public function getMail(){ return $this->mail; }
    public function getMdp(){ return $this->mdp; }

    public function setNom($nom){
            $this->nom = $nom;
    }

    public function setPrenom($prenom){
            $this->prenom = $prenom;
    }

    public function setMail($mail){
            $this->mail = $mail;
    }

    public function setMdp($mdp){
        if($mdp){
            $this->mdp = sha1($mdp);
        }else{
            echo 'Les Mdp ne correspondent pas !';
        }
    }

}

?>
