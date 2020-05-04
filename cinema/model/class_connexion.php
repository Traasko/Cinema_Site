<?php

class Connexion{

  private $mail;
  private $mdp;

  public function __construct($mail, $mdp){
      $this->setMail($mail);
      $this->setMdp($mdp);
    }

    public function getMail(){ return $this->mail; }
    public function getMdp(){ return $this->mdp; }

    public function setMail($mail){
        $this->mail = $mail;
    }
    public function setMdp($mdp){
        $this->mdp = $mdp;
    }

 ?>
