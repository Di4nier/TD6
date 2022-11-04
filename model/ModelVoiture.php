<?php

  require_once File::build_path(['model','Model.php']);

class ModelVoiture extends Model {

  protected static $object = "voiture";
  protected static $primary = 'immatriculation';
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  // un getter      
  public function getCouleur() {
    return $this->couleur;  
}
  
// un setter 
public function setCouleur($couleur2) {
    $this->couleur = $couleur2;
}

// un getter      
public function getImmatriculation() {
    return $this->immatriculation;  
}
  
// un setter 
public function setImmatriculation($immatriculation2) {
  if(strlen($immatriculation) < 8){
    $this->immatriculation = $immatriculation2;
  }
}
      
  // un constructeur
  public function __construct($m = NULL, $c = NULL, $i = NULL)  {
    if(!is_null($m) && !is_null($c) && !is_null($i)){
      $this->marque = $m;
      $this->couleur = $c;
      $this->immatriculation = $i;
    }
   
  } 
  
  // une methode d'affichage.
  // public function afficher() {
  //   echo $this->getMarque(); 
  //   echo "<br>";
  //   echo $this->getCouleur();
  //   echo "<br>";
  //   echo $this->getImmatriculation();
  // }

  static public function update($i,$m,$c)
  {

      $sql = "UPDATE voiture SET immatriculation= :tag1, marque= :tag2, couleur= :tag3 WHERE immatriculation= :tag1;";
      $prep = Model::$pdo->prepare($sql);
      $values = array(
        "tag1" => $i,
        "tag2" => $m,
        "tag3" => $c,
      );
     
      $prep->execute($values);
  }

  static public function Save($i, $m, $c)
  {
      $sql = "INSERT INTO voiture(Immatriculation, Marque, Couleur) VALUES(:tag1, :tag2, :tag3);";
      $prep = Model::$pdo->prepare($sql);
      $values = array(
          "tag1" => $i,
          "tag2" => $m,
          "tag3" => $c,
      );
      $prep->execute($values);
  }


}

?>
