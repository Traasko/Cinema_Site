<?php

class Reservation{

  private $nom;
  private $mail;
  private $phone;
  private $date;
  private $heur;
  private $film;

  public function __construct($nom, $mail, $phone, $date, $heur, $film){
      $this->setNom($nom);
      $this->setMail($mail);
      $this->setPhone($phone);
      $this->setDate($date);
      $this->setHeur($heur);
      $this->setfilm($film);
    }

    public function getNom(){ return $this->nom; }
    public function getMail(){ return $this->mail; }
    public function getPhone(){ return $this->phone; }
    public function getDate(){ return $this->date; }
    public function getHeur(){ return $this->heur; }
    public function getfilm(){ return $this->film; }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setMail($mail){
        $this->mail = $mail;
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
