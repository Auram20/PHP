<?php
  class Personne {
    private $prenom;
    private $nom;
    private $age;
    private $ville;

    public function __construct($prenom, $nom, $age, $ville) {
      $this->set("prenom", $prenom);
      $this->set("nom", $nom);
      $this->set("age", $age);
      $this->set("ville", $ville);
    }

    private function set($nomAttribut, $valeur) {
      $this->$nomAttribut = ucwords(strtolower($valeur), "\t\r\n\f\v- ");
    }

    public function get($nomAttribut) {
      return $this->$nomAttribut;
    }

    public function affiche() {
      if(date('a') == 'am') {
        echo "Bonjoure, ";
      } else {
        echo "Bonsoire, ";
      }

      echo "je m'appelle {$this->get('prenom')} {$this->get('nom')}, je viens de {$this->get('ville')} et j'ai {$this->get('age')} an(s).";
    }
  }


 // En dehors de la classe, on définit un objet du coup et on apelle donc la méthode affiche. 

 $personne = new Personne("Nicolas","Cusumano","64","champssurmarne");
 $personne->affiche();


 ?>

