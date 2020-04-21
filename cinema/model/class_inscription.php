<?php

Class Inscription{

    private $nom;
    private $prenom;
    private $mdp;

    public function __construct($nom, $prenom, $mdp){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMdp($mdp);
    }

    public function getNom(){ return $this->nom; }
    public function getPrenom(){ return $this->prenom; }
    public function getMdp(){ return $this->mdp; }

    public function setNom($nom){
            $this->nom = $nom;
    }

    public function setPrenom($prenom){
            $this->prenom = $prenom;
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
