<?php
require_once File::build_path(['controller','ControllerVoiture.php']);
require_once File::build_path(['controller','ControllerUtilisateur.php']);

// On recupère l'action passée dans l'URL

if(empty($_GET["controller"])){

    $controller = "Voiture";
    $controller_class = "Controller" . ucfirst($controller);

    if(empty($_GET["action"])){

        $action = "readall";
        ControllerVoiture::readAll();
    
    }else{
        $action = $_GET["action"];
    
        switch($action){
    
            case "readall":
                ControllerVoiture::readAll();
                break;
            case "read":
                $immat = $_GET['immat'];
                ControllerVoiture::read($immat);
                break;
            case "create":
                ControllerVoiture::create();
                break;
            case "deleted":
                $immat = $_GET['immat'];
                ControllerVoiture::deleted($immat);
                break;
            case "update":
                ControllerVoiture::update();
                break;
            case "updated":
                $marque = $_GET['marque'];
                $couleur = $_GET['couleur'];
                $immat = $_GET['immat'];
                ControllerVoiture::updated($immat,$marque,$couleur);
                break;
            case "created":
                $marque = $_GET['marque'];
                $couleur = $_GET['couleur'];
                $immat = $_GET['immat'];
                ControllerVoiture::created($immat,$marque,$couleur);
                break;
            default:
                ControllerVoiture::error();
        }
    }

}else{

    $controller = $_GET["controller"];
    $controller_class = "Controller" . ucfirst($controller);

    if(!class_exists($controller_class)){
        ControllerVoiture::error();
    }

    if(empty($_GET["action"])){

        $action = "readall";
        ControllerUtilisateur::readAll();
    
    }else{
        $action = $_GET["action"];
    
        switch($action){
    
            case "readall":
                ControllerUtilisateur::readAll();
                break;
            case "read":
                $login = $_GET['login'];
                ControllerUtilisateur::read($login);
                break;
            case "deleted":
                $login = $_GET['login'];
                ControllerUtilisateur::deleted($login);
                break;
            case "create":
                ControllerUtilisateur::create();
                break;
            case "update":
                ControllerUtilisateur::update();
                break;
        }
    }



   

}



?>