<?php
 require_once './lib/File.php'; 
 require_once File::build_path(['model','ModelUtilisateur.php']);

 class ControllerUtilisateur{

    protected static $object = 'utilisateur';
 
    public static function readAll(){
        $tab_u = ModelUtilisateur::selectAll(); //appel au modèle pour gerer la BD
        $controller = static::$object;
        $view='list';
        $pagetitle='Liste des Utilisateurs';
        require File::build_path(['view','utilisateur','view.php']); //redirige vers la vue
    }

    public static function read($login){
        $tab_voit = ModelUtilisateur::select($login);
        $controller = static::$object;
        $view='detail';
        $pagetitle='Info Utilisateur ' . $login;
        require File::build_path(['view','utilisateur','view.php']);
    }

    public static function deleted($login){
        ModelUtilisateur::delete($login);
        $tab_u = ModelUtilisateur::selectAll(); //appel au modèle pour gerer la BD
        $controller = static::$object;
        $view='deleted';
        $pagetitle='Utilisateur ' . $login . ' Supprimer !';
        require File::build_path(['view','utilisateur','view.php']);
    }

    public static function create(){
        $controller = static::$object;
        $view='update';
        $pagetitle='Création Utilisateur';
        require File::build_path(['view','utilisateur','view.php']);
    }

    public static function update(){
        $controller = static::$object;
        $view='update';
        $pagetitle='Modification Utilisateur';
        require File::build_path(['view','utilisateur','view.php']);
    }

    public static function created($i,$m,$c){
        ModelUtilisateur::Save($i, $m, $c);
        $tab_v = ModelUtilisateur::selectAll(); //appel au modèle pour gerer la BD
        $controller = static::$object;
        $view='created';
        $pagetitle='utilisateur '. $i . ' Créer !';
        require File::build_path(['view','utilisateur','view.php']);
    }

    public static function updated($i,$m,$c){
        ModelUtilisateur::update($i, $m, $c);
        $tab_v = ModelUtilisateur::selectAll(); //appel au modèle pour gerer la BD
        $controller = static::$object;
        $view='updated';
        $pagetitle='utilisateur '. $i . ' Mis à jour !';
        require File::build_path(['view','utilisateur','view.php']);
    }


}
?>