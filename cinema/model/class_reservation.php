<?php

class Reservation{

  private $nom;
  private $phone;
  private $date;
  private $heur;
  private $film;

  public function __construct($nom, $phone, $date, $heur, $film){
      $this->setNom($nom);
      $this->setPhone($phone);
      $this->setDate($date);
      $this->setHeur($heur);
      $this->setfilm($film);
    }

    public function getNom(){ return $this->nom; }
    public function getPhone(){ return $this->phone; }
    public function getDate(){ return $this->date; }
    public function getHeur(){ return $this->heur; }
    public function getfilm(){ return $this->film; }

    public function setNom($nom){
        $this->nom = $nom;
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
    public function setfilm($film){
        $this->film = $film;
    }
}
 ?>
