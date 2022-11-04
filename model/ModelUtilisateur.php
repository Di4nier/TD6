<?php

  require_once File::build_path(['model','Model.php']);

    class ModelUtilisateur extends Model {
    
    protected static $object = "utilisateur";
    protected static $primary = 'login';


    private $login;
    private $nom;
    private $prenom;
        
    // un getter      
    public function getLogin() {
        return $this->login;  
    }
        
    // un setter 
    public function setLogin($login2) {
        $this->login = $login2;
    }

    // un getter      
    public function getNom() {
        return $this->nom;  
    }
    
    // un setter 
    public function setNom($nom2) {
        $this->nom = $nom2;
    }

    // un getter      
    public function getPrenom() {
        return $this->prenom;  
    }
    
    // un setter 
    public function setPrenom($prenom2) {
    if(strlen($prenom) < 8){
        $this->prenom = $prenom2;
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
}


?>