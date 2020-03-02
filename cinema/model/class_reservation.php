<?php

class Reservation{

  private $nom;
  private $prenom;
  private $phone;
  private $date;
  private $heur;

  public function __construct($nom, $prenom, $phone, $date, $heur){
      $this->setNom($nom);
      $this->setPrenom($prenom);
      $this->setPhone($phone);
      $this->setDate($date);
      $this->setHeur($heur);
    }

    public function getNom(){ return $this->nom; }
    public function getPrenom(){ return $this->prenom; }
    public function getPhone(){ return $this->phone; }
    public function getDate(){ return $this->date; }
    public function getHeur(){ return $this->heur; }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function setHeur($heur){
        $this->heur = $heur;
    }
}
 ?>
